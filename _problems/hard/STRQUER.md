---
category_name: hard
problem_code: STRQUER
problem_name: 'Strange Queries'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: alex_2oo8
date_added: 20-11-2017
tags:
    - ltime54
    - medium
    - mgch
    - treap
editorial_url: 'https://discuss.codechef.com/problems/STRQUER'
time:
    view_start_date: 1511629200
    submit_start_date: 1511629200
    visible_start_date: 1511629200
    end_date: 1735669800
    current: 1514816843
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME54/mandarin/STRQUER.pdf), [Russian](http://www.codechef.com/download/translated/LTIME54/russian/STRQUER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME54/vietnamese/STRQUER.pdf) as well.

Chef has a set of integers **A1**, **A2**, ..., **AN**. Define the Chef's number for the set as a minimal sum of penalties of the connections between numbers from this set(each number must be connected with at least one other number), if size of the set more or equal than **2**, and 0 otherwise. The connection between numbers **x** and **y** has a penalty equal the absolute value |**x**-**y**|. Chef can add elements in the set and remove elements from it, after every such operation he wants to know the Chef's number for his set. Please help him to solve this complicated task. ### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two positive integers **N** denoting the number of elements in the set and **Q** denoting the number of operations performed by Chef. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the set **A**, all numbers in **A** are pairwise distinct. Next **Q** lines contains two integers - **type** and **x**. **type** = 1 **x** denoting that Chef adding the number **x** in the set, it's guaranteed that **x** not in the set. **type** = 2 **x** denoting that Chef erases element **x** from it, it's guaranteed that **x** exists there.

### Output

After every add/erase operation of Chef output a Chef's number for the set **A**. ### Constraints

Should contain all the constraints on the input data that you may have. Format it like:

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N**, **Q** ≤ **105**
- **1** ≤ **Ai** , **x** ≤ **109**
- **1** ≤ **type** ≤ **2**
- Sum of **N** over all test cases ≤ **2\*105**
- Sum of **Q** over all test cases ≤ **2\*105**

### Subtasks

- **Subtask #1: (27 points)**  sum of **N** over all test cases ≤ **5\*103** and sum of **Q** over all test cases ≤ **5\*103**
- **Subtask #2: (24 points)**  sum of **N** over all test cases ≤ **5\*104** and sum of **Q** over all test cases ≤ **5\*104**
- **Subtask #3: (49 points)**  Original constraints

### Example

<pre><b>Input:</b>
1
4 4
1 7 2 4
1 3
1 6
2 1
2 7

<b>Output:</b>
5
3
3
3.
</pre>
### Explanation

**Example case 1.** After the first operation **A** will be = {1, 7, 2, 4, 3} , the Chef's number for the **A** can be computed with next connections: **1** with **2**, **2** with **3** and **7** with **4**, sum of this values |**1**-**2**|+|**2**-**3**|+|**7**-**4**|=**5**. After the second operation **A** = {1, 7, 2, 4, 3, 6}, Chef's number = |**1**-**2**|+|**4**-**3**|+|**7**-**6**| = 3. After the third operation **A** = {7, 2, 4, 3, 6}, Chef's number = |**4**-**3**|+|**2**-**3**|+|**7**-**6**| = 3

. Finally **A** = {2, 4, 3, 6} and Chef's number = |**3**-**2**|+|**6**-**4**|=3.
