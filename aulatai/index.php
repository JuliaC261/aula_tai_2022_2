<html>

<head>

</head>

<body>

    <p>Olá Mundo HTML!</p>
    <!--  comentar um trecho ou linha em HTML-->
    <?php
    //comentar uma linha em PHP

    /* comentar um trecho em PHP

    Crie duas variaveis em php, realize sua soma 
        e mostre o resultado em uma TAG HTML H3
 */
    echo "Olá mundo PHP! <br>";

    $num1 = 5;
    $num2 = 10;

    if ($num1 > 6) {
        $resultado = "IFSC Xanxere";

        echo "O resultado é: <h3>$resultado</h3>";
    }
    ?>

    <p>O professor Jackson é um cara legal! <?php echo $resultado; ?></p>
    <br>

    <a href="https://www.google.com/search?tbm=isch&q=" target="_blank">Clique aqui!</a>

    <iframe width="600" height="300" src="https://www.youtube.com/embed/1IaE4rtNY7w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</body>

</html>