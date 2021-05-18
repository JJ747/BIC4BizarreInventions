@extends('layouts.app')


@section('content')
    <section class="section is-halfheight">
        <invention-index title="Juhu">
            <p>Juhu <strong>{{Auth::user()->name }}</strong> ist nicht nutzlos</p>
        </invention-index>
    </section>
@endsection
