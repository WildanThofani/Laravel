<br>
@foreach ($customer as $customerlist)
<form action="{{ route('Customer.update',
$customerlist->customer_id) }}" method="post">

{{ csrf_field() }}
{{ method_field('PUT')}}
<br>
    <input type="text"
    name="txt_name"
    value="{{ $customerlist->name }}" />
    <br>
    <input type="text"
    name="txt_address"
    value="{{ $customerlist->address }}" />
<br>
@endforeach
<br>
<button type="submit">Submit</button>
<a href="{{ url('Customer') }}" >
<br>
back
</a>
