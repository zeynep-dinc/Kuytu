@include('user.menubar');
<main role='main'>
<div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{$bas->bname}}</h1><br>
        </div>
        @csrf
        <div class="container">
        <label>Türü: {{$bas->btur}} </label><br>
        <span>Tüneyen: <a href="/ispikci/{{$bas->unick}}">{{$bas->unick}}</a></span>
            <p>{{$bas->bhakkinda}}</p>
            <p>
            Yaratılma Tarihi:{{$bas->created_at}}
            <br>
            Güncelleme Tarihi: {{$bas->updated_at}}
            <a href="http://www.facebook.com/share.php?u={{ request()->url() }}&amp;title=Başlık Buraya kuytudan bu çıktı">
            <img style="float: right;" src="https://img.icons8.com/bubbles/50/000000/facebook.png"/></a>
            <a href="http://twitter.com/intent/tweet?status={{$bas->bname}}+{{ request()->url() }}&amp;title={{$bas->bname}} için Kuytudan bu çıktı">
            <img style="float: right;" src="https://img.icons8.com/bubbles/50/000000/twitter.png"/></a>
          </p>
            </div>
        </div>

</main>
</body>
</html>
