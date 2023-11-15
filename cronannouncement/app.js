const cron = require('node-cron');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const express = require('express');
const app = express();
const port =  process.env.PORT || 3005


app.use(bodyParser.urlencoded({extended:false}))
app.use(bodyParser.json())

const conn = mysql.createConnection({
    host : 'localhost',
    user: 'root', 
    password : '', 
    database : 'school_abulalas'
})


function myTask() {
    conn.query('UPDATE tbl_school_announcement SET status = "INACTIVE" WHERE DATE(end) = CURDATE()', (err, result) => {
        if(err){
            console.error(err);
        }else{
            console.log('Task is running on schedule every minute!');
        }
    });
    
    // Add your task logic here

}

// Schedule the task to run every minute
cron.schedule('* * * * *', myTask);
