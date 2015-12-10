<?php

class Reindeer {
	public function __construct() {
		$this->article = [
			'thumb' => [
				'default' => 'images/reindeer.png', // https://pixabay.com/p-296524/?no_redirect
				'width' => 1000,
				'height' => 500
			],
			'date' => [
				'default' => [
					'locale' => '%e %B %Y '. _('date_on') .' %H:%M', // http://sjp.pwn.pl/poradnia/haslo/;10340
					'normal' => 'Y-m-d H:i:s'
				]
			],
			'pagination' => [
				'onPage' => 15,
				'navNumber' => 7,
				'classes' => [
					'ul'=>'cd-pagination', 
					'current'=>'current'
				]
			]
		];
	}
}