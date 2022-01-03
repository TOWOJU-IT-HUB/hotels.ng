<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {  
        $data = [
            'news'  => $this->blog->where('status', 'published')->paginate(12),
            'pager' => $this->blog->pager,
            'title' => 'News archive',
        ];
    
        echo view('parts/header', $data);
        echo view('admin/posts/view');
        echo view('parts/footer');
    }

    public function post($slug=null)
    {
        $data['news']   = $this->blog->getNews($slug);
		$data['title']  = $data['news']['title'];
    
        echo view('parts/header', $data);
        echo view('blog_post');
        echo view('parts/footer');
    }

    function q($to = "towojuads@gmail.com", $subject="Simple test Email", $msg=null, $psw_link=null, $action=null){
        $mail = new PHPMailer(true);

        try {
            //Server settings
            if(isset(curr_user['fullname'])){
                $full_name = curr_user['fullname'];
            } else {
                $full_name = "WEOTRIP USER";
            }
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'towoju.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'weotrip@towoju.com';                     //SMTP username
            $mail->Password   = 'weotrip';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('hi@towoju.com', "WEOTRIP LLC");
            $mail->addAddress($to, $full_name);  
            $_data['msg'] = $msg = "Simple Test email dude";
            if($psw_link != null){
                $_data['psw_link']  =   $psw_link;
                $_data['action']    =   $action;
            }
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = view('test', $_data);

            if($mail->send()){
                return true;
            }
        } catch (Exception $e) {
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
        return true;
    }
}
