<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperando os dados do formulário
    $titulo = $_POST['titulo'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $tipo = $_POST['tipo'];
    $local = $_POST['Local'];
    $descricao = $_POST['descricao'];
    $cor = $_POST['cor'];
    $tema = $_POST['tema'];
    $estilo = isset($_POST['estilo']) ? 'Sim' : 'Não';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $termos = isset($_POST['termos']) ? 'Sim' : 'Não';
    $atualizacoes_email = isset($_POST['atualizacoes_email']) ? 'Sim' : 'Não';
    $atualizacoes_sms = isset($_POST['atualizacoes_sms']) ? 'Sim' : 'Não';

    // Verifica se um arquivo foi enviado
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $foto_nome = $_FILES['foto']['name'];
    } else {
        $foto_nome = 'Não enviada';
    }

    // Exibindo os dados do convite
    echo "<h1>Convite Gerado</h1>";
    echo "<h2>$titulo</h2>";
    echo "<p><strong>Início:</strong> $inicio</p>";
    echo "<p><strong>Fim:</strong> $fim</p>";
    echo "<p><strong>Tipo:</strong> $tipo</p>";
    echo "<p><strong>Local:</strong> $local</p>";
    echo "<p><strong>Descrição:</strong> $descricao</p>";
    echo "<p><strong>Cor Principal:</strong> <span style='background-color:$cor;'>$cor</span></p>";
    echo "<p><strong>Tema:</strong> $tema</p>";
    echo "<p><strong>Estilo Escuro:</strong> $estilo</p>";
    echo "<p><strong>Foto da Capa:</strong> $foto_nome</p>";
    echo "<h3>Dados para Contato</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Li e concordo com os Termos e Condições:</strong> $termos</p>";
    echo "<p><strong>Aceito atualizações e promoções por e-mail:</strong> $atualizacoes_email</p>";
    echo "<p><strong>Aceito atualizações e promoções por SMS:</strong> $atualizacoes_sms</p>";
} else {
    echo "<p>O formulário não foi enviado corretamente.</p>";
}
?>
