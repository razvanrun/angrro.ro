@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section id="BrowseCategories">
    <div class="container">
        <h2 class="h2 text-center">Cauta Anunturi</h2>
        <h4 class="h4 text-center mb-5 text-muted">Gaseste Inspiratia pentru Afacerea sau Familia ta</h4>
        <div class="row mb-5">
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=1">
               <img  class="icon-category"  src="/storage/assets/handshake-icon-flat-style_169241-482.jpg" alt="">
               <h5 class="h5 text-muted">Servicii & Oferte</h5></a>
            </div>
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=2">
              <img  class="icon-category"  src="/storage/assets/images (3).png" alt="">
              <h5 class="h5 text-muted">Animale de Companie</h5></a>
            </div>
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=3">
              <img  class="icon-category"  src="/storage/assets/baby-twin-flat-icon-vector-4961010.jpg" alt="">
                <h5 class="h5 text-muted">Nou Nascuti</h5></a>
            </div>
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=4">
              <img  class="icon-category"  src="/storage/assets/truck_farm_agriculture_agronomy-512.png" alt="">
                <h5 class="h5 text-muted"> Agronomie </h5></a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=5">
              <img  class="icon-category"  src="/storage/assets/images (2).png" alt="">
               <h5 class="h5 text-muted">Imobiliare</h5></a>
            </div>
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=6">
              <img  class="icon-category"  src="/storage/assets/casa.jpg" alt="">
                <h5 class="h5 text-muted">Casa si Gradina</h5></a>
            </div>
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=7">
              <img  class="icon-category"  src="/storage/assets/829497_beauty_512x512.png" alt="">
                <h5 class="h5 text-muted">Cosmetice</h5></a>
            </div>
            <div class="col-sm text-center hvr-grow"><a href="/userdashboard?cat=8">
              <img class="icon-category" src="/storage/assets/images (1).png" alt="">
                <h5 class="h5 text-muted">Electronice & Electrocasnice</h5></a>
            </div>
        </div>
    </div>
</section>
<!-- Mobile Categories Start -->
<div class="container-mobile-category">

  <div class="content-wrapper">
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=1">
         <img  class="icon-category-mobile"  src="/storage/assets/handshake-icon-flat-style_169241-482.jpg" alt="">
         <h5 class="h5 text-muted">Servicii & Oferte</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=2">
        <img  class="icon-category-mobile"  src="/storage/assets/images (3).png" alt="">
        <h5 class="h5 text-muted">Animale de Companie</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=3">
        <img  class="icon-category-mobile"  src="/storage/assets/baby-twin-flat-icon-vector-4961010.jpg" alt="">
          <h5 class="h5 text-muted">Nou Nascuti</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=4">
        <img  class="icon-category-mobile"  src="/storage/assets/truck_farm_agriculture_agronomy-512.png" alt="">
          <h5 class="h5 text-muted"> Agronomie </h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=5">
        <img  class="icon-category-mobile"  src="/storage/assets/images (2).png" alt="">
         <h5 class="h5 text-muted">Imobiliare</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=6">
        <img  class="icon-category-mobile"  src="/storage/assets/casa.jpg" alt="">
          <h5 class="h5 text-muted">Casa si Gradina</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=7">
        <img  class="icon-category-mobile"  src="/storage/assets/829497_beauty_512x512.png" alt="">
          <h5 class="h5 text-muted">Cosmetice</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=8">
        <img class="icon-category-mobile" src="/storage/assets/images (1).png" alt="">
          <h5 class="h5 text-muted">Electronice & Electrocasnice</h5></a>
      </div>
    </div>
    <div class="child">
      <div class="text-center"><a href="/userdashboard?cat=9">
        <img class="icon-category-mobile" src="/storage/assets/1803330.png" alt="">
          <h5 class="h5 text-muted">Locuri de Munca</h5></a>
      </div>
    </div>
  </div>
</div>
<!-- Mobile Categories Stop -->
<div class="container">
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
<img class="product-listing-image" src="{{ asset('storage/assets/image.jpeg') }}" id="product-image"> </li>
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
