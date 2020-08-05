<!-- JQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script src="js/popper.min.js" defer></script>
<!-- Bootstrap core JavaScript -->
<script src="js/bootstrap.min.js" defer></script>
<!-- MDB core JavaScript -->
<script src="js/mdb.min.js"></script>
<!-- Initializations -->
<script src="js/lazy.js" defer></script>
<script src="js/custom-script.js" defer> </script>
<script src="js/custom-navbar.js" defer></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" defer></script>
<script>
  window.addEventListener("load", function() {
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
        "href": "datenschutz"
      }
    })
  });
</script>



<script>
  function init() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i = 0; i < vidDefer.length; i++) {
      if (vidDefer[i].getAttribute('data-src')) {
        vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
      }
    }
  }
  window.onload = init;
</script>

</body>

<script>
  window.addEventListener("load", function() {
    setTimeout(function() {
        document.getElementById("toggler").style.display = "block";
        document.body.style.marginBottom = "150px"
      }, 4500),
      $("#toggler2, #toggler").click(function() {
        $("#fixed-bottom-bar").removeClass("slideInUp delay-5s").addClass("slideOutDown");
        $("body").css('margin-bottom', '0px');
      });
  }, false);
</script>

</html>