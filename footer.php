<div class="wrapper row4">
        <footer id="footer" class="hoc clear"> 
          <div class="one_third first">
            <h6 class="heading">Contatti</h6>
            <ul class="nospace btmspace-30 linklist contact">
              <li><i class="fa fa-map-marker"></i>
                <address>
                  <a href="https://www.google.com.br/maps/place/Karburant+Kastrati/@41.3493995,19.772231,19z/data=!4m5!3m4!1s0x135031e8b9d4768b:0x3b708727f401804!8m2!3d41.3496686!4d19.7723597" target="_blank">Rr. Gjergj Kastrioti, P. "Euro 3D", Nr. 46 Kashar, Tirane</a>
                </address>
              </li>
              <li><i class="fa fa-phone"></i><a href="tel:+355685708802"> +355685708802</a></li>
              <li><i class="fa fa-phone"></i><a href="tel:+393487722339"> +393487722339</a></li>
              <li><i class="fa fa-envelope-o"></i><a href="mailto:info@hitweb.it"> info@hitweb.it</a></li>
            </ul>
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="https://www.facebook.com/hitwebshpk"><i class="fa fa-facebook"></i></a></li>
              <li><a class="faicon-instagram" href="https://www.instagram.com/hitweb.it/"><i class="fa fa-instagram"></i></a></li>
              <li><a class="faicon-linkedin" href="https://www.linkedin.com/company/hitwebshpk/"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-googlep" href="https://plus.google.com/u/0/117780361454393588065" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="one_third">
            <h6 class="heading">Link utili</h6>
            <ul class="nospace linklist">
              <li><a href="http://www.acagency.it/it/home/">AC Agency</a></li>
              <li><a href="http://www.sunballast.it/">Sun Ballast</a></li>
              <li><a href="/pages/privacy.html">Privacy Policy</a></li>
            </ul>
            <hr>

            <a href="https://learndigital.withgoogle.com/digitaltraining" target="_blank"><img id="digitalLogo" src="/images/logo/eccellenze-digitale.jpg" alt="eccellenze in digitale logo" 
            style="height: 150px; width: 250px;"></a>
          </div>
          <div class="one_third">
            <h6 class="heading">Newsletter</h6>
            <p class="nospace btmspace-15">Iscrivetevi alla nostra newsletter per avere le ultime notizie nella vostra posta elettronica.</p>
            <form method="post" action="./php/newsletter.php">
              <fieldset>
                <input class="btmspace-15" type="text" name="name" placeholder="Nome">
                <input class="btmspace-15" type="text" name="email" placeholder="Email">
                <button type="submit" name="newsletter" class="btn" value="Invia">Invia</button>
              </fieldset>
            </form>
          </div>
        </footer>
      </div>

<div class="wrapper row5">
<div class="hoc clear" id="copyright">
<p>Copyright &copy; 2018 - Tutti i diritti riservati - HitWeb</p>
</div>
</div>
<!-- JAVASCRIPTS -->
<script src="./scripts/jquery.backtotop.js">
</script><script src="./scripts/jquery.mobilemenu.js"></script>
<script src="./scripts/vidbg.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#FFA41F",
      "text": "#fff"
    },
    "button": {
      "background": "#fff",
      "text": "#FFA41F"
    }
  },
  "content": {
    "message": "Questo sito utilizza i cookie per offrire ai nostri visitatori una migliore esperienza. ",
    "dismiss": "Ho capito",
    "link": "Leggi di piu'",
    "href": "https://www.garanteprivacy.it/web/guest/home/docweb/-/docweb-display/docweb/3585077"
  }
})});
$('.row2').vidbg({
  'mp4': './images/bg/Meeting.mp4',
  'poster': './images/bg/Meeting.gif'
}, {
  // Options
  muted: true,
  loop: true,
  autoplay: true,
  overlay: true,
  overlayColor: '#000',
  overlayAlpha: 0.2,
});
$(".navbar1 a").on('click', function(event) {  
    // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault(); 
        // Store hash
        var hash = this.hash;  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').stop().animate({
          scrollTop: $(hash).offset().top-140
        }, 800, function(){     
        // Add hash (#) to URL when done scrolling (default click behavior)
          history.pushState(null, null, hash);
        });
      }
});
$('#navbarSupportedContent1').on('show.bs.collapse', function () {
  $('#carousel').attr('style', 'margin-top: 114px !important');
  $('#navbar1').attr({'style': 'background-color: rgba(0,0,0, 0.4) !important; z-index: 10 !important; margin-top: 0px !important;'});
  $('.collapse').attr('style', 'margin-left: 130px !important');
  $('#rowNav').attr('style', 'margin-top: 114px !important');
});
$('#navbarSupportedContent1').on('hide.bs.collapse', function () {
  $('#carousel').attr('style', 'margin-top: 155px !important');
  $('#navbar1').attr('style', 'background-color: rgb(209, 94, 21) !important; margin-top: 0px !important;');
});
</script></body>
</html>