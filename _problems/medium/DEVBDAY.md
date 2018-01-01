---
category_name: medium
problem_code: DEVBDAY
problem_name: 'Devu, his friends and birthday gifts'
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
problem_author: admin2
problem_tester: null
date_added: 19-02-2015
tags:
    - admin2
    - basic
    - cook58
    - easy
editorial_url: 'http://discuss.codechef.com/problems/DEVBDAY'
time:
    view_start_date: 1432492200
    submit_start_date: 1432492200
    visible_start_date: 1432492200
    end_date: 1735669800
    current: 1493557619
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK58/mandarin/DEVBDAY.pdf) and [Russian](http://www.codechef.com/download/translated/COOK58/russian/DEVBDAY.pdf) as well.

You might have realized up to now that some of the Devu's friend are really weird. It is Devu's 22nd birthday today. His friends are coming to his home for his birthday party. Some of his friends are so shameless that instead of giving him a gift, they even ask gifts from him.

Devu has **n** friends. He wants to invite some of his friends in the party. Devu knows beforehand that **ith** friend will give a gift of **ri** rupees. If **ri** is positive, then it means that they will give a gift of |**ri**| rupees to Devu, otherwise it means that they want to receive a gift of|**ri**| rupees from Devu.

Devu's friend are really weird and they keep conditions before Devu like this : "If you invite me, you should also invite my best friend too". For **ith** person, you are given an integer **fi** denoting his best friend. It means that if Devu invites **ith** person, then he has to invite person **fi** too. Please note that best friend relationship is not bi-directional i.e. it is not necessary that if A is best friend of B, then B should be best friend of A.

You have to help Devu in choosing an optimal set of friends to invite so that the total amount of money he receives in gifts is maximum. Devu can also choose to not to invite anyone at all. Find out the maximum total amount of money Devu can have.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- First line of each test case will contain a single integer **n** denoting total number of friends of Devu.
- Second line contains **n** space separated integers denoting array **f** which describes best friend of **ith** person.
- Third line contains **n** space separated integers denoting array **r** as stated in the problem.

### Output

- For each test case, print a single line containing maximum amount of rupees he can have in the end.

### Constraints

- **1** ≤ **T** ≤ **105**
- **2 ≤ n ≤ 105**
- **-109 ≤ ri ≤ 109**
- **1 ≤ fi ≤ n**
- **fi != i**
- Sum of **n** over all the test cases will be less than or equal to **106**

### Example

<pre><b>Input:</b>
4
2
2 1
3 5
2 
2 1 
-3 5
3
2 3 2
-2 2 4
3
2 3 2
-1 -2 -3
<b>Output:</b>
8
2 
6
0

</pre>### Explanation
**Example case 1.** Both his friends are giving him gifts. So he will invite both of them to the party and will collect 8 rupees from the gifts received.

**Example case 2.** He invites both of the friends and total rupees collected will be 2 rupees. He can not invite 2nd friend only, because 1st person is a best friend of 2nd person and he must be invited too if 2nd friend is invited.

**Example case 3.** He will invite second and third of his friends. So total rupees collected will be 6 rupees.

**Example case 4.** In this case, all of his friends want to receive gifts from Devu. It is better for him to invite none. So he will receive total 0 rupees.
