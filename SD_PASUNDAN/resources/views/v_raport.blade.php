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
    <!-- 210mm = 794px  x 297mm = 1123px  -->

    <main>
        <div class="header d-flex justify-content-between align-items-center  mx-5 my-3"
            style="border-bottom: 2px solid #61616136;">
            <div class="header-title">
                <h1>DATA NILAI</h1>
                <p>Lihat nilai tiap semester</p>
            </div>
            <div class="header-dropDownMenu">
                <a href="#" class="visually-hidden print-btn p-0 m-2 text-center text-decoration-none d-inline-block"
                    id="printBtn" onclick="window.print();">Print</a>
                <select class="select-semester" onchange="semesterCheck()" id="semesterOption">
                    <option id="selected" value="0" selected>Pilih semester</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester ...</option>
                </select>
            </div>
        </div>
        <h1 class="disabled-title" id="disabledTitle">Silahkan Pilih Semester Terlebih Dahulu</h1>

        <div class="table visually-hidden raport" id="raport">
            <div class="scroll d-flex justify-content-between mx-5 pe-2 ">
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
                <div class="d-flex flex-column raport-col col-pengetahuan">
                    <div class="header-table-title">PENGETAHUAN</div>
                    <div>100</div>
                    <div>100</div>
                    <div>100</div>
                    <div>100</div>
                    <div>100</div>
                    <div>...</div>
                </div>
                <div class="d-flex flex-column raport-col col-keterampilan">
                    <div class="header-table-title">KETERAMPILAN</div>
                    <div>90</div>
                    <div>90</div>
                    <div>90</div>
                    <div>90</div>
                    <div>90</div>
                    <div>...</div>
                </div>
                <div class="d-flex flex-column raport-col col-sikap">
                    <div class="header-table-title">SIKAP</div>
                    <div>A</div>
                    <div>A</div>
                    <div>A</div>
                    <div>A</div>
                    <div>A</div>
                    <div>...</div>
                </div>
            </div>

        </div>



    </main>

    
    <script src="{{asset('js/raport_app.js')}}"></script>
</body>

</html>