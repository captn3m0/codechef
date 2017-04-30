---
category_name: school
problem_code: NOTINCOM
problem_name: 'Nothing in Common'
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
problem_author: xcwgf666
problem_tester: errichto
date_added: 11-01-2017
tags:
    - basic
    - cakewalk
    - ltime44
    - sets
    - xcwgf666
editorial_url: 'https://discuss.codechef.com/problems/NOTINCOM'
time:
    view_start_date: 1485622800
    submit_start_date: 1485622800
    visible_start_date: 1485622800
    end_date: 1735669800
    current: 1492506707
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME44/mandarin/NOTINCOM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME44/russian/NOTINCOM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME44/vietnamese/NOTINCOM.pdf) as well.

Alice has quarreled with Berta recently. Now she doesn't want to have anything in common with her!

Recently, they've received two collections of positive integers. The Alice's integers were **A1**, **A2**, ..., **AN**, while Berta's were **B1**, **B2**, ..., **BM**.

Now Alice wants to throw away the minimal amount of number from her collection so that their collections would have no common numbers, i.e. there won't be any number which is present in both collections. Please help Alice to find the minimal amount of numbers she would need to throw away.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integer numbers **N** and **M** denoting the amount of numbers in Alice's and Berta's collections respectively.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the numbers of Alice.

The third line contains **M** space-separated integers **B1**, **B2**, ..., **BM** denoting the numbers of Berta.

### Output

For each test case, output a single line containing the minimal amount of numbers Alice needs to throw away from her collection so that she wouldn't have any numbers in common with Berta.

### Constraints

- **1** ≤ **Ai**, **Bi** ≤ **106**
- All numbers are distinct within a single girl's collection.

### Subtasks

- **Subtask #1 (47 points)**: **T** = **25**, **1** ≤ **N, M** ≤ **1000**
- **Subtask #2 (53 points)**: **T** = **5**, **1** ≤ **N, M** ≤ **100000**

### Example

```
<b>Input:</b>
<tt>2
3 4
1 2 3
3 4 5 6
3 3
1 2 3
4 5 6</tt>

<b>Output:</b>
<tt>1
0</tt>

```
### Explanation

**Example case 1.** If Alice throws away the number **3** from her collection, she would obtain **{1, 2}** which is disjoint with **{3, 4, 5, 6}**.

**Example case 2.** Girls don't have any number in common initially. So there is no need to throw away any number.