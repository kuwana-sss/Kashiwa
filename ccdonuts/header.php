<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                <p class="mainLogo"><img src="images/mainLogoSP.png" alt=""></p> <!-- ロゴ -->
                <div class="shopButton">
                    <p class="login"><a href="#"><img srcset="images/loginIconSP.png 400w, images/loginIconPC.png 1040w">
                    <p class="cart"><a href="#"><img srcset="images/cartIconSP.png 400w, images/cartIconPC.png 1040w">
                </div>
                
            </div>
            <div class="searchArea">
                <form action="" method="post">
                    <input type="text" name="product" placeholder="商品を検索">
                    <input type="submit" class="searchButton" value="">
                </form>
            <div>

        </div><!--headerContainer-->

        
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="scripts/drawer.js"></script>