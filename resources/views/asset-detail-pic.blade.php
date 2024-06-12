@extends('layouts.master')
@section('title')
{{ __('Overview') }}
@endsection
@section('content')
 
<x-page-title title="Asset Detail" pagetitle="Asset Detail" />

<div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
    <div class="xl:col-span-4">
        <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="rounded-md bg-slate-100 dark:bg-zink-600">
                        <img src="{{ URL::asset('build/images/product/overview-01.png') }}" alt="Product Image">
                    </div>
                    <div class="flex mt-4 shrink-0">
                        <button type="button" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" data-modal-target="qrCodeModal" style="width:calc(100% - 2px);">
                            <span class="align-middle">Show QR Code</span>
                        </button>
                    </div>
                    <div class="flex mt-4 shrink-0">
                        <a href="{{ url('live-tracker') }}" class="text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" style="width:calc(100% - 2px);">
                            <span class="align-middle">Open Live Track</span>
                        </a>
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
                    <div class="flex gap-2 mt-4 shrink-0">
                        <a href="{{ url('edit-asset-pic') }}" type="button" class="w-full bg-white border text-orange-500 btn border-orange-500 hover:text-orange-500 hover:bg-orange-50 hover:border-orange-600 focus:text-orange-600 focus:bg-orange-50 focus:border-orange-600 active:text-orange-600 active:bg-orange-50 active:border-orange-600 dark:bg-zink-700 dark:ring-orange-400/20 dark:hover:bg-orange-800/20 dark:focus:bg-orange-800/20 dark:active:bg-orange-800/20"><i data-lucide="edit" class="inline-block size-3 align-middle ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit Asset</span></a>
                        <button type="button" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" data-modal-target="deleteModal">Delete Asset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
            <div class="float-right">
                <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="w-full mx-auto text-center">
                <div class="mx-auto">
                    <i data-lucide="trash-2" class="block mx-auto text-orange-500 size-10"></i>
                </div>
                <div class="mt-4">
                    <h4 class="text-xl font-medium mb-0">Are You Sure ?</h4>
                    <p class="text-slate-500 mt-3">This action will remove asset permanently.</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 pt-4">
                <button data-modal-close="deleteModal" class="w-full bg-white border text-slate-500 btn hover:text-slate-500 hover:bg-slate-50 hover:border-slate-200 focus:text-slate-500 focus:bg-slate-50 focus:border-slate-200 active:text-slate-500 active:bg-slate-50 active:border-slate-200 dark:bg-zink-700 dark:hover:bg-orange-800/20 dark:focus:bg-orange-800/20 dark:active:bg-orange-800/20" style="width:calc(100% - 2px);">
                    <span class="align-middle">Cancel</span>
                </button>
                <button class="w-full text-white bg-orange-500 border-orange-500 btn hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20" style="width:calc(100% - 2px);">
                    <span class="align-middle">Yes, Delete It!</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- QR Code Modal -->
<div id="qrCodeModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
            <div class="float-right">
                <button data-modal-close="qrCodeModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
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
        var editButton = document.querySelector('.btn[href="' + '{{ url("edit-asset-admin") }}' + '"]');
        var deleteButton = document.querySelector('button[data-modal-target="deleteModal"]');
        var showQrCodeButton = document.querySelector('button[data-modal-target="qrCodeModal"]');
        var qrCodeModal = document.getElementById('qrCodeModal');

        editButton.addEventListener('click', function() {
            window.location.href = '{{ url("edit-asset-admin") }}';
        });

        deleteButton.addEventListener('click', function() {
            var deleteModal = document.getElementById('deleteModal');
            deleteModal.classList.add('show');
        });

        showQrCodeButton.addEventListener('click', function() {
            qrCodeModal.classList.add('show');
        });

        qrCodeModal.querySelector('[data-modal-close="qrCodeModal"]').addEventListener('click', function() {
            qrCodeModal.classList.remove('show');
        });
    });
</script>
@endsection