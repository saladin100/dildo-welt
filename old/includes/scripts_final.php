<!-- JQuery -->
  <script  src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script  src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script  src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script  src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script  src="js/lazy.js"></script>
  <script  src="js/custom-script.js"></script>
  <script >
      // Animations initialization
      new WOW().init();

    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script >
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#efefef",
      "text": "#404040"
    },
    "button": {
      "background": "#ffb246",
      "text": "#ffffff"
    }
  },
  "position": "bottom-right",
  "content": {
    "message": "Diese Webseite nutzt Cookies, um bestmögliche Funktionalität bieten zu können.",
    "dismiss": "Verstanden",
    "link": "Mehr erfahren",
    "href": "https://www.dildo-welt.info/datenschutz.php"
  }
})});
</script>


<script>
function init() {
var vidDefer = document.getElementsByTagName('iframe');
for (var i=0; i<vidDefer.length; i++) {
if(vidDefer[i].getAttribute('data-src')) {
vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
} } }
window.onload = init;
</script>