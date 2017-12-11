<?php require_once 'includes/header.php'; ?>
<?php
// Conexão com o banco de dados
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "teste";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['cadastrar'])) {
	
	// Recupera os dados dos campos
	//$nome = $_POST['nome'];
	//$email = $_POST['email'];
	$foto = $_FILES["foto"];
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 1500;
		// Altura máxima em pixels
		$altura = 1800;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			//$sql = "INSERT INTO usuarios (id, nome, email, foto) VALUES ('', '".$nome."', '".$email."', '".$nome_imagem."')";
			$sql = mysqli_query($connect,"INSERT INTO usuarios (id, nome, email, foto) VALUES ('', '".$nome."', '".$email."', '".$nome_imagem."')");
		
			// Se os dados forem inseridos com sucesso
			if ($sql){
				echo "Você foi cadastrado com sucesso.";
			}
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de usuário</title>
</head>

<body>
<h1>Image for website</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro" >
<!--Nome:<br />
<input type="text" name="nome" /><br /><br />
Email:<br />
<input type="text" name="email" /><br /><br />-->
Foto de exibição:<br />
<input type="file" name="foto" /><br /><br />
<input type="submit" name="cadastrar" value="Cadastrar" />
</form>

<hr />

<!--<h1>Usuários cadastrados</h1>
<?php
// Seleciona todos os usuários
$query = "SELECT nome, email, foto FROM usuarios ORDER BY nome";

if ($result = mysqli_query($connect, $query)) {

    /* fetch associative array */
    while ($obj = mysqli_fetch_object($result)) {
        echo "<img src='fotos/".$obj->foto."' alt='Foto de exibição' /><br />";
        // Exibimos o nome e email
		echo "<b>Nome:</b> " . $obj->nome . "<br />";
		echo "<b>Email:</b> " . $obj->email . "<br /><br />";
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($connect);


?>-->
</body>
</html>

<!-- fullCalendar 2.2.5 -->
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
			$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
      	header: {
      		left: '',
      		center: 'title'
      	},
      	buttonText: {
      		today: 'today',
      		month: 'month'          
      	}        
      });


  });
</script>

<?php require_once 'includes/footer.php'; ?>