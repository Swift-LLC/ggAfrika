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
                                   <figure><img src="{{asset('images/slide1.jpeg')}}" alt="#"/></figure>
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
                                   <figure><img src="{{asset('images/slide2.jpeg')}}" alt="#"/></figure>
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
                                   <figure><img src="{{asset('images/slide3.jpeg')}}" alt="#"/></figure>
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
    <br>
    <div class="container-fluid">

        <div class="row">
          <div class="col-sm">
            <div class="card text-center pb-2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/slide3.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary float-right">	&#8594;</a>
                </div>
              </div>
          </div>
          <div class="col-sm">
            <div class="card pb-2 text-center shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/slide3.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary float-right">	&#8594;</a>
                </div>
              </div>
          </div>
          <div class="col-sm">
            <div class="card pb-2 text-center shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/slide3.jpeg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary float-right">	&#8594;</a>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm">
          <div class="card text-center pb-2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('images/slide3.jpeg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary float-right">	&#8594;</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
          <div class="card pb-2 text-center shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('images/slide3.jpeg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary float-right">	&#8594;</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
          <div class="card pb-2 text-center shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
          <img class="card-img-top" src="{{asset('images/slide3.jpeg')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary float-right">	&#8594;</a>
          </div>
      </div>
  </div>
</div>
</div>
   


</html>
@endsection
