create table dbo.liike_sarja_tyyppi
(
  Avain int identity (1,1) not null,
  Liike_Avain int not null,
  Sarja_Avain int not null,
  Tyyppi_Avain int not null,
  
  constraint PK_liike_sarja_tyyppi_Avain primary key (Avain),
  
  constraint UQ_liike_sarja_tyyppi_Liike_Sarja_Tyyppi unique 
    (Liike_Avain, Sarja_Avain, Tyyppi_Avain),
  
  constraint FK_liike_sarja_tyyppi_Liike_Avain
    foreign key (Liike_Avain) references liike(Avain),
  
  constraint FK_liike_sarja_tyyppi_Sarja_Avain
    foreign key (Sarja_Avain) references sarjat(Avain),
  
  constraint FK_liike_sarja_tyyppi_Tyyppi_Avain
    foreign key (Tyyppi_Avain) references sarjatyyppi(Avain)
)