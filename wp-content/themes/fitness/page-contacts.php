<?php
/*
Template Name: Шаблон "Contacts"
*/
?>
<?php get_header(); ?>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A951ffaca1c505e0dc4f9333810347340108fb39c7b3f88a7087d0f80abf61f69&amp;source=constructor" width="100%" height="600" frameborder="0"></iframe>                  
				<div class="contact-card">
                    <h2>Наши контакты</h2>
                    <div class="contact-item"><span>Адрес:</span><?php the_field("site_address", "option"); ?></div>
                     <div class="contact-item"><span>Телефон:</span>
                        	<a href="tel:<?php the_field("site_telephon", "option"); ?>"><?php the_field("site_telephon", "option"); ?></a>
                    </div>
                    <div class="contact-item"><span>Email:</span>
                        <a href="mailto:<?php the_field("site_email", "option"); ?>"><?php the_field("site_email", "option"); ?></a>
                    </div>
                    <div class="contact-item"><span>Часы роботы:</span><?php the_field("site_time", "option"); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>