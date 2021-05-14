@extends('layouts.app')

@section('content')
    <section class="section is-fullheight">
        <example-component title="Dashboard">
            @if (session('status'))
                <query-message :success="true" :fail="false" message="{{ session('status') }}"></query-message>
            @endif
            <p>Welcome <strong>{{Auth::user()->name }}</strong></p>
        </example-component>
    </section>
@endsection
