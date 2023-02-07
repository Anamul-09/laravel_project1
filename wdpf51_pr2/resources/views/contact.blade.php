<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<title>Document</title>
</head>

<body>
  <div class="container border p-5 mt-5">
    <h1 class="text-center">Contact Form</h1>
    <form action="{{ route('sendMsg') }}" method="post">
      @csrf
      <label for="name">Your name : </label>
      <input class="form-control" type="text" name="name" placeholder="Enter your name"><br>
      <label for="email">Your Email : </label>
      <input class="form-control" type="email" name="email" placeholder="Enter your Email"><br>
      <label for="message">Write some message : </label>
      <textarea class="form-control" name="message" id="" cols="10" rows="5"></textarea><br>
      <input class="btn btn-primary btn-lg" type="submit" value="Submit">
    </form>
  </div>
</body>

</html>
