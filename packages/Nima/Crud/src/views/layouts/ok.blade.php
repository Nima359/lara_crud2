<div class = "text-center text-success">
    <h3 style="text-align: center;color: #B548CB;"> OK Page </h3>
    
    <h3 style="text-align: center; color:#B548CB;">Sessions</h3>
    <hr />
    
    <?php
    $all = \Illuminate\Support\Facades\Session::get('all') ?: null;
    echo " All : " ;
    var_dump($all);
    
    echo "<br />\n User : " ;
    $user = \Illuminate\Support\Facades\Session::get('user') ?: null;
    var_dump($user);
    
//    $auth = \Illuminate\Support\Facades\Session::get('auth') ?: null;
//    echo "<br />\n Auth : " ;
//    var_dump($auth);
    
    
    echo "<br />\n Error : " ;
    $error = \Illuminate\Support\Facades\Session::get('error') ?: null;
    var_dump($error);
    
    echo "<br />\n Errors : " ;
    $errors = \Illuminate\Support\Facades\Session::get('errors') ?: null;
    var_dump($errors);
    
    
    
    echo "<br />\n Name : " ;
    $name = \Illuminate\Support\Facades\Request::input('name') ?: null;
    var_dump($name);
    
    echo "<br />\n Email : " ;
    $email = \Illuminate\Support\Facades\Request::input('email') ?: null;
    var_dump($email);
    
    echo "<br />\n Password : " ;
    $password = \Illuminate\Support\Facades\Request::input('password') ?: null;
    var_dump($password);
    
    
// متغیر زیر از طریق ViewComposer  به اینجا ارسال شد
    echo "<br />\n Nima Name : " ;
    var_dump($nimaName);
    
    
    
    ?>

</div>

