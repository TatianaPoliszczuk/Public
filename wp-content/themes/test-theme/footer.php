<footer class="end-page" id="scroll-footer">
  <div class="footer-container container">
    <div class="footer-content">
      <div class="footer-row">
        <div class="footer-logo-link">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-footer">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt="LuizaRadecka Logo" />
</a>

          <ul class="footer-socials-list">
    <li class="footer-socials">
        <a
            href="https://www.facebook.com/luiza.radecka.1"
            class="footer-social-link"
            target="_blank"
        >
            <svg class="footer-social-icon" width="18" height="18">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-facebook11" />
            </svg>
        </a>
    </li>
    <li class="footer-socials">
        <a
            href="https://www.instagram.com/podolog__krakow/"
            class="footer-social-link"
            target="_blank"
        >
            <svg class="footer-social-icon" width="18" height="18">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-instagram" />
            </svg>
        </a>
    </li>
    <li class="footer-socials">
        <a
            href="https://www.youtube.com/"
            class="footer-social-link"
            target="_blank"
        >
            <svg class="footer-social-icon" width="18" height="18">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-youtube12" />
            </svg>
        </a>
    </li>
</ul>

        </div>
        <a class="footer-phone-number" href="tel:+48508350406">+48508350406</a>
      </div>
      <!-- <p class="footer-large-text">
        Have the time of your life with our watches: where high-class
        craftsmanship meets impeccable design
      </p> -->
      <div class="footer-nav-container">
        <ul class="footer-nav-list">
          <li class="footer-nav-icon">
            <a class="footer-nav-link" href="./index.html">Strona główna</a>
          </li>
          <li class="footer-nav-icon">
            <a href="#about" class="footer-nav-link">O mnie</a>
          </li>
          <li class="footer-nav-icon">
            <a href="#courses" class="footer-nav-link">Szkolenia</a>
          </li>
          <li class="footer-nav-icon">
            <a href="#shop" class="footer-nav-link">Sklep</a>
          </li>
          <li class="footer-nav-icon">
            <a href="#treatments" class="footer-nav-link">Zabiegi</a>
          </li>
          <li class="footer-nav-icon">
            <a href="#contact" class="footer-nav-link">Kontakt</a>
          </li>
        </ul>
        <!-- <p class="footer-adress">1678 S. Pionee Road Salt Lake City UT 84104</p> -->
      </div>
      <div class="footer-down-content">
        <p>&#169;2024 Luiza Radecka Podolog</p>
        <!-- <a class="confidential-link" href="#">Terms of Service</a>
        <a href="#">Privacy Policy</a> -->
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>
  </body>
</html>