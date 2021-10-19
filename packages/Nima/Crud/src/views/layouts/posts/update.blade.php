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
  </style>
  <h4>Show Post Page</h4>
  
  <div id = "post">
    <table>
    <tr>
      <th>table</th>
      <th>Post ID</th>
      <th>Title</th>
      <th>Content</th>
    </tr>
    @foreach ($posts as $post)
      <tr>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->table }}</a></td>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->post_id }}</a></td>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->title }}</a></td>
        <td><a href="/post/<?= $post->post_id?>">{{ $post->content }}</a></td>
      </tr>
      
    @endforeach
    </table>
    
    {{--@dd($posts)--}}
  </div>
  
  <div class = "clear"></div>
</div>


