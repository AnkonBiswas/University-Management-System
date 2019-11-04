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

	//req.session.un = null;
	res.clearCookie('admin_id');
	res.redirect('/admin/login/index');
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
			res.redirect('dashboard');	
		}else{
			res.send('invalid username/password');
		}
	});

});

router.get('/faculty', function(req, res){

 userModel.getFaculty(function(results){
		res.render('admin/faculty/index', {user: results});
	});
 });

router.get('/faculty_delete/:id', function(req, res){

 userModel.deleteFaculty(req.params.id,function(status){
		
		if(status){
				res.send('Faculty Deleted');
		}else{
			res.send('Can not Delete');
		}
	});
 });



router.get('/faculty_edit/:user_id', function(req, res){
	userModel.getByFaculty(req.params.user_id, function(results){
		res.render('admin/faculty/edit', {user: results});		
	});

});

router.post('/faculty_edit/:user_id', function(req, res){
	
	var user = {
		username: req.body.username,
		password: req.body.password,
		user_id: req.params.user_id,
		full_name: req.params.full_name
	};

	userModel.updateFaculty(user, function(status){

		if(status){
			res.redirect('/admin/faculty');
		}else{
			res.redirect('/admin/faculty');
		}
	});
});


router.get('/addfaculty', function(req, res){
	res.render('admin/faculty/add');
});

router.post('/addfaculty', function(req, res){

	var user = {
		username: req.body.username,
		password: req.body.password,
		full_name: req.body.full_name
	};

	userModel.insertFaculty(user, function(status){
		if(status){
			res.redirect('/admin/faculty');
		}else{
			res.redirect('/admin/addfaculty');
		}
	});
});



//student

router.get('/student', function(req, res){

 userModel.getStudent(function(results){
		res.render('admin/student/index', {user: results});
	});
 });

router.get('/student_delete/:id', function(req, res){

 userModel.deleteStudent(req.params.id,function(status){
		
		if(status){
				res.send('student Deleted');
		}else{
			res.send('Can not Delete');
		}
	});
 });



router.get('/student_edit/:user_id', function(req, res){
	userModel.getByStudent(req.params.user_id, function(results){
		res.render('admin/student/edit', {user: results});		
	});

});

router.post('/student_edit/:user_id', function(req, res){
	
	var user = {
		username: req.body.username,
		password: req.body.password,
		user_id: req.params.user_id
	};

	userModel.updateStudent(user, function(status){

		if(status){
			res.redirect('/admin/student');
		}else{
			res.redirect('/admin/student');
		}
	});
});


router.get('/addstudent', function(req, res){
	res.render('admin/student/add');
});

router.post('/addstudent', function(req, res){

	var user = {
		course_id: req.body.course_id,
		course_name: req.body.course_name,
		section: req.body.section,
		seats: req.body.seats,
		category: req.body.category
	};

	userModel.insertStudent(user, function(status){
		if(status){
			res.redirect('/admin/student');
		}else{
			res.redirect('/admin/addstudent');
		}
	});
});



//student

router.get('/course', function(req, res){

 userModel.getCourse(function(results){
		res.render('admin/course/index', {user: results});
	});
 });

router.get('/course_delete/:id', function(req, res){

 userModel.deleteCourse(req.params.id,function(status){
		
		if(status){
				res.send('course Deleted');
		}else{
			res.send('Can not Delete');
		}
	});
 });



router.get('/course_edit/:user_id', function(req, res){
	userModel.getByCourse(req.params.user_id, function(results){
		res.render('admin/course/edit', {user: results});		
	});

});

router.post('/course_edit/:user_id', function(req, res){
	
	var user = {
		course_id: req.body.course_id,
		course_name: req.body.course_name,
		section: req.body.section,
		seats: req.body.seats,
		category: req.body.category,
		user_id: req.params.user_id
	};

	userModel.updateCourse(user, function(status){

		if(status){
			res.redirect('/admin/course');
		}else{
			res.redirect('/admin/course');
		}
	});
});


router.get('/addcourse', function(req, res){
	res.render('admin/course/add');
});

router.post('/addcourse', function(req, res){

	var user = {
		course_id: req.body.course_id,
		course_name: req.body.course_name,
		section: req.body.section,
		seats: req.body.seats,
		category: req.body.category
	};

	userModel.insertCourse(user, function(status){
		if(status){
			res.redirect('/admin/course');
		}else{
			res.redirect('/admin/addcourse');
		}
	});
});

router.get('/dashboard', function(req, res){
	res.render('admin/dashboard/index');
});

module.exports = router;


