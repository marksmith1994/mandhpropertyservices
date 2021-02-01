<?php
namespace Application\Controller\SinglePage;
use Concrete\Core\Page\Controller\PageController;


class Contact extends PageController
{

    public function submit()
    {

        function post_captcha($user_response) {
            $fields_string = '';
            $fields = array(
                'secret' => '6Lev1aIZAAAAAHEzBYDB8PLJQ4kDH5rXG9ZYcNuG',
                'response' => $user_response
            );
            foreach($fields as $key=>$value)
            $fields_string .= $key . '=' . $value . '&';
            $fields_string = rtrim($fields_string, '&');

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

            $result = curl_exec($ch);
            curl_close($ch);

            return json_decode($result, true);
        }

        $res = post_captcha($_POST['g-recaptcha-response']);

        if (!$res['success']) {
            // $this->error->add(t('Please select the captcha.'));
            
        } else {
            $captchaError = $nameErr = $contactErr = $subjectErr = $messageErr = " ";

            if(empty($_POST["name"])){
                $nameErr = "Please enter a name";
            }else{
                $name = $_POST['name'];
            }

            $mailFrom = $_POST['email'];
            $number = $_POST['number'];

            if(empty($_POST["subject"])){
                $subjectErr = "Please enter a subject";
            }else{
                $subject = $_POST['subject'];
            }

            
            if(empty($_POST["message"])){
                $messageErr = "Please enter a message";
            }else{
                $message = $_POST['message'];
            }
            
            $mailTo = 'mhpropertyservices101@gmail.com';
            //$mailTo = 'mark.alex.smith@hotmail.co.uk';
            $headers = 'From ' . $mailFrom;
            $txt = $name . ' - ' . $number . ' - ' . $message;

            ini_set("sendmail_from", "noreply@mandhpropertyservices.com");
            $sent = mail($mailTo, $subject, $txt, $headers, "-fnoreply@mandhpropertyservices.com");

            if ($sent){
                header("Location: https://www.mandhpropertyservices.com/thankyou");
            } else {
                
            }
        }
    }
}
