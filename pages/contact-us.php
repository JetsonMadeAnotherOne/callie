<?php
/**Template Name: contact page*/
get_header();
?>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title">Contact Information</h2>
                    </div>
                    <p>Malis debet quo et, eam an lorem quaestio. Mea ex quod facer decore, eu nam mazim postea. Eu deleniti pertinacia ius. Ad elitr latine eam, ius sanctus eleifend no, cu primis graecis comprehensam eum. Ne vim prompta consectetuer, etiam signiferumque ea eum.</p>
                    <ul class="contact">
                        <li><i class="fa fa-phone"></i> 202-555-0194</li>
                        <li><i class="fa fa-envelope"></i> <a href="#">callie@email.com</a></li>
                        <li><i class="fa fa-map-marker"></i> 123 6th St.Melbourne, FL 32904</li>
                    </ul>
                </div>

                <div class="section-row">
                    <div class="section-title">
                        <h2 class="title">Mail us</h2>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="109" title="contact-us-form"]' ); ?>
                </div>
            </div>
	        <?php get_sidebar('home'); ?>
        </div>
    </div>
    <?php get_footer(); ?>
