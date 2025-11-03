@extends('layouts.layout')

@section('title', 'Employee Primary Information')

@section('content')
    <section>
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 row justify-content-center align-items-center font-bold">
                                Employee Primary Information</h2>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('submit.information') }}" method="POST">
                                @csrf

                                <div class="mb-4">
                                    <label class="form-label" for="financial_year">Financial Year</label>
                                    @if (session()->has('financial_year'))
                                        <select name="financial_year" id="financial_year"
                                            class="form-select border border-success">
                                            <option value="2021-2022"
                                                {{ session('fiscal_year') == '2021-2022' ? 'selected' : '' }}>
                                                2021-2022</option>
                                            <option value="2022-2023"
                                                {{ session('fiscal_year') == '2022-2023' ? 'selected' : '' }}>
                                                2022-2023</option>
                                            <option value="2023-2024"
                                                {{ session('fiscal_year') == '2023-2024' ? 'selected' : '' }}>
                                                2023-2024</option>
                                            <option value="2024-2025"
                                                {{ session('fiscal_year') == '2024-2025' ? 'selected' : '' }}>
                                                2024-2025</option>
                                            <option value="2025-2026"
                                                {{ session('fiscal_year') == '2025-2026' ? 'selected' : '' }}>
                                                2025-2026</option>
                                        </select>
                                    @else
                                        <select name="financial_year" id="financial_year"
                                            class="form-select border border-success">
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
                                            class="form-control form-control-lg" value="{{ session('name') }}" disabled />
                                    @else
                                        <input type="text" id="name" name="name"
                                            class="form-control form-control-lg" placeholder="Name" />
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="office">Office name</label>
                                    @if (session()->has('office_name'))
                                        <input type="text" id="office_name" name="office_name"
                                            class="form-control form-control-lg" value="{{ session('office_name') }}"
                                            disabled />
                                    @else
                                        <input type="text" id="office_name" name="office_name"
                                            class="form-control form-control-lg" placeholder="Office name" />
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="designation">Designation</label>
                                    @if (session()->has('designation'))
                                        <input type="text" id="designation" name="designation"
                                            class="form-control form-control-lg" value="{{ session('designation') }}"
                                            disabled />
                                    @else
                                        <input type="text" id="designation" name="designation"
                                            class="form-control form-control-lg" placeholder="Designation" />
                                    @endif

                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="card_no">GPF Card No</label>
                                    @if (session()->has('card_no'))
                                        <input type="text" id="card_no" name="card_no"
                                            class="form-control form-control-lg" value="{{ session('card_no') }}"
                                            disabled />
                                    @else
                                        <input type="text" id="card_no" name="card_no"
                                            class="form-control form-control-lg" placeholder="GPF Card No" />
                                    @endif

                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="opening_balance">Opening balance</label>
                                    @if (session()->has('opening_balance'))
                                        <input type="number" id="opening_balance" name="opening_balance"
                                            class="form-control form-control-lg" value="{{ session('opening_balance') }}"
                                            disabled />
                                    @else
                                        <input type="number" id="opening_balance" name="opening_balance"
                                            class="form-control form-control-lg" placeholder="Opening balance" />
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2 text-center fw-bold fs-3" id="first_year">
                                                    @if (session()->has('financial_year'))
                                                        @php
                                                            [$startYear, $endYear] = explode(
                                                                '-',
                                                                session('financial_year'),
                                                            );
                                                            echo $startYear;
                                                        @endphp
                                                    @endif
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="july">July</label>
                                                    @if (session()->has('july'))
                                                        <input type="number" id="july" name="july"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('july') }}" disabled />
                                                    @else
                                                        <input type="number" id="july" name="july"
                                                            class="form-control form-control-lg"
                                                            placeholder="July contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="august">August</label>
                                                    @if (session()->has('august'))
                                                        <input type="number" id="august" name="august"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('august') }}" disabled />
                                                    @else
                                                        <input type="number" id="august" name="august"
                                                            class="form-control form-control-lg"
                                                            placeholder="August contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="september">September</label>
                                                    @if (session()->has('september'))
                                                        <input type="number" id="september" name="september"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('september') }}" disabled />
                                                    @else
                                                        <input type="number" id="september" name="september"
                                                            class="form-control form-control-lg"
                                                            placeholder="September contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="october">October</label>
                                                    @if (session()->has('october'))
                                                        <input type="number" id="october" name="october"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('october') }}" disabled />
                                                    @else
                                                        <input type="number" id="october" name="october"
                                                            class="form-control form-control-lg"
                                                            placeholder="October contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="november">November</label>
                                                    @if (session()->has('november'))
                                                        <input type="number" id="november" name="november"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('november') }}" disabled />
                                                    @else
                                                        <input type="number" id="november" name="november"
                                                            class="form-control form-control-lg"
                                                            placeholder="November contribution" />
                                                    @endif
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="december">December</label>
                                                    @if (session()->has('december'))
                                                        <input type="number" id="december" name="december"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('december') }}" disabled />
                                                    @else
                                                        <input type="number" id="december" name="december"
                                                            class="form-control form-control-lg"
                                                            placeholder="December contribution" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2 text-center fw-bold fs-3" id="second_year">
                                                    @if (session()->has('financial_year'))
                                                        @php
                                                            [$startYear, $endYear] = explode(
                                                                '-',
                                                                session('financial_year'),
                                                            );
                                                            echo $endYear;
                                                        @endphp
                                                    @endif
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="january">January</label>
                                                    @if (session()->has('january'))
                                                        <input type="number" id="january" name="january"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('january') }}" disabled />
                                                    @else
                                                        <input type="number" id="january" name="january"
                                                            class="form-control form-control-lg"
                                                            placeholder="January contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="february">February</label>
                                                    @if (session()->has('february'))
                                                        <input type="number" id="february" name="february"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('february') }}" disabled />
                                                    @else
                                                        <input type="number" id="february" name="february"
                                                            class="form-control form-control-lg"
                                                            placeholder="February contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="march">March</label>
                                                    @if (session()->has('march'))
                                                        <input type="number" id="march" name="march"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('march') }}" disabled />
                                                    @else
                                                        <input type="number" id="march" name="march"
                                                            class="form-control form-control-lg"
                                                            placeholder="March contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="april">April</label>
                                                    @if (session()->has('april'))
                                                        <input type="number" id="april" name="april"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('april') }}" disabled />
                                                    @else
                                                        <input type="number" id="april" name="april"
                                                            class="form-control form-control-lg"
                                                            placeholder="April contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="may">May</label>
                                                    @if (session()->has('may'))
                                                        <input type="number" id="may" name="may"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('may') }}" disabled />
                                                    @else
                                                        <input type="number" id="may" name="may"
                                                            class="form-control form-control-lg"
                                                            placeholder="May contribution" />
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="june">June</label>
                                                    @if (session()->has('june'))
                                                        <input type="number" id="june" name="june"
                                                            class="form-control form-control-lg"
                                                            value="{{ session('june') }}" disabled />
                                                    @else
                                                        <input type="number" id="june" name="june"
                                                            class="form-control form-control-lg"
                                                            placeholder="June contribution" />
                                                    @endif
                                                </div>


                                            </div>
                                            <div class="mt-4 row">
                                                @if (session()->has('financial_year'))
                                                    <button class="btn btn-info" type="button">Go to Calculation
                                                        Page</button>
                                                @else
                                                    <button class="btn btn-success" type="submit">Validate Info</button>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
