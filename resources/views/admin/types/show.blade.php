@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <h2>Type</h2>
        <ul>
            <li>
                {{$type->name}}, {{$type->description}}
            </li>
        </ul>
    </div>
</div>

@endsection