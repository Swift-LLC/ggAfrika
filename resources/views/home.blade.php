@extends('index')

@section('content')

<div id="wrapper">
    <div class="full_bg">
        <div class="slider_main">
           <!-- carousel code -->
           <div id="banner1" class="carousel slide">
              <ol class="carousel-indicators">
                 <li data-target="#banner1" data-slide-to="0" class="active"></li>
                 <li data-target="#banner1" data-slide-to="1"></li>
                 <li data-target="#banner1" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                 <!-- first slide -->
                 <div class="carousel-item active">
                    <div class="container">
                       <div class="carousel-caption relative">
                          <div class="row d_flex">
                             <div class="col-md-6">
                                <div class="creative">
                                   <h1> Web agency</h1>
                                   <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, </p>
                                   <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="agency">
                                   <figure><img src="images/banner_img.jpg" alt="#"/></figure>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- second slide -->
                 <div class="carousel-item">
                    <div class="container">
                       <div class="carousel-caption relative">
                          <div class="row d_flex">
                             <div class="col-md-6">
                                <div class="creative">
                                   <h1> Web agency</h1>
                                   <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, </p>
                                   <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="agency">
                                   <figure><img src="images/banner_img.jpg" alt="#"/></figure>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- third slide-->
                 <div class="carousel-item">
                    <div class="container">
                       <div class="carousel-caption relative">
                          <div class="row d_flex">
                             <div class="col-md-6">
                                <div class="creative">
                                   <h1> Web agency</h1>
                                   <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, </p>
                                   <a class="read_more" href="Javascript:void(0)">Contact us</a>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="agency">
                                   <figure><img src="images/banner_img.jpg" alt="#"/></figure>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <!-- controls -->
              <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
              </a>
           </div>
        </div>
     </div>
    </div>
   

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_01.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                        <small><a href="single-post.html" title="">24 July, 2021</a></small>
                                        <small><a href="single-post.html" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->
                        
                    
                    
                        
                    
                    

                    
                    
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Category  <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                    @forelse ($posts as $posts)
                                        
                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title="">Hello {{$posts->title}}</a></h4>
                                        <p>{{$posts->about}}</p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                        <small><a href="single-post.html" title="">{{$posts->created_at}}</a></small>
                                        <small><a href="single-post.html" title="">by Matilda</a></small>
                                        <small><a href="single-post.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                @empty
                                      <div>No Posts</div>  
                                @endforelse
                                
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html">GG Afrika</a>
                                <p>GG Afrika is a culture and heritage blog, we share culture, news and wananchi articles.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">GG la Wananchi<span>(21)</span></a></li>
                                    <li><a href="#">Culture & Heritage <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">SMEs & startups<span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Copyrights</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About GG Afrika</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Trademark</a></li>
                                    <li><a href="#">Support & FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; GG Afrika</a>.</div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="dmtop">Scroll to Top</div>
        
    </div>

    <!-- Core JavaScript
    ================================================== -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
@endsection
