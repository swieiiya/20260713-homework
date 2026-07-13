<?php
// 1. 啟動 Session (以利未來整合預約或門市偏好)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. 定義醫療團隊成員資料陣列 (方便管理、新增、刪除)
$team_members = [
    [
        'title' => '總院長',
        'name' => '張煦陽 醫師',
        'specialty' => '全人預防醫學、慢性病管理、家庭醫學',
        'intro' => '前醫學中心主治醫師，擁有超過十五年的臨床經驗，堅持「醫病先醫心」的溫慢理念。',
        'img_url' => '../images/group/d8.jpg' // 如果本網頁放在 php 資料夾下，記得改成 '../images/group/d8.jpg'
    ],
    [
        'title' => '首席諮商師',
        'name' => '林和靜 心理師',
        'specialty' => '情緒梳理、壓力適應、伴侶關係諮商',
        'intro' => '善於營造安全且具包容力的對話空間，陪伴無數個體與家庭走過心靈的低谷。',
        'img_url' => '../images/group/d3.jpg'
    ],
    [
        'title' => '長照照護長',
        'name' => '陳蘊華 護理師',
        'specialty' => '高齡者個案管理、居家護理指導、復健整合',
        'intro' => '深耕長照領域多年，以細緻入微的同理心，為長者及家屬轉化照顧負擔。',
        'img_url' => '../images/group/n1.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>專業團隊 ｜ 煦和醫療</title>
    <style>
        /* 全域基本樣式 */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: "Noto Sans TC", sans-serif; }
        body { background-color: #fcfbfa; color: #333; line-height: 1.7; padding: 40px 20px; }
        
        /* 限制整體內容最大寬度，防止大螢幕兩側無限延伸留白 */
        .container { max-width: 1000px; margin: 0 auto; }

        /* 區塊標題 */
        .team-section { text-align: center; margin-bottom: 50px; }
        .section-title { font-size: 26px; color: #4A6741; margin-bottom: 12px; letter-spacing: 1px; }
        .team-section > .container > p { font-size: 15px; color: #666; max-width: 600px; margin: 0 auto 40px auto; }

        /* 使用 Flexbox 讓文字與照片左右並排（解決你原先照片上下分開、空白太長的問題） */
        .doctor-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px; 
            background-color: #fff; 
            padding: 35px;
            border-radius: 16px;
            margin-bottom: 30px;
            border: 1px solid #f0ede8;
            box-shadow: 0 4px 20px rgba(107, 142, 123, 0.04);
            text-align: left;
        }

        /* 奇數列卡片反轉排版（讓視覺更有交錯的質感） */
        .doctor-card:nth-child(even) {
            flex-direction: row-reverse;
        }

        /* 文字說明區塊 */
        .doctor-info { flex: 1; }
        .doctor-info .title { font-size: 14px; color: #888; font-weight: 500; letter-spacing: 0.5px; }
        .doctor-info .name { font-size: 22px; color: #2c3e26; margin: 6px 0 12px 0; }
        .doctor-info p { font-size: 15px; color: #555; margin-bottom: 8px; }
        .doctor-info .specialty strong { color: #4A6741; }
        .doctor-info .intro { color: #666; font-size: 14.5px; margin-top: 12px; }

        /* 照片圓形區塊（防爆框與精緻微陰影） */
        .doctor-img img {
            width: 200px;
            height: 200px;
            border-radius: 50%; 
            object-fit: cover;
            box-shadow: 0 6px 20px rgba(0,0,0,0.06); 
            border: 4px solid #fff;
            display: block;
        }

        /* 底部返回按鈕 */
        .btn-group { text-align: center; margin-top: 40px; }
        .back-home-btn { display: inline-block; padding: 10px 24px; background-color: #4A6741; color: white; text-decoration: none; border-radius: 4px; font-size: 16px; transition: 0.3s; }
        .back-home-btn:hover { background-color: #385230; }

        /* RWD 響應式：手機版自動切換回上下排列，並保持居中 */
        @media (max-width: 768px) {
            .doctor-card, .doctor-card:nth-child(even) {
                flex-direction: column-reverse; /* 照片在上方，文字在下方 */
                text-align: center;
                padding: 25px;
                gap: 20px;
            }
            .doctor-img img { margin: 0 auto; width: 180px; height: 180px; }
        }
    </style>
</head>
<body>

    <!-- 4.醫療團隊區塊 (Medical Team Section) -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">專業團隊 ｜ 守護力量</h2>
            <p>集結各領域資深專家，以嚴謹的醫學態度與溫暖的同理心為您量身打造全方位的照護計畫</p>

            <!-- 使用 PHP foreach 迴圈，動態產生團隊成員卡片 -->
            <?php foreach ($team_members as $member): ?>
                <div class="doctor-card">
                    <div class="doctor-info">
                        <span class="title"><?php echo htmlspecialchars($member['title']); ?></span>
                        <h3 class="name"><?php echo htmlspecialchars($member['name']); ?></h3>
                        <p class="specialty"><strong>專長：</strong><?php echo htmlspecialchars($member['specialty']); ?></p>
                        <p class="intro"><?php echo htmlspecialchars($member['intro']); ?></p>
                    </div>
                    <div class="doctor-img">
                        <img src="<?php echo htmlspecialchars($member['img_url']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </section>

    <!-- 底部導覽 -->
    <div class="btn-group">
        <a href="../index.html" class="back-home-btn">返回首頁</a>
    </div>

</body>
</html>