@extends('layouts.app')
@section('pageTitle', 'Blog - ')
@section('content')


<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
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
        <h1 class="text-center pt-2 pb-0">Blogs For Eye Treatment</h1>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-content">
                        @forelse($posts as $post)
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <h1 class="">{{ $post->title }}</h1><a>
                                @if($post->featured_image)
                                <div class="article-image">
                                    <a href="{{ route('blog.show', $post->slug) }}"><img
                                            src="{{ asset($post->featured_image) }}" alt="image"
                                            class="blog-image-fit"></a>
                                </div>
                                @else
                                    <div class="article-image">
                                        <a href="{{ route('blog.show', $post->slug) }}"><img
                                                src="{{ asset($post->featured_image) }}" alt="image"
                                                class="blog-image-fit"></a>
                                    </div>
                                @endif
                                <div class="entry-meta">
                                    <hr>
                                    <ul>
                                        <li><span>Posted On:</span> {{ dd_format($post->publish_date, 'jS M Y') }}</li>
                                        <li><span>By:</span> {{ $post->author->name }}</li>
                                    </ul>
                                </div>
                                <p class="mt-3 mb-5"> {{ $post->excerpt }} <a
                                        href="{{ route('blog.show', $post->slug) }}">
                                        Read
                                        more...</a></p>
                                @empty
                                @endforelse
                                {{ $posts->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 position-sticky search-padd pt-4 blog-recent-posts-sticky">
                <aside class="widget-area" id="secondary">
                    {{-- <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section> --}}

                    <section class="widget widget_fovia_posts_thumb ">
                        <h3 class="widget-title">Recent Posts</h3>
                        @forelse($recentPosts as $recentPost)
                        <article class="item">
                            <a href="{{route('blog.show', $recentPost->slug)}}" class="thumb">
                                @if($post->featured_image !== null)
                                <img class="popular-post-img" src="{{ $recentPost->featured_image }}" alt="">
                                @else
                                <img class="popular-post-img lazyload" src='img/blog/1.jpg' alt="image">
                                @endif
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30" style="display:none">{{ dd_format($recentPost->created_at,'j M Y') }}</time>
                                <h3 class="title usmall"><a class="popular-post-title"
                                        href="#">{{ Str::limit($recentPost->title, 55) }}</a></h3>
                            </div>

                            <div class="clear"></div>
                        </article>
                        @endforeach

                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>



<style>
    .blog-link > a {
        color: #19ce67 !important;
    }
</style>
@endsection
