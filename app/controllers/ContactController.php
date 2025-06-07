<?php
namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller {
    public function index() {
        $data = [
            'title' => '聯絡我'
        ];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
            $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
            
            // 基本驗證
            if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                $data['error'] = '請填寫所有欄位';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['error'] = '請輸入有效的 Email 地址';
            } else {
                // 寄送郵件
                $to = "contact@tingplanet.com";
                $headers = "From: $email\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                
                $emailContent = "
                    <h2>來自網站的聯絡訊息</h2>
                    <p><strong>姓名：</strong> $name</p>
                    <p><strong>Email：</strong> $email</p>
                    <p><strong>主旨：</strong> $subject</p>
                    <p><strong>訊息：</strong><br>$message</p>
                ";
                
                if (mail($to, $subject, $emailContent, $headers)) {
                    $data['success'] = '訊息已成功送出，我會盡快回覆您！';
                } else {
                    $data['error'] = '訊息發送失敗，請稍後再試';
                }
            }
        }
        
        $this->view('contact/index', $data);
    }
}