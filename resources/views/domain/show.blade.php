@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">{{ $domain->name }}</h1>
            <domain-show :domain="{{ $domain }}"></domain-show>
        </div>
    </section>
@endsection
