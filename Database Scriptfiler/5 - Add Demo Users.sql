use musikkavis

INSERT INTO bruker  (e_mail,passord,fornavn,etternavn,registered,sub_expire,utype) 
VALUES ('user@tungrocken.no','userpass','User','User',GETDATE(),GETDATE(),0)

INSERT INTO bruker  (e_mail,passord,fornavn,etternavn,registered,sub_expire,utype) 
VALUES ('admin@tungrocken.no','adminpass','Admin','Admin',GETDATE(),GETDATE(),1)

INSERT INTO bruker  (e_mail,passord,fornavn,etternavn,registered,sub_expire,utype) 
VALUES ('journalist@tungrocken.no','journalistpass','Journalist','Journalist',GETDATE(),GETDATE(),2)

INSERT INTO bruker  (e_mail,passord,fornavn,etternavn,registered,sub_expire,utype) 
VALUES ('subscriber@tungrocken.no','subscriberpass','Subscriber','Subscriber',GETDATE(),GETDATE(),3)