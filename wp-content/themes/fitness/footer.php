<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitness
 */

?>

<footer>
    <div class="container">
        <div class="footer-title"><?php the_field("site_title", "option"); ?></div>
        <div class="footer-action">
               <a href="index.html#modal-call" data-toggle="modal" class="btn main-btn">Заказать звонок</a>
               <div class="contact">
                  <span class="adress"><?php the_field("site_address", "option"); ?></span>
                  <a href="tel:<?php the_field("site_telephon", "option"); ?>"><?php the_field("site_telephon", "option"); ?></a>
               </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright"><?php the_field("site_descriptor", "option"); ?></div>
                </div>
                <div class="col-sm-6">
                    <a href="index.html#modal-privacy" data-toggle="modal" class="link-privacy"><?php the_field("site_politics_title", "option"); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
    <div id="modal-order" class="modal fade" role="dialog">
         <div class="modal-dialog call_modal">
            <div class="modal-content">
               <form id="form-order" action="thankyou.php" method="post">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Записаться на занятие</h4>
                     <p class="after-modal-title text-center">Оставьте свои данные и наши менеджеры свяжутся с вами для уточнения деталей</p>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <input type="text" name="Имя" class="form-control" placeholder="Ваше имя" required="">
                     </div>
                     <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Ваш E-mail" required="">
                     </div>
                     <div class="form-group">
                        <input type="text" name="Телефон" class="form-control phone-mask" placeholder="+7 (999) 999-99-99" required="">
                     </div>
                     <input type="hidden" name="Форма" value="Оформление записи на занятие">
                     <button type="submit" class="btn main-btn form-btn">Перезвоните мне</button>
                  </div>
               </form>
            </div>
         </div>
    </div>
    <div id="modal-call" class="modal fade" role="dialog">
         <div class="modal-dialog call_modal">
            <div class="modal-content">
               <form id="form-call" action="thankyou.php" method="post">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Заказать обратный звонок</h4>
                     <p class="after-modal-title">Оставьте свой номер телефона и наши менеджеры свяжутся с вами в ближайшее время</p>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <input type="text" name="Телефон" class="form-control phone-mask" placeholder="+7 (999) 999-99-99" required="">
                     </div>
                     <input type="hidden" name="Форма" value="Заказ обратного звонка">
                     <button type="submit" class="btn main-btn form-btn">Перезвоните мне</button>
                  </div>
               </form>
            </div>
         </div>
    </div>
    <div id="modal-privacy" class="modal fade" role="dialog">
         <div class="modal-dialog privacy_modal modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title"><?php the_field("site_politics_title", "option"); ?></h4>
               </div>
               <div class="modal-body">
                  <div class="privacy_text">
                     <?php the_field("site_politics", "option"); ?>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    	<script type="text/javascript">
            $(document).ready(function () {
	            $('.nav-pills>li:first-child').addClass('active');
	            $('#timing-tab1').addClass('active');
            });
        </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
   </body>
</html>


