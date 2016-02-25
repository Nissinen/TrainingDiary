create table dbo.treeni_liike_tyyppi
(
  Avain int identity (1,1) not null,
  Liike_Avain int not null,
  Treeni_Avain int not null,
  Tyyppi_Avain int not null,
  
  constraint PK_treeni_liike_tyyppi_Avain primary key (Avain),
  
  constraint UQ_treeni_liike_tyyppi_Treeni_Liike_Tyyppi unique 
    (Liike_Avain, Treeni_Avain, Tyyppi_Avain),
  
  constraint FK_treeni_liike_tyyppi_Liike_Avain
    foreign key (Liike_Avain) references liike(Avain),
  
  constraint FK_treeni_liike_tyyppi_treeni_Avain
    foreign key (treeni_Avain) references treeni(Avain),
  
  constraint FK_treeni_liike_tyyppi_Tyyppi_Avain
    foreign key (Tyyppi_Avain) references treenityyppi(Avain)
)