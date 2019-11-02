        <div class="footer">
            <div class="float-right">
                by <strong><?= $app['author']['name']; ?></strong>
            </div>
            <div>
                <strong>Copyright</strong>  <?= (isset($app['owner']) ? $app['owner'] : $app['author']['name']); ?> &copy; 2019
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src="<?= theme_url(); ?>js/jquery-3.1.1.min.js"></script>
<script src="<?= theme_url(); ?>js/popper.min.js"></script>
<script src="<?= theme_url(); ?>js/bootstrap.js"></script>
<script src="<?= theme_url(); ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= theme_url(); ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= theme_url(); ?>js/inspinia.js"></script>
<script src="<?= theme_url(); ?>js/plugins/pace/pace.min.js"></script>


</body>

</html>
