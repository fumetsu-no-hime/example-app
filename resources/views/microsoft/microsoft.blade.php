<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>microsoft</title>
    <link rel="stylesheet" href="{{ asset('./css/microsoft.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('./css/swiper-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="container-normal">
        <a href="/">
            <div class="logo"></div>
        </a>
        <!-- 中間那一段後來會隱藏 -->
        <ul class="pc-menu">
            <li>Microsoft 365</li>
            <li>Teams</li>
            <li>Windows</li>
            <li>Surface</li>
            <li>Xbox</li>
            <li>支援</li>
        </ul>
        <ul class="func-menu">
            <!-- 會先隱藏漢堡條按鈕與menu -->

            <li class="ham-small container-normal">
                <input type="checkbox" id="ham-menu-switch" hidden>
                <label for="ham-menu-switch" class="ham-menu"></label>
                <ul class="mobile-menu">
                    <li tabindex="1">Microsoft 365</li>
                    <li tabindex="1">Teams</li>
                    <li tabindex="1">Windows</li>
                    <li tabindex="1">Surface</li>
                    <li tabindex="1">Xbox</li>
                    <li tabindex="1">支援</li>


                    <input type="checkbox" id="chevron-soft-switch" class="chevron-switch" hidden>
                    <label for="chevron-soft-switch" class="chevron-label">
                        <li>
                            <span>軟體</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>

                        <div class="sub-dropdown-menu">
                            <ul>
                                <li>Windows 應用程式</li>
                                <li>AI</li>
                                <li>OneDrive</li>
                                <li>Outlook</li>
                                <li>Skype</li>
                                <li>OneNote</li>
                                <li>Microsoft Teans</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-2nd-switch" class="chevron-switch" hidden>
                    <label for="chevron-2nd-switch" class="chevron-label">
                        <li>
                            <span>個人電腦和設備</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>
                        <div class="sub-dropdown-menu">
                            <ul>
                                <li>選購 Xbox</li>
                                <li>電腦配件</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-3rd-switch" class="chevron-switch" hidden>
                    <label for="chevron-3rd-switch" class="chevron-label">
                        <li>
                            <span>娛樂</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>

                        <div class="sub-dropdown-menu">
                            <ul>
                                <li>Xbox Game Pass Ultimate</li>
                                <li>Xbox Live Gold</li>
                                <li>Xbox 與遊戲</li>
                                <li>電腦遊戲</li>
                                <li>Windows 遊戲</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-4th-switch" class="chevron-switch" hidden>
                    <label for="chevron-4th-switch" class="chevron-label">
                        <li>
                            <span>商務適用</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>

                        <div class="sub-dropdown-menu">
                            <ul>
                                <li>Microsoft Cloud</li>
                                <li>Microsoft 安全性</li>
                                <li>Azure</li>
                                <li>Dynamics 365</li>
                                <li>商務用 Microsoft 365</li>
                                <li>Microsoft產業</li>
                                <li>Microsoft Power Platform</li>
                                <li>Windows 365</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-5th-switch" class="chevron-switch" hidden>
                    <label for="chevron-5th-switch" class="chevron-label">
                        <li>
                            <span>開發人員與IT</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>

                        <div class="sub-dropdown-menu">
                            <ul>
                                <li>開發人員中心</li>
                                <li>文件</li>
                                <li>Microsoft Learn</li>
                                <li>Microsoft技術社群</li>
                                <li>Azure Marketplace</li>
                                <li>AppSource</li>
                                <li>Visual Studio</li>
                            </ul>
                        </div>
                    </label>

                    <input type="checkbox" id="chevron-6th-switch" class="chevron-switch" hidden>
                    <label for="chevron-6th-switch" class="chevron-label">
                        <li>
                            <span>其他</span>
                            <i class="fa-solid fa-chevron-down"></i>
                            <i class="fa-solid fa-chevron-up"></i>
                        </li>

                        <div class="sub-dropdown-menu">
                            <ul>
                                <li>Microsoft Rewards</li>
                                <li>免費下載與安全性</li>
                                <li>教育</li>
                                <li>禮品卡</li>
                                <li>Licensing</li>
                            </ul>
                        </div>
                    </label>
                    <li>檢視網站地圖</li>
                </ul>
            </li>
            <li class="all-microsoft">
                <input type="checkbox" id="microlist" hidden>
                <label for="microlist" class="micromenu">
                    <span>所有 Microsoft<i class="fa-solid fa-chevron-right fa-rotate-90"></i></span>
                </label>
                <div class="opt-group">
                    <ul>
                        <p>軟體</p>
                        <li>AI</li>
                        <li>OneDrive</li>
                        <li>Outlook</li>
                        <li>Skype</li>
                        <li>OneNote</li>
                        <li>Microsoft Teans</li>
                    </ul>
                    <ul>
                        <p>個人電腦和設備</p>
                        <li>選購 Xbox</li>
                        <li>電腦配件</li>
                    </ul>
                    <ul>
                        <p>娛樂</p>
                        <li>Xbox Game Pass Ultimate</li>
                        <li>Xbox Live Gold</li>
                        <li>Xbox 與遊戲</li>
                        <li>電腦遊戲</li>
                        <li>Windows 遊戲</li>
                    </ul>
                    <ul>
                        <p>商務適用</p>
                        <li>Microsoft Cloud</li>
                        <li>Microsoft 安全性</li>
                        <li>Azure</li>
                        <li>Dynamics 365</li>
                        <li>商務用 Microsoft 365</li>
                        <li>Microsoft產業</li>
                        <li>Microsoft Power Platform</li>
                        <li>Windows 365</li>
                    </ul>
                    <ul>
                        <p>開發人員與IT</p>
                        <li>開發人員中心</li>
                        <li>文件</li>
                        <li>Microsoft Learn</li>
                        <li>Microsoft技術社群</li>
                        <li>Azure Marketplace</li>
                        <li>AppSource</li>
                        <li>Visual Studio</li>
                    </ul>
                    <ul>
                        <p>其他</p>
                        <li>Microsoft Rewards</li>
                        <li>免費下載與安全性</li>
                        <li>教育</li>
                        <li>禮品卡</li>
                        <li>Licensing</li>
                    </ul>
                    <div class="bottom"><span class="chk">檢視網站</span><i class="fa-solid fa-chevron-right"></i></div>
                </div>


            </li>
            <li class="search">
                <span>搜尋</span>
                <i class="fa-solid fa-magnifying-glass fa-rotate-90"></i>
            </li>
            <li class="cart">
                <a href="">
                    <span>購物車</span>
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
            <li class="signin">
                <a href="">
                    <span class="width-[70px]">登入<img src="{{ asset('./img/螢幕擷取畫面 2023-07-16 102318.png') }}"
                            alt=""></span>
                </a>
            </li>
        </ul>
    </nav>
    <header>
        <div>
            {{-- <div class="text-[72px]">{{$news}}</div> --}}
            {{-- <div class="text-[75px] bg-[#d8d81d44] md:bg-[#8456] lg:bg-slate-600 border-[5px]  hover:bg-[#dd2f]">123456</div> --}}
            <div id="my-swiper-1" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="download-2">
                            <h2>Surface Pro 9</h2>
                            <h5>平板電腦的彈性和筆記型電腦的效能 — 全都在一台攜帶超方便的裝置</h5>
                            <a href="https://www.microsoft.com/zh-tw/surface/devices/surface-pro-9?icid=mscom_marcom_H1a_SurfacePro9&FY23FallSurface"
                                target="_blank">
                                <div>深入了解</div>
                            </a>
                        </div>
                        <picture>
                            <source media="(min-width: 1400px)" srcset="{{ asset('./img/Surface-Pro-9.avif') }}">
                            <source media="(min-width: 1084px)"
                                srcset="{{ asset('./img/Surface-Pro-9-1399x600.avif') }}">
                            <source media="(min-width: 860px)"
                                srcset="{{ asset('./img/Surface-Pro-9-1083x600.avif') }}">
                            <source media="(min-width: 540px)"
                                srcset="{{ asset('./img/Surface-Pro-9-859x540.avif') }}">
                            <img src="{{ asset('./img/Surface-Pro-9-859x540.avif') }}" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <div class="download-2 push">
                            <h2>Microsoft 365</h2>
                            <h5>使用 Microsoft 365 應用程式實現創意想法、提高線上和離線安全，並專注於最重要的事。</h5>
                            <div class="link-group">
                                <a href="https://www.microsoft.com/zh-tw/microsoft-365/p/microsoft-365-personal/cfq7ttc0k5bf?icid=mscom_marcom_H2a_M365Personal&activetab=pivot:%E6%A6%82%E8%A7%80tab"
                                    target="_blank">
                                    <div class="btn-1">適合 1 人使用</div>
                                </a>
                                <a href="https://www.microsoft.com/zh-tw/microsoft-365/p/microsoft-365-personal/cfq7ttc0k5bf?icid=mscom_marcom_H2a_M365Personal&activetab=pivot:%E6%A6%82%E8%A7%80tab"
                                    target="_blank">
                                    <div class="btn-2">最多可供 6 人使用<i class="fa-solid fa-chevron-right"></i></div>
                                </a>
                            </div>

                        </div>
                        <picture>
                            <source media="(min-width: 1400px)"
                                srcset="{{ asset('./img/M365-Icon-Bounce-Word-Merch.avif') }}">
                            <source media="(min-width: 1084px)"
                                srcset="{{ asset('./img/M365-Icon-Bounce-Word-Merch-1399x600.avif') }}">
                            <source media="(min-width: 860px)"
                                srcset="{{ asset('./img/M365-Icon-Bounce-Word-Merch-1083x600.avif') }}">
                            <source media="(min-width: 540px)"
                                srcset="{{ asset('./img/M365-Icon-Bounce-Word-Merch-859x540.avif') }}">
                            <img src="{{ asset('./img/M365-Icon-Bounce-Word-Merch-859x540.avif') }}" alt="">
                        </picture>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <main>
        <section class="main-choice container-normal">
            <div class="first-choice">
                <a href="https://www.microsoft.com/zh-tw/microsoft-365/buy/compare-all-microsoft-365-products?icid=MSCOM_QL_M365"
                    target="_blank">
                    <img src="{{ asset('./img/gldn-Quick-Link-Icon-80x80-Microsoft-365.webp') }}" alt="">
                    <div>選擇您的 Microsoft 365</div>
                </a>
            </div>
            <div class="first-choice">
                <a href="https://www.microsoft.com/zh-tw/surface?icid=MSCOM_QL_Surface" target="_blank">
                    <img src="{{ asset('./img/icon-LL-surface-kickstand-120x120.webp') }}" alt="">
                    <div>選購 Surface 裝置</div>
                </a>
            </div>
            <div class="first-choice">
                <a href="https://www.microsoft.com/zh-tw/windows/get-windows-11?icid=MSCOM_QL_Windows&r=1"
                    target="_blank">
                    <img src="{{ asset('./img/gldn-Quick-Link-Icon-80x80-Microsoft-365.webp') }}" alt="">
                    <div>取得 Windows 11</div>
                </a>
            </div>
            </div>
        </section>
        <section class="four-card container-normal">
            <div class="one-card">
                <a href="">
                    <picture>
                        <source media="(min-width: 1400px)"
                            src="{{ asset('./img/gldn-XSX-CP-Xbox-Series-X380.webp') }}">
                        <source media="(min-width: 1084px)"
                            src="{{ asset('./img/gldn-XSX-CP-Xbox-Series-X297.webp') }}">
                        <source media="(min-width: 860px)"
                            src="{{ asset('./img/gldn-XSX-CP-Xbox-Series-X517.jpg') }}">
                        <source media="(min-width: 540px)"
                            src="{{ asset('./img/gldn-XSX-CP-Xbox-Series-X406.webp') }}">
                        <img src="{{ asset('./img/gldn-XSX-CP-Xbox-Series-X406.webp') }}" alt="">
                    </picture>
                    <div class="content">
                        <h2>Xbox Series X</h2>
                        <h5>有史以來最快、最強大的 Xbox。</h5>
                    </div>
                    <p>選購 Xbox Series X<i class="fa-solid fa-chevron-right"></i>
                    </p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('/img/Content-Card-Bing-AI-No-Text517.webp') }}" alt="">
                    <div class="content">
                        <h2>隆重推出新版 Bing</h2>
                        <h5>問真正的問題。 聊天和創作。 從您的 AI 網路副駕駛獲得更好的答案。</h5>
                    </div>
                    <p>了解新版 Bing<i class="fa-solid fa-chevron-right"></i>
                    </p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('./img/gldn-XGP-Game-Pass-Ultimate-Characters-06102010-1517.avif') }}"
                        alt="">
                    <div class="content">
                        <h2>Xbox Game Pass Ultimate</h2>
                        <h5>Xbox Live Gold 以及數百款高品質主機遊戲和電腦遊戲。 與好友同樂，並探索下一個最愛遊戲。</h5>
                    </div>
                    <p>立即加入<i class="fa-solid fa-chevron-right"></i>
                    </p>
                </a>
            </div>
            <div class="one-card">
                <a href="">
                    <img src="{{ asset('./img/gldn-CP-Windows11-GlobalLaunch517.avif') }}" alt="">
                    <div class="content">
                        <h2>專為今天和明天的生活而設計</h2>
                        <h5>新一代遊戲、 您的目標、 親朋好友。 Windows 11 是為了讓您更貼近所喜愛的一切。</h5>
                    </div>
                    <p>查看您的電腦是否準備就緒<i class="fa-solid fa-chevron-right"></i>
                    </p>
                </a>
            </div>
        </section>
        <section class="big-picture container-normal">
            <a href="">
                <div class="container">
                    <picture>
                        <source media="(min-width: 1400px)"
                            srcset="{{ asset('./img/gldn-MSFT-hero-Edge_VP5-1596x600.avif') }}">
                        <source media="(min-width: 1084px)"
                            srcset="{{ asset('./img/gldn-MSFT-hero-Edge_VP4-1260x600.avif') }}">
                        <source media="(min-width: 860px)"
                            srcset="{{ asset('./img/gldn-MSFT-hero-Edge_VP3-1083x600.avif') }}">
                        <source media="(min-width: 540px)"
                            srcset="{{ asset('./img/gldn-MSFT-hero-Edge_VP2-859x540.avif') }}">
                        <img src="{{ asset('./img/gldn-MSFT-hero-Edge_VP5-1596x600.avif') }}" alt="">
                    </picture>
                    <div class="download">
                        <h2>Microsoft Edge</h2>
                        <h5>在您瀏覽時提供世界級的效能，以及更多的隱私、更充足的生產力與更高的價值</h5>
                        <div>立即下載</div>
                    </div>
                </div>
            </a>
        </section>
        <h4>適用於商務</h4>
        <section class="four-card-2 container-normal">
            @foreach ($news as $item)
                <div class="one-card-2">
                    <a href="">
                        <img src="{{ $item->img_path }}" alt="">
                        <div class="content">
                            <h3>{{ $item->title }}</h3>
                            <h5>{{ $item->content }}</h5>
                        </div>
                        <p>立即選購<i class="fa-solid fa-chevron-right"></i>
                        </p>
                    </a>
                </div>
            @endforeach
            {{-- < <div class="one-card-2">
                <a href="">
                    <img src="{{ asset('./img/Content-Card-Microsoft-365-For-Business-Woman-Teams-Call 517.webp') }}"
                        alt="">
                    <div class="content">
                        <h3>免費試用 Microsoft 365</h3>
                        <h5>透過一個月免費試用的 Microsoft 365 商務標準版，跨裝置取得 Microsoft Teams、安全雲端儲存空間和進階應用程式。</h5>
                    </div>
                    <p>開始免費試用<i class="fa-solid fa-chevron-right"></i>
                    </p>
                </a>
                </div>
                <div class="one-card-2">
                    <a href="">
                        <img src="{{ asset('./img/JIC-DPS-CP01517.webp') }}" alt="">
                        <div class="content">
                            <h3>歡迎使用 Windows 365 雲端電腦</h3>
                            <h5>從 Microsoft 雲端安全地將您的 Windows 體驗串流到任何裝置。</h5>
                        </div>
                        <p>立即下載<i class="fa-solid fa-chevron-right"></i>
                        </p>
                    </a>
                </div>
                <div class="one-card-2">
                    <a href="">
                        <img src="{{ asset('./img/Content-Card-Windows-11-Business517.avif') }}" alt="">
                        <div class="content">
                            <h3>商務用 Windows 11</h3>
                            <h5> 專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。</h5>
                        </div>
                        <p>深入了解<i class="fa-solid fa-chevron-right"></i>
                        </p>
                    </a>
                </div> --}}
        </section>
        <div class="social-media container-normal">關注 Microsoft
            <a href="https://www.facebook.com/MicrosoftTaiwan/" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/user/MicrosoftTaiwan" target="_blank"><i
                    class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="first-page"><a href="#"><i class="fa-solid fa-arrow-up"></i>回到首頁</a></div>
    </main>
    <footer>
        <div class="container-full">
            <div class="footer-menu">
                <ul>
                    <p>最新動向</p>
                    <li>Microsoft 365</li>
                    <li>Surface Go</li>
                    <li>Surface Book 2</li>
                    <li>Surface Pro</li>
                    <li>Windows 11 應用程式</li>
                </ul>
                <ul>
                    <p>Microsoft Store</p>
                    <li>帳戶設定檔</li>
                    <li>下載中心</li>
                    <li>Microsoft Store 支援</li>
                    <li>退貨/退款</li>
                    <li>訂單追蹤</li>
                </ul>
                <ul>
                    <p>教育</p>
                    <li>Microsoft 教育</li>
                    <li>教育裝置</li>
                    <li>Microsoft Teams 教育版</li>
                    <li>Microsoft 365 教育版</li>
                    <li>Office 教育版</li>
                    <li>教育工作者訓練和發展</li>
                    <li>學生和家長優惠</li>
                    <li>Azure 學生版</li>
                </ul>
                <ul>
                    <p>商務</p>
                    <li>Microsoft Cloud</li>
                    <li>Microsoft 安全性</li>
                    <li>Azure</li>
                    <li>Dynamics 365</li>
                    <li>Microsoft 365</li>
                    <li>Microsoft Advertising</li>
                    <li>Microsoft 產業</li>
                    <li>Microsoft Teams</li>
                </ul>
                <ul>
                    <p>開發人員與 IT</p>
                    <li>開發人員中心</li>
                    <li>文件</li>
                    <li>Microsoft Learn</li>
                    <li>Microsoft 技術社群</li>
                    <li>Azure Marketplace</li>
                    <li>AppSource</li>
                    <li>Microsoft Power Platform</li>
                    <li>Visual Studio</li>
                </ul>
                <ul>
                    <p>公司</p>
                    <li>人才招募</li>
                    <li>公司新聞</li>
                    <li>Microsoft 隱私權</li>
                    <li>投資者</li>
                    <li>永續性</li>
                </ul>
            </div>
            <div class="footer-nav">
                <ul class="opt-L">
                    <ul class="lan">
                        <li><i class="fa-solid fa-earth-americas"></i>中文(台灣)</li>
                    </ul>
                    <ul class="secur">
                        <li>您的隱私選擇</li>
                    </ul>
                </ul>

                <ul class="opt">
                    <li>連絡 Microsoft</li>
                    <li>隱私權</li>
                    <li>使用規定</li>
                    <li>商標</li>
                    <li>有關我們的廣告訊息</li>
                    <li>Microsoft 2023</li>
                </ul>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            // 自動撥放
            autoplay: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                // 客製化的部分
                renderBullet: function(index, className) {
                    console.log(index, className);
                    if (index == 0) {
                        return `
                        <span class="stop"></span>
                        <span class="play"></span>
                        <span class="${className}"></span>`
                    } else {
                        return `<span class="${className}"></span>`;
                    }
                },
            },
        });

        stopBtn = document.querySelector('.stop')
        playBtn = document.querySelector('.play')
        stopBtn.addEventListener('click', () => {
            swiper.autoplay.stop();
            stopBtn.style.display = 'none';
            playBtn.style.display = 'block';
        })
        playBtn.addEventListener('click', () => {
            // js控制播放
            swiper.autoplay.start();
            stopBtn.style.display = 'block';
            playBtn.style.display = 'none';
        })
    </script>
</body>

</html>
