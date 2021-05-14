@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <p> Test</p>
            <inventions :all-inventions="{{ $invention }}" :current-user="{{ Auth::user() }}"></inventions>
        </div>
    </section>
@endsection
