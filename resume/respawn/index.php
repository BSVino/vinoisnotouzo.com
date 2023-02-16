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
		margin-top: 0.20in;
		margin-bottom: 0.1in;
	}

	.allskills {
		width: 7in;
		margin: auto;
		overflow: auto;
		width: 100%;
	}

	.skills {
		margin-left: 0.3in;
		margin-right: 0.2in;
		margin-bottom: 0.25in;
		clear: both;
	}

	.skills ul {
		float: left;
		width: 330px;
	}

	.experience {
		margin-left: 0.3in;
		margin-bottom: 0.25in;
		margin-right: 0.2in;
		clear: both;
	}

	.tasks {
		margin-left: 0.4in;
	}

	.task {
		background-image: url("/resume/bullet.png");
		background-repeat: no-repeat;
		background-position: 0px center;
		background-size: 1.4px 1.4px;
		padding-left: 30px;
		text-indent: -20px;
		margin-left: -30px;
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
		border-bottom: 1px solid #ccc;
	}

	a:hover {
		border-bottom: 1px solid #888;
		text-decoration: none;
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
<? if ($print) { ?>
		border-bottom: none;
<? } else { ?>
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

	#ags_pullout{
		background-image: url("/resume/crucible.png");
	}

	#da_pullout_video {
		background-image: url("/resume/doubleaction.png");
	}
	
	#da_pullout {
		margin-top: 45px;
	}

	#mfgd_pullout_video {
		background-image: url("/resume/mfgd.png");
	}
	
	#mfgd_pullout {
		margin-top: -5px;
	}

	#vb_pullout_video {
		background-image: url("/resume/viewback.png");
	}
	
	#vb_pullout {
		margin-top: 30px;
	}

	#dt_pullout_video {
		background-image: url("/resume/digitanks.png");
	}
	
	#dt_pullout {
		margin-top: -10px;
	}

	#cf_pullout_video {
		background-image: url("/resume/calamityfuse.png");
	}
	
	#cf_pullout {
		margin-top: 0px;
	}

	.socialicon {
		width: 14px;
		height: 14px;
	}

	ul {
		list-style-type: none;
		padding: 0px;
		margin: 0px;
	}

	li {
		background-image: url("/resume/bullet.png");
		background-repeat: no-repeat;
		background-position: 0px center;
		background-size: 1.4px 1.4px;
		padding-left: 45px;
		text-indent: -20px;
	}
	--></style>
<? if ($print) { ?>
<script>
$(function() {
	if(window.print)
		window.print();
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
	<div id="download">
		<? if (!$print) { ?>
			<a href="http://<? echo $_SERVER['HTTP_HOST'] . $url_parts[0] ?>Jorge L. Rodriguez.pdf">pdf</a> | <a target="_blank" href="http://<? echo $_SERVER['HTTP_HOST'] . $url_parts[0] ?>?print=1">print</a><br><br/>
			<a target="_blank" href="http://twitter.com/vinobs"><img class="socialicon" src="/resume/icon-tw.png" /></a> <a target="_blank" href="http://www.facebook.com/bsvino"><img class="socialicon" src="/resume/icon-fb.png" /></a> <a target="_blank" href="http://www.google.com/profiles/bs.vino"><img class="socialicon" src="/resume/icon-g+.png" /></a> <a target="_blank" href="https://www.linkedin.com/in/jorgelrodriguez"><img class="socialicon" src="/resume/icon-in.png" /></a>
		<? } ?>
	</div>
	<div id="myname"><span class="myname-firstletter">J</span>orge <span class="myname-firstletter">L. R</span>odr&iacute;guez</div>
	<div id="allinfo">
		<div style="text-align: center; margin: 10px;"><em>Video game designer</em></div>
		<div id="informationright">
			Seattle, WA, USA<br>
			<? $page = $_SERVER['HTTP_HOST'] . substr($url_parts[0], 0, -1); ?>
			<a href="http://<? echo $page; ?>"><? echo $page; ?></a>
		</div>
		<div id="information">
			<a href="mailto:bs.vino@gmail.com">bs.vino@gmail.com</a><br>
			(919) 757-3066<br>
		</div>
		<br clear=both />
	</div>

	<div class="sectionheader">EXPERIENCE</div>

	<div id="ags_experience" class="experience">
	<? if (!$print) { ?>
		<div id="ags_pullout" class="pullout">
			<a target="_blank" href="http://youtu.be/riOjIThEZBw">
				<img src="/resume/crucible.png" width="100" height="100" />
			</a>
		</div>
	<? } ?>
		<div class="dates">Jan 2016 - Present</div>
		<b>Amazon Game Studios</b>
		<i>Software Development Engineer II.</i><br/>
		<div class="tasks">
			<div class="task">Worked closely with designers to implement and maintain game systems in C++ and Lua.</div>
			<div class="task">Owned the design of the spectator experience, built for e-sports broadcasting and tournaments.</div>
			<div class="task">Created the Debug Overlay, used by all disciplines across the studio for debug and development.</div>
		</div>
	</div>


	<div id="da_experience" class="experience">
	<? if (!$print) { ?>
		<div id="da_pullout" class="pullout">
			<a target="_blank" href="http://youtu.be/btzVypzt5nI"><div id="da_pullout_video" class="pullout_video">
				<video id="da_video" width=100 height=100 autoplay loop>
					<source src="/resume/doubleaction.oggtheora.ogv" type="video/ogg" />
				</video>
			</div></a>
		</div>
	<? } ?>
		<div class="dates">Apr 2011 - Dec 2014</div>
		<b><a target="_blank" href="http://doubleactiongame.com/">Double Action</a></b>
		<i>Designer, Programmer.</i><br/>
		<div class="tasks">
			<div class="task"><a target="_blank" href="http://store.steampowered.com/app/317360/">Shipped on Steam</a> in mid 2014, 92% positive reviews. <? if (!$print) {?>(<a target="_blank" href="http://youtu.be/btzVypzt5nI">Trailer</a>. Gameplay by <a target="_blank" href="http://youtu.be/KTsphcJw_Es">PewDiePie</a>, <a target="_blank" href="http://youtu.be/dtv34h4ZPio">EatMyDiction</a>.)</div>
			<div class="task"><?}?>ModDB <a target="_blank" href="http://www.moddb.com/events/2014-mod-of-the-year-awards/features/mod-of-the-year-2014-editors-choice">Editor's Choice</a> Mod of the Year 2014.</div>
			<div class="task">Designed and implemented game systems: combat, multiplayer slowmo, mini-objectives.</div>
			<div class="task">Conducted usability tests to improve player experience.</div>
			<div class="task">Contributed player and view model animations, sound designs, and level designs.</div>
		</div>
	</div>

	<div id="dt_experience" class="experience">
	<? if (!$print) { ?>
                <div id="dt_pullout" class="pullout">
                        <a target="_blank" href="http://digitanks.com/"><div id="dt_pullout_video" class="pullout_video">
                                <video id="dt_video" width=100 height=100 autoplay loop>
                                        <source src="/resume/digitanks.oggtheora.ogv" type="video/ogg" />
                                </video>
                        </div></a>
                </div>
	<? } ?>
		<div class="dates">Mar 2010 - Dec 2013</div>
		<b><a target="_blank" href="http://digitanks.com/">Digitanks</a></b>
		<i>Designer, Programmer, Artist.</i><br>
		<div class="tasks">
			<div class="task">Shipped an artillery-based strategy game, three game modes, online/hotseat multiplayer.</div>
			<div class="task">Designed the game's systems: unit types, tech tree, combat mechanics.</div>
			<div class="task">Conducted usability tests to improve the player's experience and the game's intuitiveness.</div>
		</div>
	</div>

	<div id="mfgd_experience" class="experience">
	<? if (!$print) { ?>
		<div id="mfgd_pullout" class="pullout">
			<a target="_blank" href="https://www.youtube.com/user/BSVino"><div id="mfgd_pullout_video" class="pullout_video">
				<video id="mfgd_video" width=100 height=100 autoplay loop>
					<source src="/resume/mfgd.oggtheora.ogv" type="video/ogg" />
				</video>
			</div></a>
		</div>
	<? } ?>
		<div class="dates">Jan 2013 - Present</div>
		<b><a target="_blank" href="https://www.youtube.com/user/BSVino">Math for Game Developers</a></b>
		<i>Creator.</i><br>
		<div class="tasks">
			<div class="task">Produced an online video series on the math required for video game development.</div>
			<div class="task">Subjects include linear algebra, calculus, graph theory, quaternions, triangle meshes, shaders.</div>
			<div class="task">Over 21,000 subscribers, over 1,100,000 views, Kickstarter funded at 330%.</div>
		</div>
	</div>

	<div id="cf_experience" class="experience">
	<? if (!$print) { ?>
                <div id="cf_pullout" class="pullout">
                        <a target="_blank" href="http://vimeo.com/10146087"><div id="cf_pullout_video" class="pullout_video">
                                <video id="cf_video" width=100 height=100 autoplay loop>
                                        <source src="/resume/calamityfuse.oggtheora.ogv" type="video/ogg" />
                                </video>
                        </div></a>
                </div>
	<? } ?>
		<div class="dates">Dec 2006 - Feb 2010</div>
		<b><a target="_blank" href="https://vimeo.com/10146087">Calamity Fuse</a></b>
		<i>Designer, Programmer.</i><br>
		<div class="tasks">
			<div class="task">Unreleased. <a target="_blank" href="http://youtu.be/HHHmOTO993Y">Designed and implemented</a> combat systems and game modes.</div>
			<div class="task">Designed and implemented the game's user interface and heads-up display.</div>
			<div class="task">Contributed to environment art, level design, character designs, story, and musical score.</div>
		</div>
	</div>

	<div class="sectionheader">PREVIOUS WORK</div>
	<div class="experience">
		<div class="tasks">
                        <div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/eo2HNCTV78s">"Understanding Quaternions through Geometric Algebra"</a></i>, Online, 2017. An introduction to Geometric Algebra and an explanation of quaternions that actually makes sense.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://www.youtube.com/watch?v=RpZKsHliHXk">"Defense against the threat of a rogue artificial intelligence"</a></i>, BahFest, 2015. A short comedy-science talk.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/Nztt9kFvObU">"Double Action: Postmortem (How I Built A Successful Game For Zero Dollars)"</a></i>, ECGC, 2015. On differentiating a design in a crowded market by iteration towards guiding principles.</div>
			<div class="task"><i><a target="_blank" href="http://docs.gl/">docs.gl</a></i>, 2014. A better documentation website for OpenGL and OpenGL ES.</div>
			<div class="task"><i><a target="_blank" href="http://www.moddb.com/mods/halfquake-amen">Half-Quake: Sunrise</a></i>, 2009. Thematic first person puzzler, Half-Life engine. Music, voice.</div>
			<div class="task"><i><a target="_blank" href="http://en.wikipedia.org/wiki/The_Specialists">The Specialists</a></i>, 2004-07. Multiplayer action shooter, Half-Life engine. Programming, design.</div>
			<div class="task"><i>Education</i>: UCLA Mathematics of Computation, Bachelors of Science, 2015.</div>
		</div>
	</div>

	<? if (!$print) { ?>
		<div style="text-align: center"><em>Find more examples of my work <a target="_blank" href="http://vinoisnotouzo.com/">on my website</a>.</em></div>
	<? } ?>

	<br clear="both" />
	<br />
</body></html>
