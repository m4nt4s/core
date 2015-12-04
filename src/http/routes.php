<?php

get('mantas', 'mantas\core\TestController@index');
get('mantas', function ()
{
    dd('naujas');
});
