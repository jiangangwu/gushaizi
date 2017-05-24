#!/usr/bin/python
# -*- coding: utf-8 -*-
import pymysql
'''host = 'rds48z5k409g0753v62j.mysql.rds.aliyuncs.com'
user = 'r0gbqnbc4x'
password = '19760209'
db = 'r0gbqnbc4x'
port=3306

'''
host='localhost'
user='root'
password='19760209'
db='r0gbqnbc4x'
port=3306

cnx = pymysql.connect(host = host, user = user, passwd = password,\
        db = db, port = port, charset = 'utf8')
cur = cnx.cursor()
cur.execute("use " + db + ";")
cur.execute("show tables;")
for x in cur:
    print(x)
cur.execute("drop table observer;")

import xlrd
xl = '/users/jiangang/投资/股票观察.xlsm'
lst = []
clmnNumber = 312
rowNumber = 6
tableNumber = 1
sqlTablename = 'observer'
data = xlrd.open_workbook(xl)
table = data.sheets()[tableNumber]
for i in range(clmnNumber):
    lst.append(table.col_values(i))
create_table_sql = "CREATE TABLE " + sqlTablename + \
                           " (id int(10) AUTO_INCREMENT PRIMARY KEY,"
clmnName = []
for i in range(len(lst)):
    clmnName.append(lst[i][rowNumber])
    create_table_sql = create_table_sql + " " +  clmnName[i] + ' '
    create_table_sql = create_table_sql + " " +  lst[i][rowNumber + 1] + ','
create_table_sql = create_table_sql[0:-1] +   ") CHARACTER SET utf8"
cur.execute(create_table_sql)
cnx.commit()

cur.execute('truncate table observer;')
insert_sql = "INSERT INTO " + sqlTablename+ " ("                           
for c in clmnName:
    insert_sql = insert_sql + c + ', '
insert_sql = insert_sql[0:-2] + ") values "
for i in range(2 + rowNumber, len(lst[0])):
    a = "("
    for ii in range(len(lst)):  
        a = a + "'" + str(lst[ii][i]) + "'" + ","
    sentence = insert_sql + a[:-1] + ')'
    cur.execute(sentence)







#cur.execute('select * from friend;')
# cur.execute( '''create table r0gbqnbc4x.seats (
#        id int(10) AUTO_INCREMENT PRIMARY KEY, 
#        name char(100), 
#        course char(20), 
#        seat char(8), 
#        identifier char(10),
#        absence int(10),
#        absence_time varchar(500),
#        ip char(50), 
#        time_at char(50)) CHARACTER SET utf8;''')
#cur.execute('''INSERT INTO r0gbqnbc4x.seats_inv (seat) VALUES ('R1C1'),	('R1C2'),	('R1C3'),	('R1C4'),	('R1C5'),	('R1C6'),	('R1C7'),	('R1C8'),	('R1C9'),	('R1C10'),
#('R2C1'),	('R2C2'),	('R2C3'),	('R2C4'),	('R2C5'),	('R2C6'),	('R2C7'),	('R2C8'),	('R2C9'),	('R2C10'),
#('R3C1'),	('R3C2'),	('R3C3'),	('R3C4'),	('R3C5'),	('R3C6'),	('R3C7'),	('R3C8'),	('R3C9'),	('R3C10'),
#('R4C1'),	('R4C2'),	('R4C3'),	('R4C4'),	('R4C5'),	('R4C6'),	('R4C7'),	('R4C8'),	('R4C9'),	('R4C10'),
#('R5C1'),	('R5C2'),	('R5C3'),	('R5C4'),	('R5C5'),	('R5C6'),	('R5C7'),	('R5C8'),	('R5C9'),	('R5C10'),
#('R6C1'),	('R6C2'),	('R6C3'),	('R6C4'),	('R6C5'),	('R6C6'),	('R6C7'),	('R6C8'),	('R6C9'),	('R6C10'),
#('R7C1'),	('R7C2'),	('R7C3'),	('R7C4'),	('R7C5'),	('R7C6'),	('R7C7'),	('R7C8'),	('R7C9'),	('R7C10'),
#('R8C1'),	('R8C2'),	('R8C3'),	('R8C4'),	('R8C5'),	('R8C6'),	('R8C7'),	('R8C8'),	('R8C9'),	('R8C10'),
#('R9C1'),	('R9C2'),	('R9C3'),	('R9C4'),	('R9C5'),	('R9C6'),	('R9C7'),	('R9C8'),	('R9C9'),	('R9C10');''')


#   
#cur.execute('drop table log,user,bbs,comment,note,friend,article, stock;') 
#cur.execute('drop table note;') 
#
#cur.execute( '''create table r0gbqnbc4x.user (
#        id int(10) AUTO_INCREMENT PRIMARY KEY, 
#        name char(20) not null, 


#        password char(128) not null,
#        gender char(1), 
#        username char(20), 
#        email char(35), 
#        message varchar(5000), 
#        pass char(1) not null,
#        ip char(50), 
#        time_at char(50)) CHARACTER SET utf8;''')
#
#cur.execute('''CREATE TABLE r0gbqnbc4x.bbs (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            name char(20) not null,
#            message varchar(5000) not null,
#            ip char(50),
#            time_at char(50),
#            page char(20),
#            topic char(100)) CHARACTER SET utf8;''')
#
#cur.execute('''CREATE TABLE r0gbqnbc4x.comment (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            id0 int(10) not null,            
#            name char(20) not null,
#            comm varchar(1000) not null,
#            ip char(50),
#            time_at char(50),
#            name_0 char(20)) CHARACTER SET utf8;''')
#
#cur.execute('''CREATE TABLE r0gbqnbc4x.friend (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            name char(20) not null,
#            friend char(20) not null,
#            time_at char(50)) CHARACTER SET utf8;''')
# cur.execute('''CREATE TABLE r0gbqnbc4x.article (
#             id int(10) AUTO_INCREMENT PRIMARY KEY,
#             articleid int(10) not null,
#             articlename char(100),
#             name char(20) not null,
#             time_at char(50)) CHARACTER SET utf8;''')
#cur.execute('''CREATE TABLE r0gbqnbc4x.stock (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            code char(6) not null,
#            name char(20) not null,
#            sign char(1) not null,
#            time_at char(50),
#            stockname char(20)
#            ) CHARACTER SET utf8;''')
#cur.execute('''CREATE TABLE r0gbqnbc4x.log (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            name char(20) not null,
#            ip char(20) not null,
#            time_at char(50)) CHARACTER SET utf8;''')
#
#cur.execute('''CREATE TABLE r0gbqnbc4x.letter (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            name char(20) not null,
#            name2 char(20) not null,
#            letter varchar(5000) not null,
#            ip char(50),
#            time_at char(50)
#            topic char(100)) CHARACTER SET utf8;''')
#            
#cur.execute('''INSERT INTO r0gbqnbc4x.user (
#    id, name, password, gender, username, email, message, pass, ip, time_at) 
#    VALUES (
#    1, 'Jiangang', 'Sien700806', '1', '吴建刚', 'imahero@gmail.com',
#    '我是吴建刚', '1','158.182.201.42', '20160218 13:26');''')
#cur.execute("INSERT INTO article (id, articleid, articlename, name, time_at) VALUES (NULL, '3', '阅读测试1', 'wjg', NOW());")
#cur.execute("INSERT INTO bbs (id, name, message, page, ip, time_at,topic) VALUES (NULL, 'wjg', '留言', 'user_note', '10.201.66.25', NOW(), '试一下能不能留言');")

#cur.execute('alter table seats_inv change name name varchar(500) null;') 
#cur.execute('alter table user add topic char(100);')
#cur.execute('alter table seats add absence_time char(50);') # 
#cur.execute('alter table comment add name_0 char(20);')
#cur.execute('alter table user add course char(50);')
#cur.execute('alter table observer modify column pm varchar(10);')
#cur.execute('truncate table log;')
#cur.execute("UPDATE user SET pass='0' WHERE id=2;")
#cur.execute('delete from user where id>1 and id<8;')

#cnx.commit()


#cur.execute('select * from bbs where id=10;')
#cur.execute('select * from stock;')
#cur.execute('select * from letter;')
#cur.execute('select * from article;')
#cur.execute('select * from comment;')
#cur.execute('select * from log;')

#Cur.execute("select password,pass from r0gbqnbc4x.user where name='Jiangang';")
#cur.execute('select name from friend where name="wjg" and friend="Jiangang" limit 0,1;')
#cur.execute('select name from r0gbqnbc4x.user where name="wjg";')
#cur.execute('select password,pass from users where name="wjg" limit 0,1;')

#cur.execute('describe user;')
#cur.execute('describe comment;')
#cur.execute('describe note;')
#cur.execute('describe bbs;')
#cur.execute('describe log;')
#cur.execute('describe friend;')
#cur.execute('describe stock;')
#cur.execute('describe article;')
#cnx.close()


