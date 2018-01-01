---
category_name: easy
problem_code: REIGN
problem_name: Reign
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
problem_author: kostya_by
problem_tester: white_king
date_added: 6-11-2013
tags:
    - dec13
    - easy
    - kostya_by
editorial_url: 'http://discuss.codechef.com/problems/REIGN'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493558180
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/REIGN.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/REIGN.pdf).

The Baratheons have been ruling in the Seven Kingdoms for many years. They have seen a lot: prosperity and hunger, tranquility and rebellions, live and death. But nevertheless, they still hold the throne.

King Joffrey Baratheon's reign is running now. As a wise man, he honors the history of his family. So, he commanded to build up **two** monuments, that will remind about some historical periods of the Baratheons.

Formally, the Baratheons have been ruling for **N** years. Every year is described by an integer **Ai**, the level of prosperity in **i**-th year. If **i**-th year was a great year, then **Ai** might be a positive integer. Otherwise, if **i**-th year was a horrible year, then **Ai** might be a negative integer.

Each historical period can be described as two integers **S** and **F**, the start and the finish of the period respectively. Of course, **S** is not greater than **F** for each period, that we consider in this task.

You are to pick two historical periods, but there are some rules:

- Two periods shouldn't have common years. I.e. a period \[1, 5\] has no common years with a period \[6, 7\];
- The first period should start earlier than the second one. I.e. a period \[1, 5\] starts earlier than \[6, 7\];
- Two periods shouldn't be too close to each other. There must be at least **K** years between the finish of the first period and the start of the second period. I.e. periods \[1, 5\] and \[10, 10\] can be chosen in case **K** equals to 4, while they can't in case **K** equals to 5.
- The sum of the levels of prosperity in chosen years should be as big as possible.

Afterwards, you should report the sum of the levels of prosperity in chosen years to your King. Make everything right, otherwise King Joffrey won't be merciful!

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **K** denoting the length of the Baratheons' reign and the minimal amount of years between two chosen periods.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the levels of prosperity in corresponding years.

### Output

For each test case, output a single line containing the required integer.

### Constraints

- 1 ≤ **T** ≤ 5;
- 2 ≤ **N** ≤ 105;
- 0 ≤ **K** ≤ 105;
- -109 ≤ **Ai** ≤ 109 for every 1 ≤ **i** ≤ **N**;
- **K** + 2 ≤ **N**

### Example

<pre><b>Input:</b>
3
5 3
-1 1 2 3 -1
8 3
5 5 -1 -2 3 -1 2 -2
6 0
5 -1 5 0 -1 9

<b>Output:</b>
-2
12
18

</pre>### Explanation
There are **T** = 3 test cases the input.

The first test case: **N** equals to 5, **K** equals to 3, A\[\] equals to {-1, 1, 2, 3, -1}. There is the only option: we have to choose \[1, 1\] and \[5, 5\] periods.

The second test case: **N** equals to 8, **K** equals to 3, A\[\] equals to {5, 5, -1, -2, 3, -1, 2, -2}. It is optimal to choose \[1, 2\] and \[7, 7\] periods. That is the only optimal choice that you can make.

The second test case: **N** equals to 6, **K** equals to 0, A\[\] equals to {5, -1, 5, 0, -1, 9}. It is optimal to choose \[1, 3\] and \[6, 6\] periods. But that is not the only optimal choice that you can make.
