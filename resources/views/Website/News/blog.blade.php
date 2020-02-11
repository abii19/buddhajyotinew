@extends('layouts.app-2')

@section('style')
    <style>
        .post-meta{
            font-size: 15px;
        }
        .post-meta i {
            color: #ffb606;
        }
        .post-header h2{
            font-size: 40px;
            font-weight: bolder;
            font-family: Popins;
            margin: 20px 0 15px;
        }
        .post-header p{
            font-size: 20px;
            font-family: "Noto Sans";
        }
        .post-media{
            height: 300px;
        }
        .post-media img{
            height: 300px;
        }
    </style>

@endsection
@section('content')
    <div class="">
        <div class="container">
            <!-- END HEADER -->
            <!-- Intro Section -->
        {{--<section class="inner-intro bg-img light-color overlay-before parallax-background">
            <div class="container">
                <div class="row title">
                    <div class="title_row">
                        <h1 data-title="Blog Detail"><span>Blog Detail</span></h1>
                        <div class="page-breadcrumb">
                            <a>Home</a>/ <span>Blog Detail</span>
                        </div>

                    </div>

                </div>
            </div>
        </section>--}}
        <!-- Intro Section -->
            <!-- Blog Post Section -->
            <section class="ptb ptb-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Post Bar -->
                        <div class="col-lg-9 blog-post-hr post-section">
                            <div class="blog-post mb-30">
                                <div class="post-meta"><span>by Admin, </span><span> <i class="fas fa-comments"></i> 25,</span><span> <i
                                            class="fas fa-heart"></i> 57</span>
                                </div>
                                <div class="post-header">
                                    <h2>Maecenas nec odio ante varcy tincidunt.</h2>
                                    <p><span class="event-calender blog-date"> 21 <span>June</span></span></p>
                                </div>
                                <div class="post-media"><img src="{{asset("images/news_background.jpg")}}" class="img-fluid" alt=""></div>
                                <div class="post-entry">
                                    <p> Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. </p>
                                    <p> similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                    <blockquote class="dark-bg"> We're not leaving here without Buster, man. Leave no
                                        crash-test dummy behind nihil impedit quo minus id quod maxime placeat facere!
                                    </blockquote>
                                    <p class="lead"> Praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                                        culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
                                        harum quidem rerum facilis est et expedita distinctio. </p>
                                    <h3 class="mt-30">Sub Blog Title Here</h3>
                                    <p> Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                        rerum facilis est et expedita distinctio. </p>
                                    <ul class="lead-point mt-15">
                                        <li><i class="ion-android-done"></i> Aenean suscipit eget mi act fermentum.</li>
                                        <li><i class="ion-android-done"></i> Aenean suscipit eget mi act fermentum.</li>
                                        <li><i class="ion-android-done"></i> Aenean suscipit eget mi act fermentum.</li>
                                    </ul>
                                    <p> similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                                        dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
                                </div>
                                <div class="post-tag pull-left"><i class="fa fa-tag"></i><span><a>awesome audio post</a>,</span><span><a>quotes post</a></span>
                                </div>
                            </div>
                            <hr/>

                            <div class="clearfix"></div>
                            <div class="post-comment mtb-30">
                                <h4>Comments <span class="comment-numb">(2)</span></h4>
                                <ul class="comment-list mt-30">
                                    <li>
                                        <div class="comment-avatar"><img src="assets/images/blog/5.jpg" alt=""></div>
                                        <div class="">
                                            <div class="comment-detail">
                                                <h6>John Doe</h6>
                                                <div class="post-meta"><span>March 16, 2016</span> | <span><a
                                                            class="comment-reply-btn"><i
                                                                class="fa fa-reply"></i>Reply</a></span></div>
                                                <p> Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus
                                                    eget lorem. </p>
                                            </div>
                                            <div class="comment-reply">
                                                <div class="comment-avatar"><img src="assets/images/blog/1.jpg" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="comment-detail">
                                                        <h6>Mikal marthin</h6>
                                                        <div class="post-meta"><span>March 16, 2016</span> | <span><a
                                                                    class="comment-reply-btn"><i
                                                                        class="fa fa-reply"></i>Reply</a></span></div>
                                                        <p> Blandit vel, luctus pulvinar hendrerit id Maecenas tempus
                                                            tellus eget lorem. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-reply">
                                                <div class="comment-avatar"><img src="assets/images/blog/2.jpg" alt="">
                                                </div>
                                                <div class="">
                                                    <div class="comment-detail">
                                                        <h6>Pyush Jain</h6>
                                                        <div class="post-meta"><span>March 16, 2016</span> | <span><a
                                                                    class="comment-reply-btn"><i
                                                                        class="fa fa-reply"></i>Reply</a></span></div>
                                                        <p> Blandit vel, luctus pulvinar hendrerit id Maecenas tempus
                                                            tellus eget lorem. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-avatar"><img src="assets/images/blog/3.jpg" alt=""></div>
                                        <div class="">
                                            <div class="comment-detail">
                                                <h6>Andrea Jane</h6>
                                                <div class="post-meta"><span>March 16, 2016</span> | <span><a
                                                            class="comment-reply-btn"><i
                                                                class="fa fa-reply"></i>Reply</a></span></div>
                                                <p> Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus
                                                    eget lorem. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mtb-60">
                                <h4>Leave a comment</h4>

                                <form>
                                    <div class="row mt-30">
                                        <div class="col-md-4">
                                            <input type="text" class="input-lg form-full" value="" placeholder="Name"
                                                   name="name" id="name" required/>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="input-lg form-full" value="" placeholder="Email"
                                                   name="email" id="email2" required/>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="input-lg form-full" value="" placeholder="Website"
                                                   name="website" id="website" required/>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea placeholder="Message" name="message" id="message"
                                                      class="form-full" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn-text"> Post</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- End Post Bar -->
                        <!-- Sidebar -->
                        <div class="col-lg-3">
                            <div class="sidebar-widget">
                                <h4>Search</h4>
                                <div class="widget-search pt-15">
                                    <input class="form-full input-lg" type="text" value="" placeholder="Search Here"
                                           name="search" id="wid-search">
                                    <input type="submit" value="" name="email" id="wid-s-sub">
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4>Categories</h4>

                                <ul class="categories">
                                    <li><a>simple blog post with image</a></li>
                                    <li><a>awesome audio post</a></li>
                                    <li><a>quotes post</a></li>
                                    <li><a>Neurology</a></li>
                                    <li><a>awesome video post</a></li>
                                    <li><a>cool image post</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h4>Recent Post</h4>

                                <ul class="widget-post pt-15">
                                    <li><a class="widget-post-media"> <img src="assets/images/blog/blog-small-img.jpg"
                                                                           alt=""> </a>
                                        <div class="widget-post-info">
                                            <h6><a>veritatis et quasi</a></h6>
                                            <div class="post-meta"><span> <a href="javascript:avoid(0);"><i
                                                            class="fa fa-heart-o"></i> 57</a>,</span><span>june 16</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="widget-post-media"> <img src="assets/images/blog/blog-small-img1.jpg"
                                                                           alt=""> </a>
                                        <div class="widget-post-info">
                                            <h6><a>Sed fringilla mauris</a></h6>
                                            <div class="post-meta"><span> <a href="javascript:avoid(0);"><i
                                                            class="fa fa-heart-o"></i> 57</a>,</span><span>june 16</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="widget-post-media"> <img src="assets/images/blog/blog-small-img2.jpg"
                                                                           alt=""> </a>
                                        <div class="widget-post-info">
                                            <h6><a>harum quidem rerum</a></h6>
                                            <div class="post-meta"><span> <a href="javascript:avoid(0);"><i
                                                            class="fa fa-heart-o"></i> 57</a>,</span><span>june 16</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget mb-0">
                                <h4>Popular Tags</h4>

                                <ul class="widget-tag pt-15">
                                    <li><a>Art</a></li>
                                    <li><a>Business</a></li>
                                    <li><a>Design</a></li>
                                    <li><a>Graphic</a></li>
                                    <li><a>fashion</a></li>
                                    <li><a>Model</a></li>
                                    <li><a>Photography</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar -->
                    </div>
                </div>
            </section>
            <!-- End Blog Post Section -->
        </div>
    </div>
@endsection

@section('scripts')

@endsection
