<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call for Abstracts | 2021 World Congress</title>
    <link rel="stylesheet" href="./../css/foundation.min.css" >
    <link rel="stylesheet" href="./../css/app.css">
    <?php
    require("./../class/clases.php");
    // include ('class/classRegistroPropuesta.php');
    ?>
  </head>
  <body>
    <header class="header-registro">
      <div class="logotipo-registro">
        <a href="https://congresoparques.com/">
          <figure>
            <img src="./../img/wup_logotipo.png" alt="">
          </figure>
        </a>
      </div>
      <div class="header-registro__titulo">
        <h1 class="">2021 World Congress - Call for Abstracts</h1>
      </div>
    </header>
    <section class="container row">
      <div class="column small-12 instrucciones ">
        <p class="text-center"><strong>2021 World Congress - Call for Abstracts</strong></p>
         <p>The call for presentations is OPEN! You can submit your abstract for consideration by the planning committee by completing the registration. You do not need to be a member to register, and we encourage everyone to submit a topical abstract to the Congress theme. Thank you!</p>
         <p>*Registration is for Abstract Submissions Only. </p>
         <p><strong>The World Congress 2021 will be December 5 - 10, 2021. This Congress will explore the following themes:</strong></p>
          <ul>
            <li>What is the legacy of park leaders - How will an all-inclusive leadership shape the legacy and grow emerging leaders?</li>
            <li>Can we learn from the past and enable the future?</li>
            <li>Who’s vision - are our Parks for All - How will all-inclusive and participatory park advocates ensure equity, access to parks, and health and wellness benefits for all?</li>
          </ul>
          <p>What will be our legacy for cities and communities?</p>
          <p>Park leaders are not alone, and the 2021 World Congress will bring together professionals from all over the world to develop a new vision for the future.</p>
          <ol class="listaTemas">
            <li>We encourage the distribution of this Call for Abstracts.</li>
            <li>For each individual proposal, the registration form must be completed in full and submitted. </li>
            <li>The Congress Planning Committee reserves the right to make final presentation selections and edit descriptions and speaker biographies. </li>
            <li>By submitting an abstract for consideration, it is understood that you are committed to be present and to participate as proposed if accepted.</li>
            <li>Accepted Speakers will be required to register and will be able to access the speaker discount.</li>
            <li>By submitting an abstract proposal, it is understood that the presenter(s) agree to be part of the conference evaluation process, which includes providing constructive feedback on all of the sessions that they attend. </li>
            <li>Additional information on presentation logistics and congress details will be forwarded to all successful applicants. </li>
            <li>Should your abstract be chosen, we encourage you to make your presentation materials available in an electronic format on the website following the conference. This allows us to provide delegates with the presentation materials, while also contributing to our goal of being a “green event.”</li>
            <li>The Planning Committee may choose more than one abstract from a single speaker. This will be decided on a case-by-case basis given the number of speaking opportunities available. </li>
            <li>We reserve the right to edit submissions for publication purposes. All content will be subject to use in the development of congress proceedings. </li>
            <li>The purpose of the session type, size, format, and audience selection questions is to ensure a diversity of session topics and styles. We will endeavor to accommodate your preferences for style and audience size. However, due to the format of this congress, no guarantee can be given as to the level of attendance at any session. </li>
            <li>Information submitted under this call for presentations is protected by World Urban Parks Privacy Policy. Information collected will be used by the World Congress 2021 Planning Committee for the determination of successful presenters and to assist in the marketing of the World Parks Congress.</li>
          </ol>
          <!-- <p>Si tienes dudas o inconvenientes para llenar este formulario, comunícate 
          con <strong>Vitoria Martín</strong>, Coordinadora de Contenido y Educación 
          a la dirección: 
            <a href="mailto:contenido@congresoparques.com">contenido@congresoparques.com</a>
          </p> -->

      </div>
      <div class="item column small-12">
        <form class="formPropuestas" action="guardarSesion.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              ABOUT THE RESPONSIBLE FOR THE ABSTRACT/PROPOSAL:
            </div>
          </fieldset>
          <div class="form_autor">
            <div class="row">
              <div class="column medium-6  small-12">
                <label for="">Name:</label>
                <input type="text" name="Nombre[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">Last Name:</label>
                <input type="text" name="Apellidos[]" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="column medium-6 small-12">
                <label for="">E-mail:</label>
                <input type="email" name="Email[]" value="" required>
              </div>
              <div class="column medium-6 small-12">
                <label for="">Assistant Email:</label>
                <input type="email" name="EmailAsistente[]" value="" placeholder="(if you have one)">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6 small-12">
                <label for="">Telephone: </label>
                <input type="text" name="Telefono[]" value="" placeholder="(Country Code, National Code, Telephone)">
              </div>
              <div class="column medium-6 small-12">
                <label for="">Job / Position:</label>
                <input type="text" name="Cargo[]" value="">
              </div>
            </div>
            <div class="row">
              <div class="column small-12">
                <label for="">Company / Institution:</label>
                <input type="text" name="Empresa[]" value="" >
              </div>
            </div>
            <div class="row">
              <div class="column medium-6 small-12">
                <label for="">Country:</label>
                <input type="text" name="Pais[]" value="" placeholder="" required>
              </div>
              <div class="column medium-6 small-12">
                <label for="">City:</label>
                <input type="text" name="Ciudad[]" value="" placeholder="">
              </div>
            </div>
            <div class="row column small-12">
              <label for="">Professional profile:</label>
              <textarea name="Experiencia[]" rows="3" cols="80" placeholder="Include relevant work experience, research, collaborations, or information. This description should be a short biography."></textarea>
            </div>
            <div class="row column">
              <img src="https://www.congresoparques.com/img/i_perfil.png" alt="" class="avatar">
              <label for="">Photo: (Profile of the speaker, recommended measures 800px by 800px) </label>
              <input type="file" name="fotografia[]" value="" required accept="image/png, .jpeg, .jpg">
            </div>
          </div>

          <div class="row ">
            <div class="column">
              <label for="">Is there more than one speaker? </label>
              <input type="radio" name="Modalidad" value="Individual"  id="individual" required> Yes</input>
              <input type="radio" name="Modalidad" value="Más de uno" id="mesaPanel" required> No</input>
            </div>
          </div>
          <div class="ocultar" id="btnAgregar">
            <!-- <div class="row column text-center" id="">
              <button type="button" name="Autor" class="button alert addButton " id="autor"><i class="fi-plus"></i> Añadir Ponente</button>
            </div> -->
            <div class="nuevo">
          </div>
          </div>

          <div class=" encabezado">
          ABOUT THE PROPOSAL:
          </div>
          <div class="row column">
            <label for="">Session Name (12 words maximum):</label>
            <input type="text" name="Sesion" value="" required>
          </div>
          <div class="row ">
            <div class="column medium-6 small-12">
              <label for="">Session Type: </label>
              <select class="" name="tipoSesion">
              <?php
              
              $tipoConferencia = new Propuesta();
              $array_tipos = $tipoConferencia->getTipoConferencia();

                foreach ($array_tipos as $valor) {
                echo "<option value='".$valor['id_tipo']."'>".$valor['tipo']."</option>";
                }
              ?>
            </select>
            </div>
            <div class="column medium-6 small-12">
              <label for="">Preferred session type:: </label>
              <select class="" name="modalidadSesion">
                <option value="Live">Live</option>
                <option value="Mock-live">Mock-live</option>
                <option value="Recorded">Recorded</option>
              </select>
            </div>
          </div>
          <div class="row column">
            <label for="">What Congress subtheme would you like to be considered for? Streams of these subthemes will include general topics, young/emerging leaders, women in leadership, and leadership and equity. </label>
            <select name="subtema" id="">
            <?php
              $subtema = new Propuesta();
              $array_subtema = $subtema->getSubtemas();

                foreach ($array_subtema as $valor) {
                echo "<option value='".$valor['id_subtema']."'>".$valor['subtema']."</option>";
                }
              ?>
            </select>
          </div>

          <div class="row column">
            <label for="">Description (220 words maximum):</label>
            <textarea name="Descripcion" rows="3" cols="80" placeholder="(This information will be used for promotional purposes, please be concise and clear.)" required></textarea>
          </div>
          <div class="row column">
            <label for="">Justification (There are no word limits):</label>
            <textarea name="Justificacion" rows="3" cols="80" placeholder="Justify the importance of your proposed educational session, identifying how your project / initiative / research solves a problem related to public space and how it relates to the five themes of the congress." required></textarea>
          </div>
          <div class="row column">
          <div class="encabezado"> STRENGTHEN YOUR PROPOSAL:</div>
          In this section you can add various resources to support your proposal. (Videos, research, articles, news or any other resource that supports the evaluation of your proposal)
            <label for="">Link 1:</label>
            <input type="text" name="Enlace1" value="" placeholder="" >
          </div>
          <div class="row column">
          <label for="">Link 2:</label>
            <input type="text" name="Enlace2" value="" placeholder="" >
          </div>
          <div class="row column">
            <label for="">Link 3:</label>
            <input type="text" name="Enlace3" value="" placeholder="" >
          </div>
            
          <div class="text-center">
          <input type="hidden" name="Evento" value="WPC2021">
            <input type="submit" name="" value="Registration" class="button alert">
          </div>
        </form>
      </div>
    </section>
    <!-- <script src="../../../js/vendor/jquery.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
    <!-- <script src="../../../js/vendor/foundation.min.js"></script> -->
    <script>
    // $(document).foundation();
    </script>
    
  </body>
</html>

