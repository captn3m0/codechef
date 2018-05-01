---
category_name: easy
problem_code: CHSTAMP
problem_name: 'Chef and collection of stamps'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: eartemov
problem_tester: iscsi
date_added: 28-07-2015
tags:
    - connected
    - eartemov
    - easy
    - graph
    - nov15
editorial_url: 'http://discuss.codechef.com/problems/CHSTAMP'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/CHSTAMP.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/CHSTAMP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/CHSTAMP.pdf) as well.

Chef has a collection of **N** postage stamps. Each stamp belongs to some type, which are enumerated as positive integers. More valuable stamps have a higher enumerated type. So, type **1** is the least valuable type of stamps, type **2** is a bit more valuable, and so on.

Chef often communicates with other philatelists via a stamp exchange website called P-bay. On any particular day, P-bay lists several offers, each of which is represented as an unordered pair {**A**, **B**}, allowing its users to exchange stamps of type **A** with an equal number of stamps of type **B**. Chef can use such an offer to put up any number of stamps of enumerated type **A** on the website and get the same number of stamps of type **B** in return, or vice-versa (of course, he must have enough stamps of the corresponding type). Assume that any number of stamps Chef wants are always available on the site's exchange market. Each offer is open during only one day: Chef can't use it after this day, but he can use it several times during this day. If there are some offers which are active during a given day, Chef can use them in any order.

Chef is interested in making his collection as valuable as possible. Help him to find maximum possible value of his collection after going through (accepting or declining) all the offers. Value of Chef's collection is equal to the sum of type enumerations of all stamps in the collection.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **M** denoting number of stamps in Chef's collection and number of offers, respectively.

Next line contains **N** integers denoting the enumerated types of stamps in Chef's collection.

The **ith** of the following **M** lines contains three integers — **Ti**, **Ai** and **Bi** — denoting that on day **Ti**, there is an offer about exchanging stamps of types **Ai** and **Bi**.

### Output

For each test case, output a single line containing maximum possible value of Chef's collection after all offers.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **2\*105**
- **1** ≤ **M** ≤ **5\*104**
- Types are enumerated with integers from **1** to **5\*104**
- **1** ≤ **Ti** ≤ **5\*104**

### Subtasks

**Subtask 1: (33 points)**

- **1** ≤ **M** ≤ **1000**
- Types are enumerated with integers from **1** to **1000**
- **1** ≤ **Ti** ≤ **1000**

**Subtask 2: (67 points)**

- Original constraints

### Example

<pre><b>Input:</b>

1
3 4
1 3 5
1 4 3
1 1 3
2 6 22
3 5 8

<b>Output:</b>

16

</pre>### Explanation

**Example case 1.** Chef can use **2nd** offer to exchange the stamp of type **1** with an stamp of type **3**. After that he can use **1st** offer to exchange his 2 stamps of type **3** with 2 stamps of type **4**. Finally, on **3rd** day Chef uses the offer to exchange the stamp of type **5** with an stamp of type **8**. After this transaction, value of his collection becomes **4 + 4 + 8 = 16**.
