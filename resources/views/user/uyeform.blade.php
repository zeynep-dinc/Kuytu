<html>
<head>
<meta charset="utf8">
    <title>Yeni Kayıt</title>
    <link rel="stylesheet" type="text/css" href="css/styleesheet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="/">Kuytu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/bugun">Bugün <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dun">Dün</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Arar Buluruz" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">İzini</button>        
              <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="window.location.href='/yeniaday'" style="border: none;">
              <img src="https://img.icons8.com/clouds/20/000000/add-user-male.png"/>
               Üye Ol</button>
               <button class="btn btn-outline-success my-2 my-sm-0" type="button" style="border: none;">
              <img src="https://img.icons8.com/clouds/20/000000/login-rounded-right.png"/>
              Giriş Yap
              </button>
      </form>
    </div>
  </nav>
</header>
<div style="text-align:center;display:block;">
    <form action="/giris" method='POST' style="display:inline-grid;margin-top:80px;">
    @csrf
        <label>Eposta Adresiniz: </label><input type="email" name="uemail" required="" value="{{old('uemail')}}"><br>
        <label>Şifreniz: </label><input type="password" name="upass" required=""><br>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Giriş</button><br>
        <a href='/sifresifirla'>Şifremi Unuttum</a>
    </form>
    @foreach($errors->all() as $error)
    <label style="color:red;">{{$error}}</label>
    @endforeach
    </div>
</body>
</hmtl>