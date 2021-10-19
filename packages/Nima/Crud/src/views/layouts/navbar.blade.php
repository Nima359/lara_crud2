<div id="navbarPage" class="">
  <nav id = "navbar">
    <ul style = "width: 100%;">
      <li><a href = "/post">GET</a></li>
      <li><a href = "/post/2">SHOW</a></li>
      <li><a href = "/post/3/create">CREATE</a></li>
      <li><a href = "/post/2/edit">EDIT</a></li>
      
      <li>
        <form method="post" action="/post/3">
          @csrf
          <input type="hidden" name="_method" value="DELETE" />
          <input type="submit" value="DELETE  " />
        </form>
      </li>
      
    </ul>
  </nav>
</div>