---
category_name: easy
problem_code: CO92SUBW
problem_name: 'Chef Goes to the Cinema'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: null
date_added: 15-03-2018
tags:
    - cook92
    - easy
    - implementation
    - kefaa
editorial_url: 'https://discuss.codechef.com/problems/CO92SUBW'
time:
    view_start_date: 1521397800
    submit_start_date: 1521397800
    visible_start_date: 1521397800
    end_date: 1735669800
    current: 1525198933
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK92/mandarin/CO92SUBW.pdf), [Russian](http://www.codechef.com/download/translated/COOK92/russian/CO92SUBW.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK92/vietnamese/CO92SUBW.pdf) as well.

Chef lives in Chefcity. Chefcity can be represented as a straight line with Chef's house at point 0 on this line. There is an infinite number of subway stations in Chefcity, numbered by positive integers. The first station is located at point 1 and for each **i** ≥ 1, the distance between stations **i** and **i+1** is equal to **i+1**. (Station **i+1** is always located at a higher coordinate than station **i**, i.e., the subway stations are located at points 1, 3, 6, 10, 15 etc.)

Subway trains in Chefcity allow Chef to move between any pair of adjacent stations in one minute, regardless of the distance between them. Chef can also move by walking; his walking speed is one unit of distance in one minute. Chef can enter or exit the subway at any station.

Chef has decided to go to the cinema. The only cinema in Chefcity is located at point **X**. (Note that the cinema can be placed at the same point as a subway station.) Help Chef determine the minimum possible time required to get to the cinema from his house.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains a single integer **X**.

### Output

For each test case, print a single line containing one integer - the minimum possible travel time.

### Constraints

- 1 ≤ **T** ≤ 200
- 1 ≤ **X** ≤ 109

### Example

<pre><b>Input:</b>

4
1
2
3
9

<b>Output:</b>

1
2
2
5
</pre>
### Explanation

**Example case 4:** Chef will walk from **x** = 0 to **x** = 1 in one minute, then he will enter the subway and move from station 1 (at **x** = 1) to station 2 (at **x** = 3) in one minute, then from station 2 to station 3 (at **x** = 6) in one minute, from station 3 to station 4 (at **x** = 10) in one minute, and finally, he will walk from **x** = 10 to **x** = 9 in one minute, which makes the total travel time 5 minutes.
