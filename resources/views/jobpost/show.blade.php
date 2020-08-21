@extends('layouts.app')


@section('title')
    {{$job->title}}
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('partials.alert')
        <div class="col-md-7" style="margin-top:100px;" >

		   <h3 class="h3 text-info-titlu mb-4">{{$job->title}}</h3>

		   <img class="product_image" src="/storage/assets/product_dummy.webp" alt="">

           <p class="h5 text-success">Pret: {{number_format($job->budget)}} RON</p>
           {!! $job->body !!}
          <img src={{url('public/storage/positionType',$job->position_type)}}>  
      </div>
        <div class="col-md-3 h6" style="margin-top:170px;">
        	<ul class="list-unstyled">
        		<li class="mb-2">
        			<span class="text-success">
        				<i class="fas fa-clock"></i> Postat:
        			</span>
        			{{$job->created_at->diffForHumans()}}
        		</li>
        		<!-- <li class="mb-2">
        			<span class="text-success">
        				<i class="fas fa-briefcase"></i> Disponibilitate :
        			</span>
        			{{ucwords($job->position_type)}}
        		</li> -->
        		<li class="mb-2">
        			<span class="text-success">
        				<i class="fas fa-hourglass-end"></i> Stare:
        			</span>
        			{{ ucwords($job->project_duration) }}
        		</li>
        		<li class="mb-2">
        			<span class="text-success">
        				<i class="fas fa-tags"></i> Categorie:
        			</span>
        			{{ ucwords($job->category->category_name) }}
        		</li>
        	</ul>
        	<hr>
        	<ul class="list-unstyled">
        		<li class="mb-2 h5 text-info">Despre Vanzator</li>
        		<li class="mb-2">
        			<span class="text-primary">Istric Vanzator: </span>{{$jobcount}} anunturi postate</li>
        		<li class="mb-2">
        			<span class="text-primary">Membru din: </span>{{date("M Y", strtotime($job->user->created_at))}}
        		</li>
        	</ul>

         <div class="phone_number">
<span>{{ ucwords($job->phone_number) }}</span>
         </div>



        </div>
    </div>
</div>
@endsection
