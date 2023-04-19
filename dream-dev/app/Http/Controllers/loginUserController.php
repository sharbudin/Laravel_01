<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\registerUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class loginUserController extends Controller
{
    public function VerifyData(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if(substr_count(strtolower($username),"sipl") > 0) {
            $temp = trim(str_ireplace("SIPL","",$request->input("username")));
            $username = DB::table('empdata')
                                        ->where('id', $temp)
                                        ->get()
                                        ->first();
        } else if(substr_count(strtolower($username),"@") > 0) {
            $username = DB::table('empdata')
                                        ->where('email', $request->input("username"))
                                        ->get()
                                        ->first();
        } else {
            $colName = "username";
            $username = DB::table('empdata')
                                        ->where('username', $request->input("username"))
                                        ->get()
                                        ->first();
        }

        if(isset($username->password)) {

            if (Hash::check($password, $username->password)) {

                DB::table('empdata')
                        ->where('id', $username->id)
                        ->update(['failed_login_attempt' => 0]);

                if($username->active == 1) {

                    session(['ID' => $username->id]);    // setting session for login

                    if(strtolower($username->userLevel) == 'client') {
                        return redirect('/');
                    } elseif(strtolower($username->userLevel) == 'admin') {
                        return redirect('Dashbord');
                    } elseif(strtolower($username->userLevel) == 'superadmin') {
                        return redirect('superadmin');
                    } else {
                        return redirect('login');
                    }
                } else {
                    return redirect('forgetpass')->with('success',"Account needs Verification");
                }

            } else {
                $failed_attempt = $username->failed_login_attempt + 1;
                $remaining_attempt = 3 - $failed_attempt;
                DB::table('empdata')
                                ->where('id', $username->id)
                                ->update(['failed_login_attempt' => $failed_attempt]);
                if($remaining_attempt < 1) {
                    DB::table('empdata')
                                ->where('id', $username->id)
                                ->update(['active' => 0]);
                    return redirect('login')->withInput()->with('failed',"ACCOUNT LOCKED ** Reset your Password **");
                } else {
                    return redirect('login')->withInput()->with('failed',"Incorrecrt Password  ** $remaining_attempt Attempt left **");
                }
            }
        } else {
            return redirect('login')->withInput()->with('failed','Account not yet registered');
        }

    }

    public function ResetPassCode(Request $request) {
        $data = DB::table('empdata')
                                ->where('email', $request->input("username"))
                                ->get()
                                ->first();

        if(isset($data->email)) {  // if mail verified

            $checkMail = $data->email;
            $receiverName = $data->firstname;

            //  sending Reset Mail

            require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);

            try {
                // Email server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = env('MAIL_HOST');
                $mail->SMTPAuth = true;
                $mail->Username = env('MAIL_USERNAME');
                $mail->Password = env('MAIL_PASSWORD');
                $mail->SMTPSecure = env('MAIL_ENCRYPTION');
                $mail->Port = env('MAIL_PORT');

                $mail->setFrom(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
                $mail->addAddress($checkMail);

                $mail->isHTML(true);

                $mail->Subject = " Verification Code ";

                $verifyMailCode = rand(100000,999999);

                $ResetCode =  DB::update('update empdata set resetToken = ? where email = ?', [$verifyMailCode,$request->input("username")]);

                $emailBody = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
                body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
                table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
                img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
                p { display:block;margin:13px 0; }</style><!--[if mso]>
                <noscript>
                <xml>
                <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
                </xml>
                </noscript>
                <![endif]--><!--[if lte mso 11]>
                <style type="text/css">
                    .mj-outlook-group-fix { width:100% !important; }
                </style>
                <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
                .mj-column-per-100 { width:100% !important; max-width: 100%; }
                }</style><style media="screen and (min-width:480px)">.moz-text-html .mj-column-per-100 { width:100% !important; max-width: 100%; }</style><style type="text/css"></style></head><body style="word-spacing:normal;background-color:#fafbfc;"><div style="background-color:#fafbfc;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" bgcolor="#000000" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#000000;background-color:#000000;margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#000000;background-color:#000000;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:20px;padding-top:20px;text-align:center;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:middle;width:600px;" ><![endif]--><div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:middle;" width="100%"><tbody><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><div style="font-family:open Sans Helvetica, Arial, sans-serif;font-size:16px;line-height:1;text-align:center;color:#ffffff;"><span>Hello,</span></div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><div style="font-family:open Sans Helvetica, Arial, sans-serif;font-size:16px;line-height:1;text-align:center;color:#ffffff;">Please use the below verification code to complete your Resistration:</div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:open Sans Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;line-height:1;text-align:center;color:#ffffff;">{{VERIFICATION_CODE}}</div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-right:16px;padding-left:25px;word-break:break-word;"><div style="font-family:open Sans Helvetica, Arial, sans-serif;font-size:16px;line-height:1;text-align:center;color:#ffffff;">If you didn\'t request this, you can ignore this email or let us know.</div></td></tr><tr><td align="center" style="font-size:0px;padding:10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;"><div style="font-family:open Sans Helvetica, Arial, sans-serif;font-size:16px;line-height:1;text-align:center;color:#ffffff;">Thanks!<br>Dream Dev Team</div></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';

                $emailBody = str_ireplace("<span>Hello,","<span>Hello, $receiverName",str_ireplace("{{VERIFICATION_CODE}}",$verifyMailCode,$emailBody));
                $mail->Body = $emailBody;
                if( !$mail->send() ) {
                    return back()->with("failed", " ***Email not sent.*** ")->withErrors($mail->ErrorInfo);
                }
                else {
                    // return redirect('/dashboard')->with('status', 'Profile updated!');
                    return redirect('verifyOtp')->with('checkMail',$checkMail)->with('success'," ***Verification Code Sent successfully*** ");
                }

            } catch (Exception $e) {
                return back()->with('error',' ***Message could not be sent.*** ');
            }

        } else {
            return back()->with('warning','Provided Email ID doesn\'t exists in our Database');
        }

    }

    public function OTPverify(Request $request) {

        $data = DB::table('empdata')
                                ->where('email', $request->input("ResetCodeMail"))
                                ->where('resetToken', $request->input("otp"))
                                ->get()
                                ->first();

        $resetToken = uniqid();

        $ResetCodeMail = $request->input('ResetCodeMail')."AK".$resetToken;

        if($data->active == 0) {
            $ResetCode =  DB::update('update empdata set active = ? where email = ?', [1,$request->input('ResetCodeMail')]);
            $link = $request->input("ResetCodeMail").'AK'.$resetToken;
            return redirect('login')->with('success',"Account Activated Successfully");
        }
        if(isset($data->email) && $data->active == 1) {
            $ResetCode =  DB::update('update empdata set resetToken = ? where email = ?', [$ResetCodeMail,$request->input('ResetCodeMail')]);
            $link = $request->input("ResetCodeMail").'AK'.$resetToken;
            return redirect('resetPassword')->with('link',$link);
        } else {
            return redirect('resetPassword')->with('warning','Incorrect Verification Code');
        }
    }


    public function ChangePassword(Request $request) {

        $hashedPass = Hash::make($request->input("password"), [
            'memory' => 1024,
            'time' => 1,
            'threads' => 1,
        ]);

        $link = $request->input('link');

        $Reset = DB::update('update empdata set password = ? where resetToken = ?', [$hashedPass,$link]);

        $temp = DB::table('empdata')
                                ->where('resetToken', $link)
                                ->get()
                                ->first();

        $tokendefault = DB::table('empdata')
                                ->where('id', $temp->id)
                                ->update(['resetToken' => NULL]);

        if(isset($Reset)) {
            return redirect('login')->with('success','Password changed successfully');
        } else {
            return redirect('resetPassword')->with('warning','Bad Request');
        }
    }

}
