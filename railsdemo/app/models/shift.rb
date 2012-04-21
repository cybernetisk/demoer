class Shift < ActiveRecord::Base
  attr_accessible :comment, :end, :leasing, :start, :training
  belongs_to :user, dependent: :nullify
  belongs_to :shift_type, dependent: :nullify
  belongs_to :certification, dependent: :destroy
end
