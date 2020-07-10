@extends('layouts.app')

@section('title')
Angroo.ro - Cumpara si Vinde Angro pe Angrro.ro
@endsection

@section('content')
     <div class="jumbotron">
        <div class="mx-auto align-middle jumbotron-content">
       </div>
    </div>
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


    
@endsection
