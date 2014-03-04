<!DOCTYPE html>
<html>
<!-- includes the css files -->
<?php include 'header.php'; ?>
<body>
	<?php include 'menubar.php'; ?>
		<style type="text/css" scope>
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
		<!-- includes jss files -->
		<?php include 'footer.php'; ?>
	<script type="text/javascript">
		jQuery('#badguy1').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
			jQuery('#alertbanner').removeClass('hide');

		});

	</script>
</body>
</html>