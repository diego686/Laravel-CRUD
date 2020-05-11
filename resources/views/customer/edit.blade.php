<h1>Edit Customer Details</h1>

<form action="/customers/{{ $customer->id }}" method="post">
    
    @method('PATCH')
    
    @include('customer.form')
    
    @csrf
    <button>Save Customer</button>
</form>