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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ public_path('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ public_path('bootstrap-icons.css') }}" rel="stylesheet">

    <style>
        body {
            page-break-inside: avoid;
            font-size: 12px;
        }


        .custom-border {
            border: 2px solid black;
        }
    </style>
</head>

<body style="background-color: white">
    <div class="m-4">
        <table class="table" style="table-layout: fixed; width: 100%;">
            <thead class="fw-bolder text-center">
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
                    <td colspan="9" class="text-center border-0 p-0 m-0">Bangladesh Power Development Board</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-center border-0 p-0 m-0">{{ $values['office_name'] }}</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-center border-0 p-0 m-0">Statement of GPF</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-center border-0 p-0 m-0">For Financial Year {{ $year }}</td>
                </tr>
                <tr>
                    <td colspan="1" class="">Name of Employee</td>
                    <td colspan="4" class="text-start">{{ $name }}</td>
                    <td colspan="1" class="">Designation</td>
                    <td colspan="3" class="text-start">{{ $designation }}</td>
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
                                    $gpfcalculation[$loop->iteration] > 1500000 &&
                                    $gpfcalculation[$loop->iteration] <= 3000000
                                ) {
                                    $gpfearned[$loop->index] =
                                        (1500000 * 0.13) / 12 +
                                        (($gpfcalculation[$loop->iteration] - 1500000) * 0.12) / 12;
                                } else {
                                    $gpfearned[$loop->index] =
                                        (1500000 * 0.13) / 12 +
                                        (1500000 * 0.12) / 12 +
                                        (($gpfcalculation[$loop->iteration] - 3000000) * 0.11) / 12;
                                }
                                echo number_format($gpfearned[$loop->index], 2, '.', ',');
                            @endphp
                        </td>
                        <td colspan="1" class="text-center custom-border">
                            {{ number_format(
                                $gpfcalculation[$loop->index] -
                                    (float) $values[$month . '_refunded'] +
                                    (float) $values[$month . '_contribution'] +
                                    (float) $values[$month . '_advance_recovery'] -
                                    (float) $values[$month . '_advance_paid'],
                                2,
                                '.',
                                ',',
                            ) }}
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
                    </td>
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

                    </td>
                    <td colspan="1" class="text-center custom-border">
                    </td>
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
                    <td colspan="2" class="text-start fw-bolder custom-border">{{ '01/07/' . $startYear }}
                        Balance
                    </td>
                    <td colspan="2" class="text-end fw-bolder custom-border">
                        {{ number_format($opening_balance, 2, '.', ',') }}</td>
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
                    <td colspan="2" class="text-start fw-bolder custom-border">{{ '30/06/' . $endYear }}
                        Balance
                    </td>
                    <td colspan="2" class="text-end fw-bolder custom-border">
                        {{ number_format($opening_balance + array_sum($contribution) + array_sum($recovery) + array_sum($gpfearned) - array_sum($paid) - array_sum($refunded), 2, '.', ',') }}
                    </td>
                    <td colspan="1" class="text-start fw-bolder custom-border"></td>
                </tr>

            </tbody>
        </table>

    </div>
</body>
