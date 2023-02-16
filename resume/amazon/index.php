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
		text-indent: -0.2in;
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
		border-bottom: 1px solid #ccc;
		text-decoration: none;
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

	#da_pullout_video {
		background-image: url("doubleaction.png");
	}
	
	#da_pullout {
		margin-top: 55px;
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
		margin-top: 0px;
	}

	#dt_pullout_video {
		background-image: url("digitanks.png");
	}
	
	#dt_pullout {
		margin-top: 00px;
	}

	#cf_pullout_video {
		background-image: url("calamityfuse.png");
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
		background-image: url(bullet.png);
		background-repeat: no-repeat;
		background-position: 0px center;
		background-size: 1.4px 1.4px;
		padding-left: 45px;
		text-indent: -20px;
	}

	.task {
		background-image: url(bullet.png);
		background-repeat: no-repeat;
		background-position: 0px center;
		background-size: 1.4px 1.4px;
		padding-left: 30px;
		text-indent: -20px;
		margin-left: -30px;
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
			<a target="_blank" href="http://twitter.com/vinobs"><img class="socialicon" src="icon-tw.png" /></a> <a target="_blank" href="http://www.facebook.com/bsvino"><img class="socialicon" src="icon-fb.png" /></a> <a target="_blank" href="http://www.google.com/profiles/bs.vino"><img class="socialicon" src="icon-g+.png" /></a> <a target="_blank" href="https://www.linkedin.com/in/jorgelrodriguez"><img class="socialicon" src="icon-in.png" /></a> <a target="_blank" href="http://bsvino.tumblr.com/"><img class="socialicon" src="icon-t.png" /></a>
			<?/*<a target="_blank" href="http://twitter.com/vinobs">tw</a> | <a target="_blank" href="http://www.facebook.com/bsvino">fb</a> | <a target="_blank" href="http://www.google.com/profiles/bs.vino">g+</a> | <a target="_blank" href="https://www.linkedin.com/in/jorgelrodriguez">in</a>*/?>
		<? } ?>
	</div>
	<div id="myname"><span class="myname-firstletter">J</span>orge <span class="myname-firstletter">L. R</span>odr&iacute;guez</div>
	<div id="allinfo">
		<div style="text-align: center; margin: 10px;"><em>Video game designer and programmer</em></div>
		<div id="informationright">
			Los Angeles, CA<br>
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

	<div id="da_experience" class="experience">
	<? if (!$print) { ?>
		<div id="da_pullout" class="pullout">
			<a target="_blank" href="http://youtu.be/btzVypzt5nI"><div id="da_pullout_video" class="pullout_video">
				<video id="da_video" width=100 height=100 autoplay loop>
					<source src="doubleaction.oggtheora.ogv" type="video/ogg" />
				</video>
			</div></a>
		</div>
	<? } ?>
		<div class="dates">Apr 2011 - Present</div>
		<b><a target="_blank" href="http://doubleactiongame.com/">Double Action</a></b>
		<i>Designer, Programmer.</i><br/>
		<div class="tasks">
			<div class="task"><a target="_blank" href="http://store.steampowered.com/app/317360/">Shipped on Steam</a> in mid 2014, 91% positive reviews. <? if (!$print) {?>(<a target="_blank" href="http://youtu.be/btzVypzt5nI">Trailer</a>. Gameplay by <a target="_blank" href="http://youtu.be/KTsphcJw_Es">PewDiePie</a>, <a target="_blank" href="http://youtu.be/dtv34h4ZPio">EatMyDiction</a>.)</div>
			<div class="task"><?}?>ModDB <a target="_blank" href="http://www.moddb.com/events/2014-mod-of-the-year-awards/features/mod-of-the-year-2014-editors-choice">Editor's Choice</a> Mod of the Year 2014.</div>
			<div class="task">Designed and implemented game mechanics: multiplayer slow-motion, mini-objectives.</div>
			<div class="task">Conducted usability tests to improve the player's experience and the game's intuitiveness.</div>
			<div class="task">Supported artists and art pipeline, integrated assets from artists.</div>
			<div class="task">Contributed player and view model animations, sound designs, and level designs.</div>
			<div class="task">Implemented a scalable (up to a million players) <a target="_blank" href="http://data.doubleactiongame.com/leaderboard/">leaderboard</a> across all servers.</div>
			<div class="task">Developed a gameplay data tracking system that stored and <a target="_blank" href="http://data.doubleactiongame.com/servers/">displayed</a> user statistics.</div>
			<div class="task">Used data tracking system to guide game design and level design decisions.</div>
		</div>
	</div>

	<div id="dt_experience" class="experience">
	<? if (!$print) { ?>
                <div id="dt_pullout" class="pullout">
                        <a target="_blank" href="http://digitanks.com/"><div id="dt_pullout_video" class="pullout_video">
                                <video id="dt_video" width=100 height=100 autoplay loop>
                                        <source src="digitanks.oggtheora.ogv" type="video/ogg" />
                                </video>
                        </div></a>
                </div>
	<? } ?>
		<div class="dates">Mar 2010 - Dec 2013</div>
		<b><a target="_blank" href="http://digitanks.com/">Digitanks</a></b>
		<i>Programmer, Designer, Artist.</i><br>
		<div class="tasks">
			<div class="task">Shipped an artillery strategy game with five units, three game modes, online/hotseat multiplayer.</div>
			<div class="task">Built the Tinker game engine in C++: physics, scene management, renderer, UI, networking, editor.</div>
			<div class="task">Conducted usability tests to improve the player's experience and the game's intuitiveness.</div>
			<div class="task">Profiled game code and implemented graphics and performance optimizations.</div>
		</div>
	</div>

	<div id="vb_experience" class="experience">
	<? if (!$print) { ?>
                <div id="vb_pullout" class="pullout">
                        <a target="_blank" href="https://www.youtube.com/watch?v=vzF4IUAhqgI"><div id="vb_pullout_video" class="pullout_video">
                                <video id="vb_video" width=100 height=100 autoplay loop>
                                        <source src="viewback.oggtheora.ogv" type="video/ogg" />
                                </video>
                        </div></a>
                </div>
	<? } ?>
		<div class="dates">Feb 2014 - Present</div>
		<b><a target="_blank" href="http://github.com/BSVino/Viewback">Viewback</a></b>
		<i>Designer, Programmer.</i><br>
		<div class="tasks">
			<div class="task"><a target="_blank" href="https://www.youtube.com/watch?v=vzF4IUAhqgI">A game design tool</a> that shows realtime debug data on a wireless device.</div>
			<div class="task">Users can interact with their designs and change game design parameters without recompiling.</div>
			<div class="task">Wrote server component in C to be memory conservative and support all major platforms.</div>
		</div>
	</div>

	<?/*<div class="experience">
		<div class="dates">Jan 2013 - Dec 2013</div>
		<b>Grossmont Math Study Center</b>
		<i>Lead Tutor.</i> San Diego, CA<br>
		<div class="tasks">
			Tutored students in algebra, trigonometry, calculus, physics.<br/>
			Provided support to other tutors.<br/>
		</div>
	</div>*/?>

	<div id="cf_experience" class="experience">
	<? if (!$print) { ?>
                <div id="cf_pullout" class="pullout">
                        <a target="_blank" href="http://vimeo.com/10146087"><div id="cf_pullout_video" class="pullout_video">
                                <video id="cf_video" width=100 height=100 autoplay loop>
                                        <source src="calamityfuse.oggtheora.ogv" type="video/ogg" />
                                </video>
                        </div></a>
                </div>
	<? } ?>
		<div class="dates">Dec 2006 - Feb 2010</div>
		<b><a target="_blank" href="https://vimeo.com/10146087">Calamity Fuse</a></b>
		<i>Designer, Programmer.</i><br>
		<div class="tasks">
			<div class="task">Unreleased. <a target="_blank" href="http://youtu.be/HHHmOTO993Y">Designed and implemented</a> game mechanics like sword-fighting, magic system, game modes, and novel movement systems.</div>
			<div class="task">Designed and implemented the game's user interface and heads-up display.</div>
			<div class="task">Contributed to environment art, level design, character designs, story, and musical score.</div>
		</div>
	</div>

	<div class="experience">
		<b>Previous Work</b><br>
		<div class="tasks">
			<div class="task"><i><a href="http://youtube.com/bsvino">Math for Game Developers</a></i>. An online video series on the math required for video game development.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/Nztt9kFvObU">"Double Action: Postmortem (How I Built A Successful Game For Zero Dollars)"</a></i>, East Coast Game Conference, 2015. On how meaningfulness and guiding principles can help designers create unique experiences and differentiate a design in a crowded market.</div>
			<div class="task"><i><a target="_blank" href="https://github.com/nothings/stb/blob/master/stb_image_resize.h">stb_image_resize</a></i>, 2014. An image resizing library with emphasis on usability and speed.</div>
			<div class="task"><i><a target="_blank" href="http://docs.gl/">docs.gl</a></i>, 2014. A better documentation website for OpenGL and OpenGL ES.</div>
			<div class="task"><i><a target="_blank" href="https://developers.google.com/open-source/soc/?csw=1">Google Summer of Code</a></i>, 2012. <a target="_blank" href="http://www.youtube.com/watch?v=gTxd_gZI4QY">Improving the user interface and usability</a> of <a target="_blank" href="http://blender.org">Blender</a>.</div>
			<div class="task"><i><a target="_blank" href="http://en.wikipedia.org/wiki/The_Specialists">The Specialists</a></i>, 2004-07. Multiplayer action shooter, Half-Life engine. Programming, design.</div>
		</div>
	</div>

	<? if (!$print) { ?>
		<div style="text-align: center"><em>Find more examples of my work <a target="_blank" href="http://vinoisnotouzo.com/">on my website</a>.</em></div>
	<? } ?>

	<div class="sectionheader"><a name="skills"></a>SKILLS</div>
	<div class="skills">
<script>
$(function() {
	$( document ).tooltip();
});
</script>
		<ul>
			<li><a href="#skills" class="skill" title="First professional work 2004. First game shipped in 2004. First programming language at 8 years old."><? echo date("Y")-2004; ?> years professional experience</a>
				(<a href="#skills" class="skill" title="Since 2001. Written in C: Parts of the Double Action leaderboard code. Parts of the example code from Math for Game Developers. The Viewback server. stb_image_resize. My work in Google Summer of Code. Parts of The Specialists.">C</a>,
				<a href="#skills" class="skill" title="Since 2003. Written in C++: Double Action. Most of the example code from Math for Game Developers. The Viewback client/monitor. Grotto. Codename: Infinite. SMAK. Digitanks. Tinker, my game engine. Most of The Specialists. Calamity Fuse.">C++</a>)
			<li><a href="#skills" class="skill" title="Designed all game mechanics for Double Action, Digitanks, and a number of unreleased prototypes. Designed a substantial portion of Calamity Fuse.">Game design</a>, <a href="#skills" class="skill" title="Conducted extensive usability testing for all of my games.">Interaction design and usability</a></li>
			<li><a href="#skills" class="skill" title="Optimized Digitanks, SMAK, Tinker (my game engine), and many of my incomplete prototypes.">Program optimization</a></li>
			<li><a href="#skills" class="skill" title="Designed and wrote the user interfaces for all of my games. Wrote from scratch 'glgui', the user interface library that powers Calamity Fuse, SMAK, Digitanks and Viewback.">User interface design</a></li>
		</ul>
		<ul>
			<li><a href="#skills" class="skill" title="Math for Game Developers. UCLA Mathematics of Computation - in progress">Mathematics</a>: <a href="#skills" class="skill" title="Every game ever uses linear algebra and mine are no exception. We can save time in the interview if you skip past the easy dot product/cross product questions.">linear algebra</a>, <a href="#skills" class="skill" title="Multiple unreleased game prototypes.">fluid solvers</a>,</li>
				<div style="padding-left: 45px;">
				<a href="#skills" class="skill" title="See my website for 'Blue Ocean', a demo that supports up to 7000 flocking fish.">flocking algorithms</a>,
				<a href="#skills" class="skill" title="stb_image_resize. SMAK.">imaging</a>,
				<a href="#skills" class="skill" title="Projectile motion and simple collision detection in Digitanks and other games that use Tinker, my game engine.">mechanics<a/>,
				<a href="#skills" class="skill" title="Fluid solvers, physics integrations and flocking algorithms in various game prototypes.">modeling and simulation</a>,
				<a href="#skills" class="skill" title="kd-tree accelerates map generation in SMAK. Octrees, heaps, hashes, vectors, and many other custom-coded data structures to get better performance in just about every project I've worked on.">algorithm design</a>
				</div>
			<li><a href="#skills" class="skill" title="At a basic level. Silo 3D was used for Digitanks and Calamity Fuse. XSI was used for Calamity Fused. 3DS Max was used for Double Action.">3D art packages (Max, Maya, Silo)</a></li>
		</ul>
<? /*
		<a href="#skills" class="skill" title="Designed the API for Viewback. Co-designed the API for stb_image_resize.">API design</a>,
		<a href="#skills" class="skill" title="Includes loading minidumps into the debugger and fixing crashes for Calamity Fuse, Digitanks, Double Action, SMAK.">Visual Studio 6-12</a>,
		<a href="#skills" class="skill" title="Double Action and Calamity Fuse were implemented in Source.">Source engine</a>,
		<a href="#skills" class="skill" title="Tinker's rendering engine is OpenGL, and so Digitanks, SMAK, Viewback, the Math for Game Developers example code, and all of my unreleased prototypes use OpenGL.">OpenGL, GLSL</a>,
		<a href="#skills" class="skill" title="Shaders written for Calamity Fuse and Double Action were in HLSL. Implemented bloom, tone mapping, angle-based SSAO, depth of field">HLSL</a>,
		<a href="#skills" class="skill" title="Native Linux ports for Double Action and Digitanks, the Double Action data server and leaderboards, all game websites and docs.gl, this resume was written in vim.">Linux</a>,
		<a href="#skills" class="skill" title="Primary image editor for all of my games.">Photoshop</a>,
		<a href="#skills" class="skill" title="See my home page (link above) for my GitHub account.">Git</a>,
		<a href="#skills" class="skill" title="I used SVN exclusively until around 2011.">SVN</a>,
		<a href="#skills" class="skill" title="Bullet is the physics engine that powers Tinker. Many of my prototypes use it, but no games were shipped with Bullet.">Bullet Physics</a>,
		<a href="#skills" class="skill" title="Powers the Double Action leaderboards">lmdb (Lightning Memory-mapped Database)</a>,
		<a href="#skills" class="skill" title="Is the networking data layer for Viewback and the Double Action leaderboards and data tracking software. Is the model format for Tinker.">Google Protocol Buffers</a>,
		<a href="#skills" class="skill" title="docs.gl, the Strunkifier, my Gambler's Fallacy Dice Roller and this page use hand-coded jQuery. It almost, but not quite, makes the web worth developing on.">jQuery</a>,
		<a href="#skills" class="skill" title="I taught my dog to do a barrel roll.">dog walking</a>
*/?>
</div>
<br clear="both" />

	<div class="sectionheader">EDUCATION</div>

	<div class="experience">
		<div class="dates">Sep 2014 - Dec 2015</div>
		<b><a target="_blank" href="http://ucla.edu/">University of California, Los Angeles</a></b><br>
		<i style="margin-left: .3in;">Bachelors in <a target="_blank" href="http://www.vinoisnotouzo.com/resume/math_computation.php">Mathematics of Computation</a></i><br>
	</div>

	<div class="experience">
		<div class="dates">Jan 2011 - May 2014</div>
		<b><a target="_blank" href="http://www.grossmont.edu/">Grossmont College</a>, La Mesa, CA</b><br>
		<i style="margin-left: .3in;">General Education</i><br>
	</div>

	<div class="sectionheader">ACTIVITIES</div>

	<div class="experience">
		<div id="activitiesleft">
			<i>Hablo espa&ntilde;ol</i><br>
			<i><a target="_blank" href="http://gdconf.com">GDC</a> Conference Associate</i>, 2 yrs<br>
			<i><a target="_blank" href="http://en.wikipedia.org/wiki/Hapkido">Hapkido</a> Assistant Instructor</i>, 3 yrs<br>
		</div>
		<div id="activitiesright">
			<i><a target="_blank" href="http://www.meetup.com/gamedev-176/">Triangle Game Developers</a> Organizer</i>, 1 yr<br>
			<i>Music Composition and Performance</i>, <? echo date("Y")-1997; ?> yrs<br>
			<i>Dvorak typist</i>, 80 wpm
		</div>
	</div>

	<br clear="both" />
	<br />
</body></html>
