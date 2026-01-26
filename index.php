<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charl'attend</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Water+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel='stylesheet' src='main.css' />
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-image: url('img/texture_bg.jpg');
            font-family: "Merriweather Sans", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: burlywood;
        }

        .water-brush {
            font-family: "Water Brush", cursive;
        }

        main {
            z-index: 100;
        }

        section .content {
            text-align: center;
        }

        section#s1 i, section#s3 i {
            font-size: 3rem;
            transition: font-size 0.2s linear;
        }

        section#s1 i:hover, section#s3 i:hover {
            font-size: 3.2rem;
        }

        /* Chrome, Edge, Safari */
        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            /* subtle */
            border-radius: 9999px;
        }

        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.2) transparent;
        }

        /* Hide scrollbar for Webkit */
        [data-slider="track"]::-webkit-scrollbar {
            display: none;
        }

        /* Prevent text selection while dragging */
        [data-slider="track"] {
            user-select: none;
            -webkit-user-select: none;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const track = document.querySelector('[data-slider="track"]');
            const prev = document.querySelector('[data-slider="prev"]');
            const next = document.querySelector('[data-slider="next"]');

            const slideWidth = () => track.offsetWidth;

            prev.addEventListener("click", () => {
                track.scrollBy({
                    left: -slideWidth(),
                    behavior: "smooth"
                });
            });

            next.addEventListener("click", () => {
                track.scrollBy({
                    left: slideWidth(),
                    behavior: "smooth"
                });
            });

            // Optional: update on resize for responsiveness
            window.addEventListener("resize", () => {});
        });
    </script>
</head>

<body>

    <!-- HEADER -->
    <header class="fixed top-0 left-0 w-full z-50 h-16 flex items-center select-none pointer-events-none">
        <img src='img/top_left_corner.webp'>
    </header>

    <!-- FOOTER -->
    <footer class="fixed bottom-0 left-0 w-full z-50 h-16 flex items-center">
        <nav class="max-w-6xl mx-auto w-full flex items-center justify-between px-6">
            <ul class="flex gap-6 text-sm font-medium justify-center w-full flex items-center">
                <li><a href="#s1">L'EP</a></li>
                <li><a href="#s2">Concerts</a></li>
                <li><a href="#s3">Le groupe</a></li>
            </ul>
        </nav>
    </footer>

    <!-- MAIN: Fixed between header and footer -->
    <main
        class="fixed top-16 bottom-16 left-0 right-0 overflow-y-auto snap-y snap-mandatory">

        <!-- Each section fills the available space between header & footer -->
        <section id="s1"
            class="snap-start h-full flex items-center justify-center">
            <div class='content items-center px-8'>
                <h1 class="text-6xl font-bold water-brush">Charl'attend</h1>
                <p class='text-6xl sep water-brush'>-</p>
                <h2 class="text-4xl font-bold">EN VRAC</h2>
                </br>
                <p class="text-2xl">Notre premier EP est disponible sur les platformes</p>
                </br>
                <nav class="flex gap-4 w-full justify-center">
                    <a href="#" class=" w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="#" class=" w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-spotify"></i>
                    </a>
                </nav>
            </div>
        </section>

        <section id="s2"
            class="snap-start h-full flex items-center justify-center ">
            <div class='content relative w-full max-w-4xl mx-auto overflow-hidden px-8'>
                <h2 class="text-6xl font-bold water-brush">Concerts</h2>
                <!-- Slider track -->
                <div
                    data-slider="track"
                    class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory touch-pan-x"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    <div class="snap-start flex-shrink-0 w-full h-64 rounded-xl p-6 flex items-center flex-col justify-center text-2xl font-semibold mx-2">
                        <h3 class='text-3xl font-bold'>La Scéne<sup>2</sup></h3>
                        <p class='text-5xl sep water-brush'>-</p>
                        <h4 class='text-2xl'>Vendredi 16 Janvier 2026</h4>
                    </div>
                    <div class="snap-start flex-shrink-0 w-full h-64 rounded-xl flex-col p-6 flex items-center justify-center text-2xl font-semibold mx-2">
                        <h3 class='text-3xl font-bold'>L'Espace Julien</h3>
                        <p class='text-5xl sep water-brush'>-</p>
                        <h4 class='text-2xl'>Mardi 21 Janvier 2026</h4>
                    </div>
                    <div class="snap-start flex-shrink-0 w-full h-64 rounded-xl flex-col p-6 flex items-center justify-center text-2xl font-semibold mx-2">
                        <h3 class='text-3xl font-bold'>Fuveau</h3>
                        <p class='text-5xl sep water-brush'>-</p>
                        <h4 class='text-2xl'>Samedi 21 Juin 2026</h4>
                    </div>
                </div>

                <!-- Prev button -->
                <button
                    data-slider="prev"
                    aria-label="Previous"
                    class="hidden md:flex absolute left-2 top-1/2 -translate-y-1/2 z-10 
           p-2 rounded-full bg-white/70 dark:bg-black/60 
           shadow hover:bg-white dark:hover:bg-black select-none backdrop-blur-sm">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Next button -->
                <button
                    data-slider="next"
                    aria-label="Next"
                    class="hidden md:flex absolute right-2 top-1/2 -translate-y-1/2 z-10 
           p-2 rounded-full bg-white/70 dark:bg-black/60 
           shadow hover:bg-white dark:hover:bg-black select-none backdrop-blur-sm">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>

        <section id="s3"
            class="snap-start h-full flex items-center justify-center">
            <div class='content items-center px-8'>
                <h2 class="text-6xl font-bold water-brush">Le groupe</h2>
                <p class='text-5xl sep water-brush'>-</p>
                <p class='text-1xl mb-10'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, enim? Illo voluptatibus ut recusandae assumenda facere reprehenderit aliquam maiores? Recusandae eaque voluptate, dolorem ex atque accusantium quam doloremque debitis. Modi!</p>
                <nav class="flex gap-4 w-full justify-center">
                    <a href="#" class=" w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a href="#" class=" w-12 h-12 rounded-full flex items-center justify-center">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </nav>
            </div>
        </section>

    </main>

</body>

</html>