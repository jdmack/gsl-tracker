gsl-tracker
===========

Author: James Mack  
Project Start Date: 2012-06-20  

Simple webapp to track the viewing status of a GSL Season.

This was mainly a learning exercise in AJAX and web service interactions. It was also one of my first javascript projects.

It began as simply a visual HTML grid for GSL matches that I would edit in the HTML to keep track of the games I'd viewed.
Then I got the idea that it would be very cool if it was colored and instead of doing it manually in HTML, I decided to try learning some JavaScript and I managed to get the toggle click to work.
Then I decided to turn it in to an iGoogle Gadget. I struggled with this part for awhile but I could never get the state to be effectively stored and loaded each time the page rendered. Also during this time, I believe Google announced the discontinuation of iGoogle in the following year, so I decided it wasn't work learning iGoogle Gadgets anymore.
Thus I took the XML version of the app and migrated it to a standalone web app I could run on my server. I wrote the service in PHP to use MySQL to store the state and I learned some AJAX to get it working.
I had plans to expand it greatly so that it could support multiple users and seasons, but I lost interest in spectating StarCraft 2 and so I haven't bothered to finish the app.


To Do
-----
- Users
    - Login
    - Register
- Code A
- Up & Down matches
- Break rounds into tabs
- Season select
    - Seeason dropdown
    - Add season form

