---
category_name: medium
problem_code: CHXORR
problem_name: 'Chef and Pie'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: furko
problem_tester: balajiganapath
date_added: 7-09-2013
tags:
    - bitwise
    - easy
    - furko
    - greedychxorr
    - ltime04
editorial_url: 'http://discuss.codechef.com/problems/CHXORR'
time:
    view_start_date: 1380445200
    submit_start_date: 1380445200
    visible_start_date: 1380445200
    end_date: 1735669800
    current: 1493557581
layout: problem
---
All submissions for this problem are available.Chef loves to cook pies. But more than that, he loves to play with numbers. And this task is one of his favorites. The goal is very simple: you need to select **3** numbers from an array of **N** numbers, such that their **XOR** will be maximal.

**XOR** - exclusive or (**xor** - in Pascal, **^** - in C++)

### Input

 The first line of input contains an integer **T** denoting the number of test cases. The first line of each test case contains a positive integer **N** denoting the number of integers in the given array. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** containing the elements of the array.

### Output

 For each test case, output a single line containing the maximal **XOR** of **3** chosen numbers in the array. Note, that you have to choose exactly **3** numbers.

### Constraints

- **1** ≤ **T** ≤ **3**
- **3** ≤ **N** ≤ **2000**
- **1** ≤ **Ai** ≤ **109**

### Example

<pre><b>Input:</b>
2
3
1 2 3
3
2 2 3

<b>Output:</b>
0
3
</pre>### Scoring

Subtask 1 (15 points): **3 ≤ N ≤ 100** 

Subtask 2 (10 points): **1 ≤ Ai ≤ 50** 

Subtask 3 (75 points): Look at constraints.
