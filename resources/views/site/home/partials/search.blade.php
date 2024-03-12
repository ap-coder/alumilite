    <!--====== Search Box Start ======-->

    <section class="search-box-area search-box-dark">
        <div class="container">
            <div class="search-box-wrapper">
                <div class="search-header d-md-flex align-items-center justify-content-between">
                    <div class="search-title-field d-lg-flex align-items-center">
                        <h3 class="title">I'm looking for</h3>
                    </div>
                </div>
                <form action="{{ route('products.index') }}" method="GET">
                    <div class="search-body">
                        <div class="search-form-wrapper d-flex flex-wrap align-items-end">
                            <div class="search-field">
                                <div class="row">
                                    <div class="single-field col-lg-4 col-sm-6">
                                        <label class="field-label">Category</label>
                                        <select class="optgroup_test" name="category">
                                            <option value="">All categories</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->slug }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="single-field col-lg-4 col-sm-6">
                                        <label class="field-label">Brand</label>
                                        <select class="optgroup_test" name="brand" id="productBrand">
                                            <option value="">All brands</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->slug }}">{{ $brand->name }}</option>
                                            @endforeach                              
                                        </select>
                                    </div>
                                    <div class="single-field col-lg-4 col-sm-6">
                                        <label class="field-label">Model</label>
                                        <select class="optgroup_test" name="brandModel" id="productBrandModel">
                                            <option value="">All models</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="search-btn">
                                <button class="main-btn d-block">Search</button>
                            </div>
                        </div>                    
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--====== Search Box Ends ======-->