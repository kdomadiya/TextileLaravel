<?php
use App\Models\Setting;
use App\Models\Product;
use App\Models\Account;
?>
<html>
<head>
    <style>
    body {
        font-family: sans-serif;
        font-size: 10pt;
    }

    p {
        margin: 0pt;
    }

    table.items {
        border: 0.1mm solid #e7e7e7;
    }

    td {
        vertical-align: top;
    }

    .items td {
        border-left: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    table thead td {
        text-align: center;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.blanktotal {
        background-color: #EEEEEE;
        border: 0.1mm solid #e7e7e7;
        background-color: #FFFFFF;
        border: 0mm none #e7e7e7;
        border-top: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    .items td.totals {
        text-align: right;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.cost {
        text-align: "."center;
    }
    </style>
</head>

<body>
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="100%" style="padding: 0px; text-align: center;">
              <a href="#" target="_blank"></a>
            </td>
        </tr>
        <tr>
            <td width="100%" style="text-align: center; font-size: 20px; font-weight: bold; padding: 0px;">
              Quotation
            </td>
        </tr>
        <tr>
          <td height="10" style="font-size: 0px; line-height: 10px; height: 10px; padding: 0px;">&nbsp;</td>
        </tr>
    </table>
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="49%" style="border: 0.1mm solid #eee;">Name<br></td>
            <td width="2%">&nbsp;</td>                                       
            <td width="49%" style="border: 0.1mm solid #eee; text-align: right;">
                
                <strong>{{ $orders['account']['firstname'] }} {{ $orders['account']['lastname'] }}</strong>
                <strong>{{ $orders['account']['pancard'] }}</strong><br>
                <strong>{{ $orders['account']['pancard'] }}</strong><br>
                <strong>{{ $orders['account']['mobile'] }}</strong>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <tr>
            <td>
                <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table class="items" width="100%" style="font-size: 14px; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>
                <td width="15%" style="text-align: left;"><strong>No.</strong></td>
                <td width="45%" style="text-align: left;"><strong>Item</strong></td>
                <td width="20%" style="text-align: left;"><strong>Amount</strong></td>
                <td width="20%" style="text-align: left;"><strong>Qty</strong></td>
                <td width="20%" style="text-align: left;"><strong>Total</strong></td>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($orders['order'] as $key => $order)
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">{{ $key + 1 }}</td>
                <td style="padding: 0px 7px; line-height: 20px;">{{ $order['product']['name'] }}</td>
                <td style="padding: 0px 7px; line-height: 20px;">{{ $order['amount'] }}</td>
                <td style="padding: 0px 7px; line-height: 20px;">{{ $order['quantity'] }}</td>
                <td style="padding: 0px 7px; line-height: 20px;">{{ $order['price'] }}</td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <tr>
            <td>
                <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                    </tr>
                </table>
                <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Subtotal</strong></td>
                        {{-- <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ $orders['subtotal'] }}</td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Tax</strong></td>
                        {{-- <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ $orders['tax'] }}</td> --}}
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Total</strong></td>
                        {{-- <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ $orders['total'] }}</td> --}}
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    </td>
        </tr>
        <br>
    </table>
</body>
</html>