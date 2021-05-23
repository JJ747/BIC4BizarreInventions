@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Edit {{ $domain->name }}</h1>
            <domain-edit :domain="{{ $domain }}"></domain-edit>
        </div>
    </section>
@endsection
