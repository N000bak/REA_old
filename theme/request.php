<?
echo '
<div class="alert alert-info">
        <strong><center>Заявка на приобретение имущества.</center></strong>
</div>
  <form align="center" class="form-horizontal" name="add" method="post" enctype="multipart/form-data" action="save.php?id='.$_GET['id'].'">
   <div class="form-group">
    <label  class="col-sm-4 control-label">Фамилия:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="Fam" placeholder="Иванов" value="'.$item['Fam'].'">
    </div>
  </div>
<div class="form-group">
    <label  class="col-sm-4 control-label">Имя:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="Name" placeholder="Иван" value="'.$item['Name'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Отчество:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="FName" placeholder="Иванович" value="'.$item['FName'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Дата:</label>
    <div class="col-sm-2" style="text-align: left;">
    <input type="text" class="form-control" name="date" value="'.date("Y-m-d").'" readonly="readonly" />
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-4 control-label">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name="email" placeholder="email" value="'.$item['email'].'">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-4 control-label">Телефон:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="phone" placeholder="+7(ххх)-ххх-хх-хх" value="'.$item['phone'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Цена:</label>
    <div style="text-align: left;" class="col-sm-5">
    <input type="text" class="form-control" name="price" value="'.$item['price'].'" readonly="readonly" />
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Наименование покупки:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="obj_name" value="'.$item['obj_name'].'" readonly="readonly" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
    <input type="submit" class="btn btn-success" value="Оформить">
    <button type="button" class="btn btn-danger" onClick="history.back();">Отменить</button>
  </div>
  </div>
  </table>
  </form>
  </body>
</html>';
?>
