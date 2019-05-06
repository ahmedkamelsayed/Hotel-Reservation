<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
      <h1>customer info</h1>
      <table class="table table-striped table-bordered table-hover table-condensed">
        <thead style="text-align: center;">
          <tr>
            <th>First Name</th>
            <th>last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>message</th>
          </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
          <tr>
            <td> {{$customer->FirstName}} </td>
            <td> {{$customer->LastName}} </td>
            <td> {{$customer->phone}} </td>
            <td> {{$customer->Email}} </td>
            <td> {{$customer->Message}} </td>
          </tr>
        @endforeach
        </tbody>
      </table>
  </body>
</html>