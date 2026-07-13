<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>優勢特色 ｜ 煦和醫療</title>
    <style>
        /* 全域基本樣式 */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: "Noto Sans TC", sans-serif; }
        body { background-color: #fcfbfa; color: #333; line-height: 1.7; padding: 40px 20px; }
        .container { max-width: 1000px; margin: 0 auto; }

        /* 頂部標題區 */
        .hero-section { text-align: center; margin-bottom: 60px; }
        .hero-section h1 { font-size: 30px; color: #4A6741; margin-bottom: 12px; letter-spacing: 1px; }
        .hero-section p { font-size: 16px; color: #666; max-width: 600px; margin: 0 auto; }

        /* 四大核心優勢（2x2 網格排版，消除兩側過寬空白） */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 60px;
        }
        .feature-card {
            background-color: #fff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(107, 142, 123, 0.04);
            border: 1px solid #f0ede8;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(107, 142, 123, 0.1);
        }
        .feature-icon {
            font-size: 32px;
            margin-bottom: 15px;
            display: inline-block;
        }
        .feature-card h2 { font-size: 20px; color: #2c3e26; margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
        .feature-card p { font-size: 15px; color: #555; text-align: justify; }

        /* 核心價值橫幅（質感排版） */
        .philosophy-banner {
            background-color: #4A6741;
            color: #fff;
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: 0 10px 30px rgba(74, 103, 65, 0.2);
        }
        .philosophy-banner h3 { font-size: 22px; margin-bottom: 12px; font-weight: 500; letter-spacing: 1px; }
        .philosophy-banner p { font-size: 15px; color: #e2ebe0; max-width: 700px; margin: 0 auto; line-height: 1.8; }

        /* 底部按鈕群組 */
        .btn-group { text-align: center; display: flex; justify-content: center; gap: 15px; }
        .btn { display: inline-block; padding: 12px 30px; border-radius: 6px; font-size: 16px; font-weight: 500; text-decoration: none; transition: 0.3s; cursor: pointer; }
        .btn-primary { background-color: #4A6741; color: white; border: none; }
        .btn-primary:hover { background-color: #385230; }
        .btn-secondary { background-color: #fff; color: #555; border: 1px solid #ccc; }
        .btn-secondary:hover { background-color: #f5f5f5; }

        /* 響應式手機版排版自動切換 */
        @media (max-width: 768px) {
            .features-grid { grid-template-columns: 1fr; gap: 20px; }
            .feature-card { padding: 25px; }
            .philosophy-banner { padding: 30px 20px; }
            .btn-group { flex-direction: column; gap: 10px; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>

<div class="container">
    
    <!-- 頂部標題 -->
    <header class="hero-section">
        <h1>我們的優勢與特色</h1>
        <p>優質醫療源於對細節的堅持。煦和醫療結合跨領域專家，以創新技術與全人關懷，為您與家人建立值得信賴的健康防護網。</p>
    </header>

    <!-- 四大優勢區塊 -->
    <section class="features-grid">
        
        <!-- 特色一 -->
        <div class="feature-card">
            <span class="feature-icon">🤝</span>
            <h2>一站式整合醫療照護</h2>
            <p>打破傳統醫療分科的藩籬，我們整合家庭醫學、心理諮商與長期照顧三大核心領域。無論是日常疾病預防、心緒梳理，或是長輩的日常調養，都能在煦和醫療得到全面且連續性的專業支持。</p>
        </div>

        <!-- 特色二 -->
        <div class="feature-card">
            <span class="feature-icon">🌿</span>
            <h2>溫暖、保密的就診環境</h2>
            <p>我們深知空間對身心療癒的重要性。院區全面採用柔和的自然色調與無障礙空間設計，並設立高規格隱私諮商室。在這裡，您可以完全放下緊繃與戒備，安心地將身心靈健康託付給我們。</p>
        </div>

        <!-- 特色三 -->
        <div class="feature-card">
            <span class="feature-icon">👥</span>
            <h2>資深跨領域專家團隊</h2>
            <p>集結來自國內頂尖醫學中心的專科醫師、具備國家證照的資深心理師，以及經驗豐富的長照個案管理師。團隊定期進行跨學門個案研討，確保為每位個案量身打造最具綜效的照護計畫。</p>
        </div>

        <!-- 特色四 -->
        <div class="feature-card">
            <span class="feature-icon">📲</span>
            <h2>貼心便捷的數位服務</h2>
            <p>導入 Session 智能導覽偏好與防重複表單系統，提供簡單流暢的線上預約、門市查詢與即時衛教資訊。家屬能隨時追蹤長照服務進度與健康動態，免去繁瑣的紙本流程，溝通更透明、更即時。</p>
        </div>

    </section>

    <!-- 核心價值橫幅 -->
    <section class="philosophy-banner">
        <h3>「醫病先醫心，煦色而和」</h3>
        <p>我們堅信，醫療不只是冰冷的診斷與處方，更是一份溫暖的陪伴與承諾。煦和醫療如同和煦的冬陽，在您最需要的時候，以最專業的態度、最溫柔的雙手，守護您與全家人的每一步健康旅程。</p>
    </section>

    <!-- 底部導覽按鈕 -->
    <footer class="btn-group">
        <a href="booking.php" class="btn btn-primary">立即預約專業諮詢</a>
        <a href="../index.html" class="btn btn-secondary">返回首頁</a>
    </footer>

</div>

</body>
</html>