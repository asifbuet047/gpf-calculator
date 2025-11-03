@extends('layouts.layout')

@section('title', 'Fiscal Year Selection')

@section('content')
    <div class="mb-4">
        <label class="form-label" for="financial_year">Financial Year</label>
        <select name="financial_year" id="financial_year" class="form-select border border-success">
            <option value="2021-2022">2021-2022</option>
            <option value="2022-2023">2022-2023</option>
            <option value="2023-2024">2023-2024</option>
            <option value="2024-2025">2024-2025</option>
            <option value="2025-2026">2025-2026</option>
        </select>
    </div>
@endsection
