<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Consultancy</title>
    <link
      rel="shortcut icon"
      href="https://offsetcode.com/themes/boomerang/1.3/assets/images/favicon.png"
    />
    <link
      rel="apple-touch-icon"
      href="https://offsetcode.com/themes/boomerang/1.3/assets/images/apple-touch-icon.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="https://offsetcode.com/themes/boomerang/1.3/assets/images/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="https://offsetcode.com/themes/boomerang/1.3/assets/images/apple-touch-icon-114x114.png"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i"
      rel="stylesheet"
    />
    <link
      href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"
      rel="stylesheet"
    />
    <link
      href="themes/boomerang/1.3/assets/css/plugins.min.css"
      rel="stylesheet"
    />
    <link
      href="themes/boomerang/1.3/assets/css/template.css"
      rel="stylesheet"
    />
  </head>
  <script
    src="https://kit.fontawesome.com/484246aeda.js"
    crossorigin="anonymous"
  ></script>
  <body>
    <div class="page-loader">
      <div class="page-loader-inner">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>
    </div>

    <?php include './Header.php' ?>

    <div class="wrapper">
      <section class="module" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 m-auto text-left">
              <img src="assets/img/Fluig.jpg"  width="180"/>

              <h1>Consultoria Especializada Fluig</h1>
              <p class="lead">
                A TRIYO possui a melhor e mais experiente equipe de consultores
                especializados e certificados nas soluções TOTVS, com atuação
                destacada em projeto de alta complexidade de empresas de
                diversos portes, no segmento de Fluig
              </p>
            </div>
            <div class="space" data-MY="60px"></div>
            <div class="col-md-6 m-auto">
              <form method="post" action="enviar_contato2.php">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        name="nome"
                        placeholder="Nome"
                        required=""
                      />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        name="telefone"
                        placeholder="Telefone"
                        required=""
                      />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        name="empresa"
                        placeholder="Empresa"
                        required=""
                      />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="text"
                        name="cargo"
                        placeholder="Cargo"
                        required=""
                      />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="email"
                        name="email"
                        placeholder="E-mail"
                        required=""
                      />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        type="number"
                        name="numero_funcionarios"
                        placeholder="Número de funcionários"
                        required=""
                      />
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        rows="5"
                        placeholder="Sua mensagem"
                        name="mensagem"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <p>
                      <input
                        class="btn btn-block"
                        type="submit"
                        value="Falar com um consultor"
                        style="background-color: #0581c7; color: #fff"
                      />
                    </p>
                  </div>
                </div>
              </form>
              <div
                class="ajax-response text-center"
                id="contact-response"
              ></div>
            </div>
          </div>
        </div>
      </section>

      <section class="module bg-gray">
        <div class="container">
          <div class="row m-b-40">
            <div class="col-md-12 text-center">
              <h1>Soluções de software e tecnologia</h1>
            </div>
            <div class="col-md-12 text-center">
              <p>
                que preparam a sua empresa para vencer os desafios do seu
                segmento.
              </p>
            </div>
          </div>
          <div class="row" style="justify-content: center">
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl1.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Prestadores de Serviços</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Controle de Operações, Relacionamento e Mão de Obra
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl2.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Varejo</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">Soluções para diversos segmentos</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl3.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Manufatura</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Manufatura Leve, Sustentável e Automatizada
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl4.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Construção & Projetos</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Orçamentos, Sustentabilidade e Integração de Processos
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl5.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Educacional</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Captação e Retenção de Alunos, Gestão e Matrículas
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl6.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Jurídico</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Solução completa, acessível e definitiva
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl7.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Distribuição & Logística</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Gestão de Logística, Articulação e Coordenação
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon-box-icon text-center">
                  <img src="assets/img/sl8.png" />
                </div>
                <div class="icon-box-title text-center">
                  <h6>Gestão de Frete</h6>
                </div>
                <div class="icon-box-content">
                  <p class="text-center">
                    Totalmente integrada aos ERPs do mercado
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php include './Footer.php' ?>

    </div>
    <a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>

    <script src="themes/boomerang/1.3/assets/js/custom/jquery.min.js"></script>
    <script src="themes/boomerang/1.3/assets/js/custom/popper.min.js"></script>
    <script src="themes/boomerang/1.3/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
    <script src="themes/boomerang/1.3/assets/js/custom/plugins.min.js"></script>
    <script src="themes/boomerang/1.3/assets/js/custom/custom.min.js"></script>
  </body>
</html>
