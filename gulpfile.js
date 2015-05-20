var elixir = require('laravel-elixir');

/*var paths = {
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/stylesheets/bootstrap/'
}*/

elixir(function(mix) {
   /* mix.sass('app.scss').coffee();
    mix.styles([
        'vendor/normalize.css',
        'app.css'
        
    ],'public/output/final.css','public/css');*/
    mix.phpUnit();
});