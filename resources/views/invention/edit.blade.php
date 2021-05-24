@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Edit {{ $invention->name }}</h1>
            <invention-edit :invention="{{ $invention }}"></invention-edit>
        </div>
    </section>
@endsection
