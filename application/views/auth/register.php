<main class="card">
    <section class="left">
        <img src="brand.png" alt="logo" class="img__logo" />
        <h3 class="title__login">Login</h3>
        <span class="subtitle">Payroll Application</span>
        <form class="inline">
            <section class="box__input">
                <label>Your Name</label>
                <input type="text" placeholder="YourName" />
            </section>
            <section class="box__input">
                <label>Email</label>
                <input type="text" placeholder="Email" />
            </section>
            <section class="pwd">
                <section class="box__input p1">
                    <label>Password</label>
                    <input type="password" placeholder="Password" />
                </section>
                <section class="box__input p2">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Password" />
                </section>
            </section>
        </form>
        <section class="control__access">
            <button type="submit">
                <a href="<?= base_url() ?>"></a>Register
            </button>
            <section class="cutoff">
                <span></span>
                <span>or</span>
                <span></span>
            </section>
            <button class="btn__register">
                <span class="btn__register--text">
                    <a href="<?= base_url() ?>">Login</a>
                </span>
            </button>
        </section>
    </section>
    <section class="right">
        <div class="background__img">
            <div class="desc__app">
                <div class="desc__app--in">
                    <span>Payroll application is an application that makes it easier for companies to manage
                        employee salaries.</span>
                </div>
            </div>
            <img src="bg-login.svg" alt="#">
        </div>
    </section>
</main>