<?php
class Controller{
	public function __construct(){
		//全体で使うようなモデルを呼び出してメンバ変数にオブジェクトを保存しましょう。
		$this->test = "test";
	}
}
