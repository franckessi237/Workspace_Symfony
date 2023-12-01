# Workspace_Symfony
Firstly, let's clarify the text while retaining its objectives and language:

Blog Section:
The blog's home page will showcase 10 articles with pagination for additional content. A keyword search (within titles and tags) and a filter (via article categories) will enhance user navigation. Clicking on an article directs the user to its dedicated page. Users can like and share articles on Facebook and Twitter. Articles can be scheduled for future publication. Each article is identified by a unique identifier, title, image, content, status (published or draft), reporting marker (Mailchimp, Instagram, Facebook), tags, categories, comments, author, update date, and creation date. All users can view and share articles, but only logged-in users can like them.

Categories:
Categories will display related articles, following the blog page model. Each category has a unique identifier, name, description, list of articles, and creation date.

Tags:
Similar to categories, the tag system lacks a "primary tag" concept.

Comments:
Comments appear below articles, allowing logged-in users to post, like, and reply (up to 20 replies per comment). All users can view comments.

Login and Registration:
Users create and log in to accounts with either a basic system or Google login. One email address can't have both account types. Classic registration requires email address verification. Users can regenerate forgotten passwords. A user is defined by a unique identifier, email, surname, first name, password, avatar, list of roles, and date of account creation.

User Account:
Logged-in users can manage account details and view activity history, which includes article views, liked articles, posted comments, replied comments, and liked comments. Users can choose to make their accounts public, sharing information (excluding passwords) and history with other users.

Notification System:
Users and administrators receive notifications for new article publications and replies or likes on their comments. Administrators also receive notifications for article likes, contact form submissions, and new user registrations.

Administration Part:
The Back-Office manages all website entities and facilitates manual email campaigns via Mailchimp for article publication.

Contact Form:
The contact form includes fields for name, surname, email address, subject, and message. If the user is logged in, additional details are included.

About Page:
The "About" page, in both French and English, provides information about the site designer.

Additional Features:
The site's header displays daily weather based on the user's location. If location access is denied, the weather for Rennes is displayed.
