class Certification < ActiveRecord::Base
  belongs_to :shift_type, dependent: :nullify
  belongs_to :user, dependent: :nullify
end
