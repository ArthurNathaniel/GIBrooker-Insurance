<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Contact Us - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/contact.jpg" alt="">
                    <div class="swiper-text" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                        <h1>Contact Us</h1>
                        <p>
                            Feel free to contact us for any inquiries or assistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact">
           
            <div class="one bb" >

                <div class="set">
                    <h2><i class="fas fa-phone"></i></h2>
                    <p>For immediate assistance, please give us a call.</p>
                    <p><a href="tel:020 565 6666">020 565 6666</a></p>
                </div>

                <div class="set">
                    <h2><i class="far fa-envelope"></i></h2>
                    <p>Feel free to reach out to us via email for any inquiries or information.
                    </p>
                    <p><a href="mailto:info@gibrokers.com">info@gibrokers.com</a></p>
                </div>

                <div class="set">
                    <h2><i class="fas fa-map-marker-alt"></i></h2>
                    <p>Visit our location to personally discuss your insurance needs and find tailored solutions.</p>
                    <p><a href="">Elinesis Water Park Oyarifa Ghana Flag</a></p>
                </div>

            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>