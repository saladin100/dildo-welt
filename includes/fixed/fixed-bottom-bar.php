<style>
    @media (min-width: 576px) {
        .fixed-bottom-bar {
            background-color: #42B3A2;
            color: #fff;
            height: 52px;
            padding: 2px 10px;
            text-align: center;
            font-size: 16px
        }

        body {
            margin-bottom: 40px;
        }
    }

    @media (max-width: 575px) {
        .fixed-bottom-bar {
            background-color: #42B3A2;
            color: #fff;
            height: 52px;
            padding: 2px 10px;
            text-align: center;
            font-size: 16px
        }

        body {
            margin-bottom: 40px;
        }


    }
</style>



<div style="cursor: pointer" onclick="gtag('event', 'click', {'event_category': 'Promo Banner','event_label':'Open Modal'});" class="fixed-bottom fixed-bottom-bar slideInUp animated delay-5s" 
id="promo-bar" style="font-family: LinotteRegular, Arial, sans-serif !important;" data-target="#modalDiscount" data-toggle="modal">

    <div class="d-none d-sm-block">
        <span style="padding-right:2px;">👉</span> <strong>WHAAAT?</strong> 10% Rabatt bei <strong>venize</strong>
        <button style="padding:8px 33px 6px 33px;font-size:16px" type="button" class="btn btn-md  btn-primary waves-effect waves-light" > Ja, will ich!
        </button>
    </div>

    <div class="d-block d-sm-none">
    <span style="padding-right:4px;">🎁</span> Lust auf ein Geschenk?
    <button style="padding:8px 20px 6px 20px;font-size:16px" type="button" class="btn btn-md  btn-primary waves-effect waves-light" > Na klar!
        </button>
    </div>
</div>

<?php include("promo_banner.php") ?>