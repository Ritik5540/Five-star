<?php include "header.php"; ?>
<section class="breadcrumb_area" 
    style="background: url('img/banner.jpg') no-repeat center center/cover; position: relative;">

    <div class="overlay bg-parallax" 
        style="background: rgba(0,0,0,0.5); position:absolute; top:0; left:0; width:100%; height:100%;">
    </div>

    <div class="container" style="position:relative; z-index:2;">
        <div class="page-cover text-center text-white">
            <h2 class="page-cover-tittle">Photo</h2>
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li><a href="index.php" class="text-white">Home</a></li>
                <li class="active text-warning">Videos Gallery</li>
            </ol>
        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center font-weight-bold mb-5">Video Gallery</h2>

        <div class="row">

            <!-- Video 1 -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0">Hostel Tour</h6>
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/ysz5S6PUM-U"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0">Room Facilities</h6>
                    </div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" controls>
                            <source src="videos/sample.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0">Student Life</h6>
                    </div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/jNQXAC9IVRw"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0">Campus View</h6>
                    </div>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/ScMzIvxBSi4"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0">Mess Facility</h6>
                    </div>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="col-12 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/kXYiU_JCYtU"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0">Events</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include "footer.php"; ?>