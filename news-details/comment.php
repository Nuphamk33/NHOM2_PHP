<?php
require_once ('./connectdb.php');
require_once ('./includes/imodel.php');

class Comments extends DB implements IModel
{
    const tableName = 'comments';
    public function __construct()
    {
        parent::__construct();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM " . self::tableName);
        $stm->execute();
        return $stm->fetchAll();
    }

    function getAllLimit($offset, $count)
    {
        $stm = $this->db->prepare("SELECT * FROM " . self::tableName . " LIMIT $offset,$count");
        $stm->execute();
        return $stm->fetchAll();
    }

    function insert($payload)
    {
        try {
            $user_id = $payload['user_id'];
            $content_cmt = $payload['content_cmt'];
            $news_id = $payload['news_id'];

            $stm = $this->db->prepare('INSERT INTO ' .
                self::tableName . '(user_id,content_cmt,news_id) VALUES(:user_id,:content_cmt,:news_id)');
            $stm->execute(array(
                ':user_id' => $user_id,
                ':content_cmt' => $content_cmt,
                ':news_id' => $news_id
            ));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        //tra ve so ban ghi
        return $stm->rowCount();
    }

    function delete($id)
    {
        $this->db->query("DELETE FROM " . self::tableName . " WHERE comment_id = " . $comment_id);
    }

    function update($payload)
    {
        try {
            $comment_id = $payload['comment_id'];
            $content_cmt = $payload['content_cmt'];

            $stm = $this->db->prepare('UPDATE ' . self::tableName . ' 
            SET content_cmt = :content_cmt WHERE id = :id');
            $stm->execute(array(
                ':id' => $id,
                ':content_cmt' => $content_cmt
            ));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function getById($id)
    {
        $rows = $this->db->query("SELECT * FROM " . self::tableName . " WHERE comment_id= $comment_id");
        foreach ($rows as $r) {
            $row  = $r;
        }
        return $r;
    }

    function getByPostId($id)
    {
        $stm = $this->db->prepare('SELECT ' . self::tableName . '.comment_id, ' . self::tableName . '.content_cmt, ' . self::tableName . '.time_cmt, username, image 
        FROM ' . self::tableName . ' 
        INNER JOIN users ON users.user_id = ' . self::tableName . '.comment_id  
        WHERE news_id=' . $news_id . ' 
        ORDER BY ' . self::tableName . '.user_id DESC');
        $stm->execute();
        return $stm->fetchAll();
    }
}
