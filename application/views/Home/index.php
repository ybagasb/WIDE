<!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 align-self-center">
          <div class="header-text">
            <h6>Welcome to</h6>
            <h2>WISATA KOTA<br><em>DEPOK</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Telusuri</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="right-image">
            <img src="<?php echo base_url('assets/images/depokmap-drible_4x-removebg-preview-removebg-preview.png')?>" style="top:-40px; left: -25px; width: 700px;" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h4>Wisata Yang Ada di <em>Kota Depok</em></h4>
            <p class="h6">Anda akan mendapatkan informasi yang ada di tempat wisata tersebut</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Waterpark Ceria</span></div>
                    <div class="gradient-border"><span>Taman Balaikota Depok</span></div>
                    <div class="gradient-border"><span>Pemancingan Kabeda</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url('assets/images/waterpark.jpg')?>" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Waterpark Ceria</h4>
                          <p>Waterpark Ceria atau Kolam Renang Ceria, salah satu kolam renang yang ada di Depok.
                          Waterpark Ceria berada di alamat Jl. K.H.M. Usman No. 110, Raya Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat. Kolam Renang Ceria Depok buka setiap hari Senin hingga Minggu, mulai pukul 07.00 hingga 17.00 waktu setempat. Harga tiket masuk Waterpark Ceria yakni: <br> Senin sampai Jumat sebesar Rp. 35.000,- per orang <br> Sabtu, Minggu sebesar Rp. 40.000,- per orang
                          </p>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Komentar</th>
                                <th>Rating</th>
                            </thead>
                            <tbody>
                              <?php
                              $nomor = 1;
                              foreach ($list_komentar as $obj) {
                              ?>
                                <tr>
                                  <td><?= $obj->isi?></td>
                                  <td><?= $obj->nilai_rating_id?></td>
                                </tr>
                              <?php
                                $nomor++;
                              } ?>
                            </tbody>
                          </table>
                          <a href="<?php echo base_url('index.php/login')?>"><h6>Klik Untuk Berkomentar</h6></a>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url('assets/images/taman.jpg')?>" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Taman Balaikota Depok</h4>
                          <p>Taman Balaikota Depok berada tepat di depan Kantor Wali Kota Depok, di Jalan Margonda Raya. Taman berada di sisi depan gedung Balai Kota dan berdampingan dengan Masjid Balai Kota Depok.
                          Taman berada di sisi depan gedung Balai Kota dan berdampingan dengan Masjid Balai Kota Depok.</p>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Komentar</th>
                                <th>Rating</th>
                            </thead>
                            <tbody>
                              <?php
                              $nomor = 1;
                              foreach ($list_komentar as $obj) {
                              ?>
                                <tr>
                                  <td><?= $obj->isi?></td>
                                  <td><?= $obj->nilai_rating_id?></td>
                                </tr>
                              <?php
                                $nomor++;
                              } ?>
                            </tbody>
                          </table>
                          <a href="<?php echo base_url('index.php/login')?>"><h6>Klik Untuk Berkomentar</h6></a>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo base_url('assets/images/pemancingan.jpg')?>" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Pemancingan Kabeda</h4>
                          <p>Pemancingan Kabeda adalah kawasan ekowisata yang berada di Jalan KH Usman Kukusan, Depok, Jawa Barat. Tidak hanya menyajikan suasana tenang dan asri, tetapi juga ringan di kantong. Tarif untuk mancing harian ikan mas disebutkannya hanya sebesar Rp 100.000 per lapak di kolam besar, Rp 50.000 per lapak di kolam kecil dan Rp 250.000 per orang saat lomba galatama.</p>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Komentar</th>
                                <th>Rating</th>
                            </thead>
                            <tbody>
                              <?php
                              $nomor = 1;
                              foreach ($list_komentar as $obj) {
                              ?>
                                <tr>
                                  <td><?= $obj->isi?></td>
                                  <td><?= $obj->nilai_rating_id?></td>
                                </tr>
                              <?php
                                $nomor++;
                              } ?>
                            </tbody>
                          </table>
                          <a href="<?php echo base_url('index.php/login')?>"><h6>Klik Untuk Berkomentar</h6></a>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          	<!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253763.0610843002!2d106.67771073030977!3d-6.387829614855901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95620a297d3%3A0x1cfd4042316fb217!2sKota%20Depok%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1657150611989!5m2!1sid!2sid"width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>010-020-0340</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>090-080-0760</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contact us</h6>
                  <h4><em>Hello</em></h4>
                  <p>Jika ada yang ingin ditanyakan, hubungi kami dibawah ini.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Nama Lengkap" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Pesan"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Kirim</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved. 
          
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?php echo base_url('assets/js/isotope.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl-carousel.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lightbox.js')?>"></script>
    <script src="<?php echo base_url('assets/js/tabs.js')?>"></script>
    <script src="<?php echo base_url('assets/js/video.js')?>"></script>
    <script src="<?php echo base_url('assets/js/slick-slider.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>