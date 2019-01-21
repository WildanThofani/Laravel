
<br />
@foreach ($supplier as $supplierlist)

<p style="color: #ff0000;">{{ $supplierlist->supplier_id }} </p>
<p style="color: green;">{{ $supplierlist->supplier_name }} </p>
{{ $supplierlist->supplier_address }}

<br />
@endforeach
<br> <br> <br>
<a href="{{ url('Supplier/create') }}" >
pencet saya dong
</a>