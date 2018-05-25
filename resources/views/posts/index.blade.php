@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Posts</h1>

        <table class="table">
        	<tr>
        		<th width="50">ID</th>
        		<th>Nome</th>
        	</tr>
        	@forelse ($posts as $post)
	        	<tr>
	        		<td>{{ $post->id }}</td>
	        		<td>{{ $post->name }}</td>
	        	</tr>
        	@empty
        	@endforelse
        </table>

        {!! $posts->links() !!}
    </div>
</div>
@endsection
