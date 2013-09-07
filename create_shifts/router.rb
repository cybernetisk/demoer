require 'sinatra/base'
require "sinatra/reloader"

require 'date'

module App
  extend self

  class Router < Sinatra::Base
    configure :development do
      register Sinatra::Reloader
    end

    get '/' do
      @start = Date.parse("2013-08-26")
      erb :create
    end

  end

  if __FILE__ == $0
    Router.run!
  end
end
