<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/profile_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/profile_responsive_style.css')); ?>">
    <title>SD Negeri Pasundan | Edit Profile</title>
</head>

<body>
    <header class="mx-5 my-3 pb-3 d-flex align-items-center justify-content-between">
        <div class="header-text">
            <h3 class="main-title">Edit your profile</h3>
            <h3 class="sub-title">Edit your fullname, email, telephone number, etc.</h3>
        </div>
        <div class="header-btn">
            <a class="btn save-btn" href="/v_profile_guru">Save Change</a>
            <a class="btn discard-btn" href="/v_profile_guru">Discard Change</a>
        </div>
    </header>
    <div class="row container mt-5 pt-3 mx-auto">
        <div class="copy-container col-4">
            <div class="profile-picture row justify-content-center">
                <img src="<?php echo e(asset('assets/photo.svg')); ?>" class="picture" style="padding: 0;" alt="profile-pic">
                <a href="#" class="edit-profile-btn profile-btn upload-btn btn">UPLOAD
                    NEW</a>
                <a href="#" class="edit-profile-btn profile-btn delete-btn btn">DELETE</a>
            </div>
        </div>
        <div class="copy-container col-8">
            <div class="bio-section d-flex flex-column gap-4">
                <div class="row-1 d-flex gap-4">
                    <div class="nama-lengkap d-flex flex-column justify-content-center ps-3 ">
                        <div class="mb-3 form-input">
                            <label for="namaLengkap" class="form-label">NAMA LENGKAP</label>
                            <input type="text" class="form form-control" id="namaLengkap" placeholder="Nama Lengkap"
                                onchange="change()">
                        </div>
                    </div>
                    <div class="nip d-flex flex-column justify-content-center ps-3 ">
                        <div class="mb-3 form-input">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form form-control" id="nip" placeholder="NIP">
                        </div>
                    </div>
                </div>
                <div class="row-2 d-flex gap-4">
                    <div class="tempat-lahir d-flex flex-column justify-content-center ps-3">
                        <div class="mb-3 form-input">
                            <label for="tempatLahir" class="form-label">TEMPAT LAHIR</label>
                            <input type="text" class="form form-control" id="tempatLahir" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <span class="separator"></span>
                    <div class="tanggal-lahir d-flex flex-column justify-content-center ps-0">
                        <div class="mb-3 form-input pe-3 fixed">
                            <label for="nomorTelepon" class="form-label mt-2">TANGGAL LAHIR</label>
                            <input type="date" class="form form-control pb-2" id="nomorTelepon"
                                placeholder="Nomor Telepon">
                        </div>
                    </div>
                </div>
                <div class="row-3 d-flex gap-4">
                    <div class="jenis-kelamin d-flex flex-column justify-content-center ps-3 ">
                        <div class="mb-3 form-input test-style">
                            <label class="mt-1" for="jenisKelamin">JENIS KELAMIN</label>
                            <select class="form form-select pt-2" id="jenisKelamin" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="nomor-telepon d-flex flex-column justify-content-center ps-3 ">
                        <div class="mb-3 form-input">
                            <label for="nomorTelepon" class="form-label">NOMOR TELEPON</label>
                            <input type="text" class="form form-control" id="nomorTelepon" placeholder="Nomor Telepon">
                        </div>
                    </div>
                </div>
                <div class="row-4 d-flex gap-4">
                    <div class="email d-flex flex-column justify-content-center ps-3 ">
                        <div class="mb-3 form-input">
                            <label for="eamil" class="form-label">EMAIL</label>
                            <input type="email" class="form form-control" id="eamil" placeholder="Email">
                        </div>
                    </div>
                    <div class="mata-pelajaran d-flex flex-column justify-content-center ps-3">
                        <div class="mb-3 form-input">
                            <label class="mt-1" for="mataPelajaran">MATA PELAJARAN</label>
                            <select class="form form-select pt-2" id="mataPelajaran"
                                aria-label="Default select example">
                                <option selected>Pilih Mata Pelajaran</option>
                                <option value="1">Matematika</option>
                                <option value="2">Agama</option>
                                <option value="3">. . .</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="row-5 position-relative">
                    <div class="alamat pt-3 ps-3">
                        <div class="mb-3 form-input">
                            <label for="alamat" class="form-label">ALAMAT</label>
                            <textarea class="form form-control me-2" id="alamat" rows="3" placeholder="Masukan Alamat"
                                maxlength="250" onkeydown="letterCounterFunc2()"
                                onkeyup="letterCounterFunc()"></textarea>
                            <p class="position-absolute bottom-0 end-0 pe-3"><span id="counter">0</span> / 250</p>
                        </div>
                    </div>
                </div>
                <div class="footer-btn d-flex justify-content-around">
                    <a class="btn footer-btn save-btn" href="../../views/v_guru.html">Save Change</a>
                    <a class="btn footer-btn discard-btn " href="../../views/v_guru.html">Discard Change</a>
                </div>
            </div>
        </div>

</body>
<script src="<?php echo e(asset('js/profile_app.js')); ?>"></script>

</html><?php /**PATH C:\xampp\htdocs\SD_PASUNDAN\resources\views/e_profile_guru.blade.php ENDPATH**/ ?>