<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Home - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-text">
                        <h6> Welcome to Goldstar Insurance Brokers</h6>
                        <h1>Find Your Secured Future In Goldstar Insurance Brokers</h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-text">
                        <h6> Welcome to Goldstar Insurance Brokers</h6>
                        <h1>Find Your Secured Future In Goldstar Insurance Brokers</h1>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-text">
                        <h6> Welcome to Goldstar Insurance Brokers</h6>
                        <h1>Find Your Secured Future In Goldstar Insurance Brokers</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>