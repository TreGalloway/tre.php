<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tre Galloway</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-gray-50">
<!-- Navbar -->
<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="flex items-center justify-between border-b border-neutral-300 px-6 py-4 dark:border-neutral-700" aria-label="penguin ui menu">
    <!-- Brand Logo -->
    <a href="#" class="text-2xl font-bold text-neutral-900 dark:text-white">
        <span>T<span class="text-black dark:text-white">r</span>e</span>
        <!-- <img src="./your-logo.svg" alt="brand logo" class="w-10" /> -->
    </a>
    <!-- Desktop Menu -->
    <ul class="hidden items-center gap-4 md:flex">
        <li><a href="#" class="font-bold text-black underline-offset-2 hover:text-black focus:outline-none focus:underline dark:text-white dark:hover:text-white" aria-current="page">Work</a></li>
        <li><a href="#" class="font-medium text-neutral-600 underline-offset-2 hover:text-black focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white">Uses</a></li>
        <li><a href="#" class="font-medium text-neutral-600 underline-offset-2 hover:text-black focus:outline-none focus:underline dark:text-neutral-300 dark:hover:text-white">Blog</a></li>

    </ul>
    <!-- Mobile Menu Button -->
    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button" class="flex text-neutral-600 dark:text-neutral-300 md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <!-- Mobile Menu -->
    <ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-neutral-300 rounded-b-md border-b border-neutral-300 bg-neutral-50 px-6 pb-6 pt-20 dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-900 md:hidden">
        <li class="py-4"><a href="#" class="w-full text-lg font-bold text-black focus:underline dark:text-white" aria-current="page">Work</a></li>
        <li class="py-4"><a href="#" class="w-full text-lg font-medium text-neutral-600 focus:underline dark:text-neutral-300">Uses</a></li>
        <li class="py-4"><a href="#" class="w-full text-lg font-medium text-neutral-600 focus:underline dark:text-neutral-300">Blog</a></li>

    </ul>
</nav>
<!-- Hero Section -->
<header class=" pt-12 sm:pt-16" id="header">

  <div class="pl-7">
      <span class="flex size-14 items-center justify-center overflow-hidden rounded-full border border-green-500 bg-green-500 text-white/50">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-full h-full mt-3">
        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"/>
    </svg>
      </span>
  </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 sm:text-3xl">Sup 👋🏾, I'm Tre' Galloway</h2>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Turning problems into solutions with code. While reading a little too much fantasy.

            </p>
            <nav class="text-gray-500  flex">
                <a href="https://bsky.app/profile/tregalloway.bsky.social" class="px-1 hover:text-teal-600">  <svg  xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-bluesky"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.335 5.144c-1.654 -1.199 -4.335 -2.127 -4.335 .826c0 .59 .35 4.953 .556 5.661c.713 2.463 3.13 2.75 5.444 2.369c-4.045 .665 -4.889 3.208 -2.667 5.41c1.03 1.018 1.913 1.59 2.667 1.59c2 0 3.134 -2.769 3.5 -3.5c.333 -.667 .5 -1.167 .5 -1.5c0 .333 .167 .833 .5 1.5c.366 .731 1.5 3.5 3.5 3.5c.754 0 1.637 -.571 2.667 -1.59c2.222 -2.203 1.378 -4.746 -2.667 -5.41c2.314 .38 4.73 .094 5.444 -2.369c.206 -.708 .556 -5.072 .556 -5.661c0 -2.953 -2.68 -2.025 -4.335 -.826c-2.293 1.662 -4.76 5.048 -5.665 6.856c-.905 -1.808 -3.372 -5.194 -5.665 -6.856z" /></svg>
                </a>
                <a href="https://www.youtube.com/@tregalloway" class="px-1 hover:text-teal-600">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" /><path d="M10 9l5 3l-5 3z" /></svg>
                </a>
                <a href="https://github.com/TreGalloway" class="px-1 hover:text-teal-600">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-github"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                </a>
                <a href="https://www.linkedin.com/in/tregalloway/" class="px-1 hover:text-teal-600">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="28" height="28" viewBox="0 0 28 28"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 11v5" /><path d="M8 8v.01" /><path d="M12 16v-5" /><path d="M16 16v-3a2 2 0 1 0 -4 0" /><path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" /></svg>
                </a>

            </nav>
        </div>
    </div>
</header>
<!-- Work -->
<section id="projects" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">/work</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $projects = [
                [
                    'title' => 'Project One',
                    'description' => 'A brief description of your first project.',
                    'tags' => ['PHP', 'Laravel', 'Vue.js'],
                    'link' => '#'
                ],
                [
                    'title' => 'Project Two',
                    'description' => 'A brief description of your second project.',
                    'tags' => ['React', 'Node.js', 'MongoDB'],
                    'link' => '#'
                ],
                [
                    'title' => 'Project Three',
                    'description' => 'A brief description of your third project.',
                    'tags' => ['Python', 'Django', 'PostgreSQL'],
                    'link' => '#'
                ]
            ];

            foreach ($projects as $project): ?>
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">
                            <?= htmlspecialchars($project['title']) ?>
                        </h3>
                        <p class="text-gray-600 mb-4">
                            <?= htmlspecialchars($project['description']) ?>
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        <?= htmlspecialchars($tag) ?>
                                    </span>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?= htmlspecialchars($project['link']) ?>"
                           class="inline-flex items-center text-gray-600 hover:text-gray-900">
                            View Project
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</body>

</html>

