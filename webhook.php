<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Utilizando webhook para automatização de deploy</title>
</head>
<body>
	<pre>
	<?php
		$exec = shell_exec("sudo git pull origin master 2>&1");
		echo $exec;
	?>
	</pre>
</body>
</html>
