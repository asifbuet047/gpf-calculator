@extends('layouts.layout')

@section('title', 'General Provident Fund Calculation')

@php
    $name = $values['name'];
    $year = $values['financial_year'];
    [$startYear, $endYear] = explode('-', $values['financial_year']);
    $designation = $values['designation'];
    $office_name = $values['office_name'];
    $card_no = $values['card_no'];
    $opening_balance = (float) $values['opening_balance'];

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
    $gpfcalculation = [$opening_balance];
    $gpfearned = [];
    $refunded = [];
    $contribution = [];
    $paid = [];
    $recovery = [];
    foreach ($months as $month) {
        $refunded[] = (float) $values[$month . '_refunded'];
        $contribution[] = (float) $values[$month . '_contribution'];
        $paid[] = (float) $values[$month . '_advance_paid'];
        $recovery[] = (float) $values[$month . '_advance_recovery'];
    }

@endphp

@section('content')
    <div class="mb-4">
        <div class="table-responsive shadow rounded p-2">
            <table class="table table-hover" style="table-layout: fixed; width: 100%;">
                <thead class="bg-gradient-primary fw-bolder text-center">
                    {{-- <tr>
                        <th scope="col" class="custom-border" hidden>1</th>
                        <th scope="col" class="custom-border" hidden>2</th>
                        <th scope="col" class="custom-border" hidden>3</th>
                        <th scope="col" class="custom-border" hidden>4</th>
                        <th scope="col" class="custom-border" hidden>5</th>
                        <th scope="col" class="custom-border" hidden>6</th>
                        <th scope="col" class="custom-border" hidden>7</th>
                        <th scope="col" class="custom-border" hidden>8</th>
                        <th scope="col" class="custom-border" hidden>9</th>
                    </tr> --}}
                    <colgroup>
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                        <col style="width: 11.11%;">
                    </colgroup>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="9" class="text-center border-0">Bangladesh Power Development Board</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center border-0">{{ $values['office_name'] }}</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center border-0">Statement of GPF</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center border-0">For Financial Year {{ $year }}</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="">Name of Employee</td>
                        <td colspan="4" class="text-start">{{ $name }}</td>
                        <td colspan="1" class="">Designation</td>
                        <td colspan="3" class="text-start">{{ $designation }}</td>
                    </tr>
                    <tr>
                        <td colspan="9" style="height: 50px"> </td>
                    </tr>

                    <tr>
                        <td colspan="1" class="text-center custom-border">Month</td>
                        <td colspan="2" class="text-center custom-border">G.P.F Contribution</td>
                        <td colspan="2" class="text-center custom-border">Advance</td>
                        <td colspan="2" class="text-center custom-border">G.P.F Profit</td>
                        <td colspan="1" class="text-center custom-border">Calculation</td>
                        <td colspan="1" class="text-center custom-border">Net</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border">Refunded</td>
                        <td colspan="1" class="text-center custom-border">Contribution</td>
                        <td colspan="1" class="text-center custom-border">Paid</td>
                        <td colspan="1" class="text-center custom-border">Recovery</td>
                        <td colspan="1" class="text-center custom-border">Refunded</td>
                        <td colspan="1" class="text-center custom-border">Earned</td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border">Balance</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center custom-border fw-bolder">Code #</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">355(DR)</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">355 (CR)</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">145( DR.)</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">145 (CR.)</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">356(DR)</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">356 (CR)</td>
                        <td colspan="1" class="text-center custom-border fw-bolder"></td>
                        <td colspan="1" class="text-center custom-border fw-bolder"></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center custom-border fw-bolder"></td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                        <td colspan="1" class="text-center custom-border fw-bolder"></td>
                        <td colspan="1" class="text-center custom-border fw-bolder">Tk</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="text-center custom-border">Opening</td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format($opening_balance, 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format($opening_balance, 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border"></td>
                    </tr>
                    @foreach ($months as $month)
                        <tr>
                            <td colspan="1" class="text-start custom-border">{{ ucfirst($month) }},
                                {{ $loop->iteration <= 6 ? $startYear : $endYear }}</td>
                            <td colspan="1" class="text-center custom-border">
                                {{ number_format($values[$month . '_refunded'], 2, '.', ',') }}</td>
                            </td>
                            <td colspan="1" class="text-center custom-border">
                                {{ number_format($values[$month . '_contribution'], 2, '.', ',') }}</td>
                            <td colspan="1" class="text-center custom-border">
                                {{ number_format($values[$month . '_advance_paid'], 2, '.', ',') }}</td>
                            <td colspan="1" class="text-center custom-border">
                                {{ number_format($values[$month . '_advance_recovery'], 2, '.', ',') }}</td>
                            <td colspan="1" class="text-center custom-border"></td>
                            <td colspan="1" class="text-center custom-border">
                                @php
                                    $gpfearned[$loop->index] = 0;
                                    $gpfcalculation[$loop->iteration] =
                                        $gpfcalculation[$loop->index] -
                                        (float) $values[$month . '_refunded'] +
                                        (float) $values[$month . '_contribution'] +
                                        (float) $values[$month . '_advance_recovery'] -
                                        (float) $values[$month . '_advance_paid'];

                                    if ($gpfcalculation[$loop->iteration] <= 1500000) {
                                        $gpfearned[$loop->index] = ($gpfcalculation[$loop->iteration] * 0.13) / 12;
                                    } elseif (
                                        $gpfcalculation[$loop->iteration] >= 1500001 &&
                                        $gpfcalculation[$loop->iteration] <= 3000000
                                    ) {
                                        $gpfearned[$loop->index] =
                                            (1500000 * 0.13) / 12 +
                                            (($gpfcalculation[$loop->iteration] - 1500000) * 0.12) / 12;
                                    } else {
                                        $gpfearned[$loop->index] =
                                            (1500000 * 0.13) / 12 +
                                            (1500000 * 0.12) / 12 +
                                            (($gpfcalculation[$loop->iteration] - 1500000) * 0.11) / 12;
                                    }
                                    echo number_format($gpfearned[$loop->index], 2, '.', ',');
                                @endphp
                            </td>
                            <td colspan="1" class="text-center custom-border">
                                {{ number_format($gpfcalculation[$loop->iteration] + (float) $values[$month . '_contribution'] + (float) $values[$month . '_advance_recovery'] - (float) $values[$month . '_advance_paid'], 2, '.', ',') }}
                            </td>
                            <td colspan="1" class="text-center custom-border"></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="2" class="text-center custom-border">Profit during the year</td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($gpfearned), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($gpfcalculation) - $opening_balance, 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="text-center custom-border">To during the year</td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($refunded), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($contribution), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($paid), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($recovery), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border">
                        </td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($gpfearned), 2, '.', ',') }}
                        </td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(array_sum($gpfcalculation) - $opening_balance, 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border fw-bolder"></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center custom-border fw-bolder">Grand Total</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">
                            {{ number_format(array_sum($contribution) + $opening_balance - array_sum($refunded), 2, '.', ',') }}
                        </td>
                        <td colspan="1" class="text-center custom-border fw-bolder">
                            {{ number_format(array_sum($paid), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">
                            {{ number_format(array_sum($recovery), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border fw-bolder"></td>
                        <td colspan="1" class="text-center custom-border fw-bolder">
                            {{ number_format(array_sum($gpfearned), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-center custom-border fw-bolder">
                        </td>
                        <td colspan="1" class="text-center custom-border fw-bolder">
                            {{ number_format(array_sum($contribution) + $opening_balance - array_sum($refunded) + array_sum($recovery) + array_sum($gpfearned) - array_sum($paid), 2, '.', ',') }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-start fw-bolder border-0">Advance balance</td>
                        <td colspan="7" class="text-start fw-bolder border-0">
                            {{ number_format(array_sum($paid) - array_sum($recovery), 2, '.', ',') }}</td>
                    </tr>

                    <tr>
                        <td colspan="9" class="text-start fw-bolder border-0"></td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-start fw-bolder border-0"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">Particulars</td>
                        <td colspan="2" class="text-end fw-bolder custom-border">Amount(Tk)</td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">{{ '01/07/' . $startYear }} Balance
                        </td>
                        <td colspan="2" class="text-end fw-bolder custom-border">{{ $opening_balance }}</td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">Add:Con.+Adv.Ry.</td>
                        <td colspan="2" class="text-end fw-bolder custom-border">
                            {{ number_format(array_sum($contribution) + array_sum($recovery), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">Add Profit du. Year:</td>
                        <td colspan="2" class="text-end fw-bolder custom-border">
                            {{ number_format(array_sum($gpfearned), 2, '.', ',') }}</td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">Total</td>
                        <td colspan="2" class="text-end fw-bolder custom-border">
                            {{ number_format($opening_balance + array_sum($contribution) + array_sum($recovery) + array_sum($gpfearned), 2, '.', ',') }}
                        </td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>

                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">Less. Advance</td>
                        <td colspan="2" class="text-end fw-bolder custom-border">
                            {{ number_format(array_sum($paid) + array_sum($refunded), 2, '.', ',') }}
                        </td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>
                    <tr>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="1" class="border-0"></td>
                        <td colspan="2" class="text-start fw-bolder custom-border">{{ '30/06/' . $endYear }} Balance
                        </td>
                        <td colspan="2" class="text-end fw-bolder custom-border">
                            {{ number_format($opening_balance + array_sum($contribution) + array_sum($recovery) + array_sum($gpfearned) - array_sum($paid) - array_sum($refunded), 2, '.', ',') }}
                        </td>
                        <td colspan="1" class="text-start fw-bolder custom-border"></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
@endsection
