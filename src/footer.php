</main>

<footer class="footer">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        ©2020 PerfectInfo. Kontakt: <a class="color-grey-light ml-5 mr-5" href="mailto:kontakt@perfectinfo.pl">kontakt@perfectinfo.pl</a> | <a class="color-grey-light ml-5 mr-5" href="tel:+48732080876">tel. +48 732 08 08 76</a> | <a class="color-grey-light ml-5 mr-5" href="/blog">Blog</a> | <a class="color-grey-light ml-5 mr-5" href="/polityka-prywatnosci">Polityka prywatności</a>
    </div>
</footer>

<script>
    /*window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'XXX');*/

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
