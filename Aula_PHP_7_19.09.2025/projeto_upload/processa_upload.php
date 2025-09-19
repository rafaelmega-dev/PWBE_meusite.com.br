<?php
    $pastaDestino = "upload/";

    if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
        $nomeArquivo = basename($_FILES["arquivo"]["name"]);
        $caminhoDestino = $pastaDestino . $nomeArquivo;

        //verifica se o arquivo é uma imagem
        $tipoArquivo = strtolower(pathinfo($caminhoDestino, PATHINFO_EXTENSION));
        $tiposPermitidos = ["jpg", "jpeg", "png", "gif", "wep", "mp4"];

        if (in_array($tipoArquivo, $tiposPermitidos)) {
            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoDestino)) {
                echo "✅ Upload realizado com sucesso!<br> ";
                echo "<a href='index.php'>Voltar para galeria</a>";
            } else {
                echo "❌ Erro ao salvar o arquivo.";
            }
        } else {
            echo "❌ Tipo de arquivo não permitido. Apenas imagens (JPG, JPEG, PNG, WEP, GIF, MP4) são aceitas.";
        }
    } else {
        echo "❌ Nenhum arquivo foi enviado ";
    }
?>