<! DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Allura|Life+Savers|Gochi+Hand|Gafata|Oregano|Satisfy' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/robot.css">
		<link href='https://fonts.googleapis.com/css?family=Poller+One' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<style type="text/css">
		#alertbanner {
			position: fixed;
			width: 500px;
			height: 100px;
			top: 50%;
			margin-top: -25px;
			left: 50%;
			margin-left: -250px;
			background: #C0C0C0;
			text-align: center;
		}


		</style>
	</head>
	<body>
		<!-- ********HEADER*********** -->
		<nav class="navbar navbar-inverse" role="navigation">
  		<div class="container-fluid">
    		<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       			<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="#" style="font-family: 'Life Savers',cursive; font-size:40px;">Secured Thoughts</a>
    		</div>
      		<ul class="nav navbar-nav navbar-right">
        		<li><a href="#" style="font-family: 'Life Savers',cursive; font-size:20px;">About Me</a></li>
      		</ul>
  		</div>
		</nav>
		<!-- ******************** -->
		<div id="badguy1" class="robot pull-left">
  			<div class="robo-beep"></div>
  			<div class="robo-brain laser"></div>
  			<div class="robo-torso">
    			<div class="lefthand">j</div>
    			<div class="righthand">j</div>
  			</div>
  			<div class="robo-foot"></div>
		</div>
		<!-- <div id="goodguy" class="robot" style="margin: 0px auto;">
  			<div class="robo-beep"></div>
  			<div class="robo-brain"></div>
  			<div class="robo-torso">
    			<div class="lefthand">j</div>
    			<div class="righthand">j</div>
  			</div>
  			<div class="robo-foot"></div>
		</div> -->
		<div id="alertbanner" class="hide"><h1>Coming Up Soon..</h1></div>
		<div id="badguy2" class="robot pull-right">
  			<div class="robo-beep"></div>
  			<div class="robo-brain laser"></div>
  			<div class="robo-torso">
    			<div class="lefthand">j</div>
    			<div class="righthand">j</div>
  			</div>
  			<div class="robo-foot"></div>
		</div>

	<script type="text/javascript">
		jQuery('#badguy1').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
			jQuery('#alertbanner').removeClass('hide');

		});


	</script>
	</body>
</html>