
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <table id="simple-table" class="table  table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Onboarding Percentage</th>
                    <th># Of Users</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($onboardinglist); ++$i) { ?>
                    <tr>
                        <td><?php echo ($i+1); ?></td>
                        <td><?php echo $onboardinglist[$i]->onboarding_percentage; ?></td>
                        <td><?php echo $onboardinglist[$i]->count; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="container">

</div>

<div class="space"></div>