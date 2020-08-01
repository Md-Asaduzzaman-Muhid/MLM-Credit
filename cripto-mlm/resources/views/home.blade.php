@extends('layouts.app')

@section('content')
<section class="topbanner container-fluid pt-1">
		<div class="container">
		<div class="logo-banner"><img src="images/viral-banner.png" alt=""/></div>
			<div class="row">
				<div class="col-lg-6 col-12 video">
					<video width="100%" height="100%" controls>
					  <source src="video/video.mp4" type="video/mp4">
					  <source src="video/video.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video>
				</div>
				<div class="col-lg-6 col-12 text-center textinfo">
					<h3>IS CUSTOM DONE FOR YOU! </h3>
					<p>Get CUSTOM DONE FOR YOU Social Media and 
					Marketing Results and More to Support Your Business. Then You can have MORE TIME and Turn Your Advertising Budget into an INCOME Source to <span>TRANSFORM YOUR LIFE!</span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="section-h2 container-fluid py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 ctitle text-center">
					<h3>Our UNIQUE DONE FOR YOU SYSTEM
					<span>Will CHANGE YOUR LIFE</span>
					</h3>
				</div>
				<div class="col-lg-4 col-12 text-center sbox sbox1" id="services">
					<div class="sinner">
						<h5>Custom Done <br>For You Services</h5>
						<ul>
							<li>Custom Sales Pages to Promote Your Business or Opportunity.</li>
							<li>Social Media Content for Your Home Based Direct Sales 
							Business.</li>
							<li>Online Video Banners.</li>
							<li>Automated Marketing and Follow up Messages.</li>
							<li>Complete Advertising 
							Campaign to Build Your 
							Business.</li>
						</ul>
						<a class="morebtn" href="register.html">Learn More</a>
					</div>
				</div>
				<div class="col-lg-4 col-12 text-center sbox sbox2" id="product">
					<div class="sinner">
						<h5>Unlimited New Unique<br>Social Sales Pages</h5>
						<div class="imgbox">
							<figure>
								<img class="img-fluid" src="images/sbox2.png" alt=""/>
							</figure>
						</div>
						<a class="morebtn" href="register.html">Learn More</a>
					</div>
				</div>
				<div class="col-lg-4 col-12 text-center sbox sbox3" id="income">
					<div class="sinner">
						<h5>Residual<br>Income Opportunity</h5>
						<div class="imgbox">
							<figure>
								<img class="img-fluid" src="images/sbox3.png" alt=""/>
							</figure>
						</div>
						<p class="income-class">Powerful New<br>High Residual<br>Proprietary<br>Compensation Plan</p>
						<a class="morebtn" href="register.html">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
