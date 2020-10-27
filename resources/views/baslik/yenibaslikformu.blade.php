@include('user.yorumcuindex');
<main role="main" style="margin-top:80px;">
  <div class="jumbotron">
  <form action="/baslikekle" method="get">
  @csrf
    <div class="container">
        <h1><input type="text" name="bname" placeholder="Başlık" style="border:none;width:700px;padding:5px 5px;"></h1>
        <label><input type="text" name="btur" placeholder="Türü" style="border:none;width:700px;padding:5px 5px;"> </label>
  </div>
  <div class="container">
      <textarea name="bhakkinda" placeholder="İçerik" style="padding:5px 5px;margin-top: 0px;margin-bottom: 0px;width: 700px;height: 271px;border: none;"></textarea>
      <input type="text" name="unick" placeholder="Kullanmak istediğiniz nick" style="border:none;width:700px;padding:5px 5px;"><br>
      <input type="submit" name="submit" style="margin:5px 0px;padding:5px 5px;">
      <input type="reset" name="reset" style="margin:5px 0px;padding:5px 5px;">
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