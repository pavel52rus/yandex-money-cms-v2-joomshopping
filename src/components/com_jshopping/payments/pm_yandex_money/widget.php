<script src="https://kassa.yandex.ru/checkout-ui/v2.js"></script>
<script>
    const checkout = new window.YandexCheckout({
        confirmation_token: '<?= $token; ?>',
        return_url: '<?= $returnUrl; ?>',
        embedded_3ds: true,
        error_callback: function (error) {
            if (error.error === 'token_expired') {
                document.location.redirect('<?= $returnUrl; ?>');
            }
            console.log(error);
        }
    });
</script>

<div id="ym-widget-checkout-ui" style="margin-top: 20px"></div>
<button onclick="history.go(-1);" class="a_checkout_back_button btn"><?=constant("_JSHOP_YM_BTN_BACK")?></button>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        checkout.render('ym-widget-checkout-ui');
    });
</script>