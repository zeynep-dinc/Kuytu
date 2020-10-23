@include('user.yorumcuindex');
<main role="main" style="margin-top:80px;">
  <div class="jumbotron">
  <form action="#baslikekle" method="post">
    <div class="container">
    <input type="text" name="newtitle" placeholder="Başlık">
  </div>
  <div class="container">
      
    </div>
    </form>
  </div>
</main>
<div id="baslikekle"> 
<?php
$u=$_POST['newtitle'];
echo $u;
?>
</div>

      <!-- React'i yükle. -->
      <!-- Not: yayınlama için hazırlanırken,  "development.js" yi "production.min.js" ile değiştirin -->
      <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
      <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

</body>
</html>