let CartComponent = function () {
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

        // this.toggle();

    };

    this.clearItems = function () {
        this.componentTable.empty();
        this.items = [];
    };

    this.show = function () {
        this.component.toggle();
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

    this.setProductUrl = function (product_url) {
        this.product_url = product_url;
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

   this.update = function () {
       let count = 0;
       cartComponent.items.forEach(function (item) {
           count += item.quantity;
       });

       this.count.html(`${count} items`);
       this.price.html(`$${cartComponent.total_price}`);
   }

   this.updateStaticCart = function (count, total_price) {
       this.count.html(`${count} items`);
       this.price.html(`$${total_price}`);
   }
};


