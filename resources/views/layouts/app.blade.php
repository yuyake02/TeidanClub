<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title>The Teidan Club</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    {{-- スマホ、タブレット対応 --}}
    <meta name="viewport" content="width=decice-width,intitial-scale=1" />
    {{-- サイトのアイコン指定 --}}
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    {{-- iphoneのアプリアイコン指定 --}}
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    {{-- jQueryの読み込み --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header class="header">
        <div class="header-container">
            <div class="navbar">
                <button class="menu-icon" id="menuIcon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                {{-- <ul class="menu" id="menu">
                    <li><a href="/">TOP</a></li>
                    <li><a href="#">BACK NUMBER</a></li>
                    <li><a href="#">ARTISTS</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">MY PEGE</a></li>
                </ul> --}}
            </div>
            <h1>The Teidan Club</h1>
        </div>
        <div class="submenu">
            <span><a href="#">Login</a></span>
            <span><a href="#">Subscribe</a></span>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <div class="endmenu">
                    <a href="/" class="logo">鼎談倶楽部</a>
                </div>
                <div class="link-menu">
                    <ul>
                        <li><a href="#">X</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
                <div class="link-menu">
                    <ul>
                        <li><a href="#">利用規約</a></li>
                        <li><a href="#">特定商取引法について</a></li>
                        <li><a href="#">プライバシーポリシー</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <small>Copyright © 2023 鼎談倶楽部 inc. All Rights Reserved.</small>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
