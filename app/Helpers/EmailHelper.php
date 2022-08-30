<?php

use Illuminate\Support\Facades\Mail;
use Brian2694\Toastr\Facades\Toastr;

if (!function_exists('sendMail')) :

    function sendMail($user, $code, $purpose, $password = '',$item = null)
    {
        try{
            if($user->email):
                if($purpose == 'verify_email'):

                    $url            = url('/') . '/activation/' . $user->email . '/' . $code;
                    $view           = 'email.auth.activate-account-email';
                    $subject        = __('verify_email_subject');

                elseif($purpose == 'forgot_password'):

                    $url            = url('/') . '/reset/' . $user->email . '/' . $code;
                    $view           = 'email.auth.forgot-password-email';
                    $subject        = __('reset_password_subject');

                elseif($purpose == 'verify_email_success'):

                    $url            = '';
                    $view           = 'email.auth.registration-success-email';
                    $subject        = __('verify_email_success_subject');

                // elseif($purpose == 'invoice' || $purpose == 'seller_invoice'):
                //     $url            = '';
                //     $view           = 'email.order-complete-email';
                //     $subject        = __('Invoice') .' - '. $item->code;

                /*elseif($purpose == 'seller_invoice'):

                    $url            = '';
                    $view           = 'email.seller-invoice';
                    $subject        = __('Invoice') .' - '. $item->code;*/

                // elseif($purpose == 'order_status_update'):
                //     $url            = url('/'). '/get-invoice/' .$code->code;
                //     $view           = 'email.order-status-update';
                //     $subject        = __('Order Status Updated');

                else:

                    $url            = '';
                    $view           = 'email.auth.reset-success-email';
                    $subject        = 'reset_password_success_subject';

                endif;

                $data = ['url' => $url, 'user' => $user,'code' => $code];

                Mail::send($view, [
                    'data' => $data
                ], function ($message) use ($user, $subject) {
                    $message    ->to([$user->email]);
                    $message    ->subject($subject);
                });

                return true;
             endif;
        }
        catch (\Exception $e){
            Toastr::error('Email Is Not Send. Please Check Email Configuration');
            return false;
        }
    }
endif;

if (!function_exists('sendMailTo')) :

    function sendMailTo($email, $data)
    {
        try{
            if($email != null || $email != ""):
                Mail::send('email.auth.email-template', [
                    'data' => $data
                ], function ($message) use ($email, $data) {
                    $message    ->to($email);
                    $message    ->subject($data['subject']);
                });
                Toastr::success('Email send successfully. Check your email');
            return true;
            endif;
        }
        catch (\Exception $e){
            Toastr::error('Email Is Not Send. Please Check Email Configuration');
            return false;
        }
    }
endif;


?>