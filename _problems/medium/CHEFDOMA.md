---
category_name: medium
problem_code: CHEFDOMA
problem_name: 'Chef and Dominating Subarrays'
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
problem_author: mgch
problem_tester: null
date_added: 6-02-2016
tags:
    - decomposition
    - ltime33
    - med
    - mgch
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/CHEFDOMA'
time:
    view_start_date: 1456592400
    submit_start_date: 1456592400
    visible_start_date: 1456592400
    end_date: 1735669800
    current: 1493557521
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFDOMA.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/CHEFDOMA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFDOMA.pdf) as well.

Chef likes problems with arrays. Let's call an array **V** dominating if there exists a number **x** (the dominator) whose number of occurrences is strictly greater than half the size of the array (that is, floor(|**V**|/2)).

For example, the arrays {1, 2, 1} is dominating, with the number 1 being the dominator, since half the size of the array is 1, while the number 1 occurs twice. Similarly, the array {1, 1, 1, 2} is dominating. On the other hand, the arrays {1, 2, 3} and {1, 2, 2, 1} are not dominating.

Given an array **A** consisting of **N** positive integers, you need to help Chef find the number of subarrays of **A** which are dominating.

### Input

The first line of input contains one integer **N** denoting the number of elements in the array **A**. The second line of input contains **N** space-separated integers denoting the array **A**.

### Output

Output the answer to the query in a single line.

### Constraints

- **1** ≤ **N** ≤ **5 × 105**
- **1** ≤ **Ai** ≤ **109**

### Example

<pre><b>Input:</b>
5
1 2 1 2 1

<b>Output:</b>
9

<b>Input:</b>
7
1 2 3 3 2 1 3

<b>Output:</b>
11

</pre>
### Subtasks

- **Subtask 1:**  **N** ≤ 102. **Points - 10**
- **Subtask 2:**  **N** ≤ 104. **Points - 20**
- **Subtask 3:**  **N** ≤ 105. **Points - 30**
- **Subtask 4:** Original constraints. **Points - 40**

### Explanation

Test #1:

The dominating subarrays are A\[1..1\], A\[2..2\], A\[3..3\], A\[4..4\], A\[5..5\], A\[6..6\], A\[1..3\], A\[2..4\], A\[3..5\].

Test #2:

The dominating subarrays are A\[1..1\], A\[2..2\], A\[3..3\], A\[4..4\], A\[5..5\], A\[6..6\], A\[7..7\], A\[3..4\], A\[2..4\], A\[3..5\], A\[3..7\].
