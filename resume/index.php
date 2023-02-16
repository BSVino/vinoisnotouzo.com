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
		//background-image: url("/resume/crucible.png");
	}

	#da_pullout_video {
		//background-image: url("/resume/doubleaction.png");
	}
	
	#da_pullout {
		margin-top: 65px;
	}

	#mfgd_pullout_video {
		//background-image: url("/resume/mfgd.png");
	}
	
	#mfgd_pullout {
		margin-top: 5px;
	}

	#vb_pullout_video {
		//background-image: url("/resume/viewback.png");
	}
	
	#vb_pullout {
		margin-top: 30px;
	}

	#dt_pullout_video {
		//background-image: url("/resume/digitanks.png");
	}
	
	#dt_pullout {
		margin-top: 50px;
	}

	#cf_pullout_video {
		//background-image: url("/resume/calamityfuse.png");
	}
	
	#cf_pullout {
		margin-top: 40px;
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
			<a target="_blank" href="http://twitter.com/cubesos"><img class="socialicon" src="/resume/icon-tw.png" /></a> <a target="_blank" href="http://www.facebook.com/bsvino"><img class="socialicon" src="/resume/icon-fb.png" /></a> <a target="_blank" href="http://www.google.com/profiles/bs.vino"><img class="socialicon" src="/resume/icon-g+.png" /></a> <a target="_blank" href="https://www.linkedin.com/in/jorgelrodriguez"><img class="socialicon" src="/resume/icon-in.png" /></a>
		<? } ?>
	</div>
	<div id="myname"><span class="myname-firstletter">J</span>orge <span class="myname-firstletter">L. R</span>odr&iacute;guez</div>
	<div id="allinfo">
		<div style="text-align: center; margin: 10px;"><em>Video Game Designer and Programmer</em></div>
		<div id="informationright">
			Miami, FL, USA<br>
			<? $page = $_SERVER['HTTP_HOST'] . substr($url_parts[0], 0, -1); ?>
			<a href="http://<? echo $page; ?>"><? echo $page; ?></a>
		</div>
		<div id="information">
			<a href="mailto:jorge.rodriguez@hey.com">jorge.rodriguez@hey.com</a><br>
			(919) 757-3066<br>
		</div>
		<br clear=both />
	</div>

	<div class="sectionheader">EXPERIENCE</div>

	<div id="iw_experience" class="experience">
		<div class="dates">Mar 2022 - Present</div>
		<b>Infinity Ward</b>
		<i>Senior Multiplayer Designer.</i><br/>
		<div style="font-size: smaller;">Titles: <em>Call of Duty: Warzone</em></div>
		<div class="tasks">
			<div class="task">Content and systems design and implementation for player progression and equipment systems.</div>
		</div>
	</div>


	<div id="ags_experience" class="experience">
		<div class="dates">Mar 2019 - Apr 2021</div>
		<b>Amazon Game Studios</b>
		<i>Game Designer.</i><br/>
		<div style="font-size: smaller;">Titles: <em>Crucible, Unannounced</em></div>
		<div class="tasks">
			<div class="task">Product owner of combat/abilities-related feature (unannounced). Owned implementation, backlog, roadmap, prioritization of new features.</div>
			<div class="task">Owned Crucible tutorial. Rebuilt tutorial from the ground up after launch.</div>
			<div class="task">Contributed to the Crucible <em>Heart of the Hives</em> core game mode, owned a canceled game mode.</div>
			<div class="task">Owned Crucible player progression, including battle pass, challenges, and achievements.</div>
		</div>
	</div>

	<div id="ags_experience" class="experience">
		<div class="dates">Nov 2017 - Mar 2019</div>
		<b>Amazon Game Studios</b>
		<i>Lead Test Engineer.</i><br/>
		<div class="tasks">
			<div class="task">Product owner of the Crucible automated regression testing framework, CrucibleTest.</div>
			<div class="task">Created initial technical design. Owned backlog, roadmap, prioritization of new features.</div>
			<div class="task">Oversaw a team of three individual contributors building three major deliverables.</div>
			<div class="task">Drove testing processes and adoption. Evangelized and fostered a culture of automated testing.</div>
			<div class="task">Delivered CrucibleTest to 15 gameplay engineers, who wrote &gt;500 tests in 6 months.</div>
			<div class="task">CrucibleTest recognized by directors as increasing build stability by an order of magnitude.</div>
			<div class="task">Trained and mentored SDET/QA teammates to take over maintenance and future feature work.</div>
		</div>
	</div>

	<div id="ags_experience" class="experience">
		<div class="dates">Jan 2016 - Nov 2017</div>
		<b>Amazon Game Studios</b>
		<i>Gameplay Engineer.</i><br/>
		<div style="font-size: smaller;">Titles: <em>Crucible</em></div>
		<div class="tasks">
			<div class="task">Engineering and technical design for <a target="_blank" href="https://youtu.be/riOjIThEZBw">Crucible</a> in C++ and Lua.</div>
			<div class="task">Worked closely with designers to implement and maintain game systems.</div>
			<div class="task">Developed gameplay systems in C++ for Crucible on Amazon Lumberyard, a fork of CryEngine.</div>
			<div class="task">Owned the spectator experience, built for e-sports broadcasting and tournaments. Engaged external customers (professional broadcasters) to drive improvements.</div>
			<div class="task">Designed the architecture for and implemented the Game Master system and interactive objects.</div>
			<div class="task">Created the Debug Overlay, used by all disciplines across the studio for debug and development.</div>
			<div class="task">Created systems and math libraries that simplified gameplay code and reduced bugs.</div>
			<div class="task">Coordinated with external teams to identify and remove pain points in the designer editor workflow.</div>
			<div class="task">Part of the 'transition' team responsible for building core systems ahead of a major code migration.</div>
		</div>
	</div>

	<div id="da_experience" class="experience">
		<div class="dates">Apr 2011 - Dec 2015</div>
		<b><a target="_blank" href="http://doubleactiongame.com/">Double Action Factory</a></b>
		<i>Designer, Software Engineer.</i><br/>
		<div style="font-size: smaller;">Titles: <em>Double Action: Boogaloo</em></div>
		<div class="tasks">
			<?/*<div class="task"><a target="_blank" href="http://store.steampowered.com/app/317360/">Shipped on Steam</a> in mid 2014, 92% positive reviews. <? if (!$print) {?>(<a target="_blank" href="http://youtu.be/btzVypzt5nI">Trailer</a>. Gameplay by <a target="_blank" href="http://youtu.be/KTsphcJw_Es">PewDiePie</a>, <a target="_blank" href="http://youtu.be/dtv34h4ZPio">EatMyDiction</a>.)</div>
			<div class="task"><?}?>ModDB <a target="_blank" href="http://www.moddb.com/events/2014-mod-of-the-year-awards/features/mod-of-the-year-2014-editors-choice">Editor's Choice</a> Mod of the Year 2014.</div>*/?>
			<div class="task">Designed and implemented game mechanics: multiplayer slowmo, mini-objectives, stunt system.</div>
			<div class="task">Project management in a team of 4-6 cross-disciplinary developers.</div>
			<div class="task">Implemented a scalable (up to a million players) <a target="_blank" href="http://data.doubleactiongame.com/leaderboard/">leaderboard</a> across all servers.</div>
			<div class="task">Developed a <a target="_blank" href="http://data.doubleactiongame.com/servers/">gameplay data telemetry system</a> to guide design decisions.</div>
			<div class="task">Conducted usability tests to improve player experience.</div>
			<div class="task">Added new shader effects such as SSAO, depth of field, slowmo effects.</div>
			<div class="task">Built on Valve's Source Engine in C++. Designed and wrote user interface with VGUI.</div>
			<div class="task">Supported artists and art pipeline, integrated assets from artists.</div>
			<div class="task">Contributed player and view model animations, sound designs, and level designs.</div>
		</div>
	</div>

	<div class="experience">
		<div class="dates">Mar 2010 - Mar 2014</div>
		<b>Lunar Workshop</b> <i>Designer, Software Engineer.</i><br/>
		<div style="font-size: smaller;">Titles: <em>Digitanks, Digitanks: Artillery Update</em></div>
		<div><em>Digitanks:</em></div>
		<div class="tasks">
			<div class="task">Shipped a 3D artillery-based strategy game, three game modes, online/hotseat multiplayer.</div>
			<div class="task">Designed the game's systems: unit types, tech tree, combat mechanics.</div>
			<div class="task">Built the Tinker game engine in C++: physics, scene management, renderer, UI, networking, level editor.</div>
			<div class="task">Developed and coordinated the <a target="_blank" href="http://arstechnica.com/gaming/news/2011/06/5-for-5-bundle-packages-five-great-indie-games-for-just-5.ars">"Socks" indie game bundle</a>.</div>
			<div class="task">Conducted usability tests to improve the player's experience and the game's intuitiveness.</div>
			<div class="task">Profiled game code and implemented numerous optimizations.</div>
			<div class="task">Co-composer of the musical score.</div>
		</div>
		<div><em>SMAK:</em></div>
		<div class="tasks">
			<div class="task">Designed and sold the AO/Normal map generator <a target="_blank" href="http://getsmak.net/">SMAK!</a> with realtime 3D preview.</div>
			<div class="task">Optimized the raytracer SMAK used to generate ambient occlusion and normal maps.</div>
			<div class="task">Implemented a GPU-accelerated AO algorithm capable of generating maps in seconds.</div>
		</div>
		<div><em>Viewback:</em></div>
		<div class="tasks">
			<div class="task"><a target="_blank" href="https://www.youtube.com/watch?v=vzF4IUAhqgI">A game design tool</a> that shows realtime debug data on a wireless device.</div>
			<div class="task">Users can interact with their designs and change game design parameters without recompiling.</div>
			<div class="task">Wrote server component in C to be extremely memory conservative and support all major platforms.</div>
			<div class="task">Wrote backwards compatible network code based on <a target="_blank" href="https://developers.google.com/protocol-buffers/">Google Protobuf</a> to allow for future additions.</div>
			<div class="task">Wrote multithreaded monitor app on Windows/Linux/Android to analyze and control a running game.</div>
		</div>
	</div>

	<div id="cf_experience" class="experience">
		<div class="dates">Dec 2006 - Feb 2010</div>
		<b>Matreya Studios</b>
		<i>Designer, Software Engineer.</i><br>
		<div style="font-size: smaller;">Titles: <em>Calamity Fuse [canceled]</em></div>
		<div class="tasks">
			<div class="task"><a target="_blank" href="http://youtu.be/HHHmOTO993Y">Designed and implemented</a> game mechanics like sword-fighting, magic system, game modes, and novel movement systems.</div>
			<div class="task">Designed and implemented the game's user interface and heads-up display.</div>
			<div class="task">Built on Valve's Source Engine in C++ and VGUI.</div>
			<div class="task">Contributed to environment art, level design, character designs, story, and musical score.</div>
			<div class="task">Produced most of the game's sound design.</div>
		</div>
	</div>

	<div class="experience">
		<div class="dates">Nov 2004 - Dec 2009</div>
		<b>Providence Software Solutions</b>
		<i>Software Engineer.</i><br>
		<div class="tasks">
			<div class="task">Developed new version of SAP's IPRO procurement tool in C++.</div>
			<div class="task">Developed, packaged, released and supported <a target="_blank" href="http://www.xvt.com/">XVT</a>, a cross-platform GUI toolkit, using C/C++.</div>
		</div>
	</div>

	<div class="sectionheader">ADDITIONAL WORK</div>
	<div class="experience">
		<div class="tasks">
			<div class="task"><i><a target="_blank" href="http://en.wikipedia.org/wiki/The_Specialists">The Specialists</a></i>, 2004-07. Multiplayer action shooter, Half-Life engine. Programming, design.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/eo2HNCTV78s">"Understanding Quaternions through Geometric Algebra"</a></i>, Online, 2017. An introduction to Geometric Algebra and an explanation of quaternions that actually makes sense.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/MUNRvqpske0">"Debugging Optimized x64 Code"</a></i>, Online, 2016. Debugging optimized code by understanding how C++ maps to assembler through an optimizer.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/vGGg25f1_l0">"Enumerative Combinatorics"</a></i>, Online, 2016. A software engineer's introduction to Enumerative Combinatorics.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://www.youtube.com/watch?v=ceDh1fkKwgY&index=9&list=PLSZHCj84JSDMInvIg8mxNRmemoMwrySFj">"Visual Vectors: An Intuitive 3D Math Tutorial"</a></i>, Nodevember, 2015. An introduction to 3D math in Javascript using interactive slides written in WebGL.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://www.youtube.com/watch?v=RpZKsHliHXk">"Defense against the threat of a rogue artificial intelligence"</a></i>, BahFest, 2015. A short comedy-science talk.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/Nztt9kFvObU">"Double Action: Postmortem (How I Built A Successful Game For Zero Dollars)"</a></i>, East Coast Game Conference, 2015. On differentiating a design in a crowded market by iteration towards guiding principles.</div>
			<div class="task"><i>Lamplighters</i>, 2014-2017. Manager of approx. 1000 volunteers in a yearly community art project.</div>
			<div class="task"><i><a target="_blank" href="https://github.com/nothings/stb/blob/master/stb_image_resize.h">stb_image_resize</a></i>, 2014. An image resizing library with emphasis on usability and speed.</div>
			<div class="task"><i><a target="_blank" href="http://docs.gl/">docs.gl</a></i>, 2014. A better documentation website for OpenGL and OpenGL ES.</div>
			<div class="task"><i><a target="_blank" href="https://www.youtube.com/user/BSVino">Math for Game Developers</a></i>, 2013-Present. Online video series on the math required for video game development. 20k subscriptions, over one million views.</div>
			<div class="task"><i><a target="_blank" href="https://developers.google.com/open-source/soc/?csw=1">Google Summer of Code</a></i>, 2012. <a target="_blank" href="http://www.youtube.com/watch?v=gTxd_gZI4QY">Improving the user interface and usability</a> of <a target="_blank" href="http://blender.org">Blender</a>.</div>
			<div class="task"><i><a target="_blank" href="http://www.moddb.com/mods/halfquake-amen">Half-Quake: Sunrise</a></i>, 2009. Thematic first person puzzler, Half-Life engine. Music, voice.</div>
			<div class="task"><i>Education</i>: UCLA Mathematics of Computation, Bachelors of Science.</div>
		</div>
	</div>

	<? if (!$print) { ?>
		<div style="text-align: center"><em>Find more examples of my work <a target="_blank" href="http://vinoisnotouzo.com/">on my website</a>.</em></div>
	<? } ?>

	<br clear="both" />
	<br />
</body></html>
