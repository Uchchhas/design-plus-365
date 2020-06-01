@extends('admin.master')

@section('title') 
All Project | Vivek Group
@endsection 

@section('mainContent')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">All Project</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL No.</th>
          <th>Project Name</th>
          <th>Project Image</th>
          <th>Feedback Image</th>
          <th>Category Name</th>
          <th>Publication Status</th>
          <th>View/Edit/Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php  $count = 1; ?>
        @foreach($projects as $project)
        <tr> 
            <td>{{ $count++ }}</td>
            <th>{{$project->projectName }}</th>
            <th><img src="{{ asset($project->projectImage) }}" alt="" width="50"></th>
            <th><img src="{{ asset($project->feedbackImage) }}" alt="" width="50"></th>
             <td>{{ $project->categoryName }}</td>
            <td>{{ $project->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td> 
             <td>
              <a href="{{ url('/project/view/'.$project->id) }}" class="btn btn-info" title="View Details">
                    <span class="fa fa-eye"></span>
                </a>
                <a href="{{ url('/project/edit/'.$project->id) }}" class="btn btn-success" title="Edit">
                    <span class="fa fa-edit"></span>
                </a>
                <a href="{{ url('/project/delete/'.$project->id) }}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="fa fa-trash-o"></span>
                </a>
            </td> 
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
</div>



@endsection
