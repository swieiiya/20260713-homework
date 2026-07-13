<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 如果不是從表單成功導向過來的，直接踢回表單頁
if (empty($_SESSION['booking_success'])) {
    header('Location: booking.php');
    exit;
}

// 讀取完後清除成功標記
unset($_SESSION['booking_success']);
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>預約成功</title>
    <style>
        .success-box { max-width: 500px; margin: 100px auto; text-align: center; padding: 30px; border: 1px solid #b2d8b2; background-color: #f4gbf4; border-radius: 8px; }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4A6741; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>

<div class="success-box">
    <h2 style="color: #2e692e;">🎉 預約成功！</h2>
    <p>我們已收到您的預約申請，請於當天攜帶健保卡準時就診哦!</p>
    <a href="../index.html" class="btn">返回首頁</a>
</div>

</body>
</html>