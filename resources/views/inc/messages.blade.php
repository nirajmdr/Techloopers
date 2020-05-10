{{-- Success message after contact form fillup --}}
@if (session('Success'))
  <div class="alert alert-success text-center">
    {{ session('Success') }}
  </div
@endif


{{-- Error Message for contact form --}}
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
