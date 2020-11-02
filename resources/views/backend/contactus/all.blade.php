@extends('layouts.backend.admin')
@section('content')
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Contact Message</h1>
          <p>Visitors contact message</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dasboard</li>
          <li class="breadcrumb-item active"><a href="#">All Message</a></li>
        </ul>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">All Message</h3>
            <div class="table-responsive">
              <table class="table table-bordered" id="sampleTable">
                <thead>


                  <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($all as $data)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->number}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->subject}}</td>
                    <td>{{str_limit($data->description,50)}}</td>
                    <td>
                      <a href="{{url('admin/contact/view/'.$data->id)}}" class="btn btn-info"><i class="fa fa-eye fa-lg"></i></a>
                         @if(Auth::user()->role_id<='2')
                      <a href="{{url('admin/contact/delete/'.$data->id)}}" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i></a>
                          @endif
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
