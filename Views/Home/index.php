
<?php
echo "<b>$xvar</b>";
?>

<div>
<form method='post' action='/Final/home/show'>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

