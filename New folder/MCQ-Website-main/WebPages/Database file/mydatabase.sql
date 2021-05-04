-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyDatabase`
--
CREATE DATABASE IF NOT EXISTS `MyDatabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `MyDatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `cacpa1`
--

CREATE TABLE `cacpa1` (
  `sl` longtext DEFAULT NULL COMMENT 'TRIAL',
  `qs` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op1` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op2` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op3` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op4` longtext DEFAULT NULL COMMENT 'TRIAL',
  `ans` longtext DEFAULT NULL COMMENT 'TRIAL',
  `trial288` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- Dumping data for table `cacpa1`
--

INSERT INTO `cacpa1` (`sl`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `trial288`) VALUES
('1', 'HTML stands for:', 'Huge Makeup Language', 'Huge Text Makeup Language', 'Hypertext Makeup Language', 'Hypertext Markup Language', 'Hypertext Markup Language', 'T'),
('2', 'Which symbol is used to enclose HTML tags?', '()', '<>', '[]', '{}', '<>', 'T'),
('3', 'Which symbol identifies an HTML end tag?', '!', '|', '/', '\\', '/', 'T'),
('4', 'Which HTML tag does not use an end tag?', 'B', 'center', 'HR', 'U', 'HR', 'T'),
('5', 'Where does a web application reside?', 'Web client', 'Web server', 'Both a and b', 'All of the above', 'Web server', 'T'),
('6', 'Which is an example of a web document?', 'Server script', 'Web page', 'Client browser', 'Both a and b', 'Both a and b', 'T'),
('7', 'A postback occurs when:', 'a browser posts a form to the server', 'a user’s action activates the handing of a server event', 'a server posts a form to the client', 'Both a and b', 'Both a and b', 'T'),
('8', 'Which set of symbols are used to signify the presence of ASP.NET code?', '<@', '<#', '<$', '<%', '<%', 'T'),
('9', 'Which is the file extension used for an ASP.NET file?', 'asn', 'asp', 'aspx', 'aspn', 'aspx', 'T'),
('10', 'What is the extension for a Visual Basic web form interface file', 'asp', 'aspx', 'asp.vb', 'aspx.vb', 'aspx', 'T'),
('11', 'Which user action will not generate a server-side event?', 'Mouse Move', 'Text Change', 'Button Click', 'Both a and b', 'Mouse Move', 'T'),
('12', 'Which property is used to name a web control', 'ControlName', 'Designation', 'ID', 'Name', 'ID', 'T'),
('13', 'Which language is used to create an ASP.NET code file', 'Visual Basic', 'C#', 'C++', 'All of the above', 'All of the above', 'T'),
('14', 'A method in a class is', 'a sub procedure', 'a function', 'an event', 'Both a and b', 'Both a and b', 'T'),
('15', 'Methods are used to represent', 'actions', 'classes', 'data', 'events', 'actions', 'T'),
('16', 'Anything in VB.NET that has a property or method is', 'a class', 'a control', 'an object', 'All of the above', 'an object', 'T'),
('17', 'A constructor is a special type of', 'class', 'field', 'method', 'property', 'method', 'T'),
('18', 'Properties are used to represent', 'actions', 'classes', 'data', 'events', 'data', 'T'),
('19', 'Which of the following is part of an object', 'Methods', 'Properties', 'Instances', 'Both a and b', 'Both a and b', 'T'),
('20', 'Where does the query string store information', 'HTML source', 'Text file', 'URL', 'Both a and b', 'URL', 'T'),
('21', 'Where do cookies store information', 'HTML source', 'Text file', 'URL', 'Both a and b', 'Text file', 'T'),
('22', 'What symbol specifies the beginning of a query string', '@', '#', '$', '?', '?', 'T'),
('23', 'Which control is an example of an object in VB.NET', 'Button', 'Label', 'Textbox', 'All of these', 'All of these', 'T'),
('24', 'Polymorphism can apply to', 'math operators', 'method names', 'object names', 'Both a and b', 'Both a and b', 'T'),
('25', 'Which client-side technique can be disabled by the end-user', 'Cookies', 'Query string', 'View state', 'All of the above', 'Cookies', 'T'),
('26', 'What is the syntax for creating and using an application variable?', 'Application.VariableName = Value', 'Application.VariableName = (Value)', 'Application(VariableName) = Value', 'Application(“VariableName”) = Value', 'Application(“VariableName”) = Value', 'T'),
('27', 'Which server-side technique is available in ASP.NET?', 'Application states', 'Session states', 'Database support', 'Both a and b.', 'Both a and b.', 'T'),
('28', 'An Application variable is created', 'The application is first placed on a web server', 'The web server is first started.', 'The first client requests a URL resource', 'every time a client requests a URL resource', 'The first client requests a URL resource', 'T'),
('29', 'A Session variable is created', 'The application is first placed on a web server', 'The web server is first started', 'The first client requests a URL resource.', 'every time a new client interacts with the web application', 'every time a new client interacts with the web application', 'T'),
('30', 'If there is no activity from a browser, how long will a session variable last?', '10 minutes', '20 minutes', '60 minutes', '100 minutes', '20 minutes', 'T'),
('31', 'Which is not a reason for using a database to store state information?', 'The capacity to store high volumes of information', 'The ability to use data mining techniques on the stored information', 'The ability to use application and session variables', 'Security from unauthorized use', 'The ability to use application and session variables', 'T'),
('32', 'Which control is an example of an object in VB.NET?', 'Button', 'Label', 'TextBox', 'All of the above.', 'All of the above.', 'T'),
('33', 'Which of the following is part of an object?', 'Methods', 'Properties', 'Instances', 'Both a and b', 'Both a and b', 'T'),
('34', 'Which is true about objects?', 'Objects are used to create classes', 'Objects are analogous to blueprints', 'Objects combine actions and data.', 'Both a and b.', 'Objects combine actions and data.', 'T'),
('35', 'Properties are used to represent', 'actions.', 'classes.', 'data.', 'events.', 'data', 'T'),
('36', 'Methods are used to represent:', 'actions.', 'classes.', 'data.', 'events.', 'actions.', 'T'),
('37', 'The term instantiation refers to the creation of:', 'a class from a blueprint.', 'an object from a class', 'a method from an object.', 'a property from a method.', 'an object from a class.', 'T'),
('38', 'Anything in VB.NET that has a property or method is:', 'a class', 'a control', 'an object', 'Both a and b.', 'an object', 'T'),
('39', 'Which feature is needed to make a programming language object oriented?', 'Encapsulation', ' Inheritance', 'Polymorphism', 'All of the above.', 'All of the above.', 'T'),
('40', 'Encapsulation makes it easier to:', 'reuse and modify existing modules of code', 'write and read code by sharing method names.', 'hide and protect data from external code.', 'Both a and b.', 'hide and protect data from external code', 'T'),
('41', 'Inheritance makes it easier to:', 'reuse and modify existing modules of code.', 'write and read code by sharing method names', 'hide and protect data from external code.', 'Both a and b.', 'reuse and modify existing modules of code.', 'T'),
('42', 'Polymorphism makes it easier to:', 'reuse and modify existing modules of code.', 'write and read code by sharing method names.', 'hide and protect data from external code.', 'Both a and b', 'write and read code by sharing method names.', 'T'),
('43', 'The standard prefix to signify a class is:', 'B', 'C', 'L', 'T', 'T', 'T'),
('44', 'When using encapsulation how should data be shared with external code?', 'Events', 'Methods', 'Properties', 'Private variables', 'Properties', 'T'),
('45', 'When a base class is changed:', 'there is no effect on the derived class', 'only the methods of the derived class change.', 'only the properties of the derived class change.', 'the derived class automatically changes.', 'the derived class automatically changes.', 'T'),
('46', 'Polymorphism can apply to', 'math operators.', 'method names.', 'object names.', 'Both a and b.', 'Both a and b.', 'T'),
('47', 'With polymorphism:', 'one method can have multiple names.', 'one object can have multiple names', 'many methods can share the same name.', 'many objects can share the same name.', 'many methods can share the same name.', 'T'),
('48', 'Which element of a class is optional?', 'Constructs', 'Fields', 'Methods', 'All of the above', 'All of the above', 'T'),
('49', 'What is the suggested order for the definition of class elements from first to last?', 'Constructs, fields, methods, properties', 'Properties, constructs, fields, methods', 'Fields, properties, constructs, methods', 'Constructs, properties, fields, methods', 'Fields, properties, constructs, methods', 'T'),
('50', 'The standard for designing a field is that it be defined as a', 'private method', 'public method', 'private variable', 'public variable.', 'private variable', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cacpa2`
--

CREATE TABLE `cacpa2` (
  `sl` longtext DEFAULT NULL COMMENT 'TRIAL',
  `qs` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op1` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op2` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op3` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op4` longtext DEFAULT NULL COMMENT 'TRIAL',
  `ans` longtext DEFAULT NULL COMMENT 'TRIAL',
  `trial960` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- Dumping data for table `cacpa2`
--

INSERT INTO `cacpa2` (`sl`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `trial960`) VALUES
('1', 'The address of a variable temp of type float is', '*temp', '&temp', 'float& temp', 'float temp&', '&temp', 'T'),
('2', 'The process of building new classes from existing one is called ______.', 'Polymorphism', 'Structure', 'Inheritance', 'None', 'Inheritance', 'T'),
('3', 'If the variable count exceeds 100, a single statement that prints \"Too many\" is', 'if (count<100) cout << \"Too many\";', 'if (count>100) cout >> \"Too many\";', 'if (count>100) cout << \"Too many\";', 'None of these.', 'if (count>100) cout << \"Too many\";', 'T'),
('4', 'Usually a pure virtual function', 'has complete function body.', 'will never be called.', 'will be called only to delete an object.', 'is defined only in derived class.', 'is defined only in derived class.', 'T'),
('5', 'To perform stream I/O with disk files in C++, you should', 'open and close files as in procedural languages.', 'use classes derived from ios.', 'use C language library functions to read and write data.', 'include the IOSTREAM.H header file.', 'use classes derived from ios.', 'T'),
('6', 'Overloading the function operator', 'requires a class with an overloaded operator.', 'requires a class with an overloaded [ ] operator.', 'allows to create objs,act syntactically like funcs', 'usually make use of a constructor that takes arguments.', 'requires a class with an overloaded operator.', 'T'),
('7', 'Array declare as int a[4]={3,0,1,2},then values assign to a[0] & a[4] will be ____', '3, 2', '0, 2', '3, 0', '0, 4', '3, 0', 'T'),
('8', 'Mechanism of deriving a class from another derived class is known as____', 'Polymorphism', 'Single Inheritance', 'Multilevel Inheritance', 'Message Passing', 'Multilevel Inheritance', 'T'),
('9', 'RunTime Polymorphism is achieved by ______', 'friend function', 'virtual function', 'operator overloading', 'function overloading', 'virtual function', 'T'),
('10', 'Fn call method,pass args to fn by pass a copy of args\'s values is_______', 'call by name', 'call by value', 'call by reference', 'call by value result', 'call by value', 'T'),
('11', 'In C++, dynamic memory allocation is accomplished with the operator ____', 'new', 'this', 'malloc()', 'delete', 'new', 'T'),
('12', 'If we create a file by ‘ifstream’, then the default mode of the file is _________', 'ios :: out', 'ios :: in', 'ios :: app', 'ios :: binary', 'ios :: in', 'T'),
('13', 'A variable defined within a block is visible', 'from the point of definition onward in the program.', 'from the point of definition onward in the function.', 'from the point of definition onward in the block.', 'throughout the function.', 'from the point of definition onward in the block.', 'T'),
('14', 'The break statement causes an exit', 'The break statement causes an exit', 'only from the innermost switch.', 'from all loops & switches.', 'from the innermost loop or switch.', 'from the innermost loop or switch.', 'T'),
('15', 'Which of the following cannot be legitimately passed to a function', 'A constant.', 'A variable.', 'A structure.', 'A header file.', 'A header file.', 'T'),
('16', 'A property which is not true for classes is that they', 'are removed from memory when not in use.', 'permit data to be hidden from same classes.', 'permit data to be hidden from other classes.', 'Can closely model objects in the real world.', 'permit data to be hidden from other classes.', 'T'),
('17', 'You can read input that consists of multiple lines of text using', 'the normal cout << combination.', 'the cin.get( ) function with one argument.', 'the cin.get( ) function with two arguments.', 'the cin.get( ) function with three arguments.', 'the cin.get( ) function with two arguments.', 'T'),
('18', 'The keyword friend does not appear in', 'the class allowing access to another class.', 'the class desiring access to another class.', 'the private section of a class.', 'the public section of a class.', 'the private section of a class.', 'T'),
('19', 'The process of building new classes from existing one is called', 'Structure.', 'Inheritance.', 'Polymorphism.', 'Template.', 'Inheritance.', 'T'),
('20', 'If you wanted to sort many large objects or structures, it would be most efficient to', 'place them in an array & sort the array.', 'place pointers to them in an array & sort the array.', 'place them in a linked list and sort the linked list.', 'place references to them in an array and sort the array.', 'place them in a linked list and sort the linked list.', 'T'),
('21', 'Which statement gets affected when i++ is changed to ++i?', 'i = 20; i++;', 'for (i = 0; i<20; i++) { }', 'a = i++;', 'while (i++ = 20) cout <<i;', 'i = 20; i++;', 'T'),
('22', 'A friend function to a class, C cannot access', 'private data members and member functions.', 'public data members and member functions.', 'protected data members and member functions.', 'the data members of the derived class of C.', 'the data members of the derived class of C.', 'T'),
('23', 'The operator that cannot be overloaded is', '++', '::', '( )', '~', '::', 'T'),
('24', 'A struct is the same as a class except that', 'there are no member functions.', 'all members are public.', 'cannot be used in inheritance hierarchy.', 'it does have a this pointer.', 'cannot be used in inheritance hierarchy.', 'T'),
('25', 'Pure virtual functions', 'have to be redefined in the inherited class.', 'cannot have public access specification.', 'are mandatory for a virtual class.', 'None of the above.', 'have to be redefined in the inherited class.', 'T'),
('26', 'Additional information sent when an exception is thrown may be placed in', 'the throw keyword.', 'the throws keyword.', 'the catch block.', 'an object of the exception class.', 'the catch block.', 'T'),
('27', 'Use of virtual functions implies', 'overloading.', 'overriding.', 'static binding.', 'dynamic binding.', 'dynamic binding.', 'T'),
('28', 'this pointer', 'implicitly points to an object.', 'can be explicitly used in a class.', 'can be used to return an object.', 'All of the above.', 'All of the above.', 'T'),
('29', 'Within a switch statement', 'Continue can be used but Break cannot be used', 'Continue cannot be used but Break can be used', 'Both Continue and Break can be used', 'Neither Continue nor Break can be used', 'Continue cannot be used but Break can be used', 'T'),
('30', 'Data members which are static', 'cannot be assigned a value', 'can only be used in static functions', 'cannot be defined in a Union', 'can be accessed outside the class', 'can only be used in static functions', 'T'),
('31', 'Which of the following is false for cin?', 'It represents standard input.', 'It is an object of istream class.', 'It is a class of which stream is an object.', 'Using cin the data can be read from user’s terminal.', 'It is a class of which stream is an object.', 'T'),
('32', 'It is possible to declare as a friend', 'a member function', 'a global function', 'a class', 'all of the above', 'all of the above', 'T'),
('33', 'In multiple inheritance', 'the base classes must have only default constructors', 'cannot have virtual functions', 'can include virtual classes', 'None of the above.', 'can include virtual classes', 'T'),
('34', 'Declaration of a pointer reserves memory space', 'for the object.', 'for the pointer.', 'both for the object and the pointer.', 'none of these.', 'for the pointer.', 'T'),
('35', 'for (; ;)', 'means the test is done by some expression is always true', 'is not valid', 'will loop forever', 'should be written as for( )', 'will loop forever', 'T'),
('36', 'The operator << when overloaded in a class', 'must be a member function', 'must be a non member function', 'can be both (a) & (b) above', 'cannot be overloaded', 'can be both (a) & (b) above', 'T'),
('37', 'A virtual class is the same as', 'an abstract class', 'a class with a virtual function', 'a base class', 'none of the above.', 'none of the above.', 'T'),
('38', 'Identify the operator that is NOT used with pointers', '->', '&', '*', '>>', '>>', 'T'),
('39', 'In which case is it mandatory to provide a destructor in a class?', 'Almost in every class', 'Class for which two or more than two objects will be created', 'Class for which copy constructor is defined', 'Class whose objects will be created dynamically', 'Class whose objects will be created dynamically', 'T'),
('40', 'The members of a class, by default, are', 'public', 'protected', 'private', 'mandatory to specify', 'private', 'T'),
('41', 'Exception handling is targeted at', 'Run-time error', 'Compile time error', 'Logical error', 'All of the above.', 'Run-time error', 'T'),
('42', 'A pointer to the base class can hold address of', 'only base class object', 'only derived class object', 'base class object as well as derived class object', 'None of the above', 'base class object as well as derived class object', 'T'),
('43', 'Function templates can accept', 'any type of parameters', 'only one parameter', 'only parameters of the basic type', 'only parameters of the derived type', 'only parameters of the basic type', 'T'),
('44', 'How many constructors can a class have?', '0', '1', '2', 'any number', 'any number', 'T'),
('45', 'The new operator', 'returns a pointer to the variable', 'creates a variable called new', 'obtains memory for a new variable', 'tells how much memory is available', 'obtains memory for a new variable', 'T'),
('46', 'An exception is caused by', 'a hardware problem', 'a problem in the operating system', 'a syntax error', 'a run-time error', 'a run-time error', 'T'),
('47', 'A template class', 'is designed to be stored in different containers', 'works with different data types', 'generates objects which must be identical', 'generates classes with different numbers of member functions.', 'works with different data types', 'T'),
('48', 'A library function exit() causes an exit from', 'the loop in which it occurs', 'the block in which it occurs', 'the function in which it occurs', 'the program in which it occurs', 'the program in which it occurs', 'T'),
('49', 'RunTime polymorphism is achieved by ________', 'friend function', 'virtual function', 'operator overloading', 'function overloading', 'virtual function', 'T'),
('50', 'Declaration of a pointer reserves memory space', 'for the object.', 'for the pointer.', 'both for the object and the pointer.\r\nboth for the object and the pointer.', 'none of these.', 'for the pointer.', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cacpa3`
--

CREATE TABLE `cacpa3` (
  `sl` longtext DEFAULT NULL COMMENT 'TRIAL',
  `qs` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op1` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op2` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op3` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op4` longtext DEFAULT NULL COMMENT 'TRIAL',
  `ans` longtext DEFAULT NULL COMMENT 'TRIAL',
  `trial372` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- Dumping data for table `cacpa3`
--

INSERT INTO `cacpa3` (`sl`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `trial372`) VALUES
('1', 'Select all correct declarations, or declaration and initializations of an array?', ' String str[];', ' String str[]=new String [] {\"string1\", \"string 2\", \"string3\", \"string4\",\"string5\"};', 'String str[]= {\"string1\",\"string2\", \"string3\", \"string4\", \"string5\"};', 'All of the above', 'All of the above', 'T'),
('2', 'What is a String?', 'A combination of characters', 'A combination of characters is called as string', 'both', 'None of these', 'A combination of characters is called as string', 'T'),
('3', 'The synchronized is used in which of the following?', 'Class declarations.', ' Method declarations', 'Block of code declarations', 'Variable declarations.', ' Method declarations', 'T'),
('4', 'Which of the statements are true?', 'Overridden methods have the same method name and signature', 'Overloaded methods have the same method name and signature', 'Overridden methods have the same method name and different signature', 'Overloaded methods have the same method name and different signature', 'Overridden methods have the same method name and signature', 'T'),
('5', 'Which statements about garbage collection are true?', 'The garbage collector runs in low memory situations', 'You can run the garbage collector when ever you want.', 'When it runs, it releases the memory allocated by an object.', 'Garbage collector immediately runs when you set the references to null.', 'The garbage collector runs in low memory situations', 'T'),
('6', 'String are instances of the class String', 'True', 'False', 'none', 'none of these', 'True', 'T'),
('7', 'Select all correct list of keywords?', 'superclass', 'goto', 'open', 'import, package', 'goto', 'T'),
('8', 'Select the correct form for anonymous inner class declaration ?', 'new Outer.new Inner', 'new Inner() {', 'new Inner()', 'Outer.new Inner()', 'new Inner() {', 'T'),
('9', 'Which of the following statements are true?', 'An anonymous class cannot have any constructors', 'An anonymous class can only be created within the body of a method', 'An anonymous class can only access static fields of the enclosing class', 'An anonymous class instantiated and declared in the same place.', 'An anonymous class cannot have any constructors', 'T'),
('10', 'Which of the following class definitions are legal declaration of an abstract class?', 'class A { abstract void Method() {} }', 'abstract class A { abstract void Method() ; }', 'class A { abstract void Method() {System.out.println(\"Test\");} }', 'class abstract A { abstract void Method() {} }', 'abstract class A { abstract void Method() ; }', 'T'),
('11', 'Which of the following declare an array of string object?', 'String[] s;', 'String []s;', 'String s[];', 'all of these', 'all of these', 'T'),
('12', 'Which of the following assignment statements is invalid?', 'long l = 698.65;', 'float f = 55.8;', 'double d = 0x45876;', 'All of the above', 'long l = 698.65;', 'T'),
('13', 'What is the numeric range for a Java int data type?', ' 0 to (2^32)', '-(2^31) to (2^31)', '-(2^31) to (2^31 - 1)', '-(2^15) to (2^15 - 1)', '-(2^31) to (2^31 - 1)', 'T'),
('14', 'Which of the following method returns the ID of an event?', 'int getID()', 'String getSource()', 'int returnID()', ' int eventID()', 'int getID()', 'T'),
('15', 'What is correct about event handling in Java?', 'Java1.0 event handl. compatible with event delegation model', 'Java 1.0 and Java 1.1 event handling models are not compatible', 'Event listeners are the objects that implements listener interfaces', 'You can add multiple listeners to any event source', 'You can add multiple listeners to any event source', 'T'),
('16', 'The byte with a value of 01110111,which following produce 00111011?', '0x77 << 1;', '0x77 >>> 1;', '0x77 >> 1;', 'None of the above', '0x77 >>> 1;', 'T'),
('17', 'Which of the following are primitive types?', 'byte', 'String', 'integer', 'Float', 'byte', 'T'),
('18', 'Java support multidimentional arrays.', 'True', 'False', 'none', 'none of these', 'True', 'T'),
('19', 'How can you implement encapsulation.', 'By making methods private and variable private', 'By making methods are public and variables as private', 'Make all variable are public and access them using methods', 'Making all methods and variables as protected.', 'By making methods are public and variables as private', 'T'),
('20', 'public void amethod(int i, String s){}', 'public void amethod(String s, int i){}', 'public int amethod(int i, String s){}', 'public void amethod(int i, String mystring){}', 'public void Amethod(int i, String s) {}', 'public void amethod(String s, int i){}', 'T'),
('21', 'Which of the following statements are true?', 'An anonymous inner class cannot have any constructors', 'An anonymous inner class can created only inside a method.', 'An anonymous inner class can only access static fields of the enclosing', 'An anonymous inner class can implement an interface', 'An anonymous inner class cannot have any constructors', 'T'),
('22', 'Which statements are true?', 'Threads start() method automatically calls run()', 'Thread dies after the run() returns', 'A dead Thread can be started again.', 'A stop() method kills the currently running Thread', 'A stop() method kills the currently running Thread', 'T'),
('23', 'The ThreadGroup class instance?', 'Allow threads to be manipulated as group', 'Provide support for ThreadDeath listeners', 'May contain other ThreadGroups', 'Must contain threads of the same type', 'Allow threads to be manipulated as group', 'T'),
('24', 'Default Layout Managers are concerned ?', 'Frame\'s default Layout Manager is Border', 'Applet\'s is FlowLayout', 'Panel\'s is FlowLayout', 'All of the above', 'All of the above', 'T'),
('25', 'Which statements are true about GridBagLayout ?', 'Weight x and weight y should be 0.0 and 1.0', 'If fill is both, anchor does not make sense.', 'It divides its territory in to an array of cells.', 'All of the above', 'All of the above', 'T'),
('26', 'Which of the following are true?', 'gridwidth, gridheight, specifies how many columns and rows to span.', 'gridx, gridy has GridBagConstraints.', 'both', 'none of these', 'gridwidth, gridheight, specifies how many columns and rows to span.', 'T'),
('27', 'public static void main(String args[]) { Math m = new Math(); System.out.println(m.abs(2.6);', 'Compiler fails at line 1', 'Compiler fails at line 2', 'Compiler fails at the time of Math class instantiation', 'Compiler succeeds.', 'Compiler fails at the time of Math class instantiation', 'T'),
('28', 'Which of the following implement clear notion of one item follows another', 'List', 'Set', 'Map', 'Iterator', 'List', 'T'),
('29', 'Collection interface iterator method returns Iterator', 'true', 'false', 'yes', 'none of the above', 'true', 'T'),
('30', 'Which of the following places no constraints on the type of elements', 'Collection', 'collection', 'Map', 'Set', 'Map', 'T'),
('31', 'Which of the following gives Stack and Queue functionality.?', 'Map', 'Collection', 'List', ' Set', 'List', 'T'),
('32', 'Which of the following will compile without error?', ') File f = new File(\"/\",\"autoexec.bat\");', 'DataInputStream d = new DataInputStream(System.in);', 'OutputStreamWriter o = new OutputStreamWriter(System.out);', 'All Of The Above', 'All Of The Above', 'T'),
('33', 'Which of the following used to read and write to network sockets', 'InputStream', 'StreamReaders', 'OutputStream', 'Writers', 'InputStream', 'T'),
('34', 'Low Level Streams read input as bytes and writes as bytes', ' FileInputStream FIS = new FileInputStream(\"test.txt\")', 'File file = new File(\"test.txt\"); FileInputStream FIS = newFileInputStream(file)', ') File file = new File(\"c:\\\\\"); File file1 = new File(file,\"test.txt\");', 'All Of the above', 'All Of the above', 'T'),
('35', 'Choose all valid forms of the argument list for the FileOutputStream', 'FileOutputStream( FileDescriptor fd )', 'FileOutputStream( String n, boolean a )', 'FileOutputStream( boolean a )', 'FileOutputStream()', 'FileOutputStream( String n, boolean a )', 'T'),
('36', 'What is the class that has \"mode\" argument such as \"r\" or \"rw\" is required', ' DataInputStream', 'InputStream', 'RandomAccessFile', 'File', 'RandomAccessFile', 'T'),
('37', 'A header in CGI script can specify', 'format of the document', 'new location of the document', '(A) & (B) both', 'start of the document', 'format of the document', 'T'),
('38', 'All exceptions in Java are subclasses of built in class called', ' Exception', 'Error', 'Throwable.', 'Raise', 'Throwable.', 'T'),
('39', 'In 32 bit IP Addressing scheme all 1\'s represent', 'this computer', 'di rected broadcast', 'l imi ted broadcast', 'loop back', 'l imi ted broadcast', 'T'),
('40', 'DMSP stands for', 'Distributed Mail System Protocol', 'Distributed Message System Protocol', 'Distributed Message System Pool', 'Distributed Mail System Pool', 'Distributed Mail System Protocol', 'T'),
('41', 'Which Layer is not present in TCP/ IP model?', 'Appl icat ion Layer', 'Internet Layer', 'Transport Layer', 'Presentat ion Layer', 'Presentat ion Layer', 'T'),
('42', 'The Java interpreter is used for the execution of the source code.', 'True', 'False', 'none', 'none of these', 'True', 'T'),
('43', 'On successful compilation a file with the class extension is created.', 'True', 'False', 'none', 'none of these', 'True', 'T'),
('44', 'The Java source code can be created in a Notepad editor.', 'True', 'False', 'none', 'none of these', 'True', 'T'),
('45', 'The Java Program is enclosed in a class definition', 'True', 'False', 'none', 'none of these', 'True', 'T'),
('46', 'What declarations are required for every Java application?', 'main()', 'void', 'int', 'string', 'main()', 'T'),
('47', 'What are the two parts in executing a Java program and their purposes?', 'Java Compiler', 'Java Interpreter', 'both', 'none of these', 'both', 'T'),
('48', 'What are the three OOPs principles and define them?', 'Encapsulation', 'Inheritance', 'Polymorphism', 'All of the above', 'All of the above', 'T'),
('49', 'What is a compilation unit?', 'Java source code file.', 'byte code', 'both', 'none of these', 'Java source code file.', 'T'),
('50', 'What is the return type of program\'s main() function', 'void', 'void()', 'both', 'none of these', 'void', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cacpa4`
--

CREATE TABLE `cacpa4` (
  `sl` longtext DEFAULT NULL COMMENT 'TRIAL',
  `qs` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op1` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op2` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op3` longtext DEFAULT NULL COMMENT 'TRIAL',
  `op4` longtext DEFAULT NULL COMMENT 'TRIAL',
  `ans` longtext DEFAULT NULL COMMENT 'TRIAL',
  `trial113` char(1) DEFAULT NULL COMMENT 'TRIAL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TRIAL';

--
-- Dumping data for table `cacpa4`
--

INSERT INTO `cacpa4` (`sl`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `trial113`) VALUES
('1', 'Which command is used to sort the lines of data in a file in reverse order?', 'sort', 'sh', 'st', 'sort -r', 'sort -r', 'T'),
('2', 'Which command is used to display the top of the file?', 'cat', 'head', 'more', 'grep', 'head', 'T'),
('3', 'Which command is used to remove a directory?', 'rd', 'rmdir', 'dldir', 'rdiir', 'rmdir', 'T'),
('4', 'Which of the following keys is used to replace a single character with new text?', 'S', 's', 'r', 'C', 's', 'T'),
('5', 'Which command is used to extract specific columns from the file?', 'cat', 'cut', 'grep', 'paste', 'cut', 'T'),
('6', 'Which command sends the word count of the file infile to the newfile?', 'wc infile >newfile', 'wc <infile >newfile', 'wc infile - newfile', 'wc infile | newfile', 'wc infile >newfile', 'T'),
('7', 'Which of the following files will displayed by this command cat *ch*', 'patch', 'catch', '.ch', 'All of the above', 'All of the above', 'T'),
('8', 'Which of the following is not a communication command.', 'write', 'mesg', 'mail', 'grep', 'grep', 'T'),
('9', 'Which of the following keys is used to move the cursor to the end of the paragraph.', '}', '{', '|', '$', '}', 'T'),
('10', 'How to get a response from an activity in Android?', 'startActivityToResult()', 'startActiivtyForResult()', 'Bundle()', 'None of the above', 'startActiivtyForResult()', 'T'),
('11', 'How many applications are there in a given task in android?', 'Two', 'One', 'Many', 'Zero', 'Many', 'T'),
('12', 'What are the indirect Direct subclasses of Activity?', 'launcherActivity', 'preferenceActivity', 'tabActivity', 'all the above', 'all the above', 'T'),
('13', 'Layouts in android?', 'Frame Layout', 'Linear Layout', ' Relative Layout', ' All of the above', ' All of the above', 'T'),
('14', 'What method you should override to use Android menu system?', 'onCreateOptionsMenu()', 'onCreateMenu()', ' onMenuCreated()', 'onCreateContextMenu()', 'onCreateOptionsMenu', 'T'),
('15', 'Once installed on a device, each Android application lives in_______?', 'device memory', 'external memory', 'security sandbox', 'none of the above', 'security sandbox', 'T'),
('16', 'You can shut down an activity by calling its _______ method', 'onDestory()', 'finishActivity()', 'finish()', 'none of the above', 'finish()', 'T'),
('17', 'Creating a UI (User Interface) in Android requires careful use of…', 'Java and SQL', 'XML and C++', 'XML and Java', 'Dream weaver', 'XML and C++', 'T'),
('18', 'Dialog classes in android?', ' AlertDialog', 'ProgressDialog', ' DatePickerDialog', ' All of the above', 'All of the above', 'T'),
('19', 'Which of the following is not an Android component ?', 'Service', 'Activity', 'Layout', 'Content Provider', 'Layout', 'T'),
('20', 'Which command is used to remove a file?', 'remove', 'rm', 'mv', 'del', 'rm', 'T'),
('21', 'Which symbol is used to separate more than one command in the same command line?', '$', '#', ':', ';', ';', 'T'),
('22', 'The agency that sits between the user and the UNIX system is called the', 'logic', 'profile', 'shell', 'erxc', 'shell', 'T'),
('23', 'Which of the following commands is used to update access and modification times of a file?', 'grep', 'wc', 'touch', 'cat', 'touch', 'T'),
('24', 'Which command is used to count just the number of characters in a file?', 'wc - 1', 'wc -c', 'wc -w', 'wc -r', 'wc -c', 'T'),
('25', 'Which of the following commands is used to list contents of directories?', 'ls', 'lp', 'dir', 'tar', 'ls', 'T'),
('26', 'Which command is used to display a file contents in octal form?', 'cd', 'od', 'of', 'oct', 'od', 'T'),
('27', 'Which command will be used with vi editor to insert text to left of cursor?', 's', 'S', 'a', 'i', 'i', 'T'),
('28', 'In vi editor, forward search is performed using the command.', ':pat', ':pat', '/pat', 'All of the above', 'All of the above', 'T'),
('29', 'Which of the following command addresses all users who are currently hooked on?', 'write', 'mail', 'wall', 'mesg', 'wall', 'T'),
('30', 'What built-in database is Android shipped with?', 'MySQL', '  SQLite', '  Apache', 'Oracle', 'SQLite', 'T'),
('31', 'What is contained within the manifest xml file?', 'The permissions the app requires', ' The list of strings used in the app', 'The source code', 'All other choices', 'The permissions the app requires', 'T'),
('32', 'What does the .apk extension stand for?', 'Application Package', 'Application Program Kit', 'Android Proprietary Kit', 'Android Package', 'Application Package', 'T'),
('33', 'The ___________ file specifies the layout of your screen?', 'Manifest file', 'Layout file', ' Strings XML', 'R file', 'Layout file', 'T'),
('34', 'Android is based on Linux for the following reason', '   Security', 'Portability', 'Networking', '  All of these', ' All of these', 'T'),
('35', 'To create an emulator, you need an AVD. What does it stand for?', ' Android Virtual Display', 'Android Virtual Device', ' Active Virtual Device', 'Application Virtual Display', 'Android Virtual Device', 'T'),
('36', 'What operating system is used as the base of the Android stack?', '  Linux', 'Windows', 'Java', 'XML', 'Linux', 'T'),
('37', 'What is an Activity?', 'A message sent among the major building blocks', 'A component that runs in the background without any interface', '  Context referring to the application environment', '  A single screen the user sees on the device at one time', 'A single screen the user sees on the device at one time', 'T'),
('38', 'During an Activity life-cycle, what is the first callback method invoked by the system?', 'onStop()', 'onStart()', ' onCreate()', 'onRestore()', 'onCreate()', 'T'),
('39', 'Which configuration file holds the permission to use the internet?', 'Layout file', 'Property file', 'Java source file', 'Manifest file', 'Manifest file', 'T'),
('40', 'What is the name of the folder that contains the R.java file?', 'src', 'res', 'bin', 'gen', 'gen', 'T'),
('41', 'What does the Android project folder “res/” contain?', 'Java Activity classes', 'Resource files', 'Java source code', 'Libraries', 'Resource files', 'T'),
('42', 'Which of the following commands is used to obtain a list of all files by modification time?', 'ls -1', 'ls -t', 'ls -i', 'ls -R', 'ls -t', 'T'),
('43', 'Which command is used to display the characteristics of a process?', 'pid', 'du', 'ps', 'au', 'ps', 'T'),
('44', 'Which of the following commands is used to identify the type of file by context?', 'ls', 'cat', 'file', 'more', 'file', 'T'),
('45', 'The filed separator in cut command is specified with', '-a option', '-d option', '-r option', '-x option', '-d option', 'T'),
('46', 'Which of the following options will be used to display number of blocks used by a file?', '-c', '-i', '-d', '-s', '-s', 'T'),
('47', 'Which option will be used with touch command to change the access time?', '-a', '-b', '-t', '-h', '-a', 'T'),
('48', 'Which command is used to display and create files?', 'cat', 'vi', 'ed', 'lyrix', 'cat', 'T'),
('49', 'The second set of the three permissions (r-) indicates that', 'group has read permission only', 'other has read permission only', 'owner has read permission only', 'group has write permission only', 'group has read permission only', 'T'),
('50', 'Which column contains all details of the permissions of a file when you issue the ls -l command?', 'second', 'fourth', 'third', 'first', 'first', 'T'),
('51', 'Which of the following commands is used to display your working directory?', 'dir', 'prompt $p$g', 'pwd', 'path', 'pwd', 'T'),
('52', 'While working with mail command, which command is used to save mail in a separate file?', 's', 'r', 'w', 'd', 's', 'T'),
('53', 'The command used to compare the files is known as', 'comp', 'cmp', 'do', 'ccp', 'cmp', 'T'),
('54', 'Which command is used to terminate a process?', 'shutdown', 'haltsys', 'cancel', 'kill', 'kill', 'T'),
('55', 'The cp command uses:', 'standard input file', 'standard output file', 'both input and output file', 'neither standard input nor standard output file', 'neither standard input nor standard output file', 'T'),
('56', 'How to display the 10th line of a file?', 'head -10 filename | tail -0', 'head -10 filename | tail -1', 'head -9 filename | tail -1', 'head filename | tail -1', 'head -10 filename | tail -1', 'T'),
('57', 'How to remove the header from a file?', 'sed -i \'1 d\' filename', 'sed -i  d\' filename', 'sed -i \'2 d\' filename', 'sed -i \'3 d\' filename', 'sed -i \'1 d\' filename', 'T'),
('58', 'How to remove the footer from a file?', 'head -10 filename | tail -1', 'sed -i \'1 d\' filename', 'sed -i \'$ d\' filename', 'All of the above', 'sed -i \'$ d\' filename', 'T'),
('59', 'How to get the nth word of a line in Unix?', 'cut -f<n> -d\' \'', 'sed -n \'10 p\' filename|wc -c', 'echo \"java\" | rev', 'sed -n \'<n> p\' filename', 'cut -f<n> -d\' \'', 'T'),
('60', 'Which symbol will be used with grep command to match the pattern pat at the beginning of a line?', '^pat', '$pat', 'pat$', 'pat^', '^pat', 'T');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
