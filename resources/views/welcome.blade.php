@extends('layouts.layout')

@section('title', 'Generel Provident Fund Calculator')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 p-4 text-center">
                <h1 class="home-page">Calculate General Provident Fund</h1>
                <a href="{{ route('show.information.form') }}" class="btn btn-custom">Go to Calculation Page</a>
            </div>
        </div>
    </div>


@endsection
