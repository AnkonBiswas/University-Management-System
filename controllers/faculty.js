var express = require('express');
var userModel = require('./../models/user-model');

var router = express.Router();

router.get('/', function(req, res){
	var faculty_id= req.cookies['faculty_id'];
	console.log(faculty_id);
	userModel.getByName(faculty_id, function(result){
		//console.log(result);
		res.render('faculty/index', {user: result});
	});
});

router.get('/view_students/:course_id', function(req, res){
    //res.render('courses/index');
    var course_id=req.params.course_id;
    //module.exports.course_id=course_id;
    userModel.courseStudents(course_id, function(results){
		res.render('faculty/view_students', {user: results});
	});

});

router.get('/edit/:user_id', function(req, res){
	//console.log(req.params.user_id);
	res.clearCookie('std_id');
	res.cookie('std_id', req.params.user_id);
	//console.log(req.cookies['std_id']);
	userModel.getCourseStd(req.params.user_id, function(results){
        res.render('faculty/edit', {user: results});
        console.log(results);		
	});

});

router.post('/edit/:user_id', function(req, res){
	//console.log(req.cookies['std_id']);
	//console.log('im here');

	var user = {
		grade: req.body.grade,
		student_id: req.cookies['std_id']
	};

	userModel.changeGrade(user, function(status){
		var url= '/faculty/view_students/';
		var url1=url.concat('ATP3_1');
		if(status){
			res.redirect(url1);
		}else{
			res.redirect(url1);
		}
	});
});

router.get('/sections', function(req, res){

	var faculty_id= req.cookies['faculty_id'];
	console.log(faculty_id);
	userModel.viewSections(faculty_id, function(result){
		//console.log(result);s
		res.render('faculty/faculty_sections', {user: result});
	});
});

router.get('/apply_course/:course_id', function(req, res){
	var faculty_id= req.cookies['faculty_id'];
	var user = {
		course_id: req.params.course_id,
		faculty_id: faculty_id
	};

	userModel.applyCourses(user,function(status){
		if (status){
			res.redirect('/faculty/sections');
		}
		else res.redirect('/faculty');
	});
	
});

router.get('/change_password', function(req, res){
	var faculty_id=	req.cookies['faculty_id'];
	//console.log(faculty_id);
	userModel.getByName(faculty_id, function(results){
        res.render('faculty/change_password', {user: results});
        console.log(results);		
	});	
});

router.post('/change_password', function(req, res){
	//console.log(req.cookies['std_id']);
	//console.log('im here');

	var user = {
		password: req.body.password,
		faculty_id: req.cookies['faculty_id']
	};
	console.log(user);
	userModel.changePassword(user, function(status){
		var url1= '/faculty';
		//var url1=url.concat('ATP3_1');
		if(status){
			res.redirect(url1);
		}else{
			res.redirect(url1);
		}
	});
});



module.exports = router;
