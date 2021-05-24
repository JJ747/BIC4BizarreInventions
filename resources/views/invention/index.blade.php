@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Inventions</h1>
            <invention-index :inventions="{{ $invention }}"></invention-index>
        </div>
    </section>
@endsection
