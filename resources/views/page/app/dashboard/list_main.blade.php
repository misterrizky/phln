<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="min-w-30px"></th>
            <th class="min-w-150px">PINJAMAN</th>
            <th class="min-w-100px">HIBAH TERENCANA</th>
            <th class="min-w-150px">HIBAH LANGSUNG</th>
            <th class="min-w-100px text-end">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jumlah Kegiatan</td>
            <td>{{$pkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$hkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$hlkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$pkegiatan_pinjaman + $hkegiatan_pinjaman + $hlkegiatan_pinjaman}} Kegiatan</td>
        </tr>
        <tr>
            <td>Nilai Alokasi</td>
            <td>Rp {{number_format($pnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hlnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format(($pnilai_alokasi + $hnilai_alokasi + $hlnilai_alokasi) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td>Nilai Realisasi</td>
            <td>Rp {{number_format($pnilai_penyerapan / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hnilai_penyerapan / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hlnilai_penyerapan / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format(($pnilai_penyerapan + $hnilai_penyerapan + $hlnilai_penyerapan) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td>{{$title_dipa_pagu}}</td>
            <td>Rp {{number_format($ppagu[0]->target / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hpagu[0]->target / 1000000000000,2,',','.')}} Triliun</td>
            <td> - </td>
            <td>Rp {{number_format(($ppagu[0]->target + $hpagu[0]->target) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td>{{$title_dipa_realisasi}}</td>
            <td>Rp {{number_format($ppagu[0]->real / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hpagu[0]->real / 1000000000000,2,',','.')}} Triliun</td>
            <td> - </td>
            <td>Rp {{number_format(($ppagu[0]->real + $hpagu[0]->real) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
    </tbody>
</table>