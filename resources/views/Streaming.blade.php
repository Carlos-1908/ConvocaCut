@extends('layouts.app')
@if(Auth::user()->rol !=1)
{{header ("refresh:0;url=dashboard");}}
@endif
@section('content')

<div>
    <center>
    <iframe width="853" height="480" src="https://www.youtube.com/embed/VQ2EyU75p2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </center>
</div>

@endsection