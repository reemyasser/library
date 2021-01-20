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
							<a href="{{route('front.show.books',$id)}}">book catalogue</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!-- Shop -->
		<div class="innerf-pages section">
			<div class="container-cart">
				<!-- product left -->
				<div class="side-bar col-md-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
                            Categories</h3>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <ul>

                                @foreach ($categories as $item)
                                    
                            
                                <li>
                                    @if ($id==$item['id'])
                                        
                                   
                                    <input type="checkbox" checked value="{{$item['id']}}" name='categories[]'class="checked">
                                   @else
                                   <input type="checkbox"  value="{{$item['id']}}" name='categories[]'class="checked">
                                  
                                    @endif  <span class="span">{{$item->name}}  </span>
                                </li>
                                @endforeach

                            </ul>
                       
					</div>
					<!-- // preference -->
					<div class="search-hotel">
						<h3 class="shopf-sear-headits-sear-head">
							<span> Book </span> in focus</h3>
                       
							<input id="search" type="search" placeholder="search here" name="search" required="">
						
					</div>
					
				
				
				
				
					


				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="left-ads-display col-md-9">
					<div class="wrapper_top_shop">
						<!-- product-sec1 -->
						<div class="product-sec1">
                            <!-- row1-->
                            @php
                            $i=0
						@endphp
						<div id='old_books'>
                            @foreach ($books as $item)
                          
                            @php
                            $i++;
                        @endphp
							<div  class="col-md-3 product-men women_two">
								<div  class="product-chr-info chr">
                                    <a href="{{route('single.book',$item->id)}}">
									<div class="thumbnail">
										
											<img style="height: 150px; width: 150px;" src='/Images/books/{{$item->image}}' alt="">
										
									</div>
									<div  class="caption">
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
                                </a>
								</div>
							</div>
						
                            @if ($i==4)
                                
                           
                            <div class="clearfix"></div>
                            @php
                                $i=0;
                            @endphp
                            @endif
                            @endforeach
						</div>
                            <div id="books" >
                            
                            </div>
						</div>

						
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Shop -->
 
<!-- //footer -->
@section('scripts')
<script>

    $(document).ready(function(){
        var values = [];
		$('input[name="categories[]"]:checked').each(function() {
			values.push(this.value);
			});
		
      
        $('.checked').change(function(){
            
            if($(this).is(':checked')){
            values.push($(this).val());
            }
            else if($(this).not(':checked')){
                
                values.splice( $.inArray($(this).val(), values), 1 );
            }
          

		if(values!=''){

        $.ajax({
            url:"{{route('select.category')}}",
            method:'POST',
            data:{
                '_token':"{{ csrf_token()}}",
                'v':values

            },
            success:function(respose){
				$('#books').show();
                $('#books').html(respose);
                $('#old_books').hide();
            }


        });
		}
		else
		{
			$('#books').hide();
		}
        });


   
    });
	$(document).ready(function(){
		$('#search').keyup(function(){

var valsearch= $(this).val();
 if(valsearch!=''){
$.ajax({
	 url:"{{route('search.books')}}",
	 method:'POST',
	 data:{
		 '_token':"{{ csrf_token()}}",
		 'search':valsearch

	 },
	 success:function(respose){
		$('#books').show();
		 $('#books').html(respose);
		 $('#old_books').hide();
	 }
	 


 });
 }
else{
	$('#books').hide();
	

}	 

});
	});
</script>
    
@endsection
@include('Front_end.includes.footer')
