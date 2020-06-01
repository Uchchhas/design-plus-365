@extends('admin.master')

@section('title') 
All Categories | Vivek Group  
@endsection 

@section('mainContent')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">All Categories</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL No.</th>
          <th>Category Name</th>
          <th>Category Image</th>
          <th>Category Description</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php  $count = 1; ?>
       @foreach($categories as $category)
        <tr> 
            <!-- <th scope="row">{{$category->id}}</th> -->
            <td>{{ $count++ }}</td>
            <th>{{$category->categoryName}}</th>
            <th><img src="{{ asset($category->categoryImage) }}" alt="" width="50"></th>
            <td>{{$category->categoryDescription}}</td>
            <td>{{ $category->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td> 
             <td>
                <a href="{{ url('/category/edit/'.$category->id) }}" class="btn btn-success" title="Edit">
                    <span class="fa fa-edit"></span>
                </a>
                <a href="{{ url('/category/delete/'.$category->id) }}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this'); ">
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
