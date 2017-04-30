---
category_name: easy
problem_code: RANKLIST
problem_name: 'Let us play with rank list'
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
problem_author: chandubaba
problem_tester: pushkarmishra
date_added: 9-01-2015
tags:
    - chandubaba
    - feb15
    - greedy
editorial_url: 'http://discuss.codechef.com/problems/RANKLIST'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493558178
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB15/mandarin/RANKLIST.pdf) and [Russian](http://www.codechef.com/download/translated/FEB15/russian/RANKLIST.pdf).

A **rank list** is a list of ranks of persons in a programming contest. Note that some of the persons might be having same rank. {1, 2}, {1, 2, 2} and {1, 1, 2, 3, 4, 4} are few examples of rank lists whereas {1, 3}, {0, 2}, {1, 2, 4} are not rank lists.
Also note that a rank list need not to be sorted e.g. {2, 2, 1} and {3, 3, 2, 1} are valid rank lists.

Mathematically, a **rank list** is an array of numbers when sorted will have the starting element as 1 and difference between any two consecutive elements less than or equal to 1.

A rank list is said to be an **ideal rank list** if no two persons gets equal rank in it.

You can convert any rank list into an ideal rank list by applying following operations. In a single operation, you can change value of any one element of the rank list to any value.

Chandan now wonders about minimum number of operations needed to convert a rank list of size **n** with sum of its element equal to **s** in to an ideal rank list. Please help Chandan find this minimum number of operations needed to create an ideal rank list.

Note that you are guaranteed that values of **n, s** will be given in such a way that there will exist a valid rank list.

### Input

First line of input will give an integer **T** denoting number of test cases.
Then for next **T** lines, each line will contain two space separated integers **n, s**.

### Output

For each test case, print a single line containing a single integer corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n** ≤ **10^5**
- **1** ≤ **s** ≤ **10^10**

### Example

```
<b>Input:</b>
4
1 1
3 6
3 5
3 3

<b>Output:</b>
0
0
1
2


```
### Explanation

**Example case 1.**
Only possible rank list in this case is {1}, As it is already an ideal rank list, hence you need zero operations.

**Example case 2.**
Only possible rank list in this case is {1 2 3}, As it is already an ideal rank list, hence you need zero operations.

**Example case 3.**
One of the possible rank list is {1 2 2}, You can convert it into an ideal rank list by changing any 2 to 3 i.e. {1, 2, 3}, hence you need one operations.

**Example case 4.**
Only possible rank list is {1 1 1}, You can convert it into an ideal rank list by changing a 1 to 2 and another 1 to 3 i.e. {1, 2, 3}, hence you need two operations.