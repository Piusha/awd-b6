@extends('layout.admin_theme_entry_layout')

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="login-wrapper">
			<div class="box">
				<div class="content-wrap">
					<h6>Sign In</h6>
					<div class="social">
						<a class="face_login" href="#">
							<span class="face_icon">
								<img src="images/facebook.png" alt="fb">
							</span>
							<span class="text">Sign in with Facebook</span>
						</a>
						<div class="division">
							<hr class="left">
							<span>or</span>
							<hr class="right">
						</div>
					</div>
					<input class="form-control" type="text" placeholder="E-mail address">
					<input class="form-control" type="password" placeholder="Password">
					<div class="action">
						<a class="btn btn-primary signup" href="index.html">Login</a>
					</div>                
				</div>
			</div>

			<div class="already">
				<p>Don't have an account yet?</p>
				<a href="/sign-up">Sign Up</a>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

<script type="text/javascript" src="/js/app/Http.js"></script>
<script type="text/javascript" src="/js/app/entry.js"></script>
<script type="text/javascript">
	$.entry();
</script>
@endsection