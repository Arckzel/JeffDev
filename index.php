<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style.css">
    <!-- Bootstrap Core CSS -->
    <link href="resources/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="resources/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="resources/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- <title>Jeff Dev</title> -->
</head>
<body>

    <!-- Header -->
    <header>
        <div class="row" id="head">
            <!-- Header Logo -->
            <div class="col-md-12" id="logo">
                <div id="logo-txt">
                    <a href="index.php?p=home"><h1>Jeff Dev</h1></a>
                </div>
                <div id="menu">
                    <div id="botao">
                        <br>
                    </div>  
                    <!-- Header Menu -->
                    <div class="col-md-12 escondido">
                        <div  id="menus">
                            <a class="btn" href="index.php?p=home">Home</a>
                            <a class="btn" href="index.php?p=projetos">Projetos</a>
                            <a class="btn" href="index.php?p=sobre">Sobre</a>
                            <a class="btn" href="index.php?p=contato">Contato</a>
                            <a class="btn" style="background-color: lightgreen;" href="index.php?p=mensagem">Deixe uma Mensagem</a>
                        </div>
                    </div> 
                </div>
            </div>            
        </div>
        
    </header>

    <!-- Conteúdo -->
    <div class="row" id="content">
        <div class="col-md-11">

            <!-- Estrutura PHP que é responsável por administrar a inclusão das páginas dentro da estrutura base -->            
            <?php
                if(isset($_GET['p'])){
                    $pagina = $_GET['p'].".php";
                    if(is_file("paginas/$pagina")){
                        $title = ucfirst($_GET['p']);                        
                        echo "<title>Jeff Dev - $title </title>";                        
                        include("paginas/$pagina");
                    }else{
                        echo "<title>Jeff Dev - Erro: 404 </title>";
                        include("paginas/404.php");
                    }
                }else{
                    echo "<title>Jeff Dev - Home </title>";
                    include("paginas/home.php");
                }
            ?>

        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">

        <!-- Footer Logo -->
        <div id="logo-footer">
            <a href="index.php?p=home"><h1 id="logo">Jeff Dev</h1></a>
        </div>
        <!-- Footer Content -->
        <div class="row" id="footer">

            <!-- Coluna 1 - Menu -->
            <div class="col-md-4">
                <h6>Menu</h6>
                <a href="#content">Voltar ao topo</a><br>
                <a href="index.php?p=home">Home</a><br>
                <a href="index.php?p=projetos">Projetos</a><br>
                <a href="index.php?p=sobre">Sobre</a><br>
                <a href="index.php?p=contato">Contato</a><br>
                <a href="index.php?p=mensagem">Mensagem</a>
            </div>

            <!-- Coluna 2 - Texto -->
            <div class="col-md-4">
                <p>Insira aqui algum texto para ficar escrito no rodapé do site isso é apenas um exemplo de como esse texto poderia ficar e etcetera</p><br>
                <div id="enviar-email">
                    <a href="index.php?p=mensagem">Deixe uma mensagem</a>
                </div>
            </div>

            <!-- Coluna 3 - Redes Sociais -->
            <div class="col-md-4">
                <h6>Redes Sociais</h6>
                <a href="facebook.com">Facebook</a><br>
                <a href="instagram.com">Instagram</a><br>
                <a href="twitter.com">Twitter</a><br>
                <a href="linkedin.com">Linkedin</a><br>
                <a href="github.com">GitHub</a><br>                
            </div>
        </div>

        <!-- Fim do cabeçalho -->
        <div id="footer-end">
            <p>Todos os direitos reservados &copy PBDEV 2020</p>
        </div>

    </footer>
    
    <!-- Bootstrap core JavaScript -->
    <script src="resources/vendor/jquery/jquery.min.js"></script>
    <script src="resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>