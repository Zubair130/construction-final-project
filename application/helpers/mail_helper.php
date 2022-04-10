<?php
if (!function_exists('forgetpasswordMail')) {
    function forgetpasswordMail($userid)
    {
        $ci = &get_instance();
        //User detail
        $userresponse = $ci->db
            ->query("SELECT * FROM `tbuser` WHERE userid = '$userid'")
            ->row_array();
        $content =
        '<tr><td class="wrapper"> <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <p style="text-align:center">
                        <!-- site logo -->
                        <img style="text-align:center" src="' . base_url() . 'assets/images/logo.png" width="120px">
                    </p>
                    <h2>Forget Password!</h2>
                    <h4 style="margin-bottom:5px">Procced to reset your password<br>This link is only active for 1 days
                    </h4>
                    <a href="' . base_url() . 'reset/password/' . urlencode(base64_encode($userid)) . '/' . urlencode(base64_encode(date('Y-m-d'))) . '"><button type="button"
                            style="color: #fff;background-color: #f8941d;border-color: #f8941d;padding: 0.375rem 1.5rem;font-size: 16px; margin-top:5px;margin-bottom:10px;cursor:hand;">Reset Password</button></a><br>
                    <h4>
                        Regards, <br>
                        Head Office <br>
                        Survey Construction
                    </h4>
                </td>
            </tr>
        </table>
    </td>
</tr>';
        return $content;
    }
}

if (!function_exists('mailTemplate')) {
    function mailTemplate($email, $content, $subjecthead)
    {
        $ci = &get_instance();
        $ci->load->library('email');
        $sitename = 'Survey Construction';
        $from = 'mail.thehealthwelfare.com'; //senders email address
        $subject = $subjecthead . ' - ' . $sitename; //email subject
        $message =
        '<!doctype html><html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width" />
    <style>
    /* -------------------------------------
                GLOBAL RESETS
            ------------------------------------- */

    img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%;
    }

    body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
    }

    table td {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
    }

    /* -------------------------------------
                BODY & CONTAINER
            ------------------------------------- */

    .body {
        background-color: #f6f6f6;
        width: 100%;
    }

    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
        display: block;
        Margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px;
    }

    /* This should also be a block element, so that it will fill 100% of the .container */
    .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
    }

    /* -------------------------------------
                HEADER, FOOTER, MAIN
            ------------------------------------- */

    .main {
        background: #fff;
        border-radius: 3px;
        width: 100%;
        box-shadow: 0px 0px 10px #f8941d;
    }

    .wrapper {
        box-sizing: border-box;
        padding: 20px;
    }

    .footer {
        clear: both;
        padding-top: 10px;
        text-align: center;
        width: 100%;
    }

    .footer td,
    .footer p,
    .footer span,
    .footer a {
        color: #999999;
        font-size: 12px;
        text-align: center;
    }

    /* -------------------------------------
                TYPOGRAPHY
            ------------------------------------- */

    h1,
    h2,
    h3,
    h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px;
    }

    h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize;
    }

    p,
    ul,
    ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px;
    }

    p li,
    ul li,
    ol li {
        list-style-position: inside;
        margin-left: 5px;
    }

    a {
        color: #3498db;
        text-decoration: underline;
    }

    /* -------------------------------------
                BUTTONS
            ------------------------------------- */

    .btn {
        box-sizing: border-box;
        width: 100%;
    }

    .btn>tbody>tr>td {
        padding-bottom: 15px;
    }

    .btn table {
        width: auto;
    }

    .btn table td {
        background-color: #ffffff;
        border-radius: 5px;
        text-align: center;
    }

    .btn a {
        background-color: #ffffff;
        border: solid 1px #3498db;
        border-radius: 5px;
        box-sizing: border-box;
        color: #3498db;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        padding: 12px 25px;
        text-decoration: none;
        text-transform: capitalize;
    }

    .btn-primary table td {
        background-color: #3498db;
    }

    .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff;
    }

    /* -------------------------------------
                OTHER STYLES THAT MIGHT BE USEFUL
            ------------------------------------- */

    .last {
        margin-bottom: 0;
    }

    .first {
        margin-top: 0;
    }

    .align-center {
        text-align: center;
    }

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

    .clear {
        clear: both;
    }

    .mt0 {
        margin-top: 0;
    }

    .mb0 {
        margin-bottom: 0;
    }

    .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
    }

    .powered-by a {
        text-decoration: none;
    }

    hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0;
    }

    /* -------------------------------------
                RESPONSIVE AND MOBILE FRIENDLY STYLES
            ------------------------------------- */
    @media only screen and (max-width: 620px) {

        table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }

        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
            font-size: 16px !important;
        }

        table[class=body] .wrapper,
        table[class=body] .article {
            padding: 10px !important;
        }

        table[class=body] .content {
            padding: 0 !important;
        }

        table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
        }

        table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
        }

        table[class=body] .btn table {
            width: 100% !important;
        }

        table[class=body] .btn a {
            width: 100% !important;
        }

        table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
        }
    }

    @media all {
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
        }

        .btn-primary table td:hover {
            background-color: #34495e !important;
        }

        .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
        }
    }
    </style>
</head>

<body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">
                    <table class="main">
                        <!-- START MAIN CONTENT AREA -->
                        ' . $content . '
                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- START FOOTER -->
                    <div class="footer">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                            </tr>
                            <tr>
                                <td class="content-block powered-by">
                                    Powered by <a href="' .
        base_url() .
            '" target="_blank" alt="">Ambitsol Solutions <sup>TM</sup></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- END FOOTER -->
                    <!-- END CENTERED WHITE CONTAINER -->
                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</body>

</html>';
        $config['protocol'] = 'SMTP';
        $config['smtp_host'] = 'mail.thehealthwelfare.com';
        $config['smtp_port'] = '587';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_timeout'] = '5';
        $config['smtp_user'] = 'info@thehealthwelfare.com'; //emai
        $config['smtp_pass'] = 'info@thehealthwelfare.com'; // email password
        $config['charset'] = 'iso-8859-1';
// $config['newline'] = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = true; // bool whether to validate email or not
        $config['wordwrap'] = true;
        $frommessage = $sitename;
        $ci->email->initialize($config);
        $ci->email->from($from, $frommessage);
        $ci->email->to($email);
        $ci->email->subject($subject);
        $ci->email->message($message);
        if ($ci->email->send()) {
            return true;
        } else {
            return false;
        }
    }
}