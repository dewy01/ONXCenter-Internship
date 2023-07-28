<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://vuejs.org/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1184px-Vue.js_Logo_2.svg.png" width="400" alt="Vuejs Logo"></a></p>

## About Project

Project made for a ONXcenter internship program, it includes

##Laravel tasks:

1. Get information about the client, the employee who is assigned to him and
orders - what things he bought recently. The client model is linked by keys to the others,
so the information is obtainable through the relationship. Work on this task
Eloquent ORM.
2. Multiple users can have multiple company car. Create a relationship that allows
assign a user to a car and verify whether he uses this car in a given car
moment.
3. Create an HTTP Test that will verify the correctness of creating, viewing, editing and
removal of vehicles, customers and employees. We expect correct answers, so
you need to create a complete operating logic.
4. Create a notification system - when a user is assigned to a vehicle, send a notification
to him and to the system administrator that the car has been locked. When the
the user is deactivated, he should also be informed.

##Vue tasks:

1. From the frontend level, download information about the client, prepare a list of clients and
preview of a specific customer with all information about him - employee who to
assigned to him, recently purchased items and how much he spent on purchases in total. Also display
car owned by the customer. You need to properly prepare the routing on the side
frontend.
2. Prepare client management - adding, deleting, editing. When adding/updating
you must properly validate the entered data
3. Prepare pagination, sorting, filtering and searching for the list of clients
4. Create a simple authentication and save the user data globally in the application. use for
this Pinia
5. Rewrite the code snippet below to a more readable notation
arrA.filter(x => !arrB.includes(x)).concat(arrB.filter(x => !arrA.includes(x))


