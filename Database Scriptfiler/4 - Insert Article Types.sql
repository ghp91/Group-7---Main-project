USE [musikkavis]
GO

INSERT INTO [dbo].[artikkel_type]
           ([a_typeID])
     VALUES
           ('nyheter')
GO

INSERT INTO [dbo].[artikkel_type]
           ([a_typeID])
     VALUES
           ('plater')
GO
INSERT INTO [dbo].[artikkel_type]
           ([a_typeID])
     VALUES
           ('konserter')
GO
select * from artikkel_type