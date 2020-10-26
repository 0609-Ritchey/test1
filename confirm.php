<?php

$request_param = $_POST;

$request_datetime = date("Y年m月d日 H時i分s秒");


$mailto = $request_param['email'];
$to = "deltatwitter0795@gmail.com";
$mailfrom = "deltatwitter0795@gmail.com";
$subject = "お問い合わせ、ありがとうございます。";

$content = "";
$content .= $request_param['username']. "様\r\n";
$content .= "お問い合わせ、ありがとうございます。\r\n";
$content .= "=================================\r\n";
$content .= "会社・店舗名　 　　" . htmlspecialchars($request_param['organization'])."\r\n";
$content .= "担当者のお名前 　　" . htmlspecialchars($request_param['username'])."\r\n";
$content .= "ふりがな　 　　　　" . htmlspecialchars($request_param['name-kana'])."\r\n";
$content .= "郵便番号　　　 　　" . htmlspecialchars($request_param['postal-code'])."\r\n";
$content .= "住所　　　　　 　　" . htmlspecialchars($request_param['addess'])."\r\n";
$content .= "電話番号　　　 　　" . htmlspecialchars($request_param['number'])."\r\n";
$content .= "メールアドレス　 　" . htmlspecialchars($request_param['email'])."\r\n";
$content .= "お問い合わせ内容　 " . htmlspecialchars($request_param['comment'])."\r\n";
$content .= "お問い合わせ日時 　" . $request_datetime."\r\n";
$content .= "=================================\r\n";

//管理者確認用メール
$subject2 = "お問い合わせがありました。";
$content2 = "";
$content2 .= "お問い合わせがありました。\r\n";
$content2 .= "=================================\r\n";
$content2 .= "会社・店舗名　 　　" . htmlspecialchars($request_param['organization'])."\r\n";
$content2 .= "担当者のお名前 　　" . htmlspecialchars($request_param['username'])."\r\n";
$content2 .= "ふりがな　 　　　　" . htmlspecialchars($request_param['name-kana'])."\r\n";
$content2 .= "郵便番号　　　 　　" . htmlspecialchars($request_param['postal-code'])."\r\n";
$content2 .= "住所　　　　　 　　" . htmlspecialchars($request_param['addess'])."\r\n";
$content2 .= "電話番号　　　 　　" . htmlspecialchars($request_param['number'])."\r\n";
$content2 .= "メールアドレス　 　" . htmlspecialchars($request_param['email'])."\r\n";
$content2 .= "お問い合わせ内容　 " . htmlspecialchars($request_param['comment'])."\r\n";
$content2 .= "お問い合わせ日時　 " . $request_datetime."\r\n";
$content2 .= "================================="."\r\n";


mb_language("ja");
mb_internal_encoding("UTF-8");
//mail 送信
if($request_param['token'] === '1234567'){
if(mb_send_mail($to, $subject2, $content2, $mailfrom)){
   mb_send_mail($mailto,$subject,$content,$mailfrom);
   ?>
   <script>
       window.location = "/Users/kotaroamano/Desktop/ダダダダダ/index.html";
   </script>
   <?php
} else {
   header('Content-Type: text/html; charset=UTF-8');
 echo "メールの送信に失敗しました";
};
} else {
echo "メールの送信に失敗しました（トークンエラー）";
}

?>