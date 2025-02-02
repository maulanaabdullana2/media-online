@extends('layout')

@section('content')
<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5">
                        <a class="post-category" href="post-category-1.html">{{$data->nama_kategori}}</a>
                        <h2 class="post-title">
                            {{$data->judul}}
                        </h2>
                    </div>
                    <div class="post-body">
                        <div class="post-featured-image">
                            <img src="/uploads/{{$data->gambar}}" class="img-fluid" alt="featured-image">
                        </div>
                        <div class="entry-content">
                            <p>{{$data->isi}}</p>
                        </div>

                        <div class="share-block  d-flex justify-content-between align-items-center border-top border-bottom mt-5">
                            <div class="post-tags">
                                <span>Tags</span>
                                <a href="post-category-2.html">Health</a>
                                <a href="post-category-2.html">Game</a>
                                <a href="post-category-2.html">Tour</a>
                            </div>

                            <ul class="share-icons list-unstyled ">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="gplus">
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="reddit">
                                    <a href="#">
                                        <i class="fa fa-reddit-alien"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <nav class="post-navigation clearfix">
                    <div class="previous-post">
                        <a href="single-post.html">
                            <h6 class="text-uppercase">Next</h6>
                            <h3>
                                Intel’s new smart glasses actually look good
                            </h3>
                        </a>
                    </div>
                    <div class="next-post">
                        <a href="single-post.html">
                            <h6 class="text-uppercase">Previous</h6>

                            <h3>
                                Free Two-Hour Delivery From Whole Foods
                            </h3>
                        </a>
                    </div>
                </nav>
                <div class="author-block">
                    <div class="author-thumb">
                        <img src="/theme/images//news/author-02.jpg" alt="author-image">
                    </div>
                    <div class="author-content">
                        <h3><a href="author.html">Lint Handson</a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit quod molestias delectus illum quisquam.
                            Quasi iure perferendis suscipit officiis dicta!
                        </p>

                        <div class="authors-social">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="related-posts-block">
                    <h3 class="news-title">
                        <span>Related Posts</span>
                    </h3>
                    <div class="news-style-two-slide">
                        <div class="item">
                            <div class="post-block-wrapper clearfix">
                                <div class="post-thumbnail mb-0">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-04.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>
                                <a class="post-category" href="post-category-1.html">Tech</a>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Intel’s new smart glasses actually look good</a>
                                    </h2>


                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-block-wrapper clearfix">
                                <div class="post-thumbnail mb-0">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-10.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>
                                <a class="post-category" href="post-category-1.html">Food</a>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Free Two-Hour Delivery From Whole Foods</a>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-block-wrapper clearfix">
                                <div class="post-thumbnail mb-0">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-11.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>
                                <a class="post-category" href="post-category-1.html">Tour</a>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Snow and Freezing Rain in Paris Forces the</a>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-block-wrapper clearfix">
                                <div class="post-thumbnail mb-0">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-18.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>
                                <a class="post-category" href="post-category-1.html">Beauty</a>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">The Best Eye Makeup Tutorials for all</a>
                                    </h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="comments" class="comments-block block">
                    <h3 class="news-title">
                        <span>02 Comments</span>
                    </h3>
                    <ul class="all-comments">
                        <li>
                            <div class="comment">
                                <img class="commented-person" alt="" src="/theme/images//news/author-01.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="commented-person-name">Jack Anderson</span>
                                        <span class="comment-hour d-block"><i class="fa fa-clock-o mr-2"></i>February 6, 2019 at 12:20 pm</span>
                                    </div>
                                    <div class="comment-content">
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta perferendis asperiores
                                            voluptatum saepe repellat atque obcaecati dolores nulla, explicabo harum inventore
                                            sed corrupti molestiae aspernatur.
                                        </p>
                                    </div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="comments-reply">
                                <li>
                                    <div class="comment">
                                        <img class="commented-person" alt="" src="/theme/images//news/author-02.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="commented-person-name">Jhonny American</span>
                                                <span class="comment-hour d-block"><i class="fa fa-clock-o mr-2"></i>March 9, 2019 at 12:20 pm</span>
                                            </div>
                                            <div class="comment-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui expedita magnam ea
                                                    tempora consectetur fugit dolorum numquam at obcaecati voluptatibus.
                                                </p>
                                            </div>
                                            <div class="text-left">
                                                <a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="comment last">
                                <img class="commented-person" alt="" src="/theme/images//news/author-03.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="commented-person-name">Vicky Fong</span>
                                        <span class="comment-hour d-block"><i class="fa fa-clock-o mr-2"></i>June 6, 2019 at 12:20 pm</span>
                                    </div>
                                    <div class="comment-content">
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, ipsa dolor exercitationem
                                            culpa obcaecati illo veniam voluptatem perferendis hic nisi tempora omnis, mollitia unde doloribus.
                                        </p>
                                    </div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="comment-form ">
                    <h3 class="title-normal">Leave a Reply </h3>
                    <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                    <form role="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control required-field" id="message" placeholder="Messege" rows="8" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" placeholder="Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Website" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button class="comments-btn btn btn-primary " type="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="widget">
                        <h3 class="news-title">
                            <span>Stay in touch</span>
                        </h3>

                        <ul class="list-inline social-widget">
                            <li class="list-inline-item">
                                <a class="social-page youtube" href="#">
                                    <i class="fa fa-play"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page pinterest" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-page linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="social-page youtube" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div class="widget">
                        <h3 class="news-title">
                            <span>Hot News</span>
                        </h3>

                        <div class="post-overlay-wrapper">
                            <div class="post-thumbnail">
                                <img class="img-fluid" src="/theme/images//news/news-15.jpg" alt="post-thumbnail" />
                            </div>
                            <div class="post-content">
                                <a class="post-category white" href="post-category-1.html">Fashion</a>
                                <h2 class="post-title">
                                    <a href="single-post.html">First Look At Self-Portrait's Autumn Collection...</a>
                                </h2>
                                <div class="post-meta white">
                                    <span class="posted-time"><i class="fa fa-clock-o mr-1"></i>17 jun,2019</span>
                                    <span> by </span>
                                    <span class="post-author">
                                        <a href="author.html">Jammy Anderson</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-block">
                            <div class="post-block-wrapper post-float ">
                                <div class="post-thumbnail">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-03.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Apple HomePod review: locked in</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="posted-time"><i class="fa fa-clock-o mr-1"></i>2 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-block-wrapper post-float">
                                <div class="post-thumbnail">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-05.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Intel’s new smart glasses actually look good</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 15 March , 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-block-wrapper post-float">
                                <div class="post-thumbnail">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-11.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Free Two-Hour Delivery From Whole Foods</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 5 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-block-wrapper post-float">
                                <div class="post-thumbnail">
                                    <a href="single-post.html">
                                        <img class="img-fluid" src="/theme/images//news/news-06.jpg" alt="post-thumbnail" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title title-sm">
                                        <a href="single-post.html">Here's How To Get Free Pizza On</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 17 June, 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <img class="banner img-fluid" src="/theme/images//banner-ads/ad-sidebar.png" alt="300x300 ads" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection