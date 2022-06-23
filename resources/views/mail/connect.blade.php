<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title></title>
    <style>
table, th, td {
  border: 1px solid black;
}
</style>

</head>
<body>
<h2>Product Details</h2>
    <table style="width:100%">
    <tr>
         
          <th>Name</th>
          <th>Email</th>
          <th>Status</th>
          <th>Message</th>
        </tr>
        @foreach($ovejog as $ovejogs)
    <tr>
      
      <td>{{$ovejog->name}}</td>
      <td>{{$ovejog->email}}</td>
      <td>{{$ovejog->subject}}</td>
      <td>{{$ovejog->message}}</td>
    </tr>
    @endforeach
</table>
</div>

  </tbody>

</body>
</html>
