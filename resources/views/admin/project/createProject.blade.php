@extends('admin.master')

@section('title') 
Add Project | Vivek Group  
@endsection 

@section('mainContent')


<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
                {!! Form::open( [ 'url'=>'project/save', 'method' =>'POST', 'enctype'=>'multipart/form-data' ] ) !!}
                <div class="card-body">
                    <div class="form-group">
                    <label>Select Category</label>
                     <select class="form-control" name="categoryId" required>
                          <option value="">Select Category Name</option>
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Project Name</label>
                    <input class="form-control" type="text" name="projectName" required>
                        <span class="text-danger">{{ $errors->has('projectName') ? $errors->first('projectName') : '' }}</span>
                  </div>
                  <div class="form-group">
                    <label>Project Description</label>
                    <textarea class="form-control" name="projectDescription" rows="2"></textarea>
                        <span class="text-danger">{{ $errors->has('projectDescription') ? $errors->first('projectDescription') : '' }}</span>
                  </div>
                  <div class="form-group">
                    <label>Project Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input class="custom-file-input" type="file" name="projectImage" accept="image/*" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <span class="text-danger">{{ $errors->has('projectImage') ? $errors->first('projectImage') : '' }}</span>
                  </div>

                  <div class="form-group">
                    <label>Feedback Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input class="custom-file-input" type="file" name="feedbackImage" accept="image/*">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <span class="text-danger">{{ $errors->has('feedbackImage') ? $errors->first('feedbackImage') : '' }}</span>
                  </div>
                  <div class="form-group">
                    <label>Publication Status</label>
                   <select class="form-control" name="publicationStatus" required>
                            <option value="">Select Publication Status</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option> 
                        </select>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
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




@endsection