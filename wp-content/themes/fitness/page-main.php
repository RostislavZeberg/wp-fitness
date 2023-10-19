<?php
/*
Template Name: Шаблон "Main page"
*/
?>
<?php get_header(); ?>

<header>
	<style>
		header {
			background-image: url(<?php the_field('hero_img'); ?>);
		}
      html {
         scroll-behavior: smooth;
      }
	</style>
        <div class="container">
            <div class="header-box">
               <h1><?php the_field('hero_h1'); ?></h1>
               <div class="after-h1"><?php the_field('hero_p'); ?></div>
               <a href="index.html#modal-call" data-toggle="modal" class="btn main-btn">Перезвоните мне</a>
            </div>
            <div class="header-form">
                <div id="clockdiv">
                    <div>
                        <span class="days">10</span>
                        <div class="smalltext">Дней</div>
                    </div>
                    <div>
                        <span class="hours">23</span>
                        <div class="smalltext">Часов</div>
                    </div>
                    <div>
                        <span class="minutes">58</span>
                        <div class="smalltext">Минут</div>
                    </div>
                    <div>
                        <span class="seconds">03</span>
                        <div class="smalltext">Секунд</div>
                    </div>
                </div>
                <?php if( have_rows('hero_timer') ): ?>
				<?php while( have_rows('hero_timer') ): the_row(); ?>

					<div class="header-form-text">
	                    <h3><?php the_sub_field('hero_timer_title'); ?></h3>
	                    <div class="text"><?php the_sub_field('hero_timer_subtitle'); ?></div>
	                    <a href="index.html#modal-order" data-toggle="modal"><span class="pe-7s-call"></span></a>
	                </div>

				<?php endwhile; ?>
				<?php endif; ?>                
            </div>
        </div>
</header>
<section id="timing">
    <div class="container">
        <h2><?php the_field('schedule_h2'); ?></h2>
        <div class="after-h2"><?php the_field('schedule_p'); ?></div>
        <ul class="nav nav-pills">
               <?php if(get_field('schedule_lessons')): $i = 0; ?>
               <?php while(has_sub_field('schedule_lessons')) : $i++; ?>
                  <li><a data-toggle="pill" href="index.html#timing-tab<?php echo $i; ?>"><?php the_sub_field('schedule_lessons_day'); ?></a></li>
               <?php endwhile; ?>
               <?php endif; ?>               
            </ul>
            <div class="tab-content">
               <?php if(get_field('schedule_lessons')): $i = 0; ?>
               <?php while(has_sub_field('schedule_lessons')) : $i++; ?>
               <div id="timing-tab<?php echo $i; ?>" class="tab-pane fade in">
                  <?php if(get_sub_field('schedule_lessons_lesson')): ?>
                  <?php while(has_sub_field('schedule_lessons_lesson')) : ?>
                     <div class="time-box">
                        <div class="time"><?php the_sub_field('schedule_lessons_lesson_time'); ?></div>
                        <div class="title"><?php the_sub_field('schedule_lessons_lesson_name'); ?></div>
                        <div class="name"><?php the_sub_field('schedule_lessons_lesson_coach'); ?></div>
                     </div> 
                  <?php endwhile; ?>
                  <?php endif; ?>                                      
               </div>
               <?php endwhile; ?>
               <?php endif; ?> 
            </div>
    </div>
</section>
<section id="sale">
	<style>
		#sale {
   			background-image: url(<?php the_field('discount_img'); ?>);
		}
	</style>
         <div class="container">
            <h2><?php the_field('discount_h2'); ?></h2>
            <div class="after-h2"><?php the_field('discount_p'); ?></div>
            <a href="index.html#modal-order" data-toggle="modal" class="btn main-btn">Записаться сейчас</a>
         </div>
</section>
<section id="sport">
         <div class="container">
            <?php if(get_field('lessons_lesson')): ?>
            <?php while(has_sub_field('lessons_lesson')) : ?>
               <div class="col-md-6 col-sm-12">
                  <div class="sport-box sp1">
                     <div class="sport-over">
                        <span class="title"><?php the_sub_field('lessons_lesson_title'); ?></span>
                        <div class="text">От <span><?php the_sub_field('lessons_lesson_price'); ?></span> рублей в месяц</div>
                        <a href="index.html#modal-order" class="btn main-btn" data-toggle="modal">Записаться</a>
                     </div>
                     <img src="<?php the_sub_field('lessons_lesson_img'); ?>" alt="">
                  </div>
               </div>
            <?php endwhile; ?>
            <?php endif; ?>            
         </div>
</section>
<section id="about">
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <h2><?php the_field('about_h2'); ?></h2>
                  <div class="after-h2"><?php the_field('about_p'); ?></div>
                  <div class="text">                  	
                     <ul>
                     	<?php if(get_field('about_list')): ?>
						<?php while(has_sub_field('about_list')) : ?>
						      <li><?php the_sub_field('about_list_p'); ?></li>
						<?php endwhile; ?>
						<?php endif; ?>                        
                     </ul>
                  </div>
                  <a href="index.html#modal-order" data-toggle="modal" class="btn main-btn">Заказать сейчас</a>
               </div>
               <div class="col-sm-4">
               		<?php if(get_field('about_advantages')): ?>
					<?php while(has_sub_field('about_advantages')) : ?>
                    <div class="about-item">
                        <div class="num"><?php the_sub_field('about_advantages_number'); ?></div>
                        <span><?php the_sub_field('about_advantages_title'); ?></span>
                        <?php the_sub_field('about_advantages_content'); ?>
                    </div>
                    <?php endwhile; ?>
					<?php endif; ?>
               </div>
            </div>
         </div>
</section>
<section id="review">
    <div class="container">
        <h2>Отзывы клиентов</h2>
        <div class="after-h2">Что говорят люди о нашем спортивном комплексе</div>
        <div id="review-carousel" class="owl-carousel owl-loaded owl-drag">
        	<?php if(get_field('reviews_content')): ?>
			<?php while(has_sub_field('reviews_content')) : ?>
        	<div class="owl-item " >
                <div>
                    <div class="review-box">
                        <div class="re">"</div>
                        <img src="<?php the_sub_field('reviews_content_avatar'); ?>">
                        <div class="text"><?php the_sub_field('reviews_content_description'); ?></div>
                        <div class="autor"><?php the_sub_field('reviews_content_name'); ?> 
                        	<span class="date"><?php the_sub_field('reviews_content_date'); ?></span>
                    	</div>
                    </div>
                </div>
        	</div>
        	<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>