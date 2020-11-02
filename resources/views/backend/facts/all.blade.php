@extends('layouts.backend.admin')
@section('content')
    </aside>
    <main class="app-content">
      <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dasboard</li>
          <li class="breadcrumb-item active"><a href="#">Service & Price</a></li>
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
          <a href="{{route('facts.create')}}" class="btn btn-primary ml-auto tile-title">Add Facts</a>

            <div class="table-responsive">
              <table class="table table-bordered" id="sampleTable">
                <thead>


                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($facts as $key=>$data)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{str_limit($data->description,50)}}</td>
                    <td><img class="img-thumbnail" src="{{asset('uploads/facts/'.$data->image)}}" alt="" width="50"></td>
                    <td>
                      <a href="{{route('facts.edit',$data->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil fa-lg"></i></a>
                         @if(Auth::user()->role_id<='2')
                                <form id="delete-form-{{$data->id}}" action="{{route('facts.destroy',$data->id)}}" method="post" style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button"  class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
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
