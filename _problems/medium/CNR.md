---
category_name: medium
problem_code: CNR
problem_name: 'Combinatorial Numbers'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: vineetpaliwal
problem_tester: null
date_added: 6-10-2013
tags:
    - arithmetic
    - big
    - binary
    - combinations
    - easy
    - ltime05
    - permutations
    - vineetpaliwal
editorial_url: 'http://discuss.codechef.com/problems/CNR'
time:
    view_start_date: 1382862600
    submit_start_date: 1382862600
    visible_start_date: 1382862600
    end_date: 1735669800
    current: 1493557588
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME05/russian/CNR_1.pdf)

Chef has a special affection for sets of binary strings of equal length which have same numbers of **1's**. Given three integers **n**, **k** and **m**, your task is to find the the lexicographically **mth** smallest string among strings which have length n and have **k** **1's**. If no such string exists output **-1**.

### Tips: 

 To see what lexicographic order means . See [http://en.wikipedia.org/wiki/Lexicographical\_order](http://en.wikipedia.org/wiki/Lexicographical_order)

### Input

Input description.

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows:
- The first and only line of each test case contains three space separated integers **N** ,  **K**  and  **M**

### Output

For each test case output the answer on a separate line .

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **350**
- **1** ≤ **K** ≤ **N**

### Example

<pre><b>Input:</b>
1
3 2 2

<b>Output:</b>
101
</pre>
### Explanation

**Example case 1.** The set of strings in lexicographic order is "011", "101", and "110"

###  Scoring 

**Subtask 1 (41 point):**

- **1** ≤ **N** ≤ **20**

**Subtask 2 (59 points):**

- **1** ≤ **N** ≤ **350**
