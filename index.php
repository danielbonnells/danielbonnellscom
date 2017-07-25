<?php include('form_process.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Daniel Bonnells</title>
    <meta charset="utf-8">
    <meta name="description" content="Orlando web developer, content writer, and graphic designer.">
    <meta name="author" content="Daniel Bonnells">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" >
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Libre+Franklin:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="resources/favicon.png" />



      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-43008452-1', 'auto');
          ga('send', 'pageview');

        </script>
</head>
<body>


  <!-- MODAL BACKGROUND OVERLAY -->

    <div id="overlay" class="animated fadeIn"></div>

    <div id="modal-image" class="animated fadeIn"></div>

  <!-- MODAL BRACKGROUND OVERLAY END -->

    <header>

    <div id="nav">
    <ul>
        <li class="headerItem"><a id="linkweb" href="#webdevelopment">WEB</a></li>
        <li class="headerItem"><a id="linkwriting" href="#contentwriter">WRITING</a></li>
        <li class="headerItem"><a id="linkgraphic" href="#graphicdesign">DESIGN</a></li>
        <li class="headerItem"><a id="linkcontact" href="#contact">CONTACT</a></li>
    </ul></div>

        <a><div id="navIcon">
            <div id="line1" class="navLines"></div>
            <div id="line2" class="navLines"></div>
            <div id="line3" class="navLines"></div>
        </div></a>


    </header>
    <div id="mycontainer" class="">
        <div id="row1" class="row">

            <div id="daniel" class="col-xs-12 col-lg-10 col-lg-offset-1">
               <div id="rowdaniel" class="row">
                <div class="photoWrapper col-sm-6">
                    <img src="/resources/danielbike.jpg" id="mainphoto" class="photo img-responsive" alt="Daniel wearing a plaid shirt while standing with his bicycle.">

                </div>
                <div class="col-sm-6">
                    <h2>about me</h2>
                    <hr>
                    <p class="textsections">I've always been passionate about the web. Since I was a little kid, most of my free time was in front of a computer, learning the ins and outs. Many days were spent learning Photoshop and similar programs, which led to design becoming a fun hobby of mine. After college, I began to work as a content writer and that’s what I primarily do today. Because of my work, I've come to appreciate web development, both front-end and back-end. I am on a journey to expand my skillset and am seeking employment as a web developer. Take a look at my work below, check out <a href="http://danielbonnells.com/resources/Daniel_Bonnells_Resume.pdf">my resume</a>, and <a id="reachout" href="#contact"><strong>reach out to me</strong></a> if you think I would be a good fit for your organization. </p>
                </div>
               </div>
            </div>

            <div id="webdevelopment" class="col-xs-12  col-lg-12">
                <div id="rowweb" class="row">

                    <div class="photoWrapper col-sm-6">
                        <img id="wdimage" alt="A slideshow of images of code in HTML, CSS, and JavaScript." src="/resources/jspic.png" class="photo img-responsive">
                    </div>

                    <div class="col-sm-6">
                        <h2>web development</h2>
                        <hr>
                        <p class="textsections">I've been working hard for the past couple of years to reach a point where I feel comfortable calling myself a web developer. In fact, in March of 2017 I accomplished a huge goal of mine to complete my <a href="https://www.freecodecamp.com/danielbonnells/front-end-certification" ><strong>Front End Developer Certificate</strong></a> from <a href="https://www.freecodecamp.com/danielbonnells">FreeCodeCamp.</a> I've worked on several projects that gave me experience with: APIs, functional JavaScript, listener events, audio playback, and timing events. I wrote up this site myself, and have done a bit of freelancing along the way.
                            <br><br>I am comfortable utilizing HTML5, CSS3, and JavaScript to create and manipulate the DOM. With CSS, I have experience styling with the use of variables, creating animations, and taking advantage of media queries to display sites differently depending on screen size breakpoints. The future is in responsive websites that put mobile first, which is what I prioritize when creating. Using vanilla JavaScript, as well as other js libraries, I’m able to easily modify the styling and HTML to fit the needs at hand. I also have PHP experience creating and editing WordPress themes and can manipulate MySQL databases.
                            <br><br>Click below to see some of my projects.
 </p>
                        <div id="projectsstart" style="height: 75px;"></div>
                        <div id="seeprojects" class="seeprojects"><a href="#projectsstart"><i  class="material-icons expanddown1">&#xE5CF;</i>show projects<i class="expanddown1 material-icons">&#xE5CF;</i></a></div>
                        <hr>
                    </div>
                </div>
            </div>

            <div id="webdevelopmenttext" class="col-xs-12">
              <div><h2>web apps</h2></div>
                <div id="projectsection" class="col-lg-12">

                    <div class="projects"id="project1">
                        <a href="http://codepen.io/danielbonnells/pen/QpGrGr">
                        <img alt="This is an image of a four function calculator styled with blues and grays." src="resources/codepen_projects/calculator.png" class="img-responsive">
                        <h3>calculator</h3>
                        </a>
                        <p class="projectinfo">Simple four function calculator with memory</p>
                    </div>
                    <div class="projects"id="project2">
                        <a href="http://codepen.io/danielbonnells/pen/QppVPm">
                        <img alt="This is an image of a digital Pomodoro timer in a red, white, and black theme with large buttons that increment or decrement time." src="resources/codepen_projects/pomodoroclock.png" class="img-responsive">
                        <h3>pomodoro</h3>
                        </a>
                        <p class="projectinfo">Timer based on the Pomodoro technique</p>

                    </div>
                    <div class="projects"id="project3">
                        <a href="http://codepen.io/danielbonnells/pen/xqjrmJ">
                        <img alt="This is an image of a simon says game with four buttons on top of a gray background. There is also a start button, a 'strict mode' button, and a level counter." src="resources/codepen_projects/simongame.png" class="img-responsive">
                        <h3>simon says</h3>
                        </a>
                        <p class="projectinfo">Pattern game with audio and visual components utilizing timing events</p>
                    </div>
                    <div class="projects"id="project4">
                        <a href="http://codepen.io/danielbonnells/pen/WpEZMZ">
                        <img alt="This is an image of a tic tac toe game with blue tiles, white text, on a turquoise background." src="resources/codepen_projects/tictactoe.png" class="img-responsive">
                        <h3>tic tac toe</h3>
                        </a>
                        <p class="projectinfo">Interactive game for young audiences</p>

                    </div>
                    <div class="projects"id="project5">
                        <a href="http://codepen.io/danielbonnells/pen/ZBEevE">
                        <img alt="This is an image of a weather app showing the weather at your specific coordinates. There is a button to change degree units." src="resources/codepen_projects/weatherapi.png" class="img-responsive">
                        <h3>weather app</h3>
                        </a>
                        <p class="projectinfo">Provides weather at user coordinates using an API</p>

                    </div>
                    <div class="projects"id="project6">
                        <a href="http://codepen.io/danielbonnells/pen/xgxPWg">
                        <img alt="This is an image of an app for searching wikipedia. There is a search field in the middle, with two black buttons underneath, all on a yellow background. " src="resources/codepen_projects/wikipediaviewer.png" class="img-responsive">
                        <h3>wiki viewer</h3>
                        </a>
                        <p class="projectinfo">Search through Wikipedia with the help of an API</p>

                    </div>



                </div>
                <hr style="width:100%;">


                <div style="height:90px;margin-top: 50px;"><h2>websites</h2></div>
                <div id="websitesection" class="row">
                  <div id="webinfo-col" class="col-xs-12 col-lg-6 col-lg-offset-1">
                    <!--<div id="left-btn"><i class="material-icons icons-switch-screenshot-lg">keyboard_arrow_left</i></div>-->
                  <div id="website-photo"></div>

                  <div id="website-description">
                    <h3>health & hope institute</h3>
                    <p>Website received complete development overhaul into a responsive, mobile-first design. New feature implementations such as Wordpress Blogging and e-commerce integration. Theme was customized to match the html styling.</p>
                  </div>
                  <div id="vertical-line"></div>
                  <!--<div id="right-btn"></div>-->
                </div>

                <div class="col-xs-12 col-lg-5" id="screenshot-col">
                  <div style="width: 100%;text-align: center; margin-top:30px;"><i id="left-btn" class="material-icons icons-switch-screenshot">navigate_before</i><i id="right-btn" class="material-icons icons-switch-screenshot">navigate_next</i>
                  <h3 id="screenshots-title" style="display:block;">screenshots</h3></div>

                  <div id="screenshot-container">
                      <div id="sh-1" class="screenshot"></div>
                      <div id="sh-2" class="screenshot"></div>
                      <div id="sh-3" class="screenshot"></div>
                      <div id="sh-4" class="screenshot"></div>
                  </div>

                </div>
                </div>

                <div id="hideprojects" class="seeprojects"><a href="#projectsstart"><i class="material-icons expanddown1">&#xE5CE;</i>Hide Projects<i class="material-icons expanddown1">&#xE5CE;</i></a></div>
            </div>


            <div id="contentwriter" class="col-xs-12 col-lg-12">
                <div id="rowwriting" class="row">
                    <div class="photoWrapper col-sm-6">
                        <img src="/resources/bookandcomputer.jpg" class="photo img-responsive" alt="An image of a notebook with a pen resting on top, next to a laptop computer on a desk.">

                    </div>
                    <div class="col-sm-6">
                        <h2>content writing</h2>
                        <hr>
                        <p class="textsections">I write content for niche websites and clients. The majority of my work makes part of a content-driven marketing approach for local and international companies. My job is to deliver consistent, evergreen articles and blogs rich in information relevant to consumers. All of my work keeps readability, shareability, and SEO in mind in order to best propel the client’s website to the top of search engine results.

<br><br>I run a travel blog of my own for budget adventure travelers, <a href="http://journeytotravel.com/">journeytotravel.com</a>, which has, admitedly, not been updated recently.

<br><br>For the most part, my content is not credited, as is customary for most writers in my field. For samples of my work, check out <a href="https://www.skyscanner.com/tips-and-inspiration/visiting-new-orleans-a-readers-persepective">this blog for SkyScanner.com</a>, or <a href="http://danielbonnells.com/files/Daniel%20Bonnells%20-%20Writing%20Sample.pdf"><strong>download this writing sample</strong></a>.
</p>
                    </div>
                </div>
            </div>

            <div id="graphicdesign" class="col-xs-12 col-lg-12">
                <div id="rowgraphic" class="row">
                <div id="GDimage"class="photoWrapper col-sm-6">
                    <img src="/resources/graphicdesign.jpg" class="photo img-responsive" alt="A graphic designer using their laptop and digital pen tablet.">

                </div>
                <div id="GDtext" class="col-sm-6">
                    <h2>graphic design</h2>
                    <hr>
                    <p class="textsections">
My experience with design has afforded me the ability to lead brand identity projects, marketing campaigns, and social awareness campaigns. I have also created business cards, fliers, posters, advertisements, and t-shirt designs.

<br><br>My time as an employee of the Institute of Hispanic and Latino Cultures at the University of Florida allowed me to develop my skillset as I was the only individual generating visual marketing material for the entire organization.

<br><br>As a freelancer, I have worked with local clients as well as remote organizations creating logos and banners. Check out a few samples below, or <a href="https://danielbonnells.carbonmade.com/">see more on my portfolio</a>.
  </p>
                    <div id="showgraphicsamples" class="seeprojects"><a href="#graphicdesignsamples"><i class="material-icons expanddown1">&#xE5CF;</i>show samples<i class="material-icons expanddown1">&#xE5CF;</i></a></div>
                    <hr>
                </div>
                </div>
            </div>

            <div id="graphicdesignsamples" class="col-xs-12">
                <div id="graphicsamples" class="gsamples">

                    <div id="carousel">

                        <img id="mycarousel" alt="" src="/resources/graphic_design_samples/andreacard.png" class="img-responsive">
                        <div id="slidebuttons" ><div id="previous">&#60;</div><div id="next">></div></div>
                        <h3></h3>

                        <p class="projectinfo">Simple four function calculator with memory</p>
                    </div>


                </div>
                <div id="hidegraphicsamples" class="seeprojects"><i class="material-icons expanddown1">&#xE5CE;</i>hide samples<i class="material-icons expanddown1">&#xE5CE;</i></div>
            </div>



        </div>
    </div>
    <footer>
      <div class="row">
<div class="col-xs-12">
  <h1 id="contact">contact me</h1>
</div>
        <div class="col-xs-12 col-md-6">

<!-- the form starts here -->
<form id="contactform" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

    <h4>Send me a message. I'll reply within 24 hours!</h4>
    <fieldset>
      <input placeholder="your name" type="text" name="name" value="<?= $name ?>" tabindex="1">
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="your email address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="your phone number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="your web site starting with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button id="submitbutton" name="submit" type="submit" id="contact-submit" data-submit="...Sending">submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>

<!-- the form ends here -->
      </div>
      <div id="contactlinks" class="col-xs-12 col-md-6">
        <div><a href="mailto:daniel@danielbonnells.com">send me an email</a></div>
        <div><a href="http://danielbonnells.com/resources/Daniel_Bonnells_Resume.pdf">download my resume</a></div>
        <div id="fdiv">
        <div><a href="https://www.linkedin.com/in/danielbonnells/">LinkedIn</a></div>
        <div><a href="https://twitter.com/danielbt">Twitter</a></div>
        <div><a href="https://danielbonnells.carbonmade.com/">CarbonMade</a></div>
        <div><a href="https://github.com/danielbonnells">GitHub</a></div>
        </div>
      </div>
      </div>
      <div style="color: gray; font-size: .7em; margin-top: 50px;"><p>© Daniel Bonnells 2017.</p></div>
    </footer>
</body>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

    <script>


    </script>

</html>
