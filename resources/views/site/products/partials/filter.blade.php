<div class="inventory-top d-sm-flex justify-content-between align-items-center">
    <div class="inventory-select">
        {{-- <form action="#">
            <select class="optgroup_test">
                <option value="" selected="selected">SORT BY: Date Last Added </option>
                <option value="">SORT BY: Date First Added </option>
                <option value="">SORT BY: Price (Low To High) </option>
                <option value="">SORT BY: Price (High To Low) </option>
            </select>
        </form> --}}
        <select class="optgroup_test productFilter" id="productCategory">
            <option value="">Filter By: Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->slug }}" @if(Request::get('category') && Request::get('category') == $category->slug) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="inventory-select">
        <select class="optgroup_test productFilter" id="productBrand" type="brand">
            <option value="">Filter By: Brand</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->slug }}" @if(Request::get('brand') && Request::get('brand') == $brand->slug) selected @endif>{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="inventory-select">
        <select class="optgroup_test productFilter" id="productBrandModel">
            <option value="">Filter By: Model</option>
            @if (isset($brandModels))
                @foreach ($brandModels as $brandModel)
                    <option value="{{ $brandModel->slug }}" @if(Request::get('brandModel') && Request::get('brandModel') == $brandModel->slug) selected @endif>{{ $brandModel->model }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="inventory-switcher">
        <ul class="nav" role="tablist">
            <li><a class="active" data-bs-toggle="tab" href="#grid" role="tab"><i class="ion-android-apps"></i></a></li>
            <li><a data-bs-toggle="tab" href="#list" role="tab"><i class="ion-navicon"></i></a></li>
        </ul>
    </div>
</div>