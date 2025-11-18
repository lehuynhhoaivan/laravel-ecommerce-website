@extends('layouts.main')
@section('title', 'Contact')
@section('content')
    <h1 class="mt-5 text-danger">Contact</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis
    earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.

    <div class="row mt-5">
        @for ($i = 0; $i < count($textContent); $i++)
            @if ($textContent[$i]['status'] === 'pending')
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $textContent[$i]['content'] }}</h2>
                            <p>{{ $textContent[$i]['text'] }}</p>
                            <div class="btn-sm btn-warning">Pending</div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $textContent[$i]['content'] }}</h2>
                            <p>{{ $textContent[$i]['text'] }}</p>
                            <div class="btn-sm btn-success">Completed</div>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
@endsection
