@extends('site.layouts.app')

@section('content')

@include('site.home.partials.slider')
{{-- @include('site.home.partials.search') --}}
{{-- @include('site.home.partials.trending') --}}
{{-- @include('site.home.partials.browse-types') --}}

@includeIf('site.home.partials.products', ['products' => $products ])
@includeIf('site.home.partials.builds', ['builds' => $builds ])
@includeIf('site.home.partials.brands', ['brands' => $brands ])
@includeIf('site.home.partials.news-section', ['posts' => $posts ])

{{-- @include('site.home.partials.dealer') --}}
{{-- @include('site.home.partials.reviews') --}}
{{-- @include('site.home.partials.choose') --}}

@endsection

@section('headcss') 
<style>
    .product-column {
            display: flex;
        flex-wrap: wrap;
        /* Adjust the gap as needed */
    }

    .product-item {
        flex: 1 0 calc(25% - 20px); /* Adjust the width and margin as needed */
        max-width: calc(25% - 20px); /* Limit maximum width to maintain 4 columns */
        transition: transform 0.3s ease-in-out;
        margin: 0 10px 20px 0; /* Adjust the margin as needed */
    }
    .products-filter li.active {
        background-color: #ce8339;
    }
    .products-filter li.active a {
        color: #fff !important;
    }
    .model-filter li.active {
        background-color: #ce8339;
    }
    .model-filter li.active a {
        color: #fff !important;
    }
</style>
@endsection
@section('headjs') 

@endsection
@section('footjs') 

<script>
   $(document).ready(function () {
            var $grid = $('.product-column').isotope({
                itemSelector: '.product-item',
                layoutMode: 'fitRows'
            });

            $('.products-filter li').on('click', function () {
                var filterValue = $(this).attr('data-filter');
                $('.model-filter').hide();
                $(filterValue+'-model').show();
                $grid.isotope({ filter: filterValue });
            });

            $('.model-filter li').on('click', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });

            // Add active class to the current button (highlight it)
            $('.products-filter li').on('click', function () {
                $(this).addClass('active').siblings().removeClass('active');
            });

            // Add active class to the current button (highlight it)
            $('.model-filter li').on('click', function () {
                $(this).addClass('active').siblings().removeClass('active');
            });
        });

</script>

@endsection
