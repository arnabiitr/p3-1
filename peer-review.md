## P3 Peer Review

+ Reviewer's name: Hemant Bajpai
+ Reviwee's name: Sarah B
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/baugh20s/p3>*

## 1. Interface

### Initial impressions

+ This is quite useful tool to get an estimate of college fee cost for families with kids. College fee is quite huge so if parents get an early estimate of this then they can plan accordingly the savings.
+ Interface is simple and serves it purpose which is to give cost for college fee.

### Confusing parts of the interface

+ Why do you need child name when this is not used at any place. It is required field as well, some people might not want to provide this information.
+ I was not very clear about College cost inflation rate but may be its just me. Is it normal economy inflation rates? How people are supposed to know this?

### Things that work

+ I liked the idea for this project, it is quite useful tool for the future planning for families.

### Suggestions

+ There is no information in the interface regarding what are required fields and what is range of values they expect. It would have been better if interface provide this information.
+ I would have preferred if this tool has a name instead of Project3 for example College fee calculator. Project3 is also ok in scope of this course but there should a space between them like Project 3.

## 2. Functional testing

** Test 1 - Submitting empty form**
+ Description: Submit form without specifying any field
+ Outcome: It shows the errors which is expected but all the field values were removed and user gets empty form again which is unexpected.

** Test 2 - Entering wrong child name**
+ Description: Submit form with child name having numbers
+ Outcome: It shows the errors which is expected.

** Test 3 - Entering wrong college cost**
+ Description: Submit form with negative college cost
+ Outcome: It shows the errors which is expected.

** Test 4 - Entering wrong years**
+ Description: Submit form with negative years
+ Outcome: It shows the errors which is expected.

** Test 5 - Not entering inflation rate**
+ Description: Submit form without choosing inflation rate
+ Outcome: It shows the error 500 which is not expected. It should show user error that valid inflation rate is not selected.

** Test 6 - Entering everything valid**
+ Description: Submit form with all required inputs in their limits
+ Outcome: It shows the outcome which is expected but all field values are erased and user gets empty form again which is unexpected.

** Test 7 - Entering non numeric values**
+ Description: Submit form with non numeric values for cost or years
+ Outcome: HTML invalidates this which is expected

** Test 8 - Random URLS**
+ Description: Trying to access random urls
+ Outcome: Getting 404 error which is expected

## 3. Code: Routes
 
+ GET routes are used appropriately
+ I tried to access /about and /contact routes but could not see anything in webpage

## 4. Code: Views

+ Yes template inheritance is used properly
+ There is no separation of concern issues in view files
+ Very clean blade code

## 5. Code: General

+ Code is well commented and clean
+ Code is compliant with the standard adopted in the course
+ Entering the inflation rate option in for loop is interesting, I would not have thought it like it.
+ readme.md file is not following the guid lines as described in project 3 description. It does not specify what are the 3 unique form inputs.

## 6. Misc

+ Project 3 requirement says there should be 3 unique form inputs but this project is using only 2.
+ There are 12 errors on NuHtml checker so w3 validator produced 12 issues with site url
