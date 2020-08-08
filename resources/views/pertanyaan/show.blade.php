@extends('master')

@section('content')
	<div align="center">
		<h4> {{ $tpertanyaan->judul }}</h4>
		<p>{{ $tpertanyaan->isi }}</p>
	</div>
@endsection