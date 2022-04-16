<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['Nume'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subiect'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "stere_florin_daniel@yahoo.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>