<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

		
    {!! Html::script('Scripts/javascript/test.js'); !!}
    
		
        <style>
/*
  Source at https://github.com/tommymarshall/react-multi-step-form
*/

html, body {
  font-family: "Open Sans", Helvetica, arial;
  font-size: 16px;
  line-height: 1.36;
  max-width: 100%;
  min-height: 100%;
}

body {
  margin: 0;
  padding: 0;
}

body * {
  box-sizing: border-box;
}

.container {
  margin: 20px auto;
  max-width: 400px;
  width: 100%;
}

.btn {
  border-radius: 3px;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  padding: 10px 12px;
  text-align: center;
}
.btn.-default {
  background-color: #fff;
  border: 1px solid #ddd;
  color: #4c5e65;
}
.btn.-default:hover {
  background-color: #eee;
}
.btn.-primary {
  background-color: #2989c6;
  border: 1px solid #2989c6;
}
.btn.-primary:hover {
  background-color: #257ab1;
}

.progress {
  margin-bottom: 20px;
  transition: all 0.2s ease;
}

.progress-step {
  display: block;
  font-size: 12px;
  font-weight: bold;
  margin-bottom: 18px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
}

.pull-right {
  float: right;
}

.pull-left {
  float: left;
}

.form-fields {
  list-style: none;
  margin: 0;
  padding: 0;
}
.form-fields > li {
    margin-bottom: 20px;
}

.form-footer {
  border-top: 1px solid #ddd;
  margin-top: 10px;
  padding-top: 20px;
}

.label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 4px;
}

label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 4px;
}

.checkbox label, .radio label {
  cursor: pointer;
  display: inline-block;
  font-weight: normal;
  padding: 1px 12px 1px 30px;
  position: relative;
}

.checkbox label input, .radio label input {
  left: 0;
  position: absolute;
  top: 0;
}

input {
  font-size: 16px;
  padding: 8px;
  width: 100%;
}

select {
  font-size: 16px;
  padding: 8px;
}

        </style>
        
    </head>
    <body>
        <div class="container">
             <div id="registration-form"></div>
        </div>
    </body>
</html>
