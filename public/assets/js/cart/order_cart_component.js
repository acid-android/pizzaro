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
               token: token,
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
               token: token,
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
               token: token,
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


let orderCartItemComponent = new OrderCartItemComponent();


orderCartItemComponent.increaseButton.on('click', function () {
    let id = $(this).data('item_id');
    let quantity = $(this).data('quantity');
    orderCartItemComponent.increaseRequest(id, quantity);

});

orderCartItemComponent.decreaseButton.on('click', function () {
    let id = $(this).data('item_id');
    let quantity = $(this).data('quantity');
    orderCartItemComponent.decreaseRequest(id, quantity);
});

orderCartItemComponent.removeButton.on('click', function () {
    let id = $(this).data('item_id');
    console.log($(this));
    orderCartItemComponent.removeRequest(id);
});