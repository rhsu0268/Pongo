<html>
    <head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
    </head>
    <h1>Sales Receipt</h1>
    <table class="table table-bordered" style="width:100%">
        <tr>
            <td>Item</td>
            <td>Category</td>
            <td>One Line Description</td>
            <td>Price</td>
        </tr>
        <tr>
            <td>{{$item->item}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->one_line_description}}</td>
            <td>${{$item->price}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Tax</td>
            <td>${{$transactionBuy->tax}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>${{$transactionBuy->total}}</td>
        </tr>
    </table>
</html>
