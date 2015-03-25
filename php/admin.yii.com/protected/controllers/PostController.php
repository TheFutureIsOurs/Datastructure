<?php
class PostController extends Controller{
	public function actionTest(){
		$post = new  post();
// 		$relation = $post->getRelated('author');
// 		$attr = $post->getAttributes();
// 		var_dump($attr);
		/* $post->title = '测试';
		$post->content = '你好啊';
		$post->tags = 'awd';
		$post->status = 1;
		$post->create_time = time();
		$post->update_time = time();
		$post->author_id = 1;
		$res = $post->save();
		var_dump($post->getErrors());
		var_dump($res); */
// 		$post->status = 1;
		/* $post->checkselects=array($post,'checkselect');
		$post=$post->findAll('status=:status', array(':status'=>1));
		var_dump($post); */
// 		$res = $post->updateByPk(array('id'=>1), array('title'=>'hello','content'=>'world'));

// 		$dbcriteria = new CDbCriteria();
// 		$dbcriteria->select = 'id,title,content';
// 		$dbcriteria->condition = 'id=:id';
// 		$dbcriteria->params = array(':id'=>2);
// 		$dbcriteria->compare('title', 'hello');
// 		$dbcriteria->addCondition('id=3','OR');
// 		$result = $post->count($dbcriteria);
// 		var_dump($result);
		/* $user = new user();
		$relation = $user->hasRelated('posts');
		var_dump($relation); */
		
		$con = $this->getController();
		var_dump($con);
	}
}