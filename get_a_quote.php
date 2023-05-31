<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Get a Quote Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="get_a_quote.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/quote.jpg" alt="">
                    <div class="swiper-text">
                        <h1>Get a Quote</h1>
                        <p>
                            Get a personalized insurance quote tailored to your needs today.
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
                <form action="" onclick="preventReload(event)">
                    <div class="claims-input">
                        <label>Your Name / Business Name *:</label>
                        <br>
                        <input type="text" id="name" placeholder="Enter your name / business name" required>
                    </div>

                    <div class="claims-input">
                        <label>Email Address *:</label>
                        <br>
                        <input type="email" id="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="claims-input">
                        <label>Phone number / WhatsApp *:</label>
                        <br>
                        <input type="number" id="number" min="0" placeholder="Enter your phone number / whatsapp number" required>
                    </div>

                    <div class="claims-submit">
                        <input type="submit" value="Get a Quote" onclick="sendMail()" data-bs-toggle="modal" data-bs-target="#myModal">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-envelope"></i>
                        Get a Quote
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <p style="text-align: center;"> <strong id="user"></strong>,
                        We have received your request and will provide you with a quote shortly.
                    </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script>
        preventReload = (event) => {
            event.preventDefault();
        }
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("LTuRtdKSBRKgyM5aM");
        })();
    </script>
    <script>
        sendMail = () => {
            var params = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                number: document.getElementById('number').value,
            }

            const serviceID = 'service_fkuhb0h'
            const templateID = 'template_u93sbvv'


            document.getElementById('user').innerHTML = document.getElementById('name').value
            emailjs.send(serviceID, templateID, params)
                .then(() => {
                    console.log('successfully');
                    document.getElementById('name').value = '',
                    document.getElementById('email').value = '',
                    document.getElementById('number').value = ''
                })
        }
    </script>






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