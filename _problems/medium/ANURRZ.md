---
category_name: medium
problem_code: ANURRZ
problem_name: 'Random Rudreshwar'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: xiaodao
date_added: 6-01-2015
tags:
    - anudeep2011
    - cook54
    - dynamic
    - medium
editorial_url: 'http://discuss.codechef.com/problems/ANURRZ'
time:
    view_start_date: 1421609400
    submit_start_date: 1421609400
    visible_start_date: 1421609400
    end_date: 1735669800
    current: 1493557477
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK54/mandarin/ANURRZ.pdf) and [Russian](http://www.codechef.com/download/translated/COOK54/russian/ANURRZ.pdf) as well.

### Problem description

Rudreshwar likes random numbers and random arrays. Today Rudreshwar started playing with a couple of Arrays **A** and **B**, each of size **N**.

Initially **A** is filled with zeros. Rudreshwar filled **B** with random numbers.

Rudreshwar visits each index **i** (1 <= **i** <= **N**) in random order. When at **i**, he selects another random index **j** such that **j** is greater or equal to **i**. He then increments **A\[i\]**, **A\[i+1\]**, **A\[i+2\]** ... **A\[j\]** by 1.

Finally if for any index **i**, **A\[i\]** is greater than **B\[i\]**, he then throws away that array **A**

For a given **B**, calculate the number of different arrays **A**, that Rudreshwar can end up with. Two arrays are called different if there exists an index where the arrays have different values

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. First line of each test case contains an integer **N**. Second line contains **N** space separated integers representing the array **B**

### Output

For each test case, output a single line containing the required answer modulo 1000000007.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **1000**
- **1** ≤ **B\[i\]** ≤ **N**

### Example

```
<b>Input:</b>
2
2
2 2
3
1 1 1

<b>Output:</b>
2
1

```
### Explanation

**Test case 1**

{1, 1} and {1, 2} are valid.

**Test case 2**

{1, 1, 1} is the only possible final array A.