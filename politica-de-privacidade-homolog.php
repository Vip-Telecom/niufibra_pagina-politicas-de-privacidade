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
          Seguindo todas as regras de confidencialidade da Lei Geral de Proteção de Dados – n° 13.709/2018 – compartilhamos aqui nossa Política de Privacidade, para assegurar a total transparência sobre como coletamos, armazenamos e usamos as informações pessoais contidas em nossos bancos de dados.
        </p>
  
        <p>
          Ao utilizar sites e aplicativos NIU, você aceita este acordo de privacidade.
        </p>
  
        <p>
          Mas não se preocupe, todas as informações pessoais recolhidas são usadas para aprimorar a experiência do usuário em nossas plataformas.
        </p>
        
        <p>
          E para estar sempre atualizado sobre os seus direitos em relação aos seus dados pessoais, recomendamos a consulta regular da nossa Política de Privacidade, que pode ser alterada sem aviso prévio.
        </p>
      </div>
  
      <div class="buttons-container">
        <div class="button">
          <a
            target="_blank"
            href="https://canalconfidencial.com.br/lgpdalloha/"
          >
            Politica de privacidade
          </a>
        </div>
  
        <div class="button">
          <a
            target="_blank"
            href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/04/Politica-de-Seguranca-da-Informacao_Site-NIU_compressed.pdf"
          >
            Segurança da informação
          </a>
        </div>
  
        <div class="button">
          <a
            target="_blank"
            href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/04/2023.04.03-I-VIP-I-Termos-de-Uso-Site_compressed.pdf"
          >
            Termos de uso
          </a>
        </div>
  
        <div class="button">
          <a
            target="_blank"
            href="https://siteniu.niufibra.com.br/wp-content/uploads/2023/04/2023.04.18-I-NIU-I-Politica-de-Cookies_compressed.pdf"
          >
            Politica de cookies
          </a>
        </div>
  
      </div>
    </div>
  </div>
