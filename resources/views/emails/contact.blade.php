<h1>{{ $name }}</h1>

<div>
	{{ $bodyMessage }}
</div>

@if($status=='Yes')

<h3>Subscribe: </h3>
@foreach($subscribe as $sub)

	<li>{{ $sub }} </li>

@endforeach

@endif

<p> sent via {{ $email }}</p>

