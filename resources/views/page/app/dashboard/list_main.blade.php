<table class="table table-row-dashed align-middle gs-0 gy-4">
    <thead>
        <tr class="fw-bolder text-muted">
            <th class="min-w-30px" colspan="3"></th>
            <th class="min-w-150px" style="background-color:#2f4678;border-radius: 25px 0px 0px 0px;">PINJAMAN</th>
            <th class="min-w-100px" style="background-color:#2f4678;">HIBAH TERENCANA</th>
            <th class="min-w-150px" style="background-color:#2f4678;">HIBAH LANGSUNG</th>
            <th class="min-w-100px" style="background-color:#2f4678;border-radius: 0px 25px 0px 0px;">TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="3" style="background-color:#d8d8d8;border-radius: 25px 0px 0px 0px;">Jumlah Kegiatan</td>
            <td>{{$pkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$hkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$hlkegiatan_pinjaman}} Kegiatan</td>
            <td>{{$pkegiatan_pinjaman + $hkegiatan_pinjaman + $hlkegiatan_pinjaman}} Kegiatan</td>
        </tr>
        <tr>
            <td class="vertical" rowspan="2" colspan="2" style="background-color:#d8d8d8;">
                <span class="vertical">Nilai Pendanaan</span>
            </td>
            <td style="background-color:#d8d8d8;">Alokasi</td>
            <td>Rp {{number_format($pnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hlnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format(($pnilai_alokasi + $hnilai_alokasi + $hlnilai_alokasi) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td style="background-color:#d8d8d8;">Realisasi</td>
            <td>Rp {{number_format($pnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format($hlnilai_alokasi / 1000000000000,2,',','.')}} Triliun</td>
            <td>Rp {{number_format(($pnilai_alokasi + $hnilai_alokasi + $hlnilai_alokasi) / 1000000000000,2,',','.')}} Triliun</td>
        </tr>
        <tr>
            <td style="background-color:#d8d8d8;"></td>
            <td style="background-color:#d8d8d8;"></td>
            <td style="background-color:#d8d8d8;"></td>
        </tr>
        <tr>
            <td class="vertical" rowspan="2" colspan="2" style="background-color:#d8d8d8;border-radius: 0px 0px 0px 25px;">
                <span class="vertical" style="margin-left:-12px;">{{$title_dipa_pagu}}</span>
            </td>
            <td style="background-color:#d8d8d8;">PAGU</td>
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
            <td style="background-color:#d8d8d8;">Realisasi</td>
            <td>Rp 0 Triliun</td>
            <td>Rp 0 Triliun</td>
            <td> - </td>
            <td>Rp 0 Triliun</td>
        </tr>
    </tbody>
</table>