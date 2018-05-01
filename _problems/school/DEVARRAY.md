---
category_name: school
problem_code: DEVARRAY
problem_name: 'Devu and an Array'
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
problem_author: admin2
problem_tester: iscsi
date_added: 17-05-2016
tags:
    - admin2
    - basic
    - cakewalk
    - june16
editorial_url: 'http://discuss.codechef.com/problems/DEVARRAY'
time:
    view_start_date: 1465983000
    submit_start_date: 1465983000
    visible_start_date: 1465983000
    end_date: 1735669800
    current: 1492506728
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE16/mandarin/DEVARRAY.pdf), [Russian](http://www.codechef.com/download/translated/JUNE16/russian/DEVARRAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE16/vietnamese/DEVARRAY.pdf) as well.

Devu has an array **A** consisting of **N** positive integers. He would like to perform following operation on array.

- Pick some two elements **a, b** in the array (**a** could be same as **b**, but their corresponding indices in the array should not be same). Remove both the elements **a** and **b** and instead add a number **x** such that **x** lies between **min(a, b)** and **max(a, b)**, both inclusive, (i.e. **min(a, b) ≤ x ≤ max(a, b))**.

Now, as you know after applying the above operation **N - 1** times, Devu will end up with a single number in the array. He is wondering whether it is possible to do the operations in such a way that he ends up a number **t**.

He asks your help in answering **Q** such queries, each of them will contain an integer **t** and you have to tell whether it is possible to end up **t**.

### Input

There is only one test case per test file.

First line of the input contains two space separated integers **N, Q** denoting number of elements in **A** and number of queries for which Devu asks your help, respectively

Second line contains **N** space separated integers denoting the content of array **A**.

Each of the next **Q** lines, will contain a single integer **t** corresponding to the query.

### Output

Output **Q** lines, each containing "Yes" or "No" (both without quotes) corresponding to the answer of corresponding query.

### Constraints

- 1 ≤ **N, Q** ≤ **105**
- 0 ≤ **t** ≤ **109**

### Subtasks

**Subtask #1 : 30 points**

- 1 ≤ **Ai** ≤ **2**

**Subtask #2 : 70 points**

- 1 ≤ **Ai** ≤ **109**

### Example

<pre><b>Input 1:</b>
1 2
1
1
2

<b>Output:</b>
Yes
No

<b>Input 2:</b>
2 4
1 3
1
2
3
4

<b>Output:</b>
Yes
Yes
Yes
No
</pre>### Explanation

**In the first example**, Devu can't apply any operation. So the final element in the array will be 1 itself.

**In the second example**, Devu can replace 1 and 3 with any of the numbers among 1, 2, 3. Hence final element of the array could be 1, 2 or 3.
