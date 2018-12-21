<?php 
if (!empty($_POST['name']) AND !empty($_POST['phone']) AND !empty($_POST['review'])) 
{
    $headers = 'From: Войтов Руслан\r\n' .
                'Reply-To: rvgroupby@gmail.com\r\n' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новое сообщение с сайта rvgroup.by";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Телефон: ".$_POST['phone'];
    $letter .="\nИмя заказчика: ".$_POST['name'];
    $letter .="\nОтзыв: ".$_POST['review'];
    
    if (mail("babskij2015@gmail.com", $theme, $letter, $headers)){
      header("Location: thanks.html");
    } else {
      header("Location: /testform");
    }  
              
} else {
  header("Location: /testform");
}