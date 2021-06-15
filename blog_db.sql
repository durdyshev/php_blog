-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2021 г., 04:34
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp(),
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `image`, `categorie_id`, `pubdate`, `views`) VALUES
(5, 'Apple launches official website in Turkmenistan', 'Turkmenistan now has an official Apple page. The companys website in our country was launched today.\r\n\r\nAt present, the internal pages have not yet been translated into Turkmen. Perhaps it is a matter of time. There is no online store yet.\r\n\r\nAlso, the official website of the company was launched in Armenia, Azerbaijan, Belarus, Georgia, Kazakhstan, Kyrgyzstan, Moldova, Tajikistan, Ukraine, Uzbekistan.\r\n\r\nThe timing of the launch of online stores is unknown, as well as the general prospects for their opening in the future.', 'https://www.amerikanpaketim.com/uploads/public/apples-keynote-event_tim_cook-03252019_bigjpglarge_2x.jpg', 114, '2021-04-13 01:03:40', 6),
(9, 'European Super League: \'A seismic, pivotal week in football - but game not yet over\'', 'It was a story that football will never forget.\r\n\r\nThe crisis sparked by the European Super League (ESL) and its subsequent collapse remained towards the top of major TV and radio bulletins, and on newspaper front pages throughout the week.\r\n\r\nOutside of major events like an Olympics or World Cup, very few sports news stories have dominated headlines, nor generated such interest. The great Fifa corruption scandal of 2015 is the only one I can recall that came close in terms of impact and intensity.\r\n\r\nCertainly the events of Tuesday when - while furious fans protested outside Stamford Bridge and those close to the ESL insisted the project was proceeding as planned - I learned that Chelsea were preparing to pull out, sparking the implosion of the entire project on a seismic evening of chaos and climb-downs, were as dramatic as anything seen on the pitch this season.\r\nBut, while the despised breakaway may have unravelled, and the level of mainstream interest has now faded a little, the story is far from over.\r\n\r\nNot with the unprecedented backlash it generated across the game and beyond, and what it told us about the importance of our national sport and its traditions in our lives and society.\r\n\r\nNot with the influence that fans suddenly seemed to wield, along with the willingness of players to voice their dissent, even if it means breaking ranks with those that employ them.\r\n\r\nNot with a fan-led review into the sport being ordered by the government.\r\n\r\nNot with the protests against the schemers\' perceived greed and secrecy continuing.\r\n\r\nNot with Real Madrid supremo and ESL chairman Florentino Perez still insisting the plan is merely \"on standby\", rather than abandoned altogether, and that the clubs involved cannot escape from binding contracts.\r\n\r\nAnd not with the desire for real change that this remarkable episode has left as a legacy.', 'https://ichef.bbci.co.uk/onesport/cps/800/cpsprodpb/158F/production/_118191550_gettyimages-1232422240.jpg', 5, '2021-04-25 02:47:28', 3),
(11, 'COVID-19 took mental health to a dark place. The healing work starts now', 'Since March of last year, coronavirus torments have assaulted the 28-year-old\'s mental health. He became overwhelmed by anxiety over the prospect of infecting at-risk friends or one of his grandparents, who had cancer. Then, as lockdowns continued, that anxiety gave way to numbing isolation.\r\n\r\nA software engineer, James was thankfully able to do his job from home. But sitting alone in front of lines of code made him feel empty. To overcome depression in the past, James had forced himself to socialize and go out into the world to try new things. Neither has been an option for most of the past year.\r\n\r\n\"COVID restrictions are the exact opposite of the things my therapist told me to do to recover,\" he said. \"I didn\'t want all the time spent trying to recover from depression being for nothing.\" James lives in Oxford, England, but his story of battling loneliness and mental health issues is universal. The coronavirus pandemic has wrought mental health havoc across the world. \"As the pandemic struck, there was a large and immediate decline in mental health in many countries worldwide,\" reads the 2021 World Happiness Report. Mental health improved after the initial shock but, the report cautions, \"a significant proportion of people had mental health [in 2020] that was persistently and significantly lower than before COVID-19.\" \r\n\r\nIn the US, 42% of respondents to a CDC survey in December reported anxiety or depression symptoms, an increase of over 200% from the 2019 average. In the UK, 31% of respondents to a September study reported depression severe enough to justify \"high-intensity psychological support.\" \r\n\r\n\"It\'s affected [at least] a third of the population globally,\" said Luana Marques, an associate professor of psychology at the Harvard Medical School who\'s been tracking mental health in the pandemic. \"Imagine if we were saying a third of the population had pneumonia. We would be alarmed. We need to think about mental illness as a brain health problem, we\'ve got to be alarmed.\"\r\n\r\nWe need to think about mental illness as a brain health problem, we\'ve got to be alarmed.\r\n Luana Marques\r\nThe pandemic has aggrieved mental health in three main ways. First, people experience anxiety around catching the virus themselves, or unknowingly carrying it and infecting others. Second, the social isolation caused by lockdowns leaves them lonely and desolate. James experienced both, but was spared from the other main hit: severe financial pressure. Employment is closely tied to wellbeing. One study of recessions and mental health showed that suicides in the US increased by 1% for every 1% rise in unemployment.\r\n\r\nDifferent nations have shouldered these burdens in different ways. Japan has seen an alarming spate of suicides, particularly among women. Over 2,150 Japanese died by suicide in October, more than had died from COVID-19 by that point, leading to the creation of a minister for loneliness in the country. Suicide has not accelerated appreciably in most other countries, but other signs of despair have. Drug overdoses in the US spiked sharply, thanks mostly to rising opioid abuse, according to CDC data. Over 52,000 died by overdosing synthetic opioids between August 2019 and August 2020, the highest on record, with especially high numbers seen in the months following lockdown. When overdose deaths from the calendar year of 2020 are compiled, it\'s likely to be the worst on record. \r\n\r\nThere is some reason for optimism. As more people get vaccinated, economies recover and the prospect of post-COVID life becomes more tangible, some mental health metrics are improving. But we\'re not on the other side just yet. More precipitous falls in mental health have been avoided thanks to financial safety nets, like historic stimulus packages under both the Trump and Biden administrations. But Biden hasn\'t committed to a fourth stimulus package, and many more impromptu welfare systems, like the UK\'s furloughs scheme, will be removed by the end of the year.\r\n\r\nAnd while available data shows escalated emotional suffering in populations around the world, the true mental and emotional fallout from COVID-19 is likely to play out over years -- or even decades. ', 'https://www.cnet.com/a/img/resize/a95705eb457bdb4b4ee8f5e5f82b011dc3d10974/2021/04/21/097caa9e-1012-41a8-b9c5-6b678724a32b/cnet-covid-mental-health-story-illustration-v3.jpg?auto=webp&fit=crop&height=1293&width=2300', 6, '2021-04-25 03:21:15', 8),
(13, 'Afghanistan War: How can the West fight terrorism after leaving?', 'US, British and Nato combat forces are leaving Afghanistan this summer. The Taliban are growing stronger by the day while al-Qaeda and Islamic State groups are conducting ever more brazen attacks. So how can they be contained now that the West will no longer have military resources in the country?\r\n\r\nWestern intelligence officials believe they still aspire to plot international terrorist attacks from their Afghan hideouts, just as Osama Bin Laden did with 9/11.\r\n\r\nIt is a problem that is starting to vex UK policy chiefs as the deadline of 11 September for US President Joe Biden\'s withdrawal draws closer. As the British chief of defence staff, General Sir Nick Carter, said recently: \"This was not the outcome we had hoped for.\" There is now a serious risk that the gains made in counter-terrorism over the last 20 years, at enormous cost, could be undone as Afghanistan\'s future takes an uncertain turn.\r\n\r\n\"The problem,\" says John Raine, a regional security expert at the International Institute for Strategic Studies (IISS), \"is the situation\'s potential for morphing at a speed and into something with which the Afghan government, even remotely reinforced by the US, can\'t keep up.\"\r\n\r\n20 years in Afghanistan: Was it worth it?\r\nWhat do US veterans think of Afghan War?\r\nYet this, for President Biden, was always the plan. When he visited the country as vice-president in the Obama administration in 2009 and 2011 he concluded that nation-building there was a waste of time and instead the US should focus on a standoff approach to counter-terrorism using air strikes and Special Forces raids. The Pentagon disagreed and the former US Defence Secretary Robert Gates described Mr Biden in his memoir as being \"wrong on nearly every major foreign policy and national security issue over the past four decades\".\r\n\r\nSo what will Western counter-terrorism in Afghanistan look like in practice after September?\r\n\r\nDrone strikes\r\nThese could well increase. The use of drones, or to give them their full name, Remotely Piloted Aircraft (RPAs) or Unmanned Aerial Vehicles (UAVs), was heavily endorsed by the Obama administration in which Joe Biden served as vice-president.\r\n\r\nIn the remote, tribal areas of Pakistan bordering Afghanistan, and in the wilder regions of Yemen, where in both cases senior al-Qaeda leaders were hiding out, successive drone strikes had \"a chilling effect\" on the group\'s operations, according to intelligence officers. They forced commanders to stay constantly on the move, never staying more than a night or two in one place, restricting their ability to communicate and never quite knowing whether the departure of a visitor would be followed by a Hellfire missile, fired by an unseen enemy.', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/94E5/production/_118171183_tv066771878.jpg', 3, '2021-04-25 03:23:15', 33),
(14, 'India Covid: Families appeal for help in Delhi\'s oxygen shortage\r\n', '\"Oxygen, oxygen, can you get me oxygen?\"\r\n\r\nI wake up this morning to an anguished phone call from a school teacher, whose 46-year-old husband has been battling Covid-19 in an oxygen-starved Delhi hospital.\r\n\r\nHere we go again, I tell myself. Just another day of life in a city where breathing has become a luxury for so many.\r\n\r\nWe work the phone, send SOS calls. Amid the sounds of beeping monitors, the woman tells us that her husband\'s oxygen saturation number has dipped to a precariously low 58. A bit later is rises to 62. You are supposed to consult your doctor if the number sinks to 92 or lower.\r\n\r\nShe tells us she is happy it has gone up. And her husband is still talking and aware.\r\n\r\nI text a doctor friend working in critical care.\r\n\r\n\"Patients remain talkative even when the number hits 40,\" she messages me.', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/11056/production/_118181796_gettyimages-1232479959.jpg', 6, '2021-04-25 03:27:51', 25),
(16, 'Britain\'s worst serial killers haunt a city, decades after their grisly crimes', 'London (CNN)Police excavations at a cafe in the quiet English city of Gloucester revived a half-century-old puzzle: What happened to Mary Bastholm, a carefree 15-year-old girl who went missing in 1968.\r\n\r\nThe teenager has long been feared to be among the victims murdered by Fred West, but her body has never been found.\r\nWest and his wife Rosemary, who met the following year, would go on to become Britain\'s worst serial killer couple.\r\nA week-long dig, at the Clean Plate cafe in the heart of the historic city, resulted in the discovery of \"no human remains or items of significance\" according to police; but the search has stirred up painful memories.', 'https://cdn.cnn.com/cnnnext/dam/assets/210520141816-fred-west-rose-west-split-restricted-medium-tease.jpg', 1, '2021-06-04 13:25:04', 37),
(22, 'Websites begin to work again after major breakage', 'A major outage has affected a number of high profile websites including Amazon, Reddit and Twitch.  The UK government website - gov.uk - was also down as were the Financial Times, the Guardian and the New York Times.  Cloud computing provider Fastly, which underpins a lot of websites, said it was behind the problems.  The firm said there had been issues with its global content delivery network (CDN) which it was fixing.  In a statement, it said: \"We identified a service configuration that triggered disruption across our POPs (points of presence) globally and have disabled that configuration.\"  A POP allows content to be sent from globally distributed servers that are close to the end user.', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/9FD2/production/_118841904_fastly_getty_composite.png', 2, '2021-06-09 01:13:56', 0),
(23, 'What\'s in the latest Chrome update? A JavaScript jolt from the new Sparkplug compiler', 'Google is claiming that Chrome 91, the version that launched May 25, is up to 23% faster than its predecessors thanks to a new JavaScript compiler dubbed \"Sparkplug.\"\r\n\r\nThe speed improvements made to Chrome will also apply, if they haven\'t already, to other browsers that  rely on the Chromium project\'s technologies, including the V8 JavaScript engine. Microsoft\'s Edge is the most popular non-Google browser based on Chromium.\r\n\r\n\"An important component of delivering a fast browser is fast JavaScript execution,\" wrote Thomas Nattestad, product manager for Chrome, in a May 27 post to a Google blog.\r\n\r\nAccording to Nattestad, the new Sparkplug compiler has been inserted between the two previously-existing — Ignition and Turbofan — to break through a performance stalemate. (The byte code interpreter Ignition began executing JavaScript as soon as possible; meanwhile, the Turbofan optimizer generates high-performance machine code, but required information available only after Ignition started executing JavaScript.)\r\n\r\n\"Sparkplug strikes a balance between Ignition and Turbofan in that it does generate native machine code but does not depend on information gathered while executing the JavaScript code,\" wrote Nattestad. \"This lets it start executing quickly while still generating relatively fast code.\"\r\n\r\nIn effect, Sparkplug can\'t craft code that matches the performance of Turbofan\'s but starts doing it sooner. Elsewhere, Google called Sparkplug a \"non-optimizing JS [JavaScript] compiler,\" to further differentiate it from Turbofan.\r\n\r\nIn the far more technical post on the V8 blog, Leszek Swirski, a Google senior software engineer, pointed out that squeezing even more performance out of the JavaScript engine is getting tough. \"At some point you can only get faster by removing optimization passes, which reduces peak performance,\" Swirski said. \"Even worse, we can\'t really start optimizing earlier, because we won\'t have stable object shape feedback yet.\"', 'https://images.idgesg.net/images/article/2017/06/pcw-chrome-primary-100724768-large.jpg', 2, '2021-06-09 01:39:16', 56),
(24, 'Jamf updates target enterprise iPad and iPhone sharing', 'Answering a genuine enterprise need, Jamf has launched a preview of cloud-based software that should make it easier to share iOS devices, such as iPads, within teams.\r\n\r\nMaking iPad and iPhone sharing better\r\nThis is a long-needed solution for many businesses, as existing tools to share iPads are imperfect and require constant logins to the device and applications. While Apple has made it somewhat easier to share iPads in work and school environments, it\'s fair to say the solution isn\'t quite yet seamless.\r\n\r\n[ Related: When it’s time to return to the office, tech is key to success ]\r\nThe company is working to respond to this need with a new Single Login workflow supported by Jamf Setup and Jamf Reset (themselves launched in 2018). The workflow appears to be yet another enhancement made available by the company’s recently announced support for Microsoft Azure.\r\n\r\nBringing partnerships together\r\nApple’s Enterprise and Education Product Manager, Jeremy Butcher, last year hinted at improvements to ID management on Apple devices when he described user enrollment as a balancing act between effective security protection and enterprise management. To illustrate the point, he ended his talk with a demonstration of Azure being used to set up an iPhone for secure business use.\r\n\r\nA few months later and Azure is helping Jamf deliver a solution that balances device security with real-world enterprise needs. It does so by letting a user’s cloud ID credentials be used to instantly provision and reprovision an iOS or iPadOS device. The great advantage is that it relies on a single sign-on and doesn’t require the IT department to actually handle the device — it’s all managed from a console-based system.\r\n\r\nHow is this useful?\r\nSo, how could this be used?\r\n\r\nA company might have 100 iPads it regularly shares between 150 members of staff. With this tool, a staff member can sign into a shared iPad with their unique cloud ID and all data, documents, and any apps assigned to that user will be downloaded and made available.', 'https://images.idgesg.net/images/article/2020/05/2020-ipad-pro-speakers-100841704-large.jpg', 4, '2021-06-09 01:39:16', 4),
(32, 'Turkey hails UN ruling on butcher of Bosnia Mladic', 'Ratko Mladic for his part in the genocide in Bosnia-Herzegovina, saying that it was the correct move, although it would not reduce the pain of the relatives of the victims.  The Foreign Ministry said in a written statement that judges for the International Criminal Tribunal for the Former Yugoslavia (ICTY) sentenced Mladic-also known as', 'https://idsb.tmgrup.com.tr/ly/uploads/images/2021/06/09/120502.jpg?v=1623220132', 3, '2021-06-09 09:56:47', 102),
(36, 'Asana adds features to reduce distractions, improve video chats', 'Asana today unveiled a host of new features for its work management platform, aiming to eliminate distractions and boost worker focus — with an emphasis on asynchronous video communication.\r\n\r\nThe rapid shift to distributed work has fueled distraction and destruction for a billion and a quarter information workers, with messaging and meetings at an all-time high, said Alex Hood, chief product officer at Asana, stressing that the new features better align worker attention with intention.\r\n\r\nAsanas Video Messaging, for instance, is designed to help users cut back on meetings and minimize video fatigue; with intelligent My Tasks, workers can better prioritize tasks; and with a Smart Calendar assistant, users can better focus on what theyre doing.', 'https://images.idgesg.net/images/article/2021/06/desktop-light-1024x576-100891753-large.jpg', 4, '2021-06-11 01:41:39', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `title`) VALUES
(1, 'World'),
(2, 'IT-Programming'),
(3, 'Policy'),
(4, 'Technology'),
(5, 'Sport'),
(6, 'COVID19'),
(7, 'Darknet');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL,
  `pubdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `username`, `text`, `article_id`, `pubdate`) VALUES
(41, '', 'sdsdsd', 32, '2021-06-09 10:44:18'),
(42, 'kemal', 'fsffssff', 32, '2021-06-09 10:44:58'),
(43, 'kemal', 'asdfghj', 23, '2021-06-10 02:25:03'),
(44, 'kemal', 'oppp', 23, '2021-06-10 03:24:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `createdAt`) VALUES
(135, 'kemal', 'qwerty', '2021-06-15 03:15:27');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
