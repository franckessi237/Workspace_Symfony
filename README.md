# Workspace_Symfony
Firstly, the blog. Articles will be displayed on the home page, 10 per page. The rest will be accessible via a pagination. The page in question will have a keyword search system (within the title and tags) and a filter (via the categories attached to the articles). When the user clicks on an article, he/she will be directed to the page of the article in question.
The user can also decide to like the article if they wish. They can also share the article via the main social networks (Facebook, Twitter) by clicking on the buttons provided for this purpose.
An article can also be scheduled in advance for a specific date and time.
An article will be defined by: a unique identifier*, a title*, an image, a content*, its status (published, draft), a marker allowing to know if this article has atready been reported to users (Mailchimp mailing, instagram & Facebook publication), a list of tags, a list of categories (with a primary category if there are several categories), the list of comments of the article, an author (user), an update date and a creation date*
Articles can be viewed and shared by any type of user. However, only logged-in users will be able to like the articles.
wcategorles
To talk about categories, we want each category to display the articles related to it. The view in question will follow the same model as the blog page. A category will be defined by: a unique identifier*, a name*, a description, the list of articles and a creation date*.
The tags
At the level of labels, the system will be similar to that of categories. However, there will be no "primary label" system.
§ Comments
Concerning comments, they will be present under the article. A logged-in user will therefore be able to write one or more comments under an article. A user will be able to reply to another user's comment, and even like it if they wish. There will be a limit of 20 replies per comment.
Only logged-in users will be able to post a comment, like a comment and reply to it. On the other hand, all users will be able to view comments.
The login and registration system
Users will be able to create a user account and subsequently log in, in order to access additional features. They will have the option of logging in with the basic system, or using the Google login. It will not be possible to have a "classic" account and a "Google" account with the same email address. The user will have to make a choice.
During the classic registration, he will have to validate his account with an email address verification system.
They will also be able to regenerate a password if they forget it.
A user will be defined by a unique identifier*, an email*, a surname, a first name*, a password*, an avatar, a list of roles*, a date of account creation*.

The user account

The logged-in user will also be able to manage his account. He will be able to modify all the information of his account (information, password). The user will also have a history of their activity (viewing an article, liking an article, posting a comment, replying to a comment, liking a comment).

The user can choose to make his account public. Other users will then have access to their information (excluding their password) as well as their history.

Notification system

Notifications will be sent to users and administrators based on certain actins.

For classic users, a notification will be sent when: a new article is published, a reply is made to one of the user's comments (or a like of one of these comments).

An administrator will receive the same notifications, but with the addition of: a notification for each like to an article, for a contact form submitted, when a new user registers

a The administration part

The Back-Office will manage all the entities of the website.

We will also want to set up a manual email from the Back-Office when the article is published. For this, we will use a Mailchimp campaign (in order to collect the campaign data, but also in order to facilitate the mass sending of emails).

The contact form

The site will also provide a contact form. This Form will contain several fields: name*, surname, email address*, subject*, message*. If the user is logged in, then
"About" page
The "About" page will contain information about the site designer. It will be in French and English.
Other features
The site will display in its Header the weather of the day according to the user's location. If the user declines the location request, the weather for Rennes will be displayed.
