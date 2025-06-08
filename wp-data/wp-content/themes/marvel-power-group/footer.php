<?php wp_footer(); ?>
<script>
    $('#burger').on('click', function() {
        $('#mobileMenu').addClass('active');
    });

    $('#closeMenu').on('click', function() {
        $('#mobileMenu').removeClass('active');
    });

    $('.contact-us-button.contact-mobile').on('click', function() {
        $('#mobileMenu').removeClass('active');
    });
</script>

</body>
</html>
