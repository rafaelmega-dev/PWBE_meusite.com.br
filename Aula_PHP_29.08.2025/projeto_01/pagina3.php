<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>█▓▒░ CRYPT0-SHA1-∞▒▓█</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden; /* Garante que a imagem não crie barras de rolagem ao descer */
            font-family: monospace;
            position: relative;
            background-image: url("img/ricardo-fotor.png");
            background-repeat: repeat-y; /* Repete a imagem verticalmente */
            background-size: cover; /* Ajusta a largura para cobrir, altura pode variar */
            
            /* Animação para a imagem descer em cascata */
            animation: 
                descerFundo 10s linear infinite, /* A imagem desce continuamente */
                piscarFundo 0.8s infinite alternate; /* O brilho da imagem pisca */
        }

        /* Animação para a imagem descer */
        @keyframes descerFundo {
            from { background-position-y: 0; }
            to { background-position-y: 100%; } /* Desce o equivalente a 100% da altura da imagem */
        }

        /* Animação para o brilho da imagem piscar */
        @keyframes piscarFundo {
            from { filter: brightness(1); }
            to { filter: brightness(0.5); } /* Deixa a imagem mais escura no ponto baixo do piscar */
        }

        /* Filtro escuro sobre a imagem (fixo, para não atrapalhar o piscar da imagem) */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Filtro um pouco menos intenso */
            z-index: 1;
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: red;
            font-size: 6em;
            text-shadow: 0 0 25px black, 0 0 50px red;
            animation: piscarTexto 0.6s infinite alternate; /* Texto piscando */
            z-index: 2;
        }

        /* Animação para o texto piscar */
        @keyframes piscarTexto {
            from { opacity: 1; }
            to { opacity: 0.3; } /* O texto fica bem transparente no ponto baixo do piscar */
        }

        /* Removido o canvas e o JS do Matrix */
    </style>
</head>
<body>
    <h1>ERRO - SISTEMA INFECTADO</h1>
    <audio id="buzina" src="audio/civil-defense-siren-128262.mp3" preload="auto" autoplay loop></audio>

    <script>
        // Autoplay do áudio
        window.onload = function() {
            const buzina = document.getElementById('buzina');
            buzina.play().catch(error => {
                console.log("Autoplay bloqueado. Clique na tela para liberar o áudio.");
                document.body.addEventListener('click', () => {
                    buzina.play();
                }, { once: true });
            });
        };
    </script>
</body>
</html>