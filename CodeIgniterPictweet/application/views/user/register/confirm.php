<main>
    <section class="d-flex justify-content-center">
        <div class="auth-field">
            <h2 class="theme">入力内容確認</h2>
            <p>下記の入力内容で宜しければ登録するを押して下さい</p>
                <div class="auth-margin-email d-flex justify-content-between">
                    メールアドレス
                    <p><?php echo $email ?></p>
                    <input id="email"type="hidden">
                </div>
                <div class="auth-margin-password d-flex justify-content-between">
                    パスワード
                    <p><?php echo $password ?></p>
                    <input id="password" type="hidden"/>
                </div>
                <div class="auth-margin d-flex justify-content-center">
                    <button>登録する</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css"/>
    <script>
        var ui = new firebaseui.auth.AuthUI(firebase.auth());
    </script>
</main>