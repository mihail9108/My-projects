<?php

include('kcaptcha/kcaptcha.php');
session_start();
require_once("config.php");


if ($_POST['act']== "y")
{
    if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring'])
    {

        if (isset($_POST['posName']) && $_POST['posName'] == "")
        {
            $statusError = "$errors_name";
        }
        elseif (isset($_POST['posEmail']) && $_POST['posEmail'] == "")
        {
            $statusError = "$errors_mailfrom";
        }
        elseif(isset($_POST['posEmail']) && !preg_match("/^([a-z,._,0-9])+@([a-z,._,0-9])+(.([a-z])+)+$/", $_POST['posEmail']))
        {
            $statusError = "$errors_incorrect";

            unset($_POST['posEmail']);
        }
        elseif (isset($_POST['posRegard']) && $_POST['posRegard'] == "")
        {
            $statusError = "$errors_subject";
        }
        elseif (isset($_POST['posText']) && $_POST['posText'] == "")
        {
            $statusError = "$errors_message";
        }

        elseif (!empty($_POST))
        {
//заголовок для нас
            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: $content  charset=$charset\r\n";
            $headers .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
            $headers .= "From: \"Заказ с сайта ".$_POST['posName']."\" <".$_POST['posEmail'].">\r\n";
            $headers .= "X-Mailer: My Send E-mail\r\n";

//заголовок для заказчика
            $headerszakaz  = "MIME-Version: 1.0\r\n";
            $headerszakaz .= "Content-Type: $content  charset=$charset\r\n";
            $headerszakaz .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
            $headerszakaz .= "From: \"Подтверждение заказа\" <".$mailto.">\r\n";
            $headerszakaz .= "X-Mailer: My Send E-mail\r\n";

            mail("$mailto","$subject","Посетитель сайта отправил заказ: $message","$headers");//отправляем сообщение нам
            mail($_POST['posEmail'],"$subject","Ваш заказ получен: $message","$headerszakaz");//отправляем сообщение заказчику

            unset($name, $posText, $mailto, $subject, $posRegard, $message);

            $statusSuccess = "$send";
        }

    }else{
        $statusError = "$captcha_error";
        unset($_SESSION['captcha_keystring']);
    }
}
?>