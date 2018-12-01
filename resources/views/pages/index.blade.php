@extends('layouts.layout')

@section('body-class', 'page-template-template-homepage-v1 home-v1')


@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    @component('components.index.main-slider.main-slider')
                    @endcomponent

                    @component('components.index.tiles.tiles')
                    @endcomponent

                    @component('components.index.tabs.tabs')
                    @endcomponent

                    @component('components.index.sale-event.event')
                    @endcomponent

                    @component('components.index.products.products')
                    @endcomponent

                    @component('components.index.product.product')
                    @endcomponent

                    @component('components.index.features.features')
                    @endcomponent
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>
@endsection