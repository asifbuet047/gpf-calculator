@extends('layouts.layout')

@section('title', 'Employee Primary Information')

@php
    $months = [
        'july',
        'august',
        'september',
        'october',
        'november',
        'december',
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
    ];
@endphp

@section('content')
    <section>
        <div class="container-fluid py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 row justify-content-center align-items-center font-bold">
                                Employee Primary Information</h2>

                            <div class="mt-4 mb-4 px-5 row">
                                @if (session()->has('financial_year'))
                                    <div class="col-12">
                                        <button class="btn btn-info w-100" type="submit" form="gpf_form">Go to Calculation
                                            Page</button>
                                    </div>
                                @endif
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form
                                action="{{ session()->has('financial_year') ? route('show.gpf.page') : route('submit.information') }}"
                                method="POST" id="gpf_form">
                                @csrf

                                <div class="mb-4">
                                    <label class="form-label" for="financial_year">Financial Year</label>
                                    @if (session()->has('financial_year'))
                                        <select name="financial_year" id="financial_year"
                                            class="form-select border border-success input-validated">
                                            <option value="2021-2022"
                                                {{ session('financial_year') == '2021-2022' ? 'selected' : '' }}>
                                                2021-2022</option>
                                            <option value="2022-2023"
                                                {{ session('financial_year') == '2022-2023' ? 'selected' : '' }}>
                                                2022-2023</option>
                                            <option value="2023-2024"
                                                {{ session('financial_year') == '2023-2024' ? 'selected' : '' }}>
                                                2023-2024</option>
                                            <option value="2024-2025"
                                                {{ session('financial_year') == '2024-2025' ? 'selected' : '' }}>
                                                2024-2025</option>
                                            <option value="2025-2026"
                                                {{ session('financial_year') == '2025-2026' ? 'selected' : '' }}>
                                                2025-2026</option>
                                        </select>
                                    @else
                                        <select name="financial_year" id="financial_year" class="form-select custom-input">
                                            <option value="2021-2022">2021-2022</option>
                                            <option value="2022-2023">2022-2023</option>
                                            <option value="2023-2024">2023-2024</option>
                                            <option value="2024-2025" selected>2024-2025</option>
                                            <option value="2025-2026">2025-2026</option>
                                        </select>
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    @if (session()->has('name'))
                                        <input type="text" id="name" name="name"
                                            class="form-control input-validated" value="{{ session('name') }}" readonly />
                                    @else
                                        <input type="text" id="name" name="name"
                                            class="form-control custom-input" placeholder="Name" />
                                    @endif
                                </div>

                                <div class="row g-3 mb-2">
                                    <div class="col">
                                        <label class="form-label" for="office">Office name</label>
                                        @if (session()->has('office_name'))
                                            <input type="text" id="office_name" name="office_name"
                                                class="form-control input-validated" value="{{ session('office_name') }}"
                                                readonly />
                                        @else
                                            <input type="text" id="office_name" name="office_name"
                                                class="form-control custom-input" placeholder="Office name" />
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="designation">Designation</label>
                                        @if (session()->has('designation'))
                                            <input type="text" id="designation" name="designation"
                                                class="form-control input-validated" value="{{ session('designation') }}"
                                                readonly />
                                        @else
                                            <input type="text" id="designation" name="designation"
                                                class="form-control custom-input" placeholder="Designation" />
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="card_no">GPF Card No</label>
                                        @if (session()->has('card_no'))
                                            <input type="text" id="card_no" name="card_no"
                                                class="form-control input-validated" value="{{ session('card_no') }}"
                                                readonly />
                                        @else
                                            <input type="text" id="card_no" name="card_no"
                                                class="form-control custom-input" placeholder="GPF Card No" />
                                        @endif
                                    </div>
                                    <div class="col">
                                        <label class="form-label" for="opening_balance">Opening
                                            balance</label>
                                        @if (session()->has('opening_balance'))
                                            <input type="number" id="opening_balance" name="opening_balance"
                                                class="form-control input-validated"
                                                value="{{ session('opening_balance') }}" readonly />
                                        @else
                                            <input type="number" id="opening_balance" name="opening_balance"
                                                class="form-control custom-input" placeholder="Opening balance" />
                                        @endif
                                    </div>
                                </div>



                                <table class="table table-hover" style="table-layout: fixed; width: 100%;">
                                    <colgroup>
                                        <col style="width: 20%;">
                                        <col style="width: 20%;">
                                        <col style="width: 20%;">
                                        <col style="width: 20%;">
                                        <col style="width: 20%;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td colspan="1" class="custom-table-border text-center">Month</td>
                                            <td colspan="2" class="custom-table-border text-center">GPF Contribution
                                            </td>
                                            <td colspan="2" class="custom-table-border text-center">GPF Advance</td>
                                        </tr>
                                        <tr>
                                            <td class="custom-table-border text-center" colspan="1"></td>
                                            <td class="custom-table-border text-center" colspan="1">Refunded</td>
                                            <td class="custom-table-border text-center" colspan="1">Contribution</td>
                                            <td class="custom-table-border text-center" colspan="1">Paid</td>
                                            <td class="custom-table-border text-center" colspan="1">Recovery</td>
                                        </tr>

                                        <tr>
                                            <td class="custom-table-border text-center" colspan="1"></td>
                                            <td class="custom-table-border text-center" colspan="1">355(DR)</td>
                                            <td class="custom-table-border text-center" colspan="1">355(CR)</td>
                                            <td class="custom-table-border text-center" colspan="1">145(DR)</td>
                                            <td class="custom-table-border text-center" colspan="1">145(CR)</td>
                                        </tr>
                                        @foreach ($months as $month)
                                            <tr>
                                                <td class="custom-table-border text-center" colspan="1">
                                                    {{ $month }} <span id="{{ $month }}"></span></td>
                                                @if (session()->has($month . '_refunded'))
                                                    <td class="custom-table-border text-center" colspan="1">
                                                        <input type="number" id="{{ $month . '_refunded' }}"
                                                            name="{{ $month . '_refunded' }}"
                                                            class="form-control text-end input-validated"
                                                            value="{{ session($month . '_refunded') }}" readonly />
                                                    </td>
                                                @else
                                                    <td class="custom-table-border text-center" colspan="1">
                                                        <input type="number" id="{{ $month . '_refunded' }}"
                                                            name="{{ $month . '_refunded' }}"
                                                            class="form-control text-end" placeholder="Refunded amount"
                                                            value="0" />
                                                    </td>
                                                @endif


                                                @if (session()->has($month . '_contribution'))
                                                    <td class="custom-table-border text-center" colspan="1"> <input
                                                            type="number" id="{{ $month . '_contribution' }}"
                                                            name="{{ $month . '_contribution' }}"
                                                            class="form-control text-end input-validated"
                                                            value="{{ session($month . '_contribution') }}" readonly />
                                                    </td>
                                                @else
                                                    <td class="custom-table-border text-center" colspan="1"> <input
                                                            type="number" id="{{ $month . '_contribution' }}"
                                                            name="{{ $month . '_contribution' }}" class="form-control"
                                                            placeholder="Contribution amount" /></td>
                                                @endif

                                                @if (session()->has($month . '_advance_paid'))
                                                    <td class="custom-table-border text-center" colspan="1"> <input
                                                            type="number" id="{{ $month . '_advance_paid' }}"
                                                            name="{{ $month . '_advance_paid' }}"
                                                            class="form-control text-end input-validated"
                                                            value="{{ session($month . '_advance_paid') }}" readonly />
                                                    </td>
                                                @else
                                                    <td class="custom-table-border text-center" colspan="1"> <input
                                                            type="number" id="{{ $month . '_advance_paid' }}"
                                                            name="{{ $month . '_advance_paid' }}"
                                                            class="form-control text-end" placeholder="Advance paid"
                                                            value="0" />
                                                    </td>
                                                @endif

                                                @if (session()->has($month . '_advance_recovery'))
                                                    <td class="custom-table-border text-center" colspan="1"> <input
                                                            type="number" id="{{ $month . '_advance_recovery' }}"
                                                            name="{{ $month . '_advance_recovery' }}"
                                                            class="form-control text-end input-validated"
                                                            value="{{ session($month . '_advance_recovery') }}"
                                                            readonly /></td>
                                                @else
                                                    <td class="custom-table-border text-center" colspan="1"> <input
                                                            type="number" id="{{ $month . '_advance_recovery' }}"
                                                            name="{{ $month . '_advance_recovery' }}"
                                                            class="form-control text-end" placeholder="Advance recovery"
                                                            value="0" /></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-4 row">
                                    @if (!session()->has('financial_year'))
                                        <div class="col-12">
                                            <button class="btn btn-success w-100" type="submit">Validate Info</button>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
