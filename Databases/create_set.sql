create table dbo.sarjat(

  Avain int identity(1,1) not null,
  Sarja int(2) not null,
  Toistomaara int(2) not null,
  
  constraint PK_sarjat_Avain primary key (avain)
)