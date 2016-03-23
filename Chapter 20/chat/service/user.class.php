<?
/*
 * @class: User
 * @description: 用户类
 */
class User
{
	/*
	 * @property: $id
	 * @type: int
	 * @description:用户id
	 */
	var $id;
	/*
	 * @property: $name
	 * @type: string
	 * @description:用户昵称
	 */
	var $name;
	/*
	 * @property: $last_request_time
	 * @type: datetime
	 * @description:最后请求时间
	 */
	var $last_request_time;
	/*
	 * @description: 构造函数
	 * @param: $id,int,用户id
	 * @param: $name,string,用户昵称
	 * @param: $last_request_time,datetime,最后请求时间
	 */
	function User($id=NULL,$name='',$last_request_time='')
	{
		$this->id = $id;
		$this->name = $name;
		$this->last_request_time = $last_request_time;
		if(empty($this->last_request_time))
		{
			$this->last_request_time = date('Y-m-d H:i:s');
		}
	}
	/*
	 * @description: 保存用户数据
	 */
	function save()
	{
		$db = new DB();
		$this->id = $db->insert('users',array('name','last_request_time'),array($this->name,$this->last_request_time));
	}
	/*
	 * @description: 更新最后请求时间
	 */
	function update_last_request_time()
	{
		$db = new DB();
		$last_request_time = date('Y-m-d H:i:s');
		$db->update('users',array('last_request_time'),array($last_request_time),'id='.$this->id);
		$this->last_request_time = $last_request_time;
	}
	/*
	 * @description: 更改用户昵称
	 * @param: $name,string,用户昵称
	 */
	function change_name($name)
	{
		$db = new DB();
		$db->update('users',array('name'),array($name),'id='.$this->id);
		$this->name = $name;
	}
	/*
	 * @description: 获取消息
	 * @return: array,消息对象集合
	 */
	function getMessages()
	{
		$messages = Message::find($this->last_request_time);
		$this->update_last_request_time();
		return $messages;
	}
	/*
	 * @description: 读取指定id的用户数据
	 * @param: $id,int,用户id
	 * @return: User,用户对象
	 */
	static function read($id)
	{
		$db = new DB();
		$datas = $db->query('users','*','id='.$id);
		if(sizeof($datas) > 0)
		{
			$user_data = $datas[0];
			$user = new User($id,$user_data->name,$user_data->last_request_time);
			return $user;
		}
		else
		{
			return null;
		}
	}
}
?>