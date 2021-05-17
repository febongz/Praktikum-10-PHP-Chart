CREATE TABLE `tb_death` (
  `id_death` int(11) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_death` ('id_death', `jumlah`) VALUES
(1, 596179),
(2, 250025),
(3, 423436),
(4, 106684),
(5, 43311),
(6, 113647),
(7, 127609),
(8, 123031),
(9, 78895),
(10, 85481);

CREATE TABLE `tb_newd` (
  `id_newd` int(11) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_newd` (`id_newd`,`jumlah`) VALUES
(1, 370),
(2, 3879),
(3, 1018),
(4, 292),
(5, 282),
(6, 321),
(7, 4),
(8, 198),
(9, 35),
(10, 110);

CREATE TABLE `tb_recover` (
  `id_recover` int(11) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_recover` (`id_recover`,`jumlah`) VALUES
(1, 26507427),
(2, 19021207),
(3, 4743871),
(4, 4743871),
(5, 4743871),
(6, 4502906),
(7, 4250699),
(8, 3619586),
(9, 3274808),
(10, 3175600);

ALTER TABLE `tb_death`
  ADD PRIMARY KEY (`id_death`);

ALTER TABLE `tb_death`
  MODIFY `id_death` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
  
ALTER TABLE `tb_newd`
  ADD PRIMARY KEY (`id_newd`);

ALTER TABLE `tb_newd`
  MODIFY `id_newd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;  
  
ALTER TABLE `tb_recover`
  ADD PRIMARY KEY (`id_recover`);

ALTER TABLE `tb_recover`
  MODIFY `id_recover` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;  