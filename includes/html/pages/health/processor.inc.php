<?php
/*
 * LibreNMS
 *
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.  Please see LICENSE.txt at the top level of
 * the source code distribution for details.
 *
 * @package    LibreNMS
 * @subpackage webui
 * @link       https://www.librenms.org
 * @copyright  2017 LibreNMS
 * @author     LibreNMS Contributors
*/

$pagetitle[] = 'Health :: Processor';
?>

<div class="panel panel-default panel-condensed">
    <div class="panel-heading">
        <div class="row" style="padding:0px 10px 0px 10px;">
            <div class="pull-left">
                <?php echo $navbar; ?>
            </div>

            <div class="pull-right">
                <?php echo $displayoptions; ?>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="processor" class="table table-hover table-condensed processor"
                data-ajaxurl="<?php echo url('/ajax/table/processors') ?>">
            <thead>
                <tr>
                    <th data-column-id="device_hostname">Device</th>
                    <th data-column-id="processor_descr">Processor</th>
                    <th data-column-id="graph" data-sortable="false" data-searchable="false"></th>
                    <th data-column-id="processor_usage" data-searchable="false">Usage</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script>
    var grid = $("#processor").bootgrid({
        ajax: true,
        rowCount: [50,100,250,-1],
        post: function ()
        {
            return {
                view: '<?php echo htmlspecialchars($vars['view']); ?>'
            };
        },
        url: "<?php echo route('table.processors') ?>"
    });
</script>
