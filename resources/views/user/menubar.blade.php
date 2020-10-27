<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kuytu</title>
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
      </ul>
      <form class="form-inline mt-2 mt-md-0" method='get' action='\baslik\'>
      @csrf
        <input class="form-control mr-sm-2" type="text" placeholder="Arar Buluruz" name="bname" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">İzini</button>        
              <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="window.location.href='/yeniaday'" style="border: none;">
              <img src="https://img.icons8.com/clouds/20/000000/add-user-male.png"/>
               Üye Ol</button>
              <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="window.location.href='/uyegiris'" style="border: none;">
              <img src="https://img.icons8.com/clouds/20/000000/login-rounded-right.png"/>
              Giriş Yap
              </button>
    @foreach($errors->all() as $error)
    <label style="color:red;">{{$error}}</label>
    @endforeach
      </form>
    </div>
  </nav>
</header>

  