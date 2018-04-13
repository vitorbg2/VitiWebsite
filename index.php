<html>
<head>

</head>
<body>
	<h1>Ola Mundo</h1>
	<?php
	  $resultado = shell_exec('dig TXT +short o-o.myaddr.l.google.com @ns1.google.com');
	  echo $resultado;
	?>
</body>
</html>
