<?php

get('mantas', 'mantas\core\TestController@index');
get('test', function ()
{
    dd('naujas');
});
