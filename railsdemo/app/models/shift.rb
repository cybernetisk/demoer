class Shift < ActiveRecord::Base
  attr_accessible :comment, :end, :leasing, :start, :training
  belongs_to :user
  belongs_to :shift_type
end
