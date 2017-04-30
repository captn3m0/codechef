---
category_name: medium
problem_code: COINCHNG
problem_name: 'Paying optimally'
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
max_timelimit: '0.3 - 3'
source_sizelimit: '50000'
problem_author: utkarsh_lath
problem_tester: Rubanenko‎
date_added: 12-07-2013
tags:
    - binary
    - greedy
    - ltime02
    - medium
    - utkarsh_lath
editorial_url: 'http://discuss.codechef.com/problems/COINCHNG'
time:
    view_start_date: 1375002000
    submit_start_date: 1375002000
    visible_start_date: 1375002000
    end_date: 1735669800
    current: 1493557596
layout: problem
---
All submissions for this problem are available.The currency of Dholakpur is pretty awesome. There notes have values  **1, C, C2, C3 ...** . The sequence goes on till infinity, so notes have unbounded values.

Little Bheem is a resident of Dholakpur and runs a Laddu shop. He always keeps infinite number of notes of each value with him, but pays using minimum number of notes. For example, if **C** = 5 and he has to pay 32 rupees, he will pay using one note of value 25, one note of value 5, and two notes of value 1. He cannot pay 32 rupees with fewer than four notes.

Bheem is wondering what is **Kth** smallest amount which, if paid using fewest possible notes, would require exactly **S** notes.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
Each test is descried by exactly one lines, containing three space separated integers **C**, **S** and **K**.

### Output

For each test case, output a separate line containing the required answer.

### Constraints

- 1 ≤ **T** ≤ 100
- 2 ≤ **C** ≤ 50
- 0 ≤ **S** ≤ 500
- 1 ≤ **K** ≤ 1018
- The answer will be at most 1018

### Subtask 1 (20 points)

**K = 1**

the answer will be at most 40000000

Time limit is 3 seconds./>/>

### Subtask 2 (20 points)

**C = 2**

the answer will be at most 40000000

Time limit is 3 seconds./>/>

### Subtask 3 (20 points)

**K** is small. Formally, **(K-1)\*(C-1) ≤ S**

the answer will be at most 40000000

Time limit is 3 seconds./>/>

### Subtask 4 (20 points): 

the answer will be at most 40000000

Time limit is 3 seconds./>

### Subtask 5 (20 points): 

 _No special constraints_ 

Time limit is 0.3 seconds./>

### Sample Input

3

5 1 3

4 3 5

5 4 4
/>/>/>/>

### Sample Output

25

18

16
/>/>/>

### Explanation

For test case# 1, all the amounts which require exactly 1 note are: 1, 5, 25, 125 ...

For test case# 2, all the amounts which require exactly 3 notes are: 3, 6, 9, 12, 18 ... 

For test case# 3, all the amounts which require exactly 4 notes are: 4, 8, 12, 16 ... 
/>/>/>