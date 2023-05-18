SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE schema loginsystem ;
CREATE TABLE loginsystem.member (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `trainer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO loginsystem.member (`fname`, `lname`, `email`, `contact`, `trainer`) VALUES
('sayed', 'abdelfatah', 'sayed@gmail.com', '201', '101'),
('mostafa', 'kassas', 'mustafa121@gmail.com', '202', '102'),
('surya', 'tarek', 'surya@gmail.com', '203', '101'),
('Rawan', 'sayed', 'rawan@gmail.com', '204', '103'),
('ziad', 'wahed', 'ziad@gmail.com', '205', '103'),
('Ramez', 'mohamed', 'ramez@gmail.com', '206', '102'),
('waheed', 'samir', 'waheed12@gmail.com', '207', '103');



CREATE TABLE loginsystem.logintb (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO loginsystem.logintb (`username`, `password`) VALUES
('admin', 'pass');



CREATE TABLE loginsystem.Package (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO loginsystem.Package (`Package_id`, `Package_name`, `Amount`) VALUES
('121', 'platinium', 800),
('122', 'vip', 1500),
('123', 'gold', 1000);


CREATE TABLE loginsystem.Payment (
  `Payment_id` int(10) NOT NULL,
  `Amount` int(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO loginsystem.Payment (`Payment_id`, `Amount`, `customer_id`,`customer_name`, `payment_type`) VALUES
(301, 1500, '201','sayed','cash'),
(302, 800, '202','mostafa', 'card'),
(303, 1000, '203','surya','cheque'),
(304, 1500, '204','rawan','cash');



CREATE TABLE loginsystem.Trainer (
  `Trainer_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO loginsystem.Trainer (`Trainer_id`, `Name`, `phone`) VALUES
(101, 'sayed', 12365489),
(102, 'ayman', 21365789),
(103, 'ali', 123564789),
(104, 'Sameer', 12536987);


ALTER TABLE loginsystem.member
  ADD PRIMARY KEY (`contact`);


ALTER TABLE loginsystem.Package
  ADD PRIMARY KEY (`Package_id`);


ALTER TABLE loginsystem.Payment
  ADD PRIMARY KEY (`Payment_id`);


ALTER TABLE loginsystem.Trainer
  ADD PRIMARY KEY (`Trainer_id`);
COMMIT;

