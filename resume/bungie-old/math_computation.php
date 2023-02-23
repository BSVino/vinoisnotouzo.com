<?
$url_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$print = 0;
if ($_GET['print'] == '1')
{
	$print = 1;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html><head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<title>Jorge L. Rodr&iacute;guez</title>
	<style type="text/css">
	<!--
	body {
	   	font-size: 11pt;
		width: 720px;
		margin: auto;
		font-family: 'Roboto', serif; font-weight: 300;
	}
/*font,th,td,p,h1,h2,h3,li,body,div { font-family: Verdana, Arial, Helvetica, sans-serif };*/
	b { font-size: 13pt; font-weight: 700; }
	i { font-weight: 400; }
	div {
		text-align: left;
   	}

	#download {
		position: absolute;
		margin-left: 420px;
		width: 300px;
		text-align: right;
		font-size: 9pt;
	}

	#myname {
		font-size: 26pt;
		text-align: center;
		border-bottom: 1px solid black;
		text-transform: uppercase;
		font-weight: 400;
	}

	.myname-firstletter {
		font-size: 34pt;
	}

	#allinfo {
		overflow: auto;
		width: 100%;
	}

	#information {
		float: left;
		width: 300px;
		margin-bottom: 0;
	}

	#informationright {
		width: 300px;
		text-align: right;
		float: right
	}

	#activitiesleft {
		float: left;
		width: 320px;
		margin-bottom: 0;
	}

	#activitiesright {
		width: 300px;
		text-align: right;
		float: right;
	}

	.sectionheader {
		border-bottom: 1px solid black;
		text-align: center;
		font-weight: bold;
		font-size: 14pt;
		margin-top: 0.25in;
		margin-bottom: 0.1in;
	}

	.allskills {
		width: 7in;
		margin: auto;
		overflow: auto;
		width: 100%;
	}

	.skills {
		float: left;
		width: 2in;
		margin-left: 0.2in;
		margin-right: 0.2in;
	}

	.skills ul {
		padding-left: 30px;
		margin-left: 0px;
	}

	.experience {
		margin-left: 0.3in;
		margin-bottom: 0.25in;
		margin-right: 0.2in;
		clear: both;
	}

	.tasks {
		margin-left: 0.2in;
	}

	.dates {
		float: right;
		width: 200px;
		text-align: right;
		overflow: hidden;
	}

	ul {
		list-style-type: square;
		margin: 0px;
	}


<? if ($print) { ?>
	a {
		text-decoration: none;
	}

	a:hover {
		text-decoration: underline;
	}

	a:link {
		color: black;
       	}

	a:visited {
		color: black;
	}
<? } else { ?>
	a:link {
		color: #3333CC;
	}

	a:visited {
		color: #6666CC;
	}
<? } ?>

	.skill, .skill:visited {
<? if (!$print) { ?>
		border-bottom: 1px dotted black;
<?}?>
		text-decoration: none;
		color: black;
	}

	a.skill {
		color: black;
	}

	.pullout {
		font-size: 42px;
		float: left;
		height: 100px;
		width: 100px;
		margin-left: -130px;
		padding-right: 30px;
	}

	.pullout_video {
		width: 100px;
		height: 100px;
	}

	#da_pullout_video {
		background-image: url("doubleaction.png");
	}
	
	#da_pullout {
		margin-top: 65px;
	}

	#mfgd_pullout_video {
		background-image: url("mfgd.png");
	}
	
	#mfgd_pullout {
		margin-top: 5px;
	}

	#vb_pullout_video {
		background-image: url("viewback.png");
	}
	
	#vb_pullout {
		margin-top: 30px;
	}

	#dt_pullout_video {
		background-image: url("digitanks.png");
	}
	
	#dt_pullout {
		margin-top: 50px;
	}

	#cf_pullout_video {
		background-image: url("calamityfuse.png");
	}
	
	#cf_pullout {
		margin-top: 40px;
	}

	--></style>
<? if ($print) { ?>
<script>
$(function() {
	/*
	if(window.print)
		window.print();
	 */
});
</script>
<? } else { ?>
<script>
$(function() {
	$setup_video = function($experience, $video)
	{
		$($video).hide();
		$($experience).mouseenter(function() { $($video).fadeIn(); }).mouseleave(function() { $($video).fadeOut(); });
	}

	$setup_video("#da_experience", "#da_video");
	$setup_video("#mfgd_experience", "#mfgd_video");
	$setup_video("#vb_experience", "#vb_video");
	$setup_video("#dt_experience", "#dt_video");
	$setup_video("#cf_experience", "#cf_video");
});
</script>
<? } ?>
</head>
<body bgcolor="white" link="blue" vlink="blue" alink="red">

	<div class="sectionheader">UCLA Mathematics of Computation</div>

	<div>The UCLA Mathematics of Computation program is an applied mathematics degree, but with a focus in computer science. I took courses from both the mathematics department and the computer science department.</div>
	<br />

	<div id="da_experience" class="experience">
		<div class="tasks">
			<b>Core Mathematics</b>: Single Multi-variable and Vector Calculus, Linear Algebra, Differential Equations, Statistics and Probability</br />
			<b>Physics</b>: Classical Mechanics, Electromagnetism, Optics, Electrodynamics<br />
			<b>Analysis & Algebra</b>: <a href="https://www.math.ucla.edu/ugrad/courses/math/131A">Real Analysis</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/132">Complex Analysis</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/115AH">Abstract Linear Algebra</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/110A">Ring Theory</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/110AH">Group Theory</a><br />
			<b>Numerical Analysis</b>: <a href="https://www.math.ucla.edu/ugrad/courses/math/151A">Numerical Methods</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/151B">Numerical Differential Equations</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/142">Physics Simulation</a><br />
			<b>Discrete</b>: <a href="https://www.math.ucla.edu/ugrad/courses/math/180">Graph Theory</a>, <a href="https://www.math.ucla.edu/ugrad/courses/math/184">Combinatorial Counting</a>, <a href="https://www.math.ucla.edu/grad/courses/math/206AB">Graduate Combinatorics</a><br />
			<b>Computer Science</b>: Computer Organization, Computer Graphics, Processor Architecture, Operating Systems<br />
		</div>
	</div>

	<br clear="both" />
	<br />
</body></html>
