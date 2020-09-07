@extends('master')
@section('content')

<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Subcategory Name: &nbsp;&nbsp;{{$sub_category->name}} </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container">

		<!-- Breadcrumb -->
		<nav aria-label="breadcrumb ">
		  	<ol class="breadcrumb bg-transparent">
		    	<li class="breadcrumb-item">
		    		<a href="{{route('mainpage')}}" class="text-decoration-none secondarycolor"> Home </a>
		    	</li>
		    	<li class="breadcrumb-item">
		    		<a href="#" class="text-decoration-none secondarycolor"> Category </a>
		    	</li>
		    	<li class="breadcrumb-item">
		    		<a href="#" class="text-decoration-none secondarycolor"> Category Name </a>
		    	</li>
		    	<li class="breadcrumb-item active" aria-current="page">
					Subcategory Name
		    	</li>
		  	</ol>
		</nav>

		<div class="row mt-5">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<ul class="list-group">
					@foreach($subcategories as $subcategory)
				  	<li class="list-group-item <?php if($subcategory->id == $sub_category->id) echo 'active';?>">
				  		<a href="{{route('subcategorypage',$subcategory->id)}}" class="text-decoration-none secondarycolor"> {{$subcategory->name}} </a>
				  	</li>
				  @endforeach
				  	
				</ul>
			</div>	


			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

				<div class="row">
					@if(count($sub_category->items)>0)
					@foreach($sub_category->items as $item)
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="card pad15 mb-3">
						  	<img src="{{asset($item->photo)}}" class="card-img-top" alt="...">
						  	
						  	<div class="card-body text-center">
						    	<h5 class="card-title text-truncate">{{$item->name}}</h5>
						    	
						    	<p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">{{number_format($item->price)}} Ks</span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}">Add to Cart</a>
						  	</div>
						</div>
					</div>
					@endforeach
					@else
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card mb-3">
							<h1 class="text-center">Item Not found</h1>
						</div>
					</div>
					@endif
				</div>

				@if(count($sub_category->items) > 0)
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-end">
					    <li class="page-item disabled">
					      	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="icofont-rounded-left"></i>
					      	</a>
					    </li>
					    <li class="page-item active">
					    	<a class="page-link" href="#">1</a>
					    </li>
					    <li class="page-item ">
					    	<a class="page-link" href="#">2</a>
					    </li>
					    <li class="page-item">
					    	<a class="page-link" href="#">3</a>
					    </li>
					    <li class="page-item">
					      	<a class="page-link" href="#">
					      		<i class="icofont-rounded-right"></i>
					      	</a>
					    </li>
					</ul>
				</nav>
				@endif
			</div>
		</div>

		
	</div>
	
@endsection