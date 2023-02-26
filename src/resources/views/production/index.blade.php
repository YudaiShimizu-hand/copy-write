<form action="{{ route('production.index') }}" method="GET">
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>

<table>
<colgroup span="4"></colgroup>
    <tr>
        <th>画像</th>
        <th>商品名</th>
        <th>価格</th>
        <th>ボタン</th>
    </tr>
    @foreach($productions as $production)
    <form method="post" action="{{route('cartProduction.create')}}">
        @csrf
        <tr>
            {{-- <td>{{$production->img}}</td> --}}
            <td><img src="{{asset('uploads/'. $production->img)}}" width="150" height="100"></td>
            <td>{{$production->name}}</td>
            <td>{{$production->price}}円</td>
            <input type="hidden" name="id" value="{{$production->id}}">
            <td><button type="submit">購入</button></td>
        </tr>
    </form>
    @endforeach
</table>


