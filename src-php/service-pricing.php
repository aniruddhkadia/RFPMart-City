<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services & Pricing - RFPMart + USWDS</title>
    <meta name="description" content="Explore our government services and transparent pricing plans designed to meet your community's needs." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
        <!-- ========================= HERO SECTION ========================= -->
        <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-purchasing-procurement.webp');" aria-label="Introduction">
            <div class="grid-container">
                <div class="usa-hero__callout maxw-mobile-lg">
                    <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                        <ul class="usa-breadcrumb__list">
                            <li class="usa-breadcrumb__list-item">
                                <a href="./" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Home</span>
                                </a>
                            </li>
                            <li class="usa-breadcrumb__list-item">
                                <a href="#" class="usa-breadcrumb__link">
                                    <span class="text-base-lightest hover:text-base-light">Services</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="margin-top-0 margin-bottom-0">
                        RFPMart City
                    </p>
                    <h1 class="usa-hero__heading margin-top-0">
                        <span class="usa-hero__heading--alt">
                            Services & Pricing
                        </span>
                    </h1>
                    <p>
                        Transparent pricing for quality government services. Choose the plan that fits your community's needs.
                    </p>
                    <a class="usa-button" href="#pricing-table">View Pricing Plans</a>
                </div>
            </div>
        </section>

        <!-- ========================= SERVICE GRID SECTION ========================= -->
        <section class="grid-container usa-section">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Our Services
                </h2>
            </div>
            <div class="usa-card-group grid-row grid-gap">
                <!-- Service Card 1: Digital Services -->
                <article class="usa-card tablet:grid-col-4">
                    <div class="usa-card__container hover:shadow-4">
                        <div class="usa-card__header">
                            <div class="usa-icon width-10 height-10 margin-bottom-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#1a4480" d="M380.8 96C372.7 110.1 368 126.5 368 144L368 160L96 160L96 384L368 384L368 448L96 448C60.7 448 32 419.3 32 384L32 160C32 124.7 60.7 96 96 96L380.8 96zM368 496C368 513.5 372.7 529.9 380.8 544L152 544C138.7 544 128 533.3 128 520C128 506.7 138.7 496 152 496L368 496zM464 96L560 96C586.5 96 608 117.5 608 144L608 496C608 522.5 586.5 544 560 544L464 544C437.5 544 416 522.5 416 496L416 144C416 117.5 437.5 96 464 96zM488 160C474.7 160 464 170.7 464 184C464 197.3 474.7 208 488 208L536 208C549.3 208 560 197.3 560 184C560 170.7 549.3 160 536 160L488 160zM488 256C474.7 256 464 266.7 464 280C464 293.3 474.7 304 488 304L536 304C549.3 304 560 293.3 560 280C560 266.7 549.3 256 536 256L488 256zM544 400C544 382.3 529.7 368 512 368C494.3 368 480 382.3 480 400C480 417.7 494.3 432 512 432C529.7 432 544 417.7 544 400z" />
                                </svg>
                            </div>
                            <h3 class="usa-card__heading">Digital Services</h3>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Modern digital solutions including website development, online portals, and e-government services to connect citizens with their local government.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <a href="#" class="usa-link display-flex flex-row flex-align-center">
                                Learn More
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Service Card 2: Consulting Services -->
                <article class="usa-card tablet:grid-col-4">
                    <div class="usa-card__container hover:shadow-4">
                        <div class="usa-card__header">
                            <div class="usa-icon width-10 height-10 margin-bottom-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#1a4480" d="M256 312C322.3 312 376 258.3 376 192C376 125.7 322.3 72 256 72C189.7 72 136 125.7 136 192C136 258.3 189.7 312 256 312zM226.3 368C127.8 368 48 447.8 48 546.3C48 562.7 61.3 576 77.7 576L329.2 576C293 533.4 272 478.5 272 420.4L272 389.3C272 382 273 374.8 274.9 368L226.3 368zM477.3 552.5L464 558.8L464 370.7L560 402.7L560 422.3C560 478.1 527.8 528.8 477.3 552.6zM453.9 323.5L341.9 360.8C328.8 365.2 320 377.4 320 391.2L320 422.3C320 496.7 363 564.4 430.2 596L448.7 604.7C453.5 606.9 458.7 608.1 463.9 608.1C469.1 608.1 474.4 606.9 479.1 604.7L497.6 596C565 564.3 608 496.6 608 422.2L608 391.1C608 377.3 599.2 365.1 586.1 360.7L474.1 323.4C467.5 321.2 460.4 321.2 453.9 323.4z" />
                                </svg>
                            </div>
                            <h3 class="usa-card__heading">Consulting Services</h3>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Expert guidance on compliance, procurement strategies, and process improvement for government agencies and contractors.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <a href="#" class="usa-link display-flex flex-row flex-align-center">
                                Learn More
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Service Card 3: Training & Support -->
                <article class="usa-card tablet:grid-col-4">
                    <div class="usa-card__container hover:shadow-4">
                        <div class="usa-card__header">
                            <div class="usa-icon width-10 height-10 margin-bottom-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#1a4480" d="M352 160L352 256L256 256L256 160L352 160zM192 96L192 160L96 160C60.7 160 32 188.7 32 224L32 416C32 451.3 60.7 480 96 480L544 480C579.3 480 608 451.3 608 416L608 224C608 188.7 579.3 160 544 160L448 160L448 96C448 60.7 419.3 32 384 32L224 32C188.7 32 160 60.7 160 96L160 160L192 160L192 96C192 78.3 206.3 64 224 64L384 64C401.7 64 416 78.3 416 96L416 160L352 160L256 160L192 160zM320 288C355.3 288 384 316.7 384 352C384 373.5 373.3 392.5 356.8 404L356.8 464C356.8 484.4 340.2 501.2 319.8 501.2C299.4 501.2 282.8 484.6 282.8 464.2L282.8 404C266.5 392.4 256 373.4 256 352C256 316.7 284.7 288 320 288z" />
                                </svg>
                            </div>
                            <h3 class="usa-card__heading">Training & Support</h3>
                        </div>
                        <div class="usa-card__body">
                            <p>
                                Comprehensive training programs and ongoing technical support to ensure your team maximizes the value of government services.
                            </p>
                        </div>
                        <div class="usa-card__footer">
                            <a href="#" class="usa-link display-flex flex-row flex-align-center">
                                Learn More
                                <svg class="usa-icon margin-left-05" aria-hidden="true" focusable="false" role="img">
                                    <use href="uswds/dist/img/sprite.svg#arrow_forward"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- ========================= PRICING HIGHLIGHTS ========================= -->
        <section class="usa-section bg-primary-lighter">
            <div class="grid-container">
                <div class="usa-summary-box" role="region" aria-labelledby="summary-box-key-information">
                    <div class="usa-summary-box__body">
                        <h3 class="usa-summary-box__heading" id="summary-box-key-information">
                            Why Choose Our Services?
                        </h3>
                        <div class="usa-summary-box__text">
                            <ul class="usa-list">
                                <li><strong>Transparent Pricing:</strong> No hidden fees or surprise charges</li>
                                <li><strong>Government Compliant:</strong> All services meet federal accessibility and security standards</li>
                                <li><strong>Flexible Plans:</strong> Scale up or down based on your community's needs</li>
                                <li><strong>Dedicated Support:</strong> 24/7 assistance from our expert team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================= PRICING TABLE SECTION ========================= -->
        <section id="pricing-table" class="grid-container usa-section">
            <div class="margin-bottom-4 border-bottom-05">
                <h2 class="font-heading-xl">
                    Pricing Plans
                </h2>
                <p>Choose the plan that best fits your organization's needs. All plans include core features with options to scale.</p>
            </div>
            <div class="grid-row">
                <table class="usa-table usa-table--borderless usa-table--stacked-header width-full">
                    <thead>
                        <tr>
                            <th scope="col">Feature</th>
                            <th scope="col" class="text-center">
                                <span class="display-block font-heading-lg">Basic</span>
                                <span class="display-block font-heading-xl text-primary">$499</span>
                                <span class="display-block font-body-2xs text-base">/month</span>
                            </th>
                            <th scope="col" class="text-center bg-primary-lighter">
                                <span class="display-block font-heading-lg">Professional</span>
                                <span class="display-block font-heading-xl text-primary">$999</span>
                                <span class="display-block font-body-2xs text-base">/month</span>
                            </th>
                            <th scope="col" class="text-center">
                                <span class="display-block font-heading-lg">Enterprise</span>
                                <span class="display-block font-heading-xl text-primary">$2,499</span>
                                <span class="display-block font-body-2xs text-base">/month</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th data-label="Feature" scope="row">Website Hosting</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">SSL Certificate</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">Custom Domain</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">CMS Access</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">Analytics Dashboard</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">Priority Support</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">Custom Integrations</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <th data-label="Feature" scope="row">Dedicated Account Manager</th>
                            <td data-label="Basic" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter">
                                <svg class="usa-icon usa-icon--size-3 text-base" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#cancel"></use></svg>
                                <span class="usa-sr-only">Not Included</span>
                            </td>
                            <td data-label="Enterprise" class="text-center">
                                <svg class="usa-icon usa-icon--size-3 text-success" aria-hidden="true"><use href="uswds/dist/img/sprite.svg#check_circle"></use></svg>
                                <span class="usa-sr-only">Included</span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td data-label="Basic" class="text-center padding-y-3">
                                <a href="#inquiry-form" class="usa-button usa-button--outline">Get Started</a>
                            </td>
                            <td data-label="Professional" class="text-center bg-primary-lighter padding-y-3">
                                <a href="#inquiry-form" class="usa-button">Get Started</a>
                            </td>
                            <td data-label="Enterprise" class="text-center padding-y-3">
                                <a href="#inquiry-form" class="usa-button usa-button--outline">Contact Us</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- ========================= CTA / INQUIRY FORM SECTION ========================= -->
        <section id="inquiry-form" class="usa-section bg-base-lightest">
            <div class="grid-container">
                <div class="grid-row grid-gap">
                    <div class="tablet:grid-col-5">
                        <h2 class="font-heading-xl margin-top-0">
                            Ready to Get Started?
                        </h2>
                        <p>
                            Fill out the form and our team will reach out within 48 business hours 
                            to discuss your specific needs and help you choose the right plan.
                        </p>
                        <div class="margin-top-4">
                            <h3 class="font-heading-md">Contact Information</h3>
                            <ul class="usa-list usa-list--unstyled">
                                <li class="display-flex flex-align-center margin-bottom-1">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1 text-primary" aria-hidden="true">
                                        <use href="uswds/dist/img/sprite.svg#phone"></use>
                                    </svg>
                                    <a href="tel:1-315-627-3333" class="usa-link">(315) 627-3333</a>
                                </li>
                                <li class="display-flex flex-align-center margin-bottom-1">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1 text-primary" aria-hidden="true">
                                        <use href="uswds/dist/img/sprite.svg#mail"></use>
                                    </svg>
                                    <a href="mailto:services@rfpmartllc.com" class="usa-link">services@rfpmartllc.com</a>
                                </li>
                                <li class="display-flex flex-align-center">
                                    <svg class="usa-icon usa-icon--size-3 margin-right-1 text-primary" aria-hidden="true">
                                        <use href="uswds/dist/img/sprite.svg#schedule"></use>
                                    </svg>
                                    <span>Mon - Fri, 9:00 AM - 5:00 PM EST</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tablet:grid-col-7">
                        <div class="bg-white padding-4 border border-base-lighter">
                            <form class="usa-form maxw-full" action="#" method="post">
                                <fieldset class="usa-fieldset">
                                    <legend class="usa-legend usa-legend--large">Service Inquiry Form</legend>

                                    <div class="grid-row grid-gap">
                                        <div class="tablet:grid-col-6">
                                            <label class="usa-label" for="inquiry-first-name">First Name</label>
                                            <input class="usa-input" id="inquiry-first-name" name="first-name" type="text" autocomplete="given-name" />
                                        </div>
                                        <div class="tablet:grid-col-6">
                                            <label class="usa-label" for="inquiry-last-name">Last Name</label>
                                            <input class="usa-input" id="inquiry-last-name" name="last-name" type="text" autocomplete="family-name" />
                                        </div>
                                    </div>

                                    <label class="usa-label" for="inquiry-email">
                                        Email Address <span class="text-secondary">*</span>
                                    </label>
                                    <input class="usa-input" id="inquiry-email" name="email" type="email" autocomplete="email" required />

                                    <label class="usa-label" for="inquiry-organization">Organization Name</label>
                                    <input class="usa-input" id="inquiry-organization" name="organization" type="text" autocomplete="organization" />

                                    <label class="usa-label" for="inquiry-service">Service Interest</label>
                                    <select class="usa-select" id="inquiry-service" name="service">
                                        <option value="">- Select a service -</option>
                                        <option value="basic">Basic Plan ($499/month)</option>
                                        <option value="professional">Professional Plan ($999/month)</option>
                                        <option value="enterprise">Enterprise Plan ($2,499/month)</option>
                                        <option value="consulting">Consulting Services</option>
                                        <option value="training">Training & Support</option>
                                        <option value="custom">Custom Solution</option>
                                    </select>

                                    <label class="usa-label" for="inquiry-message">
                                        Message <span class="text-secondary">*</span>
                                    </label>
                                    <textarea class="usa-textarea" id="inquiry-message" name="message" required></textarea>

                                    <button class="usa-button margin-top-2" type="submit">Submit Inquiry</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>
