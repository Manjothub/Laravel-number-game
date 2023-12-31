<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
    .center-form {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
  </head>
  <body>
    <div class="container center-form">
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 400px;">
        <div class="card-body">
            @isset($generatedNumber)
        <p>Generated Number: {{ $generatedNumber }}</p>
        <p>User Input: {{ $userNumber }}</p>

        @if ($isMatch)
            <p>Match: Yes</p>
            <script>
                alert('Congratulations! The numbers match.');
            </script>
        @else
            <p>Match: No</p>
            <script>
                alert('Sorry, the numbers do not match.');
            </script>
        @endif
    @endisset
            <form method="POST" action="{{ route('send_number') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Number</label>
                    <input type="text" class="form-control" name="number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>