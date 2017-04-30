---
category_name: hard
problem_code: WAYPA
problem_name: 'Trip and Palindromes'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: gomelfk
problem_tester: xcwgf666
date_added: 1-11-2015
tags:
    - binary
    - centroid
    - dec15
    - gomelfk
    - hard
    - hashing
editorial_url: 'http://discuss.codechef.com/problems/WAYPA'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493556895
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/WAYPA.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/WAYPA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/WAYPA.pdf) as well.

Serega is an avid traveller. He has already visited numerous exotic places, and now wants to embark on a journey to Treeland. There are **N** cities in Treeland that Serega wants to visit. Also, roads have been laid between some **N-1** pairs of cities in Treeland. Roads are bidirectional, and there exists a unique path between any two Treeland cities.

Each of Treeland's roads has its own class, wich is specified using a single digit. Serega's journey is a path between some cities, i.e. he never visits one city more than once. But Serega wants to select a path such that the sequence of classes on the path is a palindrome. Of course, Serega wants to visit as many cities as possible. Please help Him.

### Input

The first line of input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each case contains a single integer **N**. The next **N-1** lines contain the roads. Each line contains three integers **v**, **u** and **c**, meaning that there is a road of class **c** between the **v**th and **u**th (assuming 1-indexing) cities of Treeland.

### Output

For each test case, you should output the maximum number of cities that Serega can visit.

### Constraints

- **1 ≤ T ≤ 3\*105**
- **1 ≤ N ≤ 105**
- Sum of N over all test cases in a single file will not be greater then **3\*105**
- **0 ≤ c ≤ 9**
- **1 ≤ u, v ≤ N**
- The roads form a tree.

### Subtasks

- Subtask #1 (15 points): **1 ≤ N ≤ 102**
- Subtask #2: (85 points): **1 ≤ N ≤ 105**

### Example

```
<b>Input:</b>
1
8
1 2 1
1 3 0
3 4 1
4 5 2
1 6 0
6 7 1
7 8 2

<b>Output:</b>
7

```
### Explanation

Sequence of classes on the path between the cities **5** and **8** is **210012**.