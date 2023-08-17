<header>
			<!-- TOP HEADER -->
            <div class="p-5 text-center bg-image rounded-3" style="
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
             height: 500px;
           ">
             <div class="mask" >
                <div class="d-flex justify-content-center align-items-center h-100">
                  <div class="text-white " style="padding-top: 10rem">
                    <h1 class="mb-3;text-primary" style="background-color:black;width:40%;opacity:.5;color:white;margin:0 auto">আস্সালামু আলাইকুম</h1>
                    <h3 class="mb-3;text-primary" style="background-color:black;width:40%;opacity:.5;color:white;margin:0 auto">.........</h3>
                    <h4 class="btn btn-primary mt-3 btn-outline-light btn-lg" href="#!" role="button">এখানে ক্লিক করুন </h4>
                  </div>
                </div>
              </div>
            </div>

			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->

			<!-- /MAIN HEADER -->
        </div>

			</header>

	<!-- NAVIGATION -->
    {{-- <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav" style="margin-top: 2rem;font-size:2rem">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li ><a href="{{url('/')}}"><h4>Home</h4></a></li>
                    <li ><span style="color: white">.</span></li>
                    <li class="active"><a href="#"><h4>Categories: </h4></a></li>

                    <li class="active">
                        @foreach ($categories as $category )
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $category->name }}
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($subcategories as $subcategory )
                               <h5><a class="btn btn-primary"  href="{{ url('/product_by_subCat'.$subcategory->id) }}">{{ $subcategory->name }}</a></h5>
                                @endforeach
                            </div>
                          </div>
                          @endforeach
                    </li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li ><span style="color: white">.</span></li>
                    <li><a href="/admins"><h4>Admin</h4></a></li>

                </ul>

                <!-- /NAV -->
                <!-- /NAV -->
            </div>

            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav> --}}
    <!-- /NAVIGATION -->
