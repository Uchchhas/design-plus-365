@extends('admin.master')

@section('title') 
User List
@endsection
@section('mainContent')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">User List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL No.</th>
          <th>User ID</th>
          <th>User Name</th>
          <th>Email Address</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php  $count = 1; ?>
        @foreach ($users as $user)
        <tr> 
            <td>{{ $loop->index+1 }}. </td>
            <td>{{ $user->id }}</td>
            <th>{{ $user->name }}</th>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ url('#'.$user->id) }}" class="btn btn-success" title="Edit">
                    <span class="fa fa-edit"></span>
                </a>
                <a href="{{ url('#'.$user->id) }}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this'); ">
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

     {{ $users->links() }}
</div>
@endsection
