---
category_name: hard
problem_code: LCH15JGH
problem_name: 'Many bananas'
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
max_timelimit: '1 - 2.5'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: rubanenko
date_added: 28-12-2014
tags:
    - ad
    - fenwick
    - ltime20
    - maths
    - medium
    - pavel1996
    - segment
time:
    view_start_date: 1422174605
    submit_start_date: 1422174605
    visible_start_date: 1422174600
    end_date: 1735669800
    current: 1493556981
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME20/mandarin/LCH15JGH.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME20/russian/LCH15JGH.pdf).

You are a tribal leader and live in jungle with your people. Life of the leader is not easy sometimes. One of your responsibilities is food distribution. Let's consider this process in details.

There are many families in your tribal. The**i-th** family consists of **Xi**people. In some moment you give each family **Y** bananas(**Y** is equal for all families independently of its size). All members of family receive equal number of bananas each and this number is maximal with condition that total number of bananas this family have received doesn't exceed **Y**. Of course some bananas of these initial **Y** are left. They are given back to the leader of the tribal(you). In other words each member of family receives **floor Y / Xi**bananas and  **Y modulo Xi** are given back to the leader.

. You are interested in total number of bananas you will have after this distribution process.

But things are not so simple. There are many events in life of your tribal. You will have to process many queries of three types:

- New family with **Xi**members joined your tribal
- Some family with **Xi**members left your tribal(it's guaranteed that there was such a family before this query).
- You give each family in your tribal **Yj** bananas. You want to know the total number of bananas you will have after distribution.

### Input

The first line of input file contains one integer **N** denoting number of different family sizes before queries. Each of next **N**lines contains two space-separated integers **Ai** and **Bi** denoting size of the family and number of families with such size correspondingly. It's guaranteed that all the **Ai** are pairwise different.
The next line contains one integer **M** denoting the number of queries. Next **M** lines describe one query each and can be one of the three types:

- "+ **X**" - one family with **X** members joined your tribal
- "- **X**" - one family with **X** members left your tribal(it's guaranteed that there was such a family before this query).
- "? **Y**" - You give each family in your tribal **Y** bananas. You want to know the total number of bananas you will have after distribution.

### Output

For each third type query output one integer per line - answer for this query.

### Constraints

- ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **105**
- **1** ≤ **Ai**, **Bi**, **Xi**, **Yi**≤ **105**

###  Subtasks 

**Subtask #1**\[25 points\]: **M** < **1000**
**Subtask #2**\[75 points\]: no additional conditions

### Example

```
<b>Input:</b>
3
1 4
3 2
2 2
6
? 10
? 8
+ 4
? 9
- 2
? 8
<b>Output:</b>
2
4
3
4

```