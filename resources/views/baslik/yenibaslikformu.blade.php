@include('user.yorumcuindex');
<main role="main" style="margin-top:80px;">
  <div class="jumbotron">
  <form action="/baslikekle" method="post">
    <div class="container">
        <h1><input type="text" id="newtitle" placeholder="Başlık" style="border:none;"></h1>
        <label id="simName"><script>document.getElementById('simName').innerHTML=document.getElementById('newtitle')</script></label>
  </div>
  <div class="container">
      
    </div>
    </form>
  </div>
</main>

      <!-- React'i yükle. -->
      <!-- Not: yayınlama için hazırlanırken,  "development.js" yi "production.min.js" ile değiştirin -->
      <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
      <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

</body>
</html>