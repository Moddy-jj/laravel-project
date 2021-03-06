@extends('layout')
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Personal Activities</title>
		<style type="text/css">
			html {
				min-width: 1300px;
			}
			
			body {
				background: #DDDDDD;
			}
			
			img {
				display: block;
			}
			
			.wrap {
				width: 1180px;
				margin: 0 auto;
			}
			
			.top_box {
				margin-top: 50px;
				width: 100%;
				height: 200px;
			}
			
			.top_title {
				width: 950px;
				font-size: 2em;
				color: #202020;
			}
			
			.top_content {
				width: 980px;
				text-indent: 32px;
			}
			
			.top_img {
				width: 250px;
				height: 200px;
				background: url(images/10.jpg);
				background-size: 100% 100%;
				float: right;
			}
			
			.content_box {
				margin-top: 50px;
				width: 100%;
			}
			
			.official_activity {
				width: 100%;
				height: 500px;
			}
			
			.official_title {
				position: relative;
				margin-top: 50px;
				width: 100%;
				font-size: 1.8em;
				text-align: left;
				border-top: 1px solid #008B8B;
				border-bottom: 1px solid #008B8B;
			}
			
			.content_index_box {
				margin-top: 20px;
				width: 100%;
				height: 200px;
				cursor: pointer;
				transition: all 0.2s;
			}
			
			.content_index_box:hover {
				background: #55BBBB;
			}
			
			.left_img {
				width: 180px;
				height: 180px;
				float: left;
				margin: 10px;
			}
			
			.left_title {
				margin: 10px;
				font-size: 1.5em;
			}
			
			.left_content {
				text-indent: 32px;
			}
			
			.right_img {
				width: 180px;
				height: 180px;
				float: right;
				margin: 10px;
			}
			
			.right_title {
				margin: 10px;
				font-size: 1.5em;
			}
			
			.right_content {
				text-indent: 32px;
			}
			
			.pop_box {
				width: 700px;
				height: 750px;
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -300px;
				margin-top: -400px;
				background: #FFFFFF;
				border: 1px solid #999999;
				border-radius: 10px;
				display: none;
			}
			
			.close {
				width: 100px;
				height: 30px;
				line-height: 30px;
				position: absolute;
				right: 10px;
				top: 10px;
				border: 1px solid #888;
				border-radius: 5px;
				text-align: center;
				cursor: pointer;
			}
			
			.close:hover {
				color: #FFFFFF;
				background: #E1184A;
				border: 1px solid #E1184A;
			}
			
			.pop_title {
				width: 680px;
				font-size: 2em;
				margin-left: 10px;
				margin-top: 50px;
				text-align: center;
			}
			
			.pop_img {
				width: 250px;
				height: 200px;
				margin: 20px auto;
			}
			
			.pop_content {
				width: 680px;
				font-size: 20px;
				margin-left: 10px;
				margin-top: 50px;
				text-indent: 40px;
			}
			.manage_personal_activity_btn,
			.personal_activity_btn,
			.add_personal_activity_btn {
				width: 200px;
				height: 30px;
				line-height: 30px;
				position: absolute;
				right: 400px;
				top: 20px;
				border: 1px solid #888;
				border-radius: 5px;
				text-align: center;
				cursor: pointer;
			}
			.manage_personal_activity_btn,
			.personal_activity_btn:hover,
			.add_personal_activity_btn:hover {
				color: #FFFFFF;
				background: #25BEFF;
				border: 1px solid #25BEFF;
			}
			
			.add_personal_activity_btn {
				right: 630px;
			}
			.manage_personal_activity_btn {
				right:830px;
			}
			
			ul li {
				list-style: none;
			}
			
			.add_box {
				width: 1000px;
				height: 600px;
				background-color: #FFFFFF;
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -500px;
				margin-top: -300px;
				border-radius: 5px;
				border: 1px solid #999999;
				display: none;
			}
			
			.info_title {
				width: 100%;
				font-size: 26px;
				text-align: center;
				margin-top: 20px;
			}
			
			.add_ul {
				margin-top: 20px;
				width: 100%;
				display: flex;
				flex-direction: column;
				justify-content: space-between;
				align-content: center;
				align-items: center;
				font-size: 20px;
			}
			
			.add_ul li {
				width: 100%;
				height: 50px;
				line-height: 50px;
				margin: 10px 0;
			}
			
			.add_ul span {
				display: inline-block;
				width: 25%;
				text-align: right;
			}
			
			.add_ul input {
				width: 50%;
				height: 40px;
				padding-left: 10px;
				font-size: 20px;
			}
			
			.submit_btn {
				width: 150px;
				height: 60px;
				line-height: 60px;
				border: 1px solid #008B8B;
				border-radius: 6px;
				margin: 20px auto;
				text-align: center;
				cursor: pointer;
			}
			
			.submit_btn:hover {
				color: #FFFFFF;
				background-color: #008B8B;
			}
		</style>
	</head>

	<body>
		<div class="wrap">
		
		<a href="{{ URL::asset('44') }}"><div class="manage_personal_activity_btn">Manage your records</a></div>
			<div class="personal_activity_btn">To Official Activities</div>
			<div class="add_personal_activity_btn">Add Personal Activities</div>
			<div class="top_box">
				<div class="top_img"></div>
				<div class="top_title">Weekend Activities (Youth)</div>
				<div class="top_content">
					The meaning of youth is different in different societies all over the world, and the definition of youth has been changing with the changes of political economy and social and cultural environment. According to the new age group set by the World Health Organization, the upper age limit for young people has been raised to 44. From 1995 to 2000, the estimated world youth population increased from 1.026 billion to 1.066 billion, and its proportion in the global population decreased from 18.1% to 17.6%. With the aging of the world's population, the proportion of young people in the global population is expected to continue to decline to 13.2% by 2050. By then, the total number of young people aged 15-44 will be 1.176 billion.
				</div>
			</div>
			<div class="content_box">
				<div class="official_activity">
					<div class="official_title">
						Personal Activities
					</div>
					<div class="content_index_box" lang="1">
						<img src="images/13.jpg" class="left_img img"></img>
						<div class="left_title title">Slots Online for Free ??? Complete Collection of Games by Slotozilla</div>
						<div class="left_content content">Slotozilla blooms with various tournaments and hot promotions. You can join one of the races and win cash prizes. Mind that prizes are different, so find the worthy one and go for it!We all take risks day by day; however, isn???t it a good idea to gain profit from it? With Slotozilla???s free slots, you can have fun and practice your gaming skills without risking your money prior to switching to a real game. So, there is no need to hesitate ??? give it a try!</div>
					</div>
					<div class="content_index_box" lang="2">
						<img src="images/14.jpg" class="right_img img"></img>
						<div class="right_title title">Bungee Jumping Extreme Sports</div>
						<div class="right_content content">The rubber band tied to the jumper's ankle is long enough to allow the jumper to enjoy "free fall" in the air for a few seconds. When the human body falls to a certain distance from the ground, the rubber rope is pulled apart, tightened, and prevents the human body from continuing to fall. When it reaches the lowest point, the rubber bounces up again, the human is pulled up, and then falls down again. This is repeated many times until the elasticity of the rubber rope disappears. This is the whole process of bungee jumping.</div>
					</div>
				</div>
			</div>
			<div class="pop_box">
				<div class="close">Close</div>
				<p class="pop_title"></p>
				<img src="" class="pop_img"></img>
				<p class="pop_content"></p>
			</div>
			<div class="add_box">
				<div class="close">Close</div>
				<p class="info_title">Launch personal new activities</p>
                @section('content')
                <form action="/activity" method="POST">
                     {{ csrf_field() }} 
				<ul class="add_ul">
					<li><span>Activity Theme:&nbsp;&nbsp;</span><input type="text" name="Theme"   style="width:400px; height:40px;"/></li>
					<li><span>Activity content:&nbsp;&nbsp;</span><input type="text" name="content"   style="width:400px; height:40px;" /></li>
					<li><span>Activity Address:&nbsp;&nbsp;</span><input type="text" name="Address"   style="width:400px; height:40px;" /></li>
					<li><span>Activity time:&nbsp;&nbsp;</span><input type="date" name="time"   style="width:400px; height:40px;"/></li>
                    <input type="submit" value="Commit">
                   </ul>
                    </form>
			</div>
		</div>
		<script src="js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(".content_index_box").click(function() {
				var src = $(this).children(".img").attr("src");
				var title = $(this).children(".title").html();
				var content = $(this).children(".content").html();
				$(".pop_img").attr("src", src);
				$(".pop_title").html(title);
				$(".pop_content").html(content);
				$(".pop_box").css('display', 'block');
			});
			$(".close,.submit_btn").click(function() {
				$(".pop_box").css('display', 'none');
				$(".add_box").css('display', 'none');
			});
			$(".personal_activity_btn").click(function() {
				window.location.href = 'weekendYouthActivity.html';
			});
			$(".add_personal_activity_btn").click(function() {
				$(".add_box").css('display', 'block');
			});
		</script>
	</body>

</html>
@endsection