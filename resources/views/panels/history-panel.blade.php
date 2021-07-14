@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

<div class="card">
    <div class="card-header @role('admin', true) bg-secondary text-white @endrole">
        Riwayat
    </div>
    <div class="card-body">
    <table class="table table-sm table-striped data-table">
        <thead class="thead">
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Kendaraan</th>
                <th scope="col">Status</th>
                <th class="no-search no-sort">&nbsp;</th>
            </tr>
        </thead>
        <tbody class="blocked-table-body">
            <tr>
                <td>12 Juli 2021</td>
                <td>B 1221 TJH</td>
                <td>Berlangsung</td>
                <td>
                    <a href="/blocker/1" data-toggle="tooltip" title="" class="btn btn-sm btn-info btn-block text-white" data-original-title="Show Blocked Item">
                        <span class="hidden-xs hidden-sm">Detail</span><i aria-hidden="true" class="fa fa-eye fa-fw"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>20 Mei 2021</td>
                <td>B 1221 TJH</td>
                <td>Selesai</td>
                <td>
                    <a href="/blocker/1" data-toggle="tooltip" title="" class="btn btn-sm btn-info btn-block text-white" data-original-title="Show Blocked Item">
                        <span class="hidden-xs hidden-sm">Detail</span><i aria-hidden="true" class="fa fa-eye fa-fw"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>17 April 2021</td>
                <td>B 3271 TUP</td>
                <td>Selesai</td>
                <td>
                    <a href="/blocker/1" data-toggle="tooltip" title="" class="btn btn-sm btn-info btn-block text-white" data-original-title="Show Blocked Item">
                        <span class="hidden-xs hidden-sm">Detail</span><i aria-hidden="true" class="fa fa-eye fa-fw"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>10 Maret 2021</td>
                <td>B 1221 TJH</td>
                <td>Selesai</td>
                <td>
                    <a href="/blocker/1" data-toggle="tooltip" title="" class="btn btn-sm btn-info btn-block text-white" data-original-title="Show Blocked Item">
                        <span class="hidden-xs hidden-sm">Detail</span><i aria-hidden="true" class="fa fa-eye fa-fw"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2 Januari 2021</td>
                <td>B 1221 TJH</td>
                <td>Selesai</td>
                <td>
                    <a href="/blocker/1" data-toggle="tooltip" title="" class="btn btn-sm btn-info btn-block text-white" data-original-title="Show Blocked Item">
                        <span class="hidden-xs hidden-sm">Detail</span><i aria-hidden="true" class="fa fa-eye fa-fw"></i>
                    </a>
                </td>
            </tr>
        </tbody> 
        <tbody id="search_results"></tbody>
    </table>
    </div>
</div>
