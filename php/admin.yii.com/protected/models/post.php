<?php
class post extends CActiveRecord{
	public function init(){
		$this->onBeforeFind('checkselects');
	}
	public function checkinsert(){
		if($this->status==1){
			echo '非法上传';
			exit();
// 			return false;
		}
	}
	public function checkselect(){
		exit();
		if($this->status==1){
			echo '非法结果';
			exit();
		}
	}
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('title, content, status', 'required'),
				array('status', 'in', 'range'=>array(1,2,3)),
				array('title', 'length', 'max'=>128),
				array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/', 'message'=>'Tags can only contain word characters.'),
// 				array('tags', 'normalizeTags'),
	
				array('title, status', 'safe', 'on'=>'search'),
		);
	}
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'author' => array(self::BELONGS_TO, 'user', 'author_id'),
		);
	}
	
}