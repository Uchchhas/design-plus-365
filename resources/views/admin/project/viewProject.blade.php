@extends('admin.master')

@section('title') 
View Project | Vivek Group
@endsection 

@section('mainContent')

<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        </div>
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input class="form-control" type="text" value="{{ $project->categoryName }}" name="categoryName" disabled>
                  </div>
                  <div class="form-group">
                    <label>Project Name</label>
                    <input class="form-control" type="text" value="{{ $project->projectName }}" name="projectName" disabled>
                  </div>
                  <div class="form-group">
                    <label>Project Description</label>
                    <input class="form-control" type="text" value="{{ $project->projectDescription }}" name="address" disabled>
                  </div>
                  
                  
                  <div class="form-group">
                    <label>Project Image</label>
                    <div class="input-group">
                      <img src="{{ asset($project->projectImage) }}" alt="" height="150" width="150">
                  </div>
                  <div class="form-group">
                    <label>Feedback Image</label>
                    <div class="input-group">
                      <img src="{{ asset($project->feedbackImage) }}" alt="" height="60" width="350">
                  </div>
                  <div class="form-group">
                    <label>Publication Status</label>
                    <input class="form-control" type="text" value="{{ $project->publicationStatus == 1 ? 'Published' : 'Unpublished' }}" name="publicationStatus" disabled>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ url('/project/edit/'.$project->id) }}" class="btn btn-success" title="Edit">
                    <span class="fa fa-edit"></span>
                </a>
                <a href="{{ url('/project/delete/'.$project->id) }}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="fa fa-trash-o"></span>
                </a>
                  <input type="button" class="btn btn-info float-right" value="Back" onclick="location.href = '{{ url('/project/manage')}}';">
                </div>
              </form>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
</div>


@endsection