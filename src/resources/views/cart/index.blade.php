<table>
    <colgroup span="4"></colgroup>
        <tr>
            <th>画像</th>
            <th>商品名</th>
            <th>価格</th>
            <th>個数</th>
            <th>ボタン</th>
        </tr>
        @foreach($carts as $cart)
            @foreach($cart->productions as $production)
            <tr>
                <td>{{$production->img}}</td>
                <td>{{$production->name}}</td>
                <td>{{$production->price}}円</td>
                <td>個</td>
                <td><button>削除</button></td>
            </tr>
            <?php
            $total[] = $production->price;
            ?>
            @endforeach
        @endforeach
        <h1>
            合計金額:{{ array_sum($total)}}円
        </h1>

    </table>

