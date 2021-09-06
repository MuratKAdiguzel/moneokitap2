<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>duzenlekitaplar</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
<a class="navbar-brand" href="{{ url('/') }}">    Home    </a>
<a class="navbar-brand" href="{{route('index') }}">   Kitaplar    </a>
</nav>
<h4 >"Veri düzenle"</h4>
   
  <form action="{{ route('books.update', ['book' => $bookedit->id]) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapadi" placeholder="Kitapadi" value="{{$bookedit->kitapadi}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapyazari" placeholder="Kitapyazari" value="{{$bookedit->kitapyazari}}">
    </div>
  </div>
 
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapisbnnumarasi" placeholder="Kitapisbnnumarasi" value="{{$bookedit->kitapisbnnumarasi}}">
    </div>
    <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="file" class="form-control" name="kitapresmi" placeholder="Kitapresmi" src="{{ asset('/storage/images/'.$bookedit->kitapresmi) }}">
    </div>
    
  
  
    <button  type="submit" class="btn btn-primary" >Düzenle</button>
  
  
</form>
 
    
</body>
</html>