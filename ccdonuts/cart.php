<?php $title= 'カート画面'; require 'header.php'; ?>

    <main>
        <div class="cartContainer">
            <div class="total">
                <p>現在　商品2点</p>
                <p>ご注文小計：税込<span class="price">¥5,000</span></p>
                <button class="buyConfirmation">購入確認へ進む</button>
            </div>
            <div class="insertProduct"><!--1点目-->
                <p><img src="images/ccDonutsProductSP.png"></p>
                <div class="cartDetail">
                    <p class="donutsName">CCドーナツ 当店オリジナル（5個入り）</p>
                    <div class="priceArea">
                        <div>
                            <p class="price">税込  ￥1,500</p>
                        </div>
                        <div class="calculation">
                            <p>数量<input type="text" name="count">個</p>
                            <button class="recalculate">再計算</button>
                            <p class="cartDelete"><a href="">削除する</a></p> <!--テキストp299-->
                        </div>
                    </div>
                </div>
            </div><!--1点目-->
            <div class="insertProduct"><!--2点目-->
                <p><img src="images/fruitDonutsSet1ProductSP.svg"></p>
                <div class="cartDetail">
                    <p class="donutsName">フルーツドーナツセット（12個入り）</p>
                    <div class="priceArea">
                        <div>
                            <p class="price">税込  ￥3,500</p>
                        </div>
                        <div class="calculation">
                            <p>数量<input type="text" name="count">個</p>
                            <button class="recalculate">再計算</button>
                            <p class="cartDelete"><a href="">削除する</a></p>
                        </div>
                    </div>
                </div>
            </div><!--2点目-->
            <div class="total"><!--再表示-->
                <p>現在　商品2点</p>
                <p>ご注文小計：税込<span class="price">¥5,000</span></p>
                <button class="buyConfirmation">購入確認へ進む</button>
            </div>
            <button class="continue">買い物を続ける</button>
        </div><!--cartContainer-->
    </main>

<?php require 'footer.php'; ?>