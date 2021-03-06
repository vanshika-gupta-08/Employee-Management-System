# Employee-Management-System

this is simple Employee management system which has a list of employee added to the system and a form which can be used for adding a new employee . Once an employee has been added, it should be displayed on the Home part (list is in reverse ordered). 
##  documentation on  deploying the project so that it can be run on a server.
* First of all, signup at Cloudways and launch your server and application. Next, move to the Application tab by selecting any app from application page.
* Here, you must download SSH keys by moving to Deployment via Git tab,
We will use these keys to allow access from your Cloudways server to your git repository. Now click on the Generate SSH Keys button to generate the keys.
* Now, click on Download SSH Keys to download SSH Public Key that we will use in the next step.
* On Github, navigate to the repository and find the code which you want to deploy. If you are using another Git service, you will have to find the equivalent way of deploying them. Go to Settings -> Deploy keys and click on the Add Deploy Key button to add the SSH key. You can also give a name to this key in the title field and copy the key to the box. Click on the Add Key button to save the SSH key.
* Copy the repository address as shown in the image below. Make sure to copy the  SSH address as other formats (like HTTPS) are not supported.
* #### Deploy Code from Your Repository
 * Go back to Cloudways console. Paste the SSH address you got in Step 4 into the Git Remote Address” field.
 * Select the branch of your repository you want to deploy from. In this example, we are using the master ” branch.
 * Type the deployment path (i.e. the folder in your server where the code will be deployed). Make sure to end it with a backslash (/). If you will       leave this field empty, the code will be deployed to public_html/.
 * Click on the Start Deployment button to deploy your code to the selected path. 
* You will get a notification once the deployment process finishes.

You have further options to delete the repository from the server (no files will be deleted, see FAQ below). Pull the latest changes or change the branch you deploy from.

## Part 2 (role of index in SQL)
A database index is a data structure that improves the speed of operations in a table. Indexes can be created using one or more columns, providing the basis for both rapid random lookups and efficient ordering of access to records.

While creating index, it should be taken into consideration which all columns will be used to make SQL queries and create one or more indexes on those columns.

Practically, indexes are also a type of tables, which keep primary key or index field and a pointer to each record into the actual table.

The users cannot see the indexes, they are just used to speed up queries and will be used by the Database Search Engine to locate records very fast.

The INSERT and UPDATE statements take more time on tables having indexes, whereas the SELECT statements become fast on those tables. The reason is that while doing insert or update, a database needs to insert or update the index values as well.
