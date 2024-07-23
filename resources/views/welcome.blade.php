<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ... */
        </style>
    </head>
    <body>
        <div class="flex justify-end mb-4">
            @if (Route::has('login'))
                <div class="flex">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <nav class="-mx-3 flex flex-1 justify-end">
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </a>
                            @endif
                        </nav>
                    @endauth
                </div>
            @endif
        </div>

        <section class="ezy__blogdetails8 light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div>
                            <img src="https://cdn.easyfrontend.com/pictures/background/background9.jpg" alt="" class="img-fluid" />
                            <h2 class="ezy__blogdetails8-heading my-4">News Needs to Meet Its Audiences Where They Are</h2>
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://cdn.easyfrontend.com/pictures/users/user11.jpg"
                                alt=""
                                    class="img-fluid rounded-circle"
                                    width="47"
                                />
                                <div class="ms-2">
                                    <h6 class="mb-1">Jusa Ara</h6>
                                    <p class="opacity-50 small mb-0">Jun 14 • 3 min read</p>
                                </div>
                            </div>
                            <p class="opacity-75 mt-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officia neque beatae at inventore
                                excepturi numquam sint commodi alias, quam consequuntur corporis ex, distinctio eaque sapiente pariatur
                                iure ad necessitatibus in quod obcaecati natus consequatur. Sed dicta maiores, eos culpa. <br /><br />

                                Voluptatum animi, voluptate sint aperiam facere a nam, ex reiciendis eum nemo ipsum nobis, rem illum
                                cupiditate at quaerat amet qui recusandae hic, atque laboriosam perspiciatis? Esse quidem minima,
                                voluptas necessitatibus, officia culpa quo nulla, cupiditate iste vel unde magni. <br /><br />

                                Nulla nesciunt eligendi ratione, atque, hic, ullam suscipit quos enim vitae fugiat ducimus, dolore
                                delectus iste id culpa. Ducimus, iste magnam sed reprehenderit architecto perferendis odio voluptas
                                molestiae quidem ab numquam debitis, dolorem incidunt, tempore a quod qui nobis. Voluptates!<br /><br />

                                Blanditiis, ipsum sed odio reprehenderit sequi ut vitae, dolor minima ab! Architecto nesciunt nemo sint
                                est aspernatur fugit consequatur, magnam suscipit asperiores illo eum repellendus officia dolorem,
                                molestiae commodi nam voluptatem quis quia vel cumque quos, aliquam ex incidunt sapiente!<br /><br />

                                Suscipit, officiis, vero! Perferendis accusamus quos voluptatum culpa, provident maiores! Illo itaque
                                ullam fugit molestiae, eaque accusamus impedit autem numquam. Placeat molestias tempore eaque ipsam vel
                                voluptatum velit enim quam iusto maxime delectus, sint sapiente ea, quo excepturi nisi! Quia.<br /><br />

                                Dolores debitis excepturi maxime earum sapiente totam, quos dolore inventore tempore illum. Dolores
                                explicabo sed amet aut atque, facere aliquid repudiandae quod possimus quo hic similique et voluptates
                                fugit iure dolore quam ipsa numquam assumenda corporis? Dignissimos expedita fugit sapiente.<br /><br />

                                Cupiditate ut, aspernatur labore obcaecati, eveniet aut velit nulla facere suscipit est recusandae vel
                                error itaque earum doloremque hic necessitatibus dignissimos dolores libero laudantium ducimus! Rem
                                dolorem ratione officia et, fugit non, fuga suscipit eos veritatis enim perspiciatis, magni sit!<br /><br />
                            </p>
                            <p>Categories: <a href="#">Design, </a><a href="#">Events</a></p>
                            <a href="#" class="mt-4">Leave a comment</a>
                        </div>
</div>
                    <!-- sidebar -->
                    <div class="col-12 col-md-4 mt-4 mt-md-0">
                        <div class="p-md-3 pt-0">
                            <h3 class="ezy__blogdetails8-title">Popular Posts</h3>
                            <div>
                                <!-- item -->
                                <div class="d-flex align-items-start mt-4">
                                    <h1 class="opacity-75">01</h1>
                                    <div class="ms-3">
                                        <h6>Your most unhappy customers are the greatest for you</h6>
                                        <p class="opacity-75 mb-0"><a href="#">Dave Roger</a> in <a href="#">News</a></p>
                                        <p class="opacity-50 small mb-0">Jun 14 • 3 min read</p>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="d-flex align-items-start mt-4">
                                    <h1 class="opacity-75">02</h1>
                                    <div class="ms-3">
                                        <h6>A loving heart is the truest wisdom</h6>
                                        <p class="opacity-75 mb-0"><a href="#">Steve Job</a> in <a href="#">Data</a></p>
                                        <p class="opacity-50 small mb-0">Jun 14 • 3 min read</p>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="d-flex align-items-start mt-4">
                                    <h1 class="opacity-75">03</h1>
                                    <div class="ms-3">
                                        <h6>What your music choice says about you and your personality</h6>
                                        <p class="opacity-75 mb-0"><a href="#">Sara Tailor</a> in <a href="#">Web</a></p>
                                        <p class="opacity-50 small mb-0">Feb 24 • 4 min read</p>
                                    </div>
                                </div>
                                <!-- item -->
                                <div class="d-flex align-items-start mt-4">
                                    <h1 class="opacity-75">04</h1>
                                    <div class="ms-3">
                                        <h6>Build a website in minutes with Wordpress</h6>
                                        <p class="opacity-75 mb-0"><a href="#">Shane Watson</a> in <a href="#">News</a></p>
                                        <p class="opacity-50 small mb-0">Aug 11 • 5 min read</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /*... */
        </style>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </body>
</html>
