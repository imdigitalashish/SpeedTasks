function User(email, password) {
    this._email = email;
    this._password = password;


    Object.defineProperty(this, "email", {
        get: function () {
            return this._email.toUpperCase();
        },
        set: function (value) {
            this.email = value;
        }
    })

    Object.defineProperty(this, "password", {
        get: function () {
            return "*".repeat(this._password.length)
        },
        set: function (value) {
            this.password = value;
        }
    })
}



const user = new User("imdigitalashish@gmail.com", "password")

console.log(user.email);
console.log(user.password)