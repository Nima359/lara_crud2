<div id = "content" class = "{{--col-8--}}">
  <style>
    *{
      text-decoration: none;
      list-style: none;
    }
    table{
      border-collapse: collapse;
    }
    th{
      background-color: #0a58ca;
      color: white;
    }
    td , th{
      border: 1px solid gray;
      padding: 6px 9px;
      text-align: center;
    }
    form{
      display: inline-block;
      margin-top: 0px;
    }
    input[type=submit]{
      text-align: center;
      display: inline-block;
      margin-top: -4px;
      color: #0088cc;
    }
  </style>
  <h4>Show Posts Page</h4>
  
  <div id = "post">
    <table>
    <tr>
      <th>ID</th>
      <th>Post ID</th>
      <th>Title</th>
      <th>Content</th>
      <th width="222">Info</th>
    </tr>
    @foreach ($posts as $post)
      <tr>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->id }}</a></td>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->post_id }}</a></td>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->title }}</a></td>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->content }}</a></td>
        <td><a href="/post/{{$post->id}}/edit">Edit</a>
          <form method="post" action="/post/{{$post->id}}">
            {{--@csrf--}}
            @method ("DELETE")
            <input type="hidden" name="_token" value="{{ csrf_token () }}" />
            {{--<input type="hidden" name="_method" value="DELETE" />--}}
            <input type="submit" value="DELETE" />
          </form>
        </td>
      </tr>
      
    @endforeach
    </table>
    
    {{--@dd($posts)--}}
  </div>
  
  <div class = "clear"></div>
</div>


