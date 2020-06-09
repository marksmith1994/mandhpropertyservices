<?php
namespace Application\Controller\SinglePage;
use Concrete\Core\Page\Controller\PageController;


class Contact extends PageController
{
    public function submit()
    {
        if(isset($_POST['submit'])){
            die();
            $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
            $subject = $_POST['subject'];
            $number = $_POST['number'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];
            
            $mailTo = 'mark.alex.smith@hotmail.co.uk';
            $headers = 'From' . $mailFrom;
            //$txt = $name . \n . \n . $message;

            mail($mailTo, $subject, $txt, $headers);
            header("Location: /contact?mailSend");
        }
    }
}