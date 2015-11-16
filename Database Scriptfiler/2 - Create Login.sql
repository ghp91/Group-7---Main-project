CREATE LOGIN "user" WITH PASSWORD = 'password';

EXEC master..sp_addsrvrolemember @loginame = N'user', @rolename = N'sysadmin'