create table dbo.henkilo_treeni_tyyppi
(
  Avain int identity (1,1) not null,
  Henkilo_Avain int not null,
  Treeni_Avain int not null,
  Tyyppi_Avain int not null,
  
  constraint PK_henkilo_treeni_tyyppi_Avain primary key (Avain),
  
  constraint UQ_henkilo_treeni_tyyppi_Henkilo_Treeni_Tyyppi unique 
    (Henkilo_Avain, Treeni_Avain, Tyyppi_Avain),
  
  constraint FK_henkilo_treeni_tyyppi_Henkilo_Avain
    foreign key (Henkilo_Avain) references henkilo(Avain),
  
  constraint FK_henkilo_treeni_tyyppi_treeni_Avain
    foreign key (treeni_Avain) references treeni(Avain),
  
  constraint FK_henkilo_treeni_tyyppi_Tyyppi_Avain
    foreign key (Tyyppi_Avain) references treenityyppi(Avain)
)