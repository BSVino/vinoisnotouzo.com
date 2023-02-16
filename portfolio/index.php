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
		margin-top: 10px;
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
			<a href="http://<? echo $_SERVER['HTTP_HOST'] . $url_parts[0] ?>Jorge L. Rodriguez Portfolio.pdf">pdf</a> | <a target="_blank" href="http://<? echo $_SERVER['HTTP_HOST'] . $url_parts[0] ?>?print=1">print</a><br><br/>
		<? } ?>
	</div>
	<div id="myname"><span class="myname-firstletter">J</span>orge <span class="myname-firstletter">L. R</span>odr&iacute;guez</div>
	<div id="allinfo">
		<div style="text-align: center; margin: 10px;"><em>Video game designer</em></div>
		<div id="informationright">
			Miami, FL, USA<br>
						<a href="http://vinoisnotouzo.com/portfolio">vinoisnotouzo.com/portfolio</a>
		</div>
		<div id="information">
			<a href="mailto:jorge.rodriguez@hey.com">jorge.rodriguez@hey.com</a><br>
			(919) 757-3066<br>
		</div>
		<br clear=both />
	</div>

	<div style="text-align: center"><em>Note: The <a target="_blank" href="http://vinoisnotouzo.com/portfolio">online version</a> of this page includes videos.</em></div>

	<div class="sectionheader">Crucible</div>

<? if (!$print) { ?>
	<iframe width="720" height="405" src="https://www.youtube.com/embed/zlWgiHRvx30?rel=0" frameborder="0" allowfullscreen></iframe>
<? } ?>

	<div>
		Crucible was a competitive multiplayer PC action game released in 2020 by Amazon Game Studios. It had three game modes; two team modes and one battle royale. In the predominant mode, two teams of four battled over control of valuable Hive Hearts.
	</div>

	<div>
		My work on Crucible was in building <strong>player progression systems and contributing to the game modes and tutorial</strong>. I built most of the achievements and battle pass, rebuilt the tutorial in response to player onboarding problems, and helped make major changes to the game modes when necessary. Later on I worked on an unannounced Amazon project, contributing to <strong>NPC and combat design</strong>.
	</div>


	<div class="sectionheader">Double Action</div>

<? if (!$print) { ?>
	<iframe width="720" height="405" src="https://www.youtube.com/embed/btzVypzt5nI?rel=0" frameborder="0" allowfullscreen></iframe>
<? } ?>

	<div>
		Double Action is a multiplayer action game about doing things with style. It awards points for stylish actions that are creative, flashy, or funny, rather than for simply scoring kills. Players execute combinations of stunts such as diving, flipping, and sliding, during a free-for-all deathmatch.
	</div>

	<div>
		The game was played by a number of prominent YouTubers and streamers (<a href="http://youtu.be/KTsphcJw_Es">PewDiePie</a>, <a href="https://www.youtube.com/watch?v=hMwottj-Grg">Squeezie</a>) and received <a href="http://www.doubleactiongame.com/reviews">moderate press coverage</a>. (My favorite review: <a href="http://lookrobot.co.uk/2014/08/07/double-action-boogaloo/">"DAB is the game I wanted when I was eighteen."</a>) In the height of its popularity it drew <strong>thousands of concurrent players</strong>, and an active community remained years later. It was named the <a href="https://www.pcgamer.com/the-50-best-free-pc-games/2/">19th best free PC game by PC Gamer</a>.
	</div>

	<div>
		Development of Double Action began on the demand of players who wanted a successor to The Specialists (see below). A team of half a dozen <strong>focused development around a single pillar</strong>: the player should feel like a stylish action movie hero. In support of this I designed the Style Bar, which fills as the player performs stylish actions, and activates the Style Ability when filled completely. Minigames like Capture the Briefcase and Rat Race break up the deathmatch by providing periodic goals. I also made some contributions to level design and art.
	</div>

	<div class="sectionheader">Digitanks</div>

<? if (!$print) { ?>
	<iframe width="720" height="405" src="https://www.youtube.com/embed/5rRgtT-SHzg?rel=0" frameborder="0" allowfullscreen></iframe>
<? } ?>

	<div>
		Digitanks is a turn-based artillery strategy game about defeating the bugs and viruses inside your computer. It has two modes; a 3-D update of the classic artillery genre, and a turn-based strategy mode in which the players compete to attack the enemy base while building and defending their own.
	</div>

	<div>
		I began work on Digitanks wanting to <strong>modernize the artillery game genre</strong>. Unsatisfied with previous attempts to bring the genre into 3-D, I replaced the choose-your-angle mechanic with point-and-click controls. Tanks had directional shields, making orientation important in a battle. The strategy mode was a natural extension of those mechanics, and I introduced the <strong>specialized Resistor, Artillery, and Scout units</strong>. An Upgrade Grid serves as a tech tree to unlock new abilities over the play session.
	<div>

	</div>
		The game received some coverage from <a href="https://www.rockpapershotgun.com/2010/11/03/the-art-in-artillery-digitanks-demo/">Rock Paper Shotgun</a> and <a href="http://www.escapistmagazine.com/news/view/109760-Yes-We-Really-Can-Be-Bribed-With-Cookies">Escapist Magazine</a>. During this time I organized the <a href="https://arstechnica.com/gaming/2011/06/5-for-5-bundle-packages-five-great-indie-games-for-just-5/"><strong>Five for Five Bundle</strong></a>, containing Digitanks and four other games.
	</div>

	<div class="sectionheader">Calamity Fuse</div>

<? if (!$print) { ?>
	<img src="http://media.moddb.com/images/mods/1/10/9922/moddb-preview.jpg" width="720" height="432" />
<? } ?>

	<div>
		Calamity Fuse was a first person multiplayer fantasy RPG, and the first game I designed from scratch. Its original inspiration was to build a multiplayer version of Final Fantasy 7. Players could <strong>construct their own character classes</strong> by choosing weapons and armor and then attaching magic runes to those armaments to cast spells. A basic rock/paper/scissors system meant that magic beat swords, swords beat guns, and guns beat magic.
	</div>

	<div>
		The Calamity Fuse team ceased development when we couldn't find a viable strategy to bring it to market. Years later I assembled this <a href="https://youtu.be/HHHmOTO993Y">postmortem of Calamity Fuse</a>, explaining its major features and critiqueing my earlier designs.
	</div>

	<div class="sectionheader">The Specialists</div>

<? if (!$print) { ?>
	<iframe width="720" height="405" src="https://www.youtube.com/embed/DSqvYioc658?rel=0" frameborder="0" allowfullscreen></iframe>
<? } ?>


	<div>
		I took over development of The Specialists after its original designer lost interest, releasing versions 2.1 and 3.0. I added <strong>stock attacks for some weapons, a block feature for kung-fu, reworks of the bullet dodge, audio for bullet flybys, and new stunt types</strong>. Additionally I implemented new weapon types, and contributed to the game's balance.
	</div>

	<hr clear="both" />

	<br clear="both" />


</body></html>

