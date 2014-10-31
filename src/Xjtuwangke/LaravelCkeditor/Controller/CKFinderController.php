<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/10/31
 * Time: 16:57
 */

namespace Xjtuwangke\LaravelCkeditor\Controller;


class CKFinderController extends \Controller{

    public function __construct(){
        require_once( __DIR__ . '/../../../bootstrap/ckfinder.php' );
    }

    public function finder(){
        return \View::make( 'laravel-ckeditor::finder' );
    }

    public function finder_html(){
        return \View::make( 'laravel-ckeditor::finder_html' );
    }
}