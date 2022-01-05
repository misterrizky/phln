<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kegiatan {{date('Y')}}</title>
    <link href="{{asset('keenthemes/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('keenthemes/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('keenthemes/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <h3>
        PEMANTAUAN PINJAMAN DAN HIBAH LUAR NEGERI TAHUN ANGGARAN {{date('Y')}}
        <br> DITJEN CIPTA KARYA
    </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="background-color: #203765; color:#FFF;" rowspan="2">No</th>
                <th style="background-color: #203765; color:#FFF;" rowspan="2">Nomor Register</th>
                <th style="background-color: #203765; color:#FFF;" rowspan="2">Nama Kegiatan | Nomor Lona / Grant | Cara Pembayaran</th>
                <th style="background-color: #203765; color:#FFF;" colspan="2">Elapse Time Ratio</th>
                <th style="background-color: #203765; color:#FFF;" colspan="3">Disbursement Ratio</th>
                <th style="background-color: #203765; color:#FFF;" rowspan="2">Progress Variant</th>
                <th style="background-color: #203765; color:#FFF;" rowspan="2">Kategori Penyerapan</th>
            </tr>
            <tr>
                <th style="background-color: #203765; color:#FFF;">Efektif & Closing</th>
                <th style="background-color: #203765; color:#FFF;">(%)</th>
                <th style="background-color: #203765; color:#FFF;" colspan="2">Alokasi & Penyerapan</th>
                <th style="background-color: #203765; color:#FFF;">(%)</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            $color = '';
            $metode = '';
            @endphp
            @foreach($kegiatan as $s)
                @if ($s != null)
                <tr>
                    <td style="background-color:#d9e1f3;" colspan="10">{{$s->sektor['nama']}}</td>
                </tr>
                @php
                $kegiatann = \App\Models\Kegiatan::where('sektor_id',$s->sektor_id)->get();
                @endphp
                @foreach($kegiatann AS $k)
                @php
                if($k->st == "At Risk"){
                    $color = '#ed2024';
                }elseif($st == "Behind Schedule"){
                    $color = '#f6eb14';
                }else{
                    $color = '#00b04f';
                }
                if($k->metode_pembayaran == "1"){
                    $metode = 'PP';
                }elseif($k->metode_pembayaran == "2"){
                    $metode = 'PL';
                }elseif($k->metode_pembayaran == "3"){
                    $metode = 'LC';
                }elseif($k->metode_pembayaran == "4"){
                    $metode = 'RK';
                }
                @endphp
                <tr>
                    <td style="font-size:10px;">{{$no++}}</td>
                    <td style="font-size:10px;">{{$k->kode_register}}</td>
                    <td style="font-size:10px;">
                        {{$k->judul}} <br>
                        <span style="color:#983620;">{{$k->no_loan}} | {{$metode}}</span>
                    </td>
                    <td style="text-align:right;font-size:10px;">{{$k->tanggal_efektif->isoFormat('D MMM YY')}} <br> {{$k->tanggal_closing->isoFormat('D MMM YY')}}</td>
                    <td style="text-align: center;font-size:10px;">{{number_format($k->etr,2,',','.')}} %</td>
                    <td style="text-align: center;font-size:10px;">
                        {{$k->mata_uang->kode}}
                        <br>
                        @if($k->mata_uang_2_id)
                        {{$k->mata_uang_2->kode}}
                        @endif</td>
                    <td style="text-align:right;font-size:10px;">{{number_format($k->nilai_konversi?:0,2,',','.')}} <br> {{number_format($k->penyerapan ?:0,2,',','.')}}</td>
                    <td style="text-align: center;font-size:10px;">@if ($k->nilai_konversi != NULL AND $k->nilai_konversi != 0 AND $k->penyerapan != NULL AND $k->penyerapan != 0) {{number_format($k->nilai_konversi/$k->penyerapan * 100,2,',','.')}} @else 0 @endif%</td>
                    <td style="text-align: center;font-size:10px;">{{number_format($k->pv,2,',','.')}}</td>
                    <td style="text-align: center;font-size:10px;background-color:{{$color}}">{{$k->st}}</td>
                </tr>
                @endforeach
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>