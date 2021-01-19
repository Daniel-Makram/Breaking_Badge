![BreakingBadge](breakingbadge.png)

# Breaking Badge

Create the best badge attribution platform and break the internet!

- Type of challenge: **consolidation**  
- Duration: **3 days**  
- Team challenge: **team of 4**
- Deadline: **21/01/2021 19:00**
- [Submission form](https://forms.gle/UmTTfyF59kueUYhh7)

## Learning objectives
- Create a fullstack application
- Create a relational database, with many-to-many relationships
- Split the logic of your app using a view-controller approach
- Design a basic permission system

## The Mission

Create a badge attribution system from an existing codebase. 

- The login system is already partly done (you still have to create the frontend)
- You must find a way to store badges into a database. A badge consists at least of the following properties:
  - A name
  - A description
  - A distinctive shape and color
- There is two account types:
  - `ADMIN`s who can create/edit/delete badges and grant them.
  - `NORMIE`s who can receive badges
- You must keep most of the logic outside of pages, into functions, for readability
- BONUS: Organize badges by topics so you can display a progression


## Feature list

- [ ] Page to list all the badges (admin only)
- [ ] Page to list all the users (admin only)
- [ ] Possibility to create a badge (admin only)
- [ ] Possibility for admin to grant badges and for normal users to see their awarded badges.
- [ ] Possibility for admin to add new users in the system.
- [ ] Create a stats view for both admins and enduser

## Resources
- [The starter template](template)
- [The users table (for login)](users.sql)
  - ADMIN LOGIN: `admin@example.com` | PASSWORD: `GraceHopper<3`
  - NORMIE LOGIN: `normie@example.com` | PASSWORD: `I<3PHP`
