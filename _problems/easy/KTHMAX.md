---
category_name: easy
problem_code: KTHMAX
problem_name: 'Kth Max Subarray'
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
problem_author: kevind
problem_tester: kevinsogo
date_added: 30-08-2016
tags:
    - kevind
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493558158
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/KTHMAX.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/KTHMAX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/KTHMAX.pdf) as well.

 You are given an array **A** of size **N**. Let us list down all the subarrays of the given array. There will be a total of **N \* (N + 1) / 2** subarrays of the given array. Let us sort each of the subarrays in descending order of the numbers in it.

Now you want to sort these subarrays in descending order. You can compare two subarrays **B**, **C**, as follows.


```

    <b>compare</b>(B, C):
        Append <b>N</b> - |B| zeros at the end of the array B.
        Append <b>N</b> - |C| zeros at the end of the array C.
        <b>for</b> i = 1 <b>to</b> <b>N</b>:
            <b>if</b> B[i] return B is less than C
            <b>if</b> B[i] > C[i]:
                <b>return</b> B is greater than C
        <b>return</b> B and C are equal.

```
You are given **M** queries asking for the maximum element in the **pth** subarray (1-based indexing).

### Input

The first line of input contains **T**, the number of test cases.

The first line of each test case contains two space separated integers **N** and **M**, denoting the array size and the number of queries respectively.

The next line contains **N** space-separated integers denoting the array elements.

Each of the next **M** lines contains a single integer - **p**.

### Output

Output a single integer corresponding to the maximum element in the **pth** subarray.

### Constraints

- **1** ≤ **Ai** ≤ **109**
- **1** ≤ **p** ≤ ****N+1****C****2****

### Subtasks

**Subtask #1 (20 points):**- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **200**
- **1** ≤ **M** ≤ **104**

**Subtask #2 (30 points):**- **1** ≤ **T** ≤ **20**
- **1** ≤ **N** ≤ **3000**
- **1** ≤ **M** ≤ **104**

**Subtask #3 (50 points):**- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **105**

### Example

```
<b>Input:</b>
<tt>1
4 2
3 1 2 4
1
5</tt>

<b>Output:</b>
<tt>4
3</tt>

```