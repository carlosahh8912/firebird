
<table>
    <thead>
        <tr>
            <th>SKU</th>
            <th>EAN</th>
            <th>DESCR</th>
            <th>MARCA</th>
            <th>STOCK</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
                <tr>
                    <th>{{ $product->CVE_ART }}</th>
                    <td>0123456789012</td>
                    <td>{{ $product->DESCR }}</td>
                    <td>{{ $product->brand->DESC_LIN }}</td>
                    <td>{{ $product->EXIST }}</td>
                </tr>
        @endforeach
    </tbody>
</table>
