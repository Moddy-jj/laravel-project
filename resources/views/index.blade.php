<!DOCTYPE HTML>
<html>
	<head>
		<title>Public Activity</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
		<style>
			html {
				min-width: 1320px;
			}
			
			.top_box {
				width: 100%;
				height: 30px;
				line-height: 30px;
			}
			
			.login_btn,
			.reg_btn,
			.exit {
				width: 100px;
				height: 30px;
				float: right;
				cursor: pointer;
				border: 1px solid #888;
				margin: 0 5px;
				border-radius: 5px;
				text-align: center;
				margin-top: 10px;
				transition: all 0.2s;
			}
			
			.login_btn:hover,
			.reg_btn:hover,
			.exit:hover {
				background: #25beff;
				color: #FFF;
			}
			
			#iframe {
				width: 100%;
				height: 716px;
				overflow: auto;
			}
			
			#userName {
				margin-top: 10px;
				height: 30px;
				line-height: 30px;
				float: right;
				display: none;
			}
			
			.exit {
				display: none;
			}
		</style>
	</head>

	<body>
		<div class="btm_border">
			<div class="h_bg">
				<div class="wrap">
					<div class="top_box">
						<a class="reg_btn" href="register.html">Regist</a>
						<a class="login_btn" href="login.html">Login</a>
						<div class="exit">Exit</div>
						<div id="userName"></div>
					</div>
					<div class="header">
						<div class="logo">
							<h1><a href="#"><img src="images/logo.png" alt=""></a></h1>
						</div>
						<div class="social-icons">
							<ul>
								<li>
									<a class="facebook" href="#"> </a>
								</li>
								<li>
									<a class="twitter" href="#"></a>
								</li>
								<li>
									<a class="googleplus" href="#"></a>
								</li>
								<li>
									<a class="pinterest" href="#"></a>
								</li>
								<li>
									<a class="dribbble" href="#"></a>
								</li>
								<li>
									<a class="vimeo" href="#"></a>
								</li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					<div class='h_btm'>
						<div class='cssmenu'>
							<ul>
								<li class='active' lang="1">
									<a href="{{ URL::asset('') }}"><span>Home</span></a>
								</li>
								<li lang="2">
									<a href='#'><span>Psychological Age Test</span></a>
								</li>
								<li lang="3">
									<a href='#'><span>Hot Activities</span></a>
								</li>
								<li lang="4">
									<a href='#'><span>About Us</span></a>
								</li>
								<li lang="5">
									<a href='#'><span>Contact Us</span></a>
								</li>
								<li lang="6">
									<a href='#'><span>Activities (Youth)</span></a>
								</li>
								<li lang="7">
									<a href='#'><span>Activities (Elderly)</span></a>
								</li>
								<div class="clear"></div>
							</ul>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<!------ Slider_bg ------------>
		<iframe id="iframe" src="home.html" frameborder="0" scrolling="no" onload="this.height=100"></iframe>
		<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
		<script>
			function toLogin() {
				window.location.href = '44';
			}
			var iframe = document.getElementById("iframe");

			function setIframeHeight() {
				try {
					var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
					iframe.height = dHeight;
				} catch(ex) {}
			};
			window.onload = function() {
				setIframeHeight();
			};
			setInterval(setIframeHeight, 200);

			var choose_li = '0';
			$('.cssmenu li').click(function() {
				var iframe = document.getElementById('iframe');
				var lang = $(this).attr('lang');
				if(choose_li == lang) {
					return;
				}
				$('.cssmenu li').removeClass('active');
				$(this).addClass('active');
				choose_li = lang;
				showContent();
			});

			function showContent() {
				switch(choose_li) {
					case '1':
						iframe.src = 'home.html';
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
					case '2':
						iframe.src = 'psychologicalAgeTest.html';
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
					case '3':
						iframe.src = 'hotEvents.html';
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
					case '4':
						iframe.src = 'about.html';
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
					case '5':
						iframe.src = "{{ URL::asset('22') }}";
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
					case '6':
						iframe.src = 'weekendYouthActivity.html';
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
					case '7':
						iframe.src = 'weekendOldActivity.html';
						setTimeout(function() {
							setIframeHeight();
						}, 200);
						break;
				}
			}

			var userName = window.localStorage.getItem("ac_user_name");
			if(userName != null && userName != '' && userName != undefined) {
				$("#userName").html('Hello,' + userName);
				$("#userName").css('display', 'block');
				$(".exit").css('display', 'block');
				$(".login_btn").css('display', 'none');
				$(".reg_btn").css('display', 'none');
			}
			var thisURL = document.URL;
			if(thisURL && thisURL.indexOf('?') > -1) {
				var getval = thisURL.split('?')[1];
				var value = getval.split("=")[1];
				console.log(value);
				choose_li = value;
				$(".cssmenu li").removeClass('active');
				$(".cssmenu li[lang=" + value + "]").addClass('active');
				showContent();
			}
			$('.exit').click(function() {
				window.localStorage.clear();
				window.location.reload();
			});
		</script>
	</body>

</html>