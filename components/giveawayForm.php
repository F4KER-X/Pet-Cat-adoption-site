<div class="form">
    <form id="giveAway" onsubmit="return validateGiveAway()" method="post" action="giveAway.php">
        <div class="formSelect">
            <p class="formTitle">
                If you are considering giving away your pet, we understand that
                this can be a difficult decision. However, it's important to
                make sure that your pet is placed in a safe and loving home. By
                filling out the form below, you will help us gather important
                information about your pet and its needs, so that we can match
                it with the right family. This will help ensure a smooth
                transition for your pet and give it the best chance of finding a
                happy and healthy new home.
            </p>
        </div>
        <div class="formSelect">
            <label for="type">Type of Pet</label>
            <select class="form-control" id="type" name="type">
                <option value="" selected>Choose</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
            </select>
        </div>
        <div class="formSelect">
            <label for="breed">Breed of dog or cat</label>
            <select class="form-control" id="breed" name="breed">
                <option value="" selected>Choose</option>
                <option value="German Shepherd Dog">German Shepherd Dog</option>
                <option value="Bulldog Dog">Bulldog Dog</option>
                <option value="Golden Retriever Dog">Golden Retriever Dog</option>
                <option value="Poodle Dog">Poodle Dog</option>
                <option value="Siamese Cat">Siamese Cat</option>
                <option value="British Shorthair Cat">British Shorthair Cat</option>
                <option value="Persian Cat">Persian Cat</option>
                <option value="Sphynx Cat">Sphynx Cat</option>
                <option value="Mixed breed">Mixed breed</option>
                <option value="Other breed">Other breed</option>
            </select>
        </div>
        <div class="formSelect">
            <label for="age">Age of pet</label>
            <select class="form-control" id="age" name="age">
                <option value="" selected>Choose</option>
                <option value="0-5">0-5</option>
                <option value="6-10">6-10</option>
                <option value="10-15">10-15</option>
                <option value="More than 15">More than 15</option>
            </select>
        </div>
        <div class="formSelect">
            <label for="gender">Pet gender</label>
            <select class="form-control" id="gender" name="gender">
                <option value="" selected>Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="formSelect">
            <div style="margin-top: 15px">
                <label>Does it get along with other Dogs?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="getalongD" id="yesD"
                    value="Gets along with other Dogs" />
                <label class="form-check-label" for="yesD">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="getalongD" id="noD"
                    value="Doesn't get along with other Dogs" />
                <label class="form-check-label" for="noD">No</label>
            </div>
        </div>
        <div class="formSelect">
            <div style="margin-top: 15px">
                <label>Does it get along with other Cats?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="getalongC" id="yesC"
                    value="Gets along with other Cats" />
                <label class="form-check-label" for="yesC">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="getalongC" id="noC"
                    value="Doesn't get along with other Cats" />
                <label class="form-check-label" for="noC">No</label>
            </div>
        </div>
        <div class="formSelect">
            <div style="margin-top: 15px">
                <label>Suitable for a family with small children?</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="getalongChild" id="yeschild"
                    value="Gets along with small children" />
                <label class="form-check-label" for="yeschild">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="getalongChild" id="nochild"
                    value="Doesn't get along with small children" />
                <label class="form-check-label" for="nochild">No</label>
            </div>
        </div>
        <div class="form-group formSelect">
            <label for="formControlTextarea">Any additional comments: </label>
            <textarea class="form-control" id="formControlTextarea" rows="3" style="resize: none"
                name="formControlTextarea"></textarea>
        </div>
        <div class="row formSelect">
            <div class="col">
                <input type="text" class="form-control" id="fname" placeholder="First name" name="fname" />
            </div>
            <div class="col">
                <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" />
            </div>
        </div>
        <div class="form-group row formSelect">
            <div class="col">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"
                    data-toggle="tooltip" data-placement="bottom" title="Please provide a valid email address." />
                <div class="invalid-tooltip">
                    Please provide a valid email address.
                </div>
            </div>
            <div class="col">
                <input type="text" class="form-control" id="petName" placeholder="Pet's name" name="petName" />
            </div>
        </div>
        <div class="formSelect btns" style="margin-top: 35px;">
            <input class="btn btn-outline-primary" type="submit" value="Submit" id="submit" name="giveawaySubmit" />
            <input class="btn btn-outline-secondary" type="reset" value="Reset" id="reset" />
        </div>

    </form>
</div>