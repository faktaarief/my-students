@extends('layouts.default')
@section('title', 'Students')

@section('content')
    <div class="container p-3">
        @if (session('status'))
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-11">
                <h4>List Students</h4>
            </div>
            <div class="col-sm-1">
                <a href="{{ route('students.create') }}" class="btn btn-primary">
                    Insert
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary">
                                            Edit
                                        </a>
                                        <button class="btn btn-danger text-white" onclick="return confirm('Are you sure want to delete this operator ?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection