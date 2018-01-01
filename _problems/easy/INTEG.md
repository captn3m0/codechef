---
category_name: easy
problem_code: INTEG
problem_name: 'Chef and Integers '
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
problem_author: furko
problem_tester: xcwgf666
date_added: 18-06-2013
tags:
    - furko
    - sept13
    - simple
editorial_url: 'http://discuss.codechef.com/problems/INTEG'
time:
    view_start_date: 1379324264
    submit_start_date: 1379324264
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1493558153
layout: problem
---
All submissions for this problem are available. Chef has an array of **N** integers. He wants to play a special game. In this game he needs to make all the integers in the array greater than or equal to .

Chef can use two types of operations. The first type is to increase all the integers of the given array by **1**, but it costs **X** coins. The operation of the second type is to add **1** to only one integer of the given array and to use this operation you need to pay **1** coin. You need to calculate the minimal cost to win this game (to make all integers greater than or equal to )

### Input

The first line of the input contains an integer **N** denoting the number of elements in the given array. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the given array. The third line contains number **X** - cost of the first type operation.

### Output

For each test case, output a single line containing minimal cost required to make all the integers greater than or equal to zero.

### Constraints

- **1** ≤ **N** ≤ **105**
- **-109** ≤ **Ai** ≤  **109**
- ≤ **X**  ≤ **109**

### Example

<pre><b>Input:</b>
3
-1 -2 -3
2

<b>Output:</b>
5

</pre>### Explanation
**Example case 1:** Use the first type operation twice and the second type once.
