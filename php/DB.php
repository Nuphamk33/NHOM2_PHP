

<?php




class DB
{
    static private $connection;
    const DB_TYPE = "mysql";
    const DB_HOST = "127.0.0.1:3308";
    const DB_NAME = "webtintuc_n2";
    const USER_NAME = "root";
    const USER_PASSWORD = "";
    
    
    static public function getConnection()
    {
        if (static::$connection == null) {
            try {
                static::$connection = new PDO(self::DB_TYPE . ":host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::USER_NAME, self::USER_PASSWORD);
            } catch (Exception $exception) {
                throw new Exception("Connection fail");
            }
        }
        return static::$connection;
    }

    static public function execute($sql, $data = null)
    {
        $statement = DB::getConnection()->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute($data);

        $result = [];

        while ($item = $statement->fetch()) {
            $result[] = $item;
        }

        return $result;
    }

   //đếm số người đã đăng ký
    static public function demsobanghi($sql, $data = null)
    {
        $statement = DB::getConnection()->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute($data);
        $result = [];
        while ($item = $statement->fetch()) {
            $result[] = $item;
        }
        return count($result);
    }

    static public function Upda($sql, $data = null)
    {
        $statement = DB::getConnection()->prepare($sql);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute($data);

        // $result = [];

        // while ($item = $statement->fetch()) {
        //     $result[] = $item;
        // }

        // return $result;
    }




}
?>