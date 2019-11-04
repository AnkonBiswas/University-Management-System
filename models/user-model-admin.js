var db = require('./db');

module.exports={

	getById: function(user_id, callback){

		var sql = "select * from admin where name=?";
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


	getAdmin: function(user_id, callback){

		var sql = "select * from admin where id=?";
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



	getByFaculty: function(user_id, callback){

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


	getByStudent: function(user_id, callback){

		var sql = "select * from student where id=?";
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


	updateFaculty : function(user, callback){
		var sql = "update user set username=?, password=?, full_name=? where user_id=?";		
			db.execute(sql, [user.username, user.password, user.user_id, user.full_name], function(status){
				callback(status);
			});
		
	},

	updateStudent : function(user, callback){
		var sql = "update student set username=?, password=? where id=?";		
			db.execute(sql, [user.username, user.password, user.user_id], function(status){
				callback(status);
			});
		
	},


	insertFaculty : function(user, callback){
		var sql = "insert into user values('', ?, ?, ?,'','')";
		db.execute(sql, [user.username, user.password,user.full_name], function(status){
			callback(status);
		});
	},


	insertStudent : function(user, callback){
		var sql = "insert into student values('', ?, ?)";
		db.execute(sql, [user.username, user.password], function(status){
			callback(status);
		});
	},



	
	validate: function(user, callback){
		var sql = "select * from admin where name=? and password=?";

		db.getResults(sql, [user.name, user.password], function(result){

			if(result.length > 0 ) {
				callback(true);
			}else{
				callback(false);
			}
		});
	},
	getAll : function(callback){
		var sql = "select * from admin";

		db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},
	insert : function(user, callback){
		var sql = "insert into admin values('', ?, ?)";
		db.execute(sql, [user.name, user.password], function(status){
			callback(status);
		});
	},
	update : function(user, callback){
		var sql = "update admin set name=?, password=? where user_id=?";		
			db.execute(sql, [user.username, user.password, user.user_id], function(status){
				callback(status);
			});
		
	},
	delete : function(user, callback){
		//var sql = "insert into user values('','"+ user.username+"', '"+user.password+"')";
		var sql = "DELETE FROM admin WHERE id=?";
		db.execute(sql, [user],  function(status){
			callback(status);
		});
	},
	/////////////////////////
	getFaculty :  function(callback){
		var sql = "select * from user";

		db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},

	getStudent :  function(callback){
		var sql = "select * from student";

		db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},

	deleteFaculty : function(user_id, callback){
		var sql = "DELETE FROM faculty WHERE id=?";
		db.execute(sql,[user_id],  function(status){
			callback(status);
		});
	},


	deleteStudent : function(user_id, callback){
		var sql = "DELETE FROM student WHERE id=?";
		db.execute(sql,[user_id],  function(status){
			callback(status);
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


	// Course


getByCourse: function(user_id, callback){

		var sql = "select * from courses where id=?";
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


updateCourse : function(user, callback){
		var sql = "update courses set course_id=?, course_name=? , section=?, seats=?, category=? where id=?";		
			db.execute(sql, [user.course_id, user.course_name, user.section, user.seats, user.category, user.user_id], function(status){
				callback(status);
			});
		
	},


insertCourse : function(user, callback){
		var sql = "insert into courses values('', ?, ?,?,?,?)";
		db.execute(sql, [user.course_id, user.course_name, user.section, user.seats, user.category], function(status){
			callback(status);
		});
	},


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


deleteCourse : function(user_id, callback){
		var sql = "DELETE FROM courses WHERE id=?";
		db.execute(sql,[user_id],  function(status){
			callback(status);
		});
	},


	// Book

	getBybook: function(user_id, callback){

		var sql = "select * from books where id=?";
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


updatebook : function(user, callback){
		var sql = "update books set book_id=?, book_name=? , section=?, seats=?, category=? where id=?";		
			db.execute(sql, [user.book_id, user.book_name, user.section, user.seats, user.category, user.user_id], function(status){
				callback(status);
			});
		
	},


insertbook : function(user, callback){
		var sql = "insert into books values('', ?, ?,?,?,?)";
		db.execute(sql, [user.book_id, user.book_name, user.section, user.seats, user.category], function(status){
			callback(status);
		});
	},


getbook :  function(callback){
		var sql = "select * from books";

		db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
			}else{
				callback([]);
			}
		});
	},


deletebook : function(user_id, callback){
		var sql = "DELETE FROM books WHERE id=?";
		db.execute(sql,[user_id],  function(status){
			callback(status);
		});
	},

count : function(table_name, callback){
		var sql = "SELECT count(*) as total from "+table_name;
		console.log(sql);
			db.getResults(sql, [], function(results){

			if(results.length > 0 ) {
				callback(results);
				console.log(results);
			}else{
				callback([]);
			}
		});
	},

}



