---
category_name: easy
problem_code: CHEFSTON
problem_name: 'Chef and Stones'
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
problem_author: berezin
problem_tester: shiplu
date_added: 1-11-2014
tags:
    - basic
    - berezin
    - cakewalk
    - jan15
editorial_url: 'http://discuss.codechef.com/problems/CHEFSTON'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1493558125
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/CHEFSTON.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/CHEFSTON.pdf).

Chef is playing a game. Currently in the game, he is at a field full of stones. There are total **N** kinds of
stones. There is unlimited supply of each kind of stone.

Chef knows that one stone of kind **i** needs **Ai** minutes to pick it from the ground and it will give Chef a profit of
**Bi** Rs.

Chef has **K** minutes of free time. During this free time, Chef want to pick stones so as to maximize his profit.
But he can not pick stones of different kinds, he has to pick stones of a single kind.

Please help Chef to find the maximal possible profit.

### Input

- First line contains single integer **T** denoting the number of test cases.
- First line of each test case contains two integers **N** and **K**.
- Next line contains **N** integers **Ai** denoting the time needed to pick one stone of kind **i**.
- Next line contains **N** integers **Bi** denoting the profit due to picking **i**thth stone.

### Output

- For each test case, print a single line containing maximal possible profit.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **K** ≤ **109**
- **1** ≤ **Ai, Bi** ≤ **109**

### Subtasks

- Subtask **N** ≤ **5**, **T** ≤ **2** Points: 30
- Subtask **N** ≤ **105**, **T** ≤ **5** Points: 70

### Example

<pre><b>Input:</b>
1
3 10
3 4 5
4 4 5

<b>Output:</b>
12

</pre>### Explanation
If Chef picks stones of first kind he can pick **3** stones, he will get a profit of **3\*4 = 12** Rs. 
If Chef picks stones of second kind he can pick **2** stones, he will get a profit of **2\*4 = 8** Rs. 
If Chef picks stones of third kind he can pick **2** stones, he will get a profit of **2\*5 = 10** Rs.

So the maximum possible profit is 12.
