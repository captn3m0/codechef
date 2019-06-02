---
category_name: hard
problem_code: CHANGE
problem_name: 'Making Change'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 2-01-2013
tags:
    - advanced
    - hard
    - march13
    - maths
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/CHANGE'
time:
    view_start_date: 1363000435
    submit_start_date: 1363000435
    visible_start_date: 1363000281
    end_date: 1735669800
    current: 1493556633
layout: problem
---
All submissions for this problem are available.Chef recently visited a strange land with strange currency. One day Chef needed to make change to pay for an item with coins, and wondered how many ways it could be done, assuming an infinite supply of each type of coins. Two ways are considered different if there is some coin that appears a different number of times in each sum. The answer may be very large, so Chef only needs to know the remainder when the answer is divided by **1000000007** (**109 + 7**).

Chef noticed something curious about the currency in question: not only do all coins have different denominations, but no two denominations of coin share any common factor other than 1.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two space-separated integers **N** and **C**, denoting the number of different coin types and the desired total coinage, respectively. The second line contains **N** space-separated integers **D1, D2, ..., DN**, denoting the denominations of the coins.

### Output

For each test case, output on a separate line the number of ways to make the desired amount of change, modulo **1000000007**.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **50**
- **1** ≤ **C** ≤ **10100**
- **1** ≤ **Di** ≤ **500**
- All **Di** are pairwise distinct and pairwise relatively prime.

### Example

<pre>
<b>Input:</b>
3
3 16
3 4 5
2 2000000014
1 2
3 380134
23 5 2

<b>Output:</b>
4
1
314159265
</pre>
### Explanation

**Example case 1.** There are 4 ways to make a total of 16 using coins with values 3, 4 and 5:

- 16 = 4 + 4 + 4 + 4
- 16 = 3 + 4 + 4 + 5
- 16 = 3 + 3 + 5 + 5
- 16 = 3 + 3 + 3 + 3 + 4

**Example case 2.** There are 1000000008 ways to make the desired change. The remainder when divided by 1000000007 is 1.
