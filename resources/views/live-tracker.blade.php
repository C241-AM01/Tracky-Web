@extends('layouts.master')
@section('title')
{{ __('Live Tracker') }}
@endsection
@push('css')
<!-- Leaflet css -->
<link href="{{ URL::asset('build/libs/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css">
<!-- Sweet Alert css-->
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<style>
    .table-wrapper {
        height: calc(80vh - 10rem);
        overflow-y: hidden;
    }

    .table-wrapper thead th {
        position: sticky;
        top: 0;
        background-color: orange;
        z-index: 1;
    }

    .table-wrapper thead th.dark {
        background-color: orange;
    }

    .table-wrapper tbody {
        display: block;
        height: calc(80vh - 12rem);
        /* Adjust height as needed */
        overflow-y: auto;
        /* Enable scrolling on the tbody */
    }

    .table-wrapper thead,
    .table-wrapper tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed;
    }
</style>
@endpush
@section('content')

<x-page-title title="Live Tracker" pagetitle="Maps" />

<div class="grid grid-cols-1 gap-2 xl:grid-cols-2 h-[80vh]">
    <!-- Map Section -->
    <div class="col-span-1 h-full">
        <div class="card h-full">
            <div class="card-body h-full p-0">
                <div id="leaflet-map" class="leaflet-map h-full"></div>
            </div>
        </div>
    </div>

    <!-- Right Section -->
    <div class="col-span-1 flex flex-col h-full gap-0">
        <!-- Cards Section -->
        <div class="grid grid-cols-2 gap-5">
            <!-- Card 1 -->
            <div class="bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:border-orange-500/20 relative overflow-hidden">
                <div class="card-body">
                    <i data-lucide="list-filter" class="absolute top-0 size-32 stroke-1 text-orange-200/50 dark:text-orange-500/20 ltr:-right-10 rtl:-left-10"></i>
                    <div class="flex items-center justify-center size-12 bg-orange-500 rounded-md text-15 text-orange-50">
                        <i data-lucide="Map"></i>
                    </div>
                    <p class="text-slate-500 dark:text-slate-200 mt-4 mb-1">Tracker ID</p>
                    <h5 class="mt-2 text-black text-30 font-semibold">1</h5>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:border-orange-500/20 relative overflow-hidden">
                <div class="card-body">
                    <i data-lucide="list-filter" class="absolute top-0 size-32 stroke-1 text-orange-200/50 dark:text-orange-500/20 ltr:-right-10 rtl:-left-10"></i>
                    <div class="flex items-center justify-center size-12 bg-orange-500 rounded-md text-15 text-orange-50">
                        <i data-lucide="truck"></i>
                    </div>
                    <p class="text-slate-500 dark:text-slate-200 mt-4 mb-1">Asset Name</p>
                    <h5 class="mt-2 text-black text-30 font-semibold">Suzuki Carry Xtra</h5>
                </div>
            </div>
        </div><!--end cards section-->

        <!-- Table Section -->
        <div class="flex-grow table-wrapper">
            <div class="card h-full" id="customerList">
                <div class="card-body h-full p-0">
                    <table class="w-full whitespace-nowrap" id="customerTable">
                        <thead class="bg-slate-100 dark:bg-zink-600">
                            <tr>
                                <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right dark">Timestamp</th>
                                <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right dark">Latitude</th>
                                <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right dark">Longitude</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all">
                            @for ($i = 0; $i < 20; $i++) <tr>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 timestamp text-orange-500">2024-06-11 10:00:{{ $i < 10 ? '0' . $i : $i }}</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 lat">51.507{{ $i }}</td>
                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 long">-0.127{{ $i }}</td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                    <div class="noresult" style="display: none">
                        <div class="text-center p-7">
                            <h5 class="mb-2">Sorry! No Result Found</h5>
                            <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 150+ Orders We did not
                                find any orders for you search.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end table section-->
    </div><!--end right section-->
</div>

@endsection
@push('scripts')
<!-- leaflet plugin -->
<script src="{{ URL::asset('build/libs/leaflet/leaflet.js') }}"></script>
<!-- leaflet map init -->
<script src="{{ URL::asset('build/js/pages/leaflet-map.init.js') }}"></script>
<!-- list js-->
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- listjs init -->
<script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush