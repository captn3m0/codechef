---
category_name: medium
problem_code: XORQUERY
problem_name: 'Chef and XOR Queries'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 18-11-2017
tags:
    - acm17kgp
    - dsu
    - kgp17rol
    - med
    - tree
    - usaxena95
    - xor
editorial_url: 'https://discuss.codechef.com/problems/XORQUERY'
time:
    view_start_date: 1515875400
    submit_start_date: 1515875400
    visible_start_date: 1515875400
    end_date: 1735669800
    current: 1525454402
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Mr. X has given the Chef an undirected tree T with **n** nodes numbered from 1 to **n**. Each edge **e**i of the tree has a non-negative integer **w**i written on it. But the edge weights are hidden from you. You have access only to the structure of the tree. ie. you know all the edges **e**i.

Mr. X. has taught Chef how to compute the function f(**u**, **v**) = Bitwise _XOR_ of all the numbers present on the edges in the unique path from **u** to **v**.

He now wants to test his disciple's understanding of this function. He tells the Chef various values of this function one by one. Since Mr. X. wants to test Chef's skills, this information could be wrong sometimes. You being good friends with the Chef have been asked to help him out to pass the test.

Total **Q** events occur each of which can be in one of the following forms:

- **1 u v r**: 
   Mr. X says that f(**u**, **v**) = **r**. For this type of event you must print: 
  - _AC_ if the given information is consistent with all the previous information that you have accepted as AC and there is _no way_ you can argue that this information is wrong. Accept this new information as correct.
  - _WA_ when you can prove that the given information is wrong and does not fit in with the previously _AC_ events.
- **2 u v**:
   Print the value of f(**u**, **v**) using only the information provided in the previously _AC_ events. 
   If it is not possible to correctly determine this value based on only previously _AC_ events print -1.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- First line of each test case contains two space separated integers **n** and **Q** denoting the number of nodes and number of events respectively.
- Each of the next **n** - 1 lines contains two space separated integers **u v** denoting that there is an edge between **u** and **v** in the tree.
- Description of **Q** events follow. Each line follows one of these two formats: 
  - **1 u v r**, denoting first type of event.
  - **2 u v**, denoting second type of event.

### Output

For each event print the answer to the event as described.

### Constraints

- **1** ≤ **T** ≤ **2000**
- **1** ≤ **n** ≤ **105**
- **1** ≤ **Q** ≤ **2 \* 105**
- **1** ≤ **u, v** ≤ **n**
- **1** ≤ sum of **n** over all the testcases ≤ **105**
- **1** ≤ sum of **Q** over all the testcases ≤ **2 \* 105**
- **0 ≤ r ≤ 2 \* 109**
- **0 ≤ wi**
- The graph represented by **ei** is a tree

### Example

<pre>
<b>Input</b>
1
4 6
1 2
2 3
3 4
1 1 1 10
1 1 2 2
1 2 3 4
1 1 3 7
2 1 3
2 3 4 

<b>Output</b>
WA
AC
AC
WA
6
-1 
</pre>### Explanation

- Event 1: f(1, 1) cannot be 10. Since there is no edge between 1 and 1, it must be 0 ⇒ _WA_
- Event 2: You cannot argue that f(1, 2) cannot be 2. Therefore you accept it ⇒ _AC_. Thus now we know that the weight of the edge between 1 and 2 is 2.
- Event 3: You cannot argue that f(2, 3) cannot be 4. Therefore you accept it ⇒ _AC_. Thus now we know that the weight of the edge between 2 and 3 is 4.
- Event 4: f(1, 3) is xor of weights of edges 1-2 and 2-3 = 2 xor 4 = 6. Given information is wrong ⇒ _WA_
- Event 5: f(1, 3) is 6 as calculated above ⇒ 6
- Event 6: f(3, 4) cannot be answered using only the above information ⇒ -1
