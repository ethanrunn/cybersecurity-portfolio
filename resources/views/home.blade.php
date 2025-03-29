@extends('layouts.app')

@section('content')
<section class="hero">
    <!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-1 hero-style-2">
        <div class="hero-slider" >
            <div class="slide">
                <div class="slider-image">
                    {{-- <img src="{{ asset('assets/images/downloaded/1.jpg') }}" alt class="slider-bg"> --}}
                    <img src="{{ url('assets/images/for-canva/4a.jpg') }}" alt="Hero Background" class="slider-bg" width="1920px" height="1000px">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 col-sm-10 slide-caption">
                            <div class="slide-subtitle">
                                <h4>I Am Francis Uramah</h5>
                            </div>
                            <div class="slide-title">
                                <h2>Cybersecurity Analyst and Ethical Hacker</h2>
                            </div>
                            <div class="btns">
                                <a href="https://www.linkedin.com/in/francis-uramah-89250a187/" class="theme-btn">Hire Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links">
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/francisnosa"><i class="ti-facebook"></i></a></li>
                <li><a target="_blank" href="https://www.x.com/ethan_runn?t=0OcKCUoNJqZpSPMd6PcdkQ&s=09"><i class="ti-twitter-alt"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/francis-uramah-89250a187/"><i class="ti-linkedin"></i></a></li>
                <!-- <li><a href="#"><i class="ti-pinterest"></i></a></li> -->
            </ul>
        </div>
        <div class="white_svg svg_white">
            <!-- <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg> -->
        </div>
    </section>
    <!-- end of hero slider -->

    <!-- about-area start -->
    <div id="about" class="about-area about-area-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ptb">
                    <div class="about-images">
                        <img src="{{ asset('assets/images/for-canva/14.png') }}" alt="" width="510px" height="510px" />
                    </div>
                </div>
                <div class="col-md-6 ptb ptb-2">
                    <div class="about-content">
                        <h2>About Me</h2>
                        <p>Cyber threats are evolving every day, and I am dedicated to staying ahead of them. My name is <b>Francis Uramah</b> and I am a <b>Cybersecurity Analyst. SOC Analyst, Incident Responder and Ethical Hacker</b> with a strong foundation in network security, threat detection, penetration testing, and incident response. My passion for cybersecurity stems from my drive to protect organizations, individuals, and critical systems from vulnerabilities and attacks and I have honed my ability to analyze risks, strengthen security postures, and mitigate cyber threats effectively.  
                        </p>
                        <br>
                        <p>Whether it's analyzing security logs, conducting penetration tests, investigating incidents, or fortifying web applications, I bring a data-driven and methodical approach to cybersecurity that minimize risks and enhance digital safety and organizational security. As an advocate for continuous learning, I am always exploring the latest tools, frameworks, and methodologies to enhance my expertise.</p>
                        <br>
                        <p>My goal is to help businesses and individuals stay secure in an increasingly digital world while sharing knowledge and contributing to the cybersecurity community.</p>
                        <div class="btns">
                            <a href="{{ asset('assets/files/FrancisTochukwuUramahResume-Enhancv.pdf') }}" download class="theme-btn theme-btn-2">
                            Download CV <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="color_svg svg_color">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div> --}}
    </div>
    <!-- about-area end -->

    <!-- service-area start -->
    <div class="service-area service-area-2 ptb-100-70">
        <div class="container">
                <div class="col-12">
                    <div class="section-title section-title-2 text-center">
                        <h2>What I Am Expert In</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-sm-12 grid">
                        <div class="service-section">
                            <div class="services-wrapper">
                                <div class="services-icon-wrapper">
                                    <i class="fi flaticon-laptop"></i>
                                </div>
                                <div class="service-content">
                                    <h2>Network Security & Monitoring</h2>
                                    <p>Protecting and monitoring networks against intrusions, unauthorized access, and data breaches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-12 grid">
                        <div class="service-section">
                            <div class="services-wrapper">
                                <div class="services-icon-wrapper">
                                    <i class="fi flaticon-web-programming"></i>
                                </div>
                                <div class="service-content">
                                    <h2>Threat Detection & Incident Response</h2>
                                    <p>Identifying cyber threats, mitigating risks, and responding to security incidents efficiently.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-12 grid">
                        <div class="service-section">
                            <div class="services-wrapper">
                                <div class="services-icon-wrapper">
                                    <i class="fi flaticon-color"></i>
                                </div>
                                <div class="service-content">
                                    <h2>Penetration Testing & Hacking</h2>
                                    <p>Ethically simulating cyber-attacks and threat actors to uncover system vulnerabilities and strengthen security.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-12 grid">
                        <div class="service-section">
                            <div class="services-wrapper">
                                <div class="services-icon-wrapper">
                                    <i class="fi flaticon-smartphone"></i>
                                </div>
                                <div class="service-content">
                                    <h2>Security Information & Event Management (SIEM)</h2>
                                    <p>Utilizing tools like Splunk, ELK and Google Chronicle to analyze security logs and detect anomalies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-12 grid">
                        <div class="service-section">
                            <div class="services-wrapper">
                                <div class="services-icon-wrapper">
                                    <i class="fi flaticon-settings-gears"></i>
                                </div>
                                <div class="service-content">
                                    <h2>Web Application Testing & Security</h2>
                                    <p>Identifying and patching vulnerabilities in web applications using tools like Burp Suite and OpenVAS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-12 grid">
                        <div class="service-section">
                            <div class="services-wrapper">
                                <div class="services-icon-wrapper">
                                    <i class="fi flaticon-support"></i>
                                </div>
                                <div class="service-content">
                                    <h2>Cloud Security & Compliance</h2>
                                    <p>Understanding cloud security frameworks and ensuring compliance with security best practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ab-color_svg ab-svg_color">
                <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                    <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
                </svg>
            </div>
        </div>
    <!-- service area end -->

    <!-- Certifications Section -->
    <section class="certifications-section">
        <div class="container">
            <h2 class="section-title">My Certifications</h2>

            <div class="owl-carousel certifications-carousel">
                @foreach($certifications as $certification)
                    <div class="certification-card">
                        <img src="{{ asset('assets/images/' . $certification->image) }}" alt="{{ $certification->name }}" class="cert-image">
                        <h3>{{ $certification->title }}</h3>
                        <p><strong>Issued By:</strong> {{ $certification->issuer }}</p>
                        <p><strong>Issued Date:</strong> {{ $certification->issued_date->format('F Y') }}</p>
                        <p><strong>Description:</strong></p>
                        <ul>
                            @foreach(explode(',', $certification->description) as $detail)
                                <li>{{ trim($detail) }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ $certification->link_to_verify }}" target="_blank" class="btn btn-primary">Verify</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--Start project area-->  
    <!-- <section id="project" class="gallery-section gallery-section-2 ptb-100-70">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters">
                        <div class="section-title section-title-2">
                            <h2>Work I Have Done</h2>
                        </div>
                        <ul>
                            <li><a data-filter="*" href="#" class="current">All</a></li>
                            <li><a data-filter=".Web-Design" href="#">Web Design</a></li>
                            <li><a data-filter=".Print-Design" href="#">Print Design</a></li>
                            <li><a data-filter=".Web-Application" href="#">Web Application</a></li>               
                            <li><a data-filter=".Photography" href="#">Photography</a></li> 
                        </ul>
                    </div>
                    <div class="gallery-container gallery-lightbox masonry-gallery">
                        <div class="grid Print-Design Web-Application Photography">
                            <a href="{{ asset('assets/images/downloaded/3.jpg') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/downloaded/3.jpg') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                        </div>
                        <div class="grid Web-Design Print-Design Web-Application">
                            <a href="{{ asset('assets/images/projects/25.png') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/projects/25.png') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                        </div>
                        <div class="grid Print-Design Photography">
                            <a href="{{ asset('assets/images/downloaded/5.jpg') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/downloaded/5.jpg') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                        </div>
                        <div class="grid Web-Design Web-Application">
                            <a href="{{ asset('assets/images/projects/26.png') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/projects/26.png') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                        </div>
                        <div class="grid Print-Design Photography">
                            <a href="{{ asset('assets/images/downloaded/8.jpg') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/downloaded/8.jpg') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                            
                        </div>
                        <div class="grid Print-Design Photography">
                            <a href="{{ asset('assets/images/projects/27.png') }}" class="lightbox" data-lightbox-group="gall-1">
                                <img src="{{ asset('assets/images/projects/27.png') }}" alt class="img img-responsive" width="800px" height="839px">
                                <div class="icon">
                                    <i class="ti-eye"></i>
                                </div>
                            </a>
                            
                        </div>
                        <div class="grid Web-Design Print-Design Photography Web-Application">
                            <img src="{{ asset('assets/images/projects/27.png') }}" alt class="img img-responsive" width="800px" height="839px">
                            <div class="icon">
                                <div class="video-btn">
                                    <ul>
                                        <li><a href="{{ asset('https://www.youtube.com/embed/uQBL7pSAXR8?autoplay=1') }}" class="video-btn" data-type="iframe">
                                        <i class="fi flaticon-play-button"></i>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="color_svg svg_color">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div>
    </section> -->
    <!--End project area-->

    <!-- Work Experience Section -->
    <section class="work-experience-section">
        <div class="container">
            <h2 class="section-title" style="color: white;">Work Experience</h2>

            <div class="owl-carousel work-carousel">
                @foreach($workExperiences as $experience)
                    <div class="work-item">
                        <h3>{{ $experience->role }}</h3>
                        <p><strong>Company:</strong> {{ $experience->company }}</p>
                        <p><strong>Location:</strong> {{ $experience->location }}</p>
                        <p><strong>Duration:</strong> {{ $experience->start_date->format('F Y') }} - 
                            {{ $experience->end_date ? $experience->end_date->format('F Y') : 'Present' }}
                        </p>
                        <p><strong>Responsibilities:</strong></p>
                        <ul>
                            @foreach(explode(',', $experience->description) as $task)
                                <li>{{ trim($task) }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- End work experience section -->

    <!-- testimonial-area start -->
    <div class="testimonial-area testimonial-area-2">
        <div class="container">
            <div class="testimonial-active owl-carousel">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"His ability to analyze and detect security threats is outstanding. Our company's security posture improved after he identified and patched multiple vulnerabilities."</p>
                        </div>
                        <div class="testimonial-sub">
                            <div class="testimonial-img">
                                <img src="{{ asset('assets/images/downloaded/38.jpg') }}" alt="" width="100px" height="100px">
                            </div>
                            <div class="testimonial-tumb-content">
                                <h4>Jenelia Watson</h4>
                                <span>IT Security Manager</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"A dedicated and passionate cybersecurity professional! His penetration testing skills helped us uncover and fix security flaws in our web applications."</p>
                        </div>
                        <div class="testimonial-sub">
                            <div class="testimonial-img">
                                <img src="{{ ('assets/images/downloaded/35.jpg') }}" alt="" width="100px" height="100px">
                            </div>
                            <div class="testimonial-tumb-content">
                                <h4>Johann Dansoe</h4>
                                <span>Web Security Consultant</span>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>"If you need someone who can think like an attacker and act like a defender, he's the right choice. His expertise in SIEM and security analysis is truly impressive."</p>
                        </div>
                        <div class="testimonial-sub">
                            <div class="testimonial-img">
                                <img src="{{ ('assets/images/downloaded/39.jpg') }}" alt="" width="100px" height="100px">
                            </div>
                            <div class="testimonial-tumb-content">
                                <h4>Ashley Friggs</h4>
                                <span>SOC Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>A motivated and goal-oriented individual who likes to tackle problems and profer solutions. An asset to any cybersecurity company or organization.</p>
                        </div>
                        <div class="testimonial-sub">
                            <div class="testimonial-img">
                                <img src="{{ ('assets/images/downloaded/42.jpg') }}" alt="" width="100px" height="100px">
                            </div>
                            <div class="testimonial-tumb-content">
                                <h4>Sammy Cocoan</h4>
                                <span>Co-ordinator, Hack Is Secure</span>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <div class="ab-color_svg ab-svg_color">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div>
    </div>
    <!-- testimonial-area end -->

    <!-- blog-area start -->
    <div class="blog-area blog-area-2 ptb-100-70">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title section-title-2 text-center">
                    <h2>Latest Articles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 grid">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="{{ asset('assets/images/downloaded/20.jpg') }}" alt="" width="360px" height="265px">
                            <ul>
                                <li>11</li>
                                <li>Mar</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <h3><a href="http://cybersecurity-portfolio.test/blogs/best-cybersecurity-practices-for-developers">Best Cybersecurity Practices for Developers</a></h3>
                            <p>Developers must follow best security practices, including input validation, authentication mechanisms, and encryption...</p>
                            <a href="http://cybersecurity-portfolio.test/blogs/best-cybersecurity-practices-for-developers">Read More... <i class="ti-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 grid">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="{{ asset('assets/images/downloaded/29.jpg') }}" alt="" width="360px" height="265px">
                            <ul>
                                <li>06</li>
                                <li>Mar</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <h3><a href="http://cybersecurity-portfolio.test/blogs/getting-started-with-ethical-hacking">Getting Started with Ethical Hacking</a></h3>
                            <p>Ethical hacking involves testing systems and infrastructure for vulnerabilities to improve security. Learn the essential tools and techniques...</p>
                            <a href="http://cybersecurity-portfolio.test/blogs/getting-started-with-ethical-hacking">Read More... <i class="ti-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 grid">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="{{ asset('assets/images/downloaded/28.jpg') }}" alt="" width="360px" height="265px">
                            <ul>
                                <li>25</li>
                                <li>Feb</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <h3><a href="http://cybersecurity-portfolio.test/blogs/how-to-build-scalable-web-applications">How to Build Scalable Web Applications</a></h3>
                            <p>Scalability is key for web applications handling large amounts of traffic. Learn about database optimization, caching, and cloud computing...</p>
                            <a href="http://cybersecurity-portfolio.test/blogs/how-to-build-scalable-web-applications">Read More... <i class="ti-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="color_svg svg_color">
            <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
            </svg>
        </div>
    </div>
    <!-- blog-area end -->

    <!-- contact-item start -->
    <div id="Contact" class="contact-area contact-area-2 section-padding">
        <div class="container">
             <div class="row">
                 <div class="col-md-5 col-sm-12">
                     <div class="contact-page-item">
                         <h2>My Contact</h2>
                         <p>Thanks for visiting my portfolio website and for going through it thoroughly. If you have any questions, enquiry, advice, opportunities or are looking to collaborate, do not hesitate to reach out. LinkedIn or my mail are the fastest ways to reach me, however I'm active on X too. I'm looking forward to your message.</p>
                         <div class="adress">
                             <h3>Address</h3>
                             <span>3 Kings Street, Victoria Island, Lagos.</span>
                         </div>
                         <div class="phone">
                             <h3>Phone</h3>
                             <span>(+234) 081-3302-4455</span>
                             <span>(+234) 070-1257-7733</span>
                         </div>
                         <div class="email">
                             <h3>Email</h3>
                             <span>francisnosa247@gmail.com</span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-7 col-sm-12">
                     <div class="contact-item contact-item-2 contact-item-3">
                         <h2>Send a quick message</h2>
                         <div class="contact-form">
                             <form method="post" class="contact-vAlidation-active" id="contact-form">
                                 <div class="half-col">
                                     <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                 </div>
                                 <div class="half-col">
                                     <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                 </div>
                                 <div class="half-col">
                                     <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                 </div>
                                 <div class="half-col">
                                     <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                 </div>
                                 <div>
                                     <textarea class="form-control" name="note"  id="note" placeholder="Your message..."></textarea>
                                 </div>
                                 <div class="submit-btn-wrapper">
                                     <button type="submit" class="theme-btn-s3">Shoot!</button>
                                     <div id="loader">
                                         <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                     </div>
                                 </div>
                                 <div class="clearfix error-handling-messages">
                                     <div id="success">Thank you for reaching out. I appreciate you and will get back to you as soon as I can</div>
                                     <div id="error">Uh-oh! An error occurred while sending this mail. Please try again later.
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <!-- .contact-item end -->
</section>
@endsection
