<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Personal task manager

Personal task manager is a simple fullstack(Laravel/vue) task management application. 
This application complies with standard SE principles like DRY. SOLID and the repository pattern.
I also used Laravel's contextual binding to resolve the unanimous repository interface in my controllers.

Below are test login routes to access the application

- [live url]http://138.68.190.24:8000/).
- user Email - [user@mail.com]
- user password - [password]

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Local Set up with Docker

Find a docker-compose.yml file in the root of the folder.

### Steps
- Ensure to have docker installed on your local machine 
- Run docker-compose exec mini-crm-node bash to temporary populate the vue assets
- then run npm instlall to install vue depencies
- run docker-compose up -d

That's all you have to do. You can read more about docker and compose to gain more understanding.

## Local Set up without Docker

### Steps
- Ensure to install php,mysql and their depencies on your local machine
- you can also install sqlite3 for testing
- Ensure to have node and npm installed for vue transpilling
