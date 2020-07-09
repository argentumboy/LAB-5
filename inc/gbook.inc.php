<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<title>GUEST BOOK</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>

	<body>

		<div class="container">
		<!--ФОРМА ГОСТЕВОЙ КНИГИ-->
	<div class="col-lg-10">
		<form action ="inc/form.php" method ="POST" >
 <div class="form-group">
 <label>Имя</label>
 <input type="text" class="form-control"
placeholder="Введите имя "name="name">
 </div>
 <div class="form-group">
 <label>EMAIL:</label>
 <input type="text" class="form-control"
placeholder="Введите Email" name="email">
 </div>
 <div class="form-group">
 <div class="form-group">
 <label>Сообщение</label>
 <textarea class="form-control"
placeholder="Сообщение" name="text"></textarea>
</div>
<div class="form-group">
 <input type="submit" class="btn btn-info" name="submit" 
value="Отправить" />
</div> 
		
<table border="1" align="center" class="table">
<tr>
<td>Имя пользователя</td>
<td>Емейл</td>
<td>Комментарий</td>
</tr>
<?php
include 'bd.php';
foreach (getAll() as $result)
{
    echo '<tr>
             <td>'.$result['name'].'</td>
             <td>'.$result['email'].'</td>
             <td>'.$result['text'].'</td>
             </tr>';

}
?>
 </table>


		<footer class="page-footer font-small unique-color-dark pt-0">
		<div class="primary-color">
			<div class="container">
					<div class="row py-4 d-flex align-items-center">
						<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
							<h6 class="mb-0 white-text">Присоединяйтесь к нам в социальных сетях!</h6>
						</div>
					</div>
				</div>
				
			</div>
		</footer>	

	</body>