---
category_name: school
problem_code: GOODSET
problem_name: 'A Good Set'
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
problem_tester: null
date_added: 9-05-2017
tags:
    - admin2
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497283936
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/GOODSET.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/GOODSET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/GOODSET.pdf) as well.

A set of integers is called _good_ if there does not exist three distinct elements a, b, c in it such that a + b = c.

Your task is simple. Just output any _good_ set of **n** integers. All the elements in this set should be distinct and should lie between 1 and 500, both inclusive.

### Input

- The first line of the input contains an integer **T** denoting number of test cases. The descriptions of **T** test cases follow.
- The only line of each test case contains an integer **n**, denoting the size of the needed _good_ set.
### Output

For each test case, output a single line containing **n** integers denoting the elements of the _good_ set, in any order. There can be more than one possible good set, and you can output any one of them.

### Constraints

- 1 ≤ **T, n** ≤ 100

### Subtasks

- **Subtask #1 (50 points)**: 1 ≤ **T, n** ≤ 10
- **Subtask #2 (50 points)**: original constraints

### Example


<pre>
<b>Input</b>
5
1
2
3
4
5

<b>Output</b>
7
1 2
1 2 4
1 2 4 16
3 2 15 6 10

</pre>### Explanation
**Example 1 and 2.** Any set of size less than or equal to 2 is good by definition.

**Example 3 onwards.** For each pair of elements in the set, you can see that their sum doesn't exist in the set.
