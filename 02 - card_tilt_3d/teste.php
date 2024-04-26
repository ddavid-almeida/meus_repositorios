<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" integrity="sha512-wC/cunGGDjXSl9OHUH0RuqSyW4YNLlsPwhcLxwWW1CR4OeC2E1xpcdZz2DeQkEmums41laI+eGMw95IJ15SS3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        
        <link href="style.css" rel="stylesheet">
        <title>Efeito Tilt</title>
    </head>

    <body>

        <div class="container_cardtilt">

            <div class="card_tilt card1">
                <h2>LOGO AESIR 1</h2>
                <img src="images/setup2.png" alt="" class="produto">
                <button>Comprar</button>
            </div>

            <div class="card_tilt card2">
                <h2>LOGO AESIR 2</h2>
                <img src="images/setup3.png" alt="" class="produto"> 
                <button>Comprar</button>
            </div>

        </div>

        <script>
            VanillaTilt.init(document.querySelectorAll(".card_tilt"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 0.5
	        });
        </script>
        
    </body>
</html>