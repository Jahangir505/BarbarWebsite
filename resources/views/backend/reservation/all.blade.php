@extends('layouts.backend.admin')
@section('content')
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Reservation Request</h1>
          <p>Visitors contact message</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dasboard</li>
          <li class="breadcrumb-item active"><a href="#">All Reservation</a></li>
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
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($all as $data)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->date_and_time}}</td>
                    <td>
                        @if($data->status == true)
                              <span class="p-1  bg-primary text-white">Confirmed</span>
                          @else
                                  <span class="p-1 bg-danger text-white">Not Confirm</span>
                          @endif
                    </td>
                    <td>
                      @if($data->status == false)
                          <form class="" id="status-form-{{$data->id}}" action="{{route('reservation.status',$data->id)}}" method="post">
                              @csrf
                          </form>
                          <button type="button" class="btn btn-info"  onclick="if(confirm('Are you verify this request by phone?')){
                              event.preventDefault();
                              document.getElementById('status-form-{{$data->id}}').submit();
                          }else{
                            event.preventDefault();
                          }"><i class="fa fa-check"></i></button>
                      @endif

                         @if(Auth::user()->role_id<='2')
                         <form class="" id="delete-form-{{$data->id}}" action="{{route('reservation.destroy',$data->id)}}" method="post">
                             @csrf
                             @method('DELETE')
                         </form>
                         <button type="button" class="btn btn-danger"  onclick="if(confirm('Are you sure? ?')){
                             event.preventDefault();
                             document.getElementById('delete-form-{{$data->id}}').submit();
                         }else{
                           event.preventDefault();
                         }"><i class="fa fa-trash"></i></button>
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
