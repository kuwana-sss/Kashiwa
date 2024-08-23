<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <div class="headerContainer">
            <div class="headerTop">
                <button class="drawerButton"></button>
                <div class="drawerMenu">
                    <nav class="globalNav">
                        <ul>
                            <li class="top"><a href="index.php">TOP</a></li>
                            <li><a href="#">商品一覧</a></li>
                            <li><a href="#">よくある質問</a></li>
                            <li><a href="#">問い合わせ</a></li>
                            <li><a href="#">当サイトのポリシー</a></li>
                        </ul>
                    </nav>
                </div>
                <p class="mainLogo"><img srcset="images/mainLogoSP.svg 400w, images/mainLogoPC.svg 1040w" alt=""></p>
                <div class="shopButton">
                    <a href="login.php">
                        <div class="login">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <p>ログイン</p>
                            <!-- <i class="bi bi-box-arrow-in-left"><a href="#"></a></i> -->
                            <!-- ログイン後はログアウトボタンに切り替わるように -->
                        </div>
                    </a>
                    <a href="cart.php">
                        <div class="cart">
                            <i class="bi bi-cart3"></i>
                            <p>カート</p>
                        </div>
                    </a>
                </div>
            </div><!--headerTop-->
            <div class="searchArea">
                <form action="product.php" method="post">
                    <input type="text" name="keyword" placeholder="商品を検索">
                    <input type="submit" class="searchButton" value="">
                </form>
            <div>
        </div><!--headerContainer-->
    </header>