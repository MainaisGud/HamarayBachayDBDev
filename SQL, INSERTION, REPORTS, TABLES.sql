/* DELETING ABLES IN CASE WE HAVE TABLES WITH SAME NAMES */
DROP TABLE IF EXISTS 
Guardian, 
Guardian_History, 
STUDENT, 
student_history,
Responsible_For,
Student_Accompany_Form,
Staff,
SECTION_CHANGE,
ENROLLMENT_HISTORY,
FEE_DETAILS,
M_STAFF_MEMBER,
F_CHILD_OF,
FATHER_HISTORY,
M_CHILD_OF,
F_STAFF_MEMBER,
MOTHER_HISTORY,
Mother,
ASSIGNED,
Course,
Class_Info,
Sections,
Course_History,
Staff_Member,
Father;

/* TABLE CREATION */
/********************* CREATING TABLE TO MAINTAIN RECORD OF GUARDIAN *********************/
CREATE TABLE Guardian (
	Guardian_ID INTEGER(5) NOT NULL AUTO_INCREMENT,
	Name VARCHAR(50),
	Gender VARCHAR(2),
	CNIC VARCHAR(20) UNIQUE,
    CONSTRAINT pk_Guardian PRIMARY KEY(Guardian_ID)    
);


/********************* INSERTING DATA IN GUARDIAN***************************************/
INSERT INTO 

    Guardian(Name,Gender,CNIC) VALUES	
    
    ('Batool Jafari','F','61101-768273-3'),
    ('Rafay Rashed','M','61101-234523-5'),
    ('Gal Gadot','F','61101-234565-4'),
    ('Tim Parker','M','42405-545554-4'),
    ('Lindy James','F','61101-445454-4'),
    ('Samantha Yan','F','42403-468765-5'),
    ('Kate Jen','F','42409-994949-4'),
    ('Saral Gilani','F','42407-628484-9'),
    ('Maimona Khan','F','61101-345434-4'),
    ('Kanwal Niazi','F','42409-384999-3'),
    ('Saad Aftab','M','42409-839845-4'),
    ('Ashar Ahmed','M','61101-345435-3'),
    ('Syed Raahim','M','42409-384398-8'),
    ('Fahad Nasir','M','44013-895999-4'),
    ('Hasan Mahmood','M','44019-389345-9'),
    ('Kim Muller','F','61101-667755-5'),
    ('Quan Tran','M','44010-088938-9'),
    ('Saheel Qureshi','M','42408-498489-9'),
    ('Kaitlyn Megan','F','61101-676763-4'),
    ('Jenna Park','F','44013-454444-4');

SELECT * FROM Guardian;


/*****************************TRIGGER*********************************/

-- drop trigger g_id_trigger;
-- CREATE TRIGGER g_id_trigger
--    BEFORE INSERT ON Guardian FOR EACH ROW
--    BEGIN
--        SELECT 'G' || TO_CHAR(gid.NEXTVAL,'fm00')
--        INTO   NEW.Guardian_ID
--        FROM   DUAL
--    END;


/********************* CREATING TABLE TO MAINTAIN GUARDIAN HISTORY *********************/
CREATE TABLE  Guardian_History (
	Guardian_ID VARCHAR(5),
	Date_of_Change Date,
	Address VARCHAR(50),
	Email VARCHAR(20),
	Contact VARCHAR(20),
    CONSTRAINT pk_guardian_history PRIMARY KEY (Guardian_ID,Date_of_Change),
    CONSTRAINT fk_guardian_history FOREIGN KEY (Guardian_ID) REFERENCES Guardian(Guardian_ID)

);


/********************* INSERTING DATA IN GUARDIAN HISTORY***************************************/
INSERT INTO 

Guardian_History(Guardian_ID, Date_of_Change, Address, Email, Contact) VALUES

	
    ('G01','2019-03-10','H#B-5,Street 5, E-10,Islamabad','batss@gmail.com','0332-7373281'),
    ('G01','2020-05-10','H#B-5,Street 5, E-10,Islamabad','emailbat@gmail.com','0334-2442421'),
    ('G02','2020-11-03','H#B-4,Street 5, E-10,Islamabad','rafayrr@gmail.com','0343-4232222'),
    ('G02','2020-12-05','H#A-10,Street 15, F-11,Islamabad','rafayrr@gmail.com','0343-4232222'),
    ('G02','2020-06-25','H#A-10,Street 15, F-11,Islamabad','R1r23@gmail.com','0332-3239482'),
    ('G03','2019-04-24','H#F-6,Street 8, Chaklala,RWP','galgad@gmail.com','0337-8278827'),
    ('G04','2020-07-15','H#P-8,Street 202,DHA, Islamabad','timy@gmail.com','0311-2434343'),
    ('G05','2020-12-18','H#A-62,Street 4, Chaklala,RWP','Lindd32@gmail.com','0344-5483833'),
    ('G06','2019-08-07','H#A-1,Street 34,DHA, Islamabad','sammy@gmail.com','0317-7727273'),
    ('G07','2019-03-02','H#P-8,Street 7,DHA, Islamabad','katess@yahoo.com','0333-1231235'),
    ('G08','2020-12-12','H#B-10,Street 1, E-11,Islamabad','saralgg@gmail.com','0335-6789492'),
    ('G09','2020-05-31','H#X-23,Street 7,DHA, Islamabad','maimaim@yahoo.com','0334-9094445'),
    ('G10','2020-10-01','H#M-90,Street 23, Chaklala,RWP','kanwalzz@yahoo.com','0336-5478902'),
    ('G10','2020-10-06','H#M-90,Street 23, Chaklala,RWP','kanwalzz@yahoo.com','0336-5478202'),
    ('G11','2019-09-03','H#G-9,Street 70,DHA, Islamabad','sadboi@gmail.com','0335-6229003'),
    ('G12','2020-05-04','H#P-85,Street 71,DHA, Islamabad','usher@gmail.com','0334-1234532'),
    ('G13','2020-05-05','H#B-11,Street 2, E-7,Islamabad','smzen@gmail.com','0333-4989831'),
    ('G14','2019-06-17','H#P-23,Street 7,DHA, Islamabad','tofs@hotmail.com','0339-9939993'),
    ('G15','2019-03-02','H#P-8,Street 7,DHA, Islamabad','hasss@gmail.com','0345-6464615'),
    ('G16','2019-06-17','H#J-21,Street 14, Chaklala,RWP','Kimy_t@gmail.com','0333-3333317'),
    ('G17','2020-02-02','H#P-1,Street 45,DHA, Islamabad','QGTran@gmail.com','0333-3646669'),
    ('G18','2020-12-12','H#R-23,Street 8, Chaklala,RWP','Sahil@gmail.com','0334-3334349'),
    ('G19','2020-05-05','H#P-43,Street 9,DHA, Islamabad','twokate@gmail.com','0358-5858859'),
    ('G20','2020-11-12','H#F-1,Street 10,DHA, Islamabad','Jennass@hotmail.com','0343-8888384'),
    ('G20','2020-12-12','H#F-2,Street 10,DHA, Islamabad','Jens@hotmail.com','0343-8888384'),
    ('G20','2020-12-13','H#F-1,Street 10,DHA, Islamabad','Jennass@hotmail.com','0343-8778384');
    
	SELECT * FROM Guardian_History;



/********************** CREATING TABLE TO MAINTAIN STUDENT RECORD *********************/
CREATE TABLE STUDENT(
	Student_ID VARCHAR(6),
    Name VARCHAR(20),
    Gender VARCHAR(2),
    DOB DATE,
    image_link VARCHAR(20),
    signup_date DATE,
    CNIC VARCHAR(20) UNIQUE,
    CONSTRAINT pk_Student PRIMARY KEY(Student_ID)

 );
 

 
 /********************************INSERTING DATA INTO STUDENT******************************/
INSERT INTO 
 
STUDENT(Student_ID, Name, Gender, DOB, image_link, signup_date, CNIC) VALUES
    
    ('ST0001','Abeeha Fatima','F','2017-11-17','ST0001.jpg','2018-01-01','61101-7529557-1'),
    ('ST0002','Abdul Kamran','M','2017-06-26','ST0002.jpg','2018-01-01','61101-7529357-2'),
    ('ST0003','Adil Fayyaz','M','2010-01-19','ST0003.jpg','2017-12-27','61101-8529557-3'),
    ('ST0004','Aleezeh Usman','F','2007-11-06','ST0004.jpg','2021-12-31','54540-6664368-6'),
    ('ST0005','Faaira Ahmed','F','2005-05-12','ST0005.jpg','2018-02-15','61101-7529557-5'),
    ('ST0006','Adan Mustafa','M','2014-12-09','ST0006.jpg','2018-01-05','61101-7529257-6'),
	('ST0007','Hadiya Shahid','F','2015-04-02','ST0007.jpg','2018-01-03','61101-7529527-7'),
    ('ST0008','Mavis Hunter','F','2014-03-13','ST0008.jpg','2018-01-02','61101-3429557-8'),
    ('ST0009','Stiles Stilinski','M','2010-05-10','ST0009.jpg','2018-01-01','61101-7529157-9'),
    ('ST0010','Scott McCall','M','2009-04-23','ST0010.jpg','2018-01-02','61101-7529551-1'),
    ('ST0011','Tobias Eaton','M','2011-04-02','ST0011.jpg','2018-01-02','61101-7529551-2'),
    ('ST0012','Matthew Daddario','M','2006-03-17','ST0012.jpg','2017-12-27','61101-7529551-3'),
    ('ST0013','Lydia Martin','F','2008-10-01','ST0013.jpg','2017-12-30','61101-7529551-4'),
    ('ST0014','Shagufta Shakir','F','2013-06-13','ST0014.jpg','2017-12-15','61101-7529551-5'),
    ('ST0015','Talina Taimour','F','2008-05-12','ST0015.jpg','2019-01-18','61101-7529551-6'),
    ('ST0016','Rajjaar Abdul Rehman','M','2010-12-10','ST0016.jpg','2018-12-18','61101-7529551-7'),
    ('ST0017','Faaira Ahmed','F','2005-12-22','ST0017.jpg','2019-01-05','61101-7529551-8'),
    ('ST0018','Aliya Bangash','F','2008-12-19','ST0018.jpg','2018-12-25','61101-7529551-9'),
    ('ST0019','Abdul Samad','M','2007-07-09','ST0019.jpg','2019-06-05','61101-7529552-0'),
    ('ST0020','Komal Farrukh','F','2012-06-08','ST0020.jpg','2019-12-11','61101-7529552-1');

SELECT * FROM STUDENT;


/********************** CREATING TABLE TO MAINTAIN STUDENT HISTORY *********************/
CREATE TABLE student_history(
    Student_ID VARCHAR(6),
    Address_Date DATE,
    Address Varchar(35), 
    CONSTRAINT Pk_student_history PRIMARY KEY(Student_ID, Address_Date),
    CONSTRAINT Fk_student_history FOREIGN KEY(Student_ID) REFERENCES Student(Student_ID)

);



/************************* INSERTING DATA INTO STUDENT HISTORY********************/
INSERT INTO student_history(Student_ID, Address_Date, Address)VALUES

    ('ST0001','2018-02-01','SECTOR # F11,STREET 10,HOUSE 40'),
    ('ST0002','2019-01-01','H#D-4,Street 5,RWP'),
    ('ST0003','2017-12-27','SECTOR # I10,STREET 45,HOUSE 30'),
    ('ST0004','2017-12-30','SECTOR # H10,STREET 4,HOUSE 401'),
    ('ST0005','2018-02-15','SECTOR # G11,STREET 8,HOUSE 403'),
    ('ST0006','2018-01-05','SECTOR # G6,STREET 11,HOUSE 7'),
    ('ST0007','2018-03-01','H#F-20,Street 5,RWP'),
    ('ST0008','2018-04-01','H#B-20,Street 1,RWP'),
    ('ST0009','2018-01-01','H#B-11,Street 2,RWP'),
    ('ST0010','2018-09-01','H#C-5,Street 10,ISB'),
    ('ST0011','2018-01-02','SECTOR # I8,STREET 31,HOUSE 987'),
    ('ST0012','2017-12-27','H#E-8,Street 3,RWP'),
    ('ST0013','2017-11-30','H#A-2,Street 4,RWP'),
    ('ST0014','2017-12-29','H#C-20,Street 7,ISB'),
    ('ST0015','2019-01-18','H#D-12,Street 7,ISB'),
    ('ST0016','2018-12-29','H#G-9,Street 19,ISB'),
    ('ST0017','2019-05-01', 'H#E-12,Street 9,RWP'),
    ('ST0018','2018-06-27','H#X-30,Street 4,RWP'),
    ('ST0019','2019-12-28','H#A-6,Street 11,ISB'),
    ('ST0020','2019-03-06','H#F-1,Street 10,DHA, Islamabad');
    
Select * FROM  student_history;

/**********************  Responsible_For Form **********************/
CREATE TABLE Responsible_For(
	Student_ID VARCHAR(6),
	Guardian_ID VARCHAR(5),
	Relation VARCHAR(20),
	Current_ INT,
    CONSTRAINT fk_Responsible_For_1 FOREIGN KEY(Student_ID) REFERENCES Student(Student_ID),
    CONSTRAINT fk_Responsible_For_2 FOREIGN KEY(Guardian_ID) REFERENCES Guardian(Guardian_ID),
    CONSTRAINT pk_Responsible_For PRIMARY KEY(Student_ID,Guardian_ID)



);



/****************** INSERTING DATA IN RESPONSIBLE FOR FORM *********************/
INSERT INTO 
    Responsible_For(Student_ID, Guardian_ID, Relation, Current_) VALUES
    ('ST0001','G01','Maternal Aunt',1),
    ('ST0002','G02','Grand Father',1),
    ('ST0002','G03','Grand Mother',0),
    ('ST0002','G04','Maternal Uncle',0),
    ('ST0003','G03','Cousin',1),
    ('ST0004','G04','Maternal Uncle',1),
    ('ST0004','G05','Paternal Uncle',0),
    ('ST0005','G06','Grand Mother',1),
    ('ST0006','G07','Paternal Aunt',1),
    ('ST0007','G08','Sister',1),
    ('ST0008','G09','Sister',1),
    ('ST0009','G10','Grand Mother',1),
    ('ST0010','G10','Grand Mother',1),
    ('ST0011','G11','Brother',1),
    ('ST0012','G12','Cousin',1),
    ('ST0013','G13','Care-Taker',1),
    ('ST0014','G14','Brother',1),
    ('ST0015','G15','Paternal Uncle',1),
    ('ST0016','G16','Sister',1),
    ('ST0017','G17','Cousin',1),
    ('ST0018','G18','Cousin',1),
    ('ST0019','G19','Paternal Aunt',1),
    ('ST0020','G20','Care-Taker',1),
    ('ST0019','G20','Care-Taker',0),
    ('ST0010','G20','Care-Taker',0);
	
    SELECT * FROM Responsible_For;



/* STUDENT ACCOMPANY FORM */
CREATE TABLE Student_Accompany_Form (
	Acc_Form_No VARCHAR(6),
	Student_ID VARCHAR(6),
	Guardian_ID VARCHAR(5),
	Date_Of_Visit DATE,
	Pregnant VARCHAR(2),
	Reason VARCHAR(50),
    CONSTRAINT pk_Student_Accompany_Form PRIMARY KEY(Acc_Form_No, Student_ID, Guardian_ID),
    CONSTRAINT fk_Student_Accompany_Form_1 FOREIGN KEY(Student_ID, Guardian_ID) REFERENCES Responsible_For(Student_ID, Guardian_ID)


);

/****************** INSERTING DATA INTO STUDENT ACCOMPANY FORM ************************/
INSERT INTO Student_Accompany_Form(Acc_Form_No,Student_ID, Guardian_ID, Date_Of_Visit, Pregnant, Reason) VALUES
    
    ('AF0001','ST0001','G01','2020/02/01','1','Parents Away on Vacation'),
    ('AF0002','ST0002','G02','2020/05/10','0','Family death'),
    ('AF0003','ST0002','G02','2020/12/15','0','At work'),
    ('AF0004','ST0006','G07','2019/04/04','1','At the hospital'),
    ('AF0005','ST0010','G10','2020/11/04','0','Family death'),
    ('AF0006','ST0001','G01','2020/12/01','0','Parents Ill'),
    ('AF0007','ST0004','G05','2020/12/13','0','Family death'),
    ('AF0008','ST0016','G16','2020/12/21','1','Had an Emergency'),
    ('AF0009','ST0018','G18','2020/12/12','0','Parents Away on Vacation'),
    ('AF0010','ST0019','G19','2020/06/05','0','Went for Shopping'),
    ('AF0011','ST0019','G20','2020/12/15','1','Family death'),
    ('AF0012','ST0003','G03','2020/05/23','0','Fell asleep from meds'),
    ('AF0013','ST0004','G05','2020/12/31','0','Parents Away on Vacation'),
    ('AF0014','ST0017','G17','2020/04/05','0','Broken Leg'),
    ('AF0015','ST0008','G09','2020/11/01','0','Had the Corona-Virus');

select * from Student_Accompany_Form;
/* STAFF */
CREATE TABLE Staff (
	Staff_ID VARCHAR(6),
	Name VARCHAR(20),
	CNIC VARCHAR(20),
	Address VARCHAR(50),
	Contact VARCHAR(20),
	Email VARCHAR(30),
	Start_Date DATE,
	End_Date DATE,
	Bonus REAL,
	Salary REAL,
    CONSTRAINT pk_Staff PRIMARY KEY(Staff_ID)

);

/*******************INSERTING DATA INTO STAFF *******************/
INSERT 
	INTO Staff VALUES
    ('STF001','JAWAD AHMED','42401-309849-8','SECTOR # F11,STREET 10,HOUSE 40','0315-6498161','jawad2@gmail.com','2019-04-02','2019-06-10',5000,5000),
   
    ('STF002','ADNAN TARIQ','42401-3087923','SECTOR # I10,STREET 45,HOUSE 30','0348-1981687','adnan7@gmail.com','2019-04-11','2019-07-11',10000,10000),

    ('STF003','ASIF NAEEM','32301-907561-4','SECTOR # F9,STREET 879,HOUSE 95','0314-1558168','asif73@gmail.com','2019-05-12','2019-08-11',15000,7000),
	
    ('STF004','NOOR-UL-AIN','64253-197018-4','SECTOR # H10,STREET 4,HOUSE 401','0320-9536416','noor98@gmail.com','2019-06-13','2019-09-14',16000,6000),
	
    ('STF005','SHEHR  BANO','32054-690174-8','SECTOR # G11,STREET 8,HOUSE 403','0345-9898492','shehr70@gmail.com','2019-07-14','2019-10-14',17000,12000),
	
    ('STF006','TURAB ALI','56213-097231-8','SECTOR # G8,STREET 101,HOUSE 97','0312-9563178','turab949@gmail.com','2019-08-15','2019-11-15',18000,14000),
	
    ('STF007','MAIMONA RASOOL','36219-909451-6','SECTOR # B12,STREET 845,HOUSE 100','0325-9887374','maimona666@gmail.com','2019-09-16','2019-12-16',19000,17000),
	
    ('STF008','TAYYAB KHAN','29346-108715-6','SECTOR # D3,STREET 989,HOUSE 1891','0315-4987958','tayyab61@gmail.com','2020-01-28','2020-02-1',20000,5000),
	
    ('STF009','USMAN ASHRAF','56497-845026-3','SECTOR # H13,STREET 98,HOUSE 789','0318-9643189','usman36@gmail.com','2019-02-05','2019-05-29',21000,13000),
	
    ('STF010','SHAMS FAROOQ','54972-136097-9','SECTOR # I8,STREET 31,HOUSE 987','0326-9876149','shams94@gmail.com','2019-05-25','2020-07-27',22000,9000),
	
    ('STF011','ASMAT KHALIDA','85213-364231-8','SECTOR # G9,STREET 10,HOUSE 92','0312-9364278','asma49@gmail.com','2019-09-15','2019-11-15',18000,14000),
	
    ('STF012','KULSOOM AHMED','31236-909451-6','SECTOR # B1,STREET 85,HOUSE 10','0325-9368774','kulsoom66@gmail.com','2019-08-16','2019-12-16',19000,17000),
	
    ('STF013','MURTAZA RASHEED','29349-631715-6','SECTOR # D5,STREET 99,HOUSE 181','0315-4145358','rasheed61@gmail.com','2019-11-27','2019-04-28',20000,5000),
	
    ('STF014','AIMAN ZARA','56439-461785-2','SECTOR # H23,STREET 8,HOUSE 89','0318-9347189','aiman36@gmail.com','2019-04-05','2019-08-29',21000,13000),
	
    ('STF015','RASHIDA KHAN','54976-421800-1','SECTOR # G4,STREET 1,HOUSE 97','0326-9796149','rashida94@gmail.com','2019-06-25','2019-10-25',22000,9000);

 SELECT * FROM Staff;

/******************* CREATING TABLE TO MAINTAIN RECORD OF STAFF MEMBERS *************************/
CREATE TABLE Staff_Member (

	Guardian_ID VARCHAR(5),
	Staff_ID VARCHAR(6),
    CONSTRAINT pk_Staff_Member PRIMARY KEY(Guardian_ID,Staff_ID),
    CONSTRAINT fk_Staff_Member_1 FOREIGN KEY (Guardian_ID) REFERENCES Guardian(Guardian_ID),
    CONSTRAINT fk_Staff_Member_2 FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)

);

/****************** inserting data in staff member *****************************/
INSERT INTO 
Staff_Member (Guardian_ID, Staff_ID) VALUES
    ('G02','STF001'),
	
    ('G03','STF004'),
	
    ('G06','STF006'),
	
    ('G12','STF014'),
	
    ('G15','STF003');
SELECT * FROM Staff_Member;


 /* Creating table course */ 
CREATE TABLE Course(
	Course_ID VARCHAR(6),
	Course_Title VARCHAR(25),
	Is_Offered int,
    CONSTRAINT pk_Course PRIMARY KEY(Course_ID)
);

INSERT INTO 
Course(Course_ID, Course_Title, Is_Offered) VALUES
   ('GRM101','Grooming',1),
   	
    ('ISL001','Islamic Studies',0),
    	
    ('ETH111','Ethics',0),
        	
    ('DPR006','Depression',0),
        	
    ('FMG102','Family Management',0),
        	
    ('HEC001','Home Economics',0),
        	
    ('CLY101','Culinary Arts',0),
        	
    ('SEM001','Sewing and Embroidery',0),
        
    ('ITO101','IT/Microsoft Office',0),
        	
    ('MUS111','Music',0),
        	
    ('ENV101','Environmental Studies',0);
SELECT * FROM Course;

/* Creating table for Class information */ 
CREATE TABLE Class_Info(
	Class_ID int,
	Course_ID varchar(6),
    CONSTRAINT 	pk_Class_Info PRIMARY KEY (Class_ID),
    CONSTRAINT	fk_Class_Info FOREIGN KEY(Course_ID) REFERENCES Course(Course_ID)

);

/******************* INSERTING DATA INTO CLASS_INFO******************/
INSERT INTO 
Class_Info(Class_ID, Course_ID ) VALUES
    (1,'ITO101'),
    (2,'ITO101'),
    (3,'ITO101'),
    (4,'ITO101'),
    (5,'ITO101'),
    (6,'ITO101');
SELECT * FROM Class_Info;


CREATE TABLE Sections(
	Class_ID int,
	Section_ID varchar(4),
	Section_Title varchar(20),
    CONSTRAINT pk_Sections PRIMARY KEY(Class_ID, Section_ID),
    CONSTRAINT fk_Sections FOREIGN KEY(Class_ID) References Class_Info(Class_ID)
);

/***************** INSERTING DATA INTO SECTIONS***************************/
INSERT INTO 
	Sections(Class_ID, Section_ID, Section_Title ) VALUES
    (1,'GR-B','Green - Boys'),
    
    (1,'BL-G','Blue - Girls'),
    
    (1,'YW-B','Yellow - Boys'),
    
    (1,'YW-G','Yellow-Girls'),
    
    (2,'GR-B','Green - Boys'),
    
    (2,'BL-G','Blue - Girls'),
    
    (2,'YW-B','Yellow - Boys'),
    
    (2,'YW-G','Yellow - Girls'),
    
    (3,'GR-B','Green - Boys'),
    
    (3,'BL-G','Blue - Girls'),
    
    (3,'YW-B','Yellow - Boys'),
    
    (3,'YW-G','Yellow - Girls'),
    
    (4,'GR-B','Green - Boys'),
    
    (4,'BL-G','Blue - Girls'),
    
    (4,'YW-B','Yellow - Boys'),
    
    (4,'YW-G','Yellow - Girls'),
    
    (5,'GR-B','Green - Boys'),
    
    (5,'BL-G','Blue - Girls'),
    
    (5,'YW-B','Yellow - Boys'),
    
    (5,'YW-G','Yellow - Girls'),
    
    (6,'GR-B','Green - Boys'),
    
    (6,'BL-G','Blue - Girls'),
    
    (6,'YW-B','Yellow - Boys'),
    
    (6,'YW-G','Yellow - Girls');
SELECT * FROM Sections;


CREATE TABLE Course_History(
    Course_ID VARCHAR(6),
    Start_Date DATE,
    Due_Date DATE,
    Total_Students INTEGER,
    Fee INTEGER,
    Duration INTEGER,
    CONSTRAINT pk_Course_History PRIMARY KEY(Course_ID, Start_Date),
    CONSTRAINT fk_Course_History FOREIGN KEY(Course_ID) REFERENCES Course(Course_ID)

    );
    
    INSERT INTO 
    Course_History(Course_ID, Start_Date, Due_Date, Total_Students, Fee, Duration ) VALUES
    ('ETH111','2018-01-01','2018-05-03', 45,100,2),
 
    ('GRM101','2018-03-03','2018-03-15', 40,100,3),
 
    ('ISL001','2018-06-15','2018-06-30',50,100,3),

    ('CLY101','2018-10-01','2018-10-15', 50,150,2),
 
    ('DPR006','2019-01-01','2019-01-15', 43,100,4),
 
    ('ITO101','2019-04-03','2019-06-12',53,100,3),
 
    ('HEC001','2019-07-05','2019-07-26',50,100,2),
 
    ('ETH111','2019-09-15','2019-09-30', 50,100,3),
 
    ('SEM001','2020-01-01','2020-01-15',47,100,2),
 
    ('ITO101','2020-03-02','2020-03-15',55,150,2),
 
    ('GRM101','2020-05-05','2020-05-15', 48,150,2),
 
    ('ENV101','2020-07-10','2020-07-20',53,100,3),
 
    ('GRM101','2020-10-15','2020-10-30',52,100,2);
Select * from Course_History;
    
  

/* Creating table for Assigning course*/ 
    CREATE TABLE ASSIGNED(
    Staff_ID VARCHAR(6),
    Section_ID VARCHAR(4),
    Class_ID INTEGER,
    Assignment_Date DATE,
    Location VARCHAR(10),
    CONSTRAINT pk_Assigned PRIMARY KEY(Staff_ID, Section_ID, Class_ID, Assignment_Date),
    CONSTRAINT fk_Assigned_1 FOREIGN KEY(Staff_ID) REFERENCES STAFF(Staff_ID),
    CONSTRAINT fk_Assigned_2 FOREIGN KEY(Class_ID,Section_ID) REFERENCES Sections(Class_ID,Section_ID)
    
    

   );

/******************** INSERTING DATA INTO ASSIGNED COURSE *************************/
INSERT INTO 
Assigned(Staff_ID, Section_ID, Class_ID, Assignment_Date, Location ) VALUES
    ('STF011','GR-B',1,'2019-07-09','Room 001'),

    ('STF001','BL-G',1,'2019-07-05','Room 101'),

    ('STF009','GR-B',2,'2019-07-05','Room 001'),

    ('STF007','BL-G',2,'2019-07-05','Room 102'),

    ('STF001','YW-B',2,'2019-07-05','Room 103'),

    ('STF003','YW-B',2,'2019-07-24','Room 003'),

    ('STF008','GR-B',3,'2019-07-05','Room 004'),

    ('STF012','BL-G',3,'2019-07-05','Room 101'),

    ('STF012','GR-B',4,'2019-07-05','Room 002'),

    ('STF002','BL-G',4,'2019-07-05','Room 004'),

    ('STF001','GR-B',5,'2019-07-05','Room 104'),
 
    ('STF015','BL-G',5,'2019-07-05','Room 002'),
 
    ('STF015','GR-B',6,'5/7/2019','Room 104'),
 
    ('STF015','BL-G',6,'5/7/2019','Room 104'),

    ('STF011','GR-B',1,'2019-09-15','Room 102'),

    ('STF002','BL-G',1,'2019-09-15','Room 003'),

    ('STF008','GR-B',2,'2019-09-15','Room 004'),

    ('STF012','BL-G',2,'2019-09-15','Room 104'),

    ('STF010','GR-B',3,'2019-09-15','Room 103'),

    ('STF001','BL-G',3,'2019-09-15','Room 101'),

    ('STF011','GR-B',4,'2019-09-15','Room 004'),

    ('STF002','BL-G',4,'2019-09-15','Room 101'),

    ('STF011','GR-B',5,'2019-09-15','Room 002'),

    ('STF002','BL-G',5,'2019-09-15','Room 001'),

    ('STF014','GR-B',5,'2019-10-10','Room 102'),

    ('STF007','GR-B',6,'2019-09-15','Room 003'),

    ('STF007','BL-G',6,'2019-09-15','Room 001'),

    ('STF005','GR-B',1,'2019-12-30','Room 002'),

    ('STF014','BL-G',1,'2019-12-30','Room 104'),

    ('STF010','GR-B',2,'2019-12-29','Room 101'),

    ('STF007','BL-G',2,'2019-12-29','Room 101'),

    ('STF015','GR-B',3,'2019-12-30','Room 003'),

    ('STF015','BL-G',3,'2019-12-30','Room 003'),

    ('STF001','GR-B',4,'2019-12-30','Room 001'),

    ('STF015','BL-G',4,'2019-12-29','Room 002'),

    ('STF002','GR-B',5,'2019-12-30','Room 101'),

    ('STF003','BL-G',5,'2019-152-30','Room 102'),

    ('STF005','GR-B',6,'2019-12-30','Room 103'),

    ('STF005','BL-G',6,'2019-12-30','Room 102'),

    ('STF005','GR-B',1,'2020-01-10','Room 003'),

    ('STF007','BL-G',1,'2020-01-31','Room 103'),

    ('STF007','GR-B',2,'2020-01-31','Room 003'),

    ('STF007','BL-G',2,'2020-01-31','Room 101'),

    ('STF010','GR-B',3,'2020-01-31','Room 002'),

    ('STF011','BL-G',3,'2020-01-31','Room 001'),

    ('STF001','GR-B',4,'2020-01-30','Room 102'),

    ('STF009','BL-G',4,'2020-01-30','Room 003'),

    ('STF006','YW-B',4,'2020-02-25','Room 001'),

    ('STF007','GR-B',5,'2020-01-31','Room 002'),

    ('STF008','BL-G',5,'2020-01-31','Room 001'),

    ('STF012','GR-B',6,'2020-01-31','Room 002'),

    ('STF012','BL-G',6,'2020-01-31','Room 101'),

    ('STF002','GR-B',1,'2020-04-30','Room 001'),

    ('STF001','BL-G',1,'2020-04-30','Room 001'),

    ('STF015','GR-B',2,'2020-04-30','Room 002'),

    ('STF015','BL-G',2,'2020-04-30','Room 101'),

    ('STF015','GR-B',3,'2020-04-30','Room 104'),

    ('STF015','BL-G',3,'2020-04-30','Room 004'),

    ('STF002','GR-B',4,'2020-04-30','Room 101'),

    ('STF008','BL-G',4,'2020-04-30','Room 002'),

    ('STF012','GR-B',5,'2020-04-30','Room 002'),

    ('STF010','BL-G',5,'2020-04-30','Room 103'),

    ('STF001','GR-B',6,'2020-04-30','Room 003'),

    ('STF011','BL-G',6,'2020-04-30','Room 104'),

    ('STF002','GR-B',1,'2020-07-10','Room 001'),

    ('STF011','BL-G',1,'2020-07-10' ,'Room 101'),

    ('STF002','GR-B',2,'2020-07-10' ,'Room 001'),

    ('STF007','BL-G',2,'2020-07-10' ,'Room 102'),

    ('STF007','GR-B',3,'2020-07-10' ,'Room 103'),

    ('STF005','BL-G',3,'2020-07-10' ,'Room 003'),

    ('STF014','GR-B',4,'2020-07-10' ,'Room 004'),

    ('STF010','BL-G',4,'2020-07-10','Room 101'),

    ('STF001','GR-B',5,'2020-07-10' ,'Room 002'),

    ('STF013','BL-G',5,'2020-07-10','Room 004'),

    ('STF001','GR-B',6,'2020-07-10','Room 104'),

    ('STF011','BL-G',6,'2020-07-10','Room 002'),

    ('STF001','GR-B',1,'2020-10-15','Room 104'),

    ('STF002','BL-G',1,'2020-10-15','Room 104'),

    ('STF015','GR-B',2,'2020-10-15','Room 102'),

    ('STF001','BL-G',2,'2020-10-15','Room 003'),

    ('STF008','GR-B',3,'2020-10-15','Room 004'),

    ('STF007','BL-G',3,'2020-10-15','Room 104'),

    ('STF013','GR-B',4,'2020-10-15','Room 103'),

    ('STF001','BL-G',4,'2020-10-15','Room 101'),

    ('STF001','GR-B',5,'2020-10-15','Room 004'),

    ('STF013','BL-G',5,'2020-10-15','Room 101'),

    ('STF001','GR-B',6,'2020-10-15','Room 002'),

    ('STF011','BL-G',6,'2020-10-15','Room 001');
SELECT * FROM Assigned;

CREATE TABLE Mother (
    MOTHER_ID VARCHAR(5),
    F_NAME VARCHAR(20),
    F_CNIC varchar(20) UNIQUE,
    CONSTRAINT Pk_mother PRIMARY KEY (MOTHER_ID)

);
/************************* Inserting data in Mother****************************/

INSERT INTO Mother(MOTHER_ID,F_NAME,F_CNIC) VALUES
    ('M001','MADIHA KOKAR','42401-3625198-7'),
    ('M002','NABEELA KHAN','42301-5492318-7'),
    ('M003','KOMAL AFTAB','42486-3100974-6'),
    ('M004','QIRAT AHMED','32401-3155871-9'),
    ('M005','SABA AAMIR','61101-3651549-8'),
    ('M006','TEHREEM RASHID','52139-6400575-1'),
    ('M007','MAIMOONA KHAN','32301-6431975-1'),
    ('M008','ZAINAB BATOOL','42301-6431975-6'),
    ('M009','HURRIYA NASIR','91101-3641223-6'),
    ('M010','GHALIYAH SIDDIQUI','31101-3641128-7');
    
    SELECT * FROM Mother;



CREATE TABLE MOTHER_HISTORY (
    MOTHER_ID VARCHAR(6),
    DATE_ date,
    F_CONTACT VARCHAR(20),
    F_EMAIL VARCHAR(30),
    F_ADDRESS VARCHAR(50) ,
    MONTHLY_INCOME INT,
    CONSTRAINT Pk_mother_history PRIMARY KEY( MOTHER_ID , DATE_ ),
    CONSTRAINT Fk_mother_history FOREIGN KEY(MOTHER_ID) REFERENCES MOTHER(MOTHER_ID)

);

/*************************** INSERTING DATA INTO MOTHER HISTORY**********************/
INSERT INTO MOTHER_HISTORY VALUES
    ('M001','2019-10-03','0300-2614564','batss@gmail.com','SECTOR # F11,STREET 10,HOUSE 40','55000'),

    ('M002','2019-10-05','0323-2615478','tLZZZ@gmail.com','SECTOR # I10,STREET 45,HOUSE 30','50000'),

    ('M003','2019-10-07','0312-2614564','MKrr@gmail.com','SECTOR # F9,STREET 879,HOUSE 95','35000'),

    ('M001','2020-11-12','0300-2614564','batss@gmail.com','SECTOR # I11,STREET 40,HOUSE 1','55000'),
    
    ('M004','2019-06-12','03212624813','R1r23@gmail.com','SECTOR # G11,STREET 8,HOUSE 403','45000'),

    ('M001','2020-01-01','0300-2614564','GHHrr@gmail.com','SECTOR # G8,STREET 101,HOUSE 97','55000'),

    ('M002','2020-02-04','0315-2957500','tLZZZ@gmail.com','SECTOR # I10,STREET 45,HOUSE 30','50000'),

    ('M004','2020-12-01','0321-2624813','R1r23@gmail.com','SECTOR # D3,STREET 989,HOUSE 1891','55000'),

    ('M010','2019-07-08','0321-6639077','samra@gmail.com','SECTOR # H13,STREET 98,HOUSE 789','60000'),

    ('M009','2019-04-03','0342-6375212','katess@yahoo.com','SECTOR # I8,STREET 31,HOUSE 987','44000'),

    ('M010','2019-12-12','0321-6639077','saralgg@gmail.com','SECTOR # G8,STREET 101,HOUSE 97','60000'),

    ('M007','2019-05-31','0391-2552478','maimaim@yahoo.com','SECTOR # B12,STREET 845,HOUSE 1100','35000'),

    ('M005','2020-01-10','0342-5711611','kanwalzz@yahoo.com','SECTOR # F10,STREET 980,HOUSE 181','48000'),

    ('M006','2020-01-01','0352-4594858','smzen@gmail.com','SECTOR # H11,STREET 98,HOUSE 74','30000'),

    ('M008','2019-03-09','0321-2624813','sadboi@gmail.com','SECTOR # I10,STREET 7,HOUSE 9','25000'),

    ('M005','2020-04-05','0342-5711611','kanwalzz@yahoo.com','SECTOR # G6,STREET 11,HOUSE 7','55000'),

    ('M006','2020-05-05','0321-2513527','smzen@gmail.com','SECTOR # B11,STREET 888,HOUSE 110','30000'),

    ('M008','2019-12-17','0343-2550426','sadboi@gmail.com','SECTOR # I10,STREET 7,HOUSE 9','25000'),

    ('M010','2020-04-03','0342-7656647','hasss@gmail.com','SECTOR # G8,STREET 101,HOUSE 97','60000'),

    ('M007','2020-04-17','0391-2552478','Kimy_t@gmail.com','SECTOR # B12,STREET 845,HOUSE 1100','40000');

SELECT * FROM MOTHER_HISTORY;


CREATE TABLE M_CHILD_OF (
    MOTHER_ID VARCHAR(6),
    STUDENT_ID VARCHAR(6),
    CURRENT_ INT,
    CONSTRAINT Pk_M_CHILD_OF PRIMARY KEY(MOTHER_ID,STUDENT_ID),
    CONSTRAINT Fk_M_CHILD_OF_1 FOREIGN KEY(STUDENT_ID) REFERENCES STUDENT(STUDENT_ID),
    CONSTRAINT Fk_M_CHILD_OF_2 FOREIGN KEY(MOTHER_ID) REFERENCES MOTHER(MOTHER_ID)
);

/******************* INSERTING DATA INTO MOTHER OF CHILD OF*****************************/


INSERT INTO 
M_CHILD_OF(MOTHER_ID, STUDENT_ID, CURRENT_ ) VALUES
    ('M001','ST0001',1),

    ('M002','ST0003',1),

    ('M003','ST0002',0),

    ('M001','ST0004',1),

    ('M004','ST0005',0),

    ('M010','ST0012',1),

    ('M009','ST0011',1),

    ('M007','ST0013',1),

    ('M005','ST0014',1),

    ('M006','ST0015',0),

    ('M008','ST0016',1),

    ('M005','ST0006',1),

    ('M006','ST0007',1),

    ('M008','ST0008',1),

    ('M010','ST0009',0),

    ('M007','ST0010',1);

SELECT * FROM M_CHILD_OF; 



CREATE TABLE F_STAFF_MEMBER (
    MOTHER_ID VARCHAR(4),
    STAFF_ID VARCHAR(6),
    CONSTRAINT Pk_F_STAFF_MEMBER PRIMARY KEY (MOTHER_ID,STAFF_ID),
    CONSTRAINT Fk_F_STAFF_MEMBER_1 FOREIGN KEY(MOTHER_ID) REFERENCES MOTHER(MOTHER_ID),
    CONSTRAINT Fk_F_STAFF_MEMBER_2 FOREIGN KEY(STAFF_ID) REFERENCES STAFF(STAFF_ID)

);
/****************** INSERTING DATA INTO FEMALE STAFF MEMBER************************/

INSERT INTO 
F_STAFF_MEMBER(MOTHER_ID, STAFF_ID) VALUES
    ('M001','STF004'),
    ('M002','STF005'),
    ('M003','STF007'),
    ('M004','STF011'),
    ('M005','STF014'),
    ('M006','STF015');
SELECT * FROM F_STAFF_MEMBER;

CREATE TABLE FATHER (
    Father_ID VARCHAR(6),
    Father_Name VARCHAR(12),
    CNIC VARCHAR(15),
    CONSTRAINT pk_Father PRIMARY KEY (Father_ID)

);

/***************** INSERTING DATA INTO FATHER ****************************/

INSERT INTO 
FATHER(Father_Id,Father_Name,CNIC) VALUES

    ('FT0001','Arshad Ahmed','61101-3894291-5'),
    ('FT0002','Travis Scott','61101-8730412-9'),
    ('FT0003','Ali Usman','42202-8730282-7'),
    ('FT0004','Danial Tahir','23321-2309382-8'),
    ('FT0005','Faiz Ahmed','23321-3839013-1'),
    ('FT0006','Tahir Shah','61101-9211737-4'),
    ('FT0007','Ali khan','61101-8112694-7'),
    ('FT0008','Ahmed Shah','42202-1723539-2'),
    ('FT0009','Usama Shah','11061-8762342-7'),
    ('FT0010','Taimour Khan','11061-2768231-1'),
    ('FT0011','Imran Khan','11061-2798322-3'),
    ('FT0012','Ahsan Ali','11061-8623424-6'),
    ('FT0013','Abdur Ali','42202-2386492-3'),
    ('FT0014','Hassan Dar','23321-7687211-6'),
    ('FT0015','Abdullah Ali','42202-7861233-4'),
    ('FT0016','Bilal Shahid','23321-2762132-1');
	
    select * from FATHER;

CREATE TABLE FATHER_HISTORY (
    Father_ID VARCHAR(6),
    Contact_No VARCHAR(12),
    Email VARCHAR(23),
    Address VARCHAR(19),
    Entry_Date DATE,
    Monthly_Income INTEGER,
    CONSTRAINT pk_Father_Hist PRIMARY KEY (Father_ID,Entry_Date),
    CONSTRAINT fk_FATHER_HISTORY_1 FOREIGN KEY (Father_ID) REFERENCES FATHER(Father_ID)
    

);


/************************** INSERTING DATA INTO FATHER HISTORY*******************************/
INSERT INTO 
FATHER_HISTORY (Father_ID, Contact_No, Email, Address, Entry_Date, Monthly_Income) VALUES
    
    ('FT0001','0321-2983751','ArshadAhmed@gmail.com','H#F-20,Street 5,RWP','2020-02-01', 10000),

    ('FT0002','0320-3990701','TravisScott@gmail.com','H#B-20,Street 1,RWP','2020-03-01', 15000),

    ('FT0003','0321-6283901','AliUsman@gmail.com','H#B-11,Street 2,RWP','2020-02-01', 9000),

    ('FT0004','0324-3673911','DanialTahir@gmail.com','H#C-5,Street 10,ISB','2020-01-01', 10000),

    ('FT0005','0323-2301832','FaizAhmed@gmail.com','H#D-4,Street 5,RWP','2020-03-01', 12000),

    ('FT0006','0321-3092813','TahirShah@gmail.com','H#E-8,Street 3,RWP','2020-01-01', 10000),

    ('FT0007','0330-9832842','Alikhan@gmail.com','H#A-2,Street 4,RWP','2019-12-01', 13000),

    ('FT0008','0331-3240982','AhmedShah@gmail.com','H#B-9,Street 11,RWP','2020-02-01', 15000),

    ('FT0009','0320-9080234','UsamaShah@gmail.com','H#Z-1,Street 10,ISB','2020-02-02', 10000),

    ('FT0010','0321-3240924','TaimourKhan@gmail.com','H#C-11,Street 6,RWP','2020-03-01', 10000),

    ('FT0010','0324-8794023','TaimourKhan11@gmail.com','H#C-20,Street 7,ISB','2020-04-20', 10000),

    ('FT0012','0324-3470084','AhsanAli@gmail.com','H#D-12,Street 7,ISB','2020-01-01', 9500),

    ('FT0013','0323-3498080','AbdulAli@gmail.com','H#A-6,Street 11,ISB','2020-03-01', 11500),

    ('FT0014','0320-4867004','HassanDar@gmail.com','H#X-30,Street 4,RWP','2020-01-01', 10000),

    ('FT0015','0323-9866493','AbdullahAli@gmail.com','H#G-9,Street 19,ISB','2019-12-01', 15000),

    ('FT0016','0323-0374987','BilalShahid@gmail.com','H#E-12,Street 9,RWP','2020-02-01', 16000),

    ('FT0011','0321-2399822','ImranKhan@gmail.com','H#H-8,Street 15,ISB','2020-11-03', 15000),

    ('FT0006','0321-3092813','TahirShah@gmail.com','H#E-8,Street 3,RWP','2020-03-01', 13000);
select * from FATHER_HISTORY;


CREATE TABLE F_CHILD_OF (
    FATHER_ID VARCHAR(6),
    STUDENT_ID VARCHAR(6),
    CURRENT_ INTEGER,
    CONSTRAINT pk_F_CHILD_OF PRIMARY KEY (FATHER_ID,STUDENT_ID),
    CONSTRAINT fk_F_CHILD_OF_1 FOREIGN KEY(Student_ID) REFERENCES Student(Student_ID),
    CONSTRAINT fk_F_CHILD_OF_2 FOREIGN KEY(Father_ID) REFERENCES Father(Father_ID)

);

/**************************** INSERTING DATA IN THE FATHER CHILD OF*************************/
INSERT INTO 
F_CHILD_OF(FATHER_ID, STUDENT_ID, CURRENT_) VALUES
    ('FT0001','ST0007',1),

    ('FT0002','ST0008',1),

    ('FT0003','ST0009',0),

    ('FT0004','ST0010',1),

    ('FT0005','ST0002',0),

    ('FT0006','ST0012',0),

    ('FT0007','ST0013',1),

    ('FT0008','ST0013',0),

    ('FT0009','ST0009',1),

    ('FT0010','ST0014',0),

    ('FT0011','ST0003',1),

    ('FT0012','ST0001',0),

    ('FT0013','ST0019',1),

    ('FT0014','ST0018',1),

    ('FT0014','ST0014',1),

    ('FT0014','ST0006',1),

    ('FT0015','ST0016',1),

    ('FT0016','ST0017',1),

    ('FT0006','ST0020',1),

    ('FT0015','ST0015',1),

    ('FT0015','ST0001',1),

    ('FT0015','ST0004',1);	
select * from F_CHILD_OF;

CREATE TABLE M_STAFF_MEMBER (
    FATHER_ID VARCHAR(6),
    STAFF_ID VARCHAR(6),
    CONSTRAINT Pk_M_STAFF_MEMBER PRIMARY KEY (FATHER_ID,STAFF_ID),
    CONSTRAINT Fk_M_STAFF_MEMBER_1 FOREIGN KEY(FATHER_ID) REFERENCES FATHER(FATHER_ID),
    CONSTRAINT Fk_M_STAFF_MEMBER_2 FOREIGN KEY(STAFF_ID) REFERENCES STAFF(STAFF_ID)

);

/************************** INSERTING DATA OF MALE STAFF MEMBER****************************/
INSERT INTO 
M_STAFF_MEMBER(FATHER_ID, STAFF_ID ) VALUES
    ('FT0002','STF001'),

    ('FT0011','STF002'),

    ('FT0002','STF003'),

    ('FT0016','STF004');
    SELECT * FROM M_STAFF_MEMBER;


CREATE TABLE FEE_DETAILS (
    Student_ID VARCHAR(6),
    Fee_challan VARCHAR(6),
    Amount INTEGER,
    Discount INTEGER,
    Due_Date DATE,
    Payment_Date DATE,
    Full_Paid INTEGER,
    CONSTRAINT pk_FEE_DETAILS PRIMARY KEY (Fee_Challan),
    CONSTRAINT fk_FEE_DETAILS_1 FOREIGN KEY(Student_ID) REFERENCES Student(Student_ID)


);

/*************************** INSERTING DATA INTO FEE DETAILS***********************************/
INSERT INTO 
FEE_DETAILS(Student_ID, Fee_challan, Amount, Discount, Due_Date, Payment_Date, Full_Paid) VALUES
    ('ST0001','FC0001',150,10,'2020-05-15','2020-05-03',1),

    ('ST0003','FC0002',150,0,'2020-05-15','2020-04-28',1),

    ('ST0011','FC0003',150,0,'2020-05-15','2020-02-01',1),

    ('ST0016','FC0004',100,0,'2020-03-02','2020-01-02',0),

    ('ST0020','FC0005',150,100,'2020-05-15','2020-05-25',1),

    ('ST0006','FC0006',150,13,'2020-05-15','2020-04-30',1),

    ('ST0009','FC0007',100,0,'2020-05-15','2020-03-01',0),

    ('ST0006','FC0008',150,0,'2020-05-15','2020-02-01',0),

    ('ST0014','FC0009',150,0,'2020-05-15','2020-06-05',1),

    ('ST0017','FC0010',150,100,'2020-03-02','2020-04-02',1),

    ('ST0012','FC0011',150,0,'2020-05-15','2020-08-27',1),

    ('ST0013','FC0012',150,5,'2020-03-15','2020-02-10',1),

    ('ST0015','FC0013',100,15,'2020-07-10','2020-03-01',1),
    
    ('ST0018','FC0014',100,0,'2019-01-15','2020-01-05',1),

    ('ST0019','FC0015',150,17,'2020-05-15','2020-05-02',1),

    ('ST0008','FC0016',150,100,'2020-12-10','2020-04-28',1),

    ('ST0002','FC0017',150,0,'2020-05-12','2020-04-01',1),

    ('ST0005','FC0018',150,0,'2020-05-15','2020-04-30',1),

    ('ST0007','FC0019',150,5,'2020-05-15','2020-04-30',1),

    ('ST0010','FC0020',150,0,'2020-05-15','2020-04-15',0),

    ('ST0004','FC0023',150,0,'2020-05-15','2020-04-28',1),

    ('ST0001','FC0021',150,10,'2020-03-15','2020-02-03',1),

    ('ST0013','FC0022',150,5,'2020-05-15','2020-04-10',1),

    ('ST0011','FC0024',100,0,'2020-03-15','2020-02-01',1),

    ('ST0009','FC0025',100,0,'2020-07-10','2020-05-01',1);
    
select * from FEE_DETAILS;




CREATE TABLE ENROLLMENT_HISTORY (
    Student_ID VARCHAR(6),
    Course_ID VARCHAR(6),
    Section_ID VARCHAR(4),
    Class_ID INTEGER,
    Fee_Challan VARCHAR(6),
    Enrolled INTEGER,
    Enrollment_Date DATE,
    CONSTRAINT pk_Enrollment_History PRIMARY KEY(Fee_Challan),
    CONSTRAINT fk_Enrollment_History_1 FOREIGN KEY(Student_ID) REFERENCES Student(Student_ID),
    CONSTRAINT fk_Enrollment_History_2 FOREIGN KEY(Course_ID) REFERENCES Course(Course_ID),
    CONSTRAINT fk_Enrollment_History_3 FOREIGN KEY(Class_ID, Section_ID) REFERENCES Sections(Class_ID, Section_ID),
    CONSTRAINT fk_Enrollment_History_5 FOREIGN KEY(Fee_Challan) REFERENCES Fee_Details(Fee_Challan)

);

/******************************** INSERTING DATA INTO ENROLLMENT HISTORY*********************************/
INSERT INTO 
ENROLLMENT_HISTORY(Student_ID, Course_ID, Section_ID, Class_ID, Fee_Challan, Enrolled, Enrollment_Date ) VALUES
    ('ST0001','GRM101','BL-G',1,'FC0001',1,'2020-05-03'),

    ('ST0001','ITO101','BL-G',1,'FC0021',0,'2020-02-03'),

    ('ST0003','GRM101','GR-B',4,'FC0002',1,'2020-04-23'),

    ('ST0004','GRM101','BL-G',4,'FC0023',1,'2020-04-18'),

    ('ST0005','GRM101','BL-G',6,'FC0018',1,'2020-03-05'),

    ('ST0006','GRM101','GR-B',3,'FC0006',1,'2020-04-30'),

    ('ST0007','GRM101','BL-G',1,'FC0019',1,'2020-04-29'),

    ('ST0008','GRM101','BL-G',2,'FC0016',1,'2020-04-28'),

    ('ST0009','FMG102','BL-G',3,'FC0007',0,'2020-03-01'),

    ('ST0010','GRM101','GR-B',3,'FC0020',1,'2020-04-15'),

    ('ST0011','GRM101','GR-B',3,'FC0003',1,'2020-02-01'),

    ('ST0012','GRM101','GR-B',5,'FC0011',1,'2020-04-27'),

    ('ST0013','ITO101','BL-G',6,'FC0012',0,'2020-03-01'),

    ('ST0013','GRM101','BL-G',6,'FC0022',1,'2020-04-10'),

    ('ST0009','ENV101','BL-G',5,'FC0025',0,'2020-05-08'),

    ('ST0014','GRM101','BL-G',2,'FC0009',1,'2020-04-01'),

    ('ST0020','GRM101','BL-G',3,'FC0005',1,'2020-05-01'),

    ('ST0015','ENV101','GR-B',4,'FC0013',0,'2020-05-02'),

    ('ST0019','GRM101','GR-B',6,'FC0015',1,'2020-05-02'),

    ('ST0018','DPR006','GR-B',4,'FC0014',0,'2020-01-05'),

    ('ST0016','SEM001','BL-G',4,'FC0004',0,'2020-01-01'),

    ('ST0017','GRM101','BL-G',6,'FC0010',1,'2020-04-02'),

    ('ST0011','ITO101','GR-B',1,'FC0024',0,'2020-02-01');
select * from ENROLLMENT_HISTORY ;

CREATE TABLE SECTION_CHANGE(
    Fee_Challan VARCHAR(6),
    Change_Date DATE,
    Old_Section VARCHAR(5),
    Reason_For_Change VARCHAR(24),
    Approved_By VARCHAR(12),
    CONSTRAINT pk_SECTION_CHANGE PRIMARY KEY (FEE_CHALLAN,CHANGE_DATE),
    CONSTRAINT fk_SECTION_CHANGE_2 FOREIGN KEY(FEE_CHALLAN) REFERENCES ENROLLMENT_HISTORY(FEE_CHALLAN)


);

/**************************** INSERTING DATA INTO SECTION CHANGE********************************/
INSERT INTO 
SECTION_CHANGE(Fee_Challan, Change_Date, Old_Section, Reason_For_Change, Approved_By ) VALUES
    ('FC0015','2020-05-14','GR-B','Friends in other section','Kashif Munir'),

    ('FC0023','2020-04-30','BL-G','Clashes','Kashif Munir');
select * from SECTION_CHANGE;


/*
/*Report No 11*/
/*Get list of students in a specific class e.g 3*/
select s.Student_ID, s.Name, s.Gender, round(months_between(sysdate, s.dob)/12,2), e.section_id, e.enrollment_date 
     from Student s, Enrollment_History e
       where e.Student_ID = s.Student_ID and e.enrolled = 1 and e.class_id= 3;

/*Report No 12*/
/*Get general statistics of a class i.e total students/boys/girls etc */
select count(case when UPPER(gender) = 'M' THEN 1 END) Male,
count(case when UPPER(gender) = 'F' THEN 1 END) Female,
count(s.student_id) as total from student s, enrollment_history h
where s.student_id = h.student_id and h.enrolled = 1 and h.class_id = 3;

/*Report No 13*/
/*Get list of dormant Students*/
Select * from Enrollment_History where round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,2);
/*For Years*/
Select * from Enrollment_History where round(TIMESTAMPDIFF(MONTH, curdate(), s.DOB)/12,2);

/*Report No. 14*/
/*Get Students Mother search on id*/
Select m.F_Name as Mother_Name,m.Mother_ID as Mother_ID from Mother m, M_CHILD_OF mc
where mc.STUDENT_ID = 'ST0003' and mc.MOTHER_ID=m.Mother_ID and mc.CURRENT_=1;

/*Get Students Mother search on name*/
Select m.F_Name as Mother_Name,m.Mother_ID as Mother_ID from Mother m, M_CHILD_OF mc
where mc.MOTHER_ID=m.Mother_ID and mc.CURRENT_=1 and mc.STUDENT_ID=(
	Select s.STUDENT_ID from Student s where 
	s.Name = 'Adil Fayyaz'
);
/*Get STudents father search on id*/
Select m.Father_Name as Father_Name,m.Father_ID as Father_ID  from Father m, F_CHILD_OF mc
where mc.STUDENT_ID = 'ST0003' and mc.Father_ID=m.Father_ID and mc.CURRENT_=1;

/*Get Student father search on name*/
Select m.Father_Name as Father_Name,m.Father_ID as Father_ID from Father m, F_CHILD_OF mc
where mc.Father_ID=m.Father_ID and mc.CURRENT_=1 and mc.STUDENT_ID=(
	Select s.STUDENT_ID from Student s where 
	s.Name = 'Adil Fayyaz'
);

/*Get Guardian search by id*/
Select G.Name as Guardian_Name, G.Guardian_ID as Guardian_ID from Guardian G, Responsible_For R, Student S
where S.Student_ID='ST0003' and S.STUDENT_ID=R.Student_ID and R.Guardian_ID=G.Guardian_ID and R.CURRENT_=1;

/*Get Guardian search by name*/
Select G.Name as Guardian_Name, G.Guardian_ID as Guardian_ID from Guardian G, Responsible_For R, Student S
where S.name='Adil Fayyaz' and S.STUDENT_ID=R.Student_ID and R.Guardian_ID=G.Guardian_ID and R.CURRENT_=1;

/*Get siblings Mother*/
select Student.Name ,Student.Student_ID from M_CHILD_OF
left outer join Student
on Student.STUDENT_ID = M_CHILD_OF.STUDENT_ID
where M_CHILD_OF.Mother_ID = (
	select M_CHILD_OF.Mother_ID from M_CHILD_OF,Student
	where Student.Student_ID='ST0001' and
	 M_CHILD_OF.STUDENT_ID=Student.STUDENT_ID and
	 M_CHILD_OF.CURRENT_=1
)and M_CHILD_OF.CURRENT_=1;
/*Get siblings father*/
select Student.Name ,Student.Student_ID from F_CHILD_OF
left outer join Student
on Student.STUDENT_ID = F_CHILD_OF.STUDENT_ID
where F_CHILD_OF.Father_ID = (
	select F_CHILD_OF.Father_ID from F_CHILD_OF,Student
	where Student.Student_ID='ST0001' and
	 F_CHILD_OF.STUDENT_ID=Student.STUDENT_ID and
	 F_CHILD_OF.CURRENT_=1
) and F_CHILD_OF.CURRENT_=1;

/*Get siblings mother and father via ID*/
select S1.Name ,S1.Student_ID from M_CHILD_OF
	left outer join Student S1
	on S1.STUDENT_ID = M_CHILD_OF.STUDENT_ID
	where M_CHILD_OF.Mother_ID = (
		select M_CHILD_OF.Mother_ID from M_CHILD_OF,Student S2
		where S2.Student_ID='ST0001' and
		 M_CHILD_OF.STUDENT_ID=S2.STUDENT_ID and
		 M_CHILD_OF.CURRENT_=1
	) and M_CHILD_OF.CURRENT_=1 and  S1.STUDENT_ID <> 'ST0001'

AND EXISTS
(select S3.Name, S3.STUDENT_ID from F_CHILD_OF
	left outer join Student S3
	on S3.STUDENT_ID=F_CHILD_OF.STUDENT_ID
	where F_CHILD_OF.FATHER_ID= (
		select F_CHILD_OF.Father_ID from F_CHILD_OF,Student S4
		where S4.Student_ID='ST0001' and
		 F_CHILD_OF.STUDENT_ID=S4.STUDENT_ID and
		 F_CHILD_OF.CURRENT_=1
	)and F_CHILD_OF.CURRENT_=1 and S3.STUDENT_ID <> 'ST0001'
);

/*Get siblings mother and father via Name*/
select S1.Name ,S1.Student_ID from M_CHILD_OF
	left outer join Student S1
	on S1.STUDENT_ID = M_CHILD_OF.STUDENT_ID
	where M_CHILD_OF.Mother_ID = (
		select M_CHILD_OF.Mother_ID from M_CHILD_OF,Student S2
		where S2.Name='Aleezeh Usman' and
		 M_CHILD_OF.STUDENT_ID=S2.STUDENT_ID and
		 M_CHILD_OF.CURRENT_=1
	) and M_CHILD_OF.CURRENT_=1

AND EXISTS
(select S3.Name, S3.STUDENT_ID from F_CHILD_OF
	left outer join Student S3
	on S3.STUDENT_ID=F_CHILD_OF.STUDENT_ID
	where F_CHILD_OF.FATHER_ID= (
		select F_CHILD_OF.Father_ID from F_CHILD_OF,Student S4
		where S4.name='Aleezeh Usman' and
		 F_CHILD_OF.STUDENT_ID=S4.STUDENT_ID and
		 F_CHILD_OF.CURRENT_=1
	)and F_CHILD_OF.CURRENT_=1 
);

/*Get class History on ID*/

select s.name ,e.course_id, c.course_title, e.enrollment_date from
Student s, Enrollment_History e, Course c 
where s.student_Id='ST0001' and s.STUDENT_ID=e.Student_ID
 and e.course_id=c.course_id;

/*Get class History on name*/
select s.name ,e.course_id,e.class_id,e.section_id, c.course_title, e.enrollment_date from
Student s, Enrollment_History e, Course c 
where s.name='Lydia Martin' and s.STUDENT_ID=e.Student_ID
 and e.course_id=c.course_id;


/*Report no. 15*/
/*Find all children of Mother using ID*/
	select M_CHILD_OF.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from M_CHILD_OF,
	Student S2, Mother M,ENROLLMENT_HISTORY E, Responsible_For R, Guardian G
	where M.mother_id='M001' and
	 M_CHILD_OF.STUDENT_ID=S2.STUDENT_ID and
	 M_CHILD_OF.CURRENT_=1 and M.Mother_Id= M_CHILD_OF.Mother_Id
	 and E.Student_ID=S2.STUDENT_ID and E.enrolled=1 and 
	 R.STUDENT_ID=S2.STUDENT_ID and G.Guardian_ID=R.Guardian_ID
	 and R.Current_=1;
	 
/*Find all children of Mother using name*/	
	select M_CHILD_OF.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from M_CHILD_OF,
	Student S2, Mother M,ENROLLMENT_HISTORY E, Responsible_For R, Guardian G
	where M.F_name='MADIHA KOKAR' and
	 M_CHILD_OF.STUDENT_ID=S2.STUDENT_ID and
	 M_CHILD_OF.CURRENT_=1 and M.Mother_Id= M_CHILD_OF.Mother_Id
	 and E.Student_ID=S2.STUDENT_ID and E.enrolled=1 and 
	 R.STUDENT_ID=S2.STUDENT_ID and G.Guardian_ID=R.Guardian_ID
	 and R.Current_=1;
	 
/*Find all children of Father using ID*/
	select F_CHILD_OF.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from F_CHILD_OF,
	Student S2, Father F,ENROLLMENT_HISTORY E, Responsible_For R, Guardian G
	where F.FATHER_ID='FT0011' and
	 F_CHILD_OF.STUDENT_ID=S2.STUDENT_ID and
	 F_CHILD_OF.CURRENT_=1 and F.Father_Id= F_CHILD_OF.Father_Id
	 and E.Student_ID=S2.STUDENT_ID and E.enrolled=1 and 
	 R.STUDENT_ID=S2.STUDENT_ID and G.Guardian_ID=R.Guardian_ID
	 and R.Current_=1;
	 
/*Find all children of Father using name*/
	select F_CHILD_OF.Student_ID, S2.name, E.Class_ID, G.Name as Guardian_Name,G.Guardian_ID  from F_CHILD_OF,
	Student S2, Father F,ENROLLMENT_HISTORY E, Responsible_For R, Guardian G
	where F.Father_Name='Tahir Shah' and
	 F_CHILD_OF.STUDENT_ID=S2.STUDENT_ID and
	 F_CHILD_OF.CURRENT_=1 and F.Father_Id= F_CHILD_OF.Father_Id
	 and E.Student_ID=S2.STUDENT_ID and E.enrolled=1 and 
	 R.STUDENT_ID=S2.STUDENT_ID and G.Guardian_ID=R.Guardian_ID
	 and R.Current_=1;

