<h1 style="text-algn: center;">Học lập trình Laravel</h1>
<?php 
if (env('APP_ENV')=='production'){
    //call api live
    echo 'call api live';
}else{
    //call api sandbox
    echo 'call api sandbox';
}
