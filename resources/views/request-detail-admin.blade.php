@extends('layouts.master')
@section('title')
{{ __('Overview') }}
@endsection
@section('content')
<!-- INI PAGE DETAIL DARI REQUEST ASSET LIST ADMIN, dari list, di klik cardnya, mengarah ke page ini -->
<x-page-title title="Asset Detail" pagetitle="Asset Detail" />

<div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
    <div class="xl:col-span-4">
        <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="rounded-md bg-slate-100 dark:bg-zink-600">
                        <img src="{{ URL::asset('build/images/product/overview-01.png') }}" alt="Product Image">
                    </div>
                    <div class="flex gap-2 mt-4 shrink-0">
                        <a href="{{ url('edit-asset-admin') }}" type="button" class="bg-white border text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20" style="width:calc(100% - 2px);">
                            <i data-lucide="check" class="inline-block size-5 align-middle ltr:mr-1 rtl:ml-1"></i>
                            <span class="align-middle">Accept</span>
                        </a>
                        <button type="button" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" data-modal-target="deleteModal" style="width:calc(100% - 2px);">
                            <i data-lucide="x" class="inline-block size-5 align-middle ltr:mr-1 rtl:ml-1"></i>
                            <span class="align-middle">Decline</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xl:col-span-8">
        <div class="card">
            <div class="card-body">
                <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-orange-100 border-orange-100 text-orange-500 dark:bg-orange-400/20 dark:border-transparent">
                    Static Asset</span>
                <h5 class="mt-3 mb-1"> Asset Name</h5>
                <div class="mb-4">
                    <p class="mb-1 text-orange-500">Price</p>
                    <h4>Rp 200.000
                    </h4>
                </div>
                <div class="mt-5">
                    <h6 class="mb-3 text-15">Asset Description:</h6>
                    <p class="mb-2 text-slate-500 dark:text-zink-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="mt-5">
                    <h6 class="mb-3 text-15">Details:</h6>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <tbody>
                                <tr>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">
                                        Depreciation Rate</th>
                                    <td class="px-3.5 py-2.5 border-b border-transparent">Rp 50.000/day</td>
                                </tr>
                                <tr>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">
                                        Purchased Date</th>
                                    <td class="px-3.5 py-2.5 border-b border-transparent">10/06/2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<!-- product overview init js-->
<script src="{{ URL::asset('build/js/pages/asset-detail-admin.init.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editButton = document.querySelector('.btn[href="' + '{{ url("edit-asset-admin") }}' + '"]');
        var deleteButton = document.querySelector('button[data-modal-target="deleteModal"]');

        editButton.addEventListener('click', function() {
            window.location.href = '{{ url("edit-asset-admin") }}';
        });

        deleteButton.addEventListener('click', function() {
            var deleteModal = document.getElementById('deleteModal');
            deleteModal.classList.add('show');
        });
    });
</script>
@endpush