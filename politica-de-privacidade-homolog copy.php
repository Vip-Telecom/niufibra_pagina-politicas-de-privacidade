<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

<style>
  :root {
    --dark-gray: #444;
    --dark-green: #005F32;
    --dark-orange: #e04c00;
    --gray: #b4b4b4;
    --green: #92F200;
    --light-orange: #F48120;
    --orange: #f60;
    --red-error: #700;
    --white: #fff;
  }

  .page-condominium {
    background-color: var(--white);
    border-bottom: 2px solid var(--green);
  }

  .page-condominium * {
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
  }

  .hero-container {
    background-color: var(--white);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 50px 10px;
    position: relative;
    width: 100%;
  }

  @media (min-width: 1023px) {
    .hero-container {
      padding: 56px 10px 110px;
    }
  }

  .hero-container_background {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
  }

  .hero-container_background--img {
    height: 100%;
    object-fit: cover;
    width: 100%;
  }

  .hero-container_content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    z-index: 2;
  }

  .hero-container_content-form {
    margin: 0 auto;
    width: 100%;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form {
      margin: 0;
      max-width: 496px;
    }
  }

  @media (min-width: 1023px) {
    .hero-container_content {
      align-items: flex-start;
      flex-direction: row;
      justify-content: space-between;
      margin: 0 auto;
      max-width: 1090px;
      width: 100%;
    }
  }

  .hero-container_content-promo {
    display: flex;
    justify-content: center;
    margin-bottom: 60px;
  }

  @media (min-width: 1023px) {
    .hero-container_content-promo {
      margin-bottom: 0;
    }
  }

  @media (min-width: 1023px) {
    .hero-container_content-promo--img {
      height: 560px;
      object-fit: cover;
      width: 100%;
    }
  }

  .hero-container_content-form-pre-form {
    margin: 0 auto 24px;
    max-width: 336px;
    width: 100%;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form-pre-form {
      max-width: none;
    }
  }

  .hero-container_content-form-pre-form--text {
    color: var(--white);
    font-size: 16px;
    font-weight: 700;
    line-height: 20px;
    text-align: center;
  }

  .hero-container_content-form-form {
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 16px;
    box-shadow: 0 4px 30px 5px rgba(0, 0, 0, 0.15);
    padding: 24px 16px 16px;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form-form {
      padding: 40px 24px 32px;
    }
  }

  .hero-container_content-form-header {
    display: flex;
    justify-content: center;
    margin-bottom: 24px;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form-header {
      margin-bottom: 40px;
    }
  }

  .hero-container_content-form-header--text {
    color: var(--white);
    font-size: 20px;
    font-weight: 700;
    line-height: 25px;
    margin-bottom: 0;
    text-align: center;
  }

  .hero-container_content-form-holder .wpforms-field-large.wpforms-field-required {
    background-color: var(--white) !important;
    border-radius: 8px !important;
    border: 1px solid var(--gray) !important;
    height: 32px !important;
    margin-bottom: 8px !important;
    padding: 8px 0 8px 8px !important;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form-holder .wpforms-field-large.wpforms-field-required {
      height: 40px !important;
    }
  }

  .hero-container_content-form-holder .wpforms-field-label {
    color: var(--white) !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 16px !important;
    margin-bottom: 4px !important;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form-holder .wpforms-field-label {
      font-size: 16px !important;
      line-height: 20px !important;
    }
  }

  .hero-container_content-form-holder .wpforms-container-full {
    margin: 0 !important;
  }

  .group-holder-2 {
    margin-bottom: 16px !important;
  }

  .group-holder-1,
  .group-holder-2 {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
  }

  .group-holder-1 > .wpforms-field-name {
    margin-right: 16px !important;
    width: 50% !important;
  }

  .group-holder-1 .wpforms-field-name + .wpforms-field-text {
    margin-right: 0 !important;
    width: 50% !important;
  }

  .hero-container_content-form-holder .wpforms-field {
    padding: 0 !important;
  }

  .group-holder-2 > .wpforms-field-text {
    margin-right: 16px !important;
    width: 60% !important;
  }

  .group-holder-2 .wpforms-field-text + .wpforms-field-text {
    margin-right: 0 !important;
    width: 40% !important;
  }

  .hero-container_content-form-holder .wpforms-submit-container {
    margin: 0 !important;
    padding: 0 !important;
  }

  .hero-container_content-form-holder .wpforms-submit {
    background-color: var(--orange) !important;
    border-radius: 8px !important;
    border: 0 !important;
    color: var(--white) !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    height: 40px !important;
    text-transform: uppercase !important;
    width: 100% !important;
  }

  @media (min-width: 1023px) {
    .hero-container_content-form-holder .wpforms-submit {
      font-size: 20px !important;
      height: 56px !important;
    }
  }

  .lines {
    display: flex;
    flex-direction: row;
    height: 16px;
    justify-content: center;
    margin: 0 auto 40px;
    width: 100%;
  }

  @media (min-width: 1023px) {
    .lines {
      margin-bottom: 112px;
    }
  }

  .lines .line {
    display: block;
    height: 16px;
    width: calc(100% / 3);
  }

  .lines .line:nth-child(1) {
    background-color: var(--green);
  }

  .lines .line:nth-child(2) {
    background-color: var(--orange);
  }

  .lines .line:nth-child(3) {
    background-color: var(--dark-green);
  }

  .features {
    padding: 0 40px;
  }

  .features_header--title {
    color: var(--light-orange);
    font-size: 28px;
    font-weight: 700;
    line-height: 35px;
    margin-bottom: 18px;
    text-align: center;
  }

  @media (min-width: 1023px) {
    .features_header--title {
      font-size: 48px;
      line-height: 60px;
      margin: 0 auto 24px;
      max-width: 852px;
    }
  }

  .features_header--text {
    color: var(--dark-gray);
    font-size: 16px;
    font-weight: 500;
    line-height: 20px;
    margin-bottom: 75px;
    text-align: center;
  }

  @media (min-width: 1023px) {
    .features_header--text {
      font-size: 20px;
      line-height: 35px;
      margin: 0 auto 63px;
      max-width: 852px;
    }
  }

  .features_list-items {
    display: grid;
    grid-gap: 24px;
    grid-template-columns: 1fr;
    margin: 0 auto 100px;
    max-width: 290px;
  }

  @media (min-width: 1023px) {
    .features_list-items {
      grid-gap: 95px 150px;
      grid-template-columns: 1fr 1fr;
      margin-bottom: 115px;
      max-width: 852px;
    }
  }

  .features_list-items-item {
    align-items: center;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    margin-bottom: 60px;
  }

  @media (min-width: 1023px) {
    .features_list-items-item {
      margin-bottom: 0;
    }
  }

  .features_list-items-item:last-child {
    margin-bottom: 0;
  }

  .features_list-items-item-icon {
    margin-right: 20px;
    min-height: 57px;
    min-width: 57px;
  }

  @media (min-width: 1023px) {
    .features_list-items-item-icon {
      margin-right: 28px;
      min-height: 78px height="57" width="57";
      min-width: 78px;
    }
  }

  .features_list-items-item-icon--img {
    height: 100%;
    object-fit: contain;
    width: 100%;
  }

  .features_list-items-item-content--title {
    color: var(--dark-gray);
    font-size: 23px;
    font-weight: 700;
    line-height: 28px;
  }

  @media (min-width: 1023px) {
    .features_list-items-item-content--title {
      max-width: 200px;
    }
  }

  .features_list-cta {
    margin-bottom: 80px;
    text-align: center;
  }

  @media (min-width: 1023px) {
    .features_list-cta {
      margin-bottom: 200px;
    }
  }

  .features_list-cta-button--link {
    background-color: var(--orange);
    border-radius: 48px;
    color: var(--white);
    cursor: pointer;
    display: block;
    font-size: 14px;
    font-weight: 700;
    height: 48px;
    margin: 0 auto;
    max-width: 280px;
    padding: 15px 13px 15px 37px;
    position: relative;
    text-align: center;
    text-transform: uppercase;
    width: 100%;
  }

  @media (min-width: 1023px) {
    .features_list-cta-button--link {
      font-size: 22px;
      height: 72px;
      max-width: 570px;
      padding: 21px 72px 21px 120px;
    }
  }

  .features_list-cta-button--link:before {
    background-image: url('<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/fale-com-o-nosso-especialista.svg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    content: '';
    display: block;
    height: 15px;
    left: 13px;
    position: absolute;
    top: calc(50% - 7.5px);
    width: 16px;
  }

  @media (min-width: 1023px) {
    .features_list-cta-button--link:before {
      height: 30px;
      left: 72px;
      top: calc(50% - 15px);
      width: 32px;
    }
  }

  .features_list-cta-button--link:hover {
    background-color: var(--dark-orange);
    color: var(--white);
  }

  .wpforms-error {
    font-weight: 700;
    color: var(--red-error);
  }
</style>

<div class="page-condominium">
  <div class="hero-container">
    <div class="hero-container_background">
      <picture>
        <source media="(min-width: 768px)" srcSet="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/background-desktop.jpg" />
        <img class="hero-container_background--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/background-mobile.jpg" alt="Fundo">
      </picture>
    </div>
    <div class="hero-container_content">
      <div class="hero-container_content-promo">
        <picture>
          <source media="(min-width: 768px)" srcSet="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/promo-desktop.png" />
          <img class="hero-container_content-promo--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/promo-mobile.png" alt="Promoção">
        </picture>
      </div>

      <div id="condominio-formulario" class="hero-container_content-form">
        <div class="hero-container_content-form-pre-form">
          <h2 class="hero-container_content-form-pre-form--text">Se você ainda não tem internet da Niu no seu condomínio, preencha o cadastro e solicite uma visita técnica.</h2>
        </div>

        <div class="hero-container_content-form-form">
          <div class="hero-container_content-form-header">
            <h3 class="hero-container_content-form-header--text">Preencha os dados do seu condomínio:</h3>
          </div>

          <div class="hero-container_content-form-holder">
            <?php echo do_shortcode('[wpforms id="1145"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="lines">
    <span class="line -dark-green"></span>
    <span class="line -green"></span>
    <span class="line -orange"></span>
  </div>


  <div class="features">
    <div class="features_header">
      <h2 class="features_header--title">Você tem muitos motivos para ter NIU em seu condomínio</h2>
      <p class="features_header--text">A internet para condomínio é uma excelente opção para ter acessos às comodidades que só a fibra óptica pode oferecer, a custos reduzido e com atendimento personalizado para moradores.</p>
    </div>

    <div class="features_list">
      <div class="features_list-items">
        <div class="features_list-items-item">
          <div class="features_list-items-item-icon">
            <img class="features_list-items-item-icon--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/instalacao-gratuita.svg" alt="Instalação gratuita" loading="lazy" height="57" width="57">
          </div>

          <div class="features_list-items-item-content">
            <h3 class="features_list-items-item-content--title">Instalação gratuita</h3>
          </div>
        </div>

        <div class="features_list-items-item">
          <div class="features_list-items-item-icon">
            <img class="features_list-items-item-icon--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/atendimento-de-qualidade.svg" alt="Atendimento de qualidade" loading="lazy" height="57" width="57">
          </div>

          <div class="features_list-items-item-content">
            <h3 class="features_list-items-item-content--title">Atendimento de qualidade</h3>
          </div>
        </div>

        <div class="features_list-items-item">
          <div class="features_list-items-item-icon">
            <img class="features_list-items-item-icon--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/wi-fi-5g.svg" alt="Wi-Fi 5G" loading="lazy" height="57" width="57">
          </div>

          <div class="features_list-items-item-content">
            <h3 class="features_list-items-item-content--title">Wi-Fi 5G</h3>
          </div>
        </div>

        <div class="features_list-items-item">
          <div class="features_list-items-item-icon">
            <img class="features_list-items-item-icon--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/atendimento-24-horas.svg" alt="Atendimento 24 horas" loading="lazy" height="57" width="57">
          </div>

          <div class="features_list-items-item-content">
            <h3 class="features_list-items-item-content--title">Atendimento 24 horas</h3>
          </div>
        </div>

        <div class="features_list-items-item">
          <div class="features_list-items-item-icon">
            <img class="features_list-items-item-icon--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/seguranca.svg" alt="Segurança" loading="lazy" height="57" width="57">
          </div>

          <div class="features_list-items-item-content">
            <h3 class="features_list-items-item-content--title">Segurança</h3>
          </div>
        </div>

        <div class="features_list-items-item">
          <div class="features_list-items-item-icon">
            <img class="features_list-items-item-icon--img" src="<?php bloginfo('url'); ?>/wp-content/themes/niufibrabynuit/img/core-img/excelente-cobertura-de-sinal.svg" alt="Excelente cobertura de sinal" loading="lazy" height="57" width="57">
          </div>

          <div class="features_list-items-item-content">
            <h3 class="features_list-items-item-content--title">Excelente cobertura de sinal</h3>
          </div>
        </div>
      </div>

      <div class="features_list-cta">
        <div class="features_list-cta-button">
          <a class="features_list-cta-button--link" href="#condominio-formulario">Fale com o nosso especialista</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const createNewLayoutToForm = () => {
    const formHolder = document.querySelector('.wpforms-field-container')

    if (!formHolder) return

    const groups = {
      holders: [
        formHolder.children[0],
        formHolder.children[3],
      ],
      st: [
        formHolder.children[1],
        formHolder.children[2],
      ],
      nd: [
        formHolder.children[4],
        formHolder.children[5],
      ],
    }

    const createHolder = (holderGroup, whichHolderIndex) => {
      const newDiv = document.createElement('div')

      newDiv.classList
        .add(`group-holder-${whichHolderIndex}`)

      holderGroup.parentNode
        .insertBefore(newDiv, holderGroup.nextSibling)
    }

    const updateForm = (group, holderClass, whichGroupIndex) => {
      const updateGroup = (item) => {
        document
          .querySelector(holderClass)
          .appendChild(item)
      }

      Array.from(group).forEach(updateGroup)
    }

    createHolder(groups.holders[0], 1)
    createHolder(groups.holders[1], 2)

    updateForm(groups.st, '.group-holder-1', 0)
    updateForm(groups.nd, '.group-holder-2', 1)
  }

  let intervalCheckSuccessMessage = null

  const changeSuccessMessage = () => {
    const INTERVAL = 100

    clearInterval(intervalCheckSuccessMessage)

    intervalCheckSuccessMessage = setInterval(() => {
      const currentSuccessMessage = document.querySelector('.wpforms-confirmation-container-full')

      if (!currentSuccessMessage) return

      currentSuccessMessage.innerHTML = '<p class="success-message">Sua mensagem foi enviada com sucesso!</p>'
      clearInterval(intervalCheckSuccessMessage)
    }, INTERVAL)
  }

  const scrollFromElementToElementOnClick = (fromElement, toElement) => {
    const button = document.querySelector(fromElement)
    const element = document.querySelector(toElement)

    if (!button && !element) return

    const scrollTo = (e) => {
      e.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      })
    }

    button.addEventListener('click', () => {
      scrollTo(element)
    })
  }

  const init = () => {
    // Add holders to fields
    createNewLayoutToForm()

    // Change success message
    document
      .querySelector('#wpforms-submit-1145')
      .addEventListener('click', changeSuccessMessage)

    // Scroll to form
    scrollFromElementToElementOnClick(
      '.features_list-cta-button--link',
      '#condominio-formulario',
    )
  }

  init()
</script>
