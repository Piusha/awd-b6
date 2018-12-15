@extends('layout.admin_theme_entry_layout')

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="login-wrapper">
			<div class="box">
				<div class="content-wrap">
					<h6>Sign Up</h6>
					<form name="frm_sign_up" id="frm_sign_up" method="POST">
						<input class="form-control" required name="full_name" type="text" placeholder="Full Name">
						<input class="form-control" required  name="email" type="text" placeholder="E-mail address">
						<input class="form-control" required  name="password" type="password" placeholder="Password">
						<input class="form-control" required name="confirm_pwd"type="password" placeholder="Confirm Password">
						<div class="action">
							<button type="submit" class="btn btn-primary signup">Sign Up</button> 
						</div>  
					</form>
					              
				</div>
			</div>

			<div class="already">
				<p>Have an account already?</p>
				<a href="/">Login</a>
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