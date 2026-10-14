<?php // Keep this wrapper inside the Kanboard-owned sidebar list; covered by tests/SidebarMarkupTest.php. ?>
<li class="agile-indicators-sidebar">

<hr>
<div class="table-list agile-indicators-scale agile-indicators-priorities">
    <div class="table-list-header"><strong><?= t('agile_indicators.task_priorities') ?></strong>
    </div>
    <div class="agile-row table-border-left agile-bg-red">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('agile_indicators.p1') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('agile_indicators.top_priority') ?></li>
                <li class=""><?= t('agile_indicators.matter_of_urgency') ?></li>
                <li class=""><?= t('agile_indicators.time_constraints') ?></li>
                <li class=""><?= t('agile_indicators.financial_burden') ?></li>
                <li class=""><?= t('agile_indicators.other_restrictions') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-red">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('agile_indicators.p2') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('agile_indicators.priority') ?></li>
                <li class=""><?= t('agile_indicators.important') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-green">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('agile_indicators.p3') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('agile_indicators.work_in_progress') ?></li>
                <li class=""><?= t('agile_indicators.ongoing_development') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-green">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('agile_indicators.p4') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('agile_indicators.low_priority') ?></li>
                <li class=""><?= t('agile_indicators.no_timescale') ?></li>
            </ul>
        </div>
    </div>
    <div class="agile-row table-border-left agile-bg-cream">
        <div class="table-list-details agile-table-list-title">
            <strong><?= t('agile_indicators.p5') ?></strong>
        </div>
        <div class="table-list-details agile-table-list-details">
            <ul class="">
                <li class=""><?= t('agile_indicators.no_priority') ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="table-list agile-indicators-scale agile-indicators-complexities">
    <div class="table-list-header">
        <strong><?= t('agile_indicators.task_complexities') ?></strong>
    </div>
    <div class="agile-indicators-complexity-gradient">
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('agile_indicators.c0_c10') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('agile_indicators.easy_task') ?></li>
                    <li class=""><?= t('agile_indicators.little_effort_required') ?></li>
                    <li class=""><?= t('agile_indicators.no_external_resources') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('agile_indicators.c11_c20') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('agile_indicators.standard_task_complexity') ?></li>
                    <li class=""><?= t('agile_indicators.cost_implications') ?></li>
                    <li class=""><?= t('agile_indicators.local_resources_used') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('agile_indicators.c21_c30') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('agile_indicators.effort_required') ?></li>
                    <li class=""><?= t('agile_indicators.cost_implications') ?></li>
                    <li class=""><?= t('agile_indicators.local_resources_used') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('agile_indicators.c31_c40') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('agile_indicators.considerable_effort_required') ?></li>
                    <li class=""><?= t('agile_indicators.requires_accountability') ?></li>
                    <li class=""><?= t('agile_indicators.requires_tracking') ?></li>
                </ul>
            </div>
        </div>
        <div class="agile-row">
            <div class="table-list-details agile-table-list-title">
                <strong><?= t('agile_indicators.c41_c50') ?></strong>
            </div>
            <div class="table-list-details agile-table-list-details">
                <ul class="">
                    <li class=""><?= t('agile_indicators.serious_physical_effort') ?></li>
                    <li class=""><?= t('agile_indicators.serious_mental_effort') ?></li>
                    <li class=""><?= t('agile_indicators.local_resources_used') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</li>
