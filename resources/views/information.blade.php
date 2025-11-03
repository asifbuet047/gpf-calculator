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
                            <form
                                action="{{ session()->has('financial_year') ? route('show.gpf.page') : route('submit.information') }}"
                                method="POST">
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
                                            class="form-control form-control-lg" value="{{ session('name') }}" readonly />
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
                                            readonly />
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
                                            readonly />
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
                                            readonly />
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
                                            readonly />
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
                                                    @if (session()->has('july_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">July</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="july_contribution" name="july_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('july_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="july_advance_paid" name="july_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('july_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="july_advance_recovery"
                                                                        name="july_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('july_advance_recovery') }}"
                                                                        readonly /></div>

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">July</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="july_contribution" name="july_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jul contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="july_advance_paid" name="july_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jul Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="july_advance_recovery"
                                                                        name="july_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jul Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('august_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">August</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="august_contribution"
                                                                        name="august_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('august_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="august_advance_paid"
                                                                        name="august_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('august_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="august_advance_recovery"
                                                                        name="august_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('august_advance_recovery') }}"
                                                                        readonly /></div>

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">August</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="august_contribution"
                                                                        name="august_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Aug contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="august_advance_paid"
                                                                        name="august_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Aug Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="august_advance_recovery"
                                                                        name="august_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Aug Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('september_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">September</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="september_contribution"
                                                                        name="september_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('september_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="september_advance_paid"
                                                                        name="september_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('september_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="september_advance_recovery"
                                                                        name="september_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('september_advance_recovery') }}"
                                                                        readonly /></div>

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">September</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="september_contribution"
                                                                        name="september_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Sep contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="september_advance_paid"
                                                                        name="september_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Sep Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="september_advance_recovery"
                                                                        name="september_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Sep Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('october_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">October</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="october_contribution"
                                                                        name="october_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('october_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="october_advance_paid"
                                                                        name="october_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('october_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="october_advance_recovery"
                                                                        name="october_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('october_advance_recovery') }}"
                                                                        readonly /></div>

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">October</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="october_contribution"
                                                                        name="october_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Oct contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="october_advance_paid"
                                                                        name="october_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Oct Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="october_advance_recovery"
                                                                        name="october_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Oct Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('november_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">November</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="november_contribution"
                                                                        name="november_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('november_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="november_advance_paid"
                                                                        name="november_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('november_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="november_advance_recovery"
                                                                        name="november_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('november_advance_recovery') }}"
                                                                        readonly /></div>

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">November</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="november_contribution"
                                                                        name="november_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Nov contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="november_advance_paid"
                                                                        name="november_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Nov Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="november_advance_recovery"
                                                                        name="november_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Nov Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('december_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">December</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="december_contribution"
                                                                        name="december_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('december_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="december_advance_paid"
                                                                        name="december_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('december_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="december_advance_recovery"
                                                                        name="december_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('december_advance_recovery') }}"
                                                                        readonly /></div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">December</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="december_contribution"
                                                                        name="december_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Dec contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="december_advance_paid"
                                                                        name="december_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Dec Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="december_advance_recovery"
                                                                        name="december_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Dec Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
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
                                                    @if (session()->has('january_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">January</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="january_contribution"
                                                                        name="january_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('january_contribution') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="january_advance_paid"
                                                                        name="january_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('january_advance_paid') }}"
                                                                        readonly /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="january_advance_recovery"
                                                                        name="january_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('january_advance_recovery') }}"
                                                                        readonly /></div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">January</h5>
                                                                <div class="mb-1"><input type="number"
                                                                        id="january_contribution"
                                                                        name="january_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jan contribution" /></div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="january_advance_paid"
                                                                        name="january_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jan Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1"><input type="number"
                                                                        id="january_advance_recovery"
                                                                        name="january_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jan Advance Recovery"
                                                                        value="0" /></div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('february_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">February</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="february_contribution"
                                                                        name="february_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('february_contribution') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="february_advance_paid"
                                                                        name="february_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('february_advance_paid') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="february_advance_recovery"
                                                                        name="february_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('february_advance_recovery') }}"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">February</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="february_contribution"
                                                                        name="february_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Feb contribution" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="february_advance_paid"
                                                                        name="february_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Feb Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="february_advance_recovery"
                                                                        name="february_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Feb Advance Recovery"
                                                                        value="0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('march_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">March</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="march_contribution"
                                                                        name="march_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('march_contribution') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="march_advance_paid"
                                                                        name="march_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('march_advance_paid') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="march_advance_recovery"
                                                                        name="march_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('march_advance_recovery') }}"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">March</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="march_contribution"
                                                                        name="march_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Mar contribution" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="march_advance_paid"
                                                                        name="march_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Mar Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="march_advance_recovery"
                                                                        name="march_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Mar Advance Recovery"
                                                                        value="0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('april_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">April</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="april_contribution"
                                                                        name="april_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('april_contribution') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="april_advance_paid"
                                                                        name="april_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('april_advance_paid') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="april_advance_recovery"
                                                                        name="april_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('april_advance_recovery') }}"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">April</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="april_contribution"
                                                                        name="april_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Apr contribution" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="april_advance_paid"
                                                                        name="april_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Apr Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="april_advance_recovery"
                                                                        name="april_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Apr Advance Recovery"
                                                                        value="0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('may_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">May</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="may_contribution"
                                                                        name="may_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('may_contribution') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="may_advance_paid"
                                                                        name="may_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('may_advance_paid') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="may_advance_recovery"
                                                                        name="may_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('may_advance_recovery') }}"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">May</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="may_contribution"
                                                                        name="may_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="May contribution" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="may_advance_paid"
                                                                        name="may_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="May Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="may_advance_recovery"
                                                                        name="may_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="May Advance Recovery"
                                                                        value="0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="mb-2">
                                                    @if (session()->has('june_contribution'))
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">June</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="june_contribution"
                                                                        name="june_contribution"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('june_contribution') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="june_advance_paid"
                                                                        name="june_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('june_advance_paid') }}"
                                                                        readonly />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="june_advance_recovery"
                                                                        name="june_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        value="{{ session('june_advance_recovery') }}"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title mb-2">June</h5>
                                                                <div class="mb-1">
                                                                    <input type="number" id="june_contribution"
                                                                        name="june_contribution"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jun contribution" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="june_advance_paid"
                                                                        name="june_advance_paid"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jun Advance Paid" value="0" />
                                                                </div>
                                                                <div class="mb-1">
                                                                    <input type="number" id="june_advance_recovery"
                                                                        name="june_advance_recovery"
                                                                        class="form-control form-control-lg"
                                                                        placeholder="Jun Advance Recovery"
                                                                        value="0" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="mt-4 row">
                                                @if (session()->has('financial_year'))
                                                    <button class="btn btn-info" type="submit">Go to Calculation
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
