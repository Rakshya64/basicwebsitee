@extends('layout.app')
@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex totam nam, inventore cupiditate labore beatae eaque sed voluptates quod, repellat iste laborum consequuntur! Nobis, minima repellendus qui consequatur delectus labore.</p>
@endsection


@section('sidebar')
@parent
    <p> This is append of the sidebar</p>

@endsection