<?php session_start(); ?>
<?php $title= '会員登録ページ'; require 'header.php'; ?>
<?php
    $name=$furigana=$postcode_a=$postcode_b
    =$address=$mail=$password='';
    if (isset($_SESSION['customer'])) {
        $name=$SESSION['customer']['namme'];
        $furigana=$SESSION['customer']['furigana'];
        $postcode_a=$SESSION['customer']['postcode_a'];
        $postcode_b=$SESSION['customer']['postcode_b'];
        $address=$SESSION['customer']['address'];
        $mail=$SESSION['customer']['mail'];
        $password=$SESSION['customer']['password'];
    }
?>

    <main>
        <div class="memberContainer">
            <h2>会員登録</h2>
            <div class="registrationForm">
                <form action="memberConfirm.php" method="post">
                    <label>お名前 <span class="required">(必須)</span></label><br>
                    <input id="userName" type="text" name="userName" placeholder="ドーナツ太郎">

                    <label>お名前(フリガナ) <span class="required">(必須)</span></label><br>
                    <input id="kanaName" type="text" name="kanaName" placeholder="ドーナツタロウ">

                    <label>郵便番号 <span class="required">(必須)</span></label><br>
                    <input id="postalCodeFront" type="text" name="postalCodeFront" placeholder="123" style="width:60px;">
                    <input id="postalCodeBack" type="text" name="postalCodeBack" placeholder="4567" style="width:100px;"><br>

                    <label>住所 <span class="required">(必須)</span></label><br>
                    <input id="address" type="text" name="address" placeholder="千葉県〇〇市中央1-1-1">

                    <label>メールアドレス <span class="required">(必須)</span></label><br>
                    <input id="email" type="text" name="email" placeholder="123@gmail.com">

                    <label>メールアドレス確認用 <span class="required">(必須)</span></label><br>
                    <input id="emailConfirm" type="text" name="emailConfirm" placeholder="123@gmail.com">

                    <label>パスワード <span class="required">(必須)</span></label><br>
                    <p style="font-size:8px; color:#FF0000; margin:0 0 8px 0;">
                        半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません
                    </p>
                    <input id="password" type="text" name="password" placeholder="123456abcd">
                    
                    <label>パスワード確認用 <span class="required">(必須)</span></label><br>
                    <input id="passwordConfirm" type="text" name="passwordConfirm" placeholder="123456abcd">
                    
                    <input type="submit" class="subButton" value="入力確認する" style="width:165px;">

                </form>
            </div>
        </div><!--memberContainer-->
    </main>

<?php require 'footer.php'; ?>