---
category_name: school
problem_code: CFRTEST
problem_name: 'Devu and friendship testing'
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
date_added: 11-05-2015
tags:
    - admin2
    - cakewalk
    - cook58
editorial_url: 'http://discuss.codechef.com/problems/CFRTEST'
time:
    view_start_date: 1432492200
    submit_start_date: 1432492200
    visible_start_date: 1432492200
    end_date: 1735669800
    current: 1492506750
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK58/mandarin/CFRTEST.pdf) and [Russian](http://www.codechef.com/download/translated/COOK58/russian/CFRTEST.pdf) as well.

Devu has **n** weird friends. Its his birthday today, so they thought that this is the best occasion for testing their friendship with him. They put up conditions before Devu that they will break the friendship unless he gives them a grand party on their chosen day. Formally, **i**th friend will break his friendship if he does not receive a grand party on **di**th day.

Devu despite being as rich as Gatsby, is quite frugal and can give at most one grand party daily. Also, he wants to invite only one person in a party. So he just wonders what is the maximum number of friendships he can save. Please help Devu in this tough task !!

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- First line will contain a single integer denoting **n**.
- Second line will contain **n** space separated integers where **i**th integer corresponds to the day **di**th as given in the problem.

### Output

Print a single line corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **104**
- **1** ≤ **n**  **≤ 50**
- **1** ≤ **di** **≤ 100**

### Example

<pre><b>Input:</b>
2
2
3 2
2
1 1
<b>Output:</b>
2
1
</pre>### Explanation

**Example case 1.** Devu can give party to second friend on day 2 and first friend on day 3, so he can save both his friendships.

**Example case 2.** Both the friends want a party on day 1, and as the Devu can not afford more than one party a day, so he can save only one of the friendships, so answer is 1.
