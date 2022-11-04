<?php
/**
*** Template Name: Contact Page
**/
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-contact">
        <section class="hero hero-title">
            <div class="container container-narrow">
                <h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
            </div>
        </section>
        <section class="contact content-section">
            <div class="container container-narrow">
                <div class="wrapper">
                    <?php the_content(); ?>
                    <div class="form contact-form">
                        <?php echo do_shortcode(('[contact-form-7 id="'.get_field('contact_page_form').'"]')); ?>
                        <!-- <form action="">
                            <div class="form-items">
                                <div class="form-item item-input item-input-row">
                                    <div class="item-input-column">
                                        <label for="yourname">Full Name <span class="required-asterisk">*</span></label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="yourname">
                                            <input type="text" name="yourname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required cf-input" id="yourname" placeholder="Enter your full name*">
                                        </span>
                                    </div>
                                    <div class="item-input-column">
                                        <label for="emailaddress">Email address <span class="required-asterisk">*</span></label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="emailaddress">
                                            <input type="text" name="emailaddress" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required cf-input" id="emailaddress" placeholder="Enter your email address*">
                                        </span>
                                    </div>
                                </div>
                                <div class="form-item item-input item-input-row">
                                    <div class="item-input-column">
                                        <label for="address1">Address Line 1:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="address1">
                                            <input type="text" name="address1" value="" size="40" class="wpcf7-form-control wpcf7-text cf-input" id="address1" placeholder="Enter your address line 1">
                                        </span>
                                    </div>
                                    <div class="item-input-column">
                                        <label for="address2">Address Line 2:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="address2">
                                            <input type="text" name="address2" value="" size="40" class="wpcf7-form-control wpcf7-text cf-input" id="address2" placeholder="Enter your address line 2">
                                        </span>
                                    </div>
                                </div>
                                <div class="form-item item-input item-input-row">
                                    <div class="item-input-column">
                                        <label for="towncity">Town/City:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="towncity">
                                            <input type="text" name="towncity" value="" size="40" class="wpcf7-form-control wpcf7-text cf-input" id="towncity" placeholder="Enter your town/city">
                                        </span>
                                    </div>
                                    <div class="item-input-column">
                                        <label for="county">County:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="county">
                                            <input type="text" name="county" value="" size="40" class="wpcf7-form-control wpcf7-text cf-input" id="county" placeholder="Enter your county">
                                        </span>
                                    </div>
                                </div>
                                <div class="form-item item-input item-input-row">
                                    <div class="item-input-column">
                                        <label for="postcode">Postcode:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="postcode">
                                            <input type="text" name="postcode" value="" size="40" class="wpcf7-form-control wpcf7-text cf-input" id="postcode" placeholder="Enter your postcode">
                                        </span>
                                    </div>
                                    <div class="item-input-column">
                                        <label for="telephone">Telephone:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="telephone">
                                            <input type="text" name="telephone" value="" size="40" class="wpcf7-form-control wpcf7-text cf-input" id="telephone" placeholder="Enter your telephone">
                                        </span>
                                    </div>
                                </div>
                                <div class="form-item item-input item-input-row">
                                    <div class="item-input-column">
                                        <label for="enquiry">Enquiry Type:</label>
                                        <br />
                                        <div class="field-select">
                                            <span class="wpcf7-form-control-wrap" data-name="enquiry">
                                                <select name="enquiry" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required cf-select" id="enquiry" aria-required="true" aria-invalid="false">
                                                    <option value="General Enquiry">General Enquiry</option>
                                                    <option value="Become a stockist">Become a stockist</option>
                                                    <option value="Delivery/Order Enquiry">Delivery/Order Enquiry</option>
                                                    <option value="Feedback">Feedback</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="item-input-column">
                                        <label for="message">Message:</label>
                                        <br />
                                        <span class="wpcf7-form-control-wrap" data-name="message">
                                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required cf-textarea" id="message" aria-required="true" aria-invalid="false" placeholder="Enter your message"></textarea>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-item item-submit item-submit-purple button-right">
                                    <div class="field-submit">
                                        <input type="submit" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit cf-submit" id="submitform"><span class="wpcf7-spinner"></span>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </section>
        <?php include 'cta-section.php'; ?>
    </main>
<?php get_footer(); ?>