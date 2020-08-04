<header >
        <div class="container">
			<div class="header">
				<div class="row">
					<div class="col-xl-6 col-lg-4 col-md-7 col-12 logo">
						<h1>
							<a href="{{route('home')}}">
								<img src="images/logo.png" class="img-fluid" alt=""/>
							</a>
						</h1>
					</div>
					<div class="col-xl-6 col-lg-8 col-md-5 col-12 rmenu">
						<nav>
							<div id="mobilemenu"></div>
							<ul>
								<li><a href="{{route('home')}}">Home</a></li>
								<li><a href="#services">Services</a></li>
								<li><a href="#product">Products</a></li>
								<li><a href="#income">Income</a></li>
								
							</ul>
							@guest
							<a class="getbtn" href="/login">Login</a>
							@else
							<a class="getbtn" href="{{ url('/logout') }}"> logout </a>
							@endguest
							
						</nav>
					</div>
				</div>
			</div>
		</div>
</header>