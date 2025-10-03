
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commercial Invoice</title>
    
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-container {
            display: table; 
            width: 100%; 
            padding-bottom: 20px; 
        }
        .header-container .left .header .line-two {
            font-size: 11px;
        }
        .header-container .left .header .line-three {
            margin-top: 30px;
            font-size: 16px;
            font-weight: bold;
        }
        .header-container .left .header .date {
            margin-top: 30px;
            font-size: 9px;
        }
        .header-small-text{
            font-size: 12px;
            display: block;
            margin-left: 110px
        }
        .desc-right {
            margin-left: 70px; 
            margin-top: 20px;
        }
        .left, .right {
            display: table-cell;
            vertical-align: top;
        }
        .left {
            width: 50%;
        }
        .right {
            width: 50%;
        }
        .header-large-text{
            font-size: 26px;
            font: bold;
        }
        .header-medium-text{
          font-size: 8px;
          display: block;
        }
        
        .customer-container {
            width: 100%;
        }
        .customer-container::after {
            content: "";
            display: table;
            clear: both;
        }
        .left-column {
            float: left; 
            width: 60%; 
            font-size: 12px;
            line-height: 1.5;
        }
        .customer-container .left-column .info-row {
            margin-bottom: 5px; 
        }
        .customer-container .left-column .info-label {
            width: 20%; 
            display: inline-block;
            margin-right: 30px;
            vertical-align: top;   
        }
        .customer-container .left-column .info-value {
            width: 70%; 
            word-wrap: break-word; 
            vertical-align: top;   
        }
        .customer-container .right-column .info-row{
            margin-bottom: 10px; 
        }
        .customer-container .right-column .info-label {
            width: 35%; 
            display: inline-block;
            margin-right: 10px;
            vertical-align: top; 
        }
        .customer-container .right-column .info-value {
            width: 45%; 
            word-wrap: break-word; 
            vertical-align: top;   
        }
        .right-column {
            float: left; 
            width: 40%; 
            font-size: 12px;
            line-height: 1.5;
        }
        .info-row {
            margin-bottom: 5px;
        }
        .info-row span {
            display: inline-block; 
            vertical-align: top;  
        }
        .info-label {
            width: 30%; /* Fixed width for labels */
            display: inline-block;
            margin-right: 0;
            vertical-align: top;   /* Align the label with the top of the value */
        }
        .info-value {
            width: 43%; /* Width for values */
            word-wrap: break-word; /* Allow long values to break to the next line */
            vertical-align: top;   /* Align the value with the top */
        }
        .upper-table {
            border: 1px solid black;
            max-height: 300px;
            min-height: 300px;
            width: 100%;
            font-size: 12px;
            overflow: hidden;   
        }
        .upper-table .top-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        .upper-table .top-table th{
            border: 1px solid #000; 
            border-top: none;           
            text-align: center; 
            vertical-align: top;
        }
        .product-details .upper-table th:first-child {
            border-left: none; 
        }
        .product-details .upper-table th:last-child {
            border-right: none; 
        }
        .upper-table .top-table tbody tr td:first-child {
            border-left: none;
        }
        .upper-table .top-table tbody tr td:last-child {
            border-right: none;
        }
        .upper-table .top-table td{
            padding: 1 8px; 
            border-left: 1px solid #000;
            text-align: center; 
            vertical-align: top;
            border-right: 1px solid #000;
        }
        /* .upper-table .top-table tbody tr:last-child td {
            border-bottom: 1px solid #000;
        } */
        .middle-table{
            width: 100%;
            border-collapse: collapse; /* Collapses table borders */
            font-size: 12px;
        }
        .middle-table tr:last-child td {
            border-bottom: 1px solid black;
            
        }
        .middle-table tr{
            border-right: 1px solid black;
            border-left: 1px solid black;
            padding: 10px;
            
        }
        .middle-table .label-column{
            text-align: left;
            width: 30%;
        }
        .middle-table .value-column {
            width: 10%;

        }
        .bottom-table{
            width: 100%;
            border-collapse: collapse; /* Collapses table borders */
            font-size: 12px;
        }
        .bottom-table tr:last-child td {
            border-bottom: 1px solid black;
            
        }
        .bottom-table tr{
            border-right: 1px solid black;
            border-left: 1px solid black;
            padding: 10px;
            vertical-align: top
            
        }
        .bottom-table .label-column{
            text-align: left;
            width: 12%;
            padding-left: 0px;
        }

        .bottom-table .value-column{
            text-align: left;
            width: 44%;
            /* padding-left: 10px */
        }
        /* New */
        .new-row {
            clear: both; 
            width: 100%; /* Ensures full width */
            display: block; /* Block display to break to a new line */
        }
        .footer {
            width: 100%;
            position: fixed; 
            bottom: 0;
            font-size: 12px;
            bottom: -40px;
            right: 10px;
        }
        .footer img {
            width: 750px;
            height: auto;
        }
    </style>
</head>
<body>
    
<div class="header-container">
    <div class="left">
        <div class="header">
            <div class="line-two">WS-L3-FM-23</div>
            <div class="new-row">
              <div class="group">
                <div class="image" style="float: left">
                  <img src="{{ asset('/images/pbi_black.jpg')}}" alt="Company Logo" style="width: 100px; width:100px;"> 
            </div>
            <div class="text">
              <span class="header-small-text">PHILIPPINE BIO INDUSTRIES, INC.</span>
              <span class="header-small-text">103 Integrity Avenue, Carmelray Industrial</span>
              <span class="header-small-text">Park 1, Canlubang, Calamba City,</span>
              <span class="header-small-text">Laguna 4028, Philippines</span>
              <span class="header-small-text">Tel: (02) 8856-3838 / Fax (02) 8856-1033</span>
            </div>
              </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div style="margin:25px 0 0 30px;text-align: left; font-size: 11px;">
            <span class=""> VAT REG. TIN: 000-316-923-000</span>
        </div>
        <div class="desc-right">
            <div class="info-row">
                <span style="font-size: 20px;"><strong>SALES INVOICE</strong></span>
            </div>
            <div class="info-row">
              <span style="font-size: 15px;"><strong>NO.</strong><strong style="font-size: 20px;color:red;"> {{(optional($details->first())->InvoiceNumber) }}</strong></span>
          </div>
        </div>
    </div>
</div>

<div class="content">
    {{-- <div class="customer-container" style="margin-bottom: 15px;">
        <div class="left-column">
      
        </div>
        <div class="right-column">
            <div class="info-row">
                <span style="font-size: 17px;"><strong>SALES INVOICE</strong></span>
            </div>
            <div class="info-row">
              <span style="font-size: 17px;color:red"><strong>NO. {{ optional($details->first())->SoaNo }}</strong></span>
          </div>
        </div>
      </div> --}}
      <div class="customer-container">
          <div class="left-column">
              <div class="info-row">
                  <span class="info-label">Sold To:</span>
                  <span class="info-value">{!! nl2br(optional($details->first())->SoldTo)!!}</span>
              </div>
              <div class="info-row" style="min-height:50px">
                  <span class="info-label">Address:</span>
                  <span class="info-value">{!! nl2br(e(optional($details->first())->Address)) !!}</span>
              </div>
              <div class="info-row">
                <span class="info-label">Ship To:</span>
                <span class="info-value">{!! nl2br(e(optional($details->first())->ShipTo)) !!}</span>
            </div>
              <div class="info-row">
                  <span class="info-label">TIN:</span>
                  <span class="info-value">{{ optional($details->first())->Tin }}</span>
              </div>
              <div class="info-row">
                  <span class="info-label">Business Style:</span>
                  <span class="info-value">{{ optional($details->first())->BusinessStyle }}</span>
              </div>
          </div>
          <div class="right-column">
              <div class="info-row">
                  <span class="info-label">Date:</span>
                  <span class="info-value">{{ \Carbon\Carbon::parse(optional($details->first())->invoice_date)->format('F j, Y') }}</span>
              </div>
              <div class="info-row">
                  <span class="info-label">Customers PO. #:</span>
                  <span class="info-value">{{ optional($details->first())->BuyersPo }}</span>
              </div>
              <div class="info-row">
                  <span class="info-label">Buyers Ref. No.:</span>
                  <span class="info-value">{{ optional($details->first())->BuyersRef }}</span>
              </div>
              <div class="info-row">
                <span class="info-label">Terms / Due Date:</span>
                <span class="info-value">
                    @if (optional($details->first())->InvoiceDueDate)
                        {{ \Carbon\Carbon::parse(optional($details->first())->InvoiceDueDate)->format('F j, Y') }}</span>
                    @else 
                    @endif
                </span>
            </div>
              <div class="info-row">
                  <span class="info-label">Payment Terms:</span>
                  <span class="info-value">{{ optional($details->first())->TermsOfPayment }}</span>
              </div>
              <div class="info-row">
                  <span class="info-label">SO #:</span>
                  <span class="info-value">{{ optional($details->first())->SoNo }}</span>
              </div>
              <div class="info-row">
                <span class="info-label">DR #:</span>
                <span class="info-value">{{ optional($details->first())->DrNo }}</span>
            </div>
            <div class="info-row">
              <span class="info-label">Container #:</span>
              <span class="info-value">{{ optional($details->first())->ContainerNo }}</span>
          </div>
          <div class="info-row">
            <span class="info-label">Seal #:</span>
            <span class="info-value">{{ optional($details->first())->SealNo }}</span>
        </div>
          </div>
      </div>
      <div class="product-details">
            <div class="upper-table">
                @php
                    $containerHeightPx = 450;        
                    $headerRowCount   = 1;          
                    $headerRowHeight  = 28;         
                    $rowHeightPx      = 28;         
                    $columnsCount     = 6;         

                    $availableForBody = $containerHeightPx - ($headerRowCount * $headerRowHeight);
                    $minBodyRows      = max(0, (int) ceil($availableForBody / $rowHeightPx));
                    $actualRows       = count($details); 
                @endphp
                <table class="top-table">
                <thead>
                    <tr>
                        <th style="width: 17%">PRODUCT CODE</th>
                        <th style="width: 41%">PRODUCT DESCRIPTION</th>
                        <th style="width: 15%">QUANTITY</th>
                        <th style="width: 12%">UNIT PRICE</th>
                        <th style="width: 15%">AMOUNT</th>
                    </tr>
                </thead>
                @php
                    $total = 0;
                    $value_added_tax = 0;
                    $total_amount_payable = 0;
                @endphp
                @foreach ($details as $detail)
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{ $detail->Uom }}</td>
                        <td>{{ $detail->Currency }}</td>
                        <td>{{ $detail->Currency }}</td>    
                    </tr>
                <tbody>
                    @foreach ($detail->products as $product)
                        @php
                        $total += $product->Amount;
                        $vatable_amount = 0;
                        // if (($detail)->DocCur == 'EUR') {
                        //         $vatable_amount = 0.21 * $product->TotalFrgn;
                        //         $value_added_tax += $vatable_amount;
                        //     } else {
                                $vatable_amount = 0.12 * $product->Amount;
                                $value_added_tax += $vatable_amount;
                            // }
                    @endphp
                    @php
                        $total_amount_payable = $total + $value_added_tax;
                    @endphp
                
                    <tr>
                        <td style="text-align: left;">{{ $product->ProductCode }}</td>
                        <td style="text-align: left;">{{ $product->Description }}</td>
                        <td>{{ $product->Quantity !== null && $product->Quantity != 0 ? number_format($product->Quantity, 2) : '' }}</td>
                        <td>{{ $product->UnitPrice !== null && $product->UnitPrice != 0 ? number_format($product->UnitPrice, 2) : '' }}</td>
                        <td>{{ $product->Amount !== null && $product->Amount != 0 ? number_format($product->Amount, 2) : '' }}</td>
                    </tr>
                    {{-- @if ($details->first()->Type == 'vatable')

                        <tr>
                            <td></td>
                            <td style="text-align: left">Add 12% Vat</td>
                            <td></td>
                            <td></td>
                            <td>{{ number_format($vatable_amount,2) }}</td>
                        </tr>
                    @endif --}}
                    @endforeach
                    <tr>
                        <td style="width: 90px;"></td>
                        <td style="width: 223px; text-align:left; padding-left: 10px; box-sizing: border-box;"></td>
                        <td style="width: 80px;"></td>
                        <td style="width: 60px;"></td>
                        <td style="width: 75px; padding:0;border-bottom: 1px double black; border-top:1 px solid black;text-align: center;">{{ number_format($total,2) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="width: 223px; text-align:left;padding-left: 20px; box-sizing: border-box;">{!! nl2br(e(optional($details->first())->Remarks )) !!}</td>
                        <td></td>
                        <td></td>
                        <td ></td>
                    </tr>
                    @for ($i = max(0, $actualRows); $i < $minBodyRows; $i++)
                        <tr style="height: {{ $rowHeightPx }}px;">
                            @for ($c = 0; $c < $columnsCount; $c++)
                                <td>&nbsp;</td>
                            @endfor
                        </tr>
                    @endfor
                </tbody>
                @endforeach
            </table>
        </div>
          <table class="middle-table"  style="margin-top:0; border-top:none;">
            <tbody >
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Vatable Sales</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">VAT Exempt Sale</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">VAT Zero Rated Sales</td>
                    <td class="value-column">{{ (number_format($total,2)) }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Total Sales</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Value Added Tax</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Total Amount Payable</td>
                    <td class="value-column">{{ (number_format($total,2)) }}</td>
                </tr>
                {{-- @elseif ($details->first()->Type == 'vatable')
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Vatable Sales</td>
                    <td class="value-column">{{ (number_format($total,2)) }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">VAT Exempt Sale</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">VAT Zero Rated Sales</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Total Sales</td>
                    <td class="value-column"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Value Added Tax</td>
                    <td class="value-column">{{ (number_format($value_added_tax,2)) }}</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td class="label-column">Total Amount Payable</td>
                  <td class="value-column">{{ (number_format($total_amount_payable,2)) }}</td>
              </tr>
              @elseif ($details->first()->Type == 'exempt')
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="label-column">Vatable Sales</td>
                        <td class="value-column"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="label-column">VAT Exempt Sale</td>
                        <td class="value-column">{{ (number_format($total,2)) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="label-column">VAT Zero Rated Sales</td>
                        <td class="value-column"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="label-column">Total Sales</td>
                        <td class="value-column"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="label-column">Value Added Tax</td>
                        <td class="value-column"></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td class="label-column">Total Amount Payable</td>
                    <td class="value-column">{{ (number_format($total,2)) }}</td>
                </tr> --}}
            </tbody>
        </table>
        <div style="position: relative; ">
            <p style="font-size:13px; font-weight: bold; position: fixed; left: 280px; bottom: 250px;">VAT ZERO-RATED</p>
            <p style="font-size:10px; position: fixed; margin-left: 20px; bottom: 280px;">Packaging Code: P52</p>
        </div>
        <table class="bottom-table"  style="margin-top:0; border-top:none;">
          <tbody >
              <tr style="">
                  <td class="label-column">Please Remit Payment To</td>
                  <td class="value-column">
                    <span>{!! nl2br(e(optional($details->first())->PaymentInstruction)) !!}</span>
                    </td>
                @php
                    $name = auth()->user()->name;
                    $parts = explode(' ', $name);
                    $initial = strtoupper(substr($parts[0], 0, 1)) . '.';
                    if (count($parts) > 2) {
                        $lastName = $parts[count($parts) - 1];
                    } else {
                        $lastName = isset($parts[1]) ? $parts[1] : '';
                    }
                @endphp
                  <td class="">
                    Prepared by <br> <br>
                    <div class="esign" style="margin-bottom: -10px; margin-top: -15px;">
                        @if (optional($details->first())->ShowSignature)
                        <img src="{{ asset('/images/esign/lovely_esign.png')}}" 
                            style="width: 60px; height: auto;">
                        @endif
                    </div>
                    <span>L. Crispin</span> <br> <br>
                    {{-- <span>{{ $initial }} {{ $lastName }}</span> <br> <br> --}}
                    Checked by <br> <br>
                    <span></span> <br> <br></td>
                  <td class=""></td>
                  <td class="">Approved by <br> <br> <br>
                    <div class="esign" style="margin-bottom: -20px; margin-top: -15px;">
                        @if (optional($details->first())->ShowSignature)
                        <img src="{{ asset('/images/esign/josephine_esign.png')}}" 
                            style="width: 60px; height: auto;">
                        @endif
                    </div>
                    <span>J. Galera</span> <br> <br>
                </td>
                  <td class=""></td>
              </tr>
          </tbody>
      </table>
      </div>
      
</div>
<div class="new-row">
    <div class="footer">
        <img src="{{ asset('/images/pbi_draft_footer.jpg')}}" alt="Company Logo" > 
    </div>
</div>


</body>
</html>
