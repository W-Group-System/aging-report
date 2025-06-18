
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commercial Invoice</title>
    
    <style>
       @page{
        /* margin: 15px 25px; */
        margin: 70px 20px 15 20px;
       }
        
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-container {
            display: table; 
            width: 100%; 
            margin-bottom: 8px; 
        }
        .header-container .left .header span {
            font-size: 17px;
            font-weight: bold;
        }
        .header-container .left .header .line-two {
            font-size: 11px;
            font-style: italic;
        }
        .header-container .left .header .line-three {
            margin-top: 30px;
            font-size: 16px;
            font-weight: bold;
        }
        .header-container .left .header .date {
            margin-top: 40px;
            margin-bottom: 40px;
            margin-left: 600px;
            font-size: 12px;
        }
        .left, .right {
            display: table-cell;
            vertical-align: top;
        }
        .left {
            width: 50%;
        }
        .right {
            width: 80%;
            text-align: right; 
        }
        .header-container .right .line-one {
            font-size: 15px;
            font-style: italic;
            font-weight: bold;
            margin-top: 30px;
        }
        .header-container .right .line-two {
            font-style: italic;
            line-height: 1;
        }
        .header-medium-text{
            font-size: 10px;
            font: bold;
        }
        .header-small-text{
            font-size: 8px;
            display: block;
        }
        .customer-container {
            height: 80px;
            width: 100%;
        }
        .customer-container::after {
            content: "";
            display: table;
            clear: both;
        }
        .left-column, {
            float: left; 
            width: 70%; 
            font-size: 13px;
            line-height: 1;
        }
        .right-column {
            float: left; 
            width: 30%; 
            font-size: 13px;
            line-height: 1;
            /* margin-left: 73px;  */
        }
        .info-row {
            margin-bottom: 10px;
        }
        .info-row span {
            display: inline-block; /* Align label and value on the same line */
            vertical-align: top;   /* Ensure alignment between label and value */
        }
        .customer-container .left-column .info-label{
            width: 13%; 
            display: inline-block;
            vertical-align: top;  
            margin: 0;
            font-size: 11px;
            padding: 0;
        }
        .customer-container .right-column .info-row{
            margin-bottom: 10px
        }
        .customer-container .right-column .info-label{
            width: 35%; 
            display: inline-block;
            vertical-align: top;  
            margin: 0;
            font-size: 13px;
        }
        .customer-container .left-column .info-value{
            width:73%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .customer-container .right-column .info-value{
            width: 50%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .product-details table {
            width: 100%;
            border-collapse: collapse; /* Collapses table borders */
        }
        .product-details th{
            text-align: center; /* Align text to the left */
            font-size: 12px;
        }
        .product-details thead tr{
            border-bottom: 10px ; /* Table cell borders */
            text-align: center; 
        }
        .product-details th:first-child,
        td:first-child {
            border-left: none;
        }
        .product-details th:last-child,
        td:last-child {
            border-right: none;
        }
        .product-details td{
            text-align: center; /* Align text to the left */
            font-size: 12px;
        }
        .product-total {
            width: 100%;
            margin-top: 31.5px;
            margin-left: 100px;
            
        }
        .product-total::after {
            content: "";
            display: table;
            clear: both;
        }
        .total-left-column {
            float: left; 
            width: 40%; 
            font-size: 13px;
            line-height: 1;
            margin-left:80px;
            min-height: 84px;
            max-height: 84px;

        }
        .total-right-column, {
            float: left; 
            width: 40%; 
            font-size: 13px;
            line-height: 1;
            margin-left:-20px
        }
        .total-left-column .info-name{
            width: 35%; /* Fixed width for labels */
            display: inline-block;
            vertical-align: top;  
            margin: 0;
            font-size: 12px;
        }
        .total-right-column .info-name{
            width: 40%; /* Fixed width for labels */
            display: inline-block;
            vertical-align: top;  
            margin: 0;
            font-size: 12px;
        }
        .total-left-column .info-detail{
            width: 30%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
            text-align: right;
        }
        .total-right-column .info-detail{
            width: 30%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            text-align: right;
            word-wrap: break-word;
        }
        .info-name {
            width: 35%; /* Fixed width for labels */
            display: inline-block;
            vertical-align: top;  
            margin: 0
        }
        .info-colon {
            width: 5%; 
        }
        .info-detail {
            width: 35%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .payment_instruction .info-detail {
            width: 55%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .payment_instruction .info-row.multiline .info-detail {
            margin-top: -8px;
        }
        .payment_instruction .container .info-name {
            width: 28%; /* Fixed width for labels */
            display: inline-block;
            vertical-align: top;  
            margin: 0
        }
        .new-row .new-col-left .info-row {
            line-height: 4px;
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
            clear: both; 
            width: 100%; 
            display: block; 
        }
        .new-product-total .new-col-left .info-row {
            line-height: 6px;
        }
        .new-product-total .new-col-left .info-detail {
            width: 55%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .new-product-total .new-col-left .info-name{
            width: 26%; 
            font-size: 12px;
        }
        .new-product-total .new-col-left .info-colon{
            width: 5%; 
            font-size: 12px;
        }
        .total-sales-new {
            clear: both; 
            width: 100%; 
            display: block; 
        }
        .total-sales-new .info-row {
            line-height: 0.6;
        }
        .total-sales-new .info-detail {
            width: 55%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .total-sales-new .info-name{
            width: 24%; 
            font-size: 12px;
        }
        .total-sales-new .info-colon{
            width: 5%; 
            font-size: 12px;
        }
        .terms {
            clear: both; 
            width: 100%; 
            display: block; 
        }
        .terms .info-row {
            line-height: 1;
        }
        .terms .info-detail {
            width: 55%;
            display: inline-block;
            vertical-align: top;  
            font-size: 12px;
            word-wrap: break-word;
        }
        .terms .info-name{
            width: 35%; 
            font-size: 12px;
        }
        .terms .info-colon{
            width: 5%; 
            font-size: 12px;
        }
        .column-container{
            margin-top: 3;
        }

        .total {
            width: 100%;
            font-family: Arial, sans-serif;
            /* font-size: 14px; */
            margin-bottom: 41px;

        }

        .total-value {
            font-weight: bold;
            position: relative;
            margin-left: 75%;
            font-size: 18px
        }
        .remarks{
            font-size: 12px;
            float: left; 
            width: 50%;
        }
        /* New */
        .new-row {
            clear: both; 
            width: 100%; /* Ensures full width */
        }
        .new-col {
            display: table;                /* Set the outer div to behave like a table */
            width: 100%;                   /* Ensure it takes full width */
            margin: 10px 0;               /* Optional margin for spacing */
        }

        .shape,
        .payment-instruction {
            display: table-cell;           /* Set children to behave like table cells */
            vertical-align: middle;        /* Center content vertically within the cell */
        }
        
        .payment_instruction {
            margin-left: -5px;
            margin-top: 150px;
            float: left; 
            width: 50%; 
            font-size: 13px;
        }
        .new-col-left {
            float: left; 
            width: 50%; 
            font-size: 13px;
        }

        .left-box .new-col {
            font-size: 14px;
            align-items: center;
        }
        .left-align {
            text-align: left;
        }
        .center-align {
            text-align: center;
        }
        .signature {
            margin-left: -30px;
            margin-top: -50px;
            float: right; 
            width: 50%; 
            font-size: 13px;
        }
        .signature-space {
            width: 200px; 
            margin: 5px 100px 0 125px;
            font-weight: bold;
        }
        .footer {
            width: 100%;
            position: fixed; 
            bottom: 0;
            font-size: 12px;
        }


        .footer-left {
            float: left; 
            line-height: 0;
        }

        .footer-right {
            float: right; 
        }
        .float-info {
           margin-top:-18px;
        }
    </style>
</head>
<body>

<div class="header-container">
    <div class="left">
        <div class="header">
            @if ($details->isNotEmpty())
            <div class="date"> {{ \Carbon\Carbon::parse(optional($details->first())->invoice_date)->format('F j, Y') }}</div>
            @endif
        </div>
    </div>
    
</div>
<div class="customer-container">
    <div class="left-column">
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value"><strong>{{ optional($details->first())->SoldTo }}</strong></span>
        </div>
        <div class="info-row" style="margin-bottom: 15px">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value">{{ optional($details->first())->Tin }}</span>
        </div>
        @php
            $address = optional($details->first())->Address;
            $wordCount = str_word_count($address);
        @endphp

        <div class="info-row {{ $wordCount > 20 ? 'float-info' : '' }}">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value">{{ $address }}</span>
        </div>
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value"></span>
        </div>
    </div>
    <div class="right-column">
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value">{{ optional($details->first())->BuyersPo }}</span>
        </div>
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value">{{ optional($details->first())->BuyersRef }}</span>
        </div>
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value">{{ optional($details->first())->SalesContract }}</span>
        </div>
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value"></span>
        </div>
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value"></span>
        </div>
        <div class="info-row">
            <span class="info-label"></span>
            <span class="info-colon"></span>
            <span class="info-value"></span>
        </div>
    </div>
</div>
<div class="product-details" style="min-height: 257px; max-height:257px; margin-left:40px; margin-right:40px;">
    <table style="">
        <thead>
            <tr>
                <th style="width: 42%; height: 16px;"></th>
                <th style="width: 15%; "></th>
                <th style="width: 14%"></th>
                <th style="width: 20%"></th>
                <th style="width: 14%;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2"  style="font-weight: bold; padding:10px; text-align: center">{{ optional($details->first())->U_Remark3 }}</td>
            </tr>
            @php
                $total_vatable_unit_price = 0;
                $total = 0;
                $vat_inclusive = 0;
                $total_vatable_amount = 0;
            @endphp
            @foreach ($details as $detail)
            @foreach ($detail->products as $product)
            @php
                    // if (($product)->DocCur == 'EUR') {
                    //     $unit_price = ($product->Amount) /  ($product->Quantity) ;
                    //     $vatable_unit_price = $unit_price * 0.21;
                    //     $total_vatable_unit_price += $vatable_unit_price;
                    //     $vatable_amount = ($product->Amount) * 0.21;
                    //     $total_vatable_amount += $vatable_amount;

                    //     $total += $product->Amount;
                    //     $vat_inclusive = $total + $total_vatable_amount;
                    // } else {
                        $unit_price = ($product->Amount) /  ($product->Quantity) ;
                        $vatable_unit_price = $unit_price * 0.12;
                        $total_vatable_unit_price += $vatable_unit_price;
                        $vatable_amount = ($product->Amount) * 0.12;
                        $total_vatable_amount += $vatable_amount;

                        $total += $product->Amount;
                        $vat_inclusive = $total + $total_vatable_amount;
                    // }
            @endphp
            <tr>
                <?php
                $label = str_replace('(', '<br>(', $product->Description); 
                ?>
                <td style="font-weight: bold">{!! nl2br($label)!!}</td>
                <td></td>
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
            <tr>
                <td></td>
                <td></td>
                {{-- @if ( $detail->DocCur == 'EUR')
                    <td><strong>ADD:21% VAT</strong></td>
                    @else --}}
                    <td><strong>ADD:12% VAT</strong></td>
                {{-- @endif --}}
                <td> 
                    {{-- {{ optional($product)->DocCur }} {{ $vatable_unit_price }} --}}
                </td>
                <td>{{ optional($product)->DocCur }} {{ number_format($vatable_amount, 2) }}</td>
            </tr>
            {{-- <tr>
                <td style=" padding:10px; text-align: center">{{ optional($details->first())->U_Remark1 }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td ></td>
            </tr> --}}
            @endforeach
            @endforeach
            <tr>
                <td style=" padding:10px; text-align: center">{!! nl2br(e(optional($details->first())->Remarks )) !!}</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
           </tr>
            <tr>
                <td style="padding: 10px; text-align: center;">
                   @php
                       $remarks = optional($details->first())->RemarksTwo;
                   @endphp
           
                   @if($remarks)
                       @php
                           $lines = explode("\n", $remarks); 
                       @endphp
                       <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin: 0 auto;">
                           @foreach($lines as $line)
                               @php
                                   preg_match('/^(.*?)(USD)?\s*([\d,\.]+)$/', trim($line), $matches);
                               @endphp
                               @if(count($matches) === 4)<tr style="line-height: 10px">
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
               </td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
           </tr>
            {{-- <tr>
                <td style=" padding:10px; text-align: center">{!! nl2br(e(optional($details->first())->RemarksTwo )) !!}</td>
                <td></td>
                <td></td>
                <td></td>
                <td ></td>
            </tr> --}}
        </tbody>
    </table>
</div>
<div style="position: relative; ">
    <span style="font-size:12px; position: fixed; ; bottom: 725px; width: 60%;">
        @if (optional($details->first())->ShowPhrex == 1)
           {{ optional($details->first())->Phrex }}
         @endif
    </span>
</div>
<div class="new-row">
    <div class="new-col-left" style="margin-top: 120px; font-size:16px; height:80px">
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

    <div class="new-product-total">
        <div class="new-col-left" style="margin-top: 77px; font-size:16px; height:80px">
            <div class="info-row">
                <span class="info-name"></span>
                <span class="info-colon"></span>
                <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($total, 2) }}</span>
            </div>
            <div class="info-row">
                <span class="info-name"></span>
                <span class="info-colon"></span>
                <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($vatable_amount,2) }}</span>
            </div>
            <div class="info-row">
                <span class="info-name"></span>
                <span class="info-colon"></span>
                <span class="info-detail"></span>
            </div>
            <div class="info-row">
                <span class="info-name"></span>
                <span class="info-colon"></span>
                <span class="info-detail"></span>
            </div>
        </div>
    </div>
    
    <div style="position: relative; ">
        <span style="font-size:11px; position: fixed; left: 545px; bottom: 433px; width: 38%; ">
            <div class="total-sales-new">
                <div class="info-row">
                    <span class="info-name"></span>
                    <span class="info-colon"></span>
                    <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($vat_inclusive, 2) }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name"></span>
                    <span class="info-colon"></span>
                    <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($total_vatable_amount,2) }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name"></span>
                    <span class="info-colon"></span>
                    <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($total, 2) }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name"></span>
                    <span class="info-colon"></span>
                    <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($vatable_amount, 2) }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name"></span>
                    <span class="info-colon"></span>
                    <span class="info-detail"></span>
                </div>
                <div class="info-row">
                    <span class="info-name"></span>
                    <span class="info-colon"></span>
                    <span class="info-detail">{{ optional($details->first()->products->first())->DocCur }} {{ number_format($vat_inclusive,2) }}</span>
                </div>
            </div>
        </span>
    </div>
    <div style="position: relative; ">
        <span style="font-size:11px; position: fixed; left: 470px; bottom: 350px; width: 38%; ">
            <div class="terms">
                <div class="info-row">
                    <span class="info-name">Terms of Payment</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail">{{optional($details->first())->TermsOfPayment }}</span>
                </div>
                <div class="info-row">
                    <span class="info-name">Invoice Due Date</span>
                    <span class="info-colon">:</span>
                    <span class="info-detail"> {{ optional($details->first())->InvoiceDueDate ? \Carbon\Carbon::parse(optional($details->first())->InvoiceDueDate)->format('F j, Y') : '' }}</span>
                </div>
            </div>
        </span>
    </div>
    <div class="payment_instruction">
        <div class="left-box" style="min-height: 210px;max-height: 210px">
            <div class="new-col">
                <div class="payment-instruction">
                <div class="left-align">
                    <div class="info-row" style="margin: 2px 0 8px 0px"></span>
                        Payment Instructions:
                    </div>
                    <div class="info-row">
                        {!! nl2br(e(optional($details->first())->PaymentInstruction)) !!}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="new-row">
    <div class="signature">
        <div class="center-align">
                <div class="signature-space"><span>JOHN L. WEE</span></div>
            <br>
        </div>
    </div>
</div>
</body>
</html>
