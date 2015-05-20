var elixir = require('laravel-elixir');

/*var paths = {
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/stylesheets/bootstrap/'
}*/

elixir(function(mix) {
    mix.less('app.less').coffee();
   /* mix.styles([
        'vendor/normalize.css',
        'app.css'
        
    ],'public/output/final.css','public/css');*/
    //mix.phpUnit();
});