@extends('admin.master')

@section('title') 
Add Project Gallery Images | Vivek Group  
@endsection 

@section('mainContent')

<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <!-- <h3 class="text-center text-success">{{ Session::get('message') }}</h3> -->
            {!! csrf_field() !!}

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Project Gallery Images</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
                {!! Form::open( [ 'url'=>'/project/gallery/save', 'method' =>'POST', 'enctype'=>'multipart/form-data' ] ) !!}
                <div class="card-body">
                    <div class="form-group">
                    <label>Select Project</label>
                     <select class="form-control" name="projectId" required>
                          <option value="">Select Project Name</option>
                          @foreach($projects as $project)
                          <option value="{{ $project->id }}">{{ $project->projectName }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Image Title</label>
                    <input class="form-control" type="text" name="title" required>
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                  </div>
                  
                  <div class="form-group">
                    <label>Project Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input class="custom-file-input" type="file" name="projectGalleryImage" accept="image/*" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    <span class="text-danger">{{ $errors->has('projectGalleryImage') ? $errors->first('projectGalleryImage') : '' }}</span>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn" class="btn btn-primary">Upload</button>
                  <input type="button" class="btn btn-danger float-right" value="Cancel" onclick="location.href = '{{ url('/home')}}';">
                </div>
                {!! Form::close() !!}
              <!-- </form> -->
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
</div>

<hr>
<div class="container">
  <div class="row">
  @if($projectGalleryImages->count())
     @foreach($projectGalleryImages as $projectGalleryImage)
      <div class="col-md-3">
        <div class="thumbnail">
          <a href="{{ asset($projectGalleryImage->projectGalleryImage) }}">
            <img src="{{ asset($projectGalleryImage->projectGalleryImage) }}" alt="Lights" style="width:100%; padding-bottom: 15px;" title="{{ $projectGalleryImage->title }}">
          </a>
          <a href="{{ url('/project/gallery/delete/'.$projectGalleryImage->id) }}" onclick="return confirm('Are you sure to delete this'); "><span style="position:absolute; top:0; right:0;"><i class="fa fa-times-circle-o" title="Delete" aria-hidden="true"></i></span> </a>
        </div>
      </div>
     @endforeach
   @endif
</div>
</div>

@endsection