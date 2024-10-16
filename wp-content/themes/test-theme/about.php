<section class="about-section" id="about">
  <div class="container-main">
    <div class="about-container">
      <div class="about-block-image" data-aos="fade-left">
      <picture>
    <source
        media="(min-width: 1280px)"
        srcset="<?php echo get_template_directory_uri(); ?>/img/about-desk@1x.jpg 1x, 
                <?php echo get_template_directory_uri(); ?>/img/about-desk@2x.jpg 2x"
    />
    <source
        media="(min-width: 768px)"
        srcset="<?php echo get_template_directory_uri(); ?>/img/about-desk@1x.jpg 1x, 
                <?php echo get_template_directory_uri(); ?>/img/about-desk@2x.jpg 2x"
    />
    <source
        media="(min-width: 320px)"
        srcset="<?php echo get_template_directory_uri(); ?>/img/aboutme_mob@1x.jpg 1x, 
                <?php echo get_template_directory_uri(); ?>/img/aboutme_mob@2x.jpg 2x"
    />
    <img
        src="<?php echo get_template_directory_uri(); ?>/img/aboutme_mob.jpg"
        alt="luiza_radecka_o_mnie"
        class="about-image"
        loading="lazy"
        width="325px"
        height="235px"
    />
</picture>

      </div>
      <div class="about-block-text">
        <h2 class="about-header">O mnie</h2>
        <ul class="about-list">
          <li class="about-list-item">
            <p class="about-paragraph">
              Nazywam się Luiza Radecka, i jestem doświadczonym podologiem oraz
              szkoleniowcem, który z pasją dzieli się wiedzą i umiejętnościami
              zdobytymi w trakcie wielu lat praktyki.
            </p>
          </li>
          <li class="about-list-item">
            <p class="about-paragraph">
              Moja pasja do podologii oraz wieloletnia praktyka w tym obszarze
              umożliwiają mi skuteczne dzielenie się wiedzą i doświadczeniem z
              innymi profesjonalistami.
            </p>
          </li>
        </ul>
        <div class="about-button-wrapper">
          <a class="about-button" href="">Przeczytaj więcej</a>
        </div>
      </div>
    </div>
  </div>
</section>