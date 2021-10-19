<div id="content" class="{{--col-8--}}">
  
  <h4>Show Post Page</h4>
  
  <div id="post">
    
    <div id="row">
      <form method="post" action="{{ route ("post.store") }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <table>
          <tr>
            <td><label for="postId">PostId : </label></td>
            <td align="right">
              <input type="text" name="postId" id="postId" />
            </td>
          </tr>
          <tr>
            <td><label for="title">Title : </label></td>
            <td align="right">
              <input type="text" name="title" id="title" />
            </td>
          </tr>
          
          <tr>
            <td><label for="content">content : </label></td>
            <td align="right">
              <textarea name="content" rows="11" cols="33"></textarea>
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
  
  <div class="clear"></div>
</div>


