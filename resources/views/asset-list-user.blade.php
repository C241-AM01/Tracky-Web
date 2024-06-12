@extends('layouts.master')
@section('title')
{{ __('Shopping Cart') }}
@endsection
@section('content')
 
<x-page-title title="Asset List" pagetitle="Asset List" />

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
                            <h5 class="mb-1 text-16"><a href="{{ url('asset-detail-user') }}">Asset Name</a></h5>
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
                        <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" data-modal-target="deleteModal" style="width:calc(100% - 2px);">
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
                            <h5 class="mb-1 text-16"><a href="{{ url('asset-detail-user') }}">Asset Name</a></h5>
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
                        <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" data-modal-target="deleteModal" style="width:calc(100% - 2px);">
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
                            <h5 class="mb-1 text-16"><a href="{{ url('asset-detail-user') }}">Asset Name</a></h5>
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
                        <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" data-modal-target="deleteModal" style="width:calc(100% - 2px);">
                            <span class="align-middle">Show QR Code</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script src="{{ URL::asset('build/js/pages/apps-ecommerce-cart.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush