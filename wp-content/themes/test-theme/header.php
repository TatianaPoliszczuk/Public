<header class="watch-charm" id="scroll-up">
  <div class="header-inner container">
    <a href="<?php echo site_url(); ?>" class="header-logo">
      <img
        src="<?php echo get_template_directory_uri(); ?>/img/base_logo_transparent_background.png"
        alt="LuizaRadecka Logo"
      />
    </a>
    <button type="button" class="burger-menu">
      <svg class="burger-menu_svg" width="28" height="14">
        <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-Vector"></use>
      </svg>
    </button>
    <nav class="header-nav">
      <ul class="header-nav-list">
        <li class="nav-list-item">
          <a href="<?php echo site_url('/'); ?>" class="nav-list_link nav-list_main-link">Strona główna</a>
        </li>
        <li class="nav-list-item">
          <a href="<?php echo site_url('o-nas'); ?>" class="nav-list_link nav-list_main-link">O mnie</a>
        </li>
        <li class="nav-list-item">
          <a href="<?php echo site_url('courses'); ?>" class="nav-list_link nav-list_main-link">Szkolenia</a>
        </li>
        <li class="nav-list-item">
          <a href="<?php echo site_url('shop'); ?>" class="nav-list_link nav-list_main-link">Sklep</a>
        </li>
        <li class="nav-list-item">
          <a href="<?php echo site_url('blog'); ?>" class="nav-list_link nav-list_main-link">Blog</a>
        </li>
        <li class="nav-list-item">
          <a href="<?php echo site_url('contact'); ?>" class="nav-list_link nav-list_main-link">Kontakt</a>
        </li>
      </ul>
    </nav>
    <address class="header-socials">
    <ul class="header-socials-list">
    <li class="socials-list-item">
        <a
            href="https://www.facebook.com/profile.php?id=61566403711708"
            class="socials-item-link"
            target="_blank"
        >
            <svg class="header-social__svg" width="20" height="20">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-facebook11"></use>
            </svg>
        </a>
    </li>
    <li class="socials-list-item">
        <a
            href="https://www.instagram.com/podolog__krakow/"
            class="socials-item-link"
            target="_blank"
        >
            <svg class="header-social__svg" width="20" height="20">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-instagram"></use>
            </svg>
        </a>
    </li>
    <li class="socials-list-item">
        <a
            href="https://www.youtube.com/"
            class="socials-item-link"
            target="_blank"
        >
            <svg class="header-social__svg" width="20" height="20">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-youtube12"></use>
            </svg>
        </a>
    </li>
</ul>

    </address>
  </div>

  <!-- mob-menu -->
  <div class="media-menu">
    <div class="media-menu-inner">
      <button class="close-menu" type="button">
      <svg class="close-menu_svg" width="34" height="34">
      <use href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-x"></use>
</svg>

      </button>

      <nav class="media-menu-nav">
      <ul class="media-nav-list">
    <li class="media-list-item">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="media-menu-link media-after">Strona główna</a>
    </li>
    <li class="media-list-item">
        <a href="#about" class="media-menu-link media-after for-close-1">O mnie</a>

    </li>
    <li class="media-list-item">
        <a href="#courses" class="media-menu-link media-after for-close-2">Szkolenia</a>
    </li>
    <li class="media-list-item">
        <a href="#shop" class="media-menu-link media-after for-close-3">Sklep</a>
    </li>
    <li class="media-list-item">
        <a href="#blog" class="media-menu-link media-after for-close-4">Blog</a>
    </li>
    <li class="media-list-item">
        <a href="#kontakt" class="media-menu-link media-after for-close-5">Kontakt</a>
    </li>
</ul>

      </nav>
      <address class="media-socials">
      <ul class="media-socials-list">
    <li class="media-socials-item">
        <a
            href="https://www.facebook.com/profile.php?id=61566403711708"
            class="media-socials-link"
            target="_blank"
        >
            <svg class="media-social__svg" width="18" height="18">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-facebook11"></use>
            </svg>
        </a>
    </li>
    <li class="media-socials-item">
        <a
            href="https://www.instagram.com/podolog__krakow/"
            class="media-socials-link"
            target="_blank"
        >
            <svg class="media-social__svg" width="18" height="18">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-instagram"></use>
            </svg>
        </a>
    </li>
    <li class="media-socials-item">
        <a
            href="https://www.youtube.com/"
            class="media-socials-link"
            target="_blank"
        >
            <svg class="media-social__svg" width="18" height="18">
                <use href="<?php echo get_template_directory_uri(); ?>/img/icons.svg#icon-youtube12"></use>
            </svg>
        </a>
    </li>
</ul>

      </address>
    </div>
  </div>

</header>
