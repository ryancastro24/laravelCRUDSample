<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="{{ route('saveAccount') }}" method="post">
   @csrf
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




<div class="container mt-3">
  <h1>Admin Management</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
    @if($accounts)
    @foreach ($accounts as $account)
      <tr>
        <td>{{ $account->email }}</td>
        <td>{{ $account->pass }}</td>
        <td class="text-center"><a href="{{ route('deleteAcc', $account->id) }}" class="btn btn-danger">Delete</a>  <a href="{{ route('getAcc', $account->id) }}" class="btn btn-primary">Update</a></td>
      
      </tr>
      @endforeach
     @endif
    </tbody>
  </table>
</div>
</body>
</html>
