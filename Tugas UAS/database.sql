USE `db_buku`;
 
DROP TABLE IF EXISTS `tbl_data`;
 
CREATE TABLE `tbl_data` (
  `kode` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
  ) 
  ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
 
insert  into `tbl_data`(`kode`, `judul`, `nama`) values ('1', 'Saiful Rahman', 'Ensiklopedia Binatang'),
('2', 'Saiful Rahman', 'Resep Masakan Indonesia');