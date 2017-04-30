---
category_name: medium
problem_code: AHWORK
problem_name: 'Akhil And Pending Homework'
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
problem_author: amitpandeykgp
problem_tester: prateekg603
date_added: 7-05-2016
tags:
    - amitpandeykgp
    - dynamic
    - ltime36
    - strings
editorial_url: 'http://discuss.codechef.com/problems/AHWORK'
time:
    view_start_date: 1464454800
    submit_start_date: 1464454800
    visible_start_date: 1464454800
    end_date: 1735669800
    current: 1493557440
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME36/mandarin/AHWORK.pdf), [Russian](http://www.codechef.com/download/translated/LTIME36/russian/AHWORK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME36/vietnamese/AHWORK.pdf) as well.

Akhil is a professor at University of Alexia. This semester, he is taking a course on Algorithms. One day after teaching about palindrome and related algorithms, he gave the following task to his students. Students found it very easy and solved it quickly. Can you solve it too?

You are given **N** strings. Each of them will have size equal to one or two, with their characters belonging to the character set **{‘a’,’b’}**. You have to delete minimum number of strings from the above given strings such that the string obtained after concatenating the remaining strings (in the original order of appearance in the **N** strings) is a palindrome. Find out the minimum number of deletions required.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows:
- First line of each test case will contain a single integer number **N** denoting number of strings.
- Next line of each test case will contain **N** space separated strings.

### Output

- For each test case, output a single integer corresponding to the the minimum number of strings to be deleted.

### Constraints

- **1** ≤ **T** ≤ **5**

### Subtasks

12. Subtask #1 (20 points) : **1** ≤ **N** ≤ **16**
13. Subtask #2 (80 points) : **1** ≤ **N** ≤ **103**
### Example

```

<b>Input:</b>
1
4
ab a b ba

<b>Output:</b>
1

```
### Explanation

**Example case 1.** You need to delete strings either "a" or "b" (one of them), rest of the strings can be concatenated to form a palindrome, i.e. "abbba" and "ababa" respectively.