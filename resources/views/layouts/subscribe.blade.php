<section class="newsletter-subscription stretch-full-width"  style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/26.jpg ); height: 460px;">
    <div class="caption">
        <h3 class="title">Subscribe to Newsletter</h3>
        <span class="marketing-text">Subscribe to receive our weekly Hot Promotions every Monday!</span>
        <form action="{{route('send-email-to-subscriber')}}" method="GET">
            <div class="newsletter-form">
                <input type="text" name="email" placeholder="Type here your email address to receive our newsletter">
                <button class="button" type="submit">Sign Up</button>
            </div>
        </form>
    </div>
</section>