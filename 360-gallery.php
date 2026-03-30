<?php include "header.php"; ?>

<style>
    /* GRID GAP FIX */
    .row.g-3 {
        --bs-gutter-x: 20px;
        --bs-gutter-y: 20px;
    }

    /* Gallery Box */
    .gallery-box {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        cursor: pointer;
        background: #fff;
        padding: 6px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .gallery-box img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 8px;
        transition: 0.4s;
    }

    .gallery-box:hover img {
        transform: scale(1.08);
    }

    /* Overlay */
    .overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        border-radius: 12px;
        transition: 0.3s;
    }

    .gallery-box:hover .overlay {
        opacity: 1;
    }

    /* Modal */
    .custom-modal {
        background: rgba(0, 0, 0, 0.95);
    }

    .modal-img {
        max-width: 95%;
        max-height: 90vh;
        object-fit: contain;
        border-radius: 10px;
    }

    /* Close */
    .close-btn {
        position: absolute;
        top: 15px;
        right: 20px;
        background: red;
        color: #fff;
        border: none;
        font-size: 20px;
        padding: 6px 12px;
        border-radius: 50%;
        cursor: pointer;
    }

    /* Nav */
    .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.3);
        border: none;
        font-size: 26px;
        padding: 8px 14px;
        border-radius: 50%;
        cursor: pointer;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    .nav-btn:hover,
    .close-btn:hover {
        background: #007bff;
    }

    /* Mobile */
    @media (max-width: 576px) {
        .row.g-3 {
            --bs-gutter-x: 15px;
            --bs-gutter-y: 15px;
        }

        .gallery-box img {
            height: 180px;
        }

        .modal-img {
            max-height: 70vh;
        }
    }

    /* Tablet */
    @media (min-width: 577px) and (max-width: 991px) {
        .row.g-3 {
            --bs-gutter-x: 18px;
            --bs-gutter-y: 18px;
        }

        .gallery-box img {
            height: 200px;
        }
    }
</style>
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
                <li class="active text-warning">360° Gallery</li>
            </ol>
        </div>
    </div>
</section>
<!-- GALLERY -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Our 360° Gallery</h2>

        <div class="row g-3">

            <!-- 1 -->
            <div class="col-12 col-sm-6">
                <div class="gallery-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1718682297716!6m8!1m7!1sCAoSLEFGMVFpcE1XanctWnJyVXI2TkJEZlF5OFpkV2swdC1OTjg2WTFHVC1IU2hs!2m2!1d23.3612715!2d85.30945140000001!3f90.46584349519253!4f-39.1266558598506!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <!-- 2 -->
            <div class="col-12 col-sm-6">
                <div class="gallery-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1718681901134!6m8!1m7!1sCAoSLEFGMVFpcE9OU2U2ZWhyamF4R0ZLNDJwUEhnLThnem40NWdFU2RTYlNLbl9K!2m2!1d23.3612715!2d85.30945140000001!3f359.88742!4f0!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <!-- 3 -->
            <div class="col-12 col-sm-6">
                <div class="gallery-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1718682181548!6m8!1m7!1sCAoSLEFGMVFpcFBwVTFDT0RoS3Q5RGwtd0xHMlhZMmNEVDc0dFA2bTdDY1Y5Vy1m!2m2!1d23.3612715!2d85.30945140000001!3f193.82240386392067!4f-45.27809383004285!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>

            <!-- 4 -->
            <div class="col-12 col-sm-6">
                <div class="gallery-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1718682217277!6m8!1m7!1sCAoSLEFGMVFpcFB3NTRERUEwbmZhOVJ4ZFdJTDVPWTZSS1JSV2psV2J5bmRBWU9h!2m2!1d23.3612715!2d85.30945140000001!3f118.35476913368217!4f-38.34668418926605!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>

            <!-- 4 -->
            <div class="col-12 col-sm-6">
                <div class="gallery-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1718682243525!6m8!1m7!1sCAoSLEFGMVFpcE1YS2lMSHR6YUpYMlRtcTZXMXFnbFlSNlYzTTZ5YkRHMW4xYmpU!2m2!1d23.3612715!2d85.30945140000001!3f243.57534769358173!4f-22.897451944438586!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <!-- 4 -->
            <div class="col-12 col-sm-6">
                <div class="gallery-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1718682324952!6m8!1m7!1sCAoSLEFGMVFpcE12LUwwRllVMXRvai0wNmF2Y3N6bHFsZmtpRThYUHNicnRzVW81!2m2!1d23.3612715!2d85.30945140000001!3f136.64710731684193!4f-10.027118189566295!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include "footer.php"; ?>