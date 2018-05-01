---
category_name: medium
problem_code: CHEFINS
problem_name: 'Chef and Numbers'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: tuananh93
date_added: 9-12-2016
tags:
    - cook77
    - fft
    - medium
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CHEFINS'
time:
    view_start_date: 1482085800
    submit_start_date: 1482085800
    visible_start_date: 1482085800
    end_date: 1735669800
    current: 1493557535
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK77/mandarin/CHEFINS.pdf), [Russian](http://www.codechef.com/download/translated/COOK77/russian/CHEFINS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFINS.pdf) as well.

You are given some integers in the range between **1** and **N**. You have to answer **Q** queries, each query is given by number **X**, you have to tell whether you can write number **X** as a sum of allowed numbers. You can use an allowed integer zero or multiple times.

### Input

The first line contains three integer numbers **N** and **K**, **Q**, where **K** denotes number of allowed integers, **Q** denotes number of queries. The second line containing **K** distinct integers **F**i - allowed numbers.

Each of the next **Q** lines containing one integer number **X**.

### Output

For each query output "Yes" or "No" (without quotess) in separate line.

### Constraints

- **1** ≤ **N**, **K**, **Q**, **X** ≤ **200,000**
- **1** ≤ **Fi** ≤ **N**

### Example

<pre><b>Input:</b>
4 2 3
2 4
2
8
5

<b>Output:</b>
Yes
Yes
No
</pre>### Explanation

**Example case 1.** 2 = 2

**Example case 2.** 8 = 2 + 2 + 4

**Example case 3.** 5 can't be sum of any number of addends 2 and 4
