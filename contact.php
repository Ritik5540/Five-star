<?php include "header.php"; ?>

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area" 
    style="background: url('img/banner.jpg') no-repeat center center/cover; position: relative;">

    <div class="overlay" 
        style="background: rgba(0,0,0,0.5); position:absolute; top:0; left:0; width:100%; height:100%;">
    </div>

    <div class="container" style="position:relative; z-index:2;">
        <div class="page-cover text-center text-white">
            <h2 class="page-cover-tittle">Contact Us</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li><a href="index.php" class="text-white">Home</a></li>
                <li class="active text-warning">Harmu Housing Colony, Ranchi</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">

        <!-- 🔥 Google Map -->
        <div class="mb-5">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe 
                    class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3371.80218503431!2d85.30579647532409!3d23.362103478937243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDIxJzQzLjYiTiA4NcKwMTgnMzAuMSJF!5e1!3m2!1sen!2sin!4v1774399973808!5m2!1sen!2sin"
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="">
                </iframe>
            </div>
        </div>

        <div class="row">

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <div class="contact_info">

                    <div class="info_item mb-3">
                        <i class="lnr lnr-home"></i>
                        <h6>HI -279 , KARTHIK ORAON CHOWK, HARMU COLONY RANCHI -834002,</h6>
                        <p>Jharkhand, India</p>
                    </div>

                    <div class="info_item mb-3">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="tel:+917369084701">+91 7369084701</a></h6>
                        <h6><a href="tel:+919508806494">+91 9508806494</a></h6>
                        <h6><a href="tel:+919233151594">+91 9233151594</a></h6>
                        <h6><a href="tel:+917488410234">+91 7488410234</a></h6>
                        <p>Mon to Sun 9am to 6 pm</p>
                    </div>

                    <!-- <div class="info_item mb-3">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div> -->

                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
                <form class="row contact_form" action="#" method="post">

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                         <div class="form-group">
                            <input type="number" class="form-control" name="name" placeholder="Enter your Phone Number" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Enter Message" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">
                            Send Message
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<!--================Contact Area =================-->

<?php include "footer.php"; ?>