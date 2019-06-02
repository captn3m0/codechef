---
category_name: medium
problem_code: ANUCBC
problem_name: 'Cards, bags and coins'
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
problem_author: anudeep2011
problem_tester: white_king
date_added: 15-01-2014
tags:
    - anudeep2011
    - april14
    - dynamic
    - medium
editorial_url: 'http://discuss.codechef.com/problems/ANUCBC'
time:
    view_start_date: 1397468306
    submit_start_date: 1397468306
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493557477
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/APRIL14/mandarin/ANUCBC.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/ANUCBC.pdf).

### Statement

Yet another game from chef. Chef gives you **N** cards and **M** bags. Each of the **N** cards has an integer written on it. Now chef asks you to close your eyes and choose a subset of them. He then sums the numbers written on chosen cards, takes its absolute value and gives you those many coins. You win the game if you can divide these coins into **M** bags with each bag having equal share. As a first step to calculate the probability of winning, you would like to know the **number of different subsets which will make you win**. Note that all the cards are of different color, so even if 2 cards have the same number written on it, they are still considered as different cards.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
First line of each test case contains two integers **N** and **Q**. **Q** denotes the number of queries to be answered. Second line of each test case contains **N** integers, the numbers written on cards.
Following **Q** lines contain an integer **M**.

### Output

For each query output the required Answer modulo **1000000009**. Answer is the number of subsets that will ensure you win.

### Constraints

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N** ≤ **100000**
- **1** ≤ **Q** ≤ **30**
- **1** ≤ **M** ≤ **100**
- **-10^9** ≤ **Number on card** ≤ **10^9**

### Example

<pre><b>Input</b>
2
5 1
1 2 -1 4 5
9
5 2
1 2 3 4 5
5
15

<b>Output</b>
4
8
2
</pre>
### Explanation

**Test Case #1, Query #1**
{}, {1,-1}, {1,-1,4,5}, {4,5} are winning subsets. Sums are 0, 0, 9, 9 respectively.

**Test Case #2, Query #1**
{}, {5}, {1,4}, {2,3}, {1,4,5}, {2,3,5}, {1,2,3,4}, {1,2,3,4,5} are winning subsets. Sums are 0, 5, 5, 5, 10, 10, 10, 15 respectively.

**Test Case #2, Query #2**
{}, {1,2,3,4,5} are winning subsets. Sums are 0 and 15 respectively.

### Author's Note

Time Limit is not very strict (Yes, not very loose either) if correct Algorithm is used.Author's solution passes with 2 sec Time Limit (C++ solution, using scanf and printf).
Maximum Input File Size < 4MB.
