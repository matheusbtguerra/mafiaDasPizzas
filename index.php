<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Máfia das Pizzas.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Máfia das Pizzas - Pizzaria</title>
</head>
<body>
    <header>
        <div class="header-container">
            <ul>
                <li>
                    <img src="Máfia das Pizzas.png" alt="logo Máfia das Pizzas" width="100%">
                </li>
                <li>
                    <a href="#cardapio">Cardápio</a>
                </li>
                <li>
                    <a href="#endereco">Endereço</a>
                </li>
                <li>
                    <button>
                        <a href="#pedidos">Fazer Pedido</a>
                    </button>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <section class="section-carrousel">
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img src="1.png" class="carousel-image" alt="Imagem 1">
                    <img src="2.png" class="carousel-image" alt="Imagem 2">
                    <img src="3.png" class="carousel-image" alt="Imagem 3">
                </div>
                <button id="prevBtn" class="carousel-btn">&lt;</button>
                <button id="nextBtn" class="carousel-btn">&gt;</button>
            </div>
        </section>

        <div class="cardapio-container" id="cardapio">
            <div class="text-cardapio">
            <h2>Cardápio <span>Máfia</span></h2>
                <p>
                    <ul>
                        <li> <mark>Pizza Margherita</mark></li>
                        <li><mark> Pizza Pepperoni</mark></li>
                        <li><mark>Pizza Quatro Queijos</mark></li>
                        <li><mark>Pizza Frango com Catupiry</mark></li>
                        <li><mark>Pizza Calabresa</mark></li>
                        <li><mark>Pizza Vegetariana</mark></li>
                        <li><mark>Pizza Portuguesa</mark></li>
                        <li><mark>Pizza Doce de Banana com Chocolate</mark></li>
                        <li><mark>Pizza de Nutella com Morangos</mark></li>
                        <li><mark>Pizza de Brigadeiro</mark></li>
                    </ul>
                </p>

                <h2>Tamanhos</h2>
                <ul>
                    <li> <mark>Pequeno: 15cm - 20R$</mark></li>
                    <li><mark> Médio: 25cm - 20R$</mark></li>
                    <li><mark> Grande: 35cm - 20R$</mark></li>
                </ul>

                <h2>Bebidas</h2>
                <ul>
                    <li> <mark> Refri Lata - 5R$</mark></li>
                    <li><mark> Suco Garrafa - 6R$</mark></li>
                    <li><mark> Refri 2L - 10R$</mark></li>
                    <li><mark> Água c/ gás - 4R$</mark></li>
                    <li><mark> Água s/ gás - 3R$</mark></li>

                </ul>
            </div>
            </div>
        </div>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pizzaria";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = $_POST["nome"];
                $celular = $_POST["celular"];
                $endereco = $_POST["endereco"];
                $pizza = $_POST["pizza"];
                $sabor = $_POST["sabor"];
                $bebida = $_POST["bebida"];

                $sql_clientes = "INSERT INTO clientes (nome, celular, endereço) VALUES ('$nome', '$celular', '$endereco')";
        
                $sql_pedidos = "INSERT INTO pedidos (pizza, sabor, bebida) VALUES ('$pizza', '$sabor', '$bebida')";

                if($conn->query($sql_clientes) === true && $conn->query($sql_pedidos) === true){
                echo "<script> alert('Pedido Realizado com sucesso!');</script>";
                } else {
                    echo "<script> alert('Erro no pedido! Revise suas informações...');</script>";;
                }
            }

            $conn->close();

        ?>


        <form action="" method="post">

            <div class="cliente">

                <h1>Registre-se aqui!</h1>
                <mark>Nome: </mark> <br> <input type="text" name="nome" id="ph" placeholder="Digite seu nome" required> <br>
                <mark>Celular: </mark> <br> <input type="celular" name="celular" id="ph" placeholder="(51) 99999999" required> <br>
                <mark>Endereço: </mark>  <br> <input type="endereco" name="endereco" id="ph" placeholder="Informe seu endereço" required> <br>

            </div>

            <div class="pedido" id="pedidos">

                <h1>Faça seu pedido!</h1>
                <mark>Tamanho da pizza: </mark> <br> <input type="text" name="pizza" id="ph" placeholder="Escolha o tamanho da pizza!" required> <br>
                <mark>Sabor: </mark> <br> <input type="text" name="sabor" id="ph" placeholder="Selecione o sabor!" required> <br>
                <mark>Bebida: </mark> <br> <input type="text" name="bebida" id="ph" placeholder="Escolha uma bebida!" required> <br><br>
        
                <input type="submit" value="Fazer Pedido" class="btn">
            </div>
        </form>
    </main>

    <footer>
        <div class="main-footer">
             <p>
                <mark> Rua dos bugs - 99, POA, RS <br>
                 (51) 99999-9999 </mark>
            </p>

            <p id="endereco">
                Copyright 2024 &copy;
           </p>
            <p>
                Matheus Guerra & Eduardo Lemos
            </p>
        </div>
    </footer>
    <script src="main.js"></script>
</body>
</html>




























<main>



</main>