<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : '';


$bodyEmail = "Nome: $nome <br> E-mail: $email <br> Telefone: $telefone <br> Empresa: $empresa <br> Cargo: $cargo";
$remetente = 'lenilsonlm.pantoja@gmail.com';
$remetenteNome = 'Lenilson Lima Pantoja';
$remetenteSenha = 'swfbkcqqennntykq';

try {
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = $remetente;
  $mail->Password = $remetenteSenha;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;
  $mail->setFrom($remetente, $remetenteNome);
  $mail->addAddress($email, $nome);
  $mail->isHTML(true);
  $mail->Subject = 'Entre em contato';
  $mail->Body = $bodyEmail;
  $mail->AltBody = $bodyEmail;
  $mail->send();

  echo 'E-mail enviado com sucesso!<br>';
  header('Location: index.php?mail=1');
} catch (Exception $e) {
  echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
  header('Location: index.php?mail=2');
}
