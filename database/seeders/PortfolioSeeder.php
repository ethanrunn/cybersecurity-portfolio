<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certification;
use App\Models\Project;
use App\Models\WorkExperience;
use App\Models\Blog;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        Certification::updateOrCreate([
            'title' => 'Google Cybersecurity'], // find by name
            [
            'description' => 'Beginner-level Python & Linux & SQL, Proficiency in SIEM and IPS/IDS tools, Identify and mitigate against common cybersecurity risks & threats & vulnerabilities',
            'issuer' => 'Coursera',
            'issued_date' => '2024-11-06',
            'link_to_verify' => 'https://coursera.org/verify/professional-cert/V7KUA47M5KYH',
            'image' => 'certs/google.jpg',
        ]);

        Certification::updateOrCreate([
            'title' => 'CompTIA Security+'],
            [
            'description' => 'Industry-recognized certification, Covers risk management and threat detection/analsis, Network security and Cryptography',
            'issuer' => 'CompTIA',
            'issued_date' => '2025-01-08',
            'link_to_verify' => 'https://www.credly.com/badges/3522d718-b2b7-4594-a815-7c1f176492b8/linked_in_profile',
            'image' => 'certs/security+.jpg',
        ]);
        
        Certification::updateOrCreate([
            'title' => 'Certified in Cybersecurity'],
            [
            'description' => 'Entry-level certificate, Comprehensive, Beginner-friendly',
            'issuer' => 'ISC2',
            'issued_date' => '2025-01-08',
            'link_to_verify' => 'https://www.isc2.org/certifications',
            'image' => 'certs/isc2.jpg',
        ]);
        
        Certification::updateOrCreate([
            'title' => 'Junior Cybersecurity Analyst'],
            [
            'description' => 'Controls to enhance network and information security, Mitigate network and systems security threats, Evaluate organizational security posture using vulnerability and risk assessment tools, Recommend incident management activities to be included in an incident response plan',
            'issuer' => 'Cisco',
            'issued_date' => '2024-09-13',
            'link_to_verify' => 'https://www.isc2.org/programs/certified-in-cybesecurity-cc/',
            'image' => 'certs/cisco.jpg',
        ]);
        
        Certification::updateOrCreate([
            'title' => 'Advent Of Cyber 2024'],
            [
            'description' => 'Hands-On Training, Practical Labs, 24 Cybersecurity Challenges',
            'issuer' => 'Tryhackme.com',
            'issued_date' => '2024-12-25',
            'link_to_verify' => 'https://tryhackme-certificates.s3-eu-west-1.amazonaws.com/THM-E5W5AABKPX.pdf',
            'image' => 'certs/advent.jpg',
        ]);
        
        Certification::updateOrCreate([
            'title' => 'Pre Security'],
            [
            'description' => 'Hands-On Training, Practical Labs, 7 hours to complete',
            'issuer' => 'Tryhackme.com',
            'issued_date' => '2025-01-21',
            'link_to_verify' => 'https://tryhackme-certificates.s3-eu-west-1.amazonaws.com/THM-7G0YSIHZMV.pdf',
            'image' => 'certs/pre-sec.jpg',
        ]);
        
        Certification::updateOrCreate([
            'title' => 'Cybersecurity 101'],
            [
            'description' => 'Hands-On Training, Practical Labs, 46 hours to complete',
            'issuer' => 'Tryhackme.com',
            'issued_date' => '2025-01-30',
            'link_to_verify' => 'https://tryhackme-certificates.s3-eu-west-1.amazonaws.com/THM-YTZ9NXIEZB.pdf',
            'image' => 'certs/cyber101.jpg',
        ]);

        Certification::updateOrCreate([
            'title' => 'SOC Level 1'],
            [
            'description' => 'Hands-On Training, Practical Labs, 87 hours to complete',
            'issuer' => 'Tryhackme.com',
            'issued_date' => '2025-02-14',
            'link_to_verify' => 'https://tryhackme-certificates.s3-eu-west-1.amazonaws.com/THM-T5UKZ3FZ3Y.pdf',
            'image' => 'certs/soc.jpg',
        ]);
        
        Certification::updateOrCreate([
            'title' => 'AIG Shields Up: Cybersecurity Job Simulation'],
            [
            'description' => 'Completed a cybersecurity threat analysis simulation for the Cyber Defense Unit - staying updated on CISA publications, Researched and understood reported vulnerabilities - showcasing analytical skills in cybersecurity, Drafted a clear and concise email to guide teams on vulnerability remediation, Utilized Python skills to write a script for ethical hacking - avoiding ransom payments by bruteforcing decryption keys',
            'issuer' => 'Forage.com',
            'issued_date' => '2024-09-21',
            'link_to_verify' => 'https://www.theforage.com/simulations/aig/cybersecurity-ku1i',
            'image' => 'certs/aig.jpg',
        ]);

        Certification::updateOrCreate([
            'title' => 'Mastercard Shields Up: Cybersecurity Job Simulation'],
            [
            'description' => 'Completed a job simulation where I served as an analyst on Mastercard’s Security Awareness Team, Helped identify and report security threats such as phishing, Analyzed and identified which areas of the business needed more robust security training and implemented training courses and procedures for those teams',
            'issuer' => 'Forage.com',
            'issued_date' => '2024-09-21',
            'link_to_verify' => 'https://www.theforage.com/simulations/mastercard/cybersecurity-t8ye',
            'image' => 'certs/mastercard.jpg',
        ]);


        // Work Experience

        WorkExperience::updateOrCreate([
            'company' => 'Devniche Digital Ltd'], // find by company name
            [
            'role' => 'Web Developer',
            'description' => 'Creating and maintaining responsive & user-friendly websites, Ensuring optimal performance across devices and browsers, Developing and managing databases using SQL, Ensuring data integrity & security and efficient retrieval for dynamic web applications, Collaborating with designers to implement intuitive interfaces & enhancing user experience and accessibility',
            'start_date' => '2023-02-03',
            'end_date' => null, // Still working here
            'location' => 'Enugu, Nigeria',
        ]);

        WorkExperience::updateOrCreate([
            'company' => 'Hack Secure'],
            [
            'role' => 'Cybersecurity Analyst Intern - Red Team',
            'description' => 'Used tools such as Nmap & GoBuster & Wireshark for reconnaissance and exploitation of a vulnerable test website in order to capture admin login credentials, Created a Python script for a password strength evaluator (that evaluates password based on a complexity criteria and gives feedback such as “Weak” & “Moderate” & “Strong”), Documented findings and vulnerabilities in a comprehensive report (with screenshots), Recommended remediation strategies for better and all-round security improvement',
            'start_date' => '2025-02-05',
            'end_date' => '2025-03-03',
            'location' => 'India (Remote)',
        ]);

        WorkExperience::updateOrCreate([
            'company' => 'ShadowFox Inc.'],
            [
            'role' => 'Cyber Security Analyst Intern',
            'description' => 'Monitored network traffic using tools like Wireshark and Splunk to detect & analyze and respond to security incidents, Documented security incidents & vulnerability reports and remediation strategies for continuous process improvement, Supported the development and implementation of a phishing simulation campaign to enhance organizational security awareness',
            'start_date' => '2024-12-11',
            'end_date' => '2025-01-30',
            'location' => 'India (Remote)',
        ]);
        
        WorkExperience::updateOrCreate([
            'company' => 'The Green Generation Initiative'],
            [
            'role' => 'Program Manager',
            'description' => 'Designed & implemented and managed agricultural support programs, Focused on financial assistance and technical training for small and medium-scale farmers, Organized workshops and hands-on training sessions to enhance farmers\' knowledge of sustainable farming practices & financial literacy, Collaborated with local communities & government agencies and agricultural experts to align program goals with national agricultural development strategies, Prepared proposals and comprehensive reports for donors - showcasing program successes & challenges and impact',
            'start_date' => '2019-08-11',
            'end_date' => '2023-01-30',
            'location' => 'Ibadan, Nigeria',
        ]);

        // Blogs

        Blog::updateOrCreate(
            ['title' => 'The Future of Web Development: Trends, Technologies & What’s Next'],
            [
                'slug' => 'the-future-of-web-development-trends-technologies-&-whats-next',
                'image' => 'downloaded/7.jpg',
                'excerpt' => "Web development is no longer just about building websites; it's about crafting experiences, leveraging AI, and pushing the boundaries of interactivity and performance...",
                'content' => "
                Introduction
                Web development has come a long way from simple HTML pages to highly interactive, AI-powered applications. As technology evolves, so do the tools and frameworks that power the web. The future of web development is exciting, with innovations such as AI-driven design, Web3, serverless computing, and immersive user experiences shaping the industry. Whether you're a developer, business owner, or tech enthusiast, understanding where web development is headed can give you a competitive edge. So, what does the future hold? Let's explore the trends shaping the next generation of the web.
                
                1. AI & Machine Learning in Web Development
                AI is revolutionizing web development in ways never imagined. Platforms like GitHub Copilot and ChatGPT already assist developers in writing cleaner, faster code.
                How AI is Changing Web Development:
                - AI-powered website builders (Wix ADI, Framer AI) create full websites in minutes.
                - Automated testing detects bugs and security issues before deployment.
                - Chatbots and voice search enhance user engagement. 
                “AI won’t replace developers, but developers who use AI will replace those who don’t.”
                
                2. The Rise of Web3 & Decentralization
                The Web3 movement is shifting control from centralized platforms to decentralized applications (dApps) using blockchain.
                Key Web3 Technologies:
                - Smart Contracts – Automate transactions without intermediaries.
                - Decentralized Hosting – Platforms like IPFS and Arweave store content without relying on single servers.
                - Crypto Payments & NFTs – More websites will integrate blockchain-based transactions.
                “In Web3, you don’t just browse the internet—you own a piece of it.”
                
                3. The Death of Traditional Servers (Serverless & Edge Computing)
                Instead of managing backend infrastructure, developers are shifting to serverless computing and edge computing, making web apps faster and more scalable.
                Why This Matters:
                - Lower costs – No need for dedicated servers.
                - Auto-scaling – Handles traffic spikes effortlessly.
                - Global reach – Content is delivered from edge servers closer to users.
                
                Popular serverless providers:
                - AWS Lambda
                - Vercel
                - Cloudflare Workers
                'The future of hosting is not a single server—it’s everywhere at once.'

                4. Next-Level User Interfaces (3D, AR/VR, & Motion UI)
                As internet speeds increase, web development is becoming more immersive. Expect 3D elements, augmented reality (AR), and virtual reality (VR) to redefine user experiences.
                Upcoming UI Trends:
                - 3D websites powered by Three.js.
                - Augmented Reality eCommerce (Try-on products before buying).
                - Microinteractions & Motion UI – Subtle animations that make UX more engaging.
                “Websites will no longer be static pages—they will be immersive experiences.”

                5. The Progressive Web App (PWA) Revolution
                PWAs are blurring the line between websites and mobile apps. With companies like Twitter, Starbucks, and Uber adopting PWAs, the future of mobile-friendly web development is clear.
                Why PWAs Are the Future:
                - Work offline using service workers.
                - Load instantly with caching & lazy loading.
                - Feel like native apps without app store downloads.
                “The best web apps are the ones you don’t have to install.”

                6. Cybersecurity & The Need for a More Secure Web
                As web technologies evolve, so do cyber threats. Future developers must prioritize security-first development with:
                - Zero Trust Architecture – Never assume a request is safe.
                - Biometric authentication – More sites adopting fingerprint & facial recognition.
                - AI-driven security – AI-powered threat detection & mitigation.
                “A fast website is good, but a secure website is essential.”

                Conclusion: What Should Developers Do Now?
                The future of web development is a blend of AI, decentralization, serverless computing, immersive UI, and security-first principles. To stay ahead, developers must:
                - Embrace AI as a coding assistant.
                - Experiment with Web3 and smart contracts.
                - Learn serverless computing & edge deployment.
                - Enhance security knowledge to build safer applications.
                Web development isn’t dying—it’s evolving. Those who adapt will lead the next digital revolution.

                Share Your Thoughts!
                What do you think is the biggest change coming to web development? Drop your thoughts in the comments!
                Stay tuned for more insights on tech trends, security, and innovation.",
                
                'tags' => 'Web Development, AI, Web3, Serverless',
                'author_name' => 'Francis Uramah',
                'author_image' => 'for-canva/4.jpg',
                'blog_link' => '/blogs/the-future-of-web-development',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Laravel vs Django: Which One to Choose?'],
            [
                'slug' => 'laravel-vs-django-which-one-to-choose',
                'image' => 'downloaded/22.jpg',
                'excerpt' => 'Choosing between Laravel and Django is like picking between a Swiss Army knife and a powerhouse toolkit—both get the job done, but it all depends on how you want to build.',
                'content' => '
                Introduction
                
                When it comes to web development, choosing the right framework can be the difference between a smooth development experience and a frustrating one. Laravel and Django are two of the most powerful frameworks for building web applications, but they have different philosophies, strengths, and ideal use cases. So, if you’re a developer or business owner trying to decide between Laravel and Django, this guide will break down their differences, advantages, and best use cases, to help you make the right choice.
                
                Overview of Laravel and Django
                
                Laravel: The PHP Powerhouse
                
                Laravel is an open-source PHP framework known for its elegant syntax, developer-friendly features, and powerful ecosystem. It simplifies complex development tasks and provides built-in authentication, routing, ORM (Eloquent), and Blade templating. Laravel follows the MVC (Model-View-Controller) architecture and is best for projects requiring **rapid development, flexibility, and strong community support.  
                
                Django: The Python Giant
                
                Django is a high-level Python web framework that focuses on security, scalability, and rapid development. It follows the DRY (Don’t Repeat Yourself) principle, meaning it automates a lot of repetitive coding tasks. Django comes with a powerful ORM (Object-Relational Mapper), built-in authentication, and strong security features - making it a great choice for enterprise-level applications, data-heavy apps, and startups looking for speed and reliability.

                When to Choose Laravel

                Laravel is a **better choice if:  
                    - You already know PHP and want an easy-to-use framework.
                    - You’re building a CMS, eCommerce, or API-driven application.
                    - You want Blade templating and simple frontend integration with Vue.js or React.
                    - You need job queues, caching, and task scheduling.
                    - You prefer a **friendly and modern syntax with rapid development.

                Examples of Companies Using Laravel:
                    - Alison (Online learning platform)
                    - Koel (Music streaming service)
                    - Barchart (Finance and stock market analytics)

                "<h1>When to Choose Django</h1>"

                Django is the **better option if:
                    - You’re working with Python and need a highly scalable, secure framework.
                    - Your project requires data-heavy processing, AI, or machine learning integration.
                    - You want a built-in admin panel for managing content.
                    - You need a REST API quickly using Django’s REST framework.
                    - You’re working on a large, security-sensitive web app (e.g., fintech, healthcare, social media).
                    
                Examples of Companies Using Django:
                    - Instagram (Social Media)
                    - Spotify (Music Streaming)
                    - Mozilla (Web Browser Development)  

                Conclusion: Which One Should You Choose?
                At the end of the day, both Laravel and Django are powerful frameworks — the best choice depends on your tech stack, project requirements, and long-term goals.Choose Laravel if you’re a PHP developer looking for rapid development, flexibility, and a feature-rich environment.
                Choose Django if you prefer Python, need high scalability, and prioritize security and performance.
                Both frameworks get the job done — it’s all about choosing the right tool for the right job!

                Which framework do you prefer—Laravel or Django? Drop your thoughts in the comments!
                ',
                'tags' => 'Cybersecurity, Data Protection, Online Safety',
                'author_name' => 'Francis Uramah',
                'author_image' => 'for-canva/4.jpg',
                'blog_link' => '/blogs/cybersecurity-best-practices-2025',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Best Cybersecurity Practices for Developers'],
            [
                'slug' => 'best-cybersecurity-practices-for-developers',
                'image' => 'downloaded/20.jpg',
                'excerpt' => 'Security isn’t just a feature — it’s a mindset. The best developers don’t just write code; they write secure code.',
                'content' => '
                Best Cybersecurity Practices for Developers
                
                In today’s digital world, cyber threats are everywhere, and developers are the first line of defense against security breaches. Whether you’re building web applications, mobile apps, or APIs, understanding and implementing cybersecurity best practices is "<em>critical</em>" to protecting data, users, and infrastructure from attackers. This guide explores the best cybersecurity practices that every developer should follow to build secure, resilient, and hacker-proof applications.
                
                1. Follow the Principle of Least Privilege (PoLP)
                
                Why it matters: The fewer privileges a user or system has, the less damage an attacker can do if a breach occurs.
                
                Best Practices:
                    - Restrict admin-level access only to necessary users.
                    - Limit database privileges for applications—never use `root` access for queries.
                    - Use Role-Based Access Control (RBAC) to define clear permission levels.

                Example:

                Instead of this (BAD ❌):
                "<pre>
                $db = new PDO("mysql:host=localhost;dbname=myapp", "root", "password");
                </pre>"
                
                Do this (GOOD ✅):
                "<pre>
                $db = new PDO("mysql:host=localhost;dbname=myapp", "limited_user", "securepassword");
                </pre>"
                
                Pro Tip: Regularly audit permissions and remove unused accounts.
                
                2. Validate and Sanitize All User Inputs
                
                Risk: Unvalidated inputs can lead to SQL Injection, Cross-Site Scripting (XSS), and Remote Code Execution (RCE).
                
                Best Practices:
                    - Sanitize inputs by removing unwanted characters.
                    - Validate data types (e.g., `email`, `integer`, `URL`).  
                    - Use parameterized queries for database interactions.
                    
                Example: Preventing SQL Injection
                
                Instead of this (BAD ❌):
                "<pre>
                $query = "SELECT * FROM users WHERE email = \'" . $_GET["email"] . "\'";
                </pre>"
                
                Do this (GOOD ✅):
                "<pre>
                $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
                $stmt->execute([$_GET["email"]]);
                </pre>"

                Pro Tip: Use Laravel’s Eloquent ORM or Django’s ORM to avoid raw SQL queries.
                
                3. Secure Authentication and Password Storage
                
                Risk: Weak authentication can lead to credential stuffing, brute force attacks, and data breaches.
                
                Best Practices:
                    - NEVER store passwords in plain text — use hashing instead.
                    - Use strong password policies (min 12 characters, mix of letters, numbers, and symbols).
                    - Implement multi-factor authentication (MFA).
                
                Example: Hashing Passwords in Laravel
                
                "<pre>
                $hashedPassword = Hash::make("MySecurePassword123!");
                </pre>"

                Pro Tip: Use Argon2id or bcrypt for password hashing instead of MD5 or SHA1.
                
                4. Keep Dependencies and Frameworks Updated
                
                Risk: Outdated libraries and frameworks contain known vulnerabilities that hackers can exploit.
                
                Best Practices:
                    - Regularly check for updates and security patches.
                    - Use tools like `npm audit`, `composer audit`, or `pip audit` to scan dependencies
                    - Follow security advisories for the technologies you use.

                Example: Checking Laravel dependencies for security updates

                "<pre>
                composer update
                composer audit
                </pre>"

                Pro Tip: Subscribe to CVE databases (Common Vulnerabilities and Exposures) to track security updates.  

                5. Secure API Endpoints & Use HTTPS
                
                Risk: Exposed APIs without proper security measures can lead to data leaks and unauthorized access.

                Best Practices:
                    - Use API authentication (OAuth, JWT, or API keys).
                    - Restrict CORS settings** to prevent unauthorized access.
                    - Rate-limit API requests to prevent abuse.
                    - Encrypt data in transit with HTTPS (SSL/TLS).

                Example: Secure API Route in Laravel

                "<pre>
                Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
                return $request->user();
                });
                </pre>"

                Pro Tip: Never expose sensitive data like API keys in client-side code.

                6. Prevent Cross-Site Scripting (XSS) Attacks

                Risk: XSS allows attackers to inject malicious scripts into web pages.

                Best Practices:
                    - Escape user-generated content before displaying it.
                    - Use Content Security Policy (CSP) headers.
                    - Filter and sanitize inputs.

                Example: Escaping Output in Laravel Blade Templates
                
                Instead of this (BAD ❌):

                "<pre>
                {!! $userInput !!}
                </pre>"

                Do this (GOOD ✅):  

                "<pre>
                {{ $userInput }}
                </pre>"

                Pro Tip: Use security libraries like DOMPurify for JavaScript-based filtering.

                7. Use Secure Session Management
                
                Risk: Poor session management can lead to session hijacking or fixation attacks.

                Best Practices:
                    - Regenerate session IDs after login.
                    - Store session data securely** (use database sessions instead of files).
                    - Set HTTPOnly and Secure flags for cookies.

                Example: Secure Session Configuration in Laravel (`config/session.php`)

                "<pre>
                "session" => [
                "secure" => env("SESSION_SECURE_COOKIE", true),
                "http_only" => true,
                "same_site" => "strict",
                ],
                </pre>"

                Pro Tip: Set short session expiration times for sensitive operations (e.g., banking transactions).

                8. Regularly Perform Security Audits & Penetration Testing

                Risk: Undiscovered vulnerabilities can be exploited by attackers.  

                Best Practices:
                    - Conduct vulnerability assessments using tools like Burp Suite, OWASP ZAP, and Nessus.
                    - Simulate attacks using penetration testing techniques.
                    - Monitor logs for suspicious activities (use SIEM tools like Splunk).

                Pro Tip: Consider hiring ethical hackers to perform penetration testing.
                
                Conclusion: Security is a Continuous Process
                Cybersecurity isn’t something you implement once and forget — it requires constant vigilance, updates, and testing.  
                "A single security flaw can compromise an entire system. As developers, our job isn’t just to build—it’s to build securely."
                
                By following these best practices, developers can:
                    - Reduce the risk of SQL Injection, XSS, CSRF, and API attacks.
                    - Keep applications resilient against emerging threats.
                    - Build trust with users by ensuring their data and privacy are protected.

                What cybersecurity best practices do you follow? Let’s discuss in the comments!
                ',
                'tags' => 'Ethical Hacking, Cybersecurity, Penetration Testing',
                'author_name' => 'Francis Uramah',
                'author_image' => 'for-canva/4.jpg',
                'blog_link' => '/blogs/understanding-ethical-hacking',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Mastering the Art of UI/UX Design'],
            [
                'slug' => 'mastering-the-art-of-ui-ux-design',
                'image' => 'downloaded/19.jpg',
                'excerpt' => 'A great UI catches the eye, but a great UX wins the heart. True mastery lies in blending both seamlessly.',
                'content' => '
                Introduction
                
                In today\'s digital world, users expect more than just beautiful interfaces — they want experiences that are intuitive, engaging, and meaningful. UI (User Interface) and UX (User Experience) design are at the core of creating successful digital products. But what exactly does it take to master UI/UX design? Is it just about choosing the right colors and layouts? Or is there something deeper?
                
                In this guide, we’ll explore the fundamentals, principles, and advanced techniques that can help you master the art of UI/UX design.
                
                Understanding UI vs. UX: What’s the Difference?
                
                Before diving in, let\'s clarify UI vs. UX — two terms that are often confused but serve distinct roles in product design.  
                
                UI (User Interface) Design – The Look & Feel

                UI design focuses on the visual aspects of an application. It includes:
                    - Color schemes & typography
                    - Buttons, icons, and animations
                    - Layouts, spacing, and responsiveness

                Example: UI design is like choosing the perfect outfit — it should look great and feel comfortable.

                UX (User Experience) Design – The Functionality & Flow
                
                UX design is about how a user interacts with a product. It includes:
                    - User research & personas
                    - Wireframing & prototyping
                    - Navigation & user journey optimization

                Example: UX design is like choosing the best route for a road trip — it should be smooth, intuitive, and enjoyable.

                1. Design with the User in Mind (User-Centered Design)
                
                Problem: Many designers focus too much on aesthetics and forget about usability.

                Best Practices:
                    - Research user behavior and preferences.
                    - Design with **accessibility** in mind.
                    - Test with **real users** before launching.

                Pro Tip: Use personas to define your ideal users and tailor the design accordingly.

                2. Master Visual Hierarchy & Typography

                Problem: Poor text readability and confusing layouts can frustrate users.
                
                Best Practices:
                    - Use size, color, and contrast to create hierarchy.
                    - Choose fonts that enhance readability.
                    - Ensure a good contrast ratio for accessibility.

                Example:

                Instead of this (BAD ❌):  

                "<pre>
                h1 {
                  font-size: 16px;
                  color: gray;
                }
                </pre>"

                Do this (GOOD ✅):  

                "<pre>
                h1 {
                  font-size: 32px;
                  font-weight: bold;
                  color: #222;
                }
                </pre>"

                Pro Tip: Use tools like Google Fonts and Contrast Checker to ensure readability.

                3. Build Intuitive Navigation
                
                Problem: If users can’t find what they need in 3 clicks or less, they might leave.

                Best Practices:
                    - Keep menus simple and well-structured.
                    - Use clear call-to-action (CTA) buttons.
                    - Follow the F-pattern or Z-pattern layout for content placement.

                Example:
                Instead of a complicated navigation menu with 10+ options, group similar items into 3–5 clear categories.

                Pro Tip: Use heatmaps (like Hotjar) to see where users click most on your site.

                4. Use the Right Colors & Contrast
                
                Problem: Poor color choices can hurt readability and user engagement.

                Best Practices:
                    - Stick to a consistent color palette.
                    - Use colors to evoke emotions (e.g., blue = trust, red = urgency).
                    - Ensure sufficient contrast for accessibility.

                Example: Color Psychology in UI
                    - Blue → Trust & professionalism (Facebook, LinkedIn)
                    - Red → Urgency & excitement (YouTube, Netflix)
                    - Green → Growth & success (WhatsApp, Spotify)

                Pro Tip: Use Adobe Color Wheel or Coolors.co to create harmonious color palettes.

                5. Optimize for Mobile-First Design

                Problem: 60%+ of web traffic comes from mobile devices, yet many websites still aren’t optimized for mobile.

                Best Practices:
                    - Use responsive design (flexbox & grid layouts).
                    - Make buttons tap-friendly (at least 48px).
                    - Optimize images for fast loading.

                Example: Mobile-Optimized Layou
                ❌ BAD: Desktop-first design, then scaled down to mobile.
                ✅ GOOD: Mobile-first design, then expanded for larger screens.

                Pro Tip: Test your design with Google Mobile-Friendly Test.

                6. Speed & Performance Matter (Nobody Likes Slow Websites!)

                Problem: 53% of users leave if a site takes longer than 3 seconds to load.  

                Best Practices:
                    - Minimize HTTP requests.
                    - Use lazy loading for images.
                    - Optimize CSS & JavaScript files.

                Example: Instead of loading high-resolution images immediately, use lazy loadin to load them only when needed.

                Pro Tip: Use Google PageSpeed Insights to check performance issues.

                7. Consistency is Key
                
                Problem: Inconsistent design elements create confusion.

                Best Practices:
                    - Use a design system or style guide.
                    - Maintain consistent spacing, fonts, and button styles.
                    - Stick to a uniform grid layout.
                    
                Pro Tip: Use design frameworks like Material UI or Bootstrap to maintain consistency.

                8. Gather Feedback & Iterate

                Problem: Design is never perfect on the first try.

                Best Practices:
                    - A/B test different layouts to see what works best.
                    - Use surveys or feedback tools (e.g., Google Forms, Typeform).
                    - Iterate based on real user behavior.

                Pro Tip: Tools like Figma & Adobe XD allow easy prototyping & feedback collection.

                Conclusion: UI/UX is About the User
                Mastering UI/UX design isn’t just about making things look good — it’s about making them work beautifully.  

                By following these principles, you can:
                    - Create aesthetic & functional designs.
                    - Improve user engagement & retention.
                    - Build digital experiences that feel effortless.

                "The best UI/UX design isn’t just seen—it’s felt. The more effortless the experience, the better the design."

                What’s the biggest UI/UX challenge you’ve faced? Let’s discuss in the comments!
                ',
                'tags' => 'Intuitive Design, User-centered Design, Product Design',
                'author_name' => 'Francis Uramah',
                'author_image' => 'for-canva/4.jpg',
                'blog_link' => '/blogs/top-10-tools-for-penetration-testing',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'Getting Started with Ethical Hacking'],
            [
                'slug' => 'getting-started-with-ethical-hacking',
                'image' => 'downloaded/29.jpg',
                'excerpt' => 'Hacking isn’t about breaking things — it’s about understanding how things work so you can make them stronger.',
                'content' => '
                Introduction  

                Cyber threats are more sophisticated than ever, and organizations need skilled professionals who can think like hackers—but act like defenders. Ethical hacking is the art of legally testing systems to find vulnerabilities before the bad guys do. But how do you get started in ethical hacking? What skills, tools, and certifications do you need? In this guide, we’ll explore everything you need to know to start your journey as an ethical hacker.

                1. What is Ethical Hacking?
                
                Ethical hacking is the practice of penetration testing systems, networks, and applications with permission to find security flaws. The goal is to identify vulnerabilities before malicious hackers do.

                Ethical hackers (a.k.a. white-hat hackers) help:
                    - Strengthen security systems.
                    - Prevent cyberattacks.
                    - Protect sensitive data from breaches.

                Key Difference:
                    White Hat -> Ethical | Tests security legally
                    Black Hat -> Malicious | Hacks for personal gain
                    Gray Hat -> Mixed | Finds flaws but may act unethically

                Pro Tip: Ethical hacking is 100% legal as long as you have permission from the system owner.

                2. Learn the Fundamentals of Cybersecurity

                Before you start hacking, you need a solid understanding of cybersecurity concepts.

                Key areas to study:
                    - Networking & Security Basics → Learn how data moves across networks.
                    - Operating Systems (Linux & Windows) → Most hacking happens on **Kali Linux.
                    - Common Cyber Threats → Understand malware, phishing, DDoS attacks, and exploits.

                Recommended Resources:

                Books: "The Web Application Hacker’s Handbook" & "Hacking: The Art of Exploitation"
                Online Courses: Try Cybrary, TryHackMe, Hack The Box, and Udemy

                3. Master the Essential Tools of Ethical Hacking
                
                Ethical hackers use specialized tools to find and exploit vulnerabilities.
                
                Must-Know Ethical Hacking Tools:
                    - Kali Linux -> OS for penetration testing
                    - Wireshark -> Network packet analyzer
                    - Nmap -> Network scanner & port mapper
                    - Burp Suite -> Web application security testing
                    - Metasploit -> Exploit development framework
                    - John the Ripper -> Password cracking tool

                Pro Tip: Start with Kali Linux, as it comes pre-installed with hacking tools.

                4. Learn Programming for Ethical Hacking

                While not mandatory, coding skills help you understand vulnerabilities better.
                
                Useful Programming Languages for Hackers:
                    - Python 🐍 → Used for scripting & automation.
                    - Bash 🖥 → Writing Linux scripts for pentesting.
                    - SQL 🗂 → Understanding database injections.
                    - JavaScript ☕ → Exploiting web-based vulnerabilities (XSS, CSRF).

                Pro Tip: Start with Python — it’s beginner-friendly and powerful for automation.

                5. Practice on Legal Hacking Platforms

                You can’t hack real systems, but you can practice in controlled environments.

                Best Ethical Hacking Labs & Challenges:
                    - TryHackMe (Beginner-friendly cybersecurity labs)
                    - Hack The Box (Advanced pentesting challenges)
                    - OWASP WebGoat (Deliberately vulnerable web app)
                    - Metasploitable (Vulnerable virtual machine for testing)

                Pro Tip: Start with TryHackMe, then move to Hack The Box for more advanced challenges.

                6. Get Certified in Ethical Hacking

                Certifications help validate your skills and improve job opportunities.

                Top Ethical Hacking Certifications
                    - CompTIA Security+ | Cybersecurity fundamentals | 🟢 Beginner
                    - CEH (Certified Ethical Hacker) | General hacking techniques | 🟢 Beginner
                    - GIAC Penetration Tester (GPEN) | Network & web pentesting | 🟡 Intermediate
                    - OSCP (Offensive Security Certified Professional) | Hands-on penetration testing | 🔴 Advanced

                Pro Tip: Start with Security+ or CEH, then aim for OSCP if you want to be a professional pentester.

                7. Build a Portfolio & Apply for Jobs

                To land a job in ethical hacking, you need real-world experience.

                How to Build a Strong Ethical Hacking Portfolio:
                    - Document your pentesting projects (write reports)
                    - Contribute to open-source security projects
                    - Join bug bounty programs (e.g., HackerOne, Bugcrowd)
                    - Share your findings on LinkedIn, GitHub, or a personal blog.

                Entry-Level Jobs in Ethical Hacking:
                    - Penetration Tester
                    - Cybersecurity Analyst
                    - SOC Analyst (Security Operations Center)
                    - Vulnerability Researcher

                Pro Tip: Companies love hands-on experience — so practice in labs and write detailed reports!

                Conclusion: Ethical Hacking is a Journey

                Becoming an ethical hacker isn’t about hacking — it’s about securing systems, protecting people, and thinking like an attacker to build better defenses.  

                By following this roadmap, you will:
                    - Learn **hacking fundamentals** and security concepts.
                    - Master **essential hacking tools**.
                    - Develop **programming skills** for automation.
                    - Gain **certifications** to boost your career.
                    - Build a **portfolio** to land a cybersecurity job.

                "Hacking ethically is more than a skill — it’s a responsibility. With great power comes great responsibility." 

                What part of ethical hacking excites you the most? Let’s discuss in the comments!
                ',
                'tags' => 'Penetration Testing, Ethical Hacking, Vulnerability Assessment',
                'author_name' => 'Francis Uramah',
                'author_image' => 'for-canva/4.jpg',
                'blog_link' => '/blogs/ai-in-cybersecurity',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        Blog::updateOrCreate(
            ['title' => 'How to Build Scalable Web Applications'],
            [
                'slug' => 'how-to-build-scalable-web-applications',
                'image' => 'downloaded/28.jpg',
                'excerpt' => 'A web application that works for 1,000 users should also work for 1 million — if built the right way.',
                'content' => '
                Introduction
                
                A scalable web application is one that maintains high performance and reliability as the number of users, data, and traffic increase over time. A poorly designed application might work fine with a few users but **crash under heavy load. Scalability ensures that your app can handle more traffic, serve more users, and store more data without compromising performance.

                Example:
                ❌ A slow-loading eCommerce site during Black Friday = Lost sales
                ✅ A well-optimized SaaS platform that scales seamlessly = Happy customers

                Let’s explore the best practices for building scalable web applications

                1. Choose the Right Architecture (Monolithic vs. Microservices)

                The architecture of your application determines how well it scales.

                Monolithic Architecture (Simple, but Hard to Scale)
                    - Best for: Small applications & startups
                    - Problems: Hard to scale, long deployment times

                Microservices Architecture (Highly Scalable)
                    - Best for: Large applications that need independent scaling
                    - Each service runs separately (e.g., user service, payment service, etc.)
                    - Problems: Requires complex setup

                Pro Tip: Start monolithic, then transition to microservices as your application grows.

                2. Use Asynchronous Processing & Queues

                Problem: If every user request requires real-time processing, the server gets overloaded.

                Solution: Use asynchronous processing & job queues.

                Example: Laravel Queues
                Instead of processing tasks immediately, send them to a queue:

                "<pre>
                php
                dispatch(new ProcessEmailJob($userEmail));
                </pre>"

                The queue system handles tasks in the background, preventing slow response times.

                Pro Tip: Use Redis, RabbitMQ, or AWS SQS for queue management.

                3. Scale Your Database Efficiently

                A database bottleneck can kill scalability. Follow these best practices:
                    - Use Database Indexing → Speeds up queries
                    - Optimize SQL Queries → Avoid `SELECT *`, fetch only needed fields
                    - Sharding → Split large databases across multiple servers
                    - Use Read Replicas → Separate read and write operations
                
                📌 Pro Tip: Use NoSQL (MongoDB, DynamoDB) for high-speed reads/writes in scalable apps.

                4. Implement Load Balancing & Caching

                Load Balancing
                A load balancer distributes traffic across multiple servers, preventing overloading.  
                Example: Nginx, AWS Elastic Load Balancer, HAProxy

                Caching
                Instead of querying the database every time, cache frequently used data.
                Example:
                    - Redis/Memcached → Store frequently accessed data
                    - CDN (Cloudflare, AWS CloudFront) → Cache static assets

                📌 Pro Tip: Cache API responses to reduce database hits.

                5. Optimize API Performance

                A slow API = a slow application.

                Best Practices:
                    - Use GraphQL for fetching only required data
                    - Implement pagination instead of returning large datasets
                    - Use Gzip compression to reduce API response size

                📌 Pro Tip: Use Rate Limiting to prevent API abuse.

                6. Secure Your Application at Scale

                Scaling isn’t just about performance—it’s about security too.
                    - Use HTTPS (SSL/TLS) → Encrypt data in transit
                    - Prevent SQL Injection & XSS → Validate all inputs
                    - Use Web Application Firewalls (WAFs) → Block malicious traffic

                📌 Pro Tip: Monitor security logs using SIEM tools like Splunk or ELK Stack.

                7. Use Cloud Infrastructure & Auto-Scaling

                Instead of buying physical servers, use cloud services that scale automatically.
                Best Cloud Providers for Scaling:
                    - AWS Auto Scaling (EC2, Lambda)
                    - Google Cloud Kubernetes (GKE)
                    - Azure App Services

                📌 Pro Tip: Containerize apps with Docker & Kubernetes for smooth scaling.

                Conclusion: Build for Growth

                Scalability isn’t an afterthought — it should be part of your development process from Day 1.
                    - Choose the right architecture (Microservices for large apps)
                    - Use queues & async processing to prevent server overload
                    - Optimize databases & use caching for better performance
                    - Leverage cloud infrastructure for auto-scaling

                "A scalable web application isn’t just fast — it’s built to handle the future."

                What’s the biggest scaling challenge you’ve faced? Let’s discuss in the comments!
                ',
                'tags' => 'Laravel, Web Design, Portfolio',
                'author_name' => 'Francis Uramah',
                'author_image' => 'for-canva/4.jpg',
                'blog_link' => '/blogs/build-portfolio-website-laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );


        // Projects
        Project::updateOrCreate(
            ['title' => 'Network Security Audit'],
            [
                'description' => 'Conducted security audits to identify vulnerabilities and improve network defense.',
                'github_link' => '#',
                // https://github.com/yourusername/network-security-audit
                'live_demo' => null,
                'images' => json_encode([
                    '25.png',
                    '26.png',
                    '27.png'
                ]),
                'tech_stack' => 'Wireshark, Nmap, Nessus',
                'completion_date' => '2023-10-15',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'Phishing Awareness Campaign'],
            [
                'description' => 'Designed and executed a phishing simulation to improve cybersecurity awareness.',
                'github_link' => '#',
                // https://github.com/yourusername/phishing-awareness
                'live_demo' => '#',
                // https://yourliveproject.com
                'images' => json_encode([
                    '26.png',
                    '27.png',
                    '25.png'
                ]),
                'tech_stack' => 'Python, Social Engineering Toolkit (SET)',
                'completion_date' => '2024-01-10',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'SIEM Dashboard for Threat Detection'],
            [
                'description' => 'Developed a SIEM dashboard using Splunk to monitor and analyze security logs.',
                'github_link' => '#',
                // https://github.com/yourusername/siem-dashboard
                'live_demo' => null,
                'images' => json_encode([
                    '27.png',
                    '25.png',
                    '26.png'
                ]),
                'tech_stack' => 'Splunk, ELK Stack',
                'completion_date' => '2023-12-05',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'Web Application Penetration Testing'],
            [
                'description' => 'Identified vulnerabilities in a web application using OWASP security principles.',
                'github_link' => '#',
                // https://github.com/yourusername/web-security
                'live_demo' => null,
                'images' => json_encode([
                    '25.png',
                    '26.png',
                    '27.png'
                ]),
                'tech_stack' => 'Burp Suite, OWASP ZAP, SQL Injection',
                'completion_date' => '2024-02-01',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'Ransomware Attack Simulation & Mitigation'],
            [
                'description' => 'Simulated a ransomware attack in a controlled lab environment and implemented mitigation techniques to prevent data encryption attacks.',
                'github_link' => '#',
                // https://github.com/yourusername/ransomware-simulation
                'live_demo' => null,
                'images' => json_encode([
                    '26.png',
                    '27.png',
                    '25.png'
                ]),
                'tech_stack' => 'Kali Linux, Windows Defender, Backup & Recovery Strategies',
                'completion_date' => '2024-03-05',
            ]
        );

        Project::updateOrCreate(
            ['title' => 'IoT Security Analysis'],
            [
                'description' => 'Conducted security assessments on IoT devices, tested for default credentials and insecure APIs, and recommended best practices for securing connected devices.',
                'github_link' => '#',
                // https://github.com/yourusername/iot-security
                'live_demo' => null,
                'images' => json_encode([
                    '27.png',
                    '25.png',
                    '26.png'
                ]),
                'tech_stack' => 'Shodan, Nmap, Firmware Analysis',
                'completion_date' => '2024-04-12',
            ]
        );
    }
}
