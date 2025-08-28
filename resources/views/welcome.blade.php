<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Safety System</title>
     @vite('resources/css/app.css')
    @vite('resources/js/app.js')
     <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">SafeSite</h1>
            <div class="space-x-6">
                <a href="#features" class="hover:text-blue-600">Features</a>
                <a href="#about" class="hover:text-blue-600">About</a>
                <a href="#contact" class="hover:text-blue-600">Contact</a>
                <a  class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex flex-col justify-center items-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center px-6">
        <h2 class="text-5xl font-extrabold mb-6">Construction Site Safety Made Simple</h2>
        <p class="text-lg mb-6 max-w-2xl">
            Manage inspections, track compliance, and improve workplace safety with our all-in-one platform.
        </p>
        <a href="#features" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow hover:bg-gray-100">
            Get Started
        </a>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-12">Features</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
                <h4 class="text-xl font-semibold mb-2">Inspection Reports</h4>
                <p>Submit, review, and approve safety inspections in real-time.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
                <h4 class="text-xl font-semibold mb-2">Role-based Access</h4>
                <p>Admins, supervisors, and workers each have tailored dashboards.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
                <h4 class="text-xl font-semibold mb-2">Analytics & KPIs</h4>
                <p>Track safety performance and compliance across all projects.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-3xl font-bold mb-6">About Us</h3>
            <p class="text-lg">
                SafeSite is a digital platform built to simplify construction safety management.  
                With real-time reporting, project role assignments, and powerful analytics,  
                we help construction companies keep workers safe and compliant.
            </p>
        </div>
    </section>

    <section id="showcase" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-12">Project Highlights</h3>

        <div 
            x-data="{ activeSlide: 0, slides: [0,1,2] }" 
            x-init="setInterval(() => { activeSlide = (activeSlide + 1) % slides.length }, 3000)"
            class="relative overflow-hidden"
        >
            <!-- Slides -->
            <div class="flex transition-transform duration-700"
                 :style="`transform: translateX(-${activeSlide * 100}%)`">

                <!-- Slide 1 -->
                <div class="min-w-full flex justify-center">
                    <div class="bg-white shadow-md rounded-xl p-8 max-w-md text-center">
                        <h4 class="text-xl font-semibold mb-2">Highway Project</h4>
                        <p class="text-gray-600">Safety compliance reached 98% with real-time inspection monitoring.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="min-w-full flex justify-center">
                    <div class="bg-white shadow-md rounded-xl p-8 max-w-md text-center">
                        <h4 class="text-xl font-semibold mb-2">Skyscraper Build</h4>
                        <p class="text-gray-600">Supervisor dashboards improved corrective action response by 40%.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="min-w-full flex justify-center">
                    <div class="bg-white shadow-md rounded-xl p-8 max-w-md text-center">
                        <h4 class="text-xl font-semibold mb-2">Bridge Construction</h4>
                        <p class="text-gray-600">Site inspectors submitted 300+ digital reports in 2 months.</p>
                    </div>
                </div>
            </div>

            <!-- Dots -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button 
                        @click="activeSlide = index"
                        :class="activeSlide === index ? 'bg-blue-600' : 'bg-gray-400'"
                        class="w-3 h-3 rounded-full">
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>

    <!-- Call to Action -->
    <section id="contact" class="py-20 text-center bg-blue-600 text-white">
        <h3 class="text-3xl font-bold mb-6">Ready to Improve Site Safety?</h3>
        <p class="mb-6">Join today and streamline your inspection process.</p>
        <a  class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow hover:bg-gray-100">
            Get Started
        </a>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6 text-center">
        <p>&copy; {{ date('Y') }} SafeSite. All rights reserved.</p>
    </footer>

</body>
</html>
