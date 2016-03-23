<?
/*
 * 自动加载所需的类
 */
function __autoload($class) 
{ 
	include(ucfirst($class) . ".class.php"); 
}
/*
 * 请求控制器
 */
switch($_REQUEST['action'])
{
	/*
	 * 保存用户
	 */
	case 'saveuser':
		$user = new User();
		$user->name = $_REQUEST['name'];
		$user->last_request_time = date('Y-m-d H:i:s');
		$user->save();
		$message = new Message();
		$message->user = $user;
		$message->message = ' 进入了聊天室';
		$message->text_color = 'red';
		$message->save();
		echo json_encode($user);
		break;
	/*
	 * 保存消息
	 */
	case 'savemessage':
		$message = new Message();
		$message->message = $_REQUEST['message'];
		$message->text_color = $_REQUEST['text_color'];
		$message->user = new User($_REQUEST['user_id']);
		$message->save();
		echo json_encode($message);
		break;
	/*
	 * 更改昵称
	 */
	case 'changename':
		$user = User::read($_REQUEST['id']);
		$old_name = $user->name;
		$user->change_name($_REQUEST['name']);
		$message = new Message();
		$message->user = $user;
		$message->message = $old_name.' 将名字更改为了:'.$user->name;
		$message->text_color = 'red';
		$message->save();
		echo 'ok';
		break;
	/*
	 * 取得消息
	 */
	case 'getmessages':
		$user = User::read($_REQUEST['id']);
		$messages = $user->getMessages();
		echo json_encode($messages);
		break;
}
?>