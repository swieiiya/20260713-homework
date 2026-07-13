<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>長期照顧服務 ｜ 煦和醫療</title>
    <style>
        /* 全域基本樣式 */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: "Noto Sans TC", sans-serif; }
        body { background-color: #fcfbfa; color: #333; line-height: 1.7; padding: 40px 20px; }
        .container { max-width: 1000px; margin: 0 auto; }

        /* 頁面標題區 */
        .hero-section { text-align: center; margin-bottom: 50px; }
        .hero-section h1 { font-size: 30px; color: #4A6741; margin-bottom: 12px; letter-spacing: 1px; }
        .hero-section p { font-size: 16px; color: #666; max-width: 65px; max-width: 700px; margin: 0 auto; }

        /* 長照服務三大核心（三欄式佈局，大螢幕並排，手機自動堆疊） */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }
        .service-box {
            background-color: #fff;
            padding: 30px 25px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(107, 142, 123, 0.04);
            border: 1px solid #f0ede8;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(107, 142, 123, 0.1);
        }
        .icon-wrapper {
            width: 70px;
            height: 70px;
            background-color: #f1f4f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            font-size: 28px;
            color: #4A6741;
        }
        .service-box h2 { font-size: 20px; color: #2c3e26; margin-bottom: 12px; }
        .service-box p { font-size: 15px; color: #666; text-align: left; margin-bottom: 15px; }
        
        /* 內部項目清單 */
        .item-list { text-align: left; list-style: none; padding-left: 5px; }
        .item-list li { font-size: 14px; color: #555; margin-bottom: 8px; display: flex; align-items: center; }
        .item-list li::before { content: "✓"; color: #4A6741; font-weight: bold; margin-right: 8px; }

        /* 申請流程區塊（Z軸交錯排版） */
        .flow-section {
            background-color: #fff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(107, 142, 123, 0.05);
            border: 1px solid #f0ede8;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 40px;
        }
        .flow-info { flex: 1; }
        .flow-info h3 { font-size: 22px; color: #2c3e26; margin-bottom: 15px; }
        .flow-steps { padding-left: 20px; color: #555; }
        .flow-steps li { margin-bottom: 12px; font-size: 15px; }
        .flow-steps strong { color: #4A6741; }
        
        .flow-img img {
            width: 250px;
            height: 180px;
            border-radius: 12px;
            object-fit: cover;
        }

        /* 政府補助溫馨提醒 */
        .subsidy-notice { background-color: #f7f5f0; padding: 25px; border-radius: 12px; border-left: 5px solid #4A6741; margin-bottom: 40px; }
        .subsidy-notice h4 { color: #4A6741; margin-bottom: 8px; font-size: 16px; display: flex; align-items: center; gap: 6px; }
        .subsidy-notice p { font-size: 14px; color: #555; line-height: 1.6; }

        /* 底部按鈕群組 */
        .btn-group { text-align: center; margin-top: 20px; display: flex; justify-content: center; gap: 15px; }
        .btn { display: inline-block; padding: 12px 30px; border-radius: 6px; font-size: 16px; font-weight: 500; text-decoration: none; transition: 0.3s; cursor: pointer; }
        .btn-primary { background-color: #4A6741; color: white; }
        .btn-primary:hover { background-color: #385230; }
        .btn-secondary { background-color: #fff; color: #555; border: 1px solid #ccc; }
        .btn-secondary:hover { background-color: #f5f5f5; }

        /* 響應式手機版排版自動切換 */
        @media (max-width: 768px) {
            .services-grid { grid-template-columns: 1fr; gap: 20px; }
            .flow-section { flex-direction: column-reverse; text-align: center; padding: 25px; }
            .flow-steps { text-align: left; }
            .flow-img img { width: 100%; height: auto; }
            .btn-group { flex-direction: column; gap: 10px; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>

<div class="container">
    
    <!-- 頂部標題 -->
    <header class="hero-section">
        <h1>長期照顧服務</h1>
        <p>「在地安老，溫暖相伴。」煦和醫療提供全方位的居家與社區照顧支持，協助失能、失智長者維持尊嚴生活，並有效減輕家庭照顧者的身心負擔。</p>
    </header>

    <!-- 三大核心服務項目 -->
    <section class="services-grid">
        
        <!-- 服務一：居家照顧 -->
        <div class="service-box">
            <div class="icon-wrapper">🏠</div>
            <h2>居家照顧服務</h2>
            <p>專業照顧服務員定期到府，協助長輩維持日常生活品質，讓長者在熟悉的家中安老。</p>
            <ul class="item-list">
                <li>身體清潔與日常盥洗</li>
                <li>翻身拍背、肢體關節活動</li>
                <li>餐食準備與餵食協助</li>
                <li>陪同就醫與代購生活用品</li>
            </ul>
        </div>

        <!-- 服務二：居家護理與復能 -->
        <div class="service-box">
            <div class="icon-wrapper">🩺</div>
            <h2>專業醫療與復能</h2>
            <p>醫護團隊到府提供專業臨床護理與生活復能指導，延緩失能程度，恢復自主生活能力。</p>
            <ul class="item-list">
                <li>更換管路（胃管、尿管）</li>
                <li>專業傷口護理與換藥</li>
                <li>個別化生活復能訓練指南</li>
                <li>慢性病管理與用藥指導</li>
            </ul>
        </div>

        <!-- 服務三：喘息服務 -->
        <div class="service-box">
            <div class="icon-wrapper">🌿</div>
            <h2>照顧者喘息服務</h2>
            <p>為了走更長遠的路，讓我們接手您的照顧工作。提供短期替代照顧，讓家庭照顧者獲得應有的休息。</p>
            <ul class="item-list">
                <li>居家喘息（照服員到府）</li>
                <li>機構喘息（短暫入住特約機構）</li>
                <li>照顧技巧個別指導教學</li>
                <li>照顧者心理支持諮詢</li>
            </ul>
        </div>

    </section>

    <!-- 申請流程說明區塊 -->
    <section class="flow-section">
        <div class="flow-info">
            <h3>如何申請政府長照補助（長照2.0）？</h3>
            <ol class="flow-steps">
                <li><strong>1. 諮詢申請：</strong>手機或市話直撥 <strong>「1966」</strong> 長照專線，或攜帶身份證件至鄰近衛生所或煦和醫療據點提出申請。</li>
                <li><strong>2. 到府評估：</strong>照管中心將派專員親自到府訪視，評估長者之失能等級（第2級至第8級）。</li>
                <li><strong>3. 擬定計畫：</strong>由個案管理師與家屬共同討論，依需求連結最合適的居家照顧或醫療資源。</li>
                <li><strong>4. 派案服務：</strong>由煦和醫療專業團隊進駐，正式啟動溫暖的長照照護服務。</li>
            </ol>
        </div>
        <div class="flow-img">
            <!-- 可自由替換為醫護人員溫馨陪伴長輩的意象圖 -->
            <img src="../images/longterm-care-flow.png" alt="長照申請流程">
        </div>
    </section>

    <!-- 政府補助提示 -->
    <section class="subsidy-notice">
        <h4>💡 煦和溫馨提醒：政府補助最高可達 84%</h4>
        <p>凡符合「65歲以上失能老人」、「50歲以上失智症患者」或「失能之身心障礙者」等資格，皆可享有政府長照 2.0 補助。依家庭經濟狀況（一般戶、中低收入戶、低收入戶），政府將補助 84% 至 100% 的服務費用，家屬僅需負擔極低的自付額。</p>
    </section>

    <!-- 底部導覽按鈕 -->
    <footer class="btn-group">
        <a href="booking.php" class="btn btn-primary">線上預約諮詢評估</a>
        <a href="branches.php" class="btn btn-secondary">查詢服務據點</a>
        <a href="../index.html" class="btn btn-secondary">返回首頁</a>
    </footer>

</div>

</body>
</html>