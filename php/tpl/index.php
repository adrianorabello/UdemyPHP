<?php 
 
 require "vendor/autoload.php";

 use Rain\Tpl;
 // config
 $config = array(
     "tpl_dir"       => "tpl/",
     "cache_dir"     => "cache/",
     //"debug"		 => true,
    
 );
 Tpl::configure( $config );
 // Add PathReplace plugin (necessary to load the CSS with path replace)
 //Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
 // create the Tpl object
 $tpl = new Tpl;
 // assign a variable
 //$tpl->assign( "name", "Obi Wan Kenoby" );
 // assign an array
 $tpl->assign( "name", "Hcode" );
 $tpl->assign( "version", PHP_VERSION );
 // draw the template. O padrão é extenção html
 $tpl->draw( "index" );
	
 ?>