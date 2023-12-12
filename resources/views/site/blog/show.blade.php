@extends('site.layouts.app')

@section('content')

    <meta itemprop="datePublished" content="{{date('yyyy-m-d', strtotime($article->created_at)) }}">
    <meta itemprop="dateModified" content="{{date('yyyy-m-d', strtotime($article->updated_at)) }}">
    <!--====== Blog Single Start ======-->
    @if($article->featured_image)
    <section class="blog-single-area blog ">
{{--        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ asset('assets/images/blog-single/blog-single-2.jpg') }}');">--}}
        <div class="single-post-header-2 d-flex align-items-end bg_cover" style="background-image: url('{{ asset('{{ $article->getFirstMedia('featured_image')('responsive') }}');">
            <div class="container">
                <div class="single-post-header-inner-2">
                    <div class="entry-meta">
                        <ul class="meta-items">
                            <li><a href="#">Review</a></li>
                            <li><a href="#">{{date('F j, Y', strtotime($article->created_at)) }}</a></li>
                            <li><a href="#"> </a></li>
                            <li><a href="#"> </a></li>
                        </ul>
                    </div>
                    <h2 class="entry-title">Audi in town 2019 - the festival of  audior in florencia, italy</h2>
                </div>
            </div>
        </div>
        @endif

        <div class="single-post-main-content">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8">
                        <div class="post-content-inner single-post-left">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
                                <li class="breadcrumb-item active">{{ $article->title ?? '' }}</li>
                            </ul>
                            <div class="body-content">
                                <p class="has-text">On the off chance that you have an escalated stop, mull over a short taking a ander at outing. This especially is shrewd in urban areas with brilliant open transportation decisions.</p>

                                <p class="has-drop-cap">Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.This response is important for our ability to learn from mistakes, but it also gives rise to self-criticism, because it is part of the threat-protection system. In other words, what keeps us safe can go too far, and keep us too safe. In fact, it can trigger self-censoring. Coven try is a city with a thousand years of history that has plenty to offer the visiting tourist. Located in the heart of Warwickshire. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>

                                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.</p>

                                <blockquote class="blockquote">
                                    <p>More impressive in almost every way than the vehicle  it replaces. Always is CMB!</p>
                                    <cite><span>chris evan</span> - Director at shopify.com</cite>
                                </blockquote>

                                <p>That immediately brought to mind one of my fondest memories, involving my daughter when she was just a toddler of one: taking her with me on the short walk to check the mail. I live in a <a href="#">small enclave of home</a> in which all the mailboxes are together in a central location, less than a minute’s walk from my front door</p>

                                <figure class="post-video">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/1qKt23Nv6ro?feature=oembed" title="YouTube video" allowfullscreen></iframe>
                                    </div>
                                </figure>

                                <h3>Performance & Improvement</h3>
                                <p>High-volume models include the well-equipped LT, the street-performance-oriented RST (which will offer the class’s first turbocharged four-cylinder engine) and a more feature-friendly LT Trail Boss 4×4, which has all the Trail Boss features but can be more luxuriously optioned. Each of these trim levels sports the traditional Chevy Bow-Tie emblem on the grille.</p>

                                <figure class="post-gallery">
                                    <ul class="blocks-gallery-item">
                                        <li><img src="assets/images/blog-single/blog-1.jpg" alt=""></li>
                                        <li><img src="assets/images/blog-single/blog-2.jpg" alt=""></li>
                                    </ul>
                                </figure>

                                <h3>Final Reviews</h3>

                                <p>If you plan on doing any kind of heavy hauling or towing with this truck, that option package should be high on your ordering list. The max trailering option pricing varies with trim level, but for our test vehicle</p>

                                <ul>
                                    <li>Welsh novelist Sarah Waters sums it up eloquently</li>
                                    <li>In their classic book, Creativity in Business, based on a popular course they co-taught</li>
                                    <li>Novelist and screenwriter Steven Pressfield</li>
                                    <li>A possible off-the-wall idea or solution appears like a blip and disappears without</li>
                                </ul>

                                <p>The short answer is yes. <strong>According to Kross,</strong> when you think of yourself as another person, it allows you give yourself more objective,  helpful feedback.</p>
                            </div>
                            <div class="footer-content d-flex flex-wrap justify-content-between align-items-center">
                                <ul class="tags">
                                    <li><a href="#">inventory</a></li>
                                    <li><a href="#">top</a></li>
                                    <li><a href="#">vehicle</a></li>
                                    <li><a href="#">wordpress</a></li>
                                </ul>
                                <ul class="social">
                                    <li><a class="facebook" href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a class="googleplus" href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li><a class="tumblr" href="#"><i class="ion-social-tumblr"></i></a></li>
                                    <li><a class="rss" href="#"><i class="ion-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="entry-author-box">
                            <div class="author-avatar">
                                <div class="avatar-image">
                                    <img src="assets/images/blog-single/author.jpg" alt="">
                                </div>
                                <div class="avatar-info">
                                    <span class="sub-title">the author</span>
                                    <h4 class="name">Edward Goldblatt</h4>
                                    <p>I’m McGregor, a gentlemen and lover of life. More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous negative one inside gorilla. </p>
                                </div>
                            </div>
                        </div>

                        <div class="related-post">
                            <div class="section-title">
                                <h2 class="title">Posts You’d Might Like</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-news mt-50">
                                        <div class="news-image">
                                            <a href="#">
                                                <img src="assets/images/blog/blog-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-meta">
                                                <span class="meta-cat"><a href="#">News</a></span>
                                                <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                            </div>
                                            <h3 class="news-title"><a href="blog-single-with-sidebar.html">Price list of Toyota Cars 2019, The Change of Interior & Exterior</a></h3>
                                            <ul class="news-meta-bottom">
                                                <li><a href="#"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                                <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                                <li><a href="#"><i class="ion-android-share-alt"></i> Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-news mt-50">
                                        <div class="news-image">
                                            <a href="#">
                                                <img src="assets/images/blog/blog-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-meta">
                                                <span class="meta-cat"><a href="#">Inspiration</a></span>
                                                <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                            </div>
                                            <h3 class="news-title"><a href="blog-single-with-sidebar.html">BMW X6, The Car Trending in 2019, Best Choice in Price Range</a></h3>
                                            <ul class="news-meta-bottom">
                                                <li><a href="#"><i class="ion-chatboxes"></i> 0 Comments </a></li>
                                                <li><span><i class="ion-eye"></i> 83 Viewed</span></li>
                                                <li><a href="#"><i class="ion-android-share-alt"></i> Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-comment-box blog-comment-2">
                            <div class="comment-wrapper">
                                <h4 class="comment-title">02 Comments</h4>

                                <ul class="comment-items">
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-3.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <ul class="meta">
                                                    <li>by <a href="#">Ron Wteasley</a></li>
                                                    <li>15 hours ago</li>
                                                </ul>
                                                <p>This car has been a blessing to me and my family so far. I will be returning to buy my second car. Go see him at Carify Center. Thank you for review and i’m always a fan of Carify’s Center</p>
                                                <a href="#" class="replay">Replay</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-4.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <ul class="meta">
                                                    <li>by <a href="#">Ron Wteasley</a></li>
                                                    <li>15 hours ago</li>
                                                </ul>
                                                <p>This car has been a blessing to me and my family so far. I will be returning to buy my second car. Go see him at Carify Center. Thank you for review and i’m always a fan of Carify’s Center</p>
                                                <a href="#" class="replay">Replay</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="comment-wrapper">
                                <h4 class="comment-title">leave a comment</h4>

                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Your name *">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Email Address *">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Subject (Optinal)">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-form">
                                                    <textarea placeholder="Write your message here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-form">
                                                    <button class="main-btn">post comment</button>

                                                    <p class="requirements">* Field Requirements</p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar-search">
                                <h3 class="sidebar-title">Search</h3>

                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button><i class="ion-android-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="blog-sidebar-category">
                                <h3 class="sidebar-title">categories</h3>

                                <div class="category-list">
                                    <ul class="list">
                                        <li><a href="#">News<span>(12)</span></a></li>
                                        <li><a href="#">Inspiration<span>(6)</span></a></li>
                                        <li><a href="#">Review<span>(24)</span></a></li>
                                        <li><a href="#">Technology<span>(5)</span></a></li>
                                        <li><a href="#">Community<span>(9)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog-sidebar-post">
                                <h3 class="sidebar-title">Popular posts</h3>

                                <ul class="post-items">
                                    <li>
                                        <div class="single-post">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="assets/images/blog/blog-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="news-meta">
                                                    <span class="meta-cat"><a href="#">News</a></span>
                                                    <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                                </div>
                                                <h6 class="post-title"><a href="#">Ford Focus 2016 - New Catalog from Carify’s expert, Brian O’Nel</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-post">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="assets/images/blog/blog-10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="news-meta">
                                                    <span class="meta-cat"><a href="#">Review</a></span>
                                                    <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                                </div>
                                                <h6 class="post-title"><a href="#">BMW X3 White 2018, Powerful with Sport Level</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-post">
                                            <div class="post-image">
                                                <a href="#">
                                                    <img src="assets/images/blog/blog-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="news-meta">
                                                    <span class="meta-cat"><a href="#">Inspiration</a></span>
                                                    <span class="meta-date"><a href="#">July 31, 2020</a></span>
                                                </div>
                                                <h6 class="post-title"><a href="#">Danoh ABR 2019, The Attraction from Traditional Brand</a></h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="blog-sidebar-newsletter">
                                <h3 class="sidebar-title">newsletter</h3>

                                <div class="newsletter-form">
                                    <p>Subscribe to our newsletter to get  the latest cars discount promotions, and other latest news.</p>
                                    <form action="#">
                                        <input type="text" placeholder="Email address">
                                        <button class="main-btn">subscribe</button>
                                    </form>
                                    <span>Don’t worry ! we not spam.</span>

                                </div>
                            </div>

                            <div class="blog-sidebar-tags">
                                <h3 class="sidebar-title">Popular tags</h3>

                                <div class="sidebar-tags">
                                    <a href="#">vehicle</a>
                                    <a href="#">inventory</a>
                                    <a href="#">wordpress</a>
                                    <a href="#">technology</a>
                                    <a href="#">dealership</a>
                                    <a href="#">mileage</a>
                                    <a href="#">car</a>
                                    <a href="#">automatic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Single Ends ======-->
@endsection

@section('headcss') @endsection
@section('headjs') @endsection
@section('footjs') @endsection
