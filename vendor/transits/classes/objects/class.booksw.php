<?php
  /*
   This SQL query will create the table to store your object.

   CREATE TABLE `booksw` (
   `bookswid` int(11) NOT NULL auto_increment,
   `book` VARCHAR(255) NOT NULL,
   `chapter` VARCHAR(255) NOT NULL,
   `code3` VARCHAR(255) NOT NULL,
   `code4` VARCHAR(255) NOT NULL,
   `attitude` VARCHAR(255) NOT NULL,
   `description` TEXT NOT NULL, PRIMARY KEY  (`bookswid`)) ENGINE=MyISAM;
  */

  /**
   * <b>booksw</b> class with integrated CRUD methods.
   * @author Php Object Generator
   * @version POG 3.0d / PHP5
   * @copyright Free for personal & commercial use. (Offered under the BSD license)
   * @link http://www.phpobjectgenerator.com/?language=php5&wrapper=pog&objectName=booksw&attributeList=array+%28%0A++0+%3D%3E+%27book%27%2C%0A++1+%3D%3E+%27chapter%27%2C%0A++2+%3D%3E+%27code3%27%2C%0A++3+%3D%3E+%27code4%27%2C%0A++4+%3D%3E+%27attitude%27%2C%0A++5+%3D%3E+%27description%27%2C%0A%29&typeList=array+%28%0A++0+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++1+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++2+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++3+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++4+%3D%3E+%27VARCHAR%28255%29%27%2C%0A++5+%3D%3E+%27TEXT%27%2C%0A%29
   */
include_once('class.pog_base.php');
class booksw extends POG_Base
{
  public $bookswId = '';

  /**
   * @var VARCHAR(255)
   */
  public $book;
  
  /**
   * @var VARCHAR(255)
   */
  public $chapter;
  
  /**
   * @var VARCHAR(255)
   */
  public $code3;
  
  /**
   * @var VARCHAR(255)
   */
  public $code4;
  
  /**
   * @var VARCHAR(255)
   */
  public $attitude;
  
  /**
   * @var TEXT
   */
  public $description;
  
  public $pog_attribute_type = array(
				     "bookswId" => array('db_attributes' => array("NUMERIC", "INT")),
				     "book" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
				     "chapter" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
				     "code3" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
				     "code4" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
				     "attitude" => array('db_attributes' => array("TEXT", "VARCHAR", "255")),
				     "description" => array('db_attributes' => array("TEXT", "TEXT")),
				     );
  public $pog_query;
  
  
  /**
   * Getter for some private attributes
   * @return mixed $attribute
   */
  public function __get($attribute)
  {
    if (isset($this->{"_".$attribute}))
      {
	return $this->{"_".$attribute};
      }
    else
      {
	return false;
      }
  }
  
  function booksw($book='', $chapter='', $code3='', $code4='', $attitude='', $description='')
  {
    $this->book = $book;
    $this->chapter = $chapter;
    $this->code3 = $code3;
    $this->code4 = $code4;
    $this->attitude = $attitude;
    $this->description = $description;
  }
  
  
  /**
   * Gets object from database
   * @param integer $bookswId 
   * @return object $booksw
   */
  function Get($bookswId)
  {
    $connection = Database::Connect();
    $this->pog_query = "select * from `booksw` where `bookswid`='".intval($bookswId)."' LIMIT 1";
    $cursor = Database::Reader($this->pog_query, $connection);
    while ($row = Database::Read($cursor))
      {
	$this->bookswId = $row['bookswid'];
	$this->book = $this->Unescape($row['book']);
	$this->chapter = $this->Unescape($row['chapter']);
	$this->code3 = $this->Unescape($row['code3']);
	$this->code4 = $this->Unescape($row['code4']);
	$this->attitude = $this->Unescape($row['attitude']);
	$this->description = $this->Unescape($row['description']);
      }
    return $this;
  }
  
  
  /**
   * Returns a sorted array of objects that match given conditions
   * @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
   * @param string $sortBy 
   * @param boolean $ascending 
   * @param int limit 
   * @return array $bookswList
   */
  function GetList($fcv_array = array(), $sortBy='', $ascending=true, $limit='')
  {
    $connection = Database::Connect();
    $sqlLimit = ($limit != '' ? "LIMIT $limit" : '');
    $this->pog_query = "select * from `booksw` ";
    $bookswList = Array();
    if (sizeof($fcv_array) > 0)
      {
	$this->pog_query .= " where ";
	for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
	  {
	    if (sizeof($fcv_array[$i]) == 1)
	      {
		$this->pog_query .= " ".$fcv_array[$i][0]." ";
		continue;
	      }
	    else
	      {
		if ($i > 0 && sizeof($fcv_array[$i-1]) != 1)
		  {
		    $this->pog_query .= " AND ";
		  }
		if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
		  {
		    if ($GLOBALS['configuration']['db_encoding'] == 1)
		      {
			$value = POG_Base::IsColumn($fcv_array[$i][2]) ? "BASE64_DECODE(".$fcv_array[$i][2].")" : "'".$fcv_array[$i][2]."'";
			$this->pog_query .= "BASE64_DECODE(`".$fcv_array[$i][0]."`) ".$fcv_array[$i][1]." ".$value;
		      }
		    else
		      {
			$value =  POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$this->Escape($fcv_array[$i][2])."'";
			$this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
		      }
		  }
		else
		  {
		    $value = POG_Base::IsColumn($fcv_array[$i][2]) ? $fcv_array[$i][2] : "'".$fcv_array[$i][2]."'";
		    $this->pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." ".$value;
		  }
	      }
	  }
      }
    if ($sortBy != '')
      {
	if (isset($this->pog_attribute_type[$sortBy]['db_attributes']) && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$sortBy]['db_attributes'][0] != 'SET')
	  {
	    if ($GLOBALS['configuration']['db_encoding'] == 1)
	      {
		$sortBy = "BASE64_DECODE($sortBy) ";
	      }
	    else
	      {
		$sortBy = "$sortBy ";
	      }
	  }
	else
	  {
	    $sortBy = "$sortBy ";
	  }
      }
    else
      {
	$sortBy = "bookswid";
      }
    $this->pog_query .= " order by ".$sortBy." ".($ascending ? "asc" : "desc")." $sqlLimit";
    $thisObjectName = get_class($this);
    $cursor = Database::Reader($this->pog_query, $connection);
    while ($row = Database::Read($cursor))
      {
	$booksw = new $thisObjectName();
	$booksw->bookswId = $row['bookswid'];
	$booksw->book = $this->Unescape($row['book']);
	$booksw->chapter = $this->Unescape($row['chapter']);
	$booksw->code3 = $this->Unescape($row['code3']);
	$booksw->code4 = $this->Unescape($row['code4']);
	$booksw->attitude = $this->Unescape($row['attitude']);
	$booksw->description = $this->Unescape($row['description']);
	$bookswList[] = $booksw;
      }
    return $bookswList;
  }
  
  
  /**
   * Saves the object to the database
   * @return integer $bookswId
   */
  function Save()
  {
    $connection = Database::Connect();
    $this->pog_query = "select `bookswid` from `booksw` where `bookswid`='".$this->bookswId."' LIMIT 1";
    $rows = Database::Query($this->pog_query, $connection);
    if ($rows > 0)
      {
	$this->pog_query = "update `booksw` set 
`book`='".$this->Escape($this->book)."', 
`chapter`='".$this->Escape($this->chapter)."', 
`code3`='".$this->Escape($this->code3)."', 
`code4`='".$this->Escape($this->code4)."', 
`attitude`='".$this->Escape($this->attitude)."', 
`description`='".$this->Escape($this->description)."' where `bookswid`='".$this->bookswId."'";
      }
    else
      {
	$this->pog_query = "insert into `booksw` (`book`, `chapter`, `code3`, `code4`, `attitude`, `description` ) values (
'".$this->Escape($this->book)."', 
'".$this->Escape($this->chapter)."', 
'".$this->Escape($this->code3)."', 
'".$this->Escape($this->code4)."', 
'".$this->Escape($this->attitude)."', 
'".$this->Escape($this->description)."' )";
      }
    $insertId = Database::InsertOrUpdate($this->pog_query, $connection);
    if ($this->bookswId == "")
      {
	$this->bookswId = $insertId;
      }
    return $this->bookswId;
  }
  
  
  /**
   * Clones the object and saves it to the database
   * @return integer $bookswId
   */
  function SaveNew()
  {
    $this->bookswId = '';
    return $this->Save();
  }
  
  
  /**
   * Deletes the object from the database
   * @return boolean
   */
  function Delete()
  {
    $connection = Database::Connect();
    $this->pog_query = "delete from `booksw` where `bookswid`='".$this->bookswId."'";
    return Database::NonQuery($this->pog_query, $connection);
  }
  
  
  /**
   * Deletes a list of objects that match given conditions
   * @param multidimensional array {("field", "comparator", "value"), ("field", "comparator", "value"), ...} 
   * @param bool $deep 
   * @return 
   */
  function DeleteList($fcv_array)
  {
    if (sizeof($fcv_array) > 0)
      {
	$connection = Database::Connect();
	$pog_query = "delete from `booksw` where ";
	for ($i=0, $c=sizeof($fcv_array); $i<$c; $i++)
	  {
	    if (sizeof($fcv_array[$i]) == 1)
	      {
		$pog_query .= " ".$fcv_array[$i][0]." ";
		continue;
	      }
	    else
	      {
		if ($i > 0 && sizeof($fcv_array[$i-1]) !== 1)
		  {
		    $pog_query .= " AND ";
		  }
		if (isset($this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes']) && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'NUMERIC' && $this->pog_attribute_type[$fcv_array[$i][0]]['db_attributes'][0] != 'SET')
		  {
		    $pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$this->Escape($fcv_array[$i][2])."'";
		  }
		else
		  {
		    $pog_query .= "`".$fcv_array[$i][0]."` ".$fcv_array[$i][1]." '".$fcv_array[$i][2]."'";
		  }
	      }
	  }
	return Database::NonQuery($pog_query, $connection);
      }
  }
}
?>
