<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Our Mission & Vision - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mission_and_vision.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/mission_and_vision.jpg" alt="">
                    <div class="swiper-text">
                        <h1>VISION, MISSION AND CORE VALUES</h1>
                        <p>We strive to empower individuals and communities to reach their full potential through our products and services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section>
        <div class="mission-grid">
            <div class="one">
                <h1>OUR VISION</h1>
                <p>
                    The founders of Goldstar Insurance Brokers Ltd envisions an innovative company for insurance
                    intermediary services. We aim to position ourselves among the best and the customer’s first
                    choice for the provision of insurance intermediary and risk management services in Ghana. To
                    this end, we shall be guided by our values of integrity, professionalism and a commitment to
                    people and all our stakeholders.
                </p>
                <div class="icon">
                    <h1 ><i class="fas fa-eye"></i></h1>
                </div>
            </div>
            <div class="one">
                <h1>OUR MISSION</h1>
                <p>
                    To deploy the talents and experiences of our team in offering comprehensive and reliable
                    advice aimed at keeping the promises made by the insurance solutions and advisory
                    services we provide. With our values as a guide, our priority is to build lasting
                    partnerships with our customers and other stakeholders in the attainment of our goals.
                </p>
            </div>
        </div>
        <div class="another text-center">
            <div class="me">
                <h1>OUR CORE VALUES</h1>
                <p>
                    <b>1. Integrity:</b> operate in a fair, transparent and equitable manner by ensuring that
                    advisory services and recommended products are suitable for each clients’ individual
                    peculiar circumstances in terms of price and cover. We will endeavour to do what is
                    right for the customer at all times in protecting their assets and lives
                    <br>
                    <b> 2. Proffesionalism:</b> We strive to be consistent in providing superior service using the
                    code of conduct of our industry as a valid parameter for our daily engagement with our
                    clients.
                    <br>
                    <b>3. A culture of excellence and innovation:</b> - We Strive to deploy state of the art innovative
                    technology in the provision of services to ensure convenience and cost effective platforms
                    in the delivery of our services.
                    <br>
                    <b>4. Commitment to people.</b> The success of Goldstar is predicated on the success of all its
                    stakeholder;
                    <br>
                    <b>Customer Focus - Keeping our promises :</b> Our priority is to provide our clients with professional
                    and high- quality services that are tailored to their specific insurance and risk management concerns.
                </p>
            </div>
        </div>
    </section>
    <?php include 'call_to_action.php'; ?>
    <?php include './footer.php'; ?>
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