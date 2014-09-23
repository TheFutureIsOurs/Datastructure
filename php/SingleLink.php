<?php
class Node{
	private $value;
	public $next;
	public function __construct($next,$value){
		$this->next = $next;
		$this->setValue($value);
	}
	public function setValue($value){
		$this->value = $value;
	}
	public function getValue(){
		return $this->value;
	}
	
}
class SingleLink{
	private $head;
	/**
	 * 初始化
	 */
	public function __construct(){
		$this->head = new Node(null, null);
	}
	/**
	 * 头插法
	 * @param unknown_type $value
	 */
	public function insertFirst($value){
		$new = new Node(null, $value);
		$new->setValue($value);
		$new->next = $this->head->next;
		$this->head->next = $new;
	}
	/**
	 * 是否为空
	 */
	public function isEmpty(){
		return ($this->head==null);
	}
	/**
	 * 打印
	 */
	public function printLink(){
		$node = $this->head->next;
		while($node != null){
			print($node->getValue().'->');
//			var_dump($node->getValue());
			$node = $node->next;
			
		}
	}
	
}
//echo 'hello';
$test = new SingleLink();
$test->insertFirst(1);
$test->insertFirst(2);
$test->insertFirst(3);
$test->printLink();