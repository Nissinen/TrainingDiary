create table dbo.liike(

  Avain int identity(1,1) not null,
  Maastaveto int(3) null,
  Penkki int(3) null,
  Kyykky int(3) null,
  
  constraint PK_liike_Avain primary key (avain)
)