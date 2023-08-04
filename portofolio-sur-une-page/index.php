<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoi'])){
  $receiving_email_address = 'greatnesskossidonald@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subjet'];
  $message = $_POST['message'];

  $mailheader = "Name: " . $name .
  "\r\n Email: " . $email .
  "\r\n Sujet: " . $subject .
  "\r\n Message: " . $message . "\r\n";

  if (mail($receiving_email_address, $subject, $message, $mailheader)){
    header('location: index.php');
  } else {
    echo "Failed to send email.";
  }
  
  


}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- utility css file -->
    <link rel="stylesheet" href="css/utility.css">
    <!-- style css file -->
    <link rel = "stylesheet" href = "css/style.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <!-- navbar section -->
    <nav class = "navbar">
      <div class = "container">
        <div class = "brand-and-toggler">
          <a href = "index.html" class = "navbar-brand">Greatness</a>
          <button type = "button" class = "navbar-toggler" id = "navbar-toggler">
            <span>
              <i class = "fas fa-bars"></i>
            </span>
          </button>
        </div>

        <div class = "navbar-collapse">
          <ul class = "navbar-nav">
            <li class = "nav-item nav-active">
              <a href = "index.html" class = "nav-link">Accuiel</a>
            </li>
            <li class = "nav-item">
              <a href = "#about" class = "nav-link">A propos</a>
            </li>
            <li class = "nav-item">
              <a href = "#service" class = "nav-link">Services</a>
            </li>
            <li class = "nav-item">
              <a href = "#skills" class = "nav-link">Compétences</a>
            </li>
            <li class = "nav-item">
              <a href = "#project" class = "nav-link">portfolio</a>
            </li>
            <li class = "nav-item">
              <a href = "#contact" class = "nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar section -->



    <!-- home page -->
    <section class = "home container">
      <div class = "row">
        <div class = "row-left">
          <h1>Je suis <br><span>Donald K. AMEGNINOU</span></h1>
          <h2>Un developpeur web</h2>
          <div class = "home-pg-btn">
            <a href="" class="btn">Mon CV</a>
            <a href="" class="btn">Mes Projets</a>
          </div>
          <div class = "col">
            <div class = "social-links">
              <a href = "https://www.facebook.com/profile.php?id=100076968994171"> <i class="fa fa-facebook" aria-hidden="true"></i></i></a>
              <a href = "https://wa.me/+22897617747">  <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
              <a href = "https://www.instagram.com/amegninoukossidonald"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href = "https://github.com/Donaldk59"> <i class="fa fa-github" aria-hidden="true"></i></a>
              <a href = "https://www.linkedin.com/in/kossi-donald-amegninou-841139273/"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>

        <div class = "row-right">
          <div class = "img-border">
            <div class = "img-container">
              <img src = "assets/bb.jpg" alt = "my photo">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of home page -->

    <section class = "about container" id="about">
      <div class = "title">
        <h2>Qui suis-je?</h2>
        <div>
          <h2>Qui suis-je?</h2>
        </div>
      </div>

      <div class = "row">
        <div class = "row-left">
          <img src = "assets/b.jpg" alt = "about photo">
        </div>

        <div class = "row-right">
          <p class = "text" style="text-align: justify;">
            Plongez dans l'univers captivant du design et du développement web avec un passionné chevronné à vos côtés ! Fort d'une solide expérience dans le domaine, je suis spécialisé dans la création de sites web à la fois attrayants et fonctionnels. Mon objectif premier est de fournir des solutions créatives et efficaces, adaptées aux besoins uniques de mes clients. <br> <br>
            Mon approche est centrée sur l'utilisateur, veillant à ce que chaque site que je conçois offre une expérience conviviale et intuitive. Mon expertise englobe le design graphique, la conception de sites web et le développement web. Je maîtrise l'utilisation des outils et technologies modernes, tels que HTML, CSS, JavaScript et les frameworks populaires comme Bootstrap. <br> <br>
            En tant que passionné des dernières tendances en matière de design, je crée des interfaces modernes et esthétiques. Mon attention méticuleuse aux détails et mon souci de la qualité assurent des résultats finaux exceptionnels. <br> <br>
            Si vous recherchez un professionnel du web design et du développement qui peut transformer vos idées en réalité, n'hésitez pas à me contacter. Je serais ravi de discuter de votre projet avec vous et de vous fournir une solution sur mesure, parfaitement adaptée à vos besoins. Ensemble, créons une présence en ligne qui vous démarquera et captivera votre public !
          <div class = "about-content">
            <ul>
              <li class = "text">
                <span>Nom: </span>
                <span>Donald k. AMEGNINOU</span>
              </li>
              <li class = "text">
                <span>Date de naiss: </span>
                <span>15 juillet 2001 </span>
              </li>
              <li class = "text">
                <span>Ville: </span>
                <span>Lomé-TOGO</span>
              </li>
              <li class = "text">
                <span>Email: </span>
                <span>greatnesskossidonald@gmail.com</span>
              </li>
              <li class = "text">
                <span>Téléphone: </span>
                <span>+228 97617747</span>
              </li>
              <li class = "text">
                <span>Freelance: </span>
                <span>Disponible</span>
              </li>
            </ul>
          </div>

         <!--  <h3>120 <span>Project complete</span></h3> -->
          <button type = "button" class = "btn">mon cv</button>
        </div>
      </div>
    </section>

    <section class = "services container" id="service">
      <div class = "title">
        <h2>services</h2>
        <div>
          <h2>services</h2>
        </div>
      </div>

      <p class = "text" style="text-align: center;">Découvrez un univers créatif et complet à votre service ! Nous sommes une équipe passionnée et compétente spécialisée dans le web design, le développement web, le coaching et la conception graphique. Que ce soit pour améliorer votre présence en ligne, créer une plateforme digitale innovante, réaliser vos objectifs personnels ou donner vie à votre identité visuelle, nous sommes là pour vous accompagner. Notre approche centrée sur le client garantit des solutions sur mesure, esthétiques, intuitives et fonctionnelles. Faites confiance à notre expertise pour booster votre succès et votre épanouissement. Contactez-nous dès aujourd'hui pour concrétiser vos projets avec excellence !</p>

      <div class = "row">
        <div class = "item">
          <span><i class = "fab fa-sketch"></i></span>
          <h2>web designer</h2>
        </div>

        <div class = "item">
          <span><i class = "fas fa-camera-retro"></i></span>
          <h2>Graphiste</h2>
        </div>

        <div class = "item">
          <span><i class = "fas fa-code"></i></span>
          <h2>Developpeur web</h2>
        </div>

        <div class = "item">
          <span><i class = "fas fa-flask"></i></span>
          <h2>Formation</h2>
        </div>

        <div class = "item">
          <span><i class = "fab fa-app-store"></i></span>
          <h2>Developpeur d'application</h2>
        </div>

        <div class = "item">
          <span><i class="fas fa-box-open"></i></span>
          <h2>Produit </h2>
        </div>
      </div>

    </section>
    <section class = "skills container" id="skills">
      <div class = "title">
        <h2>Compétences</h2>
        <div>
          <h2>Compétences</h2>
        </div>
      </div>

      <p class = "text" style="text-align: center;">Je suis un professionnel polyvalent avec une expertise en développement web et design. Mes compétences incluent l'utilisation de logiciels tels que Photoshop et Illustrator pour créer des visuels accrocheurs, ainsi que la maîtrise de HTML5 et CSS3 pour concevoir des sites web modernes et réactifs. De plus, je suis compétent dans la personnalisation de sites WordPress et je peux développer des applications web performantes en Python, Java et PHP. Mon approche créative et passionnée me permet de fournir des solutions de haute qualité et d'apporter une valeur ajoutée à tous les projets sur lesquels je travaille.</p>

      <div class = "row">
        <div class = "item">
          <div class = "item-text">
            <span>Photoshop</span>
            <span class = "w-90">90%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-90"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>Illustrator</span>
            <span class = "w-75">75%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-75"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>HTML5</span>
            <span class = "w-85">85%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-85"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>CSS3</span>
            <span class = "w-80">80%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-80"></div>
          </div>
        </div>

        <div class = "item">
          <div class = "item-text">
            <span>Wordpress</span>
            <span class = "w-60">60%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-60"></div>
          </div>
        </div>
        <div class = "item">
          <div class = "item-text">
            <span>Python</span>
            <span class = "w-60">60%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-60"></div>
          </div>
        </div>
        <div class = "item">
          <div class = "item-text">
            <span>Java</span>
            <span class = "w-60">60%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-60"></div>
          </div>
        </div>
        <div class = "item">
          <div class = "item-text">
            <span>PHP</span>
            <span class = "w-68">68%</span>
          </div>
          <div class = "progress">
            <div class = "progress-bar w-68"></div>
          </div>
        </div>
      </div>
    </section>
    <section class = "projects container" id="project">
      <div class = "title">
        <h2>Projets</h2>
        <div>
          <h2>Projets</h2>
        </div>
      </div>

      <p class = "text">Je suis ravi de vous présenter mon projet à venir, une initiative individuelle qui démontre mon dévouement et mon expertise dans un domaine passionnant. Ce projet reflète mon engagement à relever les défis par moi-même et à utiliser mes compétences en développement web, programmation et design graphique pour créer quelque chose de remarquable. Je suis animé par une forte volonté de fournir une expérience exceptionnelle aux utilisateurs et de surpasser les attentes. Restez à l'écoute pour découvrir comment je vais transformer ma vision en réalité et offrir une valeur significative à mes futurs utilisateurs.</p>

      <div class = "row">
        <div class = "item">
          <div class = "item-overlay">
            <a href = "#">branding & illustration design</a>
            <h3>web design</h3>
          </div>
        </div>

        <div class = "item">
          <div class = "item-overlay">
            <a href = "#">branding & illustration design</a>
            <h3>web design</h3>
          </div>
        </div>

        <div class = "item">
          <div class = "item-overlay">
            <a href = "#">branding & illustration design</a>
            <h3>web design</h3>
          </div>
        </div>

        <div class = "item">
          <div class = "item-overlay">
            <a href = "#">branding & illustration design</a>
            <h3>web design</h3>
          </div>
        </div>

        <div class = "item">
          <div class = "item-overlay">
            <a href = "#">branding & illustration design</a>
            <h3>web design</h3>
          </div>
        </div>

        <div class = "item">
          <div class = "item-overlay">
            <a href = "#">branding & illustration design</a>
            <h3>web design</h3>
          </div>
        </div>
      </div>
    </section>
    <form class="contact-form" action="" method="POST" id="contact">
      <section class = "contact container">
        <div class = "title">
          <h2>contact</h2>
          <div>
            <h2>CONTACT</h2>
          </div>
        </div>
  
        <p class = "text">Votre avis est essentiel pour nous ! Si vous avez des questions, des suggestions ou si vous souhaitez simplement discuter, n'hésitez pas à nous contacter. Notre équipe est toujours prête à vous écouter et à vous offrir le meilleur soutien possible. Votre satisfaction est notre priorité, alors envoyez-nous un message et nous serons ravis de vous répondre. Ensemble, construisons une expérience exceptionnelle !</p>
  
        <div class = "row">
          <div class = "col-left">
            <h2>Avez vous des question?</h2>
            <p class = "text">Bienvenue ! Notre équipe est là pour répondre à vos questions et vous offrir une assistance de premier ordre. N'hésitez pas à nous contacter, nous sommes impatients de vous aider !.</p>
  
            <div class = "contact-info">
              <span><i class = "fas fa-envelope-open"></i></span>
              <h3>
                <span class = "text">Mon mail</span> <br>
                greatnesskossidonald@gmail.com
              </h3>
            </div>
  
            <div class = "contact-info">
              <span><i class = "fas fa-phone-square-alt"></i></span>
              <h3>
                <span class = "text">Appel</span> <br>
                +228 97617747
              </h3>
            </div>
  
            <div class = "contact-social-links">
              <a href = "https://www.facebook.com/profile.php?id=100076968994171"> <i class="fa fa-facebook" aria-hidden="true"></i></i></a>
              <a href = "https://wa.me/+22897617747">  <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
              <a href = "https://www.instagram.com/amegninoukossidonald"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href = "https://github.com/Donaldk59"> <i class="fa fa-github" aria-hidden="true"></i></a>
              <a href = "https://www.linkedin.com/in/kossi-donald-amegninou-841139273/"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
             
            </div>
          </div>
  
          <div class = "col-right">
            <form class = "contact-form" method="POST">
              <div class = "form-group">
                <input type = "text" name="name" placeholder="Nom" required>
                <input type = "email" name="email"  placeholder="Email" required>
                <input type = "text" name="subjet" placeholder="Subjet"  required>
              </div>
              <textarea name="message" rows = "5" placeholder="Votre message"></textarea>
              <input type="submit" class="btn" value="Envoyer" name="envoi">
            </form>
          </div>
        </div>
      </section>
    </form>

    <!-- footer -->
    <footer class = "footer">
      <div class = "row container">
        <div class = "footer-text" >
          <p class = "text">Copyright &copy; 2023. Tout droit reserver <br> Developper par Donald@ </p>
        </div>
        
      </div>

      
    </footer>
    <!-- end of footer -->


    <!-- custom js file -->
    <script src="js/script.js"></script>
  </body>
</html>