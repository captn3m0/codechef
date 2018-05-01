---
category_name: medium
problem_code: QSET
problem_name: 'Queries on the String'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: shiplu
date_added: 28-05-2014
tags:
    - darkshadows
    - jan15
    - medium
    - number
    - segment
editorial_url: 'http://discuss.codechef.com/problems/QSET'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493557868
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/QSET.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/QSET.pdf).

You have a string of **N** decimal digits, denoted by numbers **A1,A2, ..., AN**.

Now you are given **M** queries, each of whom is of following two types.
/>

- Type 1: **1 X Y**: Replace **AX** by **Y**.
- Type 2: **2 C D**: Print the number of sub-strings divisible by 3 of the string denoted by **AC,AC+1 ...
  AD**.
  
  
  Formally, you have to print the number of pairs **(i,j)** such that the string **Ai,Ai+1...Aj**,
  **(C ≤ i ≤ j ≤ D)**, when considered as a decimal number, is divisible by 3. />

### Input

- There is only one test case.
- First line of input contains two space separated integers **N, M**.
- Next line contains a string of **N** digits, denoting string **A**.
- For next **M** lines, each line contains a query.
- Each query is given by three space separated integers.
- The first integer denotes type of the query. For each query of type 1, next two integers denote **Xi, Yi**.
  For each query of type 2, next two integers denote **Ci, Di**.

### Output

For each query of type 2, print the required answer in a single line.

### Constraints

- **0 ≤ Ai ≤ 9**
- **1** ≤ **Xi** ≤ **N**
- 0 ≤ **Yi** ≤ **9**
- **1** ≤ **Ci** ≤ **Di** ≤ **N**

### Subtasks

- Subtask #1 (10 points): **1** ≤ **N, M** ≤ **103** and only type 2 queries.
- Subtask #2 (15 points): **1** ≤ **N, M** ≤ **103**
- Subtask #3 (20 points): **1** ≤ **N, M** ≤ **105** and only type 2 queries
- Subtask #4 (55 points): **1** ≤ **N, M** ≤ **105**

### Example

<pre><b>Input:</b>
5 3
01245
2 1 3
1 4 5
2 3 5

<b>Output:</b>
3
1
</pre>### Explanation

For first query, the sub-strings S\[1,1\]="0", S\[1,3\]="012" and S\[2,3\]="12" are divisible by 3.
After second query, the string A becomes "01255".
For third query, only sub-string S\[3,5\]="255" is divisible by 3.
