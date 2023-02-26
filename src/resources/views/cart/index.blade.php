<table>
    <colgroup span="4"></colgroup>
        <tr>
            <th>画像</th>
            <th>商品名</th>
            <th>価格</th>
            <th>個数</th>
            <th>ボタン</th>
        </tr>
        {{-- @foreach($userCarts as $cart) --}}
            @foreach($userCarts->productions as $production)
            <tr>
                <td><img src="{{asset('uploads/'. $production->img)}}" width="150" height="100"></td>
                <td>{{$production->name}}</td>
                <td>{{$production->price}}円</td>
                <td>個</td>
                <td>
                    <form action="{{route('cartProduction.destroy', ['cartProductionId' => $production->pivot->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-dell" value="削除">
                    </form>
                    {{-- <a href="{{route('cartProduction.destroy', ['id' => $production->pivot->id])}}">削除</a> --}}
                </td>
            </tr>
            <?php
            $total[] = $production->price;
            ?>
            @endforeach
        {{-- @endforeach --}}
        <h1>
            合計金額:{{ array_sum($total)}}円
        </h1>

    </table>

