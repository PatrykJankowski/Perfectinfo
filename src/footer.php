</main>

<footer class="footer">
    <div class="container d-flex align-items-center justify-content-center flex-direction-col-lg p-20">
        <span class="py-10">©2020 PerfectInfo.</span>
        <span class="mt-10 mt-0-lg hide-max-lg">Kontakt:</span>
        <a class="color-grey-light mx-10" href="mailto:kontakt@perfectinfo.pl">kontakt@perfectinfo.pl</a>
        <span class="hide-max-lg">|</span>
        <a class="color-grey-light mx-10" href="tel:+48732080876">tel. +48 732 08 08 76</a>
        <span class="hide-max-lg">|</span>
        <a class="mt-20 mt-0-lg color-grey-light mx-10" href="/blog">Blog</a>
        <span class="hide-max-lg">|</span>
        <a class="color-grey-light mx-10" href="/polityka-prywatnosci">Polityka prywatności</a>
    </div>
</footer>

<script>
    window.addEventListener('CookiebotOnConsentReady', () => {
        Cookiebot.changed && document.location.reload();
    })

    let navOpened = false;
    const initHeight = 460;

    function slideToggle() {
        const navMobile = document.getElementById('navbar__nav-mobile');
        const toggleButton = document.getElementById('navbar__toggle');

        navOpened = !navOpened;
        navMobile.style.height = navOpened ? `${initHeight}px` : '0';
        toggleButton.classList.toggle('navbar__toggle--open', navOpened);
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
