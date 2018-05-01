---
category_name: easy
problem_code: MCHEF
problem_name: MasterChef
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: mugurelionut
date_added: 2-04-2015
tags:
    - data
    - dynamic
    - easy
    - july15
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/MCHEF'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493558167
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY15/mandarin/MCHEF.pdf) and [Russian](http://www.codechef.com/download/translated/JULY15/russian/MCHEF.pdf).

Chef loves to prepare delicious dishes. He has prepared **N** dishes numbered from **1** to **N** for this year's MasterChef contest. He has presented all the **N** dishes to a panel of judges. Judging panel consists of **M** judges numbered from **1** to **M**. Rating for each dish was decided by voting from all the judges. Rating for the dishes has been given by a **1**-indexed array **A** where **Ai** denotes rating of the **ith** dish.

Some dishes prepared by chef are extraordinary delicious, but unfortunately, some are not. Chef has been given a chance to improve the total rating of his dishes. By total rating of dishes, we mean the sum of the ratings of his dishes. Each of the **M** judges has administrative power to remove some (zero or more) dishes from a specified range. The **ith** judge takes **Ci** rupees for removing each dish of Chef's choice from the dishes numbered from **Li** to **Ri** (both inclusive). Once a dish is removed by any of the **M** judges it will not be considered for calculating total rating of the dishes. Chef has spent a large portion of his money preparing mouth watering dishes and has only **K** rupees left for now. Now chef is worried about maximizing total rating of his dishes by dropping some of the **N** dishes.

Please Help chef by finding the maximum total rating he can achieve such that the total expenditure does not exceed his budget of **K** rupees.

###  Input 

- First line of input contains a single integer **T** denoting the number of test cases.
- First line of each test case contains three space separated integers **N**, **K** and **M** denoting the number of dishes prepared by chef, chef's budget, and number of judges in judging panel respectively.
- Next line of each test case contains **N** space separated integers where **ith** integer denotes the rating received by the **ith** dish.
- Next **M** lines of each test case contain three space separated integers each: **L**, **R** and **C**, where the integers in the **ith** line denotes the value of **Li**, **Ri** and **Ci** respectively.

### Output 

For each test case, print a single integer in a line corresponding to the answer.

###  Constraints 

- **1 ≤ T ≤ 105**
- **1 ≤ N,M ≤ 105**
- **1 ≤ K ≤ 500**
- **1 ≤ Li ≤ Ri ≤ N**
- **1 ≤ Ci ≤ 200**
- **-109 ≤ Ai ≤ 109**
- Sum of **N** and **M** over all test cases does not exceed **5\*105**

###  Subtasks : 

- **Subtask 1 :** Sum of all **N**'s across the test cases in a file does not exceed **5000**. Sum of all **M**'s is also at most **5000**. **(33 points)**.
- **Subtask 2 :** Sum of all **N**'s across the test cases in a file does not exceed **5\*105**. Sum of all **M**'s is also at most **5\*105**. **( 67 points )**.

###  Example 

**input**

<pre>
1
5 10 5
10 -2 -5 7 -10
1 1 5
2 4 10
4 4 12
3 4 10
1 5 15

<b>output</b>
5
</pre>### Explanation 

- Chef can drop dish numbered 3rd with rating -5 by paying 10 rupees to the 4th judge, and get the maximum possible total rating of 5.