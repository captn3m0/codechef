---
category_name: easy
problem_code: PPTEST
problem_name: 'Polo the Penguin and the Test'
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
problem_author: witua
problem_tester: rustinpiece
date_added: 23-09-2013
tags:
    - cook39
    - dynamic
    - easy
    - witua
editorial_url: 'http://discuss.codechef.com/problems/PPTEST'
time:
    view_start_date: 1382293800
    submit_start_date: 1382293800
    visible_start_date: 1382293800
    end_date: 1735669800
    current: 1493558176
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/COOK39/russian/PPTEST.pdf)

Polo, the Penguin, has a lot of tests tomorrow at the university.

He knows that there are **N** different questions that will be on the tests. For each question **i** (**i = 1..N**), he knows **C\[i\]** - the number of tests that will contain this question, **P\[i\]** - the number of points that he will get for correctly answering this question on each of tests and **T\[i\]** - the amount of time (in minutes) that he needs to spend to learn this question.

Unfortunately, the amount of free time that Polo has is limited to **W** minutes. Help him to find the maximal possible total number of points he can get for all tests if he studies for no more than **W** minutes.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains the pair of integers **N** and **W**, separated by a space. The following **N** lines contain three space-separated integers **C\[i\]**, **P\[i\]** and **T\[i\]** (**i = 1..N**).

### Output

For each test case, output a single line containing the answer to the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **100**
- **1** ≤ **C\[i\], P\[i\], T\[i\]** ≤ **100**
- **1** ≤ **W** ≤ **100**

### Example

<pre><b>Input:</b>
1
3 7
1 2 3
2 3 5
3 3 3

<b>Output:</b>
11
</pre>### Explanation

**Example case 1.** The best choice is to learn the first and the third questions and get **1\*2 + 3\*3 = 11** points.
