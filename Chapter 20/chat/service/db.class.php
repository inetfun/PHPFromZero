<?
/*
 * @class: DB
 * @description: 数据库操作类
 */
class DB
{
	/*
	 * @property: $host
	 * @type: string
	 * @description：数据库服务器
	 */
	var $host;
	/*
	 * @property: $usr
	 * @type: string
	 * @description: 数据库用户名
	 */
	var $usr;
	/*
	 * @property: $pwd
	 * @type: string
	 * @description:数据库密码
	 */
	var $pwd;
	/*
	 * @property: $dbName
	 * @type: string
	 * @description:数据库名
	 */
	var $dbName;
	/*
	 * @property: $con
	 * @type: mysql connection
	 * @description:数据库连接实例
	 */
	var $con;
	/*
	 * @description:构造函数
	 * @param: $host,string,数据库服务器地址
	 * @param: $usr,string,数据库用户名
	 * @param: $pwd,string,数据库密码
	 * @param: $dbName,string,数据库名
	 */
	function DB($host='localhost',$usr='root',$pwd='123',$dbName='joychat')
	{
		$this->host = $host;
		$this->usr = $usr;
		$this->pwd = $pwd;
		$this->dbName = $dbName;
	}
	/*
	 * @description:打开数据库连接
	 */
	function open()
	{
		$this->con = mysql_connect($this->host,$this->usr,$this->pwd);
		mysql_select_db($this->dbName,$this->con);
	}
	/*
	 * @description:关闭数据库连接
	 */
	function close()
	{
		mysql_close($this->con);
	}
	/*
	 * @description:查询
	 * @param: $table,string,表名
	 * @param: $fields,string,字段
	 * @param: $conditions,string,查询条件
	 * @param: $order,string,排序规则
	 * @param: $start,int,结果集起点
	 * @param: $limit,int,结果集数量
	 * @return: objects,结果对象集
	 */
	function query($table,$fields='*',$conditions='',$order='',$start=0,$limit=0)
	{
		$this->open();
		$sql = 'select '.$fields.' from '.$table;
		if(!empty($conditions))
		{
			$sql .= ' where '.$conditions;
		}
		if(!empty($order))
		{
			$sql .= ' order by '.$order;
		}
		if($start != 0)
		{
			$sql .= ' limit'.$start.','.$limit;
		}
		else if($limit != 0)
		{
			$sql .= ' limit'.$limit;
		}
		$rs = mysql_query($sql,$this->con);
		$objects = array();
		while($row = mysql_fetch_object($rs))
		{
			$objects[] = $row;
		}
		$this->close();
		return $objects;
	}
	/*
	 * @description: 插入数据
	 * @param: $table,string,表名
	 * @param: $fields,array,字段
	 * @param: $values,array,字段值
	 */
	function insert($table,$fields,$values)
	{
		$this->open();
		for($i = 0; $i < sizeof($fields); $i ++)
		{
			$fieldsString .= $fields[$i];
			$valuesString .= '\''.$values[$i].'\'';
			if($i < sizeof($fields) - 1)
			{
				$fieldsString .= ',';
				$valuesString .= ',';
			}
		}
		$sql = 'insert into '.$table.' ('.$fieldsString.') values('.$valuesString.')';
		mysql_query($sql,$this->con);
		$insert_id = mysql_insert_id($this->con);
		$this->close();
		return $insert_id;
	}
	/*
	 * @description:更新
	 * @param: $table,string,表名
	 * @param: $fields,array,字段
	 * @param: $values,array,字段值
	 * @param: $conditions,string,更新条件
	 */
	function update($table,$fields,$values,$conditions)
	{
		$this->open();
		$sql = 'update '.$table.' set ';
		for($i = 0; $i < sizeof($fields); $i ++)
		{
			$sql .= $fields[$i] . '=' . '\''.$values[$i].'\'';
			if($i < sizeof($fields) - 1)
			{
				$sql .= ',';
			}
		}
		$sql .= 'where ' . $conditions;
		mysql_query($sql,$this->con);
		$this->close();
	}
}

?>