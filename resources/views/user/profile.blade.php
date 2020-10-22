@include('user.menubar');
    <main role="main" style="margin-top:80px;">
        <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{$user[0]->unick}}</h1><br>
            <label>Rolü: {{$user[0]->urole}}</label><br>
            <label>Toplam Yorum: {{count($user)}}</label><br>
            <label>Son Giriş: {{$user[0]->updated_at}}</label>
        </div>
        @foreach($user as $bas)
        @csrf
        <div class="container">
          <a  href="/baslik/{{$bas->bname}}">  <h2 class="display-5">{{$bas->bname}}</h2></a>
            <p>{{$bas->bhakkinda}}</p>
            <p>
            Yaratılma Tarihi:{{$bas->created_at}}
            <br>
            Güncelleme Tarihi: {{$bas->updated_at}}<a href="http://www.facebook.com/share.php?u={{ request()->url() }}&amp;title=Başlık Buraya kuytudan bu çıktı">
      	<img style="float: right;" src="https://img.icons8.com/bubbles/50/000000/facebook.png"/></a>
<a href="http://twitter.com/intent/tweet?status={{$bas->bname}}+{{ request()->url() }}&amp;title={{$bas->bname}} için Kuytudan bu çıktı">
      	<img style="float: right;" src="https://img.icons8.com/bubbles/50/000000/twitter.png"/></a>
           </p>
            </div>
        @endforeach
        </div>
    </main>
</body>
</html>