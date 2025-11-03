@extends('layouts.layout')

@section('title', 'General Provident Fund Calculation')

@php
    $name = $values['name'];
    $year = $values['financial_year'];
    $designation = $values['designation'];
    $office_name = $values['office_name'];
    $card_no = $values['card_no'];
    $opening_balance = $values['opening_balance'];
    
    $july_contribution = $values['july_contribution'];
    $july_advance_paid = $values['july_advance_paid'];
    $july_advance_recovery = $values['july_advance_recovery'];

    $august_contribution = $values['august_contribution'];
    $august_advance_paid = $values['august_advance_paid'];
    $august_advance_recovery = $values['august_advance_recovery'];

    $september_contribution = $values['september_contribution'];
    $september_advance_paid = $values['september_advance_paid'];
    $september_advance_recovery = $values['september_advance_recovery'];

    $october_contribution = $values['october_contribution'];
    $october_advance_paid = $values['october_advance_paid'];
    $october_advance_recovery = $values['october_advance_recovery'];

    $november_contribution = $values['november_contribution'];
    $november_advance_paid = $values['november_advance_paid'];
    $november_advance_recovery = $values['november_advance_recovery'];

    $december_contribution = $values['december_contribution'];
    $december_advance_paid = $values['december_advance_paid'];
    $december_advance_recovery = $values['december_advance_recovery'];

    $january_contribution = $values['january_contribution'];
    $january_advance_paid = $values['january_advance_paid'];
    $january_advance_recovery = $values['january_advance_recovery'];

    $february_contribution = $values['february_contribution'];
    $february_advance_paid = $values['february_advance_paid'];
    $february_advance_recovery = $values['february_advance_recovery'];

    $march_contribution = $values['march_contribution'];
    $march_advance_paid = $values['march_advance_paid'];
    $march_advance_recovery = $values['march_advance_recovery'];

    $april_contribution = $values['april_contribution'];
    $april_advance_paid = $values['april_advance_paid'];
    $april_advance_recovery = $values['april_advance_recovery'];

    $may_contribution = $values['may_contribution'];
    $may_advance_paid = $values['may_advance_paid'];
    $may_advance_recovery = $values['may_advance_recovery'];

    $june_contribution = $values['june_contribution'];
    $june_advance_paid = $values['june_advance_paid'];
    $june_advance_recovery = $values['june_advance_recovery'];

@endphp

@section('content')
    <div class="mb-4">
        <div class="table-responsive shadow rounded p-2">
            <table class="table table-hover" style="table-layout: fixed; width: 100%;">
                <thead class="bg-gradient-primary fw-bolder text-center">
                    <tr>
                        <th scope="col" class="custom-border">1</th>
                        <th scope="col" class="custom-border">2</th>
                        <th scope="col" class="custom-border">3</th>
                        <th scope="col" class="custom-border">4</th>
                        <th scope="col" class="custom-border">5</th>
                        <th scope="col" class="custom-border">6</th>
                        <th scope="col" class="custom-border">7</th>
                        <th scope="col" class="custom-border">8</th>
                        <th scope="col" class="custom-border">9</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="9" class="text-center border-0">Bangladesh Power Development Board</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center">Central Overhead Offices Accounting Cell (COOAC)</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center">Statement of GPF</td>
                    </tr>
                    <tr>
                        <td colspan="9" class="text-center">For Financial Year {{ $year }}</td>
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
                        <td colspan="1" class="text-center custom-border">Calculation</td>
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
                        <td colspan="1" class="text-center custom-border">{{ number_format($opening_balance) }}</td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                        <td colspan="1" class="text-center custom-border"></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
