<?php
    
    include("resources/conexao.php");

    if(isset($_POST['enviar'])){
        
        if(!isset($_SESSION)){
            session_start();
        }

        foreach($_POST as $chave=>$valor){
            $_SESSION[$chave] = $mysqli->real_escape_string($valor);
        }
    }
?>
<div id="mensagem">
    <div class="titulo-content">
        <h1>Deixe uma mensagem</h1>             
    </div>
    <div id="barra-vermelha">
        <p> Sua mensagem será armazenadaem um banco de dados e será lida assim que possível, caso necessite de uma comunicação mais imediata, entre em contato em:</p><br>
        <a href="index.php?p=contato" class="btn">Contato</a> 
    </div>
        <?php
            // var_dump($_SESSION);
        ?>
    <form action="index.php?p=mensagem" method="POST" name="mensagem-form">

        <div class="bloco-form">
            <h6>Seu nome: *</h6>
            <input name="nome" type="text" value="<?php if(isset($_SESSION['nome'])){echo $_SESSION['nome'];}?>" placeholder="Digite seu nome" required>
        </div>

        <div class="bloco-form">
            <h6>Seu email: *</h6>
            <input name="email" type="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" placeholder="Digite seu email" required >
        </div>

        <div class="bloco-form">
            <h6>Mensagem: *</h6>
            <textarea name="mensagem" id="caixa-de-mensagem" cols="50" rows="10" placeholder="Deixe aqui sua mensagem" required><?php if(isset($_SESSION['mensagem'])){echo $_SESSION['mensagem'];}?></textarea>
        </div>

        <button name="enviar" type="submit"><a>Enviar</a></button>
    </form>
    
</div>
