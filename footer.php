<footer>
    <div class="container">
        <div class="footer-copyright">
            <div class="footer-text">
                <p>Copyright © 2018-2022 . Все права защищены.<br>
                    <strong><a href="http://nikonorow.ru/" class="yellow">nikonorow.ru</a></strong> (ex.: woronokin.site) | портфолио, блог.
                </p>
            </div>
        </div>
        <div class="footer-icons">
            <span class="soc-icons">
                <a href="https://vk.com/woronokin" title="VK" target="_blank" aria-label="Перейти в VK">
                    <svg width="37px" height="37px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.579 6.855c.14-.465 0-.806-.662-.806h-2.193c-.558 0-.813.295-.953.619 0 0-1.115 2.719-2.695 4.482-.51.513-.743.675-1.021.675-.139 0-.341-.162-.341-.627V6.855c0-.558-.161-.806-.626-.806H9.642c-.348 0-.558.258-.558.504 0 .528.79.65.871 2.138v3.228c0 .707-.127.836-.407.836-.743 0-2.551-2.729-3.624-5.853-.209-.607-.42-.852-.98-.852H2.752c-.627 0-.752.295-.752.619 0 .582.743 3.462 3.461 7.271 1.812 2.601 4.363 4.011 6.687 4.011 1.393 0 1.565-.313 1.565-.853v-1.966c0-.626.133-.752.574-.752.324 0 .882.164 2.183 1.417 1.486 1.486 1.732 2.153 2.567 2.153h2.192c.626 0 .939-.313.759-.931-.197-.615-.907-1.51-1.849-2.569-.512-.604-1.277-1.254-1.51-1.579-.325-.419-.231-.604 0-.976.001.001 2.672-3.761 2.95-5.04z" />
                    </svg>
                </a>
                <a href="https://t.me/woronokin" title="Telegram" aria-label="Перейти в Telegram">
                    <svg width="37px" height="37px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z" />
                    </svg>
                </a>
            </span>
        </div>
    </div>
</footer>

<script type="text/javascript">
    let hamburger = document.querySelector(".hamburger");
    let menu = document.querySelector(".menublock");
    let menuClose = document.querySelector(".topmenu");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("is-active");
        menu.classList.toggle("active");
        menuClose.classList.remove("disable");
    });
    menuClose.addEventListener("click", function() {
        hamburger.classList.toggle("is-active");
        menu.classList.toggle("active");
    });
</script>
<?php wp_footer(); ?>

</body>

</html>