# System for Gym Management
# Introduction
The Gym Management System is a comprehensive software application designed to streamline the management and administration of a gym or fitness center. The system is specifically tailored to cater to the needs of gym administrators, providing them with powerful tools and functionalities to efficiently manage various aspects of the gym operations.

With a web-based architecture and a three-tier design, the Gym Management System offers a user-friendly interface accessible through web browsers. It is important to note that the system is restricted to only authorized administrators and is not accessible to clients. This restriction ensures that the sensitive information and administrative functionalities of the gym remain secure and limited to designated personnel.

The Gym Management System empowers administrators with a range of features to effectively manage clients, trainers, packages and billing.It provides a centralized platform for administrators to handle critical tasks such as client enrollment, trainer assignments, package creation and management, appointment scheduling, and financial transactions.

By utilizing the three-tier architecture, the system achieves a clear separation of concerns. The presentation layer delivers a seamless and intuitive user interface, while the business logic layer handles the processing of client requests, enforces business rules, and facilitates secure access to the system. The data access layer ensures efficient interaction with the underlying database, storing and retrieving essential information related to clients, trainers, packages, and other relevant entities.

The Gym Management System prioritizes scalability, allowing administrators to handle varying levels of gym activity without compromising system performance. It is designed to adapt to peak hours or increased workload by independently scaling each layer of the architecture as needed.

In conclusion, the Gym Management System offers a powerful and secure solution for gym administrators to effectively manage and administer all aspects of their operations. By leveraging a web-based architecture and a three-tier design, the system provides a user-friendly interface, scalability, and robust security measures. Through the integration of comprehensive features and functionalities, the Gym Management System aims to optimize the efficiency and productivity of gym management while ensuring the confidentiality and integrity of the gym's data.

# Glossary of Terms
-	System for Gym Management: A software system designed to handle the management and administration of a gym or fitness center, including tasks such as client management, trainer management, package management and offers of payments .
-	 Member: A person who has registered or enrolled in the gym or fitness center to avail its services. The client may have various attributes such as name(first name-last name), email, membership ID, and Trainer.
-	Trainer: A fitness professional who provides training and guidance to clients. Trainers may have attributes such as name, Trainer ID, Phone Number.
-	Package: A pre-defined set of services or facilities offered by the gym, typically categorized into different tiers or levels. Packages may include details such as Package ID, Package Name and Amount.
-	User Interface: The visual and interactive components of the system that allow Admin to interact with the Gym Management System. This can include web pages, forms, menus, and other graphical elements.
-	Business Logic: The layer of the system that handles the processing and manipulation of data, as well as the implementation of business rules and logic. This layer performs tasks such as calculating Payments ,Displaying Package Details, Member Details and Trainer Details.
-	Data Access Layer: The layer of the system responsible for interacting with the underlying database or data storage system. It handles tasks such as retrieving and storing client and trainer information, managing packages, and maintaining data integrity.
-	Database: A structured collection of data that stores information related to clients, trainers, packages, appointments, and other relevant entities. The database is accessed and manipulated through queries and operations performed by the system.
-	Authentication: The process of verifying the identity of a user or entity accessing the Gym Management System. This ensures that only authorized individuals can access and perform actions within the system.
-	Authorization: The process of granting or denying access to specific features or data within the Gym Management System based on the roles and permissions assigned to individual users. It ensures that users can only access the functionalities they are allowed to use.
-	Payment Processing: The functionality within the system that handles financial transactions related to client payments, such as membership fees, package purchases, or additional services. It may involve integration with payment gateways or third-party payment processors.
# Requirements
# User requirements
the process of identifying and documenting the needs and expectations of users for a particular software system or product. This process involves understanding the perspective of the users, their goals, tasks, and preferences.
It is divided into two categories functional requirements and non functional requirements.
# Functional requirements
-	User shall login into the system as an admin and confirm his identity before accessing any features or functionalities. 
-	User shall be able to add new trainers.
-	User shall be able to add new members.
-	User shall be able to check trainer details.
-	User shall be able to check member details.
-	User shall be able to search for a specific member.
-	User shall be able to choose a specific trainer for each member.
-	User shall be able to add each new payment to the system with a specific id.
-	User shall be able to moniter the member membership status.
# Non functional requirements
-	Security
- High efficiency
-	Easy to use
-	Reliability
-	Usability
-	Dependability
# System requirements
System requirements are important to consider during the design and development phase of a system, as they define the boundaries and limitations of what the system can and cannot do.
System requirements are often documented in a requirements specification or similar document, which outlines the functional and non-functional requirements of the system.
# Functional requirements
-	The system should have a login feature that verifies the manager's identity by requesting data from the database.
-	Users can add new members by filling out a form includes member’s name ,member’s email and member’s phone number and the system will add this information as a tuple to the database.
-	Users can add new trainers by filling out a form includes trainer’s name ,trainer’s ID and trainer’s phone number, and the system will add this information as a tuple to the database.
-	Users can search for members by member ID or name and select the piece of information they want.
-	Users can create a new membership by filling out a form with information specified in the database schema.
-	Users can view packages corresponding to the duration of each membership.
-	User should be able to logout from the system.

# Non-functional requirements:
-	The system should be user-friendly, and it should take little time for the user to learn the system and all its features.
-	The system must have a fast and efficient restart time in the event of a failure.
-	The system must be reliable and stable.
-	The system must have a fast response time, with minimal lag or delays, to ensure that users can access and update data quickly and efficiently.
-	 The system must be available to users at all times, with minimal downtime or maintenance windows, to ensure uninterrupted access to gym services and data.
-	The system must comply with relevant laws and regulations governing data privacy, financial reporting, and other aspects of gym management.
# Software Processes
The recommended software development process was an incremental-agile approach, wherein the specification, development, and validation processes are interlaced. This approach was selected for several reasons. Firstly, time was a critical factor, and the team aimed to release a functional version of the product as quickly as possible. Secondly, the team consisted of only three members, making an agile methodology the most practical choice.

The chosen approach ensures that each successive version of the product is usable and adds more functionality to the system. The development process involved four primary phases: requirements, design, implementation, and testing.

Due to the lack of a real customer and the project's simulated nature, the requirements document underwent minimal modifications during the development process. As a result, the team created the requirements document at the project's onset, and it remained relatively unchanged thereafter.

Additionally, testing was conducted on a subset of features rather than the entire system. This approach allowed the team to focus on the critical functionalities while minimizing the time and effort required for testing.

The team faced several assumptions and constraints throughout the project's lifecycle. Due to the simulated nature of the project, they made some assumptions that guided their implementation. Additionally, they considered several constraints, including budget, time, and team size, to ensure that the project adhered to the available resources.

Overall, the incremental-agile approach allowed the team to develop a working version of the GYM management system that met the project's requirements while working within the available resources. The approach's flexibility enabled the team to adjust to changes and modifications as required while ensuring the project's timely completion.
# Architecture Design
One suggested system architecture for a Gym Management System would be a three-tier architecture, consisting of a presentation layer, a business logic layer, and a data access layer.
### The presentation layer
would provide the interface for the clients to interact with the system, such as a web or mobile application. This layer would handle the user input and display output to the user.
### The business logic layer
would handle the processing of the client requests and responses. It would handle the authentication and authorization of users, as well as perform any necessary business rules, such as calculating pricing based on packages or scheduling appointments with trainers.
### The data access layer
would be responsible for interacting with the database of trainers and client packages. It would handle the retrieval and storage of data in the database and ensure data integrity.

# Reasons of Using This Architecture
### Separation of concerns:
-A Gym Management System typically involves a user interface for clients to interact with, business logic for handling client requests and responses, and data storage for managing clients, trainers, and packages. A three-tier architecture can provide a clear separation of concerns between these different layers, making the system easier to maintain and modify in the future.
### Scalability:
-A Gym Management System may experience spikes in usage during certain times of the day or year. With a three-tier architecture, each layer can be scaled independently, allowing the system to handle increased traffic or load by scaling up or down each layer as needed, making it easier to maintain and modify in the future. It also allows  for scalability, as each layer can be scaled independently
### Maintainability:
-With a clear separation of concerns, each tier can be modified or updated without affecting the other tiers, making it easier to maintain and improve the system over time.
### Security:
-Separating the data storage tier from the user interface and application logic tiers can provide additional security by limiting direct access to the data and controlling access through the application logic layer.
### Flexibility: 
-A three-tier architecture allows for flexibility in choosing the technologies and tools used for each tier, making it easier to adapt to changes in requirements or technology.
### Modularity:
-By breaking down the system into smaller, more manageable components, a three-tier architecture allows for greater modularity and code reusability.
-the three-tier architecture is widely used and has proven to be reliable and efficient for web applications. So it Would be our Suggested Application Architecture.
Overall, a three-tier architecture can provide several benefits for a Gym Management System, including scalability, maintainability, security, flexibility, and modularity.

# Suggested Application Architecture
the suggested application architecture for the Gym Management System would be a web-based architecture.

The presentation layer would consist of a web application that would be accessible to the clients through a web browser or a mobile device (on our case would be WEB BROWSER). The web application would be responsible for displaying the user interface and handling user input and provide the required service to give the efficient output.

The business logic layer would be implemented using a web server, that would handle the processing of client requests and responses. The web server would interact with the data access layer to retrieve and store data in the database.

The data access layer would be implemented using a database management system, such as MySQL on out Project, that would handle the storage and retrieval of data.

The data access layer would be responsible for ensuring data integrity and providing a secure and efficient interface to the web server.

Overall, this web-based application architecture would provide a scalable, reliable, and efficient solution for the Gym Management System, enabling clients to interact with the system from anywhere and at any time, while providing a secure and reliable platform for the business logic and data storage.

# Reasons of using Web based – Application on our project
-	Accessibility: A web-based system ( our Gym Management System Website )  can be accessed from anywhere with an internet connection, allowing clients and trainers to easily access the system from their computers or mobile devices.
-	User interface: A web-based system allows for the development of a user-friendly and responsive user interface that can be easily accessed and used by clients and trainers
-	Platform independence: A web-based system can be accessed from any platform or operating system, allowing for greater flexibility and accessibility.
-	Scalability: A web-based system can be easily scaled up or down to handle changes in traffic or usage, allowing for greater scalability and performance
-	Easy maintenance: A web-based system can be easily maintained and updated from a central location, reducing the need for manual updates on individual client or trainer devices.
-	Security: A web-based system can be secured through the use of secure connections (such as HTTPS) and other security measures to protect sensitive data and prevent unauthorized access.
# Diagrams
## Entity Diagram
The entity diagram represents the various entities or objects within the Gym Management System, such as clients, trainers, packages, and appointments.
It illustrates the relationships and attributes of these entities, helping to define the structure and organization of the system's data.
The entity diagram is essential for database design and ensures efficient storage and retrieval of information.(For better resolution check the attached pdf)

![ER](https://github.com/SWE-SP23/term-project-g16/assets/17290409/9f42c5d0-4f3f-49ea-924a-ea52ed31c301)

## Use Case Diagram
The use case diagram depicts the different actions or functionalities that users can perform within the Gym Management System
It identifies the actors (such as administrators, trainers, and clients) and their interactions with the system.
The use case diagram helps to capture the system's requirements, identify user roles and responsibilities, and provide a high-level view of system functionality.(For better resolution check the attached pdf)
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/5b97321e-edc7-401d-a214-4c3199a7a5f6)

## Class Diagram
The class diagram represents the various classes, their attributes, and their relationships within the Gym Management System.
It illustrates the structure of the system's objects, their properties, and the methods they can perform.
The class diagram serves as a blueprint for implementing the system's business logic and aids in understanding the system's architecture and design.(For better resolution check the attached pdf)
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/199c9d53-c714-4e6b-a237-e17fb9062e06)

## State Machine Diagram
The state machine diagram models the different states and transitions of a particular entity or object within the Gym Management System
It shows how an object's behavior changes in response to events and conditions
The state machine diagram is particularly useful for modeling complex workflows, such as the lifecycle of a client membership or the progress of a trainer certification process.(For better resolution check the attached pdf)
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/4cc18901-083b-48ac-97b0-3626c7522bbe)

## Activity Diagram
The activity diagram represents the flow of activities or steps involved in a particular process or scenario within the Gym Management System.
It shows the sequential and parallel activities, decision points, and the order in which actions occur.
The activity diagram helps to visualize and understand the logic and control flow of processes, such as client registration or appointment scheduling.(For better resolution check the attached pdf)
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/a42a229b-4437-4ec4-b27c-26de0696dca8)

## Sequence Diagram
The sequence diagram represents the interactions and messages exchanged between objects or components in a specific scenario or use case within the Gym Management System.
It illustrates the chronological order of method calls, along with the objects involved and the flow of control between them.
The sequence diagram helps to visualize the dynamic behavior of the system, showing how objects collaborate to accomplish a particular task or achieve a specific outcome.(For better resolution check the attached pdf)
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/b63e9a20-adf7-4350-9527-6a43a7e54daf)

# System Evolution
# Introduction
The Gym Management System is a web-based application designed to streamline the management and administration of a gym or fitness center. This document outlines the system's evolution, taking into consideration the suggested system application as a web-based architecture and the chosen architecture design as a three-tier architecture.
## Initial Development
The initial development phase of the Gym Management System focused on establishing the foundation for the system's functionality and structure. The web-based application architecture was chosen to provide accessibility by the admin from admin login webpage and platform independence for clients and trainers.

The three-tier architecture was implemented, consisting of the presentation layer, business logic layer, and data access layer. The presentation layer included a user-friendly web interface accessible through browsers or mobile devices as we provided on our website is a web based application. The business logic layer handled client requests, authentication, business rules with all services provided, package calculations, and registering new trainers and members. The data access layer interacted with the database, managing client information, trainer details, and package data and available packages .

# Enhancements and Iterations
Following the initial development, the Gym Management System underwent several enhancements and iterations to improve its capabilities and address specific requirements. Some notable enhancements include:

### User Interface Refinement:
The user interface was refined based on feedback of team members and usability, ensuring an intuitive and visually appealing design. Changes were made to optimize navigation, provide informative dashboards, and streamline common tasks.
### Additional Functionality:
New features were introduced to expand the system's capabilities. This included the addition of add an new members and trainers, searching on members by their contact, providing payment details and surely add new payments.
### Scalability Improvements:
The system's scalability was improved by implementing load balancing techniques and optimizing database queries to handle increased traffic during peak gym hours or busy periods this case happens when more than allowed admin are trying a new members or trainers or add payments or try to add a new packages.
### Security Enhancements:
To ensure the security of client data and system access, various security measures were implemented. ( only limited access are allowed to access the website) 
## Future Development Opportunities(Optional Added as Future Development)
Looking ahead, several potential areas for future development and expansion of the Gym Management System could be explored:
### Mobile Applications:
Developing dedicated mobile applications for both clients and trainers can enhance accessibility and provide additional convenience features such as workout tracking or class bookings.
### Integration with Wearable Devices:
Integration with wearable fitness devices can allow for real-time monitoring of client activities, providing personalized recommendations and performance tracking.
### Advanced Analytics:
Implementing advanced analytics and machine learning techniques can offer deeper insights into client behavior, allowing for targeted marketing campaigns, personalized recommendations, and performance optimization.
### Social Engagement:
Integrating social media platforms or creating a community within the system can encourage client engagement, fostering a sense of belonging and promoting a healthy lifestyle.
## Conclusion
The Gym Management System, built on a web-based architecture using a three-tier design, has evolved to become a comprehensive and efficient solution for gym management. Through iterative enhancements, scalability improvements, security enhancements, and ongoing maintenance, the system has adapted to meet the evolving needs of the gym and its users.
The system's architecture and application design choices have proven to be effective in providing accessibility, scalability, maintainability, and security. With a strong foundation and potential for future development, the Gym Management System is well-equipped to support the gym's operations and contribute to its success in
# Design Description ( How To Use our Web-based-Application)
The design of the Gym Management System revolves around a web-based application, ensuring ease of use and accessibility for users. The system follows a seamless workflow with the following steps:
## Login Process:
Users access the system through a secure web-based login screen.
They enter their credentials, such as username and password, to authenticate their identity.
Upon successful authentication, the system transfers the user to the main menu screen.
## Main Menu Screen:
The main menu screen serves as the central navigation hub within the web-based application.
Users are presented with several buttons, each accompanied by a clear description of its functionality.
By selecting the appropriate button, users can easily navigate to different sections or perform specific actions within the Gym Management System.
Through the web-based application design, the Gym Management System ensures that users can access the system conveniently from various devices with internet connectivity. The login process verifies user credentials, granting secure access to authorized personnel. The main menu screen provides an intuitive interface, offering clear descriptions of the available functions, enabling users to efficiently navigate through the system and perform their desired tasks.

## Implementation & Used software:
-	Database Management System >>- MySQL
- Website Implementation >>- HTML
				                   - CSS (Design)
					                 - JavaScript
					                  - PHP
- IDE’s used >>- Visual Studio
               -  PyCharm
                 
- Tools For running Code >>-  XAMPP ( MySQL – Apache )

- Uml Diagrams, Entity Relationship Graph >>- LucidChart
                                            – GenMyModel
# Testing
There are several testing methods but the most suitable one for our website was manual testing.
## Login page
The admin must enter a correct username and correct password as it given in the database 
If not, an alert is shown.
 ![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/ce063553-4a4a-4d4b-87cf-ff50b61135b3)
 
If the admin entered incorrect username or password , an alert is shown as the next figure

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/b3922b8e-5a0b-426e-b814-4967cf16fcdf)

Our admin username is “admin” and password is “pass” as it given in the database

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/6abb0721-b304-4c65-ab4e-c470c744a4d9)
## New member registration
Admin can add new member by filling a form include the new member’s name,id,email and
Choosing a specfic trainer for him.

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/fdefc705-661c-4a82-96f2-b205559dfbbc)

An alert will be shown to show that the member was added successfully. 

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/35513153-9d86-45a8-9f1b-2af008b3892b)

The member will be added to the database too.

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/9c274e33-8058-4a4e-85ff-b1a6c06fa210)

## Member details
This page shows all the details of each member.
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/ea60dcf9-152a-4c4a-9cf4-abac1968cd04)

Admin is also able to search for any member by it’s id or by it’s name.

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/3b7ac300-ddd6-485e-9b5c-a690537f4d29)
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/babeb03b-e137-4367-963f-79e12ca0ca42)
 ## Package details
 This page shows all the details of each package.
 ![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/be1a3d87-f27e-48cb-baf7-b8a575e64a2a)

## Payments details
This page shows the details of the payment of each member.
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/184aeeaa-d3ea-4ef6-9ea2-7d76c336b248)

## Make a new payment
Admin is also able to make a new payment for any new customer by filling a form includes payment id, amount, customer id, customer name and payment type.
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/b3932e0d-f20f-4884-af8e-fa737eb3961c)

An alert will be shown to show that the payment was added successfully.

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/ec04c8f7-e18d-436a-8dd7-f6af56745489)

The payment will be added to the database too.
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/6c0b6b4b-a43a-49b2-a6be-6f0410500079)

## Trainer details
This page shows all details of each trainer .
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/8b472598-c57f-446f-97b0-5e5a458fe9f6)

## Register new trainer
Admin is also able to register new trainer by filling form includes trainer’s id, name and phone number.
![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/bda2f44b-f18b-4920-a2df-1ac0f63b6e31)

An alert will be shown to show that the trainer was added successfully.

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/de2a1bb4-cc4a-4b63-90db-a03f61a2922d)

The Trainer will be added to the database too.

![image](https://github.com/SWE-SP23/term-project-g16/assets/17290409/bffa8ff4-d259-44fb-b51b-d5557e4488d8)
 
