@extends('layout.app')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Employees
                       <a href="{{ url('admin/employee/create') }}" class="btn btn-primary float-end">Add Employee</a>
                    </h4>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection