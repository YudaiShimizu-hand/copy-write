<x-header>
    <div class="row mb-5">
        <form action="{{ route('production.index') }}" method="GET" class="row g-3">
            <div class="col-md-6">
                <input type="text" name="keyword" class="form-control">
            </div>
            <div class="col-md-6">
                <input type="submit" value="検索" class="btn btn-primary">
            </div>
        </form>
    </div>

    <div class="row">
        <table class="table table-hover">
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
                    <td><img src="{{asset('uploads/'. $production->img)}}" width="100" height="100"></td>
                    <td>{{$production->name}}</td>
                    <td>{{$production->price}}円</td>
                    <input type="hidden" name="id" value="{{$production->id}}">
                    <td><button type="submit" class="btn btn-primary">購入</button></td>
                </tr>
            </form>
            @endforeach
        </table>
    </div>
    <div class="row">
        {{ $productions->links() }}
    </div>
</x-header>





