class User

    attr_accessor :name, :email

    def initialize(name, email)
        @name = name
        @email = email
    end

end

ohira = User.new('ohira', 'ohira@gmail.com')
puts ohira.name

ohira.name = '大平'
puts ohira.name