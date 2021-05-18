<template>
    <div>
        <div class="services">
            <div class="container uk-padding-small">
                <div class="agileits_heading_section">
                    <h3 class="wthree_head">Наша команда</h3>
                </div>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l" uk-grid>
                    <div class="uk-text-center">
                        <div>
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="images/t3.jpg" alt="">
                                <div class="uk-electric uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle" style="padding: 0">
                                    <div class="uk-flex uk-flex-column">
                                        <h3 class="uk-margin-small-top">Дмитрий</h3>
                                        <div class="social_icons">
                                            <div class="border-social border-social-twitter"><a href="https://wa.me/79288171250" class="uk-icon-link whatsapp" uk-icon="whatsapp"></a></div>
                                            <div class="border-social border-social-receiver"><a href="tel:+79288171250" class="uk-icon-link receiver" uk-icon="receiver"></a></div>
                                        </div>
                                    </div>
                                    <!-- /.uk-flex -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="uk-text-center">
                        <div>
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="images/t1.jpg" alt="">
                                <div class="uk-electric uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle" style="padding: 0">
                                    <div class="uk-flex uk-flex-column">
                                        <h3 class="uk-margin-small-top">Сергей</h3>
                                        <div class="social_icons">
                                            <div class="border-social border-social-twitter"><a href="https://wa.me/79288171250" class="uk-icon-link whatsapp" uk-icon="whatsapp"></a></div>
                                            <div class="border-social border-social-receiver"><a href="tel:+79288171250" class="uk-icon-link receiver" uk-icon="receiver"></a></div>
                                        </div>
                                    </div>
                                    <!-- /.uk-flex -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-text-center">
                        <div>
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="images/t4.jpg" alt="">
                                <div class="uk-electric uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle" style="padding: 0">
                                    <div class="uk-flex uk-flex-column">
                                        <h3 class="uk-margin-small-top">Артём</h3>
                                        <div class="social_icons">
                                            <div class="border-social border-social-twitter"><a href="https://wa.me/79288171250" class="uk-icon-link whatsapp" uk-icon="whatsapp"></a></div>
                                            <div class="border-social border-social-receiver"><a href="tel:+79288171250" class="uk-icon-link receiver" uk-icon="receiver"></a></div>
                                        </div>
                                    </div>
                                    <!-- /.uk-flex -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "GroupComponent"
}
</script>

<style scoped>
    .wthree_head {
        position: relative;
        font-weight: 600;
        color: #212121;
        text-align: center;
        padding-bottom: .8em;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: .5em;
    }
    .wthree_head::before {
        width: 11%;
        bottom: 8%;
        left: 44.5%;
    }
    .wthree_head::after {
        width: 18%;
        right: 41%;
        bottom: 0%;
    }
    .wthree_head::before, .wthree_head::after {
        position: absolute;
        background: #fb5710;
        height: 2px;
        content: '';
    }
    .social_icons a{
        color: #fff;
        text-decoration: none;

    }
    .copy_right_social p{
        color: #fff;
    }
    .border-social{
        border-radius: 50%;
        border: 2px solid #fff;
        padding: 3.5px 8px 8px 8px;
        margin: 0 10px;
        cursor: pointer;
    }
    .whatsapp{
        color: #00e676;
    }
    .border-social-twitter{
        color: #fff;
        background: #00e676;
    }
    .border-social-twitter:hover{
        color: #1da1f2;
        background: #fff;
    }
    .border-social-twitter:hover a{
        color: #00e676;
    }
    .border-social-facebook:hover a{
        color: #3b5998;
    }
    .receiver{
        color:#fff;
    }
    .receiver:hover{
        color: #fb5710;
    }
    .border-social-instagram:hover a{
        color: #f09433;
    }
    .border-social-receiver{
        background: #fb5710;
    }
    .border-social-receiver:hover{
        background: #fff;
    }
    .border-social-receiver:hover a{
        color: #fb5710;
    }
    .footer h2 {
        color: #fff;
    }
    .wthree_head {
        position: relative;
        font-size: 2em;
        font-weight: 600;
        text-align: center;
        padding-bottom: .8em;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: .5em;
    }
    .wthree_head::before, .wthree_head::after {
        position: absolute;
        background: #fb5710;
        height: 2px;
        content: '';
    }
    .wthree_head::before {
        width: 11%;
        bottom: 8%;
        left: 44.5%;
    }
    .wthree_head::after {
        width: 18%;
        right: 41%;
        bottom: 0%;
    }
    .footer input[type="text"], .footer input[type="phone"] {
        outline: none;
        color: #fff;
        padding: 10px;
        font-size: 1.5em;
        width: 82%;
        background: none;
        border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
        border-bottom: 1px solid #999;
    }
    .footer input[type="submit"] {
        outline: none;
        color: #fff;
        padding: 10px 10px;
        font-size: 1.5em;
        background: #fb5710;
        border: none;
        text-transform: uppercase;
        margin-left: 1em;
    }
    .footer input[type="submit"]:hover {
        background: #8181a7;
    }
    .w3agile_footer_grid h3 {
        font-size: 1.5em;
        color: #ffffff;
        margin: 0 0 1.5em;
    }
    .w3agile_footer_grid ul li {
        list-style-type: none;
        color: #bfbfbf;
    }
    .w3agile_footer_grid p {
        color: #bfbfbf;
        line-height: 2em;
        margin: 0;
    }
    .w3agile_footer_grid ul li a {
        color: #bfbfbf;
        text-decoration: none;
    }
    .w3agile_footer_grid ul li a {
        color: #bfbfbf;
        text-decoration: none;
    }
    .w3agile_footer_grid ul li a:hover {
        color: #fb5710;
    }
    .social_icons{
        display: flex;
        justify-content: center;

    }
</style>
