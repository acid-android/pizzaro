@extends('layouts.layout')

@section('body-class', 'page-template-template-contactpage')

@section('content')


    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1463669021863"
                                height="462" allowfullscreen></iframe>
                    </div>
                    <header class="contact-header">
                        <h1 class="entry-title">Contact Us</h1>
                        <p class="description">We are a second-generation family business established in 1972</p>
                    </header>
                    <div class="contact-form-with-address">
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="contact-form">
                                    <h2>Leave us a Message</h2>
                                    <p>Aenean massa diam, viverra vitae luctus sed, gravida eget est. Etiam nec ipsum
                                        porttitor, consequat libero eu, dignissim eros. Nulla auctor lacinia enim id
                                        mollis.</p>
                                    <div role="form" class="wpcf7" id="wpcf7-f425-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="425"/>
                                                <input type="hidden" name="_wpcf7_version" value="4.5.1"/>
                                                <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f425-o1"/>
                                                <input type="hidden" name="_wpnonce" value="e6363d91dd"/>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xs-12 col-md-6">
                                                    <label>First name*</label> <br/>
                                                    <span class="wpcf7-form-control-wrap first-name">
                                             <input type="text" name="first-name" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                                                    aria-required="true" aria-invalid="false"/>
                                             </span>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <label>Last name*</label><br/>
                                                    <span class="wpcf7-form-control-wrap last-name">
                                             <input type="text" name="last-name" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                                                    aria-required="true" aria-invalid="false"/>
                                             </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label><br/>
                                                <span class="wpcf7-form-control-wrap subject">
                                          <input type="text" name="subject" value="" size="40"
                                                 class="wpcf7-form-control wpcf7-text input-text" aria-invalid="false"/>
                                          </span>
                                            </div>
                                            <div class="form-group">
                                                <label>Your Message</label><br/>
                                                <span class="wpcf7-form-control-wrap your-message">
                                          <textarea name="your-message" cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea"
                                                    aria-invalid="false"></textarea>
                                          </span>
                                            </div>
                                            <div class="form-group clearfix">
                                                <p><input type="submit" value="Send Message"
                                                          class="wpcf7-form-control wpcf7-submit"/></p>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="store-info">
                                    <h2>Our Address</h2>
                                    <p>17 Princess Road London, Greater London NW1 8JR, UK<br>Support (+800) 856 800 604<br>E-mail:
                                        info@pizzaro.com</p>
                                    <div class="address">
                                        <h3>Opening Hours</h3>
                                        <div class="address-info">
                                            <ul>
                                                <li class="clearfix"><span class="day">Monday</span><span
                                                            class="pull-right flip hours">12-6 PM</span></li>
                                                <li class="clearfix"><span class="day">Tuesday</span><span
                                                            class="pull-right flip hours">12-6 PM</span></li>
                                                <li class="clearfix"><span class="day">Wednesday</span><span
                                                            class="pull-right flip hours">12-6 PM</span></li>
                                                <li class="clearfix"><span class="day">Thursday</span><span
                                                            class="pull-right flip hours">12-6 PM</span></li>
                                                <li class="clearfix"><span class="day">Friday</span><span
                                                            class="pull-right flip hours">12-6 PM</span></li>
                                                <li class="clearfix"><span class="day">Saturday</span><span
                                                            class="pull-right flip hours">12-6 PM</span></li>
                                                <li class="clearfix"><span class="day">Sunday</span><span
                                                            class="pull-right flip hours">Closed</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="address">
                                        <h3>Careers.</h3>
                                        <div class="address-info">
                                            <p class="inner-right-md">If you are interested in employment opportunities
                                                at Pizzaro, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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