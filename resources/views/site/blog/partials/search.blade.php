                        <div class="blog-sidebar-search">
                            <h3 class="sidebar-title">Search</h3>

                            <div class="search-form">
                                <form action="{{ url('blog') }}" method="GET">
                                    <input type="text" placeholder="Search" name="search" value="{{ Request::get('search') }}">
                                    <button type="submit"><i class="ion-android-search"></i></button>
                                </form>
                            </div>
                        </div>