@extends('layouts.master')
@section('title')
{{ __('Add New') }}
@endsection
@section('content')
 
<x-page-title title="Edit Asset" pagetitle="Products" />

<div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
    <div class="xl:col-span-12">
        <div class="card">
            <div class="card-body">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Asset Name
                            </label>
                            <input type="text" id="productNameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Product title" required>
                        </div>
                        <div class="lg:col-span-2 xl:col-span-12">
                            <div>
                                <label for="productDescription" class="inline-block mb-2 text-base font-medium">Description</label>
                                <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productDescription" placeholder="Enter Description" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Price
                            </label>
                            <input type="text" id="productNameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Product title" required>
                        </div>
                        <div class="xl:col-span-6">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Depreciation
                            </label>
                            <input type="text" id="productNameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Product title" required>
                        </div>
                        <div class="xl:col-span-6">
                            <label for="productTypeSelect" class="inline-block mb-2 text-base font-medium">Duration</label>
                            <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false name="productTypeSelect" id="productTypeSelect">
                                <option value="Per day">Per day</option>
                                <option value="Per day">Per week</option>
                                <option value="Per day">Per month</option>
                                <option value="Per day">Per year</option>
                            </select>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="publishDateTime" class="inline-block mb-2 text-base font-medium">Purchased Date
                                & Time</label>
                            <input type="number" id="publishDateTime" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date & time" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time required>
                        </div>
                        <div class="lg:col-span-2 xl:col-span-12">
                            <div>
                                <label for="productDescription" class="inline-block mb-2 text-base font-medium">Reason to Edit Detail</label>
                                <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productDescription" placeholder="Enter Reason" rows="5"></textarea>
                            </div>
                        </div>
                </form>
            </div>
            <div class="card-body">
                <div class="flex gap-2 mt-4">
                    <button type="button" class="w-full text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 focus:ring focus:ring-orange-100 active:text-white active:bg-orange-600 active:border-orange-600 active:ring active:ring-orange-100 dark:ring-orange-400/10">Request</button>
                </div>
            </div>
        </div>
    </div>
    <div class="xl:col-span-3">
        <div class="card sticky top-[calc(theme('spacing.header')_*_1.3)]">
        </div>
    </div>
</div>

@endsection
@push('scripts')
<!-- dropzone -->
<script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
<!--product create init js-->
<script src="{{ URL::asset('build/js/pages/edit-asset-admin.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush