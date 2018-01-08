<div class="contact">
	<cell class="get-in-touch">
		<h1>GET IN TOUCH</h1>
			<form action="{{ url('contact') }}" method="POST">
			{{ csrf_field() }}

				<div class="resp">
					<input type="text" name="name"  value="{{ old('name') }}" placeholder="name">
						<span class="error"></span>

						@if ($errors->has('name'))
							<span class="error">{{ $errors->first('name') }}</span>
						@endif

					<input type="email" name="email" value="{{ old('email') }}" placeholder="email">
						<span class="error"></span>

						@if ($errors->has('email'))
							<span class="error">{{ $errors->first('email') }}</span>
						@endif

					<input type="text" name="subject" value="{{ old('subject') }}" placeholder="subject">
						<span class="error"></span>

						@if ($errors->has('subject'))
							<span class="error">{{ $errors->first('subject') }}</span>
						@endif

					<textarea placeholder="text" name="bodyMessage">{{ old('bodyMessage') }}</textarea>
						<span class="error"></span>

						@if ($errors->has('bodyMessage'))
							<span class="error">{{ $errors->first('bodyMessage') }}</span>
						@endif

				</div>
					<div class="resp second">
						<input id="male" type="radio" name="gender" value="male"><label for="male">Male</label>
						<input id="female" type="radio" name="gender" value="female"><label for="female">Female</label>
							<span class="error"></span>

							@if ($errors->has('gender'))
								<span class="error">{{ $errors->first('gender') }}</span>
							@endif

						<span class="checkbox-span">Sign up for newsletter:</span>
  
							<input type="checkbox" name="subscribe[]" value="images">recive images<br>
							<input type="checkbox" name="subscribe[]" value="promotions">recive promotions<br>
							<input type="checkbox" name="subscribe[]" value="updates">recive updates<br>
							<input type="checkbox" name="subscribe[]" value="offers">recive job offers<br>
                    </div>
                    	<div class="send-button">
							<input type="submit" value="Send Message">
                    	</div>
			</form>

				@if (Session::has('success'))
					<span class="success">
						{{ Session::get('success') }}
					</span>
				@endif    
	</cell>
  
    	<cell class="contact-information">        
				<h1>CONTACT INFORMATION</h1>

                @include('social')
                
		</cell>
			<div class="footer container-fluid">
				<div class="row">
					<div class="col-sm-6">© copyright 2017</div>
						<div class="col-sm-6 right">created by: Pkhikidze Sophiko & Tazo Mindiashvili</div>
				</div>
			</div>

</div>
