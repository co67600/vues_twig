<?php
require __DIR__ . '/../vendor/autoload.php';



$loader =new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader,['cache' => false]);

/*$md5Filter = new Twig_SimpleFilter('md5', function ($string){
    return md5($string);
});

$twig->addFilter($md5Filter);

$lexer = new Twig_Lexer($twig, array(
    'tag_block' => array('{', '}'),
    'tag_variable' => array('{{', '}}')
));
$twig->setLexer($lexer);



echo $twig-> render('myview.html.twig', array (
    'name'=> 'Michael',
    'age' => 52,

    'users' => array(
        array('name' => 'Max', 'age' => 18),
        array('name' => 'James', 'age' => 22),
        array('name' => 'Billy', 'age' => 34),
)
));
*/

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];


echo $twig->render('index.html.twig', ['products' => $products]);


