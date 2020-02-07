-- ----------------------------------------------- --
-- --------- POPULATE THE CATEGORY TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO category (category_name) VALUES ('Rod');
INSERT INTO category (category_name) VALUES ('Reel');
INSERT INTO category (category_name) VALUES ('Line');
INSERT INTO category (category_name) VALUES ('Tackle');
INSERT INTO category (category_name) VALUES ('Bait');


-- ----------------------------------------------- --
-- --------- POPULATE THE ITEM TABLE --------- --
-- ----------------------------------------------- --

----------- RODS ---------------
INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , '\week5\personal\images\rod1.jpg'
                 , 'Bass Pro Shops Tourney Special Casting Rod'
                 , 'Dominate the competition with a Bass Pro Shops Tourney Special Casting Rod, 
                    crafted with premium graphite.'
                 , 49.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , '\week5\personal\images\rod2.jpg'
                 , 'Bass Pro Shops Graphite Series Casting Rod'
                 , 'Incredibly tough and extraordinarily sensitive, the Bass Pro Shops Graphite Series 
                    Casting Rod is a versatile, everyday workhorse.'
                 , 34.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , '\week5\personal\images\rod3.jpg'
                 , 'Duckett Fishing Incite Casting Rod'
                 , 'With its conventional guide train the Duckett Fishing Incite Casting Rod gives a bass 
                    specialist the option to use braid, fluoro, mono or a combination without the risk of 
                    knots hanging up in the guides.'
                 , 149.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , '\week5\personal\images\rod4.jpg'
                 , 'Cabelas DepthMaster Trolling Rod'
                 , 'The DepthMaster Trolling Series Rods feature guides with stainless inserts to reduce 
                    overall rod weight and increase durability.'
                 , 29.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , '\week5\personal\images\rod5.jpg'
                 , 'St. Croiz Eyecon Spinning Rod'
                 , 'When it comes to high-performing, affordable walleye rods, St. Croixs Eyecon Spinning 
                    Rods raise the bar.'
                 , 129.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , '\week5\personal\images\rod6.jpg'
                 , 'Shakespeare Ugly Stik Elite Spinning Rod'
                 , 'The Shakespeare Ugly Stik Elite Spinning Rod features Ugly Tech™ construction with 35% more 
                    graphite than the GX2 Ugly Stiks to give anglers a lighter, more sensitive rod, while 
                    retaining the strength and reliability Ugly Stik fishing rods are famous for.'
                 , 49.99);

----------- REELS --------------
INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , '\week5\personal\images\reel1.jpg'
                 , 'Pflueger President Spinning Reel'
                 , 'The Pflueger President Spinning Reel continues its reign of 
                    dominance with affordable performance.'
                 , 49.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , '\week5\personal\images\reel2.jpg'
                 , 'Shimano Stradic FL Spinning Reel'
                 , 'Beefed up and jazzed up, the Shimano Stradic FL Spinning Reel sets a 
                    whole new performance standard for its price point.'
                 , 199.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , '\week5\personal\images\reel3.jpg'
                 , 'Cabelas Depth Master III Trolling Reel'
                 , 'Cabelas DepthMaster III Trolling Reels handle depth and large, hard-running 
                    fish with ease.'
                 , 49.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , '\week5\personal\images\reel4.jpg'
                 , 'Shimano SLX Baitcast Reel'
                 , 'An uncommon value, the Shimano SLX Baitcast Reel puts tournament-level 
                    performance in your hands at a fraction of the price some anglers pay.'
                 , 99.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , '\week5\personal\images\reel5.jpg'
                 , 'Abu Garcia Abumatic 170 Spincast Reel'
                 , 'The Abu Garcia Abumatic 170 Spincast Reel has been beefed up with features you would normally see only in a premium baitcaster.'
                 , 49.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , '\week5\personal\images\reel6.jpg'
                 , 'Abu Garcia Altum Digital Linecounter Reel'
                 , 'The Abu Garcia Altum Digital Linecounter Reel is especially useful when fishing with downriggers, 
                    as it allows bait to be dropped easily without disengaging the reel.'
                 , 119.99);

----------- LINE ---------------
INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , '\week5\personal\images\line1.jpg'
                 , 'Crappie Maxx Camo Fishing Line'
                 , 'Crappie Maxxs Camo Fishing Line is camouflaged to be undetectable in 
                    any color water, yet its fluorescent stripe can be seen easily above
                     water.'
                 , 5.00);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , '\week5\personal\images\line2.jpg'
                 , 'Crappie Maxx Super Vis Fishing Line'
                 , 'Crappie Maxxs Super Vis Fishing Line is great for dawn, dusk, or night 
                    fishing.'
                 , 5.00);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , '\week5\personal\images\line3.jpg'
                 , 'Bass Pro Shops Excel Fluorocarbon Fishing Line'
                 , 'Bass Pro Shops® Excel® Fluorocarbon brings you all the benefits of fishing with 100% 
                    fluorocarbon line at an amazing price.'
                 , 7.50);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , '\week5\personal\images\line4.jpg'
                 , 'Berkley Trilene Professional Grade 100% Fluorocarbon Line'
                 , 'Berkley Trilene Professional Grade 100% Fluorocarbon Line is a past Bassmaster Classic® 
                    Championship winner.'
                 , 17.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , '\week5\personal\images\line5.jpg'
                 , 'PowerPro Super 8 Slick V2 Braided Line'
                 , 'Re-crafted with an advanced eight-end, extra-dense weave, PowerPros Super 8 
                    Slick V2 Braid is the next generation of the original SuperSlick long-casting 
                    braided line.'
                 , 27.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , '\week5\personal\images\line6.jpg'
                 , 'Spiderwire Ultracast Invisi-Braid'
                 , 'Many call Spiderwire Ultracast Invisi-Braid the finest fishing line ever made.'
                 , 17.99);

----------- TACKLE --------------
INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , '\week5\personal\images\tackle1.jpg'
                 , 'Gamakatsu Octopus Hooks'
                 , 'The sticky sharpness of Gamakatsu hooks is the result of a patented 
                    mechanical needle-honing process developed to make the sharpest hooks 
                    possible.'
                 , 8.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , '\week5\personal\images\tackle2.jpg'
                 , 'TroKar EWG Worm Hook Kit'
                 , 'Trokars EWG Worm Hook Kit will help you turn more bites into hookups.'
                 , 14.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , '\week5\personal\images\tackle3.jpg'
                 , 'Ultra Steel 2000 Bullet Sinkers'
                 , 'Unlike any other sinker, Ultra Steel 2000 offers greater sensitivity and feel, improved snag resistance and is priced like lead.'
                 , 11.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , '\week5\personal\images\tackle4.jpg'
                 , 'Rainbow Plastics Quick Float'
                 , 'The Rainbow Plastics Quick Float is an easy-on, easy-off casting float that allows you to spend more 
                    time fishing and less time setting up!'
                 , 5.29);

----------- BAIT ---------------
INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait1.jpg'
                 , 'Mepps Dressed Agilia Spinner'
                 , 'Tied with either genuine bucktail or squirrel tail and feature a natural bright red turkey quill for additional attraction.'
                 , 5.29);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait2.jpg'
                 , 'Wordens Original Rooster Tail'
                 , 'Developed in the 1950s by Howard Worden, the Wordens Original Rooster Tail inline 
                    spinner is one of the most productive lures ever invented.'
                 , 1.64);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait3.jpg'
                 , 'Panther Martin Original Spinner Single-Pack'
                 , 'The one and only original Panther Martin spinners have been proven on all 
                    sizes and species of fish.'
                 , 4.29);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait4.jpg'
                 , 'Panther Martin Fly Spinner'
                 , 'Cast or trolled, the Panther Martin Fly Spinner runs true and is easily 
                    one of the greatest fish catchers of all time.'
                 , 4.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait5.jpg'
                 , 'Acme Little Cleo Spoon'
                 , 'Little Cleo spoons have been an angler staple for over 30 years.'
                 , 3.59);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait6.jpg'
                 , 'Lunker City Slug-Go Lures'
                 , 'The lure that started the soft stickbait revolution, Lunker Citys Slug-Go is precisely 
                    balanced to imitate an erratic injured baitfish action that draws instinctive strikes 
                    from a wide variety of predatory fish.'
                 , 5.99);

INSERT INTO item ( category_id
                 , image
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , '\week5\personal\images\bait7.jpg'
                 , 'Berkley Flicker Shad Crankbaits'
                 , 'Designed by pros for optimal action, the Berkley Flicker Shad has a unique rattle and extra-sharp black-nickel hooks for solid hooksets.'
                 , 2.88);