<?
if (!isset($lang))
	$lang = "en";

if ($_GET['lang'] == 'es')
	$lang = 'es';

function lang_es()
{
	global $lang;
	return $lang == 'es';
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<HTML>
<HEAD>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<TITLE>Jorge L. Rodr&iacute;guez</TITLE>
<META NAME="author" CONTENT="Jorge 'Vino' Rodr&iacute;guez">
<META NAME="description" CONTENT="Vino Is Not Ouzo - Jorge Rodr&iacute;guez's Home Page">
<META NAME="keywords" CONTENT="Jorge 'Vino' Rodr&iacute;guez">
</HEAD>
<BODY>
<style type="text/css"><!--
body
{
width: 800px;
}

font,th,td,p,h1,h2,h3,li { font-family: 'Roboto', serif; font-weight: 300; }
h3 { font-weight: 400; }

--></style>
<H1>Jorge L. Rodr&iacute;guez</H1>

<div style="float: right">
<h3 style="font-size: 70%"><? if (lang_es()) echo "&iquest;Qui&eacute;n soy yo?"; else echo "Who am I?" ?></h3>

<ul style="font-size: 70%">
<li><? if (lang_es()) echo "Dise&ntilde;o videojuegos"; else echo "A game developer" ?></li>
<li><? if (lang_es()) echo "Estudiante de Matem&aacute;ticas en Universidad de California, Los Angeles"; else echo "Pursuing a degree in Mathematics at UCLA" ?></li>
<li><? if (lang_es()) echo "Due&ntilde;o de perro"; else echo "A dog owner" ?></li>
<li><? if (lang_es()) echo "Estudiante de Espa&ntilde;ol"; else echo "Learning Spanish" ?></li>
<li><? if (lang_es()) echo "M&uacute;sico"; else echo "A musician" ?></li>
<li><? if (lang_es()) echo "Tengo un cintur&oacute;n negro de segundo grado en <a href='http://en.wikipedia.org/wiki/Hapkido'>Hapkido</a>"; else echo "A second degree black belt in <a href='http://en.wikipedia.org/wiki/Hapkido'>Hapkido</a>" ?></li>
<li><? if (lang_es()) echo "Mecan&oacute;grafo de <a href='http://en.wikipedia.org/wiki/Dvorak_Simplified_Keyboard'>Dvorak</a>"; else echo "A <a href='http://en.wikipedia.org/wiki/Dvorak_Simplified_Keyboard'>Dvorak</a> typist" ?></li>
<li><? if (lang_es()) echo "Estoy obsesionado con pautas da trabajo"; else echo "Obsessed with making lists" ?></li>
</ul>
</div>

<p style="font-size: small"><? if (lang_es()) { ?><a href="/"><em>English profile</em></a><? } else { ?><a href="/es"><em>Perfil en espa&ntilde;ol</em></a><? } ?></p>

<p>
  Email: <A HREF="mailto:bs.vino@gmail.com">bs.vino@gmail.com</A><br />
  Steam: <a href="http://steamcommunity.com/id/Vino">Vino</a><BR />
  Google Plus: <a href="http://www.google.com/profiles/bs.vino">+Jorge Rodr&iacute;guez</a></br />
  Twitter: <? if (lang_es()) { ?><a href="http://twitter.com/VinoBSES">@VinoBSES</a><? } else { ?><a href="http://twitter.com/VinoBS">@VinoBS</a><? } ?><br />
  Facebook: <a href="http://www.facebook.com/bsvino">Jorge Rodr&iacute;guez</a><br />
  GitHub: <a href="https://github.com/BSVino">BSVino</a>
</p>

<br clear="both" />

<hr>

<h3><? if (lang_es()) echo "Proyectos Actuales"; else echo "Current Projects" ?></h3>
<UL>
<li><a href="http://www.doubleactiongame.com/">Double Action</a> - <? if (lang_es()) echo "Un videojuego sobre acci&oacute;n con estilo. Est&aacute; basado en <a href='http://en.wikipedia.org/wiki/The_Specialists'>The Specialists</a>."; else echo "A stylish multiplayer action game. Loosely based on <a href='http://en.wikipedia.org/wiki/The_Specialists'>The Specialists</a>." ?></li>
<li><a href="https://www.youtube.com/user/BSVino">Math for Game Developers</a> - <? if (lang_es()) echo "Si estas familiar con la programaci&oacute;n de videojuegos pero no estas tan bien con las matem&aacute;ticas, puede ayudarte este serie sobre las matem&aacute;ticas obligatoria para crear videojuegos."; else echo "If you have some familiarity with game programming but you're not as good with the math, this series on the math required for video game development may help you." ?></li>
<li><a href="http://github.com/BSVino/viewback">Viewback</a> - <? if (lang_es()) echo "Viewback es una herramienta por visualizaci&oacute;n de datos para desinadores de videojuegos. Muestra datos del videojuego a su dispositivo inal&aacute;mbrico."; else echo "Viewback is a data visualization tool for game designers. It displays data from a videogame on a wireless device and allows designers to tune game parameters in real time." ?></li>
<li><a href="http://docs.gl/">docs.gl</a> - <? if (lang_es()) echo "Websitio de documenaci&oacute;n de OpenGL y OpenGL ES."; else echo "OpenGL and OpenGL ES documentation website." ?></li>
</UL>

<h3><? if (lang_es()) echo "Proyectos Anteriores"; else echo "Previous Projects" ?></h3>
<ul>
<li><a href="https://github.com/nothings/stb/blob/master/stb_image_resize.h">stb_image_resize</a> - <? if (lang_es()) echo "Una biblioteca para cambiar el tama&ntilde;o de im&aacute;genes, con &eacute;nfasis en velocidad y usabilidad. Escrito en colaboraci&oacute;n con <a href='https://twitter.com/nothings/status/512243977492254720'>Sean Barret</a> despues de <a href='https://twitter.com/ID_AA_Carmack/status/490194676163440640'>una solicitud por John Carmack</a>."; else echo "An image resize library with emphasis on speed and usability. Written in collaboration with <a href='https://twitter.com/nothings/status/512243977492254720'>Sean Barret</a> in response to <a href='https://twitter.com/ID_AA_Carmack/status/490194676163440640'>a request by John Carmack</a>." ?></li>
<li><a href="/gamblersdice">Gambler's Fallacy Dice Roller</a> - <? if (lang_es()) echo "Un generador de n&uacute;meros aleatorios que favorece n&uacute;meros que no han aparecido recientamente."; else echo "A weighted random number generator for games that respects the Gambler's Fallacy." ?></li>
<li><a href="http://www.youtube.com/watch?v=p36sfqajIeI">Grotto</a> - <? if (lang_es()) echo "Un demo que muestra un funcionamiento similar a Portal por un videojuego de puzzle."; else echo "A demo showing a Portal-like mechanic for solving puzzles with mirrors." ?></li>
<li><a href="http://www.youtube.com/watch?v=A3etgRY5D5k">Codename: Infinite</a> - <? if (lang_es()) echo "Un experimento con universos infinitivos en videojuegos."; else echo "An experiment with gameplay in an infinite universe." ?></li>
<li><a href="http://lunarworkshop.com/">Lunar Workshop</a> - <? if (lang_es()) echo "Mi emprezo, con estos productos:"; else echo "My company, which made these products:" ?></li>
<ul>
<li><A HREF="http://www.getsmak.net/">SMAK</A> - <? if (lang_es()) echo "Una herramienta para la creaci&oacute;n de arte para videojuegos."; else echo "Multi-purpose model creation utility." ?></li>
<li><A HREF="http://www.digitanks.com/">Digitanks</A> - <? if (lang_es()) echo "Un videojuego de estrategia donde defiendes tu computadora contra ataques de errores y viruses."; else echo "An artillery-based strategy game where you defend your computer against an invasion of bugs and viruses." ?></li>
</ul>
<li><a href="https://www.youtube.com/watch?v=gTxd_gZI4QY">Blender</a> - <? if (lang_es()) echo "Ayud&eacute; a mejorar la interfaz de Blender durante Google Summer of Code (Verano de C&oacute;digo). Algunos partes de mi contribuciones estaban usado en Blender."; else echo "As part of a Google Summer of Code, I helped improve the user interface of Blender. Some of these features were incorporated into Blender." ?></li>
<li><a href="/strunkifier">The Strunkifier</a> - <? if (lang_es()) echo "Una herramienta para encontrar palabras abusadas en Ingl&eacute;s."; else echo "A web utility for finding commonly misused words in the English language." ?></li>
<li><a href="http://en.wikipedia.org/wiki/The_Specialists">The Specialists</a> - <? if (lang_es()) echo "Una conversi&oacute;n total de Half-Life, sobre peliculas de acci&oacute;n."; else echo "A total conversion of Half-Life styled after action movies." ?></li>
<li><a href="http://www.youtube.com/watch?v=bcNAT_V1fmA">Buy Games, Not Socks</a> - <? if (lang_es()) echo "Yo era la mente nafasta que organiz&oacute; esta rebaja de videojuegos."; else echo "I was the nefarious mind behind this bundle." ?> (<a href="http://arstechnica.com/gaming/news/2011/06/5-for-5-bundle-packages-five-great-indie-games-for-just-5.ars"><? if (lang_es()) echo "Art&iacute;culo"; else echo "Coverage" ?></a>)</li>
<li><a href="https://vimeo.com/10146087">Calamity Fuse</a> - <? if (lang_es()) echo "El fracaso de este proyecto me ayud&oacute; aprender sobre como desarrollar videojuegos."; else echo "The failure of this project was instrumental in my development as a game developer." ?></li>
</ul>

<h3><? if (lang_es()) echo "M&uacute;sica"; else echo "Music" ?></h3>
<p><? if (lang_es()) echo "Con los a&ntilde;os he recordado mucha m&uacute;sica."; else echo "I've been a part of various musical groups over the years." ?></p>
<ul>
<li>Half-Quake Sunrise Soundtrack - <a href="http://www.youtube.com/watch?v=i5-Burnf_F0">Clarity</a> - <? if (lang_es()) echo "Estaba so&ntilde;ando durante mi parte favorita del videojuego, la parte que puedes ver en el video."; else echo "Which incidentally was played during my favorite part of the game, as seen in the video" ?></li>
<li>ORNGE</li>
<ul>
<li><A HREF="http://www.youtube.com/watch?v=oB0L1Zkqj6Q">Hello Nancy</A></li>
<li><A HREF="http://www.youtube.com/watch?v=ZrgbDdYRgW0">Fly On</A></li>
<li><A HREF="http://www.youtube.com/watch?v=1rYf2uq7mJM">The Great Caper</A></li>
</ul>
<li>Self-Adhesiv - <a href="http://www.youtube.com/watch?v=OilmjE5Lfr0">Hello Girl, Goodbye Heart</a></li>
<li><a href="http://www.youtube.com/watch?v=qrc5Owfn1qo">Army of Nub</a> - <? if (lang_es()) echo "Si no entiendes esta canci&oacute;n, no eras parte de la comunidad de TS en 2005."; else echo "If you don't get it then you weren't a part of the TS community circa 2005." ?></li>
</ul>

<HR>
<p>Copyright &copy; <? echo date("Y"); ?> <A HREF="mailto:bs.vino@gmail.com">Jorge Rodr&iacute;guez</A></p>
</BODY>
</HTML>
