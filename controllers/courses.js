var express = require('express');
var userModel = require('./../models/user-model');

var router = express.Router();

router.get('/', function(req, res){
    //res.render('courses/index');
    
    userModel.getCourse(function(results){
		res.render('courses/index', {user: results});
	});

});

module.exports = router;
