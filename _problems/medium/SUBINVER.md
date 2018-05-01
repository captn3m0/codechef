---
category_name: medium
problem_code: SUBINVER
problem_name: SubInversing
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: gainullinildar
problem_tester: melfice
date_added: 26-05-2017
tags:
    - gainullinildar
    - hashes
    - ltime48
    - medium
    - persistence
    - segment
editorial_url: 'https://discuss.codechef.com/problems/SUBINVER'
time:
    view_start_date: 1495899840
    submit_start_date: 1495899840
    visible_start_date: 1495899840
    end_date: 1735669800
    current: 1497284442
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME48/mandarin/SUBINVER.pdf), [Russian](http://www.codechef.com/download/translated/LTIME48/russian/SUBINVER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME48/vietnamese/SUBINVER.pdf) as well.

You initially start with a binary string S0 which is of length **N** and has all 0s. You are then given **U** updates, which keep transforming the string. The i-th update transforms the string Si-1 into Si, and hence after all the **U** updates you will be left with SU.

A single update is of the form (**Li**, **Ri**), which means that all the 1s in the range \[**Li**, **Ri**\] (both end points included) should be changed into 0s, and all the 0s in that range should be changed to 1s.

You need to find out which among the **U**+1 binary strings: S0, S1, .., SU, is lexicographically the largest, and print that string.

### Input

- The first line of the input contains two integers, **N**, and **U**, denoting the length of the string and number of updates respectively.
- The i-th of the next **U** lines contains two integers, **Li** and **Ri**, which denotes that the i-th update is to swap all the values in the string which fall between the indices **Li** and **Ri** (both inclusive).
### Output

Output a single line containing one binary string - the lexicographically largest string among the **U**+1 strings.

### Constraints

- 1 ≤ **N, U** ≤ 100,000
- 1 ≤  **Li**  ≤  **Ri**  ≤ **N**

### Subtasks

- Subtask #1 (20 points): 1 ≤ **N** ≤ 2000
- Subtask #2 (80 points): Original constraints.

### Example

 
<pre><b>Input:</b>
10 10
9 10
6 10
9 10
1 8
3 5
3 3
3 4
3 9
4 8
7 7

<b>Output:</b>
1111100011
</pre>### Explanation

Let us see what happens in each operation:

<pre>
</pre>12. S0 = 0000000000
13. After the update, \[9, 10\], it becomes S1 = 0000000011
14. After the update, \[6, 10\], it becomes S2 = 0000011100
15. After the update, \[9, 10\], it becomes S3 = 0000011111
16. After the update, \[1, 8\], it becomes S4 = 1111100011
17. After the update, \[3, 5\], it becomes S5 = 1100000011
18. After the update, \[3, 3\], it becomes S6 = 1110000011
19. After the update, \[3, 4\], it becomes S7 = 1101000011
20. After the update, \[3, 9\], it becomes S8 = 1110111101
21. After the update, \[4, 8\], it becomes S9 = 1111000001
22. After the update, \[7, 7\], it becomes S10 = 1111001001
The lexicographically largest among these is 1111100011 and so, that is the answer.
