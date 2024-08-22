<?php $title= '購入確認（最終確認）ページ'; require 'header.php'; ?>

    <main>
        <div class="orderListContainer">
            <h2>ご購入確認</h2>

            <h5>ご購入商品</h5>
            <div class="orderItem">
                <ul class="entry">
                    <li>商品名</li>
                    <li>数量</li>
                    <li>金額</li>
                </ul>
                <ul class="orderDetail">
                    <li>CCドーナツ 当店オリジナル（5個入り）</li>
                    <li>1個</li>
                    <li>税込  ￥1,500</li>
                </ul>
            </div><!--orderItem-->
            <div class="orderItem">
                <ul class="entry">
                    <li>商品名</li>
                    <li>数量</li>
                    <li>金額</li>
                </ul>
                <ul class="orderDetail">
                    <li>フルーツドーナツセット（12個入り）</li>
                    <li>1個</li>
                    <li>税込  ￥3,500</li>
                </ul>
            </div><!--orderItem-->

            <div class="orderTotal">
                <ul class="totalEntry">
                    <li>合計数量</li>
                    <li>合計金額</li>
                </ul>
                <ul class="totalDetail">
                    <li>2個</li>
                    <li>税込  ￥5,000</li>
                </ul>
            </div>

            <h5>お届け先</h5>
            
            <div class="deliveryAddress">
                <ul class="entry">
                    <li>お名前</li>
                    <li>郵便番号</li>
                    <li>住所</li>
                </ul>
                <ul class="userInfomation">
                    <li>ドーナツ太郎</li>
                    <li>123-4567</li>
                    <li>千葉県〇〇市中央1-1-1</li>
                </ul>
            </div>

            <h5>お支払い方法</h5>

            <div class="paymentMethod">
                <ul class="entry">
                    <li>お支払い</li>
                    <li>ブランド</li>
                </ul>
                <ul class="method">
                    <li>クレジットカード</li>
                    <li>JCB</li>
                </ul>
            </div>

            <button type="submit" class="subButton">購入を確定する</button>

        </div><!--orderConfirmContainer-->
    </main>

<?php require 'footer.php'; ?>