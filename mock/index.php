<?php
$path = $_GET['path'];
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
  header('Access-Control-Allow-Headers: token, Content-Type');
  header('Access-Control-Max-Age: 1728000');
  header('Content-Length: 0');
  header('Content-Type: text/plain');
  die();
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$jobs = [
  0 => [
    'id' => '14cf2bb6-45d0-449f-be46-91a462afcb22',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/14cf2bb6-45d0-449f-be46-91a462afcb22',
    'created_at' => 'Tue Mar 02 15:00:49 UTC 2021',
    'company' => 'TeleClinic GmbH',
    'company_url' => NULL,
    'location' => 'Munich',
    'title' => 'Python / Django Developer (f/m/d) *100% remote possible*',
    'description' => '<p>At TeleClinic, we aim to be the patients’ starting point for all of their healthcare needs by building the leading on-demand platform for online doctor visits.
Digitalisation of the German Health System is ready for take off and one thing is for sure: With TeleClinic you get the chance to revolutionize this industry. Why? Because we were not only the first to offer telemedicine in Germany but are also the market leader. We are a platform for online doctor visits in Germany and, in 2018 Forbes Magazine already announced us amongst the 100 most innovative startups.</p>
<p>We are looking for an experienced Backend Developer with Python/Django knowledge willing to work in a lean and agile environment.</p>
<p>In this role, you will:</p>
<ul>
<li>Develop highly scalable APIs in Python &amp; Django</li>
<li>Design and deploy services on cloud infrastructure (we use AWS)</li>
<li>Be a technical mentor for other engineering team members</li>
<li>Ship clear, maintainable and thoughtfully commented code.</li>
</ul>
<p>What you need to be successful:</p>
<ul>
<li>3+ years of professional experience with Python</li>
<li>Experience with Python-based frameworks (we use Django)</li>
<li>Strong SQL skills and experience with ORMs</li>
<li>Experience with testing frameworks</li>
<li>Experience with cloud services (we use AWS)</li>
<li>Competent with revision control systems (we use Git)</li>
<li>CS, engineering degree, or equivalent experience</li>
</ul>
<p>Who you are:</p>
<ul>
<li>Independent, self-motivated</li>
<li>Fluent in English, written and spoken</li>
<li>Proven track record of always learning and growing.</li>
<li>Proactive attitude</li>
</ul>
<p>What\'s in it for you:</p>
<ul>
<li>Competitive salary</li>
<li>Be part of a cross-functional, international, diverse, highly motivated and open-minded team</li>
<li>1.500 EUR personal development budget per year, 2 days additional leave for attending conferences and courses</li>
<li>27 vacation days per year, with an additional vacation day for each year - up to 30 vacation days</li>
<li>Home Office and flexible working hours</li>
<li>Notebook of your choice and all the tools &amp; gadgets you need to be productive</li>
<li>Do you like riding a bike? Then profit from the cooperation with JobRad</li>
<li>Regular fun team and company events (e.g. Oktoberfest, Isar-rafting tour, laser-tag and much more)</li>
<li>You don\'t speak German? No problem! You get 350€ per year for German courses</li>
<li>Work in our modern, bright and spacious office and recharge at our hangout lounge where you can enjoy free fruits, snacks, and drinks</li>
</ul>
',
    'how_to_apply' => '<p><a href="https://teleclinic-gmbh.breezy.hr/p/bd976bb3b8bb01-python-django-developer-f-m-d/apply">https://teleclinic-gmbh.breezy.hr/p/bd976bb3b8bb01-python-django-developer-f-m-d/apply</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdTJhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--c940360278c3bed4bf93b4bb074ad6d2cc1da050/Teleclinic_Logo_RGB_SEA_2300px.png',
  ],
  1 => [
    'id' => '0b33dc34-024e-4369-aa6c-1eac148cb550',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/0b33dc34-024e-4369-aa6c-1eac148cb550',
    'created_at' => 'Tue Mar 02 12:28:54 UTC 2021',
    'company' => 'Snappet',
    'company_url' => 'https://nl.snappet.org/',
    'location' => ' Utrecht',
    'title' => 'Full-stack Developer',
    'description' => '<p><strong>Full-stack Developer</strong></p>
<p><strong>Snappet is looking for Full-stack Developers. Will you join our team?</strong></p>
<p>Improve the learning results of children: that\'s what we do at Snappet. We develop smart software that enables teachers and children to get the best results. Our software is used in more than 3000 schools across the Netherlands, Germany, France, Italy, the USA, and Spain and is used by more than 300.000 students. We strive to deliver continuous improvements to our products to support all these schools and students.</p>
<p>As a full-stack developer, you will be part of one of our agile development teams. Each team consists of 5 to 8 team members, developing and innovating specific areas of our platform. You will build APIs and ensure excellent code coverage. You will implement the pages that our designers have designed. Sometimes you’ll be required to troubleshoot performance problems and you might have to fix a stored procedure. You won\'t be put off by complex problems such as processing large amounts of data – after all, our platform handles half a million requests per minute during peak hours.
Each sprint you will focus on goals the team wants to achieve. Together with a product owner, scrum master, test- and other engineers, you will build high-quality software, driven by the fact that you will be actively contributing to improving education. At the end of each sprint, we do a review of the results. In addition, we do a retrospective session to look at how it can be improved. We’re also continuously improving our developer working environment which consists of DTAP-streets and build servers because we want to release software fast and often.</p>
<p>Besides the teamwork, developers regularly experiment and learn new technologies and collaborate on this with others. We have monthly ‘pizza sessions’ where devs get together and share knowledge on all things, tech or fun - Snappet provides beer and pizza. Once every year Snappet organizes the dev-summit, a multi-day even for knowledge- and teambuilding in an inspiring environment.</p>
<p><strong>The ideal candidate:</strong></p>
<ul>
<li>Relevant higher education or university degree.</li>
<li>Minimum of 3 years’ experience developing.NET (web) applications.</li>
<li>In-depth knowledge of C# and the. NET-framework.</li>
<li>Good knowledge of JavaScript and application frameworks like Angular or React.</li>
<li>Strong in OO-programming, unit testing, design patterns, and SOLID-principles.</li>
<li>Good knowledge of database design, performance, and (T) SQL.</li>
<li>Experience with continuous integration and delivery tooling is a plus.</li>
<li>Optional: experience with cloud services like AWS or Azure is an advantage.</li>
<li>Optional: experience with Android and/or mobile development is a plus.</li>
</ul>
<p>Please note; just because you\'re not our ideal candidate doesn\'t mean we\'re not interested. You are welcome for an interview and are invited to convince us!
A coding challenge is part of the interview (although you can do it at your own leisure after the interview).</p>
<p><strong>Frameworks, languages, and tools used by our teams include:</strong></p>
<ul>
<li>.NET Core, C#.</li>
<li>Angular, TypeScript and Node.js.</li>
<li>Amazon Web Services (including Lambda and ECS).</li>
<li>Microsoft SQL Server.</li>
<li>Azure DevOps, TeamCity, Git, SonarQube, NewRelic, Raygun.</li>
</ul>
<p><strong>What we offer:</strong></p>
<ul>
<li>Personal training budget.</li>
<li>Plenty of room for own input.</li>
<li>Working with experienced colleagues.</li>
<li>Flexible working hours.</li>
<li>Office right next to Utrecht central station.</li>
<li>An arcade cabinet and foosball table.</li>
</ul>
<p>If you have any questions regarding this vacancy, please mail to <a href="mailto:HR@snappet.org"><strong>HR@snappet.org</strong></a>.</p>
<p><strong>Interested?</strong></p>
<p>Apply via the <a href="https://ltpx.nl/nTlejYi"><strong>application form</strong></a>.</p>
<p><em>Agency calls are not appreciated.</em><img src="https://camo.githubusercontent.com/22dd2dbdc96e57cd8ba8081091ae874acda047bb/68747470733a2f2f742e6c7470782e6e6c2f747261636b2e7068703f6f7264657269643d323338333531"></p>
',
    'how_to_apply' => '<p><a href="https://ltpx.nl/rahyWNZ">Click here to apply</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdEdhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--5e984854fa964a53f190f2a4fa7c867dd5d52398/snappet.jpg',
  ],
  2 => [
    'id' => 'e135a2b3-22e3-4114-b3c5-83d9c3df50d3',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/e135a2b3-22e3-4114-b3c5-83d9c3df50d3',
    'created_at' => 'Tue Mar 02 11:17:51 UTC 2021',
    'company' => 'Clark Germany GmbH',
    'company_url' => 'https://www.clark.de',
    'location' => 'Frankfurt',
    'title' => '(Senior) Frontend Developer (m/f/x)',
    'description' => '<p><strong>A Bit about us</strong></p>
<p>At CLARK we believe that the significant things in life should be simple. With this vision in mind, we have set out to create an application which makes it easier, simpler, and faster for consumers to manage their insurances - all in one central place where changes can be done with just a few clicks. Our secret sauce is to combine a best-in-industry user experience with honest and independent advice from insurance experts.</p>
<p>Since our founding in 2015, we have served over 200,000 satisfied customers. We are extremely proud of our 200 employees from over 40 nations, working from our offices in Berlin, Frankfurt, Vienna and Püttlingen. We were recognized by the German tech magazine Gründerszene as the fastest growing technology company in Germany for 2019. We want your help to get us to the next level.</p>
<p><strong>A bit about our Tech stack</strong></p>
<p>We use the latest and greatest Ember.js and actively contribute to the development of the framework.</p>
<p>Apart from that we have 100% Typescript, PostCSS, Webpack, Capacitor along with Ruby on Rails on the backend and AWS, Docker &amp; Kubernetes for architecture. Python, Go, Rust and Elixir round off our company tech stack.</p>
<p><strong>What you will be doing:</strong></p>
<ul>
<li>
<strong>Working</strong> closely with designers to define and implement great user experiences across web and mobile.</li>
<li>
<strong>Helping</strong> identify and outline improvements and features for our product. Your opinion about our product matters!</li>
<li>
<strong>Participating</strong> in our community of practice, Pair programming, reviewing pull requests- all the good stuff</li>
</ul>
<p><strong>Ideally you:</strong></p>
<ul>
<li>have experience in developing web applications using modern frameworks (e.g. Ember, Angular, React)</li>
<li>are strong in HTML, CSS, responsive design and accessibility</li>
<li>experience in integrating and building frontend components</li>
<li>Nice to have: experience building hybrid mobile apps. We are using Capacitor and exploring Ionic.</li>
<li>have a thorough understanding of software design patterns and how to structure larger web applications.</li>
<li>are applying automated UI Testing</li>
</ul>
<p><strong>Why CLARK:</strong></p>
<ul>
<li>A multicultural environment with international colleagues.</li>
<li>Subsidized job ticket and a company pension.</li>
<li>A lot of freedom: You want to pursue further education? An MBA was always a dream of yours? We offer you support for your education while working with us.</li>
<li>Support for relocation - and we don\'t mean only a work permit. The process of getting you here and the costs associated with it are all supported.</li>
<li>Fear of not speaking the language? We offer beginner and advanced German and English classes in house.</li>
<li>Want to inspire and share knowledge? We have you covered with our weekly Tech Brown Bag speech.</li>
<li>And last but not least: Sure, we know how to celebrate success! We offer you quarterly company events, monthly team lunch &amp; breakfast as well as our weekly Friday get together</li>
</ul>
<p><strong>Sounds exciting? We agree, and we cannot wait to have your application!</strong></p>
',
    'how_to_apply' => '<p><a href="https://clark.join.com/jobs/1933391-senior-frontend-developer-m-f-x?pid=71fbd6149a82b0b128ee&amp;oid=f08121aa-2426-4bbf-b766-811ca376559c&amp;utm_source=stackoverflow&amp;utm_medium=paid&amp;utm_campaign=stackoverflow&amp;utm_content=senior%2Bfrontend%2Bdeveloper%2Bm%2Bf%2Bx">https://clark.join.com/jobs/1933391-senior-frontend-developer-m-f-x?pid=71fbd6149a82b0b128ee&amp;oid=f08121aa-2426-4bbf-b766-811ca376559c&amp;utm_source=stackoverflow&amp;utm_medium=paid&amp;utm_campaign=stackoverflow&amp;utm_content=senior%2Bfrontend%2Bdeveloper%2Bm%2Bf%2Bx</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc2lhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--4ce0f3b5c46093911a7e49f47b2ecac5cec44eed/clark-germany-gmb-h-logo-xl.png',
  ],
  3 => [
    'id' => 'e5ca02e4-6740-40f6-88cd-b00044e7ed0b',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/e5ca02e4-6740-40f6-88cd-b00044e7ed0b',
    'created_at' => 'Tue Mar 02 10:45:47 UTC 2021',
    'company' => 'Savant',
    'company_url' => 'https://vonq.io/3b4Z7lB',
    'location' => 'Hyannis, MA',
    'title' => 'Senior Software Developer (Cloud)',
    'description' => '<h2>Company Description</h2>
<p>Savant Systems, Inc., is a true powerhouse delivering unmatched intelligent lighting and smart home solutions. Together, Savant and GE Lighting, a Savant company, offer a deep and diverse portfolio of bold and easy-to-use innovations across the retail and professional channels that are engineered for every home.</p>
<p>Savant, a recognized leader in home control and automation, is one of the fastest-growing smart home companies in the luxury and mid-markets. Its powerful Pro technology brings climate, lighting, entertainment, security and energy together in a single, award winning application interface for homeowners.</p>
<p>GE Lighting, a Savant company, has been at the forefront of every major lighting innovation, from the first light bulb to industry-first LED and smart solutions along with the world’s first voice-embedded lighting product. Today it leads the North American retail lighting market as the most trusted, recommended and likely to purchase brand.</p>
<h2>Job Description</h2>
<p>Senior Software Developer (Cloud)
Headquartered in Hyannis, Massachusetts, Savant Systems, Inc., is a true whole home automation powerhouse delivering unmatched smart home, intelligent lighting and energy solutions to North America and beyond. Together, Savant and GE Lighting, a Savant company, offer a deep and diverse portfolio of bold and easy-to-use innovations across the retail and professional channels that are engineered to customize every home to any lifestyle.</p>
<p>Savant, a recognized leader in home control and automation, is one of the fastest-growing smart home companies in the luxury and mid-markets. Its powerful Pro technology controls Savant’s network of climate, lighting, entertainment, security and energy products via a single, award winning application interface for homeowners.</p>
<p>Innovation has been part of GE Lighting, a Savant company’s DNA since Thomas Edison invented the light bulb. The company has been at the forefront of every major lighting innovation, from the first light bulb to industry-first LED and smart solutions along with the world’s first voice-embedded lighting product. Today it leads the North American retail lighting market as the most trusted, recommended, and likely to purchase brand.</p>
<p>We are looking for a Senior Software Developer Engineer to join our growing team to assist in designing and developing our cloud-based applications. The ideal candidate possesses strong leadership and problem-solving skills and a knowledge of industry best practices. The primary task will be leading a team of skilled developers in architecting and developing high-availability, resilient, and scalable cloud services and data solutions. Experience with AWS or a similar cloud provider is highly preferred.</p>
<p>TOP REASONS TO WORK WITH US:</p>
<ul>
<li>Built on a foundation of integrity, our team embraces the core values of humility, collaboration, innovation, customer centricity, accountability and diversity and inclusion as we work together to create brighter lives and a more sustainable world</li>
<li>Team with a highly skilled group of top-notch engineers to tackle fun and challenging problems every day</li>
<li>Become a valued member of an innovative team that welcomes your thinking and creativity</li>
<li>Make a difference developing solutions that enable smarter, greener living</li>
<li>Gain more experience with existing tech gadgets, IOT, and great UX, while learning and implementing
new cutting-edge solutions</li>
<li>Competitive base salary and 401(k) match</li>
<li>Strong benefits package including robust and affordable health plan options – Savant\'s employer contribution rates put us in the top 5% of an elite group of employers who generously cover health care cost for our employees!</li>
<li>Use of luxury home automation products and control in your own home as part of our alpha program</li>
</ul>
<p>RESPONSIBILITIES:</p>
<ul>
<li>Lead a team of software developers that create high availability and scalable cloud services for IoT devices that include cameras, lighting, thermostats, audio and more</li>
<li>Mentor junior developers</li>
<li>Ensure best practices are followed and modeled for others</li>
<li>Collaborate with multiple groups to gather product and software requirements for delivering high quality products</li>
<li>Work side-by-side with peers across the Engineering team to triage bugs and troubleshoot issues</li>
<li>Design, implement, and support connections and services between multiple systems</li>
</ul>
<p>NECESSARY AND PREFERRED EXPERIENCE:</p>
<ul>
<li>Demonstrated ability in architecting solutions for highly available cloud services</li>
<li>Experience leading a team of developers</li>
<li>Ability to collaborate and communicate effectively with project managers to meet project deliverables/milestones and with QA engineers to ensure high quality solutions</li>
<li>Experience developing applications hosted on top of AWS or other similar Cloud Platforms</li>
<li>Experience building high performance data access layers on top of either a SQL or NoSQL database</li>
<li>Bachelor\'s or Master\'s degree in Computer Science or equivalent industry experience.</li>
<li>Solid CS fundamentals, fluent in multi-threaded, asynchronous programming, strong inclination for architecting at scale</li>
<li>Excellent technical design, problem solving and debugging skills</li>
<li>Knowledge of javascript and associated toolsets / frameworks</li>
<li>Excellent written and oral communication skills</li>
</ul>
<h2>Qualifications</h2>
<p>EXPERIENCE:</p>
<ul>
<li>Demonstrated ability in architecting solutions for highly available cloud services</li>
<li>Experience leading a team of developers</li>
<li>Ability to collaborate and communicate effectively with project managers to meet project deliverables/milestones and with QA engineers to ensure high quality solutions</li>
<li>Experience developing applications hosted on top of AWS or other similar Cloud Platforms</li>
<li>Experience building high performance data access layers on top of either a SQL or NoSQL database</li>
<li>Bachelor\'s or Master\'s degree in Computer Science or equivalent industry experience.</li>
<li>Solid CS fundamentals, fluent in multi-threaded, asynchronous programming, strong inclination for architecting at scale</li>
<li>Excellent technical design, problem solving and debugging skills</li>
<li>Knowledge of javascript and associated toolsets / frameworks</li>
<li>Excellent written and oral communication skills</li>
</ul>
<p><strong>Additional Information</strong> Savant Systems, Inc (Savant) provides equal employment opportunities (EEO) to all employees and applicants for employment without regard to race, color, religion, creed, national origin, ancestry, sex (including pregnancy), gender (including gender identity, gender nonconformity and status as a transgender or transsexual individual), age, sexual orientation, physical or mental disability, citizenship, genetic information, domestic violence victim status, past, current or prospective service in the uniformed services or any other characteristic protected under applicable federal, state, or local law. This policy applies to all terms and conditions of employment, including recruiting, hiring, placement, promotion, termination, layoff, recall, transfer, leaves of absence, compensation and training.</p>
<p>Savant does not seek or accept unsolicited resumes or CVs from recruitment agencies. We are not responsible for, and will not pay, any fees, commissions, or any other payment related to unsolicited resumes or CVs except as required in a written contract between Savant and the recruitment agency or party requesting payment of a fee.</p>
<p><a href="https://vonq.io/3b4Z7lB">Click here for the application form!</a></p>
',
    'how_to_apply' => '<p><a href="https://vonq.io/3b4Z7lB">Click here for the application form!</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc2FhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--dfbdd9d0e0b6aa39a5fe4f37827f16ba2e68841f/Savant.png',
  ],
  4 => [
    'id' => 'a9af95f8-ba9d-4443-ba0a-ac2ff92c42a1',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/a9af95f8-ba9d-4443-ba0a-ac2ff92c42a1',
    'created_at' => 'Mon Mar 01 23:09:27 UTC 2021',
    'company' => 'Agiloft, Inc',
    'company_url' => 'http://www.agiloft.com',
    'location' => 'Czech Republic, Ukraine, Hungary, Russia',
    'title' => 'Integrations Developer - Salesforce (Remote)',
    'description' => '<p><strong>THRIVE WITH AGILOFT</strong></p>
<p>We are looking for an experienced integrations developer with experience in building Salesforce applications to take charge of Agiloft’s fast-growing integration ecosystem.</p>
<p>Agiloft is looking for an Integrations Developer, that thrives working in a fast-paced organization with interesting business challenges requiring smart solutions.</p>
<p><strong>WHY JOIN AGILOFT?</strong></p>
<ul>
<li>
<p>Agiloft was named the market leader in every category in the <a href="https://www.agiloft.com/flash/Gartner_critical_capabilities_for_CLM.pdf">Gartner Critical Capabilities</a> for CLM report, and a market leader in the Gartner Magic Quadrant.</p>
</li>
<li>
<p>Contract Lifecycle Management (CLM) is one of the fastest-growing areas of enterprise sales, with a TAM projected to climb from $2B to $7B in the next 5 years.</p>
</li>
<li>
<p>The Agiloft Contract and Commerce Lifecycle Platform has won over a dozen awards, including the <a href="https://www.agiloft.com/awards.htm">Editor\'s Choice award</a> from PC Mag, for the past five years in a row.</p>
</li>
<li>
<p>Agiloft has a highly differentiated value proposition which is uniquely appealing to enterprises: pre-built applications with a deeply configurable, no-code platform for integrated Business Process Management throughout an organization.</p>
</li>
<li>
<p>Agiloft is pioneering the applied use of Artificial Intelligence to enable next-generation business commerce at organizations ranging from small enterprises to U.S. government agencies and Fortune 100 companies.</p>
</li>
<li>
<p>Agiloft is the only company in the industry with the confidence to provide an unconditional satisfaction guarantee, and you too will be successful with Agiloft.</p>
</li>
</ul>
<p>As the leader in the CCLM market, Agiloft is winning many Enterprise deals and looking to hire the best talent to meet this demand with a competitive compensation plan that rewards overachievement.</p>
<p><strong>Position Overview</strong></p>
<p>You will be a key member of the Agiloft engineering team responsible for delivering data integration projects. You will be actively engaged in all aspects of the solution lifecycle, including design, development, support, and ongoing maintenance. While there are many different applications and iPaaS platforms we integrate with, many of our customers need to integrate Agiloft with Salesforce. You will be a perfect fit for the open position if you also have experience with building or modifying Salesforce applications.</p>
<p>You should have no less than three years of professional experience in building enterprise-grade applications with a focus on integrations and API and one year plus experience with Apex applications. We expect you to be passionate about building software and perform well working in a geographically distributed and diverse team.</p>
<p>This is a remote-only position. You must be comfortable with setting your own schedule and proactively collaborating in a globally dispersed team using a variety of communication channels.</p>
<p><strong>Job Responsibilities</strong></p>
<p>Transitioning business requirements into technical requirements and developing the necessary integration or application to fulfill those requirements. Code produced will primarily be but is not restricted to, REST APIs and integration orchestration.</p>
<ul>
<li>Write Apex routines or modify existing Apex routines for Agiloft customers</li>
<li>Documenting code for maintenance and reusability.</li>
<li>Understanding existing code and performing maintenance and enhancements as required.</li>
<li>Working with other teams to promote standards and code reuse across the organization.</li>
</ul>
<p><strong>Required Qualifications</strong></p>
<ul>
<li>Java Developer</li>
<li>Web Services (REST &amp; SOAP)</li>
<li>RESTful API design and JSON data representation</li>
<li>Experience with J2EE, Tomcat, JBoss, EJB3 is a plus</li>
<li>Experience in Multi-threading is plus</li>
<li>Relational databases</li>
<li>Experience with Salesforce Apex</li>
<li>Experience working in geographically dispersed teams</li>
<li>Bachelor’s Degree</li>
</ul>
<p><strong>Preferred Qualifications</strong></p>
<ul>
<li>Good understanding of current database technologies and their application</li>
<li>Hands-on experience with building Salesforce applications</li>
<li>A keen interest to learn about new technologies</li>
<li>Fluent in the English language</li>
</ul>
<p><strong>BENEFITS AND PERKS</strong></p>
<ul>
<li>Competitive salary</li>
<li>Referral bonuses</li>
<li>Flexible work schedules</li>
<li>Professional development and career growth opportunities</li>
<li>Awesome team members</li>
</ul>
<p><strong>To Apply</strong>:</p>
<p>To complete an application for immediate consideration visit: <a href="https://tinyurl.com/bxrfdksw">https://www.agiloft.com/IntegrationsSalesForce</a></p>
',
    'how_to_apply' => '<p>To complete an application for immediate consideration visit: <a href="https://tinyurl.com/bxrfdksw">https://www.agiloft.com/IntegrationsSalesForce</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcnlhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--e9fb753ff2412a0a506d57f966037f43eb9abf7c/Agiloft%20Logo%20plain%20(Indeed).png',
  ],
  5 => [
    'id' => '4954b54a-b2eb-4d09-98be-fbc0119db1b7',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/4954b54a-b2eb-4d09-98be-fbc0119db1b7',
    'created_at' => 'Mon Mar 01 22:51:31 UTC 2021',
    'company' => 'Agiloft Inc',
    'company_url' => 'http://www.agiloft.com',
    'location' => 'Kyiv, Ukraine, Hungary, Russia, Czech Republic',
    'title' => 'Senior EJB Developer (Remote)',
    'description' => '<p><strong>THRIVE WITH AGILOFT</strong></p>
<p>Are you an experienced Sr. Java Developer who is successful, motivated, smart, energetic, and looking for a rewarding position in a growing, profitable and dynamic company?</p>
<p>Agiloft is expanding our developer team, looking for Sr. Java Developers, experienced with J2EE, that thrive working with enterprises in multiple industries, with unique business challenges requiring sophisticated solution design.</p>
<p><strong>WHY JOIN AGILOFT?</strong></p>
<ul>
<li>
<p>Agiloft was named the market leader in every category in the <a href="https://www.agiloft.com/flash/Gartner_critical_capabilities_for_CLM.pdf">Gartner Critical Capabilities</a> for CLM report, and a market leader in the Gartner Magic Quadrant.</p>
</li>
<li>
<p>Contract Lifecycle Management (CLM) is one of the fastest-growing areas of enterprise sales, with a TAM projected to climb from $2B to $7B in the next 5 years.</p>
</li>
<li>
<p>The Agiloft Contract and Commerce Lifecycle Platform has won over a dozen awards, including the <a href="https://www.agiloft.com/awards.htm">Editor\'s Choice award</a> from PC Mag, for the past five years in a row.</p>
</li>
<li>
<p>Agiloft has a highly differentiated value proposition which is uniquely appealing to enterprises: pre-built applications with a deeply configurable, no-code platform for integrated Business Process Management throughout an organization.</p>
</li>
<li>
<p>Agiloft is pioneering the applied use of Artificial Intelligence to enable next-generation business commerce at organizations ranging from small enterprises to U.S. government agencies and Fortune 100 companies.</p>
</li>
<li>
<p>Agiloft is the only company in the industry with the confidence to provide an unconditional satisfaction guarantee, and you too will be successful with Agiloft.</p>
</li>
</ul>
<p>As the leader in the CCLM market, Agiloft is winning many Enterprise deals and looking to hire the best talent to meet this demand with a competitive compensation plan that rewards overachievement.</p>
<p><strong>Position Overview</strong></p>
<p>We are seeking an experienced Enterprise JavaBeans Developer who will join our fast-growing engineering team, working on mission-critical applications. Your duties will include developing scalable Java applications while providing expertise in the full software development lifecycle, from concept and design to testing.</p>
<p>This is a remote-only position. You must be comfortable with setting your own schedule and proactively collaborating in a globally dispersed team using a variety of communication channels. You should have no less than three years of professional experience in building enterprise-grade applications. You must be able to write clean, well-documented code and ensure your programs run properly. We also expect you to be passionate about building software and perform well working in a geographically distributed and diverse team.</p>
<p><strong>Job Responsibilities</strong></p>
<ul>
<li>Design and develop high-volume, low-latency applications that enhance the Agiloft core platform</li>
<li>Create well designed, testable, efficient code</li>
<li>Participate in all phases of the development lifecycle</li>
<li>Assist in preparation and production of releases</li>
<li>Ensure designs meet specifications</li>
<li>Investigate alternatives and technologies and present them for architectural review, in order to support continuous improvement</li>
</ul>
<p><strong>Required Qualifications</strong></p>
<ul>
<li>Experience with J2EE, Tomcat, JBoss, and relational databases such as MySQL, MSSQL, Oracle</li>
<li>Computer Science degree or equivalent</li>
<li>Experience working on a large project</li>
<li>At least three years of post-graduate experience</li>
<li>Deep understanding of OO programming principles and commitment to clean, efficient, well-documented code.</li>
<li>Professional experience with EJB</li>
</ul>
<p><strong>BENEFITS AND PERKS</strong></p>
<ul>
<li>Competitive salary</li>
<li>Referral bonuses</li>
<li>Flexible work schedules</li>
<li>Professional development and career growth opportunities</li>
<li>Awesome team members</li>
</ul>
<p><strong>To Apply</strong></p>
<p>For immediate consideration, visit: <a href="https://tinyurl.com/3ba3vntr">https://www.agiloft.com/Sr.EJB</a></p>
',
    'how_to_apply' => '<p>To submit your application visit: <a href="https://tinyurl.com/3ba3vntr">https://www.agiloft.com/Sr.EJB</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcnFhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--a9d490b75a29b7ccf5332c9410d777ca03644c6e/Agiloft%20Logo%20plain%20(Indeed).png',
  ],
  6 => [
    'id' => 'e5606bd6-5540-4a58-b22a-68231943ab6d',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/e5606bd6-5540-4a58-b22a-68231943ab6d',
    'created_at' => 'Mon Mar 01 19:01:49 UTC 2021',
    'company' => 'Boston Red Sox ',
    'company_url' => NULL,
    'location' => 'Boston',
    'title' => 'Developer, Baseball Systems ',
    'description' => '<p>POSITION OVERVIEW:</p>
<p>The Developer, Baseball Systems position will be a member of the baseball operations software development team, and is responsible for the design, development, and support, of all baseball systems. This individual will work closely with members of Baseball Operations to understand business requirements that drive the analysis, design, and development of quality baseball systems and solutions. This developer will collaborate with the Director of Baseball Systems, Baseball Operations personnel, vendors, and consultants, in support of baseball’s technical infrastructure, key systems and platforms, and analytics and visualization tools.</p>
<p>Responsibilities:
Create leading-edge baseball solutions together with the software development team and others on new and improved baseball systems
Contribute to the design and implementation of the software architecture and embrace a software engineering mindset
Participate in key phases of the software development process of critical baseball applications, including requirements gathering, analysis, effort estimation, technical investigation, software design and implementation, testing, and bug fixing
Responsible for the design and development of databases, web services, graphical user interfaces, and other aspects of web applications
Actively participate with other software developers in design reviews, code reviews, and other best practices
Work closely at times with baseball analysts to design and implement solutions to their data needs
Respond to and resolve technical problems and issues in a timely manner
Identify and implement creative solutions for technical challenges</p>
<p>Technical Skills:
Bachelor’s degree in Computer Science, Software Engineering, Computer Engineering, or a related field
0-2 years of development experience using some combination of C#, Java, Python, Ruby, JavaScript, Typescript, T-SQL, ServiceStack, Angular, React, Vue, Knockout, or other frameworks, with a focus on responsive &amp; progressive web applications. Candidates just out of school should have applicable project work that exhibits experience with modern full-stack technologies
Strong database design and development experience, especially with MS SQL Server
Experience with cloud technologies from AWS and GCP are a plus
Experience integrating systems and data using third-party APIs and services are a plus
Experience with R is a plus
Design experience with Zeplin, Photoshop, or similar applications, are a plus
Experience with source control tools such as Git, TFS, or similar</p>
<p>General Skills:
Ability to work autonomously and as a team in a fast paced environment
High level of attention to detail with the ability to multi-task effectively
Comfortable working remotely using Zoom, Teams, Slack, Trello, and other tools to communicate with all team members
High degree of professionalism and ability to maintain confidential information
Excellent organizational and time management skills
An understanding of baseball, common terms, and analytic measures, are a plus
Prospective employees will receive consideration without discrimination based on race, religious creed, color, sex, age, national origin, handicap, disability, military/veteran status, ancestry, sexual orientation, gender identity/expression or protected genetic information.</p>
',
    'how_to_apply' => '<p><a href="https://jobs.lever.co/redsox/9824b8b4-5f7c-445a-be7d-da0d0bb14218">https://jobs.lever.co/redsox/9824b8b4-5f7c-445a-be7d-da0d0bb14218</a></p>
',
    'company_logo' => NULL,
  ],
  7 => [
    'id' => '6b7f94cd-a7fe-48d6-8c20-60407c0b86e5',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/6b7f94cd-a7fe-48d6-8c20-60407c0b86e5',
    'created_at' => 'Mon Mar 01 18:17:09 UTC 2021',
    'company' => 'Axios',
    'company_url' => 'http://axios.com',
    'location' => 'Remote (USA)',
    'title' => 'Software Engineer',
    'description' => '<p>Quick take: Axios is a growth-stage startup dedicated to providing trustworthy, award-winning news content in an audience-first format. We are hiring a Software Engineer!</p>
<p>Why it matters: Our Engineers are a critical part of our mission to deliver the cleanest, smartest, most efficient, and trustworthy content to our users. You will architect and grow new and existing codebases, give technical input and feedback to Axios’ product and design teams for new features, and champion industry best practices around testing, accessibility, and documentation.  </p>
<p>Go deeper: In this role, you will make an impact on Axios through the following responsibilities:</p>
<p>Help architect and build significant features across the Axios web site, content/media management systems, and feeds
Write clean, well-documented, and well-tested code
Advocate for best practices, automation over repetition, the best technical approaches, and when to build vs buy
Collaborate with Axios’ platform engineers, product managers, and product designers to ensure we quickly and safely ship and iterate on high-quality products
Stay up to date with industry trends and collaborating on best practices </p>
<p>The details: Ideal candidates will embody an entrepreneurial spirit, a passion for Axios’ mission, and have the following skills:</p>
<p>Experience working in large, high traffic front-end codebases, primarily in React
At least two years of experience developing software in a server-side programming language, e.g. Python, Go, Typescript, or Node
Proven ability to ship high quality, testable, and accessible code
Experience working with Postgres, GraphQL, and relational databases is preferred
Proven experience with AWS such as EC2, Lambda, S3, and EKS
Experience working on cross-functional agile teams where you advocate for technical needs as well as the best solution to the problems at hand
Specific passion for user-focused and data-driven decision making
Experience working on web performance and accessibility is preferred
Experience with TDD and up-front tech design planning
Experience in testing and debugging applications
Experience working with asset management, content management, ad tech, and A/B testing solutions
Caching and multi-layered caching strategies (e.g. redis, memcached, but also Cloudflare, Fastly, etc) is preferred
Experience with Google AMP is highly valued
A passion for media and building award-winning brands</p>
<p>Don’t forget:</p>
<p>Competitive salary
Health insurance (100% paid for individuals, 75% for families)
Primary caregiver 12-week paid leave
401K
Generous vacation policy, plus company holidays
Company equity
Commuter and cell phone benefit
A commitment to an open, inclusive, and diverse work culture</p>
<p>Additional pandemic-related benefits:</p>
<p>One mental health day per quarter
$100 monthly work-from-home stipend
Tele-mental health services
OneMedical membership, including tele-health services
Increased work flexibility for parents and caretakers
Access to the Axios “Family Fund”, which was created to allow employees to request financial support when facing financial hardship or emergencies
Weekly company-sponsored exercise and meditation classes
Virtual company-sponsored social events</p>
',
    'how_to_apply' => '<p><a href="https://grnh.se/e6cbd7101us">https://grnh.se/e6cbd7101us</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcSthIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--7e102cff00b5e510015131470c3fa511aac40b4a/Axios%20logo%20-%20RGB%20-%20minimum%20space.jpg',
  ],
  8 => [
    'id' => 'dbbbc8ce-5f39-4dc3-a1b0-dd388acbd13c',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/dbbbc8ce-5f39-4dc3-a1b0-dd388acbd13c',
    'created_at' => 'Sun Feb 28 07:00:18 UTC 2021',
    'company' => 'Tokyo Digital Ltd',
    'company_url' => 'https://tokyo.uk',
    'location' => 'UK',
    'title' => 'Technical Project Manager',
    'description' => '<p>TECHNICAL PROJECT MANAGER REQUIRED (PERM) FOR UK LIVERPOOL AND LONDON DIGITAL AGENCY (REMOTE FOR THE MOST IS OK).</p>
<p>So who are we?
We are TOKYO a digital agency and are looking for a Technical Project Manager to join our team on a permanent basis.  We are based in Liverpool and London but at the moment we’re all working remotely, and it works so well we are not averse to people to choosing to remain remote once lockdown is over.  We’re easy going, and whilst you contract may say we’re a 9-5 operation, or to the needs of the business.  It’s certainly the latter, given our international client base and times of campaigns, it can be busy 9-5, it may not, but may be busy other times.  So, we flex to the requirements of our clients.  We don’t ‘clock on and off’ but we are here for our clients and colleagues.  We’re a modern tech outfit.</p>
<p>What we do
Along with developing digital campaigns we get involved in some heavy tech integrations of systems, usually the website pulling/pushing to a range of client systems.  We don’t particularly specialise in any, we’ll figure it out.  Its API, its data, its integration and we love a challenge of something we haven’t done before.  (Not that we probably haven’t already!)</p>
<p>What do we have already?
So, we have project managers (client facing), a Tech Director, we have developers, sysadmins, and one of our biggest and unique agency assets is we have a huge roster of freelancers that you can call upon and internal systems for searching down the right person to build a team for a job.</p>
<p>So, what is is we need?
Some more internal technical ‘glue’.  We need someone who can work with our Directors, client facing project managers and the rest of the team and support them.  So it may be with client meetings in ensuring we capture the full tech requirements of their project and the resource implications for us, you’d work closely with the client project manager on this. Then it’d be about ensuring the right resource is on the project internally.  That the project is adequately scoped out and that from a tech perspective it stays on track.</p>
<p>What might you be doing?
Keeping an eye on code commits to repositories (i.e. just on the ball as to tech activity), ensuring our guys aren’t getting swamped, deciding if we need extra resource and looking at what we need.  Reviewing if we have the right people on the job.  Keeping a watchful eye for scope creep from the client.  Assisting with the onboarding process, ensuring the right people are kicked to get dev, staging and production environments setup on our systems.  That freelancers have appropriate access to tech systems (i.e. granted on a ‘need to have basis’).  Holding people to account, all in a friendly way.</p>
<p>Your background
In case you hadn’t guessed already, we’re a relaxed company, we strongly believe in process and procedure’s – but only when they are necessary.  There’s no particular right or wrong way and we aren’t going to say you have to have been a Software Engineer, a SysAdmin, SysOps person in the past (though maybe very helpful) its more the technical understanding.  You need to be able to talk tech on the same level with clients and be on a level with our technical teams.  You’ll be organised be able to chip in on proposals particularly in writing a bit of tech spec and predicting internal resource requirements (skillsets and time needed).</p>
<p>It’d be helpful if you’d be able to chip in on setting up new repo’s, our CI/CD system and environments, but that’s not a requirement and certainly if you’d like to jump straight in on that stuff you can.  Equally if you’d like to learn, we’ll show you the ropes.</p>
<p>When do we need the role and what’s the salary?
The answer is yesterday, and Salary is based on experience and skillsets etc.  It’s a full-time role, official base would be Liverpool or London but can remain remote (though be good to catch up with your peers for regular coffees/drinks when lock-down allows).  We’ll provide BUPA healthcare, gym membership (when they open again), kit you need, mobile phone and other bits you’d expect from a tech company.</p>
<p>Application process
Apply via: <a href="https://tokyodigital.recruitee.com/o/technical-project-manager">https://tokyodigital.recruitee.com/o/technical-project-manager</a>
OR visit our website at <a href="https://tokyo.uk/freelancer-application?perm-tech-pm-role">https://tokyo.uk/freelancer-application?perm-tech-pm-role</a> (ignore references to freelancer roster, we’re just using the same form to keep things simple for us, your interest will hit the right people!). Forget the hourly rate field (stick in £100 and as to Fee Preference: no pref).</p>
<p>Look forward to hearing from you!</p>
<p>Chris Evans
Tech Director
Tokyo Digital Ltd
<a href="https://tokyo.uk">https://tokyo.uk</a></p>
',
    'how_to_apply' => '<p>Apply online:
<a href="https://tokyodigital.recruitee.com/o/technical-project-manager">https://tokyodigital.recruitee.com/o/technical-project-manager</a>
OR:
<a href="https://tokyo.uk/freelancer-application?perm-tech-pm-role">https://tokyo.uk/freelancer-application?perm-tech-pm-role</a>
BY EMAIL:
<a href="mailto:job.7r7t5@tokyodigital.recruitee.com">job.7r7t5@tokyodigital.recruitee.com</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcFdhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3d4aca1278832275d8c696c8064a6b554646448b/Screenshot%202021-02-28%20at%2006.57.38.png',
  ],
  9 => [
    'id' => 'c0597b63-3b33-4609-b1a4-ff638995cf50',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/c0597b63-3b33-4609-b1a4-ff638995cf50',
    'created_at' => 'Fri Feb 26 18:59:02 UTC 2021',
    'company' => 'The Nature Conservancy',
    'company_url' => 'http:',
    'location' => 'Arlington, VA preferred but flexible across the U.S. ',
    'title' => 'Web Developer',
    'description' => '<p>A LITTLE ABOUT US</p>
<p>Founded in 1951, the Nature Conservancy is a global conservation organization dedicated to conserving the lands and waters on which all life depends. Guided by science, we create innovative, on-the-ground solutions to our world\'s toughest challenges so that nature and people can thrive together. We are tackling climate change, conserving lands, waters and oceans at unprecedented scale, providing food and water sustainably and helping make cities more sustainable.  One of our core values is our commitment to diversity. Therefore, we strive for a globally diverse and culturally competent workforce. Working in 72 countries including all 50 United States, we use a collaborative approach that engages local communities, governments, the private sector, and other partners. To learn more, visit <a href="http://www.nature.org">www.nature.org</a> or follow @nature_press on Twitter.</p>
<p>The Nature Conservancy has a deep commitment to diversity, equity and inclusion. We seek to create an inclusive and diverse culture among our team members, volunteer leaders, supporters, partners and the communities where we work to promote conservation work that is both equitable and just. This is true of us and the work we support.  Equity and justice are essential to creating a world where all of nature, including humanity, thrives.</p>
<p>YOUR POSITION WITH TNC</p>
<p>The Web Developer will be primarily responsible for supporting The Nature Conservancy’s global email program and participates in all functions of email development for TNC’s digital marketing and communications efforts worldwide.</p>
<p>ESSENTIAL FUNCTIONS</p>
<p>The Web Developer develops new email solutions for global marketing campaigns, targeted influencer and stewardship efforts, geotargeting, personalization and measurement tactics. They translate partner and user needs into technical requirements following TNC web development methodology and best practices.  They deliver technology-based email and web solutions in support of TNC’s communications efforts and Global Digital’s joint KPIs.  They will be responsible for developing and maintaining TNC’s marketing email systems, templates, related interactive features, forms, and tools.  In addition, the Web Developer acts as a member of the Digital Systems team on marketing web systems projects related to application upgrades, conversion and modifications.  As needed, they act as a quality assurance analyst to conduct peer review and validate programmer work done before release to production in all phases of the project life cycle.  They perform tasks assigned as required to complete projects including but not limited to; technical design, development, running specific programs, generating reports and analyzing results.  They provide support for troubleshooting and bug resolution as needed and assigned.</p>
<p>RESPONSIBILITIES &amp; SCOPE</p>
<ul>
<li>Develop and implement email templates and campaigns.</li>
<li>Analyze and document end-user requirements for email projects.</li>
<li>Design and develop new email technology solutions according to system requirements following TNC methodology and development best practices.</li>
<li>Act as team member on technology application maintenance projects related to application upgrades, conversions, and modifications.</li>
<li>Perform tasks assigned as required to complete project including but not limited to; technical design, development, running specific programs, generating reports and analyzing results.</li>
<li>Provide support for troubleshooting and bug resolution as assigned.</li>
<li>Act as quality assurance analyst to conduct peer reviews and validate programmer analyst work done for minor systems before their release to production in all phases of the project life cycle.</li>
<li>Provide support for business applications including diagnosing problems requiring analysis and troubleshooting.  Design and implement solutions for corrective action in consultation with Global Digital team.</li>
<li>Assist with data standards compliance and best practices to facilitate integration between systems within marketing and its partners.</li>
<li>Acquire, maintain, expand, and convey knowledge of relevant technologies and businesses supported.</li>
<li>Attend training classes to maintain a knowledge base of current technology.  Review technical publications on pertinent topics.</li>
</ul>
<p>MINIMUM QUALIFICATIONS</p>
<ul>
<li>Bachelor\'s degree in information systems or a related field and 2 years’ progressive experience in an IT field or equivalent combination.</li>
<li>Experience in email development and email web development standards.</li>
<li>Experience with full life-cycle technology application development.</li>
<li>Proficiency in client-side programming including JavaScript/Ajax/jQuery, latest HTML proposed standard combined with the latest proposed standard for CSS.</li>
<li>Experience in web development and image editing software.</li>
</ul>
<p>DESIRED QUALIFICATIONS</p>
<ul>
<li>Multi-lingual skills and multi-cultural or cross-cultural experience appreciated.</li>
<li>May include certifications, languages, software knowledge.</li>
<li>Ability to utilize knowledge to identify solutions, communication and influencing skills, specific managerial functions, etc.</li>
<li>Experience with MailChimp, SAS, Adobe Experience Manager, Engaging Networks, Geolocation, Google API, marketing automation, payment applications, mobile application development a plus.</li>
</ul>
<p>HOW TO APPLY</p>
<p>To apply to position number 49401, submit resume (required) and cover letter separately using the upload buttons. Applications will be reviewed in the order they’re received and the position will remain open until filled.</p>
<p>Click “submit” to apply for the position or “save for later” to create a draft application for future submission. Once submitted, applications cannot be revised or edited. Failure to complete required fields may result in your application being disqualified from consideration.</p>
<p>If you experience technical issues, please refer to our applicant user guide or contact <a href="mailto:applyhelp@tnc.org">applyhelp@tnc.org</a>.</p>
<p>The Nature Conservancy is an Equal Opportunity Employer</p>
<p>Our commitment to diversity includes the recognition that our conservation mission is best advanced by the leadership and contributions of people of diverse backgrounds, beliefs and culture. Recruiting and mentoring staff to create an inclusive organization that reflects our global character is a priority and we encourage applicants from all cultures, races, colors, religions, sexes, national or regional origins, ages, disability status, sexual orientation, gender identity, military, protected veteran status or other status protected by law.</p>
<p>The successful applicant must meet the requirements of The Nature Conservancy’s background screening process.</p>
',
    'how_to_apply' => '<p>We would like to invite you to visit our careers site to complete your application.</p>
<p>DIRECTIONS:</p>
<ol>
<li>Select the  link to access our careers site.</li>
<li>Sign In to access your account or if you are not an existing user select the New User link to create one.</li>
<li>Review the job description and select the Apply button to begin your application.</li>
</ol>
<p><a href="https://careers.nature.org/psp/tnccareers/APPLICANT/APPL/c/HRS_HRAM_FL.HRS_CG_SEARCH_FL.GBL?Page=HRS_APP_JBPST_FL&amp;Action=U&amp;FOCUS=Applicant&amp;SiteId=1&amp;JobOpeningId=49401&amp;PostingSeq=1">https://careers.nature.org/psp/tnccareers/APPLICANT/APPL/c/HRS_HRAM_FL.HRS_CG_SEARCH_FL.GBL?Page=HRS_APP_JBPST_FL&amp;Action=U&amp;FOCUS=Applicant&amp;SiteId=1&amp;JobOpeningId=49401&amp;PostingSeq=1</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbzJhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0aa2ce0991d74ab51172edfb9cc2a2a104688ee9/TNCLogoPrimary_CMYK_Tag_ENG.jpg',
  ],
  10 => [
    'id' => 'bd7845f6-b4c8-4829-ad9e-4316d8795b18',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/bd7845f6-b4c8-4829-ad9e-4316d8795b18',
    'created_at' => 'Fri Feb 26 15:43:01 UTC 2021',
    'company' => 'ORTEC - Optimize Your World',
    'company_url' => 'https://ortec.com/nl-nl',
    'location' => 'Zoetermeer',
    'title' => 'Technical Lead Developer',
    'description' => '<p>Your enthusiasm and thirst for knowledge are what pulls you out of bed in the morning. You’re looking for a career opportunity that allows you to prove yourself and your skills, day after day. You want your experience and capabilities to have a life-changing impact on other people. You are the <strong>Technical Lead Developer</strong> we are looking for.</p>
<p>ORTEC Healthcare is leveraging data science, artificial intelligence, machine learning and cutting-edge techniques to push the healthcare industry to the next level. We develop software applications for medical care and (bio)medical research: clinical decision-making tools, medical workflow support and applications for scientific research. These applications cover a broad area of medicine, e.g. cardiovascular medicine (most notably U-Prevent), oncology, lung disease and various other disciplines (e.g. rheumatology, pregnancy, toxicological prediction models).</p>
<p>In this role as <strong>Technical Lead Developer</strong> you are responsible for a team of 4 working on our SaaS product U-Prevent. You take responsibility for the quality of the product to ensure it is bug free, maintainable and secure. You assess the work break down with a critical eye and you write technical designs. You are a cooperating foreman and help the remainder of the team to stay productive. We embrace Continuous Delivery and a DevOps culture, so your team is also responsible for the smooth running of the product in Production (e.g. security and availability). On a team level, you have full HR responsibility for your team members, meaning you have one-on-one meetings on a regular basis, you coach them in their personal development and you take care of the performance cycle.</p>
<p>As our Technical Lead Developer you are intrinsically motivated and you thrive when given autonomy, even more so, you take charge and ownership in your work. We want you to challenge us by sharing your thoughts and with that, as a team, we will come to the right solution. You love to challenge yourself and to keep learning.</p>
<p>We are a team of highly skilled professionals, powered by a desire to innovate. We are an organized and efficient unit, we work with purpose and we make best practices a part of our everyday culture. We produce software that actually matters. Come join us.</p>
<p><strong>Who you are</strong></p>
<ul>
<li>Comfortable with handling high complexity</li>
<li>Experienced with .NET technologies, including Azure</li>
<li>Experienced with Angular 7 and up</li>
<li>You have teamlead experience, or coaching experience with the ambition to become a team lead</li>
<li>At least 5 years of relevant experience</li>
<li>Able to communicate fluently in English, both spoken and written</li>
<li>Willing to develop yourself continuously</li>
<li>(Preferred) Experienced in the Healthcare industry</li>
<li>(Preferred) Experience with ISO27001 certification or similar</li>
<li>Conscientious in staying abreast of new developments</li>
<li>Highly knowledgeable in software development, with at least 5 years of experience</li>
<li>Inquisitive, creative and enthusiastic about sharing your ideas and know-how</li>
<li>Passionate about IT – it’s not just your job, it’s your true calling</li>
<li>Holding a Master’s in Information Technology or comparable</li>
</ul>
<p><strong>What we offer</strong></p>
<ul>
<li>Entrance to the most passionate powerhouse in applied mathematics</li>
<li>Join our movement and improve the world</li>
<li>Enjoy an open, kind and fun culture</li>
<li>NS Business Card 100%, NS Business Card, lease opportunity or commuting allowance: it’s your choice</li>
<li>Mobility allowance of 3% of your base salary</li>
<li>25 annual leave days, additional days from the age of 35</li>
<li>Active employee association for fun activities with colleagues and content driven Young ORTEC for you to join</li>
<li>We help you to #stayhealthy, #stayeffectve and to #stayconnected; we organize online activities such as pub quizzes, online sports events, social calls with colleagues, and much more</li>
<li>Year-end bonus equal to a full month’s pay</li>
<li>We believe in commitment: your permanent contract will be waiting for you</li>
</ul>
<p><strong>What to expect</strong></p>
<p>We will help you to thrive in your field of expertise. We offer development programs, tailored to your individual needs and function requirements, including opportunities to attend courses and seminars. We offer challenging, practical hands-on experience with opportunities to work abroad. We operate in a flat organizational structure that keeps communication lines short. The atmosphere is open, informal, cooperative and positive. We employ over 1000 people in the Netherlands (HQ), Belgium, Germany, France, the U.K., Romania, Italy, the U.S., Australia, Brazil, Poland, Denmark and Singapore. Visit our website <a href="http://www.ortec.com">www.ortec.com</a> to learn more about our solutions and clients’ experiences. Please do not use this vacancy as an acquisition opportunity.</p>
<p><strong>Interested?</strong></p>
<p>Apply now via the application form.</p>
<p><a href="https://vonq.io/3koZ5YA">Click here for the application form!</a></p>
',
    'how_to_apply' => '<p><a href="https://vonq.io/3koZ5YA">Click here for the application form!</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBb0dhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0b958b75b037b31cd698ea5f591a8da3f6615365/ortec+.png',
  ],
  11 => [
    'id' => '6d3d6fa2-1861-46ac-be3c-177e03aad62b',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/6d3d6fa2-1861-46ac-be3c-177e03aad62b',
    'created_at' => 'Thu Feb 25 22:20:15 UTC 2021',
    'company' => 'Build Change',
    'company_url' => 'https://buildchange.org/',
    'location' => 'Remote',
    'title' => 'Chief Technology Officer',
    'description' => '<p>WORK FOR AN AWARD-WINNING NON-PROFIT SOCIAL ENTERPRISE</p>
<p>Job Title: Chief Technology Officer</p>
<p>Industry: Non-profit/International Development</p>
<p>Job Location: Global – Work from home &amp; regular travel</p>
<p>Start Date: Immediate</p>
<p>Term: At-will employment</p>
<p>Salary: Competitive, based on experience</p>
<p>WHO WE ARE</p>
<p>Founded in 2004, Build Change is an innovative international non‐profit social enterprise whose mission is to save lives in earthquakes and hurricanes. We do that by designing disaster-resistant houses and schools; training homeowners, builders, engineers and government officials to build them; working with governments to develop and implement building standards; partnering with the private sector to improve building materials quality and create jobs; and facilitating access to incentive-based capital for reconstruction and retrofitting by partnering with financing institutions and government subsidy programs.</p>
<p>Build Change is the recipient of multiple awards, including a 2017 Skoll Foundation Award for Social Entrepreneurship, OpenIDEO Urban Resilience Challenge Winner, and was a top three finalist in IBM’s inaugural Call for Code Developer Challenge in 2018.</p>
<p>To learn more about us and our programs in Colombia, Nepal, the Philippines and the Caribbean, visit <a href="http://www.buildchange.org">www.buildchange.org</a>.</p>
<p>YOUR NEW OPPORTUNITY</p>
<p>Build Change’s Technology Division is seeking to head its activities around the world.</p>
<p>This position reports to the CEO.</p>
<p>POSITION RESPONSIBILITIES</p>
<p>*Head Build Change’s Technology Division</p>
<p>*Implement Build Change’s strategy</p>
<p>*Represent Build Change in front of key technology stakeholders such as donors, partners, subcontractors and clients</p>
<p>*Lead Build Change’s software development team</p>
<p>*Nurture and recruit required talent for the Technology team, and support the Build Change’s programs around the world in recruiting and/or sourcing new software development talent</p>
<p>*Manage the timely delivery of work packages from remote coding capacities, including Build Change software based in other countries and non-Build Change software developers working for third-party software development service providers</p>
<p>*Manage the referencing of existing in-house developed software and the establishment of an internal code depository</p>
<p>*Ensure that all global systems are accessible, branded, operational and disruption-free</p>
<p>*Establish cyber-security protocols and manage their implementation across all activities</p>
<p>*Ensure program-balanced budgets</p>
<p>*Ensure that deliverables/milestones for projects for which you are responsible for are delivered according to time and budget</p>
<p>*Be solution-oriented and ensure the timely delivery of functioning client-ready mobile applications and web portals in accordance to allocated resources</p>
<p>*Train and mentor the coding team under your responsibility</p>
<p>*Produce internal monthly reports and, when required, internal reports for the CEO and Board of Directors</p>
<p>OTHER RESPONSIBILITIES</p>
<p>Opportunity-dependent:</p>
<p>*Work from home, while collaborating with colleagues located around the world (Asia, Europe, Africa, North America and South America)</p>
<p>*Travel, when necessary (no more than 25% of your time on average), to support the delivery of software products around the world, or to participate in presenting your work and Build Change’s technology innovations at conferences or at meetings with clients, partners and donors</p>
<p>*Support business development efforts to develop technology components in concepts and proposals</p>
<p>*Support the CEO and the business development team in creating and delivering presentations’ slide decks, sales pitches, and promotional videos with the objective of securing new funding for Build Change technology related activities</p>
<p>*Support the development of a business model and monetization strategy from Build Change technology services and products</p>
<p>*Perform additional duties as required by your supervisor</p>
<p>OUR IDEAL CANDIDATE</p>
<p>YOU HAVE:</p>
<p>-10 years\' minimum experience leading teams of software developers, specifically leading the development of mobile applications and web portals</p>
<p>-Advance college degree in Information Technology or related field</p>
<p>YOUR EXPERIENCE INCLUDES:</p>
<p>-Managing the delivery of software work packages from large teams consisting of developers reporting to you as well as from third-party software development providers</p>
<p>-Rolling out and ensuring the maintenance of mobile applications and web portals</p>
<p>-Managing de-localized teams, including team members in similar time zones and developers in very different time zones</p>
<p>-Working closely with product design and business teams to bring a software product to market</p>
<p>-Recruiting developers as well as building and maintaining a software development team</p>
<p>-Contractually managing the performance and timely delivery of software deliverables produced by third-party software development providers</p>
<p>-Developing and rolling out Artificial Intelligence (AI) functionalities</p>
<p>-Developing and rolling out Augmented Reality (AR) or Mixed Reality (MR) functionalities</p>
<p>-Experience calibrating and rolling-out UXs for non-technical / everyday users</p>
<p>YOU ARE ABLE TO:</p>
<p>-Recruit and manage a team consisting of, but not limited to, the following specialties:</p>
<p>--&gt;React Native developers</p>
<p>--&gt;Full Stack developers</p>
<p>--&gt;Machine Learning engineers</p>
<p>--&gt;Python developers</p>
<p>--&gt;Dynamo developers</p>
<p>--&gt;3D animation and AR experts</p>
<p>--&gt;BIM experts</p>
<p>YOU WOULD DESCRIBE YOURSELF AS;</p>
<p>-Drama-free, optimistic, flexible, humble, patient, and having a good sense of humor</p>
<p>-Fluent in English</p>
<p>AND MAYBE YOU ALSO:</p>
<p>-Have worked in the Caribbean, Latin America, Asia or emerging nations</p>
<p>-Speak Spanish or any of the languages spoken in our program countries</p>
<p>-Have experience successfully developing, rolling out and maintaining software in emerging nations</p>
<p>-Have experience working on software that is connected to Building Information Modeling (BIM)</p>
<p>ARE YOU INTERESTED?</p>
<p>Then please visit <a href="http://www.buildchange.org/about/careers">www.buildchange.org/about/careers</a> and select the link for this position. Applications will be accepted until filled and will be reviewed as received. Only shortlisted candidates will be contacted. No calls please.</p>
',
    'how_to_apply' => '<p>Click "Apply Now" on our website\'s posting of the position: <a href="https://buildchange.applicantstack.com/x/detail/a2cn2wdfh30a">https://buildchange.applicantstack.com/x/detail/a2cn2wdfh30a</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbTZhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--005520e7583b36a20a2badef9cb2600d20876aeb/BuildChange_Hex_Final_wide.png',
  ],
  12 => [
    'id' => '0da14936-394d-424c-a089-862665eb52a8',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/0da14936-394d-424c-a089-862665eb52a8',
    'created_at' => 'Thu Feb 25 10:12:14 UTC 2021',
    'company' => 'madewithlove',
    'company_url' => 'https://madewithlove.com',
    'location' => 'Amsterdam',
    'title' => 'Full-stack engineer (f/m/x)',
    'description' => '<p>Our client is currently looking for a full-time and experienced full-stack engineer (f/m/x) that will be joining an exciting Amsterdam-based startup lead by ex-Uber and ex-Facebook employees. You will be developing the product from the ground up, while working according to the latest standards and you take pride in delivering nothing but high-quality PHP (Laravel) and React code, and know your way around in tooling and APIs.</p>
<h2>What will you be doing?</h2>
<ul>
<li>You will be writing modern PHP and Javascript code while understanding that continuous refactoring is part of the job. You have a critical and pragmatic approach to guard over the quality of the code.</li>
<li>You review the technical architecture of the platform and make the right choices on technologies we should (not) use.</li>
<li>You\'ll be responsible for implementing automatic testing because you understand it’s an integral part of delivering high-quality features.</li>
<li>You collaborate with a small team of top-notch engineers and aim to improve others as much as yourself.</li>
<li>You implement and maintain development processes.</li>
</ul>
<h1>Requirements</h1>
<p>!! Don\'t hesitate to apply if you don\'t fulfil 100% of the requirements. Superheroes don\'t exist, people with passion and talent do.</p>
<h2>Soft skills</h2>
<ul>
<li>You like working in a startup environment and you have some affinity with the health and beauty industry. You can manage your own time and you are flexible enough to go the extra mile if needed.</li>
<li>You have at least 3 years of experience building software applications.</li>
<li>You are able to give others honest, constructive and actionable feedback. Credit is assigned accurately and generously.</li>
<li>You know where information can be found and actively search for it. You can think for yourself and challenge the information you find. You don\'t hesitate to ask questions because others know things you don\'t. You document everything and in such a way that everybody can understand what is happening and why.</li>
<li>Although you can work independently and efficiently, you like to work in a team environment. Once a group decision is made, you act as a team member by following the architecture, the processes and coding standards as agreed upon.</li>
<li>You do what you promise and you take ownership of tasks. You always try to go for the best quality possible with respect to timing and budget. You understand the why of decisions and you suggest improvements when you see an opportunity.</li>
<li>You always aim for quality so you actively and consistently strive to expand your knowledge, both technical and non-technical. You like sharing your knowledge with colleagues and the world through different channels (blogging, presentations, group discussions, ...).</li>
<li>You can communicate clearly, taking into account who your audience is. You are always honest, sometimes brutally so, but you are aware of the situation and always stay polite. You know which is the right channel for each message or question.</li>
</ul>
<h2>Hard skills</h2>
<ul>
<li>You are a PHP/Laravel expert with a good understanding of React, or the other way around</li>
<li>You know how to handle state, routing &amp; side-effects with React.</li>
<li>You have experience setting up tooling for a modern web app.</li>
<li>You have experience setting up infrastructure (e.g. DigitalOcean, Amazon Web Services)</li>
<li>You have experience building RESTful APIs</li>
<li>You like to make an impact and are keen to translate designs (Figma) into code</li>
<li>You are keen on quality assurance and automatic testing</li>
<li>Proper coding architecture is what makes you happy (e.g. MVC, SOLID).</li>
<li>Version control (e.g. Git) is something you can\'t do without</li>
<li>Although we like accents, your English must be very good, both oral and written</li>
</ul>
<h2>Bonus points</h2>
<ul>
<li>You have experience building mobile applications</li>
<li>You have something valuable to add when discussing the product, UX and/or UI.</li>
<li>You have an affinity with machine learning.</li>
<li>You have experience setting up CI/CD pipelines (e.g. GitHub Actions)</li>
<li>You are familiar with Shopify.</li>
<li>Vous pouvez vous exprimer dans la langue de Molière</li>
</ul>
<h2>What you will be offered</h2>
<ul>
<li>A remuneration in accordance with the Dutch startup market</li>
<li>Flexible working conditions</li>
<li>25 paid holidays</li>
</ul>
<h1>The strengths of a good mix</h1>
<p>We specifically encourage underrepresented groups to apply. We believe in the strengths of well-balanced, and mixed teams and hope our applications will attract a broader audience, no matter the gender, religion, race, age, disability, linguistic differences, socioeconomic status, or sexual orientation. Read more about our efforts towards a more inclusive and diverse environment.</p>
<p>Hope to speak soon!</p>
',
    'how_to_apply' => '<p>Apply to our open positions via this URL: <a href="https://madewithlove.com/jobs/">https://madewithlove.com/jobs/</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbVdhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--a2bd45ce3d759fa8f190678e8b8f5467059a6629/mwl-logo-square.png',
  ],
  13 => [
    'id' => 'faf64bd8-7d21-44cf-bd9a-18211a1a7e9a',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/faf64bd8-7d21-44cf-bd9a-18211a1a7e9a',
    'created_at' => 'Thu Feb 25 09:46:10 UTC 2021',
    'company' => 'BSDEX GmbH',
    'company_url' => 'https://www.bsdex.de/de/',
    'location' => 'Berlin',
    'title' => 'DevOps Engineer (f/m/d) at BSDEX GmbH',
    'description' => '<p>About Boerse Stuttgart Digital Exchange GmbH</p>
<p>We, Boerse Stuttgart Digital Exchange GmbH (BSDEX), are building the first regulated trading venue for digital assets in Germany. Bitcoin, DeFi &amp; Co are changing the banking and exchange business and have become a $1T+ asset class in a very short time. The underlying blockchain technology is revolutionizing the way assets are handled along the financial value chain. We are now at an inflection point where trading and owning digital assets is becoming mainstream and being embraced by large traditional players such as investment banks, asset managers, family offices, and other major market participants are strongly embracing it institutionally.</p>
<p>We set high standards for transparency and security, and provide a reliable and trustworthy framework for trading these new assets. In order to realize this ambitious endeavor, we are looking for new colleagues (f/m/d) who are ready to take on responsibility and who bring a good dose of pioneering spirit and courage.</p>
<p><strong>Tasks</strong></p>
<ul>
<li>You take responsibility for our technical operations of the trading platform and drive adoption and consensus amongst stakeholders and team members</li>
<li>You collaborate closely with your technical stakeholders from Börse Stuttgart to ensure a smooth, reliable and secure running of our platform</li>
<li>You bring in your ideas and thoughts on technical problems to find best in class solutions and further develop our “devops-culture”</li>
<li>You support our various product/engineering teams and setup for deployments, interacting closely with our frontend and backend engineers on topics of security, scalability and infrastructure</li>
<li>You monitor, evaluate and decide on new technologies to be added to our tech stack</li>
<li>You actively participate in attracting further talent to grow a cutting edge tech team</li>
<li>You help us to build a highly performing team with startup mindset that manages the tradeoff between risk and progressive ideas</li>
</ul>
<p><strong>Requirements</strong></p>
<ul>
<li>Experience with cloud environments, deployment processes, containers and container systems (Kubernetes)</li>
<li>Ideally you have already worked in highly regulated industries/contexts such as the financial industry (i.e. banking, trading, fintech, token economy)</li>
<li>You are passionate about people and new work philosophies – ideally you have experience in building location-independent teams</li>
<li>You actively shape and contribute to a healthy team culture based on mutual trust and support and you are fun to work with :-)</li>
</ul>
<p><strong>Benefits</strong></p>
<ul>
<li>Participation and ownership in building the missing piece of infrastructure in Europe to trade digital assets</li>
<li>Access to resources and colleagues of Boerse Stuttgart and knowledge exchange / collaboration with other digitization projects within Boerse Stuttgart, namely Primary Market / Tokenization, Custody, BISON</li>
<li>Build software that matters</li>
<li>Opportunity to build your ideas and shape the technical and product vision</li>
<li>Professional growth opportunities in a small, growing, well-funded start-up</li>
<li>Flexible work schedule in a remote-first environment</li>
</ul>
<p>Sounds good? Please send us your CV/LinkedIn/Github (no need for a cover/motivation letter)!</p>
',
    'how_to_apply' => '<p><a href="https://bsdex.join.com/jobs/1931824-devops-engineer-f-m-d-at-bsdex-gmbh?pid=357a3b4531918760973f&amp;utm_source=github_jobs&amp;utm_medium=paid&amp;utm_campaign=single%2Bposting&amp;utm_content=devops%2Bengineer%2Bf%2Bm%2Bd%2Bat%2Bbsdex%2Bgmbh">https://bsdex.join.com/jobs/1931824-devops-engineer-f-m-d-at-bsdex-gmbh?pid=357a3b4531918760973f&amp;utm_source=github_jobs&amp;utm_medium=paid&amp;utm_campaign=single%2Bposting&amp;utm_content=devops%2Bengineer%2Bf%2Bm%2Bd%2Bat%2Bbsdex%2Bgmbh</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbUthIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--11bba462b0fbffcc7fe59b2e59289bb6f3171f3f/bsdex-gmb-h-logo-l.png',
  ],
  14 => [
    'id' => 'd1a95e28-5ed3-4c0d-a1db-1c5173e778ad',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/d1a95e28-5ed3-4c0d-a1db-1c5173e778ad',
    'created_at' => 'Wed Feb 24 21:25:53 UTC 2021',
    'company' => 'DSPolitical',
    'company_url' => 'http://www.dspolitical.com',
    'location' => 'Washington, DC 20005, USA',
    'title' => 'Salesforce Administrator & Developer',
    'description' => '<p>DSPolitical is hiring for a Salesforce Administrator and Developer to further solidify DSPolitical as the leader in targeted advertising for progressive digital campaigns by growing our presence in the market. </p>
<p>Who Are We?  </p>
<p>DSPolitical pioneers the best integration of data and technology to persuade audiences and deliver wins for progressive candidates, causes, issues with the most efficient and effective digital advertising campaigns in politics and issue advocacy. </p>
<p>DSPolitical doesn’t just offer solutions -- we create them. Our team works hand-in-hand to develop and deploy leading-edge solutions, uniquely crafted to reach the audiences our clients need to be successful in both the public affairs and political arena.</p>
<p>About the Position</p>
<p>The Salesforce Administrator &amp; Developer provides support to the Products &amp; Partnerships team. Manages all aspects of Salesforce and serves as an internal Subject Matter Expert. Understands the needs and processes of other departments, but asks for help and clarification as needed.</p>
<p>Specific duties may include the following:</p>
<p>Drive and implement DSPolitical’s Salesforce vision, roadmap, and architecture.
Work closely with stakeholders across all internal departments, such as Sales, Marketing, Accounting, and Engineering, to enable teams to reach company goals, from ideation to execution.
Customize and configure the Salesforce platform to translate the needs of a variety of stakeholders into actionable solutions.
Be the subject matter expert and resource for all things Salesforce, including administrative assistance, training, documentation, and system troubleshooting.</p>
<p>Essential Attributes &amp; Experience</p>
<p>Minimum 2 years of experience in customizing, developing, implementing and system management of Salesforce (Sales, Service, and Marketing)
Demonstrated experience in Salesforce development and configuration.
Familiarity with writing coding solutions using Salesforce core programming languages including Apex.
Demonstrated experience with Salesforce administration
Ability to coordinate with stakeholders across difference departments
Ability to communicate clearly to both technical and non-technical audiences</p>
<p>Preferred Qualifications</p>
<p>Certification in one or both of the following:
Salesforce Platform App Builder or Developer I
Salesforce Administrator
Experience integrating third party applications with Salesforce, including Pardot
Strong understanding of CRM-related business processes like Campaign Management, Lead Management, Pipeline Management and Account Management
Familiarity with Source control technologies such as GIT
Familiarity with project management using agile software development methodologies
Demonstrated interest in working in progressive politics and/or public affairs
Experience with project management tools such as Jira, Confluence, and Trello
Due to legal requirements of campaign ads, US work authorization is required.</p>
<p>DSPolitical is proud to offer: </p>
<p>Base salary between $70,000 - $90,000 and commensurates with experience
Unlimited leave (paid time off)
100% employer-paid health insurance for employees (including dental and vision)
Flex Spending Plan
Employee Assistance Program
401K with company matching
Student Loan Repayment Program
Professional development opportunities
Rewards and recognition programs
Mobile Phone &amp; internet reimbursement and much more!</p>
<p>Office Hours</p>
<p>Work hours are consistently 10:00 a.m. to 6:00 p.m. Monday – Friday, with the expectation that evening and weekend work will be required as necessary. Due to COVID-19, this position is temporarily remote for the 2021 year. </p>
<p>DSPolitical works hard to provide our clients with innovative solutions based on the diverse perspectives of our team. To that end, we’re committed to recruiting team members from a wide range of backgrounds and experiences. DSPolitical is an equal opportunity employer. We encourage applicants of all races, colors, gender identities, religions, ages, sexual orientations, national and ethnic origins, disabilities, marital status, veteran status and all backgrounds. </p>
<p>DSPolitical job offers are contingent on the results of a background check.</p>
',
    'how_to_apply' => '<p>To apply, submit an application at dspolitical.com/careers/</p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbHlhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d50c407233f206179afbf479ca8a9042cadf81f4/DSP-logo-b.png',
  ],
  15 => [
    'id' => '3457db5f-c67e-4352-a999-c8505f7acb4e',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/3457db5f-c67e-4352-a999-c8505f7acb4e',
    'created_at' => 'Wed Feb 24 21:21:28 UTC 2021',
    'company' => 'DSPolitical',
    'company_url' => 'http://www.dspolitical.com',
    'location' => 'Washington, DC 20005, USA',
    'title' => 'Front End Engineer I',
    'description' => '<p>DSPolitical is hiring for a Front End Engineer to further solidify DSPolitical as the leader in targeted advertising for progressive digital campaigns by growing our presence in the market. </p>
<p>Who Are We?  </p>
<p>DSPolitical pioneers the best integration of data and technology to persuade audiences and deliver wins for progressive candidates, causes, issues with the most efficient and effective digital advertising campaigns in politics and issue advocacy. </p>
<p>DSPolitical doesn’t just offer solutions -- we create them. Our team works hand-in-hand to develop and deploy leading-edge solutions, uniquely crafted to reach the audiences our clients need to be successful in both the public affairs and political arena.</p>
<p>About the Position</p>
<p>The Front End Engineer provides support to the Director of Engineering and Technology team. Works on the code base for the DSPolitical platform. Works to develop new product offerings and enhance existing offerings. Is able to ensure work is bug-free. </p>
<p>Specific duties may include the following:</p>
<p>Implement new features in the front end of DSPolitical\'s web applications.
Participate in the design process to steer feasibility and provide design input.
Help maintain existing software.
Collaborate with team members to write code and problem solve.
Ensure that the user experience of DSPolitical\'s products feels modern and fresh.
Provide Tier-1 trouble shooting.
Maintain confidentiality and professionalism.</p>
<p>Essential Attributes &amp; Experience</p>
<p>1+ years of experience in front end web application development.
Strong experience with JavaScript, with modern reactive frameworks, preferably Vue.js.
Experience interfacing with REST APIs, and UI/UX Design Theory.
Experience with CSS preprocessors such as SCSS or SASS.  Some experience designing wireframes or mock-ups in Sketch or XD is a plus
Experience with version control systems, particularly Git.
The Development Team is small and highly collaborative. Responsibilities can and will shift to some degree based on business needs, aptitude, and interest. The ability and interest to rapidly learn new skills and technologies is crucial.
Due to legal requirements of campaign ads, US work authorization is required.</p>
<p>DSPolitical is proud to offer: </p>
<p>Base salary between $60,000 - $80,000 annually and commensurates with experience
Unlimited leave (paid time off)
100% employer-paid health insurance for employees (including dental and vision)
Flex Spending Plan
Employee Assistance Program
401K with company matching
Student Loan Repayment Program
Professional development opportunities
Rewards and recognition programs
Mobile phone &amp; internet reimbursement and much more!</p>
<p>Office Hours</p>
<p>Work hours are consistently 10:00 a.m. to 6:00 p.m. Monday – Friday, with the expectation that evening and weekend work will be required as necessary. Due to COVID-19, this position is temporarily remote for the 2021 year. </p>
<p>DSPolitical works hard to provide our clients with innovative solutions based on the diverse perspectives of our team. To that end, we’re committed to recruiting team members from a wide range of backgrounds and experiences. DSPolitical is an equal opportunity employer. We encourage applicants of all races, colors, gender identities, religions, ages, sexual orientations, national and ethnic origins, disabilities, marital status, veteran status and all backgrounds. </p>
<p>DSPolitical job offers are contingent on the results of a background check.</p>
',
    'how_to_apply' => '<p>To apply, submit an application at dspolitical.com/careers/</p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbHFhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--a247320561011a8a6f5e1c95ef05d8118ece64a9/DSP-logo-b.png',
  ],
  16 => [
    'id' => '4e8f23db-99cf-4184-86cf-9f21aa241c76',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/4e8f23db-99cf-4184-86cf-9f21aa241c76',
    'created_at' => 'Tue Feb 23 15:56:58 UTC 2021',
    'company' => 'Western Governors University',
    'company_url' => 'http://www.wgu.edu',
    'location' => 'Remote',
    'title' => 'Senior Principal Engineer',
    'description' => '<p>If you’re passionate about building a better future for individuals, communities, and our country—and you’re committed to working hard to play your part in building that future—consider WGU as the next step in your career.</p>
<p>Driven by a mission to expand access to higher education through online, competency-based degree programs, WGU is also committed to being a great place to work for a diverse workforce of student-focused professionals. The university has pioneered a new way to learn in the 21st century, one that has received praise from academic, industry, government, and media leaders. Whatever your role, working for WGU gives you a part to play in helping students graduate, creating a better tomorrow for themselves and their families.</p>
<p>In October 2020, we formally announced our intention to be leaders and active contributors in the Open Source community. Since this announcement, we’ve created a product, The Open Skills Management Tool, that we wish to open source.  Other endeavors, such as our work with the Open EdX Learning Management System, which is open source, but to which we’ve made significant changes in order to increase that system’s ability to scale in a containerized world.</p>
<p>In this role, you’ll work with all of EdTech, legal, and our Open Source Program Planning Office to help define what Open Source at WGU means and to build our open source community.  This is an exciting opportunity to work with all levels of the organization and leave a lasting impact here and on the higher education community at large.</p>
<p>QUALIFICATIONS:</p>
<ul>
<li>10+ years’ experience leading software engineering teams as a working architect and/or engineer responsible for team culture, practices, and responsibilities for producing working deployment artifacts.</li>
<li>Experience working on at least one open-source project</li>
<li>Experience in working with the various integration models (PR, fork, etc) when working in an open-source community.</li>
<li>Have a deep understanding of UML and use UML to model systems as architectural artifacts that feed the SDLC.</li>
<li>Experience with and have demonstrable skills in performing business analysis using UML to create business models, logical system deployment diagrams, class diagrams, state machines, etc.</li>
<li>Excellent communication and organizational skills.</li>
<li>Familiarity with basic engineering tools such as Git, Maven/Gradle, unit testing frameworks, integration testing frameworks, and practices, CICD to realize infrastructure as code, etc.</li>
</ul>
<p>RESPONSIBILITIES INCLUDE:</p>
<ul>
<li>Reporting to Chief Architect – work with CA on various aspects of WGU engineering which may or may not contribute to the Open Source Program.</li>
<li>Align and take ownership of enterprise architecture directives for further propagation to engineering teams.</li>
<li>Work with many different engineering teams to train, mentor, solution and ensure alignment with enterprise architecture directives and guard rails.</li>
<li>Defining, managing, and streamlining all engineering aspects of the WGU engineering and open-source process at WGU (from people processes to tooling automation).</li>
<li>Owning and managing WGU’s open-source presence and reputation on GitHub and beyond.</li>
<li>Driving involvement and recognition of the open-source program internally at WGU.</li>
<li>Aligning goals of the program with larger product and business goals.</li>
<li>Building awareness of WGU open-source externally and increasing overall WGU involvement in the open-source community.</li>
<li>Establishing WGU as a high-contributing member of industry-leading Open-Source initiatives.</li>
<li>Managing our process for evaluating incoming open-source code for use at WGU</li>
</ul>
<p>We’re very excited to meet people interested in this role! Please get in touch with us to learn more.</p>
',
    'how_to_apply' => '<p>Email your resume to <a href="mailto:seth.davis@wgu.edu">seth.davis@wgu.edu</a> OR apply at <a href="https://wgu.careers/SrPrincipal">https://wgu.careers/SrPrincipal</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBazZhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8161c0b2a31694e608f97e9de2b68e74717fc4df/WGU-MarketingLogo_Natl_RGB_Owl_Tag_4-1-2017.png',
  ],
  17 => [
    'id' => 'ff66ddb7-1e7e-4e5e-9076-fefc4863ae59',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/ff66ddb7-1e7e-4e5e-9076-fefc4863ae59',
    'created_at' => 'Tue Feb 23 15:37:07 UTC 2021',
    'company' => 'Fehr & Peers',
    'company_url' => 'https://www.fehrandpeers.com/',
    'location' => 'Walnut Creek, CA',
    'title' => 'Application Developer',
    'description' => '<p>Dedicated to improving communities, Fehr &amp; Peers focuses on helping people travel safely and easily from place to place. Our consultants rely on a dynamic and innovative Information Technology (IT) team that can quickly respond to ever-evolving client needs. To be successful, the IT team is continually learning and actively collaborating with all elements of the firm. The team functions as part of the larger Corporate office and is responsible for advancing IT practices for both business operations and our consulting practice.</p>
<p>Our IT team is searching for a new member to help the firm create a variety of applications that allow us to perform efficient analysis and communicate our analysis effectively to diverse audiences. Applications will typically be web-based and involve database and geo-database foundations. The ideal candidate will be able to help design the development environment, create innovative applications, and a have the capability to navigate us through changing technology and client demands. The new Application Developer has the opportunity to connect with many talented individuals across the company, exercise curiosity to learn, and figure out how to make the difficult simple.
Please visit our site to learn more about this opportunity, Fehr &amp; Peers, and to apply.</p>
',
    'how_to_apply' => '<p>Please submit your resume, cover letter, and work samples here: <a href="https://www.fehrandpeers.com/application-developer/">https://www.fehrandpeers.com/application-developer/</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBa2lhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--a90a731b2cfe70cb6e5589ddfe98837cd204c3ad/MainLogoColor.jpg',
  ],
  18 => [
    'id' => 'ef15da6b-5d13-4c2b-942a-ec3ea02b608e',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/ef15da6b-5d13-4c2b-942a-ec3ea02b608e',
    'created_at' => 'Tue Feb 23 09:37:10 UTC 2021',
    'company' => 'Wallet.Services',
    'company_url' => 'https://siccar.net/',
    'location' => 'Edinburgh',
    'title' => 'Front End Developer (HTML/CSS/JS)',
    'description' => '<p><strong>Front End Developer (HTML/CSS/JS)</strong></p>
<p><strong>About Us</strong></p>
<p>SICCAR aims to connect and protect business and society. SICCAR enables organisations to share sensitive data through one trustworthy digital platform. Our platform addresses data sharing problems during interactions between citizens and government bodies.</p>
<p>SICCAR adopts distributed ledger technology (DLT), to deliver a cyber secure platform for organisations to collaborate on secure reliable data. SICCAR facilitates secure data sharing where data security, protection, integrity and governance are required.</p>
<p><strong>About the Job</strong></p>
<p>We\'re looking for an enthusiastic and keen Front End Developer to join us and help make the digital world safer and more efficient with software that provides streamlined and secure digital process.</p>
<p>The post is a key member of the development team who will:</p>
<ul>
<li>work closely with our in-house UI/UX designer and implement their design into front end apps;</li>
<li>take the existing front end resources and own them with a view of open sourcing them;</li>
<li>liase with customers and clients to understand their needs;</li>
<li>be data driven when it comes to the apps and their development.</li>
</ul>
<p><strong>About You</strong></p>
<p>Suitable candidates with approximately 3 years of the following experience:</p>
<ul>
<li>HTML 5, CSS with a demonstrable portfolio.</li>
<li>Any client-side JavaScript technologies such as web components (Angular, React, VueJS etc.).</li>
<li>JSON, RESTful APIs.</li>
<li>Front end testing frameworks (Jasmine/Mocha).</li>
<li>Knowledge and experience of applying engineering principles and practices for design, build, test and deployment.</li>
<li>Experience with DevOps and continuous integration.</li>
<li>Committed to high quality, clean code.</li>
<li>Excellent communication skills with the ability to build effective working relationships with stakeholders at all levels.</li>
<li>Solid understanding of design principles, a creative mind and an eye for detail.</li>
</ul>
<p>It would be great if you could provide a portfolio where you can show:</p>
<ul>
<li>Examples of where you have implemented someone elses design.</li>
<li>Examples of where you have worked on your own but also as part of a team.</li>
<li>Examples of where you have implemented data driven analytics and made appropriate changes.</li>
</ul>
<p><strong>Salary and Benefits:</strong></p>
<ul>
<li>Remote working with full flexibility.</li>
<li>A competitive salary that reflects your experience and merit.</li>
<li>Pension contributions.</li>
<li>A discretionary equity-based incentive plan.</li>
<li>An employee referral program.</li>
<li>Cyclescheme, Techscheme.</li>
</ul>
<p><strong>Are you up for the challenge?</strong></p>
<p>Apply now via the <a href="https://ltpx.nl/goVKRPS"><strong>application form</strong></a>.</p>
<p><em>Agency calls are not appreciated.</em><img src="https://camo.githubusercontent.com/560cc004c0ed992a6df2c95d38ed4e0ae76a7d6b/68747470733a2f2f742e6c7470782e6e6c2f747261636b2e7068703f6f7264657269643d323335383136"></p>
',
    'how_to_apply' => '<p><a href="https://ltpx.nl/WHSCsYD">Click here to apply</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaldhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f0d703dee8c5e708b0d0dabbf74a63d52c8087c2/Wallet%20(23)%20(1).jpg',
  ],
  19 => [
    'id' => '3db87b9e-3bff-454e-b407-51bfc1c5e4b5',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/3db87b9e-3bff-454e-b407-51bfc1c5e4b5',
    'created_at' => 'Mon Feb 22 19:56:41 UTC 2021',
    'company' => 'Metas Solutions',
    'company_url' => 'http:',
    'location' => 'Research Triangle Park, NC',
    'title' => 'Data Scientist',
    'description' => '<p>Metas Solutions is has an immediate opening for an experienced Data Scientist to perform the following functions:</p>
<ul>
<li>Analyze large datasets and prioritize actions to tune existing neural network models</li>
<li>Reverse engineer codebase and understand and apply methods from technical papers</li>
<li>Apply variety of text mining/text analysis methods, using a variety of data tools, building and implementing models, using/creating algorithms and creating/running simulations</li>
<li>Work with stakeholders to improve model/delivery outcomes</li>
<li>Train, evaluate and improve existing Machine Learning model</li>
<li>Develop processes and tools to monitor and analyze model performance and data accuracy and quality</li>
<li>Engage in frequent stakeholder interaction to ensure compliance with definition, design, development and deployment of associated code</li>
<li>Work closely with team members to generate technical solutions</li>
</ul>
<p>Summary of required skills :</p>
<ul>
<li>Knowledge and experience in Machine Learning algorithms</li>
<li>Experience with Python</li>
<li>Natural Language Processing and sentiment analysis</li>
<li>Deep learning and Neural Networks Expertise</li>
<li>Knowledge and experience in Web Design and Development preferred</li>
<li>Knowledge of Microsoft .NET technologies including C#, ASP.net (WebApp, WebForms) preferred</li>
<li>SQL Server Experience</li>
<li>Knowledge of Agile software development</li>
</ul>
<p>Qualifications:</p>
<ul>
<li>BS Degree in Computer Science, Data Science. Mathematics, or related</li>
<li>5+ years experience in Information Technology</li>
<li>Must demonstrate flexibility with requirement changes</li>
<li>Excellent written and oral communication skills</li>
<li>Must be US Citizen and able to obtain a government security clearance (Public Trust 5)</li>
</ul>
',
    'how_to_apply' => '<p>Email your resume to <a href="https://metassolutions.bamboohr.com/jobs/view.php?id=7">https://metassolutions.bamboohr.com/jobs/view.php?id=7</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaVdhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8ab2781d3725286b40c7ce8f462ab1fd5ad638f0/metas-logo-FC-whtBG%20(1).jpg',
  ],
  20 => [
    'id' => '07d9afe8-0916-40f5-a508-2a42d9dc6c98',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/07d9afe8-0916-40f5-a508-2a42d9dc6c98',
    'created_at' => 'Mon Feb 22 16:45:45 UTC 2021',
    'company' => 'brightwheel ',
    'company_url' => 'https://mybrightwheel.com/careers/',
    'location' => 'Anywhere in the US',
    'title' => 'Senior Software Engineer, Backend',
    'description' => '<p>Our Mission and Opportunity
Early education is one of the greatest determinants of childhood outcomes, is a must for working families, and has lasting social and economic impact. Brightwheel’s mission is to transform early education for every teacher, child, and parent — by giving teachers meaningfully more time with students each day, engaging parents in the development of their kids, and supporting the small businesses that make up the backbone of the $100 billion early education market. Brightwheel is the most loved technology brand in early education globally, trusted by thousands of educators and millions of families.</p>
<p>Our Team
We are a distributed team, with offices in San Francisco, Denver, and Austin along with fully remote team members. Our team is passionate, talented, and customer-focused. Our exceptional investor group includes Addition, Bessemer Venture Partners, Chan Zuckerberg Initiative, GGV Capital, Lowercase Capital, Emerson Collective, and Mark Cuban.</p>
<p>We believe that everyone—from our employees to the students, teachers, and administrators we serve— should be given the opportunity to learn and thrive, whatever their background may be. We celebrate diversity in all forms because it allows our team and the communities we serve to reach their full potential and do their best work.</p>
<p>Who You Are
We are seeking a senior software engineer who is not only well-rounded technically, but also someone who is passionate about the positive impact their code can make in people\'s lives. Brightwheel engineers work closely with product and design, as well as with other areas of the business to deliver a platform that meets our teachers’ &amp; parents’ biggest needs. Every engineer at brightwheel is afforded a high degree of ownership and autonomy. We are a lean, fast-moving team and value individuals who can optimize for being impactful while considering both technical and business drivers.</p>
<p>What You\'ll Do
-Work alongside product and design to scope and implement new features or product lines.
-Be a steward of quality, scalability, security, and performance. You\'ll work with other engineers to ensure that we have a solid foundation that serves our customers, and enables the team to continue building a great product.
-Design and architect new software systems, or introduce new technologies, as appropriate to support brightwheel’s growth.
-Share knowledge and expertise across the engineering team</p>
<p>Qualifications, Skills, &amp; Abilities
-4+ years of professional experience, preferably in dynamic companies/teams
-Expertise in one or more application programming languages (e.g Ruby, JavaScript or Python)
-Proficiency in building and debugging distributed systems on AWS
-Proficiency in both contributing to and designing APIs</p>
<p>Candidates with varying backgrounds are encouraged to apply. We do not require prior knowledge of technologies in our stack, only a desire to learn them. At brightwheel you will encounter:</p>
<ul>
<li>React.js</li>
<li>Ruby on Rails</li>
<li>PostgreSQL</li>
<li>Redis</li>
<li>CircleCI</li>
<li>Kubernetes</li>
<li>AWS managed services, like Redshift and ECS</li>
</ul>
<p>Brightwheel is proud to celebrate diversity and is committed to building an inclusive workplace regardless of race, color, religion, sex (including pregnancy and gender identity), national origin, political affiliation, sexual orientation, marital status, disability, genetic information, age, membership in an employee organization, retaliation, parental status, military service, or other non-merit factor.</p>
',
    'how_to_apply' => '<p>Please apply using the link below:</p>
<p><a href="https://jobs.lever.co/brightwheel/6e96774f-8350-495d-a567-c7eba55f171d?lever-origin=applied&amp;lever-source%5B%5D=GitHub">https://jobs.lever.co/brightwheel/6e96774f-8350-495d-a567-c7eba55f171d?lever-origin=applied&amp;lever-source%5B%5D=GitHub</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaHlhIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8665ccd64baddd8e0766413744ed285dbe693bf1/Logo%20.png',
  ],
  21 => [
    'id' => '6d3faac0-ea88-4041-9b4d-ce3e65f4ecc6',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/6d3faac0-ea88-4041-9b4d-ce3e65f4ecc6',
    'created_at' => 'Mon Feb 22 11:01:46 UTC 2021',
    'company' => 'VIVIO Health',
    'company_url' => 'https://vonq.io/3uocF3l',
    'location' => 'Remote, United States',
    'title' => 'Tech Lead -(Remote-US)',
    'description' => '<p>Join the fast growing company that is changing the way drug therapies are managed. Help curb the fastest rising spend problem of the US Healthcare system. VIVIO Health is on a mission to help make data the basis for clinical decision making. VIVIO’s evidence-based, data-driven specialty drug management and cost control solution has improved healthcare outcomes and lowered costs for large self-insured employers since 2016. We’re also an unusual company by today’s standards as we are profitable, fast growing and haven’t had to raise any external capital.</p>
<p>We\'re looking for a talented and mission-aligned Tech Lead/Sr. DevOps engineer with significant cloud architectural experience and proficiency in information security to join our team in a key technical leadership role reporting to the CEO.</p>
<p>We’re seeking a self-starter who is excited to work with a dynamic group of individuals who respect one another, value empathetic leadership, lead by example, work collaboratively, and are wildly passionate about our shared goals.</p>
<h2>Job Description</h2>
<p><strong>About You:</strong></p>
<p>You know that Life is short and you want to make a difference!</p>
<p>As an effective Platform Technical Lead you will be detail oriented, have broad technical understanding, and be a team performer. You have a diverse background in architecture, distributed systems, and development. To be successful, you must have extensive experience working with cloud technologies, be able to solve complex problems quickly, and thrive in a highly collaborative environment. You will have &gt; 5 years of experience successfully developing, deploying and managing applications in a cloud environment.</p>
<p>Micromanagement is not our style. We are only interested in team members that are reliable and committed. If you are a problem solver, enjoy thinking creatively about new challenges, and are looking for the next challenge, you would love being on this team.</p>
<h2>What You\'ll Be Doing</h2>
<ul>
<li>Design, build, maintain, and modify infrastructure for scaled applications within AWS Virtual Private Cloud (VPCs).</li>
<li>Produce high-quality software that is well-designed, maintainable, unit tested, code reviewed and checked regularly for continuous integration</li>
<li>Work closely with a small, distributed, dynamic, Engineering Team to make sure all systems remain HIPAA and SOC2 compliant</li>
<li>Assist in the architecture, engineering, development, and quality assurance of data-producing/consuming software.</li>
<li>Automate software builds and deployments on Linux servers.</li>
<li>Operate within Windows (Active Directory) and Linux environments.</li>
<li>Support distributed web applications in a complex, and evolving environment.</li>
<li>Work throughout the application and infrastructure project: including design, architecture, communication, monitoring, availability, scaling, failover and recover</li>
</ul>
<h2>Qualification</h2>
<p><strong>We\'re Looking For Somebody Who Has</strong></p>
<ul>
<li>5+ years building and running applications, specifically around third party integrations and data processing in an AWS environment.</li>
<li>5+ years experience with Python (PHP is a +)</li>
<li>Experience with relational databases such as MySQL</li>
<li>Experience working with restful APIs, micro-services, &amp; Atlassian toolset</li>
<li>Expert hands on experience with AWS cloud technologies.</li>
<li>Extreme attention to detail</li>
<li>Familiarity with compliance &amp; security standards such as PCI DSS, ISO 27001, HIPAA, and NIST</li>
<li>3-5 Years of Linux systems administration, preferably Ubuntu</li>
<li>3-5 Years Microsoft Windows Systems management experience desired</li>
<li>Ability to work on features independently</li>
<li>BS or advanced degree in Computer Science or equivalent experience</li>
</ul>
<h2>Additional Information</h2>
<p>VIVIO Health is an Equal Opportunity Employer and does not unlawfully discriminate on the basis of any status or condition protected by applicable Federal, state or local municipal law. All your information will be kept confidential according to EEO guidelines.</p>
<p><strong>Regular Full-time position (direct hire)</strong></p>
<p><strong>Remote Role</strong></p>
<p><a href="https://vonq.io/3uocF3l">Click here for the application form!</a></p>
',
    'how_to_apply' => '<p><a href="https://vonq.io/3uocF3l">Click here for the application form!</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdm1aIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ed2be94ab5a33afc1812f3af14f935204a63958e/vivio.jpg',
  ],
  22 => [
    'id' => '915c4df7-d378-4e69-9f94-1bd4e70eae38',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/915c4df7-d378-4e69-9f94-1bd4e70eae38',
    'created_at' => 'Fri Feb 19 01:05:59 UTC 2021',
    'company' => 'Chess.com',
    'company_url' => 'https://www.chess.com',
    'location' => 'Remote',
    'title' => 'Senior PHP / Symfony Developer at Chess.com',
    'description' => '<p>Chess.com is looking to add more senior backend PHP developers to help develop our Symfony-based chess platform. If you are a senior-level PHP rockstar/ninja/guru/kingpin/sherpa/wizard/pirate/_____ who wants to help an Alexa top 200 website become even more awesome, you are in the right place. You’ll work with an awesome team of frontend and backend developers to build new features, improve the platform, keep chess games going, and generally help make Chess.com the best possible experience for our members.</p>
<p>SKILLS YOU NEED:</p>
<ul>
<li>Testing</li>
<li>Caching</li>
<li>Debugging</li>
<li>Remote collaboration</li>
</ul>
<p>OUR TECH:</p>
<ul>
<li>Symfony</li>
<li>MySQL</li>
<li>Git &amp; GitHub</li>
<li>Doctrine</li>
<li>Redis</li>
<li>PHPUnit/PHPSpec</li>
<li>Resque</li>
<li>Development VMs: Vagrant/VirtualBox</li>
</ul>
<p>TYPES OF PROJECTS:</p>
<ul>
<li>Build callbacks and APIs to support new features</li>
<li>Creative engineering tasks to support our team and users</li>
<li>Optimize performance</li>
</ul>
<p>OPPORTUNITY:</p>
<ul>
<li>This is a full-time or equivalent position</li>
<li>This is a remote position (work from anywhere!)</li>
<li>Chess knowledge is NOT required; we\'re looking for passion and talent</li>
</ul>
<p>You can learn more about us here:</p>
<ul>
<li><a href="https://www.chess.com/blog/erik/how-chess-com-s-100-person-virtual-team-works-together">https://www.chess.com/blog/erik/how-chess-com-s-100-person-virtual-team-works-together</a></li>
<li><a href="https://www.chess.com/about">https://www.chess.com/about</a></li>
</ul>
',
    'how_to_apply' => '<p>Apply here: <a href="https://chesscom.rippling-ats.com/job/226413/php-symfony-developer">https://chesscom.rippling-ats.com/job/226413/php-symfony-developer</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc09aIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--19732753de1378c930070d81ea0e7cf56ccf8404/600x600_pawn_margin.png',
  ],
  23 => [
    'id' => '0f48aadd-549a-4d74-a461-d889342de1aa',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/0f48aadd-549a-4d74-a461-d889342de1aa',
    'created_at' => 'Thu Dec 31 18:49:26 UTC 2020',
    'company' => 'Benco Dental',
    'company_url' => 'http://www.benco.com',
    'location' => 'Nationwide/Remote',
    'title' => 'Software Developer - Full Stack',
    'description' => '<p>Benco Dental, the Nation\'s largest privately-owned dental distributor, is searching for a Developer to join its team in Pittston, PA or remotely!</p>
<p>Why Join our Team?</p>
<p>We drive dentistry forward by leveraging innovative solutions and our caring family culture.</p>
<p>Family-owned for 80+ years</p>
<p>#19 Best Companies to Work for in Health Care</p>
<p>Annual Profit Sharing</p>
<p>Medical, Dental, Vision effective Day 1</p>
<p>Job Summary:  Responsible for developing code and software as per specifications, both new code and modifications to existing code; troubleshooting and resolving issues with code; documenting changes; training users on changes as appropriate. This application developer role will be part of the Benco Enterprise Application and Architecture team, which is dedicated to sustainability and modernization of Benco’s core systems.  We are a fast pace, agile team that works on a wide range of projects across multiple technologies.</p>
<p>Qualifications:</p>
<p>Education:  Associates degree in Computer Systems or equivalent education/experience; Bachelor’s degree preferred.</p>
<pre><code>         Experience:  3-5 years
</code></pre>
<p>Skills needed:  Ability to communicate clearly, persuasively and effectively both verbally and written; good organizational skills; experience with</p>
<p>SQL</p>
<p>C# (.NET Core/.NET Framework)</p>
<p>Front-end Web Development (HTML, CSS, JS)</p>
<p>Front-end JavaScript Framework (Angular, React, etc.) Experience is a plus not required.</p>
<p>System Integration (ETL, REST API)</p>
<p>Duties and Responsibilities:</p>
<p>Effectively develops code and software as per specifications.</p>
<p>Tests software that has been created or modified.</p>
<p>Documents changes to software.</p>
<p>Demonstrates good oral and written communication skills and listening skills.</p>
<p>Effectively trains appropriate personnel on newly developed or modified software.</p>
<p>Troubleshoots and debugs software.</p>
<p>Consistently and effectively updates ALM tool (Jira) with appropriate comments to track progress of work.</p>
<p>Performs Code Reviews for other team members.</p>
<p>Breaks down work into estimable pieces and delivers accurate and consistent difficulty estimates.</p>
<p>Works as an effective team member and works to improve team morale.</p>
<p>Understands IT’s role in helping Benco realize its mission.</p>
<p>Performs other duties as assigned to support the efficient operation of the department and company.</p>
<p>All job duties and responsibilities are essential functions of the position.</p>
<p>Who We Are: It’s our mission to deliver success smile after smile.</p>
<p>Benco Dental is the largest privately owned, full-service dental distributor in the United States and has remained in the family since 1930 - a family that now includes our more than 30,000 customers and over 1,400 associates in the 48 contiguous states.</p>
<p>We provide more supply and equipment options than any other full-service distributor, an offering enhanced by a comprehensive suite of services, including office design, equipment repair, practice coaching, financing and project management, wealth management and dental-specific technology solutions. These services are supported by over 400 professionally trained sales representatives and 300 factory-trained service technicians who begin every task by asking "What does the customer want?"</p>
<p>If you enjoy working for a progressive company that is growth minded and values customers &amp; associates we encourage you to learn more about our Benco family. We are looking for driven professionals who want to play a key role in our future success.</p>
',
    'how_to_apply' => '<p>Apply at <a href="http://www.benco.com/careers">www.benco.com/careers</a> or by clicking on the link:
<a href="https://benco.hrmdirect.com/employment/job-opening.php?req=1469247&amp;&amp;#job">https://benco.hrmdirect.com/employment/job-opening.php?req=1469247&amp;&amp;#job</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbGVVIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d62f0959d9f4f10d672f89867337ab5d5c08e952/19_BencoLogo_Color_2019.jpg',
  ],
  24 => [
    'id' => 'e2f94b22-6caa-41f3-aa84-c9a3ba6e780a',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/e2f94b22-6caa-41f3-aa84-c9a3ba6e780a',
    'created_at' => 'Thu Feb 18 13:30:07 UTC 2021',
    'company' => 'COYO',
    'company_url' => 'https://www.coyoapp.com/en/career',
    'location' => 'Hamburg',
    'title' => 'Senior Backend Software Developer (m/f/o)',
    'description' => '<p>Do you want to help us change the social-intranet world, straight out of Hamburg?  You love to develop smart and future-oriented software in cross-functional teams? Our teams are divided into different feature teams according to our product strategy. As part of one of our key feature teams, team Journey, you will create an outstanding employee journey and accompany employees throughout their COYO lifetime. Do you want to take a key role, lead the way to transition these vital parts of our software and guide us into a scalable and blazingly fast Microservices world? Then apply as <strong>Senior Backend Software Developer (m/f/o)</strong> and become a part of the great COYO story!</p>
<p><strong>Who we are looking for:</strong></p>
<p>Smart minds, who are curious about the complexity of a social intranet software, are eager to learn and strive for development - with a passion for sexy UI and a sense for crisp UX.</p>
<ul>
<li>We expect you to have at least 5 years of experience developing in a Java environment, but we care less about how long you have been active and more about what you have been doing</li>
<li>You should have knowledge and an interest in the technologies we are using: Our software is currently written with Java, using the Spring stack (Spring Boot, Data, Cloud, etc.) with MongoDB and PostgreSQL as database and caching solution respectively. The architecture of our choice is RESTful</li>
<li>A team-player, who drives and values team-success, who takes responsibility for what he/she does and who is able to collaborate and connect within our 45-strong agile development team</li>
<li>We don’t want to stand still - neither should you. With us you have the opportunity to improve yourself and others continuously and take on challenges with a smile on your face</li>
<li>We’d love for you to show us how we can improve what we do, with a customer value mindset, by voicing your own ideas and by putting your experience to work, while illustrating good communication skills in English</li>
</ul>
<p><strong>Your tasks:</strong></p>
<p>Since our journey domain is an important part of our main product - our social intranet software - you create a prime employee lifetime: from onboarding, to finding and discovering content, to up to date information everyday.</p>
<ul>
<li>Working in one of our four feature teams, you will shape the high level architecture of our services and help less experienced members of the team to grow their own skills</li>
<li>Improving the product further through coding and quality checks, as well as refactoring and fixing problems, before they become bugs is one of your key tasks</li>
<li>You drive technical innovations within the team and the software engineering department by being an active voice in our backend chapter</li>
<li>You redesign and rebuild central components like the search and discover while connecting our Microservices smoothly and without problems</li>
<li>You get to create  an amazing employee journey, that leaves our users with happy faces and make all of our competitors look old</li>
</ul>
<p><strong>What we offer:</strong></p>
<ul>
<li>
<strong>Growth booster:</strong> We support your individual development. Through our weekly varying tech-talks, our free coding day and our tech-blog we create an environment of knowledge-sharing and discuss your personal and desirable development in our 360º -careermodel.</li>
<li>
<strong>The hard facts:</strong> An open-ended employment contract, 28 vacation days a year, a MacBook Pro (also for private use), a subsidy for the HVV ProfiCard and company pension scheme. The balance of work, family and private life is ensured through our flexible working hours with no core working hours and with our mobile work option.</li>
<li>
<strong>All the trappings:</strong> You\'re part of our team of smart, curious team players who work hard every day for our great product. Of course, this includes your stylish workplace in a modern office with an ingenious infrastructure.</li>
<li>
<strong>Together in #newnormal:</strong> Thanks to our own software and our agile mindset we work and communicate digitally without any problems - therefore you can decide from where you want to work (office or remote). We keep our COYO spirit and our open corporate culture through shared virtual events (e.g. monthly afterwork with remote bingo or power point karaoke, or lunch roulette).</li>
<li>
<strong>Take a break:</strong> With our COYO Teambus, a fully equipped VW T6 California Ocean, you can treat yourself to your well-deserved time-out and explore Germany and its surroundings even under the current difficult travel conditions.</li>
<li>
<strong>Are you a sports enthusiast?</strong> Every Tuesday and Thursday we start our working day with Yoga. Push yourself to the limit at women\'s boxing, the running club or join our sports community. Boost your health with fresh organic fruit and free drinks like Viva con Agua, Club Mate, Bionade.</li>
</ul>
',
    'how_to_apply' => '<p>We are happy to receive your application via our website: <a href="https://www.coyoapp.com/en/job-detail/senior-backend-software-engineer?hsLang=en">https://www.coyoapp.com/en/job-detail/senior-backend-software-engineer?hsLang=en</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcTZaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0813099b6290d68043d10feb22726f919431f7d8/coyo-logo-2.png',
  ],
  25 => [
    'id' => 'c93de974-0597-4811-9755-a5f4214e6eea',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/c93de974-0597-4811-9755-a5f4214e6eea',
    'created_at' => 'Thu Feb 18 13:13:02 UTC 2021',
    'company' => 'COYO',
    'company_url' => 'https://www.coyoapp.com/en/career',
    'location' => 'Hamburg',
    'title' => 'Senior Frontend Developer (m/f/o) – Team Journey',
    'description' => '<p>Have you always wanted to work on a product that will reach every employee in the company and where you can have a major impact on the future design? Do you have a great passion for development with Angular and user-centered design? Are you intrinsically motivated to keep yourself and your colleagues technologically up to date as well as to develop your skills further in an agile environment? Then apply now as <strong>Senior Frontend Engineer (m/f/o)</strong> and become a part of the great COYO story!</p>
<p><strong>Who we are looking for:</strong></p>
<p>Creative personalities who actively support us on the way to a better frontend &amp; UX future in our ‚Angular Only World‘:</p>
<ul>
<li>You have at least 3 years of hands-on experience in agile frontend development, mainly with Angular (AngularJS also helps) and TypeScript</li>
<li>Your knowledge in HTML and CSS is at expert level, plus Git is your first choice for version control systems</li>
<li>In addition, it would be fantastic if you have already worked with RxJS, Redux, Gitlab, Storybook and / or JIRA as well as if you are deeply interested in UX / UI and Accessible Design</li>
<li>You thrive in an agile environment, you write clean code and you have experience in test automation. With your quality-oriented way of thinking you are continuously looking for ways to optimize the software performance</li>
<li>Since English is our company language, it is important that you can communicate fluently in English</li>
</ul>
<p><strong>Your tasks:</strong></p>
<p>As part of the Journey Team, you will collaborate closely with colleagues from Backend, Product, Design, and QA to create the sexiest social intranet on the market.</p>
<ul>
<li>You will take on a key role in the rebuild and transition of important services into our \'Angular Only World’ as well as guide us to scalable and future-proof architectural solutions such as micro-frontends. We want to create state-of-the-art software with architecture at the highest level</li>
<li>Teamwork makes the dream work: As the first Senior Frontend Developer (m/f/o) in the Journey Team, you will mentor less experienced team members and share your knowledge through actively initiated pair programming</li>
<li>You are committed to improving existing processes as well as analyzing and solving problems through the application of best practices, coding standards and style guides</li>
<li>Together with your team and the software engineering department, you drive innovations. You are a positive voice for the frontend chapter and you contribute to new coding standards</li>
</ul>
<p><strong>What we offer:</strong></p>
<ul>
<li>
<strong>Growth booster:</strong> We support your individual development. Through our weekly varying tech-talks, our free coding day and our tech-blog we create an environment of knowledge-sharing and discuss your personal and desirable development in our 360º -careermodel.</li>
<li>
<strong>The hard facts:</strong> An open-ended employment contract, 28 vacation days a year, a MacBook Pro (also for private use), a subsidy for the HVV ProfiCard and company pension scheme. The balance of work, family and private life is ensured through our flexible working hours with no core working hours and with our mobile work option.</li>
<li>
<strong>All the trappings:</strong> You\'re part of our team of smart, curious team players who work hard every day for our great product. Of course, this includes your stylish workplace in a modern office with an ingenious infrastructure.</li>
<li>
<strong>Together in #newnormal:</strong> Thanks to our own software and our agile mindset we work and communicate digitally without any problems - therefore you can decide from where you want to work (office or remote). We keep our COYO spirit and our open corporate culture through shared virtual events (e.g. monthly afterwork with remote bingo or power point karaoke, or lunch roulette).</li>
<li>
<strong>Take a break:</strong> With our COYO Teambus, a fully equipped VW T6 California Ocean, you can treat yourself to your well-deserved time-out and explore Germany and its surroundings even under the current difficult travel conditions.</li>
<li>
<strong>Are you a sports enthusiast?</strong> Every Tuesday and Thursday we start our working day with Yoga. Push yourself to the limit at women\'s boxing, the running club or join our sports community. Boost your health with fresh organic fruit and free drinks like Viva con Agua, Club Mate, Bionade.</li>
</ul>
',
    'how_to_apply' => '<p>We are happy to receive your application via our website: <a href="https://www.coyoapp.com/en/job-detail/senior-frontend-developer-journey-en?hsLang=en">https://www.coyoapp.com/en/job-detail/senior-frontend-developer-journey-en?hsLang=en</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcXVaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--1a1b12f65f709b5bf13d21e1bfb9ce1354aec209/coyo-logo-2.png',
  ],
  26 => [
    'id' => '39b890fb-a013-42d8-a1cf-c97e91e5ae71',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/39b890fb-a013-42d8-a1cf-c97e91e5ae71',
    'created_at' => 'Thu Feb 18 12:32:44 UTC 2021',
    'company' => 'Limango',
    'company_url' => 'https://www.limango.de/ehp',
    'location' => 'Munich',
    'title' => 'PHP Backend Developer (m/w/d) Merchant Center',
    'description' => '<p><strong>OUR MISSION</strong></p>
<p>limango is the Online Shop for families – We wow our customers every day with a fantastic range of brands at very attractive prices. Based in Munich, our 300 employees share a passion for families. We do everything we can to understand their needs and fulfil their wishes. limango has everything families need: Fashion for Babies, Kids, Women and Men as well as Homeware, Toys, Cosmetics and Family holidays. At limango you’ll find both classic brands and upcoming brands from across Europe. Founded in 2007 and a member of the Otto Group since 2009 limango now has over 14 million members across Germany, Austria, France, the Netherlands and Poland and sells over 40 000 products daily to German customers alone. We want to continue to grow and win the trust of all mums in Europe. To help us achieve this, we’re looking for motivated, talented individuals to work with us and be a part of something big.</p>
<p><strong>YOUR JOB</strong></p>
<ul>
<li>In the limango IT you get the chance to contribute your own ideas and know-how to the development of services all around the different processes of our ecommerce business</li>
<li>Together with our experienced and international development teams you will improve and expand our backend systems.</li>
<li>You will become part of our well-rehearsed agile teams of versatile and experienced developers and a dedicated product owner</li>
</ul>
<p><strong>YOUR PROFILE</strong></p>
<ul>
<li>A degree with a focus on IT or a comparable training</li>
<li>You have sound professional experience in the development of scalable eCommerce applications in common PHP frameworks such as Symfony3+ as well as knowledge of OOP and design patterns</li>
<li>You bring practical experience with RESTful APIs and service-oriented architecture</li>
<li>You have profound experience in relational databases (MySQL/MariaDB)</li>
<li>DevOps and GoLang experience are desirable</li>
<li>A well-functioning tool is not enough for you - you enjoy optimizing complex IT processes!</li>
</ul>
<p><strong>OUR OFFER</strong></p>
<ul>
<li>Exciting, technically demanding challenges in a highly frequented online shop with focus on high scalability and performance</li>
<li>Agile development, Scrum teams, flat hierarchies and direct communication in a very comradely atmosphere</li>
<li>A steep learning curve in a dynamic company with international orientation</li>
<li>A great office in the Tech-Spot of Munich with probably the coolest roof terrace in the city</li>
</ul>
<p>Interested? We look forward to receiving your complete application including a letter of motivation, salary requirements and your earliest possible starting date.</p>
<p><img src="https://camo.githubusercontent.com/40d44a2daf1c3be889a5c160d633cc61dd7b8f65/68747470733a2f2f742e676f686972696e672e636f6d2f682f61653639666334616564306339666462306465316235633835366465363961646561646335383130326461393238303033373766353963656338383131393362"></p>
',
    'how_to_apply' => '<p><a href="https://t.gohiring.com/h/d1acd92baf81d8d08d189ce5b4ebdabccebb0854440f028e27c9a32aa3d7cb3f">application form</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcHVaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--1930bbcb1ec09854cf0f9cc08cbe4f79e9a019be/Limango.jpg',
  ],
  27 => [
    'id' => '998e846e-ab14-4a80-a11c-832505f00ae4',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/998e846e-ab14-4a80-a11c-832505f00ae4',
    'created_at' => 'Thu Feb 18 12:29:35 UTC 2021',
    'company' => 'Limango',
    'company_url' => 'https://www.limango.de/ehp',
    'location' => 'Munich',
    'title' => 'Junior PHP Backend Developer (m/w/d)',
    'description' => '<p><strong>OUR MISSION</strong></p>
<p>limango is the Online Shop for families – We wow our customers every day with a fantastic range of brands at very attractive prices. Based in Munich, our 300 employees share a passion for families. We do everything we can to understand their needs and fulfil their wishes. limango has everything families need: Fashion for Babies, Kids, Women and Men as well as Homeware, Toys, Cosmetics and Family holidays. At limango you’ll find both classic brands and upcoming brands from across Europe. Founded in 2007 and a member of the Otto Group since 2009 limango now has over 14 million members across Germany, Austria, France, the Netherlands and Poland and sells over 40 000 products daily to German customers alone. We want to continue to grow and win the trust of all mums in Europe. To help us achieve this, we’re looking for motivated, talented individuals to work with us and be a part of something big.</p>
<p><strong>YOUR JOB</strong></p>
<ul>
<li>In the limango IT you get the chance to contribute your own ideas and know-how to the development of services all around the different processes of our ecommerce business</li>
<li>Together with our experienced and international development teams you will improve and expand our backend systems.</li>
<li>You will become part of our well-rehearsed agile teams of versatile and experienced developers and a dedicated product owner</li>
</ul>
<p><strong>YOUR PROFILE</strong></p>
<ul>
<li>A degree with a focus on IT or a comparable training</li>
<li>You have sound professional experience in the development of scalable eCommerce applications in common PHP frameworks such as Symfony3+ as well as knowledge of OOP and design patterns</li>
<li>You bring practical experience with RESTful APIs and service-oriented architecture</li>
<li>You have profound experience in relational databases (MySQL/MariaDB)</li>
<li>DevOps and GoLang experience are desirable</li>
<li>A well-functioning tool is not enough for you - you enjoy optimizing complex IT processes!</li>
</ul>
<p><strong>OUR OFFER</strong></p>
<ul>
<li>Exciting, technically demanding challenges in a highly frequented online shop with focus on high scalability and performance</li>
<li>Agile development, Scrum teams, flat hierarchies and direct communication in a very comradely atmosphere</li>
<li>A steep learning curve in a dynamic company with international orientation</li>
<li>A great office in the Tech-Spot of Munich with probably the coolest roof terrace in the city</li>
</ul>
<p>Interested? We look forward to receiving your complete application including a letter of motivation, salary requirements and your earliest possible starting date.</p>
<p><img src="https://camo.githubusercontent.com/63f1826791396d639202d6e695b723781050924c/68747470733a2f2f742e676f686972696e672e636f6d2f682f34613364323938633732616364333762666431316363656531643635343537623634616332616536326665653730366635326464663462636237383036626564"></p>
',
    'how_to_apply' => '<p><a href="https://t.gohiring.com/h/89886a585fb44e21be0470729a18322077211348161359ffd52d74c65f7ff0d2">application form</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcG1aIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--221d988da8c75308d9b22775a0704b722d4c75c3/Limango.jpg',
  ],
  28 => [
    'id' => 'f1f82574-ca84-4572-8080-8a37818100b4',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/f1f82574-ca84-4572-8080-8a37818100b4',
    'created_at' => 'Thu Feb 18 12:03:04 UTC 2021',
    'company' => 'Forza FC',
    'company_url' => 'https://forzainsider.teamtailor.com',
    'location' => 'Kyiv, Ukraine',
    'title' => 'Senior Android Engineer',
    'description' => '<p>We are working with leading clubs and organizations in the football industry to develop a digital membership platform that delivers next level experience to fans whilst enabling clubs to establish new and increase existing revenue streams, and to increase the quality of customer synergy.</p>
<p>Join our talented team to work on product which is used by more than 600 thousand football fans around the globe.</p>
<p>You will be responsible for the development and maintenance of our Android application.</p>
<p>Your primary focus will be development of Android applications and their integration with back-end services that power our mobile apps—from the live streaming subsystem, that also includes a real-time chat functionality, to our advancing gamification platform.</p>
<p><strong>REQUIREMENTS</strong></p>
<p>As an experienced Android developer, you will supply our team with valuable knowledge and insights. You will emphasise the importance of the Android ecosystem and see the global potential the platform enables, in established and emerging markets alike. You will dive down into the nitty gritty parts of product development, in close collaboration with designers, project managers, backend engineers, etc.</p>
<p>Kotlin is our programming language of choice. However, we have components written in Java so experience with both languages is important.</p>
<p>As an Android developer, you will work with modern tools and frameworks. The <strong>list</strong> consists of, but is not limited to:</p>
<ul>
<li>RxJava</li>
<li>Dagger framework</li>
<li>Retrofit and OkHttp for network layer</li>
<li>Android Architecture Components</li>
<li>Analytics tools: Firebase, Google Analytics</li>
<li>Mockito and JUnit for tests</li>
<li>Knowledge in Data Binding</li>
<li>Experience with Navigation component</li>
</ul>
<p>Additionally, you have an opportunity to <strong>benefit</strong> from:</p>
<ul>
<li>Flexible work hours</li>
<li>Unlimited paid vacation</li>
<li>Technical setup according to your request</li>
<li>Relocation support (if necessary)</li>
</ul>
',
    'how_to_apply' => '<p>Apply here: <a href="https://forzainsider.teamtailor.com/jobs/1047258-senior-android-engineer">https://forzainsider.teamtailor.com/jobs/1047258-senior-android-engineer</a></p>
',
    'company_logo' => NULL,
  ],
  29 => [
    'id' => '274a58c3-1f2e-4c24-a8d8-8dd2e41301b1',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/274a58c3-1f2e-4c24-a8d8-8dd2e41301b1',
    'created_at' => 'Thu Feb 18 07:39:14 UTC 2021',
    'company' => 'InnoGames GmbH',
    'company_url' => 'https://www.innogames.com',
    'location' => 'Hamburg',
    'title' => 'Frontend Developer (Haxe) - Video Game: Forge of Empires',
    'description' => '<p>Our agile and cross-functional <strong>Forge of Empires</strong> team is searching for a <strong>Frontend Developer</strong>:</p>
<p>As a Frontend Developer, you will join a feature team of the Forge of Empires project to support growth, technical stability and longevity of our game.</p>
<p>Are you a talented Game Developer and passionate about online games? Live your passion for online games/Game Development and collaborate with like-minded people to provide the best user experience for our players!</p>
<p><strong>Your mission:</strong></p>
<ul>
<li>Contribute to the continuous development and improvement of one of our keystone games</li>
<li>Develop new features and improve existing game features with a strong focus on UI and UX</li>
<li>Participate in the whole feature development lifecycle with a commitment to high-quality results</li>
<li>Collaborate closely with Mobile- &amp; Backend Developers, Game Designers, and Artists to implement new game features for our browser clients</li>
</ul>
<p><strong>Your skillset:</strong></p>
<ul>
<li>Working experience in Frontend/Game Development with Haxe. ActionScript 3 or JavaScript experience is a bonus.</li>
<li>A right eye for details and a passion for implementing UI and UX</li>
<li>Well-versed in design patterns and software architecture</li>
<li>Experience with writing browser automation tests</li>
<li>Solution-oriented and efficient style of work</li>
<li>Team player and a good communicator with fluent English language skills</li>
</ul>
<p><em>Favorable</em></p>
<ul>
<li>Passion for online games (strategy/F2P) and knowledge of relevant game mechanics</li>
<li>Professional experience in the gaming industry, ideally working on comparable browser games</li>
<li>Theoretical understanding of Software Development, ideally based on a University degree in Computer Sciences, Business Information Systems or similar studies</li>
<li>Know your way around popular scripting languages (Python / Bash / Groovy)</li>
<li>A proactive and motivated individual with a willingness to learn</li>
</ul>
<p><strong>Your power-ups:</strong></p>
<ul>
<li>Get competitive compensation as well as a sabbatical, mobile device, contribution to your public transport ticket, and more</li>
<li>De-stress your private life with flexible working hours, the in-house gym, services such as a hairdresser, massage, bike inspection, and more</li>
<li>Participate in tons of the company\'s get-togethers ranging from an in-house sofa concert to a virtual wine tasting</li>
<li>Make the most of our excellent training and development opportunities</li>
<li>Feel comfortable in an atmosphere to empower creative thinking and strong results</li>
<li>Work in an agile multicultural team – enabling you and your team to form and actively optimize work processes</li>
<li>Our company language is English, and we support all our employees and their partners with optional German lessons</li>
<li>Receive exceptional support with your relocation to Hamburg</li>
<li>Shape the success story of InnoGames with our international team of driven experts in a stable growing company and award-winning employer</li>
</ul>
<p><strong>Our story:</strong></p>
<p>InnoGames is Germany\'s leading developer and publisher of mobile and online games.
The company based in Hamburg is best known for Forge of Empires, Elvenar, and Tribal Wars. InnoGames\' complete portfolio encompasses seven live games and several mobile titles in production.</p>
<p>Born as a hobby, InnoGames today has a team of 400 employees from more than 30 nations who share the passion of creating unique games that players across the globe enjoy for years.
To further expand our success and to realize new projects, we are constantly looking for young talents, experienced professionals, and creative thinkers.</p>
<p>Excited to start your journey with InnoGames and join our dynamic team as a <strong>Frontend Developer</strong>?
We look forward to receiving your application as well as your salary expectations and earliest possible starting date through our <a href="https://www.innogames.com/career/detail/job/frontend-developer-haxe-video-game-forge-of-empires/?s=GitHub">online application form</a>. <strong>Maximilian Kaeding</strong> would be happy to answer any questions you may have.</p>
<p><strong>Apply and #stayhome!</strong>
Due to the <strong>coronavirus</strong> outbreak, we switched our operations company-wide to home office and turned our hiring process into a <strong>fully virtual one</strong>.
When hiring, we are also open for our new team members starting their work remotely at the time being or adjusting contract start dates accordingly.
Stay home and safe!</p>
',
    'how_to_apply' => '<p><a href="https://www.innogames.com/career/detail/job/frontend-developer-haxe-video-game-forge-of-empires/?s=GitHub">https://www.innogames.com/career/detail/job/frontend-developer-haxe-video-game-forge-of-empires/?s=GitHub</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcFdaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0c0cdf1659e2ef3dfa4239866de1db61f1f4a2d9/logo_innogames_devlop.png',
  ],
  30 => [
    'id' => '2b78c92c-c8a4-420a-88e9-4a5fc232284b',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/2b78c92c-c8a4-420a-88e9-4a5fc232284b',
    'created_at' => 'Wed Feb 17 22:37:26 UTC 2021',
    'company' => 'Openforce',
    'company_url' => 'http://www.oforce.com',
    'location' => 'Remote in US',
    'title' => 'Senior Software Engineer',
    'description' => '<p>Overview: As Senior Software Engineer, you will join a team of mainly full stack engineers with exposure to everything, collaborating with product and other technology leaders to jointly chart the platform roadmap.</p>
<p>General Summary:
Our team builds and maintains all client facing interfaces (e.g. web app, APIs, etc.) to enable the independent contractor model through the platform. We are mostly full stack engineers with exposure to back-end, front-end, and everything in between. The collaborative nature of the team allows you to constantly learn new things. You’ll work closely with other software engineers across the engineering organization to innovate on our platform architecture, and to continue building a world-class technology platform.
To be successful in this role, you should be confident contributing to the development of our products, making recommendations for solutions and new technology approaches, and pushing for better software practices.</p>
<p>Responsibilities:</p>
<ul>
<li>Serve as technical/development lead on specific initiatives</li>
<li>Review architecture and technical design on key projects</li>
<li>Collaborate with Product to validate use cases and requirements</li>
<li>Lead code quality and testing across engineering teams</li>
<li>Provide technical mentorship to junior engineers</li>
<li>Influence and evangelize new software technologies to other team members</li>
<li>Work closely with other software architects to make engineering wide architecture recommendations and decisions</li>
<li>Experiment with new ways of visualizing large amounts of data</li>
<li>Ensure our technology stack stays current</li>
<li>Passionate about building a world-class technology platform</li>
</ul>
<p>Key Competencies and Skills:</p>
<ul>
<li>Technical Expertise: Possesses an in-depth knowledge and skill in a technical area</li>
<li>Problem Solving: Frames problems before trying to solve them. Breaks down problems and identifies all of their facets, including hidden or tricky aspects</li>
<li>Analytical Thinking: Weights the costs, benefits, risks, and chances for success in making a decision</li>
<li>Fostering Innovation and Teamwork: Sponsors the development of new products, services, methods, or procedures while working cooperatively with others to produce initiative solutions</li>
<li>Developing Others: Provides helpful, behaviorally specific feedback to others and gives people assignments that will help develop their abilities</li>
<li>Results Orientation: Maintains commitment to goals in the face of obstacles and frustrations; develops challenging but achievable goals</li>
</ul>
<p>Knowledge, Skills, And Abilities</p>
<ul>
<li>Degree in Computer Science or equivalent work experience</li>
<li>10+ years of software development experience</li>
<li>High degree of comfort in Elixir, ASP or other functional or object-oriented language</li>
<li>Experience with scalable, high performance, multi-tier, enterprise application development</li>
<li>Familiarity with JavaScript frameworks such as React</li>
<li>Experience with data storage technologies</li>
<li>Experience with queuing and messaging frameworks</li>
<li>Experience with service-oriented architecture</li>
<li>Keen sense of information architecture and visual design</li>
<li>Motivated by writing fast, scalable code with testability in mind</li>
<li>Excited by working in a fast-paced environment</li>
</ul>
<p>The Perks</p>
<ul>
<li>Continued training and career development</li>
<li>Full Benefits Package including: Medical, Dental, Vision, Disability, and 401k</li>
<li>Vacation and Holiday pay</li>
<li>Casual dress code and creative office environment</li>
</ul>
<p>Job Type:	Full Time Exempt</p>
<p>Reports to: 	Director of Engineering</p>
<p>Salary: 		DOE</p>
<p>Travel: 	        Up to 5% quarterly or as needed</p>
<p>Passion, excellence, respect, accountability and having fun are just the beginning. Openforce believes that our culture is at the core part of what makes us successful. We are looking forward to hiring someone who understands good culture and will help shape it as it evolves.</p>
',
    'how_to_apply' => '<p>Email your resume to <a href="mailto:careers@oforce.com">careers@oforce.com</a>!</p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcE9aIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--96b6c0ac096d817f4f10586852474d5491a6d6e4/oforce-stacked-pms-color.png',
  ],
  31 => [
    'id' => 'b8e61523-a198-4c23-a9cc-1c344434b5b1',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/b8e61523-a198-4c23-a9cc-1c344434b5b1',
    'created_at' => 'Wed Feb 17 21:03:39 UTC 2021',
    'company' => 'Applaudo Studios',
    'company_url' => 'https://applaudostudios.com',
    'location' => 'Remote',
    'title' => 'iOS Developer',
    'description' => '<p>We are looking for an experienced iOS Developer to create functional and attractive applications that perfectly meet the needs of our customers.</p>
<p><strong>Technical skills</strong></p>
<ul>
<li>Languages: Swift</li>
<li>Frameworks: UIKit, SwiftUI, RxSwift/Combine, CoreLocation</li>
</ul>
<p><strong>Qualifications:</strong></p>
<ul>
<li>Bachelor’s Degree in Computer Science, Software Engineering, Computer Engineering, or
a related field (preferred) or an equivalent combination of education and experience.</li>
<li>Excellent organizational, writing, and communication skills.</li>
<li>3 to 5 years of experience as an iOS Developer.</li>
<li>Strong proficiency with Swift, and the iOS development ecosystem.</li>
<li>Ability to multitask, prioritize tasks, manage deadlines, and quickly adjust to a rapidly
changing environment.</li>
<li>Ability to work independently or as a member of a team.</li>
<li>English is a requirement, as you will be working directly with US-based clients.</li>
</ul>
<p><strong>Responsibilities:</strong></p>
<ul>
<li>Proven track record of high productivity and excellent attention to detail in software
design, coding, design adherence, and debugging with multiple apps in the App
Store.</li>
<li>Ability to work independently with limited need for supervision in a fast-paced
environment.</li>
</ul>
',
    'how_to_apply' => '<p><a href="https://applaudostudios.com/careers/376587">https://applaudostudios.com/careers/376587</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbjZaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d35926328fb54be8a650468314461aabef85f55a/logo-applaudo-studios_019cccde.png',
  ],
  32 => [
    'id' => 'c9132c5d-616e-45f9-a6f9-d8f3fca50480',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/c9132c5d-616e-45f9-a6f9-d8f3fca50480',
    'created_at' => 'Tue Feb 16 17:08:08 UTC 2021',
    'company' => 'Fathom5',
    'company_url' => 'https://www.fathom5.co',
    'location' => 'Austin, TX',
    'title' => 'Mid- to Senior-Level Software Engineer',
    'description' => '<h2>At Fathom5, we build the Operating System for the next generation of industrial technologies.</h2>
<p>Our supply chains, manufacturing base, and critical infrastructure lag far beyond what our world needs in security, capability, and adaptability. We\'re here to fix that.</p>
<p>Our team is in search of ambitious, curious, and mission-driven Software Engineers at all levels. You will have the opportunity to use the most modern software development tools to work on cutting-edge projects: <strong>building platforms for machine learning, cybersecure DEVOPS pipelines, enclaves for advanced manufacturing (e.g. 3D printing, robotics arms...)</strong> and much more.</p>
<p>You will be a key part in realizing our technical vision and taking the company to the next level. We can\'t wait for you to be part of our swiftly growing team as we drive forward with our mission to <strong>Secure the Digital Future</strong>.</p>
<h3>A Fathom5 Software Engineer will:</h3>
<ul>
<li>Have clear ideas about software architecture and design and the opportunity to express them when working alongside the CEO, Chief Engineer, and Director of Software Development to build cutting-edge technologies</li>
<li>Find joy in: working alongside team members that are at, below, and above your skill-level to solve technical challenges; providing mentorship; and receiving mentorship (as a software engineer and as a leader) in turn</li>
<li>Seek out, claim, and solve challenging tasks/issues for development, and support others as they do the same</li>
<li>Depending on your interest, lead small teams of engineers OR become an internal subject matter expert on a core element of our software base</li>
</ul>
<h3>A Fathom5 Software Engineer will:</h3>
<ul>
<li>Be intimately familiar with developing and maintaining software projects with a microservices architecture</li>
<li>Be accustomed to everyday use of Windows and UNIX CLI tools</li>
<li>Have familiarity with cloud computing platforms</li>
<li>Have proficiency in Git</li>
<li>Be cognizant of project technical debt and its management</li>
</ul>
<h3>She/he will also preferably have two or more of the following technical qualities:</h3>
<ul>
<li>CI/CD experience</li>
<li>System monitoring and logging experience</li>
<li>Experience in the creation, use, and orchestration of containerization technologies</li>
<li>Database engineering experience</li>
<li>Agile development experience</li>
<li>Asymmetric/symmetric encryption experience</li>
</ul>
<h3>An individual in the Fathom5 Software Engineer position will develop/possess the following traits:</h3>
<ul>
<li>Programming expertise -- Mastery of one or more statically-typed programming languages (Go, Rust, C, and C++ preferred) with the ability to address advanced programming concepts. At least 2 years of GOLANG experience is highly desirable.</li>
<li>Clear and effective communication -- Written and oral communication skills sufficient to explain technical material to other team members and customers.</li>
<li>Quick learning and problem-solving -- The ability and desire to learn new technologies swiftly and enact decisive solutions in development.</li>
<li>Passion -- A natural disposition and passion for development as proven by an extensive portfolio of effective projects.</li>
<li>Leads with initiative -- The desire to lead by example through effective management skills and proactive address of diverse needs on various projects.</li>
<li>Ability to travel -- Occasional domestic and international travel in support of client projects and team goals.</li>
</ul>
',
    'how_to_apply' => '<p>Email your resume to <a href="mailto:hello@fathom5.co">hello@fathom5.co</a></p>
',
    'company_logo' => NULL,
  ],
  33 => [
    'id' => 'dc764f86-69e6-4301-94f6-d9e5f4f2c1ab',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/dc764f86-69e6-4301-94f6-d9e5f4f2c1ab',
    'created_at' => 'Tue Feb 16 12:16:00 UTC 2021',
    'company' => 'Limango',
    'company_url' => 'https://www.limango.de/ehp',
    'location' => 'Munich',
    'title' => 'Backend Developer (m/w/d)',
    'description' => '<p><strong>OUR MISSION</strong></p>
<p>limango is the Online Shop for families – We wow our customers every day with a fantastic range of brands at very attractive prices. Based in Munich, our 300 employees share a passion for families. We do everything we can to understand their needs and fulfil their wishes. limango has everything families need: Fashion for Babies, Kids, Women and Men as well as Homeware, Toys, Cosmetics and Family holidays. At limango you’ll find both classic brands and upcoming brands from across Europe. Founded in 2007 and a member of the Otto Group since 2009 limango now has over 14 million members across Germany, Austria, France, the Netherlands and Poland and sells over 40 000 products daily to German customers alone. We want to continue to grow and win the trust of all mums in Europe. To help us achieve this, we’re looking for motivated, talented individuals to work with us and be a part of something big.</p>
<p><strong>YOUR JOB</strong></p>
<ul>
<li>In the limango IT you get the chance to contribute your own ideas and know-how to the development of services all around the different processes of our ecommerce business</li>
<li>Together with our experienced and international development teams you will improve and expand our backend systems</li>
<li>You will become part of our well-rehearsed agile teams of versatile and experienced developers and a dedicated product owner</li>
</ul>
<p><strong>YOUR PROFILE</strong></p>
<ul>
<li>A degree with a focus on IT or a comparable training</li>
<li>You have sound professional experience in the development of scalable eCommerce applications in common PHP frameworks such as Symfony3+ as well as knowledge of OOP and design patterns</li>
<li>You bring practical experience with RESTful APIs and service-oriented architecture</li>
<li>You have profound experience in relational databases (MySQL/MariaDB)</li>
<li>DevOps and GoLang experience are desirable</li>
<li>A well-functioning tool is not enough for you - you enjoy optimizing complex IT processes!</li>
</ul>
<p><strong>OUR OFFER</strong></p>
<ul>
<li>Exciting, technically demanding challenges in a highly frequented online shop with focus on high scalability and performance</li>
<li>Agile development, Scrum teams, flat hierarchies and direct communication in a very comradely atmosphere</li>
<li>A steep learning curve in a dynamic company with international orientation</li>
<li>A great office in the Tech-Spot of Munich with probably the coolest roof terrace in the city</li>
</ul>
<p>Interested? We look forward to receiving your complete application including a letter of motivation, salary requirements and your earliest possible starting date.</p>
<p><img src="https://camo.githubusercontent.com/48ee398c3c71a3dd8146a010f82d6dd2341a5066/68747470733a2f2f742e676f686972696e672e636f6d2f682f65633735356233343837643761333039633239333938393839386464316235313964656639363963346637306539386438633436633830303139366539346131"></p>
',
    'how_to_apply' => '<p><a href="https://t.gohiring.com/h/f879f58f8dba6fe4d97110abcd38f23bab97beeaecbbfef7a0ce5223b16625e1">application form</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBa0NaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d7e86dc77651a988fe8234df4e4a00a5fb78505e/Limango.jpg',
  ],
  34 => [
    'id' => 'eb294c80-0d62-47a3-9cf6-048daeaad041',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/eb294c80-0d62-47a3-9cf6-048daeaad041',
    'created_at' => 'Sat Feb 13 01:20:45 UTC 2021',
    'company' => 'Nav Inc.',
    'company_url' => NULL,
    'location' => 'Remote',
    'title' => 'Senior Platform (DevOps) Engineer ',
    'description' => '<p>Senior Platform (DevOps) Engineer - Remote or In Office (UT, PA, CA)</p>
<p>Nav was founded to have a meaningful impact on the lives of millions of small business owners by bringing efficiency and transparency to financial decision making. We are changing the way these business owners secure lending with our innovative technology and customer-centric approach. We build intelligent software on top of data to solve issues in the small business financial ecosystem. Our ability to collect, aggregate, enrich and distribute this data makes us unique and presents many avenues for business growth.</p>
<p>We are passionate about empowering our teams and giving them the freedom to shape our future. Our teams lead with candor, charge hard, fail fast, all while working in a fun, diverse, and inclusive environment. If you are a high-energy innovator, enjoy a rapid-paced growing environment, and have the zest to solve big challenges, join us… Be a part of history and co-create the future of FinTech.</p>
<p>WHAT YOU’LL HELP US DRIVE
Designing, developing, and maintaining scalable, reusable code and operations infrastructure.
Maintaining and cultivating the infrastructure and tool set for multiple development and production environments.
Defining, creating and contributing to a range of tools used by Nav employees.
Active participation on a diverse set of topics relating to business and or the engineering team.
Participating in Nav\'s agile process within Jira.
Being an effective communicator, having a positive attitude,
Identification of solutions, communication and alignment with engineering and stakeholders.
Performing as a coach and mentor to your team, and the organization as a whole.</p>
<p>WHAT YOU BRING TO THE TABLE:
2+ years of industry experience in Operations, DevOps, or SysAdmin Engineering.
Must be comfortable or expert with Linux
Proficiency in managing and optimizing databases, preferably Postgres.
Experience with configuration management, preferably Ansible
Fluency with Cloud infrastructure, preferably AWS (EC2, RDS, SAM, S3, VPC, EKS)
Experience with SCM solutions, preferably git (specifically gitlab)
Understanding and ability to create continuous integration and continuous deployment workflows for software projects
Strong understanding of software security, and an ability to continually increase the security of our platform
Experience in working in Agile teams and iterating to build sustainable and iterative solutions.
If you participate in any open source projects please send us links.
Experience with containerization would be a plus, specifically Docker and Kubernetes</p>
<p>WHO YOU ARE:
You are self directed and passionate driving solutions
You are a relentless problem solver
You are eager to learn and adapt quickly to change
You\'re an engaged team member with the ability to grow, mentor and challenge your peers to do their best work every day.
You\'re known for crossing the boundaries of your function to meet company goals.
You care about the people you work with but challenge them directly when necessary.
You are comfortable delivering feedback and coaching up, down and to the side.
You are customer (including internal customers) focused.</p>
',
    'how_to_apply' => '<p><a href="https://nav.bamboohr.com/jobs/view.php?id=176&amp;source=aWQ9MTU%3D">https://nav.bamboohr.com/jobs/view.php?id=176&amp;source=aWQ9MTU%3D</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaTJaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--ea21c6cf91bccac0cbd2aa427cb64f6a70c47d92/Nav%20Logo%20-%20Blue.png',
  ],
  35 => [
    'id' => '0a8dd9c0-6b66-44be-99b0-cca5c3556ca7',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/0a8dd9c0-6b66-44be-99b0-cca5c3556ca7',
    'created_at' => 'Sat Feb 13 00:58:53 UTC 2021',
    'company' => 'University of California Berkeley',
    'company_url' => 'https://www.berkeley.edu',
    'location' => 'Berkeley, CA, USA',
    'title' => 'Director of The Bancroft Library and Associate University Librarian for Special Collections - Library',
    'description' => '<p>Director of The Bancroft Library and Associate University Librarian for Special Collections - Library</p>
<p>Director of The Bancroft Library and Associate University Librarian for Special Collections
The University Library, University of California, Berkeley</p>
<p>Hiring range: Associate University Librarian
Salary Range: Salary commensurate with experience and qualifications
Percentage Time: 75 - 100% appointment, depending on Faculty status and Teaching preferences.</p>
<p>The University of California, Berkeley invites both nominations and applications for the position of Director of The Bancroft Library and Associate University Librarian (AUL) for Special Collections. Bancroft\'s world-renowned special collections are among the largest and most actively used in the nation, providing a tremendous opportunity for the right visionary leader. The Director and AUL will assume a newly reimagined role, which unites the direction of a major research and collecting institution with strategic, innovative, and collaborative leadership for all special collections and archives within the University Library.</p>
<p>The University Library at Berkeley comprises 24 general and subject libraries, with shared service units that support business functions, such as finance and development, and content functions, such as digitization and communications. Within the organization, The Bancroft Library is the principal special collections library, with other significant collections of rare and archival materials held in the Anthropology, Bioscience, East Asian, Environmental Design, and Music libraries. The Director and AUL will bring experience and energy to both the direct leadership and management of The Bancroft Library and the strategic and coordinated development and management of the Library\'s special collections, in collaboration with the AUL for Scholarly Resources and the Director of the East Asian Library. The Director and AUL will join the Library\'s executive leadership team, working in close partnership with the leaders of other Library units, and report to the University Librarian.</p>
<p>BERKELEY\'S SPECIAL COLLECTIONS</p>
<p>The Bancroft Library welcomes patrons from Berkeley and beyond, serving as one of the most heavily used academic rare book and special collections libraries in the country. Bancroft staff annually teach sessions for about 3,000 students, support about 5,000 patrons in its reading rooms, and serve millions of visitors online. Founded in 1905, Bancroft\'s core holdings include the Bancroft Collection of Western North America, Mexico, and Central America, the Rare Books Collection, the History of Science and Technology Program, and the University Archives. Over the past 50 years, Bancroft\'s academic research groups, including the Mark Twain Papers &amp; Project, the Oral History Center, and the Center for the Tebtunis Papyri, have earned the Library additional international acclaim.</p>
<p>The Bancroft Library continues to vigorously build its physical collections, spending about $1.5 million annually on new acquisitions and receiving gifts-in-kind of comparable value. The Library stewards nearly 400 million physical items (volumes, archival manuscripts and pictorial items, maps, microforms, etc.) and a growing collection of digital materials. In addition to its stewardship of analog holdings, the Library is building a robust program for securing and processing born-digital archives. With about 60 career staff/library professionals and many student employees, Bancroft supports world-class research both directly in its own units, and through engagement and collaboration with scholars at Berkeley and across the globe.</p>
<p>The University Library includes other libraries with significant special collections, including the Anthropology Library, the Bioscience, Natural Resources &amp; Public Health Library, the C. V. Starr East Asian Library, the Environmental Design Library, and the Jean Gray Hargrove Music Library. The Music Library, for example, contains one of the most extensive U.S. collections of dramatic music, along with many other treasures. The East Asian Library holds over 100,000 rare items, including over 2,700 Chinese rubbings of reliefs and engravings, and the Fonoroff Collection for Chinese Film Studies, with over 70,000 periodicals, posters, photographs, and ephemera documenting the development of the film and entertainment industry of greater China. The special collections holdings of these libraries are diverse and unique, adding to the rich collections available to Berkeley faculty and students for research, teaching, and learning.</p>
<p>Over the past 25 years, the University Library has digitized significant portions of its special collections, building one of the largest digital special collections in the University of California system.</p>
<p>LEADERSHIP</p>
<p>The University Library is looking for a leader with proven experience, bold ideas, and the confidence and political acumen to execute them. With crucial responsibility for fundraising and for interacting with scholars at Berkeley and internationally, this leader should be skillful at engaging in passionate content discourse with researchers, and preferably bring experience in one of Bancroft\'s major collecting areas. With both University Library-wide responsibilities and leadership of one constituent library, the Director and AUL will be an integral member of a tightly integrated, collaborative team that collectively supports the University Library\'s strategic vision (see: ucberk.li/our-plan). The Director and AUL should be able to foster a culture of innovation, engagement, and collaboration, and promote continuous professional growth and learning at all staff levels.</p>
<p>The five AULs, the Director of the East Asian Library, the Director of Communications, and the Executive Director of Development report to the University Librarian; collectively these nine professionals constitute the Library Cabinet. This team works closely to set strategic directions and policies for the entire Library. They collaborate in an intensely matrix-organized institution, providing each other with partnership and support services. The special collections outside of Bancroft, for example, will benefit from coherent, coordinated practices in collection development, provenance, metadata creation, and ethical access led by this Director and AUL. Similarly, among other examples, Bancroft benefits from the fundraising research, cultivation, and stewardship services provided by the Library\'s development office.</p>
<p>Director of The Bancroft Library</p>
<p>This position\'s primary responsibility is to serve as the Director of The Bancroft Library. Bancroft\'s leadership team includes the Director; a Deputy Director, who leads the curatorial staff and oversees public access services and operations; and an Assistant Director, who leads the technical services operation. The Director of The Bancroft Library also leads the directors of the three academic research groups and is the principal Bancroft liaison to the Berkeley faculty. Bancroft\'s leadership team, together with other senior members of the Bancroft staff and in collaboration with other University Library leaders, has primary responsibility for collection development, research and academic engagement, technical services, public access services, and outreach and fundraising. The Director leads fundraising for Bancroft in collaboration with the University Librarian and the Executive Director of Development. The Director engages actively with scholars and members of the international antiquarian book and manuscript trade, as well as the wider scholarly community. The Director has overall responsibility for all Bancroft activity, while other members of Bancroft\'s leadership team oversee much of the day-to-day operations.</p>
<p>The Director is responsible for leading Bancroft consistent with the Library\'s core principles and values. For example, the Director should promote a user-centered approach to the acquisition, processing, and accessibility of special collections in analog and digital formats. The Director will advance diversity, equity, inclusion, and belonging — both within The Bancroft Library and, through its user services, beyond.</p>
<p>The Director is responsible for managing The Bancroft Library\'s annual budget of about $8 million (including substantial gift, endowment, and grant funds), as well as facilities and personnel. As do the directors of all constituent libraries that compose the University Library, the Director of The Bancroft Library collaborates closely with the leaders who have Library-wide responsibilities for communications, digital services, facilities, finance, fundraising, human resources, information technology, legal affairs, and security. The Director also collaborates with the leaders of special collections at the other University of California campuses, and is an active participant in the national community of leaders of the most prominent academic special collections libraries.</p>
<p>Associate University Librarian for Special Collections</p>
<p>The AUL for Special Collections is a new role, designed to provide overall leadership for the rare and archival materials we consider special collections at the University Library. This AUL will work with the leaders of other units holding special collections to provide coordinated, forward-looking strategies and practices for the development, management, and use of Berkeley\'s extraordinary collections. Together they will innovate and implement process efficiencies, reducing duplication and increasing consistency to improve the resource-finding and use experiences of scholars. During an era of limited budget growth, despite significant fundraising success, close collaboration and mutual support across the University Library have enabled the organization to continuously improve services for scholars.</p>
<p>Selected strategic highlights</p>
<p>Enhanced access to and use of the University Library\'s special collections is a top strategic priority. Bancroft and the other University Library special collections have been leaders in enhancing access to archival treasures in the age of digitized and networked information. Continuing digitization of its enormous special collections is a primary focus of the University Library\'s Digital Lifecycle Program, which currently adds about 1.5 million newly digitized files to its online collections annually. An important and exciting priority for this position is to work closely with the AUL for Digital Initiatives and Information Technology to scale up this program, including developing and adopting expanded selection, curation, and processing workflows, as well as exploring new methods and tools for increasing the computational usability of digitized collections in research and teaching.</p>
<p>As with many cultural heritage and information resource organizations in higher education, Bancroft and other University Library special collections are simultaneously blessed by growing demand for existing and new services, and challenged by declining public investment in their operations. Fortunately, Bancroft is supported with the advice and philanthropy of the external nonprofit Friends of The Bancroft Library, a California nonprofit public benefit corporation, as well as strong philanthropic support from many loyal donors. The University Library has recently invested in expanding its fundraising team, with notable success, and the groundwork has been laid for even more growth in the coming years. It is crucial that the Director and AUL have a demonstrated talent or potential for fundraising and supporting initiatives through grants.</p>
<p>Nature of appointment</p>
<p>This is an academic leadership position. Qualified candidates may simultaneously hold a faculty position at the University of California, Berkeley. External candidates who wish a joint faculty appointment will need to seek such a position with a relevant department. The University Library will facilitate consideration, but is not the appointing unit and cannot guarantee such a position will be made available. The position will be for 75 percent or 100 percent effort, to be agreed upon with the preferred candidate, depending on faculty status and preference for teaching duties (through an academic department).</p>
<p>THE ENVIRONMENT
The University of California, Berkeley, is one of the world\'s most iconic teaching and research institutions. Since 1868, Berkeley has fueled a perpetual renaissance, generating unparalleled intellectual, economic, and social value in California, the United States, and the world. Berkeley\'s culture of openness, freedom, and acceptance — academic and artistic, political and cultural — make it a very special place for students, faculty, and staff. Berkeley is committed to hiring and developing staff who want to work in a high-performing culture that supports the outstanding work of our faculty and students. Candidates are encouraged to read more about the UC Berkeley culture at <a href="http://jobs.berkeley.edu/why-berkeley.html">http://jobs.berkeley.edu/why-berkeley.html</a>.
In a highly-diverse and intellectually-rich environment, Berkeley serves a campus community of over 30,000 undergraduate students, 11,000 graduate students, and 1,500 faculty. The University Library also serves the people of California and the world through lending to over 35 countries a year, and making available a rapidly-growing archive of digitized special collections materials.</p>
<p>The University Library comprises 24 campus libraries, with a collection of over 13 million circulating volumes, including almost 1.5 million e-books, and subscriptions to over 130,000 journals and periodicals. We manage close to 10 million files (200 TB) in our digital holdings of special collections materials, and have contributed over 3 million digitized books from our circulating collections to HathiTrust. The University Library actively partners with the other nine UC campuses and the systemwide California Digital Library. The Library has a current operating budget of about $62 million with approximately 325 full-time employees and over 600 student employees each year.</p>
<p>Minimum basic qualification at time of application:</p>
<p>Advanced degree (For example, PhD or Masters or equivalent international degree)</p>
<p>Preferred qualifications: Must be met by start date on the job</p>
<p>The Director of The Bancroft Library and AUL for Special Collections should be a scholar who has substantial experience engaging in research using special collections materials, particularly in an area or areas of special strength for Bancroft. The successful candidate might have a background as a faculty member or professional librarian or archivist. Preferred candidates will have experience leading an academic unit (e.g., as academic department chair, dean, academic library, or archives director or associate director), including supervising and/or directing academic and professional staff. The Library at the University of California, Berkeley is committed to the support and encouragement of a multicultural environment and seeks candidates who can make positive and imaginative contributions in a context of ethnic and cultural diversity. Also preferred is experience and proven success with fundraising and grant writing.</p>
<p>Recruitment information:</p>
<p>This recruitment will remain open until filled. The identity of finalists will be public, and each will be expected to make a presentation in a public setting.</p>
<p>Submit applications online at: <a href="https://apptrkr.com/2151594">https://apptrkr.com/2151594</a>
Berkeley has retained Isaacson, Miller, a higher education executive search firm, to assist in this search.</p>
<p>Inquiries, nominations, and other application documents should be sent via the Isaacson, Miller website for the search: <a href="http://www.imsearch.com/7791">http://www.imsearch.com/7791</a>.
Electronic submission of materials is required.</p>
<p>The university has an excellent retirement system and sponsors a variety of group health, dental, vision, and life insurance plans in addition to other benefits.</p>
<p>The University of California is an Equal Opportunity/Affirmative Action employer. All qualified applicants will receive consideration for employment without regard to race, color, religion, sex, sexual orientation, gender identity, national origin, disability, age, or protected veteran status. For the complete University of California nondiscrimination and affirmative action policy see:
<a href="http://policy.ucop.edu/doc/4000376/NondiscrimAffirmAct">http://policy.ucop.edu/doc/4000376/NondiscrimAffirmAct</a></p>
<p>This is a designated position requiring fingerprinting and a background check due to the nature of the job responsibilities. Berkeley does hire people with conviction histories and reviews information received in the context of the job responsibilities. The university reserves the right to make employment contingent upon successful completion of the background check.</p>
<p>University Library contact:</p>
<p>Susan Swarts, Associate University Librarian for Administration and Organizational Effectiveness, <a href="mailto:sswarts@berkeley.edu">sswarts@berkeley.edu</a>.</p>
<p>Immaculate Adesida, HR Generalist - <a href="mailto:immaculate@berkeley.edu">immaculate@berkeley.edu</a></p>
<p>Copyright ©2017 Jobelephant.com Inc. All rights reserved.</p>
<p><a href="https://www.jobelephant.com/">https://www.jobelephant.com/</a>
jeid-70a0f81e8ebba246bd2f8773815bbebf</p>
',
    'how_to_apply' => '<p>Submit applications online at: <a href="https://apptrkr.com/2151594">https://apptrkr.com/2151594</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaXVaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--72cf6dbc9b7073b68cb08fc33d520e4138563263/University%20of%20California%20Berkeley.png',
  ],
  36 => [
    'id' => '8a9f0789-ce91-4ceb-9557-dec56750d37c',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/8a9f0789-ce91-4ceb-9557-dec56750d37c',
    'created_at' => 'Fri Feb 12 22:06:17 UTC 2021',
    'company' => 'GetThru',
    'company_url' => 'http://GetThru',
    'location' => 'Anywhere in the United States',
    'title' => 'Lead Engineer (Remote)',
    'description' => '<p>GetThru is hiring a Lead Engineer to support 3-5 of our ~15 engineers. This is a “manager who codes” role: that is, it’s a management role foremost but does require active web application development skills for code review and pair programming.  There will also be opportunities to work directly on software development “off the critical path” as time allows.</p>
<p>Our software is built using Elixir and the Phoenix web framework. This role is open both to experienced leaders who are new to Elixir development and to experienced Elixir developers who are new to management: either will receive appropriate training, mentorship, and support.  (Those who have experience in both are also welcome and encouraged to apply, of course.) The role will be a part of the Engineering team and report to the Vice President of Engineering.</p>
<p><strong>About GetThru</strong></p>
<p>GetThru’s mission is to empower organizations to connect authentically with their audiences at scale while building a sustainable company committed to progressive social change. Our tools have been used by more than 2,000 organizations to send over 1 billion text messages and make more than 500 million phone calls for voter contact, volunteer recruitment, fundraising, polling, and more. We are an all-remote company with 40+ full time staff spread across 14 states. Prior to the pandemic, we had a once-yearly all staff retreat, and held semi-annual in-person team meetings (e.g., sales, support, engineering). And while our roots are in progressive politics, we love partnering with organizations of all kinds that share our passion for creating a better world.</p>
<p><strong>Who you are</strong></p>
<ul>
<li>A seasoned software engineer with web application development experience who can take primary responsibility for a complex software project while supporting less experienced engineers collaborating on that project.</li>
<li>A disciplined and creative problem solver who can create your own direction in a low-structure environment, and execute on it.</li>
<li>The person who steps in when something needs to get done -- even if it’s not glamorous or fun or explicitly your responsibility -- and makes sure it happens.
Someone who has or wants management experience.</li>
<li>A collaborative and supportive teammate who believes that a team is greater than the sum of its parts.</li>
</ul>
<p><strong>What you\'ll do</strong></p>
<ul>
<li>Quickly come up to speed on the functionality of our two products and the technology underlying them.</li>
<li>Support your team members and teammates in developing their technical and other professional skills through mentorship, coaching, pair programming, and code review.</li>
<li>Set and enforce clear expectations for your team members; provide support and structure for success; promptly and empathetically address occasions when expectations are not being met.</li>
<li>Actively seek opportunities for your team members to grow by taking on new challenges and responsibilities.</li>
<li>Guide your team members and collaborate closely with Product, Design, Support, and other Engineering teammates to achieve successful project completion.</li>
<li>Delegate responsibilities and outcomes -- with appropriate guidance given their skills and experience -- to your team members in ways that will support their growth and career goals.</li>
<li>Work with your team members to define and advance professional development goals</li>
<li>Collaborate with teammates to resolve service interruptions and high-impact defects; participate in on-call rotation.</li>
<li>Develop software “off the critical path” for our products, internal tooling, or build pipelines; collaborate with teammates on their assigned projects.</li>
<li>Collaborate to optimize, refine, and codify Engineering processes and processes for collaborating with other departments.</li>
<li>Lead hiring processes to fill any openings on your team.</li>
<li>Ensure your team members’ focus remains aligned with department and company-level goals.</li>
<li>Actively support the development of a trusting and collaborative team culture.</li>
</ul>
<p><strong>Qualifications</strong></p>
<p>At least one of:</p>
<ul>
<li>Prior professional experience developing software using Elixir</li>
<li>Prior experience as an engineering lead or manager</li>
<li>A commitment to empathetic leadership</li>
<li>Excellent written and verbal communication skills</li>
<li>A commitment to / interest in progressive causes</li>
<li>Authorized to work in the U.S. or Canada</li>
</ul>
<p>Our stack includes (prior experience in all of these is not necessary)</p>
<ul>
<li>Elixir</li>
<li>Javascript (including Typescript and ES6)</li>
<li>Phoenix</li>
<li>Liveview</li>
<li>ReactJS</li>
<li>PostgreSQL</li>
<li>Redis</li>
<li>Docker</li>
<li>Kubernetes</li>
<li>AWS</li>
</ul>
<p><strong>Location</strong></p>
<p>GetThru is an all-remote company with employees spread out across the country. Work from anywhere in the U.S. as long as there is good internet.</p>
<p><strong>Compensation</strong></p>
<ul>
<li>$140,000-180,000 base salary, depending on experience</li>
<li>Compensation for participation in on-call rotation</li>
<li>Additional compensation via bonuses and participation in profit-sharing pool</li>
<li>Participation in employee stock option pool</li>
<li>401K + employer match that begins on or after 3 months of employment</li>
<li>100% Health / dental / vision benefits for employees, 75% for dependents</li>
<li>3 weeks of vacation time in year 1 and 2, with increases thereafter</li>
<li>Additional benefits: ergonomic stipend, monthly wellness stipend, parental leave, charitable giving match</li>
</ul>
<p><strong>Equal Opportunity</strong></p>
<p>GetThru provides equal employment opportunities to all employees and applicants for employment without regard to race, color, religion, sex, sexual orientation, national origin, age, disability, or genetics. As our company grows, we strive to make space for all kinds of people to do amazing work with us. We especially encourage applications from women, people of color, LGBTQ+ people, people with disabilities, immigrants, and other communities underrepresented in technology startups. We believe that a team with a wide range of backgrounds and experiences will be more creative, more adaptable, and more effective. And we strive to build a team that reflects the communities we are working to support.</p>
',
    'how_to_apply' => '<p>Please apply by going to:
<a href="https://getthru.freshteam.com/jobs/AFGfdNioz1rv/lead-engineer-remote">GetThru - Lead Engineer</a></p>
<p>Please submit a resume and in your cover note, please explain why you want to work for GetThru in this role. Tell us what experiences make you a good fit, what causes you are connected to, and why you are excited about this job. This position is open until filled.</p>
',
    'company_logo' => NULL,
  ],
  37 => [
    'id' => '9520f18c-dd70-4acd-a35e-dab400c1e491',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/9520f18c-dd70-4acd-a35e-dab400c1e491',
    'created_at' => 'Fri Feb 12 21:58:36 UTC 2021',
    'company' => 'Agiloft Inc',
    'company_url' => NULL,
    'location' => 'Kyiv, Ukraine, Hungary, Russia, India,Czech Republic',
    'title' => 'Dev Ops Engineer (Remote)',
    'description' => '<p><strong>THRIVE WITH AGILOFT</strong></p>
<p>Are you an experienced DevOps Engineer who is successful, motivated, smart, energetic, and looking for a rewarding position in a growing, profitable, and dynamic company?</p>
<p>Agiloft is expanding our developer team, looking for DevOps engineers that thrive working with enterprises in multiple industries, with unique business challenges requiring sophisticated solution design.</p>
<p><strong>WHY JOIN AGILOFT?</strong></p>
<ul>
<li>
<p>Agiloft was named the market leader in every category in the Gartner Critical Capabilities for CLM report, and a market leader in the Gartner Magic Quadrant.</p>
</li>
<li>
<p>Contract Lifecycle Management (CLM) is one of the fastest-growing areas of enterprise sales, with a TAM projected to climb from $2B to $7B in the next 5 years.</p>
</li>
<li>
<p>The Agiloft Contract and Commerce Lifecycle Platform has won over a dozen awards, including the Editor\'s Choice award from PC Mag, for the past five years in a row.</p>
</li>
<li>
<p>Agiloft has a highly differentiated value proposition which is uniquely appealing to enterprises: pre-built applications with a deeply configurable, no-code platform for integrated Business Process Management throughout an organization.</p>
</li>
<li>
<p>Agiloft is pioneering the applied use of Artificial Intelligence to enable next-generation business commerce at organizations ranging from small enterprises to U.S. government agencies and Fortune 100 companies.</p>
</li>
<li>
<p>Agiloft is the only company in the industry with the confidence to provide an unconditional satisfaction guarantee, and you too will be successful with Agiloft.</p>
</li>
</ul>
<p>As the leader in the CCLM market, Agiloft is winning many Enterprise deals and looking to hire the best talent to meet this demand with a competitive compensation plan that rewards overachievement.</p>
<p><strong>POSITION OVERVIEW</strong></p>
<p>This is a remote-only position. You must be comfortable with setting your own schedule and proactively collaborating in a globally dispersed team using a variety of communication channels.</p>
<p>We are seeking a DevOps Engineer to join our engineering team. The ideal candidate is someone who has a solid background in software development infrastructure architecture, automation, configuration management, monitoring, and tools development for enterprise software and systems. The candidate must have a passion for automating everything, and a sense of ownership.</p>
<p><strong>JOB RESPONSIBILITIES</strong></p>
<ul>
<li>
<p>Develop new automation systems and improve existing ones that enable fast delivery and replace manual operating procedures wherever they exist</p>
</li>
<li>
<p>Drive analysis, design, and development of automation tools for deployment, development, and operational tasks</p>
</li>
<li>
<p>Lead architectural improvements in our software development- and delivery infrastructure and evaluate new technologies</p>
</li>
<li>
<p>Assume ownership of Agiloft’s installer</p>
</li>
</ul>
<p><strong>REQUIRED QUALIFICATIONS</strong></p>
<ul>
<li>At least two years of hands-on experience as a DevOps engineer</li>
<li>Experience with configuration management systems</li>
<li>Experience with the configuration of Linux and Windows operating systems</li>
<li>Deep knowledge of Python- or Perl scripting languages</li>
<li>Experienced with Java</li>
<li>Good knowledge of Install4J</li>
</ul>
<p><strong>PREFERRED QUALIFICATIONS</strong></p>
<ul>
<li>Computer Science degree or equivalent</li>
<li>Experience with continuous integration / either continuous delivery tools</li>
<li>Deep knowledge of Unix bash or Windows PowerShell</li>
<li>Experience using containers</li>
<li>Experience supporting MySQL/MSSQL databases</li>
<li>Experience with public cloud platforms</li>
<li>Experience working in distributed teams
*Fluent in the English language</li>
</ul>
<p><strong>BENEFITS AND PERKS</strong></p>
<ul>
<li>Competitive salary</li>
<li>Referral bonuses</li>
<li>Flexible work schedules</li>
<li>Professional development and career growth opportunities</li>
<li>Awesome team members</li>
</ul>
<p><strong>To Apply</strong></p>
<p>For immediate consideration, visit <a href="https://tinyurl.com/1swelma6">https://www.agiloft.com/DevOps</a> to apply.</p>
',
    'how_to_apply' => '<p>For immediate consideration, visit <a href="https://tinyurl.com/1swelma6">https://www.agiloft.com/DevOps</a> to apply.</p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaVNaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--aa453fa03692a4658a63b99b831103dfcee9a1de/Agiloft%20Logo%20plain%20(Indeed).png',
  ],
  38 => [
    'id' => '0e9ae5fa-5bbd-4395-aef7-a7a32e0abd01',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/0e9ae5fa-5bbd-4395-aef7-a7a32e0abd01',
    'created_at' => 'Fri Feb 12 16:03:36 UTC 2021',
    'company' => 'Mas & Pas Limited',
    'company_url' => 'http://http',
    'location' => 'London ',
    'title' => 'Experienced Full Stack Web Developer - London-Based or Remote',
    'description' => '<p>Full Stack Web Developer; Experienced Developer for Complex Web Platform - London-Based or Remote</p>
<p>Seeking an experienced, self-motivated Front and Back End Web Developer to join a small London-based team. Remote working arrangements could be considered.</p>
<p>The right candidate would be responsible for developing advanced features in the community chat groups of the platform.</p>
<p>They would also be responsible for managing other aspects of the live site and ensuring that its smooth operation.</p>
<p>Who are we:</p>
<p>Mas &amp; Pas is a parenting network with community forums, a local events platform, and a large library of web content.</p>
<p>Responsibilities include:</p>
<p>●      Plan and architect the technology for a number of new features - including live chat, video sharing webinar hosting and online booking systems.
●      Migrate the website\'s content from Wordpress onto a new framework with a custom CMS.
●      Deliver projects to agreed deadlines, in good quality and after thorough testing.
●      Problem-solve any issues with the site, including diagnosing and correcting any bugs.
●      Maintain and improve the operations and speed of the website in its current form.
●      Apply technical SEO best practices to improve site speed and performance.
●      Able to work either alone or in a small team.
●      Able to communicate effectively with the other team members, both developers and non-developers.</p>
<p>Key Requirements:</p>
<p>●      5 years+ experience in development, testing, and deployment of web applications.
●      Comfortable with custom-coding new applications without reliance on plug-ins.
●      Knowledge and experience of all stages of web development.
●      Extensive development experience using PHP, HTML5, Javascript, Java.
●      Optional experience in C, C++, Ruby, React, Python, and microservices.
●      Enjoy problem-solving.
●      Self-motivated and able to work on your own initiative.
●     Fluent or native level of English language is necessary.
●     Excellent communication skills, especially in understanding requirements and explaining technical or complex concepts.</p>
<p>Sounds interesting? Click APPLY to send your CV including examples of your works for immediate consideration.</p>
<p>Candidates with previous experience in and job titles including; PHP Developer, HTML5 Developer, Javascript Engineer, Java Developer, C++ Developer, Python Developer, Ruby Developer, C Developer, Full Stack Developer, Git, Web Developer, Full Stack Web Development, Laravel, CSS Developer, PHP Engineer, Web Developer Full Stack Web Development may be considered.</p>
',
    'how_to_apply' => '<p>Email your resume to <a href="mailto:hello@masandpas.com">hello@masandpas.com</a> together with links to 5 examples of your work.</p>
',
    'company_logo' => NULL,
  ],
  39 => [
    'id' => 'f4b18395-b295-4812-be28-76d816de17f1',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/f4b18395-b295-4812-be28-76d816de17f1',
    'created_at' => 'Fri Feb 12 15:43:56 UTC 2021',
    'company' => 'Secureworks',
    'company_url' => 'https://secureworks.com/',
    'location' => 'Remote',
    'title' => 'Golang and Kubernetes Platform Engineering',
    'description' => '<p><strong>Software Engineer - Platform Engineering</strong>
<strong>Location: Remote</strong></p>
<p>We are a fully remote software engineering team working on the company\'s next generation security platform. Our goal is to increase the security posture of all of our customers while building a collaborative and innovative engineering culture. We are a proud member of the Dell Technologies family and offer competitive benefit and compensation packages and reward and recognize our employees for exceptional results.</p>
<p>The platform team focuses on backend service and tooling development for other teams and customers to use. We build performant GraphQL APIs using Golang and Kubernetes for  different features of our product, creating and reviewing designs for new projects, building robust software that other teams and customers can use, and collaborating with other internal and external engineering teams to solve problems, as well as building our internal authorization systems. If there is backend work we are involved in one way or another - and our goal as a team is to raise the bar of engineering practices across the larger organization.</p>
<p>Our primary tech stack consists of Golang, Kubernetes, Postgres, and Elasticsearch, but we also use tools like ScyllaDB, Redis, Kafka, SQS, and various other AWS services as well.</p>
<h1>Skills and Requirements</h1>
<h2>We expect to see:</h2>
<ul>
<li>Solid programming skills in Golang with experience developing applications similar to our tech stack</li>
<li>Strong understanding of database fundamentals</li>
<li>Strong understanding of common attack vectors and defensive programming skills</li>
<li>Excellent problem solving skills and an ability to work through problems and get stakeholders and team mates to align</li>
<li>Excellent debugging skills with the ability to walk from UI down to backend services and tracking where problems are happening</li>
<li>Self motivating and self directed, great at communicating complex ideas with remote teams</li>
</ul>
<h2>What we like to see (but not required):</h2>
<ul>
<li>Experience working with kubernetes and designing microservice applications</li>
<li>Remote work experience with a geographically distributed team (currently we have teammates in  PST  to GMT time zones)</li>
<li>Experience working with UI developers, product managers, and UX researchers</li>
<li>Comfortable working knowledge of a cloud platform such as AWS, GCP, or similar</li>
</ul>
<h2>Work Environment</h2>
<p>We are a remote first team and are geographically distributed across the US, Canada, and UK - we utilize tools like Mattermost, Google Meet, Zoom to facilitate communication and tools like Miro and Lucid Charts for diagramming and communicating ideas. We also believe in a strong work-life balance and providing support for team members to accomplish that. We are a family first company that values our team members and has benefits and a culture that will help them through important life events - such as taking care of family, parental leave, etc. We also value continuing education and skills development and have Tech Tuesdays where team members can present to the engineering organization, 3rd parties coming in and giving presentations, as well as training for services like AWS and Kubernetes.</p>
<p><em>Secureworks (A Dell Technologies Company) is committed to the principle of equal employment opportunity for all employees and to providing employees with a work environment free of discrimination and harassment. All employment decisions at Secureworks are based on business needs, job requirements and individual qualifications, without regard to race, color, religion or belief, national, social or ethnic origin, sex (including pregnancy), age, physical, mental or sensory disability, HIV status, sexual orientation, gender identity and/or expression, marital, civil union or domestic partnership status, past or present military service, family medical history or genetic information, family or parental status, or any other status protected by the laws or regulations in the locations where we operate. Secureworks will not tolerate discrimination or harassment based on any of these characteristics.  Learn more about Diversity and Inclusion at Secureworks here.</em></p>
',
    'how_to_apply' => '<p>Email your resume to <a href="mailto:platform-jobs@secureworks.com">platform-jobs@secureworks.com</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaFdaIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--2cefca02f2059546e6e746db79560990c02e0d29/Screen%20Shot%202021-02-12%20at%2010.40.07%20AM.png',
  ],
  40 => [
    'id' => '7fa9c147-ce9d-4440-b4e2-fcc0e901c861',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/7fa9c147-ce9d-4440-b4e2-fcc0e901c861',
    'created_at' => 'Fri Feb 12 12:31:37 UTC 2021',
    'company' => 'MeisterLabs Software GmbH',
    'company_url' => 'https://www.meisterlabs.com/',
    'location' => 'Vienna',
    'title' => 'Senior Back-End Developer (f/m/d)',
    'description' => '<p>Meister was founded in 2006 and although we\'re already a fully grown company, we’ve managed to sustain a startup culture that feels like working with friends. Our offices are truly international, with team members from the U.S., U.K., Ireland, Austria, Germany, Romania, Hungary, Costa Rica and India - a global team to serve an equally global user base. We\'re big advocates of diversity and are proud to have a growing number of women in our tech company, including in leadership positions. We feel our low employee turnover rate is proof of our positive working culture, including the 10-year employment jubilees we\'ve recently celebrated together.</p>
<p><strong>Your Responsibilities</strong></p>
<p>As a Senior in our Back-End, you will be bringing our products to the next level. You develop and implement the coolest new features and also keep an eye on our infrastructure. To top things off, you will also give guidance to our juniors and thus raise the bar for software development at Meister.</p>
<p><strong>Requirements</strong></p>
<ul>
<li>At least 5 years of experience in software development with OOP languages</li>
<li>Hands-on experience with Ruby, Ruby on Rails and/or Elixir is a big plus</li>
<li>DevOps mindset and knowledge of infrastructure (e.g. Docker, Kubernetes)</li>
<li>Experience with web technologies</li>
<li>Bonus: Experience in mentoring and coaching</li>
<li>Good team spirit and organizational skills</li>
<li>Curiosity to challenge the status quo</li>
</ul>
<p><strong>Our offer</strong></p>
<ul>
<li>Small, highly motivated team</li>
<li>Competitive annual salary starting from 50.000 Euro gross, depending on your experience</li>
<li>A strong focus on the personal and professional development of all employees</li>
<li>Take part in fairs and conferences (e.g. Google I/O)</li>
<li>Beautiful office in the heart of Vienna (snack bar, company garden, leisure rooms,…)</li>
<li>Startup atmosphere (BBQs in the garden, sport sessions, annual retreats,…)</li>
<li>Various employee benefits (additional holidays, public transport card, state-of-the-art equipment,…)</li>
<li>Location: Vienna, Austria</li>
</ul>
<p><img src="https://camo.githubusercontent.com/623aacb2bcf817b2a6313c44cc6baa829b304432/68747470733a2f2f742e676f686972696e672e636f6d2f682f64396361323139383436333332383839623363306666383836643862326235383034373364303237363066346162636664396139613138393761333535343263"></p>
',
    'how_to_apply' => '<p><a href="https://t.gohiring.com/h/a685ba14f5def834468dcac0b5a30ffb04a42d504e1c4759b73a6865b73bf36b">application form</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZ0taIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0ecfa21a7b8d3a6bddb9dc724f1eede6f734cbb4/MeisterLabs%20Software%20GmbH.png',
  ],
  41 => [
    'id' => '46ab84b4-12dc-4a95-ab08-422428554dfc',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/46ab84b4-12dc-4a95-ab08-422428554dfc',
    'created_at' => 'Fri Oct 09 19:42:30 UTC 2020',
    'company' => 'Playco',
    'company_url' => 'http://www.play.co',
    'location' => 'Remote',
    'title' => 'Core/Backend Engineer',
    'description' => '<p>Here at Playco, we make games that bring the world closer together through play.</p>
<p>Our ideal teammates are thoughtful, humble, and passionate professionals who can both zoom into the details and zoom out to embrace the big picture. We are inspired by makers and tinkerers, who are unafraid to experiment with a healthy disregard for constraints. We hope you\'ll enrich our team with your enthusiasm and passion, both for games and for life.</p>
<p>Our engineers are generally amazing at something and great at everything else. We write scalable backend systems, cross-compilers, JavaScript / TypeScript game APIs and tools, and whatever else it takes. No matter what you work on each day, you will work with the best engineers in the world; we have top talent in every part of our stack.</p>
<p><strong>The Role</strong></p>
<ul>
<li>Be a key member of a high performing software engineering team.</li>
<li>Architect and code sophisticated client/server systems for instant gaming.</li>
<li>Play a critical role in day-to-day coding, performance profiling, optimization, and general troubleshooting.</li>
<li>Collaborate with design, engineering, and production teams to devise optimal engineering solutions to game requirements.</li>
<li>Learn from and mentor other engineers on your team.</li>
<li>Take ownership of your projects to make them the best they can possibly be.</li>
<li>Provide valuable input on the company’s long-term engineering roadmap and help identify areas of opportunity for improvement.</li>
</ul>
<p><strong>Desired Skills</strong></p>
<ul>
<li>Bachelor’s degree in Computer Science or related field, or equivalent experience.</li>
<li>3+ years of professional software engineering experience.</li>
<li>Experience writing clean, testable, high-quality code and designing highly scalable systems in production.</li>
<li>Solid familiarity with deployment on cloud environments (AWS, GCP, Azure, etc.).</li>
<li>Strong Computer Science fundamentals in software systems design, algorithms, and data structures.</li>
<li>Ability to interact with peers in a constructive and productive style.</li>
<li>Familiarity with git, svn, or other VCS.</li>
<li>Good communication skills and the ability to work effectively on shared projects with designers, artists, testers, product managers, and other developers.</li>
<li>Strong team player with a positive attitude.</li>
</ul>
<p><strong>Bonus</strong></p>
<ul>
<li>Expert knowledge of NodeJS and ES6 / TypeScript.</li>
<li>DevOps experience -- setting up CI/CD environments, orchestrating deployments, creating monitoring dashboards, anything that makes the development process easier, more enjoyable and more accountable.</li>
<li>Experience in game development and shipped titles.</li>
</ul>
',
    'how_to_apply' => '<p><a href="https://jobs.lever.co/playco/4cbca38a-563f-432f-978b-b41f1dabc66c?lever-origin=applied&amp;lever-source%5B%5D=GitHub">Apply Here</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc2FMIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--cb29d1ab0fec648aee52b0ad6e7ec0a0485551ca/Round_Logo1%20(1).png',
  ],
  42 => [
    'id' => '1f21b777-6e99-483d-b3c2-d55b07654194',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/1f21b777-6e99-483d-b3c2-d55b07654194',
    'created_at' => 'Thu Feb 11 18:49:39 UTC 2021',
    'company' => 'Boston Red Sox ',
    'company_url' => NULL,
    'location' => 'Boston',
    'title' => 'Data Engineer ',
    'description' => '<p>POSITION OVERVIEW:
The Data Engineer, Baseball Systems position will be a member of the baseball operations software development team, and is responsible for integrating, collecting, processing, and storing many sources of baseball data, as well as designing and building new data solutions. This position must be comfortable with on-premises and cloud solutions, and take the initiative to explore new optimizations and cutting-edge data technologies. This individual will work closely with our data architect, analysts, developers, and other members of baseball operations.</p>
<p>RESPONSIBILITIES:</p>
<p> Build leading-edge baseball solutions together with the software development team, analysts, and others on new and existing baseball systems
 Build and maintain integration pipelines, often via an API or file-based, while also identifying areas of improvement and spending time to re-architect when required
 Build and maintain infrastructure to optimize extraction, transformation, and the loading of data from various sources
 Design, build, and maintain data warehousing solutions for the software development and analytics teams
 Build and maintain tools for the analysts to enable more efficient and extensive data modeling and simulation efforts
 Participate in key phases of the software development process of critical baseball applications, including requirements gathering, analysis, effort estimation, technical investigation, software design and implementation, testing, bug fixing, and quality assurance
 Actively participate with software developers and data architects in design reviews, code reviews, and other best practices
 Work closely at times with baseball analysts to design and implement data solutions
 Respond to and resolve technical problems and issues in a timely manner</p>
<p>TECHNICAL SKILLS &amp; QUALIFICATIONS:</p>
<p> Bachelor’s degree in Computer Science, Software Engineering, Computer Engineering, Statistics, Information Systems, or a related field
 2-3 years of experience in a Data Engineer role
 Strong SQL skills, including query optimization and database design
 Experience building custom API integrations, interfacing with JSON, XML, and custom data structures
 Experience with AWS, GCP, or Azure cloud services, such as Cloud SQL, RDS, Redshift, Azure SQL, Azure SQL DW, or others
 Experience building data solutions using Python, C#, C++, Ruby, or other languages
 Experience with scheduling and workflow management platforms, such as Airflow
 Experience with big data frameworks such as Hadoop or Spark is a plus
 Experience with R and RStudio is a plus
 Experience with engineering and productionizing statistical/ML models a plus
 Professional experience as an analyst/data scientist (or extensive coursework) a plus</p>
<p>GENERAL SKILLS:
 Ability to work autonomously and as a team in a fast paced environment
 High level of attention to detail with the ability to multi-task effectively
 Comfortable working remotely using Zoom, Teams, Slack, Trello, and other tools to communicate with all team members
 High degree of professionalism and ability to maintain confidential information
 Excellent organizational and time management skills
 An understanding of baseball is a plus</p>
',
    'how_to_apply' => '<p><a href="https://jobs.lever.co/redsox/e97bbd44-4dfa-483a-aab3-a0f7f822d87e">https://jobs.lever.co/redsox/e97bbd44-4dfa-483a-aab3-a0f7f822d87e</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdnFZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0a14d07473ed87e099577506264fd8e6ee906a83/download.png',
  ],
  43 => [
    'id' => 'caa2df9e-4b6c-42cb-916c-7ca1c241fa00',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/caa2df9e-4b6c-42cb-916c-7ca1c241fa00',
    'created_at' => 'Wed Feb 10 20:28:37 UTC 2021',
    'company' => 'Cambridge Associates',
    'company_url' => NULL,
    'location' => 'Boston',
    'title' => 'Lead Developer',
    'description' => '<p>Lead Software Developer – Investment Service Group</p>
<p>Firm Overview</p>
<p>Cambridge Associates was founded in the early 1970s to assist nonprofit institutions with the investment of their endowment assets.  Today, we provide investment management, financial planning and proprietary capital markets research to over 1000 clients including nonprofit institutions, private clients (families) and pension plans.  The firm advises on assets in all asset categories, including equities, bonds, non-US investments, real estate, venture capital, hedge funds, leveraged buyout funds, oil and gas partnerships, and many other types of investments.  We monitor the performance of nearly all major institutional investment managers and provide an advanced monitoring service for our clients to evaluate alternative assets managers such as venture capital and private equity.</p>
<p>Cambridge Associates has a staff of more than 1,100 professionals, including 200 Investment Directors and 150 Investment Associates, based in eight offices located in Arlington, Beijing, Boston, Dallas, London, Menlo Park, Singapore and Sydney. We select our employees with great attention to their potential to become valuable members of a collegial, intelligent and hard-working team.</p>
<p>Position Overview</p>
<p>The Investment Systems Group is seeking a lead software developer to join our development team.  You will have the opportunity to work with a talented team designing and developing mission-critical software at our firm.</p>
<p>The team is responsible for delivering data services to support business process and workflows, decision support systems, and reporting capabilities for our internal customers and the firm’s clients.  These include web applications, mobile apps, and backend services.</p>
<p>Our developers are responsible for reviewing business needs, providing a technical design, implementation, testing and maintaining software.  Cambridge Associates is looking for creative individuals who are driven to produce great solutions while following standards and industry best practices.  These positions require intelligent and self-motivated developers.</p>
<ul>
<li>As part of an agile team, work closely with business analysts, architects and QA.</li>
<li>Participate in planning activities, collaborate and coordinates the efforts across development teams.</li>
<li>Provide suggestions and adjustments as needed to deliver quality software within project scope and timeframes.</li>
<li>Promote and perform development work consistent with industry standards and best practices</li>
<li>Where applicable, refactor existing code for performance improvements and compliance with latest standards</li>
<li>Ability to work independently and understand application functionality through reverse engineering code</li>
<li>Perform unit testing and support test automation.</li>
<li>Apply continuous integration and continuous delivery techniques.</li>
<li>Conduct peer code reviews.</li>
<li>Work on R&amp;D activities and prototypes.</li>
<li>Support Tier 1 systems.</li>
</ul>
<p>Qualifications</p>
<ul>
<li>A Bachelor’s degree in computer science or equivalent experience.</li>
<li>7-10 years of professional experience building message driven applications on the JVM</li>
<li>Experience with event sourcing and other event driven architecture patterns.</li>
<li>Experience with building applications in AWS, specifically EC2 Container Service, EMR (Apache Spark), Lambda, Kinesis, SQS and SNS.</li>
<li>Experience with relational databases and JDBC required. Experience with search engines such as - Elasticsearch or Lucene a plus.</li>
<li>Demonstrated experience applying TDD, continuous integration and lean delivery.</li>
<li>Experience building and maintaining micro-service components and architectures.</li>
<li>Experience building measurement and continuous improvement into software.</li>
<li>Ability to satisfy complex business requirements through simple design and execution.</li>
<li>Possess strong problem-solving and analytical skills.</li>
<li>Experience with mid/back-office financial services operations a plus.</li>
<li>All candidates must be eligible to work in the US without sponsorship.</li>
</ul>
<p>Cambridge Associates is an equal opportunity employer. Diversity and inclusion are essential elements of our culture. We are committed to fostering an environment where individual perspectives, backgrounds, and life experiences make the firm a great place to work, and result in a more satisfying client experience.</p>
',
    'how_to_apply' => '<p>Apply at <a href="https://phe.tbe.taleo.net/phe02/ats/careers/v2/viewRequisition?org=CAMBRIDGEASSOCIATES&amp;cws=47&amp;rid=7721">https://phe.tbe.taleo.net/phe02/ats/careers/v2/viewRequisition?org=CAMBRIDGEASSOCIATES&amp;cws=47&amp;rid=7721</a></p>
',
    'company_logo' => NULL,
  ],
  44 => [
    'id' => 'e13be5b4-9039-408f-9b88-3327bac37f70',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/e13be5b4-9039-408f-9b88-3327bac37f70',
    'created_at' => 'Wed Feb 10 16:28:03 UTC 2021',
    'company' => 'Basil Systems',
    'company_url' => 'http://www.basilsystems.com',
    'location' => 'Remote',
    'title' => 'Front-end Engineer',
    'description' => '<p>Basil Systems is a healthcare-focused start-up delivering a SaaS application that leverages product, market and regulatory data to support all types of players in the medical device and pharmaceutical industries.  Our goal is to help our customers deliver safe and innovative healthcare products to patients and consumers, while reducing the time to get to market.  After 14 months of stealth development, we soft launched in late December 2020 to a very positive market reception and customers.</p>
<p>In short, Basil is a funded, revenue generating, and growth-oriented company – and we are actively seeking talented developers as we expand our engineering team.  As a front-end engineer you\'ll play a vital role in the ongoing design and development of our app, noticing every detail without losing sight of the big picture.</p>
<p><strong>Front-end Engineer</strong></p>
<p>We are looking for a motivated self-starter; you’ll spend your time building reliable front-end experiences. We would like you to have:</p>
<ul>
<li>3+ years of professional experience as a front-end engineer</li>
<li>Advanced proficiency in building modern web applications with Java Script</li>
<li>Created displays of proprietary data using D3 or related libraries</li>
<li>Demonstrated efficient use of APIs (REST/JSON) for data transfer and business processes</li>
<li>Up-to-date knowledge of React and Typescript</li>
<li>Experience integrating third party component libraries</li>
</ul>
<p>Not all of these are required, but ideally you have experience with:</p>
<ul>
<li>Building complex custom interface components</li>
<li>Using software configuration management (SCM) tools (e.g. Git, Subversion) for software development</li>
</ul>
<p>Some nice to haves</p>
<ul>
<li>Demonstrated ability to improve code quality through writing unit tests, automation and performing code reviews</li>
<li>Built scalable code bases with an emphasis on performance</li>
<li>Experience with containers (Docker/Kubernetes) and the AWS ecosystem</li>
<li>Interest in providing visualizations of ML-driven or algorithmic data</li>
</ul>
<p><strong>Finally</strong>
We are a distributed team headquartered in Boston, with an office in Nashville, TN.  However, our culture allows flexibility as to when, where and how you work best – and actively employ and support remote engineers.</p>
<p>Benefits include:</p>
<ul>
<li>Competitive salary (Depending upon experience, range from $80k - $155k)</li>
<li>Health and vision</li>
<li>An attractive equity package</li>
</ul>
<p>Basil supports and encourages building a work environment that is diverse, inclusive, and safe for everyone -- and we welcome all applicants.  Contact us at: <a href="mailto:jobs@basilsys.com">jobs@basilsys.com</a></p>
',
    'how_to_apply' => '<p><a href="mailto:jobs@basilsys.com">jobs@basilsys.com</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBczJZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--620133d535fb722eaafc849318e1ad8e06aecf8c/website_logo_transparent_background.png',
  ],
  45 => [
    'id' => 'fad0c3fa-9914-4086-bdef-f98b2eeb9649',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/fad0c3fa-9914-4086-bdef-f98b2eeb9649',
    'created_at' => 'Wed Feb 10 16:18:44 UTC 2021',
    'company' => 'Basil Systems',
    'company_url' => 'http://www.basilsystems.com',
    'location' => 'Remote',
    'title' => 'Sr. Backend Engineer',
    'description' => '<p>Basil Systems is a healthcare-focused start-up delivering a SaaS application that leverages product, market and regulatory data to support all types of players in the medical device and pharmaceutical industries.  Our goal is to help our customers deliver safe and innovative healthcare products to patients and consumers, while reducing the time to get to market.  After 14 months of stealth development, we soft launched in late December 2020 to a very positive market reception and customers.</p>
<p>In short, Basil is a funded, revenue generating, and growth-oriented company – and we are actively seeking talented engineers to build and deliver an extensive roadmap of amazing features.  We need a Sr. backend engineer excited by multifaceted data challenges, and with the ability to design, build, and deploy stable and scalable production software.</p>
<p><strong>Sr. Backend Engineer</strong>
We are looking for self-starter; you’ll spend your time building reliable backend services and solving complex data processing problems. We would like you to have:</p>
<ul>
<li>5+ years professional experience as backend or data engineer</li>
<li>Very strong skills experience with modern Python (3.8+), MongoDB (particularly 4.2+), and MySQL or MariaDB</li>
<li>Significant experience with AWS services, operations and architecture, especially with respect to data heavy applications</li>
<li>Spent time building and managing ETL pipelines</li>
<li>Familiarity with recent versions of Elasticsearch</li>
<li>Strong DevOps experience, with a commitment to engineering best practices</li>
</ul>
<p>Not all of these are required, but ideally you have experience with:</p>
<ul>
<li>Typescript / ES (Node)</li>
<li>Golang</li>
<li>Docker &amp; Kubernetes</li>
<li>Terraform</li>
<li>Solid understanding of modern security practices</li>
<li>CI/CD</li>
</ul>
<p>Some nice to haves</p>
<ul>
<li>You have worked with, reconciled and normalized disparate data sets</li>
<li>Natural language processing (NLP) experience</li>
<li>Strong data modeling skills, and an eye for what the data means in a business and product context</li>
<li>Interest in machine learning, and experience building ML-driven or algorithmic data products</li>
<li>Some exposure to product analytics data pipelines and basic understanding of AB testing</li>
</ul>
<p><strong>Finally</strong>
We are a distributed team headquartered in Boston, with an office in Nashville, TN.  However, our culture allows flexibility as to when, where and how you work best – and actively employ and support remote engineers.</p>
<p>Benefits include:</p>
<ul>
<li>Competitive salary (Depending upon experience, range from $90k - $185k)</li>
<li>Health and vision</li>
<li>An attractive equity package</li>
</ul>
<p>Basil supports and encourages building a work environment that is diverse, inclusive, and safe for everyone -- and we welcome all applicants.  Contact us at:  <a href="mailto:jobs@basilsys.com">jobs@basilsys.com</a></p>
',
    'how_to_apply' => '<p><a href="mailto:jobs@basilsys.com">jobs@basilsys.com</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc21ZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--0513be1255b078d5330ac615fd4db17408a85cd8/website_logo_solid_background.png',
  ],
  46 => [
    'id' => '8502121e-288b-4e36-bc07-080c4b4a7272',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/8502121e-288b-4e36-bc07-080c4b4a7272',
    'created_at' => 'Mon Feb 08 20:29:08 UTC 2021',
    'company' => 'Softheon',
    'company_url' => 'http://www.softheon.com',
    'location' => 'Remote',
    'title' => 'Senior Software Engineer CX/UX',
    'description' => '<p>As one of our CX/UX Senior Software Engineers, you will be helping to maintain and improve our front-end applications. These products support millions of health insurance members across the country. These products are the heart of Softheon’s Software-as-a-Service business and are what feeds the rest of our software solutions. You will be working on front-end applications that allow millions of people to enroll in and obtain healthcare. Our ideal candidate is someone talented, self-motivated and enjoys working with a team to accomplish a common goal.</p>
<p>Requirements</p>
<ul>
<li>Maintain current product applications including debugging, troubleshooting, and enhancements.</li>
<li>Oversee the entire software lifecycle of the product, including testing, documentation, and deployment.</li>
<li>Cooperate and communicate with a team of technical and non-technical members.</li>
<li>Design and Develop components in Angular supporting various Web Application efforts.</li>
<li>Experience with TypeScript supporting Angular development.</li>
<li>Adhere to design guidelines and standards for all performed work.</li>
<li>Participate in the development of advanced UX features, working closely with Web Designers as appropriate.</li>
<li>Provide assistance and guidance during the QA &amp; UAT phases to quickly confirm the validity of potential issues and to determine the root cause and best resolution of verified issues.</li>
</ul>
<p>Qualifications</p>
<ul>
<li>Strong knowledge of data structures, algorithms and complexity analysis.</li>
<li>Strong understanding of object-oriented design.</li>
<li>Hands-on object-oriented language development using C#, Java and/or .NET Framework/.NET</li>
<li>Experience with version control solutions such as Git and/or Microsoft TFS.</li>
<li>Understanding of testing methodologies.</li>
<li>Knowledge of design patterns.</li>
<li>Ability to work effectively in an agile environment.</li>
<li>Ability to perform well in a fast-paced environment.</li>
<li>Excellent analytical and multitasking skills.</li>
<li>Bachelor’s degree in Computer Science with a GPA of 3.5 or better.</li>
<li>Strong knowledge of UML.</li>
<li>Skilled in Angular, Angular2, TypeScript, CSS, JavaScript, NodeJS, Git, Experience working and integrating front end applications with RESTful Middle-Tier Applications, Grunt.</li>
<li>At least 3+ years of hands-on web design experience with significant Angular and Angular 2 experience.</li>
<li>Strong knowledge of CSS, JavaScript, and web design principles.</li>
<li>An understanding of core web application design patterns, such as Model View Controller and Single-Page Web Applications</li>
</ul>
<p>Benefits</p>
<p>When you join Softheon, you will:</p>
<ul>
<li>Have an opportunity to add value to a diverse team of innovative professionals</li>
<li>Rise to new challenges everyday</li>
<li>Receive competitive salary and career growth opportunities</li>
</ul>
<p>ABOUT US:</p>
<p>At Softheon, we are motivated to solve the biggest challenges in the healthcare industry by creating simple solutions to complex problems. We support our clients, track performance data, manage administrative tasks, and so much more.</p>
<p>To find out more about Softheon please visit <a href="http://www.softheon.com">www.softheon.com</a>.</p>
<p>To all recruitment agencies: Softheon does not accept agency resumes. Please do not forward resumes to Softheon employees or any other company location. Softheon is not responsible for any fees related to unsolicited resumes and will not pay fees to any third-party agency or company that does not have a signed agreement with the Company.</p>
',
    'how_to_apply' => '<p>Please use the link below to apply online: <a href="https://apply.workable.com/softheon/j/7E92A55237/">https://apply.workable.com/softheon/j/7E92A55237/</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBb1NZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--26f4c0fcceaf01d4ab4c73bd0d671a253f334c02/Softheon%20Logo%20(1)%20(1).png',
  ],
  47 => [
    'id' => '980f561f-9497-4979-835c-137d94ead31d',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/980f561f-9497-4979-835c-137d94ead31d',
    'created_at' => 'Mon Feb 08 13:38:43 UTC 2021',
    'company' => 'Gorgias',
    'company_url' => 'https://www.gorgias.com/',
    'location' => 'Paris',
    'title' => 'Senior Front-End Engineer ReactJS',
    'description' => '<p><a href="http://gorgias.com/">Gorgias</a> helps e-commerce companies deliver excellent customer service at scale.</p>
<p>Our product creates a unified profile of customers by combining emails, live-chat, and social-media messages with e-commerce data such as purchase and delivery info.</p>
<p>Combining all this data in a single application makes customer service more efficient and just better. Another fortunate side-effect is that some requests are completely automated using ML. 💬 + 📦 = ❤️</p>
<p>We\'ve been around since 2015, and we\'re currently serving over <strong>5000+</strong> e-commerce businesses, including Steve Madden, and Timbuk2.</p>
<p>This position is either fully remote (Central European timezones) or onsite at our Paris office (75011). For europeans, we offer a relocation package for you and each family member. :)</p>
<h3>Join us! Resistance is futile!</h3>
<ul>
<li>You\'ll fit right in if you care about working on applications that are putting the customer needs first. At Gorgias, we work hard, so our customers have an easier job! We also like working with people that "get stuff done" and are confident about pushing their code to production many times a day. You\'re also one of those people that cares about becoming a better engineer and human every day. Learning never stops; we help each other get better!</li>
<li>If getting your hands dirty in a real-world application that touches the lives of millions is your thing, then yeah, Gorgias is for you.</li>
</ul>
<h3>About the Self Serve team</h3>
<ul>
<li>Work with our newest team to build a set of empowering self-service features for our end users (our customer\'s customer).</li>
</ul>
<p>As an example of current projects:</p>
<ul>
<li>a live chat with automated interactions for common requests (track orders, return order, cancel order...)</li>
<li>a dashboard where end users can follow progress on all their orders, submit issues...</li>
<li>a help center that will enable end users to solve most of their problems on their own</li>
</ul>
<p>The tools we build will eventually be installed and used by thousands of shops around the world and billions of end-users!</p>
<p>As for technologies we use:</p>
<ul>
<li>ReactJS with Typescript</li>
<li>Websocket and NodeJs workers</li>
<li>Kubernetes</li>
</ul>
<h3>About You</h3>
<ul>
<li>3+ years of experience working with ReactJS</li>
<li>You\'ve shown some level of ownership in previous roles/projects and love to tear down roadblocks alongside a collaborative team</li>
<li>You\'ve worked in a professional team environment</li>
</ul>
<h3>Nice to Have</h3>
<ul>
<li>Experience with NodeJS</li>
<li>2+ years of experience with TypeScript</li>
<li>Experience writing in Python or comfortable reading documentation in Python</li>
<li>Experience with WebSocket</li>
<li>Experience working on live chat features or products is a big plus!</li>
</ul>
<h3>More info about the company:</h3>
<ul>
<li>Raised our series A in November 2019: <a href="https://techcrunch.com/2019/11/26/gorgias-series-a/">techcrunch.com/2019/11/26/gorgias-series-a</a>
</li>
<li>Raised our series B in December 2020: <a href="https://techcrunch.com/2020/12/10/gorgias-series-b/">https://techcrunch.com/2020/12/10/gorgias-series-b/</a>
</li>
<li>What our customers are saying: <a href="https://apps.shopify.com/helpdesk#reviews">apps.shopify.com/helpdesk#reviews</a>
</li>
<li>Our software stack: <a href="https://stackshare.io/gorgias">stackshare.io/gorgias</a>
</li>
<li>Other positions: <a href="https://jobs.lever.co/gorgias">jobs.lever.co/gorgias</a>
</li>
</ul>
<h3>Company Perks &amp; Benefits</h3>
<ul>
<li>Competitive salary, equity packages, and performance bonus packages</li>
<li>5 weeks of vacation and parental leave</li>
<li>Latest MacBook Pro or equivalent</li>
<li>Natural sunlight and open office with lounge area</li>
<li>Relocation package for you and your family</li>
<li>Complementary health coverage (Mutuelle)</li>
<li>50% of public transportation expenses</li>
<li>Free lunch x5 a week</li>
</ul>
<h3>Why join us?</h3>
<ul>
<li>🚀 Join a high growth tech startup at a crucial time, and with an unusually technical growth team</li>
<li>🙏 Join a company where automation, good &amp; clean data are core beliefs shared by all</li>
</ul>
<h3>Engineering Team Culture</h3>
<p>Getting Stuff Done, Ownership, Team Work, Excellence, and Agility.</p>
<p>You should join us if you want to ship stuff fast without scarifying quality. We\'ve put great importance on testing our code, cleaning it, treating errors first, and features later.</p>
<p>We also value growth and ownership. People make mistakes. We learn from them to avoid them in the future. We cannot achieve excellence if there are no bumps in the road.</p>
',
    'how_to_apply' => '<p>Thanks for your interest!</p>
<p>Please submit your application here: <a href="https://jobs.lever.co/gorgias/70b4cd59-3040-4c08-a2dd-90afac125e95">https://jobs.lever.co/gorgias/70b4cd59-3040-4c08-a2dd-90afac125e95</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBblNZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--fb99c0e7003ffe89ca10b16cc763e344f908421a/207-2077347_gorgias-logo-png-email-tool-chrome-extension-gorgias.png',
  ],
  48 => [
    'id' => '0b155a82-e623-44b4-bd40-0cc3f58ac42e',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/0b155a82-e623-44b4-bd40-0cc3f58ac42e',
    'created_at' => 'Mon Feb 08 13:28:25 UTC 2021',
    'company' => 'Equinix',
    'company_url' => 'https://www.equinix.com',
    'location' => 'Singapore',
    'title' => 'Full Stack Developer - Building next-gen products and architecture',
    'description' => '<p>Equinix is the world’s digital infrastructure company, operating 210 data centers across the globe and providing interconnections to all the key clouds and networks. Businesses need one place to simplify and bring together fragmented, complex infrastructure that spans private and public cloud environments. Our global platform allows customers to place infrastructure wherever they need it and connect it to everything they need to succeed.</p>
<p>At Equinix, we help the world’s digital leaders scale with agility, speed the launch of digital services, deliver world-class experiences, and transform people’s lives. Our culture is based on collaboration and the growth and development of our teams.</p>
<p>We hire hardworking people who thrive on solving challenging problems and give them opportunities to hone new skills, and try new approaches, as we grow our product portfolio with new software and network architecture solutions. We embrace diversity in thought and contribution and are committed to providing an equitable work environment. that is foundational to our core values as a company and is vital to our success</p>
<p>As a key member of the Product Engineering team, you will be responsible for the end-to-end development lifecycle from the requirement, architecture, design, implementation, testing, deployment, and support with a focus on delivering solutions adhering to business goals, technical requirements, and engineering standards.</p>
<h2>Job Responsibilities:</h2>
<ul>
<li>Hands-on Design, Development, Deployment &amp; Support of JavaScript based platforms, frameworks, and applications</li>
<li>Incorporates standards and best practices, including performance, security, scalability, and maintainability</li>
<li>Interact with Business System Analysts to design and deliver technical solutions to support various business functions</li>
<li>Create rich web user interfaces using HTML, CSS, and JavaScript.</li>
<li>Create server-side functionality using asynchronous, highly scalable design principles</li>
<li>Provide thought leadership and lead innovation by exploring, investigating, recommending, benchmarking and implementing tools and frameworks.</li>
<li>Work in a Globally Distributed Development team environment to enable successful delivery with a minimal supervision</li>
<li>Advocate, document, and follow best design and development practices</li>
</ul>
<h2>It is you, if:</h2>
<ul>
<li>You are passionate, creative and self-driven</li>
<li>You are curious and collaborative, and a believer in the power of teams and teamwork</li>
<li>You are flexible and have a broad set of capabilities to wear multiple hats</li>
<li>You thrive in a dynamic and a fast-paced environment</li>
<li>You pursue speed and simplicity relentlessly</li>
<li>You are a natural leader in everything you do</li>
</ul>
<h2>Experience:</h2>
<ul>
<li>BS/MS degree or equivalent with 6+ years in the field of Software Engineering and Development</li>
<li>An obsession with customer experience, product fidelity, developer documentation, Web App ecosystem, and exceptional developer experience.</li>
<li>Minimum 4+ years of strong hands-on development experience with JavaScript and related open source technologies</li>
<li>Extensive experience developing and running production application in ReactJS is a must</li>
<li>Minimum 3+ years of hands-on experience with Frameworks like Nodejs, React.js, Vue.js, Angular.js, HTML 5, CSS 3, etc.</li>
<li>Exposure to the other frameworks and programming languages like Java, Python, Golang is a plus</li>
<li>Working Knowledge on Reactive/Functional Programming</li>
<li>Strong understanding of design patterns and best practices in JavaScript</li>
<li>Good understanding of Identity concepts - SAML, JWT, OAuth etc.</li>
<li>Experience with web servers &amp; application servers such as Apache and Nginx</li>
<li>Working experience with Swagger (Open API Spec), OAuth, REST, JSON etc.,</li>
<li>Experience/knowledge on Data modeling and Nodejs integration with NO-SQL technologies like Redis, Cassandra etc. is a plus</li>
<li>Solid understanding of how to use tools like Git, Jira, and Jenkins</li>
<li>Solid understanding of JS unit testing frameworks</li>
<li>Proven ability to quickly grasp the implications of evolving industry trends &amp; technology intersects</li>
<li>Exceptional communication, organization, and presentation skills</li>
<li>Experience working within Agile or Scaled Agile Framework is required</li>
</ul>
<h2>Interested?</h2>
<p>Please apply by clicking the <strong>\'Application\'</strong> form.</p>
<p><a href="https://vonq.io/3rD3FVP">Click here for the application form!</a></p>
',
    'how_to_apply' => '<p><a href="https://vonq.io/3rD3FVP">Click here for the application form!</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbStZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--4ded80dc14556c616622d5a62ccfc0cfda4426bd/EQ.jpeg',
  ],
  49 => [
    'id' => 'ce63cdc7-2a47-432e-a3c1-2ed8200a522c',
    'type' => 'Full Time',
    'url' => 'https://jobs.github.com/positions/ce63cdc7-2a47-432e-a3c1-2ed8200a522c',
    'created_at' => 'Mon Feb 08 13:25:18 UTC 2021',
    'company' => 'Equinix',
    'company_url' => 'https://vonq.io/3icV1Ka',
    'location' => 'Warsaw',
    'title' => 'Software Engineer (Backend)',
    'description' => '<p>Equinix is the world’s digital infrastructure company, operating 210 data centers across the globe and providing interconnections to all the key clouds and networks. Businesses need one place to simplify and bring together fragmented, complex infrastructure that spans private and public cloud environments. Our global platform allows customers to place infrastructure wherever they need it and connect it to everything they need to succeed.</p>
<p>At Equinix, we help the world’s digital leaders scale with agility, speed the launch of digital services, deliver world-class experiences, and transform people’s lives. Our culture is based on collaboration and the growth and development of our teams.</p>
<p>We hire hardworking people who thrive on solving challenging problems and give them opportunities to hone new skills, and try new approaches, as we grow our product portfolio with new software and network architecture solutions. We embrace diversity in thought and contribution and are committed to providing an equitable work environment. that is foundational to our core values as a company and is vital to our success.</p>
<h2>The Role</h2>
<p>We are looking for talented Software Engineers, responsible for brand-new product development to simplify and accelerate quoting and ordering processes for Equinix’s customers. By using a modern technology stack, cloud, microservices architecture, API-first approach, micro-frontend user interface and focusing on the product quality and delightful user experience, the engineering team will be responsible for building a highly scalable, globally distributed software product. This is a hugely exciting project where you will be part of a world-class product engineering team that’s paving the path for new ways for enterprises to consume ever increasing cloud services. You will:</p>
<ul>
<li>Play a pivotal role in Equinix Agile Software Development Lifecycle processes</li>
<li>Participate in Product Increment Planning to analyze business requirements and determine feasibility of design</li>
<li>Work with product managers, product owners, analysts and other engineers to design functional architecture</li>
<li>Lead designs of major software modules and features</li>
<li>Develop backend solutions using Java-stack with cooperation from product team</li>
<li>Define technical strategy and recommend adaptation of open source</li>
<li>Participate in full SDLC – from software design, code review, tests development and release management planning</li>
<li>Work with test automation team on test automation and validation procedures to keep high software quality</li>
<li>Mentor other members of the team</li>
</ul>
<h2><strong>Your Experience</strong></h2>
<p>We’re looking for someone who is highly curious, up to date with all the trends and technologies, and loves taking a project and owning it, demonstrating excellence in everything they do. High energy and an ability to inspire the team around them is essential! Additionally, you will have:</p>
<ul>
<li>BS in computer science or equivalent with 3-7 years of hands-on professional software development experience</li>
<li>Expertise in cloud-based application development with in-depth knowledge of java eco-system (experience with multiple frameworks such as Spring, Hibernate)</li>
<li>Expertise in data modeling, relational design using RDBMS and NoSQL such as Cassandra, MongoDB</li>
<li>Experience with multiple architecture styles including SOA, API-first and micro-services architectures</li>
<li>Real-world experience with continuous integration and delivery using public cloud such as AWS, Azure or GCP and container technologies such as Docker is required</li>
<li>Hands-on experience with Agile-scrum methodology and Test-driven development</li>
<li>Knowledge of design patterns for real time data insights and analysis.</li>
</ul>
<h2><strong>Why Join Us?</strong></h2>
<p>You will be working on great products with access to newest technologies. We are offering stable employment with competitive salary above an average on the market and benefits including annual bonus or lunch card. Moreover, you will be eligible to participate on our employee stock units purchasing programs. And most of all- the opportunity to create unique atmosphere and company culture based on Magic of Equinix. The modern office space and Warsaw Spire view will be awaiting you, however you will be allowed to work from home according to company policy. If you are not living in Warsaw but you are still interested in being part of the team, we can support you with a relocation package.</p>
<p>Equinix is an equal opportunity employer. All qualified applicants will receive consideration for employment without regard to race, religion, colour, national origin, sex, sexual orientation, gender identity, age, status as a protected veteran, or status as a qualified individual with disability. We actively champion diversity with a series of networks including Black Connect, Equinix Women’s Leadership Network, and Pride Connect.</p>
<h2>Interested?</h2>
<p><a href="https://vonq.io/3icV1Ka">Please apply by clicking the <strong>application form</strong>!</a></p>
',
    'how_to_apply' => '<p><a href="https://vonq.io/3icV1Ka">Click here for the application form!</a></p>
',
    'company_logo' => 'https://jobs.github.com/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbXlZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--c1bbfc8ccde78e6eff4efd80f24a22f1343225e4/EQUINIX.jpeg',
  ],
];

$jobsObj = new stdClass();


if ($path === 'jobs') {

  $jobsObj->jobs = $jobs;
  echo json_encode($jobsObj);

} else {
  $jobId = explode('/', $path)[1];
  $jobIndex = array_search($jobId, array_column($jobs, 'id'));

  $jobsObj->job = $jobs[$jobIndex];
//  $jobs[$jobIndex];
  echo json_encode($jobsObj);
}

