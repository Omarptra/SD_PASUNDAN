<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/raport_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/raport_responsive_style.css')}}">
    <title>SD Negeri Pasundan | Raport</title>
</head>

<body>

    <main>
    <h1 id="alert" class="visually-hidden">We recomended to not use a mobile device</h1>
        <div style="border-bottom: 2px solid #61616136;"
            class="header2 d-flex justify-content-between align-items-center mx-5 my-3">
            <div class="header-title">
                <h1>DATA NILAI</h1>
                <p>Lihat nilai tiap semester</p>
            </div>
            <!-- Button trigger modal -->
            <button id="cariBtn" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal">
                Cari Siswa
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-header-title">
                                <h5 class="modal-title" id="exampleModalLabel">Pilih Siswa</h5>
                                <p class="modal-desc">Masukan data diri siswa</p>
                            </div>

                            <button type="button" class="close-btn" data-bs-dismiss="modal"
                                aria-label="Close">x</button>
                        </div>
                        <div class="modal-body form-cari-siswa">
                            <div class="mb-3 form-cari-nama">
                                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-cari form-control" id="namaLengkap"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3 form-cari-nis">
                                <label for="NIS" class="form-label">NIS</label>
                                <input type="text" class="form-cari form-control" id="NIS" placeholder="NIS">
                            </div>
                            <div class="mb-3 form-cari-kelas">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-cari form-control" id="kelas" placeholder="Kelas">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="button" id="confirm" onclick="checkForm()" class="btn btn-success">Cari
                                Siswa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="visually-hidden table raport" id="raport">
            <div class="raport-profile ">
                <div class="profile-items d-flex align-items-center">
                    <div class="raport-profile-text">
                        <h1>NAMA LENGKAP <span class="tab"></span>:<span id="replaceNama"></span>
                        </h1>
                        <h1>NIS<span class="tab1"></span>:<span id="replaceNis"></span></h1>

                        <h1>KELAS<span class="tab2"></span>:<span id="replaceKelas"></span></h1>

                        <h1 class="disabled-title ms-5" id="disabled">Silahkan Pilih Siswa Terlebih Dahulu</h1>

                    </div>
                </div>

                <select class="select-semester select-semester-profile" onchange="semesterCheck2()" id="semesterOption">
                    <option id="selected2" value="0" selected>Pilih semester</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester ...</option>
                </select>

            </div>

            <div class="scroll d-flex justify-content-between mx-5 pe-2" id="raport">
                <div class="d-flex flex-column raport-col col-nomor">
                    <div class="header-table-title">NO</div>
                    <div class="">1</div>
                    <div class="">2</div>
                    <div class="">3</div>
                    <div class="">4</div>
                    <div class="">5</div>
                    <div class="">...</div>
                </div>

                <div class="d-flex flex-column raport-col col-pelajaran">
                    <div class="header-table-title">PELAJARAN</div>
                    <div>
                        <h1>MATEMATIKA</h1>
                        <p>Udin Raharja S.Pd</p>
                    </div>
                    <div>
                        <h1>NAMA PELAJARAN</h1>
                        <p>NAMA PENGAJAR</p>
                    </div>
                    <div>
                        <h1>NAMA PELAJARAN</h1>
                        <p>NAMA PENGAJAR</p>
                    </div>
                    <div>
                        <h1>NAMA PELAJARAN</h1>
                        <p>NAMA PENGAJAR</p>
                    </div>
                    <div>
                        <h1>NAMA PELAJARAN</h1>
                        <p>NAMA PENGAJAR</p>
                    </div>
                    <div>
                        <h1>...</h1>
                        <p>...</p>
                    </div>
                </div>
                <div class="d-flex flex-column  raport-col col-pengetahuan">
                    <div class="header-table-title">PENGETAHUAN</div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div>...</div>
                </div>
                <div class="d-flex flex-column  raport-col col-keterampilan">
                    <div class="header-table-title">KETERAMPILAN</div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div><input min="0" max="100" type="number" placeholder="0"></div>
                    <div>...</div>
                </div>
                <div class="d-flex flex-column raport-col col-sikap">
                    <div class="header-table-title">SIKAP</div>
                    <div><input class="sikap-input" maxlength="1" type="text" placeholder="Sikap"></div>
                    <div><input class="sikap-input" maxlength="1" type="text" placeholder="Sikap"></div>
                    <div><input class="sikap-input" maxlength="1" type="text" placeholder="Sikap"></div>
                    <div><input class="sikap-input" maxlength="1" type="text" placeholder="Sikap"></div>
                    <div><input class="sikap-input" maxlength="1" type="text" placeholder="Sikap"></div>
                    <div>...</div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/raport_app.js')}}">
    </script>

<script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>