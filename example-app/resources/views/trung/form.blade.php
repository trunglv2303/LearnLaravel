<form method="POST" action="{{Route('index.trung')}}">
    @csrf
    <div>
        <input type="text" name="username" placeholder="Nhập username---">
    </div>
    <a href="{{route('product')}}">Trang san pham</a>
<button type="submit">submit</button>
</form>