<main>
    <section class="d-flex justify-content-center">
        <div class="auth-field">
            <h2 class="theme">新規登録</h2>
            <div class="error-messages">
            <?php 
                if (isset($message)) {
                    echo '<p class="alert alert-info">'.$message.'</p>';
                } elseif (isset($error)) {
                    echo '<p class="alert alert-danger"><strong>Error: </strong>'.$error.'</p>';
            }?>
            </div>
            <?php echo form_open('user/register/confirm') ?>
                <div class="auth-margin-email d-flex justify-content-between">
                    メールアドレス
                    <input type="mailAddress" name="email" value="<?php echo set_value('email') ?>">
                </div>
                <div class="error-messages">
                    <?php echo form_error('password') ?>
                </div>
                <div class="auth-margin-password d-flex justify-content-between">パスワード
                    <input type="password"  name="password" value="<?php echo set_value('password') ?>"/>
                </div>
                <div class="auth-margin d-flex justify-content-center">
                    <input type="submit" value="登録する"></input>
                </div>
            </form>
        </div>
    </section>
</main>

