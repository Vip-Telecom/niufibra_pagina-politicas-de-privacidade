<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

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

  .policy-text {
    color: var(--dark-gray);
    font-weight: 500;
    line-height: 1.7;
    margin-bottom: 34px;
  }

  .policy-text p {
    margin-top: 14px;
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

  .button-link {
    color: var(--white);
    text-decoration: none;
  }

  .button:hover {
    background-color: var(--dark-orange);
    cursor: pointer;
  }

  @media (min-width: 768px){
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
      max-width: 1140px;
      margin-left: auto;
      margin-right: auto;
    }

    .buttons-container {
      grid-template-columns: repeat(4, 1fr);
    }
  }

</style>

<div class="main">
  <div class="page-privacy-policy">
    <div class="policy-text">
      <p>
        A proteção à privacidade de Dados Pessoais é valor essencial para nós e por meio dessa Política de Privacidade explicamos como o GRUPO ALLOHA FIBRA, ou simplesmente ALLOHA, na qualidade de Controlador de Dados Pessoais, coleta, usa, compartilha ou de outra forma trata informações e Dados Pessoais de pessoas físicas, inclusive de clientes e de terceiros, para o desempenho de nossas atividades, incluindo pelos nossos Sites, Plataformas e Aplicativos. 
      </p>

      <p>
        O uso de sites, plataformas e aplicativos ALLOHA pressupõe a aceitação deste acordo de privacidade. A equipe da ALLOHA reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.  
      </p>

      <p>
        A garantia da confidencialidade dos dados pessoais dos usuários é importante para nós e tratada em concordância com a Lei nº 13.709/2018 (Lei Geral de Proteção de Dados Pessoais – LGPD). Aqui você também encontra informações sobre os seus direitos em relação aos seus Dados Pessoais, de acordo com a LGPD e demais legislações aplicáveis. 
      </p>
      
      <p>
        Todas as suas informações pessoais recolhidas, serão usadas para ajudar a tornar a sua visita em nossos sites, plataformas e aplicativos a mais produtiva e agradável possível. 
      </p>
    </div>

    <div class="buttons-container">
      <div class="button">
        <a
          target="_blank"
          class="button-link"
          href="https://canalconfidencial.com.br/lgpdalloha/"
        >
          Politica de privacidade
        </a>
      </div>

      <div class="button">
        <a
          target="_blank"
          class="button-link"
          href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/04/Politica-de-Seguranca-da-Informacao_Site-NIU_compressed.pdf"
        >
          Segurança da informação
        </a>
      </div>

      <div class="button">
        <a
          target="_blank"
          class="button-link"
          href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/04/2023.04.03-I-VIP-I-Termos-de-Uso-Site_compressed.pdf"
        >
          Termos de uso
        </a>
      </div>

      <div class="button">
        <a
          target="_blank"
          class="button-link"
          href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/04/2023.04.18-I-NIU-I-Politica-de-Cookies_compressed.pdf"
        >
          Politica de cookies
        </a>
      </div>

    </div>
  </div>
</div>
