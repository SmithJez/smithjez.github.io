#!/usr/bin/ruby
require 'webrick'

server = WEBrick::HTTPServer.new(
  :Port => 10080, 
  :BindAddress => '0.0.0.0', 
  :DocumentRoot => "#{File.dirname(__FILE__)}/../"
)
trap 'INT' do server.shutdown end
server.start
