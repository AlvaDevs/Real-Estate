<?php 
    $main = true;
    include 'includes/templates/header.php'; 
?>

    <main class="contenedor">
        <h1>More About Us</h1>

        <div class="icons-about">
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Security Icon" loading="lazy">
                <h3>Security</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio corrupti voluptates, magnam unde doloremque modi minima illum nesciunt non amet consectetur, tempore numquam, alias quam omnis ab deleniti dolorem.</p>
            </div>
            <div class="icon">
                <img src="build/img/icono2.svg" alt="Price Icon" loading="lazy">
                <h3>Price</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio corrupti voluptates, magnam unde doloremque modi minima illum nesciunt non amet consectetur, tempore numquam, alias quam omnis ab deleniti dolorem.</p>
            </div>
            <div class="icon">
                <img src="build/img/icono3.svg" alt="Time Icon" loading="lazy">
                <h3>Time</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio corrupti voluptates, magnam unde doloremque modi minima illum nesciunt non amet consectetur, tempore numquam, alias quam omnis ab deleniti dolorem.</p>
            </div>
        </div>
    </main>

    <section class="section contenedor">
        <h2>Houses and Apartments for Sale</h2>

        <div class="container-listing">
            <div class="listing">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="1">
                </picture>

                <div class="content-listing">
                    <h3>Luxury house on the lake</h3>
                    <p>House on the lake with an excellent view at an excellent price.</p>
                    <p class="price">$2,800,000.00</p>

                    <ul class="icons-listing">
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="icon wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icon parking">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icon bedroom">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="listing.php" class="btn-yellow-block">
                        View property
                    </a>
                </div> <!--! Closing of content-listing -->
            </div> <!--! Closing of listing -->

            <div class="listing">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="2">
                </picture>

                <div class="content-listing">
                    <h3>House with luxury finishes</h3>
                    <p>House with modern design, as well as smart technology and furnishings.</p>
                    <p class="price">$3,200,000.00</p>

                    <ul class="icons-listing">
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="icon wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icon parking">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icon bedroom">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="listing.php" class="btn-yellow-block">
                        View property
                    </a>
                </div> <!--! Closing of content-listing -->
            </div> <!--! Closing of listing -->

            <div class="listing">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="3">
                </picture>

                <div class="content-listing">
                    <h3>House with pool</h3>
                    <p>House with pool and luxury finishes in the city, excellent opportunity!</p>
                    <p class="price">$2,500,000.00</p>

                    <ul class="icons-listing">
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_wc.svg" alt="icon wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icon parking">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icon" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icon bedroom">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="listing.php" class="btn-yellow-block">
                        View property
                    </a>
                </div> <!--! Closing of content-listing -->
            </div> <!--! Closing of listing -->
        </div> <!--! Closing of container-listing -->

        <div class="align-right">
            <a href="listings.php" class="btn-green" >View All</a>
        </div>
    </section>

    <section class="img-contact">
        <h2>Find your dream home</h2>
        <p>Fill out the contact form and a consultant will contact you shortly.</p>
        <a href="contact.php" class="btn-yellow">Contact us!</a>
    </section>

    <div class="contenedor section section-lower">
        <section class="blog">
            <h3>Our blog</h3>
            <article class="entry-blog">
                <div class="img">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Blog 1">
                    </picture>
                </div> 
                <div class="text-entry">
                    <a href="entry.php">
                        <h4>Terrace on the roof of your house</h4>
                        <p class="meta-info">Written on <span>20/10/2023</span> by: <span>Admin</span></p>

                        <p>
                            Tips for building a rooftop terrace with the best materials and saving money.
                        </p>
                    </a>
                </div>
            </article>
            <article class="entry-blog">
                <div class="img">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Blog 2">
                    </picture>
                </div> 
                <div class="text-entry">
                    <a href="entry.php">
                        <h4>Guide to decorating your home</h4>
                        <p class="meta-info">Written on <span>24/9/2023</span> by: <span>Admin</span></p>

                        <p>
                            Maximize the space in your home with this guide; learn how to combine furniture and colors to give life to your space.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimonials">
            <h3>Testimonials</h3>

            <div class="testimonial">
                <blockquote>
                    The staff behaved in an excellent way, very good attention and the house they offered me exceeded all my expectations. 
                </blockquote>
                <p>- Álvaro Álvarez</p>
            </div>
        </section>
    </div>

<?php include 'includes/templates/footer.php'; ?>