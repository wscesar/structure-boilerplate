# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'coffeescript', :input => 'assets/coffee', :output => 'assets/js'

guard 'compass', :workdir => '', :configuration_file => 'assets/sass/config.rb' do
  watch('^*.sass')
end