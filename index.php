<!-- 
  HEADER HTML
 -->
<?php include 'header.php'; ?>

<!-- 
  MENU
 -->
<?php include 'menu.php'; ?>

<!-- 
  SLIDER PRINCIPAL
 -->
<section class="slider-principal">
  <div id="slider-principal" class="carousel carousel-slider center " data-indicators="true">
    <div class="carousel-fixed-item center middle-indicator flex">

      <div class="slider-redes white-text relative montserratBold desktop">
        <div>
          <a href="#0" class="slider-redes-link" target="_blank">
            Facebook
          </a>
          <a href="#0" class="slider-redes-link" target="_blank">
            Linkedin
          </a>
          <a href="#0" class="slider-redes-link" target="_blank">
            Instagram
          </a>
        </div>
      </div>

      <div class="left slider-control white-color">
        <a href="#0" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator valign-wrapper white-text montserratBold" id="nextSliderPrinc">
          <img src="assets/img/icon-arrow-left.png" class="slider-control-img" /> Próxima
        </a>
      </div>

    </div>


    <!-- 
    SLIDER ITEM
  -->

    <div class="carousel-item white white-text relative" href="#one!">
      <img src="assets/img/slider.jpg" class="widthfull hide-on-small-only" alt="Meu Ambiente Interiores" />
      <img src="assets/img/slider_mobile.jpg" class="widthfull hide-on-med-and-up" alt="Meu Ambiente Interiores" />
      <div class="slider-container valign-wrapper">
        <div class="widthfull left-align">
          <div class="slider-subtitle montserratLight">
            Nós temos os melhores
          </div>
          <div class="slider-title left-align alpaca margin_1_top">
            <h1>Projetos de Design</h1>
          </div>
          <div class="slider-title right-align alpaca">
            <h1>de Interiores</h1>
          </div>

          <div class="margin_2_top">
            <a href="#0" class="slider-cta valign-wrapper colorRosa alpaca">
              <img src="assets/img/icon-retangle.png" />
              Descubra
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 
      SLIDER ITEM MODELO, PODE DELETAR ASSIM QUE JOGAR O PHP NO ITEM
    -->
    <div class="carousel-item amber white-text" href="#aa!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
</section>

<section class="sobre">
  <div class="container">
    <div class="row">
      <div class="col s12 l6 desktop">
        <img src="assets/img/aboutus_one.jpg" alt="Design de Interiores" class="widthfull">
      </div>
      <div class="col s12 l5 about-text">
        <div class="about-title alpaca colorBlack">
          <h1>Quem somos</h1>
        </div>
        <div class="about-description colorGreyLight margin_05_top">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
        </div>
        <div class="margin_2_top">
          <a href="#0" class="slider-cta valign-wrapper colorRosa alpaca">
            <img src="assets/img/icon-retangle.png" />
            Ler mais
          </a>
        </div>
      </div>
    </div>
    <div class="row mobile margin_2_top">
      <img src="assets/img/aboutus_mobile.jpg" class="widthfull">
    </div>
    <div class="row">
      <div class="container">
        <div class="col s12 l5 offset-l1 about-text-two">
          <div class="colorGreyLight relative">
            <img src="assets/img/icon-retangle-vert.jpg" class="about-text-line">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
          </div>
        </div>
        <div class="col s12 l6 relative about-img-two desktop">
          <img src="assets/img/aboutus_two.jpg" alt="Design de Interiores" class="widthfull">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="video">
  <div class="row">
    <div class="col s12 l4 offset-l6 nopadding">
      <div class="video-content right-align relative">
        <iframe class="video-frame" src="https://www.youtube.com/embed/YGE5euSZnbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="video-placeholder bgRosa"></div>
      </div>
    </div>
  </div>
</section>


<section class="split">
  <div class="container clearContainer">

    <div class="row margin_2">
      <div class="col s12 l10 offset-l1">
        <div class="col col s12 l6 textCapitalize split-text alpaca">
          <h1>Conheça alguns dos <BR>
            Nossos projetos</h1>
        </div>
        <div class="col s12 l6 about-description colorGreyLight">
          <div class="relative">
            <img src="assets/img/icon-retangle-vert.jpg" class="about-text-line">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus .
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="carousel carousel-slider center" id="carousel-split">
        <div class="carousel-item red white-text" href="#one!">
          <!-- 
            SPLIT-IMAGE, NECESSITA ATIVAR AS OUTRAS IMAGENS DENTRO DO SCRIPT.JS
          -->
          <div id="splitContainer">
            <img src="assets/img/splitone-before.jpg" class="widthfull">
            <img src="assets/img/splitone-after.jpg" class="widthfull">
          </div>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
          <h2>Second Panel</h2>
          <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
          <h2>Third Panel</h2>
          <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
          <h2>Fourth Panel</h2>
          <p class="white-text">This is your fourth panel</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s12 l11 offset-l1 split-controls">
        <div class="col s6 l2 offset-l1 valign-wrapper colorBlack alpaca">
          01
          <img src="assets/img/icon-line.jpg" class="split-line">
          05
        </div>
        <div class="col s6 l2 offset-l7 valign-wrapper split-control">
          <a href="#0" id="splitPrev">
            <img src="assets/img/icon-arrow-l.png" alt="">
          </a>
          <a href="#0" id="splitNext">
            <img src="assets/img/icon-arrow-r.png" alt="">
          </a>

        </div>
      </div>
    </div>

  </div>
</section>


<section class="parallax-section">
  <div class="parallax-container relative">
    <div class="parallax">
      <img src="assets/img/parallax-img-mobile.jpg" class="mobile" />
      <img src="assets/img/parallax-img.jpg" class="desktop">
    </div>
    <div class="valign-wrapper justifycenter heightfull">
      <div class="parallax-content white-text textUpper alpaca relative">
        realize seus projetos
        <img src="assets/img/square.png" class="right" />
      </div>
    </div>
  </div>
</section>

<section class="how-it-work relative">
  <div class="work-bg valign-wrapper desktop">
    <img src="assets/img/bg-work.jpg" class="">
  </div>
  <div class="container clearContainer">
    <div class="container row clearContainer">
      <div class="col s12 l8">

        <div class="work-title alpaca colorBlack">
          Como funciona?
        </div>

        <div class="work-step row montserrat margin_1_top">
          <div class="col s3 l2 right-align colorRosa">
            1)
          </div>
          <div class="col s9 l10 colorRosa">
            Envie as informações do seu espaço
          </div>
        </div>

        <div class="item row margin_1_top">
          <div class="col s3 l2 work-img">
            <img src="assets/img/icon-camera.jpg" alt="Mande suas fotos">
          </div>
          <div class="col s9 l10">
            <div class="bold">
              Mande suas fotos
            </div>
            <div class="work-item-text colorGreyLight margin_05_top">
              Queremos saber exatamente como é o seu espaço e para isso você terá que fotografar cada cantinho em diversos ângulos. Se puder nos envie também um vídeo do seu espaço.
            </div>
          </div>
        </div>

        <div class="item row margin_1_top">
          <div class="col s3 l2 work-img">
            <img src="assets/img/icon-medidas.jpg" alt="Precisamos das medidas">
          </div>
          <div class="col s9 l10">
            <div class="bold">
              Precisamos das Medidas
            </div>
            <div class="work-item-text colorGreyLight margin_05_top">
              A planta baixa pode ser feita a mão, precisamos das medidas do ambiente para um projeto perfeito. Se tiver dúvida de como fazer nos chame através do botão do Whatsapp no canto da tela.
            </div>
          </div>
        </div>

        <div class="item row margin_1_top">
          <div class="col s3 l2 work-img">
            <img src="assets/img/icon-contrato.jpg" alt="Precisamos das medidas">
          </div>
          <div class="col s9 l10">
            <div class="bold">
              Preencha o Questionário
            </div>
            <div class="work-item-text colorGreyLight margin_05_top">
              É através dele que saberemos suas necessidades, seus gostos e estilo de vida de todos que irão desfrutar do ambiente.
            </div>
          </div>
        </div>

        <div class="work-step row montserrat margin_2_top">
          <div class="col s3 l2 right-align colorRosa">
            2)
          </div>
          <div class="col s9 l10 colorRosa">
            Avaliamos suas Informações
          </div>
        </div>

        <div class="item row">
          <div class="col s3 l2 work-img">
            <img src="assets/img/icon-settings.jpg" alt="Precisamos das medidas">
          </div>
          <div class="col s9 l10">
            <div class="work-item-text colorGreyLight margin_1_top">
              Depois de enviar todas as informações, retornaremos o contato em até 48h com uma pré-avaliação do seu projeto.
            </div>
          </div>
        </div>

        <div class="work-step row montserrat margin_1_top">
          <div class="col s3 l2 right-align colorRosa">
            3)
          </div>
          <div class="col s9 l10 colorRosa">
            Pagamento Online
          </div>
        </div>

        <div class="item row">
          <div class="col s4 l2 work-img">
            <img src="assets/img/icon-card.jpg" alt="Precisamos das medidas">
          </div>
          <div class="col s8 l10">
            <div class="work-item-text colorGreyLight margin_1_top">
              Acertando os detalhes, o próximo passo é a liberação e a confirmação do seu pagamento.
            </div>
          </div>
        </div>

        <div class="work-step row montserrat margin_1_top">
          <div class="col s3 l2 right-align colorRosa">
            4)
          </div>
          <div class="col s9 l10 colorRosa">
            Seu Projeto de Decoração de Interiores Exclusivo
          </div>
        </div>

        <div class="item row">
          <div class="col s3 l2 work-img">
            <img src="assets/img/icon-check.jpg" alt="Precisamos das medidas">
          </div>
          <div class="col s9 l10 margin_05_top">
            <div class="work-item-text colorGreyLight margin_05_top">
              Concluída as fases anteriores, iniciaremos o seu projeto personalizado e exclusivo. Toda a comunicação é feita pela área do cliente e é por este canal que você pode tirar qualquer dúvida durante todo o desenvolvimento do seu projeto.
            </div>
          </div>
        </div>

        <div class="work-step row montserrat margin_1_top">
          <div class="col s3 l2 right-align colorRosa">
            5)
          </div>
          <div class="col s9 l10 colorRosa">
            Entregamos seu projeto
          </div>
        </div>

        <div class="item row">
          <div class="col s3 l2 work-img">
            <img src="assets/img/icon-gift.jpg" alt="Precisamos das medidas">
          </div>
          <div class="col s9 l10">
            <div class="work-item-text colorGreyLight margin_05_top">
              Ao final você receberá todas as informações necessárias para a execução perfeita do seu projeto de decoração de interiores.
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="mobile right-align margin_2_top">
      <img src="assets/img/bg-work-mobile.jpg" width="70%">
    </div>
  </div>
</section>

<section class="depoimentos relative">
  <div class="container clearContainer">
    <div class="row">
      <div class="col s3 m2 l6 nopaddingmobile">
        <img src="assets/img/bg-depoimento.jpg" alt="" class="widthfull desktop">
        <img src="assets/img/bg-depoimento-mobile.jpg" alt="" class="widthfull mobile">
      </div>
      <div class="col s9 m10 l4 offset-l1 padding15mobile nopadding">
        <div class="depoimentos-title alpaca colorBlack">
          Depoimento de <BR>
          Nossos Clientes
        </div>

        <div id="depoimentos-slider" class="carousel carousel-slider margin_1_top">
          <div class="carousel-item white depoimento-item relative colorGreyLight" href="#one!">
            <img src="assets/img/icon-retangle-vert.jpg" class="depoimento-line" />
            <div class="depoiment-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus .Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              <div class="colorRosa depoimento-nome margin_1_top">
                Luciana Gimenez
              </div>
              <div>
                Londrina - PR
              </div>
            </div>
          </div>
          <div class="carousel-item amber white-text" href="#two!">
            <h2>Second Panel</h2>
            <p class="white-text">This is your second panel</p>
          </div>
          <div class="carousel-item green white-text" href="#three!">
            <h2>Third Panel</h2>
            <p class="white-text">This is your third panel</p>
          </div>
          <div class="carousel-item blue white-text" href="#four!">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
          </div>
        </div>

        <div class="depoimento-control split-control">
          <a href="#0" id="depoimentoPrev">
            <img src="assets/img/icon-arrow-l.png" alt="">
          </a>
          <a href="#0" id="depoimentoNext">
            <img src="assets/img/icon-arrow-r.png" alt="">
          </a>
        </div>

      </div>
    </div>
  </div>
  <img src="assets/img/retangle.jpg" class="depoimentos-bg desktop">
</section>

<section class="counter">
  <div class="container">
    <div class="row">
      <div class="col s12 l10 offset-l1">
        <div class="counter-title alpaca colorBlack center-align">
          Nosso Impacto na vida de Nossos Clientes
        </div>
        <div class="row margin_1_top">

          <div class="col s6 l2 offset-l2 center-align alpaca margin_1_0_mobile">
            <div class="depo-count colorRosa center-align">
              &#43;<span class="count">580</span>
            </div>
            PROJETOS
          </div>

          <div class="col s6 l2 center-align alpaca margin_1_0_mobile">
            <div class="depo-count colorRosa center-align">
              &#43;<span class="count">1820</span>
            </div>
            CADASTROS
          </div>

          <div class="col s6 l2 center-align alpaca margin_1_0_mobile">
            <div class="depo-count colorRosa center-align">
              &#43;<span class="count">22982</span>
            </div>
            SEGUIDORES
          </div>

          <div class="col s6 l2 center-align alpaca margin_1_0_mobile">
            <div class="depo-count colorRosa center-align">
              &#43;<span class="count">18</span>
            </div>
            DESIGNERS
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="precos">
  <div class="container center">
    <div class="counter-title colorBlack alpaca">
      <span class="preco-title">
        Preços
      </span>
    </div>

    <div class="container precos-content desktop">
      <div class="row">


        <div class="col s12 l4 precos-item z-depth-1 nopadding">

          <div class="precos-item-title montserratBold colorRosa textUpper">
            básico
          </div>

          <div class="precos-item-preco padding_1">
            <div class="row">
              6x de <span class="precos-item-price colorRosa montserratBold">R$45,00</span>
            </div>
            <div>
              ou R$750,00 à vista por ambiente
            </div>
          </div>

          <div class="center-align padding precos-item-descripton padding_1">
            <div class="row">
              - Design com o seu estilo
            </div>
            <div class="row">
              - Lista de compras personalizada
            </div>
            <div class="row">
              - Dicas de acessórios e decoração
            </div>
            <div class="row">
              - 3 dias de chat com o designer
            </div>
            <div class="row">
              - Não inclui imagens 3D e planta
            </div>
          </div>

        </div>

        <div class="col s12 l4 precos-item bgRosa white-text nopadding z-depth-1">
          <div class="precos-item-title montserratBold textUpper" style="padding-top: 2rem">
            projeto personalizado
          </div>
          <div class="precos-item-preco padding_1 bgRosaDark">
            <div class="row">
              6x de <span class="precos-item-price montserratBold">R$71,50</span>
            </div>
            <div>
              ou R$399,00 à vista por ambiente
            </div>
          </div>
          <div class="center-align padding precos-item-descripton padding_1">
            <div class="row">
              Projeto de decoração personalizado feito pela arquiteta que te entende!
            </div>
            <div class="row">
              - Designer com o seu estilo
            </div>
            <div class="row">
              - Lista de compras personalizada
            </div>
            <div class="row">
              - Ganhe R$ 100,00 OFF em compras de produtos acima de R$ 1.000,00
            </div>
            <div class="row">
              - Design personalizado
            </div>
            <div class="row">
              - Móveis, decoração, pintura e revestimentos
            </div>
            <div class="row">
              - Chat com designer durante todo o projeto
            </div>
            <div class="row">
              - Planta baixa do ambiente
            </div>
            <div class="row">
              - Imagens 3D realistas
            </div>
            <div class="row">
              - 1 pedido de revisão
            </div>
            <div class="row">
              - Auxílio na compra
            </div>
          </div>
          <div class="precos-table">
            <img src="assets/img/precos-img-white.png" alt="" style="margin-bottom: 7rem;">
          </div>
        </div>

        <div class="col s12 l4 precos-item z-depth-1 nopadding">

          <div class="precos-item-title montserratBold colorRosa textUpper">
            projeto premium
          </div>

          <div class="precos-item-preco padding_1">
            <div class="row">
              6x de <span class="precos-item-price colorRosa montserratBold">R$149,00</span>
            </div>
            <div>
              ou R$830,00 à vista por ambiente
            </div>
          </div>
          <div class="center-align padding precos-item-descripton padding_1">
            <div class="row">
              Projeto de decoração personalizado e ainda te ajudamos na execução
            </div>
            <div class="row">
              Designer com o seu estilo
            </div>
            <div class="row">
              Lista de compras personalizada
            </div>
            <div class="row">
              Ganhe R$ 100,00 OFF em compras de produtos acima de R$ 1.000,00
            </div>
            <div class="row">
              Design personalizado
            </div>
            <div class="row">
              Móveis, decoração, pintura e revestimentos
            </div>
            <div class="row">
              Chat com designer durante todo o projeto
            </div>
            <div class="row">
              Planta baixa do ambiente
            </div>
            Imagens 3D realistas
            <div class="row">
              Só no Premium
            </div>
            <div class="row">
              2 pedidos de revisão
            </div>
            <div class="row">
              Auxílio na compra e na instalação
            </div>
          </div>

          <div class="precos-table">
            <img src="assets/img/precos-img-rosa.png" alt="" style="margin-bottom: 1rem;">
          </div>

        </div>


      </div>
      <div class="row margin_2_top">
        <div class="col s12 l4 offset-l4 textUpper bgRosa white-text padding_1 alpaca">
          <a href="#0">
            começar projeto
          </a>
        </div>
      </div>
    </div>

    <div class="mobile widthfull precos-carousel row">
      <div class="col 12 right">
        <div class="split-control">
          <a href="#0" id="precosPrev">
            <img src="assets/img/icon-arrow-l.png" alt="">
          </a>
          <a href="#0" id="precosNext">
            <img src="assets/img/icon-arrow-r.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <div class="carousel carousel-slider mobile" id="carousel-precos" data-dragged="false" style="">
      <div class="carousel-item" href="#one!">
        <div class="col s12 l12 bgRosa white-text nopadding z-depth-1">
          <div class="precos-item-title montserratBold textUpper" style="padding-top: 2rem">
            projeto personalizado
          </div>
          <div class="precos-item-preco padding_1 bgRosaDark">
            <div class="row">
              6x de <span class="precos-item-price montserratBold">R$71,50</span>
            </div>
            <div>
              ou R$399,00 à vista por ambiente
            </div>
          </div>
          <div class="center-align padding precos-item-descripton padding_1">
            <div class="row">
              Projeto de decoração personalizado feito pela arquiteta que te entende!
            </div>
            <div class="row">
              - Designer com o seu estilo
            </div>
            <div class="row">
              - Lista de compras personalizada
            </div>
            <div class="row">
              - Ganhe R$ 100,00 OFF em compras de produtos acima de R$ 1.000,00
            </div>
            <div class="row">
              - Design personalizado
            </div>
            <div class="row">
              - Móveis, decoração, pintura e revestimentos
            </div>
            <div class="row">
              - Chat com designer durante todo o projeto
            </div>
            <div class="row">
              - Planta baixa do ambiente
            </div>
            <div class="row">
              - Imagens 3D realistas
            </div>
            <div class="row">
              - 1 pedido de revisão
            </div>
            <div class="row">
              - Auxílio na compra
            </div>
          </div>
          <div class="precos-table">
            <img src="assets/img/precos-img-white.png" alt="" style="margin-bottom: 7rem;">
          </div>
        </div>
      </div>

      <div class="carousel-item black-text" href="#two!">
        <div class="col s12 l12 z-depth-1 nopadding">

          <div class="precos-item-title montserratBold colorRosa textUpper">
            básico
          </div>

          <div class="precos-item-preco padding_1">
            <div class="row">
              6x de <span class="precos-item-price colorRosa montserratBold">R$45,00</span>
            </div>
            <div>
              ou R$750,00 à vista por ambiente
            </div>
          </div>

          <div class="center-align padding precos-item-descripton padding_1">
            <div class="row">
              - Design com o seu estilo
            </div>
            <div class="row">
              - Lista de compras personalizada
            </div>
            <div class="row">
              - Dicas de acessórios e decoração
            </div>
            <div class="row">
              - 3 dias de chat com o designer
            </div>
            <div class="row">
              - Não inclui imagens 3D e planta
            </div>
          </div>

        </div>
      </div>
      <div class="carousel-item black-text" href="#three!">

        <div class="col s12 l12 z-depth-1 nopadding">

          <div class="precos-item-title montserratBold colorRosa textUpper">
            projeto premium
          </div>

          <div class="precos-item-preco padding_1">
            <div class="row">
              6x de <span class="precos-item-price colorRosa montserratBold">R$149,00</span>
            </div>
            <div>
              ou R$830,00 à vista por ambiente
            </div>
          </div>
          <div class="center-align padding precos-item-descripton padding_1">
            <div class="row">
              Projeto de decoração personalizado e ainda te ajudamos na execução
            </div>
            <div class="row">
              Designer com o seu estilo
            </div>
            <div class="row">
              Lista de compras personalizada
            </div>
            <div class="row">
              Ganhe R$ 100,00 OFF em compras de produtos acima de R$ 1.000,00
            </div>
            <div class="row">
              Design personalizado
            </div>
            <div class="row">
              Móveis, decoração, pintura e revestimentos
            </div>
            <div class="row">
              Chat com designer durante todo o projeto
            </div>
            <div class="row">
              Planta baixa do ambiente
            </div>
            Imagens 3D realistas
            <div class="row">
              Só no Premium
            </div>
            <div class="row">
              2 pedidos de revisão
            </div>
            <div class="row">
              Auxílio na compra e na instalação
            </div>
          </div>

          <div class="precos-table">
            <img src="assets/img/precos-img-rosa.png" alt="" style="margin-bottom: 1rem;">
          </div>

        </div>
      </div>
    </div>

    <div class="row margin_2_top mobile">
      <div class="col s12 l4 offset-l4 textUpper bgRosa white-text padding_1 alpaca">
        <a href="#0">
          começar projeto
        </a>
      </div>
    </div>

  </div>
</section>

<section class="blog">
  <div class="container">

    <div class="row">
      <div class="col s12 l6 offset-l3 center-align counter-title">
        Acompanhe Nosso Blog
      </div>
      <div class="col s12 l3 right-align split-control">
        <a href="#0" id="blogPrev">
          <img src="assets/img/icon-arrow-l.png" alt="">
        </a>
        <a href="#0" id="blogNext">
          <img src="assets/img/icon-arrow-r.png" alt="">
        </a>
      </div>
    </div>

    <div class="carousel relative white-text" id="carousel-blog" style="height: 300px !important">

      <a class="carousel-item" href="#one!">
        <img src="assets/img/blogOne.jpg" class="widthfull" />
        <div class="blog-data colorGreyLight">
          21 maio, 2019
        </div>
        <div class="blog-title colorBlack">
          Lorem Ipsum Dolor Sit Amet Consectetur
        </div>
      </a>
      <a class="carousel-item" href="#two!">
        <img src="assets/img/blogTwo.jpg" class="widthfull" />
        <div class="blog-data colorGreyLight">
          21 maio, 2019
        </div>
        <div class="blog-title colorBlack">
          Lorem Ipsum Dolor Sit Amet Consectetur
        </div>
      </a>
      <a class="carousel-item" href="#three!">
        <img src="assets/img/blogThree.jpg" class="widthfull" />
        <div class="blog-data colorGreyLight">
          21 maio, 2019
        </div>
        <div class="blog-title colorBlack">
          Lorem Ipsum Dolor Sit Amet Consectetur
        </div>
      </a>
      <a class="carousel-item" href="#four!">
        <img src="assets/img/blogFour.jpg" class="widthfull" />
        <div class="blog-data colorGreyLight">
          21 maio, 2019
        </div>
        <div class="blog-title colorBlack">
          Lorem Ipsum Dolor Sit Amet Consectetur
        </div>
      </a>
      <a class="carousel-item" href="#five!">
        <img src="assets/img/blogOne.jpg" class="widthfull" />
        <div class="blog-data colorGreyLight">
          21 maio, 2019
        </div>
        <div class="blog-title colorBlack">
          Lorem Ipsum Dolor Sit Amet Consectetur
        </div>
      </a>
    </div>


  </div>
</section>


<?php include 'footer.php'; ?>

<?php include 'assets/js/js_includes.php'; ?>
<script src="assets/js/jquery.onView.js"></script>
<script>
  (function($) {





    $('.counter').onView(function() {

      CounterUp()

    });

    function CounterUp() {
      console.log("oi");
      $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).text()
        }, {
          duration: 2000,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });
    }



  })(jQuery);
</script>

</body>

</html>