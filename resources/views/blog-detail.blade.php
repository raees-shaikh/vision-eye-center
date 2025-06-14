@extends('layouts.app')
@section('pageTitle', 'Blog - ')
@section('content')


<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h1>Blog</h1>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<section class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-content">
                        {{-- @forelse($posts as $post) --}}
                        <a href="">
                            <h3>Amitabh Bachchan undergoes second eye surgery, advises fans to not delay treatment: 'It could lead to blindness'</h3><a>
                                {{-- @if($post->featured_image) --}}
                                <div class="article-image">
                                    <a href=""><img
                                            src="img/blog/1.jpg" alt="image"
                                            class="blog-image-fit"></a>
                                </div>
                                {{-- @endif --}}
                                <div class="entry-meta">
                                    <hr>
                                    <ul>
                                        <li><span>Posted On:</span>hfhghghghhg</li>
                                        <li><span>By:</span> dhhhhhhhhhhh</li>
                                    </ul>
                                </div>
                                <p class="mt-3 mb-5">Amitabh Bachchan has undergone a second eye surgery, he revealed
                                     on Sunday, and advised his followers to not delay treatment in such cases, as it could lead to blindness.
                                    Actor Amitabh Bachchan revealed on Sunday that he had undergone a second eye surgery. The actor
                                    had written about his first eye procedure earlier this month, in a blog post.
                                    He tweeted on Sunday, "And the 2nd one has gone well.. recovering now .. all good ..
                                    the marvels of modern medical technology and the dexterity of dr HM 's hands .. life
                                    changing experience .. You see now what you were not seeing before .. surely a wonderful world !!"<a
                                        href="">
                                        Read
                                        more...</a></p>
                                {{-- @empty
                                @endforelse
                                {{ $posts->appends(Request::all())->links() }} --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 position-sticky search-padd">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section>

                    <section class="widget widget_fovia_posts_thumb ">
                        <h3 class="widget-title">Popular Posts</h3>

                        <article class="item">
                            <a href="#" class="thumb">
                                <img class="popular-post-img" src="img/services/lasik.jpg" alt="">
                                {{-- <span class="fullimage cover bg1" role="img"></span> --}}
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2019</time>
                                <h3 class="title usmall"><a class="popular-post-title" href="#">How to change yourself for the better</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="#" class="thumb">
                                <img class="popular-post-img" src="img/services/lasik.jpg" alt="">
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2019</time>
                                <h4 class="title usmall"><a class="popular-post-title" href="#">10 Tactics for marketing your company</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="#" class="thumb">
                                <img class="popular-post-img" src="img/services/lasik.jpg" alt="">
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2019</time>
                                <h4 class="title usmall"><a class="popular-post-title" href="#">Google web ranking changing much</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>




@endsection
