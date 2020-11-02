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
          <li class="breadcrumb-item active"><a href="#">Social Media</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <form class="form-inline" method="post" action="{{url('admin/manage/social/update')}}">
                @csrf
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-facebook-square"></i></span>
                      </div>
                      <input type="text" name="facebook" class="form-control" id="" value="{{$data->sm_facebook}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-twitter-square"></i></span>
                      </div>
                      <input type="text" class="form-control" name="twitter" value="{{$data->sm_twetter}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-google-plus-square"></i></span>
                      </div>
                      <input type="text" class="form-control" name="google" value="{{$data->sm_google}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control" name="phone" value="{{$data->sm_phone}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-map-marker"></i></span>
                      </div>
                      <input type="text" class="form-control" name="address" value="{{$data->sm_address}}"/>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-skype"></i></span>
                      </div>
                      <input type="text" class="form-control" name="skype" value="{{$data->sm_skype}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-rss"></i></span>
                      </div>
                      <input type="text" class="form-control" name="rss" value="{{$data->sm_rss}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-linkedin-square"></i></span>
                      </div>
                      <input type="text" class="form-control" name="linkedin" value="{{$data->sm_linkedin}}"/>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-envelope"></i></span>
                      </div>
                      <input type="text" class="form-control" name="email" value="{{$data->sm_email}}"/>
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
