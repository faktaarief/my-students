@extends('layouts.default')
@section('title', 'Insert Student')

@section('content')
    <div class="container p-3">
        <div class="row pl-3">
            <h4>Insert Student</h4>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 bg-light p-3">
                <form action="{{ route('students.update', $student->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" value="{{ $student->name }}" name="name" class="form-control col-sm-7 @error('name') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{ $student->email }}" name="email" class="form-control col-sm-7 @error('email') is-invalid @enderror" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" value="{{ $student->phone }}" name="phone" class="form-control col-sm-7 @error('phone') is-invalid @enderror" required>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control col-sm-7 @error('gender') is-invalid @enderror" id="gender" required>
                            <option @if($student->gender === 'Male') selected @endif value="Male">Male</option>
                            <option @if($student->gender === 'Female') selected @endif value="Female">Female</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" class="form-control col-sm-7 @error('address') is-invalid @enderror" cols="30" rows="4" required>{{ $student->address }}</textarea>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary text-white">Back</a>
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection