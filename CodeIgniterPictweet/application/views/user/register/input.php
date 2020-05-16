<main>
    <section class="d-flex justify-content-center">
        <div class="auth-field">
            <div class="auth-margin-email d-flex justify-content-between">
                メールアドレス
                <input id="mailAddress" type="mailAddress" required/>
            </div>
            <div class="auth-margin-password d-flex justify-content-between">パスワード
                <input id="password" type="password" required/>
            </div>
            <div class="auth-margin-social d-flex justify-content-between">
                <button id="twitter" class="twitter-button">Twitter</button>
                <button id="facebook" class="facebook-button">Facebook</button>
            </div>

            <div class="auth-margin d-flex justify-content-between">
                <button id="login">ログイン</button>
                <button id="register">新規登録</button>
            </div>

        </div>
    </section>
    <script src="/public/js/authFirebase.js"></script>
</main>

