<div class="col-sm-6 col-lg-4 mb-4 card-div">
    <div class="card">
        <?php echo $type === "Cat" ? '<img src="images/card/3.jpg" />' : '<img src="images/card/2.jpg" />' ?>
        <div class="card-body">
            <h3 class="card-title pet-title" style="text-align: center">
                <?php $pet[12] ?></h3>
            <ul>
                <li>
                    <h5 class="card-title"><?php echo $pet[4] . ' ' . $pet[2] ?></h5>
                </li>
                <li>
                    <h5 class="card-title"><?php echo $pet[3] ?> years old</h5>
                </li>
                <li>
                    <h5 class="card-title"><?php echo $pet[5] ?></h5>
                </li>
                <li>
                    <h5 class="card-title"><?php echo $pet[6] ?></h5>
                </li>
                <li>
                    <h5 class="card-title"><?php echo $pet[7] ?></h5>
                </li>
            </ul>
            <p class="card-text"><?php echo $pet[8] ?></p>
            <button type="button" class="btn btn-outline-primary card-button">
                Interested
            </button>
        </div>
    </div>
</div>