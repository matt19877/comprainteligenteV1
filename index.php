<!DOCTYPE html>
<html lang="es">
<head>
<script src="http://static.mlstatic.com/org-img/sdk/mercadolibre-1.0.4.js"></script>
<meta charset="UTF-8" />
<!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="chrome=1" /><![endif]-->
<title>My First Canvas Game</title>
<script type="application/javascript">
function loguear()
{
	MELI.init ({ client_id : 6977659590438028 });
	MELI.login(function() {
		MELI.get(
			"/users/me",{},
			function(data) { alert("Hello "+MELI.getToken()) }
		);
		
	});


}

</script>

</head>

<body style="margin: 0px;padding: 0;">
<a href="#" onclick="loguear();">ssss</a> 
</body>
</html>