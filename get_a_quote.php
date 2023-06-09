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
                <form class="form">
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
                        <label>Phone number *:</label>
                        <br>
                        <input type="number" id="number" min="0" placeholder="Enter your phone number" required>
                    </div>
                    <div class="claims-input">
                        <label>WhatsApp number *:</label>
                        <br>
                        <input type="number" id="w_number" min="0" placeholder="Enter your whatsapp number" required>
                    </div>

                    <div class="claims-submit">
                        <!-- <input type="submit" value="Get a Quote" onclick="sendMail()" data-bs-toggle="modal" data-bs-target="#myModal"> -->

                        <input type="submit" class="submit-btn claims-submit" value="Submit" style="background-color: #242263; color:#FFF;">
                        <input type="hidden" class="modal-input" name="" data-bs-toggle="modal" data-bs-target="#myModal">
                        <div class="hidden-note" style="display:none">
                            <small style="display:hidden">couldn't send quote, please check your internet connection and try again</small>
                        </div>
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
        let modal = document.querySelector('.modal-input');
        let form = document.querySelector('.form');
        let sbtb = document.querySelector('.submit-btn');
        let hidenNote = document.querySelector('.hidden-note');


        form.addEventListener('submit', function(event) {
            event.preventDefault();
            sendMail();
        })

        sendMail = () => {
            var params = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                number: document.getElementById('number').value,
                w_number: document.getElementById('w_number').value,

            }

            const serviceID = 'service_fkuhb0h'
            const templateID = 'template_u93sbvv'

            sbtb.value = 'please wait....'
            sbtb.setAttribute('disabled', true);


            document.getElementById('user').innerHTML = document.getElementById('name').value
            emailjs.send(serviceID, templateID, params)
                .then(() => {
                    console.log('successfully');
                    modal.click();
                    console.log('successfully');
                    document.getElementById('name').value = '',
                        document.getElementById('email').value = '',
                        document.getElementById('number').value = '',
                        document.getElementById('w_number').value = '',

                        sbtb.value = "Submit";
                    // sbtb.setAttribute('disabled', false);
                    sbtb.removeAttribute('disabled');
                })
                .catch((err) => {
                    sbtb.value = "Submit";
                    // sbtb.setAttribute('disabled', false);
                    sbtb.removeAttribute('disabled');

                    hidenNote.setAttribute('style', 'display:block');

                    setTimeout(() => {
                        hidenNote.setAttribute('style', 'display:none');
                    }, 3000);
                    // sbtb.value = 'couldn\'t send claim, please check your internet connection and try again'
                    // sbtb.setAttribute('disabled', false);
                    console.log('error sending request', err);
                });
        }





        // sendMail = () => {
        //     var params = {
        //         name: document.getElementById('name').value,
        //         email: document.getElementById('email').value,
        //         number: document.getElementById('number').value,
        //     }

        //     const serviceID = 'service_fkuhb0h'
        //     const templateID = 'template_u93sbvv'


        //     document.getElementById('user').innerHTML = document.getElementById('name').value
        //     emailjs.send(serviceID, templateID, params)
        //         .then(() => {
        //             console.log('successfully');
        //             document.getElementById('name').value = '',
        //                 document.getElementById('email').value = '',
        //                 document.getElementById('number').value = ''
        //         })
        // }
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