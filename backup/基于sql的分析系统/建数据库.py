
import pymysql
host = 'rds48z5k409g0753v62j.mysql.rds.aliyuncs.com'
user = 'r0gbqnbc4x'
password = '19760209'
db = 'r0gbqnbc4x'
cnx = pymysql.connect(host = host, user = user, passwd = password,\
        db = db, port = 3306, charset = 'utf8')
cur = cnx.cursor()
    
#cur.execute('select password,pass from users where name="wjg" limit 0,1;')
#cur.execute('select password from users where name="Jack" limit 0,1;')

#cur.execute('describe users;')
#cur.execute('select name from users where name="wjg";')
##cur.execute('drop table log;')
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
#cur.execute('describe user;')
cur.execute('describe bbs;')

#cur.execute('''CREATE TABLE r0gbqnbc4x.bbs (
#            id int(10) AUTO_INCREMENT PRIMARY KEY,
#            name char(20) not null,
#            message varchar(5000) not null,
#            ip char(50),
#            time_at char(50) CHARACTER SET utf8);''')

#cur.execute('truncate table bbs;')
#cur.execute('select * from bbs;')
#cur.execute('alter table bbs add page char(20);')
#cur.execute('describe user;')

for x in cur:
    print(x)

#cur.execute('delete from gbook;')

#cnx.commit()
#
#
#cur.execute('select * from gbook;')
#for x in cur:
#    print(x)
#
#
#
#
#'''
#import xrld
#xl = 'C:\\JR\\增发.xlsx'
#lst = []
#clmnNumber = 15
#rowNumber = 2
#tableNumber = 1
#sqlTablename = 'y'
#data = xlrd.open_workbook(xl)
#table = data.sheets()[tableNumber - 1]
#for i in range(clmnNumber):
#    lst.append(table.col_values(i))
#
#create_table_sql = "CREATE TABLE " + sqlTablename + \
#                    " (id int(10) AUTO_INCREMENT PRIMARY KEY,"
#clmnName = []
#for i in range(len(lst)):
#    clmnName.append(lst[i][rowNumber])
#    create_table_sql = create_table_sql + " " +  clmnName[i] + ' '
#    create_table_sql = create_table_sql + " " +  lst[i][rowNumber + 1] + ','
#create_table_sql = create_table_sql[0:-1] +   ") CHARACTER SET utf8"
#cur.execute(create_table_sql)
#cnx.commit()
#insert_sql = "INSERT INTO " + sqlTablename+ " ("                           
#for c in clmnName:
#    insert_sql = insert_sql + c + ', '
#insert_sql = insert_sql[0:-2] + ") values "
#for i in range(2 + rowNumber, len(lst[0])):
#    a = "("
#    for ii in range(len(lst)):  
#        a = a + "'" + str(lst[ii][i]) + "'" + ","
#    sentence = insert_sql + a[:-1] + ')'
#    cur.execute(sentence)
#    
#cnx.close()
#
#