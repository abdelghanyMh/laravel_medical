<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About laravel-medical:

laravel-medical is a full-stack web application that allows the user to manage a medical clinic.
</br></br>

-   There are three roles in this app, each with a particular level of access:
</br>

    -   **SECRETARY** can:
        1. Login
        2. Create a new appointment
        3. View list of the patients and the doctors in registered in the app.
    -   **DOCTOR** can:
        1. Do anything a secretary can do.
        2. Manage the patient assigned to him (_has/had appointment with them_).
        3. Manage the patient's profile (_see the use case diagram_).
    -   **ADMIN** can:
        1. Do anything a doctor & secretary can do.
        2. manage users of the app.

## Tech used:

-   Laravel V9 : web application framework
-   AdminLTE Bootstrap Admin Dashboard Template [link](https://adminlte.io/themes/v3/)

## Use Case Diagram:

![use case Diagram](./public/useCaseDiagram.png)
