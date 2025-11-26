@extends('layouts.main')
@section('title', 'Register')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <h2 class="text-center mb-3">Register</h2>
            <div class="card">
                <div class="card-body p-3">
                    <form action="{{ route('register.handle') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control">
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                            @error('confirm_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
