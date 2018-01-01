---
category_name: easy
problem_code: XORSUB
problem_name: 'XOR with Subset'
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
problem_tester: xiaodao
date_added: 30-09-2014
tags:
    - bit
    - darkshadows
    - dec14
    - dynamic
    - simple
editorial_url: 'http://discuss.codechef.com/problems/XORSUB'
time:
    view_start_date: 1418643194
    submit_start_date: 1418643194
    visible_start_date: 1418643000
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/DEC14/mandarin/XORSUB.pdf) and [Russian](/download/translated/DEC14/russian/XORSUB.pdf).

You have an array of integers **A1, A2, ..., AN**. The function **F(P)**, where **P** is a [subset](http://en.wikipedia.org/wiki/Subset) of **A**, is defined as the [XOR](http://en.wikipedia.org/wiki/Exclusive_or) (represented by the symbol **⊕**) of all the integers present in the subset. If **P** is empty, then **F(P)**=0.

Given an integer **K**, what is the maximum value of **K** **⊕** **F(P)**, over all possible subsets **P** of **A**?

### Input

The first line contains **T**, the number of test cases. Each test case consists of **N** and **K** in one line, followed by the array **A** in the next line.

### Output

For each test case, print the required answer in one line.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **K**, **Ai** ≤ **1000**
- Subtask 1 (30 points):**1** ≤ **N** ≤ **20**
- Subtask 2 (70 points):**1** ≤ **N** ≤ **1000**
 
### Example

 ```
<b>Input:</b>
1
3 4
1 2 3

<b>Output:</b>
7

<pre>### Explanation
Considering all subsets:

 F({}) = 0 ⇒ 4 **⊕** 0 = 4

 F({1}) = 1 ⇒ 4 **⊕** 1 = 5

 F({1,2}) = 3 ⇒ 4 **⊕** 3 = 7

 F({1,3}) = 2 ⇒ 4 **⊕** 2 = 6

 F({1,2,3}) = 0 ⇒ 4 **⊕** 0 = 4

 F({2}) = 2 ⇒ 4 **⊕** 2 = 6

 F({2,3}) = 1 ⇒ 4 **⊕** 1 = 5

 F({3}) = 3 ⇒ 4 **⊕** 3 = 7

 Therefore, the answer is 7.
