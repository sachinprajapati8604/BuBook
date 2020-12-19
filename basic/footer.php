<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

.site-footer {
  margin: auto;
  width: 99%;
  background-color: #26272b;
  padding: 45px 0 20px;
  font-size: 15px;
  line-height: 24px;
  color: #737373;
  border-radius: 12px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.5);
}
.site-footer hr {
  border-top-color: #bbb;
  opacity: 0.5;
}
.site-footer hr.small {
  margin: 20px 0;
}
.site-footer h6 {
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  margin-top: 5px;
  letter-spacing: 2px;
}
.site-footer a {
  color: #737373;
}
.site-footer a:hover {
  color: #fff;
  text-decoration: none;
} 
.footer-links {
  padding-left: 0;
  list-style: none;
}
.footer-links li {
    margin-left: 10px;
    padding: 2px;
  display: block;
}
.footer-links a {
  color: #737373;
}
.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
  color: #fff;
  text-decoration: none;
} 
/* footer hover */
.footer-links li a::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #eb5b25;
    transition: width .3s;
}

.footer-links li a:hover::after {
    width: 50%;
    transition: width .3s;
}


.site-footer .social-icons {
  text-align: right;
}
.site-footer .social-icons a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  margin-left: 6px;
  margin-right: 0;
  border-radius: 100%;
  background-color: #33353d;
}
.copyright-text {
  margin: 0;
}
@media (max-width: 991px) {
  .site-footer [class^="col-"] {
    margin-bottom: 30px;
  }
}
@media (max-width: 767px) {
  .site-footer {
    padding-bottom: 0;
  }
  .site-footer .copyright-text,
  .site-footer .social-icons {
    text-align: center;
  }
}
.social-icons {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.social-icons li {
  display: inline-block;
  margin-bottom: 4px;
} 
.social-icons a {
  background-color: #eceeef;
  color: #818a91;
  font-size: 16px;
  display: inline-block;
  line-height: 44px;
  width: 44px;
  height: 44px;
  text-align: center;
  margin-right: 8px;
  border-radius: 100%;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.social-icons a:active,
.social-icons a:focus,
.social-icons a:hover {
  color: #fff;
  background-color: #29aafe;
} 
.social-icons a.facebook:hover {
  background-color: #3b5998;
}
.social-icons a.twitter:hover {
  background-color: #00aced;
}
.social-icons a.linkedin:hover {
  background-color: #007bb6;
}
.social-icons a.instagram:hover {
  background-color: #be25a4;
}
.social-icons a.github:hover {
  background-color: #4078c0;
}
    </style>

<?php 
echo '<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
<link  rel="stylesheet" type="text/css" href="basic/footer.css" />
<footer class="site-footer">
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <h6>About</h6>
      <div class="about ml-2">
          <p>This website cover all the books pdf for Student of BUNDELKHAND UNIVERSITY JHANSI for B.Tech(CSE) Student.</p>
        <h6 class="font-weight-bold ">Address </h6>
        <p><i class="fas fa-map-marker"></i> Bundelkhand University, Jhansi 284128</p>
        <h6 class="font-weight-bold ">Write to Us</h6>
        <p>            <i class="far fa-envelope"></i>  <a href="mailto:sachinprajapapti599@gmail.com"> sachinprajapapti599@gmail.com</a></p>
        <h6 class="font-weight-bold ">Contact Us</h6>
        <p><i class="fas fa-phone-volume"></i> <a href="tel:+918604980059"> +91 8604980059</a></p>
      </div>
     
    </div>

    <div class="col-6 col-md-3">
      <h6>Other Websites</h6>
      <ul class="footer-links ">
        <li><a href="http://projecthub.epizy.com/?i=1">Project Hub</a></li>
        <li><a href="http://cocvsstudy.epizy.com/?i=1">Coc Vs Study</a></li>
        <li><a href="http://spcart.epizy.com/?i=1">SP Cart</a></li>
        <li><a href="http://technosp.rf.gd/?i=1">KBVM School</a></li>
        <li><a href="http://spcodeforum.epizy.com">My Forum </a></li>
      </ul>
    </div>

    <div class="col-6 col-md-3">
      <h6>Quick Links</h6>
      <ul class="footer-links">
        <li><a href="bookmenu.php">Books</a></li>
        <li><a href="papermenu.php">Papers</a></li>
        <li><a href="syllabus.php">Syllabus</a></li>
        <li><a href="programmingBook.php">Programming Books</a></li>
        <li><a href="about.php">About Us</a></li>
      </ul>
    </div>
  </div>
  <hr class="small">
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-sm-6 col-12">
      <p class="copyright-text"> &copy; 2019-'; echo date("Y").' BUBook.com, All Rights Reserved by
        <a href="#">Sachin Prajapati</a>  
      </p>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
      <ul class="social-icons">
        <li><a class="facebook" href="https://www.facebook.com/bullet.raja.1998"><i class="fab fa-facebook-f"></i></a></li>
        <li><a class="twitter" href="https://twitter.com/SachinP40"><i class="fab fa-twitter"></i></a></li>
        <li><a class="instagram" href="https://www.instagram.com/prajapati_rangbaz?r=nametag"><i class="fab fa-instagram"></i></a></li>
        <li><a class="github" href="https://github.com/sachinprajapati8604"><i class="fab fa-github"></i></a></li>
        <li><a class="linkedin" href="https://www.linkedin.com/in/sachin-prajapati-8b1993188"><i class="fab fa-linkedin-in"></i></a></li>

      </ul>
    </div> 
    <div class="container small"> ';
echo "last Updated: ".date("F d Y H:i:s.", filemtime("index.php")); 
 '. 
 </div></div>
</div>
</footer>
';
?>

 
