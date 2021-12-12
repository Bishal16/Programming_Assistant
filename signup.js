console.log('click');

document.querySelector('.signup').addEventListener('click', function () {
  const email = document.querySelector('.email').value;
  console.log(email);
  console.log('click')
});










//database connection
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "test"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM customers", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});


