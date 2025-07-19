    <div class="max-w-7xl mx-auto w-full py-20">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r text-white bg-clip-text mb-4">
                Simple, Transparent Pricing
            </h1>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg">
                Choose the perfect plan for your needs. All plans include our core features with no hidden fees.
            </p>
            
            <!-- Toggle Switch -->
            <div class="mt-10 flex items-center justify-center">
                <span class="mr-4 font-medium text-gray-300">Monthly</span>
                <div class="relative inline-block w-16 h-8">
                    <input type="checkbox" class="hidden" id="billing-toggle">
                    <label for="billing-toggle" class="block w-full h-full rounded-full toggle-bg cursor-pointer">
                        <div class="absolute left-1 top-1 bg-rose-root w-6 h-6 rounded-full transition-transform duration-300 transform translate-x-0"></div>
                    </label>
                </div>
                <span class="ml-4 font-medium text-gray-300">
                    Annual <span class="text-rose-root">(Save 20%)</span>
                </span>
            </div>
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="pricing-card bg-dark-800 rounded-xl p-8 relative">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Basic</h3>
                    <p class="text-gray-400">Ideal for individuals and small projects</p>
                </div>
                
                <div class="mb-8">
                    <div class="text-4xl font-bold text-white mb-1">$19<span class="text-gray-400 text-xl">/month</span></div>
                    <p class="text-gray-400 text-sm">Billed annually at $228</p>
                </div>
                
                <ul class="space-y-4 mb-10 text-white">
                    <li class="feature-item">Up to 5 projects</li>
                    <li class="feature-item">3 team members</li>
                    <li class="feature-item">Basic analytics</li>
                    <li class="feature-item">Email support</li>
                    <li class="feature-item opacity-50">Priority support</li>
                    <li class="feature-item opacity-50">Advanced integrations</li>
                </ul>
                
                <button class="w-full py-3 bg-dark-700 text-gray-200 rounded-lg font-medium hover:bg-dark-600 transition">
                    Get Started
                </button>
            </div>
            
            <!-- Pro Plan - Popular -->
            <div class="pricing-card bg-dark-800 rounded-xl p-8 relative border-2 border-indigo-500/30">
                <div class="popular-badge absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-12 flex items-end justify-center pb-2">
                    <span class="text-xs font-bold text-white">MOST POPULAR</span>
                </div>
                
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Professional</h3>
                    <p class="text-gray-400">Perfect for growing teams and businesses</p>
                </div>
                
                <div class="mb-8">
                    <div class="text-4xl font-bold text-white mb-1">$49<span class="text-gray-400 text-xl">/month</span></div>
                    <p class="text-gray-400 text-sm">Billed annually at $588</p>
                </div>
                
                <ul class="space-y-4 mb-10 text-white">
                    <li class="feature-item">Unlimited projects</li>
                    <li class="feature-item">10 team members</li>
                    <li class="feature-item">Advanced analytics</li>
                    <li class="feature-item">Priority support</li>
                    <li class="feature-item">API access</li>
                    <li class="feature-item">Custom integrations</li>
                </ul>
                
                <button class="w-full py-3 glow-button text-white rounded-lg font-medium">
                    Start Free Trial
                </button>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="pricing-card bg-dark-800 rounded-xl p-8 relative">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-200 mb-2">Enterprise</h3>
                    <p class="text-gray-400">For large organizations with custom needs</p>
                </div>
                
                <div class="mb-8">
                    <div class="text-4xl font-bold text-white mb-1">$99<span class="text-gray-400 text-xl">/month</span></div>
                    <p class="text-gray-400 text-sm">Billed annually at $1188</p>
                </div>
                
                <ul class="space-y-4 mb-10 text-white">
                    <li class="feature-item">Unlimited projects</li>
                    <li class="feature-item">Unlimited team members</li>
                    <li class="feature-item">Advanced analytics</li>
                    <li class="feature-item">24/7 dedicated support</li>
                    <li class="feature-item">Custom API limits</li>
                    <li class="feature-item">Enterprise-grade security</li>
                </ul>
                
                <button class="w-full py-3 bg-dark-700 text-gray-200 rounded-lg font-medium hover:bg-dark-600 transition">
                    Contact Sales
                </button>
            </div>
        </div>
    </div>