<?php include 'inc/header.php'; ?>

<div class="jumbotron">
    <h1>Find A Job</h1>
    <form method="GET" action="index.php">
        <select name="category" class="form-control">
            <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Find">
    </form>
</div>

<h3><?= $title; ?></h3>

<?php foreach($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?= $job->job_title ?></h4>
            <p><?= $job->description ?></p>
        </div>

        <div class="col-md-2">
            <a href="job.php?id=<?= $job->id; ?>" class="btn btn-primary">View</a>
        </div>
    </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>