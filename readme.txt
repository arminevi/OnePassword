# Run a localserver with Symfony CLI 
--> symfony server:start -d 
> -d is a flag for running in background

# After Repo has been cloned, run following steps to get this project running
1. composer install
2. npm install 
3. check for database and create it with: 
    - symfony console doctrine:database:create
4. To compile the assets once:
    - npm run dev
4.1 If changes to webpack.config.js is made:
    - npm run watch 