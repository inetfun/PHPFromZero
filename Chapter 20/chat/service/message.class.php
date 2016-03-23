<?
/*
 * @class: Message
 * @description: 消息类
 */
class Message
{
	/*
	 * @property: $id
	 * @type:int
	 * @description:消息id
	 */
	var $id;
	/*
	 * @property: $user
	 * @type:User
	 * @description:发送消息的用户
	 */
	var $user;
	/*
	 * @property: $message
	 * @type:string
	 * @description:消息内容
	 */
	var $message;
	/*
	 * @property: $text_color
	 * @type:string
	 * @description:消息文字颜色
	 */
	var $text_color;
	/*
	 * @property: $post_time
	 * @type:datetime
	 * @description:消息发布时间
	 */
	var $post_time;
	/*
	 * @description: 构造函数
	 * @param: $id,int,消息id
	 * @param: $user,User,发送消息的用户
	 * @param: $message,string,消息内容
	 * @param: $text_color,string,消息文字颜色
	 * @param: $post_time,datetime,消息发送时间
	 */	
	function Message($id=NULL,$user=NULL,$message='',$text_color='',$post_time='')
	{
		$this->id = $id;
		$this->user = $user;
		$this->message = $message;
		$this->text_color = $text_color;
		$this->post_time = $post_time;
		if(empty($this->post_time))
		{
			$this->post_time = date('Y-m-d H:i:s');
		}
	}
	/*
	 * @description:保存消息
	 */
	function save()
	{
		$db = new DB();
		$this->id = $db->insert('messages',array('user_id','message','text_color','post_time'),array($this->user->id,$this->message,$this->text_color,$this->post_time));
	}
	/*
	 * @description:查找指定时间之后发送的消息
	 * @param: $last_request_time,datetime,最后请求时间
	 * @return: array,消息对象集合
	 */
	static function find($last_request_time)
	{
		$db = new DB();
		$datas = $db->query('messages','id,user_id,message,text_color,post_time','post_time >= \''.$last_request_time.'\'','post_time desc');
		$messages = array();
		for($i = 0; $i < sizeof($datas); $i ++)
		{
			$data = $datas[$i];
			$user = User::read($data->user_id);
			$messages[] = new Message($data->id,$user,$data->message,$data->text_color,$data->post_time);
		}
		return $messages;
	}
}



?>