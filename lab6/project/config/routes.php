<?php
	use \Core\Route;
	
	return [
		new Route('/lab6/hello/', 'hello', 'index'),
        new Route('/lab6/test/act1/', 'test', 'act1'),
        new Route('/lab6/test/act2/', 'test', 'act2'),
        new Route('/lab6/test/act3/', 'test', 'act3'),
        new Route('/lab6/nums/:n1/:n2/:n3/', 'num', 'sum'),
        new Route('/lab6/user/all/', 'user', 'all'),
        new Route('/lab6/user/first/:n/', 'user', 'first'),
        new Route('/lab6/user/:id/:key/', 'user', 'info'),
        new Route('/lab6/user/:id/', 'user', 'show'),
        new Route('/lab6/products/all/', 'product', 'all'),
        new Route('/lab6/product/:n/', 'product', 'show'),
        new Route('/lab6/page/', 'page', 'index'),
        new Route('/lab6/page/:id/', 'page', 'show'),
        new Route('/lab6/page/:id/', 'page', 'one'),
        new Route('/lab6/products/:id', 'products', 'one'),
        new Route('/lab6/products/', 'products', 'all')
	];
	
