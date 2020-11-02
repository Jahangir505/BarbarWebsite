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
            <h3 class="tile-title">Add New Team Member</h3>
            <div class="table-responsive">
                    <form class="" action="{{route('facts.store')}}" method="post" enctype="multipart/form-data">
                      @csrf
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control"value="">
                                  </div>
                          </div>
                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">description</label>
                                        <textarea type="text" name="description" class="form-control"value=""></textarea>
                                  </div>
                          </div>

                          <div class="col-md-12">
                                  <div class="form-group label-floating">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image" class="form-control"value="">
                                  </div>
                          </div>


                            <a href="{{route('service.index')}}" class="btn btn-info btn-lg">Back</a>
                          <button type="submit" class="btn btn-primary  btn-lg">Save</button>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
