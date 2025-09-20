<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/loading.js" defer></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="contact-info">
                    <?php if ($phone = get_theme_mod('header_phone', '0357600007')) : ?>
                        <div class="contact-item"
                        >
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>">
                                <?php echo esc_html($phone); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if ($email = get_theme_mod('header_email', 'thanhchau1fd@gmail.com')) : ?>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo esc_attr($email); ?>">
                                <?php echo esc_html($email); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="top-bar-actions">
                    <button class="search-toggle" aria-label="Search">
                        <i class="fas fa-search"></i>
                    </button>
                    <?php if (function_exists('dln_lang_switcher')) { echo dln_lang_switcher(true); } ?>
                </div>
            </div>
        </div>
    </div>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-wrapper">
             
                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        <div class="logo-text">
                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                            <p class="site-tagline"><?php bloginfo('description'); ?></p>
                        </div>
                    </a>
                </div>

             
                <nav id="site-navigation" class="main-navigation">
                    <ul class="primary-menu">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Trang chủ','doan'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/kham-pha-nhat-ban')); ?>"><?php esc_html_e('Khám Khám Toàn Quốc','doan'); ?></a></li>
                        <li class="has-dropdown">
                            <a href="<?php echo esc_url(home_url('/lich-khoi-hanh')); ?>">
                                <?php esc_html_e('Lịch khởi hành','doan'); ?>
                                <i class="fas fa-chevron-down dropdown-icon"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo esc_url(home_url('/tour-nhat-ban-mua-thu-2025')); ?>"><?php esc_html_e('Du Lịch Toàn Quốc 2025','doan'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/tour-10-ngay-9-dem')); ?>"><?php esc_html_e('Tour 10 ngày 9 đêm','doan'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/tour-9-ngay-8-dem')); ?>"><?php esc_html_e('Tour 9 ngày 8 đêm','doan'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/tour-8-ngay-7-dem')); ?>"><?php esc_html_e('Tour 8 ngày 7 đêm','doan'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/hinh-anh-thuc-te')); ?>"><?php esc_html_e('Hình ảnh thực tế','doan'); ?></a></li>
                    </ul>
                </nav>

                <div class="header-actions">
                    <a href="<?php echo esc_url(home_url('/dang-ky-tu-van')); ?>" class="consultation-btn">
                        <?php esc_html_e('Đăng ký tư vấn','doan'); ?>
                    </a>
                    <button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="hamburger">
                            <span class="hamburger-line"></span>
                            <span class="hamburger-line"></span>
                            <span class="hamburger-line"></span>
                        </span>
                        <span class="screen-reader-text"><?php esc_html_e('Menu', 'doan'); ?></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

  
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <div class="mobile-logo">
                <div class="logo-container">
                    <div class="vj-logo">
                        <span class="v-letter">D</span>
                        <span class="j-letter">S</span>
                    </div>
                    <div class="logo-text">
                        <h2 class="site-title">DAISAN</h2>
                        <p class="site-tagline">FOR A BETTER LIFE</p>
                    </div>
                </div>
            </div>
            <button class="mobile-menu-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="mobile-menu-content">
            <ul class="mobile-menu-items">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Trang chủ','doan'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/kham-pha-nhat-ban')); ?>"><?php esc_html_e('Khám phá Toàn Quốc','doan'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/lich-khoi-hanh')); ?>"><?php esc_html_e('Lịch khởi hành','doan'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/hinh-anh-thuc-te')); ?>"><?php esc_html_e('Hình ảnh thực tế','doan'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/dang-ky-tu-van')); ?>" class="mobile-consultation-btn"><?php esc_html_e('Đăng ký tư vấn','doan'); ?></a></li>
            </ul>
        </div>
    </div>


    <div class="search-overlay">
        <div class="search-form">
            <div class="search-header">
                <h3><?php esc_html_e('Search', 'doan'); ?></h3>
                <button class="search-close" aria-label="Close search">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search-input-wrapper">
                    <input type="search" 
                           name="s" 
                           placeholder="<?php esc_attr_e('Enter your search term...', 'doan'); ?>" 
                           value="<?php echo get_search_query(); ?>" 
                           autocomplete="off"
                           autofocus>
                    <button type="submit" class="search-submit">
                        <i class="fas fa-search"></i>
                        <?php esc_html_e('Search', 'doan'); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php if ( ! is_single() && ! is_search() && ! is_page('lich-khoi-hanh') ) : ?>
      
        <section id="image-slider" class="image-slider-section">
            <div class="slider-container">
                <div class="slider-wrapper">
                    <div class="slide active">
                        <div class="slide-image">
                            <?php echo do_shortcode('[metaslider id="126"]') ?>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-image">
                            <?php echo do_shortcode('[metaslider id="129"]') ?>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-image">
                            <?php echo do_shortcode('[metaslider id="132"]') ?>
                        </div>
                    </div>
                </div>
                
             
                <button class="slider-nav prev" onclick="changeSlide(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-nav next" onclick="changeSlide(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
             
                <div class="slider-dots">
                    <span class="dot active" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Professional Loading Animation -->
    <div class="page-loading" id="page-loading">
        <div class="loading-container">
            <div class="loading-spinner"></div>
            <div class="loading-text">Đang tải...</div>
            <div class="loading-dots">
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
            </div>
            <div class="loading-progress">
                <div class="loading-progress-bar"></div>
            </div>
        </div>
    </div>

    <div id="content" class="site-content">
