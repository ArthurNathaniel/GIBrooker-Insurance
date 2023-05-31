<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>About Us - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/about_banner.jpg" alt="">
                    <div class="swiper-text">
                        <h6> Welcome to Goldstar Insurance Brokers</h6>
                        <h1>The Story of Goldstar Insurance Brokers Ltd</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="about_us">
            <h1>About Goldstar</h1>
            <h5>The Journey of Goldstar Insurance Brokers Ltd</h5>
            <p>
                Goldstar Insurance Brokers Ltd. (Goldstar) was established in March 2018 as an Indigenous
                Insurance Broker and Risk Management Consultancy. We are licensed by the National Insurance
                Commission and we operate as a reliable intermediary between Insurance companies and
                insureds. We have achieved success by delivering tailor-made insurance products,
                results-oriented risk management initiatives, as well as excellent claims management
                services for our clients. Over the years, we have offered noteworthy customer service
                and sound technical advice to our clients through our highly experienced, skilled, and
                dedicated staff regularly supported by our Board of Directors comprising distinguished
                personalities drawn from diverse disciplines and business areas.
            </p>

        </div>

        <div class="about-heading">
            <h1 class="text-center">Why Goldstar:</h1>
        </div>
        <div class="about-grid">
            <div class="one">
                <h1><i class="fas fa-check-circle"></i></h1>
                <h4>We offer Quality and Prompt Service</h4>
                <p>
                    Goldstar Insurance Brokers Ltd. is committed to providing quality and prompt service to its clients.
                </p>
            </div>
            <div class="one">
                <h1><i class="fas fa-dollar-sign"></i></h1>
                <h4>We offer competitive prices</h4>
                <p>
                    Goldstar Insurance Brokers Ltd. offers competitive prices, ensuring affordability for our clients.
                </p>
            </div>
            <div class="one">
                <h1><i class="fas fa-handshake"></i></h1>
                <h4>We offer professional and Customer centrist products and services</h4>
                <p>
                    We are dedicated to providing professional and customer-centric products and services.
                </p>
            </div>
        </div>
    </section>
    <?php include 'call_to_action.php'; ?>
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