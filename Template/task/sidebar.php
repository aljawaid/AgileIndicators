    </ul> <!-- CLOSING TAG FROM CORE TEMPLATE -->

<hr>
<div id="AgileTaskPriorities" class="table-list">    
    <div class="table-list-header"><strong><?= t('Task Priorities') ?></strong>
    </div>
    <div class="agile-row table-border-left agile-bg-red">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P1') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('Top priority') ?></li>
                <li class=""><?= t('Matter of urgency') ?></li>
                <li class=""><?= t('Time constraints') ?></li>
                <li class=""><?= t('Financial burden') ?></li>
                <li class=""><?= t('Other restrictions') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-red">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P2') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('Priority') ?></li>
                <li class=""><?= t('Important') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-green">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P3') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('Work in progress') ?></li>
                <li class=""><?= t('Ongoing development') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-green">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P4') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('Low priority') ?></li>
                <li class=""><?= t('No timescale') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-cream">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P5') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('No priority') ?></li>
            </ul>
        </div>
    </div>
</div>

<div id="AgileTaskComplexities" class="table-list">    
    <div class="table-list-header">
        <strong><?= t('Task Complexities') ?></strong>
    </div>
    <div id="TaskComplexitiesGradient">
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C0 - C10') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('Easy task') ?></li>
                    <li class=""><?= t('Little effort required') ?></li>
                    <li class=""><?= t('No external resources') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C11 - C20') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('Standard task complexity') ?></li>
                    <li class=""><?= t('Cost Implications') ?></li>
                    <li class=""><?= t('Local resources are used') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C21 - C30') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('Effort required') ?></li>
                    <li class=""><?= t('Cost Implications') ?></li>
                    <li class=""><?= t('Local resources are used') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C31 - C40') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('Considerable effort required') ?></li>
                    <li class=""><?= t('Requires accountability') ?></li>
                    <li class=""><?= t('Requires tracking') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C41 - C50') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('Serious physical effort') ?></li>
                    <li class=""><?= t('Serious mental effort') ?></li>
                    <li class=""><?= t('Local resources are used') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
