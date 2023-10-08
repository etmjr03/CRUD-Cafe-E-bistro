<?php
$arrayCafes = [
    [
        "nome" => "café cremoso",
        "descricao" => "Um dos melhores cafés que você vai tomar!",
        "preco" => "5,00",
        "img" => "./img/cafe-cremoso.jpg"
    ],
    [
        'nome' => "Café com Leite",
        'descricao' => "A harmonia do café e do leite, uma experiência reconfortante",
        'preco' => "2.00",
        'img' => "./img/cafe-com-leite.jpg"
    ],
    [
        'nome' => "Cappuccino",
        'descricao' => "Café suave, leite cremoso e uma pitada de sabor adocicado",
        'preco' => "7.00",
        'img' => "./img/cappuccino.jpg"
    ],
    [
        'nome' => "Café Gelado",
        'descricao' => "Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.",
        'preco' => "3.00",
        'img' => "./img/cafe-gelado.jpg"
    ]
];
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Cardápio</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
            </div>
        </section>
        <h2>Cardápio Digital</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Opções para o Café</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach($arrayCafes as $cafe): ?>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="<?php echo $cafe['img']?>">
                    </div>
                    <p><?php echo $cafe['nome']?></p>
                    <p><?php echo $cafe['descricao']?></p>
                    <p>R$ <?php echo $cafe['preco']?></p>
                </div>
               <?php endforeach; ?> 
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções para o Almoço</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-almoco-produtos">
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/bife.jpg">
                    </div>
                    <p>Bife</p>
                    <p>Bife, arroz com feijão e uma deliciosa batata frita</p>
                    <p>R$ 27.90</p>
                </div>
            </div>

        </section>
    </main>
</body>
</html>