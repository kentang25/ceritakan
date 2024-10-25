<div class="topnav" id="myTopnav">
  <a id="brand" href="<?= base_url('ceritakan') ?>" class="active"><img src="<?= base_url().'assets/icons/heart.png'?>" height="22px" width="22px" class="mr-1">Ceritakan</a>
    <a class="center" href="<?= base_url('ceritamu') ?>">Ceritamu</a>
    <a class="upward" href="<?= base_url('cerita')?>">Cerita</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
  
  function myFunction()
  {
    var x = document.getElementById('myTopnav');
    if(x.className === "topnav"){
      x.className += " responsive";
    }else{
      x.className = "topnav";
    }
  }

</script>