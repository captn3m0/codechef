---
category_name: medium
problem_code: ASHIGIFT
problem_name: 'Saving a gift of love'
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
problem_author: pnkjjindal
problem_tester: xcwgf666
date_added: 10-03-2015
tags:
    - binary
    - ltime22
    - pnkjjindal
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ASHIGIFT'
time:
    view_start_date: 1427617800
    submit_start_date: 1427617800
    visible_start_date: 1427617800
    end_date: 1735669800
    current: 1493557485
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME22/mandarin/ASHIGIFT.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME22/russian/ASHIGIFT.pdf).

Suraj, the Chief Prankster is back in action now and this time he has stolen the valentine's day gift given by Ashi (the love of Chef) to the Chef and ran away with it to Byteland.

Byteland is a not a regular place like Chef's town. The safest way from Chef's town to Byteland is through _the path of tasty dishes_. The path is named so because there are magical tasty dishes which appear to the traveler that no one can resist eating. Also, Suraj has added a strong sleep potion to each of the dish on this path to stop anyone from following him.

Knowing the devilish nature of Suraj, Ashi is concerned about the Chef and has asked all of Chef's town people to help. The distance from Chef's town to Byteland through the _the path of tasty dishes_ is **X** units. They have the location where the magic dishes are and how many people are required to eat it completely. Anyone who eats a dish would go to a long sleep and won't be able to continue. They have the information about the tribal clans that live along the _the path of tasty dishes_ who can be of real help in this journey.

The journey Chef and his friends can be described as follows: There is a total of **B** dishes on _the path of tasty dishes_. Each dish is located at some distance from Chef's town denoted by **xi** for the ith dish ( **xi-1** < **xi**). To minimize the number of friends Chef has to leave behind, all of them have decided that exactly **yi** of them will eat the ith dish, which is the required number of people needed to finish it completely. Also, there are a total of **C** tribal chef clans, each with their own population and location on the path that Chef and his friends will meet on their way to Byteland. They know that for some clan (say _i_), they are located at a distance of **pi** ( **pi-1** < **pi**) from Chef's town with a population of **ri**. And if a group of **at least qi** men approaches them, they would be able to convince them to join their forces against Suraj.

Given the information about all this, help the Chef to find out the minimum size of the group (including him and his friends) he should start with to reach Byteland and get back Ashi's gift from Suraj.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each test case contains three lines which are as follows:

First line of each test case contains **X**, the distance of Byteland from Chef's town.

Next line contains an integer **B**, the number of dishes on _the path of tasty dishes_. Then follows **B** pairs of space separated integers of the form **xi yi**, where **xi yi** are as defined above for the ith dish.
Next line contains an integer **C**, followed **C** space separated triplets of integers **pi qi ri** as defined above.

### Output

For each test case, print the minimum size of the group (including Chef) that is needed to reach Byteland.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **X** ≤ **109**
- **1** ≤ **B** ≤ **10000**
- Constraints on **C**
  - Subproblem 1 (25 points):  **C = 0**
  - Subproblem 2 (75 points): **1** ≤ **C** ≤ **10000**
- **1** ≤ **xi** < **X**, **xi** < **xi+1**
- **1** ≤ **pi** < **X**, **pi** < **pi+1**
- **1** ≤ **yi** ≤ **1014**
- **1** ≤ **qi** ≤ **1014**
- **1** ≤ **ri** ≤ **1014**
- All the positions, of the tasty dishes and tribal clans are distinct.

### Example

```
<b>Input:</b>
3
10
2 1 3 8 1
0
10
2 1 3 8 5
0
10
2 2 3 8 5
3 1 2 1 4 3 2 9 1 1 

<b>Output:</b>
5
9
6

```
### Explanation

**Example case 1.** In the first case, there are no tribal clans, and two dishes, one which needs to be eaten by 3 chefs on their way and one to be eaten by 1 chef. Hence, we have to start with atleast 5 people in total to pass _the path of tasty dishes_.

**Example case 2.** Similar as Example Case 1.

**Example case 3.** In this case, if we start with 5 Chefs. At point 1, we have more than or equal to 2 chefs, hence the tribal clan of size 1 adds to the Chef's party and now they have size of 6. At position 2, three of them would be left behind eating a dish, leaving 3 of them to go ahead. At position 4, since the size is exactly 3, the tribal clan joins the chef's party making it of size 5. At position 8, all 5 of them will stop to eat the dish and none would go ahead. Similarly, if we start with 6, one of them would be able to pass position 8 and reach position 9, where it will also add one of the tribal clans to its party and reach Byteland.