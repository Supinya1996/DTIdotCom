@extends('layouts.main')
@section('title' , 'Index')

@extends('header')
@extends('head')

@extends('slide')
@extends('footer')

@section('content')

<div id="info">
    <div class="container">
        <div class="row text-center ">
          
          <div class="col-sm dontwantpadding wow zoomIn animated" data-wow-delay="0.25s">
            <a class="card cardsize" style="text-decoration:none;" href="/pa">
              <div class="card-body rounded-0" style=" background:url(http://susanrbryan.com/communities/3/000/002/016/543//images/12277317.jpg) no-repeat center center ;
                              background-size: cover;">
                <h1 class="card-title boader cardfont">
                    <span style="background-color: rgba(255, 255, 255, 0.5)"> ประกันอุบัติเหตุ </span>
                </h1>
              </div>
            </a>
          </div>
          <div class="col-sm dontwantpadding wow zoomIn animated" data-wow-delay="0.5s">
            <a class="card cardsize" style="text-decoration:none;" href="/auto">
                    <div class="card-body rounded-0" style=" background:url(https://c1.staticflickr.com/9/8723/17309474945_76e2b40be2_b.jpg) no-repeat center center ;
                              background-size: cover;">
                <h1 class="card-title boader cardfont">
                    <span style="background-color: rgba(255, 255, 255, 0.5)"> ประกันภัยรถยนต์ </span>
                </h1>
              </div>
            </a>
          </div>
        </div>
        <div class="row text-center ">
          
            <div class="col-sm dontwantpadding wow zoomIn animated" data-wow-delay="0.75s">
              <a class="card cardsize" style="text-decoration:none;" href="#">
                <div class="card-body rounded-0" style=" background:url(https://www.tatacapital.com/blog/ArticleImg/MainImg/235455992.jpg) no-repeat center center ;
                                background-size: cover;">
                  <h1 class="card-title boader cardfont">
                      <span style="background-color: rgba(255, 255, 255, 0.5)"> พรบ.รถยนต์ </span>
                  </h1>
                </div>
              </a>
            </div>
            <div class="col-sm dontwantpadding wow zoomIn animated" data-wow-delay="1s">
              <a class="card cardsize" style="text-decoration:none;" href="/cancer">
                      <div class="card-body rounded-0" style=" background:url(https://www.easyinsure.co.th/news/wp-content/uploads/helty.jpg) no-repeat center center ;
                                background-size: cover;">
                  <h1 class="card-title boader cardfont">
                      <span style="background-color: rgba(255, 255, 255, 0.5)"> ประกันสุขภาพ </span>
                  </h1>
                </div>
              </a>
            </div>
          </div>
    </div>
</div>

@endsection





    