<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS REQUEST FORM</title>
    <link href="{{ asset('css/arcr.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <!--container-->

        <form class="form-group" method="post" action="{{url("submit_mounting")}}">
            {{ csrf_field() }}
            <!--form-->



            <div id="form">
                <!--form-->
                <h1 class="text-white">Access Request Form</h1>
                <h2 class="text-white">Nomor: ARF/001/DCDV/XI/2019</h2>

                <h3 class="text-white">Fill In First</h3>

                <div id="input">
                    <!--input-->
                    <div id="input4">
                        <!--input4-->

                        <label><p style="color:white">Tanggal</p></label>
                        <select id="input-group4" style="background: black;" name="tanggal">
                            {{ $tanggal= 0 }}
                            @for ($tanggal = 0; $tanggal < 32; $tanggal++)
                                <option value="{{ $tanggal }}">{{ $tanggal }}</option>
                            @endfor
                        </select>
                        <label><p style="color:white">Bulan</p></label>
                        <select id="input-group2" style="background: black;" name="bulan">
                            {{ $month= 0 }}
                            @for ($month = 0; $month < 13; $month++)
                                <option value="{{ $month }}">{{ $month }}</option>
                            @endfor
                        </select>
                        <label><p style="color:white">Tahun</p></label>
                        <select id="input-group3" style="background: black;" name="tahun">
                            <option value="0">Year</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>

                        <input type="text" id="input-group" placeholder="Purpose of Work" name="purpose_work">
                            <input type="text" id="input-group" placeholder="Visitor Name" name="visitor_name">
                            <input type="text" id="input-group" placeholder="Visitor Company" name="visitor_company">
                            <input type="text" id="input-group" placeholder="Visitor ID Number" name="visitor_id">
                            <input type="text" id="input-group" placeholder="Visitor Department" name="visitor_department">
                            <input type="number" id="input-group" placeholder="Visitor Phone Number" name="visitor_phone">
                            <input type="text" id="input-group" placeholder="Validity From DD/MM/YY" name="validity">
                            <label><p style="color:white">Waktu Masuk</p></label>
                            <select id="input-group3" style="background: black;" name="time_in">
                                {{ $waktu_in= 0 }}
                                @for ($waktu_in = 0; $waktu_in < 25; $waktu_in++)
                                    <option value="{{ $waktu_in }}">{{ $waktu_in }}</option>
                                @endfor
                            </select>
                            <label><p style="color:white">Waktu Keluar</p></label>
                            <select id="input-group3" style="background: black;" name="time_out">
                                {{ $waktu_out= 0 }}
                                @for ($waktu_out = 0; $waktu_out < 25; $waktu_out++)
                                    <option value="{{ $waktu_out }}">{{ $waktu_out }}</option>
                                @endfor
                            </select>
                    </div>

                    <!--input-->

                    <select id="input-group" style="background: black;" name="lokasi">
                        <option value="">Authorized Entry Area</option>
                        <option value="Server Room">Server Room</option>
                        <option value="MMR 1">MMR 1</option>
                        <option value="MMR 2">MMR 2</option>
                        <option value="UPS Room">UPS Room</option>
                        <option value="Generator Room">Generator Room</option>
                        <option value="Panel Room">Panel Room</option>
                        <option value="Battery Room">Battery Room</option>
                        <option value="FSS Room">FSS Room</option>
                        <option value="Trafo Room">Trafo Room</option>
                        <option value="Office 3rd FL">Office 3rd FL</option>
                        <option value="Office 2nd FL">Office 2nd FL</option>
                        <option value="Parking Lot">Parking Lot</option>
                        <option value="Yard">Yard</option>
                        <option value="Other Lantai 1">Other Lantai 1</option>
                    </select>
                        <select id="input-group" style="background: black;" name="akses">
                    <option value="">Access Type</option>
                    <option value="General Access">General Access</option>
                    <option value="Limited Access">Limited Access</option>
                    <option value="Escorted Access">Escorted Access</option>
                </select>
                </div>
                <!--input4-->

                <div id="form">
                    <!--form-->
                    <h1 class="text-white">Change Request Form</h1>
                    <h2 class="text-white">Nomor: ARF/001/DCDV/XI/2019</h2>

                    <div id="input">
                        <!--input-->
                        <div id="input4">
                            <!--input4-->

                            <input type="text" id="input-group" placeholder="Background and Objective (Jenis Pekerjaan)" name="background_objective">
                            <input type="text" id="input-group" placeholder="Description os Scope of Work (Deskripsikan Pekerjaan)" name="description_work">
                            <input type="text" id="input-group" placeholder="Risk and Service Area Impact (Resiko dan Dampak Area Servis)" name="resiko_dampak">
                            <input type="text" id="input-group" placeholder="Item Operation (Barang yang digunakan)" name="peralatan">
                            <input type="text" id="input-group" placeholder="Detail Execution (Kegiatan)" name="kegiatan">

                        </div>
                        <div id="form">
                            <!--form-->
                            <h1 class="text-white">Consumable Needed</h1>

                            <h3 class="text-white">Equipments</h3>
                            <div id="input">
                                <!--input-->
                                <div id="input4">
                                    <!--input4-->

                                    <select id="input-group4" style="background: black;" name="kabel">
                                        <option value="0">Cable</option>
                                        {{-- <option value="none">Tidak Ada</option> --}}
                                        <option value="UTP">UTP</option>
                                        <option value="Patchcore Multimode LC-LC">Patchcore Multimode LC-LC </option>
                                        <option value="Patchcore Singlemode LC-LC ">Patchcore Singlemode LC-LC </option>
                                        <option value="Patchcore Singlemode LC-FC">Patchcore Singlemode LC-FC </option>



                                    </select>


                                    <select id="input-group2" style="background: black;" name="length">
                                        <option value="0">Length</option>
                                        {{-- <option value="none">Tidak Ada</option> --}}
                                        <option value="50 Meter">50 Meter</option>
                                        <option value="30 Meter">30 Meter</option>
                                        <option value="20 Meter">20 Meter</option>
                                        <option value="15 Mete">15 Meter</option>
                                        <option value="10 Meter">10 Meter</option>
                                        <option value="5 Meter">5 Meter</option>
                                        <option value="3 Meter">3 Meter</option>

                                    </select>
                                        <select id="input-group2" style="background: black;" name="qty">
                                        <option value="0">Qty</option>
                                        {{-- <option value="0">0</option> --}}
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <h6 class="text-white">Pick the area first (Pilih Area)</h6>
                                    <select id="input-group2" style="background: black;" name="area_from">
                                <option value="0">Area</option>
                                <option value="Server Room">Server Room</option>
                                <option value="MMR 1">MMR 1</option>
                                <option value="MMR 2">MMR 2</option>
                                <option value="Staging Room">Staging Room</option>

                            </select>
                            <h6 class="text-white">To</h6>
                            <select id="input-group2" style="background: black;" name="area_to">
                        <option value="0">Area</option>
                        {{-- <option value="none">Tidak Ada</option> --}}
                        <option value="Server Room">Server Room</option>
                        <option value="MMR 1">MMR 1</option>
                        <option value="MMR 2">MMR 2</option>
                        <option value="Staging Room">Staging Room</option>
                            </select>

                            <h6 class="text-white">Pick your Rack (Pilih Rak)</h6>
                            <select id="input-group2" style="background: black;" name="jenis_rack">
                                <option value="open">Open Rack</option>
                                {{-- <option value="none">Tidak Ada</option> --}}
                                <option value="close">Close Rack</option>
                            </select>

                                <h6 class="text-white">From</h6>
                                <select id="input-group2" style="background: black;" name="rack_from">
                                        {{ $rack_from= 0 }}
                                @for ($rack_from = 0; $rack_from < 40; $rack_from++)
                                    <option value="{{ $rack_from }}">{{ $rack_from }}</option>
                                @endfor
                                </select>

                                <h6 class="text-white">To</h6>
                                <select id="input-group2" style="background: black;" name="rack_to">
                                    {{ $rack_to= 0 }}
                            @for ($rack_to = 0; $rack_to < 40; $rack_to++)
                                <option value="{{ $rack_to }}">{{ $rack_to }}</option>
                            @endfor
                                </select>




                                    <h1 class="text-white">Form Keluar Masuk Barang</h1>
                                    <h2 class="text-white">Nomor: FRM-BTS-DCDV-2019-01</h2>

                                    <select id="input-group2" style="background: black;" name="io">
                                            <option value="">In/Out</option>
                                            <option value="masuk">In</option>
                                            <option value="keluar">Out</option>

                                            <input type="text" id="input-group" placeholder="Brand Name (Merek Barang)" name="merk">
                                            <input type="text" id="input-group" placeholder="Material Description (Serial Number)" name="serial">
                                            <input type="text" id="input-group" placeholder="Quantity (Jumlah)" name="jumlah">
                                            <input type="text" id="input-group" placeholder="Remarks (Catatan)" name="remarks">
                                        </select>


                                    <!--input6-->
                                    <button type="submit" class="btn btn-warning text-white">Submit Form</button>
                                    <button type="reset" class="btn btn-primary">Clear Form</button>
                                </div>
                                <!--form-->


        </form>
        <!--form-->

        </div>
        <!--container-->
</body>

</html>
