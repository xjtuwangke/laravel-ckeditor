<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/10/31
 * Time: 16:51
 */

namespace Xjtuwangke\LaravelCkeditor\CKFinder;

class Authorize {

    public static function authorize(){
        \Session::set( 'CKFinder_Authorized' , 'authorized' );
    }

    public static function isAuthorized(){
        return true;
        return 'authorized' == \Session::get( 'CKFinder_Authorized' );
    }

    public static function unAuthorize(){
        \Session::remove( 'CKFinder_Authorized' );
    }
}