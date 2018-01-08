<div class="container" id="services">
	<h1>THE CORNER GARAGE FOR COLLECTOR CARS</h1>
		<div class="services-wrap">
			<div class="row">
				@if(isset($service))
					@foreach ($service as $serv)
  						<div class="col-sm-4">
      						<div class="services">
        						<div class="center">
          							<img src="{{ $serv->img }}">
          								<h2>{{ $serv->title }}</h2>
        						</div>
      						</div>
  						</div>
					@endforeach
				@endif
			</div>
		</div>
</div>


