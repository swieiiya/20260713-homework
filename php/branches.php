<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. 定義門市資料陣列（加入各分院的 Google Map 嵌入網址）
// 注意：網址中的地址有經過 URL 編碼
$branches = [
    'hsinchu' => [
        'name' => '煦和醫療 - 新竹總院',
        'phone' => '03-555-5555',
        'address' => '新竹市東區竹科路168號', // 請自行替換正確號碼
        'hours' => '週一至週六 09:00 - 21:00 (週日休診)',
        // 新竹總院地圖網址 (q=後面為新竹地址)
        'map_url' => 'https://maps.google.com/maps?q=%E6%96%B0%E7%AB%B9%E5%B8%82%E6%9D%B1%E5%8D%80%E7%AB%B9%E7%A7%91%E8%B7%AF&t=&z=16&ie=UTF8&iwloc=&output=embed'
    ],
    'taichung' => [
        'name' => '煦和醫療 - 台中分院',
        'phone' => '04-2345-1111',
        'address' => '台中市西屯區市政路888號',
        'hours' => '週一至週六 09:00 - 21:00 (週日休診)',
        // 台中分院地圖網址
        'map_url' => 'https://maps.google.com/maps?q=%E5%8F%B0%E4%B8%AD%E5%B8%82%E8%A5%BF%E5%B1%AF%E5%8D%80%E5%B8%82%E6%94%BF%E8%B7%AF100%E8%99%9F&t=&z=16&ie=UTF8&iwloc=&output=embed'
    ]
];

// 2. 處理切換動作
if (isset($_GET['select_branch']) && array_key_exists($_GET['select_branch'], $branches)) {
    $_SESSION['preferred_branch'] = $_GET['select_branch'];
    header('Location: branches.php');
    exit;
}

// 3. 取得當前門市（預設為新竹總院）
$current_branch_id = $_SESSION['preferred_branch'] ?? 'hsinchu';
$current_branch = $branches[$current_branch_id];
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>門市資訊 - 煦和醫療</title>
    <style>
        .container { max-width: 800px; margin: 40px auto; font-family: sans-serif; padding: 0 20px; }
        .branch-tabs { display: flex; gap: 10px; margin-bottom: 20px; }
        
        /* 頁籤樣式（配合你圖中的樣式） */
        .tab-btn { padding: 10px 20px; background-color: #eee; color: #666; text-decoration: none; border-radius: 6px; font-weight: bold; transition: 0.3s; }
        .tab-btn.active { background-color: #4A6741; color: white; }
        
        /* 白色圓角大容器 */
        .info-card { border: 1px solid #ddd; padding: 30px; border-radius: 16px; background-color: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .info-item { margin-bottom: 15px; font-size: 16px; color: #333; }
        .info-item strong { display: inline-block; width: 90px; color: #555; }
        
        /* 地圖外框容器，確保地圖 100% 寬度不滿出 */
        .map-container { width: 100%; margin-top: 25px; }
        .map-container iframe { width: 100%; height: 300px; border: 0; border-radius: 12px; display: block; }
        
        /* 回首頁按鈕 */
        .back-home-btn { display: inline-block; margin-top: 20px; padding: 8px 16px; background-color: #fff; border: 1px solid #ccc; border-radius: 4px; cursor: pointer; text-decoration: none; color: #333; font-size: 14px; }
        .back-home-btn:hover { background-color: #f5f5f5; }
    </style>
</head>
<body>

<div class="container">
    <h2>門市服務據點</h2>
    
    <!-- 門市切換標籤 -->
    <div class="branch-tabs">
        <a href="branches.php?select_branch=hsinchu" class="tab-btn <?php echo $current_branch_id === 'hsinchu' ? 'active' : ''; ?>">新竹總院</a>
        <a href="branches.php?select_branch=taichung" class="tab-btn <?php echo $current_branch_id === 'taichung' ? 'active' : ''; ?>">台中分院</a>
    </div>

    <!-- 門市詳細資訊面板 -->
    <div class="info-card">
        <h3><?php echo htmlspecialchars($current_branch['name']); ?></h3>
        <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 25px;">
        
        <div class="info-item">
            <strong>聯絡電話：</strong><?php echo htmlspecialchars($current_branch['phone']); ?>
        </div>
        <div class="info-item">
            <strong>門市地址：</strong><?php echo htmlspecialchars($current_branch['address']); ?>
        </div>
        <div class="info-item">
            <strong>營業時間：</strong><?php echo htmlspecialchars($current_branch['hours']); ?>
        </div>

        <!-- 【修正重點】將地圖搬入 info-card 內部最下方，並動態帶入目前分院的 map_url -->
        <div class="map-container">
            <iframe
                src="<?php echo htmlspecialchars($current_branch['map_url']); ?>"
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    
    <!-- 返回首頁按鈕 (依照前一步骤修正為超連結) -->
    <a href="../index.html" class="back-home-btn">返回首頁</a>
</div>

</body>
</html>