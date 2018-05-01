---
category_name: easy
problem_code: TWODOGS
problem_name: 'Make Him Happy'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: adurysk
problem_tester: gerald
date_added: 6-11-2013
tags:
    - adurysk
    - easy
    - feb14
editorial_url: 'http://discuss.codechef.com/problems/TWODOGS'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493558196
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB14/mandarin/TWODOGS.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/TWODOGS.pdf).

In Chef's house there are **N** apples lying in a row on the floor. These apples are numbered from **1** (left most one) to **N** (right most one). The types of apples are also numbered by positive integers, and the type of apple **i** is **Ti**.

Chef has recently brought two trained dogs. Both of the dogs are too intelligent to know the smell of each type of apple. If Chef gives a dog an integer **x**, and releases it at one end of the row of apples, then the dog smells each apple one by one. Once the dog find an apple of type **x**, the dog picks the apple and back to Chef's room immidiately. If there is no apple of type **x**, then the dog will back without any apples.

Now Chef wants to eat two apples as soon as possible. Here the apples must have distinct types, and the sum of the types must be equal to **K**. Chef can release the dogs from either of the ends, namely, he can leave (both at left end) or (both at right end) or (one at left end and one at right end) and he can release them at the same time. The dogs take one second to smell each apple. However the dogs can run rapidly, so the time for moving can be ignored. What is the minimum time (in seconds) to get the desired apples from his dogs?

### Input

The first line of input contains two space-separated integers **N** and **K**, denoting the number of apples and the required sum respectively. Then the next line contains **N** space-separated integers **T1**, **T2**, ..., **TN**, denoting the types of the apples.

### Output

Print one integer describing the minimum number of seconds that Chef needs to wait till he gets the desired apples. If Chef cannot get the desired apples, then output "-1" without quotes.

### Constraints

- **2 ≤ N ≤ 500000 (5 × 105)**
- **1 ≤ K ≤ 1000000 (106)**
- **1 ≤ Ti ≤ 1000000 (106)**

### Example

<pre><b>Sample Input 1:</b>
5 5
2 4 3 2 1

<b>Sample Output 1:</b>
2

<b>Sample Input 2:</b>
5 5
2 4 9 2 5

<b>Sample Output 2:</b>
-1
</pre>### Explanation

In the first example, if Chef leaves the first dog from left and gives it integer **4**, and the second dog from right and gives it integer **1**, then the first dog takes **2** seconds and the second dog takes **1** second to get the apples. Thus Chef needs to wait **2** seconds. In any other way, Chef can't get the desired apples in less than **2** seconds.

In the second example, Chef cannot get two apples such that the sum of their types is **5** so the answer is "-1".
