-- ----------------------------------------------- --
-- --------- POPULATE THE CATEGORY TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO category (category_name) VALUES ('Rod');
INSERT INTO category (category_name) VALUES ('Reel');
INSERT INTO category (category_name) VALUES ('Line');
INSERT INTO category (category_name) VALUES ('Tackle');


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
                    crafted with premium graphite. Remarkably powerful yet incredibly responsive, 
                    these tournament fishing rods are built on a high-grade, RT2 graphite blank 
                    that has a unique fiber layering pattern designed to reduce weight and improve 
                    sensitivity. RT2 built rods offer sound, reliable performance to anglers of all 
                    skill levels. Lightweight 304 stainless steel guides with stainless steel inserts 
                    provide unhindered line flow in either direction. Tourney Special Casting Rod 
                    features exclusive low-profile reel seats for maximum sensitivity, an EVA handle, 
                    and a multipurpose hook keeper.'
                 , 49.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Bass Pro Shops Graphite Series Casting Rod'
                 , 'Incredibly tough and extraordinarily sensitive, the Bass Pro Shops Graphite Series 
                    Casting Rod is a versatile, everyday workhorse. The blank is constructed of RT1 
                    graphite, a strong and dependable formula that offers excellent value without 
                    sacrificing performance. Stainless steel guides with aluminum oxide inserts hold 
                    up to hard use and minimize line friction. A graphite reel seat with a screw-down, 
                    cushioned stainless steel hood keeps reel securely in place during long days on rough 
                    water. Full cork grips provide a nonslip hold in wet conditions, and a minimal foregrip 
                    helps reduce overall weight and enhance balance. This rod casts far, sets hooks deep, 
                    and holds up to hard fighting fish as well as rough use in boats and along shore.'
                 , 34.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Duckett Fishing Incite Casting Rod'
                 , 'With its conventional guide train the Duckett Fishing Incite Casting Rod gives a bass 
                    specialist the option to use braid, fluoro, mono or a combination without the risk of 
                    knots hanging up in the guides. This is an advanced rod in every way, incredibly strong, 
                    but light and sensitive for exceptional handling with many key techniques. Its advanced 
                    Sensi-Touch™ multi-modulus graphite blank is reinforced with carbon fiber scrim and 
                    Halo-Sanded™ for a feather-light feel in the hand with full knockdown power. Fitted with 
                    proprietary Kigan Artus 316 stainless steel ring lock guides and braid-proof Hyper-lite 
                    inserts, a custom true split reel seat for direct-to-hand vibration transmission and a 
                    high-impact EVA butt with premium AAA cork grip.'
                 , 149.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Cabelas DepthMaster Trolling Rod'
                 , 'The DepthMaster Trolling Series Rods feature guides with stainless inserts to reduce 
                    overall rod weight and increase durability. The gloss-black blanks are made of a durable 
                    graphite composite with just the right amount of flex and power for trolling. The wide 
                    variety of actions available covers most trolling applications. These rods come with EVA 
                    foam grips for years of use in and out of a rod holder. There are models made for 
                    downrigging, for pulling planer boards, for lead core and for general trolling.'
                 , 29.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'St. Croiz Eyecon Spinning Rod'
                 , 'When it comes to high-performing, affordable walleye rods, St. Croixs Eyecon Spinning 
                    Rods raise the bar. Built on premium-quality SCII graphite blanks with technique-specific 
                    actions perfectly tuned for most walleye-fishing applications, the St. Croix Eyecon Walleye 
                    Spinning Rods are prime walleye whackin weapons. Outfitted with Batson Forecast® hard 
                    aluminum-oxide guides with double-plated black chrome frames, Fuji IPS reel seat with black 
                    hood and split-grip/premium-grade cork handles with EVA trim, the Eyecon Walleye Rods are 
                    complete with two coats of Flex Coat slow-cure finish for durability and to ensure every 
                    Eyecon looks as good as it fishes'
                 , 129.99);

INSERT INTO item ( category_id
                 , item_name
                 , item_description
                 , price)
          VALUES ( 1
                 , 'Shakespeare Ugly Stik Elite Spinning Rod'
                 , 'The Shakespeare Ugly Stik Elite Spinning Rod features Ugly Tech™ construction with 35% more 
                    graphite than the GX2 Ugly Stiks to give anglers a lighter, more sensitive rod, while 
                    retaining the strength and reliability Ugly Stik fishing rods are famous for. The Ugly Tuff™ 
                    1-piece stainless steel guides are superslick, so line flows through smoothly, while providing 
                    maximum durability and eliminating insert pop-outs. The Elite rod blank is finished off with 
                    Ugly Stiks signature Clear Tip® fiberglass tip that delivers extra strength right where you 
                    need it. Exposed blank-style reel seats with cushioned stainless steel hoods hold reel in place 
                    securely, while increasing anglers contact with the blank. The Ugly Stik Elite Spinning Rod uses 
                    premium cork grips to provide a comfortable and sure hold, even in wet conditions.'
                 , 49.99);

----------- REELS ---------------
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