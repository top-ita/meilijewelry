<?php
include('global.php');
include('helpers/general.php');
?>
<? $q = "SELECT * FROM `jew_product` WHERE id = '" . $_GET['id'] . "' ORDER BY id DESC LIMIT 0,20 ";
$dbproduct = new nDB();
$dbproduct->query($q);
$dbproduct->next_record() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?= $dbproduct->f(name) ?></title>
  <META name=description content="บริการรับทำแหวนทอง แหวนเพชร แหวนฝังพลอย อัญมณี ทุกรูปแบบ ด้วยทีมงานมืออาชีพ ประสบการณ์กว่า 40 ปี">
  <META name=keywords content="<?= $dbproduct->f(keyword) ?> ">
  <link rel="stylesheet" href="./assets/common/css/bundle.min.css">
  <!-- load jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <!-- load Galleria -->
  <script src="galleria/galleria-1.2.9.min.js"></script>
</head>

<body>
  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="assets/images/head.jpg" width="1000" height="286"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td style="background:url(bg-chap.jpg) no-repeat" height="50">

        <?php include('components/menu_top.php'); ?>

      </td>
    </tr>
    <tr>
      <td style="background:url(images/bg-product.jpg)">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10" height="300" valign="top" style="padding-top:50px">
              <table width="950" border="0" align="center" cellpadding="5" cellspacing="0">
                <tr>
                  <td align="center" bgcolor="#666666">
                    <span style="color:#CCC"><?= $dbproduct->f(name) ?></span>
                  </td>
                </tr>
                <tr>
                  <td><span style="color:#666666C"><?= $dbproduct->f(detail) ?></span></td>
                </tr>
                <tr>
                  <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td align="center"><img src="<?= ($dbproduct->f(pic1) != "") ? "http://www.praasia.com/slir/w900/jewelry/upimg/product/" . $dbproduct->f(pic1) : "images/clear.gif" ?>" alt="<?= $dbproduct->f(name) ?>" /></td>
                      </tr>
                      <tr>
                        <td align="center"><img src="<?= ($dbproduct->f(pic2) != "") ? "http://www.praasia.com/slir/w900/jewelry/upimg/product/" . $dbproduct->f(pic2) : "images/clear.gif" ?>" alt="<?= $dbproduct->f(name) ?>" /></td>
                      </tr>
                      <tr>
                        <td align="center"><img src="<?= ($dbproduct->f(pic3) != "") ? "http://www.praasia.com/slir/w900/jewelry/upimg/product/" . $dbproduct->f(pic3) : "images/clear.gif" ?>" alt="<?= $dbproduct->f(name) ?>" /></td>
                      </tr>
                      <tr>
                        <td align="center"><img src="<?= ($dbproduct->f(pic4) != "") ? "http://www.praasia.com/slir/w900/jewelry/upimg/product/" . $dbproduct->f(pic4) : "images/clear.gif" ?>" alt="<?= $dbproduct->f(name) ?>" /></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td bgcolor="#141111">
        <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <? $q = "SELECT * FROM `jew_product` WHERE status = '1' ORDER BY RAND() DESC LIMIT 0,20 ";
              $dbhot = new nDB();
              $dbhot->query($q);
              while ($dbhot->next_record()) { ?>
                <table width="160" border="0" cellspacing="0" cellpadding="0" style="float:left; margin:10px">
                  <tr>
                    <td height="120" align="center" bgcolor="#333333" style="border:1px solid #666"><a href="detail_product.php?id=<?= $dbhot->f(id) ?>"><img src="<?= ($dbhot->f(pic1) != "") ? 'http://www.praasia.com/slir/w150-h120/jewelry/upimg/product/' . $dbhot->f(pic1) : "images/clear.gif" ?>" alt="" border="0" /></a></td>
                  </tr>
                </table>
              <?php } ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <img src="images/footer.jpg" width="1000" height="114" />
      </td>
    </tr>
  </table>
</body>

</html>