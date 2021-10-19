<div style = "direction: ltr;margin-left: 8px;font-size: 16px;" class = "text-left">
    @includeIf('Nima.Likeable.layouts.header')
    <h4 style = "direction: ltr;">@Route(dashboard) : <span>@route('dashboard')</span></h4>
    
    <?php
    
    use Illuminate\Support\Facades\DB;use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\Response;
    use Nima\Likeable\App\Models\Post;
    use Nima\Likeable\App\Models\User;
    
    $content = <<<EOS
<h1>Login Page . . . </h1>
EOS;
    // ارسال پاسخ به کلاینت به همراه یک کوکی
    echo Response::make($content , 200)
        ->header('Content-Type' , 'text/html')
        ->withCookie(cookie('CoolieName' , 'CookieValue'));
    
    //ارسال آرایه جیسون JSON به کلاینت
    echo \response()
        ->json([
            'name' => 'Abigail' ,
            'state' => 'CA' ,
        ])->withCallback(Request::input('callback'));
    echo "<br />";
    
    //ارسال پاسخ به کلاینت بصورت دانلود یک فایل
    
    $pathToFile = 'C:/wamp/www/Laravel/packages/Nima/Likeable/src/files/Farsi_Laravel.pdf';
    $pathToFile2 = base_path('packages/Nima/Likeable/src/files/Farsi_Laravel.pdf');
    $name = "Farsi_Laravel.pdf";
    $headers = ['Content-Type' => 'application/pdf'];
    echo response()->download($pathToFile , $name , $headers);
    
    echo response()->file($pathToFile , $headers);
    
    // ارسال یک فایل ویو View به کلاینت
    echo response()->view('auth.register' , [] , 200)->header('Content-Type' , 'text/html');
    
    
    $uppercaseWord = collect(['code' , 'daily'])->uppercase();
    echo $uppercaseWord;
    
    echo "<br />";
    $newUppercaseWord = collect(['new' , 'word' , 'to' , 'uppercase'])->uppercase()->repeat();
    echo $newUppercaseWord;
    
    
    
    echo '<br />isTId : ' . (Request::isTId('com') ? 'TRUE' : 'FALSE'); // returns true for app.com
    echo '<br />isTId : ' . (Request::isTId('dev') ? 'TRUE' : 'FALSE'); // returns true for app.dev
    echo '<br />isTId : ' . (Request::isTId('cod') ? 'TRUE' : 'FALSE'); // returns true for app.cod
    
    
    /*
    $fileAddress = base_path() . "/packages/Nima/Likeable/src/files/";
    
    $file1 = fopen($fileAddress . 'test1.txt' , 'r+');
    //    $file2 = file($fileAddress . 'test1.txt' , FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES | FILE_APPEND);
    
    readfile($fileAddress . 'test1.txt');
    
    fseek($file1 , 138);
    fwrite($file1 , 'Write New Text 1 .');
    
    $ch1 = chmod($fileAddress . "test1.txt" , 0600);
    fseek($file1 , 210);
    fwrite($file1 , 'Write New Text 2 .');
    
    $ch2 = chmod($fileAddress . "test1.txt" , 0644);
    fseek($file1 , 282);
    fwrite($file1 , 'Write New Text 3 .');
    
    $ch3 = chmod($fileAddress . "test1.txt" , 0755);
    fseek($file1 , 354);
    fwrite($file1 , 'Write New Text 4 .');
    
    $ch4 = chmod($fileAddress . "test1.txt" , 0750);
    fseek($file1 , 426);
    fwrite($file1 , 'Write New Text 5 .');
    
    fseek($file1 , 467);
    fwrite($file1 , ' ');
    
    readfile($fileAddress . "test1.txt");
    */
    
    echo addslashes("It isn't quotation And do's not Exists.");
    
    echo ctype_cntrl("\n\t\r hello");
    
    
    $users = User::whenTIdMatches('org' , function () {
        $this->where('id' , '>' , 5);
    })->get();
    
    //    var_dump($users);
    
    $post = new Post();
    $post->activatedPost(4);
    
    /*
    $posts = DB::table('posts')->lists('title');
    var_dump($posts);
    var_dump($post->showListsPost());
    */
    
    var_dump(Post::testQuery());
    
    
    Post::orgroup();
    
    
    
    
    ?>
</div>
<div class = "text-center col-md-8">
    <a href = "downloaded" target = "_blank">Download
        Laravel_Farsi.pdf</a>
</div>

<div id = "login">
    <h3 class = "text-center text-white pt-5">Test Page </h3>
    
    <div class = "container text-center">
        <div id = "login-row" class = "row justify-content-center align-items-center">
            <div id = "login-column" class = "col-md-6">
                <div id = "login-box" class = "col-md-12">
                    <form id = "login-form" class = "form" action = "@route('doLogin')" method = "post">
                        @csrf
                        
                        <h3 class = "text-center text-info"></h3>
                        <div class = "form-group">
                            <label for = "email" class = "text-info">Email : </label>
                            <input type = "email" name = "email" id = "email" class = "form-control"
                                   value = "{{ old('email') }}"/>
                        </div>
                        
                        <div class = "form-group">
                            <label for = "password" class = "text-info">Password : </label>
                            <input type = "password" name = "password" id = "password" class = "form-control"
                                   value = "{{ old('password') }}"/>
                        </div>
                        
                        
                        <div class = "form-group">
                            <label for = "remember_me" class = "text-info"><span>Remember Me</span><span><input
                                            type = "checkbox" name = "remember_me" id = "remember_me"
                                            class = "form-control" checked = ""/></span></label>
                            <br/>
                            <input type = "submit" name = "submit" class = "btn btn-info btn-md" value = "submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{--
<script type="text/javascript" src="{{ mix('assets/front/js/all.js')}}"></script>
--}}


{{--@script(assets/front/js/all.js)--}}

{{--
	@script(assets/front/js/myJquery.js)
	@script(assets/front/js/myBootstrap.js)
--}}

</body>
</html>

