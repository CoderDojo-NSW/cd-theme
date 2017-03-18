<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['teamimages'] = [ 
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/ross.jpg', 
    'jobDescription'=> 'Ross is an SAP developer specialising in ABAP and HR/Payroll technologies. As Champion of CoderDojo Parramatta he was one of the 2 initial people to set up Coderdojo in Sydney. Ross’ enthusiasm for bringing coding to kids led him to establish the NSW regional body to encourage the growth of new Dojos.', 
    'id'=>'1',
    'name'=>'Ross Nolan', 
    'role'=>'Company Secretary', 
    'linkedin'=>'https://www.linkedin.com/in/ross-nolan-abap/', 
    'twitter'=>'https://twitter.com/codo_nthparra'],
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/ben.jpg', 
    'jobDescription'=> 'Ben has extensive experience as a Senior .NET developer across multiple industries. A qualified Scrum Master, he has strong Project Management experience and is currently Technical Lead at Barnardos Australia. Ben believes that ‘Coding is the Next Layer of Literacy’ and imparts his passion for coding and learning to kids as Champion of CoderDojo Balmain.', 
    'id'=>'2',
    'name'=>'Ben Liquete', 
    'role'=>'President', 
    'linkedin'=>'https://www.linkedin.com/in/bennollo/', 
    'twitter'=>'https://twitter.com/codo_balmain'],
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/david.jpg', 
    'jobDescription'=> 'David has a broad range of experience in the IT sector, including in Devices Management, Sales and Engineering. Currently Asia Pacific Manager of CBU Demo Engineering at Salesforce, David also manages Salesforce’s community outreach programs.', 
    'id'=>'3',
    'name'=>'David Pengelley', 
    'role'=>'', 
    'linkedin'=>'https://www.linkedin.com/in/davidpen/', 
    'twitter'=>'https://twitter.com/tinmut'],
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/yish.jpg', 
    'jobDescription'=> 'Yi-Hsia is currently Head of Strategy and Change Management at not for profit health insurer HCF. Prior to this she spent several years in the not for profit sector in the disability and early learning sectors developing new strategies and driving organisation change in response to regulatory shifts. She has previously been a Director at Lifestart Cooperative and spent several years as a management consultant at Bain & Company.', 
    'id'=>'4',
    'name'=>'Yish Koh', 
    'role'=>'', 
    'linkedin'=>'https://www.linkedin.com/in/yi-hsia-koh-86168a30/', 
    'twitter'=>''],
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/morri.jpg', 
    'jobDescription'=> 'Morri has an extensive career in the community sector, with the first half of his career spent as a worker, then manager and Board member in child and family welfare services. He has served as a director of several companies delivering services to non-profits, including establishing a Registered Training Organisation, consulting on governance and financial management and delivering financial literacy programs in remote areas. He is a founder of Accounting for Good, a bookkeeping and accounting service for nonprofits, for which he is currently Chair. Morri also serves as the Treasurer for Regional Arts Australia.', 
    'id'=>'5',
    'name'=>'Morri Young', 
    'role'=>'Treasurer', 
    'linkedin'=>'https://www.linkedin.com/in/morriyoung/', 
    'twitter'=>'https://twitter.com/'],
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/gabrielle.jpg', 
    'jobDescription'=> 'Gabrielle has a passion for CoderDojo’s mission to educate and encourage the development of youth IT skills, having worked in the employment and training services sector for over 14 years. Gabrielle is currently General Counsel and Company Secretary at Ranstad. A lawyer and company secretary, Gabrielle brings broad experience in the provision of legal advisory and secretariat services for a wide range of corporate entities including not-for-profit, incorporated and unincorporated associations.', 
    'id'=>'6',
    'name'=>'Gabrielle Nikodem', 
    'role'=>'', 
    'linkedin'=>'https://www.linkedin.com/in/gabriellenikodem/', 
    'twitter'=>'https://twitter.com/'],
    ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/elizabeth.jpg', 
    'jobDescription'=> 'Elizabeth has a background as a technical support engineer specialising in information security. She has run a Dojo in North Ryde for several years.', 
    'id'=>'7',
    'name'=>'Elizabeth Peters', 
    'role'=>'', 
    'linkedin'=>'https://www.linkedin.com/in/elizabeth-peters-466a341/', 
    'twitter'=>'https://twitter.com/'],
                        
                      ];
$context['boardimages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/bill.jpg', 'jobDescription'=>'Australian entrepreneur, venture capital investor, diplomat, author and speaker with a distinguished record in the areas of business, development and community activism, Bill is co-founder of the CoderDojo movement and Founder of Weforest and is the European venture partner for SOSventures.', 'id'=>'10',
                         'name'=>'Bill Liao (Chair of Board)', 'role'=>'Co-Founder, CoderDojo', 'linkedin'=>'https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=0ahUKEwi579CMi-vNAhUGD8AKHXHfATAQFgghMAE&url=https%3A%2F%2Fie.linkedin.com%2Fin%2Fbillliao&usg=AFQjCNHlGOKSzO8X6US3wieo3sV2Bc9wkw&sig2=sFcmlmsVG_RwibnwDblDyw&bvm=bv.126130881,d.ZGg', 'twitter'=>'https://twitter.com/liaonet'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/james.jpg', 'jobDescription'=>'James Whelton is a hacker and developer hailing from Cork, Ireland . He co-founded CoderDojo in 2011 and founded the CoderDojo Foundation in 2013. At 20, he was listed in Forbes 30 under 30 for 2013, won Social Entrepreneurs Ireland’s Impact award and became the youngest Ashoka fellow.', 'id'=>'11',
                         'name'=>'James Whelton', 'role'=>'Co-Founder, CoderDojo', 'linkedin'=>'https://www.google.ie/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=0ahUKEwj5s7mfi-vNAhWkJsAKHV3BALYQFggnMAI&url=https%3A%2F%2Fcoderdojo.com%2Fnews%2Ftag%2Fjames-whelton%2F&usg=AFQjCNF3TP19kFa8x9pdlHTqZzsb0LeBaw&sig2=1zmeVMcDEaxkVJ7LJq5J8A&bvm=bv.126130881,d.ZGg', 'twitter'=>'https://twitter.com/whelton'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/una.jpg', 'jobDescription'=>'Una Fox is a VP in the Walt Disney Company Corporate Technology group who she joined in 2008. Prior to joining Disney, Una was a Director of Partner Services at Yahoo, Inc. A firm supporter of CoderDojo Una co-founded the LA Dojo in March 2012.', 'id'=>'12',
                         'name'=>'Una Fox', 'role'=>'The Walt Disney Company', 'linkedin'=>'https://www.linkedin.com/in/unamarkeyfox', 'twitter'=>'https://twitter.com/unafox'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/sean.jpg', 'jobDescription'=>'Sean O’Sullivan is co-founder and MD of Carma. He is also MD of SOSventures International, a $200 million investment management company. An avid supporter of CoderDojo/HWF the O’Sullivan Foundation is the CoderDojo Foundations founding donor.', 'id'=>'13',
                         'name'=>'Sean O\'Sullivan', 'role'=>'SOSventures International', 'linkedin'=>'https://www.linkedin.com/in/sean-o-sullivan-15388a', 'twitter'=>'https://twitter.com/sosventures'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/noel.jpg', 'jobDescription'=>'Noel Ruane is the European Venture Partner for Polaris Partners investing in seed and early-stage technology companies. He is also the curator of Dogpatch Labs Europe. Polaris partners were the first corporate donor to the CoderDojo Foundation.', 'id'=>'14',
                         'name'=>'Noel Ruane','role'=>'Polaris Partners', 'linkedin'=>'https://www.linkedin.com/in/noel-ruane-95505617', 'twitter'=>'https://twitter.com/noelruane'],

                       ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/cyril.png', 'jobDescription'=>'Cyril Treacy is Vice President Solution Engineering in Salesforce the enterprise cloud computing leader , he was a founding member of the EMEA operation in 2000. An avid supporter of CoderDojo since 2013 , Cyril founded the first salesforce dojo in February 2014. Cyril has helped coderdojo via the salesforce foundation which is based on a simple idea: Leverage Salesforce’s people, technology, and resources to help improve communities around the world. We call this integrated philanthropic approach the 1-1-1 model.', 'id'=>'15',
                         'name'=>'Cyril Treacy','role'=>'Salesforce.com', 'linkedin'=>'https://www.linkedin.com/in/cyriltreacy', 'twitter'=>'https://twitter.com/cyriltreacy'],

                      ['src'=>'../wp-content/themes/cd-theme/static/img/foundation/mary.jpg', 'jobDescription'=>'Mary joined the CoderDojo Foundation team in June 2014 to take up the position of Global CEO for a 2 year term. In July 2016 she became the Head of European Consulting for Teneo Holdings and a member of the CoderDojo Foundation board. Prior to that, she was a Managing Director in Accenture’s global consulting practice, leading engagements with international clients in the Media, High Tech, Telco & Financial Services sectors. She has also been involved at board level with number of non profit organisations and remains on the boards of the Dublin Fringe Festival and the Professional Women’s Network.', 'id'=>'16',
                        'name'=>'Mary Moloney','role'=>'Teneo Holdings', 'linkedin'=>'https://www.linkedin.com/in/mary-moloney-9a159b18', 'twitter'=>'https://twitter.com/marydunph']

                     ];

  $context['gridtitle'] = "Categories";
  $context['team'] = "Meet the Team";
  $context['board'] = "Meet the Board";

Timber::render('page-foundation.twig', $context);
