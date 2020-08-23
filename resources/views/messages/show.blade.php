@extends("layouts.app")

@section("content")

<!-- ここにページごとのコンテンツをかく -->
  <h1>id = {{ $message->id }}のメッセージ詳細ページ</h1>

  <table class="table table-bordered">
    <tr>
      <th>id</th>
      <td>{{ $message->id }}</td>
    </tr>
    <tr>
      <td>メッセージ</td>
      <th>{{ $message->content }}</th>
    </tr>
  </table>

  {!! link_to_route("messages.edit", "このメッセージを編集", ["id" => $message->id], ["class" => "btn btn-light"]) !!}

  {!! Form::model($message, ["route" => ["messages.destroy", $message->id], "method" => "delete"]) !!}
    {!! Form::submit("削除", ["class" => "btn btn-danger"]) !!}
  {!! Form::close() !!}

@endsection