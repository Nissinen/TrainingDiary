create table dbo.treenityyppi(

Avain int identity(1,1) not null,
Tunniste nvarchar(20) not null,
  
 constraint PK_treenityyppi_Avain primary key (avain),
 constraint UQ_treenityyppi_Tunniste unique (tunniste)
)