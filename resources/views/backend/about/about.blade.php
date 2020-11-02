@extends('layouts.backend.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Social Media Information</h1>
          <p>.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active"><a href="#">About Us</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          @if(session('successMsg'))
              <div class="alert alert-success">
                  <button type="button" area-hidden="true" class="close" onclick="this.parentElement.style.display= 'none'">x</button>
                  <span><b>{{session('successMsg')}}</b></span>
              </div>
          @endif
          <div class="tile">
              <form class="form-inline" method="post" action="{{route('about.update',$data->id)}}">
                @csrf
                @method('PUT')
                  <div class="col-md-12">

                    <div class="input-group">
                      <div class="">
                          <label class="form-control bg-dark text-light">Title One</label>
                      </div>
                      <input type="text" name="title1" class="form-control" id="" value="{{$data->title1}}"/>
                    </div>

                    <div class="input-group">
                      <div class="">
                          <label class="form-control bg-dark text-light">Title Two</label>
                      </div>
                      <input type="text" class="form-control" name="title2" value="{{$data->title2}}"/>
                    </div>

                    <div class="input-group">
                      <div class="">
                          <label class="form-control bg-dark text-light">Sub Title</label>
                      </div>
                      <input type="text" class="form-control" name="subtitle" value="{{$data->subtitle}}"/>
                    </div>

                    <div class="input-group">
                      <div class="">
                          <label class="form-control bg-dark text-light">Description</label>
                      </div>
                      <textarea class="form-control" name="description" rows="8" cols="80" >{{$data->description}}</textarea>
                    </div>

                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-success" style="margin:20px auto;" value="UPDATE">
                    </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </main>
@endsection
