@extends('layouts.app')


@section('title')
    Dashboard - Client
@endsection


@section('content')
<div class="container margine-sus">
    <div class="row justify-content-center">
        <div class="col-md-10 my-5">
            @include('partials.alert')
            <div class="card card-default">
                <div class="card-header"><h3 class="h3 text-center text-info">Creaza Anunt</h3></div>
                <div class="card-body">
                  <form method="POST" action="/jobs">
                  	{{ csrf_field() }}
                  	 <div class="form-group">
					    <label for="title">Titlul Anuntului</label>
					    <input type="text" class="form-control" id="title" name="title" placeholder="Exemplu: Vand Fir Pentru Motocoasa">
					  </div>
					  <div class="form-group">
					    <label for="article-ckeditor">Descrierea Anuntului</label>
					    <textarea class="form-control" id="article-ckeditor" rows="3" name="body"></textarea>
					  </div>
					  <div class="row">
						  <div class="form-group col-md-6">
						    <label for="budget">Pret</label>
						    <input type="number" class="form-control" id="budget" name="budget">
						  </div>
						  <div class="form-group col-md-6">
						    <label for="jobcategory">Categorie</label>
						    <select class="form-control" id="jobcategory" name="category_id">
						    	<option selected disabled value="0">Selecteaza Categoria</option>
			                        @foreach ($categories as $category)
			                            <option value="{{$category->id}}">{{$category->category_name}}</option>
			                        @endforeach
						    </select>
						    </div>
					  </div>
					  <div class="row">
						  <!-- <div class="form-group col-md-6">
						    <label for="positionType">Disponibilitate</label>
						    <select class="form-control" name="positionType" id="positionType">
						    	   <option selected disabled value="0">Selecteaza Disponibilitate</option>
			                       <option value="Produs Sezonier">Produs Sezonier</option>
								   <option value="Produs Limitat">Produs Limitat</option>
								   <option value="Produs Nelimitat">Produs Nelimitat</option>
						    </select>
						  </div> -->
              <div class="form-group col-md-6">
                <label for="positionType">Image</label>
                <div class="imput-group">
                  <div class="custom-file">
                    <input type="file" name="positionType" class="custom-file-input" value="">
                    <label class="custom-file-label">Alege Fisierul</label>
                  </div>
                </div>
              </div>
						  <div class="form-group col-md-6">
						    <label for="project_duration">Stare</label>
						    <select class="form-control" id="project_duration" name="project_duration" id="project_duration">
						    	<option selected disabled value="0">Starea Produsului</option>
			                    <option value="Sigilat">Sigilat</option>
			                   	<option value="Desigilat">Desigilat</option>
			                   	<option value="Garantie">Garantie</option>
			                   	<option value="Fara Garantie">Fara Garantie</option>
						    </select>
						  </div>
					  </div>
					  <button type="submit" class="btn btn-info">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jsplugins')
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection
