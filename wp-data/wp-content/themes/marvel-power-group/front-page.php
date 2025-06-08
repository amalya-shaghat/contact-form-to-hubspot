<?php get_header(); ?>

<section class="banner">
    <div class="banner-main">
        <div class="main-container">
            <h1>Marvel Power Group</h1>
            <p>Marvel Power Group is a boutique consulting firm with a fresh, markets-based approach to value creation. We offer services to clients in energy, water, manufacturing and transportation sectors.</p>
            <a href="#contact" class="contact-us-button">
                CONTACT US
                <img src="<?= get_theme_file_uri('assets/images/contact.svg') ?>" alt="">
            </a>
        </div>
    </div>
    <div class="left-nav color-white">
        <ul>
            <li class="active">01 Home</li>
            <li>02</li>
            <li>03</li>
            <li>04</li>
        </ul>
    </div>
</section>

<section id="about" class="about-section">
    <div class="main-container">
        <h2>About Us</h2>
        <div class="about-main">
            <div class="about-image">
                <img src="<?= get_theme_file_uri('assets/images/about.jpg') ?>" alt="About Us">
            </div>
            <div class="about-text">
                <p>
                    Our dynamic, solutions-oriented team brings decades of relevant transactional, analytical and regulatory experience to supporting our clients’ unique agendas.
                </p>
                <p>
                    We are experienced practitioners who have run companies, successfully originated and closed complex deals, advocated and negotiated favorable policy and advanced technological innovation and climate leadership.
                </p>
                <p>
                    We specialize in structuring balanced solutions for all affected stakeholders and uncovering economic opportunities in otherwise opaque environments.
                </p>
            </div>
        </div>
    </div>
    <div class="left-nav">
        <ul>
            <li>01</li>
            <li class="active">02 About</li>
            <li>03</li>
            <li>04</li>
        </ul>
    </div>
</section>

<section id="services">
    <div class="main-container">
        <h2>Services</h2>
        <p class="desc">Our clients are at the forefront of energy transition and innovation. Their task is complex: balance reliability and cost effectiveness with new customer demands, investment decisions, decarbonization goals and an evolving menu of new technologies. We understand the task and bring deep expertise
            to addressing these challenges.</p>
        <div class="services-info">
            <div>
                <h3>Enterprise <br>Strategy</h3>
                <ul>
                    <li>Procurement and investment diligence</li>
                    <li>Customer engagement and retention</li>
                    <li>Renewable, DER, and EV program structuring</li>
                    <li>Reliability planning and reporting</li>
                </ul>
                <img src="<?= get_theme_file_uri('assets/images/services-arrow.svg') ?>" alt="">
            </div>
            <div>
                <h3>Wholesale <br>Power</h3>
                <ul>
                    <li>Commodity advisory and RFPs</li>
                    <li>Energy, capacity, REC, RIN, and LCFS placement</li>
                    <li>Enterprise PPA structuring</li>
                    <li>Contract extensions and re-packaging</li>
                </ul>
                <img src="<?= get_theme_file_uri('assets/images/services-arrow.svg') ?>" alt="">
            </div>
            <div>
                <h3>Market <br>Development</h3>
                <ul>
                    <li>New venture setup</li>
                    <li>Demand planning and acquisition</li>
                    <li>Project development and regulatory support</li>
                    <li>Partnership structuring</li>
                </ul>
                <img src="<?= get_theme_file_uri('assets/images/services-arrow.svg') ?>" alt="">
            </div>
        </div>
        <p class="desc desc-second">Our clients are time constrained and under-resourced. Agendas shift, budgets move and priorities change. We understand. We are agile, creative and immediately responsive to your various working styles, governance requirements and evolving needs. </p>
    </div>
    <div class="left-nav">
        <ul>
            <li>01</li>
            <li>02</li>
            <li class="active">03 Services</li>
            <li>04</li>
        </ul>
    </div>
</section>

<section id="contact">
    <div class="main-container">
        <div class="contact-main">
            <div class="contact-info">
                <h2>Contact</h2>
                <p>Email us here:<br><a href="mailto:info@marvelpowergroup.com">info@marvelpowergroup.com</a></p>
            </div>
            <div>
                <h3>Stay in the loop <br>by getting on <br>our mailing list</h3>
                <?= do_shortcode('[contact_us_form]') ?>
            </div>
        </div>
    </div>
    <div class="left-nav color-white">
        <ul>
            <li>01</li>
            <li>02</li>
            <li>03</li>
            <li class="active">04 Contact</li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>
