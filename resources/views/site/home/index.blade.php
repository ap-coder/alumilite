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
        max-width: 100%; /* Limit maximum width to maintain 4 columns */
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

    /* Overlay CSS */
		.products-loader-overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
			z-index: 9999; /* Ensure the overlay is on top of other content */
			display: none; /* Initially hidden */
		}

		/* Spinner CSS */
		.productsloader {
			border: 4px solid rgba(0, 0, 0, 0.1);
			border-left: 4px solid #ffffff;
			border-radius: 50%;
			width: 40px;
			height: 40px;
			animation: productsspin 1s linear infinite;
			margin: auto;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		@keyframes productsspin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
</style>
@endsection
@section('headjs') 

@endsection
@section('footjs') 

<script>
   $(document).ready(function () {
        $('.products-filter li').on('click', function () {
            var filterValue = $(this).attr('data-filter');
            var id = $(this).attr('data-id');
            $('.model-filter').hide();
            $(filterValue+'-model').show();
            $(this).addClass('active').siblings().removeClass('active');

            var spinner = $('#products-loader-overlay');

            spinner.show();

            var _token = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				url:"{{ route('products.GetByBrands') }}",
				dataType:'json',
				method:"POST",
				data:{id:id, _token:_token},
				success:function(data){
					$('#product-data').html(data.html);
                    spinner.hide();
				}
			});
        });

        $('.model-filter li').on('click', function () {
            var filterValue = $(this).attr('data-filter');
            var brandId = $(this).attr('brand-id');
            var modelId = $(this).attr('model-id');
            $(this).addClass('active').siblings().removeClass('active');

            var spinner = $('#products-loader-overlay');

            spinner.show();

            var _token = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				url:"{{ route('products.GetByBrandModels') }}",
				dataType:'json',
				method:"POST",
				data:{brandId:brandId,modelId:modelId, _token:_token},
				success:function(data){
					$('#product-data').html(data.html);
                    spinner.hide();
				}
			});
        });
    });

</script>

@endsection
