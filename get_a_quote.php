<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Claims - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="get_a_quote.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/our_board.jpg" alt="">
                    <div class="swiper-text">
                        <h1>Claims</h1>
                        <p>
                            At Goldstar with a team of experts and a commitment to quality, we strive to
                            deliver excellence in everything we do. Trust us to be your partner in success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="claims-form">
            <h2>Get a Quote</h2>
            <p>
                Please utilize the form provided below to request a quote.
                 We will promptly respond to your inquiry. </p>
            <div class="claims">
                <form action="">
                    <div class="claims-input">
                        <label>Your Name / Business Name <span>*</span>:</label>
                        <br>
                        <input type="text" placeholder="Enter your name / business name">
                    </div>


                    <div class="claims-input">
                        <label>Email Address:</label>
                        <br>
                        <input type="email" placeholder="Enter your email address">
                    </div>

                    <div class="claims-input">
                        <label>Phone number / WhatsApp:</label>
                        <br>
                        <input type="number" min="0" placeholder="Enter your phone number / whatsapp number">
                    </div>



                    <div class="claims-submit">
                        <input type="submit" value="Get a Quote">
                    </div>
                </form>
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