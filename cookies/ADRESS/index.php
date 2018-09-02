<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Adress</title>
</head>
<body>
<form>
  <div class="form-group" method="post">
    <label for="inputCep">Cep</label>
      <input type="text" class="form-control" name ="inputCep" id="inputCep" value='<?= isset($_COOKIE['cep'])?$_COOKIE['cep']:""?>' placeholder="xxxxx-xxx">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" value='<?= isset($_COOKIE['street'])?$_COOKIE['street']:""?>' placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-group">
    <label for="inputDistrict">District</label>
    <input type="text" class="form-control" id="inputDistrict" value='<?= isset($_COOKIE['district'])?$_COOKIE['district']:""?>' placeholder="your District">
  </div>
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" value='<?= isset($_COOKIE['city'])?$_COOKIE['city']:""?>'>
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected="selected"><?= isset($_COOKIE['state'])?$_COOKIE['state']:"Choose..."?></option>
        <option>...</option>
      </select>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<script src="js/script.js"></script>
</body>
</html>