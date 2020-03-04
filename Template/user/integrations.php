<h3>Starred Projects</h3>

<div class="panel">
    <input type="hidden" name="starredprojects_only_starred_in_project_selector" value="0">
    <?php echo $this->form->checkbox('starredprojects_only_starred_in_project_selector', t('Show only starred projects in project selector'), 1, $values['starredprojects_only_starred_in_project_selector']); ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?php echo t('Save'); ?></button>
    </div>
</div>
