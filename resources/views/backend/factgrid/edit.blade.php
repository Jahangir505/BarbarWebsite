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
            <h3 class="tile-title">Edit Team Member</h3>
            <div class="table-responsive">
                    <form class="" action="{{route('factgrid.update',$factgrid->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$factgrid->title}}">
                                  </div>
                          </div>
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Subtitle</label>
                                        <input type="text" name="number" class="form-control" value="{{$factgrid->number}}">
                                  </div>
                          </div>

                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Facebook</label>
                                        <input type="text" name="icon" class="form-control"value="{{$factgrid->icon}}">
                                  </div>
                          </div>

                            <a href="{{route('factgrid.index')}}" class="btn btn-info btn-lg">Back</a>
                          <button type="submit" class="btn btn-primary  btn-lg">Update</button>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
