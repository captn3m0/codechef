---
category_name: medium
problem_code: COUNTWAY
problem_name: 'Sherlock Counts Ways'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: null
date_added: 27-09-2016
tags:
    - combinatorics
    - cook75
    - darkshadows
    - divide
    - fft
    - medium
time:
    view_start_date: 1477247400
    submit_start_date: 1477247400
    visible_start_date: 1477247400
    end_date: 1735669800
    current: 1493557915
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK75/mandarin/COUNTWAY.pdf), [Russian](http://www.codechef.com/download/translated/COOK75/russian/COUNTWAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK75/vietnamese/COUNTWAY.pdf) as well.

Watson gives an array of colored balls to Sherlock. All balls are identical in shape and size and hence, two balls with same color are indistinguishable. He gives to Sherlock an integer **K** and wants Sherlock to choose a bundle of **K** balls from the array. Sherlock is intrigued by the problem and starts wondering in how many different ways he can choose **K** such balls. Two ways are different if for any color **c**, there are different count of balls with color **c** in two chosen bundles.

### Input

First line contains **N** and **K** followed by **N** integers in next line denoting **A1, A2, ..., AN** - colors of the balls.

### Output

Output the required answer modulo **13313** in one line.

### Constraints

- **1** ≤ **K** ≤ **N** ≤ **2\*105**
- **1** ≤ **Ai** ≤ **2\*105**

### Example

```
<b>Input 1:</b>
4 2
3 2 2 3 

<b>Output 1:</b>
3

<b>Input 2:</b>
5 1
2 2 2 2 2

<b>Output 2:</b>
1

```
### Explanation

Input 1:
Three possible ways are:

- \[2, 2\]
- \[3, 3\]
- \[2, 3\]


Input 2:
Only possible way is \[2\].