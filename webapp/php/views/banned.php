<div>
  <form method="post" action="/admin/banned">
    <?php foreach ($users as $u) : ?>
      <div>
        <input type="checkbox" name="uid[]" id="uid_<?= escape_html($u['id']) ?>" value="<?= escape_html($u['id']) ?>" data-account-name="<?= escape_html($u['account_name']) ?>"> <label for="uid_<?= escape_html($u['id']) ?>"><?= escape_html($u['account_name']) ?></label>
      </div>
    <?php endforeach ?>
    <div class="form-submit">
      <input type="hidden" name="csrf_token" value="<?= escape_html(session_id()) ?>">
      <input type="submit" name="submit" value="submit">
    </div>
  </form>
</div>
