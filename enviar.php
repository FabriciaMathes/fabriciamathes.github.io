<?php
//teste 
$nome = $_POST["nome"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];

$lista_email = "psico.jaqueline@hotmail.com, ".$email." ";


$mensagem = "
	<html>
		<head>
			<title></title>
		</head>
		<body>
		    <p>Formulário de contato via site psicologa Jaqueline</p>
		    <p>Nome: ".$nome."</p>
		    <p>Telefone: ".$fone."</p>
		    <p>E-mail: ".$email."</p>
		    <p><b>Assunto:</b> ".$assunto."</p>
                    <p><a href='http://mathes.esy.es/fontes/'> teste site</a></p>
		</body>
	</html>
";

// Always set content-type when sending HTML email
$cabecalho = "MIME-Version: 1.0" . "\r\n";
$cabecalho .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$cabecalho .= 'From: <psico.jaqueline@hotmail.com>' . "\r\n";


if(mail($lista_email,$assunto,$mensagem,$cabecalho)){
	echo "<script type='text/javascript'> window.alert('$nome, sua mensagem foi enviada com sucesso.') </script>";
    echo '<META http-equiv="refresh" content="0;URL=http://mathes.esy.es/fontes/">';
}else {
	//NÃO DEU CERTO
};
?>
		