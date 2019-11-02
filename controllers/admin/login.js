var express = require('express');
var userModel = require('./../models/admin/user-model');

var router = express.Router();

router.get('/', function(req, res){
	res.render('admin/login/index');
});

router.post('/', function(req, res){
	
	var user = {
		username: req.body.username,
		password: req.body.password
	}

	userModel.validate(user, function(status){
		
		if(status){
			res.cookie('username', req.body.username);
			res.redirect('/dashboard');	
		}else{
			res.send('invalid username/password');
		}
	});

});

module.exports = router;


