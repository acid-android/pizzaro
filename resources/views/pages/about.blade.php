@extends('layouts.layout')

@section('body-class', 'about full-width page-template-template-aboutpage')

@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <header class="about-header">
                        <img width="1934" height="734" src="assets/images/about-bg.jpg"
                             class="attachment-full size-full wp-post-image" alt=""/>
                    </header>
                    <div class="pizzaro-about-features">
                        <div class="feature-head">
                            <h2 class="section-title">About Us</h2>
                            <span class="section-subtitle">We are a second-generation family business established in 1972</span>
                        </div>
                        <div class="widget widget_template_features">
                            <div class="features columns-3">
                                <div class="feature first">
                                    <a href="#" title="Taste Driven">
                                        <img width="370" height="280" src="assets/images/about-column-1.jpg"
                                             class="attachment-370x370 size-370x370 wp-post-image" alt=""/>
                                    </a>
                                    <h3 class="feature-title">
                                        <a href="#" title="Taste Driven">Taste Driven</a>
                                    </h3>
                                    <div class="feature-content">Mauris tempus erat laoreet turpis lobortis, eu
                                        tincidunt erat fermentum. Aliquam non tincidunt urna. Integer tincidunt nec nisl
                                        vitae ullamcorper. Proin sed ultrices erat.
                                    </div>
                                </div>
                                <div class="feature">
                                    <a href="#" title="Made the Quality Way">
                                        <img width="370" height="280" src="assets/images/about-column-2.jpg"
                                             class="attachment-370x370 size-370x370 wp-post-image" alt=""/>
                                    </a>
                                    <h3 class="feature-title">
                                        <a href="#" title="Made the Quality Way">Made the Quality Way</a>
                                    </h3>
                                    <div class="feature-content">Mauris tempus erat laoreet turpis lobortis, eu
                                        tincidunt erat fermentum.<br><br>Be Bold // Do Everything Better<br>Be Open //
                                        Work Stronger Together
                                    </div>
                                </div>
                                <div class="feature last">
                                    <a href="#" title="Family of Creators">
                                        <img width="370" height="280" src="assets/images/about-column-3.jpg"
                                             class="attachment-370x370 size-370x370 wp-post-image" alt=""/>
                                    </a>
                                    <h3 class="feature-title">
                                        <a href="#" title="Family of Creators">Family of Creators</a>
                                    </h3>
                                    <div class="feature-content">Mauris tempus erat laoreet turpis lobortis, eu
                                        tincidunt erat fermentum. Aliquam non tincidunt urna. Integer tincidunt nec nisl
                                        vitae ullamcorper. Proin sed ultrices erat.
                                    </div>
                                </div>
                            </div>
                            <!--/.features-->
                        </div>
                        <!--/.widget widget_template_features-->
                    </div>
                    <div class="pizzaro-basics ">
                        <figure>
                            <img width="1920" height="418" src="assets/images/about-banner.jpg" alt=""/>
                        </figure>
                        <div class="container">
                            <div class="row">
                                <div class="blocks">
                                    <div class="block col-xs-12 col-sm-4">
                                        <h2>Pizza Basics</h2>
                                    </div>
                                    <div class="block col-xs-12 col-sm-4">
                                        <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.
                                            Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper.
                                            Proin sed ultrices erat.</p>
                                    </div>
                                    <div class="block col-xs-12 col-sm-4">
                                        <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.
                                            Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper.
                                            Proin sed ultrices erat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pizzaro-brands">
                        <h2 class="section-title">We delivering Pizzas for</h2>
                        <ul>
                            <li>
                                <img width="121" height="100" src="assets/images/brand.png" alt=""/>
                            </li>
                            <li>
                                <img width="121" height="100" src="assets/images/brand.png" alt=""/>
                            </li>
                            <li>
                                <img width="121" height="100" src="assets/images/brand.png" alt=""/>
                            </li>
                            <li>
                                <img width="121" height="100" src="assets/images/brand.png" alt=""/>
                            </li>
                            <li>
                                <img width="121" height="100" src="assets/images/brand.png" alt=""/>
                            </li>
                        </ul>
                    </div>
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>

@endsection