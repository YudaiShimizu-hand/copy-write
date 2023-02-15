
<table>
<colgroup span="4"></colgroup>
    <tr>
        <th>画像</th>
        <th>商品名</th>
        <th>価格</th>
        <th>ボタン</th>
    </tr>
    @foreach($productions as $production)
    <tr>
        <td>{{$production->img}}</td>
        <td>{{$production->name}}</td>
        <td>{{$production->price}}円</td>
        <td><button>購入</button></td>
    </tr>
    @endforeach
</table>


