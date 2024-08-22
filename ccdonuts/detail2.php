<?php $title= '商品詳細ページ2'; require 'header.php'; ?>

    <main>
        <div class="breadCrumbs">パンくずメニュー</div> <!-- パンくずメニュー-->
        <div class="loginInfo">ようこそ ゲスト様</div><!--ログイン情報php "ようこそ、ゲスト様"-->
        <div class="detailContainer">
            <p><img srcset="images/fruitDonutsSet1ProductSP.svg 400w, images/fruitDonutsSet1ProductPC.svg 1040w"></p>
            <div class="detail">
                <p class="detailName">フルーツドーナツセット（12個入り）</p>
                <p class="detailText">
                    新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。
                    このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。
                    口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。
                    色鮮やかな見た目も魅力の一つです。
                </p>
                <p class="price">税込  ￥3,500</p>
                <div class="inputArea">
                    <p><input type="text" name="count"> 個</p>
                    <button class="cartInsert">カートに入れる</button>
                    <button class="favorite"></button>
                </div>
            </div>
        </div><!--detailContainer-->
    </main>

<?php require 'footer.php'; ?>