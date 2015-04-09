<style>
    li.error {
        border-top-color: #dd4b39 !important;
    }
</style>
<ul class="nav nav-tabs">
<?php $i = 0; ?>
<?php foreach (LaravelLocalization::getSupportedLocales() as $locale => $language): ?>
    <?php $i++; ?>
    <?php $class = ''; ?>
    <?php if (isset($fields)): ?>
        <?php foreach($fields as $field): ?>
            <?php $class = $errors->has("{$locale}.{$field}") ? 'error' : '' ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <li class="{{ App::getLocale() == $locale ? 'active' : '' }} {{ $class }}">
        <a href="#tab_{{ $i }}" data-toggle="tab">{{ trans('core::core.tab.'. strtolower($language['name'])) }}</a>
    </li>
<?php endforeach; ?>
</ul>
