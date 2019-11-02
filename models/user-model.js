var db = require('./db');

module.exports={

	getById: function(user_id, callback){

		var sql = "select * from user where user_id=?";
		db.getResults(sql, [user_id], function(result){

			//ffconsole.log(result);
			if(result.length > 0 ){
				callback(result);
				console.log(result);
			}else{
				callback([]);
			}
		});
	},
	
	validate: function(user, callback){
		var sql = "select * from user where username=? and password=?";

		db.getResults(sql, [user.username, user.password], function(result){

			if(result.length > 0 ) {
				callback(true);
			}else{
				callback(false);
			}
		});
	},
	getAll : function(callback){
		var sql = "select * from user";

		db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},
	insert : function(user, callback){
		var sql = "insert into user values('', ?, ?)";
		db.execute(sql, [user.username, user.password], function(status){
			callback(status);
		});
	},
	update : function(user, callback){
		var sql = "update user set username=?, password=? where user_id=?";		
			db.execute(sql, [user.username, user.password, user.user_id], function(status){
				callback(status);
			});
		
	},
	delete : function(user, callback){
		//var sql = "insert into user values('','"+ user.username+"', '"+user.password+"')";
		db.execute(sql, [],  function(status){
			callback(status);
		});
	},
	/////////////////////////
	getCourse :  function(callback){
		var sql = "select * from courses";

		db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},

	getCourseStd :  function(user_id, callback){
		var sql = "select * from courseStudent where student_id=?";

		db.getResults(sql, [user_id], function(results){
			//console.log(results);
			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},

	courseStudents :  function(course_id, callback){
		var sql = "select * from courseStudent, user where user.user_id=courseStudent.student_id and course_id=?";

		db.getResults(sql,[course_id], function(results){

			//console.log(course_id);
			if(results){
				callback(results);
			}else{
				callback([]);
			}
		});
	},

	changeGrade : function(user, callback){

		console.log(user);
		var sql = "update courseStudent set grade=? where student_id=?";		
		db.execute(sql, [user.grade, user.student_id], function(status){
			callback(status);
		});
		},

	getByName: function(user_id, callback){
		
		var sql = "select * from user where username=?";
		db.getResults(sql, [user_id], function(result){

			//ffconsole.log(result);
			if(result.length > 0 ){
				callback(result);
				//console.log(result);
			}else{
				callback([]);
			}
		});
	},
	viewSections: function(user_id, callback){
		var sql="select * from courseFaculty, courses where courseFaculty.course_id=courses.course_id and faculty_id=(SELECT user_id FROM user where username=?)";
		db.getResults(sql, [user_id], function(result){

			console.log(result);
			if(result.length > 0 ){
				callback(result);
				//console.log(result);
			}else{
				callback([]);
			}
		});
	},

	applyCourses : function(user, callback){
		var sql = "insert into coursefaculty values ('', ?, (SELECT user_id from user where username=?))";
		db.execute(sql, [user.course_id, user.faculty_id], function(status){
			callback(status);
		});
	},

}



