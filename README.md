Zf2 ZfComplement
=========

Zend Framework 2 - JQuery Validate
===

Install for composer: "pedro151/zfcomplement": "dev-master"

1) move the 'js' folder to the 'public'

2) in `config/autoload/global.php` insert:

```php
     'zf-complement' => array (
        'jquery' => array (
            'version'       => "2.1.3",                   //optional
            'ui-version'    => "1.11.2",                  //optional
            'enable'        => true,                      //optional
            'ui-enable'     => false,                     //optional
            'local-path'    => '/js/jquery/jquery.js',    //optional
            'ui-local-path' => null,                      //optional
            'ui-enable'     => false,                     //optional
            'load-ssl-path' => true,                      //optional
            'validate'      => array (
                'useTwitterBootstrap' => true,            //optional
                'validate-path'       => '/js/validate/' //optional
            )
        ),
     )
```
3)in `module.config.php` insert:

```php
    'view_helpers'    => array (
        'factories' => array (
            'Jquery' => function ( $sm )
            {
                return new ZfComplement\JQuery\View\Helper\Jquery($sm);
            }
        )
    ),
```

4) with a `view/layout/layout.php` enter the above code the function `headScript` and `InlineScript`

```php
    <?php $this->jquery()->get('validate');?>
```

5) use the function below the controller to enter forms in view:

```php
        $this->getEvent ()
             ->getViewModel ()
             ->setVariables ( array('form'=>$form) );
```