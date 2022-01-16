<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="min-w-30px" colspan="3"></th>
            <th class="min-w-150px">PINJAMAN</th>
            <th class="min-w-100px">HIBAH TERENCANA</th>
            <th class="min-w-150px">HIBAH LANGSUNG</th>
            <th class="min-w-100px">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="3">Jumlah Kegiatan</td>
            <td>{{$pkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$hkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$hlkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$pkegiatan_pinjaman + $hkegiatan_pinjaman + $hlkegiatan_pinjaman}} Kegiatan</td>
        </tr>
        <tr>
            <td class="vertical" rowspan="2" colspan="2">
                <span class="vertical">Nilai Pendanaan</span>
            </td>
            <td>Alokasi</td>
            <td>Rp {{number_format($pnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hlnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format(($pnilai_alokasi + $hnilai_alokasi + $hlnilai_alokasi) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td>Realisasi</td>
            <td>Rp {{number_format($pnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hlnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format(($pnilai_alokasi + $hnilai_alokasi + $hlnilai_alokasi) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="vertical" rowspan="2" colspan="2">
                <span class="vertical" style="margin-left:-12px;">{{$title_dipa_pagu}}</span>
            </td>
            <td>PAGU</td>
            <td>
                Awal : Rp {{$pagu_asc ? number_format($pagu_asc[0]->dipa_pinjaman / 1000000000000,2,',','.') : 0}} Triliun <br>
                Revisi : Rp {{$pagu_desc ? number_format($pagu_desc[0]->dipa_pinjaman / 1000000000000,2,',','.') : 0}} Triliun
            </td>
            <td>
                Awal : Rp {{$pagu_asc ? number_format($pagu_asc[0]->dipa_hibah / 1000000000000,2,',','.') : 0}} Triliun <br>
                Revisi : Rp {{$pagu_desc ? number_format($pagu_desc[0]->dipa_hibah / 1000000000000,2,',','.') : 0}} Triliun
            </td>
            <td> - </td>
            <td>
                Awal : Rp {{$pagu_asc ? number_format(($pagu_asc[0]->dipa_pinjaman + $pagu_asc[0]->dipa_hibah) / 1000000000000,2,',','.') : 0}} Triliun <br>
                Revisi : Rp {{$pagu_desc ? number_format(($pagu_desc[0]->dipa_pinjaman + $pagu_desc[0]->dipa_hibah) / 1000000000000,2,',','.') : 0}} Triliun
            </td>
        </tr>
        <tr>
            <td>Realisasi</td>
            <td>Rp 0 Triliun</td>
            <td>Rp 0 Triliun</td>
            <td> - </td>
            <td>Rp 0 Triliun</td>
        </tr>
    </tbody>
</table>