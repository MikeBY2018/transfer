<?php 
if (!empty($_POST['from']) AND !empty($_POST['to']) AND !empty($_POST['phone'])) 
{
    $headers = 'From: Войтов Руслан\r\n' .
                'Reply-To: rvgroupby@gmail.com\r\n' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новая заявка с сайта rvgroup.by";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Откуда: ".$_POST['from'];
    $letter .="\nКуда: ".$_POST['to'];
    $letter .="\nТелефон: ".$_POST['phone'];
    $letter .="\nВыбор тарифа: ".$_POST['options'];
    
    if (mail("babskij2015@gmail.com", $theme, $letter, $headers)){
      header("Location: thanks.html");
    } else {
      header("Location: /");
    }  
              
} else {
  header("Location: /");
}