---
category_name: medium
problem_code: DEVVOTE
problem_name: 'Devus and their voting system'
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
problem_author: admin2
problem_tester: xcwgf666
date_added: 9-03-2015
tags:
    - admin2
    - april15
    - dynamic
    - medium
    - partitioning
editorial_url: 'http://discuss.codechef.com/problems/DEVVOTE'
time:
    view_start_date: -62170005200
    submit_start_date: -62170005200
    visible_start_date: 1772159245
    end_date: 1735669800
    current: 1493557918
layout: problem
---
###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/APRIL15/mandarin/DEVVOTE.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/DEVVOTE.pdf).

Devus are creatures living in Devupur. There are total **n** Devus in Devupur. **ith** Devu live in **ith** house. Houses **1, 2, 3, , , n** are placed in a single lane i.e. **1** is a neighbor of **2**, **2** is a neighbor of **1** and **3** etc.

They decide their president by a very weird voting system. All the Devus contest in the presidential elections. Each person uniformly randomly votes any of the **n** person as his preference (he can vote himself too). Devus are really very envious creatures, so no Devu casts his vote to the person whom his neighbor has casted. Devus vote in the increasing order of their IDs.

Finally all the votes are counted and all the Devus having votes equal to highest voted Devu are selected as president.

Now you are interested in finding out expected number of presidents Devupur can select in their upcoming election. Please round the answer to 6 digits after decimal.

### Input

- First line of the input contains a single integer **T** denoting number of test cases.
- For each test case, there is a single line containing a single integer **n**.

### Output

For each test case, print a single real number corresponding to the answer of the problem.

### Constraints and Subtasks

**Subtask 1 (15 points)**

- **1 ≤ T, n ≤ 7**

**Subtask 2 (25 points)**

- **1 ≤ T, n ≤ 18**

**Subtask 3 (60 points)**

- **1 ≤ T, n ≤ 36**

### Example

<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1.000000
2.000000
</pre>
### Explanation

**Example 1:**
 **1st** Devu votes himself and get elected for president. So expected number of presidents are **1**.

**Example 2:**

- Both the Devus cast their vote to themselves. So total number of presidents selected are **2**.
- Devu **1** votes to Devu **2** and Devu **2** votes to Devu **1**. In this way, again total total number of presidents selected are **2**.
- So expected number of presidents selected are **(2 + 2) / 2 = 2**.
