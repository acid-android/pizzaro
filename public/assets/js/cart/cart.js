let token = $('meta[name="cart-token"]').attr('content');

let Item = function (product_id, item_id) {
    this.product_id = product_id;
    this.item_id = item_id;
    this.active = false;

    this.item_block = $('.ywapo_label_tag_position_after[data-item_id=' + this.item_id + ']');

    this.switchActive = function () {
        $(this.item_block).toggleClass('active-position');
        this.active = !this.active;
    }
};

let ItemsGroup = function (product_id, items) {
    this.product_id = product_id;
    this.items = items;
    this.addToCartButton = $('.add-button[data-product_id=' + this.product_id + ']');

    this.activeAddButton = false;

    this.switchButton = function () {
        let trigger = false;

        this.items.forEach(function (item, i, arr) {
            if (item.active) {
                trigger = true;
            }
        });

        if (trigger) {
            $(this.addToCartButton).removeClass('disabled');
            this.activeAddButton = true;
        } else {
            if (!this.addToCartButton.hasClass('disabled')) {
                $(this.addToCartButton).addClass('disabled');
                this.activeAddButton = false;
            }
        }
    };
};

let products = [];

$.each($('li.product'), function (i, val) {
    let product_id = $(val).data('product_id');
    let items = $('li.product[data-product_id=' + product_id + '] .ywapo_label_tag_position_after');
    let itemsArr = [];
    $.each(items, function (index, item) {
        let item_id = $(item).data('item_id');
        itemsArr[item_id] = new Item(product_id, item_id);
    });

    products[product_id] = new ItemsGroup(product_id, itemsArr);
});


$('.ywapo_label_tag_position_after').on('click', function () {
    let productId = $(this).data('product_id');
    let itemId = $(this).data('item_id');

    products[productId].items[itemId].switchActive();
    products[productId].switchButton();
});

$('.add-button').on('click', function () {
    let productId = $(this).data('product_id');
    let group = products[productId];

    if (group.activeAddButton) {
        let itemIds = [];
        group.items.forEach(function (item) {
            if (item.active) {
                item.switchActive();
                group.switchButton();
                itemIds.push(item.item_id);
            }
        });


        let request = $.ajax({
            url: "/pizza/public/api/cart/add",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                token: token,
                id: itemIds
            }
        });
        request.done(function (msg) {
            cartComponent.clearItems();
            console.log(msg.items);
            $.each(msg.items, function (i, item) {
                debugger;
                let cartItem = new CartItem();
                cartItem.item_id = i;
                cartItem.setName(item.name);
                cartItem.setPickPrice(item.price);
                cartItem.setProductPrice(item.price);
                cartItem.setQuantity(item.quantity);
                cartItem.setDimension(item.dimension);
                cartItem.setSize(item.size);
                cartItem.setImage(item.image);
                cartItem.setProductTotalPrice(item.quantity * item.price);
                cartComponent.addItem(cartItem);

            });
            cartComponent.total.html(msg.total);
            cartComponent.total_price = msg.total;
            cartComponent.show();
            changeQuantity();
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    }
});

let cartComponent = new CartComponent();

let headerCart = new HeaderCartComponent();

$('.close-cart-modal').on('click', function () {
   cartComponent.toggle();
    debugger;

});

function changeQuantity() {
    $('.increase-button').on('click', function () {
        let id = $(this).data('item_id');
        let quantity = $(this).data('quantity');
        let request = $.ajax({
            url: "/pizza/public/api/cart/increase",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                token: token,
                id: id,
                quantity: quantity
            }
        });
        request.done(function (msg) {
            $('#item_' + id + ' .product-quantity .quantity-span').html(msg.quantity);
            $('#item_' + id + ' .product-total-price').html(msg.price);
            $('.cart_totals .total-price').html(msg.total);

        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    });

    $('.decrease-button').on('click', function () {
        let id = $(this).data('item_id');
        let quantity = $(this).data('quantity');
        let request = $.ajax({
            url: "/pizza/public/api/cart/decrease",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                token: token,
                id: id,
                quantity: quantity
            }
        });
        request.done(function (msg) {
            if (msg.quantity == 0) {
                $('#item_' + id).remove();
                $('.cart_totals .total-price').html(msg.total);
            } else {
                $('#item_' + id + ' .product-quantity .quantity-span').html(msg.quantity);
                $('#item_' + id + ' .product-total-price').html(msg.price);
                $('.cart_totals .total-price').html(msg.total);
            }

        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    });

    $('.product-remove .remove-item').on('click', function () {
        let id = $(this).data('item_id');
        let request = $.ajax({
            url: "/pizza/public/api/cart/remove",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                token: token,
                id: id
            }
        });
        request.done(function (msg) {
            if (msg.quantity == 0) {
                $('#item_' + id).remove();
                $('.cart_totals .total-price').html(msg.total);
            } else {
                $('#item_' + id + ' .product-quantity .quantity-span').html(msg.quantity);
                $('#item_' + id + ' .product-total-price').html(msg.price);
                $('.cart_totals .total-price').html(msg.total);
            }

        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    });

    headerCart.update();
}