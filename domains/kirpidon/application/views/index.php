          <main>
    
            <div class="cor">
                <div class="container">
    <div class="row">
        
    <div class="col-lg-12">
            <h2> почему выгодно с нами работать </h2>
       
        
      

<div class="card-group">
<div class="card">
<img src="<?php echo base_url();?>public/images/1.png" class="card-img-top" alt="..." width="60" height="200">

</div>
<div class="card">
<img src="<?php echo base_url();?>public/images/2.png" class="card-img-top" alt="..." width="60" height="200">

</div>
<div class="card">
<img src="<?php echo base_url();?>public/images/3.png" class="card-img-top" alt="..." width="60" height="200" >

</div>
<div class="card">
<img src="<?php echo base_url();?>public/images/4.png" class="card-img-top" alt="..." width="60" height="200">
</div>
</div>
</div>
</div>
</div>
</div> 
<div class="kir">

<div class="container">

    <div class="card-group">
        <div class="card">
          <img src="<?php echo base_url();?>public/images/1.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">цена за шт: 55.00 руб </h5>
            <p class="card-text">.</p>
          </div>
          <button type="button" class="btn btn-dark"> Сделать заказ</button>
        </div>
        <div class="card">
          <img src="<?php echo base_url();?>public/images/2.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">цена за шт: 28.00 руб</h5>
            <p class="card-text">
            
          </div>
          <button type="button" class="btn btn-dark"> Сделать заказ</button>
        </div>
        <div class="card">
          <img src="<?php echo base_url();?>public/images/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">цена за шт: 24.00 руб</h5>
            <p class="card-text">
          </div>
          <button type="button" class="btn btn-dark"> Сделать заказ</button>
        </div>

        <div class="card">
            <img src="<?php echo base_url();?>public/images/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">цена за шт: 24.00 руб</h5>
              <p class="card-text">
            </div>
            <button type="button" class="btn btn-dark"> Сделать заказ</button>
          </div>
          
      </div>

<div class="card-group">
  <div class="card">
    <img src="<?php echo base_url();?>public/images/11.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">цена за шт: 49.00 руб</h5>
      <p class="card-text"> </p>
      
    </div>
    <button type="button" class="btn btn-dark"> Сделать заказ</button>
  </div>
  <div class="card">
    <img src="<?php echo base_url();?>public/images/12.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">цена за шт: 49.00 руб</h5>
      <p class="card-text"> </p>
    </div>
    <button type="button" class="btn btn-dark"> Сделать заказ</button>
  </div>
  <div class="card">
    <img src="<?php echo base_url();?>public/images/13.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">цена за шт: 36.00 руб</h5>
      <p class="card-text"> </p>
    </div>
    <button type="button" class="btn btn-dark"> Сделать заказ</button>
  </div>
  <div class="card">
    <img src="<?php echo base_url();?>public/images/14.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">цена за шт: 54.00 руб</h5>
      <p class="card-text"> </p>
    </div>
    <button type="button" class="btn btn-dark"> Сделать заказ</button>
  </div>
</div>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				
				<th>Название</th>
				<th>размер</th>
        <th>Картинка</th>
			</tr>
			<?php
      if(isset($tovar)){
			foreach ($tovar as $row):{			
	echo '<tr><td>'.$row['name_tovar'].'</td><td>'.$row['razmer'].'</td> <td> <img src= '.$row['img'].'</td> </tr>';
    }
  endforeach;
  }
  echo ('</table>');
  for($i=0;$i<3;$i++){
  echo('</div>');
  }
  echo('</main>')
?>
		
		



       
      
       
        