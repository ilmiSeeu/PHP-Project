# PHP-Project

Laravel is a PHP web application framework that follows the Model-View-Controller (MVC) architectural pattern.

#### Routes

- The first route simply renders the welcome view.
- The next route directs the GET request to the index method of the insertController class.
- The following two routes handle the POST and GET requests to the applicants route and direct them to the DataInsert and index methods of the insertController class, respectively. Similarly,
- the next route handles the post request to the uploadFile route and directs it to the uploadFile method of the PagesController class.
- The last two routes handle the GET and POST requests to the form-url route and return the form view.

#### Model
The project uses Eloquent ORM, which is included in Laravel, to interact with the database. There are 3 models in the project
1. Applicant
2. finalStudents_table
3. Page
The Applicant model interacts with the applicants table, finalStudents_table interacts with finalStudents table and Page model have insertData method that insert data into the applicants table. The database table structure is defined in the migration files.

#### Controller
The project also uses controllers to handle the incoming requests and direct them to the appropriate views.
- The ApplicantController class contains the index method that fetches all the rows from the applicants table and passes it to the applicant view.
- The insertController class contains the index and DataInsert methods that handle the GET and POST requests to the finalApplicants route, respectively.
- The PagesController class contains the uploadFile method that handles the post request to the uploadFile route.

#### Views
The views are written in Blade templating engine which is included in Laravel, these views are responsible for presenting the data to the user.
- The applicant view displays all the rows from the applicants table in a tabular format, and also includes a button for each row that directs the user to a form where they can add more information about the applicant.
- The finalApplicant view displays all the rows from the finalStudents table in a tabular format. The form view is a form that allows the user to add more information about the applicant.

#### CSS
The project also uses tailwind css, which is a utility-first CSS framework, to style the views. The styles are included in the head of the layout file.

In summary, the project is a web application that allows the user to upload excel file and insert data into the applicant table and also allows the user to add more information about an applicant and insert it into the finalApplicant table, the data is then displayed in tabular format.
