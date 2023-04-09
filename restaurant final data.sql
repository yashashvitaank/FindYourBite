create table rest(
rid int AUTO_INCREMENT NOT NULL,
area varchar(30)NOT NULL,
resname varchar(30)NOT NULL,
ctype varchar(30)NOT NULL,
type varchar(10)NOT NULL,
rating double NOT NULL,
connumber varchar(12) NOT NULL,
PRIMARY KEY(rid),
mlink VARCHAR(255) NOT NULL
);
INSERT INTO rest(rid,area,resname,ctype,type,rating,connumber,mlink)
VALUES(1,"Wakad","Teera","North Indian","Non Veg",4.1,08686078383,"https://goo.gl/maps/6DCkizMNFrT4qTC27"),
(2,"Wakad","Sukhi Da Dhaba","North Indian","Non Veg",4,9860111233,"https://goo.gl/maps/gFY3cja1RggScNMc7"),
(3,"Wakad","Azzurro","Multicuisine","Non Veg",4.1,08698007755,"https://goo.gl/maps/cG3T9kuYNZEdtBJ8A"),
(4,"Wakad","Barbeque Nation","Multicuisine","Non Veg",4.6,08069028722,"https://goo.gl/maps/2FX1d3CfPCz3p6qj9"),
(5,"Wakad","Cocktail Club","Italian","Non Veg",4.5,08956507357,"https://goo.gl/maps/PPwzDcohnGnJ2uYH8"),
(6,"Wakad","Sai Darshini South Indian Cafe","South Indian","Veg",4.2,08378011353,"https://goo.gl/maps/RJXXGxGfFLcAFtxS8"),
(7,"Wakad","Tea Villa Cafe","Mexican","Veg",4.1,07499853621,"https://goo.gl/maps/TmLuZq6pZsusCU8W7"),
(8,"Wakad","Tatva","Chinese","Veg",4,8888526700,"https://goo.gl/maps/kH1ebgMNug5qDTXH8"),
(9,"Wakad","Rangla Punjab","North Indian","Non Veg",3.9,08007090602,"https://goo.gl/maps/A1he61N8PVwZefp49"),
(10,"Wakad","Bird Valley","Mexican","Non Veg",4.1,08446951999,"https://goo.gl/maps/SEy1G2LVreVrf1qn9"),
(11,"Wakad","Cafe Peter","Italian","Non Veg",4,08208255800,"https://goo.gl/maps/erytg2Lw96fNBw636"),
(12,"Wakad","Whistle Podu","South Indian","Veg",3.8,07028088088,"https://goo.gl/maps/5VBK8szFhUK9SWbN6");
INSERT INTO rest(rid,area,resname,ctype,type,rating,connumber,mlink)
VALUES(13,"Koregaon Park","Murphies","Multicuisine","Non Veg",4.2,09373811160,"https://goo.gl/maps/seuoiotBeweVrYBD8"),
(14,"Koregaon Park","Toscano Pune","Italian","Non Veg",4.3,02026154909,"https://goo.gl/maps/bR4AXhSs3BYJkT8fA"),
(15,"Koregaon Park","Dhaba Shaba Veg Bistro","North Indian", "Veg",4.3,09373362565,"https://goo.gl/maps/SXnpgCLnJW5F11PA8"),
(16,"Koregaon Park","The Sassy Spoon","Italian","Non Veg",4.4,07666222111,"https://goo.gl/maps/mCpqcXvFN7PRhs3F9"),
(17,"Koregaon Park","GATTI CHUTNEY","South Indian", "Veg",4.4,06361635537,"https://goo.gl/maps/CkweY5CyHgLmvaxq7"),
(18,"Koregaon Park","Uncle's Chinese","Chinese","Non Veg",4, 02026152970,"https://goo.gl/maps/atBYVv8idfM2mJiHA"),
(19,"Koregaon Park","Donatella","Mexican","Non Veg",4.6,07028004199,"https://goo.gl/maps/oetYpWEEhRBWKCse7"),
(20,"Koregaon Park","La Magia","Italian","Non Veg",4.3,09325532934,"https://goo.gl/maps/urk2R9RbAVDTAw5g7"),
(21,"Koregaon Park","Coriander Kitchen","North Indian","Non Veg",4.3,7770017269,"https://goo.gl/maps/ZwLL5fUKgV8cFJWS9"),
(22,"Koregaon Park","Third Wave Coffee Roasters","Multicuisine","Non Veg",4.4,08047108111,"https://goo.gl/maps/u6zRJCom1urY8wku5");
INSERT INTO rest(rid,area,resname,ctype,type,rating,connumber,mlink)
VALUES(23,"FC road","Vaishali Restaurant","South Indian", "Veg",4.3,02025531244,"https://goo.gl/maps/7CjVgLCshhA2mNeu7"),
(24,"FC road","Cafe Goodluck","Multicuisine","Non Veg",4.2, 02025676893,"https://goo.gl/maps/4ymCyXMFi5snQQ6v7"),
(25,"FC road","Thikana","Multicuisine","Non Veg",3.9,08530145444,"https://goo.gl/maps/3oQcYw9evxUEC3di9"),
(26,"FC road","Yana Sizzlers & Wok","Chinese","Non Veg",4.3,02066013898,"https://goo.gl/maps/NEPt1tiq3KLfLnTz7"),
(27,"FC road","Culture Pune","North Indian","Non Veg",4,09067016701,"https://goo.gl/maps/39amzGDQZjHe6HKA9"),
(28,"FC road","Burreatoss","Mexican","Non Veg",4.1,8657275842,"https://goo.gl/maps/uWGJAC7e9MDgV1NF9"),
(29,"FC road","Sir Misal","North Indian", "Veg",3.8,07745007745,"https://goo.gl/maps/oVMsgJmGF66J4RvQ6"),
(30,"FC road","FC Road Social","North Indian","Non Veg",4.1,09172378889,"https://goo.gl/maps/2yZRERtFM6eDJ9ZD8"),
(31,"FC road","Terrasinne","Italian","Non Veg",4.6,08530206607,"https://goo.gl/maps/3u5Sis83XqUd5W9g6"),
(32,"FC road","Chaitanya Paranthas","North Indian", "Veg",4.2,09579454768,"https://goo.gl/maps/dibN6DyW9BKYZGYP7"),
(33,"FC road","Niranjan","South Indian", "Veg",4,09890500700,"https://goo.gl/maps/MhZZajuPUXEc8kYN8");

INSERT INTO rest(rid,area,resname,ctype,type,rating,connumber,mlink)
VALUES(34,"Baner","Anna Idli","South Indian", "Veg",4.3,07038779928,"https://goo.gl/maps/EbDPdNmK6BMRZZ5d9"),
(35,"Baner","The 3 Musketeers","Multicuisine","Non Veg",4,09529221589,"https://goo.gl/maps/DomHv8vgXGRgM7oKA"),
(36,"Baner","TTF-The Tenth Floor","Italian ","Non Veg",3.9,08530395444,"https://goo.gl/maps/XLo8TYMQnJNuzEkM6"),
(37,"Baner","Brewing Bistro","Italian","Non Veg",4.5,09923045151,"https://goo.gl/maps/zT4tGEdCPcheBPrG8"),
(38,"Baner","Pind Punjab","North Indian","Non Veg",3.9,08806479797,"https://goo.gl/maps/q4SzsWyYYZjhpMKm9"),
(39,"Baner","Ice N Fire SkyLounge","Chinese","Non Veg",4.1,09004508397,"https://goo.gl/maps/wcBgHQHByREd7GrP9"),
(40,"Baner","MH 12 Pav Bhaji","North Indian", "Veg",4.1,07774055500,"https://goo.gl/maps/NTTrwvrYqYhEMNpv7"),
(41,"Baner","AB's - Absolute Barbecues","Multicuisine","Non Veg",4.3,08143896122,"https://goo.gl/maps/CBtpHYkFeK7WLge57"),
(42,"Baner","Talli Bar & Kitchen","Multicuisine","Non Veg",4.1,09075026464,"https://goo.gl/maps/e3DLajrXmnahHds47"),
(43,"Baner","Taco Alfresco","Mexican","Non Veg",4.3,07262809595,"https://goo.gl/maps/m6pLMu9ukGg2Gckm6"),
(44,"Baner","Mainland China","Chinese","Non Veg",4.1,07498422616,"https://goo.gl/maps/3REgF6QCpuQnQU2M7");
INSERT INTO rest(rid,area,resname,ctype,type,rating,connumber,mlink)
VALUES(45,"Camp","Burger Camp Branch","Multicuisine","Non Veg",4.3,6384443763,"https://goo.gl/maps/3Shz95jesiqAuRDu7"),
(46,"Camp","Mahesh Lunch Home","Chinese","Non Veg",4.1,02026133091,"https://goo.gl/maps/hr5EgcHoRMLYYnWK6"),
(47,"Camp","Mazdana Restaurant & Bar","North Indian","Non Veg",4.3,08600063174,"https://goo.gl/maps/uh7gnGSHfsLzgyvU7"),
(48,"Camp","Persian Darbar Pune","Multicuisine","Non Veg",4.2,9175623046,"https://goo.gl/maps/GxKVTrRfLmCSQkqS8"),
(49,"Camp","1000 Oaks","North Indian","Non Veg",4.2,02026345598,"https://goo.gl/maps/Yahw8GcVsQkKZGXd8"),
(50,"Camp","Sahare Dining Hall","North Indian", "Veg",4.1,02026126138,"https://goo.gl/maps/kGE7nKp6UEw27QNU6"),
(51,"Camp","Chinese Room","Chinese","Non Veg",4.2,02026131336,"https://goo.gl/maps/ZJmQHCcu6XRq37qt9"),
(52,"Camp","Garden vadapav camp","North Indian","Veg",4.3,6384495864,"https://goo.gl/maps/VPvnnMiffZoWT6cRA"),
(53,"Camp","Laa Unico","Mexican", "Veg",4.3,09689545544,"https://goo.gl/maps/aemZSDE9UR47Zaik8"),
(54,"Camp","11 East Street Cafe","Italian","Non Veg",4,9359930448,"https://goo.gl/maps/8tNPayze4rubfuq6A"),
(55,"Camp","RamKrishna Restaurant","South Indian","Veg",4.3,02026363936,"https://goo.gl/maps/7F1MK6qAqkoSK8Hy8");

INSERT INTO rest(rid,area,resname,ctype,type,rating,connumber,mlink)
VALUES(56,"Kothrud","Cafe Community","Italian","Non Veg",4,08446557799,"https://goo.gl/maps/WRYy2GwKJ1cfd4sT8"),
(57,"Kothrud","Fusion Kitchen","Mexican","Non Veg",4.3,9765549090,"https://goo.gl/maps/k5c8PpFXxCQdcR8k8"),
(58,"Kothrud","La Sicilia Bistro & Patisserie","Italian","Non Veg",4.3,09673996124,"https://goo.gl/maps/TAQc5nDoZSYH2M3Q7"),
(59,"Kothrud","Jalsa Restaurant and Bar","Multicuisine","Non Veg",4.1,6384476062,"https://goo.gl/maps/7sbPrHmqFRiMaX4e9"),
(60,"Kothrud","Global Punjab","North Indian","Non Veg",4.1,08956003300,"https://goo.gl/maps/N1ux9zTyDkrmBVNR8"),
(61,"Kothrud","Classico Kitchen and Bar","Chinese","Non Veg",4.3,09689809000,"https://goo.gl/maps/SFUzG3EPNiYc7yRN9"),
(62,"Kothrud","Simply South","South Indian", "Veg",3.8,09657994102,"https://goo.gl/maps/95iSx6iqwcExx7V98"),
(63,"Kothrud","Sri Krishna Aanand Bhavan","South Indian", "Veg",4.3,07083112112,"https://goo.gl/maps/wGyPn6VTfQqzSPGD7"),
(64,"Kothrud","Le Shaay Restro Cafe","Italian","Non Veg",4.8,07499537648,"https://goo.gl/maps/nGtSdYAdkqtPzWkq6"),
(65,"Kothrud","Sailors And Co","Multicuisine","Non Veg",4.8,9356047096,"https://goo.gl/maps/fBWfCaa9gzjWoMpb9");

