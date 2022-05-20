<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Simple ajax in php</title>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Find the sum of input values</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="" class="form-label">Number 1:</label>
        <input type="text" class="form-control" id="num1">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Number 2:</label>
        <input type="text" class="form-control" id="num2">
      </div><br>
      <button type="button" id="addBtn" class="btn btn-dark">Add</button>
      <p>Output:</p>
      <h2 id="output"><h2>
      <img src="loader.gif" id="loader" style="display: none;">
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('#addBtn').click(function(){
      $.ajax({
        type:'POST',
        url:'adder.php',
        data:{
          num1:$('#num1').val(),
          num2:$('#num2').val(),
        },
        beforeSend:function(){
          $('#loader').show();
          $('#output').hide();
        },
        success:function(data){
          $('#output').html(data);
          $('#loader').hide();
          $('#output').show();
        }
      });
    });
  });
</script>

</body>
</html>