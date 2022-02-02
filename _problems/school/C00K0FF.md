---
category_name: school
problem_code: C00K0FF
problem_name: 'Chef and Cook-Off Contests'
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
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: null
date_added: 22-09-2017
tags:
    - cakewalk
    - ltime52
    - r_64
editorial_url: 'https://discuss.codechef.com/problems/C00K0FF'
time:
    view_start_date: 1232516621
    submit_start_date: 1232516621
    visible_start_date: 1232516621
    end_date: 1735669800
    current: 1514817146
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME52/mandarin/C00K0FF.pdf), [russian](http://www.codechef.com/download/translated/LTIME52/russian/C00K0FF.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME52/vietnamese/C00K0FF.pdf) as well.

 Chef wants to prepare a Cook-Off contest with 5 problems chosen from a set of **N** problems. He has marked the difficulty of each problem within a range identified by one of the following strings: "cakewalk", "simple", "easy", "easy-medium", "medium", "medium-hard", "hard". According to [this page](https://www.codechef.com/problemsetting#ProblemLevel), a Cook-Off contest must have problems of the following difficulties:

- exactly one "cakewalk";
- exactly one "simple";
- exactly one "easy";
- one "easy-medium" or one "medium";
- one "medium-hard" or one "hard".

 Given the information about the **N** problems, can you advise Chef if it's possible to pick 5 problems and form a valid Cook-Off contest?

###  Input

- The first line of input contains one integer **T** denoting the number of test cases.
- **T** test cases follow.
- The first line of each test case contains a single integer **N**.
- Then **N** lines follow; the **i**-th line contains a single string **si**, denoting the difficulty of the **i**-th problem.

###  Output

 For each test case, output "Yes" if it's possible to pick 5 problems and form a valid Cook-Off contest; otherwise, output "No".

###  Constraints

- **1** ≤ **T** ≤ **100000**
- **5** ≤ **N** ≤ **100000**
- sum of **N** in all test cases ≤ **600000**
- **si** can only be one of the following strings: 
    - "cakewalk"
    - "simple"
    - "easy"
    - "easy-medium"
    - "medium"
    - "medium-hard"
    - "hard"

 Subtask #1 (11 points):

- **N** = **5**

 Subtask #2 (27 points):

- **5** ≤ **N** ≤ **15**
- **T** ≤ **100**

 Subtask #3 (62 points):

- original constraints

###  Example

<pre>
<b>Input:</b>
3
5
easy
medium
medium-hard
simple
cakewalk
7
simple
simple
medium
medium
easy-medium
cakewalk
easy
7
cakewalk
simple
easy
easy-medium
medium
medium-hard
hard

<b>Output:</b>
Yes
No
Yes

</pre>
###  Explanation

 **Example case 2:** There are neither problems of "medium-hard" level nor "hard" level, so it's impossible to form a Cook-Off contest.
