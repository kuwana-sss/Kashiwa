<?php $title= '商品詳細ページ1'; require 'header.php'; ?>

    <main>
        <div class="breadCrumbs">パンくずメニュー</div> <!-- パンくずメニュー-->
        <div class="loginInfo">ようこそ ゲスト様</div><!--ログイン情報php "ようこそ、ゲスト様"-->
        <div class="detailContainer">
            <p><img srcset="images/ccDonutsProductSP.png 400w, images/ccDonutsProductPC.png 1040w"></p>
            <div class="detail">
                <p class="detailName">CCドーナツ 当店オリジナル（5個入り）</p>
                <p class="detailText">
                    当店のオリジナル商品、CCドーナツは、
                    サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、
                    丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。
                    一口食べれば、口の中に広がる甘くて香ばしい香りと、
                    口どけの良い食感が感じられます。
                </p>
                <p class="price">税込  ￥1,500</p>
                <div class="inputArea">
                    <p><input type="text" name="count"> 個</p>
                    <button class="cartInsert">カートに入れる</button>
                    <button class="favorite"></button>
                </div>
            </div>
        </div><!--detailContainer-->
    </main>

<?php require 'footer.php'; ?>