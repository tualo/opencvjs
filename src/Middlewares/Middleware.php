<?php

namespace Tualo\Office\OpenCVJS\Middlewares;
use Tualo\Office\Basic\TualoApplication;
use Tualo\Office\Basic\IMiddleware;

class Middleware implements IMiddleware{
    public static function register(){
        TualoApplication::use('opencvjs',function(){
            try{
                // TualoApplication::javascript('opencvjs', './opencvjs/lib/opencv.js',[],-90000);
            }catch(\Exception $e){
                TualoApplication::set('maintanceMode','on');
                TualoApplication::addError($e->getMessage());
            }
        },-100); // should be one of the last
    }
}