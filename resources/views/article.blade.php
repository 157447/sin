@extends('welcome')
@section('content')
<h2>{{$article->title}}</h2>

<p style="line-height: 600%; ">{{$article->content}}</p>


@stop