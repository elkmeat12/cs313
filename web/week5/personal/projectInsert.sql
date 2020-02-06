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
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Bass Pro Shops Tourney Special Casting Rod'
                 , 'Dominate the competition with a Bass Pro Shops Tourney Special Casting Rod, 
                    crafted with premium graphite.'
                 , 49.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Bass Pro Shops Graphite Series Casting Rod'
                 , 'Incredibly tough and extraordinarily sensitive, the Bass Pro Shops Graphite Series 
                    Casting Rod is a versatile, everyday workhorse.'
                 , 34.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Duckett Fishing Incite Casting Rod'
                 , 'With its conventional guide train the Duckett Fishing Incite Casting Rod gives a bass 
                    specialist the option to use braid, fluoro, mono or a combination without the risk of 
                    knots hanging up in the guides.'
                 , 149.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Cabelas DepthMaster Trolling Rod'
                 , 'The DepthMaster Trolling Series Rods feature guides with stainless inserts to reduce 
                    overall rod weight and increase durability.'
                 , 29.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'St. Croiz Eyecon Spinning Rod'
                 , 'When it comes to high-performing, affordable walleye rods, St. Croixs Eyecon Spinning 
                    Rods raise the bar.'
                 , 129.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Shakespeare Ugly Stik Elite Spinning Rod'
                 , 'The Shakespeare Ugly Stik Elite Spinning Rod features Ugly Tech™ construction with 35% more 
                    graphite than the GX2 Ugly Stiks to give anglers a lighter, more sensitive rod, while 
                    retaining the strength and reliability Ugly Stik fishing rods are famous for.'
                 , 49.99);

----------- REELS --------------
INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , 'Pflueger President Spinning Reel'
                 , 'The Pflueger President Spinning Reel continues its reign of 
                    dominance with affordable performance in a class all its own. 
                    With its 10-bearing system (PRESSP20X has seven bearings) and 
                    graphite body and rotor, the President combines smoothness with 
                    lightweight strength in equal measure. Corrosion-resistant stainless 
                    steel and oiled-felt drag delivers consistent drag pressure under 
                    strain. Slow oscillation gearing improves line lay and minimizes 
                    line twist for effortless casting. Thick aluminum bail wire stays 
                    rigid to prevent bending. Durable aircraft-grade aluminum handle 
                    with a soft-touch rubber knob ensures a superior grip in all 
                    conditions. Braid-ready spool eliminates the need for backing.'
                 , 49.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , 'Shimano Stradic FL Spinning Reel'
                 , 'Beefed up and jazzed up, the Shimano Stradic FL Spinning Reel sets a 
                    whole new performance standard for its price point, with extreme 
                    technology representing the latest goodies from Shimano – including 
                    SilentDrive, a total redesign of all moving parts to eliminate noise 
                    and vibration. As always, you get a whisper-smooth, strong and incredibly 
                    durable reel that can match up to any quarry in freshwater, as well as 
                    inshore saltwater. Its ultra-hard Hagane® cold-forged drive gear is now 
                    twice as strong as before. It also combines with Shimanos advanced 
                    MicroModule Gear II and X-Ship pinion gear-support system to ensure perfect 
                    gear mesh at all times, for unflinchingly smooth control and exceptional 
                    durability despite heavy loads. The sleek Hagane body prevents flex during 
                    the fight, X-Protect waterproofing helps maintain system smoothness and 
                    longevity and the high-end Long Stroke Spool makes every cast as long and 
                    accurate as possible. 6 S A-RB shielded stainless steel ball bearings 
                    (plus 1 Super Stopper II Anti Reverse roller bearing) are backed by the 
                    high-efficiency Propulsion Line Management System. Additional performance 
                    features include vibration-eliminating Dyna-Balance®, line-twist-reducing 
                    Power Roller II, SR-Concept and friction-reducing Aero Wrap® II. 
                    3000–5000 sizes feature rugged Cross Carbon drag for enhanced saltwater 
                    performance; 5000 size comes fitted with a power handle.'
                 , 199.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , 'Cabelas Depth Master III Trolling Reel'
                 , 'Cabelas DepthMaster III Trolling Reels handle depth and large, hard-running 
                    fish with ease. Lightweight graphite frame and sideplates are highly durable 
                    for long-lasting use. Mechanical linecounter helps you keep the perfect amount 
                    of line out at all times. Oversized stainless steel levelwind prevents tangles. 
                    Self-lubricating gear system with durable machine-cut brass gearing. Smooth 
                    multidisc drag system. Two stainless steel ball bearings. 15 and 20 sizes have 
                    a stainless steel paddle handle with oversized soft-touch handle knobs. 30 and 
                    45 sizes come with a counterbalanced machined-aluminum handle with a single 
                    oversized handle knob.'
                 , 49.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , 'Shimano SLX Baitcast Reel'
                 , 'An uncommon value, the Shimano SLX Baitcast Reel puts tournament-level 
                    performance in your hands at a fraction of the price some anglers pay. 
                    Shimanos legendary quality is unmistakable in the low-profile SLX, as it 
                    features a palm-friendly, all-metal Hagane® body – extremely tight and rigid, 
                    this design prevents body flex, ensuring smooth, balanced winding with 
                    exceptional cranking power. In addition, the SLX offers the precision of 
                    Shimanos proven VBS® cast control, which uses centrifugal force to vary the 
                    amount of friction applied to the spool during the cast, greatly reducing the 
                    chances of backlashing. Its 3+1 bearing system is lean and efficient, and the 
                    sturdy drag system provides up to 12 lbs. of maximum drag – more than enough 
                    to turn any bass headed for cover. Extended handle for extra cranking power.'
                 , 99.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , 'Abu Garcia Abumatic 170 Spincast Reel'
                 , 'Spincasting is not just for breakfast anymore. The Abu Garcia Abumatic 170 Spincast 
                    Reel has been beefed up with features you would normally see only in a premium baitcaster. 
                    Now, you have that same high level of performance, plus the no-hassle convenience of a 
                    spincaster. Major upgrades include Abu Garcias ultrasmooth, ultra-strong Carbon Matrix™ 
                    drag system, Authentic Duragear™ brass gearing, aluminum-diecast front cone and machined 
                    body, oscillating far-cast spool that eliminates line twist on both the cast and the retrieve, 
                    and 4-bearing system with 3 ball bearings + 1 instant anti-reverse roller bearing. Smooth, 
                    powerful, quiet, and durable. Pre-spooled with 12-lb. Berkley® Trilene® XL® monofilament.'
                 , 49.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 2
                 , 'Abu Garcia Altum Digital Linecounter Reel'
                 , 'The Abu Garcia Altum Digital Linecounter Reel incorporates a highly adjustable 
                    Syncro™ drag system that decreases drag pressure by 50% with just 1/3 of a crank 
                    of the handle counterclockwise. It is especially useful when fishing with downriggers, 
                    as it allows bait to be dropped easily without disengaging the reel. Lighted digital 
                    linecounter provides greater accuracy thanks to the line diameter adjustability. 
                    Two stainless steel ball bearings provide smooth operation. Graphite frame and 
                    sideplates, along with a machined aluminum spool, keep weight down without sacrificing 
                    durability. Carbon Matrix™ drag system gives smooth, consistent drag pressure across 
                    the entire drag range. Extended throw paddle handle for increased power. Duragear™ 
                    brass gear prolongs gear and reel life.'
                 , 119.99);

----------- LINE ---------------
INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , 'Crappie Maxx Camo Fishing Line'
                 , 'Crappie Maxxs Camo Fishing Line is camouflaged to be undetectable in 
                    any color water, yet its fluorescent stripe can be seen easily above
                     water. It is soft and supple with low memory for easy casting. Plus, 
                     it features high-abrasion resistance and excellent knot strength. 
                     1/4-lb. spool.'
                 , 5.00);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , 'Crappie Maxx Super Vis Fishing Line'
                 , 'Crappie Maxxs Super Vis Fishing Line is great for dawn, dusk, or night 
                    fishing. Bright yellow-green color practically glows in low-light conditions 
                    so you can see even the lightest twitch. 1/4-lb. spool.'
                 , 5.00);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , 'Bass Pro Shops Excel Fluorocarbon Fishing Line'
                 , 'Bass Pro Shops® Excel® Fluorocarbon brings you all the benefits of fishing with 100% 
                    fluorocarbon line at an amazing price. Not a polymer, not a knockoff, Excel Fluoro 
                    performs well both as a main line and as leader material. Because it is 100% fluorocarbon, 
                    it features a non-reflective finish that is virtually invisible underwater, has very little 
                    stretch, is highly abrasion-resistant and boasts superior knot and tensile strength. For 
                    the angler who has always wanted to try a true fluoro line or has been disappointed with 
                    the polymers, Excel Fluorocarbon Fishing Line offers an affordable way to get up to speed 
                    on the advantages of fishing with pure fluorocarbon! 150- or 200-yd. spools'
                 , 7.50);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , 'Berkley Trilene Professional Grade 100% Fluorocarbon Line'
                 , 'Berkley Trilene Professional Grade 100% Fluorocarbon Line is a past Bassmaster Classic® 
                    Championship winner. As the name says, it is made of top-quality 100% fluorocarbon, so 
                    it is virtually invisible to the fish – ideal for stealth and finesse techniques. Boasts 
                    an extra-high strength-to-diameter ratio with incredible impact strength and low memory 
                    for smooth casting and trouble-free presentations.'
                 , 17.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , 'PowerPro Super 8 Slick V2 Braided Line'
                 , 'Re-crafted with an advanced eight-end, extra-dense weave, PowerPros Super 8 
                    Slick V2 Braid is the next generation of the original SuperSlick long-casting 
                    braided line. This tighter, tougher version retains the proven EBT coating 
                    process for the ultimate in smooth, quiet castability, while its compact 
                    construction delivers even greater power for ripping baits through dense weeds 
                    and brushy cover. Super-strong, abrasion-resistant 100% Spectra® fiber offers 
                    the sensitivity and strength needed to win the war of trophy bass and inshore 
                    game fish.'
                 , 27.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 3
                 , 'Spiderwire Ultracast Invisi-Braid'
                 , 'Many call Spiderwire Ultracast Invisi-Braid the finest fishing line ever made. 
                    Unlike other braids, Ultracast requires no break-in period – it is limp and 
                    ready to fish right from the start. What is more, it is stronger, smoother, 
                    and much more durable than competing lines, while still incredibly thin and 
                    sensitive. Spiderwire outcasts and outlasts the rest 125-yard spool.'
                 , 17.99);

----------- TACKLE --------------
INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , 'Gamakatsu Octopus Hooks'
                 , 'The sticky sharpness of Gamakatsu hooks is the result of a patented 
                    mechanical needle-honing process developed to make the sharpest hooks 
                    possible. And a unique tempering process and high-carbon steel 
                    construction ensures superior strength and durability. Octopus hooks 
                    are popular for salmon, steelhead and walleye.'
                 , 8.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , 'TroKar EWG Worm Hook Kit'
                 , 'Trokars EWG Worm Hook Kit will help you turn more bites into hookups. This 
                    ready-to-fish assortment gives you the most oft-used sizes of both the 
                    standard and heavy-duty Trokar Magworm Extra-Wide Gap styles, so you can 
                    quickly adapt to different baits and conditions. Both styles are surgically 
                    sharpened, requiring only half the penetration force of any other hook, to maximize your advantage. Tempered, cold-forged high-carbon steel construction; ultra-sharp 3-sided hook point; low-profile barb design.'
                 , 14.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , 'Ultra Steel 2000 Bullet Sinkers'
                 , 'Unlike any other sinker, Ultra Steel 2000 offers greater sensitivity and feel, improved snag resistance and is priced like lead.'
                 , 11.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 4
                 , 'Rainbow Plastics Quick Float'
                 , 'The Rainbow Plastics Quick Float is an easy-on, easy-off casting float that allows you to spend more 
                    time fishing and less time setting up! Made from rugged plastic, this high-quality Quick Float gets 
                    its name from the way it can be quickly and easily attached to your fishing line, with no cutting 
                    or line damage. To facilitate even greater casting distances, the Quick Float is also water fillable.'
                 , 5.29);

----------- BAIT ---------------
INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Mepps Dressed Agilia Spinner'
                 , 'Tied with either genuine bucktail or squirrel tail and feature a natural bright red turkey quill for additional attraction.'
                 , 5.29);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Wordens Original Rooster Tail'
                 , 'Developed in the 1950s by Howard Worden, the Wordens Original Rooster Tail inline 
                    spinner is one of the most productive lures ever invented. The action of the flashing 
                    blade in combination with the colorful, pulsating hackle tail makes the Rooster Tail 
                    irresistible to any game fish. Anglers across North America and abroad use Rooster 
                    Tails successfully to take trophy trout, bass, perch, crappie and more.'
                 , 1.64);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Panther Martin Original Spinner Single-Pack'
                 , 'The one and only original Panther Martin spinners have been proven on all 
                    sizes and species of fish. The unique, spinning convex/concave blade creates 
                    great fish-attracting vibration.'
                 , 4.29);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Panther Martin Fly Spinner'
                 , 'Cast or trolled, the Panther Martin Fly Spinner runs true and is easily 
                    one of the greatest fish catchers of all time. Effective in lakes, rivers, 
                    and streams, Panther Martin Fly Spinner is truly effective on many species 
                    of fish. The barrel shaped bodies and dressed tails add extra bulk and color 
                    attraction.'
                 , 4.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Acme Little Cleo Spoon'
                 , 'Little Cleo spoons have been an angler staple for over 30 years. Proven deadly 
                    on salmon, steelhead, trout, and a variety of other predatory game fish including 
                    pike, bass, and walleye. A unique hump-backed shape results in a seductive wiggling 
                    action that triggers strikes. Whether you’re an ultralight spin angler or choose 
                    to pursue larger fish, there is a Little Cleo to meet your needs.'
                 , 3.59);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Lunker City Slug-Go Lures'
                 , 'The lure that started the soft stickbait revolution, Lunker Citys Slug-Go is precisely 
                    balanced to imitate an erratic injured baitfish action that draws instinctive strikes 
                    from a wide variety of predatory fish. It is this unbeatable action that makes the versatile 
                    Slug-Go so effective in both freshwater and saltwater. While other baits rely on a repetitive 
                    wiggle or action of their own, the Slug-Go is responsive to the rod action of the angler 
                    fishing it. You can pitch it weightless into heavy vegetation without hanging up, or use 
                    it on a Carolina rig to work it off the bottom. This unique soft stickbait will, without 
                    a doubt, take your game to the next level.'
                 , 5.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 5
                 , 'Berkley Flicker Shad Crankbaits'
                 , 'Designed by pros for optimal action, the Berkley Flicker Shad has a unique rattle and extra-sharp black-nickel hooks for solid hooksets.'
                 , 2.88);