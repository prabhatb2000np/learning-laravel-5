var elixir = require('laravel-elixir');

/*var paths = {
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/stylesheets/bootstrap/'
}*/

elixir(function(mix) {
    mix.less('app.less');
   /* mix.styles([
        'vendor/normalize.css',
        'app.css'
        
    ],'public/output/final.css','public/css');*/
    //mix.phpUnit();
    mix.styles([
        'public/components/bootstrap334dist/css/bootstrap.min.css',
        'app.css',
        'public/components/select2/select2.min..css'
        
        
    ]);
});