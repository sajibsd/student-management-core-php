<?php

function getAllStudentSql($order = "latest")
{
    if($order === 'latest'){
        return "SELECT * FROM `students` ORDER BY id DESC";
    } else {
        return "SELECT * FROM `students` ORDER BY id ASC";
    }
}

function createStudentQuery($name,$roll,$reg,$age)
{
  return  "INSERT INTO students VALUES(NULL, '$name', $roll, $reg, '$age')";
}


function deleteStudentQuery($id)
{
  return  "DELETE FROM students WHERE id=$id";
}