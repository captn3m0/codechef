---
category_name: school
problem_code: FRUITS
problem_name: 'Chef and Fruits'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: antoniuk1
date_added: 6-01-2016
tags:
    - ad
    - cakewalk
    - cook66
    - ma5termind
editorial_url: 'http://discuss.codechef.com/problems/FRUITS'
time:
    view_start_date: 1453660200
    submit_start_date: 1453660200
    visible_start_date: 1453660200
    end_date: 1735669800
    current: 1492507579
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK66/mandarin/FRUITS.pdf), [Russian](http://www.codechef.com/download/translated/COOK66/russian/FRUITS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK66/vietnamese/FRUITS.pdf) as well.

Today is Chef's birthday. His mom has surprised him with truly fruity gifts: **2 fruit baskets**. The first basket contains **N** apples, and the second one contains **M** oranges. Chef likes apples and oranges very much but he likes them equally, and therefore, wants to have the minimum possible difference between the number of apples and oranges he has. To do so, he can purchase **1** apple or **1** orange by paying exactly **1** gold coin (that's some expensive fruit, eh?). Chef can purchase fruits at most **K** times (as he has _only_ **K** gold coins in his pocket) to make the difference the minimum possible.

Our little Chef is busy in celebrating his birthday to the fullest, and therefore, he has handed this job to his best friend — **you**. Can you help him by finding the minimum possible difference he can achieve between the number of apples and orange he owns?

### Input

The first line of input contains a single integer **T** denoting the number of test cases. The first and only line of each test case contains **3** space separated integers — **N**, **M** and **K** — denoting the number of apples, number of oranges, and number of gold coins our little Chef has.

### Output

For each test case, output the minimum possible difference between the number of apples and oranges that Chef can achieve.

### Constraints

**1. 1 ≤ T ≤ 100** **1. 1 ≤ N, M, K ≤ 100** 
### Example

**Input**```

3
3 4 1
5 2 1
3 4 3

<b>Output</b>
0
2
0

```
### Explanation

- **Test 1:** Chef will buy 1 apple by paying 1 gold coin and will have equal number of apples and oranges.
- **Test 2:** Chef will buy 1 orange by paying 1 gold coin and will have 5 apples and 3 oranges.