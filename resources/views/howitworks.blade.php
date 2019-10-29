@extends('layouts.app')

@section('content')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{ asset('css/page.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<!------ Include the above in your HEAD tag ---------->

<br>
<h1 class="text-center">How to Make an Order With us</h1>
<h2 class="font-weight-light text-center">These are the simple steps one can follow to make an order</h2>




<div class="container">
	<div class="row">

		<!--team-1-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="http://placehold.it/110x110/9c27b0/fff?text=Tip" class="img-fluid" />
					<h3>1</h3>
					<p>Create an account</p>
				</div>

				<div class="team-back">
					<span class="mt-3">
						Registering an account with us is quite simple, just fill in the required information in the form and submit.
					</span>
				</div>

			</div>
		</div>
		<!--team-1-->

		<!--team-2-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="http://placehold.it/110x110/336699/fff?text=Tip" class="img-fluid" />
					<h3>2</h3>
					<p>Login</p>
				</div>

				<div class="team-back">
					<span>
						Login to your account by keying in your email and password.
					</span>
				</div>

			</div>
		</div>
		<!--team-2-->

		<!--team-3-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="http://placehold.it/110x110/607d8b/fff?text=Tip" class="img-fluid" />
					<h3>3</h3>
					<p>Make an Order</p>
				</div>

				<div class="team-back">
					<span>
					Simply complete an order form, and let the writers know what kind of paper you seek.
					Attach any documents that are importtant to your order and would want the writer to consider.
					</span>
				</div>

			</div>
		</div>
		<!--team-3-->

		<!--team-4-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="http://placehold.it/110x110/4caf50/fff?text=Tip" class="img-fluid" />
					<h3>4</h3>
					<p>Reserve money for your order</p>
				</div>

				<div class="team-back">
					<span>
						Confirm your order by submitting reserved payment that will be paid to the writer once you recieve and confirm your order.
					</span>
				</div>

			</div>
		</div>
		<!--team-4-->

		<!--team-5-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="http://placehold.it/110x110/e91e63/fff?text=Tip" class="img-fluid" />
					<h3>5</h3>
					<p>Check progress of your order</p>
				</div>

				<div class="team-back">
					<span>
					Assignment Experts lets you track every change of the task. Here you can communicate with the tutor and discuss all the burning questions. 
					</span>
				</div>

			</div>
		</div>
		<!--team-5-->

		<!--team-6-->
		<div class="col-lg-4">
			<div class="our-team-main">

				<div class="team-front">
					<img src="http://placehold.it/110x110/2196f3/fff?text=Tip" class="img-fluid" />
					<h3>6</h3>
					<p>Recieve your finished order</p>
				</div>

				<div class="team-back">
					<span>
					Review your finished essay and leave feedback for your writer. 
					Pay only when all requirements are met and you are 100% satisfied with the result.
					</span>
				</div>

			</div>
		</div>
		<!--team-6-->



	</div>
</div>
@include('includes.footer')
@endsection