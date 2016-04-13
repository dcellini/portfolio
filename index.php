<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){$formdata=$name=$email="";$error=array();$emailreg='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';if(isset($_POST['name']))$name=htmlspecialchars($_POST['name']);if(isset($_POST['email']))$email=htmlspecialchars($_POST['email']);if(isset($_POST['textarea']))$textarea=htmlspecialchars($_POST['textarea']);if($name==""){array_push($error,"You must enter a valid username.");}if($email==""||!preg_match($emailreg,$email)){array_push($error,"You must enter a valid email address.");}if($textarea==""){array_push($error,"You must add a message");}if(!empty($error)){$formdata="<h2 class='fail'>Submission Failed</h2>"."\n"."<p>Your entry has not been submitted, there was an error with the following</p>"."\n"."<ol>";foreach($error as $value){$formdata.="<li><strong>".$value."</strong></li>";}$formdata.="</ol>";}else {$formdata="<h2 class='fail'>Your message was sent</h2>"."\n"."<p>Thank you for getting in touch.</p>"."\n"."<p>I'll get back to you as soon as I can</p>";$to='davidcellini@outlook.com';$email_subject="Website Contact Form:  $name";$email_body="You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$textarea";$headers="From: noreply@davidcellini.com\n";$headers.="Reply-To: $email";mail($to,$email_subject,$email_body,$headers);}}?><!DOCTYPE HTML>
<html>
    <head>
        <title>David Cellini - Web Developer - Tyne and Wear</title>
        <meta charset="UTF-8">
        <meta name="author" content="David Cellini">
        <meta name="description" content="Portfolio for David Cellini. A Front End Web Developer - HTML, CSS, Javascript, JQuery, PHP and MYSQL - based in Washington, Tyne and Wear, UK">
        <meta property="og:title" content="David Cellini | Web Developer | Tyne and Wear">
        <meta property="og:image" content="http://davidcellini.com/img/ogimage.jpg">
        <meta property="og:url" content="http://www.davidcellini.com">
        <meta property="og:description" content="I am a Front End Web Developer - HTML5, CSS3, Javascript, JQuery, PHP and MYSQL - based in Washington, Tyne and Wear">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/foundation-flex.css">
        <link rel="stylesheet" href="css/jquery.fullpage.css">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>


 <!--        <div class="toggleHeader">
            <i class="icon-minus-squared"></i>
            <i class="icon-plus-squared"></i>
        </div> -->

        <div id="fullpage">  
            <div class="section about-me-section">
                <div class="row align-middle">
                    <div class="column large-5 profile-box">
        <!--                 <img src="img/profile.png" class="profile-image" alt="Profile image of David Cellini"> -->
                        <h1>David Cellini</h1>
                        <h3>Web Developer</h3>
                        <h5 class="location"><span class="fa fa-map-marker"></span>Washington, Tyne and Wear</h5>
                        <div class="social">
                            <a href="http://www.twitter.com/dcellini"><span class="fa fa-fw fa-twitter"></span></a>
                            <a href="http://uk.linkedin.com/in/davidcellini/en"><span class="fa fa-fw fa-linkedin"></span></a>
                            <a href="#contact" ><span class="fa fa-fw fa-envelope"></span></a>

                        </div>
                        <div class="viewPortfolioLink">
                            <a href="#portfolio">
                                <div>
                                    <span class="portfolio-text">View my portfolio</span>
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <div class="fa fa-chevron-down"></div>
                            </a>    
                        </div>
                    </div>
                    <div class="column large-7">
                        <h3>About Me</h3>                      
                        <p>My name is David Cellini and I am a Front End Web Developer based in Washington, Tyne and Wear.</p>
                        <p>I have two years experience as a Web Developer with Leighton. In that time I've worked with some pretty big clients including creating the website for Home Group and ATG tickets (soon to go live) and working with BA and Iberia.</p>
                        <p>I have also been working in Digital for some time now. In addition I have over 6 years experience as a Digital Content Editor. I was responsible for the websites and content of 7 radio stations at Real and Smooth Radio.</p>    
                        <p>I've always enjoyed the more technical side of the Web and love learning new languages and skills that make me a better developer.</p>  

                        <h3>My Skills</h3>
                        <p>HTML5 / CSS / Javascript / Jquery / PHP / MYSQL / XML / XSLT / AGILE / SASS / Premiere / Audition / Photoshop / SEO / Google Analytics / Digital Content / Foundation / Git / Accessibility</p>
                    </div>  
                </div>


            </div> <!-- End Section Div -->

                <div class="section">

<!--                     <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12">

                                <div class="container portfolioMainLogo">
                                    <h1>Portfolio</h1>
                                    <a href="#portfolio/1"><i class="icon-briefcase portfolio-briefcase"></i></a>
                                    <p class="portfolio-lead">Click the briefcase, use the arrows, or swipe to the left or right on mobile, to view my portfolio</p>
                                    <p>My portfolio includes work for ATG Tickets, Home Group, Iberia, BA and Real Radio.</p>
                                    <p>It also showcases some other bits of personal work i've been working on.</p>
                                </div>  
                            </div>
                        </div>
                    </div> -->

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="http://www.leighton.com"><img src="img/atg.jpg" alt="Iberia Styled Form"></a>    
                                <p><strong>Date Worked On:</strong> December 2015 - Apr 2016</p>          
                            </div>      
                            <div class="column small-12 large-6">     
                                <h2>ATG Tickets</h2>           

                                <p>I am responsible for the majority of Front End Development on the new ATG tickets website.</p>
                                <p>On this project, I have led and organised a team of two other developers to create components and templates using HTML, CSS, Javascript and JQuery for our Back End Developers to use.</p>
                                <p>On this project, I have created the more complex pieces of work, took responsibility for delegating the work to the other developers, including mentoring one junior developer, and oversaw the project from a front end perspective, working in an Agile manner. 
                                <p>This project is close to completion and should be going live for ATG in April/May 2016.</p>   
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="http://www.leighton.com"><img src="img/homegroup.jpg" class="portfolio-image" alt="Iberia Styled Form"></a>      
                                <p><strong>Date Worked On:</strong>August 2014 - December 2015</p>
                            </div>      
                            <div class="column small-12 large-6">     
                                <h2>Home Group</h2>           
                                <p>Working as part of a team of two initially, and as the sole front end developer for the second half of the project our task was to create the new Home Group website.</p>
                                <p>This involved taking photoshop designs and creating workable components and templates using HTML, CSS, Javascript and JQuery for our Back End Developers to use.<p>
                                <p>The site is comatible with IE8+, it's fully reponsive and meets the AA standard for accessibilty.<p>
                                <a class="button"  href="http://www.homegroup.org.uk">Visit the Home Group Website</a>     
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="http://www.leighton.com"><img src="img/homegroup80.jpg" class="portfolio-image" alt="Iberia Styled Form"></a>      
                                <p><strong>Date Worked On:</strong>November 2015 - December 2015</p>
                            </div>      
                            <div class="column small-12 large-6">     
                                <h2>Home Group 80th Birthday microsite</h2>           
                                <p>Working as part of a team of two initially, and as the sole front end developer for the second half of the project our task was to create the new Home Group website.</p>
                                <p>This involved taking photoshop designs and creating workable components and templates using HTML, CSS, Javascript and JQuery for our Back End Developers to use.<p>
                                <p>The site is comatible with IE8+, it's fully reponsive and meets the AA standard for accessibilty.<p>
                                <a class="button" href="http://www.homegroup.org.uk">Visit the Home Group Website</a>     
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="http://www.leighton.com"><img src="img/homegroupintranet.jpg" class="portfolio-image" alt="Iberia Styled Form"></a>      
                                <p<strong>Date Worked On:</strong>>November 2015 - December 2015</p>
                            </div>      
                            <div class="column small-12 large-6">     
                                <h2>Home Group Intranet</h2>           
                                <p>Working as part of a team of two initially, and as the sole front end developer for the second half of the project our task was to create the new Home Group website.</p>
                                <p>This involved taking photoshop designs and creating workable components and templates using HTML, CSS, Javascript and JQuery for our Back End Developers to use.<p>
                                <p>The site is comatible with IE8+, it's fully reponsive and meets the AA standard for accessibilty.<p>
                                <a class="button" href="http://www.homegroup.org.uk">Visit the Home Group Website</a>     
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="http://www.leighton.com"><img src="img/iberia.jpg" class="portfolio-image" alt="Iberia Styled Form"></a>      
                                <p><strong>Date Worked On:</strong>November 2015 - December 2015</p>
                            </div>      
                            <div class="column small-12 large-6">  
                                <h2>Iberia Email Templates</h2>    
                                <p>I was given the task of working on a project to transform the styling of British Airways popups, vouchers and email templates over to Iberia branding. I was required to change the existing files, so as not to duplicate code, and apply the new styles based on a variable/parameter. The project was based in XML, XSLT and CSS.</p> 
                                <p>I created an Airline Brand parameter in the XML, then created logic to determine the value of the parameter in the XSLT. If the parameter was set to British Airways, nothing would change, but if it was Iberia, it would change the styles to Iberia branding.</p>
                                <p>I was then required to create the new styles using CSS and then make sure they were applied when the Iberia parameter was specified.</p>
                                <p>This project is now live</p>    
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                 <a href="http://www.britishairways.com/en-gb/information/passports-visas-and-api?source=MNVINF3passports_visas&amp;link=main_nav"><img src="img/ba.jpg" class="portfolio-image" alt="BA Visas and Passport page"></a>   
                                <p><strong>Date Worked On:</strong>June 2014 - Ongoing</p>
                            </div>      
                            <div class="column small-12 large-6">     
                                <h2>British Airways</h2>
                                <p>British Airways is the key client that Leighton represents. As such, we have teams dedicated exclusively to working on new ideas and bug fixing for British Airways</p>
                                <p>In my role I have worked on two fixes for the BA website. This has allowed me to understand the CMS British Airways uses as well as the processes a piece of work goes through to ensure no new code causes a problem with the <a href="http://wwww.ba.com">BA.COM</a> website and potentially a large loss or revenue.</p>
                                <p>The first piece of work I was given was to ensure the <a href="http://www.britishairways.com/en-gb/information/passports-visas-and-api?source=MNVINF3passports_visas&amp;link=main_nav">Visa Application component</a> on the site only appeared when the language and country code were set to EN and GB. The involved allowing a XML template to show only when these conditions were met.</p>
                                <p>The second piece of work was a backend change to the CMS. The Content Editor needed a field that was set as required to be set as optional. I therefore needed to make sure the field was not required and also that if it wasn't specified the field/class wasn't blank in the HTML Code.</p> 
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="http://www.thisisglobal.com/radio"><img src="img/realradio.jpg" class="portfolio-image" alt="Real Radio Website"></a>  
                                <p>Feb 2008 - March 2014</p>
                            </div>      
                            <div class="column small-12 large-6">  
                                <h2>Real Radio</h2>   
                                <p>I was responsible for content creation and maintaining seven radio station websites across six locations in the UK for the GMG Radio/Real and Smooth Radio Group. For this I was tasked with creating content - podcasts, videos, photo galleries and text based content - that was search friendly and appealing to visitors, maximised unique visitors and page impressions and was shareable socially.</p>
                                <p>Highlights of my time included working on the online content for Vote Joe, a campaign to back Joe McElderry to win X-Factor. This promotion got the team a Sony Gold Award and got the station coverage on the final of X-Factor. Another favourite piece of work saw me produce image content, for The Real Radio Renegade, a live station promotion with a big cash prize. For the round in question, listeners could only win by seeing the image via our website which changed in sync with our on-air team. This meant I was required to have the content organised and ready to go depnding on what was said on-air.</p>
                                <p>GMG Radio and the websites no longer exist as they were sold to Capital Radio</p> 
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                              <a href="portfolio/spelling/index.htm" target="_blank" class="mylink"><img src="img/spelling.jpg" class="portfolio-image" alt="A spelling game I designed for my daughter"></a>   
                                <p>March 2015</p>
                            </div>      
                            <div class="column small-12 large-6">  
                                <h2>Spelling Game</h2>   
                                <p>To help my young daughter with spelling and typing, I decided to make a little game she could play on my laptop. It can be controlled entirely using keys.</p>
                                <p>To give the game a more personal feel, I decided to use photos/names of members of her family. The game has the option to show/hide the words, it displays the pictures in a random order and it also times the user and tells them how quick they answered all the words at the end.<p>
                                <p>The game is all powered by Jasvcript/JQuery code. I wanted to make the game easily scalable. By adding a image with the persons name to the folder and adding that name to an array, the code will simply add a slide for that person and do the relevant logic. So adding additional people is incredibly simple.<p>   
                                <a href="portfolio/spelling/index.htm" class="button portfolio-button">Play The Spelling Game</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="portfolio/galleryanimation/index.htm" target="_blank" class="mylink"><img src="img/gallery.jpg" class="portfolio-image" alt="My animated gallery design"></a>   
                                <p>February 2015</p>
                            </div>      
                            <div class="column small-12 large-6">  
                                <h2>Animated Gallery</h2>   
                                <p>Inspired by a <a href="http://tympanus.net/codrops/2014/12/23/sliding-header-layout/">Codrops article</a> which used css keyframes to animate between full screen images. I was keen to see if I could take the basis of the code and modify it with HTML, CSS, JQuery to build a gallery with a fixed nav that could be hidden and animate a layer with information that could be shown/hidden as applicable</p>
                                <p>I was keen to see if I could get this working on mobiles and tablets too and I also wanted to be able to move between the slides with keys, click or swipe. I therefore used JQuery Mobile for the first time to achieve the swipe effect. I also had the chance to play with the JQuery animate method, something I hadn't really used much in the past. The site uses viewport width and height for the image sizing. iOS doesn't display these correctly so a fixer library was included to fix a layout issue for iOS.<p>
                                <a href="portfolio/galleryanimation/index.htm" class="button portfolio-button">View The Animated Gallery</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="portfolio/form/form.php" target="_blank" class="mylink"><img src="img/contact.jpg" class="portfolio-image" alt="My contact form I created"></a> 
                                <p>January 2015</p>
                            </div>      
                            <div class="column small-12 large-6">  
                                <h2>Contact Form</h2>  
                                <p>All the code for this form is my own code as an example of the my ability to use PHP, Javscript, JQuery, HTML and CSS .The structure and styling uses HTML5 and CSS3, The client-side form validation and textarea charater count uses JQuery and Javascript and the server-side validation and submission message (which displays the details the user entered) are done with PHP.</p>
                                <p>The name field does not accept numbers or blank values, the email field will only accept valid email addresses (based on a regex pattern) and the message box can not be blank. If this is the case on submit, an error message will be displayed next to the name heading and the border of the input field will change colour. In addition, the message field is limited to 1000 characters and a character count is provided which will update on input (mouse or keys).</p>  
                                <p>If all the fields validate the PHP code will validate the form server-side. If the code doesn't meet the PHP validation an error message will show above the form detailing which fields did not pass the validation - this can be tested by entering "david", "david@david.com" and "david" in the name, email and message field. If the code passes the validation a success message will display above the form and the users input will be displayed.</p> 
                                <a href="portfolio/form/form.php" class="button portfolio-button">View The Contact Form</a>
                            </div>
                        </div>
                    </div>

                    <div class="slide myportfolio">
                        <div class="row">
                            <div class="column small-12 large-6">
                                <a href="shirts4mike/index.php" target="_blank" class="mylink"><img src="img/shirts4mike.jpg" class="portfolio-image" alt="The Shirts 4 Mike website I put together"></a>  
                                <p>December 2014</p>
                            </div>      
                            <div class="column small-12 large-6">  
                                <h2>Shirts 4 Mike</h2>  
                                <p>This was a project I learnt to code from Treehouse.com. The imagery and HTML/CSS was provided. I was required to improve this site using PHP and also link it up to a database using MYSQL.</p>
                                <p>Using PHP i was able to include templates. So the footer and header are stored in templates, making the code resuable and smaller in filesize. I was also able to set up a contact form with validation.</p>
                                <p>Using PHP and MYSQL I was able to add each product, including an image, to a database and display them  in various fashions on the site. I was also able to add a search function which allows the user to search for a shirt. I've managed to set up database and transfer it to my domain. The shopping cart part takes the user to a paypal page. This uses dummy data. If I was to properly configure this at paypal.com, this would be a fully working e-commerce site</p>
                                <a href="shirts4mike/index.php" class="button portfolio-button">View The Shirts 4 Mike Website</a>
                            </div>
                        </div>
                    </div>               

                </div> <!-- End Section Div -->

                <div class="section">
                    <div class="container" id="contactme">
                        <div class="formdata" <?php if(isset($formdata)) { ?> id="success" <?php }; ?> >
                            <?php if(isset($formdata)) {echo $formdata;} ?>
                        </div>

                        <div class="row">
                            <div class="column small-12">
                                <h1>Contact Me</h1>
                                <p>If there's something you want to know about me or you want to hire me, just get in touch using the form below. </p>
                                <form class="ContactForm" method="post" action="index.php#contact" onSubmit="return formValidate(this)">
                                    <div class="row">
                                        <div class="small-12 large-6 columns">                            
                                            <div class="row">
                                                <div class="column small-12 large-12">
                                                    <label for"name">Name</label> 
                                                </div>
                                                <div class="column small-12 large-12">
                                                    <input type="text" id="name" value="<?php if(isset($name)) { echo $name;} ?>" name="name">
                                                </div>
                                                <div class="column small-12 large-12">
                                                    <span class="feedback" id="name_fback">&nbsp;</span>
                                                </div>
                                            </div>           
                                            <div class="row">
                                                <div class="column small-12 large-12">
                                                    <label for="email">Email</label>
                                                </div>
                                                <div class="column small-12 large-12">
                                                    <input type="text" id="email" value="<?php if(isset($email)) { echo $email;} ?>" name="email" >
                                                </div>
                                                <div class="column small-12 large-12">
                                                    <span class="feedback" id="email_fback">&nbsp;</span>
                                                </div>
                                            </div> 
                                        </div>      
                                        <div class="small-12 large-6 columns">                                            
                                            <div class="row">
                                                <div class="column small-12 large-12">
                                                    <label for="textarea">Message</label>
                                                </div>
                                                <div class="column small-12 large-12">
                                                    <textarea id="textarea" name="textarea" rows="6"><?php if(isset($textarea)) { echo $textarea;} ?></textarea>
                                                </div>
                                                <div class="column small-12 large-12">
                                                    <span class="feedback" id="textarea_fback">&nbsp;</span>
                                                </div>
                                                <div class="column small-12 large-12">
                                                </div>
                                            </div>   
                                        </div>                                                 
                                        <div class="small-12 columns form-submit">
                                            <input class="button" id="formSubmit" type="submit" value="Send your message">
                                        </div>
                                                  <!--   <span id="charsLeft"></span> -->
                                        
                                    </div>
                                </form>

                            </div> <!-- End column -->
                        </div> <!-- End Row -->

                        
                    </div>
                </div> <!-- End Section Div -->
        </div> <!-- End Fullpage Div -->
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/jquery.fullPage.js"></script>
        <script src="js/foundation.js"></script>
        <script src="js/app.js"></script>
        <script>
        // "use strict";function formValidate(){var e="",r="",a="",n=document.getElementById("name").value,t=document.getElementById("email").value,l=document.getElementById("textarea").value,d=document.getElementById("name_fback"),m=document.getElementById("email_fback"),o=document.getElementById("textarea_fback");return""===l.trim()||null===l.trim()?($("#textarea").addClass("borderError").focus(),a="[Enter a message]",o.innerHTML=a):($("#textarea").removeClass("borderError").blur(),o.innerHTML=""),""===t||null===t?($("#email").addClass("borderError").focus(),r="[Enter an email address]",m.innerHTML=r):/^[_a-z0-9\-]+(\.[_a-z0-9\-]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)*(\.[a-z]{2,4})$/.test(t)?($("#email").removeClass("borderError").blur(),m.innerHTML=""):(r="[Enter a valid email]",m.innerHTML=r,$("#email").addClass("borderError").focus()),""===n||null===n?($("#name").addClass("borderError").focus(),e="[Enter a name]",d.innerHTML=e):($("#name").removeClass("borderError").blur(),d.innerHTML=""),""!==e||""!==r||""!==a?!1:($(".formdata").addClass("success"),!0)}
        </script>
        <script>
            $(document).ready(function() {
                $('#fullpage').fullpage( {
                    // sectionsColor: ['#ffffff', '#ffffff', '#f2f2f2'],
                    anchors: ['aboutme', 'portfolio', 'contact'],
                    // menu: '.fixedHeader-navigation',
                    scrollOverflow: true,
                    // autoScrolling: true,
                    resize: false,
                    animateAnchor: false,
        // navigation: true,
        slidesNavigation: true,       slidesNavPosition: 'top',
        slideTooltips: ["ATG", "Home Group", "Home Group 80th Birthday", "Home Group Intranet", "Iberia", "slide 2", "slide 3", "slide 4", "slide 9", "slide 4", "slide 9"]
                });
             });            

            /* Toggle the header bar on or off */
            $(".toggleHeader").click(function() {
                $(".fixedHeader").toggle();
                $(".icon-minus-squared").toggle();
                $(".icon-plus-squared").toggle();
            });

            if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    if (browserRatio >=1.5) {
       $(document).on('focus', 'textarea,input,select', function() {
        $('.fixedHeader').css('position', 'absolute');
    }).on('blur', 'textarea,input,select', function() {
        $('.fixedHeader').css('position', '');
    });
    } 
    
}
            
        </script>
    </body>
</html>