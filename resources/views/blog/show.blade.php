@extends('layouts.app')
@push('meta')
@section('pageTitle', $post->title . ' - ')
<meta name="title" content="{{ $post->title }}">
<meta name="description" content="{{ $post->excerpt }}">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:description" content="{{ $post->excerpt }}">
<meta property="og:image" content="{{ $post->featured_image ? asset($post->featured_image) : '' }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta name="twitter:card" content="{{ $post->featured_image ? asset($post->featured_image) : ''  }}">
{{-- <title>{{ $post->title }} </title> --}}
@endpush
@section('content')

{{-- @dd($post->excerpt); --}}

<!-- Start Page Title Area -->
<section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li>{{$post->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->


<!-- End Blog Details Area -->

<section class="blog-details-area">
    <div class="container">

            <h1 class="text-center py-3 ">{{ $post->title }}</h3>

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-content">
                        @if($post->featured_image)
                        <div class="article-image">
                            <a href="{{ route('blog.show', $post->slug) }}"><img
                                    src="{{ asset($post->featured_image) }}" alt="image" class="blog-image-fit"></a>
                        </div>
                        @endif
                        <hr>
                        <div class="entry-meta mb-3">
                            <ul>
                                <li style="display:none"><span>Posted on:</span> {{ dd_format($post->publish_date, 'jS M Y') }}</li>
                                <li><span>By:</span> {{ $post->author->name }}</li>
                            </ul>
                        </div>


                        <div class="post-content mb-4">
                            {!! $post->content !!}
                        </div>
                    </div>
                    {{-- <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i></span>
                            @forelse ($tags as $tag)
                            <a href="{{ route('blog.index', ['tag' => $tag])}}">{{ $tag }}</a>,
                            @empty

                            @endforelse
                        </div>
                    </div> --}}
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
                                <time datetime="2019-06-30" style="display:none">{{ dd_format($recentPost->created_at, 'j M Y') }}</time>
                                <h3 class="title usmall"><a class="popular-post-title"
                                        href="{{route('blog.show', $recentPost->slug)}}">{{ Str::limit($recentPost->title, 55) }}</a></h3>
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
    @media (max-width: 767px){
        iframe{
            width: 100%;
            height: 250px;
        }
    }

</style>

@endsection
