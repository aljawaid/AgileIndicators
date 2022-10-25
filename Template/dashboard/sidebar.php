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
            <ul>
                <li><?= t('Top priority') ?></li>
                <li><?= t('Matter of urgency') ?></li>
                <li><?= t('Time constraints') ?></li>
                <li><?= t('Financial burden') ?></li>
                <li><?= t('Other restrictions') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-red">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P2') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul>
                <li><?= t('Priority') ?></li>
                <li><?= t('Important') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-green">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P3') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul>
                <li><?= t('Work in progress') ?></li>
                <li><?= t('Ongoing development') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-green">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P4') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul>
                <li><?= t('Low priority') ?></li>
                <li><?= t('No timescale') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-cream">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('P5') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul>
                <li><?= t('No priority') ?></li>
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
                <strong><?= t('C0-C10') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul>
                    <li><?= t('Easy task') ?></li>
                    <li><?= t('Little effort required') ?></li>
                    <li><?= t('No external resources') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C11-C20') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul>
                    <li><?= t('Standard task complexity') ?></li>
                    <li><?= t('Cost Implications') ?></li>
                    <li><?= t('Local resources are used') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C21-C30') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul>
                    <li><?= t('Effort required') ?></li>
                    <li><?= t('Cost Implications') ?></li>
                    <li><?= t('Local resources are used') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C31-C40') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul>
                    <li><?= t('Considerable effort required') ?></li>
                    <li><?= t('Requires accountability') ?></li>
                    <li><?= t('Requires tracking') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('C41-C50') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul>
                    <li><?= t('Serious physical effort') ?></li>
                    <li><?= t('Serious mental effort') ?></li>
                    <li><?= t('Local resources are used') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
