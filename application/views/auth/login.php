<div class="login-pag-inner">
    <div class="animatedParent animateOnce z-index-50">
        <div class="login-container animated growIn slower">
            <!-- <div class="login-branding">
                PERFORMANCE RECORD
            </div> -->
            <br><br>
            <br><br>
            <div class="login-content">
                <h1 class="text-center"> PERFORMANCE RECORD </h1>
                <hr>
                <!-- <h2><strong>Welcome</strong>, please login</h2> -->
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger text-center">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                <?php endif ?>
                <form method="post" action="<?= site_url('login') ?>">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                         <div class="checkbox checkbox-replace">
                            <input type="checkbox" id="remeber">
                            <label for="remeber">Remeber me</label>
                          </div>
                     </div> -->
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
