<?php



//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader

require './lib/vendor/autoload.php';



$email= $_POST['email'];

$nome = $_POST['nome'];

$setores = $_POST['setores'];

$mensagem = $_POST['mensagem'];

$hoje = date('d/m/Y');



$template = file_get_contents('email_template/template_form.html');

$template = str_replace('%email%', $email, $template);

$template = str_replace('%nome%', $nome, $template);

$template = str_replace('%setores%', $setores, $template);

$template = str_replace('%mensagem%', $mensagem, $template);

$template = str_replace('%hoje%', $hoje, $template);


//Começa o processo de envio de email



try {

//Autenticar com o Site

    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->Host = 'mail.cartorio2oficiovr.com.br';

    $mail->SMTPAuth = true;

    $mail->Port = 587;

    $mail->Username = 'mailto@cartorio2oficiovr.com.br';

    $mail->Password = 'Mudar@1234';

    //Remetende e Destinatário

    $mail->setFrom('mailto@cartorio2oficiovr.com.br');

    if($setores == 'firma') {
        $mail->addAddress('firma.2of@gmail.com');
        //$mail->addAddress('fernando@dec9.com.br');
    }
    if($setores == 'rgi') {
        $mail->addAddress('rgi.2of@gmail.com');
    }
    if($setores == 'certidoes') {
        $mail->addAddress('cert.2of@gmail.com');
    }
    if($setores == 'escritura') {
        $mail->addAddress('esc.2of@gmail.com');
    }
    else {
        $mail->addAddress('noreply@cartorio2oficiovr.com.br');
    }
    

    //Conteúdo

    $mail->CharSet = 'UTF-8';

    $mail->isHTML(true);                                

    $mail->Subject = 'Contato Cartório';

    //Redirecionar página HTML contendo o corpo do EMAIL

    $mail->MsgHTML($template);


    //Enviar o email
    if($mail->send()) {
        header("location: obrigado.html");
    }

} catch (Exception $e) {
    echo "Messagem não pode ser enviada:";
    header("location: index.html");
    die();
}
