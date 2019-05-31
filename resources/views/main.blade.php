<html>
<head>
    <title>EPIXIAN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html {
            scroll-behavior:smooth
        }
    </style>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans text-sm print:text-black">
    <div id="app">
        <header class="bg-gray-800 text-gray-300 py-6 text-lg">
            <div class="container">
                <div class="w-48 mx-auto mb-4">

                    @include ('svg.epixian-logo-reverse')

                </div>
                <div class="flex justify-around mx-auto w-3/5">
                    <a href="#design">design.</a>
                    <a href="#build">build.</a>
                    <a href="#manage">manage.</a>
                </div>
            </div>
        </header>
        
        <a name="design"></a>
        <section class="flex min-h-full">
            <div class="container md:flex md:flex-row md:items-center px-8 py-16">
                <div class="md:py-48 md:text-right md:w-1/3 pb-16 w-full">
                    <h2 class="heading font-serif text-6xl">design.</h2>
                    <p class="font-mono"><em>v.</em> \di-ˈzīn\ : <span>to devise for a specific function or end</span></p>
                </div>
                <div class="w-full md:w-2/3 p-0 md:px-16 lg:px-24">
                    <div class="">
                        <h3 class="text-2xl font-semibold pb-4">Logos and Branding</h3>
                        <p class="mb-2">Refresh your existing logo or start from scratch.</p>
                        <p class="mb-2">A well-designed logo can be used anywhere, from websites, business cards, postcards, letterheads, t-shirts, &amp; more.  Market your business and give your customers the familiarity of a trusted brand name.</p>

                        <h3 class="mt-4 text-2xl font-semibold pb-4">Websites</h3>
                        <p class="">Create confidence in your brand with a responsive website designed for all devices and screens.</p>
                    </div>
                </div>
                     
            </div>
       </section>

        <a name="build"></a>
        <section class="flex bg-blue-800 shadow-xl min-h-full text-gray-300">
            <div class="container md:flex md:flex-row-reverse md:items-center px-8 py-16">
                <div class="md:py-48 md:text-left md:w-1/3 pb-16 w-full">
                    <h2 class="heading font-serif text-6xl">build.</h2>
                    <p class="font-mono"><em>v.</em> \ˈbild\ : <span>to form by combining or arranging elements into a composite whole</span></p>
                </div>
                <div class="lg:px-24 md:px-16 md:w-2/3 p-0 w-full">
                    <h3 class="text-2xl font-semibold pb-4">Website Development</h3>
                    <p class="mb-2">We implement robust digital strategies using modern technology.</p>
                    <ul class="lg:flex lg:flex-wrap lg:items-center lg:justify-between list-disc px-8 py-4">
                        <li class="lg:w-1/2 md:w-full leading-loose">Blogs</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Landing pages</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Portfolios / galleries</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Contact forms</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">E-commerce storefronts</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Wordpress</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Custom plugins</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Website Optimization</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">Custom backends</li>
                        <li class="lg:w-1/2 md:w-full leading-loose">API integrations</li>
                    </ul>
                    <p class="">No matter what your requirements, if you can dream it, we can build it.</p>
                    <div class="flex items-center justify-around my-10">

                        @include ('svg.web-technologies')
                        
                    </div>
                </div>
            </div>
        </section>

        <a name="manage"></a>
        <section class="flex bg-gray-800 shadow-xl min-h-full text-gray-300">
            <div class="container md:flex md:flex-row md:items-center px-8 py-16">
                <div class="md:py-48 md:text-right md:w-1/3 pb-16 w-full">
                    <h2 class="heading font-serif text-6xl">manage.</h2>
                    <p class="font-mono"><em>v.</em> \ˈma-nij\ : to handle or direct with a degree of skill</p>
                </div>
                <div class="lg:px-24 md:px-16 md:w-2/3 py-8 sm:py-0 w-full">
                    <h3 class="text-2xl font-semibold pb-4">Website Hosting</h3>
                    <p class="">We can provide the required server architecture to host your website, so you can focus on what you do best.  From managed Wordpress to high-availability with load balancing and geographical distribution, no problem.</p>

                    <h3 class="mt-4 text-2xl font-semibold pb-4">IT Services/Consultation</h3>
                    <p class="">Need in-house support but can't justify full-time staff?  Let us help with your IT workload so you can focus on what you’re good at.  Flexible scheduling and on-call support.</p>
                </div>

            </div>
        </section>

        <section class="">
            <div class="container flex flex-wrap items-center px-8 py-16 justify-around">
            
                @include ('portfolio')               

            </div>
        </section>

        <section class="bg-blue-800">


        </section>

        <footer class="bg-gray-800 text-gray-300 py-8">
            <div class="container text-center px-32 my-8">

{{--                 <div class="flex items-center justify-around mb-8 mx-auto">
                    <div class="inline-flex hover:shadow-xl">
                        <input class="py-2 px-4 rounded-l w-64 shadow text-gray-900" type="text" placeholder="Email">
                        <button class="bg-gray-700 text-gray-300 py-2 px-4 rounded-r shadow hover:bg-primary">Submit</button>
                    </div>
                </div> --}}

                <!-- Begin Mailchimp Signup Form -->
                <div id="mc_embed_signup" class="flex items-center justify-around mb-8 mx-auto">
                <form action="https://epixian.us18.list-manage.com/subscribe/post?u=ccc578b232f59af0c7ac81862&amp;id=833dc73201" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll" class="mc-field-group inline-flex hover:shadow-xl">
                        <div class="">
                            <input type="email" value="" name="EMAIL" class="required email py-2 px-4 rounded-l w-64 shadow text-gray-900" id="mce-EMAIL" placeholder="Email">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ccc578b232f59af0c7ac81862_833dc73201" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button bg-gray-700 text-gray-300 py-2 px-4 rounded-r shadow hover:bg-primary"></div>
                    </div>
                </form>
                </div>

                <!--End mc_embed_signup-->

                <div class="w-48 m-4 mx-auto">
                    
                    @include ('svg.epixian-logo-reverse')

                </div>

                <div class="text-sm mb-4">
                    327 Central Ave, Glenside, PA 19038 &middot; <a href="mailto:info@epixian.com">info@epixian.com</a>
                </div>

                <div class="text-xs">&copy; 2018-2019 EPIXIAN LLC</div>
              
            </div>
        </footer>
    </div>

</body>
</html>