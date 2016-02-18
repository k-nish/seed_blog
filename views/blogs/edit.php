<div class="msg">
  <form method="post" action="/seed_blog/blogs/update/<?php echo $this->editOption['id']; ?>" class="form-horizontal" role="form">
    <div class="form-group">
      <label for="name" class="col-md-3 control-label">タイトル</label>
      <div class="col-md-9">
        <input type="text" class="form-control" name="title" value="<?php echo $this->editOption['title']; ?>"></input>
      </div>
    </div>
    <div class="form-group">
      <label for="name" class="col-md-3 control-label">本文</label>
      <div class="col-md-9">
        <textarea name="body" class="form-control" cols="30" rows="5"><?php echo $this->editOption['body'] ?></textarea>
      </div>
    </div>
    <div class="form-group pull-right">
      <p>
        <a href="/seed_blog/blogs/index/" class="btn btn-default">戻る</a>&nbsp;&nbsp;
        <!-- <a href="/seed_blog/blogs/update/<?php echo $this->editOption['id']; ?>" class="btn btn-danger">更新する</a> -->
        <input type="submit" class="btn btn-success" value="更新する">
      </p>
    </div>
  </form>
</div>