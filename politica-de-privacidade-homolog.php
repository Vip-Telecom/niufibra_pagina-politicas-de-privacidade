<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

<style>
  :root {
    --dark-gray: #303030;
    --dark-orange: #e04c00;
    --orange: #f60;
    --green: #92F200;
    --white: #fff;
  }

  .main {
    border-bottom: 2px solid var(--green);
  }

  .page-privacy-policy {
    display: flex;
    justify-content: center;
    flex-direction: column;
    font-family: 'Quicksand', sans-serif;
    padding: 50px 10px;
  }

  .section-heading h2:after {
    top: 115%;
  }

  .policy-text {
    color: var(--dark-gray);
    font-weight: 500;
    line-height: 1.7;
    margin-bottom: 34px;
  }

  .policy-text p {
    margin-top: 14px;
  }

  .policy-text p a {
    color: var(--dark-gray);
    text-decoration: underline;
  }

  .buttons-container {
    display: grid;
  }

  .button {
    align-items: center;
    background-color: var(--orange);
    border-radius: 50px;
    color: var(--white);
    display: flex;
    font-weight: bold;
    justify-content: center;
    margin-bottom: 20px;
    padding: 12px 24px;
    text-align: center;
    text-transform: uppercase;
    transition: ease-in-out 500ms all;
  }

  .button a,
  .button a:hover,
  .button a:active,
  .button a:focus {
    color: var(--white);
  }

  .button:hover {
    background-color: var(--dark-orange);
    cursor: pointer;
  }

  @media (min-width: 768px) {
    .buttons-container {
      grid-template-columns: repeat(2, 1fr)
    }

    .button {
      margin: 20px 8px;
      margin-top: 0;
    }
  }

  @media (min-width: 1440px) {
    .page-privacy-policy {
      max-width: 1170px;
      margin-left: auto;
      margin-right: auto;
    }

    .buttons-container {
      grid-template-columns: repeat(5, 1fr);
    }
  }
</style>

<div class="main">
  <div class="page-privacy-policy">
    <div class="policy-text">
      <div class="section-heading text-center">
        <h2>Políticas de Privacidade</h2>
      </div>

      <p>
        Aqui no Polo VIP (VIP/LIGUE/NIU), a Privacidade e a Proteção de Dados dos nossos clientes é uma prioridade.
      </p>

      <p>
        Por este motivo e por observância à Lei Geral de Proteção de Dados – Lei n° 13.709/2018 (LGPD), compartilhamos nesta página as nossas <strong>Pítica de Privacidade, Política de Segurança da Informação</strong> e de <strong>Política de Cookies</strong>, bem como nossos <strong>Termos de Uso</strong> do aplicativo, para assegurar a total transparência sobre como coletamos, armazenamos e usamos as informações pessoais contidas em nossos bancos de dados.
      </p>

      <p>
        Dessa maneira, ao acessar nossas plataformas ou ao utilizar nossos serviços, você está sujeito à nossas Políticas de Privacidade.
      </p>

      <p>
        Em caso de dúvidas ou solicitação de direitos do titular, pedimos por gentileza que entre em contato conosco por meio do
        <a class="text-link" href="https://canalconfidencial.com.br/lgpdalloha/" target="_blank">Portal de Privacidade</a>.
      </p>
    </div>

    <div class="buttons-container">
      <div class="button">
        <a target="_blank" href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/06/politica-de-privacidade-1683637517958-Politicas-de-Privacidade.pdf">
          Política de Privacidade
        </a>
      </div>

      <div class="button">
        <a target="_blank" href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/06/termos-de-uso-1683639804690-Politicas-de-Privacidade.pdf">
          Termos de Uso
        </a>
      </div>

      <div class="button">
        <a target="_blank" href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/06/Politica-de-Seguranca-da-Informacao_Site-NIU.pdf">
          Segurança da Informação
        </a>
      </div>

      <div class="button">
        <a target="_blank" href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/06/2023.05.05-I-NIU-I-Politica-de-Cookies.pdf">
          Política de Cookies
        </a>
      </div>

      <div class="button">
        <a target="_blank" href=" https://canalconfidencial.com.br/lgpdalloha/">
          Portal de Privacidade
        </a>
      </div>
    </div>
  </div>
</div>
