@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')

@include('partials.desktopnavigation')

@include('partials.mobilenavigation')


<div class="container mob-gap">
    <div class="row justify-content-center mobile-gap">
        <div class="col-md-10 my-5">
            @include('partials.alert')
            <div class="card card-default">
            	<div class="row">
<div>
<div class="search">
	<!-- <input type="text" name="q" class="searchbox" placeholder="Search Twitter"> -->
  <input type="text" class="searchbox" placeholder="Search Jobs" aria-label="Amount (rounded to the nearest dollar)" aria-describedby="basic-addon" name="search">
	<!-- <button type="submit" class="searchbtn"><i class="fas fa-search"></i></button> -->
  <button class="searchbtn " id="basic-addon" type="submit"><i class="fas fa-search"></i></button>
</div>
</div>

	                <div class="card-body col-lg-9">
	                    @if(count($jobs) > 0)
		                    @foreach ($jobs as $job)
		                <div class="product-listing-container">
  <section class="product-listing-image-box" >
<img class="product-listing-image" src="{{url('public/images',$job->position_type)}}" id="product-image"> </li>
  </section>
  <section class="product-listing-info-box" >
    <ul class="product-listing-details-ul" >
    <li class="product-listing-title-li" >  <p class="product-listing-title-p"><a href="jobs/{{$job->id}}" class="product-listing-title-a">{{$job->title}}</a></p> </li>
    <li class="product-listing-price-li" >  <span class="product-listing-price-span" >{{$job->budget}} LEU/RON</span> </li>
    </ul>
  </section>
</div>

		                    @endforeach
		                    {{ $jobs->links() }}
		                @else
		                	<h2 class="h2 text-muted text-center">Nici-un rezultat</h2>
		                @endif
	                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
