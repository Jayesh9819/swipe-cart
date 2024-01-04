<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-image">
                                <img src="../assets/images/inner-page/contact-us.png" class="img-fluid blur-up lazyloaded" alt="">
                            </div>
                        </div>
                        <?php

                        include './App/Logic/db_connect.php';
                        $sql = "SELECT * FROM settings";
                        $result = $conn->query($sql);
                        global $site;
                        $site = $result->fetch_assoc();


                        ?>

                        <div class="col-xl-12">
                            <div class="contact-title">
                                <h3>Get In Touch</h3>
                            </div>

                            <div class="contact-detail">
                                <div class="row g-4">
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Phone</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $site['contact-no']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Email</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $site['email-id']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4><?php echo $site['Area']; ?></h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p><?php echo $site['location']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-building"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4><?php echo $site['company-name']; ?></h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="title d-xxl-none d-block">
                    <h2>Contact Us</h2>
                </div>
                <form action="../App/Logic/contact.php?action=send_email" method="post">
                    <div class="right-sidebar-box">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput" class="form-label">First Name</label>
                                    <div class="custom-input">
                                        <input type="text" name="Firstname" class="form-control" id="exampleFormControlInput" placeholder="Enter First Name">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                    <div class="custom-input">
                                        <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Last Name">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput2" class="form-label">Email Address</label>
                                    <div class="custom-input">
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter Email Address">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput3" class="form-label">Phone Number</label>
                                    <div class="custom-input">
                                        <input type="tel" name="mobile" class="form-control" id="exampleFormControlInput3" placeholder="Enter Your Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlTextarea" class="form-label">Message</label>
                                    <div class="custom-textarea">
                                        <textarea class="form-control" name="msg" id="exampleFormControlTextarea" placeholder="Enter Your Message" rows="6"></textarea>
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="to" value="<?php echo $site['email-id']; ?>" hidden>
                        </div>
                        <button class="btn btn-animation btn-md fw-bold ms-auto" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>