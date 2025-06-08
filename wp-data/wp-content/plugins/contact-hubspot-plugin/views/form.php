<form method="post">
    <input type="text" name="name" placeholder="Name *" required>
    <input type="email" name="email" placeholder="Email *" required>
    <input type="hidden" name="custom_contact_form" value="1" />
    <button type="submit" class="submit">
        SEND
        <img src="<?= get_theme_file_uri('assets/images/contact.svg') ?>" alt="">
    </button>
</form>
