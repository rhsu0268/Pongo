# Pongo

## Live URL
<http://p4.rhsu.me>

## Description
As semester comes to a close, students are often rushing to clean out their dorms before heading home. Textbooks,
leftover school supplies, and other bells and whistles are often tossed aside without much thought. This is a
Laravel application that will allow users to post the items that they wish to sell, buy other items posted by other
users, view a history of transactions, and get real-time emails of their purchases in the form of a sales receipt.

## Demo
<https://www.youtube.com/watch?v=rHJwL5YzBMs>

## Details for teaching team

1. The 101 Dalmations cartoon/movie is one of my all time favorites and it served as an inspiration for the name of the site.
2. The site requires user login credentials and the 2 required default ones are set up in the migrations:
    - Name: Jill - Username: jill@harvard.edu - Password: helloworld
    - Name: Jamal - Username: jamal@harvard.edu - Password: helloworld
3. I did implement an email functionality with Mailgun. I haven't tried with "Mandrill".
4. When users click the buy button to purchase the item, the sales receipt will be emailed to
them. I created two test users for this feature since the default are not actual email addresses:
    - Name: Richard Hsu - Username: rhsu0268@gmail.com - Password: helloworld
    - Name: rhsu - Username: rhsu@gwu.edu - Password: helloworld
5. Database: Consists of three tables in addition to users:
    - added_items: User's added_items.
    - public_items: Items public for sale.
    - transactions: Records all BUY and SELL tansactions.
6. CRUD Operations - These are examples:
    - Create: Users can add items to their Added Items table.
    - Read: User's myspace page consists of their added items and their transactions.
    - Update: Users can make an item public. That will update the item in the added_items table.
    - Delete: Users can delete an item that they have added. This will also work after they
    made the item public.
7. Server-Side Error Validation: This was done on the add items page with all the fields.

## Outside code
* Bootstrap: http://getbootstrap.com/
* Bootstrap Flatly Theme: https://bootswatch.com/flatly/
* pongo-1.jpg: http://disneys101dalmatians.weebly.com/uploads/1/4/7/1/14716780/3380431_orig.jpg?0
* pongo-2.jpg: http://images.amazon.com/images/G/01/dvd/aplus/101dalmatians/101dalmatians2lg.jpg
* pongo-3.png: http://orig00.deviantart.net/28e9/f/2012/140/d/7/101_dalmatian_puppies_by_donkeyemma-d50h8pt.png
* Laravel Packages:
    - guzzlehttp/guzzle: https://github.com/guzzle/guzzle
