# What is this?

This is a simple real time chat application built with php and mysql. It uses ajax to send and receive messages and jquery to update the chat window.

# How to use

1. Use this sql to create the database:
   ```sql
   CREATE DATABASE RealTimeChat;
   ```

2. Use this sql to create the table:
   ```sql
   CREATE TABLE messages (
      id int PRIMARY KEY AUTO_INCREMENT,
      author varchar(20) not null,
      message varchar(100) not null
   );
   ```

3. Change the database credentials in the file `./MessagesActions/dbh.php`

4. Run the application

# License

[![License](https://img.shields.io/github/license/itzaymvn/RealTimeChat-PHP?style=for-the-badge)]([https://github.com/itzAymvn/Aymvn.me/blob/master/LICENSE](https://raw.githubusercontent.com/itzAymvn/RealTimeChat-PHP/main/LICENSE))
