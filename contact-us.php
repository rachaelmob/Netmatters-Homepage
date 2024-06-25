<?php include("inc/header.php"); ?>


<div id="contact-us">



    <div class="breadcrumbs"> 
        <div class="container"> 
            <ul class="crumbs">
                <li>
                    <a href="./index.php">Home</a>
                </li>
                <li>
                    Our Offices
                </li>
            </ul>
        </div>
    </div>

    <div class="section top">

        <div class="page-title">
            <div class="container">
                <h1>Our Offices</h1>
            </div>
        </div>

    </div>

    <div id="offices">

        <div class="container list">
            <div class="row officies-row">
                <div class="address-box cambridge">
                    <div class="image">
                        <a href="#">
                            <img src=".\img\contact-addresses\cambridge.jpg" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">
                                Cambridge Office
                            </a>
                        </h2>
                        <p>
                            Unit 1.31, <br>
                            St John's Innovation Centre,<br>
                            Cowley Road, Milton,<br>
                            Cambridge,<br> CB4 0WS
                        </p>
                        <div class="tel">
                            <a href="" class="text-web">
                                01223 37 57 72
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn btn-web">View More</a>
                        </div>
                    </div>
                </div>

                <div class="address-box wymondham">
                    <div class="image">
                        <a href="#">
                            <img src=".\img\contact-addresses\wymondham.jpg" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">
                                Wymondham Office
                            </a>
                        </h2>
                        <p>
                            Unit 15,  <br>
                            Penfold Drive,<br>
                            Gateway 11 Business Park,<br>
                            Wymondham, Norfolk, <br>NR18 0WZ
                        </p>
                        <div class="tel">
                            <a href="" class="text-web">
                                01603 70 40 20
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn btn-web">View More</a>
                        </div>
                        </div>
                </div>

                <div class="address-box yarmouth">
                    <div class="image">
                        <a href="#">
                            <img src=".\img\contact-addresses\yarmouth.jpg" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">
                                Great Yarmouth Office
                            </a>
                        </h2>
                        <p>
                            Suite F23,<br>
                            Beacon Innovation Centre,<br>
                            Beacon Park, Gorleston,<br>
                            Great Yarmouth, Norfolk,<br> 7RA
                        </p>
                        <div class="tel">
                            <a href="" class="text-web">
                                01493 60 32 04
                            </a>
                        </div>
                        <div class="view-more">
                            <a href="#" class="btn btn-web">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="section bottom container">

        <div class="row">

            <div class="contact-net">
                <p><strong>Email us on:</strong><br></p>
                <p><a href="mailto:sales@netmatters.com" class="h3 text-web">sales@netmatters.com</a></p>
                <p><strong>Business hours:</strong></p>
                <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
            </div>
            <div class="out-of-hours">
                <div class="question out-of-hours">
                    <h4>
                        Out of Hours IT Support 
                        <i class="fa-solid fa-angle-down"></i>
                    </h4>

                    <!-- <div class="answer-hours">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                        <p>
                            <strong>Monday - Friday 18:00 - 22:00</strong>
                            <strong>Saturday 08:00 - 16:00</strong><br>
                            <strong>Sunday 10:00 - 18:00</strong>
                        </p>
                        <p>To log a critical task, you will need to call our main line number and select Option 2 
                            to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number 
                            provided within 45 minutes of your call.&nbsp;
                        </p>
                    </div> -->
                </div>



            </div>

            <div class="form-container">

                <form action="inc/contact-form.php" method="POST" id="contact-form">
                    <div class="row">
                        <div class="form-group col">
                            <label for="users_name" class="required">Your Name</label>
                            <input class="form-control" type="text" name="user-name" id="users_name">
                        </div>
                        <div class="form-group col">
                            <label for="company_name">Company Name</label>
                            <input class="form-control" type="text" name="company" id="company_name">
                        </div>
                        <div class="form-group col">
                            <label for="email" class="required">Your Email</label>
                            <input class="form-control" type="email" name="user-email" value="" id="email">
                        </div>
                        <div class="form-group col">
                            <label for="telephone" class="required">Your Telephone Number</label>
                            <input class="form-control" type="text" name="user-tel" value="" id="telephone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="required">Message</label>
                        <textarea class="form-control" name="user-message" cols="50" rows="10" id="message">
                            Hi, I am interested in discussing a Our Offices solution, could you please 
                            give me a call or send an email?
                        </textarea>
                    </div>

                    <!-- copy checkbox from index-->
                    <div class="form-group">
                        <label class="pretty-checkbox" for="input_checkbox"> <!-- CHECK BOX LABEL -->
                            <input type="checkbox" class="checkbox_input" id="input_checkbox"
                            name="marketing-pref" required>
                            <span class="fake-checkbox"></span>
                            <span class="check-text"> <!-- NEWS-CHECKBOX TEXT-->
                                Please tick this box if you wish to receive marketing information from us. 
                                Please see our
                                <a href="#" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                                for more information on how we keep your data safe.
                            </span> 
                        </label>
                    </div>

                    <div class="captcha">
                        <span>
                            This site is protected by reCAPTCHA and the Google 
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <u>Privacy Policy</u>
                            </a> and 
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <u>Terms of Service</u>
                            </a> apply.
                        </span>
                    </div>

                    <div class="action-block">
                        <button class="btn btn-primary">
                            Send Enquiry
                        </button>

                        <small class="helper-text">
                            <span class="text-danger">*</span> 
                            Fields Required
                        </small>
                    </div>

                </form>

            </div>

        </div>


    </div>



</div>



<?php include("inc/footer.php"); ?>