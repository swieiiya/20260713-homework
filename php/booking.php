<?php
// 啟動 Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 生成 CSRF Token 防止跨站請求偽造與重複提交
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// 讀取暫存的表單資料（若無則為空）
$form_data = $_SESSION['form_data'] ?? [];
$errors = $_SESSION['form_errors'] ?? [];

// 讀取完後清除錯誤訊息，避免重整網頁時一直顯示
unset($_SESSION['form_errors']);
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>預約服務 - 煦和醫療</title>
    <style>
        /* 載入微軟正黑體或優雅的微軟雅黑體，並設定溫馨背景圖 */
        body { 
            font-family: "Helvetica Neue", Helvetica, Arial, "Microsoft JhengHei", sans-serif;
            background: url('../images/bg-reserve.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* 磨砂玻璃質感表單外框 */
        .booking-form { 
            max-width: 500px; 
            width: 90%;
            margin: 40px auto; 
            padding: 35px; 
            background: rgba(255, 255, 255, 0.92); /* 帶有高透明度的白色 */
            backdrop-filter: blur(10px); /* 模糊背景，呈現溫暖高級感 */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); 
            border-radius: 16px; 
            box-sizing: border-box;
        }

        /* 標題置中與字體優化 */
        .booking-form h2 {
            text-align: center;
            color: #3a5034; /* 煦和醫療的深綠色調 */
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 2px;
            position: relative;
        }

        /* 標題裝飾小底線 */
        .booking-form h2::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: #4A6741;
            margin: 10px auto 0 auto;
            border-radius: 2px;
        }

        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #4A4A4A; }
        
        /* 輸入框美化 */
        .form-group input, .form-group select { 
            width: 100%; 
            padding: 12px; 
            box-sizing: border-box; 
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #FCFCFC;
        }
        
        /* 輸入框聚焦時的柔和發光效果 */
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: #4A6741;
            box-shadow: 0 0 0 3px rgba(74, 103, 65, 0.15);
            background-color: #FFFFFF;
        }

        .error-msg { color: #DC2626; font-size: 14px; margin-top: 6px; }
        
        /* 按紐區塊區隔與美化 */
        .btn-group {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 12px; /* 按紐之間的間距 */
        }

        /* 按紐基本樣式 */
        .btn {
            display: block;
            width: 100%; 
            padding: 12px 20px; 
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            border-radius: 8px; 
            cursor: pointer; 
            box-sizing: border-box;
            transition: all 0.2s ease-in-out;
            text-decoration: none; /* 移除超連結底線 */
        }

        /* 確認送出預約（溫馨綠） */
        .submit-btn { 
            background-color: #4A6741; 
            color: white; 
            border: none; 
            box-shadow: 0 4px 6px rgba(74, 103, 65, 0.2);
        }
        .submit-btn:hover {
            background-color: #3b5234;
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(74, 103, 65, 0.3);
        }

        /* 返回首頁（柔和大地灰藍/米色調） */
        .return-btn { 
            background-color: #E5E7EB; 
            color: #4B5563; 
            border: none; 
        }
        .return-btn:hover {
            background-color: #D1D5DB;
            color: #1F2937;
        }
    </style>
</head>
<body>

<div class="booking-form">
    <h2>線上預約掛號</h2>
    
    <!-- 顯示一般錯誤訊息 -->
    <?php if (isset($errors['global'])): ?>
        <p class="error-msg"><?php echo htmlspecialchars($errors['global']); ?></p>
    <?php endif; ?>

    <form action="submit_booking.php" method="POST">
        <!-- 隱藏的 CSRF Token -->
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

        <!-- 姓名 -->
        <div class="form-group">
            <label for="name">姓名：</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($form_data['name'] ?? ''); ?>" placeholder="請輸入完整姓名" required>
            <?php if (isset($errors['name'])): ?>
                <div class="error-msg"><?php echo $errors['name']; ?></div>
            <?php endif; ?>
        </div>

        <!-- 電話 -->
        <div class="form-group">
            <label for="phone">聯絡電話：</label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($form_data['phone'] ?? ''); ?>" placeholder="例：0912345678" required>
            <?php if (isset($errors['phone'])): ?>
                <div class="error-msg"><?php echo $errors['phone']; ?></div>
            <?php endif; ?>
        </div>

        <!-- 預約日期 -->
        <div class="form-group">
            <label for="date">預約日期：</label>
            <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($form_data['date'] ?? ''); ?>" min="<?php echo date('Y-m-d'); ?>" required>
            <?php if (isset($errors['date'])): ?>
                <div class="error-msg"><?php echo $errors['date']; ?></div>
            <?php endif; ?>
        </div>

        <!-- 預約科別/醫生 -->
        <div class="form-group">
            <label for="doctor">選擇門診/醫師：</label>
            <select id="doctor" name="doctor" required>
                <option value="">請選擇...</option>
                <option value="dr_chang" <?php echo (isset($form_data['doctor']) && $form_data['doctor'] === 'dr_chang') ? 'selected' : ''; ?>>張煦陽 醫師 (家庭醫學)</option>
                <option value="dr_lee" <?php echo (isset($form_data['doctor']) && $form_data['doctor'] === 'dr_lee') ? 'selected' : ''; ?>>林和靜 心理師(心理諮商)</option>
            </select>
            <?php if (isset($errors['doctor'])): ?>
                <div class="error-msg"><?php echo $errors['doctor']; ?></div>
            <?php endif; ?>
        </div>

        <!-- 按鈕群組 -->
        <div class="btn-group">
            <button type="submit" class="btn submit-btn">確認送出預約</button>
            <a href="../index.html" class="btn return-btn">返回首頁</a>
        </div>
    </form>
</div>

</body>
</html>