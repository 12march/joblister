<?php include 'inc/header.php'; ?>

<h2 class="page-header">Create Job Listing </h2>

<form action="create.php" method="post">
    <div class="form-group">
       <label>Company</label>
        <input type="text" class="form-control" name="company" required>
    </div>
    
    <div class="form-group">
       <label>Company</label>
        <select type="text" class="form-control" name="category_id" required>
            <option value="0">Choose category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group">
       <label>Job Title</label>
        <input type="text" class="form-control" name="job_title" required>
    </div>
    
    <div class="form-group">
       <label>Description</label>
        <textarea type="text" class="form-control" name="description" required></textarea>
    </div>
    
    <div class="form-group">
       <label>Location</label>
        <input type="text" class="form-control" name="location" required>
    </div>
    
    <div class="form-group">
       <label>Salary</label>
        <input type="text" class="form-control" name="salary" required>
    </div>
    
    <div class="form-group">
       <label>Contact User</label>
        <input type="text" class="form-control" name="contact_user" required>
    </div>
    
    <div class="form-group">
       <label>Contact Email</label>
        <input type="text" class="form-control" name="contact_email" required>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </div>
</form>

<?php include 'inc/footer.php'; ?>