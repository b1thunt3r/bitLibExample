<?php
error_reporting( E_ALL );

$args                = array();
$args['vendors_dir'] = realpath( 'Vendors' );

if ( strpos( $_SERVER['HTTP_HOST'], '.dev' ) !== false ) {
  require_once( '/home/user/projects/BitLib/src/Bit0/Core/Context.php' );
} else {
  require_once( 'phar://' . $args['vendors_dir'] . '/BitLib.phar' );
}

class BitLibExample {
  public static function Main( $args = array() ) {
    $_App = Bit0\Core\Context::GetInstance( $args['vendors_dir'] );
    $_App->InitWebContext();

    $_App->Title = 'BitLibExample'; //single word

    $_App->LogLevel = E_ALL;
    $_App->SetupLogger();

    $_App->AddPath( __DIR__ );

    $_App->Database = new Bit0\DataSource\Adapters\MySQLi\MySQLiAdapter(
      'localhost', 'bitLib', 'bitLib', 'bitLib', 'bit_' );

    //$_App->User = SmartOrder\Common\User::GetBySession();

    //$_App->Router->AddSecurePath('~/Inventory');
    //$_App->Router->SetAuthPath('~/Home/Login');

    /* @var \Bit0\Web\Router $router */
    //$router = $_App->Route;
    //$router->Route( 'SmartOrder' );
    $_App->Router->Route( 'BitLibExample' );
  }
}

BitLibExample::Main( $args );