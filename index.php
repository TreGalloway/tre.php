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
</head>
<body class="bg-gray-150 font-dank">
<div class="mx-auto max-w-2xl px-4 mt-6 sm:px-6 lg:px-8">
    <main>
        <h1 class="text-2xl">I'm Tre Galloway
        </h1>
        <section>
            <div class=" text-lg text-teal-700">Software Developer</div>
            <div>I'm a self-taught software developer currently working towards building a portfolio of freelance clients
                and indie apps</div>
            <div class=" italic">Building momentum—one commit at a time.</div>
        </section>
        <section>
            <div class="italic font-bold"> Site is currently a work in progress ... 🚢</div>
            <div class="text-lg font-bold text-teal-700">
                Products I'm working on
            </div>
            <div class="underline">

                <ul>
                    Planni- AI based task manager
                </ul>
                <ul>
                    App performance tracker w/ golang
                </ul>
            </div>
        </section>
    </main>
</div>
</body>
</html>

