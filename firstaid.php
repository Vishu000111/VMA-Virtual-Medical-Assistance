<?php require "partials/header.php" ?>
<link rel="stylesheet" href="firstaid.css?v=<?= time(); ?>" />
</head>

<body>
    <div class="head">
        <?php
        require "partials/navbar.php";
        ?>
        <div id="main">
            <center>
                <h2 class="heading">First Aid and Emergencies</h2>
            </center><br>
            <div class="first-aid-content">
                <h1>First Aid Kits</h1>
                <p>Almost everyone will need to use a first aid kit at some time. Make time to prepare home and travel kits for your
                    family’s safety. First aid kits may be basic or comprehensive. What you need depends on your medical training and your
                    distance from professional medical help. Ready-made first aid kits are commercially available from chain stores or
                    outdoor retailers, but it’s easy to make smart, inexpensive first aid kits yourself.
                </p>
            </div>
        </div>
    </div>
    <div class="home-first-aid">
        <h1>Home and Travel First Aid Kit Basics</h1>

        <p>Home first aid kits are usually used for treating these types of minor traumatic injuries:</p>
        <ul>
            <li>Burns</li>
            <li>Cuts</li>
            <li>Abrasions(scrapes)</li>
            <li>Stings</li>
            <li>Splinters</li>
            <li>Sprains</li>
            <li>Strains</li>
        </ul>
        <img src="images/first aid.jpg" alt="first aid kit" style="float: right;margin: 20px;" height="400px" width="400px">
        <p>First aid kits for travel need to be more comprehensive because a drug store may or may not be accessible. In addition
            to personal medical items, the kit should contain items to help alleviate the common symptoms of viral respiratory
            infections such as these:</p>
        <ul>
            <li>Fever</li>
            <li>Nasal Congestion</li>
            <li>Cough</li>
            <li>Sore Throat</li>
        </ul>
        <p>It should also contain items to treat these ailments:</p>
        <ul>
            <li>Cuts</li>
            <li>Mild pain</li>
            <li>Gastrointestinal problems</li>
            <li>Skin problems</li>
            <li>Allergies</li>
        </ul><br>
    </div>
    <div class="home-first-aid" style="background: #cccccc;">
        <h1>Make Your Own First Aid Kit</h1>

        <p>Try to keep your kit small and simple. Stock it with multi-use items. Almost anything that provides good visibility of
            contents can be used for a household first aid kit.</p>
        <img src="images/firstaidkit.jpg" alt="first aid kit" style="float: right;margin: 20px;" height="400px" width="400px">
        <ul>
            <li>If your kit will be on the move, a water-resistant, drop-proof container is best.</li>
            <li>Inexpensive nylon bags, personal kits, fanny packs, or makeup cases serve very well.</li>
            <li>You do not need to spend a lot of money on a fancy "medical bag." Use re-sealable sandwich or oven bags to group and
                compartmentalize items.</li>
            <li>Put wound supplies in one bag and medications in another.</li>
        </ul>
        <br>
        <h1>How to Use a First Aid Kit</h1>
        <p>Make sure you know how to properly use all of the items in your kit, especially the medications. Train others in your
            family to use the kit. You may be the one who needs first aid.</p>
        <p>Pack and use barrier items such as latex gloves to protect yourself from the bodily fluids of others. Check the kit
            twice a year and replace expired drugs. Find out the phone number of your regional poison control center at the American
            Association of Poison Control Centers Web site and keep the number with your kit.</p>
        <br>
        <p>Where to keep your first aid kit:</p>
        <ul>
            <li>The best place to keep your first aid kit is in the kitchen. Most family activities take place here. The bathroom has
                too much humidity, which shortens the shelf life of items.</li><br>
            <li>The travel kit is for true trips away from home. Keep it in a suitcase, backpack, or dry bag, depending on the activity.</li><br>
            <li>A first aid kit for everyday use in the car should be just like the home first aid kit. For that matter, you could keep
                similar kits in your boat (inside a waterproof bag), travel trailer, mobile home, camper, cabin, vacation home, and
                wherever you spend time.</li><br>
        </ul>
    </div>
    <?php
    require "partials/footer.php"
    ?>
</body>

</html>