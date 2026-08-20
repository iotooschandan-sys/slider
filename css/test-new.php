<?php 
/**
   * Theme Name: iosolution
   * Theme URI: iogoos.com
   * Description: This is a custom theme for IOGOOS Solution
   * Template Name: test-new 
   * Version:1.1
   * Author: iogoos - Ankit Kumar
   * Author URI: iogoos.com
   **/
    get_header(); ?>
    
<?php $site_path=get_home_url();?>
<?php include 'template-parts/navigation.php'; ?>

<section class="spaceTB hero_wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="badge1"><span>✦</span> Ecommerce Development Services</div>
                <h1 class="hero-title text-black">Build. Migrate. Optimize. Scale Your <span class="gradient">eCommerce</span> Business With Confidence.</h1>
                <!--
                <p class="hero-desc">We help businesses build <span class="highlight">high-performance websites, mobile apps, eCommerce platforms</span>, and <span class="highlight">AI-powered solutions</span> that attract more customers, automate operations, strengthen security, and accelerate sustainable business growth—all with one trusted technology partner.</p> -->
                
                <h5>Build, redesign, migrate or optimize your eCommerce store with a team experienced in complex B2B, B2C and enterprise commerce.</h5>
                <p>We create high-performance eCommerce experiences across Shopify, Shopify Plus, Adobe Commerce, Magento, BigCommerce, WooCommerce, PrestaShop, OpenCart and other leading platforms—combining custom development, conversion-focused UX, integrations and long-term support.</p><br>

                <div class="features1">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/shopify_1.png" alt="shopify_1">
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/shopify_3.png" alt="shopify_3">
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/shopify_4.png" alt="shopify_4">
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/shopify_5.png" alt="shopify_5">
                    </a>
                </div>

                <div>
                    <form method="post" id="topForm" class="email-box">

                    <i class="fa-solid fa-envelope"></i>
                    <input
                        type="email"
                        name="emailaddress"
                        class="emailaddress"
                        placeholder="Enter Your Email Address"
                        title="Please enter a valid email address (e.g. name@example.com)"
                        required
                    >

                    <input
                        type="submit"
                        value="Book Free Consultation →"
                        class="animateBtn animateBtn3 bnr-btn d-lg-block d-none"
                    >

                    <button type="submit" class="mb-btn">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                    </form>

                    <div class="frmMsg" style="color:#FF0000; margin-bottom:10px;"></div>

                </div>                
            </div>
            
            <div class="col-lg-6">
                <div class="ecom-feature-section">
                    <div class="ecom-feature-wrapper">

                        <!-- LEFT -->
                        <div class="ecom-visual-area">

                            <div class="ecom-circle-one"></div>
                            <div class="ecom-circle-two"></div>

                            <div class="ecom-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/hero/ecommerce-development-hero.png" alt="ecommerce-development">
                            </div>
                        </div>


                        <!-- RIGHT -->
                        <div class="ecom-features">

                            <div class="ecom-feature-card">
                                <div class="ecom-feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/higher_con.png" alt="higher_con"></div>

                                <div class="ecom-feature-content">
                                    <h3>Higher Conversions</h3>
                                    <p>Optimized UX that turns visitors into customers.</p>
                                </div>
                            </div>

                            <div class="ecom-feature-card">
                                <div class="ecom-feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/better_per.png" alt="higher_con"></div>

                                <div class="ecom-feature-content">
                                    <h3>Better Performance</h3>
                                    <p>Lightning-fast stores that keep customers engaged.</p>
                                </div>
                            </div>

                            <div class="ecom-feature-card">
                                <div class="ecom-feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/scable.png" alt="higher_con"></div>

                                <div class="ecom-feature-content">
                                    <h3>Scalable Growth</h3>
                                    <p>Future-ready solutions that grow with your business.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="bottom-actions">
                    <a href="https://www.iogoos.com/portfolio/" class="dark-btn"><i class="fa-solid fa-eye"></i> <span class="mb_hide">View</span> Case Studies</a>

                    <a href="https://clutch.co/profile/iogoos-solution?utm_source=widget&amp;utm_medium=2&amp;utm_campaign=widget&amp;utm_content=logo&amp;utm_term=www.iogoos.com" class="dark-btn" target="_blank">
                        <img class="c-img" src="https://www.iogoos.com/wp-content/themes/iobusiness/img/homepage/c.png" alt="Clutch">
                        Clutch Review <span class="mb_hide">★★★★★</span>
                    </a>

                    <a href="https://www.google.com/search?kgmid=/g/11f343763w" class="dark-btn review-box" target="_blank">

                        <div class="google-icon">
                        <i class="fa-brands fa-google"></i>
                        </div>

                        <div class="review-content">

                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p>4.9/5 from 120+ Reviews</p>

                        </div>
                    </a>
                </div>
                <p class="btm_link">Not sure which platform is right for you? <a href="">Talk to an eCommerce expert →</a></p>
            </div>
        </div>

         <!-- Trusted Section -->
         <div class="trusted">
               <div class="trusted-title">
                  <span>TRUSTED BY BUSINESSES WORLDWIDE</span>
               </div>

               <div class="slider">

                  <div class="slide-track">
                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/img1.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo1.png">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo3.png">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo4.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo5.png">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo6.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo7.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo8.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo1.png">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/img1.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo1.png">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo6.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo7.webp">
                     </div>

                     <div class="slide">
                     <img class="client-img" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo8.webp">
                     </div>
                  </div>

               </div>
         </div>
    </div>
</section>



<section class="growth-problem spaceTB overlap-section">
    <div class="container">
        <div class="growth-container">

            <!-- Intro -->
            <div class="problem-intro">
               <span class="eyebrow">THE PROBLEM</span>
               <h4>Why Most eCommerce <br class="desktop-break">Store Struggle to Grow</h4>
               <div class="heading-line"></div>
               <p>Hidden issues are costing you conversions, customers and revenue every single day.</p>

               <div class="problem-visual">               
                  <div class="cart-icon">
                     <svg viewBox="0 0 64 64" fill="none">
                           <path d="M8 10h8l6 32h29l7-24H20" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                           <circle cx="27" cy="52" r="4" stroke="currentColor" stroke-width="3"></circle>
                           <circle cx="49" cy="52" r="4" stroke="currentColor" stroke-width="3"></circle>
                     </svg>
                     <span class="alert-icon">!</span>
                  </div>

                  <svg class="growth-line" viewBox="0 0 300 100" preserveAspectRatio="none">

                     <path d="M0 42
                              C30 55,45 70,70 58
                              S105 28,130 55
                              S175 72,200 45
                              S240 35,265 51
                              S285 62,300 45" fill="none" stroke="#fff" stroke-width="5" stroke-linecap="round"></path>

                     <defs>
                           <linearGradient id="lineGradient" x1="0" y1="0" x2="1" y2="0">
                              <stop offset="0%" stop-color="#8f82ff"></stop>
                              <stop offset="100%" stop-color="#6652ef"></stop>
                           </linearGradient>
                     </defs>

                  </svg>
               </div>
            </div>

            <!-- Problems -->
            <div class="problem-list">
                <!-- Item 1 -->
                <div class="problem-item">
                  <div class="gold-border"></div>
                    <div class="problem-head">
                        <div class="problem-icon icon-red">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 19V5M4 5H15L18 8V19H4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 15L10 12L12 14L16 10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15 8H18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <h3>Low Conversion Rate</h3>
                    </div>

                    <p>
                        Poor UX, confusing journeys
                        &amp; weak offers.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="problem-item">
                    <div class="gold-border"></div>
                    <div class="problem-head">
                        <div class="problem-icon icon-orange">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 16C4 10.477 8.477 6 14 6C17.866 6 21 9.134 21 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                                <path d="M4 16H7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                                <path d="M17 17L20 14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                                <path d="M14 9V13L11 15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3>Slow Website Speed</h3>
                    </div>
            
                    <p>
                        Every second of delay
                        costs you sales.
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="problem-item">
                    <div class="gold-border"></div>
                    <div class="problem-head">
                        <div class="problem-icon icon-green">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.8"></circle>
                                <path d="M16 16L20 20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                                <path d="M8 12L10 10L11.5 11.5L14 8.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3>Poor SEO Visibility</h3>
                    </div>

                    <p>
                        You’re invisible to your
                        potential buyers.
                    </p>
                </div>

                <!-- Item 4 -->
                <div class="problem-item">
                  <div class="gold-border"></div>
                    <div class="problem-head">
                        <div class="problem-icon icon-purple">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="6" y="7" width="12" height="10" rx="2" stroke="currentColor" stroke-width="1.8"></rect>
                                <path d="M9 11H9.01M15 11H15.01" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"></path>
                                <path d="M9 15H15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                                <path d="M12 4V7M4 12H6M18 12H20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                            </svg>
                        </div>

                        <h3>No Automation</h3>
                    </div>

                    <p>
                        Manual tasks, missed opportunities
                        and lost time.
                    </p>
                </div>

                <!-- Item 5 -->
                <div class="problem-item">
                  <div class="gold-border"></div>
                    <div class="problem-head">
                        <div class="problem-icon icon-blue">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 3L19 6V11C19 15.5 16.2 19.4 12 21C7.8 19.4 5 15.5 5 11V6L12 3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"></path>
                                <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>

                        <h3>Security Risks</h3>
                    </div>
                    <p>
                        Hacks, malware &amp; vulnerabilities
                        can destroy trust.
                    </p>
                </div>

                <!-- Item 6 -->
                <div class="problem-item">
                  <div class="gold-border"></div>
                    <div class="problem-head">
                        <div class="problem-icon integration-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="4" y="5" width="16" height="4" rx="1" fill="none" stroke="currentColor" stroke-width="1.8"></rect>
                                <rect x="4" y="10" width="16" height="4" rx="1" fill="none" stroke="currentColor" stroke-width="1.8"></rect>
                                <rect x="4" y="15" width="16" height="4" rx="1" fill="none" stroke="currentColor" stroke-width="1.8"></rect>
                            </svg>
                        </div>

                        <h3>Integration Gaps</h3>
                    </div>
                    <p>Disconnected systems hold your growth back.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="problem-cta dark-blue-glossy">
                <div>
                    <h4>We fix every<br>growth bottleneck.</h4>
                    <p>End-to-end solutions that drive real business results.</p>

                    <ul class="solution-list">
                        <li>
                            <span>✓</span>
                            Higher Conversions
                        </li>

                        <li>
                            <span>✓</span>
                            Better Performance
                        </li>

                        <li>
                            <span>✓</span>
                            Stronger SEO
                        </li>

                        <li>
                            <span>✓</span>
                            Secure &amp; Scalable
                        </li>

                        <li>
                            <span>✓</span>
                            Seamless Integrations
                        </li>
                    </ul>

                    <a href="#ar-award" class="cta-button">
                        Explore Solutions

                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 10H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"></path>
                            <path d="M11 5L16 10L11 15" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="trust-section overlap-section archive-sec" id="ar-award">
    <div class="container">
        <div class="top-cont heading">
            <h2 class="text-white">What Are You Looking To Achieve?</h2>
            <p>Whether you're launching a new store or trying to fix problems with an existing one, we can help you take the next step.</p>
        </div>
        <div class="awards-grid-layout">
            <a href="" target="_blank" class="award-card">
                <div class="award-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/cart1.png" alt="higher_con">
                </div>
                <div>
                    <span class="award-title">Build</span>
                    <p>Launch a new eCommerce store from scratch.</p>
                </div>
            </a>

            <a href="" target="_blank" class="award-card">
                <div class="award-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/redesign.png" alt="higher_con">
                </div>
                <div>
                    <span class="award-title">Redesign</span>
                    <p>Improve your existing store's UX, mobile experience, performance and conversion.</p>
                </div>
            </a>

            <a href="" target="_blank" class="award-card">
                <div class="award-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/migrate.png" alt="higher_con">
                </div>
                <div>
                    <span class="award-title">Migrate</span>
                    <p>Move your store to a better platform without losing data or SEO.</p>
                </div>
            </a>

            <a href="" target="_blank" class="award-card">
                <div class="award-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/scale1.png" alt="higher_con">
                </div>
                <div>
                    <span class="award-title">Scale</span>
                    <p>Improve performance, architecture and integrations to scale.</p>
                </div>
            </a>

            <a href="" target="_blank" class="award-card">
                <div class="award-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/convert.png" alt="higher_con">
                </div>
                <div>
                    <span class="award-title">Convert</span>
                    <p>Optimize your store to increase conversion and average order value.</p>
                </div>
            </a>

            <a href="" target="_blank" class="award-card">
                <div class="award-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/integrate.png" alt="higher_con">
                </div>
                <div>
                    <span class="award-title">Integrate</span>
                    <p>Connect your store with ERP, CRM, PIM, OMS and third-party tools.</p>
                </div>
            </a>           

        </div>

        <div class="stats-wrap">
            <div class="stats-bar">

            <div class="stats-item">
                <div class="stats-icon"><i class="fa-solid fa-calendar-check"></i></div>
                <div class="stats-text">
                <h3>16+</h3>
                <p>Years of Experience</p>
                </div>
            </div>

            <div class="stats-separator"></div>

            <div class="stats-item">
                <div class="stats-icon"><i class="fa-solid fa-rocket"></i></div>
                <div class="stats-text">
                <h3>3,000+</h3>
                <p>Projects Delivered</p>
                </div>
            </div>

            <div class="stats-separator"></div>

            <div class="stats-item">

                <div class="stats-icon"><i class="fa-regular fa-star"></i></div>

                <div class="stats-text">
                <h3>1,100+</h3>
                <p>Client Reviews</p>
                </div>

            </div>

            <div class="stats-separator"></div>

            <div class="stats-item">
                <div class="stats-icon"><i class="fa-regular fa-face-smile"></i></div>
                <div class="stats-text">
                <h3>100%</h3>
                <p>Client Satisfaction</p>
                </div>

            </div>

            <div class="stats-separator"></div>

            <div class="stats-item">
                <div class="stats-icon"><i class="fa-regular fa-user"></i></div>
                <div class="stats-text">
                <h3>80+</h3>
                <p>eCommerce Experts</p>
                </div>

            </div>

            <div class="d-block d-lg-none d-md-none stats-text">
              <p>Not sure which platform is right for you? <a href="" class="text-white">Talk to an eCommerce expert →</a></p>
            </div>

            </div>
        </div>
    </div>
</section>

<?php include 'template-parts/portfolio-section.php'; ?>


<section class="serv__box spaceTB">
   <div class="container">
      <div class="heading headingCenter">
         <h2>Our eCommerce Development Services</h2>
         <h5>From strategy and UX to custom development, integrations and post-launch optimization, <br>we cover the technology required to build and grow a modern eCommerce operation.</h5>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-cart-shopping"></i>
               <h4>eCommerce Website Development</h4>
               <p>Build a new online store around the way your business actually sells.</p>
               <p>We develop custom eCommerce websites with product catalogs, customer accounts, search, filtering, cart, checkout, payments, inventory and order management—while keeping the experience fast, responsive and easy to manage.</p>
               <!--<p>Build a fast, scalable eCommerce website around your products, customers, and business goals. We create intuitive shopping experiences with flexible architecture, responsive design, secure checkout, and functionality that supports long-term growth across devices and markets.</p>-->
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-pen-ruler"></i>
               <h4>eCommerce UI/UX Design</h4>
               <p>Good eCommerce design is not just about appearance. It should help customers find products, understand value and complete purchases with less friction.</p>
               <p>We design conversion-focused experiences across navigation, product pages, search, filters, cart, checkout and mobile journeys.</p>
               <!--<p>Create a shopping experience customers can understand and navigate easily. We design intuitive product pages, navigation, search, filtering, cart, and checkout journeys that reduce friction, strengthen trust, and encourage more completed purchases across every device.</p>-->
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-code"></i>
               <h4>Custom eCommerce Development</h4>
               <!--<p>When standard platform features cannot meet your requirements, we build the functionality you need. From custom workflows and product experiences to advanced business rules, we develop practical solutions that fit your operations and deliver value.</p>-->
               <p>When standard platform functionality isn't enough, we build around your requirements.</p>
               <p>From custom product experiences and pricing logic to customer workflows, marketplaces, subscriptions, wholesale functionality and specialized business rules, we develop solutions that fit your operation rather than forcing your business into a template.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-arrow-right-arrow-left"></i>
               <h4>eCommerce Migration & Replatforming</h4>
               <p>Move your store to a better-fit platform with a structured migration plan. We handle products, customers, orders, content, URLs, integrations, and SEO considerations while minimizing disruption and protecting your business continuity throughout the transition process.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-building"></i>
               <h4>B2B eCommerce Development</h4>
               <p>Build a B2B store around the way your customers actually purchase. We support customer-specific pricing, wholesale accounts, custom catalogs, bulk ordering, quotes, approval workflows, reordering, and ERP-connected purchasing experiences for complex sales and purchasing operations.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-plug"></i>
               <h4>eCommerce Integrations</h4>
               <p>Connect your storefront with the systems running your business. We integrate ERP, CRM, PIM, OMS, WMS, payments, shipping, marketplaces, and marketing platforms to synchronize data, reduce manual work, and improve operational efficiency across your organization.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-layer-group"></i>
               <h4>Headless & Composable Commerce</h4>
               <p>Build a more flexible commerce architecture when your business demands it. Headless and composable solutions separate the frontend from commerce services, giving your team greater control over experiences, integrations, performance, scalability, flexibility, and future growth.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-gauge-high"></i>
               <h4>eCommerce Performance Optimization</h4>
               <p>Make your store faster, more reliable, and easier to use. We improve Core Web Vitals, frontend code, images, caching, scripts, architecture, and technical bottlenecks to create smoother shopping experiences, improve usability, and support better conversions.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-chart-line"></i>
               <h4>eCommerce CRO</h4>
               <p>Turn more existing visitors into customers by improving the shopping journey. We analyze product pages, navigation, search, filters, cart, checkout, mobile usability, and customer behavior to identify practical opportunities for reducing friction and increasing conversions.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fas fa-mobile-alt"></i>
               <h4>eCommerce App Development</h4>
               <p>We specialize in developing user-friendly B2B and B2C eCommerce mobile apps that prioritize seamless checkout experiences. Our feature-rich designs not only attract customers but also enhance engagement, helping your business thrive in a competitive market.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fa-solid fa-box-open"></i>
               <h4>eCommerce Dropshipping Website</h4>
               <p>We design a clean, modern, fully mobile-responsive, unique dropshipping eCommerce website with a comprehensive selection products. Dropshipping eCommerce websites help you to sell products without having inventory management or delivery logistics, streamlining your business operations.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>

         <div class="col-lg-4 col-md-6">
            <div class="inner">
               <i class="fas fa-people-carry"></i>
               <h4>eCommerce Maintenance & Support</h4>
               <p>Keep your eCommerce store secure, stable, and ready for growth after launch. We provide ongoing development, troubleshooting, platform updates, performance improvements, security support, feature enhancements, and technical assistance as your business evolves and new needs emerge.</p>
               <a href="javascript:void(0);" class="get_a_quote">Request A Quote</a>
            </div>
         </div>
         
      </div>
   </div>
</section>

<section class="choosingScroll spaceTB">
   <div class="container">
      <div class="chooseRow">

         <div class="chooseCol">
            <div class="sticySection">
               <div class="heading">
                  <h2>Why Growing eCommerce Brands Choose IOGOOS</h2>
               </div>

               <div class="boxcho">
                  <h3>Why Choose IOGOOS</h3>

                  <p>You don't need another agency that simply builds what is written in a specification.</p>

                  <p>You need a team that understands what the technology needs to accomplish for your business.</p>

                  <div class="button_">
                     <a href="javascript:void(0)" class="btn_ btn-secondary_ animateBtn3">
                        Schedule A Consultation
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="chooseCol">

            <!-- eCommerce Experience -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-cogs"></i> 17+ Years of eCommerce Experience
               </div>
               <div class="iogoosPara">
                  <p>
                     We deliver sophisticated eCommerce solutions across B2B, B2C, and enterprise environments, combining deep technical expertise, strategic thinking, and proven execution to drive scalable digital growth.
                  </p>
               </div>
            </div>

            <!-- Projects -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-briefcase"></i> 3,000+ eCommerce Projects Delivered
               </div>
               <div class="iogoosPara">
                  <p>
                     Our extensive portfolio includes 3,000+ successful projects across eCommerce platforms, websites, applications, integrations, and custom business solutions. We combine technical expertise, strategic insight, and proven delivery to create scalable digital experiences that solve complex challenges and support long-term business growth.
                  </p>
               </div>
            </div>

            <!-- Integrations -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-plug"></i> Complex Integration Experience
               </div>
               <div class="iogoosPara">
                  <p>
                     We design and manage complex integrations that connect eCommerce platforms with ERP, CRM, PIM, payment, shipping, inventory, and third-party systems, creating seamless, reliable, and scalable digital commerce ecosystems.
                  </p>
               </div>
            </div>

            <!-- Certified Expertise -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-certificate"></i> Certified Platform Expertise &amp; Award-Winning Team
               </div>
               <div class="iogoosPara">
                  <p>
                     As a premium eCommerce development company, our certified experts deliver high-performing digital experiences across Shopify, Shopify Plus, Adobe Commerce, Magento, BigCommerce, PrestaShop, WooCommerce, and OpenCart. From complex integrations to scalable eCommerce websites and applications, we combine platform expertise, technical precision, and strategic execution to create award-winning solutions that drive sustainable business growth.
                  </p>
               </div>
            </div>

            <!-- Communication -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-comments"></i> Effective Communication
               </div>
               <div class="iogoosPara">
                  <p>
                     Our services are supported by 24×7 communication because we believe every customer deserves access to a real person. Our responsive team keeps you informed, engaged, and supported throughout your eCommerce journey.
                  </p>
               </div>
            </div>

            <!-- Shopify -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-shopping-bag"></i> Shopify / Shopify Plus Partner Agency
               </div>
               <div class="iogoosPara">
                  <p>
                     IOGOOS Solutions is proud to be recognized as a Shopify Partner Agency, showcasing our expertise in creating high-quality Shopify stores that drive sales and enhance customer experiences. Our partnership reflects our commitment to excellence and innovation in eCommerce development.
                  </p>
               </div>
            </div>

            <!-- Adobe Commerce -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-diamond"></i> Adobe Commerce Expertise
               </div>
               <div class="iogoosPara">
                  <p>
                     As an Adobe Commerce (Magento 2) Solution Partner, we leverage the powerful capabilities of Magento to build robust, scalable eCommerce platforms. Our expertise enables us to deliver customized solutions that meet the complex needs of businesses across various industries.
                  </p>
               </div>
            </div>

            <!-- PrestaShop -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-shopping-cart"></i> PrestaShop Gold Partner
               </div>
               <div class="iogoosPara">
                  <p>
                     Our status as a PrestaShop Gold Partner demonstrates our proficiency in developing engaging online stores using PrestaShop. We utilize its powerful features to create tailored shopping experiences that resonate with your target audience and provide a competitive edge.
                  </p>
               </div>
            </div>

            <!-- Graduates -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-graduation-cap"></i> Top Graduates
               </div>
               <div class="iogoosPara">
                  <p>
                     Our eCommerce developers hold university degrees in computer science and related fields, with many being high-performing graduates from renowned institutions. We maintain a skilled, consistent, and dedicated team focused on delivering quality solutions.
                  </p>
               </div>
            </div>

            <!-- Quality -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-check-circle"></i> Committed to Quality
               </div>
               <div class="iogoosPara">
                  <p>
                     eCommerce demands precision, especially when handling payments and critical business processes. We take this responsibility seriously, applying rigorous development, testing, and quality standards to deliver secure, reliable, and high-performing digital commerce solutions.
                  </p>
               </div>
            </div>

            <!-- Business Problems -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-lightbulb"></i> Solve Your Business Problems
               </div>
               <div class="iogoosPara">
                  <p>
                     We work on the same side of the table as you to solve real business challenges. Instead of pushing unnecessary technology, we understand your objectives, identify root causes, and recommend practical strategies that deliver measurable results.
                  </p>
               </div>
            </div>

            <!-- Support -->
            <div class="iogoosCard">
               <div class="iogoosHead">
                  <i class="fa fa-headphones"></i> Dedicated Support
               </div>
               <div class="iogoosPara">
                  <p>
                     Our expertise across multiple commerce platforms allows us to provide comprehensive support tailored to your specific needs. Whether you choose Shopify, Adobe Commerce, PrestaShop, or another platform, our team can support you throughout every stage of your eCommerce journey.
                  </p>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>

<section class="iogoos-services overlap-section spaceTB">
   <div class="container">
      <!-- <div class="iogoos-services__floating-logo" aria-hidden="true">
         <div class="iogoos-services__floating-logo-inner">
            <span class="iogoos-services__floating-logo-dot"></span>
            <span class="iogoos-services__floating-logo-mark">★</span>
         </div>
      </div> -->
      <div class="iogoos-services__heading">
         <div>
            <h4 class="section__title-wrapper-subtitle">There is no single platform that is right for every business.</h4>

         </div>
         <div class="heading">
               <h2>Choose the eCommerce Platform That Fits Your Business</h2>
               <p class="iogoos-services__best-for">We evaluate your products, catalog size, customer journey, B2B/B2C requirements, integrations, operational processes, budget and growth plans before recommending the right technology.</p>
         </div>        
      </div>

   
      <div class="iogoos-services__container">           
         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/shopify_color1.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">Shopify</a></h3>
                  </div>
                  <p>Best for: DTC, retail, growing brands and businesses looking for faster implementation.</p>
                  <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/shopify_color1.png" alt="higher_con">
                  </div>
               </div>

               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">A strong choice for brands looking for a flexible, scalable and easy-to-manage commerce platform.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/so_plus.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">Shopify Plus</a></h3>
                  </div>
                  <p>Best for: Enterprise, high-growth and multi-store commerce.</p>
                  <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/so_plus.png" alt="higher_con">
                  </div>
               </div>
               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">Built for higher-volume businesses and brands with more complex commerce, customization and operational requirements.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/megento.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">Magento</a></h3>
                  </div>
                  <p>Best for: Complex and enterprise commerce.</p>
                   <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/megento.png" alt="higher_con">
                  </div>
               </div>
               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">Powerful for businesses requiring extensive customization, complex catalogs, advanced business rules and sophisticated B2B/B2C functionality.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/big1.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">BigCommerce</a></h3>
                  </div>
                  <p>Best for: Growing, B2B and enterprise businesses.</p>
                  <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/big1.png" alt="higher_con">
                  </div>
               </div>
               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">A flexible platform for businesses that need scalable commerce capabilities, custom storefronts and integrations.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/woo_com1.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">WooCommerce</a></h3>
                  </div>
                  <p>Best for: Content-led commerce, SMBs and custom WordPress ecosystems.</p>
                  <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/woo_com1.png" alt="higher_con">
                  </div>
               </div>
               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">A flexible option for businesses that want eCommerce closely integrated with WordPress and a highly customizable content experience.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/open_cart.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">OpenCart</a></h3>
                  </div>
                  <p>Best for: Small and mid-sized commerce businesses.</p>
                  <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/open_cart.png" alt="higher_con">
                  </div>
               </div>
               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">A practical option for businesses looking for a customizable and cost-effective eCommerce platform.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="iogoos-services__card-wrap">
            <div class="iogoos-services__card" data-service-card="1" tabindex="0">
               <div class="iogoos-services__left">
                  <div class="iogoos-services_head">
                     <div class="iogoos-services__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/neto.png" alt="higher_con">
                     </div>
                     <h3 class="iogoos-services__title"><a href="#">Neto</a></h3>
                  </div>
                  <p>Best for: Australian retail and wholesale businesses.</p>
                  <!-- HOVER ICON -->
                  <div class="platform-hover-icon">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/neto.png" alt="higher_con">
                  </div>
               </div>
               <div class="iogoos-services__right">
                  <p class="iogoos-services__desc">For businesses operating within the Australian commerce ecosystem and requiring retail, wholesale and operational capabilities.</p>
                  <div class="iogoos-services__btn">
                  <a aria-label="View Strategy service" href="#"><svg fill="none" height="40" viewbox="0 0 47 40" width="47"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M10.6084 36.6079L36.0642 11.1521" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        <path d="M14.8506 11.1489L36.0638 11.1489L36.0638 32.3621" stroke="white" stroke-linecap="round"
                           stroke-linejoin="round" stroke-width="3"></path>
                        </g>
                     </svg>
                  </a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>


<section class="security-center spaceTB overlap-section">
   <div class="container">
      <!-- Background decoration -->
      <div class="security-orb security-orb-1"></div>
      <div class="security-orb security-orb-2"></div>
      <div class="security-grid"></div>

      <div class="security-header">
         <div class="badge1"><span>✦</span>07 Performance &amp; Security Center</div>
         <div class="heading">
            <h2>We Protect Revenue, <span>Not Just Websites</span>
         </div>
            <p>Intelligent protection, real-time monitoring and high-performance infrastructure built to keep your commerce business secure.</p>
      </div>

      <div class="security-features">
            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon purple">
                  <span>⌁</span>
               </div>
               <strong>Security</strong>
               <small>Monitoring</small>
            </div>

            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon violet">
                  <span>◈</span>
               </div>
               <strong>Malware</strong>
               <small>Protection</small>
            </div>

            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon blue">
                  <span>☁</span>
               </div>
               <strong>Cloudflare</strong>
               <small>CDN</small>
            </div>

            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon pink">
                  <span>◇</span>
               </div>
               <strong>WAF</strong>
               <small>Protection</small>
            </div>

            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon cyan">
                  <span>▤</span>
               </div>
               <strong>PCI</strong>
               <small>Readiness</small>
            </div>

            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon green">
                  <span>▣</span>
               </div>
               <strong>Backup</strong>
               <small>Systems</small>
            </div>

            <div class="security-feature">
               <div class="gold-border"></div>
               <div class="feature-icon aqua">
                  <span>◷</span>
               </div>
               <strong>Uptime</strong>
               <small>Monitoring</small>
            </div>

      </div>

      <!-- =====================================
         DASHBOARD
      ====================================== -->

      <div class="security-dashboard">
            <!-- Dashboard top bar -->
            <div class="dashboard-top">

               <div class="dashboard-title">
                  <span class="dashboard-live"></span>
                  Security Dashboard
               </div>

               <div class="dashboard-title">
                  Live <span>●</span>
               </div>

            </div>


            <!-- Dashboard body -->

            <div class="dashboard-body">
               <!-- =================================
               SECURITY SCORE
            ================================== -->
               <div class="dashboard-card score-card">

                  <div class="dashboard-title">
                        Security Score
                  </div>

                  <div class="score-content">

                        <div class="score-ring">

                           <div class="ring-inner">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/score_img.png" alt="score_img">
                           </div>

                        </div>

                        <div class="score-copy">
                           <strong>100% <span>/ 100</span></strong>
                           <span>Excellent</span>
                        </div>

                  </div>

                  <div class="secure-message">
                        <span>✓</span>
                        All systems are secure
                  </div>

               </div>

               <!-- =================================
               THREAT ACTIVITY
            ================================== -->

               <div class="dashboard-card threat-card">

                  <div class="threat-header">

                        <div>
                           <span class="dashboard-title">
                              Threats Blocked (30 Days)
                           </span>

                           <strong>
                              342,118
                           </strong>
                        </div>

                        <div class="growth">
                           ↗ 20.6%
                           <small>vs last 30 days</small>
                        </div>

                  </div>


                  <div class="chart_wrapper">
                     <ul class="chart_score">
                        <li>40k</li>
                        <li>30k</li>
                        <li>20k</li>
                        <li>10k</li>
                        <li>0</li>
                     </ul>
                     <ul class="chart_month">
                        <li>Aug 1</li>
                        <li>Aug 3</li>
                        <li>Aug 6</li>
                        <li>Aug 9</li>
                        <li>Aug 10</li>
                        <li>Today</li>
                     </ul>
                     <div class="chart">
                        <span style="--h:22%;--x:2%;"></span>
                        <span style="--h:35%;--x:6%;"></span>
                        <span style="--h:18%;--x:10%;"></span>
                        <span style="--h:48%;--x:14%;"></span>
                        <span style="--h:30%;--x:18%;"></span>
                        <span style="--h:62%;--x:22%;"></span>
                        <span style="--h:42%;--x:26%;"></span>
                        <span style="--h:76%;--x:30%;"></span>
                        <span style="--h:52%;--x:34%;"></span>
                        <span style="--h:68%;--x:38%;"></span>
                        <span style="--h:87%;--x:42%;"></span>
                        <span style="--h:58%;--x:46%;"></span>
                        <span style="--h:79%;--x:50%;"></span>
                        <span style="--h:93%;--x:54%;"></span>
                        <span style="--h:71%;--x:58%;"></span>
                        <span style="--h:98%;--x:62%;"></span>
                     </div>
                  </div>

               </div>


               <!-- =================================
               SYSTEM STATUS
            ================================== -->

               <div class="dashboard-card status-card">

                  <div class="dashboard-title">
                        System Status
                  </div>


                  <div class="status-list">

                        <div class="status-item">
                           <span>Firewall Active</span>
                           <i>✓</i>
                        </div>

                        <div class="status-item">
                           <span>Malware Scan Clean</span>
                           <i>✓</i>
                        </div>

                        <div class="status-item">
                           <span>Backups Protected</span>
                           <i>✓</i>
                        </div>

                        <div class="status-item">
                           <span>Uptime 99.99%</span>
                           <i>✓</i>
                        </div>

                  </div>

               </div>

            </div>


            <!-- Dashboard footer -->

            <div class="dashboard-footer">

               <div class="activity">

                  <span>Live Activity</span>

                  <b></b>

                  <span>
                        Blocked malicious IP
                        <em>203.0.113.45</em>
                  </span>

               </div>

               <div class="activity-time">
                  10 sec ago
               </div>

               <div>
                  View Logs <i class="fa-solid fa-arrow-right"></i>
               </div>

            </div>

      </div>
   </div>
</section>

<section class="ai-network spaceTB overlap-section">
   <div class="container">
      <div class="badge1"><span>✦</span>04 Technology Ecosystem</div>

      <div class="heading text-center">
         <h2>Future-Ready Commerce <span>Technology Ecosystem</span></h2>
         <p> Powerful technology stack. Intelligent AI engine.  Limitless possibilities.</p>
      </div>      
      
      <div class="ai-network__inner">
         <!-- LEFT CARDS -->
         <div class="ai-network__side ai-network__side--left">

            <div class="ai-card ai-card--green">
                  <div class="ai-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/so_plus.png" alt="higher_con"></div>
                  <div class="ai-card__content">
                     <h3>Shopify Plus</h3>
                     <p>Enterprise-grade commerce<br>platform for growth</p>
                  </div>
                  <span class="ai-card__dot"></span>
            </div>

            <div class="ai-card ai-card--orange">
                  <div class="ai-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/megento.png" alt="higher_con"></div>
                  <div class="ai-card__content">
                     <h3>Magento</h3>
                     <p>Flexible & scalable open-source<br>eCommerce solution</p>
                  </div>
                  <span class="ai-card__dot"></span>
            </div>

            <div class="ai-card ai-card--dark">
                  <div class="ai-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/big1.png" alt="higher_con"></div>
                  <div class="ai-card__content">
                     <h3>BigCommerce</h3>
                     <p>Built for scalability and<br>performance</p>
                  </div>
                  <span class="ai-card__dot"></span>
            </div>

            <div class="ai-card ai-card--purple">
                  <div class="ai-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-image/woo_com1.png" alt="higher_con"></div>
                  <div class="ai-card__content">
                     <h3>WooCommerce</h3>
                     <p>The most customizable<br>WordPress solution</p>
                  </div>
                  <span class="ai-card__dot"></span>
            </div>

            <div class="ai-card ai-card--blue">
                  <div class="ai-card__icon">⚛</div>
                  <div class="ai-card__content">
                     <h3>Custom (React/Node)</h3>
                     <p>Tailored solutions for unique<br>business needs</p>
                  </div>
                  <span class="ai-card__dot"></span>
            </div>

         </div>

         <!-- CENTER -->
         <div class="ai-network__center">

            <div class="orbit orbit--1"></div>
            <div class="orbit orbit--2"></div>
            <div class="orbit orbit--3"></div>

            <span class="orbit-dot orbit-dot--1"></span>
            <span class="orbit-dot orbit-dot--2"></span>
            <span class="orbit-dot orbit-dot--3"></span>
            <span class="orbit-dot orbit-dot--4"></span>
            <span class="orbit-dot orbit-dot--5"></span>
            <span class="orbit-dot orbit-dot--6"></span>
            <span class="orbit-dot orbit-dot--7"></span>
            <span class="orbit-dot orbit-dot--8"></span>
            <span class="orbit-dot orbit-dot--9"></span>
            <span class="orbit-dot orbit-dot--10"></span>

            <div class="ai-engine">
                  <div class="ai-engine__chip">
                     <span>AI</span>
                  </div>

                  <h2>AI Engine</h2>
                  <p>Intelligent · Adaptive · Scalable</p>
            </div>

         </div>

         <!-- RIGHT CARDS -->
         <div class="ai-network__side ai-network__side--right">

            <div class="ai-card ai-card--blue">
                  <span class="ai-card__dot"></span>
                  <div class="ai-card__icon">♙</div>
                  <div class="ai-card__content">
                     <h3>CRM & ERP</h3>
                     <p>Streamline operations and<br>centralize your data</p>
                  </div>
            </div>

            <div class="ai-card ai-card--pink">
                  <span class="ai-card__dot"></span>
                  <div class="ai-card__icon">▣</div>
                  <div class="ai-card__content">
                     <h3>Payment Gateways</h3>
                     <p>Secure, flexible & global<br>payment processing</p>
                  </div>
            </div>

            <div class="ai-card ai-card--cyan">
                  <span class="ai-card__dot"></span>
                  <div class="ai-card__icon">📣</div>
                  <div class="ai-card__content">
                     <h3>Marketing Automation</h3>
                     <p>Automate campaigns and<br>drive customer engagement</p>
                  </div>
            </div>

            <div class="ai-card ai-card--blue">
                  <span class="ai-card__dot"></span>
                  <div class="ai-card__icon">♧</div>
                  <div class="ai-card__content">
                     <h3>Analytics & BI</h3>
                     <p>Data-driven insights for smarter<br>business decisions</p>
                  </div>
            </div>

            <div class="ai-card ai-card--orange">
                  <span class="ai-card__dot"></span>
                  <div class="ai-card__icon">⊕</div>
                  <div class="ai-card__content">
                     <h3>3rd Party Integrations</h3>
                     <p>Connect with best-in-class<br>tools and services</p>
                  </div>
            </div>

         </div>

         <!-- CONNECTION LINES -->
         <div class="connections connections--left">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
         </div>

         <div class="connections connections--right">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
         </div>

      </div>

      <div class="tech-feature-bar">
         <div class="tech-feature-item">
            <div class="tech-feature-icon">
                  <i class="fa-solid fa-bolt"></i>
            </div>

            <div class="tech-feature-content">
                  <h3>Built for Performance</h3>
                  <p>Lightning-fast architecture for better conversions</p>
            </div>
         </div>

         <div class="tech-feature-item">
            <div class="tech-feature-icon">
                  <i class="fa-solid fa-shield-halved"></i>
            </div>

            <div class="tech-feature-content">
                  <h3>Secure by Design</h3>
                  <p>Enterprise-grade security you can trust</p>
            </div>
         </div>

         <div class="tech-feature-item">
            <div class="tech-feature-icon">
                  <i class="fa-solid fa-chart-line"></i>
            </div>

            <div class="tech-feature-content">
                  <h3>Scalable for Growth</h3>
                  <p>Grow without limits with future-ready solutions</p>
            </div>
         </div>

         <div class="tech-feature-item">
            <div class="tech-feature-icon">
                  <i class="fa-solid fa-code"></i>
            </div>

            <div class="tech-feature-content">
                  <h3>Developer Friendly</h3>
                  <p>Clean, modern & flexible development ecosystem</p>
            </div>
         </div>

      </div>
   </div>
</section>

<?php get_footer(); ?>