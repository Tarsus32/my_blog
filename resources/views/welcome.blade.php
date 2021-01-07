@extends('layouts.master')


@section('content')

	<section class="columns is-centered">
		<div class="column is-three-fifths">
		    <h2 class="title m-b-md">
		        {{ $title }}
		    </h2>

		    <ul class="posts">
		        @foreach ($posts as $post)
		       	 <li>
		            <h2>{{ $post->title }}</h2>
		             <p>{{ $post->text }}</p>
		          </li>
		          <small class="is-size-6">
		          	{{$post->user->name}}
		          </small>
		        @endforeach
		    </ul>
	    </div>
    </section>
@endsection







