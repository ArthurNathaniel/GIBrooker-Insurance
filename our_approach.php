<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Our Mission & Vision - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="our_approach.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/our_board.jpg" alt="">
                    <div class="swiper-text">
                        <h1>Our Board of Directions</h1>
                        <p>
                            Through our experienced and dedicated staff, supported by a diverse and
                            distinguished Board of Directors, we provide exceptional customer service
                            and expert advice to our valued clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="approach">
            <h1 class="text-center">The Goldstar Approach</h1>
            <p>
                At Goldstar Insurance Brokers Ltd., we offer a comprehensive range of services to meet your
                insurance needs. From customized insurance solutions and risk management services to
                efficient claims handling and management, our team ensures comprehensive coverage and
                compliance through insurance audits. Additionally, we are dedicated to empowering our
                partners through third-party capacity building, providing them with the knowledge and
                skills to navigate the insurance landscape effectively.
            </p>
        </div>
    </section>

    <section>
        <div class="our_approach">
            <div class="one">
                <h3>Risk management services</h3>
                <p>
                    Our in-house Risk Management Services team renders customized services aimed at
                    identifying direct, counter-party and third party risk exposures, minimize the potential
                    for downtime, and mitigate or avoid losses. We prescribe risk control measures and
                    insurance solutions where and when deemed necessary and we provide these services
                    in collaboration with our business partners such as our insurers, re-insurers, and
                    independent risk assessors and engineers.
                </p>
            </div>
            <div class="one">
                <h3>Claims handling and management</h3>
                <p>
                    Our claims handling is noted for its promptness, fairness and quality. This achievement
                    is the result of our: enhanced claims management policies and processes; notification
                    procedures into insurance policies/documents to educate clients on their role in
                    expeditious claims payment; daily monitoring of claims-related activities; and
                    commitment to customer satisfaction.
                </p>
            </div>
            <div class="one">
                <h3>Insurance audit:</h3>
                <p>
                    Customers’ risk exposures and insurance needs change from time-to-time. Therefore, as
                    part of our customer care requirements, we conduct periodic insurance audits for our
                    major and large clients at no cost to them. The findings from the audits are used to
                    make appropriate insurance and risk control recommendations.
                </p>
            </div>
            <div class="one">
                <h3>Third-party capacity building</h3>
                <p>
                    Some of our clients have in-house insurance units or officers tasked to handle the
                    clients’ insurance policies and other insurance risks-related matters. We support such
                    clients (at our own expense) through third party capacity building interventions – which
                    involves providing training and education for the in-house officers. The third-party
                    capacity building focuses on key issues including but not limited to: assessing insurance
                    needs and adequacy of insurance cover; in-house insurance administration; loss prevention
                    and loss minimization strategies.
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