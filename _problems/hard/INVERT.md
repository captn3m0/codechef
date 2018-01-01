---
category_name: hard
problem_code: INVERT
problem_name: 'Gaming Inversion'
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
max_timelimit: '1 - 5'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: minimario
date_added: 9-08-2015
tags:
    - binary
    - binary
    - data
    - hard
    - ltime27
    - ma5termind
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/INVERT'
time:
    view_start_date: 1440923400
    submit_start_date: 1440923400
    visible_start_date: 1440923400
    end_date: 1735669800
    current: 1493556738
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME27/mandarin/INVERT.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME27/russian/INVERT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME27/vietnamese/INVERT.pdf)

Devu and Churu like to play mathematical games. Today, Devu got hold of a 1-indexed array **A** consisting of **N** integers while Churu has an empty array **B**. They have decided to play with these arrays and have agreed to make their moves turn by turn. Devu in his turn will choose a contiguous segment from his array, i.e, 2 integers **L** and **R** such that **1 ≤ L ≤ R ≤ |A|**, where **|A|** denotes the current size of array **A**. He then inserts this contiguous subarray into Churu’s array at some position **K** such that **1 ≤ K ≤ |B|+1** where **|B|** denotes the current size of array **B**.

**For example:** If Devu inserts a subarray of size **S** at position **X** into Churu’s array, then all the elements that were present at position **Z** such that **X ≤ Z ≤ |B|** will get shifted towards right by **S** positions. Devu’s array would then get rearranged to accumulate the space that was left vacant by removing the segment **L** to **R** of his array.

In Churu's turn, he has to report the total number of inversions in array **B** after each of Devu's move.

Devu is playing well during each of his moves but Churu is getting slower as the number of elements are increasing in his array **B**. Therefore, he asks for your help.

You are provided with Devu's array **A** and a sequence of all his moves. You have to report the inversion count in churu's array **B** after each of Devu's move.

**Note :** 
/>

In any arbitrary array **C**, a pair of indices **x** and **y** such that **x < y** and **C\[x\] > C\[y\]** is known as an inversion.

### Input

First line of input contains two space separated integers **N** and **Q** denoting the size of an array **A** and number of Devu's moves. Next lines of input contains **N** space separated integers denoting the elements of Devu's array. Next **Q** lines contain the **Q** moves, one move per line. Each move consists of three integers **L**, **R** and **K** such that **1 ≤ L ≤ R ≤ |A|** and **1 ≤ K ≤ |B|+1** holds.

### Output

After each of the Devu's move, report the required answer for Churu.

### Constraints

**1. 1 ≤ N, Q ≤ 105** 
**1. 1 ≤ Ai ≤ 109** 
### Subtasks

- **subtask 1:** 1 ≤ N, Q ≤ 2000 **( 30 pts )**, TL = 1 sec
- **subtask 2:** 1 ≤ N, Q ≤ 105, K = |B|+1 where |B| denotes the current size of array B **( 30 pts )**
- **subtask 3:** 1 ≤ N, Q ≤ 105 **( 40 pts )**

### Example

**Input**

<pre>
5 4
4 3 2 5 1
1 2 1
3 3 2
2 2 3
1 1 2

</pre>**Input**
<pre>
1
2
3
5

</pre>### Explanation
- After Q1, **A** = {2, 5, 1}, **B** = {4, 3}. Therefore, inversion count in **B** is 1.
- After Q2, **A** = {2, 5}, **B** = {4, 1, 3}. Therefore, inversion count in **B** is 2.
- After Q3, **A** = {2}, **B** = {4, 1, 5, 3}. Therefore, inversion count in **B** is 3.
- After Q4, **A** = {}, **B** = {4, 2, 1, 5, 3}. Therefore, inversion count in **B** is 5.
