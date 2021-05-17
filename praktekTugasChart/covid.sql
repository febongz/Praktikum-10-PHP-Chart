CREATE TABLE `tb_covid` (
  `id_covid` int(11) NOT NULL,
  `negara` varchar(75) NOT NULL,
  `total` int(30) NOT NULL,
  `new` int(30) NOT NULL,
  `death` int(30) NOT NULL,
  `newd` int(30) NOT NULL,
  `recover` int(30) NOT NULL,
  `active` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_covid` (`id_covid`,`negara`,`total`, `new`, `death`, `newd`, `recover`, `active`) VALUES
(1,'USA', 33515308 ,30152 , 596179, 370, 26507427,5979784),
(2, 'India',22991927 ,329517 , 250025,3879, 19021207,3516976),
(3, 'Brazil',15214030 ,29240 ,423436, 1018, 13759125,1094365),
(4, 'France',5780379 ,3292 ,106684, 292, 4917393,653466),
(5,'Turkey', 5044936 ,13604,43311, 282, 4947256,125358),
(6, 'Russia',4888727 ,8465,113647, 321, 4502906,270108),
(7, 'UK',4437217 ,2357 ,127609, 4, 4250699,45891),
(8, 'Italy',4116287 ,5080 ,123031, 198, 3619586,328882),
(9, 'Spain',3581392 ,4579 ,78895, 35, 3274808,228120),
(10, 'Germany',3535354 ,7814,85481, 110, 3175600,215508);

ALTER TABLE `tb_covid`
  ADD PRIMARY KEY (`id_covid`);

ALTER TABLE `tb_covid`
  MODIFY `id_covid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
  
