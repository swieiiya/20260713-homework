<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. 驗證是否為 POST 請求與 Token 是否正確
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: booking.php');
    exit;
}

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
    $_SESSION['form_errors']['global'] = '無效的請求或表單已過期，請重試。';
    header('Location: booking.php');
    exit;
}

// 2. 接收並過濾輸入資料
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$date = trim($_POST['date'] ?? '');
$doctor = trim($_POST['doctor'] ?? '');

// 將輸入資料暫存到 Session，若驗證失敗可以讓使用者少填一次
$_SESSION['form_data'] = [
    'name' => $name,
    'phone' => $phone,
    'date' => $date,
    'doctor' => $doctor
];

$errors = [];

// 3. 欄位後端驗證
if (empty($name)) {
    $errors['name'] = '請填寫姓名。';
}
if (empty($phone) || !preg_match('/^[0-9\-\s\+\(\)]{8,15}$/', $phone)) {
    $errors['phone'] = '請填寫正確的電話號碼。';
}
if (empty($date)) {
    $errors['date'] = '請選擇預約日期。';
}
if (empty($doctor)) {
    $errors['doctor'] = '請選擇看診醫師。';
}

// 4. 判斷驗證結果
if (!empty($errors)) {
    // 驗證失敗：將錯誤訊息存入 Session，送回表單頁面
    $_SESSION['form_errors'] = $errors;
    header('Location: booking.php');
    exit;
}

// 5. 驗證成功：執行你的資料庫寫入動作 (例如 INSERT INTO ...)
// 這裡寫入資料庫的程式碼...

// 6. 成功後清除表單暫存與 Token，防止重新整理網頁導致重複提交
unset($_SESSION['form_data']);
unset($_SESSION['csrf_token']);

// 帶上成功訊息前往成功頁面
$_SESSION['booking_success'] = true;
header('Location: success.php');
exit;