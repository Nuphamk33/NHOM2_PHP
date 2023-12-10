<?php
require_once ('./connectdb.php');
require_once ('./includes/imodel.php');

class News extends DB implements IModel
{
    const tableName = 'news';
    public function __construct()
    {
        parent::__construct();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAll()
    {
        $stm = $this->db->prepare('SELECT * FROM ' . self::tableName);
        $stm->execute();
        return $stm->fetchAll();
    }

    function getAllLimit($offset, $count)
    {
        $stm = $this->db->prepare('SELECT ' . self::tableName . '.news_id, title, ' . self::tableName . '.image, date, username, categories.name AS cate_name, categories.id AS category_id 
        FROM ' . self::tableName . ' 
        INNER JOIN categories ON news.category_id = categories.category_id 
        INNER JOIN users ON news.user_id = users.user_id 
        ORDER BY ' . self::tableName . '.news_id DESC
        LIMIT ' . $offset . ',' . $count);
        $stm->execute();
        return $stm->fetchAll();
    }

    function insert($payload)
    {
        try {
            $title = $payload['title'];
            $summary = $payload['summary'];
            $content = $payload['content'];
            $user_id = $payload['user_id'];
            $tagname_id = $payload['tagname_id'];
            $category_id = $payload['category_id'];
            $status_news = $payload['status_news'];

            $stm = $this->db->prepare('INSERT INTO ' .
                self::tableName . '(title, summary,content, user_id, tagname_id, category_id, status_news)
             VALUES(:title, :summary, :content, :user_id, :tagname_id, :category_id, :status_news)');
            $stm->execute(array(
                ':title' => $title,
                ':summary' => $summary,
                ':content' => $content,
                ':user_id' => $user_id,
                ':tagname_id' => $tagname_id,
                ':category_id' => $category_id,
                ':status_news' => $status_news
            ));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        return $this->db->lastInsertId();
    }

    function delete($id)
    {
        $this->db->query('DELETE FROM ' . self::tableName . ' WHERE news_id = ' . $news_id);
    }

    function update($payload)
    {
        try {
            $news_id = $payload['news_id'];
            $title = $payload['title'];
            $summary = $payload['summary'];
            $content = $payload['content'];
            $user_id = $payload['user_id'];
            $tagname_id = $payload['tagname_id'];
            $category_id = $payload['category_id'];
            $status_news = $payload['status_news'];

            $stm = $this->db->prepare('UPDATE ' . self::tableName . ' 
            SET title= :title, summary = :summary, content = :content, user_id = :user_id, tagname_id = :tagname_id, status_news = :status_news, category_id = :category_id
            WHERE news_id = :news_id');
            $stm->execute(array(
                ':news_id' => $news_id,
                ':title' => $title,
                ':summary' => $summary,
                ':content' => $content,
                ':user_id' => $user_id,
                ':tagname_id' => $tagname_id,
                ':category_id' => $category_id,
                ':status_news' => $status_news
            ));
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    function getById($id)
    {
        $rows = $this->db->query('SELECT * FROM ' . self::tableName . ' WHERE news_id=' . $news_id);
        foreach ($rows as $r) {
            // $row  = $r;
        }
        return $r;
    }

    function getDetailById($id)
    {
        $rows = $this->db->query('SELECT ' . self::tableName . '.news_id, title, ' . self::tableName . '.image, tagname_id, summary, content, date, user_id, categories.name AS cate_name, category_id 
        FROM ' . self::tableName . ' 
        INNER JOIN categories ON news.category_id = categories.category_id 
        INNER JOIN users ON news.user_id = users.user_id 
        WHERE ' . self::tableName . '.news_id=' . $news_id);
        foreach ($rows as $r) {
            $row  = $r;
        }
        return $r;
    }

    function getCount()
    {
        $row = $this->db->query('select count(*) as count from ' . self::tableName);
        foreach ($row as $r) {
            $count = $r['count'];
        }
        return $count;
    }

    function getNewsStatus($offset, $count)
    {
        $stm = $this->db->prepare('SELECT ' . self::tableName . '.news_id, title, avatar, date_created, categories.name AS cate_name, category_id 
        FROM ' . self::tableName . ' 
        INNER JOIN category 
        ON ' . self::tableName . '.category_id = category.id 
        WHERE status = "Hoạt động" 
        ORDER BY news_id DESC 
        LIMIT ' . $offset . ',' . $count);
        $stm->execute();
        return $stm->fetchAll();
    }

    function getNewsByCategories($id)
    {
        $stm = $this->db->prepare(' SELECT * FROM ' . self::tableName . ' WHERE category_id=' . $category_id);
        $stm->execute();
        return $stm->fetchAll();
    }

    function getNewsByCategoriesLimit($id, $offset, $count)
    {
        $stm = $this->db->prepare('SELECT ' . self::tableName . '.news_id, title, image, date, categories.name AS cate_name, category_id 
        FROM ' . self::tableName . ' 
        INNER JOIN categories ON categories.category_id =' . self::tableName . '.category_id  
        WHERE category_id=' . $category_id . ' 
        LIMIT ' . $offset . ',' . $count);
        $stm->execute();
        return $stm->fetchAll();
    }

    function getNewsByTagnames($id)
    {
        $stm = $this->db->prepare('SELECT * FROM ' . self::tableName . ' 
        WHERE FIND_IN_SET(' . $tagname_id . ',tagname_id)!=0');
        $stm->execute();
        return $stm->fetchAll();
    }

    function getNewsByTagnamesLimit($id, $offset, $count)
    {
        $stm = $this->db->prepare('SELECT * FROM ' . self::tableName . ' 
        WHERE FIND_IN_SET(' . $tagname_id . ',tagname_id)!=0  
        LIMIT ' . $offset . ',' . $count);
        $stm->execute(); 
        return $stm->fetchAll();
    }
}
