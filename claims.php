<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Claims - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="claims.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/claims.jpg" alt="">
                    <div class="swiper-text" data-aos="zoom-out" data-aos-offset="300" data-aos-easing="ease-in-sine">
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
        <div class="claims-form" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h2>Report a claim</h2>
            <p>
                Please use the form below to submit claims online. We will get back to you as soon as possible.
            </p>
            <div class="claims">
                <form action="" onclick="preventReload(event)">
                    <div class="claims-input">
                        <label>Name:</label>
                        <br>
                        <input type="text" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="claims-input">
                        <label>Address:</label>
                        <br>
                        <input type="text" id="address" placeholder="Enter your  address">
                    </div>
                    <div class="claims-input">
                        <label>Phone number:</label>
                        <br>
                        <input type="number" min="0" id="number" placeholder="Enter your phone number">
                    </div>
                    <div class="claims-input">
                        <label>Email:</label>
                        <br>
                        <input type="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="claims-input">
                        <label>Type of Claims:</label>
                        <br>
                        <select name="claims" id="claims">
                            <option value="Motor Insurance">Motor Insurance</option>
                            <option value="Life Insurance">Life Insurance</option>
                            <option value="Travel Insurance">Travel Insurance</option>
                            <option value="Fire Insurance">Fire Insurance</option>
                            <option value="Home Owner Insurance">Home Owner Insurance</option>
                            <option value="Health Insurance">Health Insurance</option>
                            <option value="Assets All Insurance">Assets All Insurance</option>
                            <option value="Public Liability Insurance">Public Liability Insurance</option>
                            <option value="Professional Indemnity Insurance">Professional Indemnity Insurance</option>
                            <option value="Assets Alll Risk Insurance">Assets Alll Risk Insurance</option>
                            <option value="All Bonds Insurance">All Bonds Insurance</option>
                            <div class="claims-submit">
                                <input type="submit" value="Submit" style="background-color: #242263; color:#FFF;" onclick="sendMail()" data-bs-toggle="modal" data-bs-target="#myModal">
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
                        Claims
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <p style="text-align: center;"> <strong id="user"></strong>,
                        We have received your request.
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
                address: document.getElementById('address').value,
                number: document.getElementById('number').value,
                email: document.getElementById('email').value,
                claims: document.getElementById('claims').value,
            }

            const serviceID = 'service_fkuhb0h'
            const templateID = 'template_307w5gb'


            document.getElementById('user').innerHTML = document.getElementById('name').value
            emailjs.send(serviceID, templateID, params)
                .then(() => {
                    console.log('successfully');
                    document.getElementById('name').value = '',
                        document.getElementById('address').value = '',
                        document.getElementById('email').value = '',
                        document.getElementById('number').value = '',
                        document.getElementById('claims').value = '';
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