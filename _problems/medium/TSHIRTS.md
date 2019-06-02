---
category_name: medium
problem_code: TSHIRTS
problem_name: 'Little Elephant and T-Shirts'
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
problem_author: darkshadows
problem_tester: null
date_added: 21-02-2014
tags:
    - aug14
    - darkshadows
    - dp
    - dynamic
    - easy
editorial_url: 'http://discuss.codechef.com/problems/TSHIRTS'
time:
    view_start_date: 1407749400
    submit_start_date: 1407749400
    visible_start_date: 1407749400
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG14/mandarin/TSHIRTS.pdf) and [Russian](http://www.codechef.com/download/translated/AUG14/russian/TSHIRTS.pdf).

Little Elephant and his friends are going to a party. Each person has his own collection of T-Shirts. There are **100** different kind of T-Shirts. Each T-Shirt has a unique id between **1** and **100**. No person has two T-Shirts of the same ID.

They want to know how many arrangements are there in which no two persons wear same T-Shirt. One arrangement is considered different from another arrangement if there is at least one person wearing a different kind of T-Shirt in another arrangement.

### Input

First line of the input contains a single integer  **T**  denoting number of test cases. Then **T** test cases follow.

For each test case, first line contains an integer **N**, denoting the total number of persons. Each of the next **N** lines contains at least **1** and at most **100** space separated distinct integers, denoting the ID's of the T-Shirts **i**th person has.

### Output

For each test case, print in single line the required number of ways modulo **1000000007 = 109+7**.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 10**

### Example

<pre><b>Input:</b>
2
2
3 5
8 100
3
5 100 1
2
5 100

<b>Output:</b>
4
4
</pre>
### Explanation

For the first case, **4** possible ways are **(3,8)**, **(3,100)**, **(5,8)** and **(5,100)**.For the second case, **4** possible ways are **(5,2,100)**, **(100,2,5)**, **(1,2,100)**, and **(1,2,5)**.
