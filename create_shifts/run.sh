# Run handlebars watcher
handlebar-rider -r -w -i assets/handlebars -o public/js/templates.js &

# Run sass watcher
sass --sourcemap --watch assets/scss:public/css &

# Run the sinatra app
ruby router.rb
