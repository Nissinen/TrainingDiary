create table dbo.henkilo(

  Avain int identity(1,1) not null,
  Tunniste nvarchar(20) not null,
  Etunimet nvarchar(100) not null,
  Sukunimi nvarchar(50) not null,
  Sahkoposti nvarchar(50) not null,
  Ika int(2) not null,
  Puhelinnumero nvarchar(20) not null,
  
  constraint PK_henkilo_Avain primary key (avain),
  constraint UQ_henkilo_Tunniste unique (tunniste),
  constraint UQ_henkilo_Sahkoposti unique (sahkoposti)
)
