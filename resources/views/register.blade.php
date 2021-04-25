
<!DOCTYPE html>
<html lang="zh">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<style>
			.index-back {
				background-image: url("./images/back.jpeg");
				background-repeat: no-repeat;
				background-size: cover;
				width: 100%;
				height: 100%;
				position: fixed;
			}
			
			.index-login-box {
				width: 300px;
				height: 600px;
				position: absolute;
				right: 20%;
				top: 50%;
				margin-top: -10px;
				box-sizing: border-box;
				display: flex;
				flex-direction: column;
				background-color: rgba(0, 0, 0, .6);
				padding: 10px;
				border-radius: 8px;
			}
			
			input {
				box-sizing: border-box;
				outline: none;
				border: 1px solid rgba(0, 0, 0, 0.2);
				padding: 10px;
				width: 100%;
			}
			
			.index-login-title {
				text-align: center;
				font-size: 25px;
				color: rgb(5, 222, 250);
			}
			
			.index-login-box div {
				margin-top: 30px;
			}
			
			.btn {
				display: block;
				box-sizing: border-box;
				width: 100%;
				height: 50px;
				line-height: 50px;
				text-align: center;
				background-color: #999;
				color: white;
				font-size: 20px;
				cursor: pointer;
				border-radius: 5px;
			}
			
			.btn:hover {
				background-color: darkcyan;
			}
			
			.login_btn {
				position: absolute;
				top: 10px;
				right: 10px;
				color: #eee;
				font-size: 18px;
			}
			
			.login_btn:hover {
				color: #FF0000;
			}
		</style>
		<title></title>
	</head>

	<body>

		<div class="index-back"></div>
		<div class="index-login-box">
			<div class="index-login-title">Register</div>

			<div>
				<input name="username" type="text" class="layui-input" placeholder="Username">
			</div>
			<div>
				<input name="password" type="password" class="layui-input" placeholder="Password">
			</div>
			<div>
				<input name="email" type="email" class="layui-input" placeholder="Email">
			</div>
			<div>
				<input name="firstname" type="text" class="layui-input" placeholder="FirstName">
			</div>
			<div>
				<input name="lastname" type="text" class="layui-input" placeholder="LastName">
			</div>
            </form>
            <div>
				<a href="login.html" class="btn">Register</a>
			</div>
			<div></div>
			<div></div>
			<div>
			</div>
			<a class="login_btn" href="login.html">Login</a>
		</div>

	</body>

</html>
@endsection