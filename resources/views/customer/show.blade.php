
@foreach ($customer as $customerlist)

{{ $customerlist->customer_id }}
{{ $customerlist->name }}
{{ $customerlist->address }}

<br />
@endforeach

<a href="{{ url('Customer') }}" >
Back
</a>