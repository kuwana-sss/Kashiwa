<?php $title= '会員登録情報確認ページ'; require 'header.php'; ?>

    <main>
        <div class="memberConfirmContainer">
            <h2>入力確認</h2>
            <ul class="confirmationList">
                <li class="listTitle">お名前</li>
                <li class="inputContents"><span id="userName">test</span></li>

                <li class="listTitle">お名前（フリガナ）</li>
                <li class="inputContents"><span id="kanaName">test</span></li>

                <li class="listTitle">郵便番号</li>
                <li class="inputContents"><span id="postalCode">test</span></li>
                <!--javascriptでFrontとBackを連結して表示-->

                <li class="listTitle">住所</li>
                <li class="inputContents"><span id="address">test</span></li>

                <li class="listTitle">メールアドレス</li>
                <li class="inputContents"><span id="email">test</span></li>

                <li class="listTitle">メールアドレス確認用</li>
                <li class="inputContents"><span id="emailConfirm">test</span></li>

                <li class="listTitle">パスワード</li>
                <li class="inputContents"><span id="password">test</span></li>

                <li class="listTitle">パスワード確認用</li>
                <li class="inputContents"><span id="passwordConfirm">test</span></li>
            </ul>

            <button type="submit" class="subButton">登録する</button>

        </div><!--memberConfirmContainer-->
    </main>

<?php require 'footer.php'; ?>