<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Application Form</title>
    <style>
        @page {
            background-repeat: no-repeat;
            background-position: center;
        }

        body {
            background-color: white !important;
            color: black !important;
            border: 2px solid black;
            height: 100vh;
            width: 100%;
            font-family: 'timesnewroman';
        }

        /* ===== Header: logo left, QR right ===== */
        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .header-table td {
            vertical-align: top;
        }

        .logo-text {
            font-size: 20px;
            font-weight: bold;
            color: #2e6a3e;
            line-height: 1.1;
        }

        .logo-sub {
            font-size: 10px;
            color: #c0392b;
            font-style: italic;
        }

        .qr-cell {
            text-align: right;
        }

        .qr-cell img {
            width: 70px;
            height: 70px;
        }

        /* ===== Title ===== */
        .form-title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0 20px 0;
        }

        /* ===== Info block (label:value pairs, two columns) ===== */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            font-size: 11px;
        }

        .info-table td {
            padding: 3px 4px;
            vertical-align: top;
        }

        .info-label {
            width: 110px;
            color: #333;
        }

        .info-colon {
            width: 10px;
        }

        .info-value {
            font-weight: normal;
        }

        .status-approved {
            color: #2e7d32;
            font-weight: bold;
        }

        /* ===== Items table ===== */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
        }

        .items-table th,
        .items-table td {
            border: 1px solid #999;
            padding: 6px 8px;
            font-size: 10.5px;
            vertical-align: top;
        }

        .items-table th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
        }

        .col-no {
            width: 5%;
            text-align: center;
        }

        .col-date {
            width: 15%;
        }

        .col-desc {
            width: 53%;
        }

        .col-qty {
            width: 6%;
            text-align: center;
        }

        .col-price {
            width: 12%;
            text-align: right;
        }

        .col-amt {
            width: 12%;
            text-align: right;
        }

        /* ===== Totals row block ===== */
        .totals-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .totals-table td {
            padding: 4px 6px;
            font-size: 11px;
            vertical-align: top;
        }

        .amount-word-cell {
            width: 60%;
        }

        .amount-word-cell b {
            font-weight: bold;
        }

        .totals-label-cell {
            width: 25%;
            text-align: left;
        }

        .totals-value-cell {
            width: 15%;
            text-align: right;
            font-weight: bold;
        }

        /* ===== Approval signatures ===== */
        .approval-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .approval-table th {
            border-top: 1px solid #999;
            border-bottom: 1px solid #999;
            padding: 6px 4px;
            font-size: 10.5px;
            text-align: center;
            background-color: #fafafa;
        }

        .approval-table td {
            padding: 6px 4px;
            font-size: 10.5px;
            text-align: center;
        }

        .approval-name {
            padding-top: 10px;
        }

        .approval-date {
            color: #333;
        }

        .approval-status-approved {
            color: #2e7d32;
            font-weight: bold;
        }

        .approval-status-skipped {
            color: #999;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <table class="header-table">
        <tr>
            <td>
                <div class="logo-text">Proseth Solutions</div>
                <div class="logo-sub">Your Trusted Advisor</div>
            </td>
            {{-- <td class="qr-cell">
                <p>Logo</p>
            </td> --}}
        </tr>
    </table>

    <div class="form-title">Expense Claim Form</div>

    <!-- Info block -->
    <table class="info-table">
        <tr>
            <td class="info-label">Date</td>
            <td class="info-colon">:</td>
            <td class="info-value">{{ $data['RequestDate'] }}</td>
            <td class="info-label"></td>
            <td class="info-colon"></td>
            <td class="info-value" style="text-align:right;">
                Status : <span class="status-approved">{{ $data['Status'] }}</span>
            </td>
        </tr>
        <tr>
            <td class="info-label">Expense Claim ID</td>
            <td class="info-colon">:</td>
            <td class="info-value" colspan="4">{{ $data['ExpenseClaimID'] }}</td>
        </tr>
        <tr>
            <td class="info-label">Advance ID</td>
            <td class="info-colon">:</td>
            <td class="info-value" colspan="4">{{ $data['AdvanceID'] }}</td>
        </tr>
        <tr>
            <td colspan="6" style="height:8px;"></td>
        </tr>
        <tr>
            <td class="info-label">First Name</td>
            <td class="info-colon">:</td>
            <td class="info-value">{{ $data['FirstName'] }}</td>
            <td class="info-label"></td>
            <td class="info-colon"></td>
            <td class="info-value;" style="text-align:right;">Last Name : {{ $data['LastName'] }}</td>
        </tr>
        <tr>
            <td class="info-label">Position</td>
            <td class="info-colon">:</td>
            <td class="info-value">{{ $data['Position'] }}</td>
            <td class="info-label"></td>
            <td class="info-colon"></td>
            <td class="info-value;" style="text-align:right;">Phone : {{ $data['Phone'] }}</td>
        </tr>
        <tr>
            <td class="info-label">Approved By</td>
            <td class="info-colon">:</td>
            <td class="info-value">{{ $data['ApprovedBy'] }}</td>
            <td class="info-label"></td>
            <td class="info-colon"></td>
            <td class="info-value;" style="text-align:right;">Approved Date : {{ $data['ApprovedDate'] }}</td>
        </tr>
    </table>

    <!-- Items table -->
    <table class="items-table">
        <thead>
            <tr>
                <th class="col-no">No.</th>
                <th class="col-date">Date</th>
                <th class="col-desc">Description</th>
                <th class="col-qty">Qty</th>
                <th class="col-price">Price</th>
                <th class="col-amt">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['Items'] as $Item)
                <tr>
                    <td class="col-no">{{ $Item['No'] }}</td>
                    <td class="col-date">{{ $Item['Date'] }}</td>
                    <td class="col-desc">{{ $Item['Description'] }}</td>
                    <td class="col-qty">{{ $Item['Qty'] }}</td>
                    <td class="col-price">$ {{ $Item['Price'] }}</td>
                    <td class="col-amt">$ {{ $Item['Amount'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Totals -->
    <table class="totals-table">
        <tr>
            <td class="amount-word-cell">
                <p style="color: white">1</p>
            </td>
            <td class="totals-label-cell">Total Amount :</td>
            <td class="totals-value-cell">{{ $data['TotalAmount'] }}</td>
        </tr>
        <tr>
            <td class="amount-word-cell"></td>
            <td class="totals-label-cell">Total Advance :</td>
            <td class="totals-value-cell">{{ $data['TotalAdvance'] }}</td>
        </tr>
        <tr>
            <td class="amount-word-cell"></td>
            <td class="totals-label-cell">Total Return :</td>
            <td class="totals-value-cell">{{ $data['TotalReturn'] }}</td>
        </tr>
    </table>

    <!-- Approval signatures -->
    {{-- <table class="approval-table">
        <thead>
            <tr>
                <th>Request By</th>
                @foreach ($approvals as $approval)
                    <th>Checked By</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="approval-name">{{ $requester_name }}</td>
                @foreach ($approvals as $approval)
                    <td class="approval-name">{{ $approval->name ?? 'Skipped' }}</td>
                @endforeach
            </tr>
            <tr>
                <td class="approval-date">{{ $requester_date }}</td>
                @foreach ($approvals as $approval)
                    <td class="approval-date">{{ $approval->date ?? '' }}</td>
                @endforeach
            </tr>
            <tr>
                <td></td>
                @foreach ($approvals as $approval)
                    <td
                        class="{{ $approval->status == 'Skipped' ? 'approval-status-skipped' : 'approval-status-approved' }}">
                        {{ $approval->status ?? '' }}
                    </td>
                @endforeach
            </tr>
        </tbody>
    </table> --}}

</body>

</html>
