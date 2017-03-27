--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS customers;
CREATE TABLE customers(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) DEFAULT NULL,
  techinician varchar(255) DEFAULT NULL,
  orderdate  varchar(255) DEFAULT NULL,
  apptype varchar(255) DEFAULT NULL,
  cellnumber varchar(255) DEFAULT NULL,
  email varchar(255) DEFAULT NULL,
  orderstate varchar(255)DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=4;


--
-- Dumping data for table `customers`
--

INSERT INTO customers VALUES (1,'Daron Burke','Wayne George','05 Sep 2016','Repair', '555-925-3685','dburke@salesperson.com', 'Done'),(2,'Tyler Sherman','Troy Stephens','17 Sep 2016','Repair','555-432-5431','strevino@salesperson.com','Done'),(3,'Eddie Moody','Jeff Kim','17 Apr 2016','Quote','555-736-2301','iboling@salesperson.com', 'Done'),(4,'Pearl Mann','Charles Morrison','08 Apr 2016','Repair','555-866-6131','rhamilton@salesperson.com', 'done'),(5,'Bess Gray','Charles Morrison','10 Feb 2016','Quote','336-352-9654','kbarker@salesperson.com', 'In Progress'),(6,'Miverna Ray','Thomas Davis','15 Jun 2016','Insurance','153-532-3209','eolson@salesperson.com', 'In Progress'),(7,'Samuel Myers','Hunter Dockie','15 Jun 2016','Insurance','153-532-3209','eolson@salesperson.com', 'In Progress'),(8,'Kim Kardashain','Stanley Morgan','15 Mar 2016','Quote','153-234-3209','eolson@salesperson.info', 'In Progress'),(9,'Barbara Morge','Hinckley Thames','15 July 2016','Insurance','153-522-3209','barbabra@salesperson.com', 'Cancelled'),(10,'Testy','Testerer', '15 Jun 2016','Insurance','444-555-6666','kevin@test.com','Cancelled');

