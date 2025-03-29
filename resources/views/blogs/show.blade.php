@extends('layouts.app')

@section('title', $blog->title)

@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Blog Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Blog Details</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start blog-single-section -->
        <section class="blog-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="blog-content clearfix">

                            <!-- Post start -->
                            <div class="post">
                                <div class="entry-media">
                                <img src="{{ asset('assets/images/' . $blog->image) }}" alt="{{ $blog->title }}" width="800px" height="400px">
                                </div>
                                <ul class="entry-meta">
                                    <li>
                                        <img src="{{ asset('assets/images/' . $blog->author_image) }}" width="40px" height="40px" alt>
                                        &nbsp; Written by <a href="#"><span>By <strong>{{ $blog->author_name }}</strong></span></a>
                                    </li>
                                    <li><span>{{ $blog->created_at->format('F j, Y') }}</span></li>
                                </ul>
                                <h2>{{ $blog->title }}</h2>
                                <blockquote>“{{ $blog->excerpt }}”</blockquote>
                                <p>{!! nl2br(e($blog->content)) !!}</p>
                            </div>
                            <!-- Post end -->

                            <!-- start tag share -->
                            <!-- <div class="tag-share clearfix">
                                <div class="tag">
                                    <ul>
                                        <li><a href="#">Web</a></li>
                                        <li><a href="#">Program</a></li>
                                        <li><a href="#">UX/UI</a></li>
                                    </ul>
                                </div>
                                <div class="share">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <!-- end tag-share -->

                            <!-- start author box -->
                            <!-- <div class="author-box">
                                <div class="author-avatar">
                                    <a href="#" target="_blank"><img src="assets/images/blog-details/author.jpg" alt></a>
                                </div>
                                <div class="author-content">
                                    <a href="#" class="author-name">Henry Joyes</a>
                                    <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</p>
                                    <div class="socials">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- end author-box -->
                            
                            <!-- Start more posts -->
                            <div class="more-posts clearfix">
                                <div class="previous-post">
                                    <a href="#">
                                        <span class="post-control-link">Previous</span>
                                    </a>
                                </div>
                                <div class="next-post">
                                    <a href="#">
                                        <span class="post-control-link">Next post</span>
                                    </a>
                                </div>
                            </div> <!-- end more-posts -->

                            <!-- Start comments area -->
                            <div class="comments-area">
                                <div class="comments-section">
                                    <h3 class="comments-title">Comments</h3>
                                    <ol class="comments">
                                        <li class="comment even thread-even depth-1" id="comment-1">
                                            <div id="div-comment-1">
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img src="{{ asset('assets/images/downloaded/36.jpg') }}" width="90px" height="90px" alt></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>John Abraham <span class="comments-date">March 21,2025 At 9.00am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>Thanks for this breakdown, I particularly enjoyed the way you organized your points. Keep doing the good work.</p>
                                                            <div class="comments-reply">
                                                                <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div>
                                                        <div class="comment-theme">
                                                            <div class="comment-image"><img src="{{ asset('assets/images/downloaded/33.jpg') }}" width="90px" height="90px" alt></div>
                                                        </div>
                                                        <div class="comment-main-area">
                                                            <div class="comment-wrapper">
                                                                <div class="comments-meta">
                                                                    <h4>Lily Watson <span class="comments-date">March 25,2025 At 11.42am</span></h4>
                                                                </div>
                                                                <div class="comment-area">
                                                                    <p>You're right, he really articulates his points well and makes it easy to understand.</p>
                                                                    <div class="comments-reply">
                                                                        <a  class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li class="comment">
                                                            <div>
                                                                <div class="comment-theme">
                                                                    <div class="comment-image"><img src="{{ asset('assets/images/downloaded/34.jpg') }}" width="90px" height="90px" alt></div>
                                                                </div>
                                                                <div class="comment-main-area">
                                                                    <div class="comment-wrapper">
                                                                        <div class="comments-meta">
                                                                            <h4>Kelly Rogan <span class="comments-date">March 27,2025 At 6.21pm</span></h4>
                                                                        </div>
                                                                        <div class="comment-area">
                                                                            <p>It's the depth of the content for me. </p>
                                                                            <div class="comments-reply">
                                                                                <a  class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="comment">
                                            <div>
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img src="{{ asset('assets/images/downloaded/37.jpg') }}" width="90px" height="90px" alt></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>Jane Sanders <span class="comments-date">April 2,2025 At 2.20am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>This is exactly what is required, many people need to be informed about this. I'm definitely sharing. Well done.</p>
                                                            <div class="comments-reply">
                                                                <a  class="comment-reply-link" href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div> <!-- end comments-section -->

                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Post Comments</h3>
                                    <form method="post" id="commentform" class="comment-form">
                                        <div class="form-textarea">
                                            <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                        </div>
                                        <div class="form-inputs">
                                            <input placeholder="Website" type="url">
                                            <input placeholder="Name" type="text">
                                            <input placeholder="Email" type="email">
                                        </div>
                                        <div class="form-submit">
                                            <input id="submit" value="Post Comment" type="submit">
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end comments-area -->
                        </div>
                    </div>

                    <!-- Start side bar -->
                    <div class="col col-md-4">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <h3>Search</h3>
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h3>Categories</h3>
                                <ul>
                                    <li><a href="#">Cryptography</a></li>
                                    <li><a href="#">Malware Analysis</a></li>
                                    <li><a href="#">Encryption</a></li>
                                    <li><a href="#">Network Security</a></li>
                                    <li><a href="#">Information Security</a></li>
                                    <li><a href="#">Identity Access Management</a></li>
                                    <li><a href="#">Threat Detection</a></li>
                                    <li><a href="#">Change Management</a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Recent post</h3>
                                <div class="posts">
                                <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset('assets/images/downloaded/2.jpg') }}" width="75px" height="75px" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Web development is evolving rapidly with new technologies...</a></h4>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset('assets/images/downloaded/9.jpg') }}" width="75px" height="75px" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">When choosing between Laravel and Django, it’s essential...</a></h4>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset('assets/images/downloaded/23.jpg') }}" width="75px" height="75px" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Developers must follow best security practices, including...</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    @foreach(explode(',', $blog->tags) as $tag)
                                    <li>
                                        <a href="#">
                                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                                {{ trim($tag) }}
                                            </span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <br>
                            <a href="{{ url('/blog') }}" class="mt-6 inline-block text-blue-500 hover:underline">← Back to Blogs List</a>

                        </div>
                    </div>
                    <!-- End side bar -->

                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-section -->
@endsection
        






<!-- <div class="container mx-auto p-6">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <img src="{{ asset('assets/images/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover rounded-lg mb-4">

        <h1 class="text-3xl font-bold mb-2">{{ $blog->title }}</h1>
        
        <div class="text-gray-600 text-sm mb-4">
            <span>By <strong>{{ $blog->author_name }}</strong></span> | 
            <span>{{ $blog->created_at->format('F j, Y') }}</span>
        </div>

        <p class="text-gray-700 text-lg mb-4">{{ $blog->excerpt }}</p>

        <div class="text-gray-900 leading-relaxed">
            {!! nl2br(e($blog->content)) !!}
        </div>

        <div class="mt-6">
            <strong>Tags:</strong> 
            @foreach(explode(',', $blog->tags) as $tag)
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                    {{ trim($tag) }}
                </span>
            @endforeach
        </div>

        <div class="mt-6 flex items-center">
            <img src="{{ asset($blog->author_image) }}" alt="{{ $blog->author_name }}" class="w-12 h-12 rounded-full">
            <p class="ml-3 text-gray-700">Written by <strong>{{ $blog->author_name }}</strong></p>
        </div>

        <a href="{{ url('/blogs') }}" class="mt-6 inline-block text-blue-500 hover:underline">← Back to Blogs</a>
    </div>
</div> -->
