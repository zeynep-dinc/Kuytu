@include('user.menubar');
<main role="main">
@foreach($user as $buldum)
{{$buldum->bname}} Hakkında: {{count($user)}} kadar şey;
<a href="\baslik\{{$buldum->bname}}">{{$buldum->bname}}</a>
@endforeach
</main>
</body>
</html>