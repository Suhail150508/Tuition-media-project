@extends('frontend.master')


@section('content')



<style>
.find{
background-color:fuchsia;
}
.find:hover{
background-color:cyan;
}
.sel:hover{
    background-color:lightsalmon;
}
</style>


<div  style="

 height:100px;width:auto; margin-top:-2.5rem;
">
	<img  style="
	height:70px;width:100vw;opacity:.69" src="./img/capturea.jpg" alt="">
 <div style="position: absolute;margin-top:-8rem">
    <marquee className=" py-2"><span className='text-warning'>......</span>
   <h2 style="color:darkorange;margin-top:1rem">আল্লাহ ছাড়া কোন মালিক নেই | .......... আল্লাহ সব কিছুর উপর সর্বশক্তিমান।</h2> </marquee>
</div>
 </div>


    <div class="" style="background:lightgray; padding:4rem 1px;margin-top:-7rem">
       <div class="col-md-3" style="display:flex;justify-content:space-evenly;width:100%;height:140px;background:rgba(10, 73, 174, 10)">

        <div><img src="./img/place_left.png" style="height: 200px;width:200px;margin-top:-7rem" alt=""></div>
        <div class="find col-md-3  m-3 " style="font-size: 2.5rem; padding:2rem;width:200px;height:100px;border-radius:20px;margin:0 auto;cursor:pointer;box-shadow:4px 3px 2px gray"  ><a href="{{ url('/places1') }}"> শিক্ষক পেতে ক্লিক করুন</a></div>
        <div class="sel col-md-3 bg-primary m-3 " style="font-size: 2.5rem;padding:2rem;width:200px;height:100px;border-radius:20px;margin:0 auto; cursor:pointer;box-shadow:4px 3px 2px gray"  ><a href="{{ url('/places2') }}">স্টুডেন্ট পেতে ক্লিক করুন </a> </div>
        <div><img src="./img/place_right.png" style="height: 200px;width:200px;margin-top:-7rem" alt=""></div>
    </div>
    </div>

<!-- CSS Files -->
{{-- <link rel="stylesheet" href="https://unpkg.com/bs-brain/bsb.css" /> --}}

@foreach ($teachers as $teacher)


   <div class="card mb-3 " style="width: 400px;margin:.1rem .8rem;height:180px">
    <div class="row no-gutters">
      <div class="col-md-4 inner">
        <img src="{{asset('/storage/'.$teacher->image ) }}" style="width: 60px; height:60px" alt="img">
      </div>
      <div class="col-md-8 ">
        <div class="card-body">
          <h4 class="card-title">{{$teacher->full_name  }}</h4>
          <h5 class="card-title">{{$teacher->subject  }}</h5>
          <h5 class="card-title">{{$teacher->gender  }}</h5>
          <p class="card-title">{{$teacher->image  }}</p>
          {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
        </div>
      </div>
    </div>
    </div>

    @endforeach





		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Products</a></li>
                                    @foreach ($categories as $category)
                                    <li><a href="{{ url('/product_by_cat'.$category->id) }}">{{$category->name }}</a></li>
                                    @endforeach
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
                                        {{-- @foreach ($products as $product ) --}}





										<!-- /product -->

									</a>
                                    </div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section" >
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div style="background-color:mediumblue;padding:4px 1px">
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div  style="background-color:mediumblue;padding:4px 1px">
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div  style="background-color:mediumblue;padding:4px 1px">
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div  style="background-color:mediumblue;padding:4px 1px">
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a  class="btn " style="background-color:mediumblue;color:white;font-weight:900;font-size:2rem;border-radius:10px"  href="#" > Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Products</a></li>
                                    @foreach ($categories as $category)
                                    <li><a href="{{ url('/product_by_cat'.$category->id) }}">{{$category->name }}</a></li>
                                    @endforeach
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
                    <div class="col-md-12" >
                        <div class="row">
                            <div class="products-tabs"  >
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        <!-- product -->
                                        @foreach ($topProducts as $topProduct )
                    @php
                    $topProduct['image'] = explode("|",$topProduct->image);

                    $images = $topProduct->image[0];
                    @endphp

                                       <div class="product" >
                                            <div class="product-img"><a href="{{ url('/view-details'.$topProduct->id) }}"  style="width: 4%; height:10%">
                                                <img src="{{ asset('/image/'.$images) }}" alt="" style="width: 26rem;height:24rem">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div></a>
                                            <div class="product-body">
                                                {{-- <p class="product-category"><a href="{{ url('/view-details'.$topProduct->id) }}">{{ $topProduct->category->name }}</a></p>
                                                <h3 class="product-name"><a href="{{ url('/view-details'.$topProduct->id) }}">{{ $topProduct->name }}</a></h3> --}}
                                                <h4 class="product-price"><a href="{{ url('/view-details'.$topProduct->id) }}">&#2547: {{  $topProduct->price }} <del class="product-old-price">$990.00</del> </a> </h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns" style="display: flex;justify-content:center">

                                                        <div class="wishlist">
                                                            <form action="{{ url('/wishlist') }}" method="post">
                                                                @csrf
                                                            <input type="hidden" name="id" value="{{ $topProduct->id }}">
                                                            <input type="hidden" name="price" value="{{ $topProduct->price }}">
                                                       <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                                                    </form>
                                                    </div>

                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                     <a href="{{ url('/view-details'.$topProduct->id) }}"><button class="quick-view"><i class="fa fa-eye"></i></button></a>
                                                </div>
                                            </div>

                                            <div class="add-to-cart">
                                                <form action="{{ url('/add-to-cart') }}" method="post" >
                                                    @csrf
                                                <input type="hidden" name="id" value="{{ $topProduct->id }}">
                                                <input type="hidden" name="price" value="{{ $topProduct->price }}">
                                                <button class="add-to-cart-btn" ><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </form>
                                            </div>

                                        </div>
                                        @endforeach
                                        <!-- /product -->

                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
            </div>
            <!-- /SECTION -->

{{-------------- -small topsellingb start---------- --}}
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        @endsection
