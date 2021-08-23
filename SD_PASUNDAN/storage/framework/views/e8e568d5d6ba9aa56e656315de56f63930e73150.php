<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/profile_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/profile_responsive_style.css')); ?>">
    <title>SD Negeri Pasundan | Profile</title>
</head>

<body>

    <div class="row container mt-5 pt-3 mx-auto">
        <div class="copy-container col-4">
            <div class="profile-picture row justify-content-center">
                <img src="<?php echo e(asset('assets/photo.svg')); ?>" class="picture" style="padding: 0;" alt="profile-pic">
                <a href="/e_profile_siswa" class="edit-profile-btn btn">EDIT PROFILE</a>
            </div>
        </div>
        <div class="copy-container col-8">
            <div class="bio-section d-flex flex-column gap-4">
                <div class="row-1 d-flex gap-4">
                    <div class="nama-lengkap d-flex flex-column justify-content-center ps-3 ">
                        <h5>NAMA LENGKAP</h5>
                        <h4>Lorem Ipsum</h4>
                    </div>
                    <div class="nip d-flex flex-column justify-content-center ps-3 ">
                        <h5>NIS</h5>
                        <h4>xxxxxxxxxx</h4>
                    </div>
                </div>
                <div class="row-2 d-flex gap-4">
                    <div class="tempat-lahir d-flex flex-column justify-content-center ps-3">
                        <h5>TEMPAT LAHIR</h5>
                        <h4>Bandung</h4>
                    </div>
                    <span class="separator"></span>
                    <div class="tanggal-lahir d-flex flex-column justify-content-center ps-0">
                        <h5>TANGGAL LAHIR</h5>
                        <h4>dd/mm/yyyy</h4>
                    </div>
                </div>
                <div class="row-3 d-flex gap-4">
                    <div class="jenis-kelamin d-flex flex-column justify-content-center ps-3 ">
                        <h5>JENIS KELAMIN</h5>
                        <h4>Pria</h4>
                    </div>
                    <div class="nomor-telepon d-flex flex-column justify-content-center ps-3 ">
                        <h5>NOMOR TELEPON</h5>
                        <h4>xxxx xxxx xxxx</h4>
                    </div>
                </div>
                <div class="row-4">
                    <div class="alamat pt-3 ps-3 ">
                        <h5>ALAMAT</h5>
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nulla debitis quas!
                            Similique id alias voluptas.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\SD_PASUNDAN\resources\views/v_profile_siswa.blade.php ENDPATH**/ ?>