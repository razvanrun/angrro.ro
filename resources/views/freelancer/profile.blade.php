@extends('layouts.app')


@section('title')
    Profile - {{$user->name}}
@endsection

@section('select2css')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            @include('partials.alert')
            <div class="row mb-3 profile-gap">
                <div class="col-md-2 text-center">
                    @if(!empty($profile->photo))
                      <img class="p-0 profilepicture rounded-circle" src="/storage/photo/{{$profile->photo}}"   data-toggle="modal" data-target="#uploadphoto{{$user->id}}">
                    @else
                       <i class="fas fa-user-circle fa-10x text-muted"  data-toggle="modal" data-target="#uploadphoto{{$user->id}}"></i>
                    @endif



                    {{-- Upload Photo --}}
                <div class="modal fade" id="uploadphoto{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <form action="{{url('/profile/uploadphoto')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-header">
                          <h5 class="modal-title text-info" id="exampleModalLabel">Incarca Fotografie</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body editworksbody">
                          <div class="form-group">
                            <input type="file" class="form-control-file text-center" id="profilepicture" name="profilepicture" aria-describedby="fileHelp">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
                          <button type="submit" class="btn btn-primary">Salveaza Modificarile</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                </div>
                <div class="col-md-10 pl-5">
                    <h3 class="h3 profile-name-gap text-info d-inline-block">{{$user->name}}</h3>
                     @if ($profile !== null)
                     <button class="btn profile-name-gap btn-default float-right" data-toggle="modal" data-target="#editprofile{{$user->id}}"><i class="far fa-edit text-success"></i> <span class="text-success h6">Editeaza</span></button>
                    @else
                      <button class="btn profile-name-gap btn-default float-right" data-toggle="modal" data-target="#addprofile{{$user->id}}"><i class="far fa-edit text-success"></i> <span class="text-success h6">Editeaza</span></button>
                    @endif
                    <h5 class="h5">
                       @if ($profile !== null)
                         {{$profile->job_title}}
                       @endif
                    </h5>
                    <small class="h6 text-muted"><i class="fas fa-map-marker-alt"></i>
                      @if ($profile !== null)
                         {{$profile->city}}, {{$profile->province}} {{$profile->country}}
                       @endif</small>
                </div>
            </div>
            {{-- Edit Profile --}}
            @if ($profile !== null)
            <div class="modal fade" id="editprofile{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @else
              <div class="modal fade" id="addprofile{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @endif
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-info" id="exampleModalLabel">Editeaza Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body editworksbody">
                   <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <!-- <i class="fas fa-briefcase"> --> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        	 width="32.666px" height="32.666px" viewBox="0 0 32.666 32.666" style="enable-background:new 0 0 32.666 32.666;"
                        	 xml:space="preserve">
                        <g>
                        	<path d="M28.189,16.504h-1.666c0-5.437-4.422-9.858-9.856-9.858l-0.001-1.664C23.021,4.979,28.189,10.149,28.189,16.504z
                        		 M16.666,7.856L16.665,9.52c3.853,0,6.983,3.133,6.981,6.983l1.666-0.001C25.312,11.735,21.436,7.856,16.666,7.856z M16.333,0
                        		C7.326,0,0,7.326,0,16.334c0,9.006,7.326,16.332,16.333,16.332c0.557,0,1.007-0.45,1.007-1.006c0-0.559-0.45-1.01-1.007-1.01
                        		c-7.896,0-14.318-6.424-14.318-14.316c0-7.896,6.422-14.319,14.318-14.319c7.896,0,14.317,6.424,14.317,14.319
                        		c0,3.299-1.756,6.568-4.269,7.954c-0.913,0.502-1.903,0.751-2.959,0.761c0.634-0.377,1.183-0.887,1.591-1.529
                        		c0.08-0.121,0.186-0.228,0.238-0.359c0.328-0.789,0.357-1.684,0.555-2.518c0.243-1.064-4.658-3.143-5.084-1.814
                        		c-0.154,0.492-0.39,2.048-0.699,2.458c-0.275,0.366-0.953,0.192-1.377-0.168c-1.117-0.952-2.364-2.351-3.458-3.457l0.002-0.001
                        		c-0.028-0.029-0.062-0.061-0.092-0.092c-0.031-0.029-0.062-0.062-0.093-0.092v0.002c-1.106-1.096-2.506-2.34-3.457-3.459
                        		c-0.36-0.424-0.534-1.102-0.168-1.377c0.41-0.311,1.966-0.543,2.458-0.699c1.326-0.424-0.75-5.328-1.816-5.084
                        		c-0.832,0.195-1.727,0.227-2.516,0.553c-0.134,0.057-0.238,0.16-0.359,0.24c-2.799,1.774-3.16,6.082-0.428,9.292
                        		c1.041,1.228,2.127,2.416,3.245,3.576l-0.006,0.004c0.031,0.031,0.063,0.06,0.095,0.09c0.03,0.031,0.059,0.062,0.088,0.095
                        		l0.006-0.006c1.16,1.118,2.535,2.765,4.769,4.255c4.703,3.141,8.312,2.264,10.438,1.098c3.67-2.021,5.312-6.338,5.312-9.719
                        		C32.666,7.326,25.339,0,16.333,0z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        </svg> </i>&nbsp;Telefon</span>
                      </div>
                      <input type="text" id="editJobTitle" class="form-control" name="edit_job_title" value="{{$profile !== null ? $profile->job_title : ''}}">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt" va></i>&nbsp;Oras</span>
                      </div>
                      <input type="text" id="editCity" class="form-control"  name="edit_city" value="{{$profile !== null ? $profile->city : ''}}">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i>&nbsp;Judet</span>
                      </div>
                      <input type="text" id="editProvince" class="form-control"  name="edit_province" value="{{$profile !== null ? $profile->province : ''}}">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i>&nbsp;Tara</span>
                      </div>
                      <input type="text" id="editCountry" class="form-control"  name="country" value="{{$profile !== null ? $profile->country : ''}}">
                    </div>
                    <div class="form-group">
                      <span class="input-group-text"><i class="fas fa-briefcase"></i>&nbsp;Descriere</span>
                      <textarea class="form-control" id="editOverview"  name="edit_overview" rows="3">{{$profile !== null ? $profile->overview : ''}}</textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
                     @if ($profile !== null)
                     <button type="submit" class="btn btn-primary editProfileButton" data-dismiss="modal" data-id="{{$user->id}}">Salveaza modificarile</button>
                    @else
                     <button type="submit" class="btn btn-primary addProfileButton" data-dismiss="modal">Salveaza modificarile</button>
                    @endif
                  </div>
                </div>
              </div>
        </div>
            <div class="row mb-3 description-container">
                <div class="col-12 description-box ">
                  <h4 class="h5 text-info">Descriere</h4>
                  <p>{!! $profile !== null ? nl2br(e($profile->overview)) : '' !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jsplugins')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
        $('.select2').select2({
          width: 'resolve',
          placeholder: "Please select Skills",
          allowClear: true
        });
        $('.selectedskills').select2().val({!! json_encode($user->skills()->allRelatedIds()) !!}).trigger('change');
    });
    </script>
@endsection
