CREATE LOGIN "user" WITH PASSWORD = 'password';
GO
EXEC master..sp_addsrvrolemember @loginame = N'user', @rolename = N'sysadmin'
GO