---
category_name: school
problem_code: LADDU
problem_name: Laddu
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: kevinsogo
date_added: 16-04-2016
tags:
    - admin2
    - cakewalk
    - int
    - loop
    - may16
editorial_url: 'http://discuss.codechef.com/problems/LADDU'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1492506728
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/LADDU.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/LADDU.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/LADDU.pdf) as well.

You might have heard about our new goodie distribution program aka the "[Laddu Accrual System](https://www.codechef.com/laddu)". This problem is designed to give you a glimpse of its rules. You can read the page once before attempting the problem if you wish, nonetheless we will be providing all the information needed here itself.

Laddu Accrual System is our new goodie distribution program. In this program, we will be distributing Laddus in place of goodies for your winnings and various other activities (described below), that you perform on our system. Once you collect enough number of Laddus, you can then redeem them to get yourself anything from a wide range of CodeChef goodies.

Let us know about various activities and amount of laddus you get corresponding to them.

- Contest Win (CodeChef’s Long, Cook-Off, LTIME, or any contest hosted with us) : 300 + Bonus (Bonus = 20 - contest rank). Note that if your rank is > 20, then you won't get any bonus.
- Top Contributor on [Discuss](http://discuss.codechef.com) : 300
- Bug Finder : 50 - 1000 (depending on the bug severity). It may also fetch you a CodeChef internship!
- Contest Hosting : 50

You can do a checkout for redeeming laddus once a month. The minimum laddus redeemable at Check Out are 200 for Indians and 400 for the rest of the world.

You are given history of various activities of a user. The user has not redeemed any of the its laddus accrued.. Now the user just wants to redeem as less amount of laddus he/she can, so that the laddus can last for as long as possible. Find out for how many maximum number of months he can redeem the laddus.

### Input

- The first line of input contains a single integer **T** denoting number of test cases
- For each test case: 
  - First line contains an integer followed by a string denoting **activities, origin** respectively, where **activities** denotes number of activities of the user, **origin** denotes whether the user is Indian or the rest of the world. **origin** can be "INDIAN" or "NON\_INDIAN".
  - For each of the next **activities** lines, each line contains an activity. 
       An activity can be of four types as defined above. 
      - Contest Win : Input will be of form of **CONTEST\_WON rank**, where **rank** denotes the rank of the user.
      - Top Contributor : Input will be of form of **TOP\_CONTRIBUTOR**.
      - Bug Finder : Input will be of form of **BUG\_FOUND severity**, where **severity** denotes the severity of the bug.
      - Contest Hosting : Input will be of form of **CONTEST\_HOSTED**.

### Output

- For each test case, find out the maximum number of months for which the user can redeem the laddus accrued.

### Constraints

- **1** ≤ **T, activities** ≤ **100**
- **1** ≤ **rank** ≤ **5000**
- **50** ≤ **severity** ≤ **1000**

### Subtasks

There is only a single subtask with 100 points.

### Example

<pre><b>Input:</b>
2
4 INDIAN
CONTEST_WON 1
TOP_CONTRIBUTOR
BUG_FOUND 100
CONTEST_HOSTED
4 NON_INDIAN
CONTEST_WON 1
TOP_CONTRIBUTOR
BUG_FOUND 100
CONTEST_HOSTED

<b>Output:</b>
3
1
</pre>
### Explanation

**In the first example**,

- For winning contest with rank 1, user gets 300 + 20 - 1 = 319 laddus.
- For top contributor, user gets 300 laddus.
- For finding a bug with severity of 100, user gets 100 laddus.
- For hosting a contest, user gets 50 laddus.

So, overall user gets 319 + 300 + 100 + 50 = 769 laddus.
Now, the user is an Indian user, he can redeem only 200 laddus per month. So, for first three months, he will redeem 200 \* 3 = 600 laddus. The remaining 169 laddus, he can not redeem as he requires at least 200 laddues in a month to redeem.

So, answer is 3.

**In the second example**, user is a non-Indian user, he can redeem 400 laddues per month. So, in the first month, he will redeem 400 laddus. The remaining 369 laddus, he can not redeem as he requires at least 400 laddues in a month to redeem.

So, answer is 1.
