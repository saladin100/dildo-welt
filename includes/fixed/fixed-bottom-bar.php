<style>
    @media (min-width: 576px) {
        .fixed-bottom-bar {
            background-color: #fff;
            color: #000;
            height: 150px;
            padding: 2px 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
            font-size: 16px;
            padding: 10px 0px;
        }

        body {
            margin-bottom: 150px;
        }

        #toggler {
            top: -25px;
            font-size: 30px;
            cursor: pointer;
            display: none;
        }
    }

/**
    @media (max-width: 575px) {
        .fixed-bottom-bar {
            background-color: #fff;
            color: #000;
            height: 150px;
            padding: 2px 10px;
            font-size: 16px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        }

        body {
            margin-bottom: 165px;
        }

        #toggler {
            top: -15px;
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            right: 10px;
        }

    } */
</style>

<script >
   

    window.addEventListener("load", function() {
        setTimeout(function() {
                document.getElementById("toggler").style.display = "block";
            }, 4500),
            document.getElementById("toggler").addEventListener('click', function() {
                document.getElementById("fixed-bottom-bar").classList.remove("slideInUp");
                document.getElementById("fixed-bottom-bar").classList.remove("delay-5s");
                document.body.style.margin = "0px";
                document.getElementById("fixed-bottom-bar").classList.add("slideOutDown");
            }, false)
    }, false);

    
</script>



<div id="fixed-bottom-bar" class="fixed-bottom fixed-bottom-bar slideInUp animated delay-5s" style="font-family: LinotteRegular, Arial, sans-serif !important;">

    <div class="container d-none d-sm-block" style="max-width:400px;">
        <div class="row">
            <div class="col-4">
                <img src="/img/satisfyer-pro-2.jpg" style="max-height:130px" class="mx-auto d-block">
            </div>
            <div class="col-7">

                <span style="font-size:25px;font-weight:bolder;font-family: LinotteRegular, Arial, sans-serif !important">
                    Satisfyer Pro 2</span>

                <div style="text-align:left;color:#FFD701;font-size:14px">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    5 von 5</div>
                Bester Orgasmus-Garantie!<br>
                <a href="http://tidd.ly/657d38a6" target="_blank" onclick="gtag('event', 'click', {'event_category': 'Promo Banner Footer','event_label':'SATISFYER'});" style="padding:0.4rem 2.14rem;margin-left:0px;" class="btn-primary waves-effect waves-light btn">
                    <i class="fas fa-eye"></i> Jetzt ansehen</a>
            </div>
            <div class="col-1" id="toggler" class="slideInUp animated delay-5s">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>



    <!--
    <div class="d-block d-sm-none pt-2">

        <div class="row justify-content-md-center">
            <div class="col-3">
                <img src="/img/satisfyer-pro-2.jpg" style="max-height:120px" class="mx-auto d-block">
            </div>
            <div class="col-9">

                <span style="font-size:25px;font-weight:bolder;font-family: LinotteRegular, Arial, sans-serif !important">
                    Satisfyer Pro 2</span><br>
                <div style="text-align:left;color:#FFD701;font-size:16px">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    5 von 5</div>

                Bester Orgasmus-Garantie!<br>
                <a href="http://tidd.ly/657d38a6" target="_blank" onclick="gtag('event', 'click', {'event_category': 'Promo Banner Footer','event_label':'SATISFYER'});" style="font-size:15px;padding:0.4rem 2.14rem;margin-left:0px;" class="btn-primary waves-effect waves-light btn">
                    <i class="fas fa-eye"></i> Jetzt ansehen</a>
            </div>

            <div id="toggler" class="slideInUp animated delay-5s">
                <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>-->
</div>