---
category_name: school
problem_code: SMRSTR
problem_name: 'Smart Strategy'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: alex_2oo8
date_added: 20-11-2017
tags:
    - cakewalk
    - ltime54
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/SMRSTR'
time:
    view_start_date: 1511629200
    submit_start_date: 1511629200
    visible_start_date: 1511629200
    end_date: 1735669800
    current: 1514816298
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME54/mandarin/SMRSTR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME54/russian/SMRSTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME54/vietnamese/SMRSTR.pdf) as well.

Chef found a very useful open-source code for the current problem. Unfortunately, one fragment of code isn't optimized. Consider that problem: given an array **D** of size **N** and **Q** queries **X** to the following open-source code: **```
<br></br>
read X<br></br>
for i = 1..N:<br></br>
    X = floor(X / D[i])<br></br>
print X<br></br>

<pre>**Help Chef to optimize that code for all possible **X**, he will be very thankful :) ### Input
The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two integers - **N** and **Q**. The second line contains array **D**. The third line contains **Q** queries - **X1**, **X2**, ..., **XQ**. 
### Output

For every test case in single line output **Q** integers - for each **Xi** output result for this query. 
### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **Xi**, **Di** ≤ **109**
- Sum of **N** over all test cases ≤ **3\*105**
- Sum of **Q** over all test cases ≤ **3\*105**

### Subtasks

- **Subtask #1: (25 points)**  sum of **N** over all test cases ≤ **3\*103** and sum of **Q** over all test cases ≤ **3\*103**
- **Subtask #2: (75 points)**  Original constraints

### Example

</pre><b>Input:</b>
2
2 3
2 3
5 100 8
3 2
2 2 2
16 8
<b>Output:</b>
0 16 1
2 1
<pre>### Explanation

**Example case 1.** \[\[5 / 2\] / 3\] = 0, \[\[100 / 2\] / 3\] = 16, \[\[8 / 2\] / 3\] = 1
