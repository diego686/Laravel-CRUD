<div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value=" {{ old('name') ?? $customer->name }}">
    @error('name') <p class="error">{{ $message }}</p> @enderror
</div>

<div>
    <label for="email">Email</label>
    <input type="text" name="email" autocomplete="off" value=" {{ old('email') ?? $customer->email }}">
    @error('email') <p class="error">{{ $message }}</p> @enderror
</div>

@csrf