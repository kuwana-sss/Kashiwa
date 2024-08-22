<?php $title= 'クレジットカード情報登録ページ'; require 'header.php'; ?>

    <main>
        <div class="cardContainer">
            <h2>カード情報登録</h2>
            <div class="cardRegistrationForm">
                <form action="php" method="post">
                    <label for="userName">お名前 <span class="required">(必須)</span></label><br>
                    <input id="userName" type="text" name="userName" placeholder="ドーナツ太郎">

                    <label for="cardNumber">カード番号 <span class="required">(必須)</span></label><br>
                    <input id="cardNumber" type="text" name="cardNumber" placeholder="123456789123">

                    <label>カード会社 <span class="required">(必須)</span></label><br>
                    <div class="radioGroup">
                        <label for="jcb"><input type="radio" id="jcb" name="creditCardType" value="JCB" checked>JCB</label>
                        <label for="visa"><input type="radio" id="visa" name="creditCardType" value="Visa">Visa</label>
                        <label for="mastercard"><input type="radio" id="mastercard" name="creditCardType" value="MasterCard">MasterCard</label>
                    </div>
                    
                    <label for="effectiveDateMonth">有効期限 <span class="required">(必須)</span></label><br>
                    <input id="effectiveDateMonth" type="text" name="effectiveDateMonth" placeholder="" style="width:60px;"><span class="date">月</span><br>
                    <input id="effectiveDateYear" type="text" name="effectiveDateYear" placeholder="" style="width:60px;"><span class="date">年</span><br>

                    <label for="securityCode">セキュリティコード <span class="required">(必須)</span></label><br>
                    <input id="securityCode" type="text" name="securityCode" placeholder="">
                    
                    <button type="submit" class="subButton">入力確認する</button>

                </form>
            </div>
        </div><!--cardContainer-->
    </main>

<?php require 'footer.php'; ?>