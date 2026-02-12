<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    // Simple validation
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Por favor, preencha todos os campos corretamente.";
        exit;
    }

    // In a real scenario, you would send an email here
    // $to = "contato@agilize.com.br";
    // $headers = "From: $name <$email>";
    // mail($to, $subject, $message, $headers);

    http_response_code(200);
    echo "Obrigado! Sua mensagem foi enviada com sucesso.";
} else {
    http_response_code(403);
    echo "Houve um problema com o seu envio. Por favor, tente novamente.";
}
?>
