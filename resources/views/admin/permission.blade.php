@extends('layouts.ank')

@section('title')
   Users Roles | ANK Analytics
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Users Roles</h4>
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead class=" text-primary">
                      <th>User ID</th>
                      <th>Full Name</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>User Role</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                      @foreach($users as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->usertype }}</td>
                        <td><a href="/user-edit/{{ $row->id }}" class="btn btn-success">EDIT</a></td>
                        <form action="{{ url('user-edit/'.$row->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <td><button type="submit" class="btn btn-danger">DELETE</button></td>
                        </form>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
@endsection


@section('scripts')

@endsection













