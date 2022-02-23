import sqlite3

connection = sqlite3.connect('movie.db')
cursor = connection.cursor()
cursor.execute('''CREATE TABLE IF NOT EXISTS Shows
              (Title TEXT, Director TEXT, Year INT)''')

cursor.execute('''INSERT INTO movie (Title,Director,Year,actor,actrees) 
      VALUES ('vivah','Sooraj Barjatiya',2006,'Sahid Kapoor','Amrita Rao')'
            ('yaariyan','Divya Khoshla Kumar',2014,'Himansh Kohli','Rakul Preet Singh')''')


connection.commit()
connection.close()