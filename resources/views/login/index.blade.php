@extends('layouts.main')
@section('content')
@section('title', 'Login')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <h2 class="text-center mb-3">Login</h2>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="cart-body p-3">
                <form action="{{ route('login.handle') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">User Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection