<div class="container">
<form action="{{ route('fakerCreate') }}" method="POST">
    @csrf
    <button type="submit" class="form-control">Create new by Faker</button>
</form>
</div>
