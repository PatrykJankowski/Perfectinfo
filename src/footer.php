</main>

<footer class="footer">
    <div class="container h-100 d-flex align-items-center justify-content-center flex-direction-col-lg p-20">
        <span class="py-10">©2020 PerfectInfo. </span> <span class="mt-10 mt-0-lg hide-max-lg"> Kontakt:</span>
        <a class="color-grey-light ml-5 mr-5" href="mailto:kontakt@perfectinfo.pl">kontakt@perfectinfo.pl</a>
        <span class="hide-max-lg">|</span>
        <a class="color-grey-light ml-5 mr-5" href="tel:+48732080876">tel. +48 732 08 08 76</a>
        <span class="hide-max-lg">|</span>
        <a class="mt-10 mt-0-lg color-grey-light ml-5 mr-5" href="/blog">Blog</a>
        <span class="hide-max-lg">|</span>
        <a class="color-grey-light ml-5 mr-5" href="/polityka-prywatnosci">Polityka prywatności</a>
    </div>
</footer>

<script>
    window.addEventListener('CookiebotOnConsentReady', () => {
        Cookiebot.changed && document.location.reload();
    })

    let navOpened = false;
    let initHeight = 460;

    function slideToggle() {
        let navMobile = document.getElementById('navbar__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('navbar__toggle').classList.remove('navbar__toggle--open');
        } else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('navbar__toggle').classList.add('navbar__toggle--open');
        }
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
