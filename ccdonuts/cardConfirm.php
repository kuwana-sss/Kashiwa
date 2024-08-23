<?php $title= 'クレジットカード情報確認ページ'; require 'header.php'; ?>

    <main>
        <div class="cardConfirmContainer">
            <h2>入力情報確認</h2>
            <ul class="confirmationList">
                <li class="listTitle">お名前</li>
                <li class="inputContents"><span id="userName">test</span></li>

                <li class="listTitle">カード番号</li>
                <li class="inputContents"><span id="cardNumber">test</span></li>

                <li class="listTitle">カード会社</li>
                <li class="inputContents"><span id="creditCardType">test</span></li>
                <!-- 選択したカード会社を定数creditCardTypeに代入?-->

                <li class="listTitle">有効期限</li>
                <li class="inputContents"><span class="dateText" id="effectiveDateMonth">test</span><p class="date">月</p></li>
                <li class="inputContents"><span class="dateText" id="effectiveDateYear">test</span><p class="date">年</p></li>

                <li class="listTitle">セキュリティコード</li>
                <li class="inputContents"><span id="securityCode">test</span></li>
            </ul>

            <button type="submit" class="subButton">登録する</button>

        </div>
    </main>

<?php require 'footer.php'; ?>