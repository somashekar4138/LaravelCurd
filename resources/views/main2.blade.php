<!DOCTYPE html>
<html>
<head>
<title>Student Management | Edit</title>
</head>
<body>
<form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
@csrf
<table>
<tr>
<td>Name</td>
<td>
<input type = 'text' name = 'name'
value = '<?php echo $users[0]->name; ?>'/> </td>
</tr>
<tr>
<td>phone</td>
<td>
<input type = 'text' name = 'phone'
value = '<?php echo $users[0]->phone; ?>'/>
</td>
</tr>
<tr>
<td>email</td>
<td>
<input type = 'text' name = 'email'
value = '<?php echo $users[0]->email; ?>'/>
</td>
</tr>
<tr>
<td>language</td>
<td>
<input type = 'text' name = 'language'
value = '<?php echo $users[0]->language; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update student" />
</td>
</tr>
</table>
</form>
</body>
</html>