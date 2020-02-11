<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title>Contact Us</title>
</head>
<body>     
  <div class="container-fluid mb-5">
    <div class="row justify-content-center mt-lg-5">
      <div class="col-6">
        @if(Session::has('message'))
          <span class="alert alert-success">
            {{Session::get("message")}}
          </span>
        @endif
      </div>
    </div>
    <div class="row justify-content-center mt-lg-5">
       <div class="col-6">
        <h3>Contact Us</h3>
        <form action="{{ route('contact') }}" method="POST" enctype="application/x-www-form-urlencoded">
             @csrf
          <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" required autocomplete="name">
          </div>
         
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required autocomplete="email">
         </div>
         
          <div class="form-group">
           <label for="message">Enter Your Message</label>
           <textarea class="form-control"name="message" id="message" rows="3" required></textarea>
          </div>
         
          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">      
    </script>

</body>
</html>