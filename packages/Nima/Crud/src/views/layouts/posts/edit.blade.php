<div id="content" class="{{--col-8--}}">
  <style>
    * {
      text-decoration: none;
      list-style: none;
    }
    
    table {
      border-collapse: collapse;
    }
    
    th {
      background-color: #0a58ca;
      color: white;
    }
    
    td, th {
      border: 1px solid gray;
      padding: 6px 9px;
      text-align: center;
    }
  </style>
  <h4>Show Post Page</h4>
  
  <div id="post">
    <div id="row">
      <form method="post" action="/post/{{ $post->id }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        {{--<input type="hidden" name="_method" value="PUT" />--}}
        @method("PUT")
        <table>
          <tr>
            <td><label for="postId">PostId : </label></td>
            <td align="right">
              <input type="text" name="postId" id="postId" value="{{$post->post_id }}" />
            </td>
          </tr>
          <tr>
            <td><label for="title">Title : </label></td>
            <td align="right">
              <input type="text" name="title" id="title" value="{{ $post->title }}" />
            </td>
          </tr>
          
          <tr>
            <td><label for="content">content : </label></td>
            <td align="right">
              <textarea name="content" rows="11" cols="33"> {{$post->content }} </textarea>
            </td>
          </tr>
          
          <tr>
            <td colspan="2">
              <input type="submit" value="Send" class="btn btn-success" />
            </td>
          </tr>
        
        </table>
      </form>
    </div>
  
  </div>
</div>

<div class="clear"></div>
</div>


