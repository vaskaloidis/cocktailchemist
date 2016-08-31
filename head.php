<html>

<head>
	<script type="text/javascript">
	  WebFontConfig = {
	    google: { families: [ 'Anton::latin', 'Pacifico::latin', 'Righteous::latin', 'Averia+Serif+Libre:400,700,700italic:latin', 'Allerta::latin', 'Arvo:400,700:latin', 'Anton::latin', 'Pacifico::latin', 'Righteous::latin' ] }
	  };
	  (function() {
	    var wf = document.createElement('script');
	    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
	  })(); </script>
	
	<link href="./css/bootstrap.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	
	

	<script src="./js/bootstrap.js" type="text/javascript"></script>
	<script src="./js/jquery.js" type="text/javascript"></script>

	<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/prototype.js" type="text/javascript"></script>
	<script src="./js/scriptaculous.js" type="text/javascript"></script>
	
	
	<script>
	
	Effect.OpenUp = function(element) {
	     element = $(element);
	     new Effect.BlindDown(element, arguments&#91;1&#93; || {});
	 }

	 Effect.CloseDown = function(element) {
	     element = $(element);
	     new Effect.BlindUp(element, arguments&#91;1&#93; || {});
	 }

	 Effect.Combo = function(element) {
	     element = $(element);
	     if(element.style.display == 'none') { 
	          new Effect.OpenUp(element, arguments&#91;1&#93; || {}); 
	     }else { 
	          new Effect.CloseDown(element, arguments&#91;1&#93; || {}); 
	     }
	 }
	
	function(element1, element2){
		Effect.Combo(element1);
		Effect.Combo(element2);
	}
	</script>
	
</head>

<div id="everything">

		<div class="top">
			<div class="nav">
				<a href="index.php"><img src="./img/Buttons/home.png" />&nbsp;&nbsp;</a>
				<a href="about.php"><img src="./img/Buttons/About.png" />&nbsp;&nbsp;</a>
				<a href="drinks.php"><img src="./img/Buttons/Drinks.png" />&nbsp;&nbsp;</a>
				<a href="contact.php"><img src="./img/Buttons/Contact.png" />&nbsp;&nbsp;</a>
				<a href="consulting.php"><img src="./img/Buttons/Consulting.png" />&nbsp;&nbsp;</a>
			</div>
		</div>
		<div class="middle">