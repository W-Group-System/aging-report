<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commercial Invoice</title>
    <style>
         @page{
            margin:20 30;
        }
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .header-container {
            display: table; 
            width: 100%; 
        }
        .header-container .left .header .line-two {
            font-size: 8px;
            text-align: right;
        }
        .header-container .left .header .line-three {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }
        .header-container .left .header .date {
            margin-top: 10px;
            font-size: 9px;
        }
        .container {
            padding: 10 50;
        }
        .left, .middle, .right {
            display: table-cell;
            vertical-align: top;
        }
        .left {
            width: 62%;
        }
        .right {
            width: 38%;
            text-align: right; 
        }
        .right img {
            width: 120px;
            height: auto; 
            margin-left: 35px
        }
        
        .header-container .right .line-one {
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }
        .header-container .right .line-two {
            margin-top: 60px;
            margin-right: 200px;
            font-size: 12px;
        }
        .header-large-text{
            font-size: 22px;
            font: bold;
        }
        .header-medium-text{
            font-size: 10px;
            font: bold;
        }
        .header-small-text{
            font-size: 8px;
            display: block;
        }
        .checkboxcon {
            font-size: 10px;
            position: fixed;
            top: 100px;
            left: 5px;

        }
        .checkboxcon input[type="checkbox"] {
            width: 14px;  
            height: 14px;
            transform: scale(0.8); 
            margin-right: 5px;
        }
        .table-row {
            border: 2px solid black;
            border-bottom: none;
            font-size: 12px;
            font-weight: bold;
            padding: 3px
        }
        .table-row-date {
            border: 2px solid black;
            border-bottom: none;
            font-size: 12px;
            font-weight: bold;
            width: 35%;
            margin-left: auto;
        }
        .table-row-date table {
            width: 100%;
            border-collapse: collapse; 
            font-size: 12px;
        }
        .table-row-date th{
            border: 1px solid #000;     
            border-top: none;           
            border-bottom: none;           
            text-align: center;
        }
        .table-row-date th:first-child, {
            border-left: none; 
        }
        .table-row-date th:last-child {
            border-right: none; 
        }
        .customer-container {
            border: 2px solid black;
            padding: 5px;
        }
        .customer-container::after {
            content: "";
            display: table;
            clear: both;
        }
        .left-column, .right-column {
            float: left; 
            font-size: 10px;
            line-height:15px;
        }
        .right-column {
            width: 35%; 
        }
        .left-column {
            width: 65%; 
        }
        .info-row {
            margin-bottom: 5px;
        }
        .info-row span {
            display: inline-block; 
            vertical-align: top;  
        }
        .customer-container .left-column .info-label{
            width: 25%; 
            display: inline-block;
            vertical-align: top;  
            margin: 0;
            font-size: 12px;
        }
        .customer-container .right-column .info-label{
            width: 40%;
            display: inline-block;
            vertical-align: top;  
            margin: 0;
            font-size: 12px;
        }
        .customer-container .left-column .info-value{
            width: 60%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .customer-container .right-column .info-value{
            width: 40%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .product-details {
            border: 2px solid black;
            margin-top: 5px;
        }
        .product-details table {
            width: 100%;
            border-collapse: collapse; 
            font-size: 12px;
            min-height: 280px;
        }
        .product-details th{
            border: 1px solid #000;     
            border-top: none;           
            text-align: center;
        }
        .product-details th:first-child, {
            border-left: none; 
        }
        .product-details th:last-child {
            border-right: none; 
        }
        .product-details td{
            text-align: center; 
            padding: 2px; 
        }
        .new-row {
            clear: both; 
            width: 100%; 
        }
        .new-col-left {
            margin: 10px;
            width: 70%; 
            font-size: 13px;
        }
        .new-row .new-col-left .info-row {
            line-height: 10px;
        }
        .new-row .new-col-left .info-detail {
            width: 55%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .new-row .new-col-left .info-name{
            width: 26%; 
            font-size: 12px;
        }
        .new-row .new-col-left .info-colon{
            width: 5%; 
            font-size: 12px;
        }
        .new-product-total {
            width: 48%;
            float: left;  
            margin-top: 5px;
            box-sizing: border-box;
        }
        .new-product-total .new-product-total-left {
            border: solid black 2px;
        }
        .new-product-total .new-product-total-right {
            border: solid black 2px;
        }
        .new-product-total .new-product-total-left .info-row {
            line-height: 10px;
            margin: 5px;
        }
        .new-product-total .new-product-total-left .info-detail {
            width: 41%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .new-product-total .new-product-total-left .info-name{
            width: 49%; 
            font-size: 12px;
            text-align: right;
        }
        .new-product-total .new-product-total-left .info-colon{
            width: 5%; 
            font-size: 12px;
        }
        .new-product-total .new-product-total-right .info-row {
            line-height: 10px;
            margin: 5px;
        }
        .new-product-total .new-product-total-right .info-detail {
            width: 40%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .new-product-total .new-product-total-right .info-name{
            width: 50%; 
            font-size: 12px;
            text-align: right;
        }
        .new-product-total .new-product-total-right .info-colon{
            width: 5%; 
            font-size: 12px;
        }
        .payment_instruction{
            font-size: 12px;
        }
        .terms{
            font-size: 12px;
            margin-top: 10px;
        }
        .signature-section {
            margin-top: 10px;
            font-size: 12px;
        }

        .acknowledge {
            margin-bottom: 40px;
        }

        .acknowledge input[type="checkbox"] {
            width: 14px;  
            height: 14px;
            transform: scale(0.8); 
            margin-right: 5px;
        }

        .acknowledge .amount-line {
            display: inline-block;
            width: 200px;
            border-bottom: 1px solid #000;
        }

        .signature-block {
            text-align: center;
            margin-top: 30px;
        }

        .signature-name {
            display: inline-block;
            width: 250px;
            border-bottom: 1px solid #000;
            font-weight: bold;
        }

        .signature-label {
            margin-top: 2px;
            font-size: 11px;
        }
        
        
    </style>
</head>
<body>

    <div class="header-container">
        <div class="left">
            <div class="header">
                <div class="container">
                    <span style="float: left">
                        <img src="{{ asset('/images/w-logo.png')}}" alt="Company Logo" style="max-height: 50px;">
                    </span>
                    <div style="text-align: center">
                        <div class="line-one">
                            <span class="header-large-text">W Hydrocolloids, Inc.</span>
                        </div>
                        <div style="font-size: 10px"><strong>A member of the W Group, Inc</strong></div>
                    </div>
                </div>
                
                <div class="line-two">
                    <span class="header-small-text">Plant Address: Block 10 Lot 1 Phase 4 Mountview 1 Industrial Complex, Bancal, 4116 Carmona Cavite, Philippines</span>
                    <span class="header-small-text">Admin Office: 26/F, W Fifth Avenue Bldg, Bonifacio Global City, Fort Bonifacio, Taguig City, NCR, Fourth District Philippines 1630</span>
                    <span class="header-small-text">Phone: (+632) 8586.3388 | Fax: (+632) 8586.1033 </span>
                    <span class="header-small-text">sales@rico.com.ph | www.rico.com.ph </span>
                    <span class="header-small-text">VAT Reg TIN 225-688-438-00000 </span>
                </div>
                
            </div>
        </div>
        <div class="right">
            <div  class="line-one">COMMERCIAL</div>
            <div  class="line-one" style="font-size:20px">INVOICE</div>
            <div class="line-two">Invoice No.</div>
        </div>
    </div>
    <div class="checkboxcon">
        <div class="box">
            <input type="checkbox">
            CASH SALES 
        </div>
        <div class="box">
            <input type="checkbox">
            CHARGE SALES
        </div>
    </div>
    <div class="table-row-date">
        <table>
            <tbody>
                <tr>
                    <th>Date</th>
                    <th>{{ \Carbon\Carbon::parse(optional($details->first())->invoice_date)->format('F j, Y') }}</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-row"> SOLD TO</div>
    <div class="customer-container">
        <div class="left-column">
            <div class="info-row">
                <span class="info-label">Registered Name</span>
                <span class="info-colon">:</span>
                <span class="info-value"><strong>{{ optional($details->first())->SoldTo }}</strong></span>
            </div>
            <div class="info-row">
                <span class="info-label">TIN</span>
                <span class="info-colon">:</span>
                <span class="info-value">{{ optional($details->first())->Tin }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Business Address</span>
                <span class="info-colon">:</span>
                <span class="info-value">{{ optional($details->first())->Address }}</span>
            </div>
        </div>
        <div class="right-column">
            <div class="info-row">
                <span class="info-label">Buyer's PO No.</span>
                <span class="info-colon">:</span>
                <span class="info-value">{{ optional($details->first())->BuyersPo }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Buyer's Ref. No.</span>
                <span class="info-colon">:</span>
                <span class="info-value">{{ optional($details->first())->BuyersRef }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Sales Contract No.</span>
                <span class="info-colon">:</span>
                <span class="info-value">{{ optional($details->first())->SalesContractNo }}</span>
            </div>
        </div>
    </div>
    <div class="product-details">
        <table>
            <thead>
                <tr>
                    <th style="width: 40%; height: 16px;">Item Description/Nature of Service</th>
                    <th style="width: 20%">Quantity</th>
                    <th style="width: 20%;">Unit Cost/Price</th>
                    <th style="width: 20%">Amount</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                    $value_added_tax = 0;
                    $total_amount_payable = 0;
                @endphp
                @foreach ($details as $detail)
                @foreach ($detail->products as $product)
                        @php
                            $total += $product->Amount;
                            $vatable_unit_price = 0;
                            $vatable_amount = 0;
                            $vatable_amount = 0.12 * $product->Amount;
                            $vatable_unit_price = 0.12 * $product->UnitPrice;
                            $value_added_tax += $vatable_amount;
                            $total_amount_payable = $total + $value_added_tax;
                        @endphp
                        <tr>
                            <?php
                                $label = str_replace('(', '<br>(', $product->Description); 
                            ?>
                            <td style="font-weight: bold">{!! nl2br($label)!!}</td>
                            <td>
                                @if ($product->Quantity)
                                    {{ number_format($product->Quantity, 2) }}
                                    {{ $product->printUom }}
                                @endif
                            </td>
                            <td> 
                                {{ $product->DocCur }} {{ !empty($product->UnitPrice) ? ($product->UnitPrice) : '' }} 
                                @if ($product->printUom == "lbs")
                                    / lb
                                @elseif ($product->printUom == "kgs")
                                    / kg
                                @else
                                    
                                @endif
                            </td>
                            <td>{{ $product->DocCur }} {{ number_format(optional($product)->Amount, 2) }}</td>
                        </tr>
                        <tr>
                            <td>{{ ($product->SupplierCode) }}</td>
                        </tr>
                        @if ($details->first()->Type == 'vatable')
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            {{-- @if ( $product->DocCur == 'EUR') --}}
                            {{-- <td>ADD:21% VAT</td> --}}
                            {{-- @else --}}
                            <td>ADD:12% VAT</td>
                            {{-- @endif --}}
                            <td></td>
                            {{-- <td >{{ optional($details->first())->Currency }} {{ number_format($vatable_unit_price,2) }}</td> --}}
                            <td>{{ optional($details->first())->Currency }} {{ number_format($vatable_amount,2) }}</td>
                        @endif
                        <tr>
                            <td>{{ $product->U_SupplierCode }}</td>
                        </tr>
                        
                    @endforeach
                @endforeach
                <tr> 
                    <td style=" padding:10px; text-align: center">{!! nl2br(e(optional($details->first())->Remarks )) !!}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        {{-- <div style="position: relative; ">
            <span style="font-size:12px; position: fixed; ; bottom: 600px; left:500px; width: 30%;">
                @php
                    $remarks = optional($details->first())->RemarksTwo;
                @endphp
                    
                @if($remarks)
                    @php
                        $lines = explode("\n", $remarks); 
                    @endphp
                    <table style="width: 100%; border-collapse: collapse; font-size: 12px; margin: 0 auto;">
                        @foreach($lines as $line)
                            @php
                                preg_match('/^(.*?)(USD)?\s*([\d,\.]+)$/', trim($line), $matches);
                            @endphp
                            @if(count($matches) === 4)
                                <tr style="line-height: 10px">
                                    <td style="padding: 5px; text-align: left;">{{ $matches[1] }}</td>
                                    <td style="padding: 5px; text-align: left;">{{ $matches[2] }}</td>
                                    <td style="padding: 5px; text-align: right;">{{ $matches[3] }}</td>
                                </tr> 
                            @endif
                        @endforeach
                    </table>
                @else
                    <p></p>
                @endif
            </span>
        </div> --}}
        
        <div class="new-row">
            <div style="position: relative; ">
                <span style="font-size:12px; position: fixed; ; top: 465px; width: 60%;">
                    @if (optional($details->first())->ShowPhrex == 1)
                    {{ optional($details->first())->Phrex }}
                    @endif
                </span>
            </div>
            <div class="new-col-left">
                <div class="info-row">
                    <span class="info-name">Date of Shipment</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{ \Carbon\Carbon::parse(optional($details->first())->DateOfShipment)->format('F j, Y') }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Port of Loading</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->PortOfLoading }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Port of Destination</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->PortOfDestination }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Mode of Shipment</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->ModeOfShipment }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Terms of Delivery</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->TermsOfDelivery }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Feeder Vessel</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->FedderVessel }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Ocean Vessel</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->OceanVessel }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Bill of Lading No.</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->BillOfLading }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Container No.</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->ContainerNo }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Seal No.</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->SealNo }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="new-product-total">
        <div class="new-product-total-left">
            <div class="info-row">
                <span class="info-name">VATable Sales</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name">VAT</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name">Zero-Rated Sales</span>
                <span class="info-colon">:</span>
                <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($total, 2) }}</span>
            </div>
            <div class="info-row">
                <span class="info-name">VAT-Exempt Sales</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
        </div>
        <div class="payment_instruction">
            <div class="info-row" style="margin: 2px 0 8px 0px">
                Payment Instructions:
            </div>
            <div class="info-row">
                {!! nl2br(e(optional($details->first())->PaymentInstruction)) !!}
            </div>
        </div>
    </div>
    <div class="new-product-total" style="float:right">
        <div class="new-product-total-right">
            <div class="info-row">
                <span class="info-name"><span style="font-weight: bold">Total Sales</span> (VAT Inclusive)</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name">Less:VAT</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name">Amount: Net of VAT</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name">Add:VAT</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name">Less: Withholding Tax</span>
                <span class="info-colon">:</span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name"><span style="font-weight: bold">TOTAL AMOUNT DUE</span></span>
                <span class="info-colon">:</span>
                <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($total, 2) }}</span>
            </div>
        </div>
        <div class="terms">
            <div class="info-row">
                <span class="info-name">Terms of Payment</span>
                <span class="info-colon">:</span>
                <span class="info-detail">{{ optional($details->first())->TermsOfPayment }}</span>
            </div>
            <div class="info-row">
                <span class="info-name">Invoice Due Date</span>
                <span class="info-colon">:</span>
                <span class="info-detail">
                    {{ optional($details->first())->InvoiceDueDate ? \Carbon\Carbon::parse(optional($details->first())->InvoiceDueDate)->format('F j, Y') : '' }}
                </span>
            </div>
        </div>
        <div class="signature-section">
            <div class="acknowledge">
                <input type="checkbox">
                Received the amount of 
                <span class="amount-line"></span>
            </div>

            <div class="signature-block">
                <span class="signature-name">JOHN L. WEE</span>
                <div class="signature-label">Authorized Signature</div>
            </div>
        </div>
        
    </div>
    
</body>
</html>
