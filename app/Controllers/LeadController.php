<?php

namespace App\Controllers;

use App\Models\Lead;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->model = new Lead();
    }
    function store()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $user_session_id = session_id();
        $mobile = $this->isMobileDevice() ? '1' : '0';
        $data = array_merge($_POST, [
            'user_agent' => $user_agent,
            'user_ip' => $user_ip,
            'mobile' => $mobile,
            'user_session_id' => $user_session_id,
        ]);
        $isCreated = $this->model->insert($data);
        if ($isCreated) {
            session_flash_set('message', [
                'type' => 'Success',
                'message' => 'Thank you! We have received your details and we will be in touch soon!'
            ]);
            $to = 'jouni.flemming.macecraft@gmail.com';
            $subject = 'Get a quote request';
            $message = 'Hi, We have received a get a quote request. Please see details below
                Lead Name=' . $_POST['lead_name'] . '
                Lead Phone=' . $_POST['lead_phone'] . '
                Lead Email=' . $_POST['lead_email'] . '
                Lead Message=' . $_POST['lead_message'] . '
                ';
            $headers = 'From: hello@housetohomecnx.com'       . "\r\n" .
                'Reply-To: ' . $_POST['lead_email'] . '' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            
            header("Location: /");
        } else {
            session_flash_set('message', [
                'type' => 'Danger',
                'message' => 'Please make sure to enter all the details in the form!'
            ]);
            header("Refresh:0");
        }
    }
    private function isMobileDevice()
    {
        return preg_match(
            "/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
    |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
            $_SERVER["HTTP_USER_AGENT"]
        );
    }
}
