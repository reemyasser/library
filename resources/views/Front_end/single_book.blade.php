<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

@include('Front_end.includes.header')


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div id="home">
		<!-- header -->
		<!-- navbar -->
		@include('Front_end.includes.navbar')
		<!-- //navbar ends here -->
		<!-- banner -->
		<div class="banner-bg-inner">
			<!-- banner-text -->
			<div class="banner-text-inner">
				<div class="container">
					<h2 class="title-inner">
						world of reading
					</h2>

				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
		<!-- breadcrumbs -->
		<div class="crumbs text-center">
			<div class="container">
				<div class="row">
					<ul class="btn-group btn-breadcrumb bc-list">
						<li class="btn btn1">
							<a href="index.html">
								<i class="glyphicon glyphicon-home"></i>
							</a>
						</li>
						<li class="btn btn2">
							<a href="{{route('front.show.books',$book['category_id'])}}">Book Catalogue</a>
						</li>
						<li class="btn btn3">
							<a href="{{route('single.book',$book['id'])}}">Single book</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!-- Single -->
		<div class="innerf-pages section">
           
            <div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								<li data-thumb='/Images/books/{{$book['image']}}'>
									<div class="thumb-image">
										<img src='/Images/books/{{$book['image']}}' data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>
							
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>

				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>{{$book['name']}}
						
					</h3>
					
					<div class="caption">

						<ul class="rating-single">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
						<div class="clearfix"> </div>
					
					</div>
					<div class="desc_single">
						<h5>Description</h5>
						<p> {{$book['discription']}}.</p>
					</div>
					
					<div class="color-quality">
						<div class="color-quality-right">
							
                            <a class="btn btn-success" href="{{route('download.book',$book['id'])}}">download</a>
                            <a class="btn btn-success" href="{{route('read.book',$book['id'])}}">reading</a>
						</div>
					</div>
					<div class="clearfix"></div>
					
					
				</div>
				<div class="clearfix"> </div>
            </div>
           
		</div>
		<!-- /new_arrivals -->
		<div class="section singlep_btm">
			<div class="container">
				<div class="new_arrivals">
					<h4 class="rad-txt">
						<span class="abtxt1">featured</span>
						<span class="abtext"> books</span>
					</h4>
                    <!-- row3 -->
                    @foreach ($books as $item)
                        
                   
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="{{route('single.book',$item['id'])}}">
									<img style="width: 150px; height: 150px;" src="/Images/books/{{$item['image']}}" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>{{$item['name']}}</h4>
							
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									

									<div class="clearfix"> </div>
								</div>
								
							</div>
						</div>
					</div>
                    @endforeach
					<!-- //row3 -->
					<div class="clearfix"></div>
				</div>
				<!--//new_arrivals-->
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Single -->
	
		
	</div>
	<!-- //home -->
@include('Front_end.includes.footer')