<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="conteiner">
    <div class="card">
      <h2>Todo List</h2>
      <form action="/todo/create" method="post">
        @csrf
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        <input type="text" name="content" class="top_input">
        <input type="submit" value="追加" class="top_button">
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
          <input type="text" name="content" value="{{$item->content}}" class="content_input">
          </td>
          <td>
          <button type="submit" class="update_button">更新</button>
          </form>
          </td>
          <td>
          <form action="{{ route('todo.delete',['id' => $item->id]) }}" method="post">
            @csrf
          <button type="submit" class="delete_button">削除</button>
          </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</body>
</html>