@extends('layouts.layout')

@section('body-class', 'single-product style-1 woocommerce')

@section('content')

<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                <a href="index.html">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                <a href="shop-grid-4-column.html">Pizza</a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Hawaii Vegetarian Pizza
            </nav>
        </div>
        <!-- /.woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main" >
                <div itemscope itemtype="http://schema.org/Product" id="product-50" class="post-50 product type-product status-publish has-post-thumbnail product_cat-pizza pa_food-type-veg first instock shipping-taxable purchasable product-type-simple addon-product">
                    <div class="single-product-wrapper">
                        <div class="product-images-wrapper">
                            <div class="images">
                                <a href="assets/images/single-product/1.jpg" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img width="600" height="600" src="assets/images/single-product/1.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt=""/>
                                </a>
                                <div class="thumbnails columns-4">
                                    <a href="assets/images/single-product/1.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                        <img width="180" height="180" src="assets/images/single-product/1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""/>
                                    </a>
                                    <a href="assets/images/single-product/2.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                        <img width="180" height="180" src="assets/images/single-product/2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.product-images-wrapper -->                        <!-- /.product-images-wrapper -->
                        <div class="summary entry-summary">
                            <h1 itemprop="name" class="product_title entry-title">Hawaii Vegetarian Pizza<span class="food-type-icon"><i class="po po-veggie-icon"></i></span></h1>
                            <div itemprop="description">
                                <p>Mouth watering pepperoni, cabanossi, mushroom, capsicum, black olives and stretchy mozzarella, seasoned with garlic and oregano.</p>
                            </div>
                            <!-- AddToAny BEGIN -->
                            <div class="social-share-btn a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_pinterest"></a>
                            </div>
                            <!-- AddToAny END -->
                            <form class="cart"  enctype='multipart/form-data'>
                                <div  class="yith_wapo_groups_container">
                                    <h2 class="group-name">Crust &amp; Size</h2>
                                    <div class="yith_wapo_groups_container_wrap">
                                        <div id="ywapo_value_2" class="ywapo_group_container ywapo_group_container_checkbox form-row form-row-wide " data-requested="0" data-type="checkbox" data-id="2" data-condition="">
                                            <h3><span>Select Crust</span></h3>
                                            <div class="ywapo_input_container ywapo_input_container_checkbox">
                                                <input data-typeid="2" data-price="0" data-pricetype="fixed" data-index="0" type="checkbox" name="ywapo_checkbox_2[0]" value="ywapo_value_2"  checked class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Original Crust</span></label>
                                            </div>
                                            <div class="ywapo_input_container ywapo_input_container_checkbox">
                                                <input data-typeid="2" data-price="1.2" data-pricetype="fixed" data-index="1" type="checkbox" name="ywapo_checkbox_2[1]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Thick Crust</span></label>
                                                <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>1.20</span></span>
                                            </div>
                                            <div class="ywapo_input_container ywapo_input_container_checkbox">
                                                <input data-typeid="2" data-price="0" data-pricetype="fixed" data-index="2" type="checkbox" name="ywapo_checkbox_2[2]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Thin Crust without sause</span></label>
                                            </div>
                                            <div class="ywapo_input_container ywapo_input_container_checkbox">
                                                <input data-typeid="2" data-price="2.1" data-pricetype="fixed" data-index="3" type="checkbox" name="ywapo_checkbox_2[3]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Double Crust</span></label>
                                                <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>2.10</span></span>
                                            </div>
                                        </div>
                                        <div id="ywapo_value_3" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="3" data-condition="">
                                            <h3><span>Select Size</span></h3>
                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                <input data-typeid="3" data-price="19.9" data-pricetype="fixed" data-index="0" type="radio" name="ywapo_radio_3[]" value="0" required checked class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after">
                                                    <span class="ywapo_option_label ywapo_label_position_after">22  cm</span>

                                                </label>
                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>19.90</span></span>
                                            </div>
                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                <input data-typeid="3" data-price="25.9" data-pricetype="fixed" data-index="1" type="radio" name="ywapo_radio_3[]" value="1" required  class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after">
                                                    <span class="ywapo_option_label ywapo_label_position_after">29  cm</span>

                                                </label>
                                                <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span></span>
                                            </div>
                                            <div class="ywapo_input_container ywapo_input_container_radio">
                                                <input data-typeid="3" data-price="32.9" data-pricetype="fixed" data-index="2" type="radio" name="ywapo_radio_3[]" value="2" required  class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                                <label class="ywapo_label_tag_position_after">
                                                    <span class="ywapo_option_label ywapo_label_position_after">35  cm</span>

                                                </label>
                                                <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>32.90</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="yith_wapo_group_total" data-product-price="0">
                                        <div class="yith_wapo_group_final_total">
                                            <span class="price amount"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="qty-btn">
                                    <label>Quantity</label>
                                    <div class="quantity">
                                        <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
                                    </div>
                                </div>
                                <input type="hidden" name="add-to-cart" value="50" />
                                <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                        </div>
                        <!-- .summary -->
                    </div>
                    <!-- /.single-product-wrapper -->
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="nav nav-tabs pizzaro-nav-tabs tabs wc-tabs" >
                            <li class="nav-item description_tab active">
                                <a href="#tab-description" class="active" data-toggle="tab">Description</a>
                            </li>
                            <li class="nav-item additional_information_tab">
                                <a href="#tab-additional_information" data-toggle="tab">Additional Information</a>
                            </li>
                            <li class="nav-item nutrition_tab">
                                <a href="#tab-nutrition" data-toggle="tab">Nutritions</a>
                            </li>
                            <li class="nav-item reviews_tab">
                                <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane panel active entry-content wc-tab" id="tab-description">
                                <div class="tab-description">
                                    <p>Although the legendary Double Burger really needs no introduction, please allow us... Tucked in between three soft buns are two all-beef patties, cheddar cheese, ketchup, onion, pickles and iceberg lettuce. Hesburger&#8217;s own paprika and cucumber mayonnaise add the crowning touch. Oh baby!</p>
                                    <p><strong>Ingredients:</strong> Dr. Praeger&#8217;s Black Bean Burger, Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <div class="table-responsive">
                                        <table>
                                            <tbody>
                                            <tr class="food-nutrition">
                                                <th scope="row"><span class="food-name">Pizza</span>28 cm size</th>
                                                <td><span class="value">728</span>Energy/Kj</td>
                                                <td><span class="value">1054</span>energy/kcal</td>
                                                <td><span class="value">68</span>fat/g</td>
                                                <td><span class="value">25</span>carbohydrate/g</td>
                                                <td><span class="value">48</span>sugar/g</td>
                                                <td><span class="value">548</span>protein/g</td>
                                                <td><span class="value">9</span>salt</td>
                                                <td><span class="value">15</span>lactose/g</td>
                                            </tr>
                                            <tr class="allergies-name">
                                                <th scope="row"><span class="allergies-food">Allergies</span></th>
                                                <td>Egg</td>
                                                <td>milk protein</td>
                                                <td>sesame seed</td>
                                                <td>lactose</td>
                                                <td>gluten</td>
                                                <td>mustard</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h3 class="table-version">Nutrition Informations Version 2</h3>
                                    <div class="table-responsive">
                                        <table class="table-style-02">
                                            <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Energy/Kj</th>
                                                <th>energy/kcal</th>
                                                <th>fat/g</th>
                                                <th>carbohydrate/g</th>
                                                <th>sugar/g</th>
                                                <th>protein/g</th>
                                                <th>salt</th>
                                                <th>lactose/g</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">28 cm</th>
                                                <td>728</td>
                                                <td>1054</td>
                                                <td>68</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>548</td>
                                                <td>9</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">35 cm</th>
                                                <td>923</td>
                                                <td>1352</td>
                                                <td>98</td>
                                                <td>48</td>
                                                <td>75</td>
                                                <td>846</td>
                                                <td>9</td>
                                                <td>27</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ingredients">
                                        <div class="title col-md-3 col-xs-12 col-sm-3">
                                            <h3>Made fresh daily with...</h3>
                                        </div>
                                        <div class="food-items">
                                            <div class="items col-md-4 col-xs-12 col-sm-4">
                                                <span class="image"><img src="assets/images/single-product/3.jpg" alt="" /></span>
                                                <span class="info">100% Whole Milk<br />Mozarella</span>
                                            </div>
                                            <div class="items col-md-4 col-xs-12 col-sm-4">
                                                <span class="image"><img src="assets/images/single-product/4.jpg" alt="" /></span>
                                                <span class="info">Ecological<br />Mushrooms</span>
                                            </div>
                                            <div class="items col-md-4 col-xs-12 col-sm-4">
                                                <span class="image"><img src="assets/images/single-product/5.jpg" alt="" /></span>
                                                <span class="info">Zesty Pepperoni</span>
                                            </div>
                                            <div class="items col-md-4 col-xs-12 col-sm-4">
                                                <span class="image"><img src="assets/images/single-product/6.jpg" alt="" /></span>
                                                <span class="info">Seasoned Italian<br />Sausage</span>
                                            </div>
                                            <div class="items col-md-4 col-xs-12 col-sm-4">
                                                <span class="image"><img src="assets/images/single-product/7.jpg" alt="" /></span>
                                                <span class="info">Fresh Daily<br />Spinach</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane in panel entry-content wc-tab" id="tab-additional_information">
                                <div class="tab-additional_information">
                                    <table class="shop_attributes">
                                        <tr class="">
                                            <th>Food Type</th>
                                            <td>
                                                <p>Veg</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane panel entry-content wc-tab" id="tab-nutrition">
                                <div class="tab-nutrition">
                                    <div class="table-responsive">
                                        <table style="height: 107px">
                                            <tbody>
                                            <tr class="food-nutrition">
                                                <th scope="row"><span class="food-name">Pizza</span>28 cm size</th>
                                                <td><span class="value">728</span>Energy/Kj</td>
                                                <td><span class="value">1054</span>energy/kcal</td>
                                                <td><span class="value">68</span>fat/g</td>
                                                <td><span class="value">25</span>carbohydrate/g</td>
                                                <td><span class="value">48</span>sugar/g</td>
                                                <td><span class="value">548</span>protein/g</td>
                                                <td><span class="value">9</span>salt</td>
                                                <td><span class="value">15</span>lactose/g</td>
                                            </tr>
                                            <tr class="allergies-name">
                                                <th scope="row"><span class="allergies-food">Allergies</span></th>
                                                <td>Egg</td>
                                                <td>milk protein</td>
                                                <td>sesame seed</td>
                                                <td>lactose</td>
                                                <td>gluten</td>
                                                <td>mustard</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h3 class="table-version">Nutrition Informations Version 2</h3>
                                    <div class="table-responsive">
                                        <table class="table-style-02" style="height: 118px">
                                            <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Energy/Kj</th>
                                                <th>energy/kcal</th>
                                                <th>fat/g</th>
                                                <th>carbohydrate/g</th>
                                                <th>sugar/g</th>
                                                <th>protein/g</th>
                                                <th>salt</th>
                                                <th>lactose/g</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">28 cm</th>
                                                <td>728</td>
                                                <td>1054</td>
                                                <td>68</td>
                                                <td>25</td>
                                                <td>25</td>
                                                <td>548</td>
                                                <td>9</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">35 cm</th>
                                                <td>923</td>
                                                <td>1352</td>
                                                <td>98</td>
                                                <td>48</td>
                                                <td>75</td>
                                                <td>846</td>
                                                <td>9</td>
                                                <td>27</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                            <div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
                                <div class="tab-reviews">
                                    <div id="reviews" class="woocommerce-Reviews">
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">Be the first to review &ldquo;Hawaii Vegetarian Pizza&rdquo;
                                                        <small>
                                                            <a rel="nofollow" id="cancel-comment-reply-link" href="/pizzaro/product/hawaii-vegetarian-pizza/#respond" style="display:none;">Cancel reply</a>
                                                        </small>
                                                    </h3>
                                                    <form action="#"  id="commentform" class="comment-form" novalidate>
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <p class="comment-form-rating">
                                                            <label>Your Rating</label>
                                                        </p>
                                                        <p class="stars">
                                                      <span>
                                                      <a class="star-1" href="#">1</a>
                                                      <a class="star-2" href="#">2</a>
                                                      <a class="star-3" href="#">3</a>
                                                      <a class="star-4" href="#">4</a>
                                                      <a class="star-5" href="#">5</a>
                                                      </span>
                                                        </p>

                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your Review <span class="required">*</span></label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name <span class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required />
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="" size="30" aria-required="true" required />
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                                            <input type='hidden' name='comment_post_ID' value='50' id='comment_post_ID' />
                                                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                        </p>
                                                    </form>
                                                </div>
                                                <!-- #respond -->
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                    <div class="section-products">
                        <h2 class="section-title">This Goes Great Withh</h2>
                        <div class="columns-4">
                            <ul class="products">
                                <li class="product first">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <div class="product-image-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <img src="assets/images/products/p9.jpg" class="img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <h3>Trio Cheese</h3>
                                                    <div itemprop="description">
                                                        <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                    </div>
                                                    <div  class="yith_wapo_groups_container">
                                                        <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                            <h3><span>Pick Size</span></h3>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                            </div>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hover-area">
                                                    <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-outer -->
                                </li>
                                <!-- /.products -->
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <div class="product-image-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <img src="assets/images/products/p10.jpg" class="img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <h3>Trio Cheese</h3>
                                                    <div itemprop="description">
                                                        <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                    </div>
                                                    <div  class="yith_wapo_groups_container">
                                                        <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                            <h3><span>Pick Size</span></h3>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                            </div>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hover-area">
                                                    <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-outer -->
                                </li>
                                <!-- /.products -->
                                <li class="product ">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <div class="product-image-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <img src="assets/images/products/p2.jpg" class="img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <h3>Trio Cheese</h3>
                                                    <div itemprop="description">
                                                        <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                    </div>
                                                    <div  class="yith_wapo_groups_container">
                                                        <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                            <h3><span>Pick Size</span></h3>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                            </div>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hover-area">
                                                    <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-outer -->
                                </li>
                                <!-- /.products -->
                                <li class="product last">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <div class="product-image-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <img src="assets/images/products/p1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                    <h3>Trio Cheese</h3>
                                                    <div itemprop="description">
                                                        <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                    </div>
                                                    <div  class="yith_wapo_groups_container">
                                                        <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                            <h3><span>Pick Size</span></h3>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                            </div>
                                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hover-area">
                                                    <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.product-outer -->
                                </li>
                                <!-- /.products -->
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
</div>

@endsection