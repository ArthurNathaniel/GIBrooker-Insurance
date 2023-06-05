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
                    <img src="./images/cube22.jpg" alt="">
                    <div class="swiper-text" data-aos-duration="1000" data-aos="zoom-in-down">
                        <h6> Welcome to Goldstar Insurance Brokers</h6>
                        <h1>Find Your Secured Future In Goldstar Insurance Brokers</h1>

                        <div class="button-div" style="  width: 100%; display: flex; justify-content: left;  align-items: flex-start; left: 0; gap:20px;">
                            <button class="button-28" role="button"> <a href="services.php">Our Services</a> </button>
                            <button class="button-28" role="button">
                                <a href="contact.php">Contact Us</a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="./images/back-24.jpg" alt="">
                    <div class="swiper-text">
                        <h6> Welcome to Goldstar Insurance Brokers</h6>
                        <h1>Find Your Secured Future In Goldstar Insurance Brokers</h1>

                        <div class="button-div" style="  width: 100%; display: flex; justify-content: left;  align-items: flex-start; left: 0; gap:20px;">
                            <button class="button-28" role="button"> <a href="services.php">Our Services</a> </button>
                            <button class="button-28" role="button">
                                <a href="contact.php">Contact Us</a>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="c-details">
        <div class="company-details" data-aos-duration="1000" data-aos="zoom-in">
            <div class="contact-info">

                <div class="info">
                    <h4>Contact Info:</h4>
                    <p> <i class="fab fa-whatsapp"></i> /<i class="fas fa-phone"></i>
                        020 565 6666
                    </p>





                </div>
            </div>
            <div class="mail-info">
                <h4>Email Address:</h4>
                <p>
                    <i class="far fa-envelope"></i> info@gibrokers.com</a>
                </p>

            </div>
            <div class="open-info">
                <h4>Opening Hours</h4>
                <p><i class="far fa-clock"></i> 9am to 4pm (Monday to Friday)</p>
            </div>
        </div>
    </section>

    <section>
        <div class="about-us row gy-5">
            <div class="col-md-5 about-imgg" data-aos-duration="1000" data-aos="fade-up">
                <img src="images/about.jpg" alt="" style="width: 95%;">
            </div>
            <div class="col-md-7 about-imgg" data-aos="fade-down">
                <h1>About Us</h1>
                <h5>GOLDSTAR INSURANCE BROKERS LTD </h5>
                <p>
                    Goldstar Insurance Brokers Ltd. (Goldstar) was established 
                    in March 2018 as an Indigenous Insurance Broker and Risk Management 
                    Consultancy. We are licensed by the National Insurance Commission, 
                    and we operate as a reliable intermediary between insurance companies
                    and insureds. We have achieved success by delivering tailor-made insurance 
                    products, results-oriented risk management initiatives, and excellent claims 
                    management services for our clients. Over the years, we have offered noteworthy 
                    customer service and sound technical advice to our clients through our highly 
                    experienced, skilled, and dedicated staff, regularly supported by our Board of 
                    Directors, which comprises distinguished personalities drawn from diverse disciplines 
                    and business areas.
                </p>
                <div class="about-btn">
                    <button class="button-86" role="button">Read More...</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="services-home" data-aos-duration="1000" data-aos="fade-right">
            <div class="card">
                <img class="card-img-top" src="images/personal.jpg" alt="personal-insurance" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Personal Insurance</h4>
                    <p class="card-text">Personal insurance provides financial protection for individuals and their families
                        against unexpected events and risks.</p>
                    <button class="button-86" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#personalModal">View Packages</button>
                </div>
            </div>

            <div class="modal fade" id="personalModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contactModalLabel">Personal Insurance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="modal-description"> <i>
                                    <p> Protect your family and your lifestyle with our future forward approach. </p>
                                </i></p>
                            <ul>
                                <li> Motor Insurance</li>
                                <li> Home owners / Apartment/ Condo Insurance</li>
                                <li> Foreign Travel Insurance</li>
                                <li> Personal Acident</li>


                            </ul>
                            <!-- Your contact form goes here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button-86" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/business.jpg" alt="personal-insurance" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Business Insurance</h4>
                    <p class="card-text">Business insurance safeguards companies and their assets by providing financial protection
                        against potential risks and liabilities.</p>
                    <button class="button-86" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#businessModal">View Packages</a></button>
                </div>
            </div>


            <!-- Modal for Business -->
            <div class="modal fade" id="businessModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contactModalLabel">Business Insurance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="modal-description"> <i>
                                    <p>Defend and protect what you have worked hard for. We provide customized insurance products to match your risk exposures. </p>
                                </i></p>
                            <ul>
                                <li> Assets All Risks</li>
                                <li> Bonds</li>
                                <li> Burglary</li>
                                <li>
                                    Business Interruption</li>
                                <li> Contractor’s All Risks or Erection All Risks</li>
                                <li> Directors and Officers Liability</li>
                                <li> Deterioration of Stock</li>
                                <li> Electronic Equipment</li>
                                <li> Fidelity Guarantee</li>
                                <li> Fire and Allied Perils</li>
                                <li>
                                    Goods In Transit</li>
                                <li> Group Personal Accident</li>
                                <li> Marine Breakdown</li>
                                <li> Machinery</li>
                                <li> Money Insurance</li>
                                <li> Commercial Motor / Corporate Motor Insurance</li>
                                <li> Product Liability</li>
                                <li> Proffessional Indemnity</li>
                                <li> Public Liability</li>
                                <li> Plant and Machinery</li>
                                <li> Workmen Compensation / Employers Liability</li>


                            </ul>
                            <!-- Your contact form goes here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button-86" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <img class="card-img-top" src="images/life.jpg" alt="personal-insurance" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Life Insurance</h4>
                    <p class="card-text">Life insurance provides financial security for individuals and their loved ones, meeting
                        obligations after the policyholder's death.</p>
                    <button class="button-86" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lifeModal">View Packages</button>
                </div>
            </div>


            <!--  <!-- life Insurance Modal -->
            <!-- Modal for Business -->
            <div class="modal fade" id="lifeModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contactModalLabel">Life Insurance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="modal-description"> <i>
                                    <p>Plan For your future income security, Funeral Expenses and education expenses and retirement planning. </p>
                                </i></p>
                            <ul>
                                <li>Endowment Policies</li>
                                <li> Child Education Policies</li>
                                <li> Funeral Policies</li>
                                <li> Retirement Planning and Annuities</li>
                                <li> Credit life & Mortgage Protection</li>
                                <li> Keyman Insurance</li>
                                <li> Group Life policies</li>


                            </ul>
                            <!-- Your contact form goes here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button-86" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




            <div class="card">
                <img class="card-img-top" src="images/health.jpg" alt="personal-insurance" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Health Insurance</h4>
                    <p class="card-text">Health insurance covers medical expenses, providing access to quality healthcare and
                        financial protection against high costs.</p>
                    <button class="button-86" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#healthModal">View Packages</button>
                </div>
            </div>

            <div class="modal fade" id="healthModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contactModalLabel">Health Insurance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="modal-description"> <i>
                                    <p> Health insurance covers medical expenses, providing access to quality healthcare and financial protection against high costs. </p>
                                </i></p>
                            <ul>
                                <li> Individual Health Insurance Policy</li>
                                <li> Employee based Health Policy</li>



                            </ul>
                            <!-- Your contact form goes here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button-86" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <img class="card-img-top" src="images/risk.jpg" alt="personal-insurance" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Risk Management</h4>
                    <p class="card-text">Risk identification and analysis
                        lead to accurate measurement of risks and prudent risk financing options. </p>
                    <button class="button-86" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#riskModal">View Packages</button>
                </div>
            </div>


            <div class="modal fade" id="riskModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contactModalLabel">Risk Management</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="modal-description"> <i>
                                    <p>We serve our customers at high standards by keeping our promises. </p>
                                </i></p>
                            <ul>
                                <li> Property loss prevention control</li>
                                <li> Post loss surveys</li>
                                <li> Product liability hazard analysis </li>
                                <li> Employee safety</li>
                                <li> Contingency planning program</li>
                                <li> Business interruption analysis</li>

                            </ul>
                            <!-- Your contact form goes here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="button-86" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>

        <div class=" quote">

            <div class="one">

            </div>
            <div class="one">

                <form class="form quote-forms" data-aos-duration="1000" data-aos="fade-left">
                    <h2 class="text-center">Request a Quote</h2>
                    <p>
                        Request a quote and explore how we can assist you. We strive to respond promptly.
                    </p>
                    <div class="forms-input">
                        <label>Your Name/ Busuiness Name :</label>
                        <br>
                        <input type="text" id="name" placeholder="Enter your name or business name" required>
                    </div>

                    <div class="forms-input">
                        <label>Your Email : </label>
                        <br>
                        <input type="email" id="email" placeholder="Enter your email address" required>
                    </div>

                    <div class="forms-input">
                        <label>Your Phone Number :</label>
                        <br>
                        <input type="number" id="number" min="0" placeholder="Enter your phone  number" required>
                    </div>

                    <div class="forms-input">
                        <label>Your WhatsApp Number :</label>
                        <br>
                        <input type="number" id="w_number" min="0" placeholder="Enter your whatsapp number" required>
                    </div>

                    <div class="claims-submit">
                        <!-- <input type="submit" value="Get a Quote" onclick="sendMail()" data-bs-toggle="modal" data-bs-target="#myModal"> -->

                        <input type="submit" class="submit-btn claims-submit" value="Submit" style="background-color: #242263; color:#FFF; width:100%; padding:10px; border:none; border-radius:5px;">
                        <input type="hidden" class="modal-input" name="" data-bs-toggle="modal" data-bs-target="#myModal">
                        <div class="hidden-note" style="display:none">
                            <small style="display:hidden">couldn't send quote, please check your internet connection and try again</small>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="para"></div> -->
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

    <?php include 'call_to_action.php'; ?>
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