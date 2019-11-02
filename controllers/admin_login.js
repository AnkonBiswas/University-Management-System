var express = require('express');
var userModel = require('./../models/user-model-admin');

var router = express.Router();

router.get('/', function(req, res){

	if (req.cookies['admin_id']) {
		res.render('admin/dashboard/index');

	}else{
		res.render('admin/login/index');
	}

	
});

router.get('/login', function(req, res){
	res.render('admin/login/index');
});

router.post('/login', function(req, res){
	
	var user = {
		name: req.body.name,
		password: req.body.password
	}

	userModel.validate(user, function(status){
		
		if(status){
			res.cookie('admin_id', req.body.name);
			res.redirect('admin/dashboard');	
		}else{
			res.send('invalid username/password');
		}
	});

});

router.get('/dashboard', function(req, res){
	res.render('admin/dashboard/index');
});

module.exports = router;


