@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <h2>Technology</h2>
        <ul>
            <li>
                {{$technology->name}}
            </li>
        </ul>
    </div>
</div>

@endsection