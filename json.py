import os,sys,mysql.connector
mydb=mysql.connector.connect(
    host="127.0.0.1",
    user="byz_php",
    passwd="byz_php_pw",
    database="byz"
)
mysursor=mydb.cursor()
sql="""
INSERT INTO imgs (img_name,img_url) VALUES (%s,%s)
"""
# 打开文件
path = "./assets/byz"
dirs = os.listdir( path )
RECORDS=[]
img_dir={}
for i in dirs:
    if i!="hp":
        val=(i,"/assets/byz/"+i)
        mysursor.execute(sql,val)
        mydb.commit()
    else:
        path = "./assets/byz/hp"
        hp_dirs = os.listdir( path )
        for x in hp_dirs:
            val=(x,"/assets/byz/hp/"+x)
            mysursor.execute(sql,val)
            mydb.commit()
    print(mysursor.rowcount)