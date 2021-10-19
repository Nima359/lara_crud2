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
    
    <p>{{$post->title}}</p>
    <div>{{ $post->content }}</div>
    
    @dd($post)
    
  </div>
  
  <div class = "clear"></div>
</div>


