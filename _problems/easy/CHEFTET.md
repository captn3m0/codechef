---
category_name: easy
problem_code: CHEFTET
problem_name: 'Chef and Tetris'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: mugurelionut
date_added: 16-10-2015
tags:
    - berezin
    - july16
    - simple
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFTET'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493558125
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/CHEFTET.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/CHEFTET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFTET.pdf) as well.

Chef loves Tetris. He keeps on playing Tetris all the time. Today Chef's mother wanted to him play something else and brought an array for her son. That is why Chef now decided to play Tetris with arrays. Here are the rules of the game:

- Chef has an array **A** consisting of **N** positive integers. This is a base array.
- Chef has an array **B** consisting of **N** positive integers. He placed this array directly above the array **A**. Imagine that array **B** is falling on array **A**, such that number **Bi** is directly above the number **Ai** initially.
- If element **Bi** falls on **Ai**, **Ai** gets increased by **Bi**.
- Each element **Bi** can be dropped by Chef on either **Ai-1**, **Ai** or **Ai+1**.
- Chef can't drop element out of array (for example he can't drop **B0** on **A-1**).
- Chef wants all the elements of array **A** to become equal, and looking for the biggest possible value he can get.

Please help Chef in enjoying the game!!

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of elements in both arrays.
- The second line contains **N** space-separated integers **B1**, **B2**, ..., **BN** denoting the elements of the falling array.
- The third line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the elements of the base array.

### Output

- For each test case, output a single line containing a biggest integer Chef can get for all elements of array **A** or **-1** if it is impossible.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **10^4**
- **1** ≤ **Ai** ≤ **106**
- **1** ≤ **Bi** ≤ **106**

### Subtasks

- Subtask **N** ≤ **15**. Points: **30**
- Subtask **N** ≤ **104**. Points: **70**

### Example

```
<b>Input:</b>
3
1
10
20
4
15 7 10 10
6 14 21 1
3
1 100 3
1 2 3

<b>Output:</b>
30
21
-1

```
### Explanation

**Example case 1.**
The only option in first example is to make **10** fall on **20**. As we have only one element condition of equality is satisfied.

**Example case 2.**
Here Chef makes **15** fall on **6**, **7** fall on **14**, an then both elements with value **10** should fall on **1**. Then all elements will become **21**.

**Example case 3.**
There is no way for Chef to make all elements of a base array equal.