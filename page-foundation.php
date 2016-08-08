<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['teamimages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/giustina.png', 'jobDescription'=>'Giustina, holds an Msc in Management (Innovation in Social Enterprise) from DCU, and an MA in International Politics and Human Rights from City University London. An avid technology fan, she managed the Irish operations of Dogpatch Labs, a co-working space for startup technology companies prior to joining CoderDojo as its first employee. Previously she has volunteered with the British Red Cross Refugee Services, Ashoka, and Social Entrepreneurs Ireland.', 'id'=>'1',
                         'name'=>'Giustina Mizzoni', 'role'=>'Executive Director', 'linkedin'=>'https://ie.linkedin.com/in/giustinamizzoni', 'twitter'=>'https://twitter.com/GiustinaMizzoni'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/foundation/pete.png', 'jobDescription'=>'Pete has a background in marketing, technology, teaching and music. He previously worked as a digital marketing strategist and social media manager for a Dublin based music tech start-up. Inspired by teaching and fuelled by an interest in technology, he has moved his focus to supporting the CoderDojo movement with the CoderDojo Foundation. In his spare time when not helping out at a Dojo, Pete teaches drums to young people and also tours with several bands.', 'id'=>'2',
                          'name'=>'Peter O\'Shea', 'role'=>'Community (EMEA) & Events Lead', 'linkedin'=>'https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=0ahUKEwiv0quTg-vNAhXDJsAKHQV8AswQFggdMAE&url=https%3A%2F%2Fie.linkedin.com%2Fin%2Fpeteroshea1&usg=AFQjCNFAJRq7qAPSw7_75ru2cTd-4kTHfQ&sig2=9XOAQmflyJl2tsEibCu5Ig', 'twitter'=>'https://twitter.com/peter0shea '],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/ross.png', 'jobDescription'=>'Ross graduated from the Dublin Institute of Technology where he studied Computing Science. Ross is frequently published as a freelance financial technology & data journalist for the Sunday Business Post and is a member of the Technology Journalist Association of Ireland. Ross volunteers as a mentor within the SWICN Intel Computer Clubhouse Dojo which started off small and has since flourished. Apart from teaching kids code, Ross enjoys wine tasting, traveling and saving the universe in various computer games.','id'=>'3',
                          'name'=>'Ross O\'Neill', 'role'=>'Community Lead - (US & APAC)', 'linkedin'=>'https://ie.linkedin.com/in/oneillross', 'twitter'=>'https://twitter.com/ross_o_neill'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/rosa.png', 'jobDescription'=>'Rosa holds a BA in Business and Economics from Trinity College Dublin and is currently studying to become a Chartered Certified Accountant (ACCA). Prior to joining CoderDojo Rosa worked in a software start-up based in Launchbox, the start-up incubator in Trinity College Dublin, and volunteered with numerous social enterprise start-ups. Rosa currently works remotely for the CoderDojo team travelling with work and travel program ‘Remote Year’. While on the road, she is meeting local volunteers and connecting with local communities to cultivate new Dojos where none currently exist.','id'=>'4',
                          'name'=>'Rosa Langhammer', 'role'=>'Reporting Lead', 'linkedin'=>'https://twitter.com/RosaLanghammer', 'twitter'=>'https://ie.linkedin.com/in/rosa-langhammer-6847714b'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/philip.png', 'jobDescription'=>'Philip holds a degree in Commerce (Management Information Systems) as well as MSc’s in Business Analytics and Computer Science, all from UCD. Before coming to CoderDojo he worked as a Program Manager for Microsoft Office and co-founded the company’s first CoderDojo in 2013. In his free time Philip plays a variety of board games and has served on the boards of several gaming organisations.','id'=>'5',
                          'name'=>'Philip Harney','role'=>'Content Lead', 'linkedin'=>'https://www.linkedin.com/profile/view?id=ADEAAAMiJ_cBnpYCArcUVXQ5_xXN9vjDlP6j5o0&authType=NAME_SEARCH&authToken=XjBI&locale=en_US&srchid=3647322991468227051160&srchindex=1&srchtotal=7&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3647322991468227051160%2CVSRPtargetId%3A52570103%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH', 'twitter'=>'https://twitter.com/PhilipHarney'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/guillaume.png', 'jobDescription'=>'Adam is currently studying Computing at the National College of Ireland. In an effort to further his knowledge and contribute to the community, Adam took up the position of Software Engineering Intern, during January 2016. Adam is an avid open-source enthusiast and having previously mentored programming and other subjects, the role and company was a perfect fit. Outside of coding, Adam enjoys traveling, live music and films.','id'=>'6',
                          'name'=>'Guillaume Feliciano', 'role'=>'Technical Lead', 'linkedin'=>'https://ie.linkedin.com/in/gfelici/en', 'twitter'=>'https://twitter.com/gfelici'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/daniel.png', 'jobDescription'=>'NDaniel first became interested in coding when he was 11, and it quickly became a passion. He holds a BSc. in Software Design (Web Development) from Athlone Institute of Technology and previous worked as a software engineer at Ericsson. Daniel now works on Zen to provide the tools Dojos need to inspire the next generation of coders.','id'=>'7',
                          'name'=>'Daniel Brierton', 'role'=>'Senior Software Engineer', 'linkedin'=>'https://ie.linkedin.com/in/dbrierton', 'twitter'=>'https://twitter.com/danielbrierton'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/nuala.png', 'jobDescription'=>'Nuala holds a First Class Honours BA from Trinity College Dublin. Prior to this position, Nuala worked as a Communications Intern for The Undergraduate Awards, where she recognised the benefits of intercultural learning. Nuala has volunteered with Suas, VDP and in Guatemala with EIL Ireland in an education and marketing capacity. She continues to volunteer with EIL Ireland and Friends of the Earth Ireland along with mentoring at her nearest Dojo. Outside of CoderDojo, Nuala enjoys keeping up with the arts, current affairs and assisting with the daily running of her family’s farm.','id'=>'8',
                          'name'=>'Nuala McHale', 'role'=>'Engagement Administrator', 'linkedin'=>'https://www.linkedin.com/in/nuala-louise-mchale-b76b5341', 'twitter'=>'https://twitter.com/NuliBouli'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/rachel.png', 'jobDescription'=>'Rachel has a background in social media and content management. She previously worked as the head of content and social media for VooDoo, a leading digital marketing agency. Eager to support her tech-mad daughter’s learning journey, Rachel started volunteering as a mentor at a local Dojo in Dun Laoghaire and loved it. Rachel now works for the CoderDojo Foundation. Passionate about helping young girls and women all over the world Rachel worked on Plan Ireland’s Because I Am A Girl campaign and is currently on the board of War Child Ireland.','id'=>'9',
                          'name'=>'Rachel Schoene', 'role'=>'Enablement Administrator', 'linkedin'=>'https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjp64-0hOvNAhUKKsAKHRrYB0cQFggbMAA&url=https%3A%2F%2Fie.linkedin.com%2Fin%2Frachelschoene&usg=AFQjCNH6eRP3qCOwxldXi68-GpNk58BGuQ&sig2=cnGckGCst97ndJGTPO1O_g&bvm=bv.126130881,d.ZGg', 'twitter'=>'https://twitter.com/rachelschoene'],

                      ];
$context['boardimages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/bill.jpg', 'jobDescription'=>'Australian entrepreneur, venture capital investor, diplomat, author and speaker with a distinguished record in the areas of business, development and community activism, Bill is co-founder of the CoderDojo movement and Founder of Weforest and is the European venture partner for SOSventures.', 'id'=>'10',
                         'name'=>'Bill Liao', 'role'=>'Co-Founder, CoderDojo (Chair of Board)', 'linkedin'=>'https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=0ahUKEwi579CMi-vNAhUGD8AKHXHfATAQFgghMAE&url=https%3A%2F%2Fie.linkedin.com%2Fin%2Fbillliao&usg=AFQjCNHlGOKSzO8X6US3wieo3sV2Bc9wkw&sig2=sFcmlmsVG_RwibnwDblDyw&bvm=bv.126130881,d.ZGg', 'twitter'=>'https://twitter.com/liaonet'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/james.jpg', 'jobDescription'=>'James Whelton is a hacker and developer hailing from Cork, Ireland . He co-founded CoderDojo in 2011 and founded the CoderDojo Foundation in 2013. At 20, he was listed in Forbes 30 under 30 for 2013, won Social Entrepreneurs Ireland’s Impact award and became the youngest Ashoka fellow.', 'id'=>'11',
                         'name'=>'James Whelton', 'role'=>'Co-Founder, CoderDojo', 'linkedin'=>'https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=0ahUKEwj5s7mfi-vNAhWkJsAKHV3BALYQFggnMAI&url=https%3A%2F%2Fcoderdojo.com%2Fnews%2Ftag%2Fjames-whelton%2F&usg=AFQjCNF3TP19kFa8x9pdlHTqZzsb0LeBaw&sig2=1zmeVMcDEaxkVJ7LJq5J8A&bvm=bv.126130881,d.ZGg', 'twitter'=>'https://twitter.com/whelton'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/una.jpg', 'jobDescription'=>'Una Fox is a VP in the Walt Disney Company Corporate Technology group who she joined in 2008. Prior to joining Disney, Una was a Director of Partner Services at Yahoo, Inc. A firm supporter of CoderDojo Una co-founded the LA Dojo in March 2012.', 'id'=>'12',
                         'name'=>'Una Fox', 'role'=>'VP, The Walt Disney Company', 'linkedin'=>'https://www.linkedin.com/in/unamarkeyfox', 'twitter'=>'https://twitter.com/unafox'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/sean.jpg', 'jobDescription'=>'Sean O’Sullivan is co-founder and MD of Carma. He is also MD of SOSventures International, a $200 million investment management company. An avid supporter of CoderDojo/HWF the O’Sullivan Foundation is the CoderDojo Foundations founding donor.', 'id'=>'13',
                         'name'=>'Sean O\'Sullivan', 'role'=>'MD, SOSventures International', 'linkedin'=>'https://www.linkedin.com/in/sean-o-sullivan-15388a', 'twitter'=>'https://twitter.com/sosventures'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/noel.jpg', 'jobDescription'=>'Noel Ruane is the European Venture Partner for Polaris Partners investing in seed and early-stage technology companies. He is also the curator of Dogpatch Labs Europe. Polaris partners were the first corporate donor to the CoderDojo Foundation.', 'id'=>'14',
                         'name'=>'Noel Ruane','role'=>'Partner, Polaris Partners', 'linkedin'=>'https://www.linkedin.com/in/noel-ruane-95505617', 'twitter'=>'https://twitter.com/noelruane'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/cyril.png', 'jobDescription'=>'Cyril Treacy is Vice President Solution Engineering in Salesforce the enterprise cloud computing leader , he was a founding member of the EMEA operation in 2000. An avid supporter of CoderDojo since 2013 , Cyril founded the first salesforce dojo in February 2014. Cyril has helped coderdojo via the salesforce foundation which is based on a simple idea: Leverage Salesforce’s people, technology, and resources to help improve communities around the world. We call this integrated philanthropic approach the 1-1-1 model.', 'id'=>'15',
                         'name'=>'Cyril Treacy','role'=>'VP Solution Engineering, Salesforce.com', 'linkedin'=>'https://www.linkedin.com/in/cyriltreacy', 'twitter'=>'https://twitter.com/cyriltreacy'],

                      ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/mary.jpg', 'jobDescription'=>'Mary joined the CoderDojo Foundation team in June 2014 to take up the position of Global CEO for a 2 year term. In July 2016 she became the Head of European Consulting for Teneo Holdings and a member of the CoderDojo Foundation board. Prior to that, she was a Managing Director in Accenture’s global consulting practice, leading engagements with international clients in the Media, High Tech, Telco & Financial Services sectors. She has also been involved at board level with number of non profit organisations and remains on the boards of the Dublin Fringe Festival and the Professional Women’s Network.', 'id'=>'16',
                        'name'=>'Mary Moloney','role'=>'Head of European Consulting, Teneo Holdings', 'linkedin'=>'https://www.linkedin.com/in/mary-moloney-9a159b18', 'twitter'=>'https://twitter.com/marydunph']

                     ];

  $context['gridtitle'] = "Categories";
  $context['team'] = "Meet the Team";
  $context['board'] = "Meet the Board";

Timber::render('page-foundation.twig', $context);
