

<footer class="bg-light text-black">
    <div class="container">

        <div class="row justify-content-center border-bottom  align-items-center">
            <div class="col-md-6">
                <div class="footer-link-help">
                    <span>Need Help?</span>

                    <ul>
                        <li><a href="/contact#faq"><i class="material-icons">help_outline</i> FAQs</a></li>
                        <li><a href="#"><i class="material-icons">chat_bubble_outline</i> Live Chat</a></li>
                        <li><a href="#"><i class="material-icons">alternate_email</i> Email Us</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6">
                <div class="footer-link-help footer-link-help-social">
                    <span>Connect</span>

                    <ul>
                        <li><a href="https://www.instagram.com/swift_trades.fx"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">

                <div class="footer-caution">
                    <p class="fs-13 text-black-50-footer">
                        <b>Caution:</b> Trading involves the possibility of financial loss. Only trade with money that you are prepared to lose, you must recognise that for factors outside your control you may lose all of the money in your trading account. Many forex brokers also hold you liable for losses that exceed your trading capital. So you may stand to lose more money than is in your account. swiftfx takes no responsibility for loss incurred as a result of our trading signals. By signing up as a member you acknowledge that we are not providing financial advice and that you are making a the decision to copy our trades on your own account. We have no knowledge on the level of money you are trading with or the level of risk you are taking with each trade. You must make your own financial decisions, we take no responsibility for money made or lost as a result of our signals or advice on forex related products on this website.
                    </p>

                    <span class="fs-14">Copyright © 2019 SwiftFX | <a href="#"> Terms & Conditions</a> | <a href="#">Privacy Policy</a> | Design by <a href="https://fabdevs.com/">Fabdevs</a></span>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-menu">
                    <ul class="link-decoration-border">

                        <?php if(isset($page) and $page=='dashboard'){ ?>
                            <li><button data-modal-trigger="can-1" class="trigger">Delete My Account</button></li>
                            <li><a href="<?=$TOP?>/contact">Support</a></li>
                        <?php }else{ ?>

                        <li><a href="<?=$TOP?>/#intro">Home</a></li>
                        <li><a href="<?=$TOP?>/register">Register</a></li>
                        <li><a href="<?=$TOP?>/login">Login</a></li>
                        <li><a href="<?=$TOP?>/#pricing">Pricing</a></li>
                        <li><a href="<?=$TOP?>/contact">Support</a></li>

                       <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
