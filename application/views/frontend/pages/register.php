<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
       <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
       <div class="container">
        <center>
            <div class="col-4">
                <div class="comment-form">
                    <img style="height: 5%" src="<?php echo base_url() ?>assets/image/co.png">
                    <h1>Register</h1>
                    <form action="<?php echo base_url() ?>register" method="post">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" id="username" placeholder="nama lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'nama lengkap'">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" id="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nomor" class="form-control" id="hp" placeholder="nomor handphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'nomor handphone'">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-10" rows="5" name="password" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required="">
                        </div>
                        <button type="submit" class="primary-btn button_hover">Register</button>   
                    </form>
                </div>
            </div>
        </center>
    </div>
</div>

</section>