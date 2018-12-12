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

let CartComponent = function () {

    this.increaseButton = $(`.modal-cart tr.cart_item .quantity .increase-button`);

    this.decreaseButton = $(`.modal-cart tr.cart_item .quantity .decrease-button`);

    this.removeButton = $('.modal-cart .product-remove .static-remove');
    this.items = [];

    this.close = $('.close-cart-modal');
    this.component = $('.modal-cart');
    this.componentTable = $('.modal-cart .shop_table.shop_table_responsive.cart tbody');
    
    this.visible = false;

    this.total_price = 0;

    this.toggle = function () {
        this.component.toggle();
    };

    this.total = $('.order-total .total-price');

    this.addItem = function (item) {
        this.items.push(item);
        this.componentTable.append(item.block());
    };

    this.clearItems = function () {
        this.componentTable.empty();
        this.items = [];
    };

    this.show = function () {
        this.component.toggle();
    }
};

let CartItemSpans = function () {
    this.quantitySpan = function (id){
        return $('#item_' + id + ' .product-quantity .quantity-span');
    };

    this.productTotalSpan = function (id){
        return $('#item_' + id + ' .product-total-price');
    };
    
    this.cartTotal = function () {
        return $('.cart_totals .total-price');
    };

    this.removeItem = function (id) {
        return $('#item_' + id);
    }
};

let OrderItemSpans = function () {
    this.quantitySpan = function (id){
        return $('table.order-cart #item_' + id + ' .product-quantity .quantity-span');
    };

    this.productTotalSpan = function (id){
        return $('table.order-cart #item_' + id + ' .product-total-price');
    };

    this.cartTotal = function () {
        return $('.cart_totals .cart-static-total-price')
    };

    this.removeItem = function (id) {
        return $('table.order-cart #item_' + id);
    }
};

let CartItem = function () {
    
    
    this.item_id = '';

    this.product_url = '';

    this.image = '';

    this.name = '';

    this.dimension = '';

    this.size = '';

    this.pick_price = '';

    this.product_price = '';

    this.quantity = '';

    this.product_total_price = '';

    this.block = function () {
        return `
                        <tr class="cart_item" data-item-id="${this.item_id}" id="item_${this.item_id}">
                            <td class="product-remove">
                                <div class="remove remove-item" style="cursor: pointer;" data-item_id="${this.item_id}">&times;</div>
                            </td>
                            <td class="product-thumbnail">
                                <a href="${this.product_url}">
                                    <img width="180" height="180" src="${this.image}" alt=""/>
                                </a>
                            </td>
                            <td class="product-name" data-title="Product">
                                <a href="${this.product_url}">${this.name}</a>
                                <dl class="variation">
                                    <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                        Pick Size ( <span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">&#036;</span><span class="pick-price">${this.pick_price}</span></span> ):
                                    </dt>
                                    <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                        <p>${this.size} ${this.dimension}</p>
                                    </dd>
                                </dl>
                            </td>
                            <td class="product-price" data-title="Price">
                                <span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#36;</span><span class="product-price">${this.product_price}</span></span>
                            </td>
                            <td class="product-quantity" data-title="Quantity">
                                <div class="qty-btn">
                                    <label>Quantity</label>
                                    <div class="quantity" style="display: flex; flex-direction: row; align-items: center">
                                    <span style="margin: 0 5px; cursor: pointer; font-size: 1.25em;" class="decrease-button" data-item_id="${this.item_id}" data-quantity="1">-</span>    
                                       <span class="quantity-span" style="padding: 5px; width: 3em; height: auto; font-weight: normal; text-align: center;">${this.quantity}</span>
                                    <span style="margin: 0 5px; cursor: pointer; font-size: 1.25em;" class="increase-button" data-item_id="${this.item_id}" data-quantity="1">+</span>

                                    </div>
                                </div>
                            </td>
                            <td class="product-subtotal" data-title="Total">
                                <span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#36;</span><span class="product-total-price">${this.product_total_price}</span></span>
                            </td>
                        </tr>
                        
                 `;
    };

    this.setImage = function (image) {
        this.image = image;
    };

    this.setName = function (name) {
        this.name = name;
    };

    this.setPickPrice = function (price) {
        this.pick_price = price;
    };

    this.setProductPrice = function (price) {
        this.product_price = price;
    };

    this.setQuantity = function (quantity) {
        this.quantity = quantity;
    };

    this.setProductTotalPrice = function (product_total_price) {
        this.product_total_price = product_total_price;
    };

    this.setSize = function (size) {
        this.size = size;
    };

    this.setDimension = function (dimension) {
        this.dimension = dimension;
    }
};

let HeaderCartComponent = function () {
   this.count = $('.site-header-cart-v2 .sub-menu .count');

   this.price = $('.site-header-cart-v2 .sub-menu .amount');

   this.update = function (count, total_price) {
       this.count.html(`${count} items`);
       this.price.html(`$${total_price}`);
   };

   this.updateStaticCart = function (count, total_price) {
       this.count.html(`${count} items`);
       this.price.html(`$${total_price}`);
   }
};

let OrderCartItemComponent = function () {
    this.component = $('table.order-cart');

    this.increaseButton = $(`table.order-cart tr.cart_item .quantity .increase-button`);

    this.decreaseButton = $(`table.order-cart tr.cart_item .quantity .decrease-button`);

    this.removeButton = $('table.order-cart .product-remove .static-remove');

    this.increaseRequest = function (id, quantity) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/increase",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: id,
                quantity: quantity
            }
        });
        request.done(function (msg) {
            $('table.order-cart #item_' + id + ' .product-quantity .quantity-span').html(msg.quantity);
            $('table.order-cart #item_' + id + ' .product-total-price').html(msg.price);
            $('.cart_totals .cart-static-total-price').html(msg.total);
            headerCart.updateStaticCart(msg.count, msg.total);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    };

    this.decreaseRequest = function (id, quantity) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/decrease",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: id,
                quantity: quantity
            }
        });
        request.done(function (msg) {
            if (msg.quantity == 0) {
                $('table.order-cart #item_' + id).remove();
                $('.cart_totals .cart-static-total-price').html(msg.total);
                headerCart.updateStaticCart(msg.count, msg.total);

            } else {
                $('table.order-cart #item_' + id + ' .product-quantity .quantity-span').html(msg.quantity);
                $('table.order-cart #item_' + id + ' .product-total-price').html(msg.price);
                $('.cart_totals .cart-static-total-price').html(msg.total);
                headerCart.updateStaticCart(msg.count, msg.total);
            }

        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    };

    this.removeRequest = function (id) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/remove",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: id
            }
        });
        request.done(function (msg) {
            if (msg.quantity == 0) {
                $('table.order-cart #item_' + id).remove();
                $('.cart_totals .cart-static-total-price').html(msg.total);
                headerCart.updateStaticCart(msg.count, msg.total);

            } else {
                $('table.order-cart #item_' + id + ' .product-quantity .quantity-span').html(msg.quantity);
                $('table.order-cart #item_' + id + ' .product-total-price').html(msg.price);
                $('.cart_totals .cart-static-total-price').html(msg.total);
                headerCart.updateStaticCart(msg.count, msg.total);

            }
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    };
};

let Requests = function () {
    this.addRequest = function (itemIds) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/add",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: itemIds
            }
        });
        request.done(function (msg) {
            cartComponent.clearItems();
            console.log(msg.items);
            $.each(msg.items, function (i, item) {
                
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
    };

    this.increaseRequest = function (id, quantity, spans) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/increase",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: id,
                quantity: quantity
            }
        });
        request.done(function (msg) {
            spans.quantitySpan(id).html(msg.quantity);
            spans.productTotalSpan(id).html(msg.price);
            spans.cartTotal(id).html(msg.total);
            headerCart.update(msg.count, msg.total);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    };

    this.decreaseRequest = function (id, quantity, spans) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/decrease",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: id,
                quantity: quantity
            }
        });
        request.done(function (msg) {
            if (msg.quantity == 0) {
                spans.removeItem(id).remove();
                spans.cartTotal(id).html(msg.total);
            } else {
                spans.quantitySpan(id).html(msg.quantity);
                spans.productTotalSpan(id).html(msg.price);
                spans.cartTotal(id).html(msg.total);
            }
            headerCart.update(msg.count, msg.total);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    };

    this.removeRequest = function (id, spans) {
        let request = $.ajax({
            url: "/pizza/public/api/cart/remove",
            method: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            data: {
                id: id
            }
        });
        request.done(function (msg) {
            if (msg.quantity == 0) {
                spans.removeItem(id).remove();
                spans.cartTotal(id).html(msg.total);
            } else {
                spans.quantitySpan(id).html(msg.quantity);
                spans.productTotalSpan(id).html(msg.price);
                spans.cartTotal(id).html(msg.total);
            }
            headerCart.update(msg.count, msg.total);
        });

        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    }
};

let orderCartItemComponent = new OrderCartItemComponent();

let cartSpans = new CartItemSpans();

let orderSpans = new OrderItemSpans();

let requests = new Requests();

let cartComponent = new CartComponent();

let headerCart = new HeaderCartComponent();


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

        requests.addRequest(itemIds);
    }
});


$('.close-cart-modal').on('click', function () {
    cartComponent.toggle();

});

function changeQuantity() {
    orderCartItemComponent.increaseButton.on('click', function () {
        let id = $(this).data('item_id');
        let quantity = $(this).data('quantity');
        requests.increaseRequest(id, quantity, orderSpans);
    });

    orderCartItemComponent.decreaseButton.on('click', function () {
        let id = $(this).data('item_id');
        let quantity = $(this).data('quantity');
        requests.decreaseRequest(id, quantity, orderSpans);
    });

    orderCartItemComponent.removeButton.on('click', function () {
        let id = $(this).data('item_id');
        requests.removeRequest(id, orderSpans);
    });


    $('.increase-button').on('click', function () {
        let id = $(this).data('item_id');
        let quantity = $(this).data('quantity');

        requests.increaseRequest(id, quantity, cartSpans);
    });

    $('.decrease-button').on('click', function () {
        let id = $(this).data('item_id');
        let quantity = $(this).data('quantity');
        requests.decreaseRequest(id, quantity, cartSpans);
    });

    $('.product-remove .remove-item').on('click', function () {
        let id = $(this).data('item_id');
        requests.removeRequest(id, cartSpans)
    });
}

changeQuantity();