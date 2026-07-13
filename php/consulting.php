<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>心理諮商服務 ｜ 煦和醫療</title>
    <style>
        /* 全域基本樣式 */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: "Noto Sans TC", sans-serif; }
        body { background-color: #fcfbfa; color: #333; line-height: 1.7; padding: 40px 20px; }
        .container { max-width: 1000px; margin: 0 auto; }

        /* 頁面標題區 */
        .hero-section { text-align: center; margin-bottom: 50px; }
        .hero-section h1 { font-size: 28px; color: #4A6741; margin-bottom: 12px; letter-spacing: 1px; }
        .hero-section p { font-size: 15px; color: #666; max-width: 600px; margin: 0 auto; }

        /* 諮商核心服務卡片（左右並排） */
        .service-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            background-color: #fff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(107, 142, 123, 0.05);
            border: 1px solid #f0ede8;
            margin-bottom: 40px;
        }
        .service-card.reverse { flex-direction: row-reverse; } /* 交錯排版用 */
        
        .service-info { flex: 1; }
        .service-info .tag { display: inline-block; padding: 4px 12px; background-color: #f1f4f0; color: #4A6741; font-size: 13px; font-weight: bold; border-radius: 20px; margin-bottom: 12px; }
        .service-info h2 { font-size: 22px; color: #2c3e26; margin-bottom: 12px; }
        .service-info p { font-size: 15px; color: #555; margin-bottom: 16px; }
        
        /* 服務項目清單 */
        .spec-list { list-style: none; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .spec-list li { font-size: 14px; color: #666; display: flex; align-items: center; }
        .spec-list li::before { content: "•"; color: #4A6741; font-weight: bold; font-size: 18px; margin-right: 8px; }

        /* 醫生/心理師區塊 */
        .service-img img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            border: 4px solid #fff;
        }

        /* 溫馨提醒區塊 */
        .notice-box { background-color: #f7f5f0; padding: 25px; border-radius: 12px; border-left: 5px solid #4A6741; margin-bottom: 40px; }
        .notice-box h4 { color: #4A6741; margin-bottom: 8px; font-size: 16px; }
        .notice-box ul { padding-left: 20px; font-size: 14px; color: #555; }
        .notice-box li { margin-bottom: 6px; }

        /* 按鈕群組 */
        .btn-group { text-align: center; margin-top: 20px; display: flex; justify-content: center; gap: 15px; }
        .btn { display: inline-block; padding: 12px 30px; border-radius: 6px; font-size: 16px; font-weight: 500; text-decoration: none; transition: 0.3s; cursor: pointer; }
        .btn-primary { background-color: #4A6741; color: white; }
        .btn-primary:hover { background-color: #385230; }
        .btn-secondary { background-color: #fff; color: #555; border: 1px solid #ccc; }
        .btn-secondary:hover { background-color: #f5f5f5; }

        /* 響應式手機版排版自動切換 */
        @media (max-width: 768px) {
            .service-card, .service-card.reverse { flex-direction: column-reverse; text-align: center; padding: 25px; }
            .spec-list { grid-template-columns: 1fr; text-align: left; padding-left: 20%; }
            .btn-group { flex-direction: column; gap: 10px; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>

<div class="container">
    
    <!-- 頂部標題 -->
    <header class="hero-section">
        <h1>心理諮商服務</h1>
        <p>「在溫暖與安全的空間裡，讓我們陪伴您梳理心緒，找回內在的和諧與力量。」本院提供專業、絕對保密的個別與伴侶諮商服務。</p>
    </header>

    <!-- 服務區塊 1：個別心理諮商 -->
    <section class="service-card">
        <div class="service-info">
            <span class="tag">專業傾聽</span>
            <h2>個別心理諮商</h2>
            <p>透過一對一的深度對話，在完全接納且不具批判性的環境中，陪伴您探索自我、釐清困擾，並逐步建立面對生活挑戰的韌性。</p>
            <ul class="spec-list">
                <li>情緒困擾與壓力調適</li>
                <li>職涯發展與自我認同</li>
                <li>人際關係與溝通障礙</li>
                <li>創傷療癒與悲傷輔導</li>
            </ul>
        </div>
        <div class="service-img">
            <!-- 請替換成對應的溫暖意象圖或心理師照片 -->
            <img src="../images/consulting-individual.png" alt="個別心理諮商">
        </div>
    </section>

    <!-- 服務區塊 2：伴侶與關係諮商（交錯排版） -->
    <section class="service-card reverse">
        <div class="service-info">
            <span class="tag">關係修復</span>
            <h2>伴侶與婚姻諮商</h2>
            <p>協助雙方看見彼此在關係中的核心需求，破解反覆爭吵的惡性循環，並重拾安全感，建立更健康的溝通模式與情感連結。</p>
            <ul class="spec-list">
                <li>親密關係溝通卡關</li>
                <li>婚姻衝突與信任重建</li>
                <li>家庭關係與親職教養</li>
                <li>情感分離與適應調適</li>
            </ul>
        </div>
        <div class="service-img">
            <img src="../images/consulting-couple.png" alt="伴侶與婚姻諮商">
        </div>
    </section>

    <!-- 溫馨預約須知 -->
    <section class="notice-box">
        <h4>🔒 諮商預約須知：</h4>
        <ul>
            <li><strong>隱私保密：</strong>依據臨床心理師與諮商心理師法規，您在諮商室內的所有談話內容皆受到嚴格的保密權益保障。</li>
            <li><strong>完整時間：</strong>每堂單人諮商時間為 50 分鐘，雙人/伴侶諮商為 80 分鐘，請提早 10 分鐘報到。</li>
            <li><strong>取消變更：</strong>為維護醫療資源，如需更改或取消預約，請於預約日前 24 小時來電告知。</li>
        </ul>
    </section>

    <!-- 底部導覽按鈕 -->
    <footer class="btn-group">
        <a href="booking.php" class="btn btn-primary">立即線上預約</a>
        <a href="../index.html" class="btn btn-secondary">返回首頁</a>
    </footer>

</div>

</body>
</html>