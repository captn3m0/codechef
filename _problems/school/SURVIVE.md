---
category_name: school
problem_code: SURVIVE
problem_name: 'Survive in ChocoLand'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sidhant007
problem_tester: kingofnumbers
date_added: 20-01-2018
tags:
    - cook90
    - easy
    - greedy
    - sidhant007
editorial_url: 'https://discuss.codechef.com/problems/SURVIVE'
time:
    view_start_date: 1516559400
    submit_start_date: 1516559400
    visible_start_date: 1516559400
    end_date: 1735669800
    current: 1525454391
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK90/mandarin/SURVIVE.pdf), [Russian](http://www.codechef.com/download/translated/COOK90/russian/SURVIVE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK90/vietnamese/SURVIVE.pdf) as well.

You are a poor person in ChocoLand. Here, people eat chocolates daily instead of normal food. There is only one shop near your home; this shop is closed on Sunday, but open on all other days of the week. You may buy **at most one** box of **N** chocolates from this shop on each day when it is open.

Currently, it's Monday, and you need to survive for the next **S** days (including the current day). You have to eat **K** chocolates everyday (including the current day) to survive. Do note that you are allowed to buy the a chocolate box and eat from it on the same day.

Compute the minimum number of days on which you need to buy from the shop so that you can survive the next **S** days, or determine that it isn't possible to survive.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains 3 integers **N**, **K** and **S** denoting the number of chocolates in a box, the number of chocolates you have to eat everyday to survive and the number of days you need to survive.

### Output

For each test case, print a single line containing one integer — the minimum number of days on which you need to buy from the shop to survive, or -1 if you will not be able to survive **S** days.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 100
- 1 ≤ **K** ≤ 100
- 1 ≤ **S** ≤ 1000

### Example

<pre><b>Input:</b>
2
16 2 10
50 48 7

<b>Output:</b>
2
-1
</pre>### Explanation

**Example case 1:** One possible solution is to buy a box on day 1 (Monday); it's sufficient to eat from this box up to day 8 (Monday) inclusive. Now, on day 9 (Tuesday), you buy another box and use the chocolates in it to survive days 9 and 10.

**Example case 2:** You will not be able to survive even if you buy from the shop everyday except every 7-th day.
