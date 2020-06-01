@extends('admin.master')

@section('title') 
Add Category | Vivek Group 
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
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
                {!! Form::open( [ 'url'=>'category/save', 'method' =>'POST', 'enctype'=>'multipart/form-data'] ) !!}
                <div class="card-body">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="categoryName">
                        <span class="text-danger">{{ $errors->has('categoryName') ? $errors->first('categoryName') : '' }}</span>
                  </div>
                  <div class="form-group">
                    <label>Category Description</label>
                   <textarea class="form-control" name="categoryDescription" rows="2"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Category Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input class="custom-file-input" type="file" name="categoryImage" accept="image/*" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <span class="text-danger">{{ $errors->has('categoryImage') ? $errors->first('categoryImage') : '' }}</span>
                  </div>
                  <div class="form-group">
                    <label>Publication Status</label>
                   <select class="form-control" name="publicationStatus">
                            <option>Select Publication Status</option>
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