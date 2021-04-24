
<!DOCTYPE html>
<html>
@extends('layout')
	<head>
		<meta charset="UTF-8">
		<title>Personal Information Registration</title>
		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
			}

			ul li {
				list-style: none;
			}
			
			.index-back {
				width: 100%;
				height: 100%;
				background-image: url("./images/0.jpeg");
				background-size: 100% 100%;
				position: absolute;
				top: 0;
				left: 0;
				z-index: -1;
			}
			
			.info_content_box {
				width: 1000px;
				height: 600px;
				background-color: rgba(0, 0, 0, .6);
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -500px;
				margin-top: -300px;
				border-radius: 5px;
			}
			
			.info_title {
				width: 100%;
				color: #fff;
				font-size: 26px;
				text-align: center;
				margin-top: 20px;
			}
			
			.info_ul {
				margin-top: 20px;
				width: 100%;
				display: flex;
				flex-direction: column;
				justify-content: space-between;
				align-content: center;
				align-items: center;
				color: #FFFFFF;
				font-size: 20px;
			}
			
			.info_ul li {
				width: 100%;
				height: 50px;
				line-height: 50px;
				margin: 10px 0;
			}
			
			.info_ul span {
				display: inline-block;
				width: 25%;
				text-align: right;
			}
			
			.info_ul input {
				width: 50%;
				height: 40px;
				padding-left: 10px;
				background-color: rgba(255, 255, 255, .8);
				font-size: 20px;
			}
			
			.submit_btn {
				width: 150px;
				height: 60px;
				line-height: 60px;
				color: #FFFFFF;
				border: 1px solid #008B8B;
				border-radius: 6px;
				margin: 20px auto;
				text-align: center;
				cursor: pointer;
			}
			
			.submit_btn:hover {
				background-color: #008B8B;
			}
		</style>
	</head>

	<body>
		<div class="index-back"></div>
		<div class="info_content_box">
			<p class="info_title">Personal Information Registration</p>
			 @section('content')
            <form action="/personal" method="POST">
             {{ csrf_field() }} 
                <ul class="info_ul">    
				<li><span>Name:&nbsp;&nbsp;</span><input type="text" name="Name" style="width:400px; height:40px;BACKGROUND-COLOR: transparent;"/></li>
				<li><span>Email:&nbsp;&nbsp;</span><input type="text" name="Email" style="width:400px; height:40px;BACKGROUND-COLOR: transparent;" /></li>
				<li><span>Address:&nbsp;&nbsp;</span><input type="text" name="Address" style="width:400px; height:40px;BACKGROUND-COLOR: transparent;"/></li>
				<li><span>Cell-phone:&nbsp;&nbsp;</span><input type="text" name="Phone" style="width:400px; height:40px;BACKGROUND-COLOR: transparent;"/></li>
				<li><span>Emergency Contact:&nbsp;&nbsp;</span><input type="number" name="Contact" style="width:400px; height:40px;BACKGROUND-COLOR: transparent;"/></li>
				<li><span>Identification Number:&nbsp;&nbsp;</span><input type="text" name="ID" style="width:400px; height:40px;BACKGROUND-COLOR: transparent;" /></li>
                <input type="submit" value="Commit">
             
			    </ul>
            </form>
			<div class="submit_btn">go back</div>
		</div>
		<script src="js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script>
			$(".submit_btn").click(function() {
				window.location.href = '/';
			});
		</script>
	</body>

</html>
@endsection