---
category_name: medium
problem_code: COOKFOOD
problem_name: 'Cooking dishes'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: utkarsh_lath
problem_tester: Rubanenko‎
date_added: 12-07-2013
tags:
    - ltime02
    - simple
    - utkarsh_lath
editorial_url: 'http://discuss.codechef.com/problems/COOKFOOD'
time:
    view_start_date: 1375002000
    submit_start_date: 1375002000
    visible_start_date: 1375002000
    end_date: 1735669800
    current: 1493557603
layout: problem
---
All submissions for this problem are available.As you might know, cooking is the process of taking a food item and subjecting it to various processes(like heating, roasting, baking etc).
A food item gets prepared after it has been subjected to **exactly N processes**.
The **order in which the processes are applied matters**(heating and then baking is different from baking and then heating). Also, the same processes cannot be aplied twice in succession. For example, heating → baking → heating is allowed, but heating → heating → baking is not allowed because 'heating' comes twice in succession.

Any given sequence **A1, A2, A3, ... AN** of **N** processes can be used to cook a food item if and only if **Ai ≠ Ai+1** for all **1 ≤ i ≤ N-1**.

The chefs kitchen has got **K** equipments for **K** different processes.

Chef has to cook two dishes in parallel.
This means that if the first dish is prepared by applying processes **A1, A2, A3, ... AN** in this order, and the second dish made by processes **B1, B2, B3, ... BN**, then **Ai ≠ Bi for any 1 ≤ i ≤ N**, because otherwise chef would need two equipments for the process Ai.

Needless to say, 1 ≤ Ai, Bi ≤ K, no two consecutive elements of **A** are same, and no two consecutive elements of **B** are same.

Given N, K your task is to find the number of ways in which in which he can prepare the two dishes. Since the number of ways can be very huge, you have to report it modulo 1000000007.

###  Input Description

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
Each test case is described by line containing two space separated integers, **N** and **K** as per the problem description.

###  Output Description 

For each Test case, output a separate line containing the answer modulo 1000000007.

### Sample Input

3

2 2

2 3

1 3
/>/>/>/>

### Sample Output

2

18

6
/>/>/>

### Explanation

For first test case, there are two ways:
a) A = {1, 2} and B = {2, 1} and b) A = {2, 1} and B = {1,2}.


For third test case, A and B are of length 1. A0 can take three different values and for each value of A0, B0 can take any of the other two values./>

### Constraints

- **T** ≤ 100
- 1 ≤ **N, K** ≤ 109

### Subtask 1 (30 points): 

**N**, **K** ≤ 5

### Subtask 2 (20 points):

**N**, **K** ≤ 10000

the answer(without taking modulo 1000000007) will be at most 104./>

### Subtask 3 (25 points): 

**N**, **K** ≤ 10000

### Subtask 4 (25 points): 

_No special constraints_
