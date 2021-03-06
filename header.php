<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=2.0, minimum-scale=0.86">
  <meta name="keywords" content="alive textiles" />
  <meta name="description" content="alive textiles" />

  <title>AIR-Lab</title>

  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<?php
if(is_front_page()):
  $airlab_classes = array('airlab_front_class', 'front_class');
else:
  $airlab_classes = array('no_airlab_front_class');
endif;
?>

<body <?php body_class($airlab_classes); ?>>
  <header>
  <?php include (TEMPLATEPATH . '/navigation.php'); ?>
	</header>
