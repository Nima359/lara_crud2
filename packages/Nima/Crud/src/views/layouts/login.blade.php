<div id = "login">
  <div>
    <div id = "row">
      <form method = "post" action = "login">
        <input type = "hidden" name = "_token" value = "{{csrf_token()}}" />
              <span class="error">
                <?php
                if (isset($errors)) {
                  var_dump ($errors);
                  }
                ?>
              </span>
        <table>
          <tr>
            <td width = "11"><label for = "name">نام : </label></td>
            <td align = "right" width = "177">
              <input type = "text" name = "name" id = "name" value = "{{old('name')}}" class = "col-12 modal-form" />
            </td>
          </tr>
          <tr>
            <td width = "44"><label for = "email">ایمیل : </label></td>
            <td align = "right">
              <input type = "email" name = "email" id = "email" value = "{{old('email')}}" class = "col-12" />
            </td>
          </tr>
          
          <tr>
            <td><label for = "password">کلمه عبور : </label></td>
            <td align = "right">
              <input type = "password" name = "password" id = "password" class = "col-12" />
            </td>
          </tr>
          
          <tr>
            <td colspan = "2">
              <input type = "submit" value = "ورود" />
            </td>
          </tr>
        
        </table>
      </form>
    </div>
    <div>
      <button data-dismiss = "modal" class = "btn btn-sm btn-success shadow-xl" onclick = "document.getElementById('modal').classList.toggle('modal');document.getElementById('modal').classList.toggle('fade');">Show & Hide Modal</button>
      
      <div class = "modal fade" tabindex = "-1" role = "dialog" aria-labelledby = "myModalDialog" aria-hidden = "true" id = "modal">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <button data-dismiss = "modal" aria-hidden = "true" class="btn btn-danger">Button</button>
              
              <h4 class = "modal-title">Modal Title</h4>
            </div>
            <div class = "modal-body">Modal Body</div>
            <div class = "modal-footer">Modal Footer</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class = "clear"></div>
</div>