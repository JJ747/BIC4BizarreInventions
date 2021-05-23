@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Domains</h1>
            <domain-index :domains="{{ $domain }}"></domain-index>
        </div>
    </section>
@endsection
