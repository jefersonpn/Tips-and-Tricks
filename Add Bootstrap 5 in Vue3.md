#### Bootstrap 5 no longer needs jQuery so it's easier to use with Vue, and no longer requires a library like bootstrap-vue.

#### Install bootstrap as you would any other JS module in the Vue project using npm install or by adding it to the package.json...

'''command
npm install --save bootstrap
npm install --save @popperjs/core
'''

#### Next, add the Bootstrap CSS and JS components to the Vue project entrypoint (ie: src/main.js)...

'''command
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"
'''
