---
category_name: school
problem_code: LOSTMAX
problem_name: 'Find the Maximum Value'
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
problem_author: arpa
problem_tester: null
date_added: 28-07-2017
tags:
    - arpa
    - cakewalk
    - ltime50
editorial_url: 'https://discuss.codechef.com/problems/LOSTMAX'
time:
    view_start_date: 1501349400
    submit_start_date: 1501349400
    visible_start_date: 1501349400
    end_date: 1735669800
    current: 1514816295
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME50/mandarin/LOSTMAX.pdf), [russian](http://www.codechef.com/download/translated/LTIME50/russian/LOSTMAX.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME50/vietnamese/LOSTMAX.pdf) as well.

The Chef had a box with **N** numbers arranged inside it: **A1**, **A2**, ..., **AN**. He also had the number **N** at the front, so that he knows how many numbers are in it. That is, the box actually contains **N**+1 numbers. But in his excitement due the ongoing [IOI](http://ioi2017.org/), he started dancing with the box in his pocket, and the **N**+1 numbers got jumbled up. So now, he no longer knows which of the **N**+1 numbers is **N**, and which the actual numbers are.

He wants to find the largest of the **N** numbers. Help him find this.

### Input

- The first line of the input contains an integer **T**, denoting the number of test cases. The description of each testcase follows.
- Each of the next **T** lines will contain **N** and **N** numbers, but it is not guaranteed that **N** is the first number.

### Output

 For each test case, output a single line containing the maximum value of the **N** numbers in that testcase.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 50
- 1 ≤ **Ai** ≤ 109

### Example

<pre><b>Input:</b>
3
1 2 1
3 1 2 8
1 5 1 4 3 2

<b>Output:</b>
1
8
4
</pre>### Explanation

**Test case 1:**

 **N** = 2 and the numbers are {1, 1}. The maximum among these 2 numbers is 1, and hence the output is 1.

**Test case 2:**

 **N** = 3 and the numbers are {1, 2, 8}. The maximum among these 3 numbers is 8, and hence the output is 8.

**Test case 3:**

 **N** = 5 and the numbers are {1, 1, 4, 3, 2}. The maximum among these 5 numbers is 4, and hence the output is 4.
