<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SMTPController extends Controller
{

    public function send_mail(Request $r)
    {
      $email = $r->input('email');
      $html = $r->input('content');
    try{

      $a = new \PHPMailer(true);
      $a->isSMTP();
      $a->CharSet = "utf-8";
      $a->SMTPAuth = true;
      $a->SMTPSecure = "tls";
      $a->Host = "smtp.gmail.com";
      $a->Port = 587;
      $a->Username = "sopiehalimah@gmail.com";
      $a->Password = "chanyeol";
      $a->SetFrom("sopiehalimah@gmail.com","Sopie Halimah");
      $a->Subject = "Tugas Mailer Sopie Halimah";
      $a->MsgHTML($html);
      $a->addAddress($email);
      $a->send();
      }
      catch(Exception $e) {
      dd($e);
      }
    }


}
