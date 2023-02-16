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
		background-image: url(bullet.png);
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

	#da_pullout_video {
		background-image: url("doubleaction.png");
	}
	
	#da_pullout {
		margin-top: 10px;
	}

	#mfgd_pullout_video {
		background-image: url("mfgd.png");
	}
	
	#mfgd_pullout {
		margin-top: -5px;
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
		margin-top: 0px;
	}

	#cf_pullout_video {
		background-image: url("calamityfuse.png");
	}
	
	#cf_pullout {
		margin-top: 20px;
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
	<div id="allinfo" style="overflow: hidden;">
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

	<div id="ags_experience" class="experience">
		<div class="dates">Jan 2016 - Present</div>
		<b><a target="_blank" href="http://games.amazon.com/">Amazon Game Studios</a></b>
		<i>Software Development Engineer II.</i><br/>
		<div class="tasks">
			<div class="task">Programming and technical design for an unannounced PC title.</div>
		</div>
	</div>

	<div id="mfgd_experience" class="experience">
	<? if (!$print) { ?>
		<div id="mfgd_pullout" class="pullout">
			<a target="_blank" href="https://www.youtube.com/user/BSVino"><div id="mfgd_pullout_video" class="pullout_video">
				<video id="mfgd_video" width=100 height=100 autoplay loop>
					<source src="mfgd.oggtheora.ogv" type="video/ogg" />
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
			<div class="task">Over 15,000 subscribers, over 700,000 views, Kickstarter funded at 330%.</div>
		</div>
	</div>

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
		<div class="dates">Apr 2011 - Dec 2014</div>
		<b><a target="_blank" href="http://doubleactiongame.com/">Double Action</a></b>
		<i>Designer, Programmer.</i><br/>
		<div class="tasks">
			<div class="task"><a target="_blank" href="http://store.steampowered.com/app/317360/">Shipped on Steam</a> in mid 2014, 92% positive reviews. <? if (!$print) {?>(<a target="_blank" href="http://youtu.be/btzVypzt5nI">Trailer</a>. Gameplay by <a target="_blank" href="http://youtu.be/KTsphcJw_Es">PewDiePie</a>, <a target="_blank" href="http://youtu.be/dtv34h4ZPio">EatMyDiction</a>.)</div>
			<div class="task"><?}?>ModDB <a target="_blank" href="http://www.moddb.com/events/2014-mod-of-the-year-awards/features/mod-of-the-year-2014-editors-choice">Editor's Choice</a> Mod of the Year 2014.</div>
			<div class="task">Designed and implemented game mechanics: multiplayer slowmo, mini-objectives, a stunt system.</div>
			<div class="task">Managed a team of 4-6 developers. Release engineering, marketing, community management.</div>
		</div>
	</div>

	<div class="experience">
		<div class="dates">Jan 2013 - Dec 2013</div>
		<b>Grossmont Math Study Center</b>
		<i>Lead Tutor.</i> San Diego, CA<br>
		<div class="tasks">
			<div class="task">Tutored students in algebra, trigonometry, calculus, physics.</div>
			<div class="task">Provided support to other tutors.</div>
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
			<div class="task">Built and shipped an artillery-based strategy game, three game modes, online/hotseat multiplayer.</div>
			<div class="task">Built the Tinker game engine in C++: physics, scene management, renderer, UI, networking, level editor.</div>
			<div class="task">Developed and coordinated the <a target="_blank" href="http://arstechnica.com/gaming/news/2011/06/5-for-5-bundle-packages-five-great-indie-games-for-just-5.ars">"Socks" indie game bundle</a>.</div>
		</div>
	</div>

	<div class="experience">
		<div class="dates">Nov 2004 - Dec 2009</div>
		<b>Providence Software Solutions</b>
		<i>Programmer.</i><br>
		<div class="tasks">
			<div class="task">Developed new version of SAP's IPRO procurement tool in C++.</div>
			<div class="task">Developed, packaged, released and supported <a target="_blank" href="http://www.xvt.com/">XVT</a>, a cross-platform GUI toolkit, using C/C++.</div>
			<div class="task">Maintained company website and network.</div>
		</div>
	</div>

	<div class="experience">
		<b>Previous Work</b><br>
		<div class="tasks">
			<div class="task"><i>Talk - <a target="_blank" href="https://www.youtube.com/watch?v=ceDh1fkKwgY&index=9&list=PLSZHCj84JSDMInvIg8mxNRmemoMwrySFj">"Visual Vectors: An Intuitive 3D Math Tutorial"</a></i>, Nodevember, 2015. An introduction to 3D math in Javascript using interactive slides written in WebGL.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://www.youtube.com/watch?v=RpZKsHliHXk">"Defense against the threat of a rogue artificial intelligence"</a></i>, BahFest, 2015. A short comedy-science talk.</div>
			<div class="task"><i>Talk - <a target="_blank" href="https://youtu.be/Nztt9kFvObU">"Double Action: Postmortem (How I Built A Successful Game For Zero Dollars)"</a></i>, East Coast Game Conference, 2015. On how meaningfulness and iteration towards guiding principles can differentiate a design in a crowded market.</div>
			<div class="task"><i>Calamity Fuse</i>, 2010. Unreleased third person shooter/RPG, Source engine. Design, programming.</div>
			<div class="task"><i><a target="_blank" href="http://www.moddb.com/mods/halfquake-amen">Half-Quake: Sunrise</a></i>, 2009. Thematic first person puzzler, Half-Life engine. Music, voice.</div>
			<div class="task"><i><a target="_blank" href="http://en.wikipedia.org/wiki/The_Specialists">The Specialists</a></i>, 2004-07. Multiplayer action shooter, Half-Life engine. Programming, design.</div>
		</div>
	</div>

	<? if (!$print) { ?>
		<div style="text-align: center"><em>Find more examples of my work <a target="_blank" href="http://vinoisnotouzo.com/">on my website</a>.</em></div>
	<? } ?>

<? /*
		<a href="#skills" class="skill" title="Designed and wrote the user interfaces for all of my games. Wrote from scratch 'glgui', the user interface library that powers Calamity Fuse, SMAK, Digitanks and Viewback.">user interface design</a>,
		<a href="#skills" class="skill" title="Designed the API for Viewback. Co-designed the API for stb_image_resize.">API design</a>,
		<a href="#skills" class="skill" title="Includes loading minidumps into the debugger and fixing crashes for Calamity Fuse, Digitanks, Double Action, SMAK.">Visual Studio 6-12</a>,
		<a href="#skills" class="skill" title="Double Action and Calamity Fuse were implemented in Source.">Source engine</a>,
		<a href="#skills" class="skill" title="Tinker's rendering engine is OpenGL, and so Digitanks, SMAK, Viewback, the Math for Game Developers example code, and all of my unreleased prototypes use OpenGL.">OpenGL, GLSL</a>,
		<a href="#skills" class="skill" title="Shaders written for Calamity Fuse and Double Action were in HLSL. Implemented bloom, tone mapping, angle-based SSAO, depth of field">HLSL</a>,
		<a href="#skills" class="skill" title="Native Linux ports for Double Action and Digitanks, the Double Action data server and leaderboards, all game websites and docs.gl, this resume was written in vim.">Linux</a>,
		<a href="#skills" class="skill" title="Primary image editor for all of my games.">Photoshop</a>,
		<a href="#skills" class="skill" title="At a basic level. Silo 3D was used for Digitanks and Calamity Fuse. XSI was used for Calamity Fused. 3DS Max was used for Double Action.">3D art packages</a>,
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
