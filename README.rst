CREATE DATABASE products;  USE products;


CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `products` (`id`, `title`, `image`, `descr`, `price`, `keywords`) VALUES
(9, 'THE BIRKIN', './products/707759a6fa679d960c0ea1414a67bd54product_pic4.jpg', 'The Hermes Birkin bag is the most iconic handbag in the world and was created in 1984 by Jean Louis Dumas. He tweaked the original Haut Ã  Courroies bag which was used to carry equestrian gear so it was more versatile, easier to carry and modern. Jane Birkin was the inspiration for this, hence the name.', '3000', 'birkin bag iconic Jean Louis Dumas Jane '),
(10, 'THE KELLY', './products/f8e27a85457e6da2682260ebc2d66e2aproduct_pic5.jpg', 'The Kelly bag was designed by Robert Dumas in the 1930s and was originally called asac a courroie pour dames meaning bags with straps for ladies. The bag was made infamous by the actress Grace Kelly when in 1956 she used the bag to hide her pregnancy from the paparazzi. Photographs of this beautiful bag were on covers of magazines around the world making it an overnight sensation. Hence it was renamed the \"Kelly\" bag.    ', '4500', 'kelly Robert Dumas bag Grace pregnancy sensation    '),
(11, 'THE CONSTANCE', './products/12e2e0b8bc440f7d758af52ad56a3854product_pic6.jpg', 'The Constance bag dates back to 1959 and was the bag preferred by Jaqueline Onassis. It is said to be named after the initial designerâ€™s fifth child.\r\n\r\nThe bag has a strap which can be fully extended to wear long on the shoulder or shortened as desired. It is a timeless easy wearing bag.', '5000', 'Constance bag Jaqueline Onassis '),
(12, 'CDC BELT BLACK', './products/26a9c27d6d187fc0607adff7e183a212belt.jpg', 'Shiny porosus croc with gold.\r\n\r\nBelts are back with a vengeance this season and Maia has found a true showstopper. A rare find in exotic porosus croc this belt will go with any look and is the perfect accessory.', '300', 'belt black croc gold belts Maia porosus accessory'),
(13, 'POCHETTE RIO COCOAN 24 CM', './products/e28ea66a9aab8232cec57cd88cecf35dcroc.jpg', 'Chocolate brown Hermes clutch in shiny croc. A rare find and a real investment piece. This vintage bag is a true classic yet also a style that remains forever contemporary. ', '2400', 'chocolate brown croc bag classic pochette rio cocoan'),
(15, 'DALVY ROUGE HERMES', './products/c6b0fd9f0a2674db583bfd09cf7ec1a4Dalvy-bordeaux-shiny-porosus-croc-MD-01.jpg', 'Elegant croc Dalvy in deep beautiful rouge teamed with gold hardware.', '2000', 'gold croc elegant dalvy rouge hermes '),
(16, 'EQUATEUR WASH SCARF 90', './products/d8c1babe70ff027e85ed2d72b432f338ser.jpg', 'Scarf in silk twill with hand rolled edges. The HermÃ¨s scarf is reinvented as the velvety Wash scarf.', '460', 'wash scarg equateur silk velvety');



CREATE TABLE `products_update` (
  `title` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `edtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `products_update` (`title`, `status`, `edtime`) VALUES
('juja', 'UPDATED', '2020-04-04 12:22:30'),
('juja', 'EDITED', '2020-04-04 12:23:26'),
('juja', 'DELETED', '2020-04-04 12:23:46'),
('THE KELLY', 'EDITED', '2020-04-08 22:10:14');

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

////////////////////////////////////////////////////////////////////////////


CREATE DATABASE images; USE images;

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `images` (`id`, `title`, `descr`, `image`) VALUES
(18, '', 'In 1880, Charles-Emile, Hermes\'s son, took charge of management and moved the store to 24 rue de Faubourg Saint-Honore, where it still remains today. Charles-Emile introduced saddlery to the industry with the help of his sons, Adolphe and Emile-Maurice, and began selling their products in retail. At the time, the company catered to the elite of Europe, Russia, Asia, North Africa, and the Americas.', './images/a0be89914229a1207b19dbcdc4a9c048h'),
(19, '', 'In 1900, the company began to offer bags specially designed for riders to carry their saddles in with them. The first bag was the now famous Haut Ã  Courroies bag. This is how the company came to design and manufacture bags for the fashion industry.', './images/7931548cdfb1e3a5986270269164dd65h'),
(22, '', 'In the mid-1930s HermÃ¨s employed Universal GenÃ¨ve, a Swiss watchmaker, to be the brandâ€™s exclusive timepiece designer. The company produced a line of menâ€™s wrist chronographs (manufactured in stainless steel or 18K gold) and a womanâ€™s Art DÃ©co cuff watch in steel, 18K gold, or platinum. Either male and female models contained dials signed either â€œHermÃ¨sâ€ or \"HermÃ¨s Universal GenÃ¨ve\", while the watch movements were signed Universal GenÃ¨ve S.A.\" The HermÃ¨s/Universal partnership lasted up until the 1950s.', './images/276e35780fe7402b77ea13185d3880dahermes_vintage_watch.png');


ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

///////////////////////////////////////////////////////////////////////////

MongoDB database : images
Collections : images

{ "_id" : { "$oid" : "5e8da577e625000074001997" }, "title" : "So how it began..", "image" : "./images/2997a85b638b32d0f98e03852d5f04a8hermes1.png", "descr" : "In 1880, Charles-Emile, Hermes's son, took charge of management and moved the store to 24 rue de Faubourg Saint-Honore, where it still remains today. Charles-Emile introduced saddlery to the industry with the help of his sons, Adolphe and Emile-Maurice, and began selling their products in retail. At the time, the company catered to the elite of Europe, Russia, Asia, North Africa, and the Americas." }
{ "_id" : { "$oid" : "5e8da5a3e625000074001998" }, "title" : "..", "image" : "./images/b7f1a470387e76ed5c3a68629a3723f6hermes2", "descr" : "\tIn 1900, the company began to offer bags specially designed for riders to carry their saddles in with them. The first bag was the now famous Haut Ã  Courroies bag. This is how the company came to design and manufacture bags for the fashion industry." }
{ "_id" : { "$oid" : "5e8dacc2e62500007400199c" }, "title" : "3", "image" : "./images/5904659e2659fa5faa129fafc3deaeeahermes3.png", "descr" : "From the mid-1930s, Hermès employed Swiss watchmaker Universal Genève as the brand's first and exclusive designer of timepieces, producing a line of men's wrist chronographs (manufactured in 18K gold or stainless steel) and women's Art Déco cuff watches in 18K gold, steel, or platinum. Both models contained dials signed either \"Hermès\" or \"Hermès Universal Genève\", while the watch movements were signed \"Universal Genève S.A.\". The Hermès/Universal partnership lasted until the 1950s." }
