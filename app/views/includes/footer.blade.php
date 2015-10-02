<footer class="footer col-sm-12">
	<div class="container">
			<h4>Contact Us</h4>
		<div class="col-sm-12 col-md-4">
			<p>Don't see the sport you love or your city on Wanna Play? Let us know! Email our team at <a href="#">hello@wannaplay.com</a>. Or you can complete our contact form right here &#10141;</p>
		</div>

		<div class="col-sm-12 col-md-8">
			{{ Form::open() }}
			<div class="col-sm-6">
				<div class="form-group">
					{{ Form::label('contact_name','Your Name') }}
					{{ Form::text('contact_name', null, ['class' => 'form-control']) }}
				</div>

				<div class="form-group">
					{{ Form::label('contact_email','Your Email') }}
					{{ Form::email('contact_email', null, ['class' => 'form-control']) }}
				</div>
			
				<div class="form-group">
					{{ Form::label('contact_subject','Subject') }}
					{{ Form::text('contact_subject', null, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					{{ Form::label('contact_message','Message') }}
					{{ Form::textarea('contact_message', null, ['class' => 'form-control']) }}
				</div>
			</div>
			{{ Form::close() }}
		</div>					
		</div>

		
	</div>
</footer>