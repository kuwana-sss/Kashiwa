<?php $title= 'トップページ'; require 'header.php'; ?>

    <main>
        <div class="loginInfo" style="border-bottom: none;">ようこそ ゲスト様</div><!--ログイン情報php "ようこそ ゲスト様"-->
        <div class="hero"></div><!--ヒーロー画像-->
        <div class="mainContainer">
            <div class="newProduct">
                <p class="new">新商品</span>
                <p class="newText">サマーシトラス</p>
            </div>
            <div class="donutsLife">
                <p>ドーナツのある生活</p>
            </div>
        </div>
        <a href="product.php"><div class="productBenner"><p>商品一覧</p></div></a> <!--商品一覧-->
        <div class="shopImg">
            <h1>Philosophy</h1>
            <p>私たちの信念</p>

            <h3>"Creating Connections"</h3>
            <p>「ドーナツでつながる」</p>
        </div>
        <div class="ranking">
            <h2>人気ランキング</h2>
            <div class="wrapper">
                <a href="detail.php">
                <div>
                    <p class="rank" style="background-color:#FFD233">1</p>
                    <p><img srcset="images/ccDonutsSP.png 400w, images/ccDonutsPC.png 1040w"></p>
                    <p class="donutsName">CCドーナツ 当店オリジナル（5個入り）</p>
                    <p class="price">税込  ￥1,500</p>
                    <button class="cartInsert">カートに入れる</button>
                </div>
                </a>
                <a href="detail.php">
                <div>
                    <p class="rank" style="background-color:#CCCCCC">2</p>
                    <p><img srcset="images/fruitDonutsSet1SP.png 400w, images/fruitDonutsSet1PC.png 1040w"></p>
                    <p class="donutsName">フルーツドーナツセット（12個入り）</p>
                    <p class="price">税込  ￥3,500</p>
                    <button class="cartInsert">カートに入れる</button>
                </div>
                </a>
                <div>
                    <p class="rank" style="background-color:#D27C2C">3</p>
                    <p><img srcset="images/fruitDonutsSet2SP.png 400w, images/fruitDonutsSet2PC.png 1040w"></p>
                    <p class="donutsName">フルーツドーナツセット（14個入り）</p>
                    <p class="price">税込  ￥4,000</p>
                    <button class="cartInsert">カートに入れる</button>
                </div>
                <div>
                    <p class="rank" style="background-color:#E8C2CA">4</p>
                    <p><img srcset="images/chocolateDonutsSP.svg 400w, images/chocolateDonutsPC.svg 1040w"></p>
                    <p class="donutsName">チョコレートデライト（5個入り）</p>
                    <p class="price">税込  ￥1,600</p>
                    <button class="cartInsert">カートに入れる</button>
                </div>
                <div>
                    <p class="rank" style="background-color:#E8C2CA">5</p>
                    <p><img srcset="images/bestSelectSP.png 400w, images/bestSelectPC.png 1040w"></p>
                    <p class="donutsName">ベストセレクションボックス（4個入り）</p>
                    <p class="price">税込  ￥1,200</p>
                    <button class="cartInsert">カートに入れる</button>
                </div>
                <div>
                    <p class="rank" style="background-color:#E8C2CA">6</p>
                    <p><img srcset="images/strawberryDonutsSP.png 400w, images/strawberryDonutsPC.png 1040w"></p>
                    <p class="donutsName">ストロベリークラッシュ（5個入り）</p>
                    <p class="price">税込  ￥1,800</p>
                    <button class="cartInsert">カートに入れる</button>
                </div>
            </div><!--wrapper-->
        </div><!--ranking-->
    </main>

<?php require 'footer.php'; ?>