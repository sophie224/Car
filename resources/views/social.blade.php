<div class="click-to-view">
	<h3>click to view</h3>
		<p>
			@if(isset($social))
				@foreach ($social as $soc)
					<a href="{{ $soc->link }}"><img src="{{ $soc->icon }}" alt="Google+"/></a>
				@endforeach
			@endif
		</p>
</div>


	
