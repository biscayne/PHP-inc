<?php
header('Content-Type: text/html; charset=utf-8');
$time_start = microtime(true);

$general = new mysqli("127.0.0.1", "admin", "password", "general");

$algemeen->set_charset("utf8");

$perryMail = "perry@biscayne.nl";

$headers = 'From: Report <report@biscayne.nl>' . "\r\n" .
                'Reply-To: report@biscayne.nl' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

// FTP
$ftp_user="ftp-user";
$ftp_psw="ftp-password";

// DOWNLOAD URL
$download_url="ftp://biscayne.nl/data/file.zip";

// Import / Export
$importPath = "../../import";
$exportPath = "../../export";

function curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
}

?>
