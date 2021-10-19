<div id = "content" class = "{{--col-8--}}">
  
  <h4>Show Post Page</h4>
  
  <div id = "post">
    
    <h4 style="text-align: center;">{{ $posts->title }}</h4>
    <div>
      <span style="margin-left: 6%;">{{ $posts->post_id }}</span>
      {{ $posts->content }}
    </div>
  </div>
  
  <div class = "clear"></div>
</div>


