<?php

/*
 * Auto generated by polyfony-inc/console 
 * on __datetime__
 *
 */

namespace Models;

use \Polyfony\{ 
	Exception, Security, Element, Router, Entity, 
	Config, Logger, Hashs, Database, Locales, 
	Entities, Cache, Form\Captcha, Form\Token
};


class __Table__ extends Entity {

	// cache duration for the idAsKey method
	CONST ID_AS_KEY_CACHE_DURATION = 3600*24*30;

	// hard validator
	const VALIDATORS = [
		// FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_IP, FILTER_VALIDATE_INT...
	];

	// cleanup filters
	const FILTERS = [
		// strtoupper,strtolower, ucfirst, ucfirst, trim, numeric, integer, phone, email, text, slug, length{4-4096}, capslock{30,50,70}	
	];

	 /////////////////////////////////////
	 //  ___ _____ _ _____ ___ ___       
	 // / __|_   _/_\_   _|_ _/ __|      
	 // \__ \ | |/ _ \| |  | | (__       
	 // |___/ |_/_/_\_\_| |___\___| _    
	 //  _ __  ___| |_| |_  ___  __| |___
	 // | '  \/ -_)  _| ' \/ _ \/ _` (_-<
	 // |_|_|_\___|\__|_||_\___/\__,_/__/
                                  

	// return a list with id as a key, mostly usefull for select list
	public static function idAsKey(
		?array $where = [], 
		?bool $allow_cache = false
	) :array {
		// of we have it in the cache
		if(Cache::has('__Table__.idAsKey')) {
			// retrieve from the cache
			$__table__ = Cache::get('__Table__.idAsKey');
		}
		else {
			$__table__ = [];
			// for each __singular__
			foreach(self::all() as $object) {
				$__table__[$__singular__->get('id')] = 
					$__singular__->get('id');
			}
			// put it in the cache
			Cache::put(
				'__Table__.idAsKey', 
				$__table__, 
				true, 
				self::ID_AS_KEY_CACHE_DURATION
			);
		}

		return $__table__;

	}

	// search in all records
	public static function search(
		array $matching=[]
	) :array {

		return self::filter(
			self::_select()
				->select()
				->whereContains($matching)
				->execute()
		);

	}

	// return all records from __Table__ or a subset
	public static function all(
		?array $where = []
	) :array {

		// the base query
		$query = self::_select();
		// if basic where conditions are provided
		if($where) {
			// apply them
			$query->where($where);
		}
		// execute and filter the query
		return self::filter(
			$query->execute()
		);

	}

	// filter the result depending on whatever your want
	public static function filter(
		array $__table__
	) :array {

		// for each of the record provided
		foreach($__table__ as $id => $__singular__) {
			// some right mangement are applied here
			if(false) {
				// remove that record
				unset($__table__[$id]); 
			}
		}
		// return the list of allowed __table__
		return $__table__;

	}

	 /////////////////////////////////////
	 //   ___  ___    _ ___ ___ _____    
	 //  / _ \| _ )_ | | __/ __|_   _|   
	 // | (_) | _ \ || | _| (__  | |     
	 //  \___/|___/\__/|___\___| |_|_    
	 //  _ __  ___| |_| |_  ___  __| |___
	 // | '  \/ -_)  _| ' \/ _ \/ _` (_-<
	 // |_|_|_\___|\__|_||_\___/\__,_/__/
                                  

	// get the url for that object, depending on the user level
	public function getUrl(
		?string $action = 'edit'
	) :string {

		return Router::reverse(
			'__table__', 
			[
				'id'		=>$this->get('id'),
				'action'	=>$action 
			]
		);

	}

	public function save() :bool {

		// ... code tweaking

		// use the parent saving method
		return parent::save();

	}

}

?>

