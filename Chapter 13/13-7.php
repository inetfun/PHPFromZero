<?
//****************************************************************
//名称：13-7.php
//功能：数据库操作类
//****************************************************************
class mysql
{
	var $conn;
	function connect($dbhost,$dbuser,$dbpwd,$dbname)
	{
		if(!$this->conn=@mysql_pconnect($dbhost,$dbuser,$dbpwd)){
			$this->halt('Can not connect to MySQL server');
		} else {
			$this->select_db($dbname);
			mysql_query("SET NAMES 'utf8'");
		}
	}
	//选择数据库
	function select_db($dbname){
		return mysql_select_db($dbname, $this->conn);
	}
	function query($sql){
		$this->querycount++;
		return mysql_query($sql);
	}
	function fetch_array($result){
		return mysql_fetch_array($result);
	}
	function fetch_field($result){
		return mysql_fetch_field($result);
	}
	function num_rows($records) {
		return mysql_num_rows($records);
	}
	function result($query, $row) {
		$query = @mysql_result($query, $row);
		return $query;
	}
	function halt($message = '') {
		exit($message);
	}
	//关闭服务器连接
	function close(){
		return mysql_close($this->conn);
	}
	function geterror() {
		return mysql_error();
	}
}
?>