class User < ActiveRecord::Base
  attr_accessible :last_login, :username
  has_many :shifts, dependent: :nullify, inverse_of: :user
end
