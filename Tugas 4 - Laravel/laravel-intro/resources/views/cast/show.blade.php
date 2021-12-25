@extends('layout.master')

@section('judul')
    Detail {{$cast->nama}}
@endsection

@section('content')
<h1>{{$cast->nama}}</h1>
<p>{{$cast->umur}}</p>
<p>{{$cast->bio}}</p>
@endsection