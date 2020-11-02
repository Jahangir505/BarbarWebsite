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
                    <form class="" action="{{route('facts.update',$facts->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$facts->title}}">
                                  </div>
                          </div>
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Description</label>
                                        <input type="text" name="description" class="form-control" value="{{$facts->description}}">
                                  </div>
                          </div>

                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image" class="form-control"value="{{$facts->image}}">
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
