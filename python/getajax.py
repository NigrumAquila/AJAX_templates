# -*- coding: utf-8  -*-
import cgi
storage = cgi.FieldStorage()
data = storage.getvalue('data')
print('Status: 200 OK')
print('Content-Type: text/plain')
print('')
if data is not None:
    print(data)

f = open("demofile2.txt", "a")
f.write("Now the file has more content!")
f.close()