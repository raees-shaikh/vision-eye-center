@extends('layouts.app')
@section('pageTitle', '')
@section('content')


 <!-- Start Page Title Area -->
 <section class="page-title-area page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog Details</h2>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

 <!-- Start Blog Details Area -->
 <section class="blog-details-area ptb-100 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="img/blog/1.jpg" alt="image">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><span>Posted On:</span> <a href="#">September 31, 2020</a></li>
                                <li><span>Posted By:</span> <a href="#">John Anderson</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
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

                    <section class="widget widget_fovia_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>

                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2019</time>
                                <h4 class="title usmall"><a href="#">How to change yourself for the better</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2019</time>
                                <h4 class="title usmall"><a href="#">10 Tactics for marketing your company</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">June 30, 2019</time>
                                <h4 class="title usmall"><a href="#">Google web ranking changing much</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>
                    </section>

                    {{-- <section class="widget widget_recent_comments">
                        <h3 class="widget-title">Recent Comments</h3>

                        <ul>
                            <li>
                                <span class="comment-author-link">
                                    <a href="#">A WordPress Commenter</a>
                                </span>
                                on
                                <a href="#">Hello world!</a>
                            </li>
                            <li>
                                <span class="comment-author-link">
                                    <a href="#">Fovia</a>
                                </span>
                                on
                                <a href="#">Hello world!</a>
                            </li>
                            <li>
                                <span class="comment-author-link">
                                    <a href="#">Wordpress</a>
                                </span>
                                on
                                <a href="#">Hello world!</a>
                            </li>
                            <li>
                                <span class="comment-author-link">
                                    <a href="#">A WordPress Commenter</a>
                                </span>
                                on
                                <a href="#">Hello world!</a>
                            </li>
                            <li>
                                <span class="comment-author-link">
                                    <a href="#">Fovia</a>
                                </span>
                                on
                                <a href="#">Hello world!</a>
                            </li>
                        </ul>
                    </section> --}}

                    {{-- <section class="widget widget_archive">
                        <h3 class="widget-title">Archives</h3>

                        <ul>
                            <li><a href="#">May 2019</a></li>
                            <li><a href="#">April 2019</a></li>
                            <li><a href="#">June 2019</a></li>
                        </ul>
                    </section> --}}

                    {{-- <section class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>

                        <ul>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </section> --}}

                    {{-- <section class="widget widget_meta">
                        <h3 class="widget-title">Meta</h3>

                        <ul>
                            <li><a href="#">Log in</a></li>
                            <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                            <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                            <li><a href="#">WordPress.org</a></li>
                        </ul>
                    </section> --}}

                    {{-- <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>

                        <div class="tagcloud">
                            <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Design <span class="tag-link-count"> (3)</span></a>
                            <a href="#">IT <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Marketing <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Mobile <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Protect <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Startup <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                        </div>
                    </section> --}}
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

<section class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-details-desc">

                    <div class="article-content">
                        <h3>Debunking Common Misconceptions About Cataract Eye Surgery</h3>
                        <p>Many misconceptions surround cataract eye surgery. These misconceptions lead
                            people to try ineffective strategies for reducing the same. Below mentioned are
                            some of the common misconceptions that people have regarding cataract eye
                            surgery. </p>

                        <h4>Reading can cause cataract: </h4>
                        <p>Reading can cause a cataract is a common misconception that many people have.
                            Many also believe that looking at computers or any activity that involves close
                            vision will cause a cataract. This is a common misconception of many people and
                            is not true. What is true is a natural process that involves ageing, and not reading,
                            or other close vision activities causes a cataract. A cataract may be caused due to
                            hereditary or other risk factors, but it does not involve reading. This
                            misconception is wrong and should not be taken seriously. </p>


                        {{-- <blockquote class="wp-block-quote">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                            <cite>Tom Cruise</cite>
                        </blockquote> --}}

                        {{-- <ul class="wp-block-gallery columns-3">
                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="img/blog/1.jpg" alt="image">
                                </figure>
                            </li>

                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="img/blog/1.jpg" alt="image">
                                </figure>
                            </li>

                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="img/blog/1.jpg" alt="image">
                                </figure>
                            </li>
                        </ul> --}}

                        <h4>Eye drop may have some effect on Cataract: </h4>
                        <p>This is to be noticed that there are no eye drops that are prescribed for cataract. A
                            cataract is a natural process and is caused due to ageing or hereditary reasons.
                            Some common measures to delay cataract is by staying healthy and avoiding the
                            sun as much as possible. Eye drops do not affect cataract. Cataract operation
                            costs in Mumbai are fluctuating and depend on the condition and hospital. </p>

                        {{-- <ul class="features-list">
                            <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                            <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                            <li><i class="flaticon-check-mark"></i> A Career Overview opportunity Available</li>
                            <li><i class="flaticon-check-mark"></i> A good Work Environment For work</li>
                        </ul> --}}

                        <h4>Cataract surgery hurts: </h4>
                        <p>The misconception that people have regarding cataracts that it hurts is baseless.
                            With the introduction of anaesthetic eye drop, cataract is now as painless as
                            possible. There are chances where patients have felt a mild discomfort, but it is
                            rare and uncommon. Cataract surgery has the highest success rate, and minimum
                            risks are involved in it. Cataract surgery also has a short recovery period, so it is
                            advised to get cataract surgery for the best results. </p>

                        <h4>Cataract can come back again after having surgery:</h4>
                        <p>Cataract surgery is associated with removing the lens that has been deteriorated.
                            An intraocular lens implant then replaces the lens, and these implants have no
                            chances of getting cataracts again. Even if the membrane that holds the lens
                            becomes cloudy, it can be cleared easily using a laser procedure. This clearly states
                            that cataracts have no chance of coming back after undergoing surgery.</p>

                        <h4>One should wait before getting cataract surgery:</h4>
                        <p>If a cataract is troubling someone, one should immediately take help from an
                            ophthalmologist rather than waiting too long. There are many cases where people
                            waiting too long to get cataract surgery have met with certain complications.
                            A cataract is very common in older people, but recently it has been observed that
                            many young people also suffer. It is advised to visit the doctor regularly and get
                            your eye checked up for the best results. This will help detect cataracts if there
                            may be in the patient and get them treated instantly for the best results.  </p>
                        <p>The above-mentioned points show the various misconceptions that people have
                            regarding cataract surgery. Reading the above information will give you a clear
                            idea of these misconceptions and the truth behind them.</p>

                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i></span>

                            <a href="#">Fashion</a>,
                            <a href="#">Games</a>,
                            <a href="#">Travel</a>
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li><span>Share:</span></li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="post-navigation">
                        <div class="navigation-links">
                            <div class="nav-previous">
                                <a href="#"><i class="flaticon-left-arrow"></i> Prev Post</a>
                            </div>

                            <div class="nav-next">
                                <a href="#">Next Post <i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
