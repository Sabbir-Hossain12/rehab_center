-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 07:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehab_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_img` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `business_opening` text DEFAULT NULL,
  `business_closing` text DEFAULT NULL,
  `service_1` varchar(255) DEFAULT NULL,
  `service_2` varchar(255) DEFAULT NULL,
  `service_3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`id`, `logo_img`, `address`, `phone_1`, `phone_2`, `email`, `website`, `fb_link`, `twitter_link`, `instagram_link`, `business_opening`, `business_closing`, `service_1`, `service_2`, `service_3`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/images/1716442285.8758.jpg', '1/2, Shurabari, Sholdubi Road, Ward No-05, Kashimpur, Gazipur.', '01746484671', '01973515171', 'dreamhouse@gmail.com', NULL, NULL, NULL, NULL, '24/7', NULL, 'Detoxification', 'Therapy', 'Relapse Prevention', '2024-05-22 23:31:25', '2024-05-26 23:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` text DEFAULT NULL,
  `posted_by` varchar(255) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `long_desc` text DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 2=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `img`, `posted_by`, `short_desc`, `long_desc`, `date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How to Support a Loved One in Recovery?', 'how-to-support-a-loved-one-in-recovery', 'public/backend/images/1716104892.9389.jpeg', 'Admin', NULL, '<p>Supporting a loved one through their recovery process can be challenging yet immensely rewarding. This detailed blog offers practical advice for family members and friends on how to provide effective support. Topics include understanding the nature of addiction, fostering open and honest communication, and setting healthy boundaries. We discuss the importance of encouraging healthy behaviors without enabling addictive ones, and how to support your loved one in building a new, sober lifestyle. Through real-life examples and expert guidance, readers will learn how to be a pillar of strength and encouragement during their loved one’s recovery journey.<br><br><strong>Understanding Addiction:</strong> Begin by understanding the nature of addiction as a chronic disease that affects the brain and behavior. Learn about the common misconceptions and stigma associated with addiction, and why it’s essential to approach your loved one with empathy and compassion.</p><p><strong>Open and Honest Communication:</strong> Effective communication is crucial in supporting your loved one. This section provides tips on how to have open, honest, and non-judgmental conversations. We discuss the importance of active listening, expressing concerns without blame, and creating a safe space for your loved one to share their feelings and experiences.</p><p><strong>Setting Healthy Boundaries:</strong> While it\'s important to offer support, it\'s equally important to set healthy boundaries to protect your own well-being. Learn how to establish clear and consistent boundaries that help your loved one take responsibility for their actions without enabling addictive behaviors. This section offers practical advice on how to maintain these boundaries and what to do if they are crossed.</p><p><strong>Encouraging Healthy Behaviors:</strong> Support your loved one by encouraging healthy habits and routines that promote sobriety. This includes promoting regular exercise, nutritious eating, and participation in hobbies or activities that they enjoy. We also highlight the benefits of joining support groups and engaging in therapy, and how you can encourage your loved one to take advantage of these resources.</p><p><strong>Dealing with Relapse:</strong> Relapse can be a part of the recovery journey, and knowing how to respond can make a significant difference. This section discusses how to recognize the signs of relapse, how to provide support without judgment, and the steps to take if a relapse occurs. We emphasize the importance of viewing relapse as a learning opportunity rather than a failure.</p><p><strong>Being Patient and Staying Positive:</strong> Recovery is a long and often non-linear process. Patience and a positive outlook can greatly influence your loved one’s journey. This part of the blog focuses on the importance of celebrating small victories, remaining hopeful during setbacks, and being a steady source of encouragement.</p><p><strong>Taking Care of Yourself:</strong> Supporting someone in recovery can be emotionally draining, and it’s crucial to take care of your own mental and emotional health. This section provides tips on self-care, such as seeking your own support groups, engaging in activities that you enjoy, and practicing stress management techniques. Remember, you can’t pour from an empty cup—taking care of yourself enables you to be a better support system for your loved one.</p><p><strong>Resources and Professional Help:</strong> Finally, we provide a list of resources including hotlines, websites, and local support groups that can offer additional help and information. We also discuss when and how to seek professional help for your loved one, and the benefits of involving therapists, counselors, and medical professionals in the recovery process.</p><p>By following the advice and strategies outlined in this blog, you can provide meaningful and effective support to your loved one on their journey to recovery, while also taking care of your own well-being.<br>&nbsp;</p>', '2019-05-24', '07:48:12', 1, '2024-05-19 01:48:12', '2024-05-19 01:48:12'),
(2, 'Finding Purpose and Passion After Recovery', 'finding-purpose-and-passion-after-recovery', 'public/backend/images/1716112844.7166.avif', 'Admin', NULL, '<p>Discovering a sense of purpose and passion is a vital part of the recovery process, offering a new direction and meaning in life. This comprehensive blog provides insightful advice and inspiring stories to help individuals in recovery find what drives them and brings them joy.</p><p><strong>Rediscovering Yourself:</strong> Recovery is an opportunity to rediscover who you are without the influence of substances. This section focuses on self-exploration, encouraging individuals to reflect on their interests, values, and strengths. Learn how to identify the activities and pursuits that genuinely resonate with you, and how this self-awareness can guide you towards a more fulfilling life.</p><p><strong>Setting Goals and Building a New Life:</strong> Setting achievable goals is crucial for maintaining motivation and a sense of direction. We provide practical tips on how to set short-term and long-term goals that align with your newfound passions. This includes advice on creating a vision board, developing a step-by-step action plan, and celebrating milestones along the way.</p><p><strong>Exploring New Hobbies and Interests:</strong> Engaging in new hobbies and interests can bring joy and a sense of accomplishment. This section explores various activities such as sports, arts and crafts, music, and volunteer work. We highlight the benefits of trying new things, meeting new people, and finding activities that can become a positive part of your daily routine.</p><p><strong>Finding Purpose through Career and Education:</strong> For many, recovery offers a chance to pursue new career paths or educational opportunities. We discuss how to identify careers that align with your passions and values, the steps to take towards achieving these career goals, and the importance of continuous learning. Real-life examples of individuals who have successfully transitioned into new careers provide inspiration and practical insights.</p><p><strong>Volunteering and Giving Back:</strong> Helping others can be a powerful way to find purpose and build self-esteem. This section highlights the benefits of volunteering and community service, and how these activities can enhance your recovery journey. We provide suggestions on where to find volunteer opportunities and how to get involved in causes that are meaningful to you.</p><p><strong>Building Healthy Relationships:</strong> Positive relationships are essential for a fulfilling life. Learn how to build and maintain healthy relationships that support your new lifestyle. We discuss the importance of surrounding yourself with supportive and positive people, setting boundaries, and nurturing relationships that contribute to your well-being.</p><p><strong>Staying Motivated and Resilient:</strong> Maintaining motivation and resilience is crucial, especially during challenging times. This section offers strategies to stay motivated, such as keeping a journal, joining support groups, and practicing self-compassion. We also discuss how to handle setbacks and maintain a positive outlook on your journey towards finding purpose and passion.</p><p><strong>Real-Life Success Stories:</strong> Read inspiring stories of individuals who have successfully found their purpose and passion after recovery. These stories highlight the diverse paths people have taken and the incredible transformations they have experienced. Learn from their experiences and draw inspiration from their journeys.</p><p><strong>Resources and Support:</strong> Finally, we provide a list of resources including books, websites, and organizations that offer further guidance on finding purpose and passion. We also discuss the importance of seeking professional help, such as career counselors or life coaches, to support your journey.</p><p>By following the guidance and strategies outlined in this blog, individuals in recovery can discover a renewed sense of purpose and passion, paving the way for a vibrant and fulfilling life.</p>', '2019-05-24', '10:00:44', 1, '2024-05-19 04:00:44', '2024-05-19 04:00:44'),
(3, 'The Importance of a Support System in Recovery', 'the-importance-of-a-support-system-in-recovery', 'public/backend/images/1716112978.5278.jpg', 'Admin', NULL, '<p>A robust support system is crucial for a successful recovery journey. This comprehensive blog explores the various aspects of building and maintaining a strong support network, highlighting its importance in achieving and sustaining sobriety. We discuss the different types of support systems, how to establish them, and the benefits they bring to the recovery process.</p><p><strong>Understanding the Role of a Support System:</strong> A support system provides emotional, psychological, and practical assistance, which is essential for anyone in recovery. This section explains the different types of support—emotional, informational, and instrumental—and how each contributes to the recovery process. We emphasize the significance of feeling connected and understood by others who share similar experiences.</p><p><strong>Building Your Support Network:</strong> Creating a support network involves identifying and reaching out to people who can offer encouragement and understanding. This section provides practical advice on how to build a diverse support system that includes family, friends, recovery groups, and professionals. We discuss the qualities to look for in supportive individuals and how to strengthen existing relationships.</p><p><strong>Family and Friends:</strong> Family and friends often form the backbone of a support system. We explore the role they play in recovery, the challenges they might face, and how they can best offer their support. Tips for improving communication, rebuilding trust, and setting healthy boundaries are also provided to help foster stronger, more supportive relationships.</p><p><strong>Support Groups and Community Resources:</strong> Support groups, such as AA or NA, provide a sense of community and shared understanding. This section highlights the benefits of joining support groups, including the opportunity to connect with others who are experiencing similar challenges. We also discuss other community resources, such as local organizations and online forums, that can offer additional support.</p><p><strong>Professional Help:</strong> Incorporating professional help, such as therapists, counselors, and medical professionals, is vital in building a comprehensive support system. We discuss the types of professionals who can assist in the recovery process and how to find and engage with these experts. This section also covers the benefits of therapy and counseling in addressing underlying issues related to addiction.</p><p><strong>The Benefits of a Strong Support System:</strong> A well-rounded support system can significantly enhance the recovery process. This section outlines the various benefits, including improved emotional well-being, reduced risk of relapse, increased motivation, and a greater sense of accountability. Real-life examples and testimonials illustrate how support systems have positively impacted individuals in recovery.</p><p><strong>Maintaining and Nurturing Your Support System:</strong> Maintaining a support system requires ongoing effort and communication. We provide tips on how to nurture these relationships, such as regular check-ins, participating in support group meetings, and being open about your needs and progress. This section also discusses how to give back and support others in your network, fostering a reciprocal and healthy environment.</p><p><strong>Overcoming Challenges in Building a Support System:</strong> Building a support system can come with challenges, such as finding the right people, dealing with stigma, or facing resistance from loved ones. This section offers strategies to overcome these obstacles, including how to approach difficult conversations, manage expectations, and stay persistent in seeking support.</p><p><strong>Conclusion:</strong> In conclusion, a strong support system is indispensable for anyone on the path to recovery. By understanding its importance, actively building and maintaining your network, and overcoming challenges, you can create a solid foundation that supports your journey towards lasting sobriety and a healthier, more fulfilling life.</p>', '2019-05-24', '10:02:58', 1, '2024-05-19 04:02:58', '2024-05-19 04:02:58'),
(4, 'আশা পুনর্বাসন: মাদকাসক্তি থেকে মুক্তির পথ', 'asa-punrwasn-madkaskti-theke-muktir-pth', 'public/backend/images/1716114116.971.jpeg', 'Admin', NULL, '<p>আমাদের জীবনে অনেক সময় এমন পরিস্থিতি আসে যখন আমরা নিজেদের হারিয়ে ফেলি। মাদকাসক্তি হলো ऎমনই একটা সমস্যা, যা আমাদের স্বাস্থ্য, সম্পর্ক এবং জীবনযাত্রাকে ধ্বংস করে দেয়। আশা পুনর্বাসন কেন্দ্রে, আমরা বিশ্বাস করি যে, সঠিক সমর্থন ও চিকিৎসার মাধ্যমে মাদকাসক্তি থেকে মুক্তি পাওয়া সম্ভব।</p><p><strong>আমাদের পুনর্বাসন পদ্ধতি</strong>&nbsp;</p><p>আশা পুনর্বাসন কেন্দ্রে, আমরা একটি ব্যক্তিকেন্দ্রিক পদ্ধতি অনুসরণ করি। আমাদের অভিজ্ঞ চিকিৎসক এবং পরামর্শদাতারা আপনার ব্যক্তিগত চাহিদা ও অবস্থা অনুযায়ী একটি চিকিৎসা পরিকল্পনা তৈরি করবেন। আমাদের কার্যक्रमের মধ্যে রয়েছে:</p><ul><li><strong>মাদক নির্বিणीकरण</strong>&nbsp;</li><li><strong>ব্যক্তিগত ও গোষ্ঠী থেরাপি</strong>&nbsp;</li><li><strong>জীবন দক্ষতা প্রশিক্ষণ</strong>&nbsp;</li><li><strong>পরিবারের সমর্থন</strong>&nbsp;</li></ul><p><strong>আশা খুঁজুন</strong></p><p>আপনি যদি মাদকাসক্তির সাথে লড়াই করছেন, তাহলে আপনি একা নন। আশা পুনর্বাসন কেন্দ্রে আমরা আপনাকে সাহায্য করতে চাই। আজ আমাদের সাথে যোগাযোগ করুন এবং আপনার সুস্থতার যাত্রা শুরু করুন।</p><p><strong>২. পুনরুজ্জীবন: মানসিক স্বাস্থ্যের উন্নতির পথে&nbsp;</strong></p><p><strong>শুরু</strong>&nbsp;</p><p>মানসিক স্বাস্থ্য সমস্যা, যেমন বিষণ্নতা, উদ্বেগ ও ট্রমা, আমাদের দৈনন্দিন জীবনে ব্যাপক প্রভাব ফেলে। পুনরুজ্জীবন পুনর্বাসন কেন্দ্রে, আমরা আপনাকে মানসিক সুস্থতা ফিরে পেতে সাহায্য করতে চাই।</p><p><strong>আমরা কীভাবে সাহায্য করতে পারি?</strong>&nbsp;</p><p>আমাদের অভিজ্ঞ মনোবিজ্ঞানীরা আপনার সাথে কাজ করে আপনার মানসিক স্বাস্থ্য সমস্যার মূল কারণগুলি চিহ্নিত করবেন এবং সেগুলি মোকাবিলা করার কৌশল শেখাবেন। আমাদের কার্যক্রমের মধ্যে রয়েছে:</p><ul><li><strong>ব্যক্তিগত থেরাপি</strong>&nbsp;</li><li><strong>গোষ্ঠী থেরাপি</strong>&nbsp;</li><li><strong>ধ্যান ও মাইন্ডফুলনেস অনুশীলন</strong>&nbsp;</li><li><strong>জীবনযাত্রার পরিবর্তন পরামর্শ</strong>&nbsp;</li></ul><p><strong>আপনার সুস্থ জীবন শুরু করুন</strong>&nbsp;</p>', '2019-05-24', '10:21:56', 1, '2024-05-19 04:21:56', '2024-05-19 04:21:56'),
(5, 'সুস্থ স্বাধীনতা: আপনার গতিশীলতা ফিরে পান', 'susth-swadheenta-apnar-gtiseelta-fire-pan', 'public/backend/images/1716114885.0366.webp', 'Admin', NULL, '<p>দুর্ঘটনা, অসুস্থতা বা বয়সের কারণে গতিশীলতা হারানো খুবই কষ্টের। সুস্থ স্বাধীনতা পুনর্বাসন কেন্দ্রে, আমরা আপনাকে আগের মতো স্বাধীন ও সক্রিয় জীবনে ফিরে যেতে সাহায্য করতে চাই।</p><p><strong>আমরা কীভাবে সাহায্য করতে পারি?&nbsp;</strong></p><p>আমাদের দক্ষ পদার্থবিজ্ঞানীরা আপনার ব্যক্তিগত চাহিদা ও অবস্থা মূল্যায়ন করে একটি পুনর্বাসন পরিকল্পনা তৈরি করবেন। আমাদের কার্যক্রমের মধ্যে রয়েছে:</p><ul><li><strong>ফিজিওথেরাপি&nbsp;</strong></li><li><strong>কার্যকর ব্যবহার প্রশিক্ষণ</strong></li><li>** ব্যথা ব্যবস্থাপনা **</li><li><strong>শক্তি ও ভারসাম্য বৃদ্ধি&nbsp;</strong></li></ul><p><strong>স্বাধীনতা ফিরে পানের পথে</strong></p><p>আপনি যদি গতিশীলতা ফিরে পেতে চান, তাহলে আমরা আপনাকে সাহায্য করতে পারি। সুস্থ স্বাধীনতা পুনর্বাসন কেন্দ্রে, আমরা আপনাকে পুনর্বাসনের প্রতিটি ধাপে সমর্থন দেব। আজ আমাদের সাথে যোগাযোগ করে আপনার স্বাধীন জীবন ফিরে পেতে প্রথম পদক্ষেপ নিন!</p>', '2019-05-24', '10:34:45', 1, '2024-05-19 04:34:45', '2024-05-19 04:34:45'),
(6, 'মাদকাসক্তি থেকে মুক্তির গল্প', 'madkaskti-theke-muktir-glp', 'public/backend/images/1716115385.7058.jpg', 'Admin', NULL, '<p>রাতুল একজন প্রতিভাধর ছাত্র ছিল। কিন্তু খারাপ সঙ্গের সে মাদকে আসক্ত হয়ে পড়ে। মাদক তার জীবন ধ্বংস করে দেয়। সে পড়াশোনা ফেলে দেয়, পরিবারের সঙ্গে সম্পর্ক খারাপ হয়, স্বাস্থ্যও নষ্ট হয়ে যায়। কিন্তু রাতুলের গল্পের শেষ এখানেই নয়। সময় থাকতে সে সাহায্য চায় এবং [আপনার পুনর্বাসন কেন্দ্রের নাম পুনর্বাসন কেন্দ্রে ভর্তি হয়।</p><p><strong>পুনর্বাসনের</strong></p><p>[আপনার পুনর্বাসন কেন্দ্রের নাম &nbsp;এ রাতুলের জন্য একটি ব্যক্তিগত পুনর্বাসন পরিকল্পনা তৈরি করা হয়। মাদক নির্বিणीकरणের পাশাপাশি সে ব্যক্তিগত ও গোষ্ঠী থেরাপির মাধ্যমে নিজের মানসিক সুস্থতা ফিরে পেতে শুরু করে। জীবন দক্ষতা প্রশিক্ষণের মাধ্যমে সে নতুন করে জীবন শুরু করার দক্ষতা অর্জন করে। পরিবারের সমর্থন সে পুরো পুনর্বাসন প্রক্রিয়ায় পায়।</p><p><strong>মুক্তি ও নতুন জীবন&nbsp;</strong></p><p>কয়েক মাসের চিকিৎসার পর রাতুল মাদক থেকে মুক্ত হয়। সে আবার পড়াশোনা শুরু করে এবং পরিবারের সাথে সম্পর্কও চালায়। রাতুল জানে যে সারা জীবন সচেতন থাকতে হবে। কিন্তু সে জানে এখন সে লড়াই করার শক্তি রাখে।</p><p><strong>আপনিও পারবেন&nbsp;</strong></p><p>মাদকাসক্তি একটি সমস্যা, কিন্তু সমাধান আছে। [আপনার পুনর্বাসন কেন্দ্রের নাম কেন্দ্রে আমরা আপনাকে বা আপনার किसी &nbsp;প্রিয় মানুষকে সাহায্য করতে পারি। আজ আমাদের সাথে যোগাযোগ করুন এবং মুক্তির পথে পা বাড়ান।</p><p><strong>নোট&nbsp;</strong></p><ul><li>এই গল্পটি কাল্পনিক।</li><li>আপনি আপনার কেন্দ্রের সফল চিকিৎসার কাহিনী ব্যবহার করতে পারেন।</li><li>গোপनीयতা বজায় রাখতে রোগীর আসল নাম ব্যবহার করবেন না।</li></ul>', '2019-05-24', '10:43:05', 1, '2024-05-19 04:43:05', '2024-05-19 04:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('dreamhouse@gmail.com|127.0.0.1', 'i:1;', 1716787203),
('dreamhouse@gmail.com|127.0.0.1:timer', 'i:1716787203;', 1716787203);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 2=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `user_name`, `user_email`, `message`, `comment_date`, `comment_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'Jamal Bhuiyan', 'Bhuiyan@gmail.com', 'good blog', '2019-05-24', '10:35:32', 1, '2024-05-19 04:35:32', '2024-05-19 04:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_path` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `img_path`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'public/backend/images/1716052392.0781.jpg', 'Dream House', 1, '2024-05-18 11:13:12', '2024-05-18 11:13:12'),
(2, 'public/backend/images/1716052410.3226.jpg', 'Dream House', 1, '2024-05-18 11:13:30', '2024-05-18 11:13:30'),
(3, 'public/backend/images/1716052424.2845.jpg', 'Dream House', 1, '2024-05-18 11:13:44', '2024-05-18 11:13:44'),
(4, 'public/backend/images/1716052438.7261.jpg', 'Dream House', 1, '2024-05-18 11:13:58', '2024-05-26 23:53:47'),
(5, 'public/backend/images/1716052450.2855.jpg', 'Dream House', 1, '2024-05-18 11:14:10', '2024-05-18 11:14:10'),
(6, 'public/backend/images/1716052511.3815.jpg', 'Dream House', 1, '2024-05-18 11:15:11', '2024-05-18 11:15:11'),
(7, 'public/backend/images/1716052754.089.jpg', 'Dream House', 1, '2024-05-18 11:19:14', '2024-05-18 11:19:14'),
(8, 'public/backend/images/1716052765.143.jpg', 'Dream House', 1, '2024-05-18 11:19:25', '2024-05-18 11:19:25'),
(9, 'public/backend/images/1716052782.9593.jpg', 'Dream House', 1, '2024-05-18 11:19:42', '2024-05-18 11:19:42'),
(10, 'public/backend/images/1716052802.4408.jpg', 'Dream House', 1, '2024-05-18 11:20:02', '2024-05-18 11:20:02'),
(11, 'public/backend/images/1716788803.2653.jpg', 'Dream House', 1, '2024-05-26 23:46:43', '2024-05-26 23:46:43'),
(12, 'public/backend/images/1716788848.5105.jpg', 'Dream House', 1, '2024-05-26 23:47:28', '2024-05-26 23:47:28'),
(13, 'public/backend/images/1716788873.9779.jpg', 'Dream House', 1, '2024-05-26 23:47:53', '2024-05-26 23:47:53'),
(14, 'public/backend/images/1716788910.6079.jpg', 'Dream House', 1, '2024-05-26 23:48:30', '2024-05-26 23:48:30'),
(15, 'public/backend/images/1716788939.9588.jpg', 'Dream House', 1, '2024-05-26 23:48:59', '2024-05-26 23:48:59'),
(16, 'public/backend/images/1716788968.2858.jpg', 'Dream House', 1, '2024-05-26 23:49:28', '2024-05-26 23:49:28'),
(18, 'public/backend/images/1716789359.4832.jpg', 'Dream House', 1, '2024-05-26 23:55:59', '2024-05-26 23:55:59'),
(19, 'public/backend/images/1716789572.1682.jpg', 'Dream House', 1, '2024-05-26 23:59:32', '2024-05-26 23:59:32'),
(21, 'public/backend/images/1716789788.1472.jpg', 'Dream House', 1, '2024-05-27 00:03:08', '2024-05-27 00:03:08'),
(22, 'public/backend/images/1716789869.1434.jpg', 'Dream House', 1, '2024-05-27 00:04:29', '2024-05-27 00:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_14_102519_create_blogs_table', 1),
(5, '2024_05_14_102534_create_comments_table', 1),
(6, '2024_05_16_070833_create_contacts_table', 1),
(7, '2024_05_16_112024_create_galleries_table', 1),
(8, '2024_05_22_062928_create_packages_table', 2),
(9, '2024_05_22_110427_create_sliders_table', 3),
(10, '2024_05_23_042345_create_basics_table', 4),
(11, '2024_05_23_062515_create_teams_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pack_name` varchar(255) NOT NULL,
  `pack_price` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `btn_1` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `pack_name`, `pack_price`, `duration`, `content`, `btn_1`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Package 1', '5000', '4 Months', '<ol><li>Accomodations</li><li>Treatment</li><li>&nbsp;Counselling</li><li>Foods</li><li>TV</li><li><p>10 Bed Sharing</p><p>&nbsp;</p></li></ol>', NULL, 1, NULL, '2024-05-22 04:50:57'),
(3, 'Package 2', '8000', '4 Months', '<ol><li>Accomodations</li><li>Treatment</li><li>Counselling</li><li>Foods</li><li>TV</li><li>3 Bed Sharing</li><li>Superior Room</li><li>&nbsp;Extra Food</li><li>Individual Counselling</li><li>Extra Teaching Facility</li></ol>', NULL, 1, '2024-05-22 04:28:13', '2024-05-22 04:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('12QFsBFIHVmk5iWFXbJ7edxf8HJ694ajc1La7FG4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0Nzd2lHZzJNV1Fya1BLSHNMeUkwbkRJWVN6WE82MVFObWZiektZNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbG9jYWxob3N0L3JlaGFiX2NlbnRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716791244),
('ehEgjYII65VHBrZTe8C5v7Eh6hZ7q4ubAsdyEpxk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ25Zb0c5WGVmY3pYeVB6NEptclZkc0pOWEFHUjRCMkVvRG9SOTdHSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbG9jYWxob3N0L3JlaGFiX2NlbnRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716800925),
('o6fo1KKMbhDqrtllgoPvG41cm1A5r8oiwPrXqC53', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidmRmNkdVckJrMldRZndVTmp6WGRuNDBqM0Y5M3dacklnNlhYazZxQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbG9jYWxob3N0L3JlaGFiX2NlbnRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716959696),
('SJh3UodflpfZcSuzFuMlcHEJyNOWbzsEG0yhsGDH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVVaOHE5YXpQZUF6azlBaUExMVlKbGgyRmJxY1VzTXgxUW5uckU1SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbG9jYWxob3N0L3JlaGFiX2NlbnRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716960678),
('wEJYBsvaoCTv017bQlifeAUbiaKnwGQ1xZyz8NH4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWm56aWU1QUdsMG9YUjZsY205M0NHNncyRmRTSEJvdjJwZ1BzNVR0YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbG9jYWxob3N0L3JlaGFiX2NlbnRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1716800440),
('WH6Z3aQVnM5lnV9KIqe5iSXEH8DgGc035q69ghUd', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiblprUTFmWWhIckpBZ1ZUZGZmV3dGYkdrbjVhMEZlV2E3UUVVQmhnRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vbG9jYWxob3N0L3JlaGFiX2NlbnRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1716802228);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` text NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_desc` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `btn_1` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `slider_title`, `slider_desc`, `status`, `btn_1`, `created_at`, `updated_at`) VALUES
(2, 'public/backend/images/1716378219.6959.jpg', 'Welcome to Dream House Rehabilitation Center', '<p>We offer a structured environment where individuals can receive medical,psychological, and therapeutic support to address their challenges and work towards recovery.</p>', 1, NULL, '2024-05-22 05:43:39', '2024-05-22 05:58:33'),
(3, 'public/backend/images/1716379523.7317.jpg', 'Welcome to Dream House Rehabilitation Center', '<p>We offer a structured environment where individuals can receive medical, psychological, and therapeutic support to address their challenges and work towards recovery.</p>', 1, NULL, '2024-05-22 06:05:23', '2024-05-22 06:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_img` text NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_img`, `team_name`, `designation`, `twitter_link`, `facebook_link`, `google_link`, `instagram_link`, `status`, `created_at`, `updated_at`) VALUES
(5, 'public/backend/images/1716531253.7632.jpg', 'Susmita Akter', 'CEO and Addiction Counselor & Addiction Professional', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:14:13', '2024-05-24 00:14:13'),
(6, 'public/backend/images/1716531280.1623.jpg', 'দেওয়ান মোঃ জালাল উদ্দিন', 'চেয়ারম্যান', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:14:40', '2024-05-24 00:14:40'),
(7, 'public/backend/images/1716531301.0215.jpg', 'S.A. Kokhon Sekh', 'Director & Addiction Professional', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:15:01', '2024-05-24 00:15:01'),
(8, 'public/backend/images/1716531330.0805.jpg', 'Kamrun Nahar Sumi', 'Consultant psychologist & Addiction professional', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:15:30', '2024-05-24 00:15:30'),
(9, 'public/backend/images/1716531379.4764.jpg', 'Tousif Munaz', 'Chief Programmer & Admin', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:16:19', '2024-05-24 00:16:19'),
(10, 'public/backend/images/1716531409.6042.jpg', 'Dr. Meharab Hasan', 'Medicine specialist', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:16:49', '2024-05-24 00:16:49'),
(11, 'public/backend/images/1716531433.5316.jpg', 'Dr. Shamsul Alam', 'Psychiatrist', NULL, NULL, NULL, NULL, 1, '2024-05-24 00:17:13', '2024-05-24 00:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'dreamhouse@admin.com', NULL, '$2y$12$O9BITKQiP1yxcROfbtzAJuxvLC9vR8u5.mSkh6uunKP9UKNhMqb8K', NULL, NULL, '2024-05-26 23:19:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
