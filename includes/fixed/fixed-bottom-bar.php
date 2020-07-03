


<style>
    
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

        .close-icon {
            cursor: pointer;
            position: absolute;
            top: -14px;
            right: 10px;
            font-size: 30px;
            color: #000;
        }
    
</style>

<script>
    function minimizeBar() {
        $('#promo-bar').removeClass('slideInUp delay-1s');
        $('#promo-bar').addClass('slideOutDown ');
        document.body.style.marginBottom = "0px";

    }
</script>

<div class="fixed-bottom fixed-bottom-bar slideInUp animated delay-1s" id="promo-bar">
    
    <div>
        <i class="fas fa-arrow-alt-circle-right"></i> 10% Rabatt bei <strong>venize</strong>
        <button style="padding:8px 8px 6px 8px;font-size:16px" type="button" class="btn btn-md btn-primary waves-effect waves-light" data-target="#modalCoupon" data-toggle="modal" > <span style="padding-right:2px;">😧</span> WHAAAT?
</button>
    </div>
</div>

<?php include("promo_banner.php")?>