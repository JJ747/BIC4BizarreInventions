@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">{{ $invention->name }}</h1>
            <invention-show :invention="{{ $invention }}"></invention-show>
        </div>
    </section>
@endsection
