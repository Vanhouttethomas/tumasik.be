<!doctype html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Tumasik</title>
	<meta name="description" content="">
	<meta name="author" content="Christophe Vanhoutte">
	<link rel="canonical" href="https://tumasik.be" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	<meta name="theme-color" content="#404040">
	<style>
	*{
		margin:0;
	}
	html{
		height:100%;
	}
	h1{
		text-align:center;
		cursor: default;
	}
	body{
		overflow-y:scroll;
		font-family: sans-serif;
		-webkit-font-smoothing: antialiased;
		text-align: center;
		height:100%;
		background-color: #e0e0e0;
		color:#fff;
	}
	img.cntr{
		position: absolute;
		max-width: 80%;
		top: 10%;
		left: 10%;
		border-radius: 3px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	img.cntr:empty{
		top: 40%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}
	@media screen and (orientation: portrait) {
	  img.cntr {
		  max-width: 90%;
	  }
	}
	@media screen and (orientation: landscape) {
	  img.cntr {
		  max-height: 90%;
	  }
	}
	div#wrapper{
		min-height:100%;
		height:auto !important;
		height:100%;
		margin:0 auto -50px;
	}
	div#push, footer{
		height:50px;
		font-size:smaller;
	}
	footer a, footer a:visited{
		color:#fff;
		margin: 1em .2em;
		text-decoration: none;
		border-bottom: 1px #194D33 solid;
		transition: all ease .2s;
		line-height: 1.5em;
	}
	footer a:hover{
		border-bottom: 1px #194D33 solid;
	}
	::selection {
		color: #fff;
		background: #404040;
	}
	#tumasikBrand a {
		text-transform: uppercase;
		text-decoration: none;
		border-bottom: none;
        color: #000;
	}
	#tumasikBrand {
		margin-left: .5em;
		display: inline-block;
	}
    
        footer, footer a, footer a:visited {
			color: #000;


	</style>
</head>
<body itemscope= itemtype="http://schema.org/WebPage">
<div id="wrapper">
	<div id="content">
		<h1><img title="Tumasik" alt="Tumasik" src="/Tumasik.svg" class="cntr" draggable="false" width="500" height="500" /></h1>
	</div>
	<div id="push"></div>
</div>
<footer itemscope itemtype="http://schema.org/WPFooter">
    <a href="/maildisclaimer.php" title="E-mail disclaimer">Maildisclaimer</a> | <a href="/t&c.php" title="Terms and conditions">Algemene voorwaarden</a> | <a href="/privacy.php" title="Privacy Policy and Cookies">Privacy & Cookies</a> <span id="tumasikBrand">&copy; <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <a itemprop="url" href="https://tumasik.be" title="Tumasik"><span itemprop="name">Tumasik</span></a></span>
</footer>
</body>
</html>