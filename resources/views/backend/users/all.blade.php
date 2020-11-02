@extends('layouts.backend.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dasboard</li>
          <li class="breadcrumb-item active"><a href="#">All Users</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Role</th>
                    <th>Time</th>
                    <th>Menage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $data)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->roleName->role_name}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                      <a href=""><i class="fa fa-plus-square fa-lg"></i></a>
                      <a href=""><i class="fa fa-pencil-square fa-lg"></i></a>
                      <a href=""><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
