---
category_name: medium
problem_code: SHUFFL
problem_name: Shuffling
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: alex_2oo8
date_added: 20-11-2017
tags:
    - easy
    - ltime54
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/SHUFFL'
time:
    view_start_date: 1511629200
    submit_start_date: 1511629200
    visible_start_date: 1511629200
    end_date: 1735669800
    current: 1514816326
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME54/mandarin/SHUFFL.pdf), [Russian](http://www.codechef.com/download/translated/LTIME54/russian/SHUFFL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME54/vietnamese/SHUFFL.pdf) as well.

Chef simulating the next process, imagine that we have an array **A** = {**1**, **2**, ..., **M**}. Split it into two arrays with equal size with odd and even indexes from it. After that let's erase in each array numbers on the place \[**S**\***X**/**Y**\], where **S** denoting the size of array and merge these arrays(the first element of the second array will be after the last element of the first array), after the first operation **A** will contain exactly **M**-2 elements after that, after the second operations **M**-4 and so on. Chef making this procedure until **A** has more than **2** elements. In the end he wants to know the value of bitwise XOR elements that remain. He needs your help! ### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains three non-negative integers **M**, **X** and **Y**.


### Output

Output in a single line the value of bitwise XOR of two elements that remain in the array **A** after **M**/2-1 operations split/merge as described above. 
### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **M** ≤ **106**
- **M** is even
- 0 ≤ **X** Y ≤ **106**
- Sum of **M** over all test cases ≤ **5\*106**

### Subtasks

- **Subtask #1: (30 points)**  Sum of **M** over all test cases ≤ **104**
- **Subtask #2: (10 points)**  **X** = 0
- **Subtask #3: (60 points)**  Original constraints

### Example

<pre><b>Input:</b>
1
6 1 2

<b>Output:</b>
4
</pre>
### Explanation

**Example case 1.** Initially we have A = {1, 2, 3, 4, 5, 6}. After splitting in two arrays we will have A' = {1, 3, 5} and B' = {2, 4, 6}. Let's erase from 0-indexed A' and B' elements with index = \[3\*1/2\]=1(3 and 4 respectively). After that merge A' and B' -> A = {1, 5, 2, 6}, split A once again in A' = {1, 2} and B' = {5, 6} and erase elements with index = \[2\*1/2\]=1(2 and 6 respectively), merge arrays A' and B' -> A = {1, 5}. Answer is bitwise XOR of 1 and 5 = 4.
