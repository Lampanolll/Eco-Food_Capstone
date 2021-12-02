<!DOCTYPE html>
<html>

  <head>

    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <style>
      :root {
    --primary-color: #4EA685;
    --secondary-color: #57B894;
    --black: #000000;
    --white: #ffffff;
    --gray: #efefef;
    --gray-2: #757575;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

{
    font-family: 'Poppins', sans-serif;
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

.container {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
}
.row {
    display: flex;
    flex-wrap: wrap;
    height: 100vh;
}

.col {
    width: 50%;
}

.align-items-center {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.form{
	width: 450px;
    padding: 1rem;
    background-color: var(--white);
    border-radius: 1.5rem;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.form-wrapper {
    width: 100%;
    max-width: 28rem;
}
.input-group {
    position: relative;
    width: 77%;
    margin: 1rem 0;
}

.input-group i {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
    font-size: 1.4rem;
    color: var(--gray-2);
}

.input-group input {
    width: 100%;
    padding: 1rem 3rem;
    font-size: 1rem;
    background-color: var(--gray);
    border-radius: .5rem;
    border: 0.125rem solid var(--white);
    outline: none;
    font-family: 'poppins', sans-serif;

}
.input-group input:focus {
    border: 0.125rem solid var(--primary-color);
}
.form p {
    margin: 1rem 0;
    font-size: .7rem;
    font-family: 'poppins', sans-serif;

}
.form button {
    display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #105652);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.form button:hover{
	background-position: right;
}


.flex-col {
    flex-direction: column;
}
b{
	display: block;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}
b:hover{
	color: #105652;
}
  </style>
  <body>
	<div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
                    <form action="{{ route('user.create') }}" method="POST" autocomplete="off">
                        @if (Session::get('Success'))
                            <div class="alert alert-success">
                                {{ Session::get('Success')}}
                            </div>
                        @endif
                        @if (Session::get('Failed'))
                            <div class="alert alert-danger">
                                {{ Session::get('Failed')}}
                            </div>
                        @endif
                        @csrf
					<div class="form sign-up">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" class="form-control" name="confirm_password" placeholder="Confirm password" value="{{ old('confirm_password') }}">
                            <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
                        </div>
						<button type="submit">
							Register
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<a href="{{route('user.login')}}"><b onclick="toggle()" class="pointer">
								Sign in here
							</b></a>
						</p>
					</div>
                </form>
				</div>
			</div>
</div>
</div>

