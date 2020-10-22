@include('user.menubar')
<div style="text-align:center;display:block;">
    <form action="\kayit" method='post' style="display:inline-grid;margin-top:80px;">
    @csrf
        <label>Kullanıcı Adınız: </label><input type="text" name="unick" required="" value="{{old('unick')}}"><br>
        <label>Eposta Adresiniz: </label><input type="email" name="uemail" required="" value="{{old('uemail')}}"><br>
        <label>Şifreniz: </label><input type="password" name="upass" required=""><br>
        <label>Şifreniz(tekrar): </label><input type="password" name="upass_confirmation"required="" ><br>
        <label>İlgi Duyulan cinsiyet: </label>
        <select name="sex">
            <option value="k">Erkek</option>
            <option value="e">Kadın</option>
            <option value="b">İkiside</option>
            <option value="a">Hiçbiri</option>
        </select>
        <br>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Evraklar Hazır</button>
    </form>
    @foreach($errors->all() as $error)
    <label style="color:red;">{{$error}}</label>
    @endforeach
    </div>
</body>
</hmtl>