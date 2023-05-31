<!doctype html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>Our Mission & Vision - Goldstar Insurance Brokers Ltd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="our_board.css">
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
        <h1 class="text-center">Our Board of Directions</h1>

        <div class="profile">
            <div class="profile-img">

            </div>
            <div class="profile-text">
                <h4>Chairman</h4>
                <p>
                    Mr. Benjamin Kweku Acolatse is a Lawyer, Chartered Accountant, Chartered Management
                    Consultant and a Computer Systems Analyst. He holds a Master of Laws (LL.M.) from the
                    University of London in the United Kingdom, Post Graduate Diploma in Industrial
                    Management, Bachelor of Science in Computer Science, Bachelor of Laws (LL.B.) from the
                    Kwame Nkrumah University of Science & Technology in Ghana, among others.
                    <br>
                    Benjamin has over twenty four (24) years of experience in administration having worked
                    in the Fast Moving Consumer Goods (FMCG) sector, Automobile industry and partly as a
                    Legal Practitioner. He is a Managing Partner of BE Law Consult, Kumasi in Ghana.
                    <br>
                    He is the current DCE, Finance and Administration at Ghana National Petroleum Corporation
                    (GNPC). Previously he held the position of Deputy Chief Executive Officer
                    (General Services) at the Ghana Railway Development Authority. Benjamin is a member of
                    several Boards of reputable companies in Ghana, an adjunct Lecturer in Law of Contract
                    at the Ghana Institute of Management and Public Administration (GIMPA), an Examiner in
                    Business and Corporate Law at the Institute of Chartered Accountants of Ghana (ICA) and
                    an Examiner in Management Information Systems and Law at the Chartered Institute of
                    Administrators and Management Consultants, Ghana (CIAMC).
                    <br>
                    Benjamin is a member of Chartered Institute of Administrators and Management Consultants,
                    Ghana (CIAMC), Association of Chartered Certified Accountants, UK (ACCA), Institute of
                    Chartered Accountants, Ghana (ICA), Ghana Bar Association (GBA), International Bar
                    Association (IBA) and Institute of Human Resource Management Practitioners, Ghana
                    (IHRMP). He is a Fellow of Chartered Institute of Leadership and Governance, Ghana
                    (CILG).

                </p>

            </div>
        </div>

        <div class="profile">
            <div class="profile-text">
                <h4>Non Executive Director</h4>
                <p>
                    Emmanuel Osei-Bonsu is a software development consultant who specializes in computerized
                    accounting systems. He is the Chief Operating officer of Galaxy Business Solutions.
                    <br>
                    Mr. Osei-Bonsu is a Chartered Accountant (ICAG), and holds an MBA in Finance, from the
                    Kwame Nkrumah University of Science and Technology, School of Business-Ghana, a
                    Bachelor’s degree in Commerce, from the University of Cape Coast-Ghana, a certificate
                    in computerized Accounting Systems from Ghana Institute of Management and Public
                    Administration-Ghana. He has also complimented his practicing skills in finance and
                    investment by successfully completing the Ghana Stock Exchange Securities (GSE) Course.
                    <br>
                    Mr. Osei-Bonsu is highly proficient in developing Financial Models and has about eight
                    industrial models that are currently in active use in various organizations. These
                    include B-TRACKER (Investment monitoring model), eRegister (fixed deposit model), TAXIM
                    (payroll model), e-square (credit management model), CLAZBOK (record keeping models),
                    QuickB (bonus automated model), and other comprehensive Budget and Credit Management
                    Models.
                    <br>
                    Mr. Osei-Bonsu has currently specialized in Treasury and Financial Risk Management: a
                    course under the certification of the Institute of Chartered Accountants, Ghana. The
                    Institute awarded Post Chartered Diploma Certification in Treasury and Financial Risk
                    Management to him in November 2017. This has further solidified his knowledge in modern
                    best practice in Modeling and Financial Risk Management.
                </p>
            </div>
            <div class="profile-img">

            </div>
        </div>

        <div class="profile" style="margin-bottom: 50px;">
            <div class="profile-img ceo">

            </div>
            <div class="profile-text">
                <h4>Our C.E.O</h4>
                <p>
                    Nana Dufie Amakye Ansah is an Associate of the Chartered Insurance Institute (ACII),
                    U.K., and an Associate of Chartered Insurance Institute of Ghana, (ACIIG), with over
                    15 years’ experience in the Insurance industry both in Ghana and the United States of
                    America. She has previously worked as a Marketing Manager with Glico General Insurance
                    Company. Prior to her relocation to Ghana, she worked as a Risk Financing consultant
                    with responsibility for surety programs, fronting programs and the foreign Directors
                    and Officers Liability program for Wells Fargo & Company, a fortune 100 company based
                    in the U.S.A. She also worked as an Insurance auditor with responsibility for the review
                    and placement of property and casualty policies for syndicated loans issued by Wells
                    Fargo. 
                    <br>
                    <br>
                    Mrs. Amakye Ansah holds an MBA from Metropolitan State University, Minneapolis, Minnesota.
                    She has also taken part in numerous training programs both locally and internationally.
                    She has attended a number of technical, management training programs and seminars to upgrade
                    her technical, managerial and entrepreneurial skills.
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