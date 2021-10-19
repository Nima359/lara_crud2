<div class="col-lg-5" style="float:left;text-align: center;">
<div id="styles">
  <link href = "{{ asset ("assets/front/css/bootstrap.css") }}" rel = "stylesheet" type = "text/css" />
</div>


<div class = "bg-white p-4 p-sm-5 rounded shadow-sm">
  <h1 class = "h4 text-black mb-4">Sign in to your account</h1>
  
  <form class = "m-t-md" role = "form" method = "POST" data-controller = "form" data-action = "form#submit" data-form-button-animate = "#button-login" data-form-button-text = "Loading..." action = "http://localhost:8000/login">
    {{--<input type = "hidden" name = "_token" value = "a9SBzDSdVcIcki1jWzZ5DzGfFBMrdBzEHm8OBHsx">--}}
    @@csrf
    <div class = "mb-3">
      
      <label class = "form-label">
        Email address
      </label>
      
      <div class = "form-group">
        
        <div data-controller = "input" data-input-mask = "">
          <input class = "form-control" name = "email" type = "email" required = "required" tabindex = "1" autofocus = "autofocus" placeholder = "Enter your email" id = "field-email-221729ba1a757b417808fa59c5af668883095b84">
        </div>
      
      </div>
    
    
    </div>
    
    <div class = "mb-3">
      <label class = "form-label w-100">
        Password
      </label>
      
      <div class = "form-group">
        
        <div data-controller = "password" class = "input-icon">
          <input type = "password" class = "form-control" name = "password" required = "required" tabindex = "2" placeholder = "Enter your password" id = "field-password-776650a6384057a64cb239942d3fe01d699faaaa" data-target = "password.password">
          <div class = "input-icon-addon cursor" data-action = "click->password#change">

            <span data-target = "password.iconShow">
                <svg xmlns = "http://www.w3.org/2000/svg" version = "1.1" width = "1em" height = "1em" viewBox = "0 0 32 32" class = "small me-2" role = "img" fill = "currentColor" componentname = "orchid-icon">
    <path d = "M16.108 10.044c-3.313 0-6 2.687-6 6s2.687 6 6 6 6-2.686 6-6-2.686-6-6-6zM16.108 20.044c-2.206 0-4.046-1.838-4.046-4.044s1.794-4 4-4c2.206 0 4 1.794 4 4s-1.748 4.044-3.954 4.044zM31.99 15.768c-0.012-0.050-0.006-0.104-0.021-0.153-0.006-0.021-0.020-0.033-0.027-0.051-0.011-0.028-0.008-0.062-0.023-0.089-2.909-6.66-9.177-10.492-15.857-10.492s-13.074 3.826-15.984 10.486c-0.012 0.028-0.010 0.057-0.021 0.089-0.007 0.020-0.021 0.030-0.028 0.049-0.015 0.050-0.009 0.103-0.019 0.154-0.018 0.090-0.035 0.178-0.035 0.269s0.017 0.177 0.035 0.268c0.010 0.050 0.003 0.105 0.019 0.152 0.006 0.023 0.021 0.032 0.028 0.052 0.010 0.027 0.008 0.061 0.021 0.089 2.91 6.658 9.242 10.428 15.922 10.428s13.011-3.762 15.92-10.422c0.015-0.029 0.012-0.058 0.023-0.090 0.007-0.017 0.020-0.030 0.026-0.050 0.015-0.049 0.011-0.102 0.021-0.154 0.018-0.090 0.034-0.177 0.034-0.27 0-0.088-0.017-0.175-0.035-0.266zM16 25.019c-5.665 0-11.242-2.986-13.982-8.99 2.714-5.983 8.365-9.047 14.044-9.047 5.678 0 11.203 3.067 13.918 9.053-2.713 5.982-8.301 8.984-13.981 8.984z"></path>
</svg>
            </span>
            
            <span data-target = "password.iconLock" class = "none">
                <svg xmlns = "http://www.w3.org/2000/svg" version = "1.1" width = "1em" height = "1em" viewBox = "0 0 32 32" class = "small me-2" role = "img" fill = "currentColor" componentname = "orchid-icon">
    <path d = "M25 12h-1v-3.816c0-4.589-3.32-8.184-8.037-8.184-4.736 0-7.963 3.671-7.963 8.184v3.816h-1c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h18c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zM10 8.184c0-3.409 2.33-6.184 5.963-6.184 3.596 0 6.037 2.716 6.037 6.184v3.816h-12v-3.816zM27 28c0 1.102-0.898 2-2 2h-18c-1.103 0-2-0.898-2-2v-12c0-1.102 0.897-2 2-2h18c1.102 0 2 0.898 2 2v12zM16 18c-1.104 0-2 0.895-2 2 0 0.738 0.405 1.376 1 1.723v3.277c0 0.552 0.448 1 1 1s1-0.448 1-1v-3.277c0.595-0.346 1-0.985 1-1.723 0-1.105-0.895-2-2-2z"></path>
</svg>
            </span>
          </div>
        </div>
      
      </div>
    
    
    </div>
    
    <div class = "row align-items-center">
      <div class = "col-md-6 col-xs-12">
        <label class = "form-check">
          <input type = "hidden" name = "remember">
          <input type = "checkbox" name = "remember" value = "true" class = "form-check-input" checked = "">
          <span class = "form-check-label"> Remember Me</span>
        </label>
      </div>
      <div class = "col-md-6 col-xs-12">
        <button id = "button-login" type = "submit" class = "btn btn-default btn-block" tabindex = "3">
          <svg xmlns = "http://www.w3.org/2000/svg" version = "1.1" width = "1em" height = "1em" viewBox = "0 0 32 32" class = "small me-2" role = "img" fill = "currentColor" componentname = "orchid-icon">
            <path d = "M16.642 20.669c-0.391 0.39-0.391 1.023-0 1.414 0.195 0.195 0.451 0.293 0.707 0.293s0.512-0.098 0.707-0.293l5.907-6.063-5.907-6.063c-0.39-0.39-1.023-0.39-1.414 0s-0.391 1.024 0 1.414l3.617 3.617h-19.264c-0.552 0-1 0.448-1 1s0.448 1 1 1h19.326zM30.005 0h-18c-1.105 0-2.001 0.895-2.001 2v9h2.014v-7.78c0-0.668 0.542-1.21 1.21-1.21h15.522c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-15.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.014 0.003v9.030c0 1.105 0.896 2 2.001 2h18c1.105 0 2-0.895 2-2v-28c-0.001-1.105-0.896-2-2-2z"></path>
          </svg>
          Login
        </button>
      </div>
    </div>
  </form>
</div>


<div id="scripts">
  <script src = "{{ asset ("assets/front/js/jquery.js") }}"></script>
  <script src = "{{ asset ("assets/front/js/bootstrap.js") }}"></script>
</div>

</div>

