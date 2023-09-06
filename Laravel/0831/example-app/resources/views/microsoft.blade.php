<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/仿切微軟.css" />
    @vite('resources/css/app.css')
  </head>

  <body>
    <div class="nav">
      <div class="nav-container">
        <div class="logo"></div>
        <ul id="nav-left">
          <a href="https://www.microsoft.com/zh-tw/microsoft-365?rtc=1">
            <li>Microsoft 365</li>
          </a>
          <a
            href="https://www.microsoft.com/zh-tw/microsoft-teams/group-chat-software?rtc=1"
          >
            <li>Teams</li>
          </a>
          <a href="https://www.microsoft.com/en-us/windows?wa=wsignin1.0">
            <li>Windows</li>
          </a>
          <a href="https://www.microsoft.com/en-us/surface">
            <li>Surface</li>
          </a>
          <a href="">
            <li>Xbox</li>
          </a>
          <a href="">
            <li>支援</li>
          </a>
        </ul>

        <input type="checkbox" id="menu" hidden />
        <label for="menu" class="menu-list">
          <span
            >所有 Microsoft <img src="./img/chevron-down-solid.svg" alt=""
          /></span>
        </label>

        <label for="menu" class="ham-menu" hidden>
          <div id="line-1" class="line"></div>
          <div id="line-2" class="line"></div>
          <div id="line-3" class="line"></div>
        </label>
        <div class="menubox-all">
          <div class="choice">Microsoft 365</div>
          <div class="choice">Teams</div>
          <div class="choice">Windows</div>
          <div class="choice">Surface</div>
          <div class="choice">Xbox</div>
          <div class="choice">支援</div>
          <div class="choice">
            <input type="checkbox" id="button-menu-1" hidden />
            <label for="button-menu-1">
              <div>軟體</div>
              <div class="button">
                <img src="./img/chevron-up-solid.svg" alt="" />
                <img src="./img/chevron-down-solid.svg" alt="" />
              </div>
            </label>
            <li>Windows 應用程式</li>
            <li>AI</li>
            <li>OneDrive</li>
            <li>Outlook</li>
            <li>Skype</li>
            <li>OneNote</li>
            <li>Microsoft Teams</li>
          </div>
          <div class="choice">
            <input type="checkbox" id="button-menu-2" hidden />
            <label for="button-menu-2">
              <div>個人電腦和設備</div>
              <div class="button">
                <img src="./img/chevron-up-solid.svg" alt="" />
                <img src="./img/chevron-down-solid.svg" alt="" />
              </div>
            </label>
            <li>選購 Xbox</li>
            <li>電腦配件</li>
          </div>
          <div class="choice">
            <input type="checkbox" id="button-menu-3" hidden />
            <label for="button-menu-3">
              <div>娛樂</div>
              <div class="button">
                <img src="./img/chevron-up-solid.svg" alt="" />
                <img src="./img/chevron-down-solid.svg" alt="" />
              </div>
            </label>
            <li>Xbox Game Pass Ultimate</li>
            <li>Xbox Live Gold</li>
            <li>Xbox 與遊戲</li>
            <li>電腦遊戲</li>
            <li>Windows 遊戲</li>
          </div>
          <div class="choice">
            <input type="checkbox" id="button-menu-4" hidden />
            <label for="button-menu-4">
              <div>商務適用</div>
              <div class="button">
                <img src="./img/chevron-up-solid.svg" alt="" />
                <img src="./img/chevron-down-solid.svg" alt="" />
              </div>
            </label>
            <li>Microsoft Cloud</li>
            <li>Microsoft 安全性</li>
            <li>Azure</li>
            <li>Dynamics 365</li>
            <li>商務用 Microsoft 365</li>
            <li>Microsoft 產業</li>
            <li>Microsoft Power Platform</li>
            <li>Windows 365</li>
          </div>
          <div class="choice">
            <input type="checkbox" id="button-menu-5" hidden />
            <label for="button-menu-5">
              <div>開發人員與 IT</div>
              <div class="button">
                <img src="./img/chevron-up-solid.svg" alt="" />
                <img src="./img/chevron-down-solid.svg" alt="" />
              </div>
            </label>
            <li>開發人員中心</li>
            <li>文件</li>
            <li>Microsoft Learn</li>
            <li>Microsoft 技術社群</li>
            <li>Azure Marketplace</li>
            <li>AppSource</li>
            <li>Visual Studio</li>
          </div>
          <div class="choice">
            <input type="checkbox" id="button-menu-6" hidden />
            <label for="button-menu-6">
              <div>其他</div>
              <div class="button">
                <img src="./img/chevron-up-solid.svg" alt="" />
                <img src="./img/chevron-down-solid.svg" alt="" />
              </div>
            </label>
            <li>Microsoft Rewards</li>
            <li>免費下載與安全性</li>
            <li>教育</li>
            <li>禮品卡</li>
            <li>Licensing</li>
          </div>
          <div id="menu-map">
            <a href="https://www.microsoft.com/zh-tw/sitemap.aspx"
              >檢視網站地圖<span>></span></a
            >
          </div>
        </div>

        <ul id="nav-right">
          <a>
            <li>
              <span>搜尋</span><i class="fa-solid fa-magnifying-glass"></i>
            </li>
          </a>
          <a href="">
            <li>
              <span>購物車</span><i class="fa-solid fa-cart-shopping"></i>
            </li>
          </a>
          <a
            href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=15&ct=1689247711&rver=7.3.6960.0&wp=MBI_SSL&wreply=https%3a%2f%2fwww.microsoft.com%2frpsauth%2fv1%2faccount%2fSignInCallback%3fstate%3deyJSdSI6Imh0dHBzOi8vd3d3Lm1pY3Jvc29mdC5jb20vemgtdHc_bGM9MTAyOCIsIkxjIjoiMTAyOCIsIkhvc3QiOiJ3d3cubWljcm9zb2Z0LmNvbSJ9&lc=1028&id=74335&aadredir=0"
          >
            <li><span>登入</span><i class="fa-solid fa-user"></i></li>
          </a>
        </ul>
      </div>
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div id="swiper-1" class="swiper-slide">
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="
                ./img/first/Highlight-Surface-Pro-9-M1-Family-02-1_VP5-1920x600.avif
              "
            />
            <source
              media="(min-width: 1084px)"
              srcset="
                ./img/first/Highlight-Surface-Pro-9-M1-Family-02-1_VP4-1399x600.avif
              "
            />
            <source
              media="(min-width: 860px)"
              srcset="
                ./img/first/Highlight-Surface-Pro-9-M1-Family-02-1_VP3-1083x600.avif
              "
            />
            <source
              media="(min-width: 540px)"
              srcset="
                ./img/first/Highlight-Surface-Pro-9-M1-Family-02-1_VP2-859x540.avif
              "
            />
            <img
              src="./img/first/Highlight-Surface-Pro-9-M1-Family-02-1_VP2-859x540.avif"
            />
            <div class="banner-3-paste">
              <a
                href="https://www.microsoft.com/zh-tw/surface/devices/surface-pro-9?icid=mscom_marcom_H1a_SurfacePro9&FY23FallSurface&activetab=pivot:%E6%A6%82%E8%A7%80tab"
              >
                <div id="banner-2-title">
                  <h2 id="banner-3-h2"></h2>
                  Surface Pro 9
                </div>
                <div>
                  <p>
                    平板電腦的彈性和筆記型電腦的效能 —
                    全都在一台攜帶超方便的裝置
                  </p>
                </div>
                <div id="banner-3-button">深入了解</div>
              </a>
            </div>
          </picture>
        </div>

        <div id="swiper-2" class="swiper-slide">
          <picture>
            <source
              media="(min-width: 1400px)"
              srcset="
                ./img/second/Highlight-M365-Icon-Bounce-Word-Merch_VP5-1920x600.avif
              "
            />
            <source
              media="(min-width: 1084px)"
              srcset="
                ./img/second/Highlight-M365-Icon-Bounce-Word-Merch_VP4-1399x600.avif
              "
            />
            <source
              media="(min-width: 860px)"
              srcset="
                ./img/second/Highlight-M365-Icon-Bounce-Word-Merch_VP3-1083x600.avif
              "
            />
            <source
              media="(min-width: 540px)"
              srcset="
                ./img/second/Highlight-M365-Icon-Bounce-Word-Merch_VP2-859x540.avif
              "
            />
            <img
              src="./img/second/Highlight-M365-Icon-Bounce-Word-Merch_VP2-859x540.avif"
            />
            <div class="banner-3-paste">
              <a
                href="https://www.microsoft.com/zh-tw/microsoft-365/p/microsoft-365-personal/cfq7ttc0k5bf?icid=mscom_marcom_H2a_M365Personal&activetab=pivot:%E6%A6%82%E8%A7%80tab"
              >
                <div id="banner-2-title">
                  <h2 id="banner-3-h2">Microsoft 365</h2>
                </div>
                <div>
                  <p>
                    使用 Microsoft 365
                    應用程式實現創意想法、提高線上和離線安全，並專注於最重要的事。
                  </p>
                </div>
                <div id="banner-3-button">適合 1 人使用</div>
                <div>最多可供 6 人使用</div>
              </a>
            </div>
          </picture>
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
    </div>

    <div class="main-choice">
      <div>
        <a
          class="one-choice"
          id="one-choice-1"
          href="https://www.microsoft.com/zh-tw/microsoft-365/buy/compare-all-microsoft-365-products?icid=MSCOM_QL_M365"
        >
          <div id="main-choice-img-1"></div>
          <div>選擇您的Microsoft 365</div>
        </a>
      </div>
      <div>
        <a
          class="one-choice"
          href="https://www.microsoft.com/zh-tw/surface?icid=MSCOM_QL_Surface"
        >
          <div id="main-choice-img-2"></div>
          <div>選購Surface裝置</div>
        </a>
      </div>
      <div>
        <a
          class="one-choice"
          href="https://www.microsoft.com/zh-tw/windows/get-windows-11?icid=MSCOM_QL_Windows"
        >
          <div id="main-choice-img-3"></div>
          <div>取得Windows11</div>
        </a>
      </div>
    </div>

    <div class="section-2">
      <div class="banner-2-pic">
        <a
          href="https://www.xbox.com/zh-tw/consoles/xbox-series-x?icid=mscom_marcom_CPH1a_XboxSeriesX"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="./img/four-card/min-1400px/1.webp"
            />
            <source
              media="(min-width: 1084px)"
              srcset="./img/four-card/min-1084px/1.webp"
            />
            <source
              media="(min-width: 860px)"
              srcset="./img/four-card/min-860px/1.jpg"
            />
            <source
              media="(min-width: 540px)"
              srcset="./img/four-card/min-540px/1.webp"
            />
            <img src="./img/four-card/min-540px/1.webp" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">Xbox Series X</h3>
          </div>
          <div>
            <p>有史以來最快、最強大的 Xbox。</p>
          </div>
          <div>
            <div>Xbox Series X</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>

      <div class="banner-2-pic">
        <a href="https://www.bing.com/new?icid=mscom_marcom_CPH2a_BingAI>">
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="./img/four-card/min-1400px/2.webp"
            />
            <source
              media="(min-width: 1084px)"
              srcset="./img/four-card/min-1084px/2.webp"
            />
            <source
              media="(min-width: 860px)"
              srcset="./img/four-card/min-860px/2.webp"
            />
            <source
              media="(min-width: 540px)"
              srcset="./img/four-card/min-540px/2.webp"
            />
            <img src="./img/four-card/min-540px/2.webp" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">隆重推出新版Bing</h3>
          </div>
          <div>
            <p>問真正的問題。聊天和創作。從您的AI網路副駕駛獲得更好的答案。</p>
          </div>
          <div>
            <div>了解新版Bing</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>
      <div class="banner-2-pic">
        <a
          href="https://www.xbox.com/zh-tw/games/store/xbox-game-pass-ultimate/cfq7ttc0khs0?icid=mscom_marcom_CPH3a_GamePassUltimate"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="./img/four-card/min-1400px/3.avif"
            />
            <source
              media="(min-width: 1084px)"
              srcset="./img/four-card/min-1084px/3.avif"
            />
            <source
              media="(min-width: 860px)"
              srcset="./img/four-card/min-860px/3.avif"
            />
            <source
              media="(min-width: 540px)"
              srcset="./img/four-card/min-540px/3.avif"
            />
            <img src="./img/four-card/min-540px/3.avif" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">Xbox Game Pass Ultimate</h3>
          </div>
          <div>
            <p>
              Xbox Live Gold 以及數百款高品質主機遊戲和電腦遊戲。
              與好友同樂，並探索下一個最愛遊戲。
            </p>
          </div>
          <div>
            <div>立即加入</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>
      <div class="banner-2-pic">
        <a
          href="https://www.microsoft.com/zh-tw/windows/windows-11?icid=mscom_marcom_CPH4a_Win11PChlth#pchealthcheck"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="./img/four-card/min-1400px/4.jpg"
            />
            <source
              media="(min-width: 1084px)"
              srcset="./img/four-card/min-1084px/4.jpg"
            />
            <source
              media="(min-width: 860px)"
              srcset="./img/four-card/min-860px/4.avif"
            />
            <source
              media="(min-width: 540px)"
              srcset="./img/four-card/min-540px/4.jpg"
            />
            <img src="./img/four-card/min-540px/4.jpg" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">專為今天和明天的生活而設計</h3>
          </div>
          <div>
            <p>
              新一代遊戲、 您的目標、 親朋好友。 Windows 11
              是為了讓您更貼近所喜愛的一切。
            </p>
          </div>
          <div>
            <div>查看您的電腦是否準備就緒</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>
    </div>

    <div class="section-3">
      <picture>
        <source
          media="(min-width: 1400px)"
          class="aa"
          srcset="./img/section-3/minW-1400.avif"
        />
        <source
          media="(min-width: 1084px)"
          srcset="./img/section-3/minW-1084.avif"
        />
        <source
          media="(min-width: 860px)"
          srcset="./img/section-3/minW-860.avif"
        />
        <source
          media="(min-width: 540px)"
          srcset="./img/section-3/minW-540.avif"
        />
        <img src="./img/section-3/minW-540.avif" />
      </picture>

      <div class="banner-3-paste">
        <a href="https://www.microsoft.com/zh-tw/edge?form=MI13F3&OCID=MI13F3">
          <div id="banner-2-title">
            <h2 id="banner-3-h2">Microsoft Edge</h2>
          </div>
          <div>
            <p>
              在您瀏覽時提供世界級的效能，以及更多的隱私、更充足的生產力與更高的價值
            </p>
          </div>
          <div id="banner-3-button">立即下載</div>
        </a>
      </div>
    </div>

    <div id="banner-4-h2">
      <h2>適用於商務</h2>
    </div>
    <div class="section-2">
      <div class="banner-2-pic">
        <a
          href="https://www.microsoft.com/zh-tw/surface/business?icid=mscom_marcom_CPW1a_SurfaceforBusiness"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="./img/section-4/minW-1400/1.avif"
            />
            <source
              media="(min-width: 1084px)"
              srcset="./img/section-4/minW-1084/1.avif"
            />
            <source
              media="(min-width: 860px)"
              srcset="./img/section-4/minW-860/1.jpg"
            />
            <source
              media="(min-width: 540px)"
              srcset="./img/section-4/minW-560/1.avif"
            />
            <img src="./img/section-4/minW-560/1.avif" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">適用於商務的Surface</h3>
          </div>
          <div>
            <p>無論從事哪種工作，都有一款有助於成功的Surface。</p>
          </div>
          <div>
            <div>立即選購</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>

      <div class="banner-2-pic">
        <a
          href="https://www.microsoft.com/zh-tw/microsoft-365/business/compare-all-microsoft-365-business-products?icid=mscom_marcom_CPW2a_M365forBusiness&activetab=tab%3aprimaryr2>"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              srcset="./img/section-4/minW-1400/2.webp"
            />
            <source
              media="(min-width: 1084px)"
              srcset="./img/section-4/minW-1084/2.webp"
            />
            <source
              media="(min-width: 860px)"
              srcset="./img/section-4/minW-860/2.webp"
            />
            <source
              media="(min-width: 540px)"
              srcset="./img/section-4/minW-560/2.webp"
            />
            <img src="./img/section-4/minW-560/2.webp" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">免費試用Microsoft 365</h3>
          </div>
          <div>
            <p>
              透過一個月免費試用的 Microsoft 365 商務標準版，跨裝置取得
              Microsoft Teams、安全雲端儲存空間和進階應用程式。
            </p>
          </div>
          <div>
            <div>開始免費試用</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>
      <div class="banner-2-pic">
        <a
          href="https://www.microsoft.com/zh-tw/windows-365?icid=mscom_marcom_CPW3a_Windows365"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              src="./img/section-4/minW-1400/3.webp"
            />
            <source
              media="(min-width: 1084px)"
              src="./img/section-4/minW-1084/3.webp"
            />
            <source
              media="(min-width: 860px)"
              src="./img/section-4/minW-860/3.webp"
            />
            <source
              media="(min-width: 540px)"
              src="./img/section-4/minW-560/3.webp"
            />
            <img src="./img/section-4/minW-560/3.webp" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">歡迎使用 Windows 365 雲端電腦</h3>
          </div>
          <div>
            <p>從 Microsoft 雲端安全地將您的 Windows 體驗串流到任何裝置。</p>
          </div>
          <div>
            <div>立即下載</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>

      <div class="banner-2-pic">
        <a
          href="https://www.microsoft.com/zh-tw/windows/business?icid=mscom_marcom_CPW4a_Windows11forBusiness"
        >
          <picture>
            <source
              media="(min-width: 1400px)"
              class="aa"
              src="./img/section-4/minW-1400/4.jpg"
            />
            <source
              media="(min-width: 1084px)"
              src="./img/section-4/minW-1084/4.jpg"
            />
            <source
              media="(min-width: 860px)"
              src="./img/section-4/minW-860/4.avif"
            />
            <source
              media="(min-width: 540px)"
              src="./img/section-4/minW-560/4.jpg"
            />
            <img src="./img/section-4/minW-560/4.jpg" />
          </picture>
          <div id="banner-2-title">
            <h3 id="banner-2-h3">商務用 Windows 11</h3>
          </div>
          <div>
            <p>
              專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。
              為所有人帶來安全性。
            </p>
          </div>
          <div>
            <div>深入了解</div>
            <div id="arrow">></div>
          </div>
        </a>
      </div>
    </div>

    <div class="section-5">
      <div>關注Microsoft</div>
      <a href="https://www.facebook.com/MicrosoftTaiwan/" target="_blank"
        ><img src="./img/section-5/Facebook 2x.avif"
      /></a>
      <a href="https://www.youtube.com/user/MicrosoftTaiwan" target="_blank"
        ><img src="./img/section-5/YouTube 2x.webp"
      /></a>
    </div>

    <a href="#">
      <div class="to-home">
        <div><span>↑</span>回到頁首</div>
      </div>
    </a>

    <div class="footer">
      <div class="footer-container">
        <div class="footer-little">
          <ul>
            最新動向
            <li>Microsoft 365</li>
            <li>Surface Go</li>
            <li>Surface Book 2</li>
            <li>Surface Pro</li>
            <li>Windows 11 應用程式</li>
          </ul>
        </div>
        <div class="footer-little">
          <ul>
            Microsoft Store
            <li>帳戶設定檔</li>
            <li>下載中心</li>
            <li>Microsoft Store 支援</li>
            <li>退貨/退款</li>
            <li>訂單追蹤</li>
          </ul>
        </div>
        <div class="footer-little">
          <ul>
            教育
            <li>Microsoft 教育</li>
            <li>教育裝置</li>
            <li>Microsoft Teams 教育版</li>
            <li>Microsoft 365 教育版</li>
            <li>Office 教育版</li>
            <li>教育工作者訓練和發展</li>
            <li>學生和家長優惠</li>
            <li>Azure 學生版</li>
          </ul>
        </div>
        <div class="footer-little">
          <ul>
            商務
            <li>Microsoft Cloud</li>
            <li>Microsoft 安全性</li>
            <li>Azure</li>
            <li>Dynamics 365</li>
            <li>Microsoft 365</li>
            <li>Microsoft Advertising</li>
            <li>Microsoft 產業</li>
            <li>Microsoft Teams</li>
          </ul>
        </div>
        <div class="footer-little">
          <ul>
            開發人員與 IT
            <li>開發人員中心</li>
            <li>文件</li>
            <li>Microsoft Learn</li>
            <li>Microsoft 技術社群</li>
            <li>Azure Marketplace</li>
            <li>AppSource</li>
            <li>Microsoft Power Platform</li>
            <li>Visual Studio</li>
          </ul>
        </div>
        <div class="footer-little">
          <ul>
            公司
            <li>人才招募</li>
            <li>公司新聞</li>
            <li>Microsoft 隱私權</li>
            <li>投資者</li>
            <li>永續性</li>
          </ul>
        </div>
      </div>
      <div class="base">
        <a href="">
          <div class="language">
            <i class="fa-solid fa-earth-americas"></i>(中文)台灣
          </div>
        </a>
        <a href="">
          <div class="private">
            <img src="./img/footer/privacy.jpg" /><span>您的隱私選擇</span>
          </div>
        </a>
        <div class="footer-nav">
          <ul>
            <a href="">
              <li>連絡 Microsoft</li>
            </a>
            <a href="">
              <li>隱私權</li>
            </a>
            <a href="">
              <li>使用規定</li>
            </a>
            <a href="">
              <li>商標</li>
            </a>
            <a href="">
              <li>有關我們的廣告訊息</li>
            </a>
            <li>© Microsoft 2023</li>
          </ul>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            console.log(index, className);
            if (index == 0) {
              return `
                        <span class="stop"></span>
                        <span class="play"></span>
                        <span class="${className}"></span>`;
            } else {
              return `<span class="${className}"></span>`;
            }
          },
        },
      });

      stopBtn = document.querySelector(".stop");
      playBtn = document.querySelector(".play");
      stopBtn.addEventListener("click", () => {
        swiper.autoplay.stop();
        stopBtn.style.display = "none";
        playBtn.style.display = "block";
      });
      playBtn.addEventListener("click", () => {
        swiper.autoplay.start();
        stopBtn.style.display = "block";
        playBtn.style.display = "none";
      });
    </script>
  </body>
</html>
