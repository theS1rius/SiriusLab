<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>數據儀表板 - SiriusLab</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <!-- 固定Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo">📊 SiriusLab</div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#overview">總覽</a></li>
                    <li><a href="#analytics">分析</a></li>
                    <li><a href="#reports">報告</a></li>
                    <li><a href="#settings">設置</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <h1 class="page-title">數據儀表板</h1>
            
            <!-- 主要指標網格 -->
            <div class="metrics-grid">
                <!-- 總用戶數 -->
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">👥</div>
                        <div class="metric-trend trend-up">
                            ↗ +12.5%
                        </div>
                    </div>
                    <div class="metric-value">15,847</div>
                    <div class="metric-label">total users</div>
                    <div class="metric-description">較上月增加 1,764 位新用戶</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 78%"></div>
                    </div>
                </div>

                <!-- 營收 -->
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">💰</div>
                        <div class="metric-trend trend-up">
                            ↗ +8.3%
                        </div>
                    </div>
                    <div class="metric-value">$542,890</div>
                    <div class="metric-label">總營收</div>
                    <div class="metric-description">本月目標達成率 92%</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 92%"></div>
                    </div>
                </div>

                <!-- 活躍用戶 -->
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">📈</div>
                        <div class="metric-trend trend-up">
                            ↗ +15.7%
                        </div>
                    </div>
                    <div class="metric-value">8,924</div>
                    <div class="metric-label">月活躍用戶</div>
                    <div class="metric-description">用戶參與度持續提升</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%"></div>
                    </div>
                </div>

                <!-- 轉換率 -->
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">🎯</div>
                        <div class="metric-trend trend-down">
                            ↘ -2.1%
                        </div>
                    </div>
                    <div class="metric-value">3.42%</div>
                    <div class="metric-label">轉換率</div>
                    <div class="metric-description">需要優化轉換流程</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 34%"></div>
                    </div>
                </div>

                <!-- 平均訂單價值 -->
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">🛒</div>
                        <div class="metric-trend trend-up">
                            ↗ +5.8%
                        </div>
                    </div>
                    <div class="metric-value">$127.50</div>
                    <div class="metric-label">平均訂單價值</div>
                    <div class="metric-description">客戶購買力提升</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 68%"></div>
                    </div>
                </div>

                <!-- 客戶滿意度 -->
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">⭐</div>
                        <div class="metric-trend trend-stable">
                            → 0.0%
                        </div>
                    </div>
                    <div class="metric-value">4.7/5.0</div>
                    <div class="metric-label">客戶滿意度</div>
                    <div class="metric-description">維持高水準服務品質</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 94%"></div>
                    </div>
                </div>
            </div>

            <!-- 統計摘要區域 -->
            <div class="summary-section">
                <h2 class="summary-title">本月重點摘要</h2>
                <div class="summary-stats">
                    <div class="summary-item">
                        <div class="summary-number">2,847</div>
                        <div class="summary-text">新註冊用戶</div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-number">156</div>
                        <div class="summary-text">產品銷售</div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-number">98.5%</div>
                        <div class="summary-text">系統可用性</div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-number">47</div>
                        <div class="summary-text">客服回應時間(分鐘)</div>
                    </div>
                </div>
            </div>

            <!-- 系統狀態指標 -->
            <div class="metrics-grid">
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">🔧</div>
                        <div class="metric-trend trend-up">
                            ↗ +99.2%
                        </div>
                    </div>
                    <div class="metric-value">99.8%</div>
                    <div class="metric-label">系統運行時間</div>
                    <div class="metric-description">過去30天穩定運行</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 99.8%"></div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">⚡</div>
                        <div class="metric-trend trend-up">
                            ↗ +18.5%
                        </div>
                    </div>
                    <div class="metric-value">1.2s</div>
                    <div class="metric-label">平均回應時間</div>
                    <div class="metric-description">性能優化效果顯著</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 85%"></div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">📊</div>
                        <div class="metric-trend trend-up">
                            ↗ +25.3%
                        </div>
                    </div>
                    <div class="metric-value">1.2TB</div>
                    <div class="metric-label">數據處理量</div>
                    <div class="metric-description">數據量持續增長</div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 72%"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">隱私政策</a>
                <a href="#terms">使用條款</a>
                <a href="#support">技術支援</a>
                <a href="#contact">聯絡我們</a>
            </div>
            <p class="footer-text">&copy; 2025 SiriusLab. 版權所有.</p>
        </div>
    </footer>

    <!-- JavaScript for animations and interactions -->
    <script>
        // 頁面載入動畫
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.metric-card');
            cards.forEach((card, index) => {
                card.classList.add('loading');
                setTimeout(() => {
                    card.classList.remove('loading');
                    card.classList.add('loaded');
                }, index * 100);
            });

            // 進度條動畫
            const progressBars = document.querySelectorAll('.progress-fill');
            setTimeout(() => {
                progressBars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0%';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            }, 500);
        });

        // 卡片懸停效果
        document.querySelectorAll('.metric-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // 數值動畫效果
        function animateValue(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = Math.floor(progress * (end - start) + start);
                element.textContent = current.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // 當頁面載入時執行數值動畫
        window.addEventListener('load', () => {
            setTimeout(() => {
                const valueElements = document.querySelectorAll('.metric-value');
                valueElements.forEach(element => {
                    const text = element.textContent;
                    const number = parseInt(text.replace(/[^0-9]/g, ''));
                    if (number && number > 100) {
                        element.textContent = '0';
                        animateValue(element, 0, number, 2000);
                    }
                });
            }, 1000);
        });
    </script>
</body>
</html>