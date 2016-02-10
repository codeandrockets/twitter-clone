@extends('master')

@section('title', 'Account')
@section('meta-description', 'Your Account Page')

@section('content')

<h1>Hi {{ \Auth::user()->name }}</h1>

<h2>Your Stats:</h2>
<ul>
	<li>Total Tweets: {{ $totalTweets }}</li>
</ul>

<h2>Write a tweet</h2>

<form action="/account/new-tweet" method="post">

	{!! csrf_field() !!}

	<div>
		<label for="content">Tweet: </label>
		<textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
	</div>

	<input type="submit" value="Tweet">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection