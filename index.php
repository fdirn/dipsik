<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberDev | Futuristic Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="gradient-bg text-gray-200 font-sans overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-[rgba(15,23,42,0.8)] backdrop-blur-md border-b border-[rgba(99,102,241,0.2)]">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center">
                        <i class="fas fa-code text-white"></i>
                    </div>
                    <a href="#" class="text-xl font-bold gradient-text">CyberDev</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="px-3 py-2 rounded-lg hover:text-indigo-400 transition">Home</a>
                    <a href="#projects" class="px-3 py-2 rounded-lg hover:text-indigo-400 transition">Projects</a>
                    <a href="#skills" class="px-3 py-2 rounded-lg hover:text-indigo-400 transition">Skills</a>
                    <a href="#contact" class="px-3 py-2 rounded-lg hover:text-indigo-400 transition">Contact</a>
                    <a href="admin.php" class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white transition">
                        Admin <i class="fas fa-lock ml-1"></i>
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-200 text-2xl">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-2">
                <a href="#home" class="block px-3 py-2 rounded-lg hover:bg-indigo-900/30 mb-1">Home</a>
                <a href="#projects" class="block px-3 py-2 rounded-lg hover:bg-indigo-900/30 mb-1">Projects</a>
                <a href="#skills" class="block px-3 py-2 rounded-lg hover:bg-indigo-900/30 mb-1">Skills</a>
                <a href="#contact" class="block px-3 py-2 rounded-lg hover:bg-indigo-900/30 mb-1">Contact</a>
                <a href="admin.php" class="block px-3 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white mt-2">
                    Admin <i class="fas fa-lock ml-1"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center pt-20 pb-16 px-4">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <div class="relative">
                        <div class="absolute -top-6 -left-6 w-32 h-32 rounded-full bg-indigo-500/20 blur-3xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-full bg-pink-500/20 blur-3xl"></div>
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">
                            <span class="gradient-text">Hello, I'm</span>
                            <span class="block glitch-text">Alex Carter</span>
                        </h1>
                        <div class="terminal p-4 rounded-lg mb-6">
                            <div class="terminal-header px-3 py-2 rounded-t-lg flex items-center">
                                <div class="flex space-x-2 mr-3">
                                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                                <span class="text-sm">cyberdev ~/portfolio</span>
                            </div>
                            <div class="terminal-body p-4 rounded-b-lg">
                                <p class="mb-2"><span class="text-green-400">$</span> whoami</p>
                                <p class="mb-2 text-indigo-400">Full Stack Developer | Cyber Security Enthusiast</p>
                                <p class="mb-2"><span class="text-green-400">$</span> cat about.txt</p>
                                <p class="mb-2">I build secure, scalable web applications with cutting-edge technologies.</p>
                                <p class="mb-2"><span class="text-green-400">$</span> <span class="cursor">_</span></p>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#projects" class="cyber-button px-6 py-3 rounded-lg text-white font-medium">
                                View My Work <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <a href="#contact" class="px-6 py-3 rounded-lg border border-indigo-500 text-indigo-400 hover:bg-indigo-500/10 font-medium transition">
                                Contact Me
                            </a>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative float-animation">
                        <div class="absolute -inset-4 rounded-full bg-indigo-500/20 blur-xl"></div>
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Alex Carter" class="w-64 h-64 md:w-80 md:h-80 rounded-full border-4 border-indigo-500/50 relative z-10">
                        <div class="absolute -bottom-6 -right-6 bg-indigo-600 text-white p-3 rounded-full shadow-lg">
                            <i class="fas fa-bolt text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="gradient-text">My Projects</span>
                </h2>
                <p class="max-w-2xl mx-auto text-gray-400">Here are some of my recent projects. Each one was built with cutting-edge technologies.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // Connect to database and fetch projects
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "portfolio";
                
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $stmt = $conn->prepare("SELECT * FROM projects ORDER BY created_at DESC LIMIT 6");
                    $stmt->execute();
                    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    if (count($projects) === 0) {
                        echo '<div class="col-span-3 text-center py-10">
                                <i class="fas fa-folder-open text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-400">No projects found. Check back later!</p>
                              </div>';
                    } else {
                        foreach ($projects as $project) {
                            echo '<div class="cyber-card rounded-xl overflow-hidden scanlines">
                                    <div class="h-48 bg-cover bg-center" style="background-image: url('.$project['image'].')"></div>
                                    <div class="p-6">
                                        <div class="flex justify-between items-start mb-3">
                                            <span class="px-3 py-1 text-xs font-semibold text-indigo-400 bg-indigo-900/30 rounded-full">'.$project['category'].'</span>
                                            <div class="flex space-x-2">
                                                <a href="'.$project['github'].'" target="_blank" class="text-gray-400 hover:text-white transition" title="GitHub">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                                <a href="'.$project['link'].'" target="_blank" class="text-gray-400 hover:text-white transition" title="Live Demo">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="text-xl font-bold mb-2 text-white">'.$project['title'].'</h3>
                                        <p class="text-gray-400 mb-4">'.$project['description'].'</p>
                                        <div class="flex flex-wrap gap-2 mt-4">';
                            
                            // Display technologies used
                            $techs = explode(',', $project['technologies']);
                            foreach ($techs as $tech) {
                                echo '<span class="px-2 py-1 text-xs bg-gray-800/50 text-gray-300 rounded">'.trim($tech).'</span>';
                            }
                            
                            echo '</div>
                                    </div>
                                </div>';
                        }
                    }
                } catch(PDOException $e) {
                    // Fallback if database connection fails
                    echo '<div class="col-span-3 text-center py-10">
                            <i class="fas fa-exclamation-triangle text-4xl text-red-400 mb-4"></i>
                            <p class="text-gray-400">Unable to load projects. Please try again later.</p>
                          </div>';
                }
                $conn = null;
                ?>
            </div>
            
            <div class="text-center mt-12">
                <a href="projects.php" class="inline-flex items-center px-6 py-3 border border-indigo-500 text-indigo-400 hover:bg-indigo-500/10 rounded-lg transition">
                    View All Projects <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 px-4 bg-[rgba(15,23,42,0.7)]">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="gradient-text">My Skills</span>
                </h2>
                <p class="max-w-2xl mx-auto text-gray-400">Technologies I work with on a daily basis</p>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 max-w-4xl mx-auto">
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-js text-4xl text-yellow-400 mb-3"></i>
                    <span class="text-sm font-medium">JavaScript</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-react text-4xl text-blue-400 mb-3"></i>
                    <span class="text-sm font-medium">React</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-node-js text-4xl text-green-500 mb-3"></i>
                    <span class="text-sm font-medium">Node.js</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-python text-4xl text-blue-500 mb-3"></i>
                    <span class="text-sm font-medium">Python</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fas fa-database text-4xl text-blue-300 mb-3"></i>
                    <span class="text-sm font-medium">MongoDB</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fas fa-database text-4xl text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium">PostgreSQL</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-php text-4xl text-purple-500 mb-3"></i>
                    <span class="text-sm font-medium">PHP</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-laravel text-4xl text-red-500 mb-3"></i>
                    <span class="text-sm font-medium">Laravel</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-docker text-4xl text-blue-400 mb-3"></i>
                    <span class="text-sm font-medium">Docker</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-aws text-4xl text-orange-400 mb-3"></i>
                    <span class="text-sm font-medium">AWS</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fab fa-git-alt text-4xl text-orange-500 mb-3"></i>
                    <span class="text-sm font-medium">Git</span>
                </div>
                <div class="tech-icon flex flex-col items-center p-6 rounded-lg bg-[rgba(15,23,42,0.5)] border border-[rgba(99,102,241,0.2)] hover:border-indigo-500">
                    <i class="fas fa-shield-alt text-4xl text-green-400 mb-3"></i>
                    <span class="text-sm font-medium">Security</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="gradient-text">Get In Touch</span>
                </h2>
                <p class="max-w-2xl mx-auto text-gray-400">Have a project in mind or want to collaborate? Send me a message!</p>
            </div>
            
            <div class="max-w-4xl mx-auto cyber-card rounded-xl overflow-hidden scanlines">
                <div class="md:flex">
                    <div class="md:w-1/3 bg-[rgba(99,102,241,0.1)] p-8 flex flex-col justify-center">
                        <h3 class="text-xl font-bold mb-6 text-white">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-indigo-400"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Email</p>
                                    <p class="text-white">alex@cyberdev.io</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-indigo-400"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Phone</p>
                                    <p class="text-white">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-indigo-400"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400">Location</p>
                                    <p class="text-white">San Francisco, CA</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <h4 class="text-lg font-bold mb-4 text-white">Follow Me</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-500 transition">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-500 transition">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-500 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 hover:text-white hover:bg-indigo-500 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8">
                        <form id="contact-form" action="send_email.php" method="POST" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-400 mb-1">Name</label>
                                    <input type="text" id="name" name="name" class="w-full cyber-input px-4 py-3 rounded-lg" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Email</label>
                                    <input type="email" id="email" name="email" class="w-full cyber-input px-4 py-3 rounded-lg" required>
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-400 mb-1">Subject</label>
                                <input type="text" id="subject" name="subject" class="w-full cyber-input px-4 py-3 rounded-lg" required>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-400 mb-1">Message</label>
                                <textarea id="message" name="message" rows="4" class="w-full cyber-input px-4 py-3 rounded-lg" required></textarea>
                            </div>
                            <button type="submit" class="w-full cyber-button px-6 py-3 rounded-lg text-white font-medium mt-4">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                        <div id="contact-success" class="hidden mt-4 p-3 bg-green-900/30 text-green-400 rounded-lg text-sm border border-green-400/30">
                            <i class="fas fa-check-circle mr-2"></i> Thank you for your message! I'll get back to you soon.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 px-4 border-t border-[rgba(99,102,241,0.1)]">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center mr-2">
                            <i class="fas fa-code text-white text-sm"></i>
                        </div>
                        <span class="text-lg font-bold gradient-text">CyberDev</span>
                    </div>
                </div>
                <div class="text-sm text-gray-400">
                    &copy; <span id="current-year"></span> Alex Carter. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating elements -->
    <div class="fixed -bottom-20 -left-20 w-64 h-64 rounded-full bg-indigo-500/10 blur-3xl -z-10"></div>
    <div class="fixed -top-20 -right-20 w-64 h-64 rounded-full bg-pink-500/10 blur-3xl -z-10"></div>

    <script>
        // Current year
        document.getElementById('current-year').textContent = new Date().getFullYear();
        
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Contact form submission
        const contactForm = document.getElementById('contact-form');
        const contactSuccess = document.getElementById('contact-success');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real app, you would send this data to your backend
            const formData = new FormData(contactForm);
            
            // Simulate form submission
            setTimeout(() => {
                contactForm.reset();
                contactSuccess.classList.remove('hidden');
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    contactSuccess.classList.add('hidden');
                }, 5000);
            }, 1000);
        });
        
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
                    
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });
        
        // Add hover effect to project cards
        document.querySelectorAll('.cyber-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('span').classList.add('text-indigo-400');
            });
            
            card.addEventListener('mouseleave', function() {
                this.querySelector('span').classList.remove('text-indigo-400');
            });
        });
        
        // Terminal typing effect
        const terminalCommands = [
            "npm start",
            "git commit -m 'Update portfolio'",
            "docker-compose up",
            "python manage.py runserver",
            "node server.js",
            "php artisan serve"
        ];
        
        const terminal = document.querySelector('.terminal-body');
        const cursor = document.querySelector('.cursor');
        
        function typeCommand(command, callback) {
            let i = 0;
            const typing = setInterval(() => {
                if (i < command.length) {
                    terminal.querySelector('p:last-child').innerHTML = '<span class="text-green-400">$</span> ' + command.substring(0, i+1);
                    i++;
                } else {
                    clearInterval(typing);
                    setTimeout(() => {
                        callback();
                    }, 1000);
                }
            }, 100);
        }
        
        function simulateTerminal() {
            let currentCommand = 0;
            
            function nextCommand() {
                if (currentCommand < terminalCommands.length) {
                    typeCommand(terminalCommands[currentCommand], () => {
                        currentCommand++;
                        if (currentCommand < terminalCommands.length) {
                            setTimeout(nextCommand, 500);
                        } else {
                            // Loop back to first command
                            currentCommand = 0;
                            setTimeout(nextCommand, 1000);
                        }
                    });
                }
            }
            
            // Start the simulation
            setTimeout(nextCommand, 2000);
        }
        
        // Start terminal simulation
        simulateTerminal();
    </script>
</body>
</html>