    <div class="min-h-screen max-w-7xl mx-auto flex flex-col items-center justify-center pb-20 px-4 relative z-10">
        <div class="text-center mb-16 relative">
            <h1 class="text-4xl md:text-5xl text-center font-bold bg-gradient-to-r text-white bg-clip-text mb-4">Our Premium Services</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                Elevate your learning experience with our cutting-edge LMS solutions designed for the digital age
            </p>
            
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-purple-500 rounded-full filter blur-[100px] opacity-20"></div>
            <div class="absolute bottom-0 right-0 w-60 h-60 bg-blue-500 rounded-full filter blur-[100px] opacity-20"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
            <!-- Service Card 1 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Interactive Courses</h3>
                        <p class="text-gray-300 text-center">
                            Engage with immersive content designed to maximize knowledge retention
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Expert Instructors</h3>
                        <p class="text-gray-300 text-center">
                            Learn from industry professionals with real-world experience
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Certification</h3>
                        <p class="text-gray-300 text-center">
                            Earn recognized credentials to advance your career
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 4 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Community</h3>
                        <p class="text-gray-300 text-center">
                            Connect with peers and experts in our thriving learning community
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 5 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Mobile Learning</h3>
                        <p class="text-gray-300 text-center">
                            Access courses anytime, anywhere with our mobile platform
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 6 -->
            <div class="service-card h-96">
                <div class="card-inner">
                    <div class="card-front neon-border">
                        <div class="glow"></div>
                        <div class="card-icon floating">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-white">Analytics Dashboard</h3>
                        <p class="text-gray-300 text-center">
                            Track your progress with detailed analytics and insights
                        </p>
                        <div class="mt-6 pulse w-6 h-6 rounded-full bg-rose-root"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-20 text-center">
            <button class="px-8 py-4 bg-rose-root text-white font-medium rounded-lg transition duration-300 shadow-lg">
                Explore More
            </button>
        </div>
    </div>

<script>
            document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.service-card');
            
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const cardRect = card.getBoundingClientRect();
                    const cardCenterX = cardRect.left + cardRect.width / 2;
                    const cardCenterY = cardRect.top + cardRect.height / 2;
                    
                    const mouseX = e.clientX - cardCenterX;
                    const mouseY = e.clientY - cardCenterY;
                    
                    const rotateY = (mouseX / cardRect.width) * 20;
                    const rotateX = -(mouseY / cardRect.height) * 20;
                    
                    card.querySelector('.card-inner').style.transform = 
                        `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.querySelector('.card-inner').style.transform = 'rotateY(0) rotateX(0)';
                });
            });
        });
</script>