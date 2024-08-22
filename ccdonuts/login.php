<?php $title= 'ログイン画面'; require 'header.php'; ?>

    <main>
        <div class="loginContainer">
            <h2>ログイン</h2>
            <div class="loginText">
                <label>
                    <p>メールアドレス</p>
                    <input type="text" name="mail">
                </label>
                <label>
                    <p>パスワード</p>
                    <input type="text" name="password">
                </label>
                <button class="subButton">ログインする</button>
            </div>
            <div class="subNavi">
                <a href="memberRegistration.php">会員登録はこちら</a>
            </div>
        </div>
    </main>

<?php require 'footer.php'; ?>