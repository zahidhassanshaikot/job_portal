@extends('back-end.master')
@section('content')

	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="job-descriptions">
						<div class="title">
							<h3>Training Description</h3>
						</div>
						<div class="description">
							{{ $training->short_description }}
						</div>
						{!! $training->training_description !!}
						
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection