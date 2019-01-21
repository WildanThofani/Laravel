
@foreach ($customer as $customerlist)

{{ $customerlist->customer_id }}
{{ $customerlist->name }}
{{ $customerlist->address }}
<br>
<a href="
/Customer/{{ $customerlist->customer_id }}">show</a>
<br />
<a href="
/Customer/{{ $customerlist->customer_id }}/edit">edit</a>
<form action="/Customer/
{{$customerlist->customer_id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE')}}
<button>X</button>
</form>
@endforeach

<br>
<a href="{{ url('Customer/create') }}" >
Back
</a>