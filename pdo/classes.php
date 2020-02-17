<?php
/**
 * Areaクラス：areasテーブルの１レコードを管理するクラス
 */
class Area {
	/**
	 * 属性
	 */
	private $id;		// int 		地域ID
	private $name;	// string 地域名

	/**
	 * コンストラクタ
	 * @param int 		$id
	 * @param string 	$name
	 */
	function __construct(int $id, string $name) {
		$this->id = $id;
		$this->name = $name;
	}

	/**
	 * アクセサメソッド群
	 * @property-read int 		id
	 * @property-read string 	name
	 */
	function getId():int {
		return $this->id;
	}

	function getName():string {
		return $this->name;
	}
}

/**
 * Restaurantクラス：restaurantsテーブルの1レコードを管理するクラス
 */
class hotels {
	/**
	 * 属性
	 */
	private $id;		
	private $name;
	private $price;
	private $pref;	
	private $city;		
	private $address;
	private $memo;
	private $image;

	/**
	 * コンストラクタ
	 * @param int 	 $id
	 * @param string $name
	 * @param string $detail
	 * @param string $image
	 * @param int 	 $area
	 */
	function __construct(int $id, string $name, int $price, string $pref, string $city, string $address, int $memo, string $image ) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->pref = $pref;
		$this->city = $city;
		$this->address = $address;
		$this->memo = $memo;
		$this->images = $images;
	}

	/**
	 * アクセサメソッド群
	 * @property-read int 	 id
	 * @property-read string name
	 * @property-read string detail
	 * @property-read string image
	 * @property-read int 	 area
	 */
	function getId():int {
		return $this->id;
	}

	function getName():string {
		return $this->name;
	}
	function getPrice():int {
		return $this->price;
	}

	function getPref():string {
		return $this->pref;
	}

	function getCity():string {
		return $this->city;
	}

	function getAddress():string {
		return $this->address;
	}
	function getMemo():int {
		return $this->memo;
	}
	function getImage():string {
		return $this->image;
	}
}


?>