@extends('layout')
<head>
		<title>Contact</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<style type="text/css">
			.wrap {
				position: relative;
			}
			
			.iimg {
				position: absolute;
				top: 50px;
				right: 50px;
			}
		</style>
	</head>
    <body>
		<!--main-->
		<div class="main_btm">
			<div class="wrap">
				<div class="main">
					<div class="contact">
						<div class="section group">
							<div class="col span_1_of_2">
								<div class="company_address">
								</div>
								<div class="clear"></div>
								<img class="iimg" src="images/20.png" />
							</div>
							<div class="col span_2_of_4">
								<div class="contact-form">
                                @section('content')
									<h2 class="style">Contact Us</h2>
                                    <form action="/tasks" method="POST" class="form-horizontal">
                                    {{ csrf_field() }}
									
										<span><label>NAME</label></span>
										<input name="userName" type="text" class="textbox" id="task-name" style="width:400px; height:40px;" >
									
									<div>
										<span><label>E-MAIL</label></span>
										<span><input name="userEmail" type="text" class="textbox"  id="task-email" style="width:400px; height:40px;" ></span>
									</div>
									<div>
										<span><label>MOBILE</label></span>
										<span><input name="userPhone" type="text" class="textbox" id="task-mobile" style="width:400px; height:40px;" ></span>
									</div>
									<div>
										<span><label>SUBJECT</label></span>
										<span><textarea name="userMsg" id="task-msg"> </textarea></span>
									</div>
									<div>
										<span><input type="submit" value="Submit"></span>
									</div>
                                    </from>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer1-->
		<div class="ftr-bg">
			<div class="wrap">
				<div class="footer">
					<div class="copy">
						<p class="w3-link"></p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</body>
 
@endsection