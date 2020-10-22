
@include('user.menubar');


<main role="main" style="margin-top:80px;">
  <div class="jumbotron">
    <div class="container">
    <h1 class="display-3"> Popüler Haberler </h1>
  </div>
@for($i=0;$i<=14;$i++)
@csrf
  <div class="container">
       <a  href="/baslik/{{$bas[$i]->bname}}"><h2 class="display-5">{{$bas[$i]->bname}}</h2></a>
  <span>Tüneyen: <a href="/ispikci/{{$bas[$i]->unick}}">{{$bas[$i]->unick}}</a></span>
      <p>{{$bas[$i]->bhakkinda}}</p>
      <p>
            Yaratılma Tarihi:{{$bas[$i]->created_at}}
            <br>
            Güncelleme Tarihi: {{$bas[$i]->updated_at}}
        <a href="http://www.facebook.com/share.php?u={{ request()->url() }}&amp;title=Başlık Buraya kuytudan bu çıktı">
      	<img style="float: right;" src="https://img.icons8.com/bubbles/50/000000/facebook.png"/></a>
<a href="http://twitter.com/intent/tweet?status={{$bas[$i]->bname}}+{{ request()->url() }}&amp;title={{$bas[$i]->bname}} için Kuytudan bu çıktı">
      	<img style="float: right;" src="https://img.icons8.com/bubbles/50/000000/twitter.png"/></a>
     </p>
    </div>
    @endfor
  </div>
</main>


      <!-- React'i yükle. -->
      <!-- Not: yayınlama için hazırlanırken,  "development.js" yi "production.min.js" ile değiştirin -->
      <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
      <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

</body>
</html>