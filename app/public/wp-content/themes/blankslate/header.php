<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="main-header">
        <nav class="main-nav">
            <div class="logo">
                <h1>Hect Blog</h1>
            </div>

            <ul class="hover-nav">
                <li><a href="#posts">POSTS</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>

            <!-- Mobile Nav icon-->
            <div class="menu-bars">
                <span><i class="fas fa-bars"></i></span>
            </div>
            
            <div class="mobile-menu">
                <div class="exit">
                    <span class="x"><i class="fas fa-times"></i></span>
                </div>
                <ul class="mobile-nav">
                    <li><a class="close" href="index.html">POSTS</a></li>
                    <li><a class="close" href="about.html">ABOUT</a></li>
                    <li><a class="close" href="contact.html">CONTACT</a></li>
                 </ul>
                 <ul class="icon-links">
                        <li><a href="https://github.com/Hetoreno" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/hector-hernandez-809432216/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
            </div>
            

        </nav>

    </header>

    <ul class="social-icons">
            <li><a href="https://github.com/Hetoreno" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/hector-hernandez-809432216/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>

<main id="content" role="main">