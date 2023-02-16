<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html><head>
	<title>Jorge L. Rodriguez</title>
	<style type="text/css">
	<!--
	body {
	   	font-size: 11pt;
		width: 7.5in;
		margin: auto;
	}
/*font,th,td,p,h1,h2,h3,li,body,div { font-family: Verdana, Arial, Helvetica, sans-serif };*/
	b { font-size: 13pt; }
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
		width: 300px;
		margin-bottom: 0;
		font-size: small;
	}

	#activitiesright {
		width: 300px;
		text-align: right;
		float: right;
		font-size: small;
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

	a:link {
		color: #3333CC;
	}

	a:visited {
		color: #6666CC;
	}

	--></style>
</head>
<body bgcolor="white" link="blue" vlink="blue" alink="red">
	<div id="download">
		<a href="/resume/resume.pdf">pdf</a> | <a href="/resume/resume.doc">word</a> | <a href="javascript:if(window.print)window.print()">print</a><br>
		<a href="http://twitter.com/vinobs">tw</a> | <a href="http://www.facebook.com/bsvino">fb</a> | <a href="http://www.google.com/profiles/bs.vino">g+</a>
	</div>
	<div id="myname"><span class="myname-firstletter">J</span>orge <span class="myname-firstletter">L. R</span>odriguez</div>
	<div id="allinfo">
		<div id="informationright">
			<a href="mailto:jorge@lunarworkshop.com">jorge@lunarworkshop.com</a><br>
			<? $page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
			<a href="<? echo $page; ?>"><? echo $page; ?></a>
		</div>
		<div id="information">
			San Diego, CA<br>
			(919) 757-3066<br>
		</div>
		<br clear=both />
		<br clear=both />
		<div style="text-align: center"><em>Video game designer and programmer</em></div>
	</div>
	<?php /*<div class="sectionheader">SKILLS</div>
	<div class="allskills">
		<div class="skills">
			<b>Languages</b>
			<ul>
				<li>C/C++</li>
				<li>Java</li>
				<li>PHP</li>
				<li>Ruby on Rails</li>
			</ul>
		</div>
		<div class="skills">
			<b>Tools</b>
			<ul>
				<li>Visual Studio</li>
				<li>OpenGL/DirectX</li>
				<li>Git/Subversion</li>
				<li>Windows/Linux/OSX</li>
			</ul>
		</div>
		<div class="skills">
			<b>Techniques</b>
			<ul>
				<li>Shader langauges</li>
				<li>3D/physics math</li>
				<li>Performance optimization</li>
				<li>Multiplayer networking</li>
			</ul>
		</div>
	</div>*/?>
	<div class="sectionheader">EXPERIENCE</div>

	<div class="experience">
		<div class="dates">Jan 2013 - Present</div>
		<b>Grossmont Math Study Center</b><br>
		<i>Tutor.</i> San Diego, CA<br>
		<div class="tasks">
			Tutoring students in algebra, trigonometry, calculus.<br/>
		</div>
	</div>

	<div class="experience">
		<div class="dates">Apr 2011 - Present</div>
		<b><a href="http://doubleactiongame.com/">Double Action</a></b><br>
		<i>Designer, Programmer.</i> San Diego, CA<br>
		<div class="tasks">
			Designing and implementing game mechanics.<br/>
			Building the art pipeline, integrating assets from artists.<br/>
		</div>
	</div>

	<div class="experience">
		<div class="dates">Mar 2010 - Present</div>
		<b><a href="http://lunarworkshop.com/">Lunar Workshop</a></b><br>
		<i>Programmer, Designer, Artist, Owner.</i> Cary, NC<br>
		<div class="tasks">
			Creating <a href="http://digitanks.com">Digitanks</a>, an artillery-based strategy game with three game modes, online/hotseat multiplayer.<br/>
			Building the Tinker game engine in C++: physics, scene management, rendering, UI, networking.<br>
			Designing and selling the AO/Normal map generator <a href="http://getsmak.net/">SMAK!</a> with realtime 3D preview.<br>
			Developing and coordinating the <a href="http://arstechnica.com/gaming/news/2011/06/5-for-5-bundle-packages-five-great-indie-games-for-just-5.ars">"Socks" indie game bundle</a>.
		</div>
	</div>

	<div class="experience">
		<div class="dates">Jul 2006 - Apr 2010</div>
		<b>Freelance Contractor</b><br>
		<i>Programmer and Consultant.</i> Cary, NC<br>
		<div class="tasks">
			Working on many projects, including stock market analysis software, embedded medical systems, and web designs, using C/C++, PHP, C#, Java, and Python.
		</div>
	</div>

	<div class="experience">
		<div class="dates">Nov 2004 - Jul 2007</div>
		<b>Providence Software Solutions</b><br>
		<i>Programmer.</i> Cary, NC<br>
		<div class="tasks">
			Developing new version of SAP's IPRO procurement tool in C++.<br>
			Programming, packaging, releasing and supporting <a href="http://www.xvt.com/">XVT</a>, a cross-platform GUI toolkit, using C/C++.<br>
			Maintaining company website and network.
		</div>
	</div>

	<div class="experience">
		<b>Previous Work</b><br>
		<div class="tasks">
			<i><a href="http://code.google.com/soc//">Google Summer of Code</a></i>, 2012, <a href="http://www.youtube.com/watch?v=gTxd_gZI4QY">Improving the user interface and usability</a> of <a href="http://blender.org">Blender</a>.<br>
			<i><a href="http://en.wikipedia.org/wiki/The_Specialists">The Specialists</a></i>, 2004-07, Multiplayer action shooter, Half-Life engine<br>
			<i><a href="https://vimeo.com/10146087">Calamity Fuse</a></i>, 2006-10, Multiplayer FPS/RPG, <a href="http://en.wikipedia.org/wiki/Source_engine">Source engine</a><br>
		</div>
	</div>

	<div class="sectionheader">EDUCATION</div>

	<div class="experience">
		<div class="dates">Jan 2011 - Present</div>
		<b><a href="http://grossmont.edu/">Grossmont College</a>, La Mesa, CA</b><br>
		<i>Bachelor of Mathematics - In Progress</i><br>
		<div class="tasks">
			President's list<br/>
			4.0 GPA<br>
		</div>
	</div>

	<div class="sectionheader">ACTIVITIES</div>

	<div class="experience">
		<div id="activitiesleft">
			<a href="http://www.youtube.com/playlist?list=PLW3Zl3wyJwWOpdhYedlD-yCB7WQoHf-My"><i>Math for Game Developers</i></a>, weekly YouTube series<br>
			<i><a href="http://en.wikipedia.org/wiki/Hapkido">Hapkido</a> 2nd Degree Black Belt &amp; Asst. Instructor</i>, 3 yrs<br>
			<i><a href="http://gdconf.com">GDC</a> Conference Associate</i>, 1 yr<br>
		</div>
		<div id="activitiesright">
			<i><a href="http://www.meetup.com/gamedev-176/">Triangle Game Developers</a> Meetup</i> Organizer, 1 yr<br>
			Music Composition and Performance, 14 yrs<br>
			Dvorak typist, 80 wpm
		</div>
	</div>

	<br clear="both" />
	<br />
</body></html>
