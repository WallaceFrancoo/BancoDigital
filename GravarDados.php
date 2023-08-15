<!doctype html> 

<html lang="pt-br">
	<head>
		<title>Usuário cadastrado</title>
		<meta charset="UTF-8">
	</head>
	
    <body>
    <?PHP
        $NomeCliente = $_POST["NomeCliente"];
        $RG = $_POST["RG"];
        $EmailCliente = $_POST["EmailCliente"];
        $DataNascimento = $_POST["DataNascimento"];
        $Contato = $_POST["Contato"];
        $Profissao = $_POST["Profissao"];
        $Senha = $_POST["Senha"];
        
        echo "<h1>Usuário cadastrado </h1>";
        echo "Cliente: $NomeCliente <br>";
        echo "RG: $RG <br>";
        echo "Email: $EmailCliente <br>";
        echo "Data de nascimento: $DataNascimento <br>";
        echo "Celular: $Contato <br>";
        echo "Profissão: $Profissao <br>";
        
        
        if($NomeCliente == ""){
            die("Seu nome deve ser informado");
        }
        
        if($EmailCliente == ""){
            die("Seu email deve ser informado");
        }
        
        if($Contato == ""){
            die("Seu numero de celular deve ser informado");
        }

        if($Senha == ""){
            die("Por favor, digite uma senha");
        }
       

        $con = mysqli_connect("localhost", "root", "");

        mysqli_set_charset($con, "utf8");
    
        mysqli_select_db($con, "BANCO") or
            die(
                "Erro na abertura do banco de dados <br>". mysqli_error($con)
            );

        $sql = "INSERT INTO CADASTRO(NomeCliente, RG, EmailCliente, DataNascimento, Contato, Profissao, Senha)
        VALUES('$NomeCliente', '$RG', '$EmailCliente', '$DataNascimento', '$Contato', '$Profissao', '$Senha')";
        
        mysqli_query($con, $sql) or
            die("Erro na inserção de dados:". mysqli_error($con));
        
        echo "<h2>Dados cadastrados com sucesso </h2>";
             
    ?>
    Clique <a href="Cadastro.html">aqui</a> para voltar 
    </body>
</html>
