<?php require_once("../../../private/initialise.php");

$name = isset($_POST['v_name']) ? h($_POST['v_name']) : '';

add_vendor($name);

$page_title = 'Add Vendor';
include(SHARED_PATH . '/admin_header.php');
?>
<div id="content">

  <a class="back-link" href="<?php echo url_for('/user_admin/vendors/index.php'); ?>">&laquo; Back to vendors</a>

  <div class="subject new">

    <form action="<?php echo url_for("/user_admin/vendors/new.php");?>" method="post">
      <dl>
        <dt>Vendor Name</dt>
        <dd><input type="text" name="v_name" value="" /></dd>
      </dl>
      </dl>
      <div id="operations">
        <input type="submit" value="Add Vendor" />
      </div>
    </form>

  </div>

</div>
<?php include(SHARED_PATH . '/admin_footer.php'); ?>