<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>EgyMedia - Digital Media Solutions</title>
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
          <style>
            /* Base styles */
            body {
              font-family: 'Poppins', sans-serif;
              margin: 0;
              padding: 0;
              color: #333;
              line-height: 1.6;
            }
            
            /* Utility classes */
            .container {
              width: 90%;
              max-width: 1200px;
              margin: 0 auto;
              padding: 0 15px;
            }
            
            .section {
              padding: 80px 0;
            }
            
            .text-center {
              text-align: center;
            }
            
            .grid {
              display: grid;
              gap: 30px;
            }
            
            /* Navbar styles */
            .navbar {
              position: fixed;
              width: 100%;
              top: 0;
              left: 0;
              z-index: 1000;
              padding: 20px 0;
              transition: all 0.3s ease;
              background-color: #0A2342;
            }
            
            .navbar.scrolled {
              padding: 10px 0;
              box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            }
            
            .navbar-container {
              display: flex;
              justify-content: space-between;
              align-items: center;
            }
            
            .navbar-brand {
              color: #fff;
              font-size: 24px;
              font-weight: 700;
              text-decoration: none;
              display: flex;
              align-items: center;
            }
            
            .navbar-brand span:last-child {
              font-weight: 400;
            }
            
            .navbar-nav {
              display: flex;
              list-style: none;
              margin: 0;
              padding: 0;
            }
            
            .nav-item {
              margin-left: 30px;
            }
            
            .nav-link {
              color: #fff;
              text-decoration: none;
              transition: color 0.3s ease;
            }
            
            .nav-link:hover {
              color: #FF6700;
            }
            
            .mobile-nav-toggle {
              display: none;
              background: none;
              border: none;
              color: #fff;
              font-size: 24px;
              cursor: pointer;
            }
            
            .mobile-menu {
              display: none;
              position: absolute;
              top: 100%;
              left: 0;
              width: 100%;
              background-color: #0A2342;
              padding: 20px 0;
              z-index: 100;
            }
            
            .mobile-menu.active {
              display: block;
              animation: fadeIn 0.3s ease;
            }
            
            .mobile-menu ul {
              list-style: none;
              padding: 0;
              margin: 0;
            }
            
            .mobile-menu li {
              padding: 10px 30px;
            }
            
            .mobile-menu a {
              color: #fff;
              text-decoration: none;
              display: block;
              transition: color 0.3s ease;
            }
            
            .mobile-menu a:hover {
              color: #FF6700;
            }
            
            /* Hero section */
            .hero {
              position: relative;
              height: 100vh;
              display: flex;
              align-items: center;
              justify-content: center;
              color: #fff;
              overflow: hidden;
              margin-top: 0;
            }
            
            .hero-bg {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              z-index: -1;
            }
            
            .hero-bg img {
              width: 100%;
              height: 100%;
              object-fit: cover;
            }
            
            .hero-bg::after {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: #0A2342;
              opacity: 0.7;
            }
            
            .hero-content {
              max-width: 800px;
              text-align: center;
              z-index: 1;
              padding: 0 15px;
            }
            
            .hero-title {
              font-size: 48px;
              margin-bottom: 20px;
              animation: slideUp 0.8s ease;
            }
            
            .hero-subtitle {
              font-size: 20px;
              margin-bottom: 40px;
              animation: slideUp 0.8s ease 0.2s;
              animation-fill-mode: both;
            }
            
            .btn {
              display: inline-block;
              padding: 12px 30px;
              background-color: #FF6700;
              color: #fff;
              border: none;
              border-radius: 5px;
              font-size: 16px;
              font-weight: 500;
              cursor: pointer;
              text-decoration: none;
              transition: background-color 0.3s ease;
              animation: slideUp 0.8s ease 0.4s;
              animation-fill-mode: both;
            }
            
            .btn:hover {
              background-color: #e55d00;
            }
            
            /* About section */
            .about {
              background-color: #fff;
            }
            
            .section-title {
              font-size: 36px;
              font-weight: 700;
              margin-bottom: 20px;
              color: #0A2342;
              position: relative;
              display: inline-block;
            }
            
            .section-title::after {
              content: '';
              display: block;
              height: 4px;
              width: 50%;
              background-color: #FF6700;
              margin-top: 10px;
            }
            
            .about-content {
              display: grid;
              grid-template-columns: 1fr 1fr;
              gap: 40px;
              align-items: center;
            }
            
            .about-text p {
              margin-bottom: 20px;
              font-size: 16px;
            }
            
            .about-image img {
              width: 100%;
              border-radius: 10px;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            /* Services section */
            .services {
              background-color: #f9f9f9;
            }
            
            .services-grid {
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
              gap: 30px;
            }
            
            .service-card {
              background: #fff;
              border-radius: 10px;
              padding: 30px;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .service-card:hover {
              transform: translateY(-10px);
              box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            }
            
            .service-icon {
              font-size: 40px;
              color: #FF6700;
              margin-bottom: 20px;
            }
            
            .service-title {
              font-size: 20px;
              margin-bottom: 15px;
              color: #0A2342;
            }
            
            /* Partners section */
            .partners {
              background-color: #fff;
            }
            
            .partners-grid {
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
              gap: 40px;
              align-items: center;
              justify-items: center;
            }
            
            .partner-logo {
              width: 100%;
              max-width: 150px;
              opacity: 0.7;
              transition: opacity 0.3s ease;
            }
            
            .partner-logo:hover {
              opacity: 1;
            }
            
            /* Team section */
            .team {
              background-color: #f9f9f9;
            }
            
            .team-grid {
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
              gap: 30px;
            }
            
            .team-card {
              background: #fff;
              border-radius: 10px;
              overflow: hidden;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .team-card:hover {
              transform: translateY(-10px);
              box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            }
            
            .team-img {
              width: 100%;
              height: 250px;
              object-fit: cover;
            }
            
            .team-info {
              padding: 20px;
              text-align: center;
            }
            
            .team-name {
              font-size: 18px;
              font-weight: 600;
              margin-bottom: 5px;
              color: #0A2342;
            }
            
            .team-position {
              color: #FF6700;
              margin-bottom: 10px;
            }
            
            .team-social {
              display: flex;
              justify-content: center;
            }
            
            .social-link {
              display: inline-flex;
              width: 30px;
              height: 30px;
              border-radius: 50%;
              background: #f0f0f0;
              color: #0A2342;
              align-items: center;
              justify-content: center;
              text-decoration: none;
              margin: 0 5px;
              transition: background-color 0.3s ease, color 0.3s ease;
            }
            
            .social-link:hover {
              background-color: #FF6700;
              color: #fff;
            }
            
            /* Blog section */
            .blog {
              background-color: #fff;
            }
            
            .blog-grid {
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
              gap: 30px;
            }
            
            .blog-card {
              border-radius: 10px;
              overflow: hidden;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              background: #fff;
            }
            
            .blog-card:hover {
              transform: translateY(-10px);
              box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            }
            
            .blog-img {
              width: 100%;
              height: 200px;
              object-fit: cover;
            }
            
            .blog-content {
              padding: 20px;
            }
            
            .blog-date {
              font-size: 14px;
              color: #777;
              margin-bottom: 10px;
            }
            
            .blog-title {
              font-size: 18px;
              font-weight: 600;
              margin-bottom: 10px;
              color: #0A2342;
            }
            
            .blog-excerpt {
              margin-bottom: 15px;
            }
            
            .read-more {
              color: #FF6700;
              text-decoration: none;
              font-weight: 500;
              transition: color 0.3s ease;
            }
            
            .read-more:hover {
              color: #e55d00;
            }
            
            /* Projects section */
            .projects {
              background-color: #f9f9f9;
            }
            
            .project-grid {
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
              gap: 30px;
            }
            
            .project-card {
              position: relative;
              border-radius: 10px;
              overflow: hidden;
              height: 250px;
              cursor: pointer;
            }
            
            .project-img {
              width: 100%;
              height: 100%;
              object-fit: cover;
              transition: transform 0.3s ease;
            }
            
            .project-overlay {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background: linear-gradient(to top, rgba(10, 35, 66, 0.8), rgba(10, 35, 66, 0.2));
              display: flex;
              flex-direction: column;
              justify-content: flex-end;
              padding: 20px;
              opacity: 0;
              transition: opacity 0.3s ease;
            }
            
            .project-card:hover .project-img {
              transform: scale(1.1);
            }
            
            .project-card:hover .project-overlay {
              opacity: 1;
            }
            
            .project-title {
              color: #fff;
              font-size: 18px;
              font-weight: 600;
              margin-bottom: 5px;
            }
            
            .project-category {
              color: #FF6700;
              font-size: 14px;
            }
            
            /* Contact section */
            .contact {
              background-color: #0A2342;
              color: #fff;
            }
            
            .contact-container {
              display: grid;
              grid-template-columns: 1fr 1fr;
              gap: 40px;
            }
            
            .contact-info h2 {
              color: #fff;
            }
            
            .contact-info h2::after {
              background-color: #FF6700;
            }
            
            .contact-details {
              margin-top: 30px;
            }
            
            .contact-item {
              display: flex;
              margin-bottom: 20px;
            }
            
            .contact-icon {
              margin-right: 15px;
              color: #FF6700;
              font-size: 20px;
            }
            
            .contact-text {
              font-size: 16px;
            }
            
            .contact-text a {
              color: #fff;
              text-decoration: none;
              transition: color 0.3s ease;
            }
            
            .contact-text a:hover {
              color: #FF6700;
            }
            
            .form-group {
              margin-bottom: 20px;
            }
            
            .form-control {
              width: 100%;
              padding: 12px 15px;
              background-color: rgba(255, 255, 255, 0.1);
              border: 1px solid rgba(255, 255, 255, 0.2);
              border-radius: 5px;
              color: #fff;
              font-family: 'Poppins', sans-serif;
            }
            
            .form-control::placeholder {
              color: rgba(255, 255, 255, 0.6);
            }
            
            textarea.form-control {
              resize: vertical;
              min-height: 120px;
            }
            
            /* Footer */
            .footer {
              background-color: #051629;
              color: #fff;
              padding: 60px 0 20px;
            }
            
            .footer-grid {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
              gap: 40px;
              margin-bottom: 40px;
            }
            
            .footer-col h3 {
              color: #fff;
              font-size: 18px;
              margin-bottom: 20px;
              position: relative;
              padding-bottom: 10px;
            }
            
            .footer-col h3::after {
              content: '';
              position: absolute;
              bottom: 0;
              left: 0;
              width: 40px;
              height: 2px;
              background-color: #FF6700;
            }
            
            .footer-links {
              list-style: none;
              padding: 0;
              margin: 0;
            }
            
            .footer-links li {
              margin-bottom: 10px;
            }
            
            .footer-links a {
              color: rgba(255, 255, 255, 0.7);
              text-decoration: none;
              transition: color 0.3s ease;
            }
            
            .footer-links a:hover {
              color: #FF6700;
            }
            
            .social-links {
              display: flex;
              margin-top: 20px;
            }
            
            .social-links a {
              display: flex;
              align-items: center;
              justify-content: center;
              width: 36px;
              height: 36px;
              border-radius: 50%;
              background-color: rgba(255, 255, 255, 0.1);
              color: #fff;
              margin-right: 10px;
              text-decoration: none;
              transition: background-color 0.3s ease;
            }
            
            .social-links a:hover {
              background-color: #FF6700;
            }
            
            .copyright {
              text-align: center;
              padding-top: 20px;
              border-top: 1px solid rgba(255, 255, 255, 0.1);
              color: rgba(255, 255, 255, 0.7);
              font-size: 14px;
            }
            
            /* Animation keyframes */
            @keyframes fadeIn {
              from {
                opacity: 0;
              }
              to {
                opacity: 1;
              }
            }
            
            @keyframes slideUp {
              from {
                opacity: 0;
                transform: translateY(30px);
              }
              to {
                opacity: 1;
                transform: translateY(0);
              }
            }
            
            /* Animate on scroll */
            .animate-on-scroll {
              opacity: 0;
              transform: translateY(30px);
              transition: opacity 0.6s ease, transform 0.6s ease;
            }
            
            .animate-on-scroll.visible {
              opacity: 1;
              transform: translateY(0);
            }
            
            /* Media Queries */
            @media (max-width: 991px) {
              .navbar-nav {
                display: none;
              }
              
              .mobile-nav-toggle {
                display: block;
              }
              
              .hero-title {
                font-size: 36px;
              }
              
              .hero-subtitle {
                font-size: 18px;
              }
              
              .about-content,
              .contact-container {
                grid-template-columns: 1fr;
              }
              
              .about-image {
                order: -1;
              }
            }
            
            @media (max-width: 768px) {
              .section {
                padding: 60px 0;
              }
              
              .section-title {
                font-size: 28px;
              }
            }
            
            @media (max-width: 576px) {
              .hero-title {
                font-size: 28px;
              }
              
              .hero-subtitle {
                font-size: 16px;
              }
              
              .btn {
                padding: 10px 20px;
                font-size: 14px;
              }
            }
          </style>
        </head>
        <body>
          <!-- Navbar -->
          <nav class="navbar" id="navbar">
            <div class="container navbar-container">
              <a href="#" class="navbar-brand">
                <span>Egy</span><span>Media</span>
              </a>
              
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                  <a href="#partners" class="nav-link">Our Partners</a>
                </li>
                <li class="nav-item">
                  <a href="#team" class="nav-link">Our Team</a>
                </li>
                <li class="nav-item">
                  <a href="#careers" class="nav-link">Careers</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" aria-label="Change language">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="2" y1="12" x2="22" y2="12"></line>
                      <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                  </a>
                </li>
              </ul>
              
              <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle Menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
              </button>
            </div>
            
            <div class="mobile-menu" id="mobileMenu">
              <ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#partners">Our Partners</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li>
                  <a href="#" aria-label="Change language">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px; display: inline-block; vertical-align: middle;">
                      <circle cx="12" cy="12" r="10"></circle>
                      <line x1="2" y1="12" x2="22" y2="12"></line>
                      <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                    Change Language
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          
          <!-- Hero Section -->
          <section id="hero" class="hero">
            <div class="hero-bg">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="Hero Background">
            </div>
            <div class="hero-content">
              <h1 class="hero-title">Innovative Digital Media Solutions</h1>
              <p class="hero-subtitle">We transform your ideas into memorable digital experiences that connect with your audience</p>
              <a href="#contact" class="btn">Get Started</a>
            </div>
          </section>
          
          <!-- About Section -->
          <section id="about" class="section about">
            <div class="container">
              <h2 class="section-title">About Us</h2>
              <div class="about-content">
                <div class="about-text animate-on-scroll">
                  <p>EgyMedia is a leading digital media agency specializing in creating impactful digital solutions for businesses of all sizes.</p>
                  <p>With over a decade of experience in the industry, we've helped hundreds of companies establish their digital presence and connect with their target audience.</p>
                  <p>Our mission is to provide innovative, tailored solutions that drive growth and deliver measurable results for our clients.</p>
                </div>
                <div class="about-image animate-on-scroll">
                  <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="About Us Image">
                </div>
              </div>
            </div>
          </section>
          
          <!-- Services Section -->
          <section id="services" class="section services">
            <div class="container">
              <h2 class="section-title text-center">Our Services</h2>
              <div class="services-grid">
                <div class="service-card animate-on-scroll">
                  <div class="service-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FF6700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                      <path d="M7 7h.01"></path>
                      <path d="m14 7-5 5"></path>
                      <path d="m7 14 5-5"></path>
                      <path d="M17 7h.01"></path>
                      <path d="M7 17h.01"></path>
                      <path d="M17 17h.01"></path>
                    </svg>
                  </div>
                  <h3 class="service-title">Digital Strategy</h3>
                  <p>We craft comprehensive digital strategies that align with your business goals and maximize your online presence.</p>
                </div>
                
                <div class="service-card animate-on-scroll">
                  <div class="service-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FF6700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 19c.953 0 1.83.207 2.5.567 1.053.566 2.446.566 3.5 0 .67-.36 1.547-.567 2.5-.567a7.5 7.5 0 0 0 0-15c-.953 0-1.83.207-2.5.567-1.053.566-2.446.566-3.5 0-.67-.36-1.547-.567-2.5-.567a7.5 7.5 0 0 0-7.5 7.5v7.5"></path>
                      <path d="M3 19h18"></path>
                    </svg>
                  </div>
                  <h3 class="service-title">Branding & Identity</h3>
                  <p>We help create and refine your brand identity to ensure consistency and resonance with your target audience.</p>
                </div>
                
                <div class="service-card animate-on-scroll">
                  <div class="service-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FF6700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 7v9a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7"></path>
                      <path d="M21 7H3"></path>
                      <path d="M18 7V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v2"></path>
                      <path d="M12 12v-2"></path>
                    </svg>
                  </div>
                  <h3 class="service-title">Digital Marketing</h3>
                  <p>Our data-driven marketing strategies help you reach the right audience at the right time with the right message.</p>
                </div>
                
                <div class="service-card animate-on-scroll">
                  <div class="service-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FF6700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 8h14M5 12h14M9 16h6"></path>
                      <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                    </svg>
                  </div>
                  <h3 class="service-title">Web Development</h3>
                  <p>We build responsive, user-friendly websites and applications that provide exceptional user experiences.</p>
                </div>
                
                <div class="service-card animate-on-scroll">
                  <div class="service-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FF6700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M15 8h.01"></path>
                      <rect width="16" height="16" x="4" y="4" rx="3"></rect>
                      <path d="m4 15 4-4a3 5 0 0 1 3 0l5 5"></path>
                      <path d="m14 14 1-1a3 5 0 0 1 3 0l2 2"></path>
                    </svg>
                  </div>
                  <h3 class="service-title">Content Creation</h3>
                  <p>From copywriting to video production, we create engaging content that tells your brand's story effectively.</p>
                </div>
                
                <div class="service-card animate-on-scroll">
                  <div class="service-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#FF6700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 8a6 6 0 0 0-9.33-5"></path>
                      <path d="m10.67 21.33-.67-1.33"></path>
                      <path d="M5.67 18.33 7 16"></path>
                      <path d="M3.33 13.33 6 14"></path>
                      <path d="M18.33 18.33 17 16"></path>
                      <path d="M20.67 13.33 18 14"></path>
                      <path d="m14 21.33.67-1.33"></path>
                      <path d="M16.5 20c-1.45.33-2.95.33-4.4 0"></path>
                      <path d="M20.32 14c.6-1.3.78-2.79.52-4.21"></path>
                      <path d="M19.33 6a7.98 7.98 0 0 0-4.47-3.45"></path>
                      <path d="M12 2c-.7 0-1.37.07-2.02.21"></path>
                      <path d="M8 3c-1.78.62-3.28 1.85-4.33 3.45"></path>
                      <path d="M3.24 9a6.76 6.76 0 0 0 .34 4.84"></path>
                      <path d="M8 20c-1.18-.53-2.22-1.32-3.04-2.32"></path>
                      <path d="M12 20.93a7.99 7.99 0 0 0 6.95-12.15A7.99 7.99 0 0 0 4 12c0 3.2 1.87 5.96 4.57 7.25"></path>
                    </svg>
                  </div>
                  <h3 class="service-title">SEO & Analytics</h3>
                  <p>We improve your online visibility through SEO strategies and use analytics to continuously refine your digital presence.</p>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Partners Section -->
          <section id="partners" class="section partners">
            <div class="container">
              <h2 class="section-title text-center">Our Partners</h2>
              <div class="partners-grid">
                <div class="animate-on-scroll">
                  <img class="partner-logo" src="https://via.placeholder.com/150x80/eee?text=Partner+1" alt="Partner 1">
                </div>
                <div class="animate-on-scroll">
                  <img class="partner-logo" src="https://via.placeholder.com/150x80/eee?text=Partner+2" alt="Partner 2">
                </div>
                <div class="animate-on-scroll">
                  <img class="partner-logo" src="https://via.placeholder.com/150x80/eee?text=Partner+3" alt="Partner 3">
                </div>
                <div class="animate-on-scroll">
                  <img class="partner-logo" src="https://via.placeholder.com/150x80/eee?text=Partner+4" alt="Partner 4">
                </div>
                <div class="animate-on-scroll">
                  <img class="partner-logo" src="https://via.placeholder.com/150x80/eee?text=Partner+5" alt="Partner 5">
                </div>
                <div class="animate-on-scroll">
                  <img class="partner-logo" src="https://via.placeholder.com/150x80/eee?text=Partner+6" alt="Partner 6">
                </div>
              </div>
            </div>
          </section>
          
          <!-- Team Section -->
          <section id="team" class="section team">
            <div class="container">
              <h2 class="section-title text-center">Our Team</h2>
              <div class="team-grid">
                <div class="team-card animate-on-scroll">
                  <img class="team-img" src="https://via.placeholder.com/500x500/eee?text=Team+Member" alt="Team Member">
                  <div class="team-info">
                    <h3 class="team-name">Ahmed Mahmoud</h3>
                    <p class="team-position">CEO & Founder</p>
                    <div class="team-social">
                      <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                        </svg>
                      </a>
                      <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="team-card animate-on-scroll">
                  <img class="team-img" src="https://via.placeholder.com/500x500/eee?text=Team+Member" alt="Team Member">
                  <div class="team-info">
                    <h3 class="team-name">Sarah Ali</h3>
                    <p class="team-position">Creative Director</p>
                    <div class="team-social">
                      <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                        </svg>
                      </a>
                      <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="team-card animate-on-scroll">
                  <img class="team-img" src="https://via.placeholder.com/500x500/eee?text=Team+Member" alt="Team Member">
                  <div class="team-info">
                    <h3 class="team-name">Omar Hassan</h3>
                    <p class="team-position">Digital Marketing Manager</p>
                    <div class="team-social">
                      <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                        </svg>
                      </a>
                      <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="team-card animate-on-scroll">
                  <img class="team-img" src="https://via.placeholder.com/500x500/eee?text=Team+Member" alt="Team Member">
                  <div class="team-info">
                    <h3 class="team-name">Nada Ibrahim</h3>
                    <p class="team-position">Web Developer</p>
                    <div class="team-social">
                      <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                        </svg>
                      </a>
                      <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                          <rect x="2" y="9" width="4" height="12"></rect>
                          <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Blog Section -->
          <section id="blog" class="section blog">
            <div class="container">
              <h2 class="section-title text-center">Latest News</h2>
              <div class="blog-grid">
                <div class="blog-card animate-on-scroll">
                  <img class="blog-img" src="https://via.placeholder.com/600x400/eee?text=Blog+Image" alt="Blog Image">
                  <div class="blog-content">
                    <p class="blog-date">September 15, 2023</p>
                    <h3 class="blog-title">Top Digital Marketing Trends for 2024</h3>
                    <p class="blog-excerpt">Discover the latest trends that will shape the digital marketing landscape in the coming year.</p>
                    <a href="#" class="read-more">Read More</a>
                  </div>
                </div>
                
                <div class="blog-card animate-on-scroll">
                  <img class="blog-img" src="https://via.placeholder.com/600x400/eee?text=Blog+Image" alt="Blog Image">
                  <div class="blog-content">
                    <p class="blog-date">August 22, 2023</p>
                    <h3 class="blog-title">How to Create a Successful Brand Strategy</h3>
                    <p class="blog-excerpt">Learn the key elements of a successful brand strategy and how to implement them effectively.</p>
                    <a href="#" class="read-more">Read More</a>
                  </div>
                </div>
                
                <div class="blog-card animate-on-scroll">
                  <img class="blog-img" src="https://via.placeholder.com/600x400/eee?text=Blog+Image" alt="Blog Image">
                  <div class="blog-content">
                    <p class="blog-date">July 10, 2023</p>
                    <h3 class="blog-title">The Importance of Mobile-First Design</h3>
                    <p class="blog-excerpt">Why prioritizing mobile experience is crucial for website success in today's digital landscape.</p>
                    <a href="#" class="read-more">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Projects Section -->
          <section id="projects" class="section projects">
            <div class="container">
              <h2 class="section-title text-center">Our Projects</h2>
              <div class="project-grid">
                <div class="project-card animate-on-scroll">
                  <img class="project-img" src="https://via.placeholder.com/600x400/0A2342?text=Project" alt="Project 1">
                  <div class="project-overlay">
                    <h3 class="project-title">E-commerce Website</h3>
                    <p class="project-category">Web Development</p>
                  </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                  <img class="project-img" src="https://via.placeholder.com/600x400/0A2342?text=Project" alt="Project 2">
                  <div class="project-overlay">
                    <h3 class="project-title">Brand Identity</h3>
                    <p class="project-category">Branding</p>
                  </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                  <img class="project-img" src="https://via.placeholder.com/600x400/0A2342?text=Project" alt="Project 3">
                  <div class="project-overlay">
                    <h3 class="project-title">Social Media Campaign</h3>
                    <p class="project-category">Digital Marketing</p>
                  </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                  <img class="project-img" src="https://via.placeholder.com/600x400/0A2342?text=Project" alt="Project 4">
                  <div class="project-overlay">
                    <h3 class="project-title">Mobile Application</h3>
                    <p class="project-category">App Development</p>
                  </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                  <img class="project-img" src="https://via.placeholder.com/600x400/0A2342?text=Project" alt="Project 5">
                  <div class="project-overlay">
                    <h3 class="project-title">Video Production</h3>
                    <p class="project-category">Content Creation</p>
                  </div>
                </div>
                
                <div class="project-card animate-on-scroll">
                  <img class="project-img" src="https://via.placeholder.com/600x400/0A2342?text=Project" alt="Project 6">
                  <div class="project-overlay">
                    <h3 class="project-title">SEO Optimization</h3>
                    <p class="project-category">SEO & Analytics</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Careers Section -->
          <section id="careers" class="section blog">
            <div class="container">
              <h2 class="section-title text-center">Join Our Team</h2>
              <div class="text-center mb-12 animate-on-scroll">
                <p class="text-lg max-w-3xl mx-auto">
                  We're always looking for talented individuals to join our growing team. Check out our current openings below.
                </p>
              </div>
              
              <div class="blog-grid">
                <div class="blog-card animate-on-scroll">
                  <div class="blog-content">
                    <h3 class="blog-title">Senior Digital Marketing Specialist</h3>
                    <p class="blog-excerpt">We're looking for an experienced digital marketing specialist to lead our client campaigns and drive results.</p>
                    <p class="blog-date">Location: Cairo, Egypt</p>
                    <a href="#" class="read-more">Apply Now</a>
                  </div>
                </div>
                
                <div class="blog-card animate-on-scroll">
                  <div class="blog-content">
                    <h3 class="blog-title">UX/UI Designer</h3>
                    <p class="blog-excerpt">Join our design team to create beautiful, functional interfaces for web and mobile applications.</p>
                    <p class="blog-date">Location: Alexandria, Egypt</p>
                    <a href="#" class="read-more">Apply Now</a>
                  </div>
                </div>
                
                <div class="blog-card animate-on-scroll">
                  <div class="blog-content">
                    <h3 class="blog-title">Content Writer</h3>
                    <p class="blog-excerpt">We need a creative writer who can produce engaging content for various digital platforms.</p>
                    <p class="blog-date">Location: Remote</p>
                    <a href="#" class="read-more">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Contact Section -->
          <section id="contact" class="section contact">
            <div class="container">
              <div class="contact-container">
                <div class="contact-info">
                  <h2 class="section-title">Contact Us</h2>
                  <p>Get in touch with our team to discuss how we can help you achieve your digital goals.</p>
                  
                  <div class="contact-details">
                    <div class="contact-item animate-on-scroll">
                      <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                          <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                      </div>
                      <div class="contact-text">
                        123 Business Street, Cairo, Egypt
                      </div>
                    </div>
                    
                    <div class="contact-item animate-on-scroll">
                      <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                      </div>
                      <div class="contact-text">
                        <a href="tel:+20123456789">+20 123 456 789</a>
                      </div>
                    </div>
                    
                    <div class="contact-item animate-on-scroll">
                      <div class="contact-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                          <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                      </div>
                      <div class="contact-text">
                        <a href="mailto:info@egymedia.com">info@egymedia.com</a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="animate-on-scroll">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                  </form>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Footer -->
          <footer class="footer">
            <div class="container">
              <div class="footer-grid">
                <div class="footer-col">
                  <a href="#" class="navbar-brand">
                    <span>Egy</span><span>Media</span>
                  </a>
                  <p style="color: rgba(255, 255, 255, 0.7); margin-top: 20px;">
                    Providing innovative digital media solutions that help businesses connect with their audience and grow their online presence.
                  </p>
                  <div class="social-links">
                    <a href="#" aria-label="Facebook">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                      </svg>
                    </a>
                    <a href="#" aria-label="Twitter">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                      </svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                      </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                      </svg>
                    </a>
                  </div>
                </div>
                
                <div class="footer-col">
                  <h3>Quick Links</h3>
                  <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                  </ul>
                </div>
                
                <div class="footer-col">
                  <h3>Services</h3>
                  <ul class="footer-links">
                    <li><a href="#">Digital Strategy</a></li>
                    <li><a href="#">Branding & Identity</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Content Creation</a></li>
                    <li><a href="#">SEO & Analytics</a></li>
                  </ul>
                </div>
                
                <div class="footer-col">
                  <h3>Subscribe</h3>
                  <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 15px;">
                    Subscribe to our newsletter to get the latest news and updates.
                  </p>
                  <form>
                    <div style="display: flex;">
                      <input 
                        type="email" 
                        class="form-control" 
                        placeholder="Your Email"
                        style="flex: 1; border-top-right-radius: 0; border-bottom-right-radius: 0;"
                        required
                      >
                      <button 
                        type="submit" 
                        class="btn"
                        style="border-top-left-radius: 0; border-bottom-left-radius: 0; margin-left: -1px;"
                      >
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="22" y1="2" x2="11" y2="13"></line>
                          <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              
              <div class="copyright">
                © 2023 EgyMedia. All Rights Reserved.
              </div>
            </div>
          </footer>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
          const mobileNavToggle = document.getElementById('mobileNavToggle');
          const mobileMenu = document.getElementById('mobileMenu');
          const navbar = document.getElementById('navbar');

          if (mobileNavToggle && mobileMenu) {
            mobileNavToggle.addEventListener('click', function() {
              mobileMenu.classList.toggle('active');
            });
          }

          // Close mobile menu when clicking on a link
          const mobileMenuLinks = document.querySelectorAll('#mobileMenu a');
          mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
              mobileMenu.classList.remove('active');
            });
          });

          // Scroll event for navbar styling
          window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
              navbar.classList.add('scrolled');
            } else {
              navbar.classList.remove('scrolled');
            }
          });

          // Check initial scroll position
          if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
          }

          // Animate on scroll functionality
          function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
              rect.top <= (window.innerHeight || document.documentElement.clientHeight) - 100 &&
              rect.bottom >= 0
            );
          }

          function handleScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(element => {
              if (isElementInViewport(element)) {
                element.classList.add('visible');
              }
            });
          }

          // Initial check for animations
          handleScroll();

          // Scroll event for animations
          window.addEventListener('scroll', handleScroll);

          // Smooth scrolling for anchor links
          document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
              e.preventDefault();
              
              const targetId = this.getAttribute('href');
              if (targetId === '#') return;
              
              const targetElement = document.querySelector(targetId);
              if (targetElement) {
                targetElement.scrollIntoView({
                  behavior: 'smooth'
                });
              }
            });
          });
        });
    </script>
            </body>
        </html>