<?php
    /*
        Template Name: Tienda
    */
    get_header('shop');
?>
<body>

	<?php get_template_part('nav')?>
    <section class="ftco-section contact-section" id="contacto">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col md-8">
                <?php echo do_shortcode('[products limit="12" columns="3" paginate="true"]'); ?>
            </div>
            <div class="col md-4">
                <?php get_sidebar('shop'); ?>
            </div>
        </div>
      </div>
    </section>
    
<?php
    get_footer('shop');
?>
