<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - RFPMart + USWDS</title>
    <meta name="description" content="Get in touch with RFPMart City. Find our contact information, office hours, and send us a message." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <!-- ========================= HERO SECTION ========================= -->
        <section class="usa-hero bg-primary-dark" aria-label="Contact Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-tablet bg-transparent padding-0">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item usa-current" aria-current="page">
                                <span class="text-base-lightest">Contact Us</span>
                            </li>
                        </ul>
                    </nav>
                    <h1 class="usa-hero__heading margin-top-2">
                        <span class="usa-hero__heading--alt text-white">
                            Get In Touch
                        </span>
                    </h1>
                    <p class="text-white">
                        We're here to help. Reach out to us through any of the channels below or send us a message directly.
                    </p>
                </div>
            </div>
        </section>

        <!-- ========================= CONTACT CARDS SECTION ========================= -->
        <section class="grid-container usa-section">
            <div class="usa-card-group grid-row grid-gap">
                <!-- Phone Card -->
                <article class="usa-card tablet:grid-col-4">
                    <div class="usa-card__container text-center hover:shadow-4">
                        <div class="usa-card__header display-flex flex-column flex-align-center">
                            <div class="display-flex flex-justify-center flex-align-center width-10 height-10 radius-pill bg-primary-lighter margin-bottom-2">
                                <svg class="usa-icon usa-icon--size-4 text-primary" aria-hidden="true">
                                    <use href="uswds/dist/img/sprite.svg#phone"></use>
                                </svg>
                            </div>
                            <h3 class="usa-card__heading">Call Us</h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-top-0">Speak directly with our support team during business hours.</p>
                            <a href="tel:+1-315-627-3333" class="usa-link font-heading-lg text-bold">(315) 627-3333</a>
                            
                        </div>
                    </div>
                </article>

                <!-- Email Card -->
                <article class="usa-card tablet:grid-col-4">
                    <div class="usa-card__container text-center hover:shadow-4">
                        <div class="usa-card__header display-flex flex-column flex-align-center">
                            <div class="display-flex flex-justify-center flex-align-center width-10 height-10 radius-pill bg-primary-lighter margin-bottom-2">
                                <svg class="usa-icon usa-icon--size-4 text-primary" aria-hidden="true">
                                    <use href="uswds/dist/img/sprite.svg#mail"></use>
                                </svg>
                            </div>
                            <h3 class="usa-card__heading">Email Us</h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-top-0">Send us an email and we'll respond within 24-48 hours.</p>
                            <a href="mailto:no-reply@rfpmartllc.com" class="usa-link font-heading-md text-bold">no-reply@rfpmartllc.com</a>
                        </div>
                    </div>
                </article>

                <!-- Location Card -->
                <article class="usa-card tablet:grid-col-4">
                    <div class="usa-card__container text-center hover:shadow-4">
                        <div class="usa-card__header display-flex flex-column flex-align-center">
                            <div class="display-flex flex-justify-center flex-align-center width-10 height-10 radius-pill bg-primary-lighter margin-bottom-2">
                                <svg class="usa-icon usa-icon--size-4 text-primary" aria-hidden="true">
                                    <use href="uswds/dist/img/sprite.svg#location_on"></use>
                                </svg>
                            </div>
                            <h3 class="usa-card__heading">Visit Us</h3>
                        </div>
                        <div class="usa-card__body">
                            <p class="margin-top-0">Come to our office during regular business hours.</p>
                            <address class="font-heading-sm text-bold" style="font-style: normal;">
                                100 Main Street<br>
                                RFPMart City, NY 13000
                            </address>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- ========================= CONTACT FORM & INFO SECTION ========================= -->
        <section class="usa-section bg-base-lightest">
            <div class="grid-container">
                <div class="grid-row grid-gap-lg">
                    <!-- Left Column: Contact Form -->
                    <div class="tablet:grid-col-7">
                        <div class="bg-white padding-4 border border-base-lighter radius-md">
                            <h2 class="font-heading-xl margin-top-0">Send Us a Message</h2>
                            <p class="text-base">Fill out the form below and a member of our team will get back to you shortly.</p>

                            <form class="usa-form maxw-full" action="#" method="post">
                                <div class="grid-row grid-gap">
                                    <div class="tablet:grid-col-6">
                                        <label class="usa-label" for="contact-first-name">
                                            First Name <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
                                        </label>
                                        <input class="usa-input" id="contact-first-name" name="first-name" type="text" autocomplete="given-name" required />
                                    </div>
                                    <div class="tablet:grid-col-6">
                                        <label class="usa-label" for="contact-last-name">
                                            Last Name <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
                                        </label>
                                        <input class="usa-input" id="contact-last-name" name="last-name" type="text" autocomplete="family-name" required />
                                    </div>
                                </div>

                                <div class="grid-row grid-gap">
                                    <div class="tablet:grid-col-6">
                                        <label class="usa-label" for="contact-email">
                                            Email Address <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
                                        </label>
                                        <input class="usa-input" id="contact-email" name="email" type="email" autocomplete="email" required />
                                    </div>
                                    <div class="tablet:grid-col-6">
                                        <label class="usa-label" for="contact-phone">Phone Number</label>
                                        <input class="usa-input" id="contact-phone" name="phone" type="tel" autocomplete="tel" />
                                    </div>
                                </div>

                                <label class="usa-label" for="contact-department">Department</label>
                                <select class="usa-select" id="contact-department" name="department">
                                    <option value="">- Select a department -</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="city-council">City Council</option>
                                    <option value="mayors-office">Mayor's Office</option>
                                    <option value="public-works">Public Works</option>
                                    <option value="public-safety">Public Safety</option>
                                    <option value="finance">Finance & Budget</option>
                                    <option value="hr">Human Resources</option>
                                    <option value="it">Information Technology</option>
                                    <option value="procurement">Procurement</option>
                                </select>

                                <label class="usa-label" for="contact-subject">
                                    Subject <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
                                </label>
                                <input class="usa-input" id="contact-subject" name="subject" type="text" required />

                                <label class="usa-label" for="contact-message">
                                    Message <abbr title="required" class="usa-hint usa-hint--required">*</abbr>
                                </label>
                                <textarea class="usa-textarea" id="contact-message" name="message" rows="5" required></textarea>

                                <div class="usa-checkbox margin-top-2">
                                    <input class="usa-checkbox__input" id="contact-copy" type="checkbox" name="send-copy" value="yes" />
                                    <label class="usa-checkbox__label" for="contact-copy">Send me a copy of this message</label>
                                </div>

                                <button class="usa-button usa-button--big margin-top-3" type="submit">
                                    <svg class="usa-icon margin-right-1" aria-hidden="true">
                                        <use href="uswds/dist/img/sprite.svg#send"></use>
                                    </svg>
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Right Column: Office Information -->
                    <div class="tablet:grid-col-5">
                        <!-- Office Hours -->
                        <div class="bg-white padding-4 border border-base-lighter radius-md margin-bottom-3">
                            <h3 class="font-heading-lg margin-top-0 display-flex flex-align-center">
                                <svg class="usa-icon usa-icon--size-3 margin-right-1 text-primary" aria-hidden="true">
                                    <use href="uswds/dist/img/sprite.svg#schedule"></use>
                                </svg>
                                Office Hours
                            </h3>
                            <table class="usa-table usa-table--borderless width-full margin-0">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-no-wrap" style="border-top: 1px solid #1b1b1b;">Monday - Friday</th>
                                        <td class="text-right text-bold">8:00 AM - 5:00 PM</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-no-wrap">Saturday</th>
                                        <td class="text-right text-bold">9:00 AM - 1:00 PM</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-no-wrap">Sunday</th>
                                        <td class="text-right text-base">Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="font-body-2xs text-base margin-bottom-0 margin-top-2">
                                <strong>Note:</strong> We observe all federal holidays.
                            </p>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="usa-alert usa-alert--warning margin-bottom-3">
                            <div class="usa-alert__body">
                                <h4 class="usa-alert__heading">Emergency Services</h4>
                                <p class="usa-alert__text">
                                    For emergencies, please call <strong>911</strong>.<br>
                                    Non-emergency police line: <a href="tel:+1-315-627-3911" class="usa-link">(315) 627-3911</a>
                                </p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="bg-white padding-4 border border-base-lighter radius-md margin-bottom-3">
                            <h3 class="font-heading-lg margin-top-0">Connect With Us</h3>
                            <p class="text-base">Follow us on social media for updates and announcements.</p>
                            <div class="display-flex flex-row grid-gap-1">
                                <a href="https://www.facebook.com/RFPMart/" class="usa-social-link bg-primary hover:bg-primary-dark" aria-label="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="white" d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z" />
                                    </svg>
                                </a>
                                <a href="https://x.com/rfpmart" class="usa-social-link bg-primary hover:bg-primary-dark" aria-label="Twitter/X">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="white" d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z" />
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/rfpmart/" class="usa-social-link bg-primary hover:bg-primary-dark" aria-label="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="white" d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/company/rfpmartllc/" class="usa-social-link bg-primary hover:bg-primary-dark" aria-label="LinkedIn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="white" d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z" />
                                    </svg>
                                </a>
                                <a href="https://www.youtube.com/@rfpmart" class="usa-social-link bg-primary hover:bg-primary-dark" aria-label="YouTube">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path fill="white" d="M569.4 134.1C551.4 126.5 491.1 112 320 112C148.9 112 88.6 126.5 70.6 134.2C49.3 143.1 32 166.4 32 219.4L32 420.6C32 473.6 49.3 496.9 70.5 505.8C88.5 513.5 148.9 528 320 528C491.1 528 551.4 513.5 569.4 505.9C590.6 497 608 473.7 608 420.6L608 219.4C608 166.4 590.6 143 569.4 134.1zM262.4 399.9L262.4 240.1L416 320L262.4 399.9z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- FAQ Callout -->
                        <div class="usa-summary-box bg-primary-lighter" role="region" aria-labelledby="faq-callout">
                            <div class="usa-summary-box__body">
                                <h3 class="usa-summary-box__heading" id="faq-callout">
                                    Looking for Answers?
                                </h3>
                                <div class="usa-summary-box__text">
                                    <p>Check our Frequently Asked Questions page for quick answers to common inquiries.</p>
                                    <a href="sample-pages-faq.html" class="usa-button usa-button--outline">
                                        View FAQ
                                        <svg class="usa-icon margin-left-05" aria-hidden="true">
                                            <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================= MAP SECTION ========================= -->
        <section class="usa-section padding-y-0">
            <div class="grid-container-widescreen padding-0">
                <div class="bg-base-lighter padding-4 text-center">
                    <h2 class="font-heading-lg margin-top-0">Find Our Location</h2>
                    <p class="text-base margin-bottom-3">RFPMart City Hall - 100 Main Street, RFPMart City, NY 13000</p>
                    <!-- Embedded Google Maps -->
                    <div class="radius-md overflow-hidden" style="height: 400px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00601092436697!3d40.71272567139359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a197c06b7cb%3A0x40a06c78f79e5de6!2sNew%20York%20City%20Hall!5e0!3m2!1sen!2sus!4v1707398400000!5m2!1sen!2sus" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="RFPMart City Hall Location Map">
                        </iframe>
                    </div>
                    <p class="margin-top-2 margin-bottom-0">
                        <a href="https://www.google.com/maps/dir//New+York+City+Hall,+New+York,+NY" target="_blank" rel="noopener" class="usa-link display-inline-flex flex-align-center">
                            <svg class="usa-icon margin-right-05" aria-hidden="true">
                                <use href="uswds/dist/img/sprite.svg#directions"></use>
                            </svg>
                            Get Directions
                        </a>
                    </p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
