<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tregalloway.com</title>

    <style>
        @font-face {
            font-family: 'Dank Mono';
            font-style: normal;
            font-weight: 400; /* Regular */
            src: url('/fonts/DankMono-Regular.woff2') format('woff2'),
            url('/fonts/DankMono-Regular.woff') format('woff'),
            url('/fonts/DankMono-Regular.otf') format('opentype');
        }

        @font-face {
            font-family: 'Dank Mono';
            font-style: italic;
            font-weight: 400; /* Italic */
            src: url('/fonts/DankMono-Italic.woff2') format('woff2'),
            url('/fonts/DankMono-Italic.woff') format('woff'),
            url('/fonts/DankMono-Italic.otf') format('opentype');
        }

        @font-face {
            font-family: 'Dank Mono';
            font-style: normal;
            font-weight: 700; /* Bold */
            src: url('/fonts/DankMono-Bold.woff2') format('woff2'),
            url('/fonts/DankMono-Bold.woff') format('woff'),
            url('/fonts/DankMono-Bold.otf') format('opentype');
        }
    </style>

    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'dank': ['Dank Mono', 'monospace']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-dank">
<div class="mx-auto max-w-2xl px-4 mt-12 sm:px-6 lg:px-8">
    <main>
        <h1 class="text-5xl">I'm Tre Galloway</h1>
        <section class="my-5">
            <div class="text-3xl text-teal-600">Freelance Software Developer</div>
            <div class="text-2xl text-gray-700">
                Building custom digital solutions for businesses and individuals
            </div>
            <div class="text-lg text-gray-900 mt-4">
                I'm Tre Galloway, a skilled software developer specializing in
                creating custom digital solutions that help businesses and individuals meet their technology needs. With expertise in website development and software engineering, I deliver high-quality, tailored solutions that drive results.
            </div>
            <div class="italic mt-2">Building momentum—one commit at a time.</div>
        </section>

        <section class="mt-8">
            <h2 class="text-3xl">Services</h2>
            <div class="text-gray-900 text-lg mt-2">
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">›</span>
                        <div>
                            <div class="font-bold">Custom Website Development</div>
                            <p class="text-gray-700">Professional, responsive websites built to your specifications using modern technologies.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">›</span>
                        <div>
                            <div class="font-bold">Software Development</div>
                            <p class="text-gray-700">Custom software solutions designed to streamline your business processes and solve specific challenges.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">›</span>
                        <div>
                            <div class="font-bold">Maintenance & Support</div>
                            <p class="text-gray-700">Ongoing technical support, updates, and improvements to keep your digital assets secure.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="mt-8">
            <h2 class="text-3xl">Pricing</h2>
            <div class="text-gray-900 text-lg mt-2">
                <p>I provide customized pricing based on project requirements, complexity, and timeline.</p>
                <p class="mt-2">Each solution is tailored to your specific needs, ensuring you receive exactly what your business requires.</p>
                <p class="mt-4 font-bold">Contact me at <a href="mailto:tre@tregalloway.com" class="text-teal-600 hover:underline">tre@tregalloway.com</a> to discuss your project and receive a personalized quote.</p>
            </div>
        </section>

        <section class="mt-8">
            <div class="text-lg font-bold text-teal-700">
                Products I'm working on
            </div>
            <div class="underline mt-2">
                <ul class="space-y-1">
                    <li>
                        Planni- AI based task manager
                    </li>
                    <li>
                        App performance tracker w/ golang
                    </li>
                </ul>
            </div>
        </section>

        <section class="mt-12 border-t pt-6">
            <h2 class="text-3xl">Get in Touch</h2>
            <div class="text-gray-900 text-lg mt-2">
                <p>Ready to discuss your project? Email me at <a href="mailto:tre@tregalloway.com" class="text-teal-600 hover:underline">tre@tregalloway.com</a></p>
                <p class="mt-4 text-sm text-gray-600">Payment methods accepted: All major credit cards through Stripe's secure payment processing.</p>
            </div>
        </section>

        <footer class="mt-12 pt-6 border-t text-sm text-gray-600">
            <p>&copy; 2025 Tre Galloway Software Development. All rights reserved.</p>
            <div class="mt-2">
                <a href="/terms" class="text-teal-600 hover:underline mr-4">Terms of Service</a>
                <a href="/privacy" class="text-teal-600 hover:underline">Privacy Policy</a>
            </div>
        </footer>
    </main>
</div>
</body>
</html>


