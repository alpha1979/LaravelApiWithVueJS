##<h1> Laravel Api with SPA application built with Vuejs </h1>
<p>This is Test Project Voting Api Built on LAravel and for frontend Vue js used to consume the api, bootstrap for styling</p>
<p>This is Test Project Voting Api Built on LAravel and for frontend Vue js used to consume the api</p>
<p>To Sort out</p>

<li>View a list of movie quotes, ordered by a voting system (most votes at the top of the list).</li>
<li>"Up-vote" or "down-vote" the movie quotes, which will affect the order they display on the page in real time.</li>
<li>All data should be persisted in a database, and fetched/created/updated via restful api calls.</li>
<ul>

<li>
Api CRUD functionality (Create / Read / Update / Delete) for MovieController
</li>
<li>database migraXons to create those schemas above</li>

<li>Use basic Laravel resource controllers with default methods – index, create, store etc.</li>
<li>Use Laravel’s paginaXon for outputing Movie list, 10 entries per page</li>
<li>Carried Out Laravel Feature Test to check if the api routes are working properly, if the field is missing than throw error</li>
</ul>

## To use this App
<ul>
    <li>
        Clone the product using https://github.com/alpha1979/LaravelApiWithVueJS.git
    </li>
    <li>
        copy the env.example to .env
    </li>
    <li>
        create the database mqdb , user :- root password :- none
    </li>
    <li>
    use cli to install composer dependency 
    - composer install
    </li>
    <li>
    cli command to generate key
    - php artisan key:generate
    </li>
     <li>
    you need to migrate the db
    - php artisan migrate
    </li>
     <li>
    use cli to install composer dependency 
    - composer install
    </li> 
    <li>Need to install npm install for dependency</li>
    <li>Need to install npm install vue</li>
    <li>Need to install npm install vue-axios</li>
    <li>Need to install npm install bootstrap</li>
    <li>
    php artisan db:seed
    </li>
    <li>
      Ready to go :- php artisan serve
    </li>
    
    <li>
    api route
    -  http://localhost:8000/api/movies
    

    </li>


</ul>
note:- <li>Unable to send the upvote and downvote from frontend however the api is working </li>
