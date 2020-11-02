@extends('layouts.backend.admin')
@section('content')
    </aside>
    <main class="app-content">

      <div class="row">

        <div class="col-md-12">
          @if($errors->any())
              <div class="alert alert-danger">
                    <ul>
                          @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                            @endforeach
                    </ul>
              </div>
          @endif
          <div class="tile">
            <h3 class="tile-title">Edit Service</h3>
            <div class="table-responsive">
                    <form class="" action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$service->title}}">
                                  </div>
                          </div>
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Subtitle</label>
                                        <input type="text" name="subtitle" class="form-control" value="{{$service->subtitle}}">
                                  </div>
                          </div>

                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Price</label>
                                        <input type="text" name="price" class="form-control"value="{{$service->price}}">
                                  </div>
                          </div>

                            <a href="{{route('service.index')}}" class="btn btn-info btn-lg">Back</a>
                          <button type="submit" class="btn btn-primary  btn-lg">Update</button>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
