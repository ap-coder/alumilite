                    <div class="col-xxl-3 col-lg-4">
                        <div class="sidebar">

@include('site.products.show.partials.sidebar.paypal')
{{-- @include('site.products.show.partials.sidebar.sidebar-button') --}}
@include('site.products.show.partials.sidebar.contact')
@include('site.products.show.partials.social-share')
{{-- @include('site.products.show.partials.sidebar.dealer-info') --}}
{{-- @include('site.products.show.partials.sidebar.consultants') --}}
{{-- @include('site.products.show.partials.sidebar.calculater') --}}
{{-- @include('site.products.show.partials.sidebar.related-posts') --}}
@includeIf('site.products.show.partials.sidebar.similar-listings',['products'=>$similarProducts])

                        </div>
                    </div>
