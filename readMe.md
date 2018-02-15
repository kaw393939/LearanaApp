#Install Instructions
touch database/database.sqlite

and then change the .env for sql to be:

cp .env.example .env

and then replace sql in the .evn to:

DB_CONNECTION=sqlite
DB_DATABASE=<path to sql>/database/database.sqlite