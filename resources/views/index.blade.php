@extends('layouts.master')
@section('title')
{{ __('Analytics') }}
@endsection
@section('content')

<x-page-title title="Hello, <Role>" pagetitle="Dashboards" />

<div class="grid grid-cols-12 gap-x-5">
    <div class="order-1 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-orange-100 dark:bg-orange-500/20 card 2xl:col-span-2 group-data-[skin=bordeorange]:border-orange-500/20 relative overflow-hidden">
        <div class="card-body">
            <i data-lucide="kanban" class="absolute top-0 size-32 stroke-1 text-orange-200/50 dark:text-orange-500/20 ltr:-right-10 rtl:-left-10"></i>
            <div class="flex items-center justify-center size-12 bg-orange-500 rounded-md text-15 text-orange-50">
                <i data-lucide="box"></i>
            </div>
            <h5 class="mt-5 mb-2"><span class="counter-value" data-target="500">0</span></h5>
            <p class="text-slate-500 dark:text-slate-200">Assets</p>
        </div>
    </div>
    <div class="order-2 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-orange-100 dark:bg-orange-500/20 card 2xl:col-span-2 group-data-[skin=bordeorange]:border-orange-500/20 relative overflow-hidden">
        <div class="card-body">
            <i data-lucide="list-filter" class="absolute top-0 size-32 stroke-1 text-orange-200/50 dark:text-orange-500/20 ltr:-right-10 rtl:-left-10"></i>
            <div class="flex items-center justify-center size-12 bg-orange-500 rounded-md text-15 text-orange-50">
                <i data-lucide="truck"></i>
            </div>
            <h5 class="mt-5 mb-2"><span class="counter-value" data-target="100">0</span>k</h5>
            <p class="text-slate-500 dark:text-slate-200">Deliveries</p>
        </div>
    </div>
    <div class="order-5 col-span-12 2xl:order-1 card 2xl:row-span-2 2xl:col-span-8">
        <div class="card-body">
            <div class="flex items-center gap-2 mb-3">
                <h6 class="text-15 grow">Ongoing Activity</h6>
                <div class="relative dropdown shrink-0">
                    <span class="ltr:mr-1 rtl:ml-1 text-slate-500 dark:zink-200">Sort by</span>
                    <button type="button" class="px-2 py-1.5 text-xs bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100 dropdown-toggle" id="emailDataDropdown" data-bs-toggle="dropdown">
                        This Yearly <i data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rlt:mr-1"></i>
                    </button>
                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="emailDataDropdown">
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                <div class="xl:col-span-12 products-list">
                    <div class="card products" id="product1">
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/product/img-08.png') }}" alt="">
                                </div>
                                <div class="flex flex-col lg:col-span-4">
                                    <div>
                                        <h5 class="mb-1 text-16"><a href="{{ url('asset-detail-admin') }}">Asset Name</a></h5>
                                        <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                        <p class="mb-1 text-slate-500 dark:text-zink-200">Depreciation Rate: <span class="text-slate-800 dark:text-zink-50">Rp 50.000/day</span></p>
                                    </div>
                                    <div class="flex gap-3 mt-20 shrink-0">
                                        <h6 class="mt-auto ltr:lg:text-right rtl:lg:text-left text-16" style="background-color: rgba(255, 165, 0, 0.1); padding: 2px; border-radius: 5px; display: inline-block; font-size: 12px; text-align: center; width: calc(60%);">
                                            Purchased date: 11/06/2024
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                    <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                        <h6 class="text-16 products-price">Rp 200.000</h6>
                                    </div>
                                    <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 focus:ring focus:ring-orange-100 active:text-white active:bg-orange-600 active:border-orange-600 active:ring active:ring-orange-100 dark:ring-orange-400/20" data-modal-target="qrCodeModal" style="width:calc(100% - 2px);">
                                        <span class="align-middle">Show QR Code</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card products" id="product2">
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/product/img-04.png') }}" alt="">
                                </div>
                                <div class="flex flex-col lg:col-span-4">
                                    <div>
                                        <h5 class="mb-1 text-16"><a href="{{ url('asset-detail-admin') }}">Asset Name</a></h5>
                                        <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                        <p class="mb-1 text-slate-500 dark:text-zink-200">Depreciation Rate: <span class="text-slate-800 dark:text-zink-50">Rp 50.000/day</span></p>
                                    </div>
                                    <div class="flex gap-3 mt-20 shrink-0">
                                        <h6 class="mt-auto ltr:lg:text-right rtl:lg:text-left text-16" style="background-color: rgba(255, 165, 0, 0.1); padding: 2px; border-radius: 5px; display: inline-block; font-size: 12px; text-align: center; width: calc(60%);">
                                            Purchased date: 11/06/2024
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                    <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                        <h6 class="text-16 products-price">Rp 200.000</h6>
                                    </div>
                                    <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 focus:ring focus:ring-orange-100 active:text-white active:bg-orange-600 active:border-orange-600 active:ring active:ring-orange-100 dark:ring-orange-400/20" data-modal-target="qrCodeModal" style="width:calc(100% - 2px);">
                                        <span class="align-middle">Show QR Code</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card products" id="product3">
                        <div class="card-body">
                            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/product/img-01.png') }}" alt="">
                                </div>
                                <div class="flex flex-col lg:col-span-4">
                                    <div>
                                        <h5 class="mb-1 text-16"><a href="{{ url('asset-detail-admin') }}">Asset Name</a></h5>
                                        <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                        <p class="mb-1 text-slate-500 dark:text-zink-200">Depreciation Rate: <span class="text-slate-800 dark:text-zink-50">Rp 50.000/day</span></p>
                                    </div>
                                    <div class="flex gap-3 mt-20 shrink-0">
                                        <h6 class="mt-auto ltr:lg:text-right rtl:lg:text-left text-16" style="background-color: rgba(255, 165, 0, 0.1); padding: 2px; border-radius: 5px; display: inline-block; font-size: 12px; text-align: center; width: calc(60%);">
                                            Purchased date: 11/06/2024
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                    <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                        <h6 class="text-16 products-price">Rp 200.000</h6>
                                    </div>
                                    <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 focus:ring focus:ring-orange-100 active:text-white active:bg-orange-600 active:border-orange-600 active:ring active:ring-orange-100 dark:ring-orange-400/20" data-modal-target="qrCodeModal" style="width:calc(100% - 2px);">
                                        <span class="align-middle">Show QR Code</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- QR Code Modal -->
<div id="qrCodeModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
            <div class="float-right">
                <button data-modal-close="qrCodeModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-orange-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="text-center mb-0">
                <span class="text-lg font-semibold">Asset QR Code</span>
            </div>
            <img src="{{ URL::asset('build/images/qrcode.png') }}" alt="QR Code Image" class="block mx-auto w-80 h-auto">

        </div>
    </div>
</div>

@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var showQrCodeButton = document.querySelector('button[data-modal-target="qrCodeModal"]');
        var qrCodeModal = document.getElementById('qrCodeModal');

        showQrCodeButton.addEventListener('click', function() {
            qrCodeModal.classList.add('show');
        });

        qrCodeModal.querySelector('[data-modal-close="qrCodeModal"]').addEventListener('click', function() {
            qrCodeModal.classList.remove('show');
        });
    });
</script>
@endsection