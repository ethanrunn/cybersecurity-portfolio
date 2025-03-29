@extends('layouts.app')

@section('title', 'Blogs')

@section('content')

<!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Blog list</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog list</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
        <!-- end page-title -->


        <!-- start blog-pg-section -->
        <section class="blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="blog-posts clearfix">
                        @foreach($blog as $blog)
                            <div class="post">
                                <div class="entry-media">
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">
                                        <img src="{{ asset('assets/images/' . $blog->image) }}" alt="{{ $blog->title }}" width="800px" height="400px">
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{ asset('assets/images/' . $blog->author_image) }}" width="40px" height="40px" alt>
                                            &nbsp; By <a href="#">{{ $blog->author_name }}</a>
                                        </li>
                                        <li>{{ $blog->created_at->format('F j, Y') }}</li>
                                    </ul>
                                    <h3><a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                    <p>{{ $blog->excerpt }}</p>
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="read-more">Read More..</a>
                                </div>
                            </div>
                        @endforeach





                            <!-- <div class="post">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-8.jpg" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="assets/images/blog/author.jpg" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Octobor 12,2019</li>
                                    </ul>
                                    <h3><a href="#">We Provide You the Best</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post format-video">
                                <div class="entry-media video-holder">
                                    <img src="assets/images/blog/img-9.jpg" alt>
                                    <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe">
                                        <i class="ti-control-play"></i>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="assets/images/blog/author.jpg" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Octobor 12,2019</li>
                                    </ul>
                                    <h3><a href="#">We Provide You the Best</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post format-quote">
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="assets/images/blog/author.jpg" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Octobor 12,2019</li>
                                    </ul>
                                    <h3><a href="#">We Provide You the Best</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post">
                                <div class="entry-media">
                                    <img src="assets/images/blog/img-10.jpg" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="assets/images/blog/author.jpg" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>Octobor 12,2019</li>
                                    </ul>
                                    <h3><a href="#">How to get more traffic in your website</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div> -->
                            <div class="pagination-wrapper pagination-wrapper-left">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="ti-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-pg-section -->        
@endsection