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
            font-family: 'khmerOS';
        }

        table {
            width: 100%;
        }

        .noted_header {
            margin-top: 15px;
            border-collapse: collapse;
            font-size: 11px;
            height: 50%;
        }

        .noted_header td {
            border: 1px solid black;
            padding-top: 18px;
            padding-left: 5px;
            padding-bottom: 18px;
        }

        .items {
            margin-top: 15px;
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .items td {
            border: 1px solid black;
            padding-top: 8px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        .checkbox-group {
            display: flex;
            background: red;
            gap: 15px;
        }

        .big-checkbox {
            width: 30px;
            height: 30px;
        }

        .relationshipatproseth {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .relationshipatproseth td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 12px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        .husbandorwifeinfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .husbandorwifeinfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 12px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        .childreninfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .childreninfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 12px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        .universityinfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .universityinfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 10px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        /* Study Level */
        .studylevel {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .studylevel td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 10px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        .shortcourseinfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .shortcourseinfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 10px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
        }

        .lanaguageinfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .lanaguageinfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 10px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
            text-align: center
        }

        .workexperienceinfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .workexperienceinfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 10px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
            text-align: center
        }

        .ohterinfo {
            border-collapse: collapse;
            font-size: 12px;
            height: 10%;
        }

        .ohterinfo td {
            border: 1px solid black;
            padding-top: 8px;
            font-size: 10px;
            /* padding-left: 5px; */
            padding-bottom: 8px;
            text-align: center
        }
    </style>
</head>

<body>

    <table>
        <tbody>
            <tr>
                <td>
                    <img src="https://proseth.institute/images/logo/67692251a06e2.png" alt="proseth logo">
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>
                    <h4 style="font-family:'Times New Roman', Times, serif">Employment Application Form</h4>
                </th>
            </tr>
        </thead>
    </table>

    <table class="noted_header">
        <tbody>
            <tr>
                <td style="border-right: none;" rowspan="3" style="width: 50%">
                    <span><b>Note៖</b><br>Please read the information below carefully and complete all required
                        information accurately. Fields marked with an asterisk (*) are mandatory.</span>
                </td>
                <td style="border-left: none; border-bottom:none; width: 35%"> Application Date:
                    {{ \Carbon\Carbon::parse($data['submit_date'])->format('d/m/Y') }}</td>
                <td rowspan="3" style="border-left: none; width: 20%; text-align: center">Picture 4x6</td>
            </tr>
            <tr>
                <td style="border-left: none; border-bottom:none">Employee Code: </td>
            </tr>
            <tr>
                <td style="border-left: none;">Position Code: </td>
            </tr>
        </tbody>
    </table>

    <table class="items">
        <tbody>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px;width:25%">
                    Position</td>
                <td style="border-right: none; border-bottom:none; padding-left:5px; width:40%" colspan="4">
                    {{ $data['positoinapply'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px;width:25%">
                    Expected Salary</td>
                <td style="border-bottom:none; padding-left:5px;width:40%">$ {{ $data['expectationSalay'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none; text-align: right; padding-right:5px">
                    Work Location/Province</td>
                <td colspan="7" style="padding-left:5px; border-bottom:none;">Phnom Penh</td>
            </tr>
            <tr>
                <td colspan="8" style="border-bottom:none; background:#f9d5b7; padding-left:10px">
                    <b>1. Personal Information</b>
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Employee Khmer Name</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['khmerFirstName'] }} {{ $data['khmerLastName'] }}
                </td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Employee English Name</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['fname'] }} {{ $data['lname'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Employee Name</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['khmerFirstName'] }} {{ $data['khmerLastName'] }}
                </td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Name in Latin Script</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['fname'] }} {{ $data['lname'] }}
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Employee Nickname</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['employeeNickName'] }}
                </td>
                <td style="border-right: none; border-bottom:none; text-align: right; padding-right:10px; width:25%">
                    Marital Status</td>
                <td style="border-bottom:none;padding-left:5px;width:40%;">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['marital'] === 'single')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>Single
                    </label>
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['marital'] === 'marriage')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>Married
                    </label>
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['marital'] === 'maternity')
                                ☑
                            @else
                                ☐
                            @endif
                        </span> Widow/Widower
                    </label>
                    {{-- <label class="checkbox-item">
                        <input type="checkbox" class="big-checkbox" style="margin-right: 6px;"
                            checked="{{ $data['marital'] == 'ពោះ/មេមាយ' ? 'checked' : '' }}"> ពោះ/មេមាយ
                    </label> --}}
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Date of Birth</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ \Carbon\Carbon::parse($data['birthDate'])->format('d/m/Y') }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Gender
                </td>
                <td style="border-bottom:none;padding-left:5px;width:40%;">
                    <label class="checkbox-item">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['gender'] === 'Male')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>Male
                    </label>
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['gender'] === 'Female')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>Female
                    </label>
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    National ID Number</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['idCard'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:3px; width:25%">
                    Expiration Date</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">
                    {{ \Carbon\Carbon::parse($data['idCardExpire'])->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%"
                    rowspan="3">Address (Place of Birth)</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">House Number</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">{{ $data['homeNo'] }}
                </td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">Street Number</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">{{ $data['streetNo'] }}
                </td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:3px; width:25%">
                    Village
                </td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['bornVillage'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">Commune</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%" colspan="3">
                    {{ $data['bornCommune'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    District</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['bornDistrict'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">Province</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%" colspan="3">
                    {{ $data['bornProvince'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Country</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">Cambodia</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%"
                    rowspan="3">Address (Current)</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">House Number</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">
                    {{ $data['currentHomeNo'] }}</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">Street Number</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">
                    {{ $data['currentStreetNo'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:3px; width:25%">
                    Village</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['currentVillage'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">Commune</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%" colspan="3">
                    {{ $data['currentCommune'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    District</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['currentDistrict'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%">Province</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:10%" colspan="3">
                    {{ $data['currentProvince'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Country</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">Cambodia</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Personal Phone</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['personalPhone'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Home Phone</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['homePhone'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Father's Name</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['fatherName'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Father's Job</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['fatherJob'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Mother's Name</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['motherName'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Mother's Job</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['motherJob'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Number of Siblings</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%" colspan="4">
                    {{ $data['siblingsNumber'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Family Book Number</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['familyBook'] }}</td>
            </tr>
        </tbody>
    </table>

    {{-- Relationship at prosethsolutions table --}}
    <table class="relationshipatproseth">
        <tbody>
            <tr>
                <td colspan="6" style="border-bottom:none; padding-left:10px">Do you have any relatives
                    or family members currently working at Proseth Solutions?
                    <label class="checkbox-item">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['hasRelativeInCompany'] === 'No')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        {{-- <input type="checkbox" class="big-checkbox">  --}}
                        Don't have
                    </label>
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['hasRelativeInCompany'] === 'Yes')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        {{-- <input type="checkbox" class="big-checkbox" style="margin-right: 6px;">  --}}
                        Have
                    </label>
                    <label class="checkbox-item">(If any, please list)</label>
                </td>
            </tr>
            @foreach ($data['relatives'] as $Item)
                <tr>
                    <td style="width: 10%; border-right:none; border-bottom:none; padding-left:5px;">
                        {{ $loop->iteration }}. Name</td>
                    <td style="width: 20%; border-right:none; border-bottom:none; padding-left:5px;">
                        {{ $Item['name'] }}</td>
                    <td style="width: 28%; border-right:none; border-bottom:none; padding-left:5px;">Position at
                        Proseth Solutions</td>
                    <td style="width: 24%; border-right:none; border-bottom:none; padding-left:5px;">
                        {{ $Item['position'] }}</td>
                    <td style="width: 9%; border-right:none; border-bottom:none; padding-left:5px;">Relationship</td>
                    <td style="width: 24%;padding-left:5px; border-bottom:none;">{{ $Item['relationship'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="husbandorwifeinfo">
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom:none; background:#f9d5b7; padding-left:10px">
                    <b>2. Information about Spouse (Please attach: Marriage Certificate)</b>
                </td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Spouse Name</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%">
                    {{ $data['husbandorwifename'] }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; width:27%">
                    Wedding Date</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">
                    {{ \Carbon\Carbon::parse($data['weddingdate'])->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:10px; width:25%">
                    Date of Birth</td>
                <td style="border-right: none; border-bottom:none;padding-left:5px;width:40%">
                    {{ \Carbon\Carbon::parse($data['husbandorwifebirthday'])->format('d/m/Y') }}</td>
                <td style="border-right: none; border-bottom:none;text-align: right; padding-right:15px; width:25%">
                    Occupation</td>
                <td style="border-bottom:none;padding-left:5px;width:40%">{{ $data['husbandorwifejob'] }}</td>
            </tr>
            <tr>
                <td style="border-right: none; text-align: right; padding-right:10px; width:25%; border-bottom:none">
                    Phone Number</td>
                <td style="border-right: none; padding-left:5px;width:40%;border-bottom:none">
                    {{ $data['husbandorwifephone'] }}</td>
                <td style="border-right: none; text-align: right; padding-right:15px; width:25%; border-bottom:none">
                    Email</td>
                <td style="padding-left:5px;width:40%; border-bottom:none">{{ $data['husbandorwifeemail'] }}</td>
            </tr>
        </tbody>
    </table>

    <table class="shortcourseinfo">
        <tbody>
            <tr>
                <td colspan="3" style="background:#f9d5b7; padding-left:10px">
                    <b>3. Information about Children (Please attach: Birth Certificate and Family Book)</b>
                </td>
            </tr>

            <tr>
                <td style="text-align: center; border-top: none; border-right:none; width:40%">Child's Name</td>
                <td style="text-align: center; border-top: none; border-right:none; width:20%">Gender</td>
                <td style="text-align: center; border-top: none; width:40%">Date of Birth</td>
            </tr>
            @foreach ($data['children'] as $Item)
                <tr>
                    <td style="text-align: center; border-top: none; border-right:none;width:40%">
                        {{ $loop->iteration }}. {{ $Item['name'] }}</td>
                    <td style="text-align: center; border-top: none; border-right:none; width:20%">{{ $Item['sex'] }}
                    </td>
                    <td style="text-align: center; border-top: none; width:40%">
                        {{ \Carbon\Carbon::parse($Item['birthday'])->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Children Info --}}

    <pagebreak />
    {{-- University Info --}}
    <table class="universityinfo">
        <tbody>
            <tr>
                <td colspan="5" style="background:#f9d5b7; padding-left:10px;">
                    <b>4. Educational Background</b>
                </td>
            </tr>
            <tr>
                <td rowspan="2" style="border-top:none; border-right:none; text-align: center; width:30%">
                    Name of Institution</td>
                <td colspan="2" style="border-top:none; border-right:none; text-align: center;  width:25%">
                    Date</td>
                <td rowspan="2" style="border-top:none; border-right:none; text-align: center;  width:20%">
                    Degree</td>
                <td rowspan="2" style="border-top:none; text-align: center; width:30%">Specialization</td>
            </tr>
            <tr>
                <td style="border-top:none; border-right:none; text-align: center">From Year</td>
                <td style="border-top:none; border-right:none; text-align: center">To Year</td>
            </tr>
            @foreach ($data['university'] as $Item)
                <tr>
                    <td style="border-top:none; border-right:none; text-align: center">{{ $Item['name'] }}</td>
                    <td style="border-top:none; border-right:none; text-align: center">
                        {{ \Carbon\Carbon::parse($Item['start'])->format('d/m/Y') }}</td>
                    <td style="border-top:none; border-right:none; text-align: center">
                        {{ \Carbon\Carbon::parse($Item['end'])->format('d/m/Y') }}</td>
                    <td style="border-top:none; border-right:none; text-align: center">{{ $Item['educationlevel'] }}
                    </td>
                    <td style="border-top:none; text-align: center">{{ $Item['skillorspecialization'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Study Level --}}

    <table class="studylevel">
        <tbody>
            <tr>
                <td colspan="9" style="border-top: none; padding-left:10px"><span>-
                        You must fill in information about your education from primary school to the highest level
                        achieved.</span> <br>
                    <span>- The highest educational level you have obtained:</span>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Primary')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Primary
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Year 1')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Year 1
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Year 2')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Year 2
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Associate Degree')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Associate Degree
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Year 3')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Year 3
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Year 4')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Year 4
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Bachelor Degree')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Bachelor Degree
                    </label>
                </td>
                <td style="text-align: center; border-top: none; border-right:none">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Master Degree')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Master Degree
                    </label>
                </td>
                <td style="text-align: center; border-top: none;">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($data['study'] === 'Doctoral Degree')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Doctoral Degree
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="9" style="border-top: none;border-bottom: none; padding-left:10px"> <b>បញ្ជាក់៖ </b>
                    <span>Please attach a copy of your diploma, provisional certificate, or certificate of
                        completion.</span>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- Short Course Info --}}
    <table class="shortcourseinfo">
        <tbody>
            <tr>
                <td colspan="4" style="background:#f9d5b7; padding-left:10px">
                    <b>5. Short Training Courses</b>
                </td>
            </tr>

            <tr>
                <td style="text-align: center; border-top: none; border-right:none; width:30%">School/University Name
                </td>
                <td style="text-align: center; border-top: none; border-right:none; width:25%">Course Name</td>
                <td style="text-align: center; border-top: none; border-right:none; width:20%">Duration</td>
                <td style="text-align: center; border-top: none; width:20%">Completion Date</td>
            </tr>
            @foreach ($data['shortcourse'] as $Item)
                <tr>
                    <td style="text-align: center; border-bottom:none; border-right:none;width:30%">
                        {{ $Item['schoolname'] }}</td>
                    <td style="text-align: center; border-bottom:none; border-right:none; width:25%">
                        {{ $Item['name'] }}
                    </td>
                    <td style="text-align: center; border-bottom:none; border-right:none; width:20%">
                        {{ $Item['duratioin'] }}</td>
                    <td style="text-align: center; border-bottom:none; width:20%">
                        {{ \Carbon\Carbon::parse($Item['end'])->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Langauge Info --}}
    <table class="lanaguageinfo">
        <tbody>
            <tr>
                <td colspan="17"
                    style="background:#f9d5b7; padding-left:10px; text-align:left; border-bottom:none;">
                    <b>6. Foreign Languages</b>
                </td>
            </tr>
            <tr>
                <td colspan="17" style="padding-left:10px; text-align:left;">
                    Knowledge of foreign languages (Excellent) (Good) (Fair) (Poor)
                </td>
            </tr>
            <tr>
                <td rowspan="2" style="border-top: none; border-right:none;">Foreign Language</td>
                <td colspan="4" style="border-top: none; border-right:none;">Writing</td>
                <td colspan="4" style="border-top: none; border-right:none;">Speaking</td>
                <td colspan="4" style="border-top: none; border-right:none;">Reading</td>
                <td colspan="4" style="border-top: none;">Listening</td>
            </tr>
            <tr>
                <td style="border-top: none; border-right:none;">EX</td>
                <td style="border-top: none; border-right:none;">G</td>
                <td style="border-top: none; border-right:none;">F</td>
                <td style="border-top: none; border-right:none;">P</td>
                <td style="border-top: none; border-right:none;">EX</td>
                <td style="border-top: none; border-right:none;">G</td>
                <td style="border-top: none; border-right:none;">F</td>
                <td style="border-top: none; border-right:none;">P</td>
                <td style="border-top: none; border-right:none;">EX</td>
                <td style="border-top: none; border-right:none;">G</td>
                <td style="border-top: none; border-right:none;">F</td>
                <td style="border-top: none; border-right:none;">P</td>
                <td style="border-top: none; border-right:none;">EX</td>
                <td style="border-top: none; border-right:none;">G</td>
                <td style="border-top: none; border-right:none;">F</td>
                <td style="border-top: none;">P</td>
            </tr>
            @foreach ($data['langauge'] as $Item)
                <tr>
                    <td style="border-bottom:none border-right:none;">{{ $Item['name'] }}</td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['writing_level'] === 'Ex')
                            Ex
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['writing_level'] === 'G')
                            G
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['writing_level'] === 'F')
                            F
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['writing_level'] === 'P')
                            P
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['speaking_level'] === 'Ex')
                            Ex
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['speaking_level'] === 'G')
                            G
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['speaking_level'] === 'F')
                            F
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['speaking_level'] === 'P')
                            P
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['reading_level'] === 'Ex')
                            Ex
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['reading_level'] === 'G')
                            G
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['reading_level'] === 'F')
                            F
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['reading_level'] === 'P')
                            P
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['listening_level'] === 'Ex')
                            Ex
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['listening_level'] === 'G')
                            G
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none border-right:none;">
                        @if ($Item['listening_level'] === 'F')
                            F
                        @else
                        @endif
                    </td>
                    <td style="border-bottom:none">
                        @if ($Item['listening_level'] === 'P')
                            P
                        @else
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Work Experience Info --}}
    <table class="workexperienceinfo">
        <tr>
            <td colspan="5" style="background:#f9d5b7; padding-left:10px; text-align:left; border-bottom:none;">
                <b>7. Work Experience</b>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="padding-left:10px; text-align:left;"><b>Previous Employer</b>
                Please attach documents confirming your work experience (if any)</td>
        </tr>
        @foreach ($data['workexperience'] as $Item)
            <tr>
                <td
                    style="border-top:none; width:22%; border-right:none; border-bottom:none; text-align:right; padding-right:10px">
                    Company Name
                </td>
                <td colspan="4" style="border-top: none;text-align:left; padding-left:10px">
                    {{ $Item['companyname'] }}</td>
            </tr>
            <tr>
                <td style="border-right:none; width:22%; border-bottom:none; text-align:right; padding-right:3px">
                    Address/Phone Number
                </td>
                <td colspan="4" style="border-top: none; text-align:left; padding-left:10px">
                    {{ $Item['companycontact'] }}</td>
            </tr>
            <tr>
                <td style="border-right:none; width:22%; border-bottom:none; text-align:right; padding-right:3px">
                    Business Type
                </td>
                <td colspan="4" style="border-top: none; text-align:left; padding-left:10px">
                    {{ $Item['companybusinesstype'] }}</td>
            </tr>
            <tr>
                <td style="border-right:none; width:22%; text-align:right; padding-right:10px">Company Type</td>
                <td style="border-top: none; border-right:none; width:12%; text-align:left; padding-left:10px">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['companytype'] === 'Government Institution')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Government Institution
                    </label>
                </td>
                <td style="text-align:left; padding-left:10px; border-top: none; border-right:none;width:20%">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['companytype'] === 'Non-Governmental Organization')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Non-Governmental Organization
                    </label>
                </td>
                <td style="text-align:left; padding-left:10px; border-top: none; border-right:none; width:22%">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['companytype'] === 'Private Institution')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Private Institution
                    </label>
                </td>
                <td style="text-align:left; padding-left:10px; border-top: none; width:32%">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['companytype'] === 'ផ្សេងទៀត')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        ផ្សេងទៀត
                    </label>
                </td>
            </tr>
            <tr>
                <td style="border-top:none; border-right:none; width:22%; text-align:right; padding-right:10px">
                    Position</td>
                <td style="border-top:none; border-right:none; text-align:left; padding-left:10px;" colspan="3">
                    {{ $Item['position'] }}
                </td>
                <td style="border-top: none; text-align:left; padding-left:10px;">
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['employmenttype'] === 'Full Time')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Full Time
                    </label>
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['employmenttype'] === 'Part Time')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Part Time
                    </label>
                    <label class="checkbox-item" style="padding-left: 10px">
                        <span style="font-family: dejavusans; font-size: 10pt;">
                            @if ($Item['employmenttype'] === 'Contractual')
                                ☑
                            @else
                                ☐
                            @endif
                        </span>
                        Contractual
                    </label>
                </td>
            </tr>
            <tr>
                <td style="border-top:none; border-right:none; text-align:right; padding-right:10px">
                    Start Date
                </td>
                <td style="border-top:none; border-right:none; text-align:left; padding-left:10px;" colspan="2">
                    {{ \Carbon\Carbon::parse($Item['startworkingdate'])->format('d/m/Y') }}</td>
                <td style="border-top:none; border-right:none; text-align:right; padding-right:12px">End Date
                </td>
                <td style="border-top:none; text-align:left; padding-left:10px;">
                    {{ \Carbon\Carbon::parse($Item['leavedate'])->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td style="border-top:none; border-right:none; text-align:right; padding-right:5px">Start Salary
                </td>
                <td style="border-top:none; border-right:none; text-align:left; padding-left:10px;" colspan="2">
                    {{ $Item['startworkingsalary'] }}</td>
                <td style="border-top:none; border-right:none; text-align:right; padding-right:12px">End Salary
                </td>
                <td style="border-top:none; text-align:left; padding-left:10px;">{{ $Item['lastsalary'] }}</td>
            </tr>
            <tr>
                <td style="border-top:none; border-right:none; text-align:right; padding-right:0px">
                    Direct Supervisor Name</td>
                <td style="border-top:none; border-right:none; text-align:left; padding-left:10px;" colspan="2">
                    {{ $Item['managername'] }}</td>
                <td style="border-top:none; border-right:none; text-align:left;padding-left:10px">
                    Direct Supervisor Position</td>
                <td style="border-top:none; text-align:left; padding-left:10px;">{{ $Item['managerposition'] }}</td>
            </tr>
            <tr>
                <td colspan="5" style="border-top:none; padding-left:10px; text-align:left;">Describe your roles,
                    duties, and responsibilities</td>
            </tr>
            <tr>
                <td colspan="3"
                    style="border-top: none; border-right:none;text-align:left; padding-left:10px; padding-bottom:50px">
                    {{ $Item['reasonofleave'] }}</td>
                <td colspan="2" style="border-top: none; text-align:left; padding-left:10px; padding-bottom:50px">
                    {{ $Item['responsible'] }}</td>
            </tr>
        @endforeach
    </table>

    {{-- Other Info --}}
    <pagebreak />
    <table class="ohterinfo">
        <tr>
            <td colspan="2" style="background:#f9d5b7; padding-left:10px; text-align:left; border-bottom:none;">
                <b>8. Other Information</b>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-left:10px; text-align:left; border-bottom:none">
                Have you ever had any serious illness? If yes, please provide your treatment history.</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;padding-left: 10px; border-top:none; border-bottom:none">

                <label class="checkbox-item" style="padding-left: 10px">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['diseases'] === 'Yes')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Yes
                </label>
                <label class="checkbox-item">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['diseases'] === 'No')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    No
                </label>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;padding-left: 10px; border-top:none; border-right:none;border-bottom:none">
                Disease Type: {{ $data['typesofdiseases'] }}
            </td>
            <td style="text-align: left;padding-left: 10px; border-top:none;border-left:none;border-bottom:none">
                Treatment Duration: {{ $data['treatmentduration'] }}
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;padding-left: 10px; border-top:none;">
                Description: {{ $data['discriptionofdiseases'] }}
            </td>
        </tr>
    </table>
    <table class="ohterinfo">
        <tr>
            <td colspan="2" style="padding-left:10px; text-align:left;border-top:none;">Have you ever been
                convicted of a crime? If yes, what type of offense and when did it occur?</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;padding-left: 10px; border-top:none; border-bottom:none">
                <label class="checkbox-item" style="padding-left: 10px">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['disciplinaryhistory'] === 'Yes')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Yes
                </label>
                <label class="checkbox-item">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['disciplinaryhistory'] === 'No')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    No <span>If yes, please explain:</span>
                </label>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;padding-left: 10px; border-top:none;">
                Please describe / Please explain: {{ $data['discriptionofdisciplinaryhistory'] }}
            </td>
        </tr>
    </table>

    {{-- Source Info --}}
    <table class="ohterinfo">
        <tr>
            <td colspan="3"
                style="border-top:none; background:#f9d5b7; padding-left:10px; text-align:left; border-bottom:none;">
                <b>9. Application Information</b>
            </td>
        </tr>
        <tr>
            <td style="text-align:left; padding-left:10px"> How did you hear about this position? </td>
            <td colspan="2" style="text-align: left;padding-left: 10px; border-left:none;">
                <label class="checkbox-item" style="padding-left: 10px">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['source_of_information'] === 'Proseth Office')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Proseth Office
                </label>
                <label class="checkbox-item">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['source_of_information'] === 'College')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    College
                </label>
                <label class="checkbox-item" style="padding-left: 10px">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['source_of_information'] === 'Website')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Website
                </label>
                <label class="checkbox-item">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['source_of_information'] === 'Friends')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Friends
                </label>
                <label class="checkbox-item">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['source_of_information'] === 'Other')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Other
                </label>
            </td>
        </tr>
        <tr>
            <td colspan="2"
                style="width:50%; text-align:left; padding-left:10px; border-top:none; border-right:none">
                If selected, how soon can you start working at Prasith Solutions?</td>
            <td style="text-align:left; padding-left:10px; width:40%; border-top:none;">
                {{ \Carbon\Carbon::parse($data['dayforcomeworking'])->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <td style="text-align: left;padding-left: 10px; border-bottom:none; border-right:none;">
                Please explain:
            </td>
            <td colspan="2" style="text-align: left;padding-left: 10px; border-bottom:none;">
                <label class="checkbox-item" style="padding-left: 10px">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['motor_travel_ability'] === 'Yes')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    Yes
                </label>
                <label class="checkbox-item">
                    <span style="font-family: dejavusans; font-size: 10pt;">
                        @if ($data['motor_travel_ability'] === 'No')
                            ☑
                        @else
                            ☐
                        @endif
                    </span>
                    No
                </label>
            </td>
        </tr>
    </table>
    <table class="ohterinfo">
        <tr>
            <td colspan="4" style="background:#f9d5b7; padding-left:10px; text-align:left; border-bottom:none;">
                <b>10. Declaration / Certification Statement</b>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width:20%; text-align:left; padding-left:10px;">I hereby certify that the
                information provided in the above personal profile is true, accurate, and complete to the best of my
                knowledge. I have not made any false or misleading statements. If any information is found to be false
                or inconsistent with the facts, I shall accept full responsibility and be subject to the applicable laws
                and regulations.</td>
        </tr>
        <tr>
            <td style="width:20%; text-align:right; padding-right:10px; border-top:none; border-right:none;width:10%">
                Signature</td>
            <td colspan="3" style="border-top:none; text-align: center;">
                <img src="{{ $data['Sign'] }}" style="height:32px; width: 120px; color: black;" alt="">
            </td>
        </tr>
        <tr>
            <td
                style="width:20%; text-align:right; padding-right:10px; border-bottom:none; border-right:none; width:10%">
                Name</td>
            <td style="border-bottom:none;  border-right:none; width:20%">{{ $data['fname'] }} {{ $data['lname'] }}
            </td>
            <td style="border-bottom:none;  border-right:none; text-align:right; padding-right:10px; width:15%">
                Date</td>
            <td style="border-bottom:none;  width:20%">
                {{ \Carbon\Carbon::parse($data['submit_date'])->format('d/m/Y') }}</td>
        </tr>
    </table>
    <table class="ohterinfo">
        <tr>
            <td colspan="7" style="background:#f9d5b7; padding-left:10px; text-align:left;">
                <b>11. For Human Resources and Administration</b>
            </td>
        </tr>
        <tr>
            <td style="width:20%; text-align:right; padding-right:10px; border-top:none; border-right:none; width:15%">
                Employee ID</td>
            <td colspan="2" style="border-top:none; border-top:none; border-right:none; width:15%"> </td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:10px; width:19%">
                Position Code</td>
            <td colspan="3"
                style="border-top:none; border-top:none; text-align:right; padding-right:10px; width:15%"></td>
        </tr>
        <tr>
            <td style="width:20%; text-align:right; padding-right:10px; border-top:none; border-right:none; width:15%">
                Training</td>
            <td style="border-top:none; border-top:none; border-right:none; width:15%">Start Date</td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:10px; width:15%">
            </td>
            <td style="border-top:none; border-top:none; border-right:none; text-align:right; width:15%">To</td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:10px; width:15%">
            </td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:5px; width:10%">
                Duration</td>
            <td style="border-top:none; border-top:none; width:15%"></td>
        </tr>
        <tr>
            <td style="width:20%; text-align:right; padding-right:10px; border-top:none; border-right:none; width:15%">
                Training</td>
            <td style="border-top:none; border-top:none; border-right:none; width:15%">Start Date</td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:10px; width:15%">
            </td>
            <td style="border-top:none; border-top:none; border-right:none; text-align:right; width:15%">To</td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:10px; width:15%">
            </td>
            <td
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:5px; width:10%">
                Duration</td>
            <td style="border-top:none; border-top:none; width:15%"></td>
        </tr>
        <tr>
            <td colspan="2"
                style="width:20%; text-align:right; padding-right:10px; border-top:none; border-right:none; width:15%">
                Training Salary</td>
            <td style="border-top:none; border-top:none; border-right:none; width:15%"> </td>
            <td colspan="2"
                style="border-top:none; border-top:none; border-right:none; text-align:right; padding-right:10px; width:15%">
                Probation Salary</td>
            <td colspan="2"
                style="border-top:none; border-top:none; text-align:right; padding-right:10px; width:15%;"></td>
        </tr>
        <tr>
            <td colspan="2"
                style="width:20%; text-align:right; padding-right:10px; border-top:none; border-right:none; width:15%">
                Salary after probation</td>
            <td colspan="5" style="border-top:none; text-align:right; padding-right:10px; width:15%;"></td>
        </tr>
        <tr>
            <td colspan="7"
                style="width:20%; text-align:left; padding-left:10px; border-top:none; border-bottom:none; width:15%; padding-bottom:60px">
                Reviewed by / Signature:</td>
        </tr>
        <tr>
            <td colspan="2"
                style="width:20%; text-align:left; padding-left:10px; border-top:none; border-right:none;">Name</td>
            <td colspan="5" style="border-top:none; border-left:none; text-align:left; padding-left:10px;">Position
            </td>
        </tr>
    </table>
</body>

</html>
