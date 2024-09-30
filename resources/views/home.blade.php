@extends('layouts.auth.app')
@section('content')
<br>
    <div class="row"> {{-- start row --}}
        <div class="col-xl-6 col-lg-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-180">
                    <h5 class="text-muted danger position-absolute p-1" align = 'center'>Tujuan StuntingAware</h5>
                    <div>
                        <i class="la la-user danger font-large-1 float-right p-1"></i>
                    </div>
                    <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                        <br>
                        <div class="container">
                            Memberikan tempat bagi Anda untuk mendapatkan konsultasi dari para ahli gizi dan tenaga medis yang berpengalaman dalam hal stunting. Melalui informasi, edukasi, dan saran yang diberikan di sini, kami berharap dapat membantu Anda dalam:
                            <p class="pera-bottom mb-30">1. Memahami apa itu stunting, penyebabnya, dan dampaknya pada pertumbuhan anak,
                                <br>2. Mendeteksi dini tanda-tanda stunting pada anak, sehingga intervensi dapat dilakukan lebih awal,
                                <br>3. Memahami pentingnya nutrisi yang seimbang dan makanan bergizi untuk mencegah stunting,
                                <br>4. Mendapatkan konsultasi online dengan para ahli untuk pertanyaan dan kekhawatiran yang Anda miliki,
                                <br>5. Mendapatkan panduan dan program untuk mencegah dan mengatasi stunting pada anak-anak.
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-180">
                    <h5 class="text-muted info position-absolute p-1">Jam Digital</h5>
                    <br>
                    <div>
                        <i class="la la-clock-o info font-large-1 float-right p-1"></i>
                    </div>
                    <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                        <div class="container">
                            <h2 id="jam" style="font-size:24"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- end row --}}
    
    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>
@endsection