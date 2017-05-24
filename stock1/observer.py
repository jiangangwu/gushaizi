#!/usr/bin/python
# -*- coding: utf-8 -*-
import pymysql

host = 'rds48z5k409g0753v62j.mysql.rds.aliyuncs.com'
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
'''
cnx = pymysql.connect(host = host, user = user, passwd = password,\
        db = db, port = port, charset = 'utf8')
cur = cnx.cursor()
cur.execute("use " + db + ";")

import xlrd
xl = '/users/jiangang/2017投资/股票观察2016-2.xlsm'

print('0. read')
lst = []
clmnNumber = 312
rowNumber = 7
tableNumber = 1
sqlTablename = 'observer'
data = xlrd.open_workbook(xl)
table = data.sheets()[tableNumber]
for i in range(clmnNumber):
    lst.append(table.col_values(i))
    
    
clmnName = []
for i in range(len(lst)):
    clmnName.append(lst[i][rowNumber-1])
       

print('1. update')

update_sql = "UPDATE observer SET "                          

for i in range(1 + rowNumber, len(lst[0])):
    a = ""
    for ii in range(len(lst)):  
        a = a + clmnName[ii] + "='" + str(lst[ii][i]) + "'" + ","
    sentence1 = update_sql + a[:-1] + ' where gpdm=' + "'" + lst[1][i] +"';"
    cur.execute(sentence1)
cnx.commit()




print('2. bubbles')
from datetime import datetime
from xlrd import xldate_as_tuple
d = xldate_as_tuple(int(lst[2][4]),0)
gxrq = str(d[0]) + '-' + str(d[1]) + '-' + str(d[2])
try:
    cur.execute("drop table observerVar;")
except Exception as e:
    print(e)
cur.execute('CREATE TABLE observerVar (id int(10) AUTO_INCREMENT PRIMARY KEY, gxrq varchar(10), szpm  float(5,4), zxpm float(5,4), cypm float(5,4)) CHARACTER SET utf8;')
cur.execute('truncate table observerVar;')
cur.execute("INSERT INTO observerVar (gxrq,szpm,zxpm,cypm) values ('" + gxrq + "', " + str(lst[5][4])[0:7] + ", " + str(lst[6][4])[0:7] + ", " + str(lst[7][4])[0:7] + ");")        
cnx.commit()


print('3. industries')

print('3.1 create table')

clmnNumber = 17
rowNumber = 1
tableNumber = 2
sqlTablename = 'industry'
data = xlrd.open_workbook(xl)
table = data.sheets()[tableNumber]
lst2 = []
for i in range(clmnNumber):
    lst2.append(table.col_values(i))
create_table_sql = "CREATE TABLE " + sqlTablename + \
                           " (id int(10) AUTO_INCREMENT PRIMARY KEY,"

clmnName = []
for i in range(len(lst2)):
    clmnName.append(lst2[i][rowNumber-1])
    create_table_sql = create_table_sql + " " +  clmnName[i] + ' '
    create_table_sql = create_table_sql + " " +  lst2[i][rowNumber] + ','
create_table_sql = create_table_sql[0:-1] +   ") CHARACTER SET utf8"

try:
    cur.execute("drop table industry;")
except Exception as e:
    print(e)

cur.execute(create_table_sql)
cnx.commit()

print('3.2 insert records')


cur.execute('truncate table industry;')
insert_sql = "INSERT INTO " + sqlTablename+ " ("                           
for c in clmnName:
    insert_sql = insert_sql + c + ', '
insert_sql = insert_sql[0:-2] + ") values "
for i in range(2 + rowNumber, len(lst2[0])):
    a = "("
    for ii in range(len(lst2)):  
        a = a + "'" + str(lst2[ii][i]) + "'" + ","
    sentence = insert_sql + a[:-1] + ')'
    cur.execute(sentence)
cnx.commit()



'''
print('1. stock')
print('1. create table')
lst = []
clmnNumber = 312
rowNumber = 7
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
    clmnName.append(lst[i][rowNumber-1])
    create_table_sql = create_table_sql + " " +  clmnName[i] + ' '
    create_table_sql = create_table_sql + " " +  lst[i][rowNumber] + ','
create_table_sql = create_table_sql[0:-1] +   ") CHARACTER SET utf8"

try:
    cur.execute("drop table observer;")
except Exception as e:
    print(e)

cur.execute(create_table_sql)
cnx.commit()

print('1.2 insert')

cur.execute('truncate table observer;')
insert_sql = "INSERT INTO " + sqlTablename+ " ("                           
for c in clmnName:
    insert_sql = insert_sql + c + ', '
insert_sql = insert_sql[0:-2] + ") values "
for i in range(1 + rowNumber, len(lst[0])):
    a = "("
    for ii in range(len(lst)):  
        a = a + "'" + str(lst[ii][i]) + "'" + ","
    sentence = insert_sql + a[:-1] + ')'
    cur.execute(sentence)
cnx.commit()

'''