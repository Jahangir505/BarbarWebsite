@extends('layouts.backend.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> View Contact Message</h1>
          <p>Every Single Message Show</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active"><a href="#">View Message</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                  <table class="table table-hover table-bordered table_view">
                      <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$all->name}}</td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>{{$all->number}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$all->email}}</td>
                      </tr>
                      <tr>
                        <td>Subject</td>
                        <td>:</td>
                        <td>{{$all->subject}}</td>
                      </tr>
                      <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td>{{$all->description}}</td>
                      </tr>
                      <tr>
                        <td>Time</td>
                        <td>:</td>
                        <td>{{$all->created_at}}</td>
                      </tr>
                  </table>
              </div>
              <div class="col-md-2"></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
