Import pymysql
host = 'rds48z5k409g0753v62j.mysql.rds.aliyuncs.com'
user = 'r0gbqnbc4x'
password = '19760209'

cur.execute('drop table log,user,bbs,comment,note,friend,article, stock;
cur.execute('drop table note;

cur.execute( '''create table r0gbqnbc4x.user (
        id int(10) AUTO_INCREMENT PRIMARY KEY,
        name char(20) not null,
        password char(128) not null,
        gender char(1),
        username char(20),
        email char(35),
        message varchar(5000),
        pass char(1) not null,
        ip char(50),
        time_at char(50)) CHARACTER SET utf8;''')

cur.execute('''CREATE TABLE r0gbqnbc4x.bbs (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            name char(20) not null,
            message varchar(5000) not null,
            ip char(50),
            time_at char(50),
            page char(20),
            topic char(100)) CHARACTER SET utf8;''')

cur.execute('''CREATE TABLE r0gbqnbc4x.comment (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            id0 int(10) not null,
            name char(20) not null,
            comm varchar(1000) not null,
            ip char(50),
            time_at char(50),
            name_0 char(20)) CHARACTER SET utf8;''')

cur.execute('''CREATE TABLE r0gbqnbc4x.friend (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            name char(20) not null,
            friend char(20) not null,
            time_at char(50)) CHARACTER SET utf8;''')
cur.execute('''CREATE TABLE r0gbqnbc4x.article (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            articleid int(10) not null,
            articlename char(100),
            name char(20) not null,
            time_at char(50)) CHARACTER SET utf8;''')
cur.execute('''CREATE TABLE r0gbqnbc4x.stock (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            code char(6) not null,
            name char(20) not null,
            sign char(1) not null,
            time_at char(50),
            stockname char(20)
            ) CHARACTER SET utf8;''')
cur.execute('''CREATE TABLE r0gbqnbc4x.log (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            name char(20) not null,
            ip char(20) not null,
            time_at char(50)) CHARACTER SET utf8;''')

cur.execute('''CREATE TABLE r0gbqnbc4x.letter (
            id int(10) AUTO_INCREMENT PRIMARY KEY,
            name char(20) not null,
            name2 char(20) not null,
            letter varchar(5000) not null,
            ip char(50),
            time_at char(50)
            topic char(100)) CHARACTER SET utf8;''')

cur.execute('''INSERT INTO r0gbqnbc4x.user (
    id, name, password, gender, username, email, message, pass, ip, time_at)
    VALUES (
    1, 'Jiangang', 'Sien700806', '1', '吴建刚', 'imahero@gmail.com',
    '我是吴建刚', '1','158.182.201.42', '20160218 13:26');''')
cur.execute("INSERT INTO article (id, articleid, articlename, name, time_at) VALUES (NULL, '3', '阅读测试1', 'wjg', NOW());")
cur.execute("INSERT INTO bbs (id, name, message, page, ip, time_at,topic) VALUES (NULL, 'wjg', '留言', 'user_note', '10.201.66.25', NOW(), '试一下能不能留言');")

alter table article change artclename articlename char(100);

alter table bbs add page varchar(100);

alter table letter add topic char(100);
alter table comment add name_0 char(20);
alter table user add course char(50);
alter table bbs modify column message varchar(15000);
truncate table log;
UPDATE user SET pass='0' WHERE id=2;")
delete from user where id>1 and id<8;

cnx.commit()


select * from bbs where id=10;
select * from user;
select * from friend;
select * from stock;
select * from letter;
select * from article;
select * from comment;
select * from log;

select password,pass from r0gbqnbc4x.user where name='Jiangang';")
select name from friend where name="wjg" and friend="Jiangang" limit 0,1;
select name from r0gbqnbc4x.user where name="wjg";
select password,pass from users where name="wjg" limit 0,1;

describe user;
describe comment;
describe note;
describe bbs;
describe log;
describe friend;
describe stock;
describe article;
cnx.close()


for x in cur:
    print(x)



import xrld
xl = '\\jiangang\\投资\\stock.xlsm'
lst = []
clmnNumber = 15
rowNumber = 2
tableNumber = 1
sqlTablename = 'y'
data = xlrd.open_workbook(xl)
table = data.sheets()[tableNumber - 1]
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
