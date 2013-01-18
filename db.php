<?php
class db
{

    public function __construct($host, $user, $password, $base)
    {
        $this->db = @mysql_connect($host,$user,$password);
        @mysql_select_db($base,$this->db);
        if(!$this->db)throw new Exception("Could not select database:".mysql_error());
    }

    private function __clone(){}

    public function query($sql,array $params = array())
    {
        foreach($params as $var)
        {
            $var = mysql_real_escape_string($var);
            $sql = preg_replace("/\?/","'$var'", $sql,1);
        }
        $result = @mysql_query($sql,$this->db);
        if (!$result) throw new Exception('Неверный запрос'.mysql_error());
        return $result;
    }

    public function selectRow($sql,array $params = array())
    {
        $result=$this->query($sql,$params);
        if(mysql_num_rows($result) == 0)
        {
            $result = NULL;
        }else{
            $result=mysql_fetch_assoc($result);
        }
        return $result;
   	}

    public function selectAll($sql, array $params = array())
    {
        $result = $this->query($sql,$params);
        $rows = array();
        while($row = mysql_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return$rows;
    }

    public function getLastInsertId($sql, array $params = array())
    {
        $result = $this->query($sql,$params);
        if(!$result)
            return false;
        else
            return mysql_insert_id();
    }
}