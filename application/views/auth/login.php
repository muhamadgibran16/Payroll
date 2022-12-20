<main class="box">
    <section class="left">
        <img src="<?= base_url('assets/')?>images/brand/logo-light.png" alt="logo" class="img__logo" />
        <h3 class="title__login">Login</h3>
        <span class="subtitle">Payroll Application</span>
        <?= $this->session->flashdata('pesan'); ?>
        <form class="user" method="POST" action="<?= base_url('auth') ?>">
            <section class="box__input form-group">
                <label>Username</label>
                <input type="text" placeholder="Email" name="email" />
                <?= form_error('email','<div class="text-small text-danger">','</div>') ;?>
            </section>
            <section class="box__input form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" />
                <?= form_error('password','<div class="text-small text-danger">','</div>') ;?>
            </section>

            <section class="control__access">
                <button type="submit">Login</button>
            </section>
        </form>

    </section>
    <section class="right">
        <div class="background__img">
            <div class="desc__app">
                <div class="desc__app--in">
                    <span>Payroll application is an application that makes it easier for companies to manage
                        employee salaries.</span>
                </div>
            </div>
            <img src="<?= base_url('assets/')?>images/bg-login.svg" alt="#">
        </div>
    </section>
</main>