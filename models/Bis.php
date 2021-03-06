<?php 
namespace app\models;
use yii\db\ActiveRecord;
class Bis extends ActiveRecord{
	public static function tableName(){
		return "{{%bis}}";
	}
	public function rules(){
		return [
			['name','required','message'=>'商户名称不能为空','on'=>['add']],
			['email','email','message'=>'非法email格式','on'=>['add']],
			['logo','required','message'=>'请上传公司logo','on'=>['add']],
			['licence_logo','required','message'=>'请上传营业执照','on'=>['add']],
			['city_id','required','message'=>'请选择城市','on'=>['add']],
			['city_id','number','message'=>'请正确选择城市','on'=>['add']],
			['bank_info','required','message'=>'请填写银行账户','on'=>['add']],
			['bank_name','required','message'=>'请填写开户行名称','on'=>['add']],
			['bank_user','required','message'=>'请填写开户行姓名','on'=>['add']],
			['faren','required','message'=>'请填写法人','on'=>['add']],
			['faren_tel','required','message'=>'请填上公司法人电话','on'=>['add']],
			[['description','city_path','money','listorder','status','create_time','update_time'],'safe']
		];
	}
}