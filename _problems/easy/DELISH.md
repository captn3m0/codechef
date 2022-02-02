---
category_name: easy
problem_code: DELISH
problem_name: 'Dessert Wizard'
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
problem_author: viv001
problem_tester: tuananh93
date_added: 30-03-2013
tags:
    - dynamic
    - june13
    - simple
    - viv001
editorial_url: 'http://discuss.codechef.com/problems/DELISH'
time:
    view_start_date: 1371462223
    submit_start_date: 1371462223
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.It's finally summer in Chefland! So our chef is looking forward to prepare some of the best "beat-the-heat" dishes to attract more customers. He summons the Wizard of Dessert to help him with one such dish.

 The wizard provides the chef with a sequence of **N** ingredients where the **ith** ingredient has a delish value of **D\[i\]**. The preparation of the dish takes place in two phases.

**Phase 1 :** The chef chooses two indices **i** and **j** and adds the ingredients **i, i+1, ..., j** to his dish. He also finds the sum of the delish value in this range i.e **D\[i\] + D\[i+1\] + ... + D\[j\]**.

**Phase 2 :** The chef chooses two more indices **k** and **l** and adds the ingredients **k, k+1, ..., l** to his dish. He also finds the sum of the delish value in this range i.e **D\[k\] + D\[k+1\] + ... + D\[l\]**. 
 

Note that **1** ≤ **i** ≤ **j** &lt; **k** ≤ **l** ≤ **N**.

The total delish value of the dish is determined by the absolute difference between the values obtained in the two phases. Obviously, the chef wants to maximize the total delish value for his dish. So, he hires you to help him.

### Input

First line of input contains an integer **T** denoting the number of test cases. For each test case, the first line contains an integer **N** denoting the number of ingredients. The next line contains **N** space separated integers where the **ith** integer represents the delish value **D\[i\]** of the **ith** ingredient.

### Output

Print the maximum delish value of the dish that the chef can get.

### Constraints

- **1** ≤ **T** ≤ **50**
- **2** ≤ **N** ≤ **10000**
- **-1000000000 (−109)** ≤ **D\[i\]** ≤ **1000000000 (109)**

### Example

<pre><b>Input:</b>
2
5
1 2 3 4 5
4
1 1 -1 -1

<b>Output:</b>
13
4
</pre>
### Explanation

**Example case 1.**

Chef can choose **i = j = 1, k = 2, l = 5**.

The delish value hence obtained is  **| (2+3+4+5) − (1) | = 13** .

**Example case 2.**

 Chef can choose **i = 1, j = 2, k = 3, l = 4**.

The delish value hence obtained is  **| ( ( −1 ) + ( −1 ) ) − ( 1 + 1 ) | = 4** .
