<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>!ERR666: █▓▒█▒░ CORRUPT</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Creepster&family=Press+Start+2P&display=swap');

        body {
            background-color: #000;
            color: #ff0000;
            font-family: 'Press Start 2P', monospace; /* Fonte de videogame para simular tela antiga e com erro */
            text-align: center;
            padding: 20px;
            animation: 
                glitchEffect 0.5s infinite alternate, /* Efeito de glitch na tela */
                staticNoise 0.2s infinite; /* Ruído de estática constante */
            user-select: none;
            overflow: hidden;
            position: relative;
        }

        @keyframes glitchEffect {
            0% { transform: skewX(0deg); }
            25% { transform: skewX(5deg); filter: blur(1px); }
            50% { transform: skewX(-5deg); filter: blur(0px); }
            75% { transform: skewX(2deg); filter: blur(2px); }
            100% { transform: skewX(0deg); }
        }

        @keyframes staticNoise {
            0% { background-image: url('data:image/svg+xml;charset=UTF-8,<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><filter id="noiseFilter"><feTurbulence type="fractalNoise" baseFrequency="0.9" numOctaves="3" stitchTiles="stitch"/></filter><rect width="100%" height="100%" filter="url(#noiseFilter)"/></svg>'); }
            100% { background-image: url('data:image/svg+xml;charset=UTF-8,<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><filter id="noiseFilter"><feTurbulence type="fractalNoise" baseFrequency="0.9" numOctaves="3" stitchTiles="stitch"/></filter><rect width="100%" height="100%" filter="url(#noiseFilter)"/></svg>'); }
        }

        h1, h3, button {
            text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000;
            animation: piscarTexto 0.4s infinite alternate; /* Piscar mais rápido */
        }

        @keyframes piscarTexto {
            from { opacity: 1; }
            to { opacity: 0.3; }
        }
        
        h1 {
            font-size: 2.5em; /* Fonte menor para manter a legibilidade */
            letter-spacing: 3px;
            font-weight: normal;
            color: #ff0000;
        }

        h3 {
            font-size: 1.2em; /* Fonte menor e espaçamento para legibilidade */
            font-weight: normal;
            margin-top: 30px;
            padding: 0 10px;
            color: #ff0000;
        }
        
        .alert-icon {
            animation: piscarIcone 0.3s infinite alternate; /* Piscar ainda mais rápido */
        }

        @keyframes piscarIcone {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        
        .error-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #00ff00; /* Cores de erro de código (verde ou azul) */
            font-size: 0.8em;
            white-space: pre-wrap;
            opacity: 0;
            animation: 
                aparecerErro 2s forwards,
                piscarErro 0.2s 2s infinite; /* Pisca após 2 segundos */
        }
        
        @keyframes aparecerErro {
            to { opacity: 1; }
        }
        
        @keyframes piscarErro {
            from { opacity: 1; }
            to { opacity: 0; }
        }

        button {
            background-color: #ff0000;
            color: #0d0d0d;
            border: 2px solid #0d0d0d;
            padding: 15px 30px;
            font-family: 'Press Start 2P', monospace;
            font-size: 1.2em;
            cursor: pointer;
            box-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
            animation: piscarBotao 0.6s infinite alternate;
            transition: transform 0.2s;
            margin-top: 40px;
        }

        @keyframes piscarBotao {
            from { background-color: #ff0000; }
            to { background-color: #e60000; }
        }
        
        button:hover {
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
        }
    </style>
</head>

<body>
    <h1>ACREDITE EM MIM VOCÊ NÃO QUER CONTINUAR, PARE IMEDIATAMENTE!!!!!!</h1>
    <h3><span class="alert-icon">⚠️⚠️⚠️⚠️⚠️</span>ESSE É O MEU ÚLTIMO AVISO, NÃO CLIQUE NO BOTÃO ABAIXO, O CONTEÚDO A SEGUIR PODE TE TRAUMATIZAR POR ANOS, ACREDITE EM MIM!!!!!!!!!!!<span class="alert-icon">⚠️⚠️⚠️⚠️⚠️⚠️⚠️</span></h3>
    <h3>NÃO CLIQUE</h3>
    
    <button onclick="abrirPagina()">NÃO CLIQUE EM NENHUMA HIPÓTESE</button>

    <script>
        function abrirPagina() {
            window.open("pagina3.php", "_blank");
        }
    </script>
</body>
</html>