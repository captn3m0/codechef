---
category_name: easy
problem_code: PALHAM
problem_name: 'Hasan and boring classes'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
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
problem_author: kingofnumbers
problem_tester: amrmahmoud
date_added: 26-05-2017
tags:
    - combinatorics
    - cook88
    - kingofnumbers
    - kingofnumbers
    - likecs
    - medium
editorial_url: 'https://discuss.codechef.com/problems/PALHAM'
time:
    view_start_date: 1511116200
    submit_start_date: 1511116200
    visible_start_date: 1511116200
    end_date: 1735669800
    current: 1514816007
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK88/mandarin/PALHAM.pdf), [Russian](http://www.codechef.com/download/translated/COOK88/russian/PALHAM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK88/vietnamese/PALHAM.pdf) as well.

Hasan is a computer science student, he likes his study field, especially programming and algorithms, but he doesn’t like attending classes at all since they are very boring, especially that the quality of education in his college is extremely low, but sometimes he is forced to attend in order to maintain his attendance rate otherwise he will be prevented from doing final exams!
 
Currently Hasan is attending `communication skills` class and he is now feeling very bored especially that he thinks such course should not belong to a computer science program, luckily he remembered a problem that one of his friends has given him so he decided to spend the time thinking about it, the problem states:

Given a string S of length N of lower English letters, find how many strings T exists of length N of lower English letters such that T is palindrome and hamming distance between T and S is at most K. since the answer is large find the remainder modulo 109 + 7

Since you also don’t like `communication skills` classes you decided to solve this problem too.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

each test-case is described with two lines, the first line of each test-case contains two integers **N** and **K**.

The second line of each test-case will contains the string S of length N.

### Output

For each test case, output a single line containing the answer to the test-case.

### Constraints

- **1** ≤ **T** ≤ **10,000**
- **1** ≤ **N** ≤ **300,000**
- **1** ≤ sum of **N** in all test-cases ≤ **1,000,000**
- 0 ≤ **K** ≤ **N**
- String S will consist of English lower letters.

### Example

<pre><b>Input:</b>
2
3 2
abc
3 1
abc

<b>Output:</b>
76
2

</pre>### Explanation

in second test-case the only possible strings are "aba" and "cbc"
