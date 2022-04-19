<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Todo List</h2>
  <form action="/todo/create" method="post">
    @csrf
    <input type="text" name="content">
    <input type="submit" value="追加">
  </form>
  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>
      {{$item->created_at}}
      </td>
      <td>
      <form action="{{ route('todo.update',[$item->content]) }}" method="post">
        @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <input type="text" name="content" value="{{$item->content}}">
      </td>
      <td>
      <button type="submit">更新</button>
      </form>
      </td>
      <td>
      <form action="{{ route('todo.delete',['id' => $item->id]) }}" method="post">
        @csrf
      <button type="submit">削除</button>
      </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>