<section class="contact" id="contact">
  <div class="container">
    <h2 class="contact-title" id="contactus">Kontakt</h2>
    <div class="contact-wrapper">
      <div class="modal">
        <p class="contact-modal-text">
          Użyj poniższego formularza, aby się z nami skontaktować. Wpisz swoje
          imię i nazwisko, adres e-mail, telefon i wiadomość, a my wkrótce się z
          Tobą skontaktujemy.
        </p>
        <form class="modal-contact">
          <div class="modal-contact-form">
            <label class="modal-label visually-hidden" for="name">Name</label>
            <input
              class="modal-input"
              id="name"
              type="text"
              placeholder="Imię i nazwisko"
              required
              size="45"
              pattern="[A-Za-z]{2,15}"
              title="Name"
            />
          </div>
          <div class="modal-contact-form">
            <label class="modal-label visually-hidden" for="email"
              >E-mail</label
            >
            <input
              class="modal-input"
              id="email"
              type="email"
              placeholder="Email"
              pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})"
              title="Email"
              required
            />
          </div>
          <div class="modal-contact-form">
            <label class="modal-label visually-hidden" for="phone"
              >Phone number</label
            >
            <input
              class="modal-input"
              id="phone"
              type="tel"
              placeholder="+48"
              pattern="^\+\d{3}-\d{2}-\d{3}-\d{2}-\d{2}$"
              title="Phone"
              required
            />
          </div>
          <div class="modal-contact-comment">
            <label for="user-comment" class="modal-label visually-hidden"
              >Comment</label
            >
            <textarea
              name="user-comment"
              id="user-comment"
              class="modal-text"
              placeholder="Komentarz"
            ></textarea>
          </div>
          <button class="modal-button" type="submit">Wyślij wiadomość</button>
        </form>
      </div>
      <div class="contact-main-picture">
      <picture>
  <source
  media="(min-width: 1280px)"
    srcset="
      <?php echo get_template_directory_uri(); ?>/img/contact_desk@1x.jpg 1x,
      <?php echo get_template_directory_uri(); ?>/img/contact_desk@2x.jpg 2x
    "
    
   
  />
  <source
  media="(min-width: 768px)"
    srcset="
      <?php echo get_template_directory_uri(); ?>/img/contact_desk@1x.jpg 1x,
      <?php echo get_template_directory_uri(); ?>/img/contact_desk@2x.jpg 2x
    "
    
    
  />
  <source
   media="(max-width: 767px)"
    srcset="
      <?php echo get_template_directory_uri(); ?>/img/contact_mob@1x.jpg 1x,
      <?php echo get_template_directory_uri(); ?>/img/contact_mob@2x.jpg 2x
    "
    media="(max-width: 767px)"
    
  />
  <img
    src="<?php echo get_template_directory_uri(); ?>/img/contact_mob.jpg"
    alt="luiza_kontakt"
    class="contact-img"
    width="320px"
    height="235px"
    loading="lazy"
  />
</picture>

      </div>
    </div>
  </div>
</section>