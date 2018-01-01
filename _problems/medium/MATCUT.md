---
category_name: medium
problem_code: MATCUT
problem_name: 'Mathison and the cubic tree'
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
max_timelimit: '1 - 4.5'
source_sizelimit: '50000'
problem_author: alexvaleanu
problem_tester: kingofnumbers
date_added: 23-08-2017
tags:
    - alexvaleanu
    - hard
    - hashing
    - ltime51
editorial_url: 'https://discuss.codechef.com/problems/MATCUT'
time:
    view_start_date: 1503768600
    submit_start_date: 1503768600
    visible_start_date: 1503768600
    end_date: 1735669800
    current: 1514816592
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME51/mandarin/MATCUT.pdf), [russian](http://www.codechef.com/download/translated/LTIME51/russian/MATCUT.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME51/vietnamese/MATCUT.pdf) as well.

 After playing board games, buying letters, and shuffling decks, Mathison has finally decided to study. He opens his favorite book, [CLRS](https://mitpress.mit.edu/books/introduction-algorithms), and decides to solve a graph problem. The problem is described below and you can find it by its number, 25.1-11, on page 693 (3rd edition only).

 You are given a tree with **N** nodes where each node has a value associated with it.

 Define **PROD**(**u**, **v**) to be the product of all values on the path from node **u** to node **v**.

 The problem is to find the **longest path** (**u**, **v**) such that **PROD**(**u**, **v**) is a **cubic number** (i.e. there is some natural number k such that k3 = **PROD**(**u**, **v**)).

 Mathison has no idea how to solve this problem so he asks you for help! 
 Given **T** instances of this task, can you find the answer for each one of them so Mathison can proceed to the next chapter?

### Input

 The first line contains the number of tests, **T**.

 The description of a test starts with one line that contains the number of nodes, **N**.

 The second line contains **N** space-separated integers, representing the values of the nodes.

 Each of the following **N-1** lines contain a single pair of integers **u**, **v**, representing an edge from **u** to **v**.

### Output

 The output file must contain **T** lines, each one containing the answer (i.e. the longest path that generates a cubic number) for the corresponding test. If there's no such path then output **-1** instead.

### Constraints

- 1 ≤ **T** ≤ 5000
- 1 ≤ **N** ≤ 100,000 (i.e. 105)
- 1 ≤ **valuex** ≤ 1,000,000 (i.e. 106)

### Subtaks

**Subtask #1** (10 points):

- 1 ≤ **T** ≤ 5000
- 1 ≤ **N** ≤ 10
- All **values** are ≤ 50
- **TL** = 1s

**Subtask #2** (25 points):

- 1 ≤ **T** ≤ 50
- 1 ≤ **N** ≤ 300
- **TL** = 2s

**Subtask #3** (25 points):

- The **sum** of all **N**s is ≤ 300,000
- All **values** are ≤ 150
- **TL** = 3.5s

**Subtask #4** (40 points):

- The **sum** of all **N**s is ≤ 300,000
- Original constraints for **N** and **valuex.**
- **TL** = 4.5s

### Example

<pre><b>Input:</b>
4
10
525 1210 15 6 40 22 441 35 220 121
2 1
1 3
7 3
2 5
2 4
5 8
6 5
9 5
9 10
3
2 3 5
1 2
2 3
5
2 4 2 2 8
1 2
1 3
3 4
5 4
2
125 3
1 2

<b>Output:</b>
3
-1
4
1

</pre>### Explanation
<pre>
First test
<img height="70%" src="https://image.ibb.co/eSkERk/tree.png" width="70%"></img>

There is only one path that generates a cubic number: 2 → 5 → 9; 1210 × 40 × 220 = 10648000 = 220<sup>3</sup>
There are 3 nodes in this path so the answer is 3.

Second test
There is no path that generates a cubic number so the answer is -1.

Third test
There are two paths that generate a cubic number: 1 → 2 and 1 → 3 → 4 → 5.
The second one is longer so the answer is 4.

Fourth test
There is only one path that generates a cubic number and it contains only one node.

</pre>