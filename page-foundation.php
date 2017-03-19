<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['teamimages'] = [
    [
        'id' => '1',
        'name' => 'Ben Liquete',
        'role' => 'President',
        'src' => '../wp-content/themes/cd-theme/static/img/board/ben.jpg',
        'jobDescription' => 'Ben has extensive experience as a Senior .NET developer across multiple industries. A qualified Scrum Master, he has strong Project Management experience and is currently Technical Lead at Barnardos Australia. Ben believes that ‘Coding is the Next Layer of Literacy’ and imparts his passion for coding and learning to kids as Champion of CoderDojo Balmain.',
        'linkedin' => 'https://www.linkedin.com/in/bennollo/',
    ],
    [
        'id' => '2',
        'name' => 'Elizabeth Peters',
        'role' => 'Vice President',
        'src' => '../wp-content/themes/cd-theme/static/img/board/elizabeth.jpg',
        'jobDescription' => 'Elizabeth has a background as a technical support engineer specialising in information security. She has run a Dojo in North Ryde for several years.',
        'linkedin' => 'https://www.linkedin.com/in/elizabeth-peters-466a341/',
    ],
    [
        'id' => '3',
        'name' => 'Ross Nolan',
        'role' => 'Company Secretary',
        'src' => '../wp-content/themes/cd-theme/static/img/board/ross.jpg',
        'jobDescription' => 'Ross is an SAP developer specialising in ABAP and HR/Payroll technologies. As Champion of CoderDojo Parramatta he was one of the 2 initial people to set up Coderdojo in Sydney. Ross’ enthusiasm for bringing coding to kids led him to establish the NSW regional body to encourage the growth of new Dojos.',
        'linkedin' => 'https://www.linkedin.com/in/ross-nolan-abap/',
    ],
    [
        'id' => '4',
        'name' => 'Morri Young',
        'role' => 'Treasurer',
        'src' => '../wp-content/themes/cd-theme/static/img/board/morri.jpg',
        'jobDescription' => 'Morri has an extensive career in the community sector, with the first half of his career spent as a worker, then manager and Board member in child and family welfare services. He has served as a director of several companies delivering services to non-profits, including establishing a Registered Training Organisation, consulting on governance and financial management and delivering financial literacy programs in remote areas. He is a founder of Accounting for Good, a bookkeeping and accounting service for nonprofits, for which he is currently Chair. Morri also serves as the Treasurer for Regional Arts Australia.',
        'linkedin' => 'https://www.linkedin.com/in/morriyoung/',
    ],
    [
        'id' => '5',
        'name' => 'David Pengelley',
        'role' => '',
        'src' => '../wp-content/themes/cd-theme/static/img/board/david.jpg',
        'jobDescription' => 'David has a broad range of experience in the IT sector, including in Devices Management, Sales and Engineering. Currently Asia Pacific Manager of CBU Demo Engineering at Salesforce, David also manages Salesforce’s community outreach programs.',
        'linkedin' => 'https://www.linkedin.com/in/davidpen/',
    ],
    [
        'id' => '6',
        'name' => 'Yish Koh',
        'role' => '',
        'src' => '../wp-content/themes/cd-theme/static/img/board/yish.jpg',
        'jobDescription' => 'Yi-Hsia is currently Head of Strategy and Change Management at not for profit health insurer HCF. Prior to this she spent several years in the not for profit sector in the disability and early learning sectors developing new strategies and driving organisation change in response to regulatory shifts. She has previously been a Director at Lifestart Cooperative and spent several years as a management consultant at Bain & Company.',
        'linkedin' => 'https://www.linkedin.com/in/yi-hsia-koh-86168a30/',
    ],
    [
        'id' => '7',
        'name' => 'Gabrielle Nikodem',
        'role' => '',
        'src' => '../wp-content/themes/cd-theme/static/img/board/gabrielle.jpg',
        'jobDescription' => 'Gabrielle has a passion for CoderDojo’s mission to educate and encourage the development of youth IT skills, having worked in the employment and training services sector for over 14 years. Gabrielle is currently General Counsel and Company Secretary at Ranstad. A lawyer and company secretary, Gabrielle brings broad experience in the provision of legal advisory and secretariat services for a wide range of corporate entities including not-for-profit, incorporated and unincorporated associations.',
        'linkedin' => 'https://www.linkedin.com/in/gabriellenikodem/',
    ],
];


$context['gridtitle'] = "Categories";
$context['team'] = "Meet the CoderDojoNSW Board";

Timber::render('page-foundation.twig', $context);
