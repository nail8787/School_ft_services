CREATE DATABASE mysql_db; 
CREATE USER tcassia@'%' IDENTIFIED BY 'aaa'; 
GRANT ALL PRIVILEGES ON mysql_db.* to tcassia@'%'; 
FLUSH PRIVILEGES;