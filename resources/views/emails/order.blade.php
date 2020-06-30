<h1>
    Dear {{ $name }}!
</h1>
<br>
<h3>Thank you for choosing to shop with BathroomBuddy. Your order has been successfully registered.</h3>
<br>

<h3>Order Details</h3>
<br>
<h4><b>Ordered by</b> : {{ $name }}</h4>

<h4><b>Email</b> : {{ $email }}</h4>

<h4><b>Shipping address</b> : {{ $address }}</h4>

<h4><b>Date</b> : {{ $date }}</h4>

<h3><b>Total Amount Paid</b> : ${{ $totalAmount }}</h3>
<br>

<h3>Items details</h3>
<table border="2" style="border-collapse: collapse">
    <tr>
        <th>
            Product Code
        </th>
        <th>
            Name
        </th>
        <th>
            Price(AUD)
        </th>
        <th>
            Quantity
        </th>
        <th>
            Total Price(AUD)
        </th>
    </tr>
    @foreach($cartItems as $item)
    <tr>
        <td>{{ $item['item']->product_code }}</td>
        <td>{{ $item['item']->product_name }}</td>
        <td>${{ $item['item']->product_price }}</td>
        <td>{{ $item['qty'] }}</td>
        <td>${{ $item['price'] }}</td>
    </tr>
        <tr>
            <td colspan="3"></td>
            <td>Total : </td>
            <td>${{ $totalAmount }}</td>
        </tr>
    @endforeach
</table>