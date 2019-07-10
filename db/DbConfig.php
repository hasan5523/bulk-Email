<?php
class DbConfig
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'bulkSms';
    private $charset = 'utf8mb4';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {

            $dsn = "mysql:host=".$this->host.";dbname=".$this->database.";charset=".$this->charset;

            $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $this->connection = new PDO($dsn, $this->username, $this->password,$options);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}
?>
