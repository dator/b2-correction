<?php

require('translator2.php');

$translatedWord = null;
if(isset($_GET['word'])) {
	$translatedWord = translate($_GET['word']);	
}
?>
<html>
<head>
	<title>Translator</title>
</head>
<body>
	<h1>Translator</h1>
	<form action="translatorhtml.php" method="get">
		<input type="text" name="word" />
		<input type="submit" value="Translate">
	</form>

	<?php if($translatedWord):?>
	<p>The translation for <strong><?php echo $_GET['word']; ?></strong> is <?php echo $translatedWord;?></p>
	<?php endif; ?>
</body>
</html>