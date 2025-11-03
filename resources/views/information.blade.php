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
                                    <select name="financial_year" id="financial_year"
                                        class="form-select border border-success">
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025" selected>2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-lg"
                                        placeholder="Name" />
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="office">Office name</label>
                                    <input type="text" id="office_name" name="office_name"
                                        class="form-control form-control-lg" placeholder="Office name" />

                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="designation">Designation</label>
                                    <input type="text" id="designation" name="designation"
                                        class="form-control form-control-lg" placeholder="Designation" />

                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="basic_salary">GPF Card No</label>
                                    <input type="text" id="card_no" name="card_no" class="form-control form-control-lg"
                                        placeholder="GPF Card No" />

                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="opening_balance">Opening balance</label>
                                    <input type="number" id="opening_balance" name="opening_balance"
                                        class="form-control form-control-lg" placeholder="Opening balance" />
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="opening_balance">Opening balance</label>
                                    <input type="number" id="opening_balance" name="opening_balance"
                                        class="form-control form-control-lg" placeholder="Opening balance" />
                                </div>

                                <div class="mb-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2 text-center fw-bold fs-3" id="first_year">
                                                    2024
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="july">July</label>
                                                    <input type="number" id="july" name="july"
                                                        class="form-control form-control-lg"
                                                        placeholder="July contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="august">August</label>
                                                    <input type="number" id="august" name="august"
                                                        class="form-control form-control-lg"
                                                        placeholder="August contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="september">September</label>
                                                    <input type="number" id="september" name="september"
                                                        class="form-control form-control-lg"
                                                        placeholder="September contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="october">October</label>
                                                    <input type="number" id="october" name="october"
                                                        class="form-control form-control-lg"
                                                        placeholder="October contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="november">November</label>
                                                    <input type="number" id="november" name="november"
                                                        class="form-control form-control-lg"
                                                        placeholder="November contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="december">December</label>
                                                    <input type="number" id="december" name="december"
                                                        class="form-control form-control-lg"
                                                        placeholder="December contribution" />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2 text-center fw-bold fs-3" id="second_year">
                                                    2025
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="january">January</label>
                                                    <input type="number" id="january" name="january"
                                                        class="form-control form-control-lg"
                                                        placeholder="January contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="february">February</label>
                                                    <input type="number" id="february" name="february"
                                                        class="form-control form-control-lg"
                                                        placeholder="February contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="march">March</label>
                                                    <input type="number" id="march" name="march"
                                                        class="form-control form-control-lg"
                                                        placeholder="March contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="april">April</label>
                                                    <input type="number" id="april" name="april"
                                                        class="form-control form-control-lg"
                                                        placeholder="April contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="may">May</label>
                                                    <input type="number" id="may" name="may"
                                                        class="form-control form-control-lg"
                                                        placeholder="May contribution" />
                                                </div>

                                                <div class="mb-2">
                                                    <label class="form-label" for="june">June</label>
                                                    <input type="number" id="june" name="june"
                                                        class="form-control form-control-lg"
                                                        placeholder="June contribution" />
                                                </div>
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
